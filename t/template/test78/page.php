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
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>

		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
		<h3>不適合とその対応</h3>
			<div class="f24 bold gray">
				<div class="left f24">Q<?=$pager?></div>
				<div class="right f18"><?=$pager?>/7</div>
			</div>
			<p class="clearfix mt20 f18" ><?=$question[$pager][1][0]?></p>
			<p class="mt20" >
				<p class="clearfix mt20 f18" ><?=$question[$pager][1][1]?></p>
			</p>
<?PHP
		if($question[$pager][2][0]){
?>
			<p class="mt20 f18" ><?=$question[$pager][2][0]?></p>
			<dl>
				<?php if($question[$pager][2][1]): ?>
					<dt>
						<input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans1" value="1" >
						a.</dt>
					<dd><label for="ans1" ><?=$question[$pager][2][1]?></label></dd>
				<?php endif; ?>
				<?php if($question[$pager][2][2]): ?>
					<dt>
						<input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans2" value="2" >
						b.</dt>
					<dd><label for="ans2"><?=$question[$pager][2][2]?></label></dd>
				<?php endif; ?>
				<?php if($question[$pager][2][3]): ?>
					<dt>
						<input type="radio" name="ans<?=$pager?>" class="ans1 radio" id="ans3" value="3" >
						c.</dt>
					<dd><label for="ans3" ><?=$question[$pager][2][3]?></label></dd>
				<?php endif; ?>
			</dl>



<?PHP
		}
?>
			

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
