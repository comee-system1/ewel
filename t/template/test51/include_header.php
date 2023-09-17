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
<LINK rel="stylesheet" href="<?=D_URL?>css/test/type6/<?=$css1?>.css" type="text/css">
<?PHP
}
?>

<?PHP
/*
if(count($js)){
	foreach($js as $key=>$val){
?>
<script src="<?=D_URL?>js/test/type6/<?=$val?>.js" type="text/javascript"></script>
<?PHP
	}
}
*/
?>
<title><?=$title?></title>
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
$(function(){
	$("#close").click(function(){
		if (/Chrome/i.test(navigator.userAgent)) {
			window.close(); 
		} else { 
			window.open('about:blank', '_self').close(); 
		}
		return true;
	});
});
</script>
<style type="text/css">
<!--
.w600{
	width:600px;
	margin:0 auto;
}
.w680{
	width:720px;
	margin:0 auto;
}
ul.ulmenu{
	list-style-type:none;
	margin:0;
	padding:5px;
	border:1px solid #000000;
}
ul.ulmenu li{
	display:inline-block;
	width:250px;
}
p.q{
	margin:0;
	padding:0;
}
ul.ansmenu{
	list-style-type:none;
	margin:0;
	padding:0;
}
ul.ansmenu li{
	display:inline-block;
	line-height:48px;
	font-size:14.5px;
	margin-right:10px;
}
ul.ansmenu li.clear{
	display:block;
}
.radio{
	width:20px;
	height:20px;
}
.a{
	
}
.lh20{
	line-height:20px;
}
.lh25{
	line-height:25px;
}
.lh40{
	line-height:40px;
}
.none{
	margin:0;
	padding:0;
}
.errmsg{
	width:100%;
	border:1px solid red;
	padding:10px;
	margin-bottom:20px;
}
.mgr10{
	margin-right:10px;
}
h3{
	font-size:14.3px;
	font-weight:bold;
}
.blue{
	color:#0000ff;
}
.red{
	color:#ff0000;
}
.b{
	font-weight:bold;
}
div.box{
	border:1px solid #000000;
	padding:5px;
	margin:20px 0px;
}
.ml20{
	margin-left:20px !important;
}
.mt10{
	margin-top:10px;
}
ul.sub{
	list-style-type:none;
	padding:0;
	margin:0;
}
ul.sub li{
	float:left;
}
ul.sub li.num{
	width:60px;
	position:absolute;
	margin-left:-80px;
	text-align:center;
	font-weight:bold;
	font-size:22px;
	color:#fff;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	background:#6495ed;
}

ul.sub li.bd{
	width:720px;
	font-weight:bold;
	font-size:18px;
	margin-bottom:20px;

}
hr{
	height: 1px;
	background: #bbb;
	background-image: -webkit-linear-gradient(left, #eee, #777, #eee);
	background-image: -moz-linear-gradient(left, #eee, #777, #eee);
	background-image: -ms-linear-gradient(left, #eee, #777, #eee);
	background-image: -o-linear-gradient(left, #eee, #777, #eee);
	margin-top:30px;
	margin-bottom:50px;
}
//-->
</style>
</head>
<body oncontextmenu="return false;">
