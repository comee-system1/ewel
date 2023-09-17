
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="./judgelogin.php?k=<?=$k?>" method="POST">
        <h1 class="h3 mb-3 font-weight-normal"><?=$test[ 'testname' ]?></h1>
        <h5 class=" mb-3 font-weight-normal">検査選択メニュー</h5>
        <?php if($completeFlg == "testComplete"):?>
            <p>
            すべての検査が完了しました。<br />おつかれさまでした。
            </p>
        <?php else: ?>
            
            <p>受検して頂く検査は<?=count($testlist)?>つです。<br />
            <?php if(count($testlist) > 1):?>
                どちらの検査から受検して頂いても構いませんが、すべての検査を受検してください。<br />                
            <?php endif; ?>
			下記の検査名をクリックして検査をはじめて下さい。</p>
            
        <?php endif;?>
        <?php foreach($testlist as $key=>$val ):
            $disabled = "";
            if($val[ 'exam_state' ] == 2 || $val[ 'flag' ] == "DISABLE" ) $disabled = "disabled";
            if($mobile && $val[ 'type' ] == 74 ) $disabled = "disabled";
            ?>
            <div class="row mt20">
                <div class="col-md-12">
                    
                    <a href="./test/<?=$val[ 'type' ]?>/?k=<?=$k?>" class="btn btn-primary btn-flat form-control text-left <?=$disabled?> ">
                    <?=$val[ 'examname' ]?>
                    <?php if($val[ 'exam_state' ] == 2):?>
                    <span class="badge badge-danger">受検済</span>
                    <?php endif; ?>
                    <?php if($val[ 'flag' ] == "DISABLE"):?>
                    <span class="badge badge-warning">期間外</span>
                    <?php endif; ?>
                    <?php if($mobile && $val[ 'type' ] == 74):?>
                    <span class="badge badge-info">PCのみ</span>
                    <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
       
        <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
    </form>
  </div>


<?php 

if($test[ 'licensecard' ] == 1 && $completeFlg == "testComplete"):
//if($test[ 'licensecard' ] == 1 ):
?>
<div style="color:crimson;text-align:left;">下記のボタンを押し、受検証明書をダウンロードしてください。</div>

<div style="color:crimson;border:3px solid red;padding:5px;text-align:left;margin:10px;">
    ■注意<br />
    ダウンロードした証明書は必ずご自身のPCに保存してください。<br />
    ブラウザで確認した場合、表示が乱れる可能性があります。

</div>

<?php
    $openkey = "openkey1234";
    $query = "pdf/".$test[ 'id' ]."/".$_SESSION['visit'][ 'exam_id' ]."/a4/?sp=off&code=PDF";
    $str = openssl_encrypt($query,'aes-256-ecb',$openkey);
?>

	<center>
    <a href="<?=D_URL?>index/<?=$str?>?sp=off&code=PDF" class="button pd10 btn btn-success" target=_blank >受検証明書ダウンロード</a>
    <!--
	<a href="<?=D_URL?>index/pdf/<?=$test[ 'id' ]?>/<?=$_SESSION['visit'][ 'exam_id' ]?>/a4/?sp=off&code=PDF" class="button pd10 btn btn-success" target=_blank >受検証明書ダウンロード</a>
-->
	</center>
<?php endif;?>


</div>


