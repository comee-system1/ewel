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
    <select name="ans[1]" class="form-control" style="width:300px;">
        <option value="">-</option>
        <?php foreach($sub as $key=>$value):
            if(!$value['bossflg']):
                $sel = "";
                if($result[ 'ans1' ] == $value[ 'sei' ].$value[ 'mei' ]) $sel = "selected";
        ?>
            <option value="<?=$value[ 'sei' ]?><?=$value[ 'mei' ]?>" <?=$sel?> ><?=$value[ 'sei' ]?><?=$value[ 'mei' ]?></option>
        <?php endif; ?>
        <?php endforeach;?>
    </select>
    <p style="margin-top:30px;color:red;">※以下の質問では、「チーム」を「あなた、および、その下で働いているメンバー全員」とします。
    <br />
    ※以下の質問では、<span style="font-size:120%;">【最近1ヶ月】</span>のあなたのお仕事について伺います。


    </p>

    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">2.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[2]?></dd>
    </dl>
    <table class="table table-bordered" style="width:600px;">
        <thead>
            <tr class="bg-primary text-white">
            <th scope="col" ></th>
            <th scope="col" style="width:400px;">設問</th>
            <th scope="col">回数</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>チーム全体のミーティング</td>
                <td><input type="number" name="ans[2]"  value="<?=$result['ans2']?>" class="form-control" min="0"   /></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>事前に決めて、一部のメンバーで集まって話すこと</td>
                <td><input type="number" name="ans[3]"  value="<?=$result['ans3']?>" class="form-control" min="0"   /></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>事前に決めずに、一部のメンバーで集まって話すこと</td>
                <td><input type="number" name="ans[4]"  value="<?=$result['ans4']?>" class="form-control" min="0"  /></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>チームのメンバーにフィードバックをすること（メンバー個人に対してとメンバー全員に対してをすべて足した回数をお答えください）</td>
                <td><input type="number" name="ans[5]"  value="<?=$result['ans5']?>" class="form-control" min="0"  /></td>
            </tr>
        </tbody>
    </table>

    <?php $q=3; ?>
    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">3.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[3]?></dd>
    </dl>

    <table class="table table-bordered">
        <tr class="bg-primary">
            <th></th>
            <th style="width:80%;color:white;">設問</th>
            <th style="color:white;">割合</th>
        </tr>
        <?php foreach($line[$q] as $key=>$val):
            $a = "ans".$val[ 'key' ];
            ?>
        <tr >
            <td>(<?=$key?>)</td>
            <td><?=$val[ 'q' ]?></td>
            <td>
                
                <input type="number" class="form-control form-control-sm counter" name="ans[<?=$val[ 'key' ]?>]" value="<?=$result[$a]?>"/>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <div class="text-end">
        (1)～(4)の合計:<span id='total'>0</span>
    </div>
    <?php $q=4; ?>
    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
    </dl>

    <div class="text-end" style="float:right;">
        <input type="number" style="width:100px;" class="form-control form-control-sm" name="ans[10]" value="<?=$result["ans10"]?>" />
    </div>
    <br clear=all />


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
    $(this).counter();
    $(".counter").keyup(function(){
        $(this).counter();
    });

});
$.fn.counter = function(){
    let plus = 0;
    $(".counter").each(function(index,val){
        let value =  parseInt($(this).val()) ? parseInt($(this).val()) :0;
        plus += value;
    });
    $("#total").text(plus);
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
