<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>45.</h5></div>
          <div class="col-md-11">
              <h5>
                ターゲティングに関する記述として、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ターゲティングとは、顧客の存在する地域を限定することである。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ターゲティングとは、顧客の年齢層を限定することである。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">ターゲティングとは、細分化された市場から、自社の事業または製品、サービスを、最も評価してくれる見込み客を選定することである。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ターゲティングとは、細分化された市場から、1人の典型的な見込み客に絞り込むことである。</div>
          
        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select77'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans77 <?=$act?>">
                <input type="radio" name="ans77" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>

        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>46.</h5></div>
          <div class="col-md-11">
              <h5>
              企業にとって、最も重要で象徴的な「顧客を絞り込むこと」をマーケティングにおいて何と呼ぶか。<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">キャラクター</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ペルソナ</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">メタファー</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">パネラー</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select78'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans78 <?=$act?>">
                <input type="radio" name="ans78" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>


        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>47.</h5></div>
          <div class="col-md-11">
              <h5>
              連想マップについて述べた文として<u class="text-red">誤っている選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>

        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">連想マップのテーマの1つは、対象事業（製品・サービス）そのものとする。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">連想マップでは、連想の末端の言葉を特に注目して抽出する。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">連想マップは、ターゲット顧客の本音を探ることを目的とする。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">連想マップでは、1つの言葉から多くの言葉がつながっている部分等をチェックして、キーワードとなりそうな言葉を抽出する。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select79'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans79 <?=$act?> ">
                <input type="radio" name="ans79" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>



        <hr />


        <div class="row mt20">
          <div class="col-md-1"><h5>48.</h5></div>
          <div class="col-md-11">
              <h5>
              ポジショニングマップに関する記述で、<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>

        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>

        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ポジショニングマップを使って、独自性を築ける立ち位置を見つける。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ポジショニングマップでは、比較する競合他社は1社に限定する。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">ポジショニングマップは、製品・サービスの機能面を重点的に軸を切る。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ポジショニングマップの軸は、上と下、右と左は、反対語にする必要はない。</div>

        </div>
        <div class="row mt20">
            <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select80'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans80 <?=$act?>">
                <input type="radio" name="ans80" value="<?=$i?>"  <?=$chk?> class="indent" >
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

