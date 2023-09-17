<?PHP
//正解配列作成
$array_answer = array(2,3,5,6,2,1,2,1,2,3,1,3,3,2,1,1,3,2,2,1,4,5,2,3,1,4,1,6,2,2,1,7,8,9,1,2,3,1,2,4,5,3,3,3,2,4,1,4,3,2,1,1,2,5,3,4,2,6,5,2,4,3,1,4,3,6,1,2,5,2,4,3,3,3,3,2,2,1,3,2,1,1,1,3,1,2);
//カテゴリの平均
$array_avg = array(5,5,2,1,2,5,2,2,6,11);
//カテゴリの標準偏差
$array_hensa = array(1.8,1.8,0.7,0.5,0.7,2,1.2,1.2,2,4);

require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_bsa0.php");

$obj = new BAmethod();
$bsa  = new BSAmethod();



//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}

//最大のページ数
$max = 22;
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $bsa->getTime($where);


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
	$bsa->setEa($where);
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
//--------------------------------
//回答登録
//--------------------------------
if(count($_REQUEST[ 'sec' ])){
	$sec = array();
	if(count($_REQUEST[ 'sec' ])){
		foreach($_REQUEST[ 'sec' ] as $key=>$val){
			$s = "ans".$key;
			$sec[$s] = $val;
		}
	}
	$bsa->setEaRst($sec,$where);
	
}

