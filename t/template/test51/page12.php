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
				<li class="num">29</li>
				<li class="bd">ブランドがもたらす消費者・顧客にとっての利益と、その名称の組み合わせとして、<u class="blue b">最も適切なもの</u>を下記の回答群①～⑤から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box" >
				<p>A)	消費者・顧客がそのブランドに抱いているイメージと自分自身を重ね合わせることができる。</p>
				<p>
					B)	商品・サービスに関する調査の量（外的コスト）や内的コスト（検討する労力）を下げる役割を果たしている。
				</p>
				<p>
					C)	機能的価値と情緒的価値がある
				</p>
				<p>
					D)	購買決定におけるリスクを低減、回避できる。
				</p>
				
				<br clear=all />
				<p>(ア) 探索コストの低減</p>
				<p>(イ) 付加価値の向上</p>
				<p>(ウ) 価値の獲得</p>
				<p>(エ)	自己イメージの投影</p>
				<p>(オ)	リスクの低減</p>
			</div>
			<br clear=all />

<?PHP
			$no=1;
			for($i=47;$i<=47;$i++){
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
							①	A：エ　B：ア　C：ウ　D：オ
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	A：イ　B：ア　C：ウ　D：オ
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	A：エ　B：イ　C：ウ　D：ア
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	A：イ　B：ウ　C：ア　D：オ
						</div></label>
					</li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							⑤	A：エ　B：ア　C：ウ　D：イ
						</div></label>
					</li><br clear=all />
				</ul>
<?PHP
				$no++;
			}
?>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">30</li>
				<li class="bd">ブランドの価値について述べた文として<u class="red b">誤っている選択肢</u>を下記の①～④から選べ。</li>
			</ul>
			<br clear=all />
			
<?PHP
			for($i=48;$i<=48;$i++){
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
							①	ブランドから獲得する価値は、機能的価値と、情緒的価値に大別される。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="2" class="radio" <?=$chk2?> /></div>
						<div class="left lh40">
							②	機能的価値とは、製品そのものが提供する基本的機能のことである。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="3" class="radio" <?=$chk3?> /></div>
						<div class="left lh40">
							③	情緒的価値とは、製品を使うことで得られる心理的価値のことである。</div></label></li><br clear=all />
					<li><label><div class="left"><input type="radio" name="sec[<?=$i?>]" value="4" class="radio" <?=$chk4?> /></div>
						<div class="left lh40">
							④	機能的価値のない商品は、この世には存在しない。
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
	<input type="hidden" name="nextPage" value="13" id="nextPage">
	<input type="hidden" name="backPage" value="11" id="backPage">
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
