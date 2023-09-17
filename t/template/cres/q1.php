<?php include_once("head.php");?>


  <body class="text-center">
    <div class="boxbord" >
  <?php include_once("title.php");?>

        <form action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST"  >

            <div class="">
                <div class="questionbox">
                    <div class="panel panel-default">
                        <div class="panel-heading text-left">１．内省</div>
                        <div class="panel-body">
                            <div class="mt20 text-left">
                                <p><?=$name?> 様</p>
                                <p>
                                CReS（クレス）です。<br />
                                コーチングセッションの内容やご自身の気づきを、
                                記憶が新しいうちに振り返りをしておきましょう。

                                </p>
                                <p class="text-red">※は入力必須項目です。</p>
                            </div>
                            <?php if($cres->errmsg):?>
                                <div class="alert alert-danger" role="alert">
                                <?=$cres->errmsg?>
                                </div>
                            <?php endif;?>
                            <div class="mt20 text-left">
                                <div class="orange">
                                <label for="ID" >1.コーチングの目的</label><span class="text-red">※</span>
                                </div>
                                <br />
                                <small>コーチングを行っている理由を記入してください</small><br />
                                <textarea name="question1" rows=6 class="form-control" placeholder="自由記入欄"><?=$data['main']['question1']?></textarea>
                            </div>
                            <div class="mt20 text-left">
                                <div class="orange">
                                    <label for="ID" >2.トピック</label><span class="text-red">※</span>
                                </div>
                                <br />
                                <small>今回のコーチングで扱った主なトピックは何ですか？</small><br />
                                <textarea name="question2" rows=6 class="form-control" placeholder="自由記入欄"><?=$data['main']['question2']?></textarea>
                            </div>
                            <div class="mt20 text-left textareabox">
                                <div class="orange">
                                    <label for="ID" >3.気づき</label><span class="text-red">※</span>
                                </div>
                                <br />
                                <small>今回のコーチングからの気づきは何ですか？
                                    <br />
                                    （3つ以上記入してください。3つ以上の場合は追加ボタンで追加してください）
                                </small><br />
                                <?php 
                                $max = 3;
                                if(count($data['sub']['question3']) > $max) $max = count($data['sub']['question3']);
                                for($i=1;$i<=$max;$i++):?>
                                    <textarea name="question[3][<?=$i?>]" rows=3 class="form-control mt10 textareacount" placeholder="自由記入欄"><?=$data['sub']['question3'][$i]['note']?></textarea>
                                <?php endfor; ?>
                                
                            </div>
                            <div class="text-right mt10">
                                <a class="btn btn-danger w100 del fwhite" id="question_delete" >削除</a>
                                <a class="btn btn-warning w100 add fwhite" >追加</a>
                            </div>
                            <p class="text-red">※削除ボタンを押すと下のボックスから削除されますので、ご注意ください。</p>
                            <div class="mt20 text-left textareaboxaction">
                                <div class="orange">
                                    <label for="ID" >4.アクション</label><span class="text-red">※</span>
                                </div>
                                <br />
                                <small>次回までのアクションは何ですか。下記に記入してください。<br />
                                （１つ以上の場合は追加ボタンで追加してください）
                                </small><br />

                                <?php 
                                $max = 1;
                                if(count($data['sub']['question4']) > $max) $max = count($data['sub']['question4']);
                                for($i=1;$i<=$max;$i++):?>
                                    <textarea name="question[4][<?=$i?>]" rows=3 class="form-control mt10 textareaaction" placeholder="自由記入欄"><?=$data['sub']['question4'][$i]['note']?></textarea>
                                <?php endfor; ?>

                            </div>

                            <div class="text-right mt10">
                                <a class="btn btn-danger w100 delaction fwhite" >削除</a>
                                <a class="btn btn-warning w100 addaction fwhite" >追加</a>
                            </div>
                            <p class="text-red">※削除ボタンを押すと下のボックスから削除されますので、ご注意ください。</p>
                            <div class="row mt20">
                                <div class="col-md-3" >
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="keep" value="on" >途中保存</button>                    
                                </div>
                                <div class="col-md-3" >
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="finish" value="on" >送付</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="token" value="<?=$csrf_token?>" />
        </form>
    </div>
</body>
<?php include_once("footer.php");?>

<script type="text/javascript">
    var _textarea = "";
    var _size = "";
    $("[name='keep']").click(function(){
        if(confirm("データをの途中保存を行います。よろしいですか？")){
            return true;
        }else{
            return false;
        }
    });
    $("[name='finish']").click(function(){
        if(confirm("データをの送信を行います。よろしいですか？")){
            return true;
        }else{
            return false;
        }
    });
    $(".add").on("click",function(){
        
        $(".textareabox").ready(function(){
            _size = $('.textareacount').length+1;
            if(_size > 3 ){
                
                $("a#question_delete").removeClass("disabled");
            }
            _textarea = "<textarea name='question[3]["+_size+"]' rows=3 class='textareacount form-control mt10' placeholder='自由記入欄' >";
            $("div.textareabox").append(_textarea);

        });
        
    });
    $(".del").on("click",function(){
        
        $(".textareabox").ready(function(){
            _size = $('.textareacount').length;
            if(_size <=4 ){
                $("a#question_delete").addClass("disabled");
            }else{
                $("a#question_delete").removeClass("disabled");
            }
            $('textarea[name="question[3]['+_size+']"]').remove();
            
        });
        
    });
    $(".textareabox").ready(function(){
        _size = $('.textareacount').length;
        if(_size <= 3 ){
            $("a#question_delete").addClass("disabled");
        }
    });
        
    $(".addaction").on("click",function(){
        $(".textareaaction").ready(function(){
            $("a.delaction").removeClass("disabled");
            _size = $('.textareaboxaction').length+1;
            _textarea = "<textarea name='question[4]["+_size+"]' rows=3 class='textareaboxaction form-control mt10' placeholder='自由記入欄' >";
            $("div.textareaboxaction").append(_textarea);

        });
    });
    $(".delaction").on("click",function(){
        $(".textareaaction").ready(function(){
            _size = $('.textareaboxaction').length;
            if(_size <= 2){
                $("a.delaction").addClass("disabled");
            
            }
            $('textarea[name="question[4]['+_size+']"]').remove();
            

        });
    });

    $(".textareaaction").ready(function(){
        _size = $('.textareaboxaction').length;
        if(_size <= 1 ){
            $("a.delaction").addClass("disabled");
        }
    });

</script>

</html>
