<?PHP
$css1 = "guide";
$js[1] = "page";

$selectA = "A";
$selectB = "B";
switch($language){
	case "2":
		$title = "除检查页";
		$text[1] = "页";
		$text[2] = "A比B恰当很多";
		$text[3] = "A比B恰当一些";
		$text[4] = "两者皆可";
		$text[5] = "B比A恰当一些";
		$text[6] = "B比A恰当很多";
		$first = $array_flip_test_change[$first];

		$btnkey[1] = "结果显示";
		$btnkey[2] = "下页";
		$btnkey[3] = "next2";
		$btnkey[4] = "返回";

	break;
	case "4";
     $selectA = "a";
    $selectB = "b";
		$title = "Sự phù hợp trang";
		$text[1] = "Trang";
		$text[2] = " Rõ ràng a hợp hơn so với b";
		$text[3] = "Có vẻ a hợp hơn so với b";
		$text[4] = "Không thể nói là đàng nào";
		$text[5] = "Có vẻ b hợp hơn so với a";
		$text[6] = "Rõ ràng b hợp hơn so với a";

		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];
		
		$btnkey[1] = "Hiển thị kết quả";
		$btnkey[2] = "Trang sau";
		$btnkey[3] = "next4";
		$btnkey[4] = "Quay trở lại ";

	break;
	default:
		$title = "受検ページ";
		$text[1] = "ページ";
		$text[2] = "明確にＡ";
		$text[3] = "どちらかというとＡ";
		$text[4] = "どちらともいえない";
		$text[5] = "どちらかというとＢ";
		$text[6] = "明確にＢ";


		$btnkey[1] = "結果表示";
		$btnkey[2] = "次のページ";
		$btnkey[3] = "next";
		$btnkey[4] = "戻る";

	break;
}


include_once("include_header.php");
include_once("include_title.php");
?>
<style type="text/css">
	th{
		font-weight: normal;
		background-color:#3c8dbc;
		color:#fff;
	}
	th.tate{
		width:10px;
	}
	th.vl{
		vertical-align: middle;
		text-align: center;
	}
	td{
		vertical-align: middle !important;
		position: relative;
		height: 80px;
	}
	td label{
		position:absolute;
		background-color:#fff;
		transition: background-color 1s linear;
		top:0;
		left:0;
		width:80%;
		height:40px;
		left:50%;
		margin-left:-40%;
		margin-top:40%;
		
		border:1px solid #ccc;
		
	}

	td label:hover,
	td label.active,
	td label:active{
		background-color:#00fa9a;
		transition: background-color 0.5s linear;
		border:2px solid #87cefa;
		transition-duration: 2s;
	}
	td label input{
		display:none;
	}
	.vertical {
		writing-mode: tb-lr;
		writing-mode: vertical-lr;
		-webkit-writing-mode: vertical-lr;
		letter-spacing: .2em;
	}
</style>
<script type="text/javascript" >
$(function(){
	$("label").click(function(){
		var _class = $(this).children("input").attr("class");
		$("."+_class).parents("label").removeClass("active");
		$(this).addClass("active");
	});
});
</script>
<section class="content">

	<div class="col-md-12">
		<div class="box">
			<div class="text-right mt20"><?=$pager?>/<?=$max?><?=$text[1]?></div>
			<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

<?php if($_SESSION['error']):?>
    <div class="alert alert-danger" role="alert"><strong>アラート</strong> - <?=$_SESSION['error']?></div>
<?php endif;?>
<?php if($_SESSION['success']):?>
    <div class="alert alert-primary" role="alert"><strong>アラート</strong> - <?=$_SESSION['success']?></div>
