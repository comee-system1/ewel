<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>23.</h5></div>
          <div class="col-md-11">
              <h5>
              次の文章はブランドに関する説明である。文中の1～4に入る<u class="text-blue">最も適切な選択肢</u>はどれか。回答群の①～⑨から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <p>
          ブランドとは、「消費者・顧客の（　1　）の中に作り上げられる（　2　）」である。<br />
          ある製品・サービスをブランド化するためには、消費者・顧客が識別するのに役立つ（　3　）（ネームやロゴ）を使うことによって、その製品・サービスが「何者か」を示すことが必要となる。そして、消費者・顧客がブランドと接触するあらゆる機会である「（　4　）」を通して、その製品・サービスに何ができるか、と、この製品・サービスが他のブランドと違って特別である理由を伝えなければならない。


          </p>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：心</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：関係性</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：体</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：姿</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：価値</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item bordernone"><?=$array_number[6]?>：力(ちから)</li>
          <li class="list-group-item bordernone"><?=$array_number[7]?>：心象</li>
          <li class="list-group-item bordernone"><?=$array_number[8]?>：ブランド要素</li>
          <li class="list-group-item bordernone"><?=$array_number[9]?>：ブランド体験</li>
        </ul>

        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(1)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=9;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select33'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans33 <?=$act?>">
                <input type="radio" name="ans33" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=9;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select34'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans34 <?=$act?>">
                <input type="radio" name="ans34" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=9;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select35'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans35 <?=$act?>">
                <input type="radio" name="ans35" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(4)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=9;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select36'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans36 <?=$act?>">
                <input type="radio" name="ans36" value="<?=$i?>" <?=$chk?> class="indent" >
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

