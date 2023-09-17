<?PHP
$css1 = "regist";
$title = "多面評価検査登録";
$js[1] = "tamen";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
		<p>評価を行う対象者を選択してください。 </p>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST">
			<table class="tamenTable" >
				<tr>
					<th colspan=2>■ あなたの情報</th>
				</tr>
				<tr>
					<td class="w200" >評価者名</td>
					<td><?=$kensa[ 'ev_name' ]?></td>
				</tr>
				<tr>
					<td class="w200" >評価者所属部署</td>
					<td><?=$kensa[ 'ev_busyo' ]?></td>
				</tr>
			</table>

			<table class="tamenTable" >
				<tr>
					<th colspan=2>■ 評価対象者の情報</th>
				</tr>
				<tr>
					<td class="w200" >評価対象者名</td>
					<td><?=$kensa[ 'hv_name' ]?></td>
				</tr>
				<tr>
					<td class="w200" >評価対象者所属部署</td>
					<td><span ><?=$kensa[ 'hv_busyo' ]?></span></td>
				</tr>
				<tr>
					<td class="w200" >評価対象者からみた関係</td>
					<td><span ><?=$kensa[ 'relation' ]?></span></td>
				</tr>
				<tr>
					<td class="w200" >協働期間</td>
					<td>
						<?=$pyear?>年<?=$pmonth?>ヶ月
						
					</td>
				</tr>
			</table>
			<p>評価を行う検査を選択してください。 </p>
<?PHP
			foreach($tamen_type as $key=>$val){
				if($tamenRst[ $val ]){
				//受検済み
?>
				<img src="<?=D_URL_TEST?>image/sumi.gif" >
				<?=$array_tamen_type[$val]?>
				<br clear=all />
<?PHP
				}else{
?>
					<div class="indent" >
						<input type="radio" name="tamen_type" value="<?=$val?>" id="chk_<?=$val?>" class="tamen_type">
					</div>
					<div class="tamenleft">
						<img src="<?=D_URL?>images/radio_off.jpg" class="img radio" id="img_<?=$val?>">
					</div>
					<div class="tamenleft radio"  id="d_<?=$val?>" ><?=$array_tamen_type[$val]?></div>
					<br clear=all />
<?PHP
				}
			}
?>

		<div id="buttonBox">
			<input type="submit" name="login" value="前に戻る" class="button"  >
			<input type="button" name="guide" value="検査ガイダンスページ" class="button" id="guide" >
		</div>
		<input type="hidden" name="id" value="<?=$_REQUEST[ 'id' ]?>" id="ids" >
		<input type="hidden" name="exam_id" value="<?=$kensa[ 'ev_id' ]?>">
		<input type="hidden" name="year" value="<?=$year?>" >
		<input type="hidden" name="month" value="<?=$month?>" >
		<input type="hidden" name="day" value="<?=$day?>" >

		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
		<form action="./tamen/<?=$type?>/?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" target="tamen" name="tamen">
			<input type="hidden" name="tamentype" value="" id="tamentype">
			<input type="hidden" name="id" value="<?=$_REQUEST[ 'id' ]?>"  >
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
