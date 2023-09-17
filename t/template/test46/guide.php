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
		<p class="f18">
			　近年、企業におけるメンタルヘルス対策は、安全配慮義務や労務リスクマネジメントとして、喫緊の課題となりつつあります。
			貴社においても、様々な施策を実施・ご検討されていることと存じます。<br />
			　そこで、貴社のメンタルヘルス対策の実施状況を、様々な観点から拝見し、
				どの程度できているかを診断するためのチェックシートを開発致しました。<br />
			ぜひ、今後のご参考のためにも、お試しいただけると幸いです
		</p>
		<ol>
			<li>各質問に対し、貴社の状況に最も当てはまる選択肢を１つ選んでください。</li>
			<li>設問は全部で50問です。受検時間の目安は15分です。</li>
			<li>回答を入力しないと次に進めません</li>
			<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「戻る」ボタンで、前のページまで戻れます。</li>
			<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。前回の回答したページから再度受検ができます。</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
			<li>当社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>
<!--
			<li>受検の制限時間は<?=$times[ 'minute_rest' ]?>分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。</li>-->
			
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
