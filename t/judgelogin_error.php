<?php include_once("./template/judgelogin_head.php");?>

<div class="container mt20">
    <?php include_once("./template/judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="./judgelogin.php?k=<?=$k?>" method="POST">
        <p>
          指定されたURLに誤りがあります。<br />
          担当の方にお問い合わせください。
        </p>
        
    </form>
  </div>
</div>
<?php include_once("./template/judgelogin_foot.php");?>