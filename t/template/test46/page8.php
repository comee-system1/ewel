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

	<p id="TimeLeft"></p>
	<div class="question">
	<ol class="questionOl">
		<li class="num" >
			<p class="nm">31.</p>
			<p class="q">社内に健康相談／心の相談／キャリア相談、いずれかの窓口があり、その存在や利用方法がすべての従業員に周知されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans31' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans31" value="1" id="ans31_1" class="radio2" <?=$chk[1]?> ><label for="ans31_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans31" value="2" id="ans31_2" class="radio2" <?=$chk[2]?> ><label for="ans31_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans31" value="3" id="ans31_3" class="radio2" <?=$chk[3]?> ><label for="ans31_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans31" value="4" id="ans31_4" class="radio2" <?=$chk[4]?> ><label for="ans31_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[31]?>


		<li class="num" >
			<p class="nm">32.</p>
			<p class="q">社外に健康相談／心の相談／キャリア相談、いずれかの窓口があり、その存在や利用方法がすべての従業員に周知されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans32' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans32" value="1" id="ans32_1" class="radio2" <?=$chk[1]?>><label for="ans32_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans32" value="2" id="ans32_2" class="radio2" <?=$chk[2]?>><label for="ans32_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans32" value="3" id="ans32_3" class="radio2" <?=$chk[3]?>><label for="ans32_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans32" value="4" id="ans32_4" class="radio2" <?=$chk[4]?>><label for="ans32_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[32]?>
		<li class="num" >
			<p class="nm">33.</p>
			<p class="q">窓口に寄せられた相談内容を（個人情報は抜きにして）労務管理部門などで共有し、今後の取り組みなどに役立てている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans33' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans33" value="1" id="ans33_1" class="radio2" <?=$chk[1]?>><label for="ans33_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans33" value="2" id="ans33_2" class="radio2" <?=$chk[2]?>><label for="ans33_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans33" value="3" id="ans33_3" class="radio2" <?=$chk[3]?>><label for="ans33_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans33" value="4" id="ans33_4" class="radio2" <?=$chk[4]?>><label for="ans33_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[33]?>


		<li class="num" >
			<p class="nm">34.</p>
			<p class="q">人事・労務担当者（会社）が困ったときに、相談できる専門家や機関を、外部に持っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans34' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans34" value="1" id="ans34_1" class="radio2" <?=$chk[1]?>><label for="ans34_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans34" value="2" id="ans34_2" class="radio2" <?=$chk[2]?>><label for="ans34_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans34" value="3" id="ans34_3" class="radio2" <?=$chk[3]?>><label for="ans34_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans34" value="4" id="ans34_4" class="radio2" <?=$chk[4]?>><label for="ans34_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[34]?>

		<li class="num" >
			<p class="nm">35.</p>
			<p class="q">相談者のプライバシーは、内部規程に従い固く守られている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans35' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans35" value="1" id="ans35_1" class="radio2" <?=$chk[1]?>><label for="ans35_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans35" value="2" id="ans35_2" class="radio2" <?=$chk[2]?>><label for="ans35_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans35" value="3" id="ans35_3" class="radio2" <?=$chk[3]?>><label for="ans35_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans35" value="4" id="ans35_4" class="radio2" <?=$chk[4]?>><label for="ans35_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[35]?>
	</ol>
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
