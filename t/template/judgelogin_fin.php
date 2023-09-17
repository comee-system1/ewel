
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
        <h1 class="h3 mb-3 font-weight-normal">動作環境チェック</h1>
        <div class="row mt20">
            <div class="col-md-12">
                <p>本検査受検前に、当ページで動作環境の確認をお願いします。</p>
                <p>※各ソフトウェアベンダーのサポート終了等により、システム条件が変更される場合がございます。予めご了承ください。</p>
                <br /><p>
                ご利用中のパソコン端末情報は、以下「動作環境チェック」ボタンからご確認できます。
                </p>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-md-12">
                <form action="./judgelogin.php?k=<?=$k?>" method="POST" >
                <button type="submit"  class="btn btn-info" name="check" value="on" >動作環境チェック</button>
                <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="year" value="<?=$year?>">
                <input type="hidden" name="month" value="<?=$month?>">
                <input type="hidden" name="day" value="<?=$day?>">
                </form>
            </div>
        </div>
        
        
    </div>
  </div>
</div>