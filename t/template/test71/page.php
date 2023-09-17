<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<style type="text/css">
    .mt320{ margin-top:320px;}
    .mt300{ margin-top:300px;}
    .mt280{ margin-top:280px;}
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
    .l30{line-height: 30px;}
	.txt20{
		padding-top:10px;
	}
    .jisage{
        padding-left:1.5em;
        text-indent:-1.5em;
    }
    .mb10{
        margin-bottom:10px !important;
    }
    ol{
        list-style-type:none;
    }
    ol.kana{
        list-style-type:katakana !important;
    }
	ul.question li.bl input{
		margin-top:10px;
		width:20px;
		height:20px;
	}
	li.kt{
		float:left;
		padding-right:10px;
	}
	li.kt input[type=radio]{
		margin:0px;
		margin-right:10px;
	}
</style>
<div id="main">
	<div id="contents">
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f24 ">
				<div class="left f18"><?=$array_number[$pager]?>　<?=$question[$pager][1][0]?></div>
				<div class="right f18"><?=$pager?>/10</div>
			</div>
			<p class="clearfix mt20 f18" >&nbsp;</p>
			<p class="mt20" >
				<p class="clearfix mt20 f18" ><?=$question[$pager][1][1]?></p>
			</p>
<?PHP
		if($question[$pager][2][0]){
?>
			<p class="mt20 f18" ><?=$question[$pager][2][0]?></p>
			<ol class="question " >
        		<?php if($question[$pager][2][1]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-1" value="1" >１）</li>
					<li class="bl f18 mb10"><label for="ans1-1"  ><?=$question[$pager][2][1]?></label></li>
				<?php endif; ?>
				<?php if($question[$pager][2][2]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-2" value="2" >２）</li>
					<li class="bl f18 mb10"><label for="ans1-2"  ><?=$question[$pager][2][2]?></label></li>
				<?php endif; ?>
				<?php if($question[$pager][2][3]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-3" value="3" >３）</li>
					<li class="bl f18 mb10"><label for="ans1-3"><?=$question[$pager][2][3]?></label></li>
				<?php endif; ?>
				<?php if($question[$pager][2][4]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-4" value="4" >４）</li>
					<li class="bl f18 mb10"><label for="ans1-4"><?=$question[$pager][2][4]?></label></li>
				<?php endif; ?>
				<?php if($question[$pager][2][5]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-5" value="5" >５）</li>
					<li class="bl f18 mb10"><label for="ans1-5"><?=$question[$pager][2][5]?></label></li>
				<?php endif; ?>
				<?php if($question[$pager][2][6]): ?>
					<li class="kt"><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-6" value="6" >６）</li>
					<li class="bl f18 mb10"><label for="ans1-6"><?=$question[$pager][2][6]?></label></li>
				<?php endif; ?>
			</ol>
<?PHP
		}
?>
<?PHP
		if($sanko[$pager]){
?>
			<p><?=$sanko[$pager]?></p>
<?php }?>
			
				<div class="right <?=$imgmt[$pager]?>">
					<img src="<?=D_URL?>images/elans2/elan<?=$pager?>.jpg">
				</div>
				<br clear="both" />
				<div class="center  clearfix">
				<input type="submit" name="next" value="次へ" class="button nexts" id="next">
			</div><!--button-->
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
