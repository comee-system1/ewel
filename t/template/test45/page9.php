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
	$answer = $tdetail['ans47'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">47．<p>
			<p class="ques">住民基本台帳をネットワーク化して、全国共通の本人確認システムを構築したもの。
						電子政府や電子自治体の実現に不可欠なものとされ、転出入手続きや住民票の取得でネット
						による24時間受付や電子納税などのメリットが期待される一方、安全に本人確認するための
						電子認証システムの整備が課題とされている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][47]" value="1" class="chk13 ans_47" <?=$chk[1]?> ><p >①住基ネット</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][47]" value="2" class="chk13 ans_47" <?=$chk[2]?> ><p >②住基台ネット</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][47]" value="3" class="chk13 ans_47" <?=$chk[3]?> ><p >③住民ネットワーク</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][47]" value="4" class="chk13 ans_47" <?=$chk[4]?> ><p >④電子住民ネット</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans48'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">48．<p>
			<p class="ques">米国の調査会社コモディティー・リサーチ・ビューロー社がリアルタイムで発表する商品先物取引価格の算出指数。
							インフレ指数としても有名である。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][48]" value="1" class="chk13 ans_48" <?=$chk[1]?> ><p >①ＩＢＭ指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][48]" value="2" class="chk13 ans_48" <?=$chk[2]?> ><p >②ＷＴＯ指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][48]" value="3" class="chk13 ans_48" <?=$chk[3]?> ><p >③ＣＲＢ指数</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][48]" value="4" class="chk13 ans_48" <?=$chk[4]?> ><p >④ＯＥＭＭ指数</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans49'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">49．<p>
			<p class="ques">IＴ（情報通信技術）を活用した次世代送電網。電力需要にきめ細かく対応した発電が可能になり、二酸化炭素の排出削減にもつながる。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][49]" value="1" class="chk13 ans_49" <?=$chk[1]?> ><p >①スマートグリッド</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][49]" value="2" class="chk13 ans_49" <?=$chk[2]?> ><p >②スマートフォン</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][49]" value="3" class="chk13 ans_49" <?=$chk[3]?> ><p >③ハイブリッド</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][49]" value="4" class="chk13 ans_49" <?=$chk[4]?> ><p >④自家発電</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans50'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">50．<p>
			<p class="ques">政府や行政機関から独立した自主的な組織で、営利を目的とせず、社会貢献や慈善事業などを主な活動の目的としている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][50]" value="1" class="chk13 ans_50" <?=$chk[1]?> ><p >①ＰＬＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][50]" value="2" class="chk13 ans_50" <?=$chk[2]?> ><p >②ＣＲＢ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][50]" value="3" class="chk13 ans_50" <?=$chk[3]?> ><p >③ＮＰＯ</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][50]" value="4" class="chk13 ans_50" <?=$chk[4]?> ><p >④ＩＲＡ</p></li>
			</ul>
		</p>


	
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
