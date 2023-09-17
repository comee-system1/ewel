<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>14.</h5></div>
          <div class="col-md-11">
              <h5>
              ブランドは、法律で保護の対象となっている。ブランドの防御に関する記述と、その名称の組み合わせとして、<u class="text-blue">最も適切な選択肢</u>を下記の回答群①～④から選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-1"><?=$array_roma[1]?></div>
          <div class="col-md-11">会社の名称</div>
          <div class="col-md-1"><?=$array_roma[2]?></div>
          <div class="col-md-11">自社の商品・サービスと他社のそれとを識別するための標識</div>
          <div class="col-md-1"><?=$array_roma[3]?></div>
          <div class="col-md-11">デザインのこと</div>

        </div>
        <div class="row mt20">
          <div class="col-md-1"><?=$array_kana[1]?></div>
          <div class="col-md-11">意匠</div>
          <div class="col-md-1"><?=$array_kana[2]?></div>
          <div class="col-md-11">商標</div>
          <div class="col-md-1"><?=$array_kana[3]?></div>
          <div class="col-md-11">商号</div>
          <div class="col-md-1"><?=$array_kana[4]?></div>
          <div class="col-md-11">特許</div>
        </div>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">A：エ　B：ア　C：イ</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">A：ウ　B：イ　C：ア</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">A：イ　B：ウ　C：ア</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">A：ウ　B：エ　C：イ</dd>
        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select23'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans23 <?=$act?>">
                <input type="radio" name="ans23" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>15.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの意匠に関連する法的な有効期限について、<u class="text-blue">最も適切な選択肢</u>を下記の①～⑤の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">登録から10年（更新を行うと永続）</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">出願から10年</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">出願から25年</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">登録から50年</dd>
          <dt class="col-sm-1"><?=$array_number[5]?></dt>
          <dd class="col-sm-11">登記以降、期限無し</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select24'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans24 <?=$act?> ">
                <input type="radio" name="ans24" value="<?=$i?>" class="indent" <?=$chk?> >
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

