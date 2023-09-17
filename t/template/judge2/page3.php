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

            <div class="row">
                <div class="col-md-12">
                <p>７．１ <u><?=$subA?></u>は、男性ですか、女性ですか。</p>
                <?php
                    $ans6 = $result[ 'ans6' ];
                    $sel = [];
                    if($ans6 == "男性")$sel[1] = "selected";
                    if($ans6 == "女性")$sel[2] = "selected";
                ?>
                <select name="ans[6]"  id="ans6" class="form-control" style="width:100px;">
                    <option value="男性" <?=$sel[1]?>>男性</option>
                    <option value="女性" <?=$sel[2]?>>女性</option>
                </select>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                <p>７．２ <u><?=$subA?></u>は、何歳ですか。</p>

                <?php
                    $ans7 = $result[ 'ans7' ];
                    $arrayage['24歳以下'] = "24歳以下";
                    $arrayage['25～29歳'] = "25～29歳";
                    $arrayage['30～34歳'] = "30～34歳";
                    $arrayage['35～39歳'] = "35～39歳";
                    $arrayage['40～44歳'] = "40～44歳";
                    $arrayage['45～49歳'] = "45～49歳";
                    $arrayage['50歳以上'] = "50歳以上";
                ?>
                <select name="ans[7]"  id="ans7" class="form-control" style="width:auto;">
                    <?php foreach($arrayage as $key=>$val): ?>
                    <?php
                        $sel = "";
                        if($ans7 == $val ) $sel = "selected"; ?>
                    <option value="<?=$val?>" <?=$sel?>><?=$val?></option>
                    <?php endforeach;?>
                </select>

                </div>
            </div>


            <br />
            <div class="row">
                <div class="col-md-12">
                <p>８．１ <u><?=$subB?></u>は、男性ですか、女性ですか。</p>
                <?php
                    $ans8 = $result[ 'ans8' ];
                    $sel = [];
                    if($ans8 == "男性")$sel[1] = "selected";
                    if($ans8 == "女性")$sel[2] = "selected";
                ?>
                <select name="ans[8]"  id="ans8" class="form-control" style="width:100px;">
                    <option value="男性" <?=$sel[1]?>>男性</option>
                    <option value="女性" <?=$sel[2]?>>女性</option>
                </select>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12">
                <p>８．２ <u><?=$subB?></u>は、何歳ですか。</p>

                <?php
                    $ans9 = $result[ 'ans9' ];
                    $arrayage['24歳以下'] = "24歳以下";
                    $arrayage['25～29歳'] = "25～29歳";
                    $arrayage['30～34歳'] = "30～34歳";
                    $arrayage['35～39歳'] = "35～39歳";
                    $arrayage['40～44歳'] = "40～44歳";
                    $arrayage['45～49歳'] = "45～49歳";
                    $arrayage['50歳以上'] = "50歳以上";
                ?>
                <select name="ans[9]"  id="ans9" class="form-control" style="width:auto;">
                    <?php foreach($arrayage as $key=>$val): ?>
                    <?php
                        $sel = "";
                        if($ans9 == $val ) $sel = "selected"; ?>
                    <option value="<?=$val?>" <?=$sel?>><?=$val?></option>
                    <?php endforeach;?>
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
