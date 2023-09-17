<?php include_once("head.php");?>


  <body class="text-center">
  <div class="boxbord" >
  <?php include_once("title.php");?>

    
    <form action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST"  >
        <div class="">
            <div class="questionbox ">
                <div class="panel panel-default">
                    <div class="panel-heading text-left">２．確認</div>
                    <div class="panel-body">
                        <div class="mt20 text-left">
                            <p><?=$name?> 様</p>
                            <p>
                                CReS（クレス）です。<br />
                                アクションの進み具合は如何でしょうか。<br />
                                前回記入した内容を確認しましょう。
                            </p>
                            <span class="text-red">
                                ■ 変更したい場合は、編集にチェックをしてください。<br />
                                　編集することができます。
                            </span>
                        </div>

                        <div class="mt20 text-left">
                            <label for="ID" >1.コーチングのテーマ</label>
                            <br />
                            <input type="checkbox" id="question1" value="on" class="editCheck" />
                            <label for="question1">編集</label>
                            <br />
                            <textarea name="question1" class="form-control" rows=6 readonly ><?=$data['main']['question1']?></textarea>
                            
                        </div>
                        <div class="mt20 text-left">
                            <label for="ID" >2.トピック</label>
                            <br />
                            <input type="checkbox" id="question2" value="on" class="editCheck" />
                            <label for="question2">編集</label>
                            <br />
                            <textarea name="question2" class="form-control" rows=6 readonly ><?=$data['main']['question2']?></textarea>
                            
                        </div>
                        <div class="mt20 text-left textareabox ">
                            <label for="ID" >3.気づき</label><br />
                            <small>今回のコーチングからの気づきは何ですか？</small>
                            <div class="textareaboxaction1">
                                <?php 
                                $max = count($data['sub']['question3']);
                                if(!$max){
                                    $max = 1;
                                }
                                for($i=1;$i<=$max;$i++):?>
                                    <b><?=$i?>.</b>
                                    <br />
                                    <input type="checkbox" id="question-3-<?=$i?>" value="on" class="editCheck" />
                                    <label for="question-3-<?=$i?>">編集</label>
                                    <br />
                                    <textarea name="question[3][<?=$i?>]" id="q3-<?=$i?>" class="form-control textareaaction1" rows=3 readonly ><?=$data['sub']['question3'][$i]['note']?></textarea>
                                    
                                    <hr />
                                <?php endfor; ?>
                            </div>
                            <div class="text-right mt10">
                                <a class="btn btn-warning w100 addaction1 fwhite" >追加</a>
                            </div>
                        </div>
                        

                        <div class="mt20 text-left ">
                            <label for="ID" >4.アクション</label>
                            <div class="textareaboxaction2">
                                <?php 
                                $max = count($data['sub']['question4']);
                                if(!$max){
                                    $max = 1;
                                }
                                for($i=1;$i<=$max;$i++):?>
                                    <b><?=$i?>.</b>
                                    <br />
                                    <input type="checkbox" id="question-4-<?=$i?>" value="on" class="editCheck" />
                                    <label for="question-4-<?=$i?>">編集</label>
                                    <br />
                                    <textarea name="question[4][<?=$i?>]" id="q4-<?=$i?>" class="form-control" rows=3 readonly ><?=$data['sub']['question4'][$i]['note']?></textarea>
                                <?php endfor; ?>
                            </div>


                            <div class="text-right mt10">
                                <a class="btn btn-warning w100 addaction2 fwhite" >追加</a>
                            </div>

                        </div>
                    </div>
                </div>
                

            </div>

            
        </div>
    
    
        <div class="container ">
            <div class="questionbox ">
                <?php if($cres->errmsg):?>
                    <div class="alert alert-danger" role="alert">
                    <?=$cres->errmsg?>
                    </div>
                <?php endif;?>
                <h3 class="text-left text-red">以下の質問について、該当する場合は記入してください。</h3>
                <div class="mt20 text-left">
                    <label >1.アクションを進めていく中で、気づいたことはありますか？
                    
                    </label><br />
                    <ul>
                        <li>アクションをする際に障害になっていることは何ですか？</li>
                        <li>実施してきづいたことは何ですか？</li>
                        <li>行動に移せていない理由は何ですか？</li>
                    </ul>
                    <textarea class="form-control" name="question5" rows=6 ><?=$data['main']['question5']?></textarea>
                </div>
                <div class="mt20 text-left ">
                    <label  >
                        2.実施してみた結果、見直したいアクションはありますか。<br />
                        ある場合は、編集するチェックボックスをチェックし、見直し後のアクションと見直す理由を記載してください。

                    </label>
                    <br />
                    <br />
                    <span class="text-red">
                    ■変更したい場合は、編集するにチェックをしてください。
                    <br />編集することができます。
                    </span>
                    <div class="textareaboxaction">
                        <?php 
                        $max = count($data['sub']['question4']);
                        if(count($data['sub']['question6'])){
                            $max = count($data['sub']['question6']);
                        }
                        for($i=1;$i<=$max;$i++):

                            $disable = "";
                            $chk = "checked";
                            if(strlen($data['sub']['question6'][$i]['note']) < 1):
                                $disable = "readonly";
                                $chk = "";
                            endif;?>

                            <div class="row ">
                                <div class="col-md-2 text-center">
                                    編集する<br />
                                    <input type="checkbox" id="chk-<?=$i?>" value="on"  class="form-control shnone checkbox" <?=$chk?> />
                                </div>
                                <div class="col-md-10">
                                    <?php
                                        $textarea = $data['sub']['question4'][$i]['note'];
                                        if($data['sub']['question6'][$i]['note']){
                                            $textarea = $data['sub']['question6'][$i]['note'];
                                        }
                                    ?>
                                    <textarea name="question[6][<?=$i?>]" rows=3 id="textarea-<?=$i?>" class="form-control mt10 textareaaction" placeholder="自由記入欄" <?=$disable?> ><?=$textarea?></textarea>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="text-right mt10">
                        <a class="btn btn-warning w100 addaction fwhite" >追加</a>
                    </div>
                </div>


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
        <input type="hidden" name="token" value="<?=$csrf_token?>" />
    </form>
  </div>
