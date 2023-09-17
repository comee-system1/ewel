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
		<ol class="guide">
			<li>良好な労使関係を構築し、また弊社が適切に職場の安全配慮義務を果たせるようにするために、貴殿の健康状態について教えてください。</li>
			<li>なお、本質問に対する回答は任意ですので、貴殿は一部のみ回答することも、全ての回答を拒否することもできます。回答を拒否する場合は、「回答を見送ります」を選択してください。</li>
			<li>本質問に対する回答は、採否の判断の一資料として、また、採用後の配属部署等の検討のための資料として用いる場合があります。回答内容をそれ以外の用途に用いることはなく、情報は厳重に管理いたします。</li>
			<li>設問は全部で５問です。回答を入力しないと次に進めません</li>
			<li>ブラウザの「戻る」ボタンは使えません。</li>
			<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。前回の回答したページから再度受検ができます。</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
			<li>当社は、個人情報を適切な方法で管理し、貴殿の同意なく、当社の役職員を除く第三者に対し開示することはありません。</li>
		</ol>
		
	<div class="center">
		<input type="submit" name="page" value="回答を開始する" class="button">
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
