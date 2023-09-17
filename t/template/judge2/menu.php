<?PHP
$css1 = "menu";

$title = "検査選択メニュー";
$text[1] = "検査選択メニュー";
$text[5] = "下記の検査名をクリックして検査をはじめて下さい";

$text[4] = "どちらの検査から受検して頂いても構いませんが、<br />すべての検査を受検してください。";


include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
		<h3 id="kojinh3"><?=$text[1]?></h3>

<?PHP if(count($tlist)){ ?>
		<div id="explain" style="text-align:center;">
			<p><?=$text[5]?></p>
		</div>
		<ul id="testMenu">
<?PHP  foreach($tlist as $key=>$val){ ?>
<?PHP	if($val[ 'boss' ]){ ?>
			<li class="">
<?PHP		if($val[ 'endtime' ] > 0 ){ ?>
				<a href="javascript:void(0);"   disabled  style='background-color:#ccc;color:#000000;cursor: default;'  >意識調査[<span style='color:red;'>済</span>]</a>
<?PHP		}else{ ?>
				<a href="javascript:void(0);" class="link" id="subordinate-<?=$val[ 'bossid' ]?>" >意識調査</a>
<?PHP 		} ?>
<div style='font-size:14px;text-align:right;'>[上司 <?=$val[ 'nam' ]?>]</div>
			</li>
<?PHP   }else{ ?>
		<li class="">
<?PHP		if( $val[ 'endtime' ] > 0 ){ ?>
				<a href="javascirpt:void(0);"  disabled  style='background-color:#ccc;color:#000000;cursor: default;' >意識調査[<span style='color:red;'>済</span>]</a>
<?PHP		}else{ ?>
				
				<a href="javascirpt:void(0);" class="link" id="boss">意識調査</a>
<?PHP		} ?>
				<div style='font-size:14px;text-align:right;'>[部下について]</div></li>
<?PHP   } ?>
<?PHP  } ?>
		</ul>

<?PHP  }else{ ?>
		<div id="explain" style="text-align:center;">
			<p>検査がありません。</p>
		</div>
<?PHP  } ?>

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
		var _id = $(this).attr("id");
		var _ex = _id.split("-");
		//var _url = location.href+"&type="+_id;
		var _url = location.protocol+"//"+location.host+location.pathname+"test/"+location.search+"&mem=<?=$member[ 'id' ]?>&m="+_ex[1]+"&type="+_ex[0];
		//var _f = window.open(_url,"mywindow","fullscreen=yes,scrollbars=yes");
		var _f = window.open(_url,"mywindow","");
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
