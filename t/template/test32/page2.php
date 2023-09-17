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
		<b><u>※以下では、「職場」をあなたの直属の上司のもとで働いている人々とします。なお、「職場」や「直属の上司」の定義を御社の調査ご担当者に指定された場合は、それに従ってお答えください。</u></b>
		<div class="ques">
			<p>問4． あなたの職場は、あなたを含めて何人くらいですか（上司をのぞく）。（）の中に半角数字を記入してください。 </p>
			(<input type="text" name="sec[4]" value="<?=$tdetail[ 'ans4' ]?>" id="ans4" class="w30" >)人くらい
		</div>
		<div class="ques">
			<p>問5．現在の職場での在籍年数を（）の中に半角数字を記入してください。１年未満の方は、「１」とお書き下さい。</p>
			(<input type="text" name="sec[5]" value="<?=$tdetail[ 'ans5' ]?>" id="ans5" class="w30" >)人くらい
		</div>

		<div class="ques">
			<p>問6．以下のことは、あなたの現在の仕事にどれくらいあてはまりますか。それぞれ適切な項目を1つ選択してください。 </p>
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
				foreach($q6 as $key=>$val){
					$no  = $key-5;
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_6<?=$key?>_<?=$i?>" class="chk6_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img6<?=$key?>" id="img_6<?=$key?>_<?=$i?>" />
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
			<p>問7．以下のことは、あなたの仕事にどれくらいあてはまりますか。それぞれ適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th class="w150">&nbsp;</th>
					<th>ちがう</th>
					<th>ややちがう</th>
					<th>まあそうだ</th>
					<th>そうだ</th>

				</tr>
<?PHP
				foreach($q7 as $key=>$val){
					$ans = "ans".$key;
					$no  = $key-11;
?>
				<tr>
					<td class="l">(<?=$no?>)<?=$val?></td>
<?PHP
					for($i=1;$i<=4;$i++){
						$chk = "";
						$on  = "off";
						if($tdetail[ $ans] == $i){
							$chk ="CHECKED";
							$on  = "on";
						}
?>
						<td>
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_7<?=$key?>_<?=$i?>" class="chk7_<?=$key?>" <?=$chk?> ></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img7<?=$key?>" id="img_7<?=$key?>_<?=$i?>" />
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
