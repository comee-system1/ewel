<?php

include_once("include_header.php");
include_once("include_title.php");

?>

<style type="text/css">
.w80{width:80%;}
.mg5{ margin:5px;}
.pd10{ padding:10px;}
.pd20{ padding:20px;}
.mt10{margin-top:10px;}
.mt20{margin-top:20px;}
table ,
table th,
table td{
	border:none !important;
	position:relative;
	height:100px;
	width:15%;
	
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
					<div class="card-deck mb-3 text-center">
						<div class="card mb-4 shadow-sm">
							<div class="card-header">
								<h4 class="my-0 font-weight-normal text-left">セクションF</h4>
							</div>
							<div class="card-body ">
								<p class="text-left">次の各項目について、各々の感情を想像して、a～cのそれぞれに答えてください。もしその感情を想像できなくても、直感で答えてください。</p>
								<?PHP foreach($exam as $eKye => $eVal): ?>
									<div class="row pd20">
										<div class="col-md-1 text-left"><b><?=$eVal[ 'key' ]?>.</b></div>
										<div class="col-md-11 text-left"><?=$eVal[ 'question' ]?></div>
									</div>
								
									<?PHP if($eVal[ 'flg' ]): ?>
									<table class="table table-bordered">
										<tr>
										<?PHP
											foreach($eVal[ 'ans' ] as $key=>$val):
											$code = "ans".$key;
											foreach($val as $i=>$v):
												$sel = "";
												$yellow  = "";
												$act  = "";
												if($tdetail[ $code ] == $i ):
													$sel = "CHECKED";
													$yellow  = "yellow";
													$act  = "active";
												endif;
										?>
											<td>
												<label class="rd bg_<?=$key?> <?=$yellow?> <?=$act?>" id="a_<?=$key?>_<?=$i?>" >
													<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
													<p><?=$i?>.<?=$v?></p>
												</label>
											</td>
										<?PHP
														
														endforeach;
													endforeach;
										?>

										</tr>
									</table>
									<?php else: ?>
									<table class="table table-bordered">
										<tr>
											<td></td>
											<td class="text-left vbottom" colspan=2>似ていない</td>
											<td></td>
											<td class="text-right vbottom" colspan=2 >非常に似ている</td>
										</tr>
										
										<?PHP
										
											foreach($eVal[ 'ans' ] as $key=>$val):
												$code = "ans".$key;
										?>
										<tr>
											<th><?=$val?></th>
											<?php 
												for($i=1;$i<=5;$i++): 
													$sel = "";
													$yellow  = "";
													if($tdetail[ $code ] == $i ){
														$sel = "CHECKED";
														$yellow  = "yellow";
													}
												
												?>
												<td>
													<label class="rd bg_<?=$key?> <?=$yellow?>" id="a_<?=$key?>_<?=$i?>" >
														<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
														<p><?=$i?></p>
													</label>
												</td>

											<?php endfor;?>
										</tr>
										<?php endforeach; ?>
									</table>
									<?php endif; ?>

								<?php endforeach; ?>
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


	<h3>セクションF</h3>
	<div id="waku">
	<h3>次の各項目について、各々の感情を想像して、a～cのそれぞれに答えてください。<br />もしその感情を想像できなくても、直感で答えてください。</h3>

<?PHP
	foreach($exam as $eKye => $eVal){
?>
		<div class="clearfix">
			<ul class="question f16 pt20">
				<li style="width:8%;"><?=$eVal[ 'key' ]?>.</li>
				<li style="width:88%;"><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>
<?PHP
			if($eVal[ 'flg' ]){
?>

		<table class="qtable f16" >
			<tr>
<?PHP
			foreach($eVal[ 'ans' ] as $key=>$val){
				$code = "ans".$key;
				foreach($val as $i=>$v){
					$sel = "";
					$yellow  = "";
					if($tdetail[ $code ] == $i ){
						$sel = "CHECKED";
						$yellow  = "yellow";
					}
?>
					<td>
						<div class="rd bg_<?=$key?> <?=$yellow?> " id="a_<?=$key?>_<?=$i?>" >
							<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
							<?=$i?>.<?=$v?>
						</div>
					</td>
<?PHP
				}
			}
?>
			</tr>
		</table>

				
<?PHP
			}else{
?>
		<p class="pg4_useful1" >似ていない</p>
		<p class="pg4_useful2" >非常に似ている</p>
		<div class="clearfix">
			<div class="clearfix mt40">

				<table class="qtable f16" >
<?PHP
					foreach($eVal[ 'ans' ] as $key=>$val){
?>
					<tr>
						<th class="w200"><?=$val?></th>
<?PHP
						$code = "ans".$key;
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

<?PHP
					}
?>
				</table>

			</div>
		</div>
<?PHP
			}
?>


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
