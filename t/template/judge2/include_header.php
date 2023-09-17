<?php
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK rel="stylesheet" href="<?=D_URL?>css/test/base.css" type="text/css">
<script src="<?=D_URL?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?=D_URL?>js/alerts.js" type="text/javascript"></script>
<LINK rel="stylesheet" href="<?=D_URL?>css/alerts.css" type="text/css">
<meta name="viewport" content="width=device-width">

<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<?PHP
if($css1){
?>
<LINK rel="stylesheet" href="<?=D_URL?>/css/test/<?=$css1?>.css" type="text/css">
<?PHP
}
?>

<?PHP
if(count($js)){
	foreach($js as $key=>$val){
?>
<script src="<?=D_URL?>/js/test/<?=$val?>.js" type="text/javascript"></script>
<?PHP
	}
}
?>
<title><?=$title?></title>
<noscript id="noscript">
<div >JavaScriptを有効にしてください</div>
</noscript>
<style type="text/css" >
    form ol {
        font-size:120%
    }
    p.f120{
        font-size: 120%;
    }
    p.f140{
        font-size: 140%;
    }
    p{
        font-weight: normal;
    }
    input.chk{
        width:20px;
        height:20px;
    }
    
    table tr.g{
        background-color:#e0ffff;
    }
    table tr th:first-child{
        width:40px !important;
        text-align:center;
    }
    table tr th.n{
        width:80px;
    }
    input{
        font-style : normal !important;
        font-weight:normal !important;
    }
</style>
</head>
<body onContextmenu="return false">
