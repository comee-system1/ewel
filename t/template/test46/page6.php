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
			<p class="nm">21.</p>
			<p class="q">法令で定めれられた対象者は、定期健康診断を100%受診している（休職者などは除く）</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans21' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans21" value="1" id="ans21_1" class="radio2" <?=$chk[1]?> ><label for="ans21_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans21" value="2" id="ans21_2" class="radio2" <?=$chk[2]?> ><label for="ans21_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans21" value="3" id="ans21_3" class="radio2" <?=$chk[3]?> ><label for="ans21_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans21" value="4" id="ans21_4" class="radio2" <?=$chk[4]?> ><label for="ans21_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[21]?>


		<li class="num" >
			<p class="nm">22.</p>
			<p class="q">健康診断の結果に基づき産業医が就労判定を行い、判定を元に人事部門が措置を行う仕組みが機能している</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans22' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans22" value="1" id="ans22_1" class="radio2" <?=$chk[1]?>><label for="ans22_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans22" value="2" id="ans22_2" class="radio2" <?=$chk[2]?>><label for="ans22_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans22" value="3" id="ans22_3" class="radio2" <?=$chk[3]?>><label for="ans22_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans22" value="4" id="ans22_4" class="radio2" <?=$chk[4]?>><label for="ans22_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[22]?>
		<li class="num" >
			<p class="nm">23.</p>
			<p class="q">2次健診、要再検査、要治療などを、人事部門か社内産業スタッフが、きめ細やかにフォローしている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans23' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans23" value="1" id="ans23_1" class="radio2" <?=$chk[1]?>><label for="ans23_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans23" value="2" id="ans23_2" class="radio2" <?=$chk[2]?>><label for="ans23_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans23" value="3" id="ans23_3" class="radio2" <?=$chk[3]?>><label for="ans23_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans23" value="4" id="ans23_4" class="radio2" <?=$chk[4]?>><label for="ans23_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[23]?>


		<li class="num" >
			<p class="nm">24.</p>
			<p class="q">健康リスクを抱えた従業員をリスト化し、管理している</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans24' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans24" value="1" id="ans24_1" class="radio2" <?=$chk[1]?>><label for="ans24_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans24" value="2" id="ans24_2" class="radio2" <?=$chk[2]?>><label for="ans24_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans24" value="3" id="ans24_3" class="radio2" <?=$chk[3]?>><label for="ans24_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans24" value="4" id="ans24_4" class="radio2" <?=$chk[4]?>><label for="ans24_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[24]?>

		<li class="num" >
			<p class="nm">25.</p>
			<p class="q">産業医のいない拠点（50名未満）での要医師面接者への対応も、万全である</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans25' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans25" value="1" id="ans25_1" class="radio2" <?=$chk[1]?>><label for="ans25_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans25" value="2" id="ans25_2" class="radio2" <?=$chk[2]?>><label for="ans25_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans25" value="3" id="ans25_3" class="radio2" <?=$chk[3]?>><label for="ans25_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans25" value="4" id="ans25_4" class="radio2" <?=$chk[4]?>><label for="ans25_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[25]?>
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
