<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
$array_exam[1] = array(
		"1"=>array(
				"a"=>"自分には人並み以上の知力がある",
				"b"=>"仲間とはいっしょに楽しい時間を過ごす",
			),
		"2"=>array(
				"a"=>"自分が、なぜ、こんな気持ちになったのかを考えることが多い",
				"b"=>"やり直しを要求されても、その指摘が正しければ、進んでやり直す",
			),
		"3"=>array(
				"a"=>"窮地に立たされても、何とかなると思う",
				"b"=>"私の意見は仲間に反映されることが多い",
			),
		"4"=>array(
				"a"=>"「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている",
				"b"=>"窮地に立たされても、何とかなると思う",
			),
		"5"=>array(
				"a"=>"将来、大きな仕事をしようと心に決めている",
				"b"=>"人の話をじっくり聞くことが得意である",
			),
		"6"=>array(
				"a"=>"やり直しを要求されても、その指摘が正しければ、進んでやり直す",
				"b"=>"雰囲気を壊さずに自分の意見を明快に主張できる",
			),
		"7"=>array(
				"a"=>"怒りや不快を顔にださず速やかに静められる",
				"b"=>"自分には人並み以上の知力がある",
			),
		"8"=>array(
				"a"=>"微妙な表情や会話の間から相手の気持ちの変化を感じる",
				"b"=>"怒りや不快を顔にださず速やかに静められる",
			),
		"9"=>array(
				"a"=>"仲間とはいっしょに楽しい時間を過ごす",
				"b"=>"微妙な表情や会話の間から相手の気持ちの変化を感じる",
			),
		"10"=>array(
				"a"=>"人の話をじっくり聞くことが得意である",
				"b"=>"「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている",
			),
		);
$array_exam[2] = array(

		"11"=>array(
				"a"=>"雰囲気を壊さずに自分の意見を明快に主張できる",
				"b"=>"将来、大きな仕事をしようと心に決めている",
			),
		"12"=>array(
				"a"=>"私の意見は仲間に反映されることが多い",
				"b"=>"自分が、なぜ、こんな気持ちになったのかを考えることが多い",
			),
		"13"=>array(
				"a"=>"自分の得意分野で勝負するように心がけている",
				"b"=>"顔をつぶさずに反対者を説き伏せる自信がある",
			),
		"14"=>array(
				"a"=>"あせり・恐怖・喜び・悲しみなど、いつも自分の今の感情に名前をつけられる",
				"b"=>"すこし話をすると相手の好みや性格が把握できる",
			),
		"15"=>array(
				"a"=>"自らのスキルを磨き、常に自分を向上させる",
				"b"=>"仲間を出し抜いて自分の手柄にしようとは思わない",
			),
		"16"=>array(
				"a"=>"自分は成功するだけの能力がある",
				"b"=>"自らのスキルを磨き、常に自分を向上させる",
			),
		"17"=>array(
				"a"=>"あせりや恐怖に打ち勝って冷静に行動できる",
				"b"=>"ハイキングや飲み会などの集まりを企画して仲間を喜ばせることが好き",
			),
		"18"=>array(
				"a"=>"すこし話をすると相手の好みや性格が把握できる",
				"b"=>"人を引っ張っていく力がある",
			),
		"19"=>array(
				"a"=>"失敗の恐れより、成功の喜びを期待して信じるほうだ",
				"b"=>"自分の得意分野で勝負するように心がけている",
			),
		"20"=>array(
				"a"=>"人から悩みを相談されることが多い",
				"b"=>"失敗の恐れより、成功の喜びを期待して信じるほうだ",
			),
		);
$array_exam[3] = array(

		"21"=>array(
				"a"=>"顔をつぶさずに反対者を説き伏せる自信がある",
				"b"=>"人から悩みを相談されることが多い",
			),
		"22"=>array(
				"a"=>"ハイキングや飲み会などの集まりを企画して仲間を喜ばせることが好き",
				"b"=>"自分は成功するだけの能力がある",
			),
		"23"=>array(
				"a"=>"人を引っ張っていく力がある",
				"b"=>"あせりや恐怖に打ち勝って冷静に行動できる",
			),
		"24"=>array(
				"a"=>"仲間を出し抜いて自分の手柄にしようとは思わない",
				"b"=>"あせり・恐怖・喜び・悲しみなど、いつも自分の今の感情に名前をつけられる",
			),
		"25"=>array(
				"a"=>"自分は本当はどうしたいのだろう、どんな気持ちなのだろうと、いつも考える",
				"b"=>"集団の中ではリーダーシップを発揮する",
			),
		"26"=>array(
				"a"=>"私は自分が好きであり、肯定的に受け止めている",
				"b"=>"涙もろく、もらい泣きをするほうである",
			),
		"27"=>array(
				"a"=>"かっとなったり、我を忘れて怒ったりしない",
				"b"=>"チームワークを大切にしている",
			),
		"28"=>array(
				"a"=>"自分の弱点を知り、その点で強がらないようにしている",
				"b"=>"かっとなったり、我を忘れて怒ったりしない",
			),
		"29"=>array(
				"a"=>"臨機応変に優先順位を変えながら楽しく課題をかたづける",
				"b"=>"気難しい客のいる店の接客の仕事（アルバイト）も辛くない",
			),
		"30"=>array(
				"a"=>"涙もろく、もらい泣きをするほうである。",
				"b"=>"理解できない説明には、ためらわず率直に質問する",
			),
		);
$array_exam[4] = array(

		"31"=>array(
				"a"=>"私が頑張れば、必ず、状況を好転させられる",
				"b"=>"自分は本当はどうしたいのだろう、どんな気持ちなのだろうと、いつも考える",
			),
		"32"=>array(
				"a"=>"気難しい客のいる店の接客の仕事（アルバイト）も辛くない",
				"b"=>"臨機応変に優先順位を変えながら楽しく課題をかたづける",
			),
		"33"=>array(
				"a"=>"集団の中ではリーダーシップを発揮する",
				"b"=>"本音と建前の違いを、私は素早く見抜いてしまう",
			),
		"34"=>array(
				"a"=>"本音と建前の違いを、私は素早く見抜いてしまう",
				"b"=>"私は自分が好きであり、肯定的に受け止めている",
			),
		"35"=>array(
				"a"=>"チームワークを大切にしている",
				"b"=>"私が頑張れば、必ず、状況を好転させられる",
			),
		"36"=>array(
				"a"=>"理解できない説明には、ためらわず率直に質問する",
				"b"=>"自分の弱点を知り、その点で強がらないようにしている",
			),
		);

//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST['nextPage'];
}else{
	$pager = 1;
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
if($ua){
	//$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST['tid'];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;
}else{
	//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}

//--------------------------------
//回答登録
//--------------------------------
if($_REQUEST[ 'q' ] && count($_REQUEST[ 'q' ])){
	foreach($_REQUEST[ 'q' ] as $key=>$val){
		$q = "q".$key;
		$edit[ $q ] = $val;
	}

	$tbl = "t_testpaper";
	$obj->editDetail($tbl,$edit,$where);
	
}

//スタート時間の登録
//初回ページ
//tempは簡易版

if($_REQUEST[ 'page' ] || ($_REQUEST[ 'temp' ] == "page" && !count($_REQUEST[ 'q' ]))){
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
//			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
//			exit();
		}
	}

	if($temp == "guide"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}

}


//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = 0;
	if($_REQUEST[ 'nextPage' ] == 2){
		for($i=1;$i<=10;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 3){
		for($i=11;$i<=20;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 4){
		for($i=21;$i<=30;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		for($i=31;$i<=36;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	
	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		//----------------------------
		//最終ページ
		//----------------------------
		include_once(D_PATH_HOME."/lib/keisan/functionBA.php");
		include_once(D_PATH_HOME."/init/rowData/raw_data_ta.php");
		include_once(D_PATH_HOME."/init/rowData/dev_data_ta.php");
		
		//テストデータ取得
		$tdetail = $obj->getTestPaper($where);
		//重みデータ取得
		$wt = array();
		if($ua){
			$wt[ 'test_id' ] = $_REQUEST['tid'];
			$wt[ 'type'    ] = $first;
		}else{
			$wt[ 'test_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
			$wt[ 'type'    ] = $first;
		}
		$weights = $obj->getWeight($wt);
		//---------------------
		//結果計算
		//---------------------
		list($row,$lv,$standard_score,$dev_number) = BA($tdetail,$weights,$raw_data,$dev_data,1);

		$soyo = $dev_number;
		$imgDir = "ta";
		$s_day  = explode( '/', $tdetail['exam_date'] ); 
		$s_time = explode( ':', $tdetail['start_time'] ); 
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
//var_dump($pager);
//var_dump($tdetail);
//var_dump($temp);
//var_dump($_REQUEST);

if($_REQUEST[ 'next' ]){
//登録データのチェック
//不足データがある時は
//不足データのあるページに移動
	if($pager >= 5){
		for($i=31;$i<=36;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 4;
				$alert = "4ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 4){
		for($i=21;$i<=30;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 3;
				$alert = "3ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 3){
		for($i=11;$i<=20;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 2;
				$alert = "2ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 2){
		for($i=1;$i<=10;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 1;
				$alert = "1ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
}

//ステータスチェック
if($temp == "page"){
	if($tdetail[ 'exam_state' ] == 2){
		$temp = "guide";
	}
}

$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];



?>