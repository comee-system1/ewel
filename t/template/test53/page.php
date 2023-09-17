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
		<div class="box">
			<div class="f24 bold gray">
				<div class="left">Q<?=$pager?></div>
				<div class="right"><?=$pager?>/10</div>
			</div>
			<p class="clearfix mt20" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20" ><?=$question[$pager][1][1]?></p>
			</p>
<?PHP
		if($question[$pager][2][0]){
?>
			<p class="mt20" ><?=$question[$pager][2][0]?></p>
			<ul class="question">
				<li class="bl"><?=$question[$pager][2][1]?></li>
				<li class="bl"><?=$question[$pager][2][2]?></li>
				<li class="bl"><?=$question[$pager][2][3]?></li>
				<li class="bl"><?=$question[$pager][2][4]?></li>
				<li class="bl"><?=$question[$pager][2][5]?></li>
				<li class="bl"><?=$question[$pager][2][6]?></li>
				<li class="bl"><?=$question[$pager][2][7]?></li>
				<li class="bl"><?=$question[$pager][2][8]?></li>
				<li class="bl"><?=$question[$pager][2][9]?></li>

			</ul>
<?PHP
		}
?>
			
			<div class="" >
				<p class="mt20" >選択肢</p>
				<div class="left">
				<ul class="question">
<?PHP
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][1]){
					if($heights[ $pager ][ 1 ]) $line2=$heights[ $pager ][1];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][1]?> <?=$css2[$pager][3][1]?> "><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-1" value="1" ></div><div class="<?=$line2?> <?=$css[$pager][3][1]?> ml60"><label for="ans1-1" ><?=$question[$pager][3][1]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][2]){
					if($heights[ $pager ][ 2 ]) $line2=$heights[ $pager ][2];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][2]?> <?=$css2[$pager][3][2]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-2" value="2" ></div><div class="<?=$line2?> <?=$css[$pager][3][2]?> ml60"><label for="ans1-2" ><?=$question[$pager][3][2]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][3]){
					if($heights[ $pager ][ 3 ]) $line2=$heights[ $pager ][3];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][3]?> <?=$css2[$pager][3][3]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-3" value="3" ></div><div class="<?=$line2?> <?=$css[$pager][3][3]?> ml60"><label for="ans1-3" ><?=$question[$pager][3][3]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][4]){
					if($heights[ $pager ][ 4 ]) $line2=$heights[ $pager ][4];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][4]?> <?=$css2[$pager][3][4]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-4" value="4" ></div><div class="<?=$line2?> <?=$css[$pager][3][4]?> ml60"><label for="ans1-4" ><?=$question[$pager][3][4]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][5]){
					if($heights[ $pager ][ 5 ]) $line2=$heights[ $pager ][5];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][5]?> <?=$css2[$pager][3][5]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-5" value="5" ></div><div class="<?=$line2?> <?=$css[$pager][3][5]?> ml60"><label for="ans1-5" ><?=$question[$pager][3][5]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][6]){ 
					if($heights[ $pager ][ 6 ]) $line2=$heights[ $pager ][6];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][6]?> <?=$css2[$pager][3][6]?> "><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-6" value="6" ></div><div class="<?=$line2?> <?=$css[$pager][3][6]?> ml60"><label for="ans1-6" ><?=$question[$pager][3][6]?></label></div></li>
<?PHP } ?>

				</ul>
				</div>
				<div class="right <?=$imgmt[$pager]?>">
					<img src="<?=D_URL?>images/elan2/elan<?=$pager?>.jpg">
				</div>
			</div>
			<div class="center mt40 clearfix">
				<input type="submit" name="next" value="次へ" class="button nexts" id="next">
			</div><!--button-->
		</div><!--waku-->
		<input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage">
		<input type="hidden" name="interpretationPage" value=true>
		<input type="hidden" name="temp" value="page">
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<script type="text/javascript">
<!--
$(function(){
	$(".nexts").click(function(){
		var _rdo = $(".radio:checked").val();
		if(!_rdo){
			alert("回答が選択されていません。");
			return false;
		}
		if(confirm("次のページに進んでも宜しいですか。")){
			return true;
		}else{
			return false;
		}
	});
});
//-->
</script>

<?PHP
include_once("include_footer.php");
?>
