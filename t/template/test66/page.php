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
	<h3><?=$exam[ 'title' ]?></h3>
	<div id="waku">
		<div class="center">
			<img src="<?=$exam[ 'img' ]?>" width=600>
		</div>
		<div class="clearfix mt40">
			<ul class="question f16">
				<li><?=$exam[ 'key' ]?>.</li>
				<li><?=$exam[ 'question' ]?></li>
			</ul>
		</div>
		<div class="clearfix mt40">
			<p class="mt40 left disp1" >全く表れていない</p>
			<p class="mt40 left disp2" >完全に表れている</p>
		</div>
		<div >
			<table class="qtable f16" >
<?PHP
				foreach($exam[ 'ans' ] as $key=>$val){
					$code = "ans".$key;
?>
				<tr>
					<th><?=$val?></th>
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
<?PHP
				}
?>
			</table>
		</div>
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
		$btn = "結果表示";
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
