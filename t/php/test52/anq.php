<?PHP


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
$sub = $jud->getAnqSubordinate($mem);
$pager  = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);

$array_ques = array(
				1=>"研修で聞いた内容を明確に覚えている"
				,2=>"研修で決めた目標を明確に覚えている"
				,3=>"研修で決めた目標が適切だったと思っている"
				,4=>"研修で決めた目標を十分に達成している"
				,5=>"この１週間、".$sub[ 'sei' ].$sub[ 'mei' ]."さんに対するフィードバックの仕方について、意識をした"
				,6=>"この１週間、".$sub[ 'sei' ].$sub[ 'mei' ]."さんに対するフィードバックの仕方について、行動を変えた"
				,"6-1"=>"（６が１以外の人）この１週間で、".$sub[ 'sei' ].$sub[ 'mei' ]."さんの意識や行動が変わった"
				,7=>"この１週間、".$sub[ 'sei2' ].$sub[ 'mei2' ]."さんに対するフィードバックの仕方について、意識をした"
				,8=>"この１週間、".$sub[ 'sei2' ].$sub[ 'mei2' ]."さんに対するフィードバックの仕方について、行動を変えた"
				,"8-1"=>"（６が１以外の人）この１週間で、".$sub[ 'sei2' ].$sub[ 'mei2' ]."さんの意識や行動が変わった"
				);
//--------------------------------
//回答登録
//--------------------------------
if($_REQUEST[ 'next' ]){
	$temp = "anq";

	$table = "jug_inquiry_text";
	//エラーチェック
	$errflg = "";

	for($i=1;$i<=13;$i++){
		if(!$_REQUEST[ 'ans' ][$i]){
			$err[$i] = "アンケート".$i."番が選択されていません。";
			$errflg += 1;
		}
	}
	
	if($_REQUEST[ 'ans' ]['6'] != 1 && !$_REQUEST[ 'ans' ]['61']){
		$err[$i] = "アンケート6-1番が選択されていません。";
		$_REQUEST[ 'ans' ][ '61' ] = "";
		$errflg += 1;
	}
	if($_REQUEST[ 'ans' ]['8'] != 1 && !$_REQUEST[ 'ans' ]['81']){
		$err[$i] = "アンケート8-1番が選択されていません。";
		$_REQUEST[ 'ans' ][ '81' ] = "";
		$errflg += 1;
	}

	if(count($_REQUEST[ 'ans' ])){
		foreach($_REQUEST[ 'ans' ] as $key=>$val){
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
$anqid = $jud->getAnqData($mem);
if($anqid[ 'status' ] != 1){
	if(!$anqid[ 'jitid' ] || $anqid[ 'status' ] == 1){
		$temp = "error";
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