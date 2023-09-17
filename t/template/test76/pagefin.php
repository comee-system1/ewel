<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        
        <div class="row mt20">
          <div class="col-md-12">
              <h5>検査結果</h5>
              <h6>正答数：<?=$collect?>問/53問中</h6>
          </div>
        </div>
        <?php if($message):?>
          <div class="alert alert-dark" role="alert">
          
            <p class="card-text"><?=$message?></p>
            <?php if($errmsg):?>
            <p class="card-text"><?=$errmsg?></p>
            <?php endif;?>
          </div>
        <?php endif;?>
        
        <table class="table table-bordered text-center mt20">
          
            <tr>
              <th scope="col" colspan=4 >1章</th>
              <th scope="col" colspan=7 >2章</th>
              <th scope="col" colspan=4 >3章</th>
            </tr>
            <tr>
            <?php for($i=1;$i<=15;$i++):?>
              
                <td nowrap>設問<?=$i?></td>
              
            <?php endfor;?>
            </tr>
            <tr>
            <?php for($i=1;$i<=15;$i++): ?>
              <?php
                $bk = "";
                if($check[$i] == false) $bk = "pink";
              ?>
                <td class="<?=$bk?>"><?=$array_collect[$check[$i]]?></td>
            <?php endfor;?>
            </tr>

        </table>

        <table class="table table-bordered text-center ">
          
          <tr>
            <th scope="col" colspan=3 >4章</th>
            <th scope="col" colspan=4 >5章</th>
            <th scope="col" colspan=3 >6章</th>
            <th scope="col" colspan=5 >7章</th>
          </tr>
          <tr>
            <?php for($i=16;$i<=30;$i++):?>
              
                <td nowrap >設問<?=$i?></td>
            <?php endfor;?>
            </tr>
          <tr>
            <?php for($i=16;$i<=30;$i++):?>
              <?php
                $bk = "";
                if($check[$i] == false) $bk = "pink";
              ?>
                <td class="<?=$bk?>"><?=$array_collect[$check[$i]]?></td>
            <?php endfor;?>
          </tr>

      </table>
      
      <table class="table table-bordered text-center ">
          
          <tr>
            <th scope="col" colspan=5 >8章</th>
            <th scope="col" colspan=5 >9章</th>
            <th scope="col" colspan=5 >10章</th>
          </tr>
          <tr>
          <?php for($i=31;$i<=45;$i++):?>
                <td nowrap >設問<?=$i?></td>
          <?php endfor;?>
          </tr>
          <tr>
            <?php for($i=31;$i<=45;$i++):?>
              <?php
                $bk = "";
                if($check[$i] == false) $bk = "pink";
              ?>
                <td class="<?=$bk?>"><?=$array_collect[$check[$i]]?></td>
            <?php endfor;?>
          </tr>

      </table>

      <table class="table table-bordered text-center ">
          
          <tr>
            <th scope="col" colspan=8 >10章</th>
          </tr>
          <tr>
          <?php for($i=46;$i<=53;$i++):?>
          
              <td nowrap >設問<?=$i?></td>
          <?php endfor;?>
          </tr>
          <tr>
          <?php for($i=46;$i<=53;$i++):?>
            <?php
              $bk = "";
              if($check[$i] == false) $bk = "pink";
            ?>
            <td class="<?=$bk?>" ><?=$array_collect[$check[$i]]?></td>
          <?php endfor;?>
          </tr>
          

      </table>


        <div class="row mt20">
          <div class="col-md-12">
          <input type="button" id="close" value="閉じる" class="btn btn-danger" onClick="window.close();">
          <input type="submit" name="pdf" value="結果を印刷" class="btn btn-success">
          <input type="hidden" name="temp" value="pdf" />
          </div>
      </div>
        
    </form>
  </div>
</div>

<?php
include_once("include_footer.php");
?>

