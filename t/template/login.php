<?PHP

//言語設定
//def:日本語
//4:ベトナム
switch($language){
	case "2":
		$title = "登录";
		$text[1] = "实施检查。<br />请输入指示的帐号/生日后登录。";
		$text[2] = "	登录帐号";
		$text[3] = "	生日（阳历）";
		$text[4] = "年";
		$text[5] = "月";
		$text[6] = "日";
		
	break;
	case "4";
		$title = "Kiểm tra đăng nhập";
		$text[1] = "Thực hiện kiểm tra.<br />Vui lòng đăng nhập sau khi nhập ID/ngày tháng năm sinh được hướng dẫn.";
		$text[2] = "Đăng nhập ID";
		$text[3] = "Ngày tháng năm sinh <br />(Dương lịch)";
		$text[4] = "Ngày";
		$text[5] = "tháng";
		$text[6] = "năm";
		$btn[1] = "loginbtnalert4";
	break;
	default:
		if(array_search("49",$testline)){
			//ELANの時はこちら
			$title = "受講ログイン";
			$text[1] = "受講を実施します。<br />指示されたID/生年月日を入力後ログインを行ってください。";
		}elseif(array_search("53",$testline)
                        || array_search("58",$testline)
                        || array_search("77",$testline)
                        || array_search("78",$testline)
                        || array_search("79",$testline)
                        || array_search("80",$testline)
                        ){
			//ELANの時はこちら
			$title = "研修ログイン";
			$text[1] = "研修を実施します。<br />指示されたID/生年月日を入力後ログインを行ってください。";
		}else{
			$title = "検査ログイン";
			$text[1] = "検査を実施します。<br />指示されたID/生年月日を入力後ログインを行ってください。";
		}
		$text[2] = "ログインＩＤ";
		$text[3] = "生年月日（西暦）";
		$text[4] = "年";
		$text[5] = "月";
		$text[6] = "日";
		$btn[1] = "loginbtnalert";
	break;
}
//説明文の表示
if($test[ 'explain_text' ]){
	$text[1] = nl2br($test[ 'explain_text' ]);
}
$css1 = "login";
$title = $title;
$js[1] = "login";
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
<script type="text/javascript">
<!--
function checkForm($this)
{
	var str=$this.value;
	while(str.match(/[^A-Z^a-z\d\-]/))
	{
		str=str.replace(/[^A-Z^a-z\d\-]/,"");
	}
	$this.value=str;
}
//-->
</script>

<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="./?k=<?=$_REQUEST[ 'k' ]?>" method="POST" >
		<div id="width">
			<p><?=$text[1]?></p>
			<p class="errmsg"><?=$errmsg?></p>
<?PHP
			if($ver[ 'browser' ] == "msie" && $test[ 'recommen' ] == 1 ){
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
					<td><input type="text" style="ime-mode:disabled;" onInput="checkForm(this)" pattern="^[0-9A-Za-z]+$"  name="exam_id" class="logintext" maxlength=22 id="username" value="<?=$_REQUEST[ 'exam_id' ]?>" <?=$disd?> ></td>
				
				</tr>
				<tr>
					<td style="color:#000000;font-size:16px;"><b><?=$text[3]?></b></td>
					<td>
						<input type="text" name="year" value="<?=$year?>" class="w40" id="year" maxlength=4  <?=$disd?> ><?=$text[4]?>
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
						</select><?=$text[5]?>

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
						</select><?=$text[6]?>


					</td>
				</tr>
                                <?PHP if(array_search(57,$testline)):?> 
                                <!--
                                <tr>
                                    <td style="color:#000000;font-size:16px;"><b>PASSWORD</b></td>
                                    <td><input type="text" name="password" class="logintext"  id="password" value="<?=filter_input(INPUT_POST,"password")?>"  ></td>
                                </tr>
                                -->
                                <?PHP endif; ?>
			</table>
			<div id="center">
<?PHP if($language == 4){ //ベトナム
?>
				<input type="submit" name="login" value="Đăng nhập"  <?=$disd?> style="width:150px;height:35px;"  class="<?=$btn[1]?>" />

<?PHP }elseif($language == 2){ //中国
?>
				
<?PHP if(array_search(57,$testline)):?> 
                                <div style="display:table;">
                                    <div style="display: table-cell;"><input type="submit" name="man" value="男性" style="width:150px;height:35px;" /></div>
                                     <div style="display: table-cell;padding-left:20px;"><input type="submit" name="woman" value="女性" style="width:150px;height:35px;" /></div>
                                </div>
<?PHP else: ?>
                                <input type="submit" name="login" value="登录"  <?=$disd?> style="width:150px;height:35px;"  class="<?=$btn[1]?>" />
<?php endif;?>
                                
<?PHP }else{ ?>
				<input type="submit" name="login" value="ログイン" id="loginbtn" class="loginbtnalert" <?=$disd?> />
<?PHP } ?>
			</div>
<?php endif; ?>
			<script language="JavaScript" TYPE="text/javascript" src="https://trusted-web-seal.cybertrust.ne.jp/seal/getScript?host_name=test.e-wel.com&type=42&svc=4&cmid=2012706"></script>
<?PHP

if($test[ 'recommen' ] == 1):
			if($language == 0 ){
?>
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
<?PHP
			}elseif($language == 2){
?>
				<div class="recommend">
					<p class="red f14">推荐操作系统・推荐浏览器</p>
					<p class="f14" >为了安全舒适地使用，推荐使用下列操作系统及下列版本的浏览器。<br />如果使用推荐以外的因特网浏览器，或即使使用推荐的因特网浏览器也可能因客户设定的原因，不能使用或不能准确表示。
					</p>
					<ul>
						<li><b>使用Windows时</b></li>
						<li>推荐操作系统：Windows７以上</li>
						<li>Microsoft Edge 最新版</li>
						<li>Mozilla FireFox 最新版</li>
						<li>Google Chrome最新版</li>
						<li>Safari最新版</li>
					</ul>

					<p class="red f14">浏览器设定时让Javascript的设定有效。</p>
					<p class="f14" >
						浏览器设定时让Javascript的设定有效。<br />
						Javascript的设定无效时，有可能不能正确工作或不能正确表示。<br />
						另外，有一部分使用cookie的内容。请和Javascript一样设定有效。
					</p>
				</div>
<?PHP
			}
                    endif;
?>
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
