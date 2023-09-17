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
		<img src="<?=D_URL?>images/dp/<?=$exam[ 'img' ]?>" />
	</div>
	<div class="exBox"><?=$exam[ 'code' ]?></div>
	<div class="answerBox">
	<br cler=all />
	<table class="ansTbl1">
		<tr>
			<td class="num" >&nbsp;</td>
			<td colspan=5 class="num">
				
				<div id="codeBox">
					<div class="lefts"><?=$exam[code1]?></div>
					<div class="rights"><?=$exam[code2]?></div>
				</div>
			</td>
		</tr>
<?PHP

		foreach($exam[ 'ans' ] as $key=>$val){
			$code = $answer[ $exam[key] ][$key-1];
?>
			<tr>
				<td class="tle" ><?=$alpha[$key]?> <?=$val?></td>
<?PHP
				for($i=1;$i<=5;$i++){
					$chk = "";
					$c = "";
					if($code == $i){
						$chk = "CHECKED";
						$c = "on";
					}
?>
					<td id="td_<?=$key?>_<?=$i?>" class="td_<?=$key?> <?=$c?>" >
						<div class="indent"><input type="radio" name="sec[<?=$pager?>][<?=$key?>]" value="<?=$i?>" id="chk_<?=$key?>_<?=$i?>" <?=$chk?> class="rd<?=$key?>" ></div>
						<div class="radio2 cl" id="radio_<?=$key?>_<?=$i?>"><?=$i?></div>
					</td>
<?PHP
				}
?>
			</tr>
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
