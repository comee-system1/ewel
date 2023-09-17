<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>36.</h5></div>
          <div class="col-md-11">
              <h5>次の文章はピーター・ドラッカーによる、マーケティングの定義に関する説明である。文中の1～3に入る<u class="text-blue">最も適切な選択肢</u>を①～⑧の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            <p>
            マーケティングの狙いは（　1　）を不要にすることだ。マーケティングの狙いは（　2　）を知り尽くし、理解し尽くして、製品やサービスが（　2　）にぴったりと合うものになり、（　3　）ようにすることである。
            </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：セリング</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：顧客</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：ニーズ</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：販売促進</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：ひとりでに売れる</li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[6]?>：売上アップする</li>
          <li class="list-group-item bordernone"><?=$array_number[7]?>：業績が安定する</li>
          <li class="list-group-item bordernone"><?=$array_number[8]?>：シェアが拡大する</li>
        </ul>
        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(1)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=8;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select54'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans54 <?=$act?>">
                <input type="radio" name="ans54" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=8;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select55'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans55 <?=$act?>">
                <input type="radio" name="ans55" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=8;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select56'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans56 <?=$act?>">
                <input type="radio" name="ans56" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
        </dl>

        
        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>37.</h5></div>
          <div class="col-md-11">
              <h5>
              マーケティングとは何か、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">売り込む手段</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">売る仕組みづくり</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">売れる仕組みづくり</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">売れ続ける仕組みづくり</div>
        </div>
                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select57'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans57 <?=$act?>">
                <input type="radio" name="ans57" value="<?=$i?>" <?=$chk?> class="indent" >
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

