<?PHP
require_once("../init/tensaku.php");
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_CRT.php");
define('FPDF_FONTPATH','../font/');
require('../mbfpdf.php');

$obj = new BAmethod();
$crt  = new CRTmethod();
//麻生の時テンプレートを読むとき利用
$testtype = 44;



//-----------------------------
//設問カテゴリから質問選択情報
//取得
//----------------------------
if($_REQUEST[ 'flg' ] == "category"){
	$ctg = $_REQUEST[ 'category' ];
	$category = $array_tensaku[ $ctg ];
	$html = "";
	foreach($category as $key=>$val){
		$html .= "<div class='f21' >■".$val."</div>";
		foreach($array_tensaku_question[$key] as $k=>$v){
			$html .= "<div class='qDiv' >";
			$html .= "<input type='checkbox' name='question[".$key."][".$k."]' value='on' class='checkbox' ><span>".$v."</span><br />";
			$html .= "</div>";
		}
	}
	echo $html;
	exit();
}


//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得 IDの取得
$baseData = $crt->getBaseData($where);
$where[ 'test_id' ] = $baseData[ 'id' ];
//設問カテゴリ取得
$category = explode(";",$baseData[ 'array_tensaku_title_status' ]);
//質問内容取得
$questionList = explode(";",$baseData[ 'array_tensaku_text' ]);
//制限時間取得
$limits = explode(";",$baseData[ 'tensaku_limit' ]);


//入力画面
$data = $crt->getCrtData($where);
$id             = $data[ 'id' ];
$tensaku_number = $data[ 'tensaku_number' ];

/*
//２回目添削からディレクトリを指定する
if($tensaku_number == 2){
	$testdir = "second";
}
*/
//２回目以降フラグ
if($tensaku_number == 2){
	//すべてcountを2回目に変更
	$table = "crt_result";
	$edit = array();
	$edit[ 'where' ][ 'crt_id'        ] = $id;
	$edit[ 'where' ][ 'counts'        ] = 1;
	$edit[ 'edit'  ][ 'counts'        ] = 2;
	$crt->editResultData($table,$edit);
	$tenFlg = true;
	$testdir  = "second";
}

//完了ボタン選択
if($_REQUEST[ 'flg' ] == "finish"){
	//添削依頼を行う
	$table = "crt_member";
	$edit = array();
	$edit[ 'where' ][ 'id' ] = $id;
	$edit[ 'edit'  ][ 'tensaku_flg' ] = 1;
	$flg = $crt->editResultData($table,$edit);
	//添削者情報取得
	$tensaku = $crt->getTestpaper($where);
	//添削者にお知らせメール
	$crt->sendTensaku($tensaku,1);
	exit();
}



