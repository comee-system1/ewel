<?php

?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK rel="stylesheet" href="<?=D_URL?>css/test/base.css" type="text/css">
<script src="<?=D_URL?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?=D_URL?>js/alerts.js" type="text/javascript"></script>
<!--
<script src="/js/footerFixed.js" type="text/javascript"></script>
-->
<LINK rel="stylesheet" href="<?=D_URL?>css/alerts.css" type="text/css">

<?PHP
if($css1){
?>
<LINK rel="stylesheet" href="<?=D_URL?>css/test/type55/<?=$css1?>.css" type="text/css">
<?PHP
}
?>

<title>AAC</title>
<script type="text/javascript">
document.onkeydown = keys;
function keys(){
	switch (event.keyCode ){
		case 116: // F5
		case 82: // Ctrl + R　
		event.keyCode = 0;
		return false;
		break;
	}
}
history.forward();
</script>
</head>
<body oncontextmenu="return false;">
