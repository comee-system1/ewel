<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>16.</h5></div>
          <div class="col-md-11">
              <h5>以下の1～2のブランドの例がどの種類に該当するか、<u class="text-blue">最も適切な選択肢</u>を回答群①～⑦の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：ファミリーブランド</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：製品ブランド</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：サービスブランド</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item bordernone"><?=$array_number[4]?>：企業ブランド</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：パーソナルブランド</li>
          <li class="list-group-item bordernone"><?=$array_number[6]?>：地域ブランド</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item bordernone"><?=$array_number[7]?>：成分・技術</li>
        </ul>

        <div class="row mt20">
          <p><b>【ブランドの例】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-2">1.セブンプレミアム</dt>
          <dd class="col-sm-10">
            <?php for($i=1;$i<=7;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select25'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans25 <?=$act?>">
                <input type="radio" name="ans25" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-2">2.Apple</dt>
          <dd class="col-sm-10">
            <?php for($i=1;$i<=7;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select26'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans26 <?=$act?>">
                <input type="radio" name="ans26" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
        </dl>

        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>17.</h5></div>
          <div class="col-md-11">
              <h5>ブランドの対象と階層に関する記述について<u class="text-red">誤っている選択肢</u>を下記の①～④から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">ブランド構築を行う際、対象としているのが企業なのか、事業なのか、商品・サービスなのかなど、自分がどの階層のブランドを構築しようとしているか、意識することが必要である。</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">コーポレートブランドと製品ブランドを意図的に分離する場合もある。</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">ブランドの対象は製品だけである。</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">成分や技術、人物もブランド化の対象になり得る。</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select27'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans27 <?=$act?>">
                <input type="radio" name="ans27" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>


        <hr />

        <div class="row mt40"> 
          <div class="col-md-1"><h5>18.</h5></div>
          <div class="col-md-11">
              <h5>次の分の（）に入る語句として、最も適切な<u class="text-red">選択肢</u>を下記の①～④から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p>個人の「人」についてもブランド化することができ、これを「（　　　）ブランド」と呼ぶ。</p>
        </div>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <dl class="row ">
          <dt class="col-sm-1"><?=$array_number[1]?></dt>
          <dd class="col-sm-11">クリエイション</dd>
          <dt class="col-sm-1"><?=$array_number[2]?></dt>
          <dd class="col-sm-11">パーソナル</dd>
          <dt class="col-sm-1"><?=$array_number[3]?></dt>
          <dd class="col-sm-11">アライアンス</dd>
          <dt class="col-sm-1"><?=$array_number[4]?></dt>
          <dd class="col-sm-11">ファッショナブル</dd>

        </dl>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select28'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans28 <?=$act?>">
                <input type="radio" name="ans28" value="<?=$i?>" <?=$chk?> class="indent" >
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

