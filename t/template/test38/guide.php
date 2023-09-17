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
	<form action="/test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<ol>
			<li>アンケートの質問は17問あります。受検時間の目安は５分です。</li>
			<li>もっとも適当と思われるものを選択肢１～６より1つだけ選んでください。</li>
			<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
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
