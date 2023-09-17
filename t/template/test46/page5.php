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
			<p class="nm">16.</p>
			<p class="q">法で定められた配備ができている（50名以上の事業場すべてに）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans16' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans16" value="1" id="ans16_1" class="radio2" <?=$chk[1]?> ><label for="ans16_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans16" value="2" id="ans16_2" class="radio2" <?=$chk[2]?> ><label for="ans16_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans16" value="3" id="ans16_3" class="radio2" <?=$chk[3]?> ><label for="ans16_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans16" value="4" id="ans16_4" class="radio2" <?=$chk[4]?> ><label for="ans16_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[16]?>


		<li class="num" >
			<p class="nm">17.</p>
			<p class="q">産業医は、ビジネスマンのメンタルヘルスに関する知識を、積極的に吸収している（精神科でなくても）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans17' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans17" value="1" id="ans17_1" class="radio2" <?=$chk[1]?>><label for="ans17_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans17" value="2" id="ans17_2" class="radio2" <?=$chk[2]?>><label for="ans17_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans17" value="3" id="ans17_3" class="radio2" <?=$chk[3]?>><label for="ans17_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans17" value="4" id="ans17_4" class="radio2" <?=$chk[4]?>><label for="ans17_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[17]?>
		<li class="num" >
			<p class="nm">18.</p>
			<p class="q">産業医は、月に1度企業を訪問し、職場巡視／（安全）衛生委員会への参加をしている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans18' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans18" value="1" id="ans18_1" class="radio2" <?=$chk[1]?>><label for="ans18_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans18" value="2" id="ans18_2" class="radio2" <?=$chk[2]?>><label for="ans18_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans18" value="3" id="ans18_3" class="radio2" <?=$chk[3]?>><label for="ans18_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans18" value="4" id="ans18_4" class="radio2" <?=$chk[4]?>><label for="ans18_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[18]?>
		<li class="num" >
			<p class="nm">19.</p>
			<p class="q">産業医は、人事労務部門と、円滑なコミュニケーションが取れている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans19' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans19" value="1" id="ans19_1" class="radio2" <?=$chk[1]?>><label for="ans19_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans19" value="2" id="ans19_2" class="radio2" <?=$chk[2]?>><label for="ans19_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans19" value="3" id="ans19_3" class="radio2" <?=$chk[3]?>><label for="ans19_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans19" value="4" id="ans19_4" class="radio2" <?=$chk[4]?>><label for="ans19_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[19]?>

		<li class="num" >
			<p class="nm">20.</p>
			<p class="q">産業医は、メンタル不調者の休職や復職の場面で、主治医とのやり取りを含め、専門家として積極的に関わる</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans20' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans20" value="1" id="ans20_1" class="radio2" <?=$chk[1]?>><label for="ans20_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans20" value="2" id="ans20_2" class="radio2" <?=$chk[2]?>><label for="ans20_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans20" value="3" id="ans20_3" class="radio2" <?=$chk[3]?>><label for="ans20_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans20" value="4" id="ans20_4" class="radio2" <?=$chk[4]?>><label for="ans20_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[20]?>
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
