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
    $ques[10]['text1'] = "あなたに対し、良いところを指摘すること";
    $ques[11]['text2'] = "チーム全体に対し、良いところを指摘すること";
    
    
    $line[12] = 12;
    $num[12]['num'] = "②";
    $tle[12]['text'] = "仕事で必要なスキルについて";
    $ques[12]['text1'] = "あなたに対し、悪いところを指摘すること";
    $ques[13]['text2'] = "チーム全体に対し、悪いところを指摘すること";
    
    $line[14] = 14;
    $num[14]['num'] = "③";
    $tle[14]['text'] = "周りの人との協力・協働の仕方について";
    $ques[14]['text1'] = "あなたに対し、良いところを指摘すること";
    $ques[15]['text2'] = "チーム全体に対し、良いところを指摘すること";
    
    $line[16] = 16;
    $num[16]['num'] = "④";
    $tle[16]['text'] = "周りの人との協力・協働の仕方について";
    $ques[16]['text1'] = "あなたに対し、悪いところを指摘すること";
    $ques[17]['text2'] = "チーム全体に対し、悪いところを指摘すること";
    
    $line[18] = 18;
    $num[18]['num'] = "⑤";
    $tle[18]['text'] = "仕事に取り組む態度について";
    $ques[18]['text1'] = "あなたに対し、良いところを指摘すること";
    $ques[19]['text2'] = "チーム全体に対し、良いところを指摘すること";
    
    $line[20] = 20;
    $num[20]['num'] = "⑥";
    $tle[20]['text'] = "仕事に取り組む態度について";
    $ques[20]['text1'] = "あなたに対し、悪いところを指摘すること";
    $ques[21]['text2'] = "チーム全体に対し、悪いところを指摘すること";
    
    $line[22] = 22;
    $num[22]['num'] = "⑦";
    $tle[22]['text'] = "仕事の問題や方向性について";
    $ques[22]['text1'] = "あなたと話をすること";
    $ques[23]['text2'] = "チーム全体と話をすること";
    
    
    
    $line2[24] = 24;
    $num2[24]['num'] = "①";
    $ques2[24]['text1'] = "<u>あなたが</u>仕事で何か良い働きをしたときは、あなたにそれを伝える";
    $ques2[25]['text2'] = "<u>チーム全体が</u>仕事で何か良い働きをしたときは、チーム全体にそれを伝える";

    $line2[26] = 26;
    $num2[26]['num'] = "②";
    $ques2[26]['text1'] = "<u>あなたの</u>パフォーマンスが組織の基準に達しているときには、そう伝える";
    $ques2[27]['text2'] = "<u>チーム全体の</u>パフォーマンスが組織の基準に達しているときには、そう伝える";

    $line2[28] = 28;
    $num2[28]['num'] = "③";
    $ques2[28]['text1'] = "<u>あなたの</u>パフォーマンスが期待されているよりも高かったときは、そのことを指摘する";
    $ques2[29]['text2'] = "<u>チーム全体の</u>パフォーマンスが期待されているよりも高かったときは、そのことを指摘する";

    $line2[30] = 30;
    $num2[30]['num'] = "④";
    $ques2[30]['text1'] = "<u>あなたが</u>仕事で何か間違いを犯したときは、あなたにそれを伝える";
    $ques2[31]['text2'] = "<u>チーム全体が</u>仕事で何か間違いを犯したときは、チーム全体にそれを伝える";

    $line2[32] = 32;
    $num2[32]['num'] = "⑤";
    $ques2[32]['text1'] = "<u>あなたの</u>パフォーマンスが組織の基準に達していないときは、そう伝える";
    $ques2[33]['text2'] = "<u>チーム全体の</u>パフォーマンスが組織の基準に達していないときは、そう伝える";

    $line2[34] = 34;
    $num2[34]['num'] = "⑥";
    $ques2[34]['text1'] = "<u>あなたの</u>パフォーマンスが期待されているよりも低いときは、そのことを指摘する";
    $ques2[35]['text2'] = "<u>チーム全体の</u>パフォーマンスが期待されているよりも低いときは、そのことを指摘する";
    
    
    $line3[36] = 36;
    $num3[36]['num'] = "①";
    $tle3[36]['text'] = "効果的に働けているかについて";
    $ques3[36]['text1'] = "<u>あなたは</u>定期的に考える";
    $ques3[37]['text2'] = "<u>チーム全体で</u>定期的に考える";
    
    $line3[38] = 38;
    $num3[38]['num'] = "②";
    $tle3[38]['text'] = "仕事の進め方について";
    $ques3[38]['text1'] = "<u>あなたは</u>たびたび考える";
    $ques3[39]['text2'] = "<u>チーム全体で</u>たびたび考える";
    
    
    $line4[40] = 40;
    $num4[40]['num'] = "③";
    $ques4[40]['text1'] = "<u>あなたはあなたの</u>目標について、たびたび見直しを行う";
    $ques4[41]['text2'] = "<u>チーム全体でチームの</u>目標について、たびたび見直しを行う";
    
    $line4[42] = 42;
    $num4[42]['num'] = "④";
    $ques4[42]['text1'] = "<u>あなたはあなたの</u>やるべきことが達成できているかどうかについて、たびたび見直しを行う";
    $ques4[43]['text2'] = "<u>チーム全体でチームの</u>やるべきことが達成できているかどうかについて、たびたび見直しを行う";
    
    $line4[44] = 44;
    $num4[44]['num'] = "⑤";
    $ques4[44]['text1'] = "<u>あなたは</u>自分の職務の目標を達成している";
    $ques4[45]['text2'] = "<u>チーム全体は</u>自分達の</u>職務の目標を達成している";
    
    $line4[46] = 46;
    $num4[46]['num'] = "⑥";
    $ques4[46]['text1'] = "<u>あなたは</u>求められているパフォーマンスの基準を満たしている";
    $ques4[47]['text2'] = "<u>チーム全体は</u>求められているパフォーマンスの基準を満たしている";
    
    $line4[48] = 48;
    $num4[48]['num'] = "⑦";
    $ques4[48]['text1'] = "<u>あなたは</u>自分の職務として要求されていることをすべて達成している";
    $ques4[49]['text2'] = "<u>チーム全体は</u>自分達の職務として要求されていることをすべて達成している";
    
    $line4[50] = 50;
    $num4[50]['num'] = "⑧";
    $ques4[50]['text1'] = "<u>あなたは</u>通常割り当てられる以上の責任を果たせている";
    $ques4[51]['text2'] = "<u>チーム全体は</u>通常割り当てられる以上の責任を果たせている";
    
    $line4[52] = 52;
    $num4[52]['num'] = "⑨";
    $ques4[52]['text1'] = "<u>あなたは</u>期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
    $ques4[53]['text2'] = "<u>チーム全体は</u>期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
    
    $line4[54] = 54;
    $num4[54]['num'] = "⑩";
    $ques4[54]['text1'] = "<u>あなたは</u>職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
    $ques4[55]['text2'] = "<u>チーム全体は</u>職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
    
    
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

		<div class="row">
                    <div class="col-md-12">    
                    <p>あなたは以下のことをそれぞれの人・チーム全体に対してどれくらいの頻度でしていますか。</p>
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">６</th>
                            <th colspan="2" rowspan="2"><u><?=$bossname?></u>は、あなた、および、チーム全体に対して、以下のことをそれぞれどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。</th>
                            <?php foreach($ans as $key=>$val):?>
                            <th class="n"><?=$key?></th>
                            <?php endforeach;?>
                        </tr>
                        <tr>
                            <?php foreach($ans as $key=>$val):?>
                            <th><?=$val?></th>
                            <?php endforeach;?>
                        </tr>

                        <?php $rows = 1; 
                        foreach($line as $top): ?>
                        <?php 
                            $g = "";
                            if($rows%2 == 0){
                                $g = "g";
                            }
                        ?>
                        <tr class="<?=$g?>">
                            <th rowspan="2" class="n"><?=$num[$top][ 'num' ]?></th>
                            <td rowspan="2" class="v"><?=$tle[$top][ 'text' ]?></td>
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
                        <?php $rows++;
                        endforeach;?>
                    </table>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-12">    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">７</th>
                            <th colspan="" rowspan="2">
                                あなた、および、チーム全体に対する<u><?=$bossname?></u>のふだんの行動について、以下の項目は、どのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。
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

                        <?php 
                        $rows = 1;
                        foreach($line2 as $top):
                            $g = "";
                            if($rows%2 == 0) $g="g";
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
                        <tr class="<?=$g?>" >
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
                        <?php 
                            $rows++;
                        endforeach;?>
                    </table>
                    </div>
                </div>
                
            
            
                <div class="row">
                    <div class="col-md-12">    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">８</th>
                            <th colspan="2" rowspan="2">
                                現在のあなた個人、または、チーム全体の行動について、以下の項目は、どのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。
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

                        <?php 
                            $rows = 1;
                            foreach($line3 as $top):
                                $g = "";
                                if($rows%2 == 0) $g = "g";
                                ?>
                        <tr class="<?=$g?>">
                            <th rowspan="2" class="n"><?=$num3[$top][ 'num' ]?></th>
                            <td rowspan="2" class="v"><?=$tle3[$top][ 'text' ]?></td>
                            <td rowspan="" ><?=$ques3[$top][ 'text1' ]?></td>
                            <?php foreach($ans2 as $key2=>$val2):?>
                            <?php
                                $chked  ="";
                                $a = "ans".$top;
                                if($result[$a] == $key2){ $chked = "CHECKED"; }
                            ?>
                            <td class="c"><input type="checkbox" name="ans[<?=$top?>]" class="chk chk<?=$top?>" id="c-<?=$top?>-<?=$key2?>" value="<?=$key2?>" <?=$chked?> /></td>
                            <?php endforeach;?>
                        </tr>
                        <tr class="<?=$g?>" >
                            <td rowspan="" ><?=$ques3[$top+1][ 'text2' ]?></td>
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
                        
                        
                        <?php 
                            $rows = 1;
                            foreach($line4 as $top): 
                                $g = "";
                                if($rows%2 == 0) $g = "g";
                            ?>
                        <tr class="<?=$g?>">
                            <th rowspan="2" class="n"><?=$num4[$top][ 'num' ]?></th>
                            <td rowspan="" colspan="2" ><?=$ques4[$top][ 'text1' ]?></td>
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
                            <td rowspan="" colspan="2" ><?=$ques4[$top+1][ 'text2' ]?></td>
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
