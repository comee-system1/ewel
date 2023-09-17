
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="./judgelogin.php?k=<?=$k?>" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">ERROR PAGE</h1>
        

        <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
    </form>
  </div>
</div>