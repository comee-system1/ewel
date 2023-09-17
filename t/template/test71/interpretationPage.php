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

<style type="text/css">
    ol.kana{
        list-style-type:katakana !important;
    }
    ol.question{
        list-style-type:none;
    }
    p.f18{
        font-size:18px;
    }
    table.table{
        border:1px solid #000;
        width:100%;
        border-collapse:collapse;
    }
    table.table td{
        border:1px solid #000;
        padding:6px;
    }
	li.kt{
		float:left;
		padding-right:10px;
	}
</style>

<div id="main">
	<div id="contents">
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f18">
				<div class="left"><?=$array_number[$pager]?> の正解と解説</div>
			</div>
			<p class="clearfix mt20 f18" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20 f18" ><?=$question[$pager][1][1]?></p>
			</p>
			<p class="mt20 f18" ><?=$question[$pager][2][0]?></p>
			<ol class="question ">
				<li class="kt">１）</li>
				<li class="bl"><?=$question[$pager][2][1]?></li>
				<li class="kt">２）</li><li class="bl"><?=$question[$pager][2][2]?></li>
				<li class="kt">３）</li><li class="bl"><?=$question[$pager][2][3]?></li>
<?php if($question[$pager][2][4]): ?>
				<li class="kt">４）</li>
				<li class="bl"><?=$question[$pager][2][4]?></li>
<?php endif; ?>
<?php if($question[$pager][2][5]): ?>
				<li class="kt">５）</li>
				<li class="bl"><?=$question[$pager][2][5]?></li>
<?php endif; ?>
			</ol>
			<!--
			<p class="mt20 f24" >選択肢</p>
			<ol class="question">
				<li class="bl"><?=$question[$pager][3][1]?></li>
				<li class="bl"><?=$question[$pager][3][2]?></li>
				<li class="bl"><?=$question[$pager][3][3]?></li>
				<li class="bl"><?=$question[$pager][3][4]?></li>
				<li class="bl"><?=$question[$pager][3][5]?></li>
			</ol>-->
			<div class="f24 bold gray mt20 clearfix">
				<div class="left ">あなたの回答 <?=$ans_number[$answer[ $ans ]]?> <?=$collect?></div>
			</div>

			<div class="f24 bold gray mt20 clearfix">
				<div class="left mt40">Q<?=$pager?> の正解 <?=$interprete[$pager][0]?></div>
			</div>
			<p class="clearfix f18" ><?=$interprete[$pager][1]?></p>



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
