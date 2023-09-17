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
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

		<ol>
			<li>回答時間は15分程度です。この調査へのご協力は任意であり、途中で回答をやめてもかまいません。</li>
			<li>この調査の個人の回答は直接、㈱イノベーションゲートのシステムに保存され、会社や上司には開示されません。</li>
			<li>研究者（青山学院大学　繁桝江里）には個人名の情報は開示されません。</li>
			<li>回答は統計的に分析されます。会社には調査結果の全体像のみを報告します。また、学術的な知見は学会や論文で発表されますが、社名は非公開です。</li>
			<li>この研究は文部科学省科学研究費の助成を受けて行われています。</li>
			<li class="b">回答を入力しないと次ページに進めません。回答の途中で何らかの原因によりログアウトされた場合や、回答を途中で中断された場合は、再度ログインし直し、最初から再度ご回答頂くこととなります。</li>
			<li>上記をお読みいただいた上でご協力くださる方は、『検査を開始する』をクリックして回答画面にお進みください。</li>
		</ol>
	<div class="center" style="text-align:center;">
		<input type="button" name="page" value="閉じる" class="button" onClick="window.close(); return false;">

		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="flag" value="start">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="m" value="<?=$_REQUEST[ 'm' ]?>">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
