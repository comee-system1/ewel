<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>51.</h5></div>
          <div class="col-md-11">
              <h5>
                マーケティングミックスの4Pに関する記述で、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">Productは、機能や特徴、デザインなど、製品そのものに関するものだけでなく、アフターサービスなども含まれる。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">Priceは、標準価格や値引き、仕入れ価格など、価格そのものに関するものを表し、支払方法や取引条件などは含まれない</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">Placeは、販売ルートや輸送方法を表し、立地は含まれない。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">Promotionは、営業や販売促進全般を表し、店舗の立地も含まれる。</div>
          
        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select86'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans86 <?=$act?>">
                <input type="radio" name="ans86" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>52.</h5></div>
          <div class="col-md-11">
              <h5>
              マーケティングミックスの4Cに関する記述で、<u class="text-blue">最も適切な選択肢</u>を下記の①～③の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">Customer Valueは、楽しい、癒されるなど、商品・サービスによってもたらされる顧客の価値を表す。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">Customer Costは、商品・サービスを手に入れるために、顧客が実際に支払う現金のことを言う。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">Communicationは、カスタマーセンターの設置などで、顧客の声が企業に届きやすい環境を言う。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=3;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select87'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans87 <?=$act?>">
                <input type="radio" name="ans87" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />
       


        <div class="row mt20">
          <div class="col-md-1"><h5>53.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランド体験について述べた文として<u class="text-red">誤っている選択肢</u>を下記の①～⑤の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランド体験は、ブランドの世界観を顧客に伝え、浸透させるためのシナリオである。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ブランド体験で、ブランド再認の率を高め、ブランド再生の量を増やす具体的な取組みを設計する。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">ブランド体験は、顧客が購入する前、購入時、購入後、リピート時、各々のステージで、接触シナリオを検討し、設計する。</div>

          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">接触シナリオの主な媒体として、カタログ、チラシ、HP、SNS、店舗、イベントなどがある。</div>

          <div class="col-md-1"><?=$array_number[5]?></div>
          <div class="col-md-11">ブランド体験の設計では、「いつ」「どこで」「何を」「どのように」を意識することが大切である。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select88'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans88 <?=$act?>">
                <input type="radio" name="ans88" value="<?=$i?>" <?=$chk?> class="indent" >
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

