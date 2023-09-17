<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page2";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<p id="TimeLeft"></p>

	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>tamen/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">


		
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<table id="table">
		<tr>
			<th colspan=2>&nbsp;</th>
			<th class="l" >ほとんど当てはまらない</th>
			<th class="l" >あまり当てはまらない</th>
			<th class="l" >少し当てはまる</th>
			<th class="l" >かなり当てはまる</th>
		</tr>
<?PHP
		foreach($exam as $key=>$val){
?>
			<tr>
				<th ><?=$key?></th>
				<th class="l"><?=$val?></th>
<?PHP
				$ans = "ans".$key;

				for($i=1;$i<=4;$i++){
					$chk = "";
					$cl = "";
					if($tdetail[ $ans ] == $i){
						$chk = "CHECKED";
						$cl = "on";
					}
?>
					<td>
					<div class="indent"><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="rdo_<?=$key?>_<?=$i?>" <?=$chk?> class="r_<?=$key?>" ></div>
					<div class="box radio td_<?=$key?> <?=$cl?>" id="td_<?=$key?>_<?=$i?>"><?=$i?></div></td>
<?PHP
				}
?>
			</tr>
<?PHP
		}
?>
	</table>
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
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="id" value="<?=$_REQUEST[ 'id' ]?>">
		<input type="hidden" name="tamentype" value="<?=$_REQUEST[ 'tamentype' ]?>">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
