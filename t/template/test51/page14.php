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
				<li class="num">34</li>
				<li class="bd">次の文章はピーター・ドラッカーによる、マーケティングの定義に関する説明である。文中の１～３に入る<u class="blue b">最も適切な選択肢</u>を①～⑧の中からそれぞれ選べ。</li>
			</ul>
			<br clear=all />
			<p>
				マーケティングの狙いは（　1　）を不要にすることだ。マーケティングの狙いは（　2　）を知り尽くし、理解し尽くして、製品やサービスが（　2　）にぴったりと合うものになり、（　3　）ようにすることである。
			</p>
			<br clear=all />

			<p class="none">【回答群】</p>
			<ul class="ulmenu">
				<li>①：セリング</li>
				<li>②：顧客</li>
				<li>③：ニーズ</li>
				<li>④：販売促進</li>
				<li>⑤：ひとりでに売れる</li>
				<li>⑥：売上アップする</li>
				<li>⑦：業績が安定する</li>
				<li>⑧：シェアが拡大する</li>
			</ul>
			<br clear=all />

<?PHP
			$no=1;
			for($i=52;$i<=54;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";
				$chk6 = "";
				$chk7 = "";
				$chk8 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 6) $chk6 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 7) $chk7 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 8) $chk8 = "CHECKED";

?>
				空欄<?=$no?>
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
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="7" class="radio" <?=$chk7?> /></div>
						<div class="left lh40">⑦</div></label>
					</li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="8" class="radio" <?=$chk8?> /></div>
						<div class="left lh40">⑧</div></label>
					</li>
				</ul>
				<br clear=all />
<?PHP
				$no++;
			}
?>
		</div>
		<hr  />

		<div class="w680">
			<ul class="sub">
				<li class="num">35</li>
				<li class="bd">マーケティングとは何か、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			for($i=55;$i<=55;$i++){
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
							①	売り込む手段</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	売る仕組みづくり</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	売れる仕組みづくり</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	売れ続ける仕組みづくり
						</div></label></li><br clear=all />
					
				</ul>
<?PHP
			}
?>
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
	<input type="hidden" name="nextPage" value="15" id="nextPage">
	<input type="hidden" name="backPage" value="13" id="backPage">
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
