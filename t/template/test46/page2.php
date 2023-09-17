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
	<h3>次に、貴社のメンタルヘルスの対策状況をお聞きします。もっとも適当と思われるものを選択肢より1つだけ選んでください</h3>
	<ol class="questionOl">
		<li class="num" ><p class="nm">1.</p><p class="q">経営会議で、メンタルヘルス対策の重要性が統一見解として、認識されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans1' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans1" value="1" id="ans1_1" class="radio2" <?=$chk[1]?> ><label for="ans1_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans1" value="2" id="ans1_2" class="radio2" <?=$chk[2]?> ><label for="ans1_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans1" value="3" id="ans1_3" class="radio2" <?=$chk[3]?> ><label for="ans1_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans1" value="4" id="ans1_4" class="radio2" <?=$chk[4]?> ><label for="ans1_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[1]?>
		<li class="num" >
			<p class="nm">2.</p>
			<p class="q">メンタルヘルス対策に関するガイドライン、もしくは指針があり、社内（もしくは社内外）に発表・掲示されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans2' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans2" value="1" id="ans2_1" class="radio2" <?=$chk[1]?>><label for="ans2_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans2" value="2" id="ans2_2" class="radio2" <?=$chk[2]?>><label for="ans2_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans2" value="3" id="ans2_3" class="radio2" <?=$chk[3]?>><label for="ans2_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans2" value="4" id="ans2_4" class="radio2" <?=$chk[4]?>><label for="ans2_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[2]?>
		<li class="num" >
			<p class="nm">3.</p>
			<p class="q">メンタルヘルス対策を行う部署が、明確化されていて、それぞれの担当や役割が明文化されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans3' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans3" value="1" id="ans3_1" class="radio2" <?=$chk[1]?>><label for="ans3_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans3" value="2" id="ans3_2" class="radio2" <?=$chk[2]?>><label for="ans3_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans3" value="3" id="ans3_3" class="radio2" <?=$chk[3]?>><label for="ans3_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans3" value="4" id="ans3_4" class="radio2" <?=$chk[4]?>><label for="ans3_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[3]?>

		<li class="num" >
			<p class="nm">4.</p>
			<p class="q">健康管理の専門機関が社内にある（例：健康管理室／健康推進センターなど）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans4' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans4" value="1" id="ans4_1" class="radio2" <?=$chk[1]?>><label for="ans4_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans4" value="2" id="ans4_2" class="radio2" <?=$chk[2]?>><label for="ans4_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans4" value="3" id="ans4_3" class="radio2" <?=$chk[3]?>><label for="ans4_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans4" value="4" id="ans4_4" class="radio2" <?=$chk[4]?>><label for="ans4_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[4]?>

		<li class="num" >
			<p class="nm">5.</p>
			<p class="q">役員全員が、メンタルヘルス研修（心の健康に関すること）や労務リスク研修（うつ自殺の多さや、労災認定などに関すること）を受講している</p>
</li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans5' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans5" value="1" id="ans5_1" class="radio2" <?=$chk[1]?>><label for="ans5_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans5" value="2" id="ans5_2" class="radio2" <?=$chk[2]?>><label for="ans5_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans5" value="3" id="ans5_3" class="radio2" <?=$chk[3]?>><label for="ans5_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans5" value="4" id="ans5_4" class="radio2" <?=$chk[4]?>><label for="ans5_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[5]?>
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
