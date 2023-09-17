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

    $no = 74;
    $numb = $no+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "①";
    $tle[$numb]['text'] = "";
    $ques[$numb]['text1'] = "フィードバックをする時は、チームの目標を明確に伝えている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "②";
    $tle[$numb]['text'] = "";
    $ques[$numb]['text1'] = "フィードバックをする時は、目標に向けてチームを方向づけている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "③";
    $tle[$numb]['text'] = "";
    $ques[$numb]['text1'] = "フィードバックをする時は、各メンバーの役割を明確に伝えている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "④";
    $tle[$numb]['text'] = "";
    $ques[$numb]['text1'] = "フィードバックをする時は、各メンバーが自分の役割を果たすよう促している";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑤";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバー同士の協力体制を明確にしている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑥";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバーが互いに協力するように促している";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑦";
    $ques[$numb]['text1'] = "あなたのフィードバックに対して、メンバーは自分の考えや気持ちを言える";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑧";
    $ques[$numb]['text1'] = "あなたのフィードバックの仕方は、相手や状況が違っても一貫している";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑨";
    $ques[$numb]['text1'] = "あなたのフィードバックの仕方は、倫理的および道徳的な基準を守っている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑩";
    $ques[$numb]['text1'] = "あなたのフィードバックは、メンバーが仕事に費やしている努力を反映している";


    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑪";
    $ques[$numb]['text1'] = "あなたのフィードバックは、メンバーが遂行した仕事に対して妥当なものだ";


    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑫";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバーに丁寧に接する";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑬";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバーに敬意を払う";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑭";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバーと率直なコミュニケーションをする";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑭";
    $ques[$numb]['text1'] = "フィードバックをする時は、メンバーと率直なコミュニケーションをする";


    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑮";
    $ques[$numb]['text1'] = "フィードバックをする時は、その理由を十分に説明する";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑯";
    $ques[$numb]['text1'] = "メンバーに対するフィードバックの頻度の高さには、メンバーの間で差がある";


    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑰";
    $ques[$numb]['text1'] = "メンバーに対するフィードバックの基準の厳しさには、メンバーの間で差がある";


    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑱";
    $ques[$numb]['text1'] = "自分自身の利益のためではなく、チームの利益のためにフィードバックをしている";


    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "①";
    $ques2[$numb]['text1'] = "各メンバーがメンバー全員とコミュニケーションしている";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "②";
    $ques2[$numb]['text1'] = "自律的に決定を行って仕事を進める";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "③";
    $ques2[$numb]['text1'] = "社内で競争することが求められる";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "④";
    $ques2[$numb]['text1'] = "非常にたくさんの仕事をしなければならない";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑤";
    $ques2[$numb]['text1'] = "高度の知識や技術が必要なむずかしい仕事だ";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑥";
    $ques2[$numb]['text1'] = "メンバー全員がお互いに同程度のコミュニケーションをしている";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑦";
    $ques2[$numb]['text1'] = "チームで行うコミュニケーションがあなたに集中している";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑧";
    $ques2[$numb]['text1'] = "チーム以外の人とのコミュニケーションが多い";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑨";
    $ques2[$numb]['text1'] = "チームの中での上下関係が強い";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑩";
    $ques2[$numb]['text1'] = "このチームでミスを犯したら、たいていの場合、責められる";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑪";
    $ques2[$numb]['text1'] = "このチームのメンバーは、問題のあることがらや困難な事案について発言できる";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑫";
    $ques2[$numb]['text1'] = "このチームでは、メンバーが「自分とは違う」ことを理由に他者を拒否することがある";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑬";
    $ques2[$numb]['text1'] = "このチームでは、リスクを取ることについて心配することはない";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑭";
    $ques2[$numb]['text1'] = "このチームでは他のメンバーに助けを求めることは難しい";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑮";
    $ques2[$numb]['text1'] = "このチームには、故意に私の努力を妨害するような人はいない";

    $numb = $numb+1;
    $line2[$numb] = $numb;
    $num2[$numb]['num'] = "⑯";
    $ques2[$numb]['text1'] = "このチームのメンバーと一緒に働いていると、私特有のスキルや能力が高く評価され活かされる";




?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１３</th>
                        <th  rowspan="2">チームに対するあなたのフィードバック（良いところや悪いところの指摘）について、以下の項目はどのくらいあてはまりますか。<br />
                            最もよくあてはまるものをひとつずつ選んでください。
                            </th>
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
                        <th rowspan="" class="n"><?=$num[$top][ 'num' ]?></th>
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

                    <?php $rows++; endforeach;?>
                </table>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１４</th>
                        <th colspan="" rowspan="2">
                        	あなたのチームの現在の仕事について、以下の項目はどのくらいあてはまりますか。<br />
                            最もよくあてはまるものをひとつずつ選んでください。<br />
                            あなたご自身のことではなく、チーム全体について、あなたの考えをお答えください。
                        </th>
                        <?php foreach($ans2 as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr>
                        <?php foreach($ans2 as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>

                    <?php $rows=1; foreach($line2 as $top):
                        $g = "";
                        if($rows%2 == 0) $g = "g";
                        ?>
                    <tr class="<?=$g?>">
                        <th rowspan="" class="n"><?=$num2[$top][ 'num' ]?></th>

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
