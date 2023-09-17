<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_NSPE1.php");
require_once("include_ELANQuestion.php");

$obj = new BAmethod();
$nspe  = new NSPE1method();



//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST['nextPage'];
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
$times = $nspe->getTime($where);
$where[ 'test_id' ] = $times[ 'id' ];
$answerkey = $nspe->getEa($where);
if($answer[ 'nowpage' ] != 0 && $answerkey[ 'nowpage' ] > $pager){
	$pager = $answerkey[ 'nowpage' ];
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
	$nspe->setEa($where);
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

//回答ページよう解説ページテンプレ選択
if($_REQUEST[ 'interpret' ] == "on"){
	$temp = "interpret";
	$pager = $_REQUEST[ 'pager' ];
}

//次のページ
if($_REQUEST[ 'next' ]){
	$err = 0;
	$clum = array();
	//エラーチェック
	switch($pager){

		case "7":
			$key = "ans7";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "6":
			$key = "ans6";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "5":
			$key = "ans5";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "4":
			$key = "ans4";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "3":
			$key = "ans3";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "2":
			$key = "ans2";
			if($_REQUEST[$key]) $clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
		case "1":
			$key = "ans1";
			if( $_REQUEST[$key] )$clum[$key] = $_REQUEST[$key];
			$clum['nowpage'] = $pager;
		break;
	}
	//結果表示用resultPage
	if($_REQUEST[ 'interpretationPage' ]){
		$temp = "interpretationPage";
	}

	//---------------------------------------------
	//
	//回答登録
	//
	//---------------------------------------------

	
	$result = $nspe->setEaRst($clum,$where);

}

//回答データ取得
$answer = $nspe->getEa($where);

//検査結果回答一覧画面
if($pager == 8 || $fin){
	$temp = "answerList";
}
$i = 1;
//正解不正解よう配列
foreach($array_answer as $key=>$val){
	if($val == $answer[ $key ]){
		$array_collect[$i] = true;
		$collect++;
	}else{
		$array_collect[$i] = false;
	}
	$i++;
}
$persent = ($collect/7)*100;
	//解答登録
	$clum = [];
	$clum['collect'] = $collect;
	$nspe->setEaRst($clum,$where);
if($_REQUEST[ 'fin' ]){

	if($collect >= 6){

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
	}
	$temp = "Fin";
}



?>