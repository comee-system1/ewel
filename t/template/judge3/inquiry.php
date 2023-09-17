<?PHP
$css1 = "menu";

$title = "検査選択メニュー";
$text[1] = "検査選択メニュー";

$text[5] = "下記よりアンケートにお応えください。";

$text[4] = "どちらの検査から受検して頂いても構いませんが、<br />すべての検査を受検してください。";


include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
	if($anqchk[ 'status' ] == 1){
		$disabled  = "disabled";
	}
?>
		<h3 id="kojinh3"><?=$text[1]?></h3>

		<div id="explain" style="text-align:center;">
			<p><?=$text[5]?></p>
		</div>
		<ul id="testMenu">
<?PHP if($disabled == "disabled" ){ ?>
			<li><a href="javascript:void(0);" <?=$disabled?> style='background-color:#ccc;color:#000000;cursor: default;' >アンケート[<span style='color:red;'>済</span>]</a></li>
<?PHP }else{ ?>
			<li><a href="<?=D_URL_TEST?>test.php?k=<?=$_REQUEST[ 'k' ]?>&anq=<?=$_REQUEST[ 'anq' ]?>&mem=<?=$member[ 'id' ]?>" class="link"  >アンケート</a></li>
<?PHP } ?>
		</ul>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" name="tests" >
			<input type="hidden" name="jid" id="jid" value="<?=$member[ 'id' ]?>" >
			<input type="hidden" name="type" id="type"  value="">
			<input type="hidden" name="k" value="<?=$_REQUEST[ 'k' ]?>">
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
<!--
$(function(){
	$(".link").click(function(){
		var _url = $(this).attr("href");
		//var _url = location.protocol+"//"+location.host+location.pathname+"test/"+location.search+"&mem=<?=$member[ 'id' ]?>&m="+_ex[1]+"&type="+_ex[0];
		var _f = window.open(_url,"mywindow","fullscreen=yes,scrollbars=yes");
		//var _f = window.open(_url,"mywindow","");
		_f.moveTo(0,0);
		var ua = navigator.userAgent
		if (ua.match("MSIE") || ua.match("Trident")) { 
			
		}else{
			_f.resizeTo(screen.availWidth,screen.availHeight);
		}
		_f.focus();
		return false;
	});
});
//-->
</script>
<?PHP
include_once("include_footer.php");
