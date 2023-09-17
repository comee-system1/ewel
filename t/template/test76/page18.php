<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>40.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランドが、消費者・顧客の心の中のマインドシェアを上げていくプロセスを表した図の中で、1～4に入る<u class="text-blue">最も適切な選択肢</u>を回答群①～④の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            <p class="image">
              <img src="/template/test76/img1.jpg" /><br />
              図
            </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：未認知客</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：常連客</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：認知客</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：見込み客</li>
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
                if($result['select62'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans62 <?=$act?>">
                <input type="radio" name="ans62" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select63'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans63 <?=$act?>">
                <input type="radio" name="ans63" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select64'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans64 <?=$act?>">
                <input type="radio" name="ans64" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(4)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select65'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans65 <?=$act?>">
                <input type="radio" name="ans65" value="<?=$i?>" <?=$chk?> class="indent" >
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

