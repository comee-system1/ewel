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
                <p class="text-danger">
                ※以下の質問では、「チーム」を「あなた、および、そのもとで働いているメンバー全員」とします。<br />
                ※以下の質問では、【最近１か月】のあなたのお仕事について伺います。
                </p>
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">9.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[9]?></dd>
                </dl>
                <table class="table table-bordered" style="width:600px;">
                    <thead>
                        <tr class="bg-primary">
                        <th scope="col" ></th>
                        <th scope="col" style="width:400px;">設問</th>
                        <th scope="col">回数</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>チーム全体のミーティング</td>
                            <td><input type="number" name="ans[11]"  value="<?=$result['ans11']?>" class="form-control" min="0"   /></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>事前に決めて、一部のメンバーで集まって話すこと</td>
                            <td><input type="number" name="ans[12]"  value="<?=$result['ans12']?>" class="form-control" min="0"   /></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>事前に決めずに、一部のメンバーで集まって話すこと</td>
                            <td><input type="number" name="ans[13]"  value="<?=$result['ans13']?>" class="form-control" min="0"  /></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><?=$bossname?>さんと1対1で話すこと</td>
                            <td><input type="number" name="ans[14]"  value="<?=$result['ans14']?>" class="form-control" min="0"  /></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-md-12">
                <?php $q = 10;?>
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
                    $q = 11;
                    $a = "ans".$line[$q][1][ 'key' ];
                ?>
                <dl>
                    <dt style="float:left;width:30px;font-weight:normal;"><?=$q?>.</dt>
                    <dd style="float:left;width:90%"><?=$array_question[$q]?></dd>
                </dl>
                <div class="text-end" >
                    <input type="number" style="width:100px;" class="form-control form-control-sm" name="ans[<?=$line[$q][1][ 'key' ]?>]" value="<?=$result[$a]?>"/>
                </div>
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
