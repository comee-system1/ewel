
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
        <h1 class="h3 mb-3 font-weight-normal">動作環境チェック結果</h1>
        <div class="row mt20">
            <div class="col-md-12">
                <p>ご利用のパソコン及びブラウザを自動でチェックしています。 すべてのチェック項目の判定に「<span class="red">〇</span>」が表示されているか、ご確認ください。</p>
                <p>
                「<span class="blue">×</span>」 が表示されている場合、そのチェック項目「対処方法」欄に表示される「詳細」ボタンを参照の上、再度「動作環境チェック」をお試しください。対処しても改善されない場合は、担当者に問い合わせください。

                </p>
                <br />
                <p><span class="red">〇</span>：問題ありません</p>
                <p><span class="blue">×</span>：対処方法を確認ください要確認内容を確認ください</p>
            </div>
            <div class="p-3 mb-2 bg-primary text-white">
            動作環境チェックに問題がない場合であっても、パソコンの性能や他のアプリケーションや常駐ソフト等の影響により　正常に動作しなかったり、フリーズ状態になる場合があります。

            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">チェック項目</th>
                    <th scope="col">判定</th>
                    <th scope="col">内容</th>
                    <th scope="col">対処方法</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>OS</th>
                        <?php
                            $osText = "<span class='red'>〇</span>";
                            if(!$osflg) $osText= "<span class='blue'>×</span>";
                        ?>
                        <td id="os"><?=$osText?></td>
                        <td><?=$os?></td>
                        <td><a href="./judgeBrowser.php" target=_blank>詳細へ</a></td>
                    </tr>
                    <tr>
                        <th>ブラウザ</th>
                        <?php
                            $osText = "<span class='red'>〇</span>";
                            if(!$browserflg) $osText= "<span class='blue'>×</span>";
                        ?>

                        <td id="browser"><?=$osText?></td>
                        <td><?=$browser?></td>
                        <td><a href="./judgeBrowser.php" target=_blank>詳細へ</a></td>
                    </tr>
                    <tr>
                        <th>javascript</th>
                        <td id="javascript"><span class="blue">×</span></td>
                        <td id="javascriptText">設定されていません</td>
                        <td><a href="./judgeBrowser.php" target=_blank>詳細へ</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt20">
            <div class="col-md-2">
                <a href="./judgelogin.php?k=<?=$k?>" class="btn btn-warning text-white w100" >戻る</a>
            </div>
            <div class="col-md-2" id="<?=$next_hidden?>">
                <form action="./judgelogin.php?k=<?=$k?>" method="POST" >
                    <button type="submit" name="checkComp" value="on" class="btn btn-primary w100" >次へ</button>
                    <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="year" value="<?=$year?>">
                    <input type="hidden" name="month" value="<?=$month?>">
                    <input type="hidden" name="day" value="<?=$day?>">
                    <input type="hidden" name="next_hidden" value="<?=$next_hidden?>">
                </form>
            </div>
        </div>
        
        
    </div>
  </div>
</div>
