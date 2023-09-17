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
		<p>Ⅰ．次の文章は、金融市場の代表的な3つの指標に関する説明です。</p>
	</div>
	<div>
		<p>
		　アメリカのダウ・ジョーンズ社が開発した修正算式を用いて算出した、東京証券取引所第一部（東証1部）上場の代表的な225銘柄の平均株価を
		<span class="box">1．</span>という。テレビニュース等で発表される平均株価がこれである。
		一方、同じく東証1部上場の全銘柄の時価総額を加重計算し、指数化したものを東証株価指数(<span class="box">2．</span>)という。<br />
		　また、外国為替市場における日本円と米ドルやユーロなど外国通貨との交換比率を円相場といい、
		見た目の円価格が上がれば<span class="box">3．</span>、下がれば<span class="box">4．</span>という。<br />
		　そして、期間1年以上の金利を<span class="box">5．</span>金利という。一般的に新発10年物国債の利回りを採用しており、
		企業が設備資金を調達する際の借入金利などの指標となっている。<br />
		　ちなみに、日本経済新聞1面に掲載されている「<span class="box">6．</span>」の5つの値は、日本の経済状況をみる重要な指標となっている。
		</p>
	</div>
	<br />
	<p>空欄1から空欄6に当てはまる語句を上の選択肢aからmよりもっとも適切なものを1つ選択してください。</p>
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
		
		for($i=1;$i<=6;$i++){
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
