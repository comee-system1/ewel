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
				<li class="num">31</li>
				<li class="bd">「機能的リスク」に関する説明について<u class="blue b">最も適切な選択肢</u>を下記の①～④の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			$no=1;
			for($i=49;$i<=49;$i++){
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
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh40">
							①	購入した商品が、不良品である。
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	購入した商品のデザインが気に入らない。
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	購入した商品が、購入者が期待した機能を果たさない。
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	購入した商品が故障していて動かない。
						</div></label>
					</li><br clear=all />
				</ul>
<?PHP
				$no++;
			}
?>
		</div>
		<hr  />

		<div class="w680">
			<ul class="sub">
				<li class="num">32</li>
				<li class="bd">ブランドが企業にもたらすエクスターナル（外部的）な利益について<u class="red b">誤っているもの</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			for($i=50;$i<=50;$i++){
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
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh40">
							①	付加価値の向上</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	社員のモチベーション向上</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	価格決定権</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	競合商品・サービスとの差別化
						</div></label></li><br clear=all />
					
				</ul>
<?PHP
			}
?>
		</div>
		<hr  />
		<div class="w680">
			<ul class="sub">
				<li class="num">33</li>
				<li class="bd">知的所有権の内、特許権に関する記述に当てはまる<u class="blue b">最も適切な選択肢</u>を下記の①～⑤の中から選べ。</li>
			</ul>
			<br clear=all />
<?PHP
			for($i=51;$i<=51;$i++){
				$chk1 = "";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";
				$chk5 = "";


				if($tdetail[ 'ans'.$i ] == 1) $chk1 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 2) $chk2 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 3) $chk3 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 4) $chk4 = "CHECKED";
				if($tdetail[ 'ans'.$i ] == 5) $chk5 = "CHECKED";

?>
				<ul class="ansmenu">
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="1" class="radio" <?=$chk1?> /></div>
						<div class="left lh40">
							①	製造プロセス</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	コンテンツ</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	URL</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	ブランドネーム
						</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="5" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							⑤	パッケージデザイン
						</div></label></li><br clear=all />
				</ul>
<?PHP
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
	<input type="hidden" name="nextPage" value="14" id="nextPage">
	<input type="hidden" name="backPage" value="12" id="backPage">
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
