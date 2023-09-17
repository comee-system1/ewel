<?PHP

$title = "検査ログイン";
if($_REQUEST[ 'anq' ]){
	$text[1] = "アンケートを実施します。<br />指示された社員番号/メールアドレスを入力後ログインを行ってください。";
}else{
	$text[1] = "検査を実施します。<br />指示された社員番号/メールアドレスを入力後ログインを行ってください。";
}
$text[2] = "社員番号";
$text[3] = "生年月日";
$text[4] = "年";
$text[5] = "月";
$text[6] = "日";
$btn[1] = "loginbtnalert";


//説明文の表示
if($test[ 'explain_text' ]){
	$text[1] = nl2br($test[ 'explain_text' ]);
}
$css1 = "login";
$title = $title;
$ver = getIEVersion();
include_once("include_header.php");
?>
<style type="text/css">

.f14{
	font-size:14px;
}
div.recommend{
	border:1px solid #ccc;
	padding:15px;
}
div.recommend p.red{
	color:red;
	border-bottom:1px solid #ccc;
}
div.recommend ul{
	list-style-type:none; 
	padding:0px 5px;
	margin:0;
}

div#brauz{
	border:1px solid #ff4500;
	padding:10px;
	background-color:#ffc0cb;
	color:#ff0000;
}

</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
	if($_REQUEST[ 'anq' ]){ $anq = "&anq=".$_REQUEST[ 'anq' ];}
?>
	<form action="./?k=<?=$_REQUEST[ 'k' ]?><?=$anq?>" method="POST" >
		<div id="width">
			<p><?=$text[1]?></p>
			<p class="errmsg"><?=$errmsg?></p>
<?PHP
			if($ver[ 'browser' ] == "msie"){
				if($ver[ 'version' ] && $ver[ 'version' ] != 11 && $ver[ 'version' ] < 10){
?>
				<div id="brauz">ご利用のPCもしくはブラウザは推奨環境ではありません。推奨環境以外からのご利用の場合、受検ができない可能性がございます。推奨環境での受検をお勧めします。</div>

<?PHP
				}
			}
?>
			<?php if($notlogin == false ):?>
			<table id="logtbl">
				<tr>
					<td style="color:#000000;font-size:16px;"><b><?=$text[2]?></b></td>
					<td><input type="text" name="empnum" class="logintext" maxlength=15 id="empnum" value="<?=$_REQUEST[ 'empnum' ]?>" <?=$disd?> ></td>
				
				</tr>
				<tr>
					<td style="color:#000000;font-size:16px;"><b><?=$text[3]?></b></td>
					<td>
<!--
						<input type="text" name="mail" class="logintext"  id="mail" value="<?=$_REQUEST[ 'mail' ]?>" <?=$disd?> >
-->
						<input type="text" name="year" class="logintext"  id="year" value="<?=$_REQUEST[ 'year' ]?>" style="width:120px;padding:10px;height:40px;" maxlength=4 >年
						<select name="month" >
<?PHP for($i=1;$i<=12;$i++){ ?>
<?PHP $sel = "";?>
<?PHP if($i == $_REQUEST[ 'month' ]) $sel = "SELECTED"; ?>
							<option value="<?=$i?>" <?=$sel?> ><?=$i?></option>
<?PHP } ?>
						</select>月

						<select name="day" >
<?PHP for($i=1;$i<=31;$i++){ ?>
<?PHP $sel = "";?>
<?PHP if($i == $_REQUEST[ 'day' ]) $sel = "SELECTED"; ?>
							<option value="<?=$i?>" <?=$sel?> ><?=$i?></option>
<?PHP } ?>
						</select>日
					</td>
				</tr>
			</table>
			<div id="center">
				<input type="submit" name="login" value="ログイン" id="loginbtn" class="loginbtnalert" <?=$disd?> />
			</div>
			<?PHP endif; ?>
				<div class="recommend">
					<p class="red f14">推奨OS・推奨ブラウザ</p>
					<p class="f14" >安全で快適にご利用いただくために、下記OSと下記バージョンのブラウザのご利用をお勧めいたします。<br />
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

					<p class="red f14">Javascript・cookieの設定</p>
					<p class="f14" >
						ブラウザ設定でJavascriptの設定を有効にしてください。<br />
						Javascriptの設定を無効にされている場合、正しく機能しない、もしくは正しく表示されないことがあります。<br />
						また、一部cookieを利用したコンテンツがございます。Javascript同様設定を有効にしてください。
					</p>
				</div>

		</div>

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");


function getIEVersion()
{
	$ua = $_SERVER["HTTP_USER_AGENT"];
	$results["browser"] = "";
	$results["version"] = "";
	if (preg_match("/Trident\/(\d{1,}(.\d{1,}){1,}?)/i", $ua, $mtcs)) {
	  $results["browser"] = "msie";
	  if ((float)$mtcs[1] >= 7) {
	    if (preg_match("/rv:(\d{1,}(.\d{1,}){1,}?)/i", $ua, $mtcs)) {
	      $results["version"] = (float)$mtcs[1];
	    } else {
	      $results["version"] = 11.0;
	    }
	  } elseif ((float)$mtcs[1] >= 6) {
	    $results["version"] = 10.0;
	  } elseif ((float)$mtcs[1] >= 5) {
	    $results["version"] = 9.0;
	  } elseif ((float)$mtcs[1] >= 4) {
	    $results["version"] = 8.0;
	  }
	}
	if (empty($results["browser"])) {
	  if (preg_match("/MSIE\s(\d{1,}(.\d{1,}){1,}?);/i", $ua, $mtcs)) {
	    $results["browser"] = "msie";
	    $results["version"] = (float)$mtcs[1];
	  }
	}
	return $results;
}

?>
