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
		<p>本診断は、「マネジメントとして日々の業務において、どのように意識・判断し、行動されているか」について質問をしております。</p>
		<ol>
			<li>各質問に対し、現在のご自身に当てはまるものを選択肢の中から選択してください。 </li>
			<li>回答を入力しないと次ページに進めません。 </li>
			<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「1つ前のページに戻る」で、1ページ前にだけ戻れます。 </li>
			<li>設問は42問で、受検時間の目安は10分です。 </li>
			<li>受検の制限時間は<?=$times[ 'minute_rest' ]?>分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。</li> 
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、再度ログインし直して頂きます。画面表示は最初からになりますが、回答については残っておりますので、続きから回答してください。 </li>
			<li>当社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="tid" value="<?=$_REQUEST[ 'tid' ]?>">
		<input type="hidden" name="e" value="<?=$_REQUEST[ 'e' ]?>">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
