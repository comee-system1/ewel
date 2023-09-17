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
	dt{
		list-style-type: none;
	}
	dl.r{
		border:1px solid red;
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
	.ml20{
		margin-left:20px;
	}
	.ml60{
		margin-left:60px;
	}
	ul.left li{
		float:left;
		list-style-type:none;
	}
	ul.left:after{
		content:"";
		clear:both;
		display:block;
	}
</style>

<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f24 bold gray mt20 clearfix">
				<div class="left ">あなたの回答 <?=$array_number[$answer[ $ans ]]?> <?=$collect?></div>
			</div>
			<br />
			<br />
			<div class="f24  bold gray clearfix">
				<div class="left">Q<?=$pager?> の正解と解説</div>

				<div class="left ml20">正解 <?=$interprete[$pager][0]?></div>
			</div>

			<br clear=all />
			<h3 class="mt20" ><?=$question[$pager][1][1]?></h3>

			<?php 
			$r = "";
			if($interprete[$pager][0] == "a") $r = "r";?>

			<dl class="clearfix <?=$r?> ">

					<dt>a.</dt>
					<dd><?=$question[$pager][2][1]?></dd>
				
			</dl>
			<?php 
			$r = "";
			if($interprete[$pager][0] == "b") $r = "r";
					?>
			<dl class="clearfix <?=$r?>">

				<dt>b.</dt>
				<dd><?=$question[$pager][2][2]?></dd>
				
			</dl>

			<?php 
			$r = "";
			if($interprete[$pager][0] == "c") $r = "r";
					?>
			<dl class="clearfix <?=$r?>">
				<dt>c.</dt>
				<dd><?=$question[$pager][2][3]?></dd>

			</dl>






			
	
			
			





			<div class="f24 bold gray clearfix mt40">
				<div class="left">解説</div>
			</div>
			<div class="mt20 clearfix f18 ml20 ml60" ><?=$interprete[$pager][2]?></div>
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
