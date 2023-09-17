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
				<li class="num">26</li>
				<li class="bd">「ブランド体験」に関する記述について、その正誤の組み合わせとして<u class="blue b">最も適切な選択肢</u>を下記の回答群①～④から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box" >
				<p>a ブランド体験は、消費者とブランドとの接点のことをいい、ブランド・アイデンティティと結びつくブランド連想を起こさせることが重要である。</p>
				<p>
					b ブランド体験は、販売促進活動のシナリオであり、営業活動は含まれない。
				</p>
				<p>
					c ブランド体験は、企業の販売促進活動から、実際の利用体験まで、消費者・顧客とブランドとのあらゆる接点を設計する。
				</p>
				<p>
					d ブランド体験は、消費者・顧客がブランドと接するあらゆる機会であり、それらは「ブランド要素」を含んで構成される。
				</p>
			</div>
			<br clear=all />
<?PHP
			$no=1;
			for($i=44;$i<=44;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				【回答群】
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh40">
							①	a：正　b：正　c：正　d：正
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	a：正　b：誤　c：正　d：誤
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	a：正　b：誤　c：正　d：正
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	a：誤　b：正　c：正　d：正
						</div></label>
					</li><br clear=all />
				</ul>
<?PHP
				$no++;
			}
?>
		</div>
		<hr />

		<div class="w680">
			<ul class="sub">
				<li class="num">27</li>
				<li class="bd">「ブランド体験」を設計する上で大切な3つのキーワードがあるが、その組み合わせとして<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			for($i=45;$i<=45;$i++){
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
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	一貫性、積極性、行動力</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	一貫性、意図的、継続性</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	柔軟性、行動力、業者の巻き込み</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④	一貫性、積極性、意図的</div></label></li><br clear=all />
					
				</ul>
<?PHP
			}
?>
		</div>

		<hr />

		<div class="w680">
			<ul class="sub">
				<li class="num">28</li>
				<li class="bd">以下の記述について<u class="red b">誤っているもの</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			for($i=46;$i<=46;$i++){
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
						<div class="left lh40">
						①	ブランド・アイデンティティは、顧客に「こう思われたい」という価値イメージである。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh20 mt10">
						②	ブランディングとは、ブランド・アイデンティティと、ブランド・イメージを、イコールで結びつけるための<br />
						　　活動である。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
						③	消費者の連想と結びつける手法の1つに、連想マップがある。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
						④	ブランド・イメージは、ブランド要素との接触回数とインパクトによって構築される。</div></label></li><br clear=all />
					
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
	<input type="hidden" name="nextPage" value="12" id="nextPage">
	<input type="hidden" name="backPage" value="10" id="backPage">
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
