<?PHP
$css1 = "guide";
$title = "受検ページ";
include_once("include_header.php");
?>
<style type="text/css">
/*
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
    }*/
    .mb10{
        margin-bottom:10px !important;
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
				<div class="left f24">Q<?=$pager?></div>
				<div class="right f18"><?=$pager?>/10</div>
			</div>

			<p class="clearfix mt20 f18" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20 f18" ><?=$question[$pager][1][1]?></p>
			</p>

			<div>
				<?php if($select[$pager][3][1]): ?>
					<ul class="selectlist">
						<li>ア</li>
						<li><?=$select[$pager][3][1]?></li>
					</ul>
				<?php endif;?>
				<?php if($select[$pager][3][2]): ?>
					<ul class="selectlist">
						<li>イ</li>
						<li><?=$select[$pager][3][2]?></li>
					</ul>
				<?php endif;?>
				<?php if($select[$pager][3][3]): ?>
					<ul class="selectlist">
						<li>ウ</li>
						<li><?=$select[$pager][3][3]?></li>
					</ul>
				<?php endif;?>
			</div>

			
			<p class="mt20 f18" >選択肢</p>
			<div class="left">
				<?php if($question[$pager][3][1]): ?>
					<ul class="questionlist">
						<li><input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1-1" value="1" ></li>
						<li><?=$array_number[1]?></li>
						<li><label for="ans1-1"><?=$question[$pager][3][1]?></label></li>
					</ul>
				<?PHP endif;?>

				<?php if($question[$pager][3][2]): ?>
					<ul class="questionlist">
						<li><input type="radio" name="ans<?=$pager?>" class="ans2 radio" id="ans1-2" value="2"></li>
						<li><?=$array_number[2]?></li>
						<li><label for="ans1-2"><?=$question[$pager][3][2]?></label></li>
					</ul>
				<?PHP endif;?>


				<?php if($question[$pager][3][3]): ?>
					<ul class="questionlist">
						<li><input type="radio" name="ans<?=$pager?>" class="ans2 radio" id="ans1-3" value="3"></li>
						<li><?=$array_number[3]?></li>
						<li><label for="ans1-3"><?=$question[$pager][3][3]?></label></li>
					</ul>
				<?PHP endif;?>

				<?php if($question[$pager][3][4]): ?>
					<ul class="questionlist">
						<li><input type="radio" name="ans<?=$pager?>" class="ans2 radio" id="ans1-4" value="4"></li>
						<li><?=$array_number[4]?></li>
						<li><label for="ans1-4"><?=$question[$pager][3][4]?></label></li>
					</ul>
				<?PHP endif;?>

				<?php if($question[$pager][3][5]): ?>
					<ul class="questionlist">
						<li><input type="radio" name="ans<?=$pager?>" class="ans2 radio" id="ans1-5" value="5"></li>
						<li><?=$array_number[5]?></li>
						<li><label for="ans1-5"><?=$question[$pager][3][5]?></label></li>
					</ul>
				<?PHP endif;?>

			</div>
			<div class="right <?=$imgmt[$pager]?>">
				<img src="<?=D_URL?>images/elan8/elan<?=$pager?>.png" class="" style="max-height:200px;">
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
</script>

<?PHP
include_once("include_footer.php");
?>
