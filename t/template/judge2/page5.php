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
    $ans[1] = "まったくあてはまらない";
    $ans[2] = "あまりあてはまらない";
    $ans[3] = "どちらともいえない";
    $ans[4] = "ある程度あてはまる";
    $ans[5] = "とてもあてはまる";

    $ans2[1] = "まったくあてはまらない";
    $ans2[2] = "あまりあてはまらない";
    $ans2[3] = "どちらともいえない";
    $ans2[4] = "ある程度あてはまる";
    $ans2[5] = "とてもあてはまる";


    $line[49] = 49;
    $num[49]['num'] = "①";
    $tle[49]['text'] = "";
    $ques[49]['text1'] = "<u>".$subA."は自分の</u>職務の目標を達成している";
    $ques[50]['text2'] = "<u>".$subB."は自分の</u>職務の目標を達成している";
    $ques[51]['text3'] = "<u>チーム全体は自分達の</u>職務の目標を達成している";


    $line[52] = 52;
    $num[52]['num'] = "②";
    $tle[52]['text'] = "";
    $ques[52]['text1'] = "<u>".$subA."</u>は求められているパフォーマンスの基準を満たしている";
    $ques[53]['text2'] = "<u>".$subB."</u>は求められているパフォーマンスの基準を満たしている";
    $ques[54]['text3'] = "<u>チーム全体</u>は求められているパフォーマンスの基準を満たしている";



    $line[55] = 55;
    $num[55]['num'] = "③";
    $tle[55]['text'] = "";
    $ques[55]['text1'] = "<u>".$subA."は自分の</u>職務として要求されていることをすべて達成している";
    $ques[56]['text2'] = "<u>".$subB."は自分の</u>職務として要求されていることをすべて達成している";
    $ques[57]['text3'] = "<u>チーム全体は自分達の</u>職務として要求されていることをすべて達成している";


    $line[58] = 58;
    $num[58]['num'] = "④";
    $tle[58]['text'] = "";
    $ques[58]['text1'] = "<u>".$subA."</u>は通常割り当てられる以上の責任を果たせている";
    $ques[59]['text2'] = "<u>".$subB."</u>は通常割り当てられる以上の責任を果たせている";
    $ques[60]['text3'] = "<u>チーム全体</u>は通常割り当てられる以上の責任を果たせている";


    $line[61] = 61;
    $num[61]['num'] = "⑤";
    $tle[61]['text'] = "";
    $ques[61]['text1'] = "<u>".$subA."</u>は期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
    $ques[62]['text2'] = "<u>".$subB."</u>は期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
    $ques[63]['text3'] = "<u>チーム全体</u>は期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";


    $line[64] = 64;
    $num[64]['num'] = "⑥";
    $tle[64]['text'] = "";
    $ques[64]['text1'] = "<u>".$subA."</u>は職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
    $ques[65]['text2'] = "<u>".$subB."</u>は職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
    $ques[66]['text3'] = "<u>チーム全体</u>は職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";



    $line2[67] = 67;
    $num2[67]['num'] = "①";
    $ques2[67]['text1'] = "私は<u>".$subA."</u>を信頼している";
    $ques2[68]['text2'] = "私は<u>".$subB."</u>を信頼している";


    $line2[69] = 69;
    $num2[69]['num'] = "②";
    $ques2[69]['text1'] = "たとえ<u>".$subA."</u>の行動を見張ることができなくても、自分にとって重要な仕事や問題をその方に安心して託すことができる";
    $ques2[70]['text2'] = "たとえ<u>".$subB."</u>の行動を見張ることができなくても、自分にとって重要な仕事や問題をその方に安心して託すことができる";


    $line2[71] = 71;
    $num2[71]['num'] = "③";
    $ques2[71]['text1'] = "<u>".$subA."</u>を見張っておくための良い方法があればいいのにと思う";
    $ques2[72]['text2'] = "<u>".$subB."</u>を見張っておくための良い方法があればいいのにと思う";


    $line2[73] = 73;
    $num2[73]['num'] = "④";
    $ques2[73]['text1'] = "もし誰かが<u>".$subA."</u>の真意を疑っても、私はとりあえず疑わないことを選ぶ";
    $ques2[74]['text2'] = "もし誰かが<u>".$subB."</u>の真意を疑っても、私はとりあえず疑わないことを選ぶ";


   /*
    $line2[75] = 75;
    $num2[75]['num'] = "⑤";
    $ques2[75]['text1'] = "<u>".$subA."</u>は今後、優秀な社員になるだろう";
    $ques2[76]['text2'] = "<u>".$subB."</u>は今後、優秀な社員になるだろう";


    $line2[77] = 77;
    $num2[77]['num'] = "⑥";
    $ques2[77]['text1'] = "<u>".$subA."</u>は今後、業績が良くなるだろう";
    $ques2[78]['text2'] = "<u>".$subB."</u>は今後、業績が良くなるだろう";

    $line2[79] = 79;
    $num2[79]['num'] = "⑦";
    $ques2[79]['text1'] = "<u>".$subA."</u>は今後、会社で長く輝かしいキャリアを持つだろう";
    $ques2[80]['text2'] = "<u>".$subB."</u>は今後、会社で長く輝かしいキャリアを持つだろう";
*/

?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１１</th>
                        <th  rowspan="2">以下のことは、部下それぞれにどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。</th>
                        <?php foreach($ans as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <?php foreach($ans as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>

                    <?php $rows=1; foreach($line as $top):
                        $g = "";
                        if($rows%2 == 0) $g = "g";
                        ?>
                    <tr class="<?=$g?>" >
                        <th rowspan="3" class="n"><?=$num[$top][ 'num' ]?></th>
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
                    <tr class="<?=$g?>">
                        <td rowspan="" ><?=$ques[$top+1][ 'text2' ]?></td>
                        <?php foreach($ans as $key2=>$val2):?>
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
                    <?php $rows++; endforeach;?>
                </table>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１２</th>
                        <th colspan="" rowspan="2">部下それぞれにどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。</th>
                        <?php foreach($ans2 as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <?php  foreach($ans2 as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>

                    <?php $rows=1; foreach($line2 as $top):
                        $g = "";
                        if($rows%2 == 0) $g = "g";
                        ?>
                    <tr class="<?=$g?>">
                        <th rowspan="2" class="n"><?=$num2[$top][ 'num' ]?></th>

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
