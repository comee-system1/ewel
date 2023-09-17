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
<div style="text-align:right;"><?=$pager?>/<?=$max?>ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>

	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">


        <div class="row">
            <div class="col-md-12">
                <?php $q = 3;?>
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
                <?php $q = 4;?>
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
                <?php $q = 5;?>
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

input[type="number"]::-webkit-outer-spin-button, 
input[type="number"]::-webkit-inner-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

input[type="number"] { 
  -moz-appearance:textfield; 
}

//-->
</style>
<?PHP
include_once("include_footer.php");
