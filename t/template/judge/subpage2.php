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
<div style="text-align:right;"><?=$pager?>/10ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

		<p><?=$array_explain[ $pager ][0]?></p>
		<table class="company">
			<tr>
				<td style="width:350px !important;">&nbsp;</td>
<?PHP foreach($array_ans1[ $pager ] as $key=>$val ){ ?>
				<td style="width:80px !important;"  ><b><?=$val?></b></td>
<?PHP } ?>

			</tr>
<?PHP $number=1; ?>
<?PHP foreach($array_question1[ $pager ] as $key=>$val ){ ?>
			<tr>
				<th style="width:350px !important;"><dl><dt><?=$number?></dt><dd><?=$val?></dd></dl></th>
<?PHP foreach($array_ans1[ $pager ] as $k=>$v ){ ?>
<?PHP $ans = "ans".$key; $chk=""; if($result[ $ans ] == $k ){ $chk="checked"; } ?>
				<td ><input type="radio" name="ans[<?=$key?>]" value="<?=$k?>" <?=$chk?> ></td>
<?PHP } ?>
			</tr>
<?PHP $number++; } ?>

		</table>
		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="pageBack" value="戻る" class="button">
<?PHP if($pager == "10"){ ?>
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
	$("#ans3_other").click(function(){
		$("#ans_5").attr("checked",true);
	});
	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
});
//-->
</script>
<style type="text/css">
<!--

dt{  
	float : left;/* 左に寄せる */
	width:10px;;
	clear : both;/* フロートの解除 */
}

dd{  

}



table.company {
	width: 100%;
	margin: 0 auto;
	font-size: 12px;
}
table.company th,table.company td {
	padding:10px !important;
	text-align:center;

}
table.company th {
	background: #295890;
	vertical-align: middle;
	text-align: left;
	width: 100px;
	overflow: visible;
	position: relative;
	color: #fff;
	font-weight: normal;
	font-size: 15px;
	border-bottom:1px solid #ccc;

}
table.company th:after {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(136, 183, 213, 0);
	border-left-color: #295890;
	border-bottom:1px solid #ccc;

/*
	border-width: 10px;
	margin-top: -10px;
*/
}
/* firefox */
@-moz-document url-prefix() {
	table.company th::after {
		float: right;
		padding: 0;
		left: 30px;
		top: 10px;
		content: " ";
		height: 0;
		width: 0;
		position: relative;
		pointer-events: none;
		border: 10px solid transparent;
		border-left: #295890 10px solid;
		margin-top: -10px;
	}
	input[type=radio] {
		-moz-transform: scale( 1.5 , 1.5 );
		position:aboslute;
		padding-top:5px;
	}
}

table.company td {
	background: #f8f8f8;
	padding:5px;
	text-align:center;
}



input[type=radio] {
    width: 30px;
    height: 30px;
    vertical-align: middle;
}

//-->
</style>
<?PHP
include_once("include_footer.php");
