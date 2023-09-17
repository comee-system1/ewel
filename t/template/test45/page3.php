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
	$answer = $tdetail['ans13'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">13．<p>
			<p class="ques">企業が、銀行から融資を受けるのではなく、株式や社債を発行することによって、直接投資家から資金を調達する方法をいう。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][13]" value="1" class="chk13 ans_13" <?=$chk[1]?> ><p >①消費者金融</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][13]" value="2" class="chk13 ans_13" <?=$chk[2]?> ><p >②直接金融</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][13]" value="3" class="chk13 ans_13" <?=$chk[3]?> ><p >③国際金融</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][13]" value="4" class="chk13 ans_13" <?=$chk[4]?> ><p >④投資家金融</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans14'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">14．<p>
			<p class="ques">経済成長率、失業率、物価上昇率、国際収支など比較的大きな視点から経済の流れを見ることをいう。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][14]" value="1" class="chk13 ans_14" <?=$chk[1]?> ><p >①マクロ経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][14]" value="2" class="chk13 ans_14" <?=$chk[2]?> ><p >②国際経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][14]" value="3" class="chk13 ans_14" <?=$chk[3]?> ><p >③地域経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][14]" value="4" class="chk13 ans_14" <?=$chk[4]?> ><p >④ミクロ経済</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans15'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">15．<p>
			<p class="ques">個人消費の動向や企業の業績動向など比較的小さな視点から経済の流れを見ることをいう。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][15]" value="1" class="chk13 ans_15" <?=$chk[1]?> ><p >①国際経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][15]" value="2" class="chk13 ans_15" <?=$chk[2]?> ><p >②ミクロ経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][15]" value="3" class="chk13 ans_15" <?=$chk[3]?> ><p >③地域経済</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][15]" value="4" class="chk13 ans_15" <?=$chk[4]?> ><p >④マクロ経済</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans16'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">16．<p>
			<p class="ques">国際経済を安定させるための基礎的条件で、経済成長、物価、国際収支などを一括していう。
							これらの均衡が崩れると各国間の通貨に強弱が生じ、世界経済が不安定になるとされている。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][16]" value="1" class="chk13 ans_16" <?=$chk[1]?> ><p >①ファンダメンタルズ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][16]" value="2" class="chk13 ans_16" <?=$chk[2]?> ><p >②インフラ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][16]" value="3" class="chk13 ans_16" <?=$chk[3]?> ><p >③フェロー制度</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][16]" value="4" class="chk13 ans_16" <?=$chk[4]?> ><p >④スタンダード</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans17'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">17．<p>
			<p class="ques">世界貿易機関。モノの貿易だけでなく、サービスや知的財産権を含めた世界貿易を統括する機能を持つ。
							世界の貿易を自由化するための枠組みの構築を進めるため、関税貿易一般協定（ウルグアイ・ラウンド）
							の最終合意文書に署名した世界135か国以上の政府の合意を受けて、1995年1月に発足した。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][17]" value="1" class="chk13 ans_17" <?=$chk[1]?> ><p >①ＧＡＴＴ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][17]" value="2" class="chk13 ans_17" <?=$chk[2]?> ><p >②Ｇ７</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][17]" value="3" class="chk13 ans_17" <?=$chk[3]?> ><p >③ＷＴＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][17]" value="4" class="chk13 ans_17" <?=$chk[4]?> ><p >④IＳＯ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans18'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">18．<p>
			<p class="ques">日本、米国、ドイツ、英国、フランス、カナダ、イタリアの財務大臣、中央銀行総裁による会議。
							世界的な経済問題を協議し、各国の為替相場などに大きな影響を与える。</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][18]" value="1" class="chk13 ans_18" <?=$chk[1]?> ><p >①サミット</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][18]" value="2" class="chk13 ans_18" <?=$chk[2]?> ><p >②Ｇ７</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][18]" value="3" class="chk13 ans_18" <?=$chk[3]?> ><p >③ＮＡＦＴＡ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][18]" value="4" class="chk13 ans_18" <?=$chk[4]?> ><p >④ＮＩＥＳ</p></li>
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
