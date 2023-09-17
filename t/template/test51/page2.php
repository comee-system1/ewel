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
				<li class="num">3</li>
				<li class="bd">エクスターナルブランディングとインターナルブランディングについて述べた文として<u class="red b">誤っている選択肢</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			for($i=9;$i<=9;$i++){
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
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh20 mt10">①　消費者・顧客に向けたブランディング活動を、エクスターナルブランディングという。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh20 mt10">②　	社外での浸透度合いが高まれば、自然と社内にも浸透するため、まずはエクスターナル<br />　　　ブランディングに注力すべきである。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh20 mt10">③　社内や協力会社に向けたブランディング活動をインターナルブランディングという。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh20 mt10">④　社内に価値観を浸透させることができれば、社外への浸透はより容易になる。</div></label></li>
			</ul>
<?PHP
			}
?>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">4</li>
				<li class="bd">ブランド・マネージャーに必要とされる能力で<u class="blue b">最も適切なもの</u>の組み合わせを下記の回答群①～⑤から選べ。</li>
			</ul>
			<br clear=all />

			<div class="box">
				<p class="none">
					a　コミュニケーション能力
				</p>
				<p class="none">
					b　財務の知識
				</p>
				<p class="none">
					c　政治・経済の知識
				</p>
				<p class="none">
					d　プレゼンテーション能力
				</p>
				<p class="none">
					e　マーケティングの知識
				</p>
			</div><br />
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			if($tdetail[ 'ans10' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans10' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans10' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans10' ] == 4) $chk4 = "CHECKED";
			if($tdetail[ 'ans10' ] == 5) $chk5 = "CHECKED";
?>
<label><div class="left"><input type="radio" name="sec[10]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh25">① a と b と c</div><br clear=all /></label>
<label><div class="left"><input type="radio" name="sec[10]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh25">② a と c と d</div><br clear=all /></label>
<label><div class="left"><input type="radio" name="sec[10]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh25">③ a と d と e</div><br clear=all /></label>
<label><div class="left"><input type="radio" name="sec[10]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh25">④ b と c と d</div><br clear=all /></label>
<label><div class="left"><input type="radio" name="sec[10]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh25">⑤ b と d と e</div><br clear=all /></label>

                                                                                     
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
	<input type="hidden" name="nextPage" value="3" id="nextPage">
	<input type="hidden" name="backPage" value="1" id="backPage">
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
