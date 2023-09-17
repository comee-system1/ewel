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
<!--
<div style="text-align:right;">1/19ページ</div>
-->
<div style="text-align:right;">1/7ページ</div>
<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST" name="form1">
		<p>１．あなたの職種をお知らせください。</p>

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
                    <?php if($result['ans1'] == "管理職"){$sel[10] = "selected";}?>
                    <?php if($result['ans1'] == "施術者"){$sel[11] = "selected";}?>
                    <?php if($result['ans1'] == "相談員"){$sel[12] = "selected";}?>
                    <?php if($result['ans1'] == "事務員（パート）"){$sel[13] = "selected";}?>
                    <?php if($result['ans1'] == "ライトサポーター（パート）"){$sel[14] = "selected";}?>
                    <option value="管理職" <?=$sel[10]?>>管理職</option>
                    <option value="企画・管理" <?=$sel[1]?>>企画・管理</option>
                    <option value="施術者" <?=$sel[11]?>>施術者</option>
                    <option value="相談員" <?=$sel[12]?>>相談員</option>
                    <option value="事務員（パート）" <?=$sel[13]?>>事務員（パート）</option>
                    <option value="ライトサポーター（パート）" <?=$sel[14]?>>ライトサポーター（パート）</option>
                    <option value="一般事務" <?=$sel[2]?>>一般事務</option>
                    <option value="営業・販売" <?=$sel[3]?>>営業・販売</option>
                    <option value="企画営業・コンサルティング" <?=$sel[4]?>>企画営業・コンサルティング</option>
                    <option value="ＳＥ・プログラマー" <?=$sel[5]?>>ＳＥ・プログラマー</option>
                    <option value="技術開発" <?=$sel[6]?>>技術開発</option>
                    <option value="研究職" <?=$sel[7]?>>研究職</option>
                    <option value="生産・製造" <?=$sel[8]?>>生産・製造</option>
                    <option value="その他" <?=$sel[9]?>>その他</option>
                </select>
                <p>▼その他の場合のみ
                    具体的に<input type="text" name="ans1_text" value="<?=$result[ 'ans1_text' ]?>" class="form-control" disabled />
                </p>
                <p>２．あなたのチームのメンバー（あなたの元で働く人）は何人いますか。あなたを除いた数を半角整数値でお答えください。</p>
                <div class="form-group" style="position:relative;">
                    <input type="text" name="ans[2]" value="<?=$result[ 'ans2' ]?>" class="form-control" style="width:100px;" />
                    <p style="position:absolute;top:5px;left:105px;">名</p>
                </div>
                <p>３．あなたが今のチームのリーダーになってからどれくらい経ちますか。「〇年〇か月」という形式で、半角整数値でお答えください。</p>
                <?php
                    preg_match("/(.*)年/",$result[ 'ans3' ],$y);
                    preg_match("/年(.*)か/",$result[ 'ans3' ],$m);
                 ?>
                <div class="form-group" style="position:relative;">
                    <label class="inline">
                        <input type="text" id="ans3-1" value="<?=$y[1]?>" class="form-control dates" style="width:100px;" >
                        <p style="position:absolute;top:5px;left:105px;">年</p>
                    </label>
                      <label class="inline" style="margin-left:20px;">
                        <input type="text" id="ans3-2"  value="<?=$m[1]?>" class="form-control dates" style="width:100px;" >
                        <p style="position:absolute;top:5px;left:230px;">か月</p>
                    </label>
                    <input type="hidden" name="ans[3]" id="ans3" value="" />
                </div>
                <div class="form-group" style="position:relative;">
                    <p>４．あなたのチームの全員が集まって話す機会は、月に何回くらいありますか。</p>
                    <input type="text" name="ans[119]" value="<?=$result[ 'ans119' ]?>" class="form-control" style="width:100px;" required />
                    <p style="position:absolute;top:35px;left:105px;">回くらい</p>
				</div>
		<div class="center" style="text-align:center;clear:both;">
			<input type="submit" name="next" value="次ページ" class="button" id="nextbutton">

		</div>
		<input type="hidden" name="temp" value="page1">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage" >
		<input type="hidden" name="next" value="on" >
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<script type="text/javascript" >
$(function(){
	$(this).ans1();
        $("#ans1").on("change",function(){
            $(this).ans1();
        });
        $(this).dates();
        $(".dates").on("keyup",function(){
            $(this).dates();
        });

	$("#close").click(function(){
		if(confirm("画面を閉じます。よろしいですか？")){
			window.close();
			return false;
		}
	});
});
$.fn.dates = function(){
    var _d = $("#ans3-1").val()+"年"+$("#ans3-2").val()+"か月";
    $("#ans3").val(_d);
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
</script>
<style type="text/css">
input[type=radio] {
  -moz-transform-origin: right bottom;
  -moz-transform: scale( 2 , 2 );
}
</style>


<?PHP
include_once("include_footer.php");
