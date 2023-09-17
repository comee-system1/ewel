
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    <div class="card card-primary">
        <div class="card-body">
            <?=$test[ 'testname' ]?>
        </div>
    </div>
    
    <div class="card-deck boxes mt10">
    
        <div class="card pd20">
            <?php if($notlogin == false):?>
            <form class="form-signin" action="./judgelogin.php?k=<?=$k?>" method="POST">
                
                
                <h1 class="h3 mb-3 font-weight-normal">ログイン</h1>
                <p>
                    <?php if($test[ 'explain_text' ]):?>
                        <?=nl2br($test['explain_text'])?>
                    <?php else:?>
                        検査を実施します。<br />
                        指示されたID/生年月日を入力後ログインを行ってください。
                    <?php endif;?>
                </p>
                <div class="row mt20">
                    <div class="col-md-12">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control w200" placeholder="IDを入力してください" value="<?=$id?>" >
                    </div>
                </div>
                <div class="row mt20">
                    <div class="col-md-4">
                    <label>生年月日</label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-2">
                        <input type="text" name="year"  class="form-control " placeholder="年を入力してください" value="<?=$year?>" />
                    </div>
                    <div class="col-md-2">
                        <select name="month" class="form-control">
                            <?php for($i=1;$i<=12;$i++):?>
                                <?php 
                                    $sel = "";
                                    if($month == $i) $sel = "SELECTED";    
                                ?>
                                <option value="<?=$i?>" <?=$sel?> ><?=$i?>月</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="day" class="form-control">
                            <?php for($i=1;$i<=31;$i++):?>
                                <?php
                                    $sel = "";
                                    if($day == $i) $sel = "SELECTED";
                                ?>
                                <option value="<?=$i?>" <?=$sel?> ><?=$i?>日</option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                

                <div class="row mt20">
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary " type="submit" name="login" value="on">ログイン</button>
                    </div>
                </div>
                <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
            </form>
            <?php endif; ?>
        </div>
        <div class="container mt20">
        
          <b class="bd-title" >推奨OS・推奨ブラウザ</b>
          <p>
            安全で快適にご利用いただくために、下記OSと下記バージョンのブラウザのご利用をお勧めいたします。<br />
            推奨ウェブブラウザ以外でのご利用や、推奨ウェブブラウザでもお客さまの設定によっては、ご利用できない場合や正しく表示されない場合があります。
          </p>
          
          <b class="mt20">Windowsをお使いの場合</b>
          <ul>
            <li>推奨OS:<br />　Windows10以上</li>
            <li>推奨ブラウザ:<br />　Microsoft Edge 最新版</li>
            <li>　Mozilla FireFox 最新版</li>
            <li>　Google Chrome最新版</li>
          </ul>
          <b class="mt20">Macをお使いの場合</b>
          <ul>
            <li>推奨OS：<br />　最新版</li>
            <li>推奨ブラウザ:<br />　Safari最新版</li>
          </ul>
          <b class="mt20">Javascript・cookieの設定</b>
          <p>ブラウザ設定でJavascriptの設定を有効にしてください。<br />
            Javascriptの設定を無効にされている場合、正しく機能しない、もしくは正しく表示されないことがあります。<br />
            また、一部cookieを利用したコンテンツがございます。Javascript同様設定を有効にしてください。
          </p>


          
        </div>
    </div>



</div>