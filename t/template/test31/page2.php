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
	<div class="exBox"><?=$exam[ 'code' ]?></div>
	<div class="answerBox">

<?PHP
	$j=0;
	$ans = $answer[ $pager ];
	foreach($exam[ 'detail' ] as $key=>$val){
?>
	<div class="pageQuesBox">
		<div class="number pageLeft p10"><?=$val[ 'no' ]?>．</div>
		<div class="title pageRight p90"><?=$val[ 'tle' ]?></div>
	</div>
	<table class="ansTbl2">
		<tr>
			<td class="num" >&nbsp;</td>
			<td colspan=5 class="num">
				
				<div id="codeBox">
					<div class="lefts"><?=$exam[code1]?></div>
					<div class="rights"><?=$exam[code2]?></div>
				</div>
			</td>
		</tr>
		<tr>
			<td class="tle wd"><span class="unit">a.</span><span class="unit"><?=$val[a]?></span></td>
<?PHP

				for($i=1;$i<=5;$i++){
					$chk = "";
					$c   = "";
					if($ans[$key][0] == $i){
						$chk = "CHECKED";
						$c   = "on";
					}
?>
					<td id="td_a_<?=$key?>_<?=$i?>" class="td_a_<?=$key?> <?=$c?>" >
						<div class="indent"><input type="radio" name="sec[<?=$pager?>][<?=$key?>][a]" value="<?=$i?>" id="chk_a_<?=$key?>_<?=$i?>" <?=$chk?> class="rd<?=$key?>_a" ></div>
						<div class="radio3 cl" id="radio_a_<?=$key?>_<?=$i?>"><?=$i?></div>
					</td>
<?PHP
				}
?>
			
		</tr>
		<tr>
			<td class="tle wd"><span class="unit">b.</span><span class="unit"><?=$val[b]?></span></td>
<?PHP
				for($i=1;$i<=5;$i++){
					$chk = "";
					$c   = "";
					if($ans[$key][1] == $i){
						$chk = "CHECKED";
						$c   = "on";
					}
?>
					<td id="td_b_<?=$key?>_<?=$i?>" class="td_b_<?=$key?> <?=$c?>" >
						<div class="indent"><input type="radio" name="sec[<?=$pager?>][<?=$key?>][b]" value="<?=$i?>" id="chk_b_<?=$key?>_<?=$i?>" <?=$chk?> class="rd<?=$key?>_b" ></div>
						<div class="radio3 cl" id="radio_b_<?=$key?>_<?=$i?>"><?=$i?></div>
					</td>
<?PHP
				}
?>
		</tr>
		<tr>
			<td class="tle wd"><span class="unit">c.</span><span class="unit"><?=$val[c]?></span></td>
<?PHP
				for($i=1;$i<=5;$i++){
					$chk = "";
					$c   = "";
					if($ans[$key][2] == $i){
						$chk = "CHECKED";
						$c   = "on";
					}
?>
					<td id="td_c_<?=$key?>_<?=$i?>" class="td_c_<?=$key?> <?=$c?>" >
						<div class="indent"><input type="radio" name="sec[<?=$pager?>][<?=$key?>][c]" value="<?=$i?>" id="chk_c_<?=$key?>_<?=$i?>" <?=$chk?> class="rd<?=$key?>_c" ></div>
						<div class="radio3 cl" id="radio_c_<?=$key?>_<?=$i?>"><?=$i?></div>
					</td>
<?PHP
				}
?>
		</tr>
	</table>
<?PHP
	$j++;
	}
?>

	</div>

	<br clear=all />
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
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
