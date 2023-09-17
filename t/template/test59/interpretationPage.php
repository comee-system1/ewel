<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
$ans = "ans".$pager;
if($answer[ $ans ] == $array_answer[ $ans ]){
	$collect = "<span style='color:red;'>正解</span>";
}else{
	$collect = "<span style='color:blue;'>不正解</span>";
}

?>
<div id="main">
	<div id="contents">	
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
			<ul class="question">
				<li class="bl"><?=$question[$pager][2][1]?></li>
				<li class="bl"><?=$question[$pager][2][2]?></li>
				<li class="bl"><?=$question[$pager][2][3]?></li>
				<li class="bl"><?=$question[$pager][2][4]?></li>
				<li class="bl"><?=$question[$pager][2][5]?></li>
			</ul>
			<p class="mt20" >選択肢</p>
			<ul class="question">
				<li class="bl"><?=$question[$pager][3][1]?></li>
				<li class="bl"><?=$question[$pager][3][2]?></li>
				<li class="bl"><?=$question[$pager][3][3]?></li>
				<li class="bl"><?=$question[$pager][3][4]?></li>
				<li class="bl"><?=$question[$pager][3][5]?></li>
			</ul>
			<div class="f24 bold gray mt20 clearfix">
				<div class="left ">あなたの回答 <?=$array_number[$answer[ $ans ]]?> <?=$collect?></div>
			</div>

			<div class="f24 bold gray mt20 clearfix">
				<div class="left mt40">Q<?=$pager?> の正解 <?=$interprete[$pager][0]?></div>
			</div>
			<p class="clearfix" ><?=$interprete[$pager][1]?></p>



			<div class="f24 bold gray clearfix mt40">
				<div class="left">解説</div>
			</div>
			<p class="mt20 clearfix f18" ><?=$interprete[$pager][2]?></p>
			<div class="center mt40 clearfix">
				<input type="submit" name="next" value="次へ" class="button" id="next">
			</div><!--button-->
		</div><!--waku-->
		<input type="hidden" name="nextPage" value="<?=$pager+1?>" id="nextPage">
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
