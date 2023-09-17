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
		<ol>
			<li>各設問に対し、現在のご自身が取るであろう傾向を選択肢の中から選択してください。</li>
			<li>質問は36問あります。受検時間の目安は１０分です。</li>
			<li>回答を入力しないと次に進めません</li>
			<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「戻る」ボタンで、前のページまで戻れます。</li>
			<li class="b">１つの質問には、AとBの２つの文があります。AとBを比較して、あなたに当てはまる程度を選択し、１つの質問に対し、１箇所のみチェックをしてください。どちらにも当てはまっていない場合、あるいはまったく同じ程度当てはまっている場合には、「どちらともいえない」にチェックしてください。</li>
			<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
			<li>個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>
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
