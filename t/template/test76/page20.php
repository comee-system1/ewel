<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>42.</h5></div>
          <div class="col-md-11">
              <h5>
              PEST分析の要因a～cに入る<u class="text-blue">最も適切な選択肢</u>を回答群①～④の中からそれぞれ選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：P-政治的環境要因</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：E-経済的環境要因</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：S-社会的環境要因</li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[4]?>：T-技術的環境要因</li>
        </ul>
        
        <div class="row mt20">
          <div class="col-md-12">
          (参考)<br />
          PはPoliticalの頭文字で、政治的環境要因を表す<br />
          EはEconomicの頭文字で、経済的環境要因を表す<br />
          SはSocialの頭文字で、社会的環境要因を表す<br />
          TはTechnologyの頭文字で、技術的環境要因を表す
          </div>
        </div>

        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-2"><?=$array_alpha[1]?>.景気・物価・株価</dt>
          <dd class="col-sm-10">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select72'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans72 <?=$act?>">
                <input type="radio" name="ans72" value="<?=$i?>" class="indent" <?=$chk?> >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-2"><?=$array_alpha[2]?>.特許</dt>
          <dd class="col-sm-10">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select73'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans73 <?=$act?>">
                <input type="radio" name="ans73" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-2"><?=$array_alpha[3]?>.世論</dt>
          <dd class="col-sm-10">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select74'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans74 <?=$act?>">
                <input type="radio" name="ans74" value="<?=$i?>"  <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
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

