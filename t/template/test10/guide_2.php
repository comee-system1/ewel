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
	<form action="<?=D_URL_TEST?>tamen/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="red">現在のあなたご自身のおかれている環境に関する質問です。</p>
		<ol>
			<li class="red">各質問に対し、現在ご自身がおかれている環境について、最も当てはまる回答を選択肢の中から選択してください。</li>
			<li>回答を入力しないと次ページに進めません。</li>
			<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「１つ前のページに戻る」で、１ページ前に戻れます。</li>
			<li>受検時間の目安は5分です。各ページの右上に残り時間が表示されます。 ただし、長時間(<?=$times[ 'minute_rest' ]?>分)アクセスのないまま放置されますと、システム側より強制ログアウトされますので、 ご注意ください。その場合、再度ログインし直し、検査の最初から再度ご受検いただくことになります。</li>
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を中断された場合は、検査の最初から再度ご受検 いただくことになります。</li>
			<li>当社は、個人情報を適切な方法で管理し、お客様及び受検者の同意なく、第三者に対し開示することはありません。 ただし、研究開発または統計分析を目的として、受検者に関する検査結果を含む個人情報を、個人が識別又は 特定できないように編集加工し、無償で利用する場合があります。</li>
		</ol>

	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="id" value="<?=$_REQUEST[ 'id' ]?>">
		<input type="hidden" name="tamentype" value="<?=$_REQUEST[ 'tamentype' ]?>">

	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