//登録状態確認
//現在の登録件数取得
//既に登録してあればこちら$data[ 'tline1' ]
if($_REQUEST[ 'input' ] || $data[ 'tline1' ]){
	//データ保存
	if($_REQUEST[ 'flg' ] == "save"){
		$table = "crt_result";
		$edit = array();
		$edit[ 'where' ][ 'crt_id'        ] = $id;
		$edit[ 'where' ][ 'tensaku_id'    ] = $_REQUEST[ 'tid' ];
		if($tensaku_number == 2){
		
			$edit[ 'edit'  ][ 'counts'        ] = 2;
			$edit[ 'edit'  ][ 'question_text2' ] = $_REQUEST[ 'text'  ];
			$edit[ 'edit'  ][ 'advice_text2'   ] = $_REQUEST[ 'atext' ];
			$chkKey = "question_text2";
			$counts = 2;
		}else{
			$edit[ 'edit'  ][ 'counts'        ] = 1;
			$edit[ 'edit'  ][ 'question_text' ] = $_REQUEST[ 'text'  ];
			$edit[ 'edit'  ][ 'worry_text'    ] = $_REQUEST[ 'wtext' ];
			$edit[ 'edit'  ][ 'advice_text'   ] = $_REQUEST[ 'atext' ];
			$chkKey = "question_text";
			$counts = 1;
		}
		$flgs = $crt->editResultData($table,$edit);
		//テスト結果確認
		//すべて受検が終わったら完了ボタンを表示にする
		$fwhere = array();
		$fwhere[ 'crt_id' ] = $id;
		$fwhere[ 'counts' ] = $counts;
		//空欄のデータ数がかえってくる
		$fin = $crt->checkResultData($fwhere,$chkKey);
		$finFlg = ($fin == 0)?true:false;
		$array = array();
		$array[0] = $flgs;
		$array[1] = $finFlg;
		$return = json_encode($array);
		echo $return;
		exit();
	}
	//データ取得
	if($_REQUEST[ 'flg' ] == "getData"){
		$cwhere = array();
		$cwhere[ 'crt_id'        ] = $id;
		$cwhere[ 'tensaku_id'    ] = $_REQUEST[ 'category' ];
		//$cwhere[ 'counts'        ] = 1;
		if($tensaku_number == 2){
			//入力用は通常に名前置き換え例：question_text2 as question_text
			//表示用は表示用に名前置き換え例：question_text as question_disp1
			$clum = "question_text2 as question_text
					,advice_text2 as advice_text
					,question_text as question_disp1
					,answer_text as advice_disp1
					";
			$counts = 2;
			$chkKey = "question_text2";
		}else{
			$clum = "question_text,worry_text,advice_text,order_num";
			$counts = 1;
			$chkKey = "question_text";
		}
		if(strlen($cwhere[ 'tensaku_id' ]) > 0 ){
			$rlt = $crt->getCrtDataOne($cwhere,$clum);
		}
		//テスト結果確認
		//すべて受検が終わったら完了ボタンを表示にする
		$fwhere = array();
		$fwhere[ 'crt_id' ] = $id;
		$fwhere[ 'counts' ] = $counts;
		//空欄のデータ数がかえってくる
		//chkKeyは検索データのカラム名
		//完了ボタンを表示するときにquestion_textが空欄の数を調べて
		//空欄が1つもなかったら表示する
		$fin = $crt->checkResultData($fwhere,$chkKey);

		$finFlg = ($fin == 0)?true:false;
		$rlt[ 'fin' ] = $finFlg;
		echo json_encode($rlt);
		exit();
	}
	//検査が１件でも登録してあれば登録をしない
	$tensaku_title_status = $_REQUEST[ 'tensaku_title_status' ];
	if(!$data[ 'tline1' ]){
		$num = 1;
		$question = $_REQUEST[ 'question' ];
		foreach($_REQUEST[ 'question' ] as $key=>$val){
			foreach($val as $k=>$v){
				$set = array();
				$set[ 'crt_id'               ] = $id;
				$set[ 'tensaku_title_id'     ] = $tensaku_title_status;
				$set[ 'tensaku_main_id'      ] = $key;
				$set[ 'tensaku_id'           ] = $k;
				$set[ 'order'                ] = $num;
				$crt->setCrtData($set);
				$num++;
			}
		}
	}
	$data = array();
	$data = $crt->getCrtData($where);
	$tline1 = explode(",",$data[ 'tline1' ]);
	$tline2 = explode(",",$data[ 'tline2' ]);
	$tline3 = explode(",",$data[ 'tline3' ]);

	$ques = array();
	foreach($tline3 as $key=>$val){
		$ques[$val] = $val;
	}

	foreach($array_tensaku_question as $key=>$val){
		foreach($val as $k=>$v){
			if($ques[$k]){
				$alist[ $k ] = $v;
			}
		}
	}
	$maxAll = count($alist);
	$temp = "page";
}else
if($_REQUEST[ 'page' ]){
	//スタート時間の登録
	//初回ページ
	//設問選択画面
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$crt->setStartTime($where);
	$crt->setEa($where);
	
	//カテゴリ情報取得
	
	$temp = "set";
}else{
	//初回
	//ガイダンスページ表示
/*
	$flg = $crt->checkExamState($where);
	if($flg[ 'tensaku_status' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
*/
}


//------------------------------------
//PDF出力
//-----------------------------------
if($_REQUEST[ 'pdfFlg' ] == "on"){
	$pdf = new MBFPDF('P','mm','A4');
	include_once("makePdf.php");
	
	$exam_id = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$filename = $exam_id."_".date('Y').date('m').date('d').".pdf";
	$pdf->Output($filename, 'D');
	exit();
}
//------------------------------------
//PDF出力終わり
//-----------------------------------

//------------------------------------
//全体ページ
//-----------------------------------
if($_REQUEST[ 'flg' ] == "all"){
	//全データ取得
	$allData = $crt->getAllData($data);
	if($_REQUEST[ 'print' ] == "on" ){
		$pdf = new MBFPDF('P','mm','A4');
		$allPdf = 1;
		include_once("makePdf.php");
		$exam_id = $_SESSION[ 'visit' ][ 'exam_id'  ];
		$filename = $exam_id."_".date('Y').date('m').date('d').".pdf";
		$pdf->Output($filename, 'D');
		exit();
	}
	$temp = "all";
}

//-------------------
//添削待ち画面
//-------------------
if($data[ 'tensaku_flg' ] == 1){
	$temp = "prohibit";
	if($tensaku_number == 2){
		$testdir  = "";
	}
}

//------------------------------------
//全体ページ
//-----------------------------------









//登録
if($_REQUEST[ 'completeFlg' ]){
/*
	$tbl = "crt_sec";
	$where = array();
	$where[ 'crt_id'          ] = $member[ 'id' ];
	$where[ 'tensaku_main_id' ] = $times[ 'array_tensaku_title_status' ];
	if($status[ 'tensaku_status' ] == 5){
		$where[ 'status' ] = 5;
	}else{
		$where[ 'status'          ] = 1;
	}
	$set = array();
	if($status[ 'tensaku_status' ] == 5){
		$set[ 'status' ] = 6;
	}else{
		$set[ 'status' ] = 2;
	}

	$obj->editDetail($tbl,$set,$where);

	$tbl = "t_testpaper";
	$where = array();
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
	
	$set = array();
	if($status[ 'tensaku_status' ] == 5){
		$set[ 'tensaku_status' ] = 6;
	}else{
		$set[ 'tensaku_status' ] = 2;
	}
	$obj->editDetail($tbl,$set,$where);
	
	//添削者にお知らせメール
	$crt->sendTensaku($where);
	$temp = "Fin";
*/
}
?>