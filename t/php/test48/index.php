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


if($_REQUEST[ 'flg' ] == "checkSts"){
	$html[ 'array_tensaku_question' ] = $array_tensaku_question;
	echo json_encode($html);
	exit();
}
//-----------------------------
//設問カテゴリから質問選択情報
//取得
//----------------------------
if($_REQUEST[ 'flg' ] == "category"){
	$ctg = $_REQUEST[ 'category' ];
	$category = $array_tensaku[ $ctg ];
//	$html = "";
/*
	foreach($category as $key=>$val){
		$html .= "<div class='f21' >■".$val."</div>";
		foreach($array_tensaku_question[$key] as $k=>$v){
			$html .= "<div class='qDiv' >";
			$html .= "<input type='checkbox' name='question[".$key."][".$k."]' value='on' class='checkbox' ><span>".$v."</span><br />";
			$html .= "</div>";
		}
	}
*/
	$html[ 'ctg' ] = $category;
	$html[ 'array_tensaku_question' ] = $array_tensaku_question;
	echo json_encode($html);
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
//メールアドレスの登録
if($_REQUEST[ 'mail' ]){
	$edit = array();
	$edit[ 'where' ][ 'testgrp_id' ] = $where[ 'testgrp_id'  ];
	$edit[ 'where' ][ 'type'       ] = $where[ 'type'  ];
	$edit[ 'where' ][ 'exam_id'    ] = $where[ 'exam_id'  ];
	$edit[ 'edit'  ][ 'mail'       ] = $_REQUEST[ 'mail'  ];
	$table = "t_testpaper";
	$crt->editResultData($table,$edit);
}

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


//完了ボタン選択
if($_REQUEST[ 'finish' ]){
	//添削依頼を行う
	$table = "crt_member";
	$edit = array();
	$edit[ 'where' ][ 'id' ] = $id;
	$edit[ 'edit'  ][ 'tensaku_flg' ] = 1;
	$flg = $crt->editResultData($table,$edit);
	//添削者情報取得
	$tensaku = $crt->getTestpaper($where);
	//添削者にお知らせメール
	$crt->sendTensaku($tensaku,$tensaku_number);
	$temp = "prohibit";
	//完了
	if($tensaku_number == 4){
		//----------------------------
		//最終ページ
		//----------------------------
		$tdetail = $obj->getTestPaper($where);
		//-------------------------------------
		//テスト側データ
		//------------------------------------
		$s_day  = split( '/', $tdetail['exam_date'] ); 
		$s_time = split( ':', $tdetail['start_time'] ); 

		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();

		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);
		$tbl = "t_testpaper";
		$obj->editDetail($tbl,$set,$where);
		//complete_flgの設定
		$t->editCompleteFlg($where);
		//メール配信
		$t->sendFinMail($where);
	}
}


