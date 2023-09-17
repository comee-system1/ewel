<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	
		<p class="fin">
			お疲れ様でした。以上で検査終了となります。
		</p>
		<p class="fin2">
			未受検の検査がないか、「メニューに戻る」ボタンで<br />メニュー画面に移動し、確認してください。
		</p>

		<a href="../../?k=<?=$_REQUEST[ 'k' ]?>" class="btn btn-primary">メニューに戻る</a>
	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
