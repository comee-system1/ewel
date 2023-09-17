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

	<p>貴社の<?=$object?>として、<span class="red" >AとBの行動のどちらを取って欲しくないですか。取って欲しくない行動を想定し、</span>設問に回答してください。 </p>
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<table id="table">
		<tr>
			<th class="w10">No</th>
			<th>Ａ</th>
			<th class="w10">明確にＡ</th>
			<th class="w10">どちらかというとＡ</th>
			<th class="w10">どちらかというとＢ</th>
			<th class="w10">明確にＢ</th>
			<th>Ｂ</th>
		</tr>
<?PHP
		foreach($exam as $key=>$val){
			$img1 = "off";
			$chk1 = "";
			$img2 = "off";
			$chk2 = "";
			$img3 = "off";
			$chk3 = "";
			$img4 = "off";
			$chk4 = "";
			$q = "vf".$key;
			if($tdetail[$q] == 1){
				$img1 = "on";
				$chk1 = "CHECKED";
			}
			if($tdetail[$q] == 2){
				$img2 = "on";
				$chk2 = "CHECKED";
			}
			if($tdetail[$q] == 3){
				$img3 = "on";
				$chk3 = "CHECKED";
			}
			if($tdetail[$q] == 4){
				$img4 = "on";
				$chk4 = "CHECKED";
			}

?>
		<tr>
			<td class="no"><?=$key?></td>
			<td ><?=$val[a]?></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="1" id="chk_<?=$key?>_1" <?=$chk1?> class="values<?=$key?>"></div>
					<img src="<?=D_URL_TEST?>image/check_<?=$img1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="2" id="chk_<?=$key?>_2" <?=$chk2?> class="values<?=$key?>"></div>
					<img src="<?=D_URL_TEST?>image/check_<?=$img2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="3" id="chk_<?=$key?>_3" <?=$chk3?> class="values<?=$key?>"></div>
					<img src="<?=D_URL_TEST?>image/check_<?=$img3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="4" id="chk_<?=$key?>_4" <?=$chk4?> class="values<?=$key?>"></div>
					<img src="<?=D_URL_TEST?>image/check_<?=$img4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" /></td>
			<td ><?=$val[b]?></td>
		</tr>

<?PHP
		}
?>
	</table>
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
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
