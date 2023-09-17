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
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<div class="f18">
		<b><u>※ここからは、あなたの職場でのコミュニケーションについて伺います。</u></b>
		<div class="ques">
			<p>問8．あなたは、週何日くらい、直属の上司と直接話しますか。1～5の中から1つ選択してください。 </p>
			<table class="table2">
<?PHP
				foreach($q8 as $key=>$val){
					$on = "off";
					$chk = "";
					if($tdetail[ 'ans18' ] == $key){
						$on = "on";
						$chk = "checked";
					}
?>
					<tr>
					<td>
						<div class="indent"><input type="radio" name="sec[18]" value="<?=$key?>" id="chk_8_<?=$key?>" class="chk_8" <?=$chk?>></div>
						<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img8" id="img_8_<?=$key?>" />
					</td>
						<td class="radio" id="td_8_<?=$key?>" ><?=$val?></td>
					</tr>
<?PHP
				}
?>
			</table>
		</div>
		<div class="ques">
			<p>問9．あなたの職場で、直属の上司と以下のような話をどれくらいよくしていますか。それぞれ適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th class="w150">&nbsp;</th>
					<th>まったく<br />していない</th>
					<th>ほとんど<br />していない</th>
					<th>ときどき<br />している</th>
					<th>よく<br />している</th>
					<th>いつも<br />している</th>
				</tr>
<?PHP
				foreach($q9 as $key=>$val){
					$no  = $key-18;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l">(<?=$no?>)<?=$val?></td>
<?PHP
					for($i=1;$i<=5;$i++){
						
						$chk = "";
						$on  = "off";
						if($tdetail[ $ans] == $i){
							$chk ="CHECKED";
							$on  = "on";
						}
?>
						<td>
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_9<?=$key?>_<?=$i?>" class="chk9_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img9<?=$key?>" id="img_9<?=$key?>_<?=$i?>" />
						</td>
<?PHP
					}
?>
				</tr>
<?PHP
				}
?>
			</table>
		</div>

		<div class="ques">
			<p>問10．以下のことは、あなたの直属の上司にどれくらいあてはまりますか。それぞれ適切な項目を1つ選択してください。 </p>
			<table class="table">
				<tr>
					<th class="w150">&nbsp;</th>
					<th>まったく<br />あてはまらない</th>
					<th>あまり<br />あてはまらない</th>
					<th>どちらとも<br />いえない</th>
					<th>ある程度<br />あてはまる</th>
					<th>とても<br />あてはまる</th>
				</tr>
<?PHP
				foreach($q10 as $key=>$val){
					$no  = $key-22;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l">(<?=$no?>)<?=$val?></td>
<?PHP
					for($i=1;$i<=5;$i++){
						
						$chk = "";
						$on  = "off";
						if($tdetail[ $ans] == $i){
							$chk ="CHECKED";
							$on  = "on";
						}
?>
						<td>
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_10<?=$key?>_<?=$i?>" class="chk10_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img10<?=$key?>" id="img_10<?=$key?>_<?=$i?>" />
						</td>
<?PHP
					}
?>
				</tr>
<?PHP
				}
?>
			</table>
		</div>
	</div>
	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "結果表示";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">

	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
		<input type="hidden" name="pageFlg" value="" id="pageFlg" >

	</form>
		<input type="hidden"  value="<?=count($exam)?>" id="count" >

	</div>

<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
