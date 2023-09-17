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
<div style="text-align:right;"><?=$pager?>/6ページ</div>
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
    
    $k = 125;
    $line[$k] = $k;
    $num[$k]['num'] = "①";
    $ques[$k]['text1'] = "友人に、このチームがすばらしい働き場所であると言える";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "②";
    $ques[$k]['text1'] = "他のチームではなく、このチームに入って本当によかったと思う";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "③";
    $ques[$k]['text1'] = "このチームが気に入っている";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "④";
    $ques[$k]['text1'] = "このチームの発展のためなら、人並み以上の努力を喜んで払うつもりだ";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑤";
    $ques[$k]['text1'] = "このチームにとって重要なことは、私にとっても重要である";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑥";
    $ques[$k]['text1'] = "いつもこのチームの人間であることを意識している";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑦";
    $ques[$k]['text1'] = "このチームの悪口を聞くと、心中穏やかではいられない";
    
    $k = $k+1;
    $line[$k] = $k;
    $num[$k]['num'] = "⑧";
    $ques[$k]['text1'] = "チームのために力を尽くしていると実感したい";

    
    

    
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

                <div class="row">
                    <div class="col-md-12">    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">14</th>
                            <th colspan="" rowspan="2">
                                以下の項目は、あなたのチームに対するお考えやお気持ちにどれくらいあてはまりますか。<br />
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
