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
			<p class="nm">36.</p>
			<p class="q">休職や復職に関する規程は、メンタル不調によるものを考慮して作られている（休職期間の通算や復職の条件明記など）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans36' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans36" value="1" id="ans36_1" class="radio2" <?=$chk[1]?> ><label for="ans36_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans36" value="2" id="ans36_2" class="radio2" <?=$chk[2]?> ><label for="ans36_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans36" value="3" id="ans36_3" class="radio2" <?=$chk[3]?> ><label for="ans36_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans36" value="4" id="ans36_4" class="radio2" <?=$chk[4]?> ><label for="ans36_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[36]?>


		<li class="num" >
			<p class="nm">37.</p>
			<p class="q">休職時面談のルールとフローが決まっている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans37' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans37" value="1" id="ans37_1" class="radio2" <?=$chk[1]?>><label for="ans37_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans37" value="2" id="ans37_2" class="radio2" <?=$chk[2]?>><label for="ans37_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans37" value="3" id="ans37_3" class="radio2" <?=$chk[3]?>><label for="ans37_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans37" value="4" id="ans37_4" class="radio2" <?=$chk[4]?>><label for="ans37_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[37]?>
		<li class="num" >
			<p class="nm">38.</p>
			<p class="q">復職プログラムが策定されており、復職者が発生するたびに復職判定委員会が開催される</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans38' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans38" value="1" id="ans38_1" class="radio2" <?=$chk[1]?>><label for="ans38_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans38" value="2" id="ans38_2" class="radio2" <?=$chk[2]?>><label for="ans38_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans38" value="3" id="ans38_3" class="radio2" <?=$chk[3]?>><label for="ans38_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans38" value="4" id="ans38_4" class="radio2" <?=$chk[4]?>><label for="ans38_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[38]?>


		<li class="num" >
			<p class="nm">39.</p>
			<p class="q">産業医が、メンタル不調による休職や復職の場面で、協力的であり、頼りになる</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans39' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans39" value="1" id="ans39_1" class="radio2" <?=$chk[1]?>><label for="ans39_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans39" value="2" id="ans39_2" class="radio2" <?=$chk[2]?>><label for="ans39_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans39" value="3" id="ans39_3" class="radio2" <?=$chk[3]?>><label for="ans39_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans39" value="4" id="ans39_4" class="radio2" <?=$chk[4]?>><label for="ans39_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[39]?>

		<li class="num" >
			<p class="nm">40.</p>
			<p class="q">復職者を迎える部署のメンバーに対する再教育の実施が、ルール化されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans40' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans40" value="1" id="ans40_1" class="radio2" <?=$chk[1]?>><label for="ans40_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans40" value="2" id="ans40_2" class="radio2" <?=$chk[2]?>><label for="ans40_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans40" value="3" id="ans40_3" class="radio2" <?=$chk[3]?>><label for="ans40_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans40" value="4" id="ans40_4" class="radio2" <?=$chk[4]?>><label for="ans40_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[40]?>
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
