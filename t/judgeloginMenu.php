<?php


require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_t.php");
require_once(D_PATH_HOME."/lib/include_judge.php");
session_start();

//var_dump($_SESSION[ 'exam' ]);
/*****************
 * session examがないときはリダイレクト
 */


$db = new method();
$t  = new tMethod();
$obj = new judge();

$csrf_token = uniqid();
$html = "menu";

/*********************
 * テストデータ取得
 */
$k = $_REQUEST[ 'k' ];
$where[ 'dir'  ] = base64_decode($k);
$where[ 'type' ] = 0;
$test = $t->getTest($where);
/*
if(!$test || $test[ 'judge_login' ] != 1){
    $html = "error";
}
*/
if(!$test ){
    $html = "error";
}
$testlists = [];
$agent = $_SERVER['HTTP_USER_AGENT'];
$mobile = ua_smt();
if(preg_match("/^DoCoMo/", $agent)){
    $mobile = true;
}else if(preg_match("/^J-PHONE|^Vodafone|^SoftBank/", $agent)){
    $mobile = true;
}else if(preg_match("/^UP.Browser|^KDDI/", $agent)){
    $mobile = true;
}


if($test){
    //テストリスト取得
    $testlist = $obj->___getTestList($test,$a_test_type);   
    $testcount = count($testlist);
    //テスト完了した際には終了画面を表示
    $completeCount = 0;
    foreach($testlist as $key=>$val){
        if($val[ 'complete_flg' ] == 1){
            $completeCount++;
        }
    }
    $completeFlg = "";
    if($completeCount === $testcount){
        $completeFlg = "testComplete";
    }
    $_SESSION['csrf_token'] = $csrf_token;

    //ロゴ画像がある時はそちらを利用
    $logoimage = $obj->__getLogoImage($test);



    if(count($_SESSION[ 'visit' ]) < 1){
        $html = "error";
    }

}

include_once("./template/judgelogin_head.php");
include_once("./template/judgelogin_".$html.".php");
include_once("./template/judgelogin_foot.php");
$_SESSION['error']  = "";


function ua_smt (){
    //ユーザーエージェントを取得
    $ua = $_SERVER['HTTP_USER_AGENT'];
    //スマホと判定する文字リスト
    $ua_list = array('iPhone','iPad','iPod','Android');
    foreach ($ua_list as $ua_smt) {
//ユーザーエージェントに文字リストの単語を含む場合はTRUE、それ以外はFALSE
        if (strpos($ua, $ua_smt) !== false) {
            return true;
        }
    } 
    return false;
}