//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = "";
	if($_REQUEST[ 'nextPage' ] == 2){
		for($i=1;$i<=4;$i++){
			if(!$_REQUEST[ 'sec' ][ $i ]){
				$err += 1;
				$errmsg[$i] = "空欄".$i."が選択されていません。";
			}
		}
		if(!$_REQUEST[ 'sec' ][ '5' ]){
			$err += 1;
			$errmsg[$i++] = "(ア)が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '6' ]){
			$err += 1;
			$errmsg[$i++] = "(イ)が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '7' ]){
			$err += 1;
			$errmsg[$i++] = "(ウ)が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '8' ]){
			$err += 1;
			$errmsg[$i++] = "(エ)が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 3){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '9' ]){
			$err += 1;
			$errmsg[9] = "3.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '10' ]){
			$err += 1;
			$errmsg[10] = "4.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 4){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '11' ]){
			$err += 1;
			$errmsg[11] = "5.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '12' ]){
			$err += 1;
			$errmsg[12] = "5.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '13' ]){
			$err += 1;
			$errmsg[13] = "6.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '14' ]){
			$err += 1;
			$errmsg[14] = "7.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '15' ]){
			$err += 1;
			$errmsg[15] = "8.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '16' ]){
			$err += 1;
			$errmsg[16] = "9.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '17' ]){
			$err += 1;
			$errmsg[17] = "10.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '18' ]){
			$err += 1;
			$errmsg[18] = "11.(ア)が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '19' ]){
			$err += 1;
			$errmsg[19] = "11.(イ)が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '20' ]){
			$err += 1;
			$errmsg[20] = "11.(ウ)が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 6){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '21' ]){
			$err += 1;
			$errmsg[21] = "12.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '22' ]){
			$err += 1;
			$errmsg[22] = "13.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 7){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '23' ]){
			$err += 1;
			$errmsg[23] = "14.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '24' ]){
			$err += 1;
			$errmsg[24] = "15.が選択されていません。";
		}
	}

	if($_REQUEST[ 'nextPage' ] == 8){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '25' ]){
			$err += 1;
			$errmsg[25] = "16.1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '26' ]){
			$err += 1;
			$errmsg[26] = "16.2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '27' ]){
			$err += 1;
			$errmsg[27] = "17.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '28' ]){
			$err += 1;
			$errmsg[28] = "18.が選択されていません。";
		}
	}

	if($_REQUEST[ 'nextPage' ] == 9){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '29' ]){
			$err += 1;
			$errmsg[29] = "19.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '30' ]){
			$err += 1;
			$errmsg[30] = "20.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '31' ]){
			$err += 1;
			$errmsg[31] = "21.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '32' ]){
			$err += 1;
			$errmsg[32] = "21.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '33' ]){
			$err += 1;
			$errmsg[33] = "21.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '34' ]){
			$err += 1;
			$errmsg[34] = "21.空欄4が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 10){
		$errmsg = array();
		if(!$_REQUEST[ 'sec' ][ '35' ]){
			$err += 1;
			$errmsg[35] = "22.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '36' ]){
			$err += 1;
			$errmsg[36] = "22.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '37' ]){
			$err += 1;
			$errmsg[37] = "22.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '38' ]){
			$err += 1;
			$errmsg[38] = "23.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '39' ]){
			$err += 1;
			$errmsg[39] = "23.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '40' ]){
			$err += 1;
			$errmsg[40] = "23.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '41' ]){
			$err += 1;
			$errmsg[41] = "23.空欄4が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 11){
		if(!$_REQUEST[ 'sec' ][ '42' ]){
			$err += 1;
			$errmsg[42] = "24.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '43' ]){
			$err += 1;
			$errmsg[43] = "25.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 12){
		if(!$_REQUEST[ 'sec' ][ '44' ]){
			$err += 1;
			$errmsg[44] = "26.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '45' ]){
			$err += 1;
			$errmsg[45] = "27.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '46' ]){
			$err += 1;
			$errmsg[46] = "28.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 13){
		if(!$_REQUEST[ 'sec' ][ '47' ]){
			$err += 1;
			$errmsg[47] = "29.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '48' ]){
			$err += 1;
			$errmsg[48] = "30.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 14){
		if(!$_REQUEST[ 'sec' ][ '49' ]){
			$err += 1;
			$errmsg[49] = "31.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '50' ]){
			$err += 1;
			$errmsg[50] = "32.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '51' ]){
			$err += 1;
			$errmsg[51] = "33.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 15){
		if(!$_REQUEST[ 'sec' ][ '52' ]){
			$err += 1;
			$errmsg[52] = "34.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '53' ]){
			$err += 1;
			$errmsg[53] = "34.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '54' ]){
			$err += 1;
			$errmsg[54] = "34.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '55' ]){
			$err += 1;
			$errmsg[55] = "35.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 16){
		if(!$_REQUEST[ 'sec' ][ '56' ]){
			$err += 1;
			$errmsg[56] = "36.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '57' ]){
			$err += 1;
			$errmsg[57] = "36.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '58' ]){
			$err += 1;
			$errmsg[58] = "36.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '59' ]){
			$err += 1;
			$errmsg[59] = "37.が選択されていません。";
		}
	}

	if($_REQUEST[ 'nextPage' ] == 17){
		if(!$_REQUEST[ 'sec' ][ '60' ]){
			$err += 1;
			$errmsg[60] = "38.空欄1が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '61' ]){
			$err += 1;
			$errmsg[61] = "38.空欄2が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '62' ]){
			$err += 1;
			$errmsg[62] = "38.空欄3が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '63' ]){
			$err += 1;
			$errmsg[63] = "38.空欄4が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 18){
		if(!$_REQUEST[ 'sec' ][ '64' ]){
			$err += 1;
			$errmsg[64] = "39.空欄aが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '65' ]){
			$err += 1;
			$errmsg[65] = "39.空欄bが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '66' ]){
			$err += 1;
			$errmsg[66] = "39.空欄cが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '67' ]){
			$err += 1;
			$errmsg[67] = "39.空欄dが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '68' ]){
			$err += 1;
			$errmsg[68] = "39.空欄eが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '69' ]){
			$err += 1;
			$errmsg[69] = "39.空欄fが選択されていません。";
		}
	}

	if($_REQUEST[ 'nextPage' ] == 19){
		if(!$_REQUEST[ 'sec' ][ '70' ]){
			$err += 1;
			$errmsg[70] = "40.空欄aが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '71' ]){
			$err += 1;
			$errmsg[71] = "40.空欄bが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '72' ]){
			$err += 1;
			$errmsg[72] = "40.空欄cが選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 20){
		if(!$_REQUEST[ 'sec' ][ '73' ]){
			$err += 1;
			$errmsg[73] = "41.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '74' ]){
			$err += 1;
			$errmsg[74] = "42.が選択されていません。";
		}

	}
	if($_REQUEST[ 'nextPage' ] == 21){
		if(!$_REQUEST[ 'sec' ][ '75' ]){
			$err += 1;
			$errmsg[75] = "43.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '76' ]){
			$err += 1;
			$errmsg[76] = "44.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '77' ]){
			$err += 1;
			$errmsg[77] = "45.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '78' ]){
			$err += 1;
			$errmsg[78] = "46.が選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 22){
		if(!$_REQUEST[ 'sec' ][ '79' ]){
			$err += 1;
			$errmsg[79] = "47.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '80' ]){
			$err += 1;
			$errmsg[80] = "48.アが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '81' ]){
			$err += 1;
			$errmsg[81] = "48.イが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '82' ]){
			$err += 1;
			$errmsg[82] = "48.ウが選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '83' ]){
			$err += 1;
			$errmsg[83] = "48.エが選択されていません。";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 23){
		if(!$_REQUEST[ 'sec' ][ '84' ]){
			$err += 1;
			$errmsg[84] = "49.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '85' ]){
			$err += 1;
			$errmsg[85] = "50.が選択されていません。";
		}
		if(!$_REQUEST[ 'sec' ][ '86' ]){
			$err += 1;
			$errmsg[86] = "51.が選択されていません。";
		}
		
	}

	if($err){
		//エラーがあった時はコチラ
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		//テストデータ取得
		$select = $bsa->getEa($where);
		//各素点の算出
		for($i=1;$i<=10;$i++){
			$soten[$i] = 0;
		}
		for($i=1;$i<=86;$i++){
			$key = $i-1;
			$ans = "ans".$i;
			if($i <= 10){
				if($select[$ans] == $array_answer[$key]) $soten[1] += 1;
			}elseif($i <=20){
				if($select[$ans] == $array_answer[$key]) $soten[2] += 1;
			}elseif($i <=24){
				if($select[$ans] == $array_answer[$key]) $soten[3] += 1;
			}elseif($i <=26){
				if($select[$ans] == $array_answer[$key]) $soten[4] += 1;
			}elseif($i <=30){
				if($select[$ans] == $array_answer[$key]) $soten[5] += 1;
			}elseif($i <=41){
				if($select[$ans] == $array_answer[$key]) $soten[6] += 1;
			}elseif($i <=46){
				if($select[$ans] == $array_answer[$key]) $soten[7] += 1;
			}elseif($i <=51){
				if($select[$ans] == $array_answer[$key]) $soten[8] += 1;
			}elseif($i <=63){
				if($select[$ans] == $array_answer[$key]) $soten[9] += 1;
			}elseif($i <=86){
				if($select[$ans] == $array_answer[$key]) $soten[10] += 1;
			}
		}
		//偏差値取得
		//カテゴリ（偏差値）＝（（受検者のカテゴリの素点）-（カテゴリの平均））/(カテゴリの標準偏差)）*10＋50
		foreach($soten as $key=>$val){
			$no = $key-1;
			$calc = (($val-$array_avg[$no])/$array_hensa[$no])*10+50;
			if($calc >= 80 ) $calc = 80;
			if($calc <= 20 ) $calc = 20;
			$hensa[$key] = $calc;
		}
		$bsa->sethensa($hensa,$where);
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
		$fin_disp = $test[ 'fin_disp' ];

		$temp = "Fin";
	}
}

if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}
//テストデータ取得
$tdetail = $bsa->getEa($where);
//var_dump($tdetail);
if($pager > 1 && $temp != "Fin"){
	$temp = "page".$pager;
}
?>