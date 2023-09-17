<?PHP
$css1 = "guide";
$title = "受検";
include_once("include_header.php");
?>
<style type="text/css">
    table{
        font-size:85%;
    }
    th{
        background-color:#0044cc;
        color:#fff;
        text-align: left;
        vertical-align: middle !important;
    }
    td.c,
    th.n{
        text-align: center;
    }
    td.v{
        vertical-align: middle !important;
    }
</style>
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
<?php
    $ans[1] = "まったくしない";
    $ans[2] = "ほとんどしない";
    $ans[3] = "ときどきする";
    $ans[4] = "よくする";
    $ans[5] = "いつもする";

    $ans2[1] = "まったくあてはまらない";
    $ans2[2] = "あまりあてはまらない";
    $ans2[3] = "どちらともいえない";
    $ans2[4] = "ある程度あてはまる";
    $ans2[5] = "とてもあてはまる";


    $line[10] = 10;
    $num[10]['num'] = "①";
    $tle[10]['text'] = "仕事で必要なスキルについて";
    $ques[10]['text1'] = "<u>".$subA."</u>に対し、良いところを指摘すること";
    $ques[11]['text2'] = "<u>".$subB."</u>に対し、良いところを指摘すること";
    $ques[12]['text3'] = "<u>チーム全体</u>に対し、良いところを指摘すること";


    $line[13] = 13;
    $num[13]['num'] = "②";
    $tle[13]['text'] = "仕事で必要なスキルについて";
    $ques[13]['text1'] = "<u>".$subA."</u>に対し、悪いところを指摘すること";
    $ques[14]['text2'] = "<u>".$subB."</u>に対し、悪いところを指摘すること";
    $ques[15]['text3'] = "<u>チーム全体</u>に対し、悪いところを指摘すること";



    $line[16] = 16;
    $num[16]['num'] = "③";
    $tle[16]['text'] = "周りの人との協力・協働の仕方について";
    $ques[16]['text1'] = "<u>".$subA."</u>に対し、良いところを指摘すること";
    $ques[17]['text2'] = "<u>".$subB."</u>に対し、良いところを指摘すること";
    $ques[18]['text3'] = "<u>チーム全体</u>に対し、良いところを指摘すること";


    $line[19] = 19;
    $num[19]['num'] = "④";
    $tle[19]['text'] = "周りの人との協力・協働の仕方について";
    $ques[19]['text1'] = "<u>".$subA."</u>に対し、悪いところを指摘すること";
    $ques[20]['text2'] = "<u>".$subB."</u>に対し、悪いところを指摘すること";
    $ques[21]['text3'] = "<u>チーム全体</u>に対し、悪いところを指摘すること";


    $line[22] = 22;
    $num[22]['num'] = "⑤";
    $tle[22]['text'] = "仕事に取り組む態度について";
    $ques[22]['text1'] = "<u>".$subA."</u>に対し、良いところを指摘すること";
    $ques[23]['text2'] = "<u>".$subB."</u>に対し、良いところを指摘すること";
    $ques[24]['text3'] = "<u>チーム全体</u>に対し、良いところを指摘すること";


    $line[25] = 25;
    $num[25]['num'] = "⑥";
    $tle[25]['text'] = "仕事に取り組む態度について";
    $ques[25]['text1'] = "<u>".$subA."</u>に対し、悪いところを指摘すること";
    $ques[26]['text2'] = "<u>".$subB."</u>に対し、悪いところを指摘すること";
    $ques[27]['text3'] = "<u>チーム全体</u>に対し、悪いところを指摘すること";

    $line[28] = 28;
    $num[28]['num'] = "⑦";
    $tle[28]['text'] = "仕事の問題や方向性について";
    $ques[28]['text1'] = "<u>".$subA."</u>と話をすること";
    $ques[29]['text2'] = "<u>".$subB."</u>と話をすること";
    $ques[30]['text3'] = "<u>チーム全体</u>と話をすること";


    $line2[31] = 31;
    $num2[31]['num'] = "①";
    $ques2[31]['text1'] = "<u>".$subA."</u>が仕事で何か良い働きをしたときは、<u>".$subA."</u>にそれを伝える";
    $ques2[32]['text2'] = "<u>".$subB."</u>が仕事で何か良い働きをしたときは、<u>".$subB."</u>にそれを伝える";
    $ques2[33]['text3'] = "<u>チーム全体</u>が仕事で何か良い働きをしたときは、<u>チーム全体</u>にそれを伝える";

    $line2[34] = 34;
    $num2[34]['num'] = "②";
    $ques2[34]['text1'] = "<u>".$subA."</u>のパフォーマンスが組織の基準に達しているときには、そう伝える";
    $ques2[35]['text2'] = "<u>".$subB."</u>のパフォーマンスが組織の基準に達しているときには、そう伝える";
    $ques2[36]['text3'] = "<u>チーム全体</u>のパフォーマンスが組織の基準に達しているときには、そう伝える";

    $line2[37] = 37;
    $num2[37]['num'] = "③";
    $ques2[37]['text1'] = "<u>".$subA."</u>のパフォーマンスが期待されているよりも高かったときは、そのことを指摘する";
    $ques2[38]['text2'] = "<u>".$subB."</u>のパフォーマンスが期待されているよりも高かったときは、そのことを指摘する";
    $ques2[39]['text3'] = "<u>チーム全体</u>のパフォーマンスが期待されているよりも高かったときは、そのことを指摘する";

    $line2[40] = 40;
    $num2[40]['num'] = "④";
    $ques2[40]['text1'] = "<u>".$subA."</u>が仕事で何か間違いを犯したときは、<u>".$subA."</u>にそれを伝える";
    $ques2[41]['text2'] = "<u>".$subB."</u>が仕事で何か間違いを犯したときは、<u>".$subB."</u>にそれを伝える";
    $ques2[42]['text3'] = "<u>チーム全体</u>が仕事で何か間違いを犯したときは、<u>チーム全体</u>にそれを伝える";

    $line2[43] = 43;
    $num2[43]['num'] = "⑤";
    $ques2[43]['text1'] = "<u>".$subA."</u>のパフォーマンスが組織の基準に達していないときは、そう伝える";
    $ques2[44]['text2'] = "<u>".$subB."</u>のパフォーマンスが組織の基準に達していないときは、そう伝える";
    $ques2[45]['text3'] = "<u>チーム全体</u>のパフォーマンスが組織の基準に達していないときは、そう伝える";

    $line2[46] = 46;
    $num2[46]['num'] = "⑥";
    $ques2[46]['text1'] = "<u>".$subA."</u>のパフォーマンスが期待されているよりも低いときは、そのことを指摘する";
    $ques2[47]['text2'] = "<u>".$subB."</u>のパフォーマンスが期待されているよりも低いときは、そのことを指摘する";
    $ques2[48]['text3'] = "<u>チーム全体</u>のパフォーマンスが期待されているよりも低いときは、そのことを指摘する";



