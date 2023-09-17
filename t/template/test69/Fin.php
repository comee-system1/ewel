<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

	<h2>最終画面</h2>
	<h3 style="text-align:center;">受講お疲れ様でした。</h3>
	<p style="text-align:center;font-size:24px;"><b>日鉄P＆E総務部文書管理チーム</b></p>
	

		<center><input type="button" id="close" value="画面を閉じる" class="button"></center>
	</form>
	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
