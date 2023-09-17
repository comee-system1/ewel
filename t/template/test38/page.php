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
	<form action="/test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<table id="table">
		<tr>
			<th class="w20">No</th>
			<th>設問</th>
			<th class="w20">非常によくあてはまる</th>
			<th class="w20">当てはまる</th>
			<th class="w20">どちらかといえば当てはまる</th>
			<th class="w20">どちらかといえば当てはまらない</th>
			<th class="w20">当てはまらない</th>
			<th class="w20">全く当てはまらない</th>
			
		</tr>
<?PHP
		foreach($exam as $key=>$val){
			$ans = "q".$key;
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			$chk6 = "";
			$on1 = "";
			$on2 = "";
			$on3 = "";
			$on4 = "";
			$on5 = "";
			$on6 = "";
			if($tdetail[$ans] == 1){
				$chk1 = "CHECKED";
				$on1 = "on";
			}
			if($tdetail[$ans] == 2){
				$chk2 = "CHECKED";
				$on2 = "on";
			}
			if($tdetail[$ans] == 3){
				$chk3 = "CHECKED";
				$on3 = "on";
			}
			if($tdetail[$ans] == 4){
				$chk4 = "CHECKED";
				$on4 = "on";
			}
			if($tdetail[$ans] == 5){
				$chk5 = "CHECKED";
				$on5 = "on";
			}
			if($tdetail[$ans] == 6){
				$chk6 = "CHECKED";
				$on6 = "on";
			}

?>
		<tr>
			<td class="center"><?=$val[1]?></td>
			<td><?=$val[2]?></td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=6 id="chk_<?=$key?>_6" class="sec_<?=$key?>" <?=$chk6?> ></div>
				<div id="ans_<?=$key?>_6" class='ansBox div_<?=$key?> <?=$on6?>'>6</div>
			</td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=5 id="chk_<?=$key?>_5" class="sec_<?=$key?>" <?=$chk5?> ></div>
				<div id="ans_<?=$key?>_5" class='ansBox div_<?=$key?> <?=$on5?>'>5</div>
			</td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=4 id="chk_<?=$key?>_4" class="sec_<?=$key?>" <?=$chk4?> ></div>
				<div id="ans_<?=$key?>_4" class='ansBox div_<?=$key?> <?=$on4?>'>4</div>
			</td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=3 id="chk_<?=$key?>_3" class="sec_<?=$key?>" <?=$chk3?> ></div>
				<div id="ans_<?=$key?>_3" class='ansBox div_<?=$key?> <?=$on3?>'>3</div>
			</td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=2 id="chk_<?=$key?>_2" class="sec_<?=$key?>" <?=$chk2?> ></div>
				<div id="ans_<?=$key?>_2" class='ansBox div_<?=$key?> <?=$on2?>'>2</div>
			</td>
			<td class="center" ><div class="indent"><input type="radio" name="sec[<?=$key?>]" value=1 id="chk_<?=$key?>_1" class="sec_<?=$key?>" <?=$chk1?> ></div>
				<div id="ans_<?=$key?>_1" class='ansBox div_<?=$key?> <?=$on1?>'>1</div>
			</td>

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
		$btn = "結果表示";
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
