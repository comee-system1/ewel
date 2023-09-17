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
		<h3>下記の内容をよく読んでから研修を始めてください。</h3>
		<ol>
			<li>下記の内容をよく読んでから研修を始めてください。</li>
			<li>設問は10問です。研修時間の目安は約10分程度です。</li>
			<li>回答を入力しないと次に進めません</li>
			<li>回答中前の画面に戻ることはできません。</li>
			<li>ブラウザの「戻る」ボタンは使えません。</li>
			<li>研修の途中で何らかの原因によりログアウトされた場合や、研修を途中で中断された場合は、再度ログインしてください。再研修の場合は、最初の設問からスタートします。</li>
			<li class="red">10問中 正解が5問以下であった場合は再研修となります。</li>
		</ol>
		<div class="center">
			<input type="submit" name="page" value="研修を開始する" class="button">
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
