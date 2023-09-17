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
<div style="text-align:right;">7/<?=$max?>ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST" name="form1">

        <div class="row">
            <div class="col-md-12">
                <?php $q = 14;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text16_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text16">0</b>/400)</div>
            </div>
            <div class="col-md-12">
                <?php $q = 15;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text17_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text17">0</b>/400)</div>
            </div>
            <div class="col-md-12">
                <?php $q = 16;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text18_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text18">0</b>/400)</div>
            </div>
        </div>


		<div class="center" style="text-align:center;clear:both;">
        <input type="submit" name="pageBack" value="戻る" class="button">
			<input type="submit" name="next" value="完了" class="button" id="nextbutton">

		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage" >
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
    $(this).counter("text16");
    $(this).counter("text17");
    $(this).counter("text18");

    $("#text16_Text").keyup(function(){
        $(this).counter("text16");
    });
    $("#text17_Text").keyup(function(){
        $(this).counter("text17");
    });
    $("#text18_Text").keyup(function(){
        $(this).counter("text18");
    });


});
$.fn.counter = function(type){
    let plus = 0;
    let length = $("#"+type+"_Text").val().length;
    $("#"+type).html(length);

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

table th{
    color:white;
}

input[type=radio] {
    width: 30px;
    height: 30px;
    vertical-align: middle;
}
</style>


<?PHP
include_once("include_footer.php");
