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


	<h3>セクションF</h3>
	<div id="waku">
	<h3>次の各項目について、各々の感情を想像して、a～cのそれぞれに答えてください。<br />もしその感情を想像できなくても、直感で答えてください。</h3>

<?PHP
	foreach($exam as $eKye => $eVal){
?>
		<div class="clearfix">
			<ul class="question f16 pt20">
				<li style="width:8%;"><?=$eVal[ 'key' ]?>.</li>
				<li style="width:88%;"><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>
<?PHP
			if($eVal[ 'flg' ]){
?>

		<table class="qtable f16" >
			<tr>
<?PHP
			foreach($eVal[ 'ans' ] as $key=>$val){
				$code = "ans".$key;
				foreach($val as $i=>$v){
					$sel = "";
					$yellow  = "";
					if($tdetail[ $code ] == $i ){
						$sel = "CHECKED";
						$yellow  = "yellow";
					}
?>
					<td>
						<div class="rd bg_<?=$key?> <?=$yellow?> " id="a_<?=$key?>_<?=$i?>" >
							<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
							<?=$i?>.<?=$v?>
						</div>
					</td>
<?PHP
				}
			}
?>
			</tr>
		</table>

				
<?PHP
			}else{
?>
		<p class="pg4_useful1" >似ていない</p>
		<p class="pg4_useful2" >非常に似ている</p>
		<div class="clearfix">
			<div class="clearfix mt40">

				<table class="qtable f16" >
<?PHP
					foreach($eVal[ 'ans' ] as $key=>$val){
?>
					<tr>
						<th class="w200"><?=$val?></th>
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

<?PHP
					}
?>
				</table>

			</div>
		</div>
<?PHP
			}
?>


<?PHP
	}//foreach終わり
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
