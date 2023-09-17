<?PHP
$css1 = "guide";
$css2 = "page";

$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?><?=$text[1]?></div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
<?PHP
	include_once("pager.php");
?>

	<div >
		<p>問Ⅴ．次の設問の空欄に当てはまる語句を下の語群aからjよりもっとも適切なものを1つ選択してください。</p>
	</div>

	<p>【語群】</p>
	<div class="sBox">
		<table>
			<tr>
				<th>a.</th>
				<td>ＯＥＣＤ</td>
				<th>b.</th>
				<td>159</td>
				<th>c.</th>
				<td>ＡＰＥＣ</td>
				<th>d.</th>
				<td>データ</td>
				<th>e.</th>
				<td>世界銀行</td>
			</tr>
			<tr>
				<th>f.</th>
				<td>25</td>
				<th>g.</th>
				<td>国際連合</td>
				<th>h.</th>
				<td>ＷＴＯ</td>
				<th>i.</th>
				<td>31.1035</td>
				<th>j.</th>
				<td>ＩＭＦ</td>
			</tr>
		</table>

	</div>
	
	<table class="ansTable">
<?PHP
		
		for($i=56;$i<=60;$i++){
			$ans = "ans".$i;
			$answer = $tdetail[$ans];
?>
			<tr>
				<td colspan=100 ><br />空欄<?=$i?> <?=$qlist[$i]?></td>
			</tr>
			<tr>
<?PHP
				foreach($answerlist as $key=>$val){
					$checked = "";
					$bg = "";
					if($key == $answer){
						$checked = "CHECKED";
						$bg = "check";
					}
?>
					<td  id="td_<?=$pager?>_<?=$i?>_<?=$key?>" class="anstd td_<?=$pager?>_<?=$i?> <?=$bg?>" >
						<p class="hid">
							<input type="radio" name="ans[<?=$pager?>][<?=$i?>]" value="<?=$key?>" id="ans_<?=$pager?>_<?=$i?>_<?=$key?>" <?=$checked?> >
						<p>
						<?=$val?>
					</td>
<?PHP
				}
?>
			</tr>
<?PHP
		}
?>
	</table>
	<br clear=all />
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
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
		<input type="hidden" name="pageFlg" value="" id="pageFlg" >

	</form>
		<input type="hidden"  value="<?=count($exam)?>" id="count" >


<?PHP
	include("pager.php");
?>
	</div>

<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
