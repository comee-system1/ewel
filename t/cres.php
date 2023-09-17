<?php

require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_cres.php");

session_start();
$db = new method();
$cres = new cres();
$csrf_token = uniqid("uniq-");

$test = $cres->getTestData();

if(!$test){
    $cres->filenme = "error";
    exit();
}
$cres->test = $test;
if($_REQUEST[ 'logout' ]){
    unset($_SESSION[ 'cres' ]);
}
//unset($_SESSION['cres']);
ini_set('display_errors', "On");
//var_dump($_SESSION[ 'cref_token' ],$_REQUEST[ 'token' ]);
//exit();
if(
    //true || 
    $_SESSION[ 'csrf_token' ] === $_REQUEST[ 'token' ] && 
    $_SESSION['cres'][ 'testpaper_id' ] && 
    $_SESSION['cres'][ 'questiontype' ]
){

    $name = $_SESSION[ 'cres' ][ 'name' ];
    if($_REQUEST[ 'start' ] == "on"){
        $_SESSION[ 'cres' ][ 'menu' ] = 1;
    }
    if($_REQUEST[ 'start' ] == "off"){
        unset($_SESSION[ 'cres' ][ 'menu' ]);
    }
    if(!$_SESSION['cres'][ 'menu' ]){
        $cres->filename = "menu";
    }else{
        $cres->question();
        
    }
    $data = $cres->getCresData();
}else{
    
    if($cres->loginCheck()){
        header("Location:./cres.php?token=".$_REQUEST[ 'token' ]."&k=".$_REQUEST['k']);
        exit();
    }else{
        $cres->filename = "login";
        if(strlen($_SESSION['cres'][ 'errmsg' ])) $cres->errmsg = $_SESSION['cres'][ 'errmsg' ];
        unset($_SESSION['cres']);
    }
}


$_SESSION['csrf_token'] = $csrf_token;
include_once("./template/cres/".$cres->filename.".php");
