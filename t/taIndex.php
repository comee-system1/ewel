<?PHP

require_once(D_PATH_HOME."/lib/include_ta.php");
$ta  = new taMethod();
//評価対象者表示
if($_REQUEST[ 'taisyo' ]){
	$where = array();
	$where[ 'tp_id' ] = $_REQUEST[ 'tp_id' ];
	$data = $ta->getTaisyoData($where);
	if($data[ 'period' ]){
		$y = floor($data[ 'period' ]/12);
		$m = $data[ 'period' ]%12;
	}else{
		$y = "";
		$m = "";
	}
	$echo = $data[ 'hv_busyo' ]."_:".$data[ 'relation' ]."_:".$y."_:".$m."_:".$_REQUEST[ 'tp_id' ];
	echo $echo;
	exit();
}

//ログインチェック
if($_REQUEST[ 'login' ]){
	$where = array();
	$where[ 'ev_id' ] = $_REQUEST[ 'exam_id' ];
	$where[ 'birth' ] = sprintf("%04d/%02d/%02d"
								,$_REQUEST[ 'year'  ]
								,$_REQUEST[ 'month' ]
								,$_REQUEST[ 'day'   ]
								);
	$where[ 'testgrp_id' ] = $test[ 'id' ];
	$login = $ta->loginCheck($where);
	if($login){
		$temp = "taisyo";
	}

}

//受検済みかどうかのチェック
if($_REQUEST[ 'chkflg' ]){
	$where[ 'ta_id'      ] = $_REQUEST[ 'id' ];
	$where[ 'tamen_type' ] = $_REQUEST[ 'chkflg' ];
	$chk = $ta->checkTamenResult($where);
	echo $chk;
	exit();
}


//検査対象ページ
if($_REQUEST[ 'next' ]){
	$where = array();
	$where[ 'id' ] = $_REQUEST[ 'id' ];
	//期間計算
	$where[ 'period'] = (($_REQUEST[ 'period_year' ])*12)+$_REQUEST[ 'period_month' ];
	$kensa = $ta->getKensaData($where);
	$tamen_type = explode(":",$kensa[ 'tamen_type' ]);
	//結果確認
	$ta_id = $kensa[ 'id' ];
	$tamenRst = $ta->getTamenRst($ta_id);

	$birth = explode("/",$kensa[ 'birth' ]);
	$year  = $birth[0];
	$month = $birth[1];
	$day   = $birth[2];
	if($kensa[ 'period' ]){
		$pyear  = sprintf("%d",@floor($kensa[ 'period' ]/12));
	}else{
		$pyear = "0";
	}
	if($kensa[ 'period' ]){
		$pmonth = sprintf("%d",$kensa[ 'period' ]%12);
	}else{
		$pmonth = "0";
	}
	$type = $kensa[ 'type' ];
	
	$temp = "kensa";
}

?>