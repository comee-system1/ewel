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
<div style="text-align:right;">2/<?=$max?>ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST" name="form1">
        <p class="text-danger">
        以下の質問では、【最近１か月】のあなたのお仕事について伺います。
        </p>
        <div class="row">
            <div class="col-md-12">
                <?php $q = 10;?>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
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

            <div class="col-md-12">
                <?php $q = 11;?>
                <dl>
                    <dt style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th></th>
                        <th style="width:80%;">設問</th>
                        <th>割合</th>
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
            </div>
            <div class="col-md-12">
                <?php
                    $q = 12;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <div  style="position:relative;">
                    <input type="number" style="width:100px;" class="form-control form-control-sm" name="ans[<?=$line[$q][1][ 'key' ]?>]" value="<?=$result[$a]?>"/>
                    <span style="position:absolute;top:0px;left:120px">%</span>
                </div>
            </div>



        </div>
       

           

		<div class="center" style="text-align:center;clear:both;">
        <input type="submit" name="pageBack" value="戻る" class="button">
			<input type="submit" name="next" value="次ページ" class="button" id="nextbutton">
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

input[type="number"]::-webkit-outer-spin-button, 
input[type="number"]::-webkit-inner-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

input[type="number"] { 
  -moz-appearance:textfield; 
}
</style>


<?PHP
include_once("include_footer.php");
