<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
require_once(D_PATH_HOME."t/lib/include_jud.php");
$jud = new judgeClass();
//where句の作成
$where = array();
//var_dump($_SESSION[ 'jud' ][ 'login_id' ]);
//読み込むhtmlファイルの指定
//上司用
if($_REQUEST[ 'anq' ]){
	
}else
if($_REQUEST[ 'mem' ] != $_SESSION[ 'judge' ][ 'login_id' ]){
	echo "検査に不具合が発生しました。再度受検をお願いします。";
	exit();
}


$where[ 'jmid' ] = $_REQUEST[ 'mem' ];
//部下データ取得
$sub = $jud->getSubordinate($where);

//本人データ取得
$mem = $jud->getMember($where);

//上司データ取得
$bossdata = $jud->getBoss($mem,$_REQUEST[ 'm' ]);


$where[ 'bossid' ] = $_REQUEST[ 'm' ];
//データ取得
$rst = $jud->getDataResult($where,$_REQUEST[ 'type' ],"ans1,ans2");
//1ページ目データ
if($rst){
	$person = $jud->getFirstData($rst);
}


$pager  = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);
//--------------------------------
//回答登録
//--------------------------------
include_once("array3.php");

if($_REQUEST[ 'next' ]){
	//エラーチェック
	if($_REQUEST[ 'type' ] != "subordinate"){
		if($pager == 2 ){
			if($_REQUEST[ 'ans' ][1] == $_REQUEST[ 'ans' ][2]){
				$err[3] = "最も一緒に仕事をしたいと思う部下と思わない部下が同一人物です。どちらかを変更してください。";
			}
			if(!$_REQUEST[ 'ans' ][3]){
				$err[3] = "解答３が選択されていません。";
			}
		}
	}

	if($pager == 3){
		$no = 1;
		foreach($array_question_chk[2] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 4){
		$no = 1;
		foreach($array_question_chk[3] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 5){
		$no = 1;
		foreach($array_question_chk[4] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}
	if($pager == 6){
		$no = 1;
		foreach($array_question_chk[5] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 7){
		$no = 1;
		foreach($array_question_chk[6] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 8){
		$no = 1;
		foreach($array_question_chk[7] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}
	if($pager == 9 ){
		$no = 1;
		foreach($array_question_chk[8] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 10 && $_REQUEST[ 'ans' ][1]){
		$no = 1;
		foreach($array_question_chk[9] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 11){
		$no = 1;
		foreach($array_question_chk[10] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 12){
		$no = 1;
		foreach($array_question_chk[11] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 13){
		$no = 1;
		foreach($array_question_chk[12] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}


	if($pager == 14){
		$no = 1;
		foreach($array_question_chk[13] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}


	if($pager == 15){
		$no = 1;
		foreach($array_question_chk[14] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}
	if($pager == 16){
		$no = 1;
		foreach($array_question_chk[15] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 17){
		$no = 1;
		foreach($array_question_chk[16] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 18){
		$no = 1;
		foreach($array_question_chk[17] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 19){
		$no = 1;
		foreach($array_question_chk[18] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	if($pager == 20){
		$no = 1;
		foreach($array_question_chk[19] as $key=>$val){
			if(!$_REQUEST[ 'ans' ][ $key ]){
				$err[$key] = "解答".$no."が選択されていません。";
			}
			$no++;
		}
	}

	//エラーがあったら戻す
	if($err){
		$pager = $pager-1;
	}

	//エラーがあってもデータは登録を行う
	$table = "jug_boss_text";
	$edit = array();
	$edit[ 'where' ][ 'jmid' ] = $_REQUEST['mem'];
	if($_REQUEST[ 'type' ] == "subordinate"){
		$edit[ 'where' ][ 'type' ] = 2;
		$edit[ 'where' ][ 'bossid' ] = $_REQUEST[ 'm' ];
	}else{
		$edit[ 'where' ][ 'type' ] = 1;
		$edit[ 'where' ][ 'bossid' ] = 0;
	}
	if($_REQUEST[ 'ans4_1' ]) $edit[ 'edit' ][ 'ans4_1' ] = $_REQUEST[ 'ans4_1' ];
	if($pager == 19) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
	if($pager == 10 && $_REQUEST[ 'type' ] == "subordinate") $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
	if($pager == 10 && $_REQUEST[ 'ans' ][2] == 0 ) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
	
	if(count($_REQUEST[ 'ans' ])){
		foreach($_REQUEST[ 'ans' ] as $key=>$val){
			$code = "ans".$key;
			$edit[ 'edit'  ][ $code ] = $val;
		}
		if($_REQUEST[ 'ans3_other' ]) $edit[ 'edit' ][ 'ans3_other' ] = $_REQUEST[ 'ans3_other' ];
	}
	if(count($edit[ 'edit' ])){
		$db->editUserData($table,$edit);
	}
}

if($_REQUEST[ 'flag' ] == "start"){
	//初回登録
	$where[ 'tid' ] = $mem[ 'tid' ];
	$where[ 'id'  ] = $mem[ 'id'  ];
	$where[ 'type' ] = "1";
	if($_REQUEST[ 'type' ] == "subordinate"){
		$where[ 'type' ] = "2";
		$where[ 'bossid' ] = $_REQUEST[ 'm' ];
	}
	$jud->setStartData($where);
	
}
$where[ 'bossid' ] = $_REQUEST[ 'm' ];
//データ取得
$result = $jud->getDataResult($where,$_REQUEST[ 'type' ]);

//1ページ目データ
$person = array();
$person = $jud->getFirstData($result);
include_once("array2.php");
include_once("array.php");


//最後のページ
if($pager == 19 || ($pager == 10 && $_REQUEST[ 'type' ] == "subordinate") || ($pager == 10 && $_REQUEST[ 'ans' ][2] == "0" ) ){
		$tdetail = $mem;
		$s_day  = split( '-', $tdetail['exam_date'] ); 
		$s_time = split( ':', $tdetail['start_time'] ); 

		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();
		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'complete_flg' ] = 1;
		$set[ 'level'      ] = $lv;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);
		
		$tbl = "t_testpaper";
		$where = array();
		$where[ 'id' ] = $mem[ 'tid' ];

		$obj->editDetail($tbl,$set,$where);
		$where = array();
		$where[ 'testgrp_id' ] = $mem[ 'testgrp_id' ];
		$where[ 'exam_id' ] = $mem[ 'texam_id' ];
		$where[ 'type' ] = 52;
		//メール配信
		$t->sendFinMail($where);
		$fin_disp = $test[ 'fin_disp' ];

		$temp = "Fin";
}

if($_REQUEST[ 'pageBack' ] ){
	$pager = $pager-2;
	//戻るボタンの時はチェックされた項目を編集
}


if($_REQUEST[ 'temp' ] == "page" && $temp != "Fin" ){
	$temp = "page";
}
if($temp != "Fin" && $temp != "guide" ){
	$temp = "page";
}

if($_REQUEST[ 'flag' ] == "start" || $_REQUEST[ 'pageBack' ]){
	$temp = $_REQUEST[ 'temp' ];
}
if($pager > 1 && $temp != "Fin"){
	//$temp = "page".$pager;
	$temp = "page2";
	if($_REQUEST[ 'ans' ][1] == 0 && $_REQUEST[ 'pageBack' ] && $_REQUEST[ 'nextPage' ] == 10){
		$temp = "page";
	}
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$temp = "sub".$temp;
}
if($pager > 19 && !$_REQUEST[ 'pageBack' ]){
	$temp = "Fin";
}

if($pager > 10 && $_REQUEST[ 'type' ] == "subordinate" && !$_REQUEST[ 'pageBack' ] ){
	$temp = "Fin";
}

?>