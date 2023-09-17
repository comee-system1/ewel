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
				<li class="num">24</li>
				<li class="bd">「ブランド要素」に関する記述について<u class="red b">誤っている選択肢</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=1;
			for($i=42;$i<=42;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh20 mt10">
							①ブランド要素は、ブランドを識別させるコントロール可能な最小単位の要素であり、その主な機能は、<br />
							　「他の商品・サービスと区別する手段」である
						</div></label>
					</li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh20 mt10">
							②ブランド要素は、コントロール可能なものであり、コントロール不可能なものは、企業側が意図するブ<br />
							　ランド要素にはなり得ない
						</div></label>
					</li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh20 mt10">
							③ブランド要素は、ブランド体験で活用する媒体であり、カタログやチラシ、HPなど、様々な種類がある。
						</div></label>
					</li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh20 mt10">
							④ブランド要素は、「他の商品・サービスと区別する手段」であるから、ブランド要素として機能している<br />
							　か否かは、消費者・顧客がその要素に触れたときに、ある特定のブランドを思い起こすかが基準となる
						</div></label>
					</li>
				</ul>
<?PHP
				$no++;
			}
?>
		</div>
		<hr  />

		<div class="w680">
			<ul class="sub">
				<li class="num">25</li>
				<li class="bd">「ブランド要素」には、9つの要素がある。６つは「ブランド名」「ロゴ、マーク」「タグライン」「パッケージ、空間デザイン」「ジングル・音楽」「ドメイン（URL）」である。残りの３つとして、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			for($i=43;$i<=43;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";


				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				<?=$array[$i]?>
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① キャラクター、広告、DM</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② キャラクター、デザイン、形状</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ キャラクター、色、匂い</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ 広告、デザイン、匂い</div></label></li><br clear=all />
					
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
	<input type="hidden" name="nextPage" value="11" id="nextPage">
	<input type="hidden" name="backPage" value="9" id="backPage">
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
