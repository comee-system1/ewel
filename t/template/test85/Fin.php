<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

include_once(D_PATH_HOME."/init/resultBa1.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">

		<div id="rltBox">
		<p><?=$ans_data[ $soyo ][0]?></p>
		<p class="tle" ><?=$ans_data[ $soyo ][1]?></p>
		<p class="sub" ><?=$ans_data[ $soyo ][2]?></p>
		<p><?=$ans_data[ $soyo ][4]?></p>
		
		<p class="fin">
			お疲れ様でした。以上で検査終了となります。
		</p>
		<p class="fin2">
			未受検の検査がないか、「メニューに戻る」ボタンで<br />メニュー画面に移動し、確認してください。
		</p>
		</div>

		<center><input type="button" id="menu" value="メニューに戻る" class="button"></center>
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
