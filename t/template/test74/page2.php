<?php
include_once("include_header.php");
include_once("include_title.php");

$questions = "次のそれぞれの質問について、最も適切な答えを1つ選んで答えてください。";
$section = "セクションC";
if($pager >= 23){
	$questions = "次のそれぞれの質問に対して、最もあてはまるものを①～⑤までの選択肢の中から1つ選んでください。";
	$section = "セクションG";
}


?>

<style type="text/css">
.w80{width:80%;}
.mg5{ margin:5px;}
.pd10{ padding:10px;}
.pd20{ padding:20px;}
.mt10{margin-top:10px;}
.mt20{margin-top:20px;}
span.bord{
	border:1px solid #000;
	width:160px;
	display:inline-block;
}
table.table-bordered{
	border:0px !important;
}
table{
	border:none;
}
table th,
table td{
	border:none !important;

	padding:10px 0px 10px 10px;
	
}
table td label{
	width: 100%;
	height: 100%;
	top:0;
	left:0;
}
table td label p{
	font-size:22px;
	padding:0px;
	margin:0px;
	padding:10px;
}
table td label.yellow{
	background-color:#fff799;
	border:1px solid #ccc;
	transition: background-color 0.5s linear;
}
table td label:active,
table td label.active,
table td label:hover{
	background-color:#fff799;
	border:1px solid #ccc;
	transition: background-color 0.5s linear;
}
table td label input{
	margin-top:40px;
	display:none;
}


</style>
<script type="text/javascript" >
$(function(){
	$("label").click(function(){
		var _id = $(this).attr("id").split("_");
		$(".bg_"+_id[1]).removeClass("yellow");
		$(".bg_"+_id[1]).removeClass("active");
		$(this).addClass("yellow");
	});
});
</script>


<section class="content">

	<div class="col-md-12">
		<?php include_once("include_alert.php"); ?>
		<div class="box">
			<div class="text-right mt20"><?=$pager?>/<?=$max?>ページ</div>
			<div class="text-right mt20"><p id="TimeLeft"></p></div>
			<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

				<div class="container">
					<div class="card-deck mb-3 ">
						<div class="card mb-4 shadow-sm">
							<div class="card-header">
								<h4 class="my-0 font-weight-normal text-left"><?=$section?></h4>
							</div>
							<div class="card-body ">
								<p><?=$questions?></p>
								<?PHP 
									foreach($exam as $eKye => $eVal):
								?>
									<div class="card mb-12 shadow-sm mt10 pd10">
										<div class="box box-solid">	
											<div class="row pd20">
												<div class="col-md-1 text-left"><b><?=$eVal[ 'key' ]?>　.</b></div>
												<div class="col-md-11 text-left"><?=$eVal[ 'question' ]?></div>
											</div>

											<table class="table ">
											<?PHP
												foreach($eVal[ 'ans' ] as $key=>$val):
													$code = "ans".$key;
													foreach($val as $i=>$v):
														$sel = "";
														$act = "";
														if($tdetail[ $code ] == $i ):
															$sel = "CHECKED";
															$act = "active";
														endif;
														//No56設問が長いのでheightの指定
														$ht = "";

											?>
											<tr>
												<td >
													<label class="bg_<?=$key?> <?=$act?> " id="a_<?=$key?>_<?=$i?>"  >
													<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio w30" <?=$sel?> >
													<p><?=$v?></p>
												</label>
												</td>
											</tr>
											<?PHP 
													endforeach; 
												endforeach; 
											?>
											</table>	



										</div>
									</div>

								<?php endforeach;?>


								<?PHP 
								$btn = "次のページ";
								if($pager == $max) $btn = "完了ページ";?>
								<div class="row mt20">
									<div class="col-md-12">
										<input type="submit" name="next" value="<?=$btn?>" class="btn btn-block btn-primary " id="<?=$btnkey[3]?>">
									</div>
								</div>
								<?php if($pager > 1): ?>
								<div class="row mt20">
									<div class="col-md-12">
										<input type="submit" name="back" value="前のページに戻る" class="btn btn-block btn-danger">
									</div>
								</div>
								<?php endif; ?>


							</div>
						</div>
					</div>
				</div>

				<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
				<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
				<input type="hidden" name="temp" value="page">
				<input type="hidden" name="time" value="<?=$time?>" id="time" >
				<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >


			</form>
		</div>
	</div>
</section>



<?PHP include_once("include_footer.php"); ?>
<?PHP
/*
$css1 = "guide";
$css2 = "page";

$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
<?PHP
	$questions = "次のそれぞれの質問について、最も適切な答えを1つ選んで答えてください。";
	$section = "セクションC";
	if($pager >= 23){
		$questions = "次のそれぞれの質問に対して、最もあてはまるものを①～⑤までの選択肢の中から1つ選んでください。";
		$section = "セクションG";
	}
?>

	<h3><?=$section?></h3>
	<div id="waku">
<?PHP
	if($pager == 9){
?>
	<h3>次のそれぞれの質問について、□に最も当てはまる出来事を1つ選んで答えてください。</h3>
<?PHP
	}else{
?>
	<h3><?=$questions?></h3>
<?PHP
	}
?>
<?PHP
	foreach($exam as $eKye => $eVal){
?>
		<div class="clearfix">
			<ul class="question f16 pt20">
				<li style="width:7%;text-align:right;"><?=$eVal[ 'key' ]?>.</li>
				<li style="width:88%;"><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>

		<table class="qtable f16 pl40 pt20" >
<?PHP
			foreach($eVal[ 'ans' ] as $key=>$val){
				$code = "ans".$key;
				foreach($val as $i=>$v){
					$sel = "";
					if($tdetail[ $code ] == $i ){
						$sel = "CHECKED";
					}
				//No56設問が長いのでheightの指定
				$ht = "";

?>
			<tr>
				<td class="tleft <?=$ht?>" >
					<div class="bg_<?=$key?>" id="a_<?=$key?>_<?=$i?>" >
						<div class="left"  ><input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio w30" <?=$sel?> ></div>
						<div class="left txt"  ><?=$v?></div>
					</div>
				</td>
			</tr>
<?PHP
				}
			}
?>
		</table>
<?PHP
	}//foreach終わり
?>
		<div class="center mt40">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
		</div><!--button-->
	</div><!--waku-->
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
*/
?>
