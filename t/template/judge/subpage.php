<?PHP
$css1 = "guide";
$title = "受検";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
<div style="text-align:right;">1/10ページ</div>

<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
		<input type="hidden" id="ans4" value="<?=$array_question[5]?>" >
		<p id="ans4_txt" ></p>
		<p>週
<select name="ans[4]" style="padding:5px;">
<?PHP for($i=1;$i<=7;$i++){ ?>

<?PHP $sel = ""; if($result[ 'ans4' ] == $i){ $sel = "SELECTED"; }?>
	<option value="<?=$i?>" <?=$sel?> ><?=$i?></option>
<?PHP } ?>
</select>日くらい
		</p>
		<div class="center" style="text-align:center;clear:both;">
<?PHP if($pager == "18"){ ?>
			<input type="submit" name="next" value="完了" class="button">
<?PHP }else{ ?>
			<input type="submit" name="next" value="次ページ" class="button">
<?PHP } ?>

		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" >
		<input type="hidden" name="m" value="<?=$_REQUEST[ 'm' ]?>">

	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
<!--
$(function(){
	$(this).ans1();

	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
});
$.fn.ans1=function(){
	var _val = $("#ans1 option:selected").text();
	var _ans4 = $("#ans4").val();
	var _replace = _ans4.replace(/##ANS1##/g,_val);
	$("#ans4_txt").html(_replace)
}
//-->
</script>
<style type="text/css">
<!--
input[type=radio] {
  -moz-transform-origin: right bottom;
  -moz-transform: scale( 2 , 2 );
}
//-->
</style>

<?PHP
include_once("include_footer.php");
