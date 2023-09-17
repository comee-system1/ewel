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
		<p>Ⅳ．次の用語に対する大意や活用ポイントの空欄51から55に当てはまる語句を下の語群aからeよりもっとも適切なものを1つ選択してください。</p>
	</div>
	<div>
		<table class="qTable">
			<tr>
				<th>基礎用語</th>
				<th>大意</th>
				<th>活用ポイント</th>
			</tr>
			<tr>
				<th>経済</th>
				<td>ヒト、モノ、カネの活動</td>
				<th>【　51　】</th>
			</tr>
			<tr>
				<th>ニュース（ＮEＷＳ）</th>
				<td>“東西南北”の出来事</td>
				<th>【　52　】</th>
			</tr>
			<tr>
				<th>景気</th>
				<td>ヒト、モノ、カネの活動状況</td>
				<th>【　53　】</th>
			</tr>
			<tr>
				<th>中央銀行の役割</th>
				<td>【　54　】</td>
				<th>-</th>
			</tr>
			<tr>
				<th>“富士山産業”</th>
				<td>自動車、建設、観光など関係企業が多い</td>
				<th>【　55　】</th>
			</tr>
		</table>
	</div>
	<p>【語群】</p>
	<div class="sBox">
		<ul class="ul51">
			<li>ａ．世の中の「人気」「天気」「元気」で動向を判断する</li>
			<li>ｂ．主要各国の株価で状況を知る</li>
			<li>ｃ．「初めて」「○年ぶり」「極めて異例」などキーワードを材料とする</li>
			<li>ｄ．指標で把握し、ビジネスの先手を打つ</li>
			<li>ｅ．「カネ」「物価」「雇用」をカネの量で調節する</li>
		</ul>
	</div>
	
	<table class="ansTable w400">
<?PHP
		
		for($i=51;$i<=55;$i++){
			$ans = "ans".$i;
			$answer = $tdetail[$ans];
?>
			<tr>
				<td>空欄<?=$i?></td>
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