<?php endif;?>
				<table class="table table-bordered  dataTable">
					<tr>
						<th class="tate vl">No</th>
						<th class="vl"><?=$selectA?></th>
						<th class="tate"><span class="vertical"><?=$text[2]?></span></th>
						<th class="tate"><span class="vertical"><?=$text[3]?></span></th>
						<th class="tate"><span class="vertical"><?=$text[4]?></span></th>
						<th class="tate"><span class="vertical"><?=$text[5]?></span></th>
						<th class="tate"><span class="vertical"><?=$text[6]?></span></th>
						<th class="vl"><?=$selectB?></th>
					</tr>
					<?php foreach($exam as $key=>$val):
						$q = "q".$key;
						$chk1 = $chk2 = $chk3 = $chk4 = $chk5 = "";
						$act1 = $act2 = $act3 = $act4 = $act5 = "";
						if($tdetail[$q] == 1){$chk1 = "CHECKED"; $act1 = "active";}
						if($tdetail[$q] == 2){$chk2 = "CHECKED"; $act2 = "active";}
						if($tdetail[$q] == 3){$chk3 = "CHECKED"; $act3 = "active";}
						if($tdetail[$q] == 4){$chk4 = "CHECKED"; $act4 = "active";}
						if($tdetail[$q] == 5){$chk5 = "CHECKED"; $act5 = "active";}

						
						?>
						<tr>
							<td class="no"><?=$key?></td>
							<td ><?=$val['a']?></td>
							<td ><label class="<?=$act1?>"><input type="radio" name="q[<?=$key?>]" value="1" id="chk_<?=$key?>_1" <?=$chk1?> class="values<?=$key?>"></label></td>
							<td ><label class="<?=$act2?>"><input type="radio" name="q[<?=$key?>]" value="2" id="chk_<?=$key?>_2" <?=$chk2?> class="values<?=$key?>"></label></td>
							<td ><label class="<?=$act3?>"><input type="radio" name="q[<?=$key?>]" value="3" id="chk_<?=$key?>_3" <?=$chk3?> class="values<?=$key?>"></label></td>
							<td ><label class="<?=$act4?>"><input type="radio" name="q[<?=$key?>]" value="4" id="chk_<?=$key?>_4" <?=$chk4?> class="values<?=$key?>"></label></td>
							<td ><label class="<?=$act5?>"><input type="radio" name="q[<?=$key?>]" value="5" id="chk_<?=$key?>_5" <?=$chk5?> class="values<?=$key?>"></label></td>
							<td ><?=$val['b']?></td>
						</tr>
					<?php endforeach;?>
				</table>
				<?php if($pager > 1): ?>
				<input type="submit" name="back" value="<?=$btnkey[4]?>" class="btn btn-danger">
				<?php endif; ?>

				<?PHP if($pager == $max) $btn = "完了ページ";?>
				<input type="submit" name="next" value="<?=$btn?>" class="btn btn-primary " id="<?=$btnkey[3]?>">

				<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
				<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
				<input type="hidden" name="temp" value="page">
			</form>
		</div>
	</div>
	
</section>
<?PHP
include_once("include_footer.php");
?>

