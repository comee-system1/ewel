<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>31.</h5></div>
          <div class="col-md-11">
              <h5>ブランドがもたらす消費者・顧客にとっての利益と、その名称の組み合わせとして、最も適切なものを下記の回答群①～⑤から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <div class="col-md-1"><?=$array_roma[1]?></div>
          <div class="col-md-11">消費者・顧客がそのブランドに抱いているイメージと自分自身を重ね合わせることができる。</div>
          <div class="col-md-1"><?=$array_roma[2]?></div>
          <div class="col-md-11">商品・サービスに関する調査の量（外的コスト）や内的コスト（検討する労力）を下げる役割を果たしている。</div>
          <div class="col-md-1"><?=$array_roma[3]?></div>
          <div class="col-md-11">機能的価値と情緒的価値がある。</div>
          <div class="col-md-1"><?=$array_roma[4]?></div>
          <div class="col-md-11">購買決定におけるリスクを低減、回避できる。</div>
        </div>

        <div class="row mt20">
          <div class="col-md-1"><?=$array_kana[1]?></div>
          <div class="col-md-11">探索コストの低減</div>
          <div class="col-md-1"><?=$array_kana[2]?></div>
          <div class="col-md-11">付加価値の向上</div>
          <div class="col-md-1"><?=$array_kana[3]?></div>
          <div class="col-md-11">価値の獲得</div>
          <div class="col-md-1"><?=$array_kana[4]?></div>
          <div class="col-md-11">自己イメージの投影</div>
          <div class="col-md-1"><?=$array_kana[5]?></div>
          <div class="col-md-11">リスクの低減</div>
        </div>



        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[1]?>：<?=$array_kana[4]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[2]?>：<?=$array_kana[1]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[3]?>：<?=$array_kana[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[4]?>：<?=$array_kana[5]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[2]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[1]?>：<?=$array_kana[2]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[2]?>：<?=$array_kana[1]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[3]?>：<?=$array_kana[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[4]?>：<?=$array_kana[5]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[1]?>：<?=$array_kana[4]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[2]?>：<?=$array_kana[2]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[3]?>：<?=$array_kana[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[4]?>：<?=$array_kana[1]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[4]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[1]?>：<?=$array_kana[2]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[2]?>：<?=$array_kana[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[3]?>：<?=$array_kana[1]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[4]?>：<?=$array_kana[5]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[5]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[1]?>：<?=$array_kana[4]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[2]?>：<?=$array_kana[1]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[3]?>：<?=$array_kana[3]?></li>
          <li class="list-group-item bordernone"><?=$array_roma[4]?>：<?=$array_kana[2]?></li>
        </ul>


        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select49'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans49 <?=$act?>">
                <input type="radio" name="ans49" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>
        
        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>32.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランドの価値について述べた文として<u class="text-red">誤っている</u>選択肢を下記の①～④から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランドから獲得する価値は、機能的価値と、情緒的価値に大別される。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">機能的価値とは、製品をそのものが提供する基本的機能のことである。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">情緒的価値とは、製品を使うことで得られる心理的価値のことである。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">機能的価値のない商品は、この世には存在しない。</div>
        </div>

                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select50'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans50 <?=$act?>">
                <input type="radio" name="ans50" value="<?=$i?>" <?=$chk?> class="indent" >
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

