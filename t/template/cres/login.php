<?php include_once("head.php");?>


  <body class="text-center">
    
  <?php include_once("title.php");?>




    <form class="form-signin" action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
    <div class="container ">
        
        <div class="loginbox">
            <h1 class="h3 mb-3 font-weight-normal">CRESログイン画面</h1>
            <?php if($cres->errmsg):?>
                <div class="alert alert-danger" role="alert">
                <?=$cres->errmsg?>
                </div>
            <?php endif;?>
            <div class="mt20 text-left">
                <label for="ID" >ID</label>
                <input type="text" id="ID" name="id"  class="form-control" placeholder="IDを入力してください" >
            </div>
            <div class="mt20 text-left">
                <label for="birth">生年月日</label>
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="year" value="" class="form-control" placeholder="年" />
                    </div>
                    <div class="col-md-2">
                        <select name="month" class="form-control">
                            <?php for($i=1;$i<=12;$i++): ?>
                                <option value="<?=$i?>"><?=$i?>月</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="day" class="form-control">
                            <?php for($i=1;$i<=31;$i++): ?>
                                <option value="<?=$i?>"><?=$i?>日</option>
                            <?php endfor;?>
                        </select>
                    </div>

                </div>
            </div>
            <br />
            <input type="hidden" name="token" value="<?=$csrf_token?>" />
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="on" >ログイン</button>
            <br />
            <br />
            <?php if($test[ 'recom' ] == 1):?>
                <div class="panel panel-default">
                    <div class="panel-body text-left">
                        <div class="panel-heading">
                            <h3 class="panel-title">推奨OS・推奨ブラウザ</h3>
                        </div>
                        <p class="f14" >安全で快適にご利用いただくために、下記OSと下記バージョンのブラウザのご利用をお勧めいたします。<br />
                        推奨ウェブブラウザ以外でのご利用や、推奨ウェブブラウザでもお客さまの設定によっては、ご利用できない場合や正しく表示されない場合があります。
                        </p>
                        
                        <ul>
                            <li><b>Windowsをお使いの場合</b></li>
                            <li>推奨OS：Windows７以上</li>
                            <li>Microsoft Edge 最新版</li>
                            <li>Mozilla FireFox 最新版</li>
                            <li>Google Chrome最新版</li>
                                                    
                            <li><b>Macをお使いの場合</b></li>
                            <li>推奨OS：最新版</li>
                            <li>Safari最新版</li>
                        </ul>

                    </div>
                </div>
                <br />
                <br />
                <div class="panel panel-default">
                    <div class="panel-body text-left">
                        <div class="panel-heading">
                            <h3 class="panel-title">Javascript・cookieの設定</h3>
                        </div>
                        <p class="f14" >
                            ブラウザ設定でJavascriptの設定を有効にしてください。<br />
                            Javascriptの設定を無効にされている場合、正しく機能しない、もしくは正しく表示されないことがあります。<br />
                            また、一部cookieを利用したコンテンツがございます。Javascript同様設定を有効にしてください。
                        </p>
                    </div>


                </div>
            <?php endif;?>

        </div>
        
        
    </div>
</form>
</body>


</html>
