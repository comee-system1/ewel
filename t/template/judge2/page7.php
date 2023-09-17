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

    $no = 102;
    $numb = $no+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "①";
    $ques[$numb]['text1'] = "このチームでは、目標を達成するための道筋が明らかになっている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "②";
    $ques[$numb]['text1'] = "このチームでは、部署の目標と自身の役割・ミッションの整合性が取れている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "③";
    $ques[$numb]['text1'] = "このチームでは、自分たちの職務とその目的を確認しあっている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "④";
    $ques[$numb]['text1'] = "このチームでは、社外の顧客や社内のメンバーからの評価やフィードバックを大事にしている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑤";
    $ques[$numb]['text1'] = "このチームでは、決まりごとや規律を守っていないメンバーがいたら、気づいた者が、その場で率直に注意をしている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑥";
    $ques[$numb]['text1'] = "このチームでは、仕事のやり方などで間違っているメンバーがいたら、気づいた者が、それを本人に伝えている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑦";
    $ques[$numb]['text1'] = "このチームでは、日常の業務の中で、遠慮することなくコミュニケーションを取っている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑧";
    $ques[$numb]['text1'] = "このチームでは、インフォーマルなコミュニケーションや挨拶・声かけなどを頻繁に行っている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑨";
    $ques[$numb]['text1'] = "このチームでは、分からないことがあれば同僚へ気軽に尋ねている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑩";
    $ques[$numb]['text1'] = "このチームでは、「例のこと」「あのこと」と言うだけで話が通じる";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑪";
    $ques[$numb]['text1'] = "このチームでは、やむをえない理由で職務遂行に支障をきたしたメンバーがいたら、誰かが一時的にその代わりを務めている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑫";
    $ques[$numb]['text1'] = "このチームでは、各自の時間や労力を割いて、目標達成が困難なメンバーを手助けすることはまれにしかない";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑬";
    $ques[$numb]['text1'] = "このチームは、仕事を一人でたくさん抱えているメンバーがいたら支援している";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑭";
    $ques[$numb]['text1'] = "このチームでは、他のメンバーの仕事の状況・進み具合について、常に注意を払っている";

    $numb = $numb+1;
    $line[$numb] = $numb;
    $num[$numb]['num'] = "⑮";
    $ques[$numb]['text1'] = "このチームでは、仕事の負担が特定のメンバーに偏りすぎないように、お互いに気を配っている";



?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１５</th>
                        <th  rowspan="2">現在のあなたのチームに、以下の項目はどのくらいあてはまりますか。
                            <br />最もよくあてはまるものをひとつずつ選んでください。
                            <br />あなたご自身のことではなく、チーム全体についてお答えください。
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
                    <tr class="<?=$g?>">
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




		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="pageBack" value="戻る" class="button">

			<input type="submit" name="next" value="完了" class="button">
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
