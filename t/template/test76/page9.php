<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>21.</h5></div>
          <div class="col-md-11">
              <h5>
                ブランド再認とブランド再生の関係性について、<u class="text-blue">最も適切な組み合わせ</u>を下記の回答群①～④から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <div class="col-md-1"><?=$array_alpha[1]?></div>
          <div class="col-md-11">ブランド再生するには、まず、ブランド再認できることが条件になる。</div>
          <div class="col-md-1"><?=$array_alpha[2]?></div>
          <div class="col-md-11">ブランド再認するには、まず、ブランド再生できることが条件になる。</div>
          <div class="col-md-1"><?=$array_alpha[3]?></div>
          <div class="col-md-11">顧客の購買行動につなげるためには、ニーズと結びつくブランド再認を目指さなければならない。</div>
          <div class="col-md-1"><?=$array_alpha[4]?></div>
          <div class="col-md-11">顧客の購買行動につなげるためには、ニーズと結びつくブランド再生を目指さなければならない。</div>
        </div>


        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">a と c</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">a と d</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">b と c</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">b と d</div>
        </div>
        

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select31'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans31 <?=$act?>">
                <input type="radio" name="ans31" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>22.</h5></div>
          <div class="col-md-11">
              <h5>ブランド認知のために、ブランド・マネージャーが実行すべき内容について、下記の回答群の中で<u class="text-blue">最も効果的な組み合わせ</u>を下記の回答群①～④から選べ。
              </h5>
          </div>
        </div>
        
        
        <dl class="row mt20">
          <dt class="col-sm-1"><?=$array_alpha[1]?></dt>
          <dd class="col-sm-11">ブランド再認の量を増やす</dd>
          <dt class="col-sm-1"><?=$array_alpha[2]?></dt>
          <dd class="col-sm-11">ブランド再認の率を高める</dd>
          <dt class="col-sm-1"><?=$array_alpha[3]?></dt>
          <dd class="col-sm-11">ブランド再生の量を増やす</dd>
          <dt class="col-sm-1"><?=$array_alpha[4]?></dt>
          <dd class="col-sm-11">ブランド再生の率を高める</dd>

        </dl>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>

        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">aとc</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">aとd</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">bとc</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">bとd</dd>

        </dl>


        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select32'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans32 <?=$act?>">
                <input type="radio" name="ans32" value="<?=$i?>" <?=$chk?> class="indent" >
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

