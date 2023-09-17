<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>

<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f18 ">
				<div class="left"><?=$array_number[$pager]?> の正解と解説</div>
			</div>
			<p class="clearfix mt20" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20" ><?=$question[$pager][1][1]?></p>
			</p>
			<p class="mt20" ><?=$question[$pager][2][0]?></p>
			<ul class="question">
				<li class="bl"><?=$question[$pager][2][1]?></li>
				<li class="bl"><?=$question[$pager][2][2]?></li>
				<li class="bl"><?=$question[$pager][2][3]?></li>
				<li class="bl"><?=$question[$pager][2][4]?></li>
				<li class="bl"><?=$question[$pager][2][5]?></li>
			</ul>
			<!--
			<p class="mt20 f24" >選択肢</p>
			<ul class="question">
				<li class="bl"><?=$question[$pager][3][1]?></li>
				<li class="bl"><?=$question[$pager][3][2]?></li>
				<li class="bl"><?=$question[$pager][3][3]?></li>
				<li class="bl"><?=$question[$pager][3][4]?></li>
				<li class="bl"><?=$question[$pager][3][5]?></li>
			</ul>
			-->
			<div class="f24 bold gray mt20">
				<div class="left">Q<?=$pager?> の正解 <?=$interprete[$pager][0]?></div>
			</div>

			<p class="clearfix" ><?=$interprete[$pager][1]?></p>
			<div class="f24 bold gray">
				<div class="left">解説</div>
			</div>
			<p class="mt20 clearfix" ><?=$interprete[$pager][2]?></p>
			<div class="center mt40 clearfix">
				<input type="button" id="close" value="閉じる" class="button" >
			</div><!--button-->
		</div><!--waku-->
		</form>
<script type="text/javascript">
<!--
$(function(){
	$("#close").click(function(){
		window.close();
	});
});
//-->
</script>
<?PHP
include_once("include_footer.php");
?>
