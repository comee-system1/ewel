<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
$js[1] = "page";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="f18">
		本検査は、職場でのコミュニケーションに関するアンケートです。<br />
		他の誰かに相談したりしないで、あなたのお考えをありのままにお答え下さい。回答は個人情報とは切り離して保管され、個人が特定されたり、個人的に分析されることはありません。

		</p>
		<ol class="f18">
			<li>回答を入力しないと次ページに進めません。</li> 
			<li>ブラウザの戻るボタンは使えません。ページ下部の「戻る」で、前のページに戻れます。</li>
			<li>質問は、全部で131問あります。受検時間の目安は15分です。</li>
			<li>特に指定のない限り、選択肢はあてはまる番号を１つだけ選び、チェックをして下さい。</li>
			<li>文章記入欄には、具体的な言葉をご記入下さい。</li>
			<li>検査を途中終了した場合は、再度ログインし直してください。<br />検査は最初から表示されますが、前回の回答が記入されておりますので、途中からご受検頂けます。</li>
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を中断された場合は、再度ログインし直してください。</li>


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
