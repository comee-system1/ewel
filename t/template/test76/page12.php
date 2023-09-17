<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>26.</h5></div>
          <div class="col-md-11">
              <h5>
              「ブランド要素」に関する記述について<u class="text-red">誤っている選択肢</u>を下記の①～④から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランド要素は、ブランドを識別させるコントロール可能な最小単位の要素であり、その主な機能は、「他の商品・サービスと区別する手段」である</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ブランド要素は、コントロール可能なものであり、コントロール不可能なものは、企業側が意図するブランド要素にはなり得ない</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">ブランド要素は、ブランド体験で活用する媒体であり、カタログやチラシ、HPなど、様々な種類がある。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ブランド要素は、「他の商品・サービスと区別する手段」であるから、ブランド要素として機能しているか否かは、消費者・顧客がその要素に触れたときに、ある特定のブランドを思い起こすかが基準となる</div>
        </div>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select44'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans44 <?=$act?>">
                <input type="radio" name="ans44" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>
        
        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>27.</h5></div>
          <div class="col-md-11">
              <h5>
              「ブランド要素」には、9つの要素がある。6つは「ブランド名」「ロゴ、マーク」「タグライン」「パッケージ、空間デザイン」「ジングル・音楽」「ドメイン（URL）」である。残りの3つとして、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">キャラクター、広告、DM</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">キャラクター、デザイン、形状</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">キャラクター、色、匂い</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">広告、デザイン、匂い</div>
        </div>

                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select45'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans45 <?=$act?>">
                <input type="radio" name="ans45" value="<?=$i?>" class="indent" <?=$chk?>>
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

