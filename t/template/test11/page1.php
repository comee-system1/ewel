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
<?PHP
	include("pager.php");
?>
	<div class="f18">
		<p><?=$exam['no']?>．　<?=$exam[ 'question' ]?></p>
	</div>
	<div class="f18">
		<table class="table6">
			<tr>
				<td>調査世帯数</td>
				<td>・・・・・</td>
				<td>1,000世帯</td>
			</tr>
			<tr>
				<td>Ａ紙を購読している世帯数</td>
				<td>・・・・・</td>
				<td>460世帯</td>
			</tr>
			<tr>
				<td>Ｂ紙を購読している世帯数</td>
				<td>・・・・・</td>
				<td>250世帯</td>
			</tr>
			<tr>
				<td>Ａ紙とＢ紙を同時に購読している世帯数</td>
				<td>・・・・・</td>
				<td>100世帯</td>
			</tr>
		</table>
		<p>このとき、Ａ紙、Ｂ紙のどちらの新聞も購読していない世帯数はいくつですか。</p>
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
<?PHP
	include("pager.php");
?>
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
