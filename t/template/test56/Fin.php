<?PHP

if($language == 2){
	//中国語
	$title = "待检查完成屏幕";
	$str1 = "检查完毕";
	$str2 = "但它是结束";
	$str3 = "这是检查的完成";

	$str6 = "关闭";

}else{
	$title = "受検完了画面";
	$str1 = "受検完了画面";
	$str2 = "が終了しました";
	$str3 = "お疲れ様でした。以上で検査終了となります。<br />未受検の検査がないかメニュー画面に移動し、確認してください。";

	$str6 = "閉じる";
}

$css1 = "guide";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
	<h2 class="title"><?=$str1?></h2>
	<ol>
		<li>◆ <?=$test[ 'testname' ]?><?=$str2?></li>
		<li>◆ <?=$str3?></li>
	</ol>

	<div class="center">
		<input type="button" name="page" value="<?=$str6?>" class="button" id="close">
	</div>

	<input type="hidden" name="temp" value="page">
	</form>


	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript">
<!--
$(function(){
	window.opener.location.reload();
	$("#close").click(function(){
		(window.open('','_self').opener=window).close();
		return false;
	});
});
//-->
</script>
<?PHP
include_once("include_footer.php");
?>
