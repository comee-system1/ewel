<?PHP
require_once(D_PATH_HOME."t/lib/include_mea.php");
$obj = new MEAmethod();
include_once("explain.php");

//where句の作成
$where = array();
if($ua){
	//$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST[tid];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;
}else{
	//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}
//テストIDの取得
$tests = $obj->getTestId($where);
$where[ 'test_id' ] = $tests[ 'test_id' ];


//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	$pager = 1;
}
//最大のページ数
$max = count($array_exam);


//スタート時間の登録
//初回ページ
//tempは簡易版
if($_REQUEST[ 'page' ] ){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
	if($temp == "guide"){
		$flg = $t->checkExamState($where);
		$obj->setMeaSet($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}

}
//テンプレートページ設定
if($temp == "page"){
	if(is_numeric($_REQUEST[ 'page' ])){
		
	}else{
		//初回ページ
		$temp = "page1";
	}
}

if($_REQUEST[ 'result' ]){
	$err = array();
	//エラーチェック
	if(!$_REQUEST[ 'answer1' ]){
		$err[1] = "設問１が未回答です。";
	}
	if($_REQUEST[ 'answer1' ] == 3){
		if(!$_REQUEST[ 'answer1_holiday' ]){
			$err[1] = "休んだ日数を入力してください。";
		}
		if(!is_numeric($_REQUEST[ 'answer1_holiday' ])){
			$err[1] = "休んだ日数は半角数字で入力してください";
		}
		if(!$_REQUEST[ 'answer1_reason' ]){
			$err[1] = "理由を入力してください。";
		}
	}
	

	if(!$_REQUEST[ 'answer2' ]){
		$err[2] = "設問２が未回答です。";
	}
	if($_REQUEST[ 'answer2' ] == 2){
		if(!$_REQUEST[ 'answer2_year' ] || !is_numeric($_REQUEST[ 'answer2_year' ]) ){
			$err[2] = "西暦年を半角数字で入力してください";
		}else
		if(!$_REQUEST[ 'answer2_month' ] || !is_numeric($_REQUEST[ 'answer2_month' ]) ){
			$err[2] = "西暦月を半角数字で入力してください";
		}else
		if($_REQUEST['answer2_month' ] &&  $_REQUEST[ 'answer2_year' ]){
			if(!checkdate($_REQUEST[ 'answer2_month' ], 1, $_REQUEST[ 'answer2_year' ]) ){
				$err[2] = "西暦に誤りがあります。";
			}
		}
		if(!$_REQUEST[ 'answer2_disease' ]){
			$err[2] = "病名・症状を入力してください。";
		}
	}

	if(!$_REQUEST[ 'answer3' ]){
		$err[3] = "設問３が未回答です。";
	}
	if($_REQUEST[ 'answer3' ] == 2){
		if(!$_REQUEST[ 'answer3_year' ] || !is_numeric($_REQUEST[ 'answer3_year' ]) ){ 
			$err[3] = "西暦年を半角数字で入力してください";
		}else
		if(!$_REQUEST[ 'answer3_month' ] || !is_numeric($_REQUEST[ 'answer3_year' ]) ){
			$err[3] = "西暦月を半角数字で入力してください";
		}else
		if($_REQUEST['answer3_month' ] &&  $_REQUEST[ 'answer3_year' ]){
			if(!checkdate($_REQUEST[ 'answer3_month' ], 1, $_REQUEST[ 'answer3_year' ]) ){
				$err[3] = "西暦に誤りがあります。";
			}
		}
		if(!$_REQUEST[ 'answer3_disease' ]){
			$err[3] = "病名・症状を入力してください。";
		}
	}
	if(!$_REQUEST[ 'answer4' ]){
		$err[4] = "設問４が未回答です。";
	}
	if($_REQUEST[ 'answer4' ] == 2){
		if(!$_REQUEST[ 'answer4_disease' ]){
			$err[4] = "希望内容を入力してください。";
		}
	}
	if(!$_REQUEST[ 'answer5' ]){
		$err[5] = "設問５が未回答です。";
	}
	
	//---------------------------------
	//登録
	//---------------------------------
	if(!count($err)){
		$set = array();
		$set = $_REQUEST;
		$set[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
		$set[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
		$set[ 'test_id'   ] = $tests[ 'test_id'  ];
		$set[ 'type'      ] = $first;
		$obj->setTest($set);
		
		//テストデータ取得
		$tdetail = $obj->getTestPaper($where);
		$s_day  = split( '/', $tdetail['exam_date'] ); 
		$s_time = split( ':', $tdetail['start_time'] ); 
		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();
		
		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;
		
		$set = array();
		$tbl = "t_testpaper";
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'exam_state' ] = 2;
		$obj->editDetail($tbl,$set,$where);
		$t->editCompleteFlg($where);
		//メール配信
		$t->sendFinMail($where);
		$temp = "fin";
	}
}

?>