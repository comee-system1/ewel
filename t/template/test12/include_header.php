<?php

?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8; IE=EmulateIE9">
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
<LINK rel="stylesheet" href="<?=D_URL?>css/test/type1/<?=$css1?>.css" type="text/css">
<?PHP
}
?>

<?PHP
if($js && count($js)){
	foreach($js as $key=>$val){
?>
<script src="<?=D_URL?>js/test/type1/<?=$val?>.js" type="text/javascript"></script>
<?PHP
	}
}
?>
<title><?=$title?></title>
<style type="text/css">
<!--
div.box{
	border:1px solid #000000;
	padding:10px;
	margin:10px;
	height:180px;
	width:60%;
	margin: 10px auto;
}
.explainleft{
	float:left;
	position:absolute;
	margin:20px 0px 0px 20px;

}
.explainleft2{
	position:absolute;
	margin:20px 0px 0px 100px;
}
div.explainleft2 ul{
	list-style-type:none;
	padding:0;
	margin:0;
}
div.explainleft2 ul li{
	float:left;
	margin-left:10px;

}
div.explainleft2 ul li.mgl30{
	margin-left:30px;
}
div.explainleft2 ul li.mgl40{
	margin-left:40px;
}
div.explainleft2 ul li.mgl50{
	margin-left:50px;
}
div.explainleft2 ul li.mgl60{
	margin-left:60px;
}
.clearfix:after{
	display:block;
	display: table;
	content:"";
	clear:both;
}
.tradio{
	width:20px;
}
//-->
</style>
<script type="text/javascript">
<!--
$(function(){
	$(".tradio").click(function(){
		var _rd = $(this).attr("class").split("_");
		//console.log( $(".tradio").attr("src").replace('_off','_on') );
		var _rdooff = $(".rd_"+_rd[1]).attr("src").replace('_on', '_off');
		$(".rd_"+_rd[1]).attr("src",_rdooff);
		var _rdo = $(".rd_"+_rd[1]).attr("src").replace('_off', '_on');
		$(this).attr("src",_rdo);
	})
});
//-->
</script>
</head>
<body onContextmenu="return false">
