<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
<style type="text/css">
	.c{
		text-align:center;
	}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
		vertical-align: middle;
		}
	.nobord{
		border:none !important;
	}
	.bl{
		background-color:lightblue;
	}
	.w{
		width:8%;
	}
	input[type=radio]{
		width:25px;
		height:25px;
	}
</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&e=<?=$_REQUEST['e']?>&tid=<?=$_REQUEST[ 'tid' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
	<p >
	各質問に対し、ご自身が感じる「自社の状況」、もしくは仕事に関するご自身の「考えや状況」にあった回答を選択肢の中から選択してください。 
	</p>
	<table class="table table-bordered">
		<tr class="bl" >
			<td class="nobord">&nbsp;</td>
			<td class="nobord">&nbsp;</td>
			<td class="c" colspan=6>選択肢</td>
		</tr>
		<tr class="bl" >
			<td class="nobord">&nbsp;</td>
			<td class="nobord">&nbsp;</td>
			<td class="c w" >1</td>
			<td class="c w" >2</td>
			<td class="c w" >3</td>
			<td class="c w" >4</td>
			<td class="c w" >5</td>
			<td class="c w" >6</td>
		</tr>
		<tr class="bl">
			<td class="c w">設問No</td>
			<td class="c" >設問</td>
			<td class="c" >かなり当てはまる</td>
			<td class="c" >当てはまる</td>
			<td class="c" >少し当てはまる</td>
			<td class="c" >あまり当てはまらない</td>
			<td class="c" >当てはまらない</td>
			<td class="c" >全く当てはまらない</td>
		</tr>
		<?php foreach($exam as $key=>$val):?>
		<tr>
			<td><?=$val['k']?></td>
			<td><?=$val['q']?></td>
			<?php
				$sec = "sec".$val['k'];
				for($i=1;$i<=6;$i++):?>
			<?php
				$chk = "";
				if($tdetail[$sec] == $i){
					$chk = "CHECKED";
				}
			?>
				<td class="c"><input type="radio" name="sec<?=$key?>" value="<?=$i?>" <?=$chk?> ></td>
			<?php endfor;?>
		</tr>
		<?php endforeach;?>
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
		$btn = "結果表示";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
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
?>
