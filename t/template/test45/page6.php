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
	$answer = $tdetail['ans30'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">30．<p>
			<p class="ques">各国が開発を競っている注目すべき技術で、10億分の1メートルという極小の単位を扱う。
						半導体や機械加工、生物科学、医学などの分野で応用が期待され、日本は世界的にトップクラスの水準を持っている。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][30]" value="1" class="chk13 ans_30" <?=$chk[1]?> ><p >①バイオテクノロジー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][30]" value="2" class="chk13 ans_30" <?=$chk[2]?> ><p >②ハイテクノロジー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][30]" value="3" class="chk13 ans_30" <?=$chk[3]?> ><p >③サイエンステクノロジー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][30]" value="4" class="chk13 ans_30" <?=$chk[4]?> ><p >④ナノテクノロジー</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans31'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">31．<p>
			<p class="ques">道路、河川、港湾、空港など、経済活動に必要な社会資本をいう。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][31]" value="1" class="chk13 ans_31" <?=$chk[1]?> ><p >①イントロダクション</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][31]" value="2" class="chk13 ans_31" <?=$chk[2]?> ><p >②バリアフリー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][31]" value="3" class="chk13 ans_31" <?=$chk[3]?> ><p >③インフラストラクチャー</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][31]" value="4" class="chk13 ans_31" <?=$chk[4]?> ><p >④ファンダメンタルズ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans32'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>

		<p>
			<p class="num">32．<p>
			<p class="ques">会社の役員や従業員が、自社の株式をあらかじめ定められた価格や条件で購入することができる権利をいう。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][32]" value="1" class="chk13 ans_32" <?=$chk[1]?> ><p >①エンジェル</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][32]" value="2" class="chk13 ans_32" <?=$chk[2]?> ><p >②ストックオプション</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][32]" value="3" class="chk13 ans_32" <?=$chk[3]?> ><p >③転換社債</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][32]" value="4" class="chk13 ans_32" <?=$chk[4]?> ><p >④MBＯ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans33'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">33．<p>
			<p class="ques">一般に世界で認められる公開された、公平公正な取引に基づく経営手法で、国際標準とされるものをいう。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][33]" value="1" class="chk13 ans_33" <?=$chk[1]?> ><p >①グローバルスタンダード</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][33]" value="2" class="chk13 ans_33" <?=$chk[2]?> ><p >②デフォルト</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][33]" value="3" class="chk13 ans_33" <?=$chk[3]?> ><p >③デファクトスタンダード</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][33]" value="4" class="chk13 ans_33" <?=$chk[4]?> ><p >④ファンダメンタルズ</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans34'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">34．<p>
			<p class="ques">一株当たりの時価と発行済み株式数を掛け合わせた金額。
						その取引所に上場されているすべての株式について合計額を見れば、その市場規模がわかる。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][34]" value="1" class="chk13 ans_34" <?=$chk[1]?> ><p >①時価総額</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][34]" value="2" class="chk13 ans_34" <?=$chk[2]?> ><p >②株価総額</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][34]" value="3" class="chk13 ans_34" <?=$chk[3]?> ><p >③株価収益率</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][34]" value="4" class="chk13 ans_34" <?=$chk[4]?> ><p >④付加価値</p></li>
			</ul>
		</p>

<?PHP
	$answer = $tdetail['ans35'];
	$chk = array();
	if($answer == 1) $chk[1]= "checked";
	if($answer == 2) $chk[2]= "checked";
	if($answer == 3) $chk[3]= "checked";
	if($answer == 4) $chk[4]= "checked";
?>
		<p>
			<p class="num">35．<p>
			<p class="ques">各国の通貨の相対的な強さ、弱さを指数化したもの。通貨の総合的な価値を比較する際に利用される。
			</p>
			<ul class="ul13" >
				<li><input type="checkbox" name="ans[<?=$pager?>][35]" value="1" class="chk13 ans_35" <?=$chk[1]?> ><p >①為替インデックス</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][35]" value="2" class="chk13 ans_35" <?=$chk[2]?> ><p >②主要外為インデックス</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][35]" value="3" class="chk13 ans_35" <?=$chk[3]?> ><p >③日経国債インデックス</p></li>
				<li><input type="checkbox" name="ans[<?=$pager?>][35]" value="4" class="chk13 ans_35" <?=$chk[4]?> ><p >④日経通貨インデックス</p></li>
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
