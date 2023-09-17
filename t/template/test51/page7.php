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
				<li class="num">16</li>
				<li class="bd">以下の１～２のブランドの例がどの種類に該当するか、<u class="blue b">最も適切な選択肢</u>を回答群①～⑦の中からそれぞれ選べ。</li>
			</ul>
			<br clear=all />

			<p class="none">【回答群】</p>
			<ul class="ulmenu" >
				<li>①：ファミリーブランド</li>
				<li>②：製品ブランド</li>
				<li>③：サービスブランド</li>
				<li>④：企業ブランド</li>
				<li>⑤：パーソナルブランド</li>
				<li>⑥：地域ブランド</li>
				<li>⑦：成分・技術</li>
			</ul>
			<br clear=all />
			<p class="none">【ブランドの例】</p>
<?PHP
			$array = array();
			$array[25] = "1.セブンプレミアム：";
			$array[26] = "2.Apple：";
			for($i=25;$i<=26;$i++){
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
				<?=$array[$i]?>
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
		<hr  />

		<div class="w680">
			<ul class="sub">
				<li class="num">17</li>
				<li class="bd">ブランドの想起の１つである「ブランド再認」に関する説明で、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans27' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans27' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans27' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans27' ] == 4) $chk4 = "CHECKED";

?>
			<ul class="ansmenu">
				<li class="clear"><label><div class="left"><input type="radio" name="sec[27]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① ブランド要素に接した際に、特定のブランドを認識すること。</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[27]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② ブランド価値の向上により、ブランドへの意識が強まること。</div></label></li><br clear=all />
				<li class="clear "><label><div class="left"><input type="radio" name="sec[27]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh20" style="padding-top:10px;">③ あるカテゴリー（ジャンル）を言われたときに特定のブランド名を思い起すこと。<br />また、消費者・顧客にニーズが発生した際、特定のブランド名を直接、思い起こすこと。</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[27]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④	普段の何気ない日常生活の中で、突如ブランドを思い出すこと。 </div></label></li><br clear=all />

			</ul>
		</div>
		<hr  />
		<div class="w680">
			<ul class="sub">
				<li class="num">18</li>
				<li class="bd">ブランドの想起の1つである「ブランド再生」に関する説明で、<u class="blue b">最も適切な選択肢</u>を回答群①～⑥から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p>a　ブランド要素に接した際に、特定のブランドを認識すること。</p>
				<p>b　ブランド価値の向上により、ブランドへの意識が強まること。</p>
				<p>c　あるカテゴリー（ジャンル）を言われたときに特定のブランド名を思い起すこと。<br />　　また、消費者・顧客にニーズが発生した際、特定のブランド名を直接、思い起こすこと。
        </p>
			</div>
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			$chk6 = "";

			if($tdetail[ 'ans28' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans28' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans28' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans28' ] == 4) $chk4 = "CHECKED";
			if($tdetail[ 'ans28' ] == 5) $chk5 = "CHECKED";
			if($tdetail[ 'ans28' ] == 6) $chk6 = "CHECKED";
?>
			<p class="none">【回答郡】</p>

			<ul class="ansmenu">
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① aとb</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② aとc</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ bとc</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ a</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤ b</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[28]" value="6" class="radio" <?=$chk6?> /></div><div class="left lh40">⑥ c</div></label></li><br clear=all />
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
	<input type="hidden" name="nextPage" value="8" id="nextPage">
	<input type="hidden" name="backPage" value="6" id="backPage">
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
