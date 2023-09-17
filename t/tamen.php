<?PHP
require_once('DB.php');
require_once('Auth.php');
require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_t.php");


session_start();
$db = new method();
$t  = new tMethod();


$query = getenv ("PATH_INFO");
$var = split ("[/\.]", $query);
$first  = $var[1];
$sec    = $var[2];
$third  = $var[3];
$four   = $var[4];


$dir = base64_decode($_REQUEST[ 'k' ]);
//テストデータ取得
$where[ 'dir'  ] = $dir;
$where[ 'type' ] = 0;
$test = $t->getTest($where);

$login_id = $test[ 'login_id' ];
if(!$test){
	$temp = "";
}
if($login_id){
	$glob = glob(D_PATH_HOME."/img/".$login_id.".*");
}
if($glob[0]){
	$logoName = basename($glob[0]);
	$logo = "<img src='".D_URL."img/".$logoName."' >";
}


//--------------------------------
//現在登録されているsessionと引数のｋを比較
//相違があればsession outを行う
//--------------------------------

/*
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
*/
$tamentype = $_REQUEST[ 'tamentype' ];
if($temp){
	$temp = $temp;
}else{
	$temp = "guide";
}
include_once("./php/test".$first."/index.php");

include_once("./template/test".$first."/".$temp."_".$tamentype.".php");

session_out;


?>