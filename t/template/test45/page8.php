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
	$answer = $tdetail['ans42'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">42．<p>
			<p class="ques">日本銀行が景気の状況を把握するために企業経営者に対して行う調査の発表資料。
						先行指数的に企業マインドがわかるため高く評価されている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][42]" value="1" class="chk13 ans_42" <?=$chk[1]?> ><p >①日銀観測</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][42]" value="2" class="chk13 ans_42" <?=$chk[2]?> ><p >②企業短観</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][42]" value="3" class="chk13 ans_42" <?=$chk[3]?> ><p >③短期企業観測</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][42]" value="4" class="chk13 ans_42" <?=$chk[4]?> ><p >④日銀短観</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans43'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">43．<p>
			<p class="ques">特定品目の輸入が激増して国内の競合業界に重大な損害を与え、
						または与えるおそれがあると思われるときに発動することができる緊急輸入制限措置。
						ＷＴＯも認めている例外的措置。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][43]" value="1" class="chk13 ans_43" <?=$chk[1]?> ><p >①通関制限措置</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][43]" value="2" class="chk13 ans_43" <?=$chk[2]?> ><p >②セーフガード</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][43]" value="3" class="chk13 ans_43" <?=$chk[3]?> ><p >③政府ガード</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][43]" value="4" class="chk13 ans_43" <?=$chk[4]?> ><p >④輸入ガード</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans44'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">44．<p>
			<p class="ques">ブラジル、ロシア、インド、中国の4か国の頭文字を組み合わせた造語。
							広い国土と膨大な人口を抱えるという共通点があり、資源に恵まれ、購買市場としても期待されている。
							2050年のGDＰは中国、アメリカ、インド、日本、ブラジル、ロシアの順になると予測されている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][44]" value="1" class="chk13 ans_44" <?=$chk[1]?> ><p >①ＢＲＩＣｓ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][44]" value="2" class="chk13 ans_44" <?=$chk[2]?> ><p >②ＥＵ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][44]" value="3" class="chk13 ans_44" <?=$chk[3]?> ><p >③ＡＳＥＡＮ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][44]" value="4" class="chk13 ans_44" <?=$chk[4]?> ><p >④ＮＡＦＴＡ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans45'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">45．<p>
			<p class="ques">経営権を支配する目的で、株式や転換社債を買い付ける際に、投資家保護と市場秩序の維持のため、
							買い付けの価格、数量、期間などの条件をあらかじめ公開提示することを義務づける制度。
							M＆Aを目的とした利用が国内でも増えてきている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][45]" value="1" class="chk13 ans_45" <?=$chk[1]?> ><p >①ＴＢＣ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][45]" value="2" class="chk13 ans_45" <?=$chk[2]?> ><p >②ＰＢＲ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][45]" value="3" class="chk13 ans_45" <?=$chk[3]?> ><p >③ＦＲＢ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][45]" value="4" class="chk13 ans_45" <?=$chk[4]?> ><p >④ＴＯＢ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans46'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">46．<p>
			<p class="ques">広帯域通信網。高速で大容量の情報を送受信できる通信回線の総称で、高品質の音声や動画も短時間で送受信することができる。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][46]" value="1" class="chk13 ans_46" <?=$chk[1]?> ><p >①IＳＤＮ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][46]" value="2" class="chk13 ans_46" <?=$chk[2]?> ><p >②光ファイバー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][46]" value="3" class="chk13 ans_46" <?=$chk[3]?> ><p >③ブロードバンド</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][46]" value="4" class="chk13 ans_46" <?=$chk[4]?> ><p >④高速回線</p></li>
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
