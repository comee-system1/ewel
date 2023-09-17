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
		<div class="ques">
			<p>問11．あなたの直属の上司について、あなたは以下のように思いますか。それぞれ適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th class="w150">&nbsp;</th>
					<th>そう<br />思わない</th>
					<th>あまりそう<br />思わない</th>
					<th>どちらとも<br />いえない</th>
					<th>やや<br />そう思う</th>
					<th>そう思う</th>
				</tr>
<?PHP
				foreach($q11 as $key=>$val){
					$no  = $key-34;
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_11<?=$key?>_<?=$i?>" class="chk11_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img11<?=$key?>" id="img_11<?=$key?>_<?=$i?>" />
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
			<p>問12．あなたの直属の上司が、あなたの仕事上のスキルなどについて、良いところや悪いところを指摘することは、それぞれどれくらいありますか。適切な項目を1つ選択してください。</p>
			<table class="table">
				<tr>
					<th >&nbsp;</th>
					<th>まったく<br />しない</th>
					<th>ほとんど<br />しない</th>
					<th>ときどき<br />する</th>
					<th>よくする</th>
					<th>いつもする</th>
				</tr>
<?PHP
				foreach($q12 as $key=>$val){
					$no  = $key-38;
					$ans = "ans".$key;
?>
				<tr>
					<td class="l2">(<?=$no?>)<?=$val?></td>
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_12<?=$key?>_<?=$i?>" class="chk12_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img12<?=$key?>" id="img_12<?=$key?>_<?=$i?>" />
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
