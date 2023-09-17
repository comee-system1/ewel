<?PHP
$css1 = "guide";
$css2 = "page";
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
<?PHP
	$section = "セクションD";
	if($pager >= 31){
		$section = "セクションH";
	}
?>
	<p id="TimeLeft"></p>
	<h3><?=$section?></h3>
	<h3>次の3コマの漫画を読んで、その下に示したそれぞれの対応はどの程度役に立つでしょうか。<br />最も適切な答えを1つ選んでください。 </h3>
	<div id="waku">
		<div class="center">
			<img src="<?=$exam[ 'mimg' ]?>">
		</div>
		<p><?=$exam[ 'key' ]?>.<?=$exam[ 'question' ]?></p>
<?PHP
		foreach($exam[ 'ans' ] as $key=>$val){
?>
		<p class="pg4_useful1" >役に立たない</p>
		<p class="pg4_useful2" >役に立つ</p>
		<div class="clearfix">
			<div class="left">
				<img src="<?=$val?>" >
			</div>
			<div class="left clearfix mt40">

				<table class="qtable f16 w500" >
					<tr>
<?PHP
					$code = "ans".$key;
					for($i=1;$i<=5;$i++){
						$sel = "";
						$yellow  = "";
						if($tdetail[ $code ] == $i ){
							$sel = "CHECKED";
							$yellow  = "yellow";
						}
?>
						<td>
							<div class="rd bg_<?=$key?> <?=$yellow?>" id="a_<?=$key?>_<?=$i?>" >
								<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> ><?=$i?>
							</div>
						</td>
<?PHP
					}
?>
					</tr>
				</table>
			</div>
		</div>
<?PHP
		}
?>
		<div class="center mt40">
<?PHP
	if($pager > 1){
?>
			<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "完了";
	}else{
		$btn = "次のページ";
	}
?>
			<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
		</div><!--button-->
	</div><!--waku-->
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
