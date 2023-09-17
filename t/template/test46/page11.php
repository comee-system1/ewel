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
			<p class="nm">46.</p>
			<p class="q">メンタルヘルスに関する従業員の情報などの取り扱いに関して、社内規程に明記されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans46' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans46" value="1" id="ans46_1" class="radio2" <?=$chk[1]?> ><label for="ans46_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans46" value="2" id="ans46_2" class="radio2" <?=$chk[2]?> ><label for="ans46_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans46" value="3" id="ans46_3" class="radio2" <?=$chk[3]?> ><label for="ans46_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans46" value="4" id="ans46_4" class="radio2" <?=$chk[4]?> ><label for="ans46_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[46]?>


		<li class="num" >
			<p class="nm">47.</p>
			<p class="q">健康情報（健診結果なども含む）の取り扱いに関して、社内規程が明確である</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans47' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans47" value="1" id="ans47_1" class="radio2" <?=$chk[1]?>><label for="ans47_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans47" value="2" id="ans47_2" class="radio2" <?=$chk[2]?>><label for="ans47_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans47" value="3" id="ans47_3" class="radio2" <?=$chk[3]?>><label for="ans47_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans47" value="4" id="ans47_4" class="radio2" <?=$chk[4]?>><label for="ans47_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[47]?>


		<li class="num" >
			<p class="nm">48.</p>
			<p class="q">産業医が、労働者の健康情報を人事部門などに提供する場合のルールが明確である</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans48' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans48" value="1" id="ans48_1" class="radio2" <?=$chk[1]?>><label for="ans48_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans48" value="2" id="ans48_2" class="radio2" <?=$chk[2]?>><label for="ans48_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans48" value="3" id="ans48_3" class="radio2" <?=$chk[3]?>><label for="ans48_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans48" value="4" id="ans48_4" class="radio2" <?=$chk[4]?>><label for="ans48_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[48]?>


		<li class="num" >
			<p class="nm">49.</p>
			<p class="q">労働者の健康情報を、家族、上司などから聴取する場合には、本人の承諾を得るルールがある</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans49' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans49" value="1" id="ans49_1" class="radio2" <?=$chk[1]?>><label for="ans49_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans49" value="2" id="ans49_2" class="radio2" <?=$chk[2]?>><label for="ans49_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans49" value="3" id="ans49_3" class="radio2" <?=$chk[3]?>><label for="ans49_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans49" value="4" id="ans49_4" class="radio2" <?=$chk[4]?>><label for="ans49_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[49]?>

		<li class="num" >
			<p class="nm">50.</p>
			<p class="q">従業員の健康情報の取り扱いに関する社内ルールは、すべての従業員に周知徹底されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans50' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans50" value="1" id="ans50_1" class="radio2" <?=$chk[1]?>><label for="ans50_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans50" value="2" id="ans50_2" class="radio2" <?=$chk[2]?>><label for="ans50_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans50" value="3" id="ans50_3" class="radio2" <?=$chk[3]?>><label for="ans50_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans50" value="4" id="ans50_4" class="radio2" <?=$chk[4]?>><label for="ans50_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[50]?>
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
