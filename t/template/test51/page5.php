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
<?PHP if($errmsg){ ?>
	<div class="errmsg">
<?PHP foreach($errmsg as $key=>$val){ ?>
		<?=$val?><br />
<?PHP } ?>
	</div>
<?PHP } ?>
			<ul class="sub">
				<li class="num">12</li>
				<li class="bd">ブランドの起源を表している<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />

<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans21' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans21' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans21' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans21' ] == 4) $chk4 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[21]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	ブランドは、元々は中世ヨーロッパの貴族の紋章を表していた。</div></label></li><br  clear=all />
				<li><label><div class="left"><input type="radio" name="sec[21]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	ブランドは、元々は家畜の売買の際に、生産者を識別するために活用されていた。</div></label></li><br  clear=all />
				<li><label><div class="left"><input type="radio" name="sec[21]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	ブランドは、元々は家畜を高値で売るための手段として使われていた。</div></label></li><br  clear=all />
				<li><label><div class="left"><input type="radio" name="sec[21]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④	ブランドは、元々は「焼印」の意味があり、自分の所有物であることを示していた。</div></label></li><br  clear=all />
			</ul>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">13</li>
				<li class="bd">ブランドの機能の変遷の順序として、<u class="blue b">最も適切な選択肢</u>を下記の回答群①～⑤から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p >
					a　生産者の表示
				</p>
				<p >
					b　競合との差別化
				</p>
				<p >
					c　所有権の表示
				</p>
			</div>
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			if($tdetail[ 'ans22' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans22' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans22' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans22' ] == 4) $chk4 = "CHECKED";
			if($tdetail[ 'ans22' ] == 5) $chk5 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[22]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① a → b → c</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[22]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② a → c → b</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[22]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ b → a → c </div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[22]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ c → b → a</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[22]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤ c → a → b</div></label></li>
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
	<input type="hidden" name="nextPage" value="6" id="nextPage">
	<input type="hidden" name="backPage" value="4" id="backPage">
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
