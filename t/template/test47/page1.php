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
	$section = "セクションB";
	$questions = "次のそれぞれの質問について、最もあてはまると思う数字を1つ選んで答えてください。 ";
	if($pager >= 24){
		$section = "セクションF";
		$questions = "次の各項目について、各々の感情を想像して、a～cのそれぞれに答えてください。<br />
					もしその感情を想像できなくても、直感で答えてください。";
	}
?>
	<h3><?=$section?></h3>
	<div id="waku">
	<h3><?=$questions?></h3>

<?PHP
	foreach($exam as $eKye => $eVal){
?>
		<div class="clearfix mt80">
			<ul class="question f16">
				<li><?=$eVal[ 'key' ]?>.</li>
				<li><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>

<?PHP
		//表示パターンを変える
		if($eVal[ 'flg' ] == 1){
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
						<br />
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
			<div class="clearfix">
				<p class="mt40 left disp1" >役に立たない</p>
				<p class="mt40 left disp2" style="margin-left:290px;">役に立つ</p>
			</div>
			<table class="qtable f16" >
<?PHP
				foreach($eVal[ 'ans' ] as $key=>$val){
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
<?PHP
		}
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
