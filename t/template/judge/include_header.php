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
</head>
<body onContextmenu="return false">
