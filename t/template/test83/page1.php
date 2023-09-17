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

		<h4>現在のあなた自身・または所属組織について教えて下さい。</h4>
		<?php foreach($exam as $key=>$value ):?>
			<?php $no = preg_replace("/q/","",$key);?>
			<div class="row">
				<label><?=$no?>.<?= $value['title'] ?></label>
				<div class="col-md-12">

					<?php if($no == 2):
							$ex = explode(",",$tdetail[ $key ]);
						?>
						<?php foreach($value[ 'list' ] as $k=>$val): ?>
							<label>
								<?php if($k > 0 ): ?>
								<?php
									$chk = "";
									if(in_array($k,$ex)) $chk = "CHECKED";
								?>
								<input type="checkbox" name="q[<?=$key?>][<?=$k?>]" value="<?=$k?>" <?=$chk?> />
								<?php endif; ?>
								<?=$val?>
							</label>
							<br />
						<?php endforeach; ?>
					<?php else: ?>
						<select name="q[<?=$key?>]" class="form-control" >
						<?php foreach($value[ 'list' ] as $k=>$val): ?>
							<?php
								$sel = "";
								if($tdetail[ $key ] == $k ) $sel = "SELECTED";
							?>
							<option value="<?=$k?>" <?=$sel?> ><?=$val?></option>
						<?php endforeach;?>
						</select>
					<?php endif; ?>
				</div>
			</div>
		
		<?php endforeach; ?>

		<div class="center">
			<?PHP if($pager > 1): ?> <input type="submit" name="back" value="戻る" class="button"><?PHP endif; ?>
			<?PHP $btn = "次のページ"; ?>
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
