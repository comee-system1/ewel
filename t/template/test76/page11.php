<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>24.</h5></div>
          <div class="col-md-11">
              <h5>
                次の文章はブランド構築に関する説明である。文中の1～3に入る<u class="text-blue">最も適切な選択肢</u>はどれか。回答群の①～④から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <p>
          ブランド構築とは、消費者・顧客のいだく（　1　）と、企業が製品・サービスによって提案したいブランド価値を表す（　2　）を（　3　）させる活動である。
          </p>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：ブランド・イメージ</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：ブランド・アイデンティティ</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item bordernone"><?=$array_number[3]?>：一致</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：明確化</li>
        </ul>

        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(1)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select37'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans37 <?=$act?>">
                <input type="radio" name="ans37" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select38'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans38 <?=$act?>">
                <input type="radio" name="ans38" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select39'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans39 <?=$act?>">
                <input type="radio" name="ans39" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>

        </dl>
        
        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>25.</h5></div>
          <div class="col-md-11">
              <h5>
                次の文章はブランド構築に関する説明である。文中の1～4に入る<u class="text-blue">最も適切な選択肢</u>はどれか。回答群の①～⑥から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <p>
          ブランド・マネージャーの活動として特に重要なのは、消費者・顧客の心の中に意図した反応を起こすために、（　1　）、（　2　）が一貫して（　3　）を表現する刺激となるよう、（　4　)・運用管理し続けることである。
          </p>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：ブランド要素</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：ブランド体験</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：ブランド・イメージ</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          
          <li class="list-group-item bordernone"><?=$array_number[4]?>：ブランド・アイデンティティ</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：設計</li>
          <li class="list-group-item bordernone"><?=$array_number[6]?>：実行</li>
        </ul>

        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(1)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select40'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans40 <?=$act?>">
                <input type="radio" name="ans40" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select41'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans41 <?=$act?>">
                <input type="radio" name="ans41" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select42'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans42 <?=$act?>">
                <input type="radio" name="ans42" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(4)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select43'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans43 <?=$act?>">
                <input type="radio" name="ans43" value="<?=$i?>" <?=$chk?> class="indent" >
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

