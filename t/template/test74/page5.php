<?php
include_once("include_header.php");
include_once("include_title.php");


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
table tr.ht20{
	padding:0;
}
table tr.ht20 td{
	padding:5px;
	height:10px;
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
								<h4 class="my-0 font-weight-normal text-left"><?=$exam[ 'title' ]?></h4>
							</div>
							<div class="card-body ">
								<div class="text-center">
									<img src="<?=$exam[ 'img' ]?>" class="w80" >
								</div>
							
								<div class="row pd20">
									<div class="col-md-1 text-left"><b><?=$exam[ 'key' ]?>.</b></div>
									<div class="col-md-11 text-left"><?=$exam[ 'question' ]?></div>
								</div>
								<table class="table table-bordered">
									<tr class="ht20">
										<td>&nbsp;</td>
										<td colspan=2 class="text-left"><b>全く表れていない</b></td>
										<td colspan=3 class="text-right"><b>完全に表れている</b></td>
									</tr>
									<?PHP
										foreach($exam[ 'ans' ] as $key=>$val):
											$code = "ans".$key;
									?>
									<tr>
										<th><?=$val?></th>
											<?PHP
											for($i=1;$i<=5;$i++):
												$sel = "";
												$yellow  = "";
												$act ="";
												if($tdetail[ $code ] == $i ):
													$sel = "CHECKED";
													$yellow  = "yellow";
													$act  = "active";
												endif;
											?>
												<td>
													<label class="rd bg_<?=$key?> <?=$yellow?> <?=$act?>" id="a_<?=$key?>_<?=$i?>" >
														<input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio" <?=$sel?> >
														<p><?=$i?></p>
													</label>
												</td>
											<?PHP endfor; ?>
									</tr>
									<?PHP endforeach;?>
								</table>







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
	<h3><?=$exam[ 'title' ]?></h3>
	<div id="waku">
		<div class="center">
			<img src="<?=$exam[ 'img' ]?>" width=80%>
		</div>
		<div class="clearfix mt40">
			<ul class="question f16">
				<li><?=$exam[ 'key' ]?>.</li>
				<li><?=$exam[ 'question' ]?></li>
			</ul>
		</div>
		<div class="clearfix mt40">
			<p class="mt40 left disp1" >全く表れていない</p>
			<p class="mt40 left disp2" >完全に表れている</p>
		</div>
		<div >
			<table class="qtable f16" >
<?PHP
				foreach($exam[ 'ans' ] as $key=>$val){
					$code = "ans".$key;
?>
				<tr>
					<th><?=$val?></th>
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
<?PHP
				}
?>
			</table>
		</div>
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
