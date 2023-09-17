<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

include_once(D_PATH_HOME."/init/resultBa3.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">

<?PHP
	if(!$fin_disp){
?>
		<div id="rltBox">
			<p><?=$test[ 'testname' ]?>が終了しました</p>
			<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
			<p class="red center">
				お疲れ様でした。以上で検査終了となります。<br />
				未受検の検査がないかメニュー画面に移動し、確認してください。
			</p>
			<?php if($test[ 'licensecard' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より受検証明書がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>

		</div>
<?php
	}else{
?>
		<div id="rltBox">
		<p><?=$ans_data[$lv][0]?></p>
		<p class="tle" ><?=$ans_data[ $lv ][1]?></p>
		<p class="sub" ><?=$ans_data[ $lv ][2]?></p>
		
		<p class="red center">
			お疲れ様でした。以上で検査終了となります。
		</p>
		<p class="red center">
			未受検の検査がないか、「メニューに戻る」ボタンで<br />メニュー画面に移動し、確認してください。
		</p>
		</div>

<?PHP
	}
?>
		<center><input type="submit"  value="メニューに戻る" class="button"></center>
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
