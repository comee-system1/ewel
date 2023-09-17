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
    <select name="ans[1]" class="form-control" style="width:300px;" id="ans1">
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
    <p style="margin-top:30px;color:red;">
    ※以下の質問では、「チーム」を「あなた、および、あなたのもとで働いているメンバー全員」とします。
    <br />
    ※以下の質問では、<span style="font-size:120%;">【最近1ヶ月】</span>のあなたのお仕事について伺います。


    </p>

    <dl>
        <dt  style="float:left;width:30px;font-weight:normal;">2.</dt>
        <dd  style="float:left;width:90%"><?=$array_question[2]?></dd>
    </dl>
    <table class="table table-bordered" style="width:100%;">
        <thead>
            <tr class="bg-primary text-white">
            <th scope="col" ></th>
            <th scope="col" style="width:80%;">設問</th>
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
                <td>チームの一部のメンバーとのミーティング</td>
                <td><input type="number" name="ans[3]"  value="<?=$result['ans3']?>" class="form-control" min="0"   /></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>チーム全体または一部のメンバーで、仕事のしかたの工夫（仕事の意味や範囲を見直したり、周りの人との関わり方を見直すこと）について話し合うこと</td>
                <td><input type="number" name="ans[4]"  value="<?=$result['ans4']?>" class="form-control" min="0"  /></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>チーム全体に対してフィードバック（良いところや悪いところの指摘）をすること</td>
                <td><input type="number" name="ans[5]"  value="<?=$result['ans5']?>" class="form-control" min="0"  /></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>チームのメンバー個人に対してフィードバックをすること　※たとえば「Ａさんに１回、Ｂさんに３回」の場合は合計で「４」と回答</td>
                <td><input type="number" name="ans[6]"  value="<?=$result['ans6']?>" class="form-control" min="0"  /></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td><span id="names"></span>さんと1対1で話すこと</td>
                <td><input type="number" name="ans[7]"  value="<?=$result['ans7']?>" class="form-control" min="0"  /></td>
            </tr>
        </tbody>
    </table>

    
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
    $(this).names();
    $("#ans1").change(function(){
        $(this).names();
    });

});
$.fn.names = function(){
    let val = $("#ans1").val();
    $("#names").html(val);
}
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
