<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
$array_exam[1] = array(
			"1"=>array(
				"1"=>"Ａ－①"
				,"2"=>"子どもが自分から進んで物事に取り組めるよう,支えるようにしている"
				),
			"2"=>array(
				"1"=>"Ａ－②"
				,"2"=>"できる限り自分の力で物事に取り組むよう,子どもを促している"
				),
			"3"=>array(
				"1"=>"Ａ－③"
				,"2"=>"何かを選んだり,決めたりするとき,できるだけ子どもに任せるようにしている"
				),
			"4"=>array(
				"1"=>"Ａ－④"
				,"2"=>"適切な場面で,自分の欲求が抑えられるよう,子どもを支援している"
				),
			"5"=>array(
				"1"=>"Ａ－⑤"
				,"2"=>"我慢が必要な場面では,自分の力で我慢できるよう,促している"
				),
			"6"=>array(
				"1"=>"Ａ－⑥"
				,"2"=>"子どもの興味・関心をしっかり捉えて,さらに大きく伸ばすような環境づくりをしている"
				),
			"7"=>array(
				"1"=>"Ａ－⑦"
				,"2"=>"遊びや学びにおいて,いつ始めるか,いつ終えるかについて,子どもに意識させるようにしている"
				),
			"8"=>array(
				"1"=>"Ａ－⑧"
				,"2"=>"子どもが自分の感情を自らの力でコントロールできるよう,促すようにしている"
				),
			"9"=>array(
				"1"=>"Ａ－⑨"
				,"2"=>"子どもに,自分自身の成長や変化に気づかせるようにしている"
				),
			"10"=>array(
				"1"=>"Ｂ－①"
				,"2"=>"この子はだれよりも私が好きだと思う"
				),
			"11"=>array(
				"1"=>"Ｂ－②"
				,"2"=>"この子はだれよりも私のことを信頼していると思う"
				),
			"12"=>array(
				"1"=>"Ｂ－③"
				,"2"=>"この子は私と一緒にいて幸せだと思う"
				),
			"13"=>array(
				"1"=>"Ｂ－④"
				,"2"=>"この子が何を考えているか、どうしたいかはだれよりも私がわかっていると思う"
				),
			"14"=>array(
				"1"=>"Ｂ－⑤"
				,"2"=>"この子のことは信頼できる"
				),
			"15"=>array(
				"1"=>"Ｂ－⑥"
				,"2"=>"私はこの子と一緒にいて幸せだ"
				),
			"16"=>array(
				"1"=>"Ｂ－⑦"
				,"2"=>"私はこの子のことが大好きだ"
				),
			"17"=>array(
				"1"=>"Ｂ－⑧"
				,"2"=>"この子は私の気持ちがよくわかると思う"
				),
			
		);

//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	$pager = 1;
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;


//--------------------------------
//回答登録
//--------------------------------
if(count($_REQUEST[ 'sec' ])){
	foreach($_REQUEST[ 'sec' ] as $key=>$val){
		$q = "q".$key;
		$edit[ $q ] = $val;
	}
	$tbl = "t_testpaper";

	$obj->editDetail($tbl,$edit,$where);
	
}


//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$obj->setStartTime($where);
}


//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = 0;
	if($_REQUEST[ 'nextPage' ] == 2){
		for($i=1;$i<=17;$i++){
			if(!$_REQUEST[ 'sec' ][$i]){
				$err += 1;
			}
		}
	}

	
	if($err){
		//エラーがあった時はコチラ
		$errmsg = "チェックされていない回答があります。";
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
		$set[ 'score'      ] = $standard_score;
		for($i=1;$i<=12;$i++){
			$dev = "dev".$i;
			$set[$dev] = $row[ $dev ];
		}
		$set[ 'soyo'       ] = $dev_number;
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
}

//テストデータ取得
$tdetail = $obj->getTestPaper($where);


$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

?>