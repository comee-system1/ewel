<?PHP
$css1 = "guide";
$title = "受検";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">
<?PHP
	include_once("include_title.php");

?>
<div style="text-align:right;">1/<?=$max?>ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST" name="form1">
		<p style="color:red;">
        ※以下の質問では、「チーム」を「<?=$bossname?>さん、および、そのもとで働いているメンバー全員」とします。
        <br />
        ※以下の質問では、【<span style="font-size:18px;">最近1ヶ月</span>】のあなたのお仕事について伺います。

        </p>
        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">1.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[1]?></dd>
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
                    <td><input type="number" name="ans[1]"  value="<?=$result['ans1']?>" class="form-control" min="0"   /></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>チームの一部のメンバーとのミーティング</td>
                    <td><input type="number" name="ans[2]"  value="<?=$result['ans2']?>" class="form-control" min="0"   /></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>チーム全体または一部のメンバーで、仕事のしかたの工夫（仕事の意味や範囲を見直したり、周りの人との関わり方を見直すこと）について話し合うこと</td>
                    <td><input type="number" name="ans[3]"  value="<?=$result['ans3']?>" class="form-control" min="0"  /></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?=$bossname?>さんがチーム全体に対してフィードバック（良いところや悪いところの指摘）をすること</td>
                    <td><input type="number" name="ans[4]"  value="<?=$result['ans4']?>" class="form-control" min="0"  /></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><?=$bossname?>さんがチームのメンバー個人に対してフィードバックをすること　※たとえば「Ａさんに１回、Ｂさんに３回」の場合は合計で「４」と回答。明確に分からない場合は推測で構いません。</td>
                    <td><input type="number" name="ans[5]"  value="<?=$result['ans5']?>" class="form-control" min="0"  /></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><?=$bossname?>さんと1対1で話すこと</td>
                    <td><input type="number" name="ans[6]"  value="<?=$result['ans6']?>" class="form-control" min="0"  /></td>
                </tr>
            </tbody>
        </table>

        <div class="col-md-12">
            <?php $q = 2;?>
            <dl>
                <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
            </dl>
            <?php foreach($ans[$q] as $key=>$val):?>
                <div style="margin-bottom:10px;">
                    <label>
                    <input type="radio" name="ans[7]" value="<?=$key?>" />
                    <?=$val?>
                    </label>
                </div>
            <?php endforeach;?>

        </div>

		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="next" value="次ページ" class="button" id="nextbutton">

		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="1" id="nextPage" >
		<input type="hidden" name="next" value="on" >
		<input type="hidden" name="m" value="<?=$_REQUEST[ 'm' ]?>">

	</form>

	</div>
<?PHP
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
input[type=radio] {
    width: 30px;
    height: 30px;
    vertical-align: middle;
}
</style>


<?PHP
include_once("include_footer.php");
