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
			<li>回答を入力しないと次ページに進めません。</li> 
			<li>この意識調査の個人の回答は会社や上司には開示されません。</li>
			<li>研究者には個人名の情報は開示されません。</li>
			<li>回答は統計的に分析されます。会社には調査結果の全体像のみを報告します。また、学術的な知見は学会や論文で発表されますが、社名は非公開で す。</li>
			<li>この研究は文部科学省科学研究費の助成を受けて行われています。</li>
			<li class="b">検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、再度ログインし直し、検査の最初から再度ご受検頂くこととなります。</li>
			
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
