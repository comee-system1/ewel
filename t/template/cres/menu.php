<?php include_once("head.php");?>


  <body class="text-center">
    
  <?php include_once("title.php");?>




    <form class="form-signin" action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
    <div class="container ">
        
        <div class="loginbox">
            <h1 class="h3 mb-3 font-weight-normal">CRESメニュー画面</h1>
            <?php if($cres->errmsg):?>
                <div class="alert alert-danger" role="alert">
                <?=$cres->errmsg?>
                </div>
            <?php endif;?>
            <div class="mt20 text-left">
            <?php
                $icon = "";
                if($_SESSION['cres' ][ 'questiontype' ] == 1){
                    $menuname = "1.内省";

                    if($_SESSION['cres' ][ 'exam_date1_status' ] == 1){
                        $disabled = "disabled";
                        $icon = "<small class='badge pull-right bg-red'>回答済み</small>";
                    }
                }
                if($_SESSION['cres' ][ 'questiontype' ] == 2){
                    $menuname = "2.確認";
                    if($_SESSION['cres' ][ 'exam_date2_status' ] == 1){
                        $disabled = "disabled";
                        $icon = "<small class='badge pull-right bg-red'>回答済み</small>";
                    }
                }
                if($_SESSION['cres' ][ 'questiontype' ] == 3){
                    $menuname = "3.準備";
                    if($_SESSION['cres' ][ 'exam_date3_status' ] == 1){
                        $disabled = "disabled";
                       
                    }
                    
                }
            ?>
            <?php if($_SESSION['cres' ][ 'exam_date3_status' ] == 1): ?>
                <p>
                    現在、回答頂ける設問はありません。
                </p>

            <?php else:?>
            <?php if($icon):?>
                <p>
                    現在、回答頂ける設問はありません。
                </p>
            <?php else:?>
            <p>
            回答して頂く設問は下記です。<br />下記のボタンを押して、回答してください。

            </p>
            <?php endif;?>
                <a href="./cres.php?start=on&k=<?=$_REQUEST[ 'k' ]?>&token=<?=$csrf_token?>" class="btn btn-info btn-block btn-lg" <?=$disabled?> ><?=$menuname?><?=$icon?></a>
            <?php endif;?>
            </div>
            
            <br />
            <input type="hidden" name="token" value="<?=$csrf_token?>" />
            <button class="btn  btn-danger " type="submit" name="logout" value="on" >ログアウト</button>
        </div>
    </div>
</form>
</body>


</html>
