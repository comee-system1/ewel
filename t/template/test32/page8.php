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
		<p><b>※あなたの職場について伺います。<br /><u>※引き続き、「職場」をあなたの直属の上司のもとで働いている人々としてご回答ください。 </u></b></p>
		<br clear=all />
		<div class="ques">
			<p>問24．以下のことは、あなたの職場において、それぞれどの程度、典型的に見られることだと思いますか。それぞれ適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />典型的でない</th>
					<th>あまり<br />典型的でない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />典型的である</th>
					<th>とても<br />典型的である</th>
				</tr>
<?PHP
				foreach($q24 as $key=>$val){
					$no  = $key-93;
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_24<?=$key?>_<?=$i?>" class="chk24_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img24<?=$key?>" id="img_24<?=$key?>_<?=$i?>" />
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
			<p>問25．引き続きうかがいます。以下のことは、<u>あなたの職場</u>において、それぞれどの程度、典型的に見られることだと思いますか。それぞれ適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />典型的でない</th>
					<th>あまり<br />典型的でない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />典型的である</th>
					<th>とても<br />典型的である</th>
				</tr>
<?PHP
				foreach($q25 as $key=>$val){
					$no  = $key-102;
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_25<?=$key?>_<?=$i?>" class="chk25_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img25<?=$key?>" id="img_25<?=$key?>_<?=$i?>" />
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
			<p ><b>※最後に、あなたご自身のお考えについて伺います。</b></p>
			<p>問26．以下のことは、あなたにとってどのくらい価値がありますか。それぞれ適切な項目を1つ選択してください。 </p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />価値がない</th>
					<th>あまり<br />価値がない</th>
					<th>どちらとも<br />言えない</th>
					<th>ある程度<br />価値がある</th>
					<th>とても<br />価値がある</th>
				</tr>
<?PHP
				foreach($q26 as $key=>$val){
					$no  = $key-110;
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_26<?=$key?>_<?=$i?>" class="chk26_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img26<?=$key?>" id="img_26<?=$key?>_<?=$i?>" />
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
