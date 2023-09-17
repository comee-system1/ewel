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
				<li class="num">1</li>
				<li class="bd">次の文章はブランド戦略に関する説明である。文中の1～4に入る<u class="blue b">最も適切な選択肢</u>はどれか。回答群の①～⑦から選べ。</li>
			</ul>
			<br clear=all />
			<p>
				ブランドとは（　1　）であり、（　2　）から一貫して派生するものである。<br />
				企業戦略において、コミュニケーション戦略は（　3　）と一体であり、特に（　4　）を高めることに力点をおいて、
				マーケティング施策を計画、実行していく過程のことを指す。
			</p>
			
			<ul class="ulmenu">
				<li>①：資本</li>
				<li>②：資産</li>
				<li>③：経営戦略</li>
				<li>④：戦術</li>
				<li>⑤：マーケティング戦略</li>
				<li>⑥：ブランド価値</li>
				<li>⑦：ブランド認知</li>
			</ul>
			<br clear=all />
<?PHP
			for($i=1;$i<=4;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";
				$chk6 = "";
				$chk7 = "";
				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 6) $chk6 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 7) $chk7 = "CHECKED";

?>
			<p class="q" >空欄<?=$i?></p>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div><div class="left lh40">⑥</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="7" class="radio" <?=$chk7?> /></div><div class="left lh40">⑦</div></label></li>
			</ul>
<?PHP
			}
?>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">2</li>
				<li class="bd">次の文章はブランド・マネージャーの役割に関する説明である。ア～エの説明について、<u class="b" >正誤を答えなさい。</u></li>
			</ul>
			<br clear=all />
<?PHP
			$chk1 = "";
			$chk2 = "";
			if($tdetail[ 'ans5' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans5' ] == 2) $chk2 = "CHECKED";
?>
			<p class="q" >
					(ア)　ブランド・マネージャーは、知的財産に関する高い法律知識を必要とする。そのため法務担当<br >
					　　　が担う場合が多い。
			</p>
			<ul class="ansmenu ml20">
				<li><label><div class="left"><input type="radio" name="sec[5]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">正</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[5]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">誤</div></label></li>
			</ul>
<?PHP
			$chk1 = "";
			$chk2 = "";
			if($tdetail[ 'ans6' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans6' ] == 2) $chk2 = "CHECKED";
?>
			<p class="q" >
					(イ)　ブランド・マネージャーは、ブランドの資産価値を高めるために、その構築から管理までの活動<br >
					　　　全般に亘る広範囲の経営的責任を担うものである。
			</p>
			<ul class="ansmenu ml20">
				<li><label><div class="left"><input type="radio" name="sec[6]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">正</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[6]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">誤</div></label></li>
			</ul>
<?PHP
			$chk1 = "";
			$chk2 = "";
			if($tdetail[ 'ans7' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans7' ] == 2) $chk2 = "CHECKED";
?>
			<p class="q" >(ウ)　ブランド・マネージャーは役職名であり、取締役が務めなければならない。</p>
			<ul class="ansmenu ml20">
				<li><label><div class="left"><input type="radio" name="sec[7]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">正</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[7]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">誤</div></label></li>
			</ul>
<?PHP
			$chk1 = "";
			$chk2 = "";
			if($tdetail[ 'ans8' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans8' ] == 2) $chk2 = "CHECKED";
?>
			<p class="q" >
				(エ)　ブランド・マネージャーは、経営者的視点からブランドの価値を高める経営戦略を実現する役割<br >
				　　　を担う。
			</p>
			<ul class="ansmenu ml20">
				<li><label><div class="left"><input type="radio" name="sec[8]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">正</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[8]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">誤</div></label></li>
			</ul>                                                                                      
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
	<input type="hidden" name="nextPage" value="2" id="nextPage">
	<input type="hidden" name="backPage" value="0" id="backPage">
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
