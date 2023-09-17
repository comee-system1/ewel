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
				<li class="num">41</li>
				<li class="bd">３Ｃ分析を表した図の中で、企業が「市場機会」として捉えるべき場所はどこか。<u class="blue b">最も適切な選択肢</u>を下記の回答群①～⑩から選べ。</li>
			</ul>
			<br clear=all />
			<p align="center">
				<img src="<?=D_URL_HOME?>t/template/test51/img3.png" >
			</p>
			<br clear=all />
			<p class="none">【回答群】</p>
			
			
<?PHP
			$no=0;
			
			for($i=73;$i<=73;$i++){
				$chk[1] = "";
				$chk[2] = "";
				$chk[3] = "";
				$chk[4] = "";
				$chk[5] = "";
				$chk[6] = "";
				$chk[7] = "";
				$chk[8] = "";
				$chk[9] = "";
				$chk[10] = "";

				if($tdetail[ 'ans'.$i ] == 1 ) $chk[1] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2 ) $chk[2] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3 ) $chk[3] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4 ) $chk[4] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5 ) $chk[5] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 6 ) $chk[6] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 7 ) $chk[7] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 8 ) $chk[8] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 9 ) $chk[9] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 10) $chk[10] = "CHECKED";

?>

				<ul class="ansmenu">
<?PHP
				$ans = array(
						"①エ"
						,"②オ"
						,"③カ"
						,"④キ"
						,"⑤エ と キ"
						,"⑥オ と キ"
						,"⑦カ と キ"
						,"⑧オ と カ"
						,"⑨エ と オ と カ"
						,"⑩エ と オ と カ と キ"
						);
					for($j=1;$j<=10;$j++){
						$k = $j-1;
?>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="<?=$j?>" class="radio" <?=$chk[$j]?> /></div>
						<div class="left lh40">
							<?=$ans[$k]?>
						</div></label>
					</li><br clear=all />
<?PHP
					}
?>
				</ul>
				<br clear=all />
<?PHP
				$no++;
			}
?>
			<hr />
			<ul class="sub">
				<li class="num">42</li>
				<li class="bd">セグメンテーションに関する記述について<u class="red b">誤っている選択肢</u>を下記の①～⑤から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=74;$i<=74;$i++){
				$chk[1] = "";
				$chk[2] = "";
				$chk[3] = "";
				$chk[4] = "";
				$chk[5] = "";


				if($tdetail[ 'ans'.$i ] == 1 ) $chk[1] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2 ) $chk[2] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3 ) $chk[3] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4 ) $chk[4] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5 ) $chk[5] = "CHECKED";
?>

				<ul class="ansmenu">
<?PHP
				$ans = array(
						"①	セグメンテーションとは、STPマーケティングの「S」のことである。"
						,"② セグメンテーションの基準は、年齢や性別等の人口統計的要素、収入や資産等の経済的要素、<br />
						　　生活様式や好みなどの社会的・文化的要素などがある。"
						,"③ セグメンテーションとは、市場細分化のことで、市場を分割し、特定していく作業を意味する。"
						,"④ 基本セグメントとは、事業、製品、サービスを問わず、多くの事業に共通して必要なセグメント<br />
							　　テーマをいう。"
						,"⑤ 固有セグメントとは、対象の事業、製品、サービスに直接的に関わるセグメントテーマをいう。"
						
						);
					for($j=1;$j<=5;$j++){
						$k = $j-1;
?>
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="<?=$j?>" class="radio" <?=$chk[$j]?> /></div>
						<div class="left lh20 mt10">
							<?=$ans[$k]?>
						</div></label>
					</li><br clear=all />
<?PHP
					}
?>
				</ul>
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
	<input type="hidden" name="nextPage" value="20" id="nextPage">
	<input type="hidden" name="backPage" value="18" id="backPage">
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
