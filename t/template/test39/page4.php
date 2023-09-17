<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
	<div class="answerBox">
<?PHP
	$ans = "ans".$exam[ 'no' ];
	$img1 = "off";
	$img2 = "off";
	$img3 = "off";
	$img4 = "off";

	if($tdetail[ $ans ] == 1){
		$chk1 = "CHECKED";
		$img1 = "on";
	}
	if($tdetail[ $ans ] == 2){
		$chk2 = "CHECKED";
		$img2 = "on";

	}
	if($tdetail[ $ans ] == 3){
		$chk3 = "CHECKED";
		$img3 = "on";

	}
	if($tdetail[ $ans ] == 4){
		$chk4 = "CHECKED";
		$img4 = "on";

	}
?>
	<div style="font-size:18px;text-align:center;"><?=$exam[ 'key' ]?>.　<?=$exam[ 'q' ]?></div>
	<table style="margin:0 auto;">

		<tr>
			<td align=center >
				<div class="indent" ><input type="radio" value="1" name="sec[<?=$exam[ 'no' ]?>]" id="sec_<?=$exam[ 'no' ]?>_1" <?=$chk1?>  class="rd<?=$exam[ 'no' ]?>"></div>
				<div align=center ><img src="<?=D_URL_TEST?>image/check_<?=$img1?>.gif" width=30 id="i_<?=$exam[ 'no' ]?>_1" class="i_<?=$exam[ 'no' ]?> images" ></div>
				<div class="images" id="s_<?=$exam[ 'no' ]?>_1" ><img src="<?=D_URL?>images/sp/type<?=$exam[ 'key' ]?>1.jpg"  /></div>
			</td>
			<td align=center >
				<div class="indent" ><input type="radio" value="2" name="sec[<?=$exam[ 'no' ]?>]" id="sec_<?=$exam[ 'no' ]?>_2" <?=$chk2?> class="rd<?=$exam[ 'no' ]?>" ></div>
				<div align=center ><img src="<?=D_URL_TEST?>image/check_<?=$img2?>.gif" width=30 id="i_<?=$exam[ 'no' ]?>_2"  class="i_<?=$exam[ 'no' ]?> images"></div>
				<div class="images" id="s_<?=$exam[ 'no' ]?>_2"><img src="<?=D_URL?>images/sp/type<?=$exam[ 'key' ]?>2.jpg"  /></div>
			</td>
		</tr>
		<tr>
			<td align=center>
				<div class="indent"><input type="radio" value="3" name="sec[<?=$exam[ 'no' ]?>]" id="sec_<?=$exam[ 'no' ]?>_3" <?=$chk3?> class="rd<?=$exam[ 'no' ]?>" ></div>
				<div align=center ><img src="<?=D_URL_TEST?>image/check_<?=$img3?>.gif" width=30 id="i_<?=$exam[ 'no' ]?>_3"  class="i_<?=$exam[ 'no' ]?> images"></div>
				<div class="images" id="s_<?=$exam[ 'no' ]?>_3" ><img src="<?=D_URL?>images/sp/type<?=$exam[ 'key' ]?>3.jpg"  /></div>
			</td>
			<td align=center>
				<div class="indent"><input type="radio" value="4" name="sec[<?=$exam[ 'no' ]?>]" id="sec_<?=$exam[ 'no' ]?>_4" <?=$chk4?> class="rd<?=$exam[ 'no' ]?>" ></div>
				<div align=center ><img src="<?=D_URL_TEST?>image/check_<?=$img4?>.gif" width=30 id="i_<?=$exam[ 'no' ]?>_4"  class="i_<?=$exam[ 'no' ]?> images"></div>
				<div class="images" id="s_<?=$exam[ 'no' ]?>_4" ><img src="<?=D_URL?>images/sp/type<?=$exam[ 'key' ]?>4.jpg"  /></div>
			</td>
		</tr>
	</table>
	</div>


	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "検査完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next3">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
		<input type="hidden"  value="<?=$count?>" id="count" >

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
