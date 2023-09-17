<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>43.</h5></div>
          <div class="col-md-11">
              <h5>
              3C分析を表した図の中で、企業が「市場機会」として捉えるべき場所はどこか。<u class="text-blue">最も適切な選択肢</u>を下記の回答群①～⑩から選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            <p class="image2">
              <img src="/template/test76/img3.png" /><br />
              図
            </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11"><?=$array_kana[4]?></div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11"><?=$array_kana[5]?></div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11"><?=$array_kana[6]?></div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11"><?=$array_kana[7]?></div>
          <div class="col-md-1"><?=$array_number[5]?></div>
          <div class="col-md-11">
              <?=$array_kana[4]?>　と　<?=$array_kana[7]?>
          </div>

          <div class="col-md-1"><?=$array_number[6]?></div>
          <div class="col-md-11">
              <?=$array_kana[5]?>　と　<?=$array_kana[7]?>
          </div>

          <div class="col-md-1"><?=$array_number[7]?></div>
          <div class="col-md-11">
              <?=$array_kana[6]?>　と　<?=$array_kana[7]?>
          </div>

          <div class="col-md-1"><?=$array_number[8]?></div>
          <div class="col-md-11">
              <?=$array_kana[5]?>　と　<?=$array_kana[6]?>
          </div>

          <div class="col-md-1"><?=$array_number[9]?></div>
          <div class="col-md-11">
              <?=$array_kana[4]?>　と　<?=$array_kana[5]?>　と　<?=$array_kana[6]?>
          </div>
          
          <div class="col-md-1"><?=$array_number[10]?></div>
          <div class="col-md-11">
              <?=$array_kana[4]?>　と　<?=$array_kana[5]?>　と　<?=$array_kana[6]?>　と　<?=$array_kana[7]?>
          </div>
        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=10;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select75'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans75 <?=$act?>">
                <input type="radio" name="ans75" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>44.</h5></div>
          <div class="col-md-11">
              <h5>
              セグメンテーションに関する記述について<u class="text-red">誤っている選択肢</u>を下記の①～⑤から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">セグメンテーションとは、STPマーケティングの「S」のことである。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">セグメンテーションの基準は、年齢や性別等の人口統計的要素、収入や資産等の経済的要素、生活様式や好みなどの社会的・文化的要素などがある。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">セグメンテーションとは、市場細分化のことで、市場を分割し、特定していく作業を意味する。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">基本セグメントとは、事業、製品、サービスを問わず、多くの事業に共通して必要なセグメントテーマをいう。</div>
          <div class="col-md-1"><?=$array_number[5]?></div>
          <div class="col-md-11">固有セグメントとは、対象の事業、製品、サービスに直接的に関わるセグメントテーマをいう。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select76'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans76 <?=$act?>">
                <input type="radio" name="ans76" value="<?=$i?>" <?=$chk?> class="indent" >
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

