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
				<li class="num">14</li>
				<li class="bd">ブランドは、法律で保護の対象となっている。ブランドの防御に関する記述と、その名称の組み合わせとして、<u class="blue b">最も適切な選択肢</u>を下記の回答群①～④から選べ。</li>
			</ul>
			<br clear=all />
			<div class="box">
				<p >
					A)	会社の名称
				</p>
				<p >
					B)	自社の商品・サービスと他社のそれとを識別するための標識
				</p>
				<p >
					C)	デザインのこと
				</p>
				<br />
				<p >
					(ア) 意匠
				</p>
				<p >
					(イ) 商標
				</p>
				<p >
					(ウ) 商号
				</p>
				<p >
					(エ) 特許
				</p>
			</div>

<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			if($tdetail[ 'ans23' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans23' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans23' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans23' ] == 4) $chk4 = "CHECKED";

?>

			<ul class="ansmenu">
				<li><label><div class="left"><input type="radio" name="sec[23]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① A：エ　B：ア　C：イ</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[23]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② A：ウ　B：イ　C：ア</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[23]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ A：イ　B：ウ　C：ア</div></label></li><br clear=all />
				<li><label><div class="left"><input type="radio" name="sec[23]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ A：ウ　B：エ　C：イ</div></label></li>

			</ul>
		</div>
		<hr />
		<div class="w680">
			<ul class="sub">
				<li class="num">15</li>
				<li class="bd">ブランドの意匠に関連する法的な有効期限について、<u class="blue b">最も適切な選択肢</u>を下記の①～⑤の中から選べ。</li>
			</ul>
			<br clear=all />

<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			if($tdetail[ 'ans24' ] == 1) $chk1 = "CHECKED";
			if($tdetail[ 'ans24' ] == 2) $chk2 = "CHECKED";
			if($tdetail[ 'ans24' ] == 3) $chk3 = "CHECKED";
			if($tdetail[ 'ans24' ] == 4) $chk4 = "CHECKED";
			if($tdetail[ 'ans24' ] == 5) $chk5 = "CHECKED";

?>
			<ul class="ansmenu">
				<li class="clear"><label><div class="left"><input type="radio" name="sec[24]" value="1" class="radio" <?=$chk1?> /></div><div class="left lh40">① 登録から10年（更新不可）</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[24]" value="2" class="radio" <?=$chk2?> /></div><div class="left lh40">② 登録から10年（更新は永続）</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[24]" value="3" class="radio" <?=$chk3?> /></div><div class="left lh40">③ 登録から20年</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[24]" value="4" class="radio" <?=$chk4?> /></div><div class="left lh40">④ 登録から50年</div></label></li><br clear=all />
				<li class="clear"><label><div class="left"><input type="radio" name="sec[24]" value="5" class="radio" <?=$chk5?> /></div><div class="left lh40">⑤ 登記以降、期限無し</div></label></li><br clear=all />

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
	<input type="hidden" name="nextPage" value="7" id="nextPage">
	<input type="hidden" name="backPage" value="5" id="backPage">
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
