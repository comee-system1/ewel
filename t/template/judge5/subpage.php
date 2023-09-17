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
		
        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">1.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[1]?></dd>
        </dl>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <?php if($result["ans1"] == '男性'):?>
            <?php $chk1 = "CHECKED"; ?>
            <?php // $act1 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$act1?>">
                <input type="radio" name="ans[1]" value="男性" <?=$chk1?> > 男性
            </label>
            <?php if($result["ans1"] == '女性'):?>
            <?php $chk2 = "CHECKED"; ?>
            <?php // $act2 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$act2?>">
                <input type="radio" name="ans[1]" value="女性" <?=$chk2?> > 女性
            </label>
            <?php if($result["ans1"] == 'その他'):?>
            <?php $chk3 = "CHECKED"; ?>
            <?php // $act3 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$act3?>">
                <input type="radio" name="ans[1]" value="その他" <?=$chk3?> > その他
            </label>
            <?php if($result["ans1"] == '回答しない'):?>
            <?php $chk3 = "CHECKED"; ?>
            <?php // $act3 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$act3?>">
                <input type="radio" name="ans[1]" value="回答しない" <?=$chk3?> > 回答しない

            </label>
        </div>

        <dl class="mt-3">
            <dt  style="float:left;width:30px;font-weight:normal;">2.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[2]?></dd>
        </dl>
        <div class="row" style="width:200px;">
            <div class="col"> 
                <input type="number" name="ans[2]" value="<?=$result["ans2"]?>"  class="form-control" style="width:100px;"  min="0" /> 
            </div>
            <div class="col"> 
                <label class="form-control-label" style="margin-left:-20px;margin-top:12px;" min="10" max="100">歳</label>
            </div>
        </div>
        <p style="color:red;margin-top:20px;">
            ※以下の質問に対し複数の企業にお勤めの場合は勤務時間が最も長いものについてお答えください。 
        </p>

        <dl style="margin-top:5px;">
            <dt  style="float:left;width:30px;font-weight:normal;">3.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[3]?></dd>
        </dl>


        <?php
        $array = [
            "-",
            "企画・管理",
            "一般事務",
            "営業・販売",
            "企画営業・コンサルティング",
            "SE・プログラマー",
            "技術開発",
            "研究職",
            "生産・製造",
            "医療・介護",
            "教育・保育",
            "その他", 
            ];
            
        ?>
        <select  name="ans[3]" id="ans3" style="padding:5px;width:300px;" class="form-control">
            <?php 
                foreach($array as $value): 
                $sel = "";
                if($value == $result[ 'ans3' ]){
                    $sel = "selected";
                }
                ?>
            <option value="<?=$value?>" <?=$sel?> ><?=$value?></option>
            <?php endforeach;?>
        </select>

        <p class="f120">▼その他の場合のみ
            具体的に<input type="text" name="ans[4]" id="ans4" value="<?=$result[ 'ans4' ]?>" class="form-control" />
        </p>

        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">4.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[4]?></dd>
        </dl>

        <select id="ans5" name="ans[5]" style="width:300px;" class="form-control">
            <?php $sel = [];?>
            <?php if ($result['ans5'] == "20～24歳") {
            $sel[1] = "selected";
            }?>
            <?php if ($result['ans5'] == "25～29歳") {
            $sel[1] = "selected";
            }?>
            <?php if ($result['ans5'] == "30～34歳") {
            $sel[2] = "selected";
            }?>
            <?php if ($result['ans5'] == "35～39歳") {
            $sel[3] = "selected";
            }?>
            <?php if ($result['ans5'] == "40～44歳") {
            $sel[4] = "selected";
            }?>
            <?php if ($result['ans5'] == "45～49歳") {
            $sel[5] = "selected";
            }?>
            <?php if ($result['ans5'] == "50～54歳") {
            $sel[6] = "selected";
            }?>
            <?php if ($result['ans5'] == "55～59歳") {
            $sel[7] = "selected";
            }?>
            <?php if ($result['ans5'] == "60歳以上") {
            $sel[8] = "selected";
            }?>
            <option value="" >-</option>
            <option value="20～24歳" <?=$sel[1]?>>20～24歳</option>
            <option value="25～29歳" <?=$sel[2]?>>25～29歳</option>
            <option value="30～34歳" <?=$sel[3]?>>30～34歳</option>
            <option value="35～39歳" <?=$sel[4]?>>35～39歳</option>
            <option value="40～44歳" <?=$sel[5]?>>40～44歳</option>
            <option value="45～49歳" <?=$sel[6]?>>45～49歳</option>
            <option value="50～54歳" <?=$sel[7]?>>50～54歳</option>
            <option value="55～59歳" <?=$sel[8]?>>55～59歳</option>
            <option value="60歳以上" <?=$sel[9]?>>60歳以上</option>
        </select>

        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">5.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[5]?></dd>
        </dl>
        <?php
            $array = [
                "-"
                ,"社長、またはそれに相当する職位"
                ,"役員、またはそれに相当する職位"
                ,"部長、またはそれに相当する職位"
                ,"課長、またはそれに相当する職位"
                ,"主任、またはそれに相当する職位"
                ];

        ?>
        <select id="ans5" name="ans[6]" style="width:300px;" class="form-control">
            <?php foreach($array as $key=>$value): 
                $sel = "";
                if($value == $result['ans6']) $sel = "selected";
                ?>
                <option value="<?=$value?>" <?=$sel?>><?=$value?></option>
            <?php endforeach; ?>
        </select>

        <p style="color:red;margin-top:20px;">
        ※以下の質問では、「チーム」を「<span class="bossname"><?=$bossname?></span>さん、および、そのもとで働いているメンバー全員」とします。
        </p>
        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">6.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[6]?></dd>
        </dl>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <?php if($result["ans7"] == '下位'):?>
            <?php $chk3 = "CHECKED"; ?>
            <?php $act3 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$act3?>">
                <input type="radio" name="ans[7]" value="下位" <?=$chk3?> > 下位
            </label>
            <?php if($result["ans7"] == 'どちらかといえば下位'):?>
            <?php $chk4 = "CHECKED"; ?>
            <?php $act4 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$chk4?>">
                <input type="radio" name="ans[7]" value="どちらかといえば下位" <?=$chk4?> > どちらかといえば下位
            </label>
            <?php if($result["ans7"] == 'どちらともいえない'):?>
            <?php $chk5 = "CHECKED"; ?>
            <?php $act5 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$chk5?>">
                <input type="radio" name="ans[7]" value="どちらともいえない" <?=$chk5?> > どちらともいえない
            </label>
            <?php if($result["ans7"] == 'どちらかといえば上位'):?>
            <?php $chk6 = "CHECKED"; ?>
            <?php $act6 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$chk6?>">
                <input type="radio" name="ans[7]" value="どちらかといえば上位" <?=$chk6?> > どちらともいえない
            </label>
            <?php if($result["ans7"] == '上位'):?>
            <?php $chk6 = "CHECKED"; ?>
            <?php $act6 = "active"; ?>
            <?php endif;?>
            <label class="btn btn-outline-secondary <?=$chk6?>">
                <input type="radio" name="ans[7]" value="上位" <?=$chk6?> > 上位
            </label>
        </div>


        
        <dl style="margin-top:5px;">
            <dt  style="float:left;width:30px;font-weight:normal;">7.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[7]?></dd>
        </dl>

        <?php
        preg_match("/(.*)年/", $result[ 'ans8' ], $y);
        preg_match("/年(.*)か/", $result[ 'ans8' ], $m);
        ?>
        <div class="form-group" style="position:relative;">
            <label class="inline">
                <input type="number" id="ans7-1" name="ans[8]" value="<?=$result[ 'ans8' ]?>" class="form-control dates" style="width:100px;"  >
                <p style="position:absolute;top:5px;left:105px;">年</p>
            </label>
            <label class="inline" style="margin-left:20px;">
                <input type="number"  name="ans[9]"  value="<?=$result[ 'ans9' ]?>"class="form-control dates" style="width:100px;"  min="0">
                <p style="position:absolute;top:5px;left:230px;">か月</p>
            </label>
        </div>
        <dl>
            <dt  style="float:left;width:30px;font-weight:normal;">8.</dt>
            <dd  style="float:left;width:90%"><?=$array_question[8]?></dd>
        </dl>

        <div class="form-group" style="position:relative;">
            <label class="inline">

                <input type="number" name="ans[10]"  value="<?=$result['ans10']?>" class="form-control" style="width:100px;"  min="0" >
                <p style="position:absolute;top:5px;left:105px;" >人</p>
            </label>
        </div>

        <div class="row">
            <div class="col-md-12">
  
                <dl>
                    <dt  style="float:left;width:30px;font-weight:normal;">9.</dt>
                    <dd  style="float:left;width:90%"><?=$array_question[9]?></dd>
                </dl>
                <table class="table table-bordered" style="width:600px;">
                    <thead>
                        <tr class="bg-primary text-white">
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

</style>


<?PHP
include_once("include_footer.php");
