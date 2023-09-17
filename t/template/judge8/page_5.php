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
<div style="text-align:right;">5/<?=$max?>ページ</div>
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
                <?php $q = 10;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th rowspan="2"></th>
                        <th  rowspan="2">設問</th>
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr class="bg-primary">
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>
                    <?php 
                        $num = 1;
                        foreach($line[$q] as $value ):
                    ?>
                        <tr>
                            <td><?=$num?></td>
                            <td><?=$value[ 'q' ]?></td>
                            <?php foreach($ans[$q] as $key=>$val):
                                    $chk = "";
                                    $a = "ans".$value[ 'key' ];
                                    if($result[$a] == $key ){
                                        $chk = "checked";
                                    }
                                ?>
                            <td class="text-center"><input type="radio" name="ans[<?=$value[ 'key' ]?>]" value="<?=$key?>" <?=$chk?> /></td>
                            <?php 
                                endforeach;
                            ?>
                        </tr>
                    <?php 
                        $num ++ ;
                        endforeach;
                        ?>
                    
                </table>
            </div>
            <div class="col-md-12">
                <?php $q = 11;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th rowspan="2"></th>
                        <th  rowspan="2">設問</th>
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr class="bg-primary">
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th><?=$val?></th>
                        <?php endforeach;?>
                    </tr>
                    <?php 
                        $num = 1;
                        foreach($line[$q] as $value ):
                    ?>
                        <tr>
                            <td><?=$num?></td>
                            <td><?=$value[ 'q' ]?></td>
                            <?php foreach($ans[$q] as $key=>$val):
                                    $chk = "";
                                    $a = "ans".$value[ 'key' ];
                                    if($result[$a] == $key ){
                                        $chk = "checked";
                                    }
                                ?>
                            <td class="text-center"><input type="radio" name="ans[<?=$value[ 'key' ]?>]" value="<?=$key?>" <?=$chk?> /></td>
                            <?php 
                                endforeach;
                            ?>
                        </tr>
                    <?php 
                        $num ++ ;
                        endforeach;
                        ?>
                    
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <?php $q = 12;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text12_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text12">0</b>/400)</div>

            </div>
            <div class="col-md-12">
                <?php $q = 13;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text13_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text13">0</b>/400)</div>

            </div>
            <div class="col-md-12">
                <?php $q = 14;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text14_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text14">0</b>/400)</div>
            </div>
            <div class="col-md-12">
                <?php $q = 15;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <textarea maxlength=400 class="form-control" rows=6  name="ans[<?=$line[$q][1][ 'key' ]?>]" id="text15_Text" ><?=$result[$a]?></textarea>
                <div class="text-end">(<b id="text15">0</b>/400)</div>

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
    $(this).countup();
    $("textarea").keyup(function(){
        $(this).countup();
    });

});
$.fn.countup = function(){
    let value12 =  $("#text12_Text").val().length;
    $("#text12").html(value12);
    let value13 =  $("#text13_Text").val().length;
    $("#text13").html(value13);
    let value14 =  $("#text14_Text").val().length;
    $("#text14").html(value14);
    let value15 =  $("#text15_Text").val().length;
    $("#text15").html(value15);
}

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
