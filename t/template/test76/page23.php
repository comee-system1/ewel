<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>49.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランド・アイデンティティについて述べた文として<u class="text-red">誤っている選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランド・アイデンティティは、顧客が好感を抱けて、社員が顧客にどう振る舞えば良いかがイメージできることが望ましい。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ブランド・アイデンティティは、顧客にどう認知されたいかという旗印となる言葉である。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">ブランド・アイデンティティは、キャッチコピーと同様の性質を持つため、顧客に覚えてもらうために奇をてらったインパクトのある内容が好ましい。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ブランド・アイデンティティは、自社の独自性を端的な言葉で表したものである。</div>
          
        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select81'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans81 <?=$act?>">
                <input type="radio" name="ans81" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>50.</h5></div>
          <div class="col-md-11">
              <h5>
              次の文章は4P／4Cに関する記述である。ア～エの説明について、<u>正誤を答えなさい。</u>
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_kana[1]?></div>
          <div class="col-md-11">4Pとは、企業の視点で、製品、価格、販売促進、ブランディングを表したものである。</div>
          <div class="col-md-1"><?=$array_kana[2]?></div>
          <div class="col-md-11">4Cとは、顧客の視点で、顧客価値、顧客の負担、入手容易性、コミュニケーションを表したものである。</div>
          <div class="col-md-1"><?=$array_kana[3]?></div>
          <div class="col-md-11">4P／4Cで、差別化と顧客への優位性が一覧できる。</div>
          <div class="col-md-1"><?=$array_kana[4]?></div>
          <div class="col-md-11">4P／4Cで、企業と顧客の両方の視点で整理して、独自性強化などの具体化戦略を練る。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-1"><?=$array_kana[1]?></div>
          <div class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select82'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans82 <?=$act?>">
                <input type="radio" name="ans82" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?><?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </div>
          <div class="col-sm-1"><?=$array_kana[2]?></div>
          <div class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select83'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans83 <?=$act?>">
                <input type="radio" name="ans83" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?><?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </div>

          <div class="col-sm-1"><?=$array_kana[3]?></div>
          <div class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select84'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans84 <?=$act?>">
                <input type="radio" name="ans84" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?><?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </div>

          <div class="col-sm-1"><?=$array_kana[4]?></div>
          <div class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select85'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans85 <?=$act?>">
                <input type="radio" name="ans85" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?><?=$array_judge[$i]?>
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

