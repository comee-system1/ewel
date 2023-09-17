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
		<p><b>※次に、あなたのお仕事や会社に対するお気持ちについて伺います。</b></p>
		<div class="ques">
			<p>問21．現在のお仕事に、以下の項目はどのくらいあてはまりますか。それぞれ適切な項目を1つ選択してください。 </p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />あてはまらない</th>
					<th>あまり<br />あてはまらない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />あてはまる</th>
					<th>とても<br />あてはまる</th>
				</tr>
<?PHP
				foreach($q21 as $key=>$val){
					$no  = $key-84;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l3">(<?=$no?>)<?=$val?></td>
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_21<?=$key?>_<?=$i?>" class="chk21_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img21<?=$key?>" id="img_21<?=$key?>_<?=$i?>" />
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
			<p>問22．現在のお仕事において、以下の項目に対してどのくらい満足していますか。それぞれ適切な項目を1つ選択してください。 </p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />満足していない</th>
					<th>あまり<br />満足していない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />満足している</th>
					<th>とても<br />満足している</th>
				</tr>
<?PHP
				foreach($q22 as $key=>$val){
					$no  = $key-86;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l3">(<?=$no?>)<?=$val?></td>
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_22<?=$key?>_<?=$i?>" class="chk22_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img22<?=$key?>" id="img_22<?=$key?>_<?=$i?>" />
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
			<p>問23．以下のことは、<u>今お勤めの会社</u>にどれくらいあてはまりますか。それぞれ適切な項目を1つ選択してください。 </p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />あてはまらない</th>
					<th>あまり<br />あてはまらない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />あてはまる</th>
					<th>とても<br />あてはまる</th>
				</tr>
<?PHP
				foreach($q23 as $key=>$val){
					$no  = $key-90;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l3">(<?=$no?>)<?=$val?></td>
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_23<?=$key?>_<?=$i?>" class="chk23_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img23<?=$key?>" id="img_23<?=$key?>_<?=$i?>" />
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
