<?PHP
if($language == 2){
	//中国語
	$title = "除检查指导";
	$str1 = "回答时要注意";
	$str2 = "从选项中选出一个最恰当的选项";
	$str3 = "下一页";
	$str4 = "答案不是选择。";
	$str5 = "是否继续也没事到下一个页面。";
	$str6 = "返回";
}else{
	$title = "受検ガイダンス";
	$str1 = "回答時のご注意";
	$str2 = "もっとも適当と思われるものを選択肢より1つだけ選んでください";
	$str3 = "次へ";
	$str4 = "回答が選択されていません。";
	$str5 = "次のページに進んでも宜しいですか。";
	$str6 = "戻る";

}
$css1 = "guide";
include_once("include_header.php");

//ラジオチェック
$check = array();
$check[$answer[ 'ans'.$pager ]] = "CHECKED";

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
				<div class="right"><?=$pager?>/39</div>
			</div>
			<p class="clearfix mt20" ><?=$str2?></p>
			<p class="clearfix mt20" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20" ><?=$question[$pager][1][1]?></p>
			</p>

			<div class="ht200" >
				<p class="mt20" >選択肢</p>
				<div class="left">
				<ul class="question">
<?PHP
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][1]){
					if($heights[ $pager ][ 1 ]) $line2=$heights[ $pager ][1];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][1]?> <?=$css2[$pager][3][1]?> "><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-1" value="1" <?=$check[1]?> ></div><div class="<?=$line2?> <?=$css[$pager][3][1]?> ml60"><label for="ans1-1" ><?=$question[$pager][3][1]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][2]){
					if($heights[ $pager ][ 2 ]) $line2=$heights[ $pager ][2];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][2]?> <?=$css2[$pager][3][2]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-2" value="2" <?=$check[2]?>></div><div class="<?=$line2?> <?=$css[$pager][3][2]?> ml60"><label for="ans1-2" ><?=$question[$pager][3][2]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][3]){
					if($heights[ $pager ][ 3 ]) $line2=$heights[ $pager ][3];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][3]?> <?=$css2[$pager][3][3]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-3" value="3" <?=$check[3]?> ></div><div class="<?=$line2?> <?=$css[$pager][3][3]?> ml60"><label for="ans1-3" ><?=$question[$pager][3][3]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][4]){
					if($heights[ $pager ][ 4 ]) $line2=$heights[ $pager ][4];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][4]?> <?=$css2[$pager][3][4]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-4" value="4" <?=$check[4]?> ></div><div class="<?=$line2?> <?=$css[$pager][3][4]?> ml60"><label for="ans1-4" ><?=$question[$pager][3][4]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][5]){
					if($heights[ $pager ][ 5 ]) $line2=$heights[ $pager ][5];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][5]?> <?=$css2[$pager][3][5]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-5" value="5" <?=$check[5]?> ></div><div class="<?=$line2?> <?=$css[$pager][3][5]?> ml60"><label for="ans1-5" ><?=$question[$pager][3][5]?></label></div></li>
<?PHP
				}
				$line = "l40";
				$line2 = "l40";
				if($question[$pager][3][6]){ 
					if($heights[ $pager ][ 6 ]) $line2=$heights[ $pager ][6];
?>
					<li class="bl" ><div class="<?=$line?> <?=$css[$pager][3][6]?> <?=$css2[$pager][3][6]?> "><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-6" value="6" <?=$check[6]?> ></div><div class="<?=$line2?> <?=$css[$pager][3][6]?> ml60"><label for="ans1-6" ><?=$question[$pager][3][6]?></label></div></li>
<?PHP } ?>

				</ul>
				</div>
<!--
				<div class="right <?=$imgmt[$pager]?>">
					<img src="<?=D_URL?>images/elan2/elan<?=$pager?>.jpg">
				</div>
-->
			</div>
			<div style="text-align:center;">
<?PHP if($pager != 1){?>
			<input type="submit" name="back" value="<?=$str6?>" class="button"  >
<?PHP } ?>
			<input type="submit" name="next" value="<?=$str3?>" class="button nexts" id="next" >
			</div>
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
			alert("<?=$str4?>");
			return false;
		}
		if(confirm("<?=$str5?>")){
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
