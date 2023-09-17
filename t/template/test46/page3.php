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
			<p class="nm">6.</p>
			<p class="q">メンタルヘルス対策の取り組みが年度計画に盛り込まれ、アクションプランも作っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans6' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans6" value="1" id="ans6_1" class="radio2" <?=$chk[1]?> ><label for="ans6_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans6" value="2" id="ans6_2" class="radio2" <?=$chk[2]?> ><label for="ans6_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans6" value="3" id="ans6_3" class="radio2" <?=$chk[3]?> ><label for="ans6_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans6" value="4" id="ans6_4" class="radio2" <?=$chk[4]?> ><label for="ans6_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[6]?>
		<li class="num" >
			<p class="nm">7.</p>
			<p class="q">メンタルヘルス関連の社内事例を蓄積、分析しており、それを部署内で共有し、改善に役立てている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans7' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans7" value="1" id="ans7_1" class="radio2" <?=$chk[1]?>><label for="ans7_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans7" value="2" id="ans7_2" class="radio2" <?=$chk[2]?>><label for="ans7_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans7" value="3" id="ans7_3" class="radio2" <?=$chk[3]?>><label for="ans7_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans7" value="4" id="ans7_4" class="radio2" <?=$chk[4]?>><label for="ans7_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[7]?>
		<li class="num" >
			<p class="nm">8.</p>
			<p class="q">メンタルヘルス対策や施策に関する業務仕様書があり、だれが担当者になっても明確に仕事がわかるようになっている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans8' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans8" value="1" id="ans8_1" class="radio2" <?=$chk[1]?>><label for="ans8_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans8" value="2" id="ans8_2" class="radio2" <?=$chk[2]?>><label for="ans8_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans8" value="3" id="ans8_3" class="radio2" <?=$chk[3]?>><label for="ans8_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans8" value="4" id="ans8_4" class="radio2" <?=$chk[4]?>><label for="ans8_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[8]?>
		<li class="num" >
			<p class="nm">9.</p>
			<p class="q">経営陣に、メンタル不調者によって発生した損失や、各施策の費用対効果を定期的に報告する会議体がある</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans9' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans9" value="1" id="ans9_1" class="radio2" <?=$chk[1]?>><label for="ans9_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans9" value="2" id="ans9_2" class="radio2" <?=$chk[2]?>><label for="ans9_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans9" value="3" id="ans9_3" class="radio2" <?=$chk[3]?>><label for="ans9_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans9" value="4" id="ans9_4" class="radio2" <?=$chk[4]?>><label for="ans9_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[9]?>

		<li class="num" >
			<p class="nm">10.</p>
			<p class="q">社外の専門家を有効利用している</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans10' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans10" value="1" id="ans10_1" class="radio2" <?=$chk[1]?>><label for="ans10_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans10" value="2" id="ans10_2" class="radio2" <?=$chk[2]?>><label for="ans10_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans10" value="3" id="ans10_3" class="radio2" <?=$chk[3]?>><label for="ans10_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans10" value="4" id="ans10_4" class="radio2" <?=$chk[4]?>><label for="ans10_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[10]?>
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
