<?php


require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_t.php");
require_once(D_PATH_HOME."/lib/include_judge.php");
//アナリティクス用
require_once(D_PATH_HOME."/lib/include_server.php");

session_start();
$db = new method();
$t  = new tMethod();
$obj = new judge();
$sv  = new Server();


$csrf_token = uniqid();
$html = "login";
$id = $_REQUEST[ 'id' ];
$year = $_REQUEST[ 'year' ];
$month = $_REQUEST[ 'month' ];
$day = $_REQUEST[ 'day' ];
$name1 = $_REQUEST[ 'name1' ];
$name2 = $_REQUEST[ 'name2' ];
$kana1 = $_REQUEST[ 'kana1' ];
$kana2 = $_REQUEST[ 'kana2' ];
$sex = $_REQUEST[ 'sex' ];

/*********************
 * テストデータ取得
 */
$k = $_REQUEST[ 'k' ];
$where[ 'dir'  ] = base64_decode($k);
$where[ 'type' ] = 0;
$test = $t->getTest($where);
if(!$test ){
    $html = "error";
}





$rlt = $obj->__getTestPaper($test);

$rltcheck = $obj->__getTestPaperCheck($test);


if($_REQUEST[ 'login' ] == "on"){
    if(preg_match("/ /",$rlt[ 'name' ])){
        $ex = explode(" ",$rlt[ 'name' ]);
    }else{
        $ex = explode("　",$rlt[ 'name' ]);
    }
    $name1 = $ex[0];
    $name2 = $ex[1];
    $ex = [];
    if(preg_match("/ /",$rlt[ 'kana' ])){
        $ex = explode(" ",$rlt[ 'kana' ]);
    }else{
        $ex = explode("　",$rlt[ 'kana' ]);
    }
    $kana1 = $ex[0];
    $kana2 = $ex[1];
    $sex = $rlt['sex'];
}

$ex = explode("/",$test[ 'period_from' ]);
$test['period_from_date'] = $ex[0]."年".$ex[1]."月".$ex[2]."日";
$ex = explode("/",$test[ 'period_to' ]);
$test['period_to_date'] = $ex[0]."年".$ex[1]."月".$ex[2]."日";
//テスト有効チェック
$test[ 'term' ] = false;
$date = date("Y/m/d");

if(
    $date <= $test[ 'period_to' ]
){
    $test[ 'term' ] = true;
}else{
    //エラー画面
    header("Location:./judgelogin_error.php?k=".$k);
    exit();
}

$testlist = $obj->___getTestListTop($test,$a_test_type);


/**
 * 既にログインしているときはリダイレクト
 */
