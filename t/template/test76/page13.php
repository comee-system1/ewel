<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-1"><h5>28.</h5></div>
          <div class="col-md-11">
              <h5>
              「ブランド体験」に関する記述について、その正誤の組み合わせとして<u class="text-blue">最も適切な選択肢</u>を下記の回答群①～④から選べ。
              </h5>
          </div>
        </div>
        
        <div class="row mt20">
          <div class="col-md-1"><?=$array_alpha[1]?></div>
          <div class="col-md-11">ブランド体験は、消費者とブランドとの接点のことをいい、ブランド・アイデンティティと結びつくブランド連想を起こさせることが重要である。</div>
          <div class="col-md-1"><?=$array_alpha[2]?></div>
          <div class="col-md-11">ブランド体験は、販売促進活動のシナリオであり、営業活動は含まれない。</div>
          <div class="col-md-1"><?=$array_alpha[3]?></div>
          <div class="col-md-11">ブランド体験は、企業の販売促進活動から、実際の利用体験まで、消費者・顧客とブランドとのあらゆる接点を設計する。</div>
          <div class="col-md-1"><?=$array_alpha[4]?></div>
          <div class="col-md-11">ブランド体験は、消費者・顧客がブランドと接するあらゆる機会であり、それらは「ブランド要素」を含んで構成される。</div>
        </div>


        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[1]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[2]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[3]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[4]?>：<?=$array_judge[1]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[2]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[1]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[2]?>：<?=$array_judge[2]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[3]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[4]?>：<?=$array_judge[2]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[3]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[1]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[2]?>：<?=$array_judge[2]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[3]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[4]?>：<?=$array_judge[1]?></li>
        </ul>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bordernone"><?=$array_number[4]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[1]?>：<?=$array_judge[2]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[2]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[3]?>：<?=$array_judge[1]?></li>
          <li class="list-group-item bordernone"><?=$array_alpha[4]?>：<?=$array_judge[1]?></li>
        </ul>


        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select46'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans46 <?=$act?>">
                <input type="radio" name="ans46" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>
        
        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>29.</h5></div>
          <div class="col-md-11">
              <h5>
              「ブランド体験」を設計する上で大切な3つのキーワードがあるが、その組み合わせとして<u class="text-blue">最も適切な選択肢</u>を下記の①～④の中から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">一貫性、積極性、行動力</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">一貫性、意図的、継続性</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">柔軟性、行動力、業者の巻き込み</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">一貫性、積極性、意図的</div>
        </div>

                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select47'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans47 <?=$act?>">
                <input type="radio" name="ans47" value="<?=$i?>" <?=$chk?> class="indent" >
                <?=$array_number[$i]?>
              </label>
            <?php endfor; ?>
          </div>
        </div>





        <hr />
        

        <div class="row mt20">
          <div class="col-md-1"><h5>30.</h5></div>
          <div class="col-md-11">
              <h5>
                以下の記述について<u class="text-red">誤っているもの</u>を下記の①～④から選べ。
              </h5>
          </div>
        </div>

        
        <div class="row mt20">
          <p><b>【回答群】</b></p>
        </div>
        <div class="row">
          <div class="col-md-1"><?=$array_number[1]?></div>
          <div class="col-md-11">ブランド・アイデンティティは、顧客に「こう思われたい」という価値イメージである。</div>
          <div class="col-md-1"><?=$array_number[2]?></div>
          <div class="col-md-11">ブランディングとは、ブランド・アイデンティティと、ブランド・イメージを、イコールで結びつけるための活動である。</div>
          <div class="col-md-1"><?=$array_number[3]?></div>
          <div class="col-md-11">消費者の連想と結びつける手法の1つに、連想マップがある。</div>
          <div class="col-md-1"><?=$array_number[4]?></div>
          <div class="col-md-11">ブランド・イメージは、ブランド要素との接触回数とインパクトによって構築される。</div>
        </div>

                
        <div class="row mt20">
          <p><b>【選択肢】</b></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?php for($i=1;$i<=4;$i++):?>
              <?php 
                $act = "";$chk = "";
                if($result['select48'] == $i ){$act="active";$chk="checked";}  
              ?>
              <label class="btn btn-outline-dark ans48 <?=$act?>">
                <input type="radio" name="ans48" value="<?=$i?>"  <?=$chk?> class="indent" >
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

