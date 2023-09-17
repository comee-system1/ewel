<?PHP
require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_t.php");
session_start();

$db = new method();
$t  = new tMethod();

//ユーザーエージェント判別
$ua = $db->mobile_redirect();

//$query = getenv ("PATH_INFO");
$query = $_SERVER[ 'REQUEST_URI' ];
//$var = split ("[/\.]", $query);

$var = explode("/",$query);
if(D_DOMAIN == "igtests.sakura.ne.jp" || D_DOMAIN == "ewel7.uh-oh.jp" ){
    $first  = $var[3];
}else{
    $first = $var[2];
}

//$firstが41(BAV3)の場合はBAJ3にする
//$firstが42(BMS-v)の場合はBMSにする
if($array_test_change[ $first ]){
	$first = $array_test_change[ $first ];
}

$sec    = $var[2];
$third  = $var[3];
$four   = $var[4];

$now = sprintf("%04d%02d%02d",date('Y'),date('m'),date('d'));

$dir = base64_decode($_REQUEST[ 'k' ]);
//テストデータ取得
$where[ 'dir'  ] = $dir;
$where[ 'type' ] = 0;
$test = $t->getTest($where);
$testType = $t->getTestType($where);
$language = $test[ 'language' ];

//テストタイプが52の時
$where[ 'type' ] = 52;
$test52 = $t->getTest($where);
$flg52 = false;
if($test52){
	$flg52 = true;
}
//テストタイプが60の時
if($testType['type'] == 60 ){
    $where[ 'type' ] = 60;
    $test60 = $t->getTest($where);
    $flg60 = false;
    if($test60){
        $flg60 = true;
    }
}

//テストタイプが73の時
if($testType['type'] == 73 ){
    $where[ 'type' ] = 73;
	$test73 = $t->getTest($where);
    $flg73 = false;
    if($test73){
		$flg73 = true;
	//	$ua = false;
    }
}

//テストタイプが74の時
if($testType['type'] == 74 ){
    $where[ 'type' ] = 74;
    $test74 = $t->getTest($where);
    $flg74 = false;
    if($test74){
		$flg74 = true;
		$ua = false;
    }
}

if($testType['type'] == 86 ){

    $where[ 'type' ] = 86;
    $test86 = $t->getTest($where);
    $flg86 = false;
    if($test86){
		$flg86 = true;
		$ua = false;
    }
}

if($testType['type'] == 87 ){
    $where[ 'type' ] = 87;
    $test87 = $t->getTest($where);
    $flg87 = false;
    if($test87){
		$flg87 = true;
		$ua = false;
    }
}
if($testType['type'] == 89 ){
    $where[ 'type' ] = 89;
    $test89 = $t->getTest($where);
    $flg89 = false;
    if($test89){
		$flg89 = true;
		$ua = false;
    }
}
if($testType['type'] == 90 ){
	$where[ 'type' ] = 90;
	$test90 = $t->getTest($where);
	$flg90 = false;
	if($test90){
	$flg90 = true;
	$ua = false;
	}
}

$from = preg_replace("/\//","",$test[ 'period_from' ]);
$to   = preg_replace("/\//","",$test[ 'period_to'   ]);


if($now < $from ){
	switch($language){
		case "2":
			$errmsg = "除检查期间已经完成。";
		break;
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		default:
			$errmsg = "受検期間が終了しています。";
		break;
	}
	$disd = "DISABLED";
	header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
	exit();
}
if($now > $to ){
	switch($language){
		case "2":
			$errmsg = "除检查期间已经完成。";
		break;
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		default:
			$errmsg = "受検期間が終了しています。";
		break;
	}
	$disd = "DISABLED";
	header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
	exit();

}

$login_id = $test[ 'login_id' ];
if(!$test){
	$temp = "";
}
if($login_id){
	$glob = glob(D_PATH_HOME."/img/".$login_id.".*");
}
if($glob[0]){
	$logoName = basename($glob[0]);
	$logo = "<img src='".D_URL."/img/".$logoName."' style='max-height:75px;'>";
	$logourl = D_URL."/img/".$logoName;
}

//--------------------------------
//現在登録されているsessionと引数のｋを比較
//相違があればsession outを行う
//--------------------------------
if($ua && $flg52 != true && $flg60 != true && $flg62 != true && $flg67 != true && $flg68 != true  && $flg86 != true  && $flg87 != true && $flg89 != true && $flg90 != true ){
	//テストデータ取得
	$where = array();
	$where[ 'exam_id'    ] = $_REQUEST[ 'e' ];
	$where[ 'testgrp_id' ] = $_REQUEST['tid'];
	$testlink = $t->getTestLink($where);
	if($_REQUEST[ 'temp' ]){
		$temp = $_REQUEST[ 'temp' ];
	}

}else{

	//評価検査の時
	if($_REQUEST[ 'anq' ]){
		$first = $where[ 'type' ];
		$hyoukaflg = 1;
	}else
	if($_REQUEST[ 'type' ] == "subordinate" || $_REQUEST[ 'type' ] == "boss"){
		if($_REQUEST[ 'mem' ]){
			$first = $where[ 'type' ];
			$hyoukaflg = 1;

		}else{
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}

	}else{

		if(count($_SESSION[ 'visit' ])){
	
			if($_SESSION[ 'visit' ][ 'k' ] != $_REQUEST[ 'k' ]){
				$_SESSION[ 'visit' ] = array();
				header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
				exit();
			}
			if($_REQUEST[ 'temp' ]){
				$temp = $_REQUEST[ 'temp' ];
			}
		}else{
			
			//セッションが切れた時
			$_SESSION[ 'visit' ] = array();
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
			
		}
	}
}
if($temp){
	$temp = $temp;
}else{
	$temp = "guide";
}

if($_REQUEST[ 'anq' ]){
	include_once("./php/test".$first."/anq.php");
}else{

	include_once("./php/test".$first."/index.php");
}


if($ua && $flg52 != true && $flg60 != true && $flg62 != true && $flg67 != true && $flg68 != true && $first != 70 && $first != 83 ){
	include_once("./template/test".$first."/mobile/".$temp.".php");
}else{
	//----------------------------------
	//評価検査の時はテンプレートを変更する
	//----------------------------------
	if($hyoukaflg == 1){
		if($flg67){
				include_once("./template/judge67/".$temp.".php");
		}else
				if($flg68){
						include_once("./template/judge68/".$temp.".php");
		}else
		if($flg62){
				include_once("./template/judge3/".$temp.".php");
		}else
		if($flg60){
				include_once("./template/judge2/".$temp.".php");
		}else
		if ($flg86 ) {
    	include_once("./template/judge5/".$temp.".php");
		}else
		if ($flg89) {
    	include_once("./template/judge7/".$temp.".php");
		}else
		if ($flg90) {
    	include_once("./template/judge8/".$temp.".php");
		}else
		if($flg87 ){
			include_once("./template/judge6/".$temp.".php");
		}else{
			include_once("./template/judge/".$temp.".php");
		}
	}else
	//----------------------------------
	//麻生の時はテンプレートを変更する
	//----------------------------------
	if($testtype == 44){
		if($testdir){
			include_once("./template/test".$first."/".$testdir."/".$temp.".php");
		}else{
			include_once("./template/test".$first."/".$temp.".php");
		}
		//-------------------------
		//麻生の時終わり
		//-------------------------
	}else
	if($sec == "smp"){
		//簡易版BAJ
		include_once("./template/test".$first."/smp/".$temp.".php");
	}else{
		include_once("./template/test".$first."/".$temp.".php");
	}
}



?>