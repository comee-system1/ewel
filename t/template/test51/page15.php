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
				<li class="num">36</li>
				<li class="bd">次の文章はマーケティングに関する説明である。文中の1～3に入る<u class="blue b">最も適切な選択肢</u>を①～⑥の中からそれぞれ選べ。</li>
			</ul>
			<br clear=all />

				<p>
					ビジネスは「（　1　）」である。「（　2　）」とは、マーケティングの中核になるコンセプトである。企業は商品やサービスを提供して、その対価として消費者・顧客にお金を支払っていただく。差し出すものがあるから、相手から何かをもらえる。これが「（　2　）」である。消費者・顧客にとって（　3　）があれば、購入＝（　2　）が成立するが、逆に（　3　）がなければ（　2　）は成立せず、企業は利益を得ることができない。
				</p>
			<br clear=all />
			<p class="none">【回答群】</p>
			<div class="box">
				<p class="none">①：関係　②：交換　③：売買　④：価値交換　⑤：創造　⑥：価値</p>
			</div>
			<br clear=all />
<?PHP
			$no=1;
			for($i=56;$i<=58;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";
				$chk6 = "";


				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 6) $chk6 = "CHECKED";

?>
				<div class="left mt10">空欄<?=$no?></div>
				<div class="left">
					<ul class="ansmenu">
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
							<div class="left lh40">
								①
							</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
							<div class="left lh40">
								②
							</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
							<div class="left lh40">
								③
							</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
							<div class="left lh40">
								④
							</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk5?> /></div>
							<div class="left lh40">⑤</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div>
							<div class="left lh40">⑥</div></label>
						</li>
						
					</ul>
				</div>
				<br clear=all />
<?PHP
				$no++;
			}
?>
		</div>
		<hr  />

		<div class="w680">
			<ul class="sub">
				<li class="num">37</li>
				<li class="bd">マーケティングに関する式で、１～２に当てはまる語の組み合わせとして、<u class="blue b">最も適切な選択肢</u>を下記の回答群ア～オから選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p>マーケティング　＝　（　1　）　×　（　2　）</p>
				<p>a　単価</p>
				<p>b　顧客生涯価値</p>
				<p>c　販売個数</p>
				<p>d　来店回数</p>
				<p>e　顧客数</p>
			</div>
			<br clear=all />
			<p class="none">【回答群】</p>
<?PHP
			for($i=59;$i<=59;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";

?>
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh40">
							①　1：a　2：c</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②　1：a　2：d</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③　1：a　2：e</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④　1：b　2：d
						</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							⑤　1：b  2：e
						</div></label></li><br clear=all />
				</ul>
<?PHP
			}
?>
			<p class="none">※順不同</p>
		</div>

		<br clear=all />


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
	<input type="hidden" name="nextPage" value="16" id="nextPage">
	<input type="hidden" name="backPage" value="14" id="backPage">
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
