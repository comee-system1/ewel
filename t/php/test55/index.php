<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_cba.php");
require_once("include_cbaQuestion.php");

$obj = new BAmethod();
$cba  = new cbamethod();



//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}



//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;
//受検時間の取得
$times = $cba->getTime($where);
$where[ 'test_id' ] = $times[ 'id' ];
$answerkey = $cba->getEa($where);
if($_REQUEST[ 'back' ]){
	$pager = sprintf("%d",$_REQUEST[ 'nextPage' ]-1);
}else{
	$pager = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);
}
//スタート時間の登録
//初回ページ

if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$cba->setEa($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
}



//次のページ
if($_REQUEST[ 'next' ]){
	$err = 0;
	$clum = array();
	//エラーチェック

	for($i=1;$i<=39;$i++){
		$key = "ans".$i;
		if( $_REQUEST[$key] )$clum[$key] = $_REQUEST[$key];
	}
	//---------------------------------------------
	//
	//回答登録
	//
	//---------------------------------------------
	$result = $cba->setEaRst($clum,$where);
}

//回答データ取得
$answer = $cba->getEa($where);
if($_REQUEST[ 'nextPage' ] >= 39){
	
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
	$set[ 'level'      ] = $lv;
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
	$fin_disp = $test[ 'fin_disp' ];
	
	$temp = "Fin";
}



?>