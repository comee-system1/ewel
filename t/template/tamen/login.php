<?PHP
$css1 = "login";
$title = "評価検査ログイン";
$js[1] = "login";

include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="./?k=<?=$_REQUEST[ 'k' ]?>" method="POST" >
		<div id="width">
			<p>検査を実施します。<br />指示されたID/生年月日を入力後ログインを行ってください。</p>
			<p class="errmsg"><?=$errmsg?></p>
			<table id="logtbl">
				<tr>
					<td><img src="<?=D_URL_TEST?>image/login.gif"></td>
					<td><input type="text" name="exam_id" class="logintext" maxlength=15 id="username" value="<?=$_REQUEST[ 'exam_id' ]?>" <?=$disd?> ></td>
				
				</tr>
				<tr>
					<td><img src="<?=D_URL_TEST?>image/birth.gif"></td>
					<td>
						<input type="text" name="year" value="<?=$year?>" class="w40" id="year" maxlength=4  <?=$disd?> >年
						<select name="month" id="month" class="sel">
<?PHP
							for($i=1;$i<=12;$i++){
								if($_REQUEST[ 'month' ] == $i){
									$sel = "SELECTED";
								}else{
									$sel = "";
								}
?>
								<option value="<?=$i?>" <?=$sel?> ><?=$i?></option>
<?PHP
							}
?>
						</select>月

						<select name="day" id="day" class="sel">
<?PHP
							for($i=1;$i<=31;$i++){
								if($_REQUEST[ 'day' ] == $i){
									$sel = "SELECTED";
								}else{
									$sel = "";
								}

?>
								<option value="<?=$i?>"  <?=$sel?> ><?=$i?></option>
<?PHP
							}
?>
						</select>日


					</td>
				</tr>
			</table>
			<div id="center"><input type="submit" name="login" value="ログイン" id="loginbtn" <?=$disd?> /></div>
		</div>

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