//登録状態確認
//現在の登録件数取得
//既に登録してあればこちら$data[ 'tline1' ]
//if($_REQUEST[ 'inputFlg' ] || $data[ 'tline1' ]){
	//データ保存

	if($_REQUEST[ 'inputFlg' ] == "on"){
		$table = "crt_result";
		$edit = array();
		$edit[ 'where' ][ 'crt_id'        ] = $id;
		$edit[ 'where' ][ 'tensaku_id'    ] = $_REQUEST[ 'tensaku_id' ];
		
		$counts = $_REQUEST[ 'tensaku_number' ];
		switch($counts){
			case "4":
				$edit[ 'edit'  ][ 'counts'         ] = $counts;
				$edit[ 'edit'  ][ 'question_text4' ] = $_REQUEST[ 'question_text'  ][ $counts ];
				$edit[ 'edit'  ][ 'worry_text4'    ] = $_REQUEST[ 'worry_text'     ][ $counts ];
				$edit[ 'edit'  ][ 'advice_text4'   ] = $_REQUEST[ 'advice_text'    ][ $counts ];
				$edit[ 'edit'  ][ 'finFlg4'        ] = 1;
			break;
			case "3":
				$edit[ 'edit'  ][ 'counts'         ] = $counts;
				$edit[ 'edit'  ][ 'question_text3' ] = $_REQUEST[ 'question_text'  ][ $counts ];
				$edit[ 'edit'  ][ 'worry_text3'    ] = $_REQUEST[ 'worry_text'     ][ $counts ];
				$edit[ 'edit'  ][ 'advice_text3'   ] = $_REQUEST[ 'advice_text'    ][ $counts ];
				$edit[ 'edit'  ][ 'finFlg3'        ] = 1;
			break;
			case "2":
				$edit[ 'edit'  ][ 'counts'        ] = $counts;
				$edit[ 'edit'  ][ 'question_text2' ] = $_REQUEST[ 'question_text'  ][ $counts ];
				$edit[ 'edit'  ][ 'worry_text2'    ] = $_REQUEST[ 'worry_text'     ][ $counts ];
				$edit[ 'edit'  ][ 'advice_text2'   ] = $_REQUEST[ 'advice_text'    ][ $counts ];
				$edit[ 'edit'  ][ 'finFlg2'        ] = 1;
			break;
			default:
				$edit[ 'edit'  ][ 'counts'        ] = $counts;
				$edit[ 'edit'  ][ 'question_text' ] = $_REQUEST[ 'question_text'  ][ $counts ];
				$edit[ 'edit'  ][ 'worry_text'    ] = $_REQUEST[ 'worry_text'     ][ $counts ];
				$edit[ 'edit'  ][ 'advice_text'   ] = $_REQUEST[ 'advice_text'    ][ $counts ];
				$edit[ 'edit'  ][ 'finFlg'        ] = 1;
				$chkKey = "question_text";
			break;
		}
		$flgs = $crt->editResultData($table,$edit);

	}
	//データ取得
	if($_REQUEST[ 'flg' ] == "getData"){
		$cwhere = array();
		$cwhere[ 'crt_id'        ] = $id;
		$cwhere[ 'tensaku_id'    ] = $_REQUEST[ 'category' ];
		
		$clum = "*";
		$counts = 1;
		$chkKey = "question_text";
		
		$rlt = $crt->getCrtDataOne($cwhere,$clum);

		foreach($array_tensaku_question as $key=>$val){
			foreach($val as $k=>$v){
				$alist[ $k ] = $v;
			}
		}
		$rlt[ 'tensaku_category' ] = $alist[ $_REQUEST[ 'category' ]];

		echo json_encode($rlt);
		exit();
	}

	//検査が１件でも登録してあれば登録をしない
	$tensaku_title_status = $_REQUEST[ 'tensaku_title_status' ];
	if(!$data[ 'tline1' ]){
		$num = 1;
		$question = $_REQUEST[ 'question' ];
		if(count($_REQUEST[ 'question' ])){

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
	if($maxAll > 0){
		$temp = "page";
	}
//}

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

//終了確認フラグの取得
if($tensaku_number){
	switch($tensaku_number){
		case "1":
			$clum  = "finFlg as finFlg";
		break;
		case "2":
			$clum  = "finFlg2 as finFlg";
		break;
		case "3":
			$clum  = "finFlg3 as finFlg";
		break;
		case "4":
			$clum  = "finFlg4 as finFlg";
		break;
	}
	$chkFin = $crt->getCheckFinFlg($id,$clum);
	if(count($chkFin)){
		foreach($chkFin as $k=>$val){
			//終了した数を数える
			if($val[ 'finFlg' ] == 1) $finflg++;
		}
	}
}
if(
	$_REQUEST[ 'pagecode' ] == "now"
	|| $_REQUEST[ 'pagecode' ] == "all"
	){
	$temp = "now";
	$where = array();
	$where[ 'exam_id'    ] = $_SESSION[ 'visit' ][ 'exam_id' ];
	$where[ 'testgrp_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
	if($_REQUEST[ 'pagecode' ] == "all"){
		$rlt = $crt->getDataOne($where);
	}else{
		$where[ 'tensaku_id' ] = $_REQUEST[ 'tid' ];
		$rlt = $crt->getDataOne($where);
	}
}

//質問の全体数と解答済み数
$counter = $crt->getCounterRst($id,$tensaku_number);


?>