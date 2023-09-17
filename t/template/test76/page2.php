<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20"> 
          <div class="col-md-1"><h5>3.</h5></div>
          <div class="col-md-11">
              <h5>エクスターナルブランディングとインターナルブランディングについて述べた文として<u class="text-red">誤っている選択肢</u>を下記の①～④から選べ。</h5>
          </div>
        </div>

        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">消費者・顧客に向けたブランディング活動を、エクスターナルブランディングという。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">社外での浸透度合いが高まれば、自然と社内にも浸透するため、まずはエクスターナルブランディングに注力すべきである。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">社内や協力会社に向けたブランディング活動をインターナルブランディングという。</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">社内に価値観を浸透させることができれば、社外への浸透はより容易になる。</dd>
        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select9'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans9 mr10 <?=$act?> ">
                <input type="radio" name="ans9" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          
        </div>
        <hr />


        <div class="row mt40"> 
          <div class="col-md-1"><h5>4.</h5></div>
          <div class="col-md-11">
              <h5>ブランド・マネージャーに必要とされる能力で最も適切なものの組み合わせを下記の回答群①～⑤から選べ。
              </h5>
          </div>
        </div>
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_alpha[1]?></dt>
          <dd class="col-sm-11">コミュニケーション能力</dd>
          <dt class="col-sm-1"><?=$array_alpha[2]?></dt>
          <dd class="col-sm-11">財務の知識</dd>
          <dt class="col-sm-1"><?=$array_alpha[3]?></dt>
          <dd class="col-sm-11">政治・経済の知識</dd>
          <dt class="col-sm-1"><?=$array_alpha[4]?></dt>
          <dd class="col-sm-11">プレゼンテーション能力</dd>
          <dt class="col-sm-1"><?=$array_alpha[5]?></dt>
          <dd class="col-sm-11">マーケティングの知識</dd>
        </dl>


        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">a と b と c</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">a と c と d</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">a と d と e</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">b と c と d</dd>
          <dt class="col-sm-1"><?=$array_number[5]?></dt>
          <dd class="col-sm-11">b と d と e</dd>

        </dl>
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select10'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans10 mr10 <?=$act?>">
                <input type="radio" name="ans10" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          
        </div>





        <?php include_once("include_param.php");?>
        
    </form>
  </div>
</div>

<?php
include_once("include_footer.php");
?>

