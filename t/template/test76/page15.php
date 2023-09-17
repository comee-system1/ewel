<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>33.</h5></div>
          <div class="col-md-11">
              <h5>「機能的リスク」に関する説明について<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">購入した商品が、不良品である。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">購入した商品のデザインが気に入らない。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">購入した商品が、購入者が期待した機能を果たさない。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">購入した商品が故障していて動かない。</div>
        </div>
                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select51'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans51 <?=$act?>">
                <input type="radio" name="ans51" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        
        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>34.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランドが企業にもたらすエクスターナル（外部的）な利益について誤っているものを下記の①～④から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">付加価値の向上</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">社員のモチベーション向上</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">価格決定権</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">競合商品・サービスとの差別化</div>
        </div>
                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select52'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans52 <?=$act?>">
                <input type="radio" name="ans52" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>35.</h5></div>
          <div class="col-md-11">
              <h5>
              知的所有権の内、特許権に関する記述に当てはまる<u class="text-blue">最も適切な選択肢</u>を下記の①～⑤の中から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">製造プロセス</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">コンテンツ</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">URL</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ブランドネーム</div>
          <div class="col-md-1"><?=$array_number[5]?></div>
          <div class="col-md-11">パッケージデザイン</div>
        </div>
                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select53'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans53 <?=$act?>">
                <input type="radio" name="ans53" value="<?=$i?>"  <?=$chk?> class="indent" >
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

