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
				<li class="num">5</li>
				<li class="bd">次の文章を読んで、文中の１～２に入る<u class="blue b">最も適切な選択肢</u>はどれか。回答群の①～⑥から答えなさい。</li>
			</ul>
			<br clear=all />


			<p class="none">
				「ある特定の商品やサービスが（　1　）によって（　2　）されているとき、その商品やサービスを『ブランド』と呼ぶ」
			</p>
			<br clear=all />
			【回答群】
			<div class="box mt10 " >
				①：消費者・顧客　②：企業　③：識別　④：販売　⑤：評価　⑥：告知
			</div>

			<br clear=all />
<?PHP
			$no = 1;
			for($i=11;$i<=12;$i++){
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
				空欄<?=$no?>
			</div>
			<div class="left">
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div><div class="left lh40">⑥</div></label></li>
				</ul>
			</div>
			<br clear=all />
<?PHP
				$no++;
			}
?>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">6</li>
				<li class="bd">ブランドに関する記述について、<u class="blue b">最も適切な選択肢</u>を下記の①～③の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			if($tdetail[ 'ans13' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans13' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans13' ] == 3) $chk3 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[13]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	有名であることが最低条件である。</div></label></li>
			</ul>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[13]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	品質が高いことが最低条件である。</div></label></li>
			</ul>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[13]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	有名・無名、品質の高い・低いに関わらない。</div></label></li>
			</ul>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">7</li>
				<li class="bd">ブランドに関する記述について、<u class="blue b">最も適切な選択肢</u>を下記の①～③の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			if($tdetail[ 'ans14' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans14' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans14' ] == 3) $chk3 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[14]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">①	ブランドがターゲットとするのは、すべての消費者である。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[14]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	ブランドがターゲットとするのは、すべての消費者ではない。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[14]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	ブランドにとって、ターゲットという概念は重要ではない。</div></label></li>

			</ul>
                                                                                     
		</div>
		<hr />

		<div class="w680">
			<ul class="sub">
				<li class="num">8</li>
				<li class="bd">ブランドの状態ついて述べた文として<u class="red b">誤っている選択肢</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans15' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans15' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans15' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans15' ] == 4) $chk4 = "CHECKED";

?>
			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[15]" value="1" class="radio" <?=$chk1?> /></div>
<div class="left lh20 mt10">
①	商品 ・サービスをリリースしたばかりで、その商品・サービスを知っている<br />
　　人が少ない状態ではブランドとは言わない。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[15]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">②	商品・サービスをリリースした時点で、誰もその商品・サービスを知らない状態は、ブランドゼロと言う。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[15]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③	消費者が購買に結びつくプラスの評価がされた場合を、ブランドプラスと言う。</div></label></li>
				<li><label><div class="left"><input type="radio" name="sec[15]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④	消費者が購買しない理由になるようなマイナスの評価がされた状態を、ブランドマイナスと言う。</div></label></li>

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
	<input type="hidden" name="nextPage" value="4" id="nextPage">
	<input type="hidden" name="backPage" value="2" id="backPage">
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
