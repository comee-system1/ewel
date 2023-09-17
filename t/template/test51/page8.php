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
				<li class="num">19</li>
				<li class="bd">ブランド再認とブランド再生の関係性について、<u class="blue b">最も適切な組み合わせ</u>を下記の回答群①～④から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p>a　ブランド再生するには、まず、ブランド再認できることが条件になる。</p>
				<p>b　ブランド再認するには、まず、ブランド再生できることが条件になる。</p>
				<p>c　顧客の購買行動につなげるためには、ニーズと結びつくブランド再認を目指さなければならない。</p>
				<p>d　顧客の購買行動につなげるためには、ニーズと結びつくブランド再生を目指さなければならない。</p>
			</div>
			<br clear=all />
			<p class="none">【回答群】</p>
<?PHP
			for($i=29;$i<=29;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";

?>
				<?=$array[$i]?>
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① a と c</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② a と d</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ b と c</div></label></li>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ b と d</div></label></li>
				</ul>
<?PHP
			}
?>
		</div>
		<hr />

		<div class="w680">
			<ul class="sub">
				<li class="num">20</li>
				<li class="bd">ブランド認知のために、ブランド・マネージャーが実行すべき内容について、下記の回答群の中で<u class="blue b">最も効果的な組み合わせ</u>を下記の回答群①～④から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p>a　ブランド再認の量を増やす</p>
				<p>b　ブランド再認の率を高める</p>
				<p>c　ブランド再生の量を増やす</p>
				<p>d　ブランド再生の率を高める</p>
			</div>
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans30' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans30' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans30' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans30' ] == 4) $chk4 = "CHECKED";

?>
			<p class="none">【回答群】</p>
			<ul class="ansmenu">
				<li class="clear"><label><div class="left"><input type="radio" name="sec[30]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① a と c</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[30]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② a と d</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[30]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ b と c</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[30]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ b と d</div></label></li><br clear=all />

			</ul>
		</div>
		<hr />

		<div class="w680">
			<ul class="sub">
				<li class="num">21</li>
				<li class="bd">次の文章はブランドに関する説明である。文中の1～4に入る<u class="blue b">最も適切な選択肢</u>はどれか。回答群の①～⑨から選べ。</li>
			</ul>
			<br clear=all />
			<p>
				ブランドとは、「消費者・顧客の（　1　）の中に作り上げられる（　2　）」である。
ある製品・サービスをブランド化するためには、消費者・顧客が識別するのに役立つ（　3　）（ネームやロゴ）を使うことによって、その製品・サービスが「何者か」を示すことが必要となる。そして、消費者・顧客がブランドと接触するあらゆる機会である「（　4　）」を通して、その製品・サービスに何ができるか、と、この製品・サービスが他のブランドと違って特別である理由を伝えなければならない。
			</p>
			<br clear=all />

			<p class="none">【回答群】</p>
			<ul class="ulmenu" >
				<li style="width:120px;">①：心</li>
				<li style="width:120px;">②：関係性</li>
				<li style="width:120px;">③：体</li>
				<li style="width:120px;">④：姿</li>
				<li style="width:120px;">⑤：価値</li>
				<li style="width:120px;">⑥：力(ちから)</li>
				<li style="width:120px;">⑦：心象</li>
				<li style="width:120px;">⑧：ブランド要素</li>
				<li style="width:120px;">⑨：ブランド体験</li>
			</ul>
			<br clear=all />
<?PHP
			$no=1;
			for($i=31;$i<=34;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";
				$chk6 = "";
				$chk7 = "";
				$chk8 = "";
				$chk9 = "";

				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 6) $chk6 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 7) $chk7 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 8) $chk8 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 9) $chk9 = "CHECKED";

?>
			<div class="left mt10">
			空欄<?=$no?>.
			</div>
			<div class="left">
				<ul class="ansmenu">
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40 mgr10">①</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40 mgr10">②</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40 mgr10">③</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40 mgr10">④</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40 mgr10">⑤</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="6" class="radio" <?=$chk6?> /></div><div class="left lh40 mgr10">⑥</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="7" class="radio" <?=$chk7?> /></div><div class="left lh40 mgr10">⑦</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="8" class="radio" <?=$chk8?> /></div><div class="left lh40 mgr10">⑧</div></label></li>
					<li ><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="9" class="radio" <?=$chk9?> /></div><div class="left lh40 mgr10">⑨</div></label></li>
				</ul>
			</div>
			<br clear=all />
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
	<input type="hidden" name="nextPage" value="9" id="nextPage">
	<input type="hidden" name="backPage" value="7" id="backPage">
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
