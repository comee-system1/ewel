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
	<p id="TimeLeft"></p>

<?PHP
	$section = "セクションD";
	$question = "次の各文章を読んで、その下に示したそれぞれの行動はどの程度役に立つでしょうか。<br />最も適切な答えを1つ選んでください。";
	$keys = "行動";
	if($pager >= 27){
		$section = "セクションH";
		$question = "次の各文章を読んで、それぞれの「対応」に対する答えを、1～5から1つ選んで答えてください。";
		$keys = "対応";
	}
?>
	<h3><?=$section?></h3>
	<h3><?=$question?></h3>
	<div id="waku">

<?PHP
	foreach($exam as $eKye => $eVal){
?>

		<div class="clearfix mt80">
			<ul class="question f16">
				<li><?=$eVal[ 'key' ]?>.</li>
				<li><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>

		<div >
<?PHP
				$no=1;
				foreach($eVal[ 'ans' ] as $key=>$val){
					$code = "ans".$key;
?>
					<div class="marginC">
						<div class="clearfix">
						<ul class="mt40 ulmove">
							<li class="act" ><?=$keys?> <?=$no?>:</li>
							<li class="actIn"><?=$val?></li>
						</ul>
						</div>
						<p class="left " >役に立たない</p>
						<p class="left disp3" style="margin-left:410px;">役に立つ</p>
					</div>
					<table class="qtable f16">
						<tr>
<?PHP
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

<?PHP
					$no++;
				}
?>
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
