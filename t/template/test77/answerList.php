<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<h2>結果画面</h2>
		<div class="box">
			<div class="f24 bold gray">
				<?=$collect?>問正解/7問中 （正解率 <?=round($persent)?>%）
			</div>
<?PHP if($collect <= 5 ){ ?>
				<p class="red f18">7問中 正解が5問以下であった場合は再受講となります。</p>
<?PHP }else{ ?>
				<p class="red f18">不正解の設問については解説を確認してください。</p>
<?PHP } ?>

			<div>
			<table class="question f18">
			
<?PHP
			foreach($array_collect as $key=>$val){
				$ans = "<span style='color:blue;'>不正解</span>";
				if($val) $ans = "<span style='color:red;'>正解</span>";
?>
				<tr>
				<td class="gray" style="width:60px;"><span>Q<?=$key?></td>
				<td style="width:60px;" ><a href="./?pager=<?=$key?>&interpret=on&k=<?=$_REQUEST[k]?>&" class="interpret" id="q-<?=$key?>">解説</a></td>
				<td ><?=$ans?></td>
				</tr>
<?PHP
			}
?>
			</table>
			</div>
			<div class="center mt40 clearfix">
<?PHP
			if($collect > 5 ){
?>
				<input type="submit" name="fin" value="次へ" class="button" id="next">
<?PHP
			}else{
?>
				<input type="button"  value="閉じる" class="button" id="close">
<?PHP
			}
?>
			</div><!--button-->
		</div><!--waku-->

		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript">
<!--
$(function(){
	$(".interpret").click(function(){
		var _url = $(this).attr("href");
		window.open(_url, 'mywindow2', 'width=650, height=800, menubar=no, toolbar=no, scrollbars=yes');
		return false;
	});
	$("#close").click(function(){
		window.open('about:blank','_self').close();
	});
});
//-->
</script>
<?PHP
include_once("include_footer.php");
?>
