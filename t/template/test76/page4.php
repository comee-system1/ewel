<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>9.</h5></div>
          <div class="col-md-11">
              <h5>
                強いブランドは、資産として捉えることができる。これを何と呼ぶか。<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">ブランド・エクイティ</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">ブランド・プレミアム</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">ブランド・ベネフィット</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">ブランド・メリット</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
              $act = "";$chk = "";
              if($result['select16'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans16 <?=$act?>">
                <input type="radio" name="ans16" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>10.</h5></div>
          <div class="col-md-11">
              <h5>
              デビット・アーカーは、ブランドを資産として構成する要素を5つ挙げている。そのうちの4つは、「ブランド・ロイヤリティ」「ブランドの認知度」「ブランド連想」「所有権のあるブランド資産」である。残りのもう1つとして、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">ブランド・エンブレム</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">価値イメージ</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">知覚品質</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">ブランド価値</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
              $act = "";$chk = "";
              if($result['select17'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans17 <?=$act?>">
                <input type="radio" name="ans17" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>



        
        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>11.</h5></div>
          <div class="col-md-11">
              <h5>次の文章はブランドの資産価値に関する説明である。ア～ウの説明について、正誤を答えなさい。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-sm-1"><?=$array_kana[1]?></div>
          <div class="col-sm-11">確立されたブランドであっても、消費者・顧客の知覚への影響は少ない。</div>
          <div class="col-sm-1"><?=$array_kana[2]?></div>
          <div class="col-sm-11">ブランド名が知られていても、ネガティブな反応を引き起こす場合は、ブランドとは言えない。</div>
          <div class="col-sm-1"><?=$array_kana[3]?></div>
          <div class="col-sm-11">資産価値の高いブランドは、それ自体が流通性があり、売買の対象となる。</div>
        </div>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1"><?=$array_kana[1]?></dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
              $act = "";$chk = "";
              if($result['select18'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans18 <?=$act?>">
                <input type="radio" name="ans18" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
                <?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1"><?=$array_kana[2]?></dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
              $act = "";$chk = "";
              if($result['select19'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans19 <?=$act?>">
                <input type="radio" name="ans19" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
                <?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1"><?=$array_kana[3]?></dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
              $act = "";$chk = "";
              if($result['select20'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans20 <?=$act?>">
                <input type="radio" name="ans20" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
                <?=$array_judge[$i]?>
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

