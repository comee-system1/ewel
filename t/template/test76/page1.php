<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20"> 
          <div class="col-md-1"><h5>1.</h5></div>
          <div class="col-md-11">
              <h5>次の文章はブランド戦略に関する説明である。文中の1～4に入る最も適切な選択肢はどれか。回答群の①～⑦から選べ。</h5>
          </div>
        </div>
        <div class="row mt20"> 
          <div class="col-md-12">
              <p>ブランドとは（　1　）であり、（　2　）から一貫して派生するものである。<br />
              企業戦略において、コミュニケーション戦略は（　3　）と一体であり、特に（　4　）を高めることに力点をおいて、マーケティング施策を計画、実行していく過程のことを指す。
              </p>
          </div>
        </div>
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?>：資本</li>
          <li class="list-group-item bordernone"><?=$array_number[2]?>：資産</li>
          <li class="list-group-item bordernone"><?=$array_number[3]?>：経営戦略</li>
          <li class="list-group-item bordernone"><?=$array_number[4]?>：戦術</li>
          <li class="list-group-item bordernone"><?=$array_number[5]?>：マーケティング戦略</li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item bordernone"><?=$array_number[6]?>：ブランド価値</li>
          <li class="list-group-item bordernone"><?=$array_number[7]?>：ブランド認知</li>
        </ul>
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <dl class="row">
          <dt class="col-sm-1">空欄(1)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=7;$i++): ?>
            <?php 
              $act = "";$chk = "";
              if($result['select1'] == $i ){$act="active";$chk="checked";}  
            ?>
              
              <label class="btn btn-outline-dark ans1 <?=$act?>">
                <input type="radio" name="ans1" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(2)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=7;$i++):?>
            <?php 
              $act = "";$chk = "";
              if($result['select2'] == $i ){$act="active";$chk="checked";}  
            ?>
              <label class="btn btn-outline-dark ans2 <?=$act?>">
                <input type="radio" name="ans2" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(3)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=7;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select3'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans3 <?=$act?>">
                <input type="radio" name="ans3" value="<?=$i?>" <?=$chk?>  class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1">空欄(4)</dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=7;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select4'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans4 <?=$act?>">
                <input type="radio" name="ans4" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </dd>

        </dl>
        
        <hr />


        <div class="row mt40"> 
          <div class="col-md-1"><h5>2.</h5></div>
          <div class="col-md-11">
              <h5>次の文章はブランド・マネージャーの役割に関する説明である。ア～エの説明について、<u>正誤を答えなさい。</u></h5>
          </div>
        </div>
        <div class="row mt20"> 
          <div class="col-md-1"><?=$array_kana[1]?></div>
          <div class="col-md-11">ブランド・マネージャーは、知的財産に関する高い法律知識を必要とする。そのため、法務担当が担う場合が多い。</div>

          <div class="col-md-1"><?=$array_kana[2]?></div>
          <div class="col-md-11">ブランド・マネージャーは、ブランドの資産価値を高めるために、その構築から管理までの活動全般に亘る広範囲の経営的責任を担うものである。</div>

          <div class="col-md-1"><?=$array_kana[3]?></div>
          <div class="col-md-11">ブランド・マネージャーは役職名であり、取締役が務めなければならない。</div>
          
          <div class="col-md-1"><?=$array_kana[4]?></div>
          <div class="col-md-11">ブランド・マネージャーは、経営者的視点からブランドの価値を高める経営戦略を実現する役割を担う。</div>

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
                if($result['select5'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans5 <?=$act?>">
                <input type="radio" name="ans5" value="<?=$i?>" class="indent" <?=$chk?> >
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
                if($result['select6'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans6 <?=$act?>">
                <input type="radio" name="ans6" value="<?=$i?>" class="indent" <?=$chk?> >
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
                if($result['select7'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans7 <?=$act?>">
                <input type="radio" name="ans7" value="<?=$i?>" class="indent" <?=$chk?>>
                <?=$array_number[$i]?>
                <?=$array_judge[$i]?>
              </label>
            <?php endfor; ?>
          </dd>
          <dt class="col-sm-1"><?=$array_kana[4]?></dt>
          <dd class="col-sm-11">
            <?php for($i=1;$i<=2;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select8'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans8 <?=$act?>">
                <input type="radio" name="ans8" value="<?=$i?>" class="indent" <?=$chk?>>
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

