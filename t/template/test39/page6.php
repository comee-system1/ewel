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
	<div style="font-size:18px;height:50px;">もっとも適当と思われるものを選択肢a～dより1つだけ選んで下さい。</div>


<?PHP
	$key2 = $exam[ 'no' ];
	foreach($exam[ 'ans' ] as $key=>$val){
?>

	<div style="font-size:18px;"><?=$key?>.　<?=$val?></div>
	<table id="table" style="margin-bottom:20px;">
<?PHP
		$code = "code".$key;
		$num = 1;


		foreach($exam[$code] as $k=>$v){

			$ans = "ans".$key2;
			$img1 = "off";
			$chk1 = "";
			if($tdetail[ $ans ] == $num){
				$chk1 = "CHECKED";
				$img1 = "on";
			}

?>
			<tr>
				<td style="width:50px;">
					<div class="indent" ><input type="radio" value="<?=$num?>" name="sec[<?=$key2?>]" id="sec_<?=$key2?>_<?=$num?>" <?=$chk1?>  class="rd<?=$key2?>"></div>
					<img src="<?=D_URL_TEST?>image/check_<?=$img1?>.gif" width=30 id="i_<?=$key2?>_<?=$num?>" class="i_<?=$key2?> images">
				</td>
				<td>
					<div id="div_<?=$key2?>_<?=$num?>" class="i_<?=$key2?> images"><?=$k?>.<?=$v?></div>
				</td>
			</tr>
<?PHP
			$num++;
		}
?>		
	</table>
<?PHP
	$key2++;
	}
?>

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
