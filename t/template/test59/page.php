<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<style type="text/css">
    .mt260{ margin-top:260px;}
    .mt200{ margin-top:200px;}
    .mt190{ margin-top:190px;}
    .mt180{ margin-top:180px;}
    .mt170{ margin-top:170px;}
    .mt160{ margin-top:160px;}
    .mt150{ margin-top:150px;}
    .mt140{ margin-top:140px;}
    .mt135{ margin-top:135px;}
    .mt130{ margin-top:130px;}
    .mt120{ margin-top:120px;}
    .mt110{ margin-top:110px;}
    .mt100{ margin-top:100px;}
    .mt90{ margin-top:90px;}
    .mt60{ margin-top:60px;}
    .mt55{ margin-top:55px;}
    .mt50{ margin-top:45px;}
    .l20{line-height: 20px;}
	.txt20{
		padding-top:10px;
	}
    .jisage{
        padding-left:1.5em;
        text-indent:-1.5em;
    }
</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f24 bold gray">
				<div class="left f18">Q<?=$pager?></div>
				<div class="right f18"><?=$pager?>/10</div>
			</div>
			<p class="clearfix mt20 f18" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20 f18" ><?=$question[$pager][1][1]?></p>
			</p>
<?PHP
		if($question[$pager][2][0]){
?>
			<p class="mt20" ><?=$question[$pager][2][0]?></p>
			<ul class="question ">
				<li class="bl"><?=$question[$pager][2][1]?></li>
				<li class="bl"><?=$question[$pager][2][2]?></li>
				<li class="bl"><?=$question[$pager][2][3]?></li>
				<li class="bl"><?=$question[$pager][2][4]?></li>
				<li class="bl"><?=$question[$pager][2][5]?></li>
			</ul>
<?PHP
		}
?>
			
			<div class="" >
				<p class="mt20 f18" >選択肢</p>
				<div class="left">
				<ul class="question">
<?PHP
				if($question[$pager][3][1]){
?>
                                    <li class="bl jisage" ><div class="l40 <?=$css[$pager][3][1]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-1" value="1" ></div><div class="l40 <?=$ml[$pager][1]?> <?=$css[$pager][3][1]?> ml60 "><label for="ans1-1"  ><span class="f18"><?=$question[$pager][3][1]?></span></label></div></li>
<?PHP
				}
				if($question[$pager][3][2]){
?>
                                    <li class="bl jisage" ><div class="l40 <?=$css[$pager][3][2]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-2" value="2" ></div><div class="l40 <?=$ml[$pager][2]?> <?=$css[$pager][3][2]?> ml60 <?=$texttop[$pager]?>"><label for="ans1-2" ><span class="f18"><?=$question[$pager][3][2]?></span></label></div></li>
<?PHP
				}
				if($question[$pager][3][3]){
?>
					<li class="bl jisage" ><div class="l40 <?=$css[$pager][3][3]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-3" value="3" ></div><div class="l40 <?=$ml[$pager][3]?> <?=$css[$pager][3][3]?> ml60"><label for="ans1-3" ><span class="f18"><?=$question[$pager][3][3]?></span></label></div></li>
<?PHP
				}
				if($question[$pager][3][4]){
?>
					<li class="bl jisage" ><div class="l40 <?=$css[$pager][3][4]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-4" value="4" ></div><div class="l40 <?=$ml[$pager][4]?> <?=$css[$pager][3][4]?> ml60"><label for="ans1-4" ><span class="f18"><?=$question[$pager][3][4]?></span></label></div></li>
<?PHP
				}
				if($question[$pager][3][5]){
?>
					<li class="bl jisage" ><div class="l40 <?=$css[$pager][3][5]?>"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-5" value="5" ></div><div class="l40 <?=$ml[$pager][5]?> <?=$css[$pager][3][5]?> ml60"><label for="ans1-5" ><span class="f18"><?=$question[$pager][3][5]?></span></label></div></li>
<?PHP
				}
?>
				</ul>
				</div>
				<div class="right <?=$imgmt[$pager]?>">
					<img src="<?=D_URL?>images/elan4/elan<?=$pager?>.jpg">
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
