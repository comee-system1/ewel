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


<div style="text-align:right;"><?=$pager?>/7ページ</div>



<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
                <div style="color:red;font-weight:bold;">
                    ※設問４と５では、回答欄をクリックすると、あなたのメンバーのお名前が表示されます。
                    <div style="margin-left:20px;">
                        以下の設問における「チーム」を「あなた、および、表示されたメンバー全員」としてご回答ください。
                    </div>
                    ※部下が1名の方の場合<br />
                    <div style="margin-left:20px;">
                      ・そのメンバーと「一緒に仕事をしたい」と思う場合は、下記の設問４でその方の名前を選択し、設問５は「　-　」を選択 してください。<br />
                      ・そのメンバーと「一緒に仕事をしたくない」と思う場合は、下記の設問４は「　-　」を選択し、設問５でその方の名前を選択してください。
                    </div>
                    ※メンバーが２名以上いる方の場合<br />
                    <div style="margin-left:20px;">
                        お名前のリストの中で、もっとも「一緒に仕事をしたい」人を設問４で、もっとも「一緒に仕事をしたく ない」人を設問５で選択してください。
                    </div>
                </div><br />
            <div class="row">
                <div class="col-md-12">
                <p>５．チームの中で、あなたが最も「一緒に働きたい」と思うメンバーをひとり選択してください。</p>
                <select name="ans[4]"  id="ans4" class="form-control">
<?PHP if(count($sub) == 1 ){ ?>
		<option value="0" > - </option>
<?PHP } ?>
<?PHP foreach($sub as $key=>$val){ ?>
<?PHP $chk=""; ?>
<?PHP if($result[ 'ans4' ] == $val[ 'id' ]) $chk = "selected"; ?>
			<option value="<?=$val[ 'id' ]?>" <?=$chk?> ><?=$val[ 'sei' ]?>　<?=$val[ 'mei' ]?>(ID:<?=$val[ 'empnum' ]?>)</option>
<?PHP }?>
		</select>
                </div>
            </div><br />
            <div class="row">
                <div class="col-md-12">
                <p>６．チームの中で、あなたが最も「一緒に働きたくない」と思うメンバーをひとり選択してください。</p>
                <select name="ans[5]"  id="ans5" class="form-control">
<?PHP if(count($sub) == 1 ){ ?>
		<option value="0" > - </option>
<?PHP } ?>
<?PHP foreach($sub as $key=>$val){ ?>
<?PHP $chk=""; ?>
<?PHP if($result[ 'ans5' ] == $val[ 'id' ]) $chk = "selected"; ?>
			<option value="<?=$val[ 'id' ]?>" <?=$chk?> ><?=$val[ 'sei' ]?>　<?=$val[ 'mei' ]?>(ID:<?=$val[ 'empnum' ]?>)</option>
<?PHP }?>
		</select>
                </div>
            </div>



		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="pageBack" value="戻る" class="button">

			<input type="submit" name="next" value="次ページ" class="button">
		</div>
		<input type="hidden" name="temp" value="page">
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

});
//-->
</script>
<?PHP if($pager == 2){ ?>
<script type="text/javascript" >
<!--
$(function(){
//	$("#ans1name").html("aaaaa");
});

//-->
</script>
<?PHP } ?>

<?PHP if($pager == 10){ ?>
<script type="text/javascript" >
<!--
$(function(){
	alert("ここからは、最も一緒に仕事をしたくない部下について回答して頂きます。");
});
//-->
</script>
<?PHP } ?>
<?PHP if($pager == 18){ ?>
<script type="text/javascript" >
<!--
$(function(){
	alert("ここからは、あなた自身のお考えについて回答して頂きます。");
});
//-->
</script>
<?PHP } ?>
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
