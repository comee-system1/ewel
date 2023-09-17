<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>19.</h5></div>
          <div class="col-md-11">
              <h5>
                ブランドの想起の1つである「ブランド再認」に関する説明で、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランド要素に接した際に、特定のブランドを認識すること。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ブランド価値の向上により、ブランドへの意識が強まること。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">あるカテゴリー（ジャンル）を言われたときに特定のブランド名を思い起すこと。また、消費者・顧客にニーズが発生した際、特定のブランド名を直接、思い起こすこと。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">普段の何気ない日常生活の中で、突如ブランドを思い出すこと。</div>
        </div>
        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select29'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans29 <?=$act?>">
                <input type="radio" name="ans29" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>20.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの想起の1つである「ブランド再生」に関する説明で、最も適切な選択肢を回答群①～⑥から選べ。
              </h5>
          </div>
        </div>
        
        
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_alpha[1]?></dt>
          <dd class="col-sm-11">ブランド要素に接した際に、特定のブランドを認識すること。</dd>
          <dt class="col-sm-1"><?=$array_alpha[2]?></dt>
          <dd class="col-sm-11">ブランド価値の向上により、ブランドへの意識が強まること。</dd>
          <dt class="col-sm-1"><?=$array_alpha[3]?></dt>
          <dd class="col-sm-11">あるカテゴリー（ジャンル）を言われたときに特定のブランド名を思い起すこと。また、消費者・顧客にニーズが発生した際、特定のブランド名を直接、思い起こすこと。</dd>

        </dl>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>

        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">aとb</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">aとc</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">bとc</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">a</dd>
          <dt class="col-sm-1"><?=$array_number[5]?></dt>
          <dd class="col-sm-11">b</dd>
          <dt class="col-sm-1"><?=$array_number[6]?></dt>
          <dd class="col-sm-11">c</dd>

        </dl>


        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select30'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans30 <?=$act?>">
                <input type="radio" name="ans30" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>


        


        <?php include_once("include_param.php");?>
        
    </form>
  </div>
</div>

<?php
include_once("include_footer.php");
?>

