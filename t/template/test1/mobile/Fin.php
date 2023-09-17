<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

include_once(D_PATH_HOME."/init/resultBa1.php");
?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if(!$fin_disp){
?>
		<div id="m_rltBox">
			<div><?=$test[ 'testname' ]?>が終了しました</div>
			<div><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</div>
			<div class="red">
				お疲れ様でした。以上で検査終了となります。<br />
				未受検の検査がないかメニュー画面に移動し、確認してください。
			</div>

			<?php if($test[ 'licensecard' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より受検証明書がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>
			
			<?php if($test[ 'exam_download' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より検査結果がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>
			
		</div>
<?php
	}else{
?>
		<div id="m_rltBox">
		<div><?=$ans_data[ $soyo ][0]?></div>
		<div class="tle" ><?=$ans_data[ $soyo ][1]?></div>
		<div class="sub" ><?=$ans_data[ $soyo ][2]?></div>
		<div class="center"><img src='<?=D_URL?>/images/<?=$imgDir?>/<?=$ans_data[ $soyo ][3]?>' /></div>
		<div><?=$ans_data[ $soyo ][4]?></div>
		
		<div id="m_fin">
			お疲れ様でした。以上で検査終了となります。
		</div>
		<div id="m_fin2">
			未受検の検査がないか、「メニューに戻る」ボタンで<br />メニュー画面に移動し、確認してください。
		</div>
		</div>
<?PHP
	}
?>
		<input type="hidden" name="exam_id" value="<?=$_REQUEST[ 'e' ]?>">
		<input type="hidden" name="mobileFin" value="1">
		<center><input type="submit" id="menu" value="メニューに戻る" ></center>
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
