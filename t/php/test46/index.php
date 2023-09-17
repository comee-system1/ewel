<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_MMS.php");

$obj = new BAmethod();
$mms  = new MMSmethod();


//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}

//最大のページ数
$max = 11;
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $mms->getTime($where);
$time = $times[ 'minute_rest' ];
if($_REQUEST[ 'time' ]){
	$time = $_REQUEST[ 'time' ];
}else{
	$time = $time*60;
}
$where[ 'test_id' ] = $times[ 'id' ];

//スタート時間の登録
//初回ページ

if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$mms->setEa($where);
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
	
	$err = array();
	if($_REQUEST[ 'nextPage' ] == 2){
		if(!$_REQUEST[ 'company_name'       ]) $err[1] = "<p class='errmsg'>社名が入力されていません</p>";
		if(!$_REQUEST[ 'bussiness_category' ]) $err[2] = "<p class='errmsg'>業種が入力されていません</p>";
		if(!$_REQUEST[ 'sales'              ]) $err[3] = "<p class='errmsg'>売上が入力されていません</p>";
		if(!$_REQUEST[ 'employee'           ]) $err[4] = "<p class='errmsg'>従業員数が入力されていません</p>";
		if(!$_REQUEST[ 'busyo'              ]) $err[5] = "<p class='errmsg'>部署名が入力されていません</p>";
		if(!$_REQUEST[ 'position'           ]) $err[6] = "<p class='errmsg'>職位が入力されていません</p>";
		if(!$_REQUEST[ 'ques1'              ]) $err[7] = "<p class='errmsg'>上記選択されていません</p>";
		if(!$_REQUEST[ 'ques2'              ]) $err[8] = "<p class='errmsg'>上記選択されていません</p>";
	}
	if($_REQUEST[ 'nextPage' ] == 3){
		for($i=1;$i<=5;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 4){
		for($i=6;$i<=10;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		for($i=11;$i<=15;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 6){
		for($i=16;$i<=20;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 7){
		for($i=21;$i<=25;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 8){
		for($i=26;$i<=30;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 9){
		for($i=31;$i<=35;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 10){
		for($i=36;$i<=40;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 11){
		for($i=41;$i<=45;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 12){
		for($i=46;$i<=50;$i++){
			$keys = "ans".$i;
			if(!$_REQUEST[ $keys ]) $err[$i] = "<p class='errmsg'>回答が未選択です。</p>";
		}
	}
	//回答登録
	if($max+1 >= $_REQUEST[ 'nextPage' ]){
		$sec = array();
		$nextPage = $_REQUEST[ 'nextPage' ];
		switch($nextPage){
			case "2":
				$sec[ 'company_name'       ] = $_REQUEST[ 'company_name'       ];
				$sec[ 'bussiness_category' ] = $_REQUEST[ 'bussiness_category' ];
				$sec[ 'sales'              ] = $_REQUEST[ 'sales'              ];
				$sec[ 'employee'           ] = $_REQUEST[ 'employee'           ];
				$sec[ 'busyo'              ] = $_REQUEST[ 'busyo'              ];
				$sec[ 'position'           ] = $_REQUEST[ 'position'           ];
				$sec[ 'ques1'              ] = $_REQUEST[ 'ques1'              ];
				$sec[ 'ques2'              ] = $_REQUEST[ 'ques2'              ];
				if($_REQUEST[ 'ques1' ] == 7){
					$sec[ 'q1txt'              ] = $_REQUEST[ 'q1txt'              ];
				}else{
					$sec[ 'q1txt'              ] = "";
				}
				if($_REQUEST[ 'ques2' ] == 10){
					$sec[ 'q2txt'              ] = $_REQUEST[ 'q2txt'              ];
				}else{
					$sec[ 'q2txt'              ] = "";
				}
			break;
			case "3":
				for($i=1;$i<=5;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "4":
				for($i=6;$i<=10;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "5":
				for($i=11;$i<=15;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "6":
				for($i=16;$i<=20;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "7":
				for($i=21;$i<=25;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "8":
				for($i=26;$i<=30;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "9":
				for($i=31;$i<=35;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "10":
				for($i=36;$i<=40;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "11":
				for($i=41;$i<=45;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
			case "12":
				for($i=46;$i<=50;$i++){
					$keys = "ans".$i;
					$sec[ $keys ] = $_REQUEST[ $keys ];
				}
			break;
		}

		$table = "mms_score ";
		$mms->setMMSAns($table,$sec,$where);
		
		$temp = "page".$_REQUEST[ 'nextPage' ];
	}
	if($err){
		//エラーがあった時はコチラ
		$pager  = $_REQUEST[ 'nextPage' ]-1;
		if($pager == 1) $pager = "";
		$temp   = "page".$pager;
	}elseif($max < $_REQUEST[ 'nextPage' ]){

/*
		include_once(D_PATH_HOME."/init/dpData/dpCalcData.php");
		include_once(D_PATH_HOME."/lib/keisan/functionEAS.php");
		//----------------------------
		//最終ページ
		//----------------------------
		$tdetail = $obj->getTestPaper($where);
		$update = array();
		$update[ 'where' ][ 'test_id' ] = $where[ 'test_id' ];
		$update[ 'where' ][ 'exam_id' ] = $where[ 'exam_id' ];
		list($score,$dp_id) = $ea->getScore($update);

		
		$array_result = EAS($array_dp,$array_dp_lv,$score);

		$ea->setResult($array_result,$dp_id);
*/
		
		$mms->setResult($where);
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
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
	if($_REQUEST[ 'backPage' ] >= 2){
		$temp = "page".$_REQUEST[ 'backPage' ];
	}
}


//テストデータ取得
$tdetail = array();
$tdetail = $mms->getmms($where);

$nextPage = $pager+1;
$backPage = $pager-1;

//var_dump($answer,$exam);
$answord[1] = "①全然できていない";
$answord[2] = "②そんなにできていない";
$answord[3] = "③まあできている";
$answord[4] = "④非常によくできている";
?>