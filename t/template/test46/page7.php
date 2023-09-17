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
			<p class="nm">26.</p>
			<p class="q">全ての従業員が、過重労働や、長時間労働で疲労を感じた場合、医師と面接できることを知っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans26' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans26" value="1" id="ans26_1" class="radio2" <?=$chk[1]?> ><label for="ans26_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans26" value="2" id="ans26_2" class="radio2" <?=$chk[2]?> ><label for="ans26_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans26" value="3" id="ans26_3" class="radio2" <?=$chk[3]?> ><label for="ans26_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans26" value="4" id="ans26_4" class="radio2" <?=$chk[4]?> ><label for="ans26_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[26]?>


		<li class="num" >
			<p class="nm">27.</p>
			<p class="q">全ての従業員に対して、法定労働時間から100時間を超えて労働した場合は、医師面接を行っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans27' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans27" value="1" id="ans27_1" class="radio2" <?=$chk[1]?>><label for="ans27_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans27" value="2" id="ans27_2" class="radio2" <?=$chk[2]?>><label for="ans27_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans27" value="3" id="ans27_3" class="radio2" <?=$chk[3]?>><label for="ans27_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans27" value="4" id="ans27_4" class="radio2" <?=$chk[4]?>><label for="ans27_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[27]?>
		<li class="num" >
			<p class="nm">28.</p>
			<p class="q">全ての事業場で、必要が生じたとき、すぐに医師面接の実施が可能な体制を整えてある</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans28' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans28" value="1" id="ans28_1" class="radio2" <?=$chk[1]?>><label for="ans28_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans28" value="2" id="ans28_2" class="radio2" <?=$chk[2]?>><label for="ans28_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans28" value="3" id="ans28_3" class="radio2" <?=$chk[3]?>><label for="ans28_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans28" value="4" id="ans28_4" class="radio2" <?=$chk[4]?>><label for="ans28_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[28]?>


		<li class="num" >
			<p class="nm">29.</p>
			<p class="q">産業医が、過重労働者と高血圧など体調面に不安のある従業員をクロス集計し、就労制限を出せる体制にある</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans29' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans29" value="1" id="ans29_1" class="radio2" <?=$chk[1]?>><label for="ans29_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans29" value="2" id="ans29_2" class="radio2" <?=$chk[2]?>><label for="ans29_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans29" value="3" id="ans29_3" class="radio2" <?=$chk[3]?>><label for="ans29_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans29" value="4" id="ans29_4" class="radio2" <?=$chk[4]?>><label for="ans29_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[29]?>

		<li class="num" >
			<p class="nm">30.</p>
			<p class="q">管理職や、営業マンなど、すべての従業員の労働時間を把握する仕組みになっている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans30' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans30" value="1" id="ans30_1" class="radio2" <?=$chk[1]?>><label for="ans30_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans30" value="2" id="ans30_2" class="radio2" <?=$chk[2]?>><label for="ans30_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans30" value="3" id="ans30_3" class="radio2" <?=$chk[3]?>><label for="ans30_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans30" value="4" id="ans30_4" class="radio2" <?=$chk[4]?>><label for="ans30_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[30]?>
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
