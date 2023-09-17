<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="TimeLeft" style="text-align:right;">-</div>
	
	<div id="page" class="text-right"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<?PHP if(count($error)): ?>
			<div class="alert alert-primary" role="alert">
				<?php foreach($error as $key=>$value): ?>
					<?=$value?><br />
				<?PHP endforeach; ?>
			</div>
		<?php endif; ?>
	<table class="table table-bordered">
	<tr class="bg-primary text-white text-center" >
			<th class="align-middle">No</th>
			<th class=" w-50 align-middle">設問</th>
			<th class="align-middle" style=" -ms-writing-mode: tb-lr; -webkit-writing-mode: vertical-lr; writing-mode: vertical-rl;">当てはまる</th>
			<th class="align-middle" style=" -ms-writing-mode: tb-lr; -webkit-writing-mode: vertical-lr; writing-mode: vertical-rl;">ほぼ当てはまる</th>
			<th class="align-middle" style=" -ms-writing-mode: tb-lr; -webkit-writing-mode: vertical-lr; writing-mode: vertical-rl;">どちらかといえば当てはまる</th>
			<th class="align-middle" style=" -ms-writing-mode: tb-lr; -webkit-writing-mode: vertical-lr; writing-mode: vertical-rl;">あまり当てはまらない</th>
			<th class="align-middle" style=" -ms-writing-mode: tb-lr; -webkit-writing-mode: vertical-lr; writing-mode: vertical-rl;">当てはまらない</th>
		</tr>
		<?php foreach($exam as $key=>$value ):?>
		<?php $no = preg_replace("/q/","",$key)-4;?>

		<tr>
				<td class="align-middle bg-light"><?=$no?></td>
				<td class='bg-light'><?=$value?></td>
				<?php for($i=5;$i>=1;$i--):
					$sel = "";
					if($tdetail[$key] == $i  ) $sel = "CHECKED";
					?>
				<td class="align-middle">
					<input type="radio" name="q[<?=$key?>]" value="<?=$i?>" class="form-control check" <?=$sel?> />				
				</td>
				<?php endfor;?>
		</tr>
		<?php endforeach; ?>
	</table>

	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "診断を終了する";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="tid" value="<?=$_REQUEST[ 'tid' ]?>">
		<input type="hidden" name="e" value="<?=$_REQUEST[ 'e' ]?>">
	</form>
	<input type="hidden" id="alerts" value="<?=$alert?>">

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<?PHP
include_once("include_footer.php");
?>
