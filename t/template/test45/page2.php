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
		<p>Ⅱ．次の文章は、金融市場の代表的な3つの指標に関する説明です。</p>
	</div>
	<div>
		<p>
		　一定の期間（通常は1年）に国（地域）内で生産された財やサービスによって得られた所得、言い換えれば総需要のことを
		<span class="box">7．</span>という。<span class="box">8．</span>では外国で生産したもので得た所得も含まれるため、
		国（地域）単位の純粋な経済活動の指標には不適切とされている。そのため国力を比較する場合は<span class="box">8．</span>
		から国外生産による所得分を差し引いた<span class="box">7．</span>が用いられる。前年の<span class="box">7．</span>
		と比較した増減率を<span class="box">9．</span>という。<br />
		　物の値段が継続的に上昇し、貨幣の価値が下がることを<span class="box">10．</span>という。また、生産過剰などによっ
		て供給量が需要量を上回り、物の価値が下がることを<span class="box">11．</span>という。内閣府は2001年3月に
		「<span class="box">12．</span>」を<span class="box">11．</span>の定義とした。
		</p>
	</div>
	<br />
	<p>空欄7から空欄12に当てはまる語句を上の選択肢aからmよりもっとも適切なものを1つ選択してください。</p>
	<p>【選択肢】</p>
	<div class="sBox">
		<table>
			<tr>
				<th>a.</th>
				<td>GDP</td>
				<th>b.</th>
				<td>GNI</td>
				<th>c.</th>
				<td>TOPIX</td>
				<th>d.</th>
				<td>デフレ</td>
				<th>e.</th>
				<td>長期</td>
				<th>f.</th>
				<td>日経平均株価</td>
			</tr>
			<tr>
				<th>g.</th>
				<td>ワールドマーケット</td>
				<th>h.</th>
				<td>継続的な物価下落</td>
				<th>i.</th>
				<td>経済成長率</td>
				<th>j.</th>
				<td>インフレ</td>
				<th>k.</th>
				<td>円安</td>
				<th>m.</th>
				<td>円高</td>
			</tr>
		</table>
	</div>
	
	<table class="ansTable">
<?PHP
		
		for($i=7;$i<=12;$i++){
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
