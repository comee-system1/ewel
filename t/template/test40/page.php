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
	<div class="questionBox">
		<p><?=$exam[ 'title' ]?></p>
	</div>
	<div class="answerBox">
	<table id="table">
		<tr>
			<th class="w40">設問№</th>
			<th>設問内容</th>
			<th class="w60" >当て<br />はまる</th>
			<th class="w60" >ややあて<br />はまる</th>
			<th class="w60" >どちら<br />でもない</th>
			<th class="w60" >あまり当て<br />はまらない</th>
			<th class="w60" >当て<br />はまらない</th>

		</tr>
<?PHP
	foreach($exam as $key=>$val){
		$chk1 = "";
		$chk2 = "";
		$chk3 = "";
		$chk4 = "";
		$chk5 = "";

		$on1 = "off";
		$on2 = "off";
		$on3 = "off";
		$on4 = "off";
		$on5 = "off";
		$ans = "ans".$key;
		if($tdetail[ $ans ] == 1){
			$chk1 = "CHECKED";
			$on1   = "on";
		}
		if($tdetail[ $ans ] == 2){
			$chk2 = "CHECKED";
			$on2   = "on";
		}
		if($tdetail[ $ans ] == 3){
			$chk3 = "CHECKED";
			$on3   = "on";
		}
		if($tdetail[ $ans ] == 4){
			$chk4 = "CHECKED";
			$on4   = "on";
		}
		if($tdetail[ $ans ] == 5){
			$chk5 = "CHECKED";
			$on5   = "on";
		}
?>
		<tr>
			<td><?=$key?></td>
			<td class="left"><?=$val?></td>
			<td>
				<div class="indent">
					<input type="radio" name="sec[<?=$key?>]" value="5" id="chk_<?=$key?>_5" <?=$chk5?> class="rd<?=$key?>">
				</div>
				<div class="radio" id="div_<?=$key?>_5">
					<img src="<?=D_URL_TEST?>image/check_<?=$on5?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_5" />
				</div>
			</td>
			<td>
				<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="4" id="chk_<?=$key?>_4" <?=$chk4?> class="rd<?=$key?>" ></div>
				<div class="radio" id="div_<?=$key?>_4"><img src="<?=D_URL_TEST?>image/check_<?=$on4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" /></div>
			</td>
			<td>
				<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="3" id="chk_<?=$key?>_3" <?=$chk3?> class="rd<?=$key?>" ></div>
				<div class="radio" id="div_<?=$key?>_3"><img src="<?=D_URL_TEST?>image/check_<?=$on3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" /></div>
			</td>
			<td>
				<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="2" id="chk_<?=$key?>_2" <?=$chk2?> class="rd<?=$key?>" ></div>
				<div class="radio" id="div_<?=$key?>_2"><img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" /></div>
			</td>
			<td>
				<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="1" id="chk_<?=$key?>_1" <?=$chk1?> class="rd<?=$key?>" ></div>
				<div class="radio" id="div_<?=$key?>_1"><img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" /></div>
			</td>

		</tr>

<!--
		<tr>
			<td class="answer">
				<ul class="mAns" >
					<li>
						<div class="indent">
							<input type="radio" name="sec[<?=$key?>]" value="4" id="chk_<?=$key?>_1" <?=$chk1?> class="rd<?=$key?>">
						</div>
						
						<div class="radio" id="div_<?=$key?>_1"><img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" />
						<?=$ans1?></div>
					</li>
					<li><div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="3" id="chk_<?=$key?>_2" <?=$chk2?> class="rd<?=$key?>" ></div>
						<div class="radio" id="div_<?=$key?>_2">
						<img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" />
						<?=$ans2?></div>
					</li>
					<li><div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="2" id="chk_<?=$key?>_3" <?=$chk3?> class="rd<?=$key?>" ></div>
						
						<div class="radio" id="div_<?=$key?>_3"><img src="<?=D_URL_TEST?>image/check_<?=$on3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" />
						<?=$ans3?></div>
					</li>
					<li><div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="1" id="chk_<?=$key?>_4" <?=$chk4?> class="rd<?=$key?>" ></div>
						<div class="radio" id="div_<?=$key?>_4"><img src="<?=D_URL_TEST?>image/check_<?=$on4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" />
						<?=$ans4?></div>
					</li>
				</ul>
				<br clear=all />
			</td>
		</tr>
-->
<?PHP
	}
?>
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
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
		<input type="hidden"  value="<?=count($exam)?>" id="count" >

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
