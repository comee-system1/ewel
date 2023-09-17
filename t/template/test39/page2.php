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
			<td align=center colspan=2 >
				<img src="<?=D_URL?>images/sp/img<?=$exam[ 'img' ]?>.jpg">
			</td>
		</tr>
		<tr>
			<td colspan=2 >
				<div style="margin:auto;width:650px;">
				<?=$exam[ 'key' ]?>.　上の写真の表情に下記a～gの各感情が、それぞれどの程度表れていると思いますか。<br />　　選択肢１～１０から選択肢より、1つだけ選んで下さい。
				</div>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<div class="left">
					全く表れていない
				</div>
				<div class="right">
					完全に表れている
				</div>
			</td>
		</tr>
<?PHP
		$key2 = $exam[ 'q' ];
		foreach($array_page2 as $key=>$val){
			$key = $key2;
?>
		<tr>
			<td><?=$val?></td>
			<td >
				<ul class="mAns" >
<?PHP
			
				for($i=1;$i<=10;$i++){
					$chk = "";
					$ans = "ans".$key;
					$cl = "";
					if($tdetail[ $ans ] == $i){
						$chk = "CHECKED";
						$cl  = "gray";
					}
?>
					<li class="<?=$cl?> page2">
						<div class="pos indent"><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_<?=$key?>_<?=$i?>" <?=$chk?> class="rd<?=$key?>"></div>
						<div class="radio cl_<?=$key?>" id="div_<?=$key?>_<?=$i?>"  ><div class="mgc"><?=$i?></div></div>
					</li>
<?PHP
				}

						$key2++;
?>
				</ul>
				<br clear=all />
			</td>
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
		$btn = "検査完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next2">
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
