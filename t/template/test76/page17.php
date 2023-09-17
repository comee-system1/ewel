<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>38.</h5></div>
          <div class="col-md-11">
              <h5>次の文章はマーケティングに関する説明である。文中の1～3に入る<u class="text-blue">最も適切な選択肢</u>を①～⑥の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <div class="col-md-12">
            <p>
            ビジネスは「（　1　）」である。「（　2　）」とは、マーケティングの中核になるコンセプトである。企業は商品やサービスを提供して、その対価として消費者・顧客にお金を支払っていただく。差し出すものがあるから、相手から何かをもらえる。これが「（　2　）」である。消費者・顧客にとって（　3　）があれば、購入＝（　2　）が成立するが、逆に（　3　）がなければ（　2　）は成立せず、企業は利益を得ることができない。
            </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：関係</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：交換</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：売買</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：価値交換</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：創造</li>
          <li class="list-group-item bordernone"><?=$array_number[6]?>：価値</li>
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
                if($result['select58'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans58 <?=$act?>">
                <input type="radio" name="ans58" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select59'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans59 <?=$act?>">
                <input type="radio" name="ans59" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=6;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select60'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans60 <?=$act?>">
                <input type="radio" name="ans60" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
        </dl>

        
        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>39.</h5></div>
          <div class="col-md-11">
              <h5>
              マーケティングに関する式で、1～2に当てはまる語の組み合わせとして、<u class="text-blue">最も適切な選択肢</u>を下記の回答群ア～オから選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <div class="col-md-12">
            <p>マーケティング　＝　（　1　）　×　（　2　）
            </p>
          </div>
        </div>
        <div class="row mt20">
              <div class="col-md-1"><?=$array_alpha[1]?></div>
              <div class="col-md-11">単価</div>
              <div class="col-md-1"><?=$array_alpha[2]?></div>
              <div class="col-md-11">顧客生涯価値</div>
              <div class="col-md-1"><?=$array_alpha[3]?></div>
              <div class="col-md-11">販売個数</div>
              <div class="col-md-1"><?=$array_alpha[4]?></div>
              <div class="col-md-11">来店回数</div>
              <div class="col-md-1"><?=$array_alpha[5]?></div>
              <div class="col-md-11">顧客数</div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">1：a　2：c</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">1：a　2：d</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">1：a　2：e</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">1：b　2：d</div>
          <div class="col-md-1"><?=$array_number[5]?></div>
          <div class="col-md-11">1：b　2：e</div>
        </div>
                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select61'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans61 <?=$act?>">
                <input type="radio" name="ans61" value="<?=$i?>" <?=$chk?> class="indent" >
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

