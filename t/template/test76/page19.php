<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>41.</h5></div>
          <div class="col-md-11">
              <h5>
              以下の図は、ブランド構築のステップを表したものである。図の中のa～fに入る<u class="text-blue">最も適切な選択肢</u>を回答群①～⑥の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            <p class="image">
              <img src="/template/test76/img2.png" /><br />
              図
            </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：ポジショニング</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：4P／4C</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：セグメンテーション</li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[4]?>：3C分析／PEST分析</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：ブランド要素／ブランド体験</li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[6]?>：ターゲティング</li>
        </ul>
        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(<?=$array_alpha[1]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select66'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans66 <?=$act?> ">
                <input type="radio" name="ans66" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(<?=$array_alpha[2]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select67'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans67 <?=$act?>">
                <input type="radio" name="ans67" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(<?=$array_alpha[3]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select68'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans68 <?=$act?>">
                <input type="radio" name="ans68" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(<?=$array_alpha[4]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select69'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans69 <?=$act?>">
                <input type="radio" name="ans69" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>

          <dt class="col-sm-1">空欄(<?=$array_alpha[5]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select70'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans70 <?=$act?>">
                <input type="radio" name="ans70" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(<?=$array_alpha[6]?>)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select71'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans71 <?=$act?>">
                <input type="radio" name="ans71" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>

        </dl>



        <?php include_once("include_param.php");?>
        
    </form>
  </div>
</div>

<?php
include_once("include_footer.php");
?>

