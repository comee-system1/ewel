<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_ESA.php");
require_once(D_PATH_HOME."init/esaData/answer.php");

$obj = new BAmethod();
$esa  = new esamethod();


//ページ設定
//pageFlgはページャーを選択した時(BMS)
$pager = 1;
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}


//最大のページ数
$max = 12;
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $esa->getTime($where);

$time = $times[ 'minute_rest' ];
if($_REQUEST[ 'time' ]){
	$time = $_REQUEST[ 'time' ];
}else{
	$time = $time*60;
}

$where[ 'test_id' ] = $times[ 'id' ];
//--------------------------------
//回答登録
//--------------------------------
//直前のページ
$pkey = $_REQUEST[ 'pager' ];
if(count($_REQUEST[ 'ans' ][$pkey])){
	$sec = array();
	if(count($_REQUEST[ 'ans' ][$pkey])){
		foreach($_REQUEST[ 'ans' ][$pkey] as $key=>$val){
			$s = "ans".$key;
			$sec[$s] = $val;
		}
	}
	$esa->setEaRst($sec,$where);
	
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
	$esa->setEa($where);
	//回答データを0にする
	$esa->ansClear($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
//			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
//			exit();
		}
	}
}



//次のページ
//pageFlgはページャーを選択した時(BMS)
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	//エラーチェック
	$err = "";

	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		$tdetail = $obj->getTestPaper($where);


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
		//最終表示画面判定
		$fin_disp = $test[ 'fin_disp' ];
		$temp = "Fin";

		
	}
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $esa->getEa($where);
//var_dump($tdetail);

//ガイドページの時
//受検状態の確認
if($temp == "Fin"){
	//回答情報計算
	$total = 0;
	foreach($array_answer as $key=>$val){
		$kes = "ans".$key;
		if($tdetail[$kes] == $val){
			$total += 1;
		}
	}
}else
if($temp == "guide"){
	$status = $esa->getTestStatus($where);
	$exam_state = $status[ 'exam_state' ];
}else{
	//ガイダンスページ以外
	$temp = "page".$pager;
}

$nextPage = $pager+1;
$backPage = $pager-1;


//各ページで利用する回答
if($pager == 1 || $pager == 2){
	$answerlist = array(
					1=>"a",
					2=>"b",
					3=>"c",
					4=>"d",
					5=>"e",
					6=>"f",
					7=>"g",
					8=>"h",
					9=>"i",
					10=>"j",
					11=>"k",
					12=>"m",
				);
}
if($pager == 10){
	$answerlist = array(
					1=>"a",
					2=>"b",
					3=>"c",
					4=>"d",
					5=>"e"
				);
}
if($pager == 11 || $pager==12){
	$answerlist = array(
					1=>"a",
					2=>"b",
					3=>"c",
					4=>"d",
					5=>"e",
					6=>"f",
					7=>"g",
					8=>"h",
					9=>"i",
					10=>"j",
				);
	if($pager == 12){
		$qlist = array(
				 61=>"【　 　】は、インフラ投資等に対し長期に資金を供給する機関である。"
				,62=>"現代の経営資源は、「ヒト」「モノ」「カネ」に加え「【　 　】」も重要視される。"
				,63=>"金やプラチナなど貴金属類の国際取引単位である1トロイオンスは【　 　】gである。"
				,64=>"原油の国際取引単位である1バレルは【　 　】リットルである。"
				,65=>"穀物の国際取引単位である1ブッシェルは【　 　】kgである。"
			);
	}else{
		$qlist = array(
				 56=>"【　 　】は、地球レベルの問題を解決する機関である。"
				,57=>"【　 　】は、モノやサービスの貿易について2国間のトラブルを処理する機関である。"
				,58=>"【　 　】は、先進34カ国が責務として調査、国家のコンサルテーションを行う機関である。"
				,59=>"【　 　】とは、21の国と地域が加盟する「アジア太平洋経済協力会議」である。"
				,60=>"【　 　】とは、国の危機的状況に対して緊急支援する「国際通貨基金」である。"
			);
	}
}
?>