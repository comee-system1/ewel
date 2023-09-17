<?php
$css1 = "guide";
$title = "受検";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">
<?php
    include_once("include_title.php");

?>
<div style="text-align:right;">1/<?=$max?>ページ</div>

<?php if (count($err)) { ?>
	<div style="color:red;border:1px solid red;">
<?php foreach ($err as $key=>$val) { ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?php } ?>
	</div>
<?php } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">1.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[1]?></dd>
    </dl>

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <?php if($result["ans1"] == '男性'):?>
        <?php $chk1 = "CHECKED"; ?>
        <?php $act1 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$act1?>">
            <input type="radio" name="ans[1]" value="男性" <?=$chk1?> > 男性
        </label>
        <?php if($result["ans1"] == '女性'):?>
        <?php $chk2 = "CHECKED"; ?>
        <?php $act2 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$act2?>">
            <input type="radio" name="ans[1]" value="女性" <?=$chk2?> > 女性
        </label>

        <?php if($result["ans1"] == 'その他'):?>
        <?php $chk3 = "CHECKED"; ?>
        <?php $act3 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$act3?>">
            <input type="radio" name="ans[1]" value="その他" <?=$chk3?> > その他
        </label>
        <?php if($result["ans1"] == '回答しない'):?>
        <?php $chk3 = "CHECKED"; ?>
        <?php $act4 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$act4?>">
            <input type="radio" name="ans[1]" value="回答しない" <?=$chk3?> > 回答しない

        </label>

    </div>


    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">2.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[2]?></dd>
    </dl>

    <div class="row" style="width:200px;">
        <div class="col"> 
            <input type="number" name="ans[2]" value="<?=$result["ans2"]?>"  class="form-control" style="width:100px;"  min="0" /> 
        </div>
        <div class="col"> 
            <label class="form-control-label" style="margin-left:-20px;margin-top:12px;" min="10" max="100">歳</label>
        </div>
    </div>

    <dl style="margin-top:5px;">
        <dt  style="float:left;width:30px;font-weight:normal;">3.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[3]?></dd>
    </dl>


    <?php
        $array = [
            "-",
            "企画・管理",
            "一般事務",
            "営業・販売",
            "企画営業・コンサルティング",
            "SE・プログラマー",
            "技術開発",
            "研究職",
            "生産・製造",
            "医療・介護",
            "教育・保育",
            "その他",            
            ];
    ?>
    <select  name="ans[3]" id="ans3" style="padding:5px;width:300px;" class="form-control">
        <?php foreach($array as $key=>$value): 
            $sel = "";
            if($value == $result[ 'ans3' ]){
                $sel = "selected";
            }
            ?>
        <option value="<?=$value?>" <?=$sel?>><?=$value?></option>
        <?php endforeach;?>
    </select>

    <p class="f120">▼その他の場合のみ
        具体的に<input type="text" name="ans[4]" id="ans4" value="<?=$result[ 'ans4' ]?>" class="form-control" />
    </p>

    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">4.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[4]?></dd>
    </dl>
    <select id="ans5" name="ans[5]" style="width:300px;" class="form-control">
    <option value="">-</option>
    <?php foreach($sub as $value ):
        $seimei = $value['sei'].$value['mei'];
        $sel = "";
        if($result['ans5'] == $seimei){
            $sel = "SELECTED";
        }
        ?>
        <option value="<?=$seimei?>" <?=$sel?>><?=$seimei?></option>
    <?php endforeach?>
    </select>

    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">5.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[5]?></dd>
    </dl>


    <?php

        $array = [
            "-"
            ,"20～24歳"
            ,"25～29歳"
            ,"30～34歳"
            ,"35～39歳"
            ,"40～44歳"
            ,"45～49歳"
            ,"50～54歳"
            ,"55～59歳"
            ,"60歳以上"
            ];
    ?>
    <select id="ans5" name="ans[6]" style="width:300px;" class="form-control">
        <?php foreach($array as $key=>$value): 
            $sel = "";
            if($value == $result['ans6']) $sel = "selected";
            ?>
            <option value="<?=$value?>" <?=$sel?>><?=$value?></option>
        <?php endforeach; ?>
    </select>

    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">6.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[6]?></dd>
    </dl>

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <?php if($result["ans7"] == '下位'):?>
        <?php $chk3 = "CHECKED"; ?>
        <?php $act3 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$act3?>">
            <input type="radio" name="ans[7]" value="下位" <?=$chk3?> > 下位
        </label>
        <?php if($result["ans7"] == 'どちらかといえば下位'):?>
        <?php $chk4 = "CHECKED"; ?>
        <?php $act4 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$chk4?>">
            <input type="radio" name="ans[7]" value="どちらかといえば下位" <?=$chk4?> > どちらかといえば下位
        </label>
        <?php if($result["ans7"] == 'どちらともいえない'):?>
        <?php $chk5 = "CHECKED"; ?>
        <?php $act5 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$chk5?>">
            <input type="radio" name="ans[7]" value="どちらともいえない" <?=$chk5?> > どちらともいえない
        </label>
        <?php if($result["ans7"] == 'どちらかといえば上位'):?>
        <?php $chk6 = "CHECKED"; ?>
        <?php $act6 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$chk6?>">
            <input type="radio" name="ans[7]" value="どちらかといえば上位" <?=$chk6?> > どちらかといえば上位
        </label>
        <?php if($result["ans7"] == '上位'):?>
        <?php $chk6 = "CHECKED"; ?>
        <?php $act6 = "active"; ?>
        <?php endif;?>
        <label class="btn btn-outline-secondary <?=$chk6?>">
            <input type="radio" name="ans[7]" value="上位" <?=$chk6?> > 上位
        </label>
    </div>
    
    <p style="color:red;margin-top:20px;">
    ※以下の質問では、「チーム」を「あなた、および、あなたのもとで働いているメンバー全員」とします
    </p>
    
    <dl style="margin-top:5px;">
        <dt  style="float:left;width:30px;font-weight:normal;">7.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[7]?></dd>
    </dl>

    <?php
    preg_match("/(.*)年/", $result[ 'ans8' ], $y);
    preg_match("/年(.*)か/", $result[ 'ans8' ], $m);
    ?>
    <div class="form-group" style="position:relative;">
        <label class="inline">
            <input type="number" id="ans7-1" name="ans[8]" value="<?=$result[ 'ans8' ]?>" class="form-control dates" style="width:100px;"  >
            <p style="position:absolute;top:5px;left:105px;">年</p>
        </label>
          <label class="inline" style="margin-left:20px;">
            <input type="number"  name="ans[9]"  value="<?=$result[ 'ans9' ]?>"class="form-control dates" style="width:100px;"  min="0">
            <p style="position:absolute;top:5px;left:230px;">か月</p>
        </label>
    </div>
    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">8.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[8]?></dd>
    </dl>

    <div class="form-group" style="position:relative;">
        <label class="inline">

            <input type="number" name="ans[10]"  value="<?=$result['ans10']?>" class="form-control" style="width:100px;"  min="0" >
            <p style="position:absolute;top:5px;left:105px;" >人</p>
        </label>
    </div>


    



		<div class="center" style="text-align:center;clear:both;">
            <?php if ($pager == "18") { ?>
                        <input type="submit" name="next" value="完了" class="button">
            <?php } else { ?>
                        <input type="submit" name="next" value="次ページ" class="button">
            <?php } ?>

		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="1" >
		<input type="hidden" name="m" value="<?=$_REQUEST[ 'm' ]?>">

	</form>

	</div>
<?php
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
$(function(){
    $("#ans3").change(function(){
        disabled();

    });
    setBossName();
    $("#ans5").change(function(){
        setBossName();
    });
    disabled();
});
function setBossName(){
    let val = $("#ans5").val();
    $(".bossname").text(val);
}
function disabled(){
    let ans3 = $("#ans3").val();
    if(ans3 == "その他"){
        $("#ans4").prop('disabled', false);
    }else{
        $("#ans4").prop('disabled', true);
    }
};
</script>
<style type="text/css">
<!--
input[type=radio] {
  -moz-transform-origin: right bottom;
  -moz-transform: scale( 2 , 2 );
}
:checked {
  background-color:#ccc;
  color:red;
}
p{
    padding:0;
    margin:0;
}
dl{
    margin-top:20px;
    margin-bottom:0px !important;
}
dl::after{
    clear: both;
    content: "";
    display: block;
}
//-->
</style>

<?php
include_once("include_footer.php");