<?PHP
/*
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
<?PHP if($alert){ ?>
	<p class="errmsg"><?=$alert?></p>
<?PHP } ?>
<?PHP if($language == 2){ 
//中国語のときはガイダンスを表示する

?>
	<div class="box " >
		就下述问题，将「a」与「b」进行比较，选择符合您的程度。
		<div class="explainleft">
			(选择答案)
		</div>
		<div class="explainleft2">
			<ul class="clearfix">
				<li>1.ａ比ｂ恰当很多 </li>
				<li class="mgl30">→</li>
<?PHP for($i=0;$i<=3;$i++){ ?>
				<li><img src="<?=D_URL_TEST?>image/check_off.gif" class="tradio rd_1"  /></li>
<?PHP } ?>
			</ul>
			<ul class="clearfix">
				<li>2.ａ比ｂ恰当一些</li>
				<li class="mgl30">→</li>
<?PHP for($i=0;$i<=3;$i++){ ?>
				<li><img src="<?=D_URL_TEST?>image/check_off.gif" class="tradio rd_2"  /></li>
<?PHP } ?>
			</ul>
			<ul class="clearfix">
				<li>3.两者皆可</li>
				<li class="mgl60">→</li>
<?PHP for($i=0;$i<=3;$i++){ ?>
				<li><img src="<?=D_URL_TEST?>image/check_off.gif" class="tradio rd_3"  /></li>
<?PHP } ?>
			</ul>
			<ul class="clearfix">
				<li>4.ｂ比a恰当一些</li>
				<li class="mgl30">→</li>
<?PHP for($i=0;$i<=3;$i++){ ?>
				<li><img src="<?=D_URL_TEST?>image/check_off.gif" class="tradio rd_4"  /></li>
<?PHP } ?>
			</ul>

			<ul class="clearfix">
				<li>5.ｂ比a恰当很多</li>
				<li class="mgl30">→</li>
<?PHP for($i=0;$i<=3;$i++){ ?>
				<li><img src="<?=D_URL_TEST?>image/check_off.gif" class="tradio rd_5"  /></li>
<?PHP } ?>
			</ul>



		</div>
	</div>
<?PHP } ?>
	<table id="table">
		<tr>
			<th class="w10">No</th>
			<th style="width:300px;"><?=$selectA?></th>
			<th class="w10"><?=$text[2]?></th>
			<th class="w10"><?=$text[3]?></th>
			<th class="w10"><?=$text[4]?></th>
			<th class="w10"><?=$text[5]?></th>
			<th class="w10"><?=$text[6]?></th>
			<th style="width:300px;"><?=$selectB?></th>
		</tr>
<?PHP
		foreach($exam as $key=>$val){
			$img1 = "off";
			$chk1 = "";
			$img2 = "off";
			$chk2 = "";
			$img3 = "off";
			$chk3 = "";
			$img4 = "off";
			$chk4 = "";
			$img5 = "off";
			$chk5 = "";
			$q = "q".$key;
			if($tdetail[$q] == 1){
				$img1 = "on";
				$chk1 = "CHECKED";
			}
			if($tdetail[$q] == 2){
				$img2 = "on";
				$chk2 = "CHECKED";
			}
			if($tdetail[$q] == 3){
				$img3 = "on";
				$chk3 = "CHECKED";
			}
			if($tdetail[$q] == 4){
				$img4 = "on";
				$chk4 = "CHECKED";
			}
			if($tdetail[$q] == 5){
				$img5 = "on";
				$chk5 = "CHECKED";
			}
?>
		<tr>
			<td class="no"><?=$key?></td>
			<td ><?=$val[a]?></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="1" id="chk_<?=$key?>_1" <?=$chk1?> class="values<?=$key?>"></div><img src="<?=D_URL_TEST?>image/check_<?=$img1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="2" id="chk_<?=$key?>_2" <?=$chk2?> class="values<?=$key?>"></div><img src="<?=D_URL_TEST?>image/check_<?=$img2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="3" id="chk_<?=$key?>_3" <?=$chk3?> class="values<?=$key?>"></div><img src="<?=D_URL_TEST?>image/check_<?=$img3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="4" id="chk_<?=$key?>_4" <?=$chk4?> class="values<?=$key?>"></div><img src="<?=D_URL_TEST?>image/check_<?=$img4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" /></td>
			<td class="ans" ><div class="indent" ><input type="radio" name="q[<?=$key?>]" value="5" id="chk_<?=$key?>_5" <?=$chk5?> class="values<?=$key?>"></div><img src="<?=D_URL_TEST?>image/check_<?=$img5?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_5" /></td>
			<td ><?=$val[b]?></td>
		</tr>

<?PHP
		}
?>
	</table>
	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="<?=$btnkey[4]?>" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = $btnkey[1];
	}else{
		$btn = $btnkey[2];
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="<?=$btnkey[3]?>">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">

	</form>
	<input type="hidden" id="alerts" value="<?=$alert?>">

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
*/?>

