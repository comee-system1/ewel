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
    
    $k = 56;
    $line[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "<u>".$bossname."</u>がメンバーにフィードバックをする時には、メンバーは自分の考えや気持ちを言える";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "<u>".$bossname."</u>のフィードバックの仕方は一貫している";
    
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "<u>".$bossname."</u>のフィードバックは、メンバーが仕事に費やしている努力を反映している";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "<u>".$bossname."</u>のフィードバックは、メンバーが遂行した仕事に対して妥当なものだ";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "<u>".$bossname."</u>がフィードバックする時は、メンバーに丁寧に接する";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "<u>".$bossname."</u>がフィードバックする時は、メンバーに敬意を払う";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "<u>".$bossname."</u>がフィードバックする時は、メンバーと率直なコミュニケーションをする";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "<u>".$bossname."</u>がフィードバックをする時は、その理由を十分に説明する";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "<u>".$bossname."</u>のメンバーに対するフィードバックの<u>頻度</u>には、メンバーの間の差はない";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "<u>".$bossname."</u>のメンバーに対するフィードバックの<u>基準</u>には、メンバーの間の差はない";
    
    
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "私の幸福を気にかけてくれる";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "仕事についての知識が豊富である";
    
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "行動や行為は一貫しているとはいえない";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "そうと分かって私を傷つけることはしないだろう";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "強い正義感を持っている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "仕事上のスキルが高いと自信を持って言える";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "約束を守るかを疑う必要はない";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "仕事をする能力に優れている";
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "人に対応する際に公正であろうとしている";
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "成果を上げるために必要な能力を持っている";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑪";
    $ques[$k]['text1'] = "無理をしても私を助けてくれる";
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑫";
    $ques[$k]['text1'] = "私にとって重要なことを気にかけてくれる";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑬";
    $ques[$k]['text1'] = "私は<u>".$bossname."</u>を信頼している";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑭";
    $ques[$k]['text1'] = "たとえ<u>".$bossname."</u>の行動を見張ることができなくても、自分にとって重要な仕事や問題を安心して託すことができる";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑮";
    $ques[$k]['text1'] = "<u>".$bossname."</u>を見張っておくための良い方法があればいいのにと思う";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑯";
    $ques[$k]['text1'] = "もし誰かが<u>".$bossname."</u>の真意を疑っても、私はとりあえず疑わないことを選ぶ";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑰";
    $ques[$k]['text1'] = "<u>".$bossname."</u>に話しかけやすい";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑱";
    $ques[$k]['text1'] = "<u>".$bossname."</u>はあなたに話しかけやすいだろう";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑲";
    $ques[$k]['text1'] = "<u>".$bossname."</u>に、仕事に関わるあなたの良いところを指摘してほしい";
    
    $k = $k+1;
    $line2[$k] = $k;
    $num[$k]['num'] = "⑳";
    $ques[$k]['text1'] = "<u>".$bossname."</u>に、仕事に関わるあなたの悪いところを指摘してほしい";
    
    
    
    
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "今の仕事はやりがいのある仕事である";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "仕事で自分の能力や可能性を伸ばすことができる";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "今の仕事は自分に向いている";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "仕事の経験を通じて，より高度な仕事ができるようになる";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "仕事において我ながらよくやったなあと思うことがある";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "仕事において，自分がさらに高いレベルに達したと感じることができる";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "今の仕事は達成感を感じることができる";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "仕事を通じて自分自身が成長したという感じを持てる";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "自分の仕事の責任や課題はよくわかっている";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "自分の職務を果たすためにどう課題に取り組めばいいかを理解している";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑪";
    $ques[$k]['text1'] = "自分の課題や責任の優先順位を理解している";
    
    $k = $k+1;
    $line3[$k] = $k;
    $num[$k]['num'] = "⑫";
    $ques[$k]['text1'] = "自分の顧客（社内社外を問わず職務を提供する人や組織）の要求に応えるためには、どうすればいいかをよくわかっている";

    
    
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

                <div class="row">
                    <div class="col-md-12">    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">９</th>
                            <th colspan="" rowspan="2">
                                チームに対する<u><?=$bossname?></u>のフィードバック（良いところや悪いところの指摘）について、以下の項目は、どのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。
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

                        <?php 
                            $rows = 1;
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
                            <th rowspan="2">１０</th>
                            <th colspan="" rowspan="2">
                                以下のことは、<u><?=$bossname?></u>にどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。
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

                        <?php 
                            $rows = 1;
                        foreach($line2 as $top): 
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
                            <th rowspan="2">１１</th>
                            <th colspan="" rowspan="2">
                                現在のあなたのお仕事に、以下の項目はどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。
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

                        <?php
                            $rows = 1;
                        foreach($line3 as $top): 
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