//unset($_SESSION[ 'visit' ]);
/*
if(
    $_SESSION[ 'visit' ][ 'k' ] &&
    $_SESSION[ 'visit' ][ 'exam_id' ] &&
    $_SESSION[ 'visit' ][ 'test_id' ] 
){
  if(!$test[ 'term' ]){
    $html = "checkFin";
  }else{
    header("Location:./judgeloginMenu.php?k=".$k);
    exit();
  }
}
*/
$notlogin =false;
if(count($_POST) > 0 && $html != "checkFin"){  
    /*
    if($obj->___checkJudgeLogin($test)){
        if(!$test[ 'term' ]){
            $html = "checkFin";
        }else{
            header("Location:./judgeloginMenu.php?k=".$k);
            exit();
        }
    }
    */
    if($html != "checkFin"){

        if (
            true || 
            isset($_POST["csrf_token"]) 
        && $_POST["csrf_token"] === $_SESSION['csrf_token']) {
            //チェックフラグ
            if($_REQUEST[ 'checkComp' ] == "on"){
                if($obj->__editParamJudge($test)){
                    $html = "checkFin";
                    //テスト期間内の時はリダイレクトする
                    if($test[ 'period_from' ] <= $date && $test[ 'period_to' ] >= $date){
                        $_SESSION['visit']['k'] = $_REQUEST[ 'k' ];
                        $_SESSION['visit']['exam_id'] = $_REQUEST[ 'id' ];
                        $_SESSION['visit']['test_id'] = $test['id'];
                        header("Location:./judgeloginMenu.php?k=".$k);
                        exit();
                    }
                    
                }else{
                    $html = "error";
                }
            }
            if($_REQUEST[ 'login' ] == "on" && 
                $obj->__checkParam($test)){
                
                $html = "name";
            }
            if($_REQUEST[ 'nameSet' ] == "on" ){
                $html = "name";

                if($obj->___checkJudgeLogin($test)){



					//ログイン後メニュー画面のときにアクセス情報を登録する
                    $user_agent = $sv->agent();
                    $set = array();
                    $set[ 'testgrp_id'     ] = $test[ 'id' ];
                    if($_REQUEST[ 'exam_id']){
                            $set[ 'exam_id'        ] = $_REQUEST[ 'exam_id' ];
                    }else{
                            $set[ 'exam_id'        ] = $_SESSION[ 'visit' ][ 'exam_id' ];
                    }

                    if($ua){
                            $set[ 'examinee'        ] = $name1." ".$name2;
                    }else{
                            $set[ 'examinee'        ] = $_REQUEST[ 'name1' ]." ".$_REQUEST[ 'name2' ];
                    }
                    $set[ 'login_ts'       ] = date("Y-m-d H:i:s");
                    $set[ 'login_ua'       ] = $user_agent[ 'user_agent' ];
                    if($db->ag){
                            $set[ 'login_brauza'   ] = $db->ag;
                    }else{
                            $set[ 'login_brauza'   ] = $user_agent[ 'name' ];
                    }
                    $set[ 'login_version'  ] = $user_agent[ 'version' ];
                    $set[ 'login_platform' ] = $user_agent[ 'platform' ];
                    $table = "analytics";

                    $db->setUserData($table,$set);



                    if(!$test[ 'term' ]){
                       // $html = "checkFin";
                    }else{
                        //環境判定がされている時はメニューにリダイレクト
                        if($rlt[ 'judge_login_flag' ] == 1
                            && $test[ 'period_from' ] <= $date 
                            && $test[ 'period_to' ] >= $date 

                        ){
                            header("Location:./judgeloginMenu.php?k=".$k);
                            exit();
                        }
                    }
                }else{
                    if($rlt[ 'judge_login_flag_page' ] == 1 && 
                        $test[ 'period_from' ] > $date 
                    ){
                        $html = "checkFin";   
                    }
                    
                }

                if($obj->__checkParam($test) && $html != "checkFin"){
                    if($obj->__checkParamName($test)){
                        $html = "fin";
                    }
                }
            }
            //動作チェック確認画面
            $next_hidden = "next_hidden";
            if($_REQUEST[ 'check' ] == "on" ){
                $html = "check";
                $today = date('Y/m/d');
                if($test[ 'period_from' ] <= $today && $today <= $test[ 'period_to' ]){
                    $next_hidden = "next_hidden_disp";
                }
                list($os,$osflg) = getOs();
                list($browser,$browserflg) = getBrowser();
            }

        }else{
            $_SESSION['error'] = "画面読み込みでエラーが発生しました。再度入力をお願いします。";
            header("Location:./judgelogin.php?k=".$_REQUEST[ 'k' ]);
            exit();
        }
    }
    if($html == "login"){
		$id_miss_flag = false;
		$password_miss_flag = false;
		if($rltcheck){
			$id_miss_flag = true;
		}
        // 最後のログイン失敗をチェックし5分越えていたらステータスを3に変更
		$where = [];
		$where[ 'ip' ] = $_SERVER["REMOTE_ADDR"];
		$where[ 'status' ] = 0;
		$where[ 'page' ] = $_REQUEST[ 'k' ];
		$db->editLoginCheckMAX($where);

        $set = [];
        $table = "logincheck";
        $set[ 'page' ] = $_REQUEST[ 'k' ];
        $set[ 'ip' ] = $_SERVER["REMOTE_ADDR"] ;
        $set[ 'testname' ] = $test["testname"];
		$set[ 'pid' ] = $test["partner_id"];
		$set[ 'cusid' ] = $test["customer_id"];
        $set[ 'brauze' ] = getenv('HTTP_USER_AGENT');
        $set[ 'platform' ] = php_uname();
        
		$set[ 'input_id' ] = $_REQUEST[ 'exam_id' ];
		$set[ 'input_birth' ] = sprintf("%04d-%02d-%02d"
		,$_REQUEST[ 'year' ],$_REQUEST[ 'month' ],$_REQUEST[ 'day' ]);

        $set[ 'misscount' ] = 0;
        $set[ 'id_miss_flag' ] = $id_miss_flag;
		$set[ 'password_miss_flag' ] = $password_miss_flag;
        $set[ 'accessdate' ] = date('Y-m-d H:i:s');
        $db->setUserData($table,$set);

        // 失敗回数
		$where = [];
		$where[ 'ip' ] = $_SERVER["REMOTE_ADDR"];
		$where[ 'status' ] = 0;
		$where[ 'page' ] = $_REQUEST[ 'k' ];
		$check = $db->getLoginCheck($where);
		$miss = 5-count($check);
        
        // エラーの時のログイン画面表示のメッセージ再設定
        $_SESSION['error'] = "
        IDまたは生年月日が異なります。再度ご入力ください。<br />
あと".$miss."回間違えますと、ロックがかかり５分間ログインすることができなくなります。<br />
ID・生年月日がご不明な場合は担当者にご確認ください。

        ";
        if($miss <= 0 ){
            $notlogin = true;
            $_SESSION['error'] = "
            IDまたはPASSWORDが異なります。<br />
５分間ログインすることができません。<br />
ID・PSAAWORDがご不明な場合は担当者にご確認ください
    
            ";
        }

    }
}


