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
    
    
    $line[105] = 105;
    $num[105]['num'] = "①";
    $ques[105]['text1'] = "このチームでは、目標を達成するための道筋が明らかになっている";
    
    
    $line[106] = 106;
    $num[106]['num'] = "②";
    $ques[106]['text1'] = "このチームでは、部署の目標と自身の役割・ミッションの整合性が取れている";

    $line[107] = 107;
    $num[107]['num'] = "③";
    $ques[107]['text1'] = "このチームでは、自分たちの職務とその目的を確認しあっている";
    
    $line[108] = 108;
    $num[108]['num'] = "④";
    $ques[108]['text1'] = "このチームでは、社外の顧客や社内のメンバーからの評価やフィードバックを大事にしている";
    
    $line[109] = 109;
    $num[109]['num'] = "⑤";
    $ques[109]['text1'] = "このチームでは、決まりごとや規律を守っていないメンバーがいたら、気づいた者が、その場で率直に注意をしている";
    
    $line[110] = 110;
    $num[110]['num'] = "⑥";
    $ques[110]['text1'] = "このチームでは、仕事のやり方などで間違っているメンバーがいたら、気づいた者が、それを本人に伝えている";
    
    $line[111] = 111;
    $num[111]['num'] = "⑦";
    $ques[111]['text1'] = "このチームでは、日常の業務の中で、遠慮することなくコミュニケーションを取っている";
    
    $line[112] = 112;
    $num[112]['num'] = "⑧";
    $ques[112]['text1'] = "このチームでは、インフォーマルなコミュニケーションや挨拶・声かけなどを頻繁に行っている";
    
    $line[113] = 113;
    $num[1113]['num'] = "⑨";
    $ques[113]['text1'] = "このチームでは、分からないことがあれば同僚へ気軽に尋ねている";
    
    $line[114] = 114;
    $num[114]['num'] = "⑩";
    $ques[114]['text1'] = "このチームでは、「例のこと」「あのこと」と言うだけで話が通じる";
    
    $line[115] = 115;
    $num[115]['num'] = "⑪";
    $ques[115]['text1'] = "このチームでは、やむをえない理由で職務遂行に支障をきたしたメンバーがいたら、誰かが一時的にその代わりを務めている";
    
    $line[116] = 116;
    $num[116]['num'] = "⑫";
    $ques[116]['text1'] = "このチームでは、各自の時間や労力を割いて、目標達成が困難なメンバーを手助けすることはまれにしかない";
    
    $line[117] = 117;
    $num[117]['num'] = "⑬";
    $ques[117]['text1'] = "このチームは、仕事を一人でたくさん抱えているメンバーがいたら支援している";
    
    $line[118] = 118;
    $num[118]['num'] = "⑭";
    $ques[118]['text1'] = "このチームでは、他のメンバーの仕事の状況・進み具合について、常に注意を払っている";
    
    $line[119] = 119;
    $num[119]['num'] = "⑮";
    $ques[119]['text1'] = "このチームでは、仕事の負担が特定のメンバーに偏りすぎないように、お互いに気を配っている";
    
    $line2[120] = 120;
    $num2[120]['num'] = "①";
    $ques2[120]['text1'] = "私が仕事で成功したと感じるのは、努力して新しい知識やスキルを獲得したときである";
    
    $line2[121] = 121;
    $num2[121]['num'] = "②";
    $ques2[121]['text1'] = "私が仕事で成功したと感じるのは、同僚よりも高い業績を出したときである";
    
    $line2[122] = 122;
    $num2[122]['num'] = "③";
    $ques2[122]['text1'] = "私が仕事で成功したと感じるのは、他の人が自分ほどうまくできないときである";
    
    $line2[123] = 123;
    $num2[123]['num'] = "④";
    $ques2[123]['text1'] = "私が仕事で成功したと感じるのは、自分が成長していると感じるときである";
    
    $line2[124] = 124;
    $num2[124]['num'] = "⑤";
    $ques2[124]['text1'] = "私が仕事で成功したと感じるのは、続けたいと思うような何かを学んだときである";
    
    $line2[125] = 125;
    $num2[125]['num'] = "⑥";
    $ques2[125]['text1'] = "私が仕事で成功したと感じるのは、他の人がうまくできなかったことを自分ができたときである";
    
    $line2[126] = 126;
    $num2[126]['num'] = "⑦";
    $ques2[126]['text1'] = "私が仕事で成功したと感じるのは、以前は難しかった新しい知識やスキルを会得したときである";
    
    $line2[127] = 127;
    $num2[127]['num'] = "⑧";
    $ques2[127]['text1'] = "私が仕事で成功したと感じるのは、自分が最も適任であることをはっきりと示すことができたときである";
    
?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
                
            <div class="row">
                <div class="col-md-12">    
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１４</th>
                        <th  rowspan="2">現在のあなたのチームに、以下の項目はどのくらいあてはまりますか。
                            <br />最もよくあてはまるものをひとつずつ選んでください。
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
            
            
            <div class="row">
                <div class="col-md-12">    
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１５</th>
                        <th colspan="" rowspan="2">
                            あなた自身について、以下の項目はどのくらいあてはまりますか。<br />
                            最もよくあてはまるものをひとつずつ選んでください。
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
