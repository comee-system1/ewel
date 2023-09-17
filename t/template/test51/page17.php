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
				<li class="num">39</li>
				<li class="bd">以下の図は、ブランド構築のステップを表したものである。図の中のa～fに入る<u class="blue b">最も適切な選択肢</u>を回答群①～⑥の中からそれぞれ選べ。</li>
			</ul>
			<br clear=all />
			<p>
				<img src="<?=D_URL_HOME?>t/template/test51/img2.png" >
			</p>
			<br clear=all />
			<p class="none">【回答群】</p>
			<ul class="ulmenu" >
				<li style="width:130px;" >①：ポジショニング</li>
				<li style="width:100px;" >②：4P／4C</li>
				<li style="width:140px;" >③：セグメンテーション</li>
				<li style="width:160px;" >④：3C分析／PEST分析</li>
				<li style="width:233px;" >⑤：ブランド要素／ブランド体験</li>
				<li style="width:130px;" >⑥：ターゲティング</li>
			</ul>
			<br clear=all />

<?PHP
			$no=0;
			$array = array("a","b","c","d","e","f");
			for($i=64;$i<=69;$i++){
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
				<div class="left mt10">
					空欄<?=$array[$no]?>．
				</div>
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
							<div class="left lh40">
								⑤
							</div></label>
						</li>
						<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div>
							<div class="left lh40">
								⑥
							</div></label>
						</li>
					</ul>
				</div>
				<br clear=all />
<?PHP
				$no++;
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
	<input type="hidden" name="nextPage" value="18" id="nextPage">
	<input type="hidden" name="backPage" value="16" id="backPage">
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
