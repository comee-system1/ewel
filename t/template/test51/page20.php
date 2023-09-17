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
				<li class="num">43</li>
				<li class="bd">ターゲティングに関する記述として、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			$no=0;
			
			for($i=75;$i<=75;$i++){
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
						"①	ターゲティングとは、顧客の存在する地域を限定することである。"
						,"② ターゲティングとは、顧客の年齢層を限定することである。"
						,"③ ターゲティングとは、細分化された市場から、自社の事業または製品、サービスを、最も評価<br />
						　　してくれる見込み客を選定することである。"
						,"④ ターゲティングとは、細分化された市場から、1人の典型的な見込み客に絞り込むことである。"
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
				<li class="num">44</li>
				<li class="bd">企業にとって、最も重要で象徴的な「顧客を絞り込むこと」をマーケティングにおいて何と呼ぶか。<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />


<?PHP
			$no=0;
			
			for($i=76;$i<=76;$i++){
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
						"①	キャラクター"
						,"② ペルソナ"
						,"③ メタファー"
						,"④ パネラー"
						
						);
					for($j=1;$j<=4;$j++){
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
				<li class="num">45</li>
				<li class="bd">連想マップについて述べた文として<u class="red b">誤っている選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=77;$i<=77;$i++){
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
						 "① 連想マップのテーマの1つは、対象事業（製品・サービス）そのものとする。"
						,"② 連想マップでは、連想の末端の言葉を特に注目して抽出する。"
						,"③ 連想マップは、ターゲット顧客の本音を探ることを目的とする。"
						,"④ 連想マップでは、1つの言葉から多くの言葉がつながっている部分等をチェックして、キーワード<br />
						　　となりそうな言葉を抽出する。"
						
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
				<li class="num">46</li>
				<li class="bd">ポジショニングマップに関する記述で、<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=0;
			
			for($i=78;$i<=78;$i++){
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
						 "①	ポジショニングマップを使って、独自性を築ける立ち位置を見つける。"
						,"②	ポジショニングマップでは、比較する競合他社は1社に限定する。"
						,"③	ポジショニングマップは、製品・サービスの機能面を重点的に軸を切る。"
						,"④	ポジショニングマップの軸は、上と下、右と左は、反対語にする必要はない。"
						
						);
					for($j=1;$j<=4;$j++){
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
	<input type="hidden" name="nextPage" value="21" id="nextPage">
	<input type="hidden" name="backPage" value="19" id="backPage">
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
