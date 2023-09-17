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
	<div class="questionBox">
		<p><?=$exam[ 'title' ]?></p>
	</div>
	<div class="answerBox">
		<div class="w680">
<?PHP
	if($errmsg){
?>
	<div class="errmsg">
<?PHP
	foreach($errmsg as $key=>$val){
?>
		<?=$val?><br />
<?PHP
	}
?>
	</div>
<?PHP
	}
?>

			<ul class="sub">
				<li class="num">9</li>
				<li class="bd">強いブランドは、資産として捉えることができる。これを何と呼ぶか。<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			if($tdetail[ 'ans16' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans16' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans16' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans16' ] == 4) $chk4 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[16]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	ブランド・エクイティ</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[16]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	ブランド・プレミアム</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[16]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	ブランド・ベネフィット</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[16]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④	ブランド・メリット</div></label></li><br clear=all />

			</ul>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">10</li>
				<li class="bd">デビット・アーカーは、ブランドを資産として構成する要素を5つ挙げている。そのうちの４つは、「ブランド・ロイヤリティ」「ブランドの認知度」「ブランド連想」「所有権のあるブランド資産」である。残りのもう1つとして、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans17' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans17' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans17' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans17' ] == 4) $chk4 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[17]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	ブランド・エンブレム</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[17]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	価値イメージ</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[17]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	知覚品質</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[17]" value="3" class="radio" <?=$chk4?> /></div><div class="left lh40">④	ブランド価値</div></label></li><br clear=all />

			</ul>
                                                                                     
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">11</li>
				<li class="bd">次の文章はブランドの資産価値に関する説明である。ア～ウの説明について、<u class="b" >正誤を答えなさい。</u></li>
			</ul>
			<br clear=all />
<?PHP
			$array = array();
			$array[18] = "(ア)　確立されたブランドであっても、消費者・顧客の知覚への影響は少ない。";
			$array[19] = "(イ)　ブランド名が知られていても、ネガティブな反応を引き起こす場合は、ブランドとは言えない。";
			$array[20] = "(ウ)　資産価値の高いブランドは、それ自体が流通性があり、売買の対象となる。";

			for($i=18;$i<=20;$i++){
				$chk1 = "";
				$chk2 = "";
				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
?>
			<div><?=$array[$i]?></div>
			<ul class="ansmenu ml20">
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">正</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">誤</div></label></li>
			</ul>
<?PHP
			}
?>
		</div>
	</div>
	<br clear=all />
	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
		<input type="submit" name="next" value="次のページ" class="button" id="next">
	</div>
	<input type="hidden" name="nextPage" value="5" id="nextPage">
	<input type="hidden" name="backPage" value="3" id="backPage">
	<input type="hidden" name="temp" value="page">
	<input type="hidden" name="time" value="<?=$time?>" id="time" >
	<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>

<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
