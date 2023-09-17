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
	<h3 style="text-align:center;">
	受験お疲れ様でした。<br />
	閉じるボタンを押し、メニュー画面に戻り、<br />
	すべての受験科目が終了したか確認してください。
	
	</h3>
	<div class="box  w500 auto" >
		<div style="padding:10px;border:1px solid #000;background-color:thistle;">
			注意：通信等の問題でまれに受講が終了していないことがあります。
			<br />
			<u>必ずメニュー画面に戻り、未受講の講座がないか確認してください。</u>
		</div>
		
	</div>


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
