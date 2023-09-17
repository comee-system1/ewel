<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20"> 
          <div class="col-md-1"><h5>5.</h5></div>
          <div class="col-md-11">
              <h5>次の文章を読んで、文中の1～2に入る<u class="text-blue">最も適切な選択肢</u>はどれか。回答群の①～⑥から答えなさい。</h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            「ある特定の商品やサービスが（　1　）によって（　2　）されているとき、その商品やサービスを『ブランド』と呼ぶ」
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：消費者・顧客</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：企業</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：識別</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：販売</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：評価</li>
          <li class="list-group-item bordernone"><?=$array_number[6]?>：告知</li>
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
                if($result['select11'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans11 <?=$act?>">
                <input type="radio" name="ans11" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
        
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select12'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans12 <?=$act?>">
                <input type="radio" name="ans12" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
        </dl>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>6.</h5></div>
          <div class="col-md-11">
              <h5>ブランドに関する記述について、<u class="text-blue">最も適切な選択肢</u>を下記の①～③の中から選べ。
              </h5>
          </div>
        </div>
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">有名であることが最低条件である。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">品質が高いことが最低条件である。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">有名・無名、品質の高い・低いに関わらない。</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          
            <?php for($i=1;$i<=3;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select13'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans13 mr10 <?=$act?>">
                <input type="radio" name="ans13" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          
        </div>


        
        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>7.</h5></div>
          <div class="col-md-11">
              <h5>ブランドに関する記述について、<u class="text-blue">最も適切な選択肢</u>を下記の①～③の中から選べ。
              </h5>
          </div>
        </div>
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">ブランドがターゲットとするのは、すべての消費者である。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">ブランドがターゲットとするのは、すべての消費者ではない。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">ブランドにとって、ターゲットという概念は重要ではない。</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          
            <?php for($i=1;$i<=3;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select14'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans14 mr10 <?=$act?>">
                <input type="radio" name="ans14" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          
        </div>



        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>8.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの状態ついて述べた文として<u class="text-red">誤っている選択肢</u>を下記の①～④から選べ。
              </h5>
          </div>
        </div>
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">①	商品・サービスをリリースしたばかりで、その商品・サービスを知っている人が少ない状態ではブランドとは言わない。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">②	商品・サービスをリリースした時点で、誰もその商品・サービスを知らない状態は、ブランドゼロと言う。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">消費者が購買に結びつくプラスの評価がされた場合を、ブランドプラスと言う。</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">消費者が購買しない理由になるようなマイナスの評価がされた状態を、ブランドマイナスと言う。</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select15'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans15 mr10 <?=$act?>">
                <input type="radio" name="ans15" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          
        </div>


        <?php include_once("include_param.php");?>
        
    </form>
  </div>
</div>

<?php
include_once("include_footer.php");
?>

