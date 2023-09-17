<?php include_once("head.php");?>


  <body class="text-center">
    
  <?php include_once("title.php");?>


    <form class="form-signin" action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
    <div class="container ">
        <div class="loginbox">
            <h1 class="h3 mb-3 font-weight-normal">CRES完了画面</h1>
            <div class="mt20 text-left">
                <p>検査完了しました</p>
            </div>
            <div>
                <a href="<?=D_URL_TEST?>cres.php?start=off&token=<?=$csrf_token?>&k=<?=$_REQUEST[ 'k' ]?>" class="btn btn-lg btn-primary btn-block"  >メニュー画面に移動</a>
            </div>
        </div>
    </div>
</form>
</body>


</html>
