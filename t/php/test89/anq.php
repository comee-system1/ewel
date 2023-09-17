<?PHP
ini_set('display_errors', "On");
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
require_once(D_PATH_HOME."t/lib/include_jud.php");
$jud = new judgeClass();
include_once("array.php");
//where句の作成
$where = array();
//読み込むhtmlファイルの指定
//上司用
if($_REQUEST[ 'mem' ] != $_SESSION[ 'judge' ][ 'login_id' ]){
	echo "検査に不具合が発生しました。再度受検をお願いします。";
	exit();
}
$where[ 'jmid' ] = $_REQUEST[ 'mem' ];
//本人データ取得
$mem = $jud->getMember($where);
//選択した部下のデータ取得
$sub = $jud->getAnqSubordinate($mem,$first);
$bossname = $sub[ 'ans5' ];
$pager  = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);

$array_ques = array(
	1=>"この２週間の中で、他の受講生と研修内容について深く話した。"
	,2=>"この２週間の中で、チームのメンバーと研修内容について深く話した。"
	,3=>"受講していた当時、研修はその後の仕事に活用できそうな内容だと思った。"
	,4=>"この２週間の中で、研修で学んだことを職場で実践するために、考える時間を作ろうと努力した。"
	,5=>"この２週間の中で、研修で学んだことを職場で実践する機会を作ろうと努力した"
	,6=>"この２週間の中で、研修で学んだことを職場で実践する機会が十分にあった。"
	,7=>"この２週間の中で、研修で学んだことの職場での実践状況を振り返る機会が十分にあった。"
	,8=>"この２週間の中で、受講した研修で学んだことを十分に実践した。"
	,9=>"受講した研修で学んだ知識やスキルが、その後の仕事に役立った（役立っている）と思う。"
	);

$array_column = [
	1=>"まったくあてはまらない",
	2=>"あまりあてはまらない",
	3=>"どちらともいえない",
	4=>"ある程度あてはまる",
	5=>"とてもあてはまる",
];


//--------------------------------
//回答登録
//--------------------------------
if($_REQUEST[ 'next' ]){
	$temp = "anq";

	$table = "jug_inquiry_text";
	//エラーチェック
	$errflg = 0;

	for($i=1;$i<=6;$i++){
		if(!$_REQUEST[ 'anq' ][$i]){
			$err[$i] = "アンケート1-".$i."番が選択されていません。";
			$errflg += 1;
		}
	}
	for($i=7;$i<=15;$i++){
		$num = $i - 6;
		if(!$_REQUEST[ 'anq' ][$i]){
			$err[$i] = "アンケート2-".$num."番が選択されていません。";
			$errflg += 1;
		}
	}
	
	if(count($_REQUEST[ 'anq' ])){
		foreach($_REQUEST[ 'anq' ] as $key=>$val){
			$edit = array();
			$key = preg_replace("/\-/","",$key);
			$anq = "anq".$key;
			$edit[ 'where' ][ 'id' ] = $_REQUEST[ 'jitid' ];
			$edit[ 'edit' ][ $anq ] = $val;

			$db->editUserData($table,$edit);
		}
	}
	if(!$errflg){
		$edit = array();
		$edit[ 'where' ][ 'id' ] = $_REQUEST[ 'jitid' ];
		$edit[ 'edit' ][ 'status' ] = 1;
		$db->editUserData($table,$edit);
		$temp = "Fin";
	}
}

//現在のアンケート取得
$anqid = $jud->getAnqData($mem,$first);
if($anqid[ 'status' ] != 1){
	if(!$anqid[ 'jitid' ] || $anqid[ 'status' ] == 1){
	//	$temp = "error";
		$errmsg = $test[ 'testname' ]."を受けていないため、アンケートに進めません。担当の方に確認してください。";
	}
}

$jitid = $anqid[ 'jitid' ];
	
if($temp == "guide" && $_REQUEST[ 'flag' ] != "start" && !$_REQUEST[ 'next' ] ){
	$temp = "anqGuide";
}

if($temp == "page" || $_REQUEST[ 'flag' ] == "start"){
	$temp = "anq";
}
$test[ 'testname' ] = $test[ 'testname' ]."(フィードバック研修に関するアンケート)";
?>