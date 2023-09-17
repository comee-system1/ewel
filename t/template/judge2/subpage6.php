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

    $k = 143;
    $line[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "あなたは、<u>".$bossname."</u>にビジネスパーソンとしてのあり方や業務の取り組み方について厳しく指導される";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "あなたは、<u>".$bossname."</u>から、精神的にダメージを感じるような指導・コミュニケーションを受ける<br /><br />"
            . "例.：侮辱、悪口、執拗な叱責、（容姿、年齢、異性交遊等についての）ひやかし、他者の前での罵倒、等";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>から、現実的に達成・実行が不可能な目標や仕事量を与えられ、きつく責任を問われたり、馬鹿にされたり等される<br /><br />"
            . "例：1日でこなせない量の仕事を1日で仕上げるように指示されたり、時間的余裕がない時に他の人の仕事まで押し付けられる";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>から、あなたの能力とかけ離れた難易度の低い仕事ばかりを命じられる<br /><br />"
            . "例：雑用係をさせられる（コピー取りやシュレッダー等の業務ばかりさせられる）";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>から不条理な扱いを受けることがある<br /><br />"
            . "例：見せしめにされたり、冷遇されたりする";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>のプライベートに無理矢理付き合わされたり、個人的な用事を押し付けられたりする<br /><br />"
            . "例：タバコを買いに行かせる、仕事とは無関係に休日呼び出される、家の掃除をさせられる　等";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "<u>".$bossname."</u>があなたのプライベートに必要以上に立ち入ってくる<br /><br />"
            . "例：自宅に無理に訪問しようとする、就業後・休日などにメールやSNSで必要以上に連絡してくる、業務とは関係ないプライベートな情報をしつこく聞こうとする等";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "あなたに対する<u>".$bossname."</u>の指導やコミュニケーション、行動がセクハラだと感じる";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑨";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>から、身体に危険を感じるような指導、コミュニケーションを受ける<br /><br />"
            . "例.：小突く、叩く、モノを投げる、大声を出して叱責する、机を激しく叩く、モノにあたる等";

    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑩";
    $ques[$k]['text1'] = "あなたは<u>".$bossname."</u>からパワーハラスメント（セクハラを含む）を受けていると感じる";

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th rowspan="2">15</th>
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

                            <?php foreach($line as $top): ?>
                            <tr>
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

                            <?php endforeach;?>
                        </table>
                    </div>


                    <p class="f120">１６．自分自身に直接的な被害はないが社内にパワハラ（セクハラ）していると思われる上司がいる</p>
                        <?php $sel = [];?>
                        <?php if($result['ans153'] == "1"){$sel[1] = "checked";}?>
                        <?php if($result['ans153'] == "2"){$sel[2] = "checked";}?>
                    <div class="form-group">
                        <div class="col-xs-9">
                            <label class="checkbox-inline" style="position:relative;">
                                <input type="radio" name="ans[153]" value="1" class="gender" <?=$sel[1]?>>
                                <div style="position:absolute;top:10px; left:60px;width:200px;">1.いない</div>
                            </label>
                              <label class="checkbox-inline" style="position:relative;margin-left:60px;">
                                <input type="radio" name="ans[153]" value="2" class="gender" <?=$sel[2]?>>
                                <div style="position:absolute;top:10px; left:60px;width:200px;">2.いる</div>
                            </label>
                        </div>
                    </div>

                </div>





		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="pageBack" value="戻る" class="button">
			<input type="submit" name="next" value="完了" class="button">


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
