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
				<li class="num">22</li>
				<li class="bd">次の文章はブランド構築に関する説明である。文中の１～３に入る<u class="blue b">最も適切な選択肢</u>はどれか。回答群の①～④から選べ。</li>
			</ul>
			<br clear=all />
			
			<p>　ブランド構築とは、消費者・顧客のいだく（　1　）と、企業が製品・サービスによって提案したいブランド価値を表す（　2　）を（　3　）させる活動である。</p>
			<br clear=all />
			<p class="none">【回答群】</p>
			<ul class="ulmenu" >
				<li style="width:150px;" >①：ブランド・イメージ</li>
				<li style="width:180px;" >②：ブランド・アイデンティティ</li>
				<li style="width:100px;" >③：一致</li>
				<li style="width:100px;" >④：明確化</li>
			</ul>
			<br clear=all />
<?PHP
			$no=1;
			for($i=35;$i<=37;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				空欄<?=$no?>.
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④</div></label></li>
				</ul>
<?PHP
				$no++;
			}
?>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">23</li>
				<li class="bd">次の文章はブランド構築に関する説明である。文中の1～4に入る<u class="blue b">最も適切な選択肢</u>はどれか。回答群の①～⑥から選べ。</li>
			</ul>
			<br clear=all />
			<p>　ブランド・マネージャーの活動として特に重要なのは、消費者・顧客の心の中に意図した反応を起こすために、（　1　）、（　2　）が一貫して（　3　）を表現する刺激となるよう、（　4　)・運用管理し続けることである。</p>
			<br clear=all />
			<p class="none">【回答群】</p>
			<ul class="ulmenu" >
				<li style="width:150px;" >①：ブランド要素</li>
				<li style="width:150px;" >②：ブランド体験</li>
				<li style="width:150px;" >③：ブランド・イメージ</li>
				<li style="width:180px;" >④：ブランド・アイデンティティ</li>
				<li style="width:150px;" >⑤：設計</li>
				<li style="width:150px;" >⑥：実行</li>
			</ul>
			<br clear=all />
<?PHP
			$no=1;
			for($i=38;$i<=41;$i++){
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
				空欄<?=$no?>.
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div><div class="left lh40">⑥</div></label></li>
				</ul>
<?PHP
				$no++;
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
	<input type="hidden" name="nextPage" value="10" id="nextPage">
	<input type="hidden" name="backPage" value="8" id="backPage">
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
