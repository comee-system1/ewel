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
<div style="text-align:right;">1/5ページ</div>

<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">
            <p class="f120"><?=$array_question[1]?></p>
		<p>
<select id="ans1" name="ans[1]" style="padding:5px;" class="form-control">
    <?php $sel = [];?>
    <?php if($result['ans1'] == "企画・管理"){$sel[1] = "selected";}?>
    <?php if($result['ans1'] == "一般事務"){$sel[2] = "selected";}?>
    <?php if($result['ans1'] == "営業・販売"){$sel[3] = "selected";}?>
    <?php if($result['ans1'] == "企画営業・コンサルティング"){$sel[4] = "selected";}?>
    <?php if($result['ans1'] == "ＳＥ・プログラマー"){$sel[5] = "selected";}?>
    <?php if($result['ans1'] == "技術開発"){$sel[6] = "selected";}?>
    <?php if($result['ans1'] == "研究職"){$sel[7] = "selected";}?>
    <?php if($result['ans1'] == "生産・製造"){$sel[8] = "selected";}?>
    <?php if($result['ans1'] == "その他"){$sel[9] = "selected";}?>
    <option value="企画・管理" <?=$sel[1]?>>企画・管理</option>
    <option value="一般事務" <?=$sel[2]?>>一般事務</option>
    <option value="営業・販売" <?=$sel[3]?>>営業・販売</option>
    <option value="企画営業・コンサルティング" <?=$sel[4]?>>企画営業・コンサルティング</option>
    <option value="ＳＥ・プログラマー" <?=$sel[5]?>>ＳＥ・プログラマー</option>
    <option value="技術開発" <?=$sel[6]?>>技術開発</option>
    <option value="研究職" <?=$sel[7]?>>研究職</option>
    <option value="生産・製造" <?=$sel[8]?>>生産・製造</option>
    <option value="その他" <?=$sel[9]?>>その他</option>
</select>
		</p>
                <p class="f120">▼その他の場合のみ
                    具体的に<input type="text" name="ans1_text" value="<?=$result[ 'ans1_text' ]?>" class="form-control" disabled />
                </p>
                
                <br clear="all" />
                <p class="f140" style="color:red;" >
                    <b>以下の設問では、「チーム」を<u><?=$bossname?></u>、および、その元で働いているメンバー全員」とします。</b>
                </p>
                <p class="f120">２．あなたのチームのリーダー<u><?=$bossname?></u>について伺います。<u><?=$bossname?></u>は、何歳くらいですか。半角整数値でお答えください。</p>
                <p>
<select id="ans2" name="ans[2]" style="width:300px;" class="form-control">
    <?php $sel = [];?>
    <?php if($result['ans2'] == "30～34歳"){$sel[1] = "selected";}?>
    <?php if($result['ans2'] == "35～39歳"){$sel[2] = "selected";}?>
    <?php if($result['ans2'] == "40～44歳"){$sel[3] = "selected";}?>
    <?php if($result['ans2'] == "45～49歳"){$sel[4] = "selected";}?>
    <?php if($result['ans2'] == "50～54歳"){$sel[5] = "selected";}?>
    <?php if($result['ans2'] == "55～59歳"){$sel[6] = "selected";}?>
    <?php if($result['ans2'] == "60歳以上"){$sel[7] = "selected";}?>
    <option value="30～34歳" <?=$sel[1]?>>30～34歳</option>
    <option value="35～39歳" <?=$sel[2]?>>35～39歳</option>
    <option value="40～44歳" <?=$sel[3]?>>40～44歳</option>
    <option value="45～49歳" <?=$sel[4]?>>45～49歳</option>
    <option value="50～54歳" <?=$sel[5]?>>50～54歳</option>
    <option value="55～59歳" <?=$sel[6]?>>55～59歳</option>
    <option value="60歳以上" <?=$sel[7]?>>60歳以上</option>
</select>   
                </p>
                
                <br clear="all" />
                <p class="f120">３．<u><?=$bossname?></u> は、男性ですか、女性ですか。</p>

    <?php $sel = [];?>
    <?php if($result['ans3'] == "男性"){$sel[1] = "checked";}?>
    <?php if($result['ans3'] == "女性"){$sel[2] = "checked";}?>
                    
                    
    <div class="form-group">
        <div class="col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" name="ans[3]" value="男性" class="gender" <?=$sel[1]?>>男性
            </label>
　　　　　　　<label class="checkbox-inline">
                <input type="checkbox" name="ans[3]" value="女性" class="gender" <?=$sel[2]?>>女性
            </label>
        </div>
    </div>
                <br clear="all" />
                <br clear="all" />
                 <p class="f120">４．現在のチームで働き始めてからどれくらい経ちますか。「〇年〇か月」という形式で半角整数値でお答えください。</p>
                 <?php
                    preg_match("/(.*)年/",$result[ 'ans4' ],$y);
                    preg_match("/年(.*)か/",$result[ 'ans4' ],$m);
                 ?>
    <div class="form-group" style="position:relative;">
        <label class="inline">
            <input type="text" id="ans4-1" value="<?=$y[1]?>" class="form-control dates" style="width:100px;" >
            <p style="position:absolute;top:5px;left:105px;">年</p>
        </label>
          <label class="inline" style="margin-left:20px;">
            <input type="text" id="ans4-2"  value="<?=$m[1]?>" class="form-control dates" style="width:100px;" >
            <p style="position:absolute;top:5px;left:230px;">か月</p>
        </label>
        <input type="hidden" name="ans[4]" id="ans4" value="" />
    </div>
                
    <p class="f120">５．あなたのチームのメンバーは、何人いますか。<u><?=$bossname?></u>を除いた数を半角整数値でお答えください。</p>
    <div class="form-group" style="position:relative;">
        <label class="inline">
            
            <input type="text" name="ans[5]" id="ans5" value="<?=$result['ans5']?>" class="form-control" style="width:100px;" >
            <p style="position:absolute;top:5px;left:105px;">名</p>
        </label>
    </div>
    
    
    
		<div class="center" style="text-align:center;clear:both;">
<?PHP if($pager == "18"){ ?>
			<input type="submit" name="next" value="完了" class="button">
<?PHP }else{ ?>
			<input type="submit" name="next" value="次ページ" class="button">
<?PHP } ?>

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
	$(this).ans1();
        $("#ans1").on("change",function(){
            $(this).ans1();
        });
        $(".gender").on("click",function(){
            $(".gender").prop("checked",false);
            $(this).prop("checked",true);
        });
        
        $(this).dates();
        $(".dates").on("keyup",function(){
            $(this).dates();
        });
        $("[name='next']").click(function(){
           var _c = $(".gender:checked").length;
           if(_c == 0 ){
               alert("3が選択されていません");
                return false;
            }
        });
 
        
	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
});
$.fn.dates = function(){
    var _d = $("#ans4-1").val()+"年"+$("#ans4-2").val()+"か月";
    $("#ans4").val(_d);
};
$.fn.ans1=function(){
    var _ans1 = $("#ans1").val();
    if(_ans1 == "その他"){
        $("[name=ans1_text]").prop("disabled",false);
    }else{
        $("[name=ans1_text]").prop("disabled",true);
        $("[name=ans1_text]").val("");
    }
};
//-->
</script>
<style type="text/css">
<!--
input[type=radio] {
  -moz-transform-origin: right bottom;
  -moz-transform: scale( 2 , 2 );
}
//-->
</style>

<?PHP
include_once("include_footer.php");
