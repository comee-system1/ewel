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
			<p class="nm">11.</p>
			<p class="q">従業員ひとり当たり、最低年に1時間程度、メンタルヘルスケアを学ぶ機会を与えられている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans11' ] == $i ){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans11" value="1" id="ans11_1" class="radio2" <?=$chk[1]?> ><label for="ans11_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans11" value="2" id="ans11_2" class="radio2" <?=$chk[2]?> ><label for="ans11_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans11" value="3" id="ans11_3" class="radio2" <?=$chk[3]?> ><label for="ans11_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans11" value="4" id="ans11_4" class="radio2" <?=$chk[4]?> ><label for="ans11_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[11]?>


		<li class="num" >
			<p class="nm">12.</p>
			<p class="q">ポスターやWebサイト（イントラネット）、社内報などで、心身の健康増進を定期的に呼びかけている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans12' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans12" value="1" id="ans12_1" class="radio2" <?=$chk[1]?>><label for="ans12_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans12" value="2" id="ans12_2" class="radio2" <?=$chk[2]?>><label for="ans12_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans12" value="3" id="ans12_3" class="radio2" <?=$chk[3]?>><label for="ans12_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans12" value="4" id="ans12_4" class="radio2" <?=$chk[4]?>><label for="ans12_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[12]?>
		<li class="num" >
			<p class="nm">13.</p>
			<p class="q">全ての従業員が、産業医の顔と名前を知っている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans13' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans13" value="1" id="ans13_1" class="radio2" <?=$chk[1]?>><label for="ans13_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans13" value="2" id="ans13_2" class="radio2" <?=$chk[2]?>><label for="ans13_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans13" value="3" id="ans13_3" class="radio2" <?=$chk[3]?>><label for="ans13_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans13" value="4" id="ans13_4" class="radio2" <?=$chk[4]?>><label for="ans13_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[13]?>
		<li class="num" >
			<p class="nm">14.</p>
			<p class="q">管理職以上には、部下の健康管理や労務リスク（従業員の自殺による企業の損害賠償など）についても勉強させている</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans14' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans14" value="1" id="ans14_1" class="radio2" <?=$chk[1]?>><label for="ans14_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans14" value="2" id="ans14_2" class="radio2" <?=$chk[2]?>><label for="ans14_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans14" value="3" id="ans14_3" class="radio2" <?=$chk[3]?>><label for="ans14_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans14" value="4" id="ans14_4" class="radio2" <?=$chk[4]?>><label for="ans14_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[14]?>

		<li class="num" >
			<p class="nm">15.</p>
			<p class="q">アクティブリスニング（傾聴）やハラスメント防止、アサーティヴネス、リラクセイションなど、派生した内容の研修も実施している</p></li>
		<ul class="line" >
<?PHP
	$chk = array();
	for($i=1;$i<=4;$i++){
		if($tdetail[ 'ans15' ] == $i){
			$chk[$i] = "CHECKED";
		}
	}
?>
			<li><input type="radio" name="ans15" value="1" id="ans15_1" class="radio2" <?=$chk[1]?>><label for="ans15_1" ><span><?=$answord[1]?></span></label></li>
			<li><input type="radio" name="ans15" value="2" id="ans15_2" class="radio2" <?=$chk[2]?>><label for="ans15_2" ><span><?=$answord[2]?></span></label></li>
			<li><input type="radio" name="ans15" value="3" id="ans15_3" class="radio2" <?=$chk[3]?>><label for="ans15_3" ><span><?=$answord[3]?></span></label></li>
			<li><input type="radio" name="ans15" value="4" id="ans15_4" class="radio2" <?=$chk[4]?>><label for="ans15_4" ><span><?=$answord[4]?></span></label></li>
		</ul>
		<?=$err[15]?>
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
