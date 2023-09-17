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
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
			<table class="tamenTable" >
				<tr>
					<th colspan=2>■ あなたの情報</th>
				</tr>
				<tr>
					<td class="w200" >評価者名</td>
					<td><?=$login[0][ 'ev_name' ]?></td>
				</tr>
				<tr>
					<td class="w200" >評価者所属部署</td>
					<td><?=$login[0][ 'hv_busyo' ]?></td>
				</tr>
			</table>

			<table class="tamenTable" >
				<tr>
					<th colspan=2>■ 評価対象者の情報</th>
				</tr>
				<tr>
					<td class="w200" >評価対象者名</td>
					<td>
<?PHP
						foreach($login as $key=>$val){
?>
							<div class="indent" >
								<input type="radio" name="hv_name" value="<?=$val[ 'id' ]?>" id="chk_<?=$val[ 'id' ]?>" class="hv_name" />
							</div>
							<div class="tamenleft">
								<img src="<?=D_URL?>images/radio_off.jpg" class="img radio" id="img_<?=$val[ 'id' ]?>">
							</div>
							<div class="tamenleft radio" id="div_<?=$val[ 'id' ]?>">
								<?=$val[ 'hv_name' ]?>
							</div>
							
							<br clear=all />
<?PHP
						}
?>
					</td>
				</tr>
				<tr>
					<td class="w200" >評価対象者所属部署</td>
					<td><span id="hv_busyo">-</span></td>
				</tr>
				<tr>
					<td class="w200" >評価対象者からみた関係</td>
					<td><span id="relation">-</span></td>
				</tr>
				<tr>
					<td class="w200" >協働期間</td>
					<td>
						<input type="text" name="period_year"  value="" id="period_year" class="w30" maxlength=2 >年
						<select name="period_month" id="period_month">
<?PHP
							for($i=0;$i<=12;$i++){
?>
								<option value="<?=$i?>"><?=$i?></option>
<?PHP
							}
?>
						</select>
					</td>
				</tr>
			</table>
			<div id="privacyBox">
				当社は個人情報を適切な方法で管理し、お客様及び受検者の同意なく、第三者に対し開示することはありません。<br />
				ただし、研究開発または統計分析を目的として、受検者に関する検査結果を含む個人情報を、個人が識別又は特定同意して いただける場合は、次へお進み下さい。 
			</div>
		<div id="buttonBox">
			<input type="submit" name="next" value="検査選択ページへ" class="button" id="keisaSelect" >
		</div>
		<input type="hidden" name="id" value="<?=$_REQUEST[ 'id' ]?>" id="id" >
		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
