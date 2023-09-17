<?PHP
$css1 = "login";
$title = "検査ログイン";

include_once("include_header.php");

?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");

	//説明文の表示
if($test[ 'explain_text' ]){
	$text[1] = nl2br($test[ 'explain_text' ]);
}
?>
	<form action="./?k=<?=$_REQUEST[ 'k' ]?>" method="POST" >
		<div style="padding:10px;">
			<?=$text[1]?>
			<div class="red"><?=$errmsg?></div>
			<table >
				<tr>
					<td>
					ログインＩＤ<br />
					<input type="text" name="exam_id"  maxlength=15 id="username" value="<?=$_REQUEST[ 'exam_id' ]?>" <?=$disd?> ></td>
				
				</tr>
				<tr>
					<td>
						生年月日<br />
						<input type="text" name="year" value="<?=$year?>"  id="year" maxlength=4  <?=$disd?> >年
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
			<div id="center"><input type="submit" name="login" value="ログイン"  <?=$disd?> /></div>
		</div>

		<div class="container mt20" style="padding-bottom:30px;">
        
          <b class="bd-title" >推奨OS・推奨ブラウザ</b>
          <p style="font-size:11px;">
            安全で快適にご利用いただくために、下記OSと下記バージョンのブラウザのご利用をお勧めいたします。<br />
            推奨ウェブブラウザ以外でのご利用や、推奨ウェブブラウザでもお客さまの設定によっては、ご利用できない場合や正しく表示されない場合があります。
          </p>
          
          <b class="mt20">Windowsをお使いの場合</b>
          <ul>
            <li>推奨OS:<br />　Windows10以上</li>
            <li>推奨ブラウザ:<br />　Microsoft Edge 最新版</li>
            <li>　Mozilla FireFox 最新版</li>
            <li>　Google Chrome最新版</li>
          </ul>
          <b class="mt20">Macをお使いの場合</b>
          <ul>
            <li>推奨OS：<br />　最新版</li>
            <li>推奨ブラウザ:<br />　Safari最新版</li>
          </ul>
          <b class="mt20">Javascript・cookieの設定</b>
          <p  style="font-size:11px;">ブラウザ設定でJavascriptの設定を有効にしてください。<br />
            Javascriptの設定を無効にされている場合、正しく機能しない、もしくは正しく表示されないことがあります。<br />
            また、一部cookieを利用したコンテンツがございます。Javascript同様設定を有効にしてください。
          </p>
          
        </div>
	</form>
	</div>
<?PHP

include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
