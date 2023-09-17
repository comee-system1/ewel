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
				<li class="num">49</li>
				<li class="bd">マーケティングミックスの４Pに関する記述で、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</u></li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=84;$i<=84;$i++){
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
						 "① Productは、機能や特徴、デザインなど、製品そのものに関するものだけでなく、アフターサービス<br />
						　　なども含まれる。"
						,"② Priceは、標準価格や値引き、仕入れ価格など、価格そのものに関するものを表し、支払方法や取引<br />
						　　条件などは含まれない。"
						,"③ Placeは、販売ルートや輸送方法を表し、立地は含まれない。"
						,"④ Promotionは、営業や販売促進全般を表し、店舗の立地も含まれる。"
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
				<li class="num">50</li>
				<li class="bd">マーケティングミックスの4Cに関する記述で、<u class="blue b">最も適切な選択肢</u>を下記の①～③の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=85;$i<=85;$i++){
				$chk[1] = "";
				$chk[2] = "";
				$chk[3] = "";

				if($tdetail[ 'ans'.$i ] == 1 ) $chk[1] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2 ) $chk[2] = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3 ) $chk[3] = "CHECKED";
?>

				<ul class="ansmenu">
<?PHP
				$ans = array(
						 "① Customer Valueは、楽しい、癒されるなど、商品・サービスによってもたらされる顧客の価値を表す。"
						,"② Customer Costは、商品・サービスを手に入れるために、顧客が実際に支払う現金のことを言う。"
						,"③ Communicationは、カスタマーセンターの設置などで、顧客の声が企業に届きやすい環境を言う。"
						);
					for($j=1;$j<=3;$j++){
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
				<li class="num">51</li>
				<li class="bd">ブランド体験について述べた文として<u class="red b">誤っている選択肢</u>を下記の①～⑤の中から選べ。</li>
			</ul>
			<br clear=all />

<?PHP
			$no=0;
			
			for($i=86;$i<=86;$i++){
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
						 "① ブランド体験は、ブランドの世界観を顧客に伝え、浸透させるためのシナリオである。"
						,"② ブランド体験で、ブランド再認の率を高め、ブランド再生の量を増やす具体的な取組みを設計する。"
						,"③ ブランド体験は、顧客が購入する前、購入時、購入後、リピート時、各々のステージで、接触シナリオ<br />
						　　を検討し、設計する。"
						,"④ 接触シナリオの主な媒体として、カタログ、チラシ、HP、SNS、店舗、イベントなどがある。"
						,"⑤ ブランド体験の設計では、「いつ」「どこで」「何を」「どのように」を意識することが大切である。"
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
		<input type="submit" name="next" value="完了" class="button" id="next">
	</div>
	<input type="hidden" name="nextPage" value="23" id="nextPage">
	<input type="hidden" name="backPage" value="21" id="backPage">
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
