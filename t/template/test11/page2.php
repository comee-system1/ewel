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
	<p id="TimeLeft"></p>
	<p class="f18">以下に続く問題に関して、選択肢の中から最も適当なものを1つ選びなさい。</p>

<?PHP
	include("pager.php");
?>

	<div class="f18">
<?PHP
	foreach($exam[ 'code' ] as $key=>$val){
?>
	<p class="num"><?=$val[ 'no' ]?>．</p>
	<p class="num"><?=$val[ 'question' ]?></p>
	<br clear=all />
<?PHP
	if($val[ 'q' ]){
?>
	<p class="q">○<?=$val[ 'q' ]?></p>
<?PHP
	}
?>


		<table class="table">
<?PHP

		$ans = "ans".$val[ 'no' ];
		$num = $tdetail[ $ans ];
		foreach($val[ 'a' ] as $k=>$v){
			$on = "off";
			$chk = "";
			if($num == $k ){
				$on = "on";
				$chk = "CHECKED";
			}
?>
			<tr>
				<td class="ansKey">
<?PHP
			if($k == 1){
?>
				<?=$val[ 'ak' ]?>
<?PHP
			}else{
?>
				&nbsp;
<?PHP
			}
?>
				</td>
				<td class="checkTd">
				<div class="indent" >
					<input type="radio" name="sec[<?=$val['no']?>]" value="<?=$k?>" id="chk_<?=$val['no']?>_<?=$k?>" <?=$chk?> class="values<?=$k?>">
				</div>
				<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img<?=$val['no']?>" id="img_<?=$val['no']?>_<?=$k?>" />
				</td>
				<td class="radio" id="img_<?=$val['no']?>_<?=$k?>" ><?=$alpha[$k]?>. <?=$v?></td>
			</tr>
			
<?PHP
		}
?>
		</table>

<?PHP
	}
?>
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
<?PHP
	include("pager.php");
?>
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
