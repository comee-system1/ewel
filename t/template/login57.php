<?PHP

$title = "登录";
$text[1] = "实施检查。<br />请输入指示的帐号/生日后登录。";
$text[2] = "	登录帐号";
$text[3] = "	生日（阳历）";
$text[4] = "年";
$text[5] = "月";
$text[6] = "日";


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
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="./?k=<?=$_REQUEST[ 'k' ]?>" method="POST" >
		<div id="width">
			<p><?=$text[1]?></p>
			<p class="errmsg"><?=$errmsg?></p>

			<table id="logtbl">
				<tr>
					<td style="color:#000000;font-size:16px;"><b><?=$text[2]?></b></td>
					<td><input type="text" name="exam_id" class="logintext" maxlength=22 id="username" value="<?=$_REQUEST[ 'exam_id' ]?>" <?=$disd?> ></td>
				
				</tr>
			</table>
			<div id="center">
				

                                <div style="display:table;">
                                    <div style="display: table-cell;"><input type="submit" name="man" value="男" style="width:150px;height:35px;" /></div>
                                     <div style="display: table-cell;padding-left:20px;"><input type="submit" name="woman" value="女" style="width:150px;height:35px;" /></div>
                                </div>

                                

			</div>

				<div class="recommend">
					<p class="red f14">推荐操作系统・推荐浏览器</p>
					<p class="f14" >为了安全舒适地使用，推荐使用下列操作系统及下列版本的浏览器。<br />如果使用推荐以外的因特网浏览器，或即使使用推荐的因特网浏览器也可能因客户设定的原因，不能使用或不能准确表示。
					</p>
					<ul>
						<li><b>使用Windows时</b></li>
						<li>推荐操作系统：Windows７以上</li>
						<li>Microsoft InternetExplorer10以上</li>
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
