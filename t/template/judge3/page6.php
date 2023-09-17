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
    
    
    $line[81] = 81;
    $num[81]['num'] = "①";
    $tle[81]['text'] = "";
    $ques[81]['text1'] = "あなたがメンバーにフィードバックをする時には、メンバーは自分の考えや気持ちを言える";
    
    
    $line[82] = 82;
    $num[82]['num'] = "②";
    $tle[82]['text'] = "";
    $ques[82]['text1'] = "あなたのフィードバックの仕方は一貫している";

    $line[83] = 83;
    $num[83]['num'] = "③";
    $tle[83]['text'] = "";
    $ques[83]['text1'] = "あなたのフィードバックは、メンバーが仕事に費やしている努力を反映している";
    
    
    $line[84] = 84;
    $num[84]['num'] = "④";
    $tle[84]['text'] = "";
    $ques[84]['text1'] = "あなたのフィードバックは、メンバーが遂行した仕事に対して妥当なものだ";
    
    $line[85] = 85;
    $num[85]['num'] = "⑤";
    $ques[85]['text1'] = "あなたがフィードバックする時は、メンバーに丁寧に接する";
    
    
    $line[86] = 86;
    $num[86]['num'] = "⑥";
    $ques[86]['text1'] = "あなたがフィードバックする時は、メンバーに敬意を払う";
       
    $line[87] = 87;
    $num[87]['num'] = "⑦";
    $ques[87]['text1'] = "あなたがフィードバックする時は、メンバーと率直なコミュニケーションをする";
    
    $line[88] = 88;
    $num[88]['num'] = "⑧";
    $ques[88]['text1'] = "あなたがフィードバックをする時は、その理由を十分に説明する";
    
    $line[89] = 89;
    $num[89]['num'] = "⑨";
    $ques[89]['text1'] = "メンバーに対するフィードバックの頻度には、メンバーの間の差はない";
    
    $line[90] = 90;
    $num[90]['num'] = "⑩";
    $ques[90]['text1'] = "メンバーに対するフィードバックの基準には、メンバーの間の差はない";
    
    
    

    
    $line2[91] = 91;
    $num2[91]['num'] = "①";
    $ques2[91]['text1'] = "メンバー全員がお互いに同程度のコミュニケーションをしている";
    
    $line2[92] = 92;
    $num2[92]['num'] = "②";
    $ques2[92]['text1'] = "チームで行うコミュニケーションがあなたに集中している";
    
    $line2[93] = 93;
    $num2[93]['num'] = "③";
    $ques2[93]['text1'] = "チーム以外の人とのコミュニケーションが多い";
    
    $line2[94] = 94;
    $num2[94]['num'] = "④";
    $ques2[94]['text1'] = "チームの中での上下関係が強い";
    
    $line2[95] = 95;
    $num2[95]['num'] = "⑤";
    $ques2[95]['text1'] = "このチームでミスを犯したら、たいていの場合、責められる";
    
    $line2[96] = 96;
    $num2[96]['num'] = "⑥";
    $ques2[96]['text1'] = "このチームのメンバーは、問題のあることがらや困難な事案でも言い出すことができる";
    
    $line2[97] = 97;
    $num2[97]['num'] = "⑦";
    $ques2[97]['text1'] = "このチームでは、メンバーが「自分とは違う」ことを理由に他者を拒否することがある";
    
    $line2[98] = 98;
    $num2[98]['num'] = "⑧";
    $ques2[98]['text1'] = "このチームでは、リスクを取ることについて心配することはない";
    
    $line2[99] = 99;
    $num2[99]['num'] = "⑨";
    $ques2[99]['text1'] = "このチームでは他のメンバーに助けを求めることは難しい";
    
    $line2[100] = 100;
    $num2[100]['num'] = "⑩";
    $ques2[100]['text1'] = "このチームには、故意に私の努力を妨害するような人はいない";
    
    $line2[101] = 101;
    $num2[101]['num'] = "⑪";
    $ques2[101]['text1'] = "このチームのメンバーと一緒に働いていると、私特有のスキルや能力が高く評価され活かされる";
        

    
    
    
?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
                
            <div class="row">
                <div class="col-md-12">    
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">１２</th>
                        <th  rowspan="2">チームに対するあなたのフィードバック（良いところや悪いところの指摘）について、以下の項目はどのくらいあてはまりますか。<br />
                            最もよくあてはまるものをひとつずつ選んでください。</th>
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
                        <th rowspan="2">１３</th>
                        <th colspan="" rowspan="2">あなたのチームの現在の仕事について、以下の項目はどのくらいあてはまりますか。<br />
                            最もよくあてはまるものをひとつずつ選んでください。<br />
                            あなたご自身のことではなく、チーム全体について、あなたの考えをお答えください。</th>
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
