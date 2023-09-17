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
	$answer = $tdetail['ans24'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">24．<p>
			<p class="ques">加盟国の出資で共同の為替基金を作り、これを各国が利用することで為替資金繰りの円滑化を支援し、
						ひいては世界各国に経済的繁栄をもたらすことを目的とする国際的基金。加盟国は2005年9月現在で184か国。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][24]" value="1" class="chk13 ans_24" <?=$chk[1]?> ><p >①ＢＩＳ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][24]" value="2" class="chk13 ans_24" <?=$chk[2]?> ><p >②世界銀行</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][24]" value="3" class="chk13 ans_24" <?=$chk[3]?> ><p >③ＩＭＦ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][24]" value="4" class="chk13 ans_24" <?=$chk[4]?> ><p >④ＮＩＥＳ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans25'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">25．<p>
			<p class="ques">企業における成長分野の拡充、不採算部門の廃止など、収益力の強化や成長力の維持を目的とした事業再構築をいう。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][25]" value="1" class="chk13 ans_25" <?=$chk[1]?> ><p >①リストラクチャリング</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][25]" value="2" class="chk13 ans_25" <?=$chk[2]?> ><p >②レイオフ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][25]" value="3" class="chk13 ans_25" <?=$chk[3]?> ><p >③リエンジニアリング</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][25]" value="4" class="chk13 ans_25" <?=$chk[4]?> ><p >④Ｍ＆Ａ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans26'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">26．<p>
			<p class="ques">個人や家庭が保有する現金、預貯金、保険、株式、債券、投資信託などの総称。日本ではピーク時に1560兆円の残高を記録した。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][26]" value="1" class="chk13 ans_26" <?=$chk[1]?> ><p >①マネタリーベース</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][26]" value="2" class="chk13 ans_26" <?=$chk[2]?> ><p >②簡易保険</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][26]" value="3" class="chk13 ans_26" <?=$chk[3]?> ><p >③マネーストック</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][26]" value="4" class="chk13 ans_26" <?=$chk[4]?> ><p >④個人金融資産</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans27'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">27．<p>
			<p class="ques">世界157か国が加盟し、品質や環境などの分野について国際規格を定めている。
							品質に関するものは9000、環境に関するものは14000という番号が付けられている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][27]" value="1" class="chk13 ans_27" <?=$chk[1]?> ><p >①ＯＥＭ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][27]" value="2" class="chk13 ans_27" <?=$chk[2]?> ><p >②ＯＣＮ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][27]" value="3" class="chk13 ans_27" <?=$chk[3]?> ><p >③ＵＳＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][27]" value="4" class="chk13 ans_27" <?=$chk[4]?> ><p >④ＩＳＯ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans28'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">28．<p>
			<p class="ques">情報通信機器を活用して、在宅勤務をしたりマンションの一室を職場としたりすること。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][28]" value="1" class="chk13 ans_28" <?=$chk[1]?> ><p >①ＨＯＳＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][28]" value="2" class="chk13 ans_28" <?=$chk[2]?> ><p >②ＳＯＨＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][28]" value="3" class="chk13 ans_28" <?=$chk[3]?> ><p >③ＡＤＳＬ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][28]" value="4" class="chk13 ans_28" <?=$chk[4]?> ><p >④ＷＩＦＩ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans29'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">29．<p>
			<p class="ques">燃料系エンジンと電気モーターを組み合わせて駆動する自動車。排気ガスを軽減し環境に配慮したエコカーとして普及が進んでいる。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][29]" value="1" class="chk13 ans_29" <?=$chk[1]?> ><p >①電気自動車</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][29]" value="2" class="chk13 ans_29" <?=$chk[2]?> ><p >②ハイブリッド車</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][29]" value="3" class="chk13 ans_29" <?=$chk[3]?> ><p >③省エネ車</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][29]" value="4" class="chk13 ans_29" <?=$chk[4]?> ><p >④環境保全車</p></li>
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
