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


	<div class="questionBox">
		<p><?=$exam[ 'title' ]?></p>
		<img src="<?=D_URL?>/images/dp/<?=$exam[ 'img' ]?>" />
	</div>
	<div class="exBox">上の写真の表情に、下記のどの感情が表れているか１つ選択してください。</div>
	<div class="answerBox">
	<table class="ansTbl0">
		<tr>
<?PHP
	foreach($exam[ 'ans' ] as $key=>$val){
		
?>
			<td class="num"><?=$key?></td>
<?PHP
	}
?>
		</tr>
		<tr>
<?PHP
	foreach($exam[ 'ans' ] as $k=>$val){
			$chk = "";
			$c = "";
			if($k == $answer[$exam['key']]){
				$chk = "CHECKED";
				$c   = "on";
			}
?>
		<td id="td_<?=$k?>" class="td <?=$c?>" >
			<div class="indent"><input type="radio" name="sec[<?=$pager?>]" value="<?=$k?>" id="chk_<?=$k?>" <?=$chk?> class="rd<?=$pager?>" ></div>
			<div class="radio cl" id="radio_<?=$k?>"><?=$val?></div>
		</td>
<?PHP
		
	}
?>
		</tr>
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
	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
