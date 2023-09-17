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
				<li class="num">40</li>
				<li class="bd">PEST分析の要因a～cに入る<u class="blue b">最も適切な選択肢</u>を回答群①～④の中からそれぞれ選べ。</li>
			</ul>
			<br clear=all />

			<p class="none">【回答群】</p>
			<ul class="ulmenu">
				<li style="width:200px;" >①：P-政治的環境要因</li>
				<li style="width:200px;" >②：E-経済的環境要因</li>
				<li style="width:200px;" >③：S-社会的環境要因</li>
				<li style="width:200px;" >④：T-技術的環境要因</li>
			</ul>
			<br clear=all />
			<p class="none">（参考）</p>
			<p class="none">PはPoliticalの頭文字で、政治的環境要因を表す</p>
			<p class="none">EはEconomicの頭文字で、経済的環境要因を表す</p>
			<p class="none">SはSocialの頭文字で、社会的環境要因を表す</p>
			<p class="none">TはTechnologyの頭文字で、技術的環境要因を表す</p>

			<br clear=all />
			
<?PHP
			$no=0;
			$array = array("a.景気・物価・株価","b.特許","c.世論");
			for($i=70;$i<=72;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				<div class="left mt10" style="width:150px;"><?=$array[$no]?>：</div>
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
	<input type="hidden" name="nextPage" value="19" id="nextPage">
	<input type="hidden" name="backPage" value="17" id="backPage">
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