</body>
<?php include_once("footer.php");?>

<script type="text/javascript">
    var _textarea = "";
    var _size = "";
    $(".editCheck").click(function(){
        var _id = $(this).attr("id").split("-");
        var _chk = $(this).prop("checked");
        
        if(_id[1]){ 
            _id = "q"+_id[1]+"-"+_id[2];
            if(_chk){
                $("#"+_id).attr('readonly',false);
            }else{
                $("#"+_id).attr('readonly',true);
            }
        }else{
            if(_chk){
                $("[name='"+_id+"']").attr('readonly',false);
            }else{
                $("[name='"+_id+"']").attr('readonly',true);
            }
        }
        
        return true;
    });
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
    $(".checkbox").on("click",function(){
        var _split = $(this).attr("id").split("-");
        var _key = "textarea-"+_split[1];
        var _dis = $("#"+_key).prop('readonly');
        if(_dis){
            $("#"+_key).prop('readonly', false);
        }else{
            $("#"+_key).prop('readonly', true);
        }
        
    });
    //気づき追加ボタン
    $(".addaction1").on("click",function(){
        
        $(".textareaaction1").ready(function(){
            _size = $('.textareaaction1').length+1;
            _textarea = "<textarea name='question[3]["+_size+"]' rows=3 class='textareaboxaction1 form-control mt10' placeholder='自由記入欄' >";

            _textarea = '<div class="row">';
            _textarea += '<div class="col-md-12">';
            _textarea += '<textarea name="question[3]['+_size+']" rows=3 id="textarea-'+_size+'" class="form-control mt10 textareaaction1" placeholder="自由記入欄"  ></textarea>';
            _textarea += '</div>';
            _textarea += '</div>';
            $("div.textareaboxaction1").append(_textarea);

        });
        
    });
    $(".addaction2").on("click",function(){
        
        $(".textareaaction2").ready(function(){
            _size = $('.textareaaction2').length+1;
            _textarea = "<textarea name='question[4]["+_size+"]' rows=3 class='textareaboxaction2 form-control mt10' placeholder='自由記入欄' >";

            _textarea = '<div class="row">';
            _textarea += '<div class="col-md-12">';
            _textarea += '<textarea name="question[4]['+_size+']" rows=3 id="textarea-'+_size+'" class="form-control mt10 textareaaction2" placeholder="自由記入欄"  ></textarea>';
            _textarea += '</div>';
            _textarea += '</div>';
            $("div.textareaboxaction2").append(_textarea);

        });
        
    });

    
    $(".addaction").on("click",function(){
        
        $(".textareaaction").ready(function(){
            _size = $('.textareaaction').length+1;
            _textarea = "<textarea name='question[6]["+_size+"]' rows=3 class='textareaboxaction form-control mt10' placeholder='自由記入欄' >";

            _textarea = '<div class="row">';
            _textarea += '<div class="col-md-2 text-center"></div>';
            _textarea += '<div class="col-md-10">';
            _textarea += '<textarea name="question[6]['+_size+']" rows=3 id="textarea-'+_size+'" class="form-control mt10 textareaaction" placeholder="自由記入欄"  ></textarea>';
            _textarea += '</div>';
            _textarea += '</div>';
            $("div.textareaboxaction").append(_textarea);

        });
        
    });
</script>

</html>
