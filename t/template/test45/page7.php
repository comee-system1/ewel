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
	$answer = $tdetail['ans36'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">36．<p>
			<p class="ques">米ドルやユーロ、英ポンドなどの外国通貨建てで預金する金融商品。日本円に換金する際に為替差損益が発生することがある。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][36]" value="1" class="chk13 ans_36" <?=$chk[1]?> ><p >①外貨預金</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][36]" value="2" class="chk13 ans_36" <?=$chk[2]?> ><p >②通貨オプション</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][36]" value="3" class="chk13 ans_36" <?=$chk[3]?> ><p >③定期預金</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][36]" value="4" class="chk13 ans_36" <?=$chk[4]?> ><p >④為替預金</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans37'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">37．<p>
			<p class="ques">議長以下7人の理事で構成される。連邦準備銀行の業務を統括し、公定歩合やFF金利の変更を行う。
						変更に当たってはFＯMCの方針を受けて実施する。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][37]" value="1" class="chk13 ans_37" <?=$chk[1]?> ><p >①FMＯC</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][37]" value="2" class="chk13 ans_37" <?=$chk[2]?> ><p >②ＮAＳDAＱ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][37]" value="3" class="chk13 ans_37" <?=$chk[3]?> ><p >③FＲB</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][37]" value="4" class="chk13 ans_37" <?=$chk[4]?> ><p >④FＯB</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans38'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">38．<p>
			<p class="ques">日本経済新聞社が毎日算出して発表する商品指数で、対象品目は綿糸、毛糸、生糸など17種類。景気に敏感に反応するといわれている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][38]" value="1" class="chk13 ans_38" <?=$chk[1]?> ><p >①日経17種指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][38]" value="2" class="chk13 ans_38" <?=$chk[2]?> ><p >②商品17種景気指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][38]" value="3" class="chk13 ans_38" <?=$chk[3]?> ><p >③日経商品指数17種</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][38]" value="4" class="chk13 ans_38" <?=$chk[4]?> ><p >④商品17種指数</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans39'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">39．<p>
			<p class="ques">内閣府が発表する景気の方向性を示す指標。先行指数は約半年後の景気の動きを予測することができ、一致指数は現在の景気の状態がわかる。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][39]" value="1" class="chk13 ans_39" <?=$chk[1]?> ><p >①日銀短観</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][39]" value="2" class="chk13 ans_39" <?=$chk[2]?> ><p >②景気動向指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][39]" value="3" class="chk13 ans_39" <?=$chk[3]?> ><p >③景気指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][39]" value="4" class="chk13 ans_39" <?=$chk[4]?> ><p >④マンスリー指数</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans40'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">40．<p>
			<p class="ques">株価を一株当たり利益で除したもので、株価収益率といわれる。その会社の株価が収益性において割高か割安かを計る代表的な指数。
						この数字が大きければ割高、小さければ割安と判断する。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][40]" value="1" class="chk13 ans_40" <?=$chk[1]?> ><p >①ＰEＲ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][40]" value="2" class="chk13 ans_40" <?=$chk[2]?> ><p >②CＲB</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][40]" value="3" class="chk13 ans_40" <?=$chk[3]?> ><p >③ＯEM</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][40]" value="4" class="chk13 ans_40" <?=$chk[4]?> ><p >④ＰBＲ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans41'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">41．<p>
			<p class="ques">世の中に出回っているおカネの量を表す指標のひとつで、
						M3＝M1（現金＋普通預金等）＋準通貨（定期預金、外貨預金等）＋CD（他人に預金証書を売って現金に換えることができる譲渡性預金）、
						つまり現金と預貯金のすべてを示す。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][41]" value="1" class="chk13 ans_41" <?=$chk[1]?> ><p >①通貨流通量</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][41]" value="2" class="chk13 ans_41" <?=$chk[2]?> ><p >②マネタリーベース</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][41]" value="3" class="chk13 ans_41" <?=$chk[3]?> ><p >③マネーストック</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][41]" value="4" class="chk13 ans_41" <?=$chk[4]?> ><p >④通貨統計</p></li>
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
