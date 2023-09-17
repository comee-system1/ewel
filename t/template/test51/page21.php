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
				<li class="num">47</li>
				<li class="bd">ブランド・アイデンティティについて述べた文として<u class="red b">誤っている選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=79;$i<=79;$i++){
				$chk[1] = "";
				$chk[2] = "";
				$chk[3] = "";
				$chk[4] = "";


				if($tdetail[ 'ans'.$i ] == 1 ) $chk[1] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2 ) $chk[2] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3 ) $chk[3] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4 ) $chk[4] = "CHECKED";

?>

				<ul class="ansmenu">
<?PHP
				$ans = array(
						 "① ブランド・アイデンティティは、顧客が好感を抱けて、社員が顧客にどう振る舞えば良いかがイメージ<br />
						　　できることが望ましい。"
						,"② ブランド・アイデンティティは、顧客にどう認知されたいかという旗印となる言葉である。"
						,"③ ブランド・アイデンティティは、キャッチコピーと同様の性質を持つため、顧客に覚えてもらうために<br />
						　　奇をてらったインパクトのある内容が好ましい。"
						,"④ ブランド・アイデンティティは、自社の独自性を端的な言葉で表したものである。"
						);
					for($j=1;$j<=4;$j++){
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
			<hr />
			<ul class="sub">
				<li class="num">48</li>
				<li class="bd">次の文章は4P／4Cに関する記述である。ア～エの説明について、<u class="b">正誤を答えなさい。</u></li>
			</ul>
			<br clear=all />

			<p>ア～エの説明について、正誤を答えなさい。</p>
<?PHP
			$no=0;
			$keys = array(
						"(ア)	4Pとは、企業の視点で、製品、価格、販売促進、ブランディングを表したものである。"
						,"(イ)	4Cとは、顧客の視点で、顧客価値、顧客の負担、入手容易性、コミュニケーションを表したものである。"
						,"(ウ)	4P／4Cで、差別化と顧客への優位性が一覧できる。"
						,"(エ)	4P／4Cで、企業と顧客の両方の視点で整理して、独自性強化などの具体化戦略を練る。"
					);
			for($i=80;$i<=83;$i++){
				$chk[1] = "";
				$chk[2] = "";

				if($tdetail[ 'ans'.$i ] == 1 ) $chk[1] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2 ) $chk[2] = "CHECKED";
?>
				<?=$keys[ $no ]?>
				<ul class="ansmenu">
<?PHP
				$ans = array(
						"①	正"
						,"② 誤"
						
						);
					for($j=1;$j<=2;$j++){
						$k = $j-1;
?>
					<li><label><div class="left  ml20"><input type="radio" name="sec[<?=$i?>]" value="<?=$j?>" class="radio" <?=$chk[$j]?> /></div>
						<div class="left lh40">
							<?=$ans[$k]?>
						</div></label>
					</li>
<?PHP
					}
?>
				</ul>
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
	<input type="hidden" name="nextPage" value="22" id="nextPage">
	<input type="hidden" name="backPage" value="20" id="backPage">
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