$_SESSION['csrf_token'] = $csrf_token;

//ロゴ画像がある時はそちらを利用
$logoimage = $obj->__getLogoImage($test);


include_once("./template/judgelogin_head.php");
include_once("./template/judgelogin_".$html.".php");
include_once("./template/judgelogin_foot.php");
$_SESSION['error']  = "";


function getOs($user_agent = '')
{
    if (empty($user_agent)) {
        // ユーザエージェント
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
    }
    $flg = true;
    if (preg_match('/Windows NT 10.0/', $user_agent)) {
        $os = 'Windows 10';
    } elseif (preg_match('/Windows NT 6.3/', $user_agent)) {
        $os = 'Windows 8.1 / Windows Server 2012 R2';
    } elseif (preg_match('/Windows NT 6.2/', $user_agent)) {
        $os = 'Windows 8 / Windows Server 2012';
    } elseif (preg_match('/Windows NT 6.1/', $user_agent)) {
        $os = 'Windows 7 / Windows Server 2008 R2';
    } elseif (preg_match('/Windows NT 6.0/', $user_agent)) {
        $os = 'Windows Vista / Windows Server 2008';
    } elseif (preg_match('/Windows NT 5.2/', $user_agent)) {
        $os = 'Windows XP x64 Edition / Windows Server 2003';
    } elseif (preg_match('/Windows NT 5.1/', $user_agent)) {
        $os = 'Windows XP';
    } elseif (preg_match('/Windows NT 5.0/', $user_agent)) {
        $os = 'Windows 2000';
    } elseif (preg_match('/Windows NT 4.0/', $user_agent)) {
        $os = 'Microsoft Windows NT 4.0'; 
    } elseif (preg_match('/Mac OS X ([0-9\._]+)/', $user_agent, $matches)) {
        $os = 'Macintosh Intel ' . str_replace('_', '.', $matches[1]);
    } elseif (preg_match('/OS ([a-z0-9_]+)/', $user_agent, $matches)) {
        $os = 'iOS ' . str_replace('_', '.', $matches[1]);
    } elseif (preg_match('/Android ([a-z0-9\.]+)/', $user_agent, $matches)) {
        $os = 'Android ' . $matches[1];
    } elseif (preg_match('/Linux ([a-z0-9_]+)/', $user_agent, $matches)) {
        $os = 'Linux ' . $matches[1];
        $flg = false;
    } else {
        $os = 'unidentified';
        $flg = false;
    }
    return array($os,$flg);
}

function getBrowser(){

    $user_agent = $_SERVER[ 'HTTP_USER_AGENT' ];
    $flg = true;
    if ( preg_match( '/(Iron|Sleipnir|Maxthon|Lunascape|SeaMonkey|Camino|PaleMoon|Waterfox|Cyberfox)\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = $matches[ 1 ];
        $version = $matches[ 2 ];
        // 主要
    } elseif ( preg_match( '/Edge\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = 'Edge';
        $version = $matches[ 2 ];
    } elseif ( preg_match( '/(MSIE\s|Trident.*rv:)([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = 'Internet Explorer';
        $version = (int)$matches[ 2 ];
        if($version < 11){
            $flg = false;
        }
    } elseif ( preg_match( '/Chrome\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = 'Chrome';
        $version = $matches[ 1 ];
    } elseif ( preg_match( '/Firefox\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = 'Firefox';
        $version = $matches[ 1 ];
    } elseif ( preg_match( '/\/([0-9\.]+)(\sMobile\/[A-Z0-9]{6})?\sSafari/', $user_agent, $matches ) ) {
        $browser = 'Safari';
        $version = $matches[ 1 ];
    } elseif ( preg_match( '/(^Opera|OPR).*\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = 'Opera';
        $version = $matches[ 2 ];
        // ゲーム機
    } elseif ( preg_match( '/Nintendo (3DS|WiiU)/', $user_agent, $matches ) ) {
        $browser = 'Nintendo';
        $version = $matches[ 1 ];
        $flg = false;
    } elseif ( preg_match( '/PLAYSTATION (3|Vita)/', $user_agent, $matches ) ) {
        $browser = 'PLAYSTATION';
        $version = $matches[ 1 ];
        $flg = false;
        // BOT
    } elseif ( preg_match( '/(Googlebot|bingbot)\/([0-9\.]+)/', $user_agent, $matches ) ) {
        $browser = $matches[ 1 ];
        $version = $matches[ 2 ];
        $flg = false;
    } else {
        $browser = '不明';
        $version = '';
        $flg = false;
    }
    
    $msg = $browser.$version;
    return array($msg,$flg);
}