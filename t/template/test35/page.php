<?PHP
$css1 = "guide";

$js[1] = "page";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?><?=$text[1]?></div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
<?PHP
	include_once("pager.php");
?>

	<div class="f18">
		<p><?=$ques?><?=$exam['no']?>．<br /><?=$exam[ 'question' ]?></p>
	</div>

<?PHP
	if($exam[ 'code' ]){
?>
	<div class="f18">
		<p><?=$exam[ 'code' ]?></p>
	</div>
<?PHP
	}
?>
	<div class="f18">
<?PHP
		if($exam[ 'img' ]){
?>
			<div class="center">
				<img src="<?=D_URL?>/images/math2/<?=$exam[ 'img' ]?>"  class="<?=$exam[ 'imgCode' ]?>" />
			</div>
<?PHP
		}
?>

		<table class="table">
<?PHP
			$ans = "ans".$exam[ 'no' ];
			$chks = $tdetail[$ans];
			foreach($exam['a'] as $key=>$val){
				$chk = "";
				$on  = "off";
				if($chks == $key){
					$chk = "CHECKED";
					$on  = "on";
				}
?>
			<tr>
				<td class="checkTd">
				<div class="indent" >
					<input type="radio" name="sec[<?=$exam['no']?>]" value="<?=$key?>" id="chk_<?=$exam['no']?>_<?=$key?>" <?=$chk?> class="values<?=$key?>">
				</div>
					<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img<?=$exam['no']?>" id="img_<?=$exam['no']?>_<?=$key?>" />
				</td>
				<td class="radio" id="img_<?=$exam['no']?>_<?=$key?>" ><?=$key?>. <?=$val?></td>
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
		<input type="submit" name="back" value="<?=$btnkey[4]?>" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = $btnkey[1];
	}else{
		$btn = $btnkey[2];
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
<?PHP
	include("pager.php");
?>
	</div>


<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
