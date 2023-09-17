<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
$ans = "ans".$pager;


?>
<style type="text/css">
	dt{
		list-style-type: none;
	}
	dl dt{
		float:left;
		padding:10px;
	}
	dl dd{
		margin-left: 40px;
		padding:10px;
		
	}
	dl dd::after{
		content: "";
		clear:both;
		display:block;
	}
</style>

<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f24 bold gray">
				<div class="left">Q<?=$pager?> の正解と解説</div>
			</div>
			<p class="clearfix mt20" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20" ><?=$question[$pager][1][1]?></p>
			</p>
			<p class="mt20" ><?=$question[$pager][2][0]?></p>
			
			
			<p class="mt20" >選択肢</p>
			<dl>
				<dt>a.</dt>
				<dd><?=$question[$pager][2][1]?></dd>
				<dt>b.</dt>
				<dd><?=$question[$pager][2][2]?></dd>
				<dt>c.</dt>
				<dd><?=$question[$pager][2][3]?></dd>

			</dl>

			<div class="f24 bold gray mt20">
				<div class="left">Q<?=$pager?> の正解 <?=$interprete[$pager][0]?></div>
			</div>
			
			<p class="clearfix" ><?=$question[$pager][2][$array_answer[$ans]]?></p>
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
