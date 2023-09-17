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
                <?php $q = 22;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">18.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white text-center align-middle">
                        <th rowspan="2"></th>
                        <th  rowspan="2">設問</th>
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr class="bg-primary text-white">
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
                <?php $q = 23;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">19.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white text-center align-middle">
                        <th rowspan="2"></th>
                        <th  rowspan="2">設問</th>
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr class="bg-primary text-white">
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
                <?php $q = 24;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">20.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white text-center align-middle">
                        <th rowspan="2"></th>
                        <th  rowspan="2">設問</th>
                        <?php foreach($ans[$q] as $key=>$val):?>
                        <th class="n"><?=$key?></th>
                        <?php endforeach;?>
                    </tr>
                    <tr class="bg-primary text-white">
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
            <div class="col-md-12" style="float:right;">
                <?php $q = 25;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">21.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <!-- 20220908 山本カウントアップ追加 -->
                <textarea id="countUp-1" class="form-control keyup" maxlength=500 rows=6 name="ans[<?=$line[$q][1][ 'key' ]?>]" ><?=$result[$a]?></textarea>
                <div style="float: right;"><span id="count1">0</span>/500</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $q = 26;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">22.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <!-- 20220908 山本カウントアップ追加 -->
                <textarea id="countUp-2" class="form-control keyup" maxlength=500 rows=6 name="ans[<?=$line[$q][1][ 'key' ]?>]" ><?=$result[$a]?></textarea>
                <div style="float: right;"><span id="count2">0</span>/500</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $q = 27;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">23.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <!-- 20220908 山本カウントアップ追加 -->
                <textarea id="countUp-3" class="form-control keyup" maxlength=500 rows=6 name="ans[<?=$line[$q][1][ 'key' ]?>]" ><?=$result[$a]?></textarea>
                <div style="float: right;"><span id="count3">0</span>/500</div>
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

// 文字数カウント　山本
$(function() {
    var count1 = $('#countUp-1').val().length;
    var count2 = $('#countUp-2').val().length;
    var count3 = $('#countUp-3').val().length;
    $('#count1').text(count1);
    $('#count2').text(count2);
    $('#count3').text(count3);

    $('.keyup').keyup(function() {
        var count = $(this).val().length;
        var id = $(this).attr("id").split("-")[1];
        $('#count'+id).text(count);
    });

});




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
