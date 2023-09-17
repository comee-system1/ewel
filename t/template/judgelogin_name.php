
<?php include_once("judgelogin_title.php");?>

<div class="container mt20">
    <?php include_once("judgelogin_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="./judgelogin.php?k=<?=$k?>" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">個人情報の登録</h1>
        
        <input type="hidden" name="id"  value="<?=$id?>" >
        
        <div class="row mt20">
            <div class="col-md-8">
                <div style="border-bottom:1px dotted #ccc; width:100%; ">受検ID：<?=$_REQUEST['id']?></div>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-md-4">
                <label>氏名<span class="badge badge-danger">必須</span></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="name1" value="<?=$name1?>" class="form-control" placeholder="姓" />
            </div>
            <div class="col-md-3">
                <input type="text" name="name2" value="<?=$name2?>" class="form-control" placeholder="名" />
            </div>
        </div>
        <div class="row mt20">
            <div class="col-md-4">
            <label>氏名かな<span class="badge badge-danger">必須</span></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="kana1" value="<?=$kana1?>" class="form-control" placeholder="せい" />
            </div>
            <div class="col-md-3">
                <input type="text" name="kana2" value="<?=$kana2?>" class="form-control" placeholder="めい" />
            </div>

        </div>
        <div class="row mt20">
            <div class="col-md-12">
            <label>性別</label>
            <span style="color:red;">※性別は必須項目ではありません</span>
            </div>
            <div class="col-md-2">
                <?php 
                    $chk = "";
                    if($sex == 1) $chk = "CHECKED";
                
                ?>
                <input type="radio" name="sex" value="1" class="form-contorl" id="sex1" <?=$chk?> />
                <label for="sex1" >男性</label>
            </div>
            <div class="col-md-2">
                <?php 
                    $chk = "";
                    if($sex == 2) $chk = "CHECKED";
                
                ?>
                <input type="radio" name="sex" value="2" class="form-contorl" id="sex2" <?=$chk?> />
                <label for="sex2" >女性</label>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-md-4">
            <label>生年月日</label>
            </div>
            <div class="col-md-12">
                <?=$year?>年
                <?=$month?>月
                <?=$day?>日
                <input type="hidden" name="year"  value="<?=$year?>" >
                <input type="hidden" name="month"  value="<?=$month?>" >
                <input type="hidden" name="day"  value="<?=$day?>" >
            </div>
        </div>
        <div class="row mt20 box border pd20">
        <?php
            $pv = "本検査提供会社";
            if($test[ 'privacy_flg' ] == 1):?>
        <?php $pv = $test[ 'name' ]; ?>
        <?php endif;?>
        <p>
            <span><?php echo sprintf("%s",$pv ); ?></span><span>は、個人情報を適切な方法で管理し、下記の利用目的以外で受検者の同意なく、第三者に対し開示することはありません。</span>
        </p>

        <p><b>【個人情報の利用目的】</b>
        <br />
        <?php $pv = $test[ 'name' ];  ?>
        本検査提供会社は、<?=$pv?>の担当部署に、採用活動や人材育成等の目的範囲内に限定し、結果を開示します。<br />
        <?=$pv?>は、目的に応じ必要な範囲で、検査提供会社に情報を開示することがあります。<br />
        検査提供会社は、研究開発を目的として、受検者に関する検査結果を個人が識別、または特定できないようにし、利用する場合があります。<br />
        <br />
        <br />
        <b>【検査受検に関する注意事項】</b>
        <br />
        <!-- 20220606 山本対応 文言修正 -->
        本検査受検にて得られる検査結果は、当該受検者の人格の全てを規定したり保証したりするものではありません。<br />
        検査提供会社は、検査受検の結果によって被る受検者の損害に対して、一切責任を負いません。<br /><br />

        同意して頂ける場合は、次へお進み下さい。
        </p>

        </div>
        <div class="row mt20">
            <div class="col-md-2">
                <a href="./judgelogin.php?k=<?=$k?>" class="btn btn-lg btn-warning btn-block" type="button" >戻る</a>
            </div>
            <div class="col-md-2">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="nameSet" value="on" >次へ</button>
            </div>
        </div>
        <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
    </form>
  </div>
</div>