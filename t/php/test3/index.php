<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
$array_exam[1] = array(
		"1"=>array(
				"title"=>"お店の入り口にお客様が入ってきたときの対応で<span style=color:red><u>正しい</u></span>のはどれか。",
				"1"=>"必ず大きな声で「いらっしゃいませ」と言う。", 
				"2"=>"黙礼をして静かに迎える。", 
				"3"=>"失礼にならないように,声をかけないでそっとしておく。", 
				"4"=>"じろじろ見ると失礼なので,仕事を続けながら様子を伺う。", 
				"5"=>"接客中に,お客様が声をかけてきたら「お待たせしました」と言って対応する。",
			),
		"2"=>array(
				"title"=>"お店の入り口でお客様から同時に声をかけられたときの対応で<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"自分が対応できないお客様への対応を,他のスタッフに頼む。", 
				"2"=>"待っているお客様に「すぐにお伺い致します」と,一応声をかける。", 
				"3"=>"当然,先客順に対応する。", 
				"4"=>"待っているお客様に,おおよその待ち時間を伝える。", 
				"5"=>"目の前のお客様への対応に専念する。", 

			),
		"3"=>array(
				"title"=>"お店に入るためにお客様が外に並んでいるときの対応で,<span style=color:red><u>正しくない</u></span>のはどれか。",
				"1"=>"寒い,暑い場合には,それらをしのぐ方法を考えて店長に相談する。", 
				"2"=>"不公平にならないように,待ち時間は必ず同じ時間をお答えする。",
				"3"=>"外の椅子を増やして多くの人が座れるようにする。",
				"4"=>"一応メニュー表を渡してオーダーを考えていただく。",
				"5"=>"先着順に名前をうかがっておくが,案内する順番を変えることもある。",
			),
		);

$array_exam[2] = array(
		"4"=>array(
				"title"=>"お客様と階段を通るときの注意点で<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"お客様の歩く速さに合わせて歩く。", 
				"2"=>"階段の手前で立ち止まり,「足下にお気をつけください」など注意の言葉をかける。", 
				"3"=>"階段の下りでは,案内役が先,お客様が後ろを歩く。", 
				"4"=>"階段を通った後,どの方向に向かうのかあらかじめ伝える。", 
				"5"=>"階段の下りでは,「お先に失礼します」とお客様にいちいち声をかけない。", 
			),
		"5"=>array(
				"title"=>"会社でお客様を見送るときの注意点で<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"案内役がお客様よりも先に応接室を出て,その場で見送る。", 
				"2"=>"「本日はお忙しいところ,ありがとうございました」と挨拶してから,ドアを開ける。", 
				"3"=>"オフィスがビルの中なら,エレベーターでドアが完全に閉まるまでおじぎをする。", 
				"4"=>"車を見送る場合は,走り出して車が見えなくなるまでおじぎをする。", 
				"5"=>"玄関では,約10秒間お客様が見えなくなるまでおじぎをする。", 
			),
		"6"=>array(
				"title"=>"接客の基本動作で<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"お客様の身なりで接客態度を変えるのが良い接客である。", 
				"2"=>"お客様の顔（目）を見て接する。", 
				"3"=>"お客様に「はい」と返事をするときは,アイコンタクト・うなずくなど,動作を伴うと良い。", 
				"4"=>"お客様と接するときは,手を後ろ手に組まない。", 
				"5"=>"お客様から見えていなくても,仕事中は必ずていねいな言葉を使う。", 
			),
		);
$array_exam[3] = array(
		"7"=>array(
				"title"=>"会社でお客様をお待たせしている状況で,<span style=color:red><u>正しくない</u></span>対応はどれか。", 
				"1"=>"いま,席を外しているがすぐ戻る,など状況を伝える。", 
				"2"=>"「お待たせして申し訳ありません」と,とりあえず謝る。", 
				"3"=>"おおよその待ち時間を伝える。", 
				"4"=>"担当者が直接対応することが望ましいので,そのままお待ちいただく。", 
				"5"=>"長くお待たせしてしまう場合,応接室に案内してお茶を出す。", 
			),
		"8"=>array(
				"title"=>"お店で会計・お見送りの対応で<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"お客様が店を出るときに,自分は別の仕事をしていても,「ありがとうございました」<br />と声をかける。", 
				"2"=>"会計で代金を受け取るときは,両手で受け取る。", 
				"3"=>"会計でお釣りがある場合,金銭皿又は自分の掌におつりを乗せ,<br />金額を目で確認していただく。", 
				"4"=>"お客様が店を出るときには,感謝の気持ちをこめてご挨拶する。", 
				"5"=>"連れのお客様がいらっしゃるお客様の会計中は,お連れの方に声をかけない。", 
			),
		"9"=>array(
				"title"=>"来客が絶えない（多い）会社の応接室を使用した後の行動で,<span style=color:red><u>正しくない</u></span>のはどれか。", 
				"1"=>"煙草などのにおいが残っているかもしれないので,窓を開けるなどして換気を行う。", 
				"2"=>"テーブルを拭き,灰皿・茶器を片付ける。", 
				"3"=>"まず,お客様の忘れ物がないか確認する。", 
				"4"=>"椅子・テーブルの位置を戻しておく。", 
				"5"=>"冷房などの空調は,1回の来客ごとにこまめに切る。", 

			),
		);
$array_exam[4] = array(
		"10"=>array(
				"title"=>"会社で次のような状況の際,<span style=color:red><u>正しくない</u></span>対応はどれか。", 
				"1"=>"来客時に電話が入り,どうしても切れない場合,そのまま電話を続ける。", 
				"2"=>"受付で来客が重なった場合,当然先着順に対応する。", 
				"3"=>"来客時に急な電話が入った場合,かけ直せる電話であれば,来客を優先する。", 
				"4"=>"電話に出たときに,相手が名乗らない場合はお名前を伺う。", 
				"5"=>"お茶を出すときに,つくえの上に書類があった場合は,お客様に置き場所を確認する。", 
				
			),
		"11"=>array(
				"title"=>"お店でのサービス・対応で<span style=color:red><u>正しくない</u></span>のはどれか。",
				"1"=>"お皿を落としてしまった場合,すぐにお客様にお詫びして,<br />片付けは手のあいているスタッフも手伝う。", 
				"2"=>"追加注文を受けたら,まず「かしこまりました。○○1つですね。<br />少々お待ちくださいませ」と確認する。", 
				"3"=>"ラストオーダーの時間になったら,メニュー表を持って各テーブルを回り,<br />必ず追加注文を尋ねる。", 
				"4"=>"ラストオーダーで追加注文がなければ,「ごゆっくりどうぞ」と会釈して去る。", 
				"5"=>"お客様同士が言い争い始めた場合,同じテーブル内のことであればスタッフ<br />は関わらないようにする。", 
			),
		"12"=>array(
				"title"=>"お店での配膳・食事中のサービスに関する注意点で<span style=color:red><u>正しい</u></span>のはどれか。", 
				"1"=>"伝票をテーブルに置いたら「ごゆっくりどうぞ」と会釈して去る。", 
				"2"=>"食事中にお冷・灰皿を取り替える場合は,声をかけずにタイミングよく取り替える。", 
				"3"=>"伝票は上座側に置く。", 
				"4"=>"配膳がすんだら,笑顔で会釈して去る。", 
				"5"=>"食べ物がなくなった皿はすみやかに下げる。", 
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
if($ua){
//	$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST[tid];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;
}else{
//	$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}




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
}

//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = 0;
	if($_REQUEST[ 'nextPage' ] == 2){
		for($i=1;$i<=3;$i++){
			if(!$_REQUEST[ 'sec' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 3){
		for($i=4;$i<=6;$i++){
			if(!$_REQUEST[ 'sec' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 4){
		for($i=7;$i<=9;$i++){
			if(!$_REQUEST[ 'sec' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		for($i=10;$i<=12;$i++){
			if(!$_REQUEST[ 'sec' ][$i]){
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
		//テストデータ取得
		$tdetail = $obj->getTestPaper($where);
		include_once(D_PATH_HOME."init/rowData/raw_data_tw.php");
		include_once(D_PATH_HOME."lib/keisan/functionBA3.php");
		
		list($request,$lv) = FS3($raw_data,$tdetail);

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
		$set[ 'score'      ] = $request;
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
if($_REQUEST[ 'next' ]){
//登録データのチェック
//不足データがある時は
//不足データのあるページに移動
	if($pager >= 5){
		for($i=10;$i<=12;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 4;
				$alert = "4ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 4){
		for($i=7;$i<=9;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 3;
				$alert = "3ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 3){
		for($i=4;$i<=6;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 2;
				$alert = "2ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
	if($pager >= 2){
		for($i=1;$i<=3;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 1;
				$alert = "1ページに誤りがあります。";
				$temp = "page";
			}
		}
	}
}

$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

?>