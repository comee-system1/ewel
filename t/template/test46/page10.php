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
			<p class="nm">41.</p>
			<p class="q">管理職に、過重労働防止の意識付けを行っている（サービス残業奨励とならないように）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans41' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans41" value="1" id="ans41_1" class="radio2" <?=$chk[1]?> ><label for="ans41_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans41" value="2" id="ans41_2" class="radio2" <?=$chk[2]?> ><label for="ans41_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans41" value="3" id="ans41_3" class="radio2" <?=$chk[3]?> ><label for="ans41_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans41" value="4" id="ans41_4" class="radio2" <?=$chk[4]?> ><label for="ans41_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[41]?>


		<li class="num" >
			<p class="nm">42.</p>
			<p class="q">職場のコミュニケーションに関する調査（社員満足度調査でもよい）を、1年以内に実施したことがある</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans42' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans42" value="1" id="ans42_1" class="radio2" <?=$chk[1]?>><label for="ans42_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans42" value="2" id="ans42_2" class="radio2" <?=$chk[2]?>><label for="ans42_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans42" value="3" id="ans42_3" class="radio2" <?=$chk[3]?>><label for="ans42_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans42" value="4" id="ans42_4" class="radio2" <?=$chk[4]?>><label for="ans42_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[42]?>
		<li class="num" >
			<p class="nm">43.</p>
			<p class="q">ハラスメント（セクハラ／パワハラ／その他のハラスメント）防止・対策に関する規程があり、全従業員に周知徹底されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans43' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans43" value="1" id="ans43_1" class="radio2" <?=$chk[1]?>><label for="ans43_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans43" value="2" id="ans43_2" class="radio2" <?=$chk[2]?>><label for="ans43_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans43" value="3" id="ans43_3" class="radio2" <?=$chk[3]?>><label for="ans43_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans43" value="4" id="ans43_4" class="radio2" <?=$chk[4]?>><label for="ans43_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[43]?>


		<li class="num" >
			<p class="nm">44.</p>
			<p class="q">職場の困りごとを相談する窓口が設置されている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans44' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans44" value="1" id="ans44_1" class="radio2" <?=$chk[1]?>><label for="ans44_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans44" value="2" id="ans44_2" class="radio2" <?=$chk[2]?>><label for="ans44_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans44" value="3" id="ans44_3" class="radio2" <?=$chk[3]?>><label for="ans44_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans44" value="4" id="ans44_4" class="radio2" <?=$chk[4]?>><label for="ans44_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[44]?>

		<li class="num" >
			<p class="nm">45.</p>
			<p class="q">ハラスメント相談などを受け付ける際の帳票や、受付フローなどに関するマニュアル類も整っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans45' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans45" value="1" id="ans45_1" class="radio2" <?=$chk[1]?>><label for="ans45_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans45" value="2" id="ans45_2" class="radio2" <?=$chk[2]?>><label for="ans45_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans45" value="3" id="ans45_3" class="radio2" <?=$chk[3]?>><label for="ans45_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans45" value="4" id="ans45_4" class="radio2" <?=$chk[4]?>><label for="ans45_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[45]?>
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
