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

<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&anq=<?=$_REQUEST[ 'anq' ]?>" method="POST">
		<p>以下の質問にお答えください。最もよくあてはまるものをひとつずつ選んでください。</p>
		<table class="table">
			<tr>
				<th>&nbsp;</th>
				<th>１．まったくあてはまらない</th>
				<th>２．あまりあてはまらない</th>
				<th>３．どちらともいえない</th>
				<th>４．ある程度あてはまる</th>
				<th>５．とてもあてはまる</th>
			</tr>

<?PHP foreach($array_ques as $key=>$val){ ?>
			<tr>
				<td nowrap ><?=$key?>.<?=$val?></td>
<?PHP for($i=1;$i<=5;$i++){?>
<?PHP 
		$chk=array();
		$key = preg_replace("/\-/","",$key);
		$anq = "anq".$key;
		if($anqid[ $anq ] == $i) $chk = "CHECKED";
?>
				<td class="center"><input type="radio" class="radio_<?=$key?>" name="ans[<?=$key?>]" value="<?=$i?>" style="height:30px;width:30px;" <?=$chk?> /></td>
<?PHP } ?>
			</tr>
<?PHP } ?>
		</table>
		<br />
		<p class="mg0" >9.<?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんに対するフィードバックの仕方について、この１週間で<u>意識したことや変えたこと</u>を具体的にお書きください。<u><b>必須入力ですので、特にない場合も「なし」とお書きください。</b></u></p>
		<div >
			<div style="float:left;width:2%;color:red;">例)</div>
			<div style="float:left;width:97%;color:red;"><?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんを前よりも良く観察するようにした、ポジティブなフィードバックをするときに感情豊かに話した、ネガティブなフィードバックをするときにアドバイスも加えた</div>
		</div><br clear=all />
		<textarea name="ans[9]" class="txt" ><?=$anqid[ 'anq9' ]?></textarea>
		<br />
		<p class="mg0">10.<?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんに対するフィードバックの仕方について、目標を十分には達成できなかった方にうかがいます。その原因は何だと思いますか。<u><b>必須入力ですので、特にない場合も「なし」とお書きください。</b></u></p>
		<div >
			<div style="float:left;width:2%;color:red;">例)</div>
			<div style="float:left;width:97%;color:red;"><?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんにフィードバックをする機会がなかった、業務が忙しく<?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんを観察する余裕がなかった、<?=$sub[ 'sei' ]?><?=$sub[ 'mei' ]?>さんの反応が予想とは違った</div>
		</div><br clear=all />
		<textarea name="ans[10]" class="txt" ><?=$anqid[ 'anq10' ]?></textarea>

		<br />
		<p class="mg0">11.<?=$sub[ 'sei2' ]?><?=$sub[ 'mei2' ]?>さんに対するフィードバックの仕方について、この１週間で<u>意識したことや変えたこと</u>を具体的にお書きください。<u><b>必須入力ですので、特にない場合も「なし」とお書きください。</b></u></p>
		<textarea name="ans[11]" class="txt" ><?=$anqid[ 'anq11' ]?></textarea>


		<br />
		<p class="mg0">12.<?=$sub[ 'sei2' ]?><?=$sub[ 'mei2' ]?>さんに対するフィードバックの仕方について、目標を十分には達成できなかった方にうかがいます。その原因は何だと思いますか。<u><b>必須入力ですので、特にない場合も「なし」とお書きください。</b></u></p>
		<textarea name="ans[12]" class="txt" ><?=$anqid[ 'anq12' ]?></textarea>


		<br />
		<p class="mg0">13.この１週間で、フィードバックの仕方や、部下の反応に関する新たな気づきはありましたか。あれば具体的にお書きください。<u><b>必須入力ですので、特にない場合も「なし」とお書きください。</b></u></p>
		<textarea name="ans[13]" class="txt" ><?=$anqid[ 'anq13' ]?></textarea>

		<div class="center" style="text-align:center;clear:both;">
			<input type="button" name="page" value="閉じる" class="button" id="close">
			<input type="submit" name="next" value="完了" class="button">
		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="jitid" value="<?=$jitid?>">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" >
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
<!--
$(function(){
	$("#ans3_other").click(function(){
		$("#ans_5").attr("checked",true);
	});
	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
	$(this).cl6();
	$(".radio_6").click(function(){
		$(this).cl6();
	});
	$(this).cl8();
	$(".radio_8").click(function(){
		$(this).cl8();
	});
});
$.fn.cl6 = function(){
	var _cl6 = $(".radio_6:checked").val();
	if(_cl6 == 1){
		$(".radio_61").prop("checked",false);
		$(".radio_61").attr("disabled","disabled");
	}else{
		$(".radio_61").prop("disabled",false);
	}
}
$.fn.cl8 = function(){
	var _cl8 = $(".radio_8:checked").val();
	if(_cl8 == 1){
		$(".radio_81").prop("checked",false);
		$(".radio_81").attr("disabled","disabled");
	}else{
		$(".radio_81").prop("disabled",false);
	}
}

//-->
</script>
<style type="text/css">
<!--
input[type=radio] {
  -moz-transform-origin: right bottom;
  -moz-transform: scale( 2 , 2 );
}
.table{
	width: 100%;
	border-collapse: collapse;
}
.table th{
	padding: 6px;
	text-align: left;
	vertical-align: top;
	color: #333;
	background-color: #eee;
	border: 1px solid #b9b9b9;
}
.table td{
	padding: 6px;
	background-color: #fff;
	border: 1px solid #b9b9b9;
}
.table td.center{
	text-align:center;
}

.txt{
	width:100%;
	height:50px;
}
.mg0{
	margin:0;
	padding:0;
	margin-top:20px;
}
//-->
</style>

<?PHP
include_once("include_footer.php");
