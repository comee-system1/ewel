<?PHP
$css1 = "regist";
$js[1] = "regist";
$gender = array();

$title = "客户信息登记";
$text[1]  = "個人信息属性";
$text[2]  = "姓名";
$text[3]  = "姓";
$text[4]  = "名";
$text[5]  = "";
$text[6]  = "示例";
$text[7]  = "蔡 维";
$text[8]  = "性別";
$text[9]  = "生日";
$text[10] = "年";
$text[11] = "月";
$text[12] = "日";
$text[13] = "返回";
$text[14] = "下一页";
$text[15] = "";
$text[16] = "";
$text[17] = "";
$text[18] = "";

$gender[1] = "男";
$gender[2] = "女";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
            <style type="text/css" >
                .pd10{
                    padding: 10px !important;
                }
                
            </style>
		<p class="errmsg"><?=$cookieMsg?></p>
		<h3 id="kojinh3"><?=$text[1]?></h3>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
                    
		<table id="kojinTbl">
			<tr>
				<th><?=$text[2]?></th>
				<td><span class="hissu"><?=$text[5]?></span>
					<?=$text[3]?><input type="text" name="name1" value="<?=$nam[0]?>" id="name1" class="pd10">　
					<?=$text[4]?><input type="text" name="name2" value="<?=$nam[1]?>" id="name2" class="pd10">
					<span class="explain" ><?=$text[6]?>：<?=$text[7]?></span>
				</td>
                        </tr>
			<tr>
                            <tr>
				<th><?=$text[8]?></th>
				<td>
                                    <?=filter_input( INPUT_POST,"man")?>
                                    <?=filter_input( INPUT_POST,"woman")?>
                                    
                                    <input type="hidden" name="man" value="<?=filter_input( INPUT_POST,"man")?>" />
                                    <input type="hidden" name="woman" value="<?=filter_input( INPUT_POST,"woman")?>" />
                                    
				</td>
			<tr>
			<tr>
                            <tr>
				<th><?=$text[9]?></th>
				<td>
                                    <input type="text" name="year" id="year"  value="" maxlength="4" size="4" class="pd10" />年
                                    <select name="month" class="pd10" id="month">
                                    <?php for($i=1;$i<=12;$i++) :?>
                                        <option value="<?=$i?>" ><?=$i?></option>
                                    <?php endfor;?>
                                    </select>月
                                    
                                    <select name="day" class="pd10" id="day">
                                    <?php for($i=1;$i<=31;$i++) :?>
                                        <option value="<?=$i?>" ><?=$i?></option>
                                    <?php endfor;?>
                                    </select>日
                                    
				</td>
			<tr>
		</table>
		<div id="buttonBox">
			<input type="button" id="back" value="<?=$text[13]?>" class="button" id="<?=$btn[1]?>">
			<input type="submit" name="next" value="<?=$text[14]?>" class="button" id="nextbtn" >
		</div>
		<input type="hidden" name="exam_id" value="<?=$_REQUEST[ 'exam_id' ]?>">
		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >
<!--
    $(function(){
        $("#nextbtn").click(function(){
            //20才以上はエラー
            var _year = $("#year").val();
            var _month = $("#month").val();
            var _day = $("#day").val();
            if(_year == ""){
                return false;
            }  
            var age=0;
            var now = new Date();
            var y=now.getYear();
            var m=now.getMonth()+1;
            var d=now.getDate();
            if(y<1900) {y=y+1900;}
            if(m < _month){age=y-_year-1;}
            if(m > _month){age=y-_year;}
            if(m == _month){
                if(d < _day){
                    age=y-_year-1;
                }else{
                    age=y-_year;
                }
            }
            
            if(age < 20){
                alert("20岁以下不能测试");
                return false;
            }else{
                return true;
            }
        });
    });
//-->
</script>
<?PHP
include_once("include_footer.php");
