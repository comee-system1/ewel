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
<div style="text-align:right;"><?=$pager?>/5ページ</div>
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
    
    $k = 98;
    $line[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "メンバー全員がお互いに同程度のコミュニケーションをしている";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "チームで行うコミュニケーションが<u>".$bossname."</u>に集中している";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "チーム以外の人とのコミュニケーションが多い";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "チームの中での上下関係が強い";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "このチームでミスを犯したら、たいていの場合、責められる";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "このチームのメンバーは、問題のあることがらや困難な事案でも言い出すことができる";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "このチームでは、メンバーが「自分とは違う」ことを理由に他者を拒否することがある";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "このチームでは、リスクを取ることについて心配することはない";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "このチームでは他のメンバーに助けを求めることは難しい";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "このチームには、故意に私の努力を妨害するような人はいない";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑪";
    $ques[$k]['text1'] = "このチームのメンバーと一緒に働いていると、私特有のスキルや能力が高く評価され活かされる";
    
   
    
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "このチームでは、目標を達成するための道筋が明らかになっている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "このチームでは、部署の目標と自身の役割・ミッションの整合性が取れている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "このチームでは、自分たちの職務とその目的を確認しあっている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "このチームでは、社外の顧客や社内のメンバーからの評価やフィードバックを大事にしている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "このチームでは、決まりごとや規律を守っていないメンバーがいたら、気づいた者が、その場で率直に注意をしている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "このチームでは、仕事のやり方などで間違っているメンバーがいたら、気づいた者が、それを本人に伝えている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "このチームでは、日常の業務の中で、遠慮することなくコミュニケーションを取っている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "このチームでは、インフォーマルなコミュニケーションや挨拶・声かけなどを頻繁に行っている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "このチームでは、分からないことがあれば同僚へ気軽に尋ねている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "このチームでは、「例のこと」「あのこと」と言うだけで話が通じる";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑪";
    $ques[$k]['text1'] = "このチームでは、やむをえない理由で職務遂行に支障をきたしたメンバーがいたら、誰かが一時的にその代わりを務めている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑫";
    $ques[$k]['text1'] = "このチームでは、各自の時間や労力を割いて、目標達成が困難なメンバーを手助けすることはまれにしかない";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑬";
    $ques[$k]['text1'] = "このチームは、仕事を一人でたくさん抱えているメンバーがいたら支援している";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑭";
    $ques[$k]['text1'] = "このチームでは、他のメンバーの仕事の状況・進み具合について、常に注意を払っている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑮";
    $ques[$k]['text1'] = "このチームでは、仕事の負担が特定のメンバーに偏りすぎないように、お互いに気を配っている";

    
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

                <div class="row">
                    <div class="col-md-12">    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">１２</th>
                            <th colspan="" rowspan="2">
                                現在のあなたのチームのお仕事に、以下の項目はどのくらいあてはまりますか。<br />
                                最もよくあてはまるものをひとつずつ選んでください。<br />
                                あなたご自身のことではなく、チーム全体についてお答えください。
                            </th>
                            <?php foreach($ans as $key=>$val):
                                ?>
                            <th class="n"><?=$key?></th>
                            <?php endforeach;?>
                        </tr>
                        <tr>
                            <?php foreach($ans as $key=>$val):?>
                            <th><?=$val?></th>
                            <?php endforeach;?>
                        </tr>

                        <?php $rows = 1; 
                        foreach($line as $top): 
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
                            <th rowspan="2">１３</th>
                            <th colspan="" rowspan="2">
                                現在のあなたのチームに、以下の項目はどのくらいあてはまりますか。<br />
                                最もよくあてはまるものをひとつずつ選んでください。<br />
                                あなたご自身のことではなく、チーム全体についてお答えください。
                            </th>
                            <?php 
                            foreach($ans as $key=>$val):
                                ?>
                            <th class="n"><?=$key?></th>
                            <?php endforeach;?>
                        </tr>
                        <tr>
                            <?php foreach($ans as $key=>$val):?>
                            <th><?=$val?></th>
                            <?php endforeach;?>
                        </tr>

                        <?php  $rows = 1; foreach($line2 as $top): 
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
			<input type="submit" name="next" value="次ページ" class="button">


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
