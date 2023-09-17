<?PHP
$css1 = "guide";
$css2 = "page";

$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?><?=$text[1]?></div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
<?PHP
	include_once("pager.php");
?>

	<div >
		<p>Ⅲ．文章を読んで選択肢①から④よりもっとも適切なものを1つ選択してください。</p>
	</div>

	<div>
<?PHP
	$answer = $tdetail['ans19'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">19．<p>
			<p class="ques">主要国首脳会議。インフレやエネルギーなど世界経済の諸問題を話し合うため、
					日本、米国、英国、フランス、イタリア、ドイツ、カナダ、ロシアの主要8か国首脳が毎年開催している。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][19]" value="1" class="chk13 ans_19" <?=$chk[1]?> ><p >①ダボス会議</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][19]" value="2" class="chk13 ans_19" <?=$chk[2]?> ><p >②ＮＡＦＴＡ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][19]" value="3" class="chk13 ans_19" <?=$chk[3]?> ><p >③Ｇ８</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][19]" value="4" class="chk13 ans_19" <?=$chk[4]?> ><p >④サミット</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans20'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">20．<p>
			<p class="ques">アジア太平洋経済協力会議。日本、ＡＳＥＡＮ諸国、太平洋諸国など21の国と地域が加盟し、
							2020年に貿易や投資の自由化を目指し具体的な行動を推進している。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][20]" value="1" class="chk13 ans_20" <?=$chk[1]?> ><p >①ＯＥＣＤ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][20]" value="2" class="chk13 ans_20" <?=$chk[2]?> ><p >②ＮＡＦＴＡ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][20]" value="3" class="chk13 ans_20" <?=$chk[3]?> ><p >③ＡＰＥＣ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][20]" value="4" class="chk13 ans_20" <?=$chk[4]?> ><p >④ＡＳＥＭ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans21'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">21．<p>
			<p class="ques">経済協力開発機構。財政金融上の安定を維持しつつ、雇用と生活水準の向上を達成し、
							世界経済の発展に貢献することを主な目的としている。さらに発展途上国経済の健全な拡大に寄与することや、
							世界貿易の多角的かつ無差別な拡大に貢献することも目指しており、現在の加盟国は日本を含む30か国となっている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][21]" value="1" class="chk13 ans_21" <?=$chk[1]?> ><p >①ＯＥＣＤ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][21]" value="2" class="chk13 ans_21" <?=$chk[2]?> ><p >②ＡＴＭ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][21]" value="3" class="chk13 ans_21" <?=$chk[3]?> ><p >③ＥＵ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][21]" value="4" class="chk13 ans_21" <?=$chk[4]?> ><p >④ＡＳＥＭ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans22'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">22．<p>
			<p class="ques">北米自由貿易協定。米国、カナダ、メキシコの3か国間で相互に市場を開放するための協定で、
							1994年1月1日に発効した。協定の内容は、3か国間の全品目の関税を原則として協定発効から
							15年以内に全廃すること、2000年までに金融市場の完全自由化を達成すること、
							現地部品調達率を2002年には60％以上にすること、など。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][22]" value="1" class="chk13 ans_22" <?=$chk[1]?> ><p >①ＮIＥＳ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][22]" value="2" class="chk13 ans_22" <?=$chk[2]?> ><p >②ＮＡＳＤＡＱ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][22]" value="3" class="chk13 ans_22" <?=$chk[3]?> ><p >③ＮＡＦＴＡ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][22]" value="4" class="chk13 ans_22" <?=$chk[4]?> ><p >④ＯＥＭ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans23'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">23．<p>
			<p class="ques">東南アジア諸国連合。1967年8月にタイ、インドネシア、マレーシア、フィリピン、
							シンガポールの5か国で結成した地域協力機構。現在はブルネイ、ベトナム、ラオス、
							ミャンマー、カンボジアが加わり10か国が加盟している。1978年からは日本、米国、
							EＵ、オーストラリア、ニュージーランド、韓国の外務大臣を含めた拡大外相会議も
							開かれている。アジア経済の中核的存在。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][23]" value="1" class="chk13 ans_23" <?=$chk[1]?> ><p >①ＢＩＳ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][23]" value="2" class="chk13 ans_23" <?=$chk[2]?> ><p >②ＡＳＥＡＮ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][23]" value="3" class="chk13 ans_23" <?=$chk[3]?> ><p >③ＡＳＥＭ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][23]" value="4" class="chk13 ans_23" <?=$chk[4]?> ><p >④ＦＴＡＡ</p></li>
			</ul>
		</p>

	</div>
	
	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="<?=$btnkey[4]?>" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = $btnkey[1];
	}else{
		$btn = $btnkey[2];
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
		<input type="hidden" name="pageFlg" value="" id="pageFlg" >

	</form>
		<input type="hidden"  value="<?=count($exam)?>" id="count" >


<?PHP
	include("pager.php");
?>
	</div>

<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
