<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

		<div id="rltBox">
			<p><?=$test[ 'testname' ]?>が終了しました</p>
			<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
			<p class="red">
				お疲れ様でした。以上で検査終了となります。<br />
				未受検の検査がないかメニュー画面に移動し、確認してください。
			</p>
			<?php if($test[ 'licensecard' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より受検証明書がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>

			<?php if($test[ 'exam_download' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より検査結果がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>
		</div>

		<center><input type="button" id="close" value="メニューに戻る" class="button"  ></center>
	</form>
	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
<!--
$(function(){
	$(this).ans1();

	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
});
$.fn.ans1=function(){
	window.opener.location.reload();
}
//-->
</script>
<?PHP
include_once("include_footer.php");
?>
