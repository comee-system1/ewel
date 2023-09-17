
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
        <h1 class="h3 mb-3 font-weight-normal">事前環境チェック済画面</h1>
        <div class="row mt20">
            <div class="col-md-12">
                <p>検査期間は<?=$test['period_from_date']?>　～　　<?=$test['period_to_date']?>です。</p>
                <p>現在は試験期間外となりますので、検査期間に再度アクセスしてください。</p>
                
            </div>
        </div>
        
    </div>
  </div>
</div>