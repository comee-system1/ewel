<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<div id="m_main">
	<div id="m_contents">
<?PHP
	include_once("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&e=<?=$_REQUEST[ 'e' ]?>&tid=<?=$_REQUEST[ 'tid' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<div class="red"><?=$errmsg?></div>
<?PHP
	}
?>
	各設問の文章を読んで、最もふさわしい回答を１つ選んで答えてください。
<?PHP
	foreach($exam as $key=>$val){
	
	$ans = "q".$key;
	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$chk5 = "";

	if($tdetail[ $ans ] == 1){
		$chk1 = "CHECKED";

	}
	if($tdetail[ $ans ] == 2){
		$chk2 = "CHECKED";
	}
	if($tdetail[ $ans ] == 3){
		$chk3 = "CHECKED";
	}
	if($tdetail[ $ans ] == 4){
		$chk4 = "CHECKED";
	}
	if($tdetail[ $ans ] == 5){
		$chk5 = "CHECKED";
	}


?>
	<table class="table" cellpadding=0 cellspacing=0 >
		<tr>
			<th colspan=2 align=left style='background-color:#f0f0f0; color:#543d3d; margin-top:5px; padding:2px;'  >■<?=$key?></th>
		</tr>
		<tr>
			<td colspan=2 class="title" style='background-color:#2595C7; padding:2px;' >問. <?=$val[ 'title' ]?></td>
		</tr>

		<tr>
			<td bgcolor=#ccccff>
				<input type="radio" name="sec[<?=$key?>]" value=1 id="chk_<?=$key?>_1" class="values<?=$key?>" <?=$chk1?> >
			</td>
			<td bgcolor=#ccccff>
				<div class="radio" id="d_<?=$key?>_1">
				<?=$val[ '1' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="sec[<?=$key?>]" value=2 id="chk_<?=$key?>_2" class="values<?=$key?>" <?=$chk2?> >
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_2" >
				<?=$val[ '2' ]?></div>
			</td>
		</tr>
		<tr>
			<td bgcolor=#ccccff>
				<input type="radio" name="sec[<?=$key?>]" value=3 id="chk_<?=$key?>_3" class="values<?=$key?>" <?=$chk3?> >
			</td>
			<td bgcolor=#ccccff>
				<div class="radio" id="d_<?=$key?>_3" >
				<?=$val[ '3' ]?></div>
			</td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="sec[<?=$key?>]" value=4 id="chk_<?=$key?>_4" class="values<?=$key?>" <?=$chk4?> >
			</td>
			<td>
				<div class="radio" id="d_<?=$key?>_4" >
				<?=$val[ '4' ]?></div>
			</td>
		</tr>
		<tr>
			<td bgcolor=#ccccff>
				<input type="radio" name="sec[<?=$key?>]" value=5 id="chk_<?=$key?>_5" class="values<?=$key?>" <?=$chk5?> >
			</td>
			<td bgcolor=#ccccff>
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
		<input type="submit" name="back" value="戻る" >
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
		<input type="submit" name="next" value="<?=$btn?>"  id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
