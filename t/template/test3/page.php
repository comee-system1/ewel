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
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
<?PHP
	if($alert){
?>
	<p class="errmsg"><?=$alert?></p>
<?PHP
	}
?>
	<p>各設問の文章を読んで、最もふさわしい回答を１つ選んで答えてください。</p>
<?PHP
	foreach($exam as $key=>$val){
	
	$ans = "q".$key;
	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$chk5 = "";
	$on1 = "off";
	$on2 = "off";
	$on3 = "off";
	$on4 = "off";
	$on5 = "off";
	if($tdetail[ $ans ] == 1){
		$chk1 = "CHECKED";
		$on1 = "on";

	}
	if($tdetail[ $ans ] == 2){
		$chk2 = "CHECKED";
		$on2 = "on";

	}
	if($tdetail[ $ans ] == 3){
		$chk3 = "CHECKED";
		$on3 = "on";

	}
	if($tdetail[ $ans ] == 4){
		$chk4 = "CHECKED";
		$on4 = "on";
	}
	if($tdetail[ $ans ] == 5){
		$chk5 = "CHECKED";
		$on5 = "on";
	}


?>
	<table class="table">
		<tr>
			<th colspan=2>■<?=$key?></th>
		</tr>
		<tr>
			<td colspan=2 class="title">問. <?=$val[ 'title' ]?></td>
		</tr>

		<tr>
			<td>
				<div class="indent"><input type="radio" name="sec[<?=$key?>]" value=1 id="chk_<?=$key?>_1" class="values<?=$key?>" <?=$chk1?> ></div> 
				<img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" />
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_1">
				<?=$val[ '1' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="indent"><input type="radio" name="sec[<?=$key?>]" value=2 id="chk_<?=$key?>_2" class="values<?=$key?>" <?=$chk2?> ></div> 
				<img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" />
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_2" >
				<?=$val[ '2' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="indent"><input type="radio" name="sec[<?=$key?>]" value=3 id="chk_<?=$key?>_3" class="values<?=$key?>" <?=$chk3?> ></div> 
				<img src="<?=D_URL_TEST?>image/check_<?=$on3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" />
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_3" >
				<?=$val[ '3' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="indent"><input type="radio" name="sec[<?=$key?>]" value=4 id="chk_<?=$key?>_4" class="values<?=$key?>" <?=$chk4?> ></div> 
				<img src="<?=D_URL_TEST?>image/check_<?=$on4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" />
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_4" >
				<?=$val[ '4' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="indent"><input type="radio" name="sec[<?=$key?>]" value=5 id="chk_<?=$key?>_5" class="values<?=$key?>" <?=$chk5?> ></div> 
				<img src="<?=D_URL_TEST?>image/check_<?=$on5?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_5" />
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_5" >
				<?=$val[ '5' ]?></div>
			</td>
		</tr>
	</table>
<?PHP
	}
?>

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

	</form>
	<input type="hidden" id="alerts" valud="<?=$alert?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
