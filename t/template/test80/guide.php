<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
	<h2>ガイダンス</h2>

	<div class="box" >
		<h3>下記の内容をよく読んでから受験を始めてください。</h3>
		<ol>
			<li>設問は7問です。<span class="red">6問正解で合格です。</span></li>
			<li>受験時間の目安は10分強です。</li>
			<li>受験のフローは下記となります。
				<br />
				<img src="/image/nspeguide.PNG" style="width:80%;" />
			</li>
			<li>科目の受験途中で終了するとそこまでの回答はリセットされますので、再度受験してください。</li>
			<li>ブラウザの「戻る」ボタンは使えません。</li>
		</ol>
		<div class="center">
			<input type="submit" name="page" value="受験を開始する" class="button">
		</div>
	</div>
	

	<input type="hidden" name="temp" value="page">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
