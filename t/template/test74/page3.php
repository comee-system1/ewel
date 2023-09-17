<?php
include_once("include_header.php");
include_once("include_title.php");

$section = "セクションD";
$question = "次の各文章を読んで、その下に示したそれぞれの行動はどの程度役に立つでしょうか。<br />最も適切な答えを1つ選んでください。";
$keys = "行動";
if($pager >= 26){
	$section = "セクションH";
	$question = "次の各文章を読んで、それぞれの「対応」に対する答えを、1～5から1つ選んで答えてください。";
	$keys = "対応";
}


?>

<style type="text/css">
.w80{width:80%;}
.mg5{ margin:5px;}
.pd10{ padding:10px;}
.pd20{ padding:20px;}
.mt0{margin-top:0px;}
.mt10{margin-top:10px;}
.mt20{margin-top:20px;}
table ,
table th,
table td{
	border:none !important;
	position:relative;
	height:100px;
	width:15%;
	text-align: center;
	
}
table td.hauto{
	height:auto;
}
table td label{
	position:absolute;
	width: 100%;
	height: 100px;
	top:0;
	left:0;
}
table td label p{
	font-size:22px;
	margin-top:30px;
}
table td label.yellow{
	background-color:#fff799;
	border:1px solid #ccc;
	transition: background-color 0.5s linear;
}
table td label:active,
table td label:hover{
	background-color:#fff799;
	border:1px solid #ccc;
	transition: background-color 0.5s linear;
}
table td label input{
	margin-top:40px;
	display:none;
}

table th {
    white-space: nowrap;
    width: 100px;
	text-align:left;
	vertical-align: middle !important;
}
table td.vbottom{
	vertical-align:bottom;
	font-weight: bold;
}
</style>

<script type="text/javascript" >
$(function(){
	$("label").click(function(){
		var _id = $(this).attr("id").split("_");
		$(".bg_"+_id[1]).removeClass("yellow");
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
							
							
										<?PHP
											$no=1;
											foreach($eVal[ 'ans' ] as $key=>$val):
												$code = "ans".$key;
										?>
										<div class="row pd20">
											<div class="col-md-2 text-left"><b>行動 <?=$no?>　:</b></div>
											<div class="col-md-10 text-left"><?=$val?></div>
										</div>
										<table class="table table-bordered mt0">
											<tr>
												
												<td class="text-left vbottom hauto" colspan=3>役に立たない</td>
												
												<td class="text-right vbottom hauto" colspan=2 >役に立つ</td>
											</tr>
											<tr>
											<?PHP
												for($i=1;$i<=5;$i++):
													$sel = "";
													$yellow  = "";
													$act  = "";
													if($tdetail[ $code ] == $i ):
														$sel = "CHECKED";
														$yellow  = "yellow";
														$act = "active";
													endif;
											?>
												<td>
													<label class="rd bg_<?=$key?> <?=$yellow?> <?=$act?>" id="a_<?=$key?>_<?=$i?>" >
														<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
														<p><?=$i?><p>
													</label>
												</td>
											<?PHP endfor; ?>
											</tr>
										</table>
									<?PHP
										$no++;
										endforeach;
									?>

							
							
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
	$section = "セクションD";
	$question = "次の各文章を読んで、その下に示したそれぞれの行動はどの程度役に立つでしょうか。<br />最も適切な答えを1つ選んでください。";
	$keys = "行動";
	if($pager >= 26){
		$section = "セクションH";
		$question = "次の各文章を読んで、それぞれの「対応」に対する答えを、1～5から1つ選んで答えてください。";
		$keys = "対応";
	}
?>
	<h3><?=$section?></h3>
	<h3><?=$question?></h3>
	<div id="waku">

<?PHP
	foreach($exam as $eKye => $eVal){
?>

		<div class="clearfix mt80">
			<ul class="question f16">
				<li style="width:8%;text-align:center;"><?=$eVal[ 'key' ]?>.</li>
				<li style="width:88%;"><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>

		<div >
<?PHP
				$no=1;
				foreach($eVal[ 'ans' ] as $key=>$val){
					$code = "ans".$key;
?>
					<div class="marginC">
						<div class="clearfix">
						<ul class="mt40 ulmove">
							<li class="act" ><?=$keys?> <?=$no?>:</li>
							<li class="actIn"><?=$val?></li>
						</ul>
						</div>
						<p class="left " >役に立たない</p>
						<p class="left disp3" >役に立つ</p>
					</div>
					<table class="qtable f16">
						<tr>
<?PHP
					for($i=1;$i<=5;$i++){
						$sel = "";
						$yellow  = "";
						if($tdetail[ $code ] == $i ){
							$sel = "CHECKED";
							$yellow  = "yellow";
						}
?>
							<td>
								<div class="rd bg_<?=$key?> <?=$yellow?>" id="a_<?=$key?>_<?=$i?>" >
									<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> ><?=$i?>
								</div>
							</td>
<?PHP
					}
?>
						</tr>
					</table>

<?PHP
					$no++;
				}
?>
		</div>
<?PHP
		}
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