?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

            <div class="row">
                <div class="col-md-12">

                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">９</th>
                        <th colspan="2" rowspan="2">あなたは以下のことをそれぞれの人・チーム全体に対してどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。</th>
                        <?php foreach($ans as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <?php foreach($ans as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>

                    <?php $rows=1;
                    foreach($line as $top):
                        $g = "";
                        if($rows%2 == 0) $g = "g";
                        ?>
                    <tr class="<?=$g?>" >
                        <th rowspan="3" class="n"><?=$num[$top][ 'num' ]?></th>
                        <td rowspan="3" class="v"><?=$tle[$top][ 'text' ]?></td>
                        <td rowspan="" ><?=$ques[$top][ 'text1' ]?></td>
                        <?php foreach($ans as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $a = "ans".$top;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top?>]" class="chk chk<?=$top?>" id="c-<?=$top?>-<?=$key2?>" value="<?=$key2?>" <?=$chked?> /></td>
                        <?php endforeach;?>
                    </tr>
                    <tr  class="<?=$g?>" >
                        <td rowspan="" ><?=$ques[$top+1][ 'text2' ]?></td>
                        <?php foreach($ans as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $t = $top+1;
                            $a = "ans".$t;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top+1?>]" class="chk chk<?=$top+1?>"  id="c-<?=$top+1?>-<?=$key2?>"  value="<?=$key2?>" <?=$chked?> /></td>
                        <?php $rows++; endforeach;?>
                    </tr>
                    <tr class="<?=$g?>">
                        <td rowspan="" ><?=$ques[$top+2][ 'text3' ]?></td>
                        <?php foreach($ans as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $t = $top+2;
                            $a = "ans".$t;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top+2?>]" class="chk chk<?=$top+2?>" value="<?=$key2?>" id="c-<?=$top+2?>-<?=$key2?>"  <?=$chked?> /></td>
                        <?php endforeach;?>
                    </tr>
                    <?php endforeach;?>
                </table>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１０</th>
                        <th colspan="" rowspan="2">それぞれの人・チーム全体に対するあなたの普段の行動について、以下の項目は、どのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。</th>
                        <?php foreach($ans2 as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <?php foreach($ans2 as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>

                    <?php
                        $rows = 1;
                        foreach($line2 as $top):
                            $g = "";
                            if($rows%2 == 0) $g = "g";
                            ?>
                    <tr class="<?=$g?>">
                        <th rowspan="3" class="n"><?=$num2[$top][ 'num' ]?></th>

                        <td rowspan="" ><?=$ques2[$top][ 'text1' ]?></td>
                        <?php foreach($ans2 as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $a = "ans".$top;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top?>]" class="chk chk<?=$top?>" id="c-<?=$top?>-<?=$key2?>" value="<?=$key2?>" <?=$chked?> /></td>
                        <?php endforeach;?>
                    </tr>
                    <tr class="<?=$g?>">
                        <td rowspan="" ><?=$ques2[$top+1][ 'text2' ]?></td>
                        <?php foreach($ans2 as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $t = $top+1;
                            $a = "ans".$t;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top+1?>]" class="chk chk<?=$top+1?>"  id="c-<?=$top+1?>-<?=$key2?>"  value="<?=$key2?>" <?=$chked?> /></td>
                        <?php endforeach;?>
                    </tr>
                    <tr class="<?=$g?>">
                        <td rowspan="" ><?=$ques2[$top+2][ 'text3' ]?></td>
                        <?php foreach($ans2 as $key2=>$val2):?>
                        <?php
                            $chked  ="";
                            $t = $top+2;
                            $a = "ans".$t;
                            if($result[$a] == $key2){ $chked = "CHECKED"; }
                        ?>
                        <td class="c"><input type="checkbox" name="ans[<?=$top+2?>]" class="chk chk<?=$top+2?>" value="<?=$key2?>" id="c-<?=$top+2?>-<?=$key2?>"  <?=$chked?> /></td>
                        <?php endforeach;?>
                    </tr>
                    <?php $rows++; endforeach;?>
                </table>
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
	$(".chk").click(function(){
            var _id = $(this).attr("id").split("-");
            $(".chk"+_id[1]).prop("checked",false);
            $(this).prop("checked",true);
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
