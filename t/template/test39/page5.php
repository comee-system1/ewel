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
	<p id="TimeLeft"></p>
	<div class="answerBox">

	<div style="font-size:18px;"><?=$exam[ 'key' ]?>.　<?=$exam[ 'q' ]?></div>
	<table id="table">
<?PHP
		$key2 = $exam[ 'no' ];
		foreach($exam[ 'ans' ] as $key=>$val){
?>
			<tr>
				<td style="padding-top:30px;"><?=$val?></td>
			</tr>
			<tr>
				<td>
					<div style="width:800px;">
						<div class="left">役に立たない</div>
						<div class="right">役に立つ</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
				<div style="width:800px;margin:0 auto;">
				<ul class="mAns" >
<?PHP
				$ans = "ans".$key2;
				for($i=1;$i<=10;$i++){
					$chk = "";
					$cl = "";
					if($tdetail[ $ans ] == $i){
						$chk = "CHECKED";
						$cl  = "gray";
					}
?>
					<li class="<?=$cl?> page2">
						<div class="pos indent"><input type="radio" name="sec[<?=$key2?>]" value="<?=$i?>" id="chk_<?=$key2?>_<?=$i?>" <?=$chk?> class="rd<?=$key2?>"></div>
						<div class="radio cl_<?=$key2?>" id="div_<?=$key2?>_<?=$i?>"  ><div class="mgc"><?=$i?></div></div>
					</li>
<?PHP
				}

				$key2++;
?>
				</ul>
				</div>
				</td>
			</tr>
<?PHP
		}
?>
	</table>
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
		$btn = "検査完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next3">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
		<input type="hidden"  value="<?=$count?>" id="count" >

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
