<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>12.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの起源を表している<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">ブランドは、元々は中世ヨーロッパの貴族の紋章を表していた。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">ブランドは、元々は家畜の売買の際に、生産者を識別するために活用されていた。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">ブランドは、元々は家畜を高値で売るための手段として使われていた。</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">ブランドは、元々は「焼印」の意味があり、自分の所有物であることを示していた。</dd>
        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select21'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans21 <?=$act?>">
                <input type="radio" name="ans21" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>13.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの機能の変遷の順序として、<u class="text-blue">最も適切な選択肢</u>を下記の回答群①～⑤から選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
            <div class="col-md-1"><?=$array_alpha[1]?></div>
            <div class="col-md-11">生産者の表示</div>
            <div class="col-md-1"><?=$array_alpha[2]?></div>
            <div class="col-md-11">競合との差別化</div>
            <div class="col-md-1"><?=$array_alpha[3]?></div>
            <div class="col-md-11">所有権の表示</div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">a → b → c</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">a → c → b</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">b → a → c </dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">c → b → a</dd>
          <dt class="col-sm-1"><?=$array_number[5]?></dt>
          <dd class="col-sm-11">c → a → b</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=5;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select22'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans22 <?=$act?>">
                <input type="radio" name="ans22" value="<?=$i?>" <?=$chk?> class="indent" >
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

