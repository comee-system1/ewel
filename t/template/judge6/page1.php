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
<!--
<div style="text-align:right;">1/19ページ</div>
-->
<div style="color:red;font-weight:bold;">
※設問１と２では、回答欄をクリックすると、あなたの部下のお名前が表示されます。<br />
※部下が1名の方の場合<br />
　・その部下と「一緒に仕事をしたい」と思う場合は、下記の設問1でその方の名前を選択し、設問２は「　-　」を選択 してください。<br />
　・その部下と「一緒に仕事をしたくない」と思う場合は、下記の設問１は「　-　」を選択し、設問２でその方の名前を選択してください。<br />
※部下が２名以上いる方の場合<br />
お名前のリストの中で、もっとも「一緒に仕事をしたい」人を設問１で、もっとも「一緒に仕事をしたく ない」人を設問２で選択してください。
</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST" name="form1">
		<p><?=$array_question[1]?></p>
		<select name="ans[1]" style="padding:10px;width:300px;height:50px;" id="ans1">
<?PHP if(count($sub) == 1 ){ ?>
		<option value="0" > - </option>
<?PHP } ?>
<?PHP foreach($sub as $key=>$val){ ?>
<?PHP $chk=""; ?>
<?PHP if($result[ 'ans1' ] == $val[ 'id' ]) $chk = "selected"; ?>
			<option value="<?=$val[ 'id' ]?>" <?=$chk?> ><?=$val[ 'sei' ]?>　<?=$val[ 'mei' ]?>(ID:<?=$val[ 'empnum' ]?>)</option>
<?PHP }?>
		</select>
		<p><?=$array_question[2]?></p>
		<select name="ans[2]" style="padding:10px;width:300px;height:50px;" id="ans2">
<?PHP if(count($sub) == 1 ){ ?>
		<option value="0" > - </option>
<?PHP } ?>
<?PHP foreach($sub as $key=>$val){ ?>
<?PHP $chk=""; ?>
<?PHP if($result[ 'ans2' ] == $val[ 'id' ]) $chk = "selected"; ?>
			<option value="<?=$val[ 'id' ]?>" <?=$chk?> ><?=$val[ 'sei' ]?><?=$val[ 'mei' ]?>(ID:<?=$val[ 'empnum' ]?>)</option>
<?PHP }?>
		</select>
		<p><?=$array_question[3]?></p>
<?PHP foreach($array_pos as $key=>$val){ ?>
<?PHP $chk=""; ?>
<?PHP if($result[ 'ans3' ] == $key) $chk = "checked"; ?>
		<ul style="list-style-type:none;clear:both;">
			<li style="float:left;"><input type="radio" name="ans[3]" value="<?=$key?>" style="height:30px;width:30px;" id="ans_<?=$key?>" <?=$chk?> ></li><li style="float:left;margin:10px 5px;"><label for="ans_<?=$key?>"><?=$val?></label></li>
<?PHP if($key == 5){ ?>
			<li style="float:left;"><input type="text" name="ans3_other" value="<?=$result[ 'ans3_other' ]?>" style="width:300px;padding:5px;" id="ans3_other"></li>
<?PHP } ?>
		</ul>
<?PHP }?>

		</p>
		<div class="center" style="text-align:center;clear:both;">
			<input type="button" name="next" value="次ページ" class="button" id="nextbutton">

		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage" >
		<input type="hidden" name="next" value="on" >
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
	$("#ans1").change(function(){
		$(this).ans1();
	});
	$("#ans3_other").click(function(){
		$("#ans_5").attr("checked",true);
	});
	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
	$("#nextbutton").click(function(){
		//選択項目の確認
		var _ans1 = $("#ans1").val();
		var _ans2 = $("#ans2").val();
		if(_ans2 == 0 ){
			$("#nextPage").val(1);
		}else
		if(_ans1 == 0) $("#nextPage").val(9);
		document.form1.submit();
	});
});
$.fn.ans1=function(){
	var _val = $("#ans1 option:selected").text();
	var _sp = _val.split("　")
/*
	var _ans4 = $("#ans4").val();
	var _replace = _ans4.replace(/##ANS1##/g,_sp[0]);
	$("#ans4_txt").html(_replace)
*/
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
