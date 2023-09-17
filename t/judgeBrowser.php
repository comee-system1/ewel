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
$html = "browser";





include_once("./template/judgelogin_head.php");
include_once("./template/judgelogin_".$html.".php");
include_once("./template/judgelogin_foot.php");
$_SESSION['error']  = "";
