<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<script type="text/javascript">
<!--
$(function(){
	window.opener.location.reload();
});
//-->
</script>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="f18" style="text-align:center;display:inline-block;line-height:100px;height:100px;width:900px;">
			ご回答いただきありがとうございました。
		</p>
		<div class="center">
			<input type="button" name="result" value="閉じる" class="button" onClick="window.open('about:blank','_self').close();">
		</div>
	</form>
	<input type="hidden" id="alerts" value="<?=$alert?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
