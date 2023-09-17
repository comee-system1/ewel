<?php include_once("head.php");?>


  <body class="text-center">
  <div class="boxbord" >
  <?php include_once("title.php");?>

    
    <form action="./cres.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST"  >
        <div class="container ">
            <div class="questionbox ">
                <div class="panel panel-default">
                    <div class="panel-heading text-left">リフレクション（アクション）</div>
                    <div class="panel-body">
                        <div class="mt20 text-left">
                            <p><?=$name?> 様</p>
                            <p>
                            CReS（クレス）です。<br />
                            コーチングを受け、ご自身がやりたいことやゴールに近づけたでしょうか。<br />
                            コーチングを受けた後、どのような変化があったのか言語化してみましょう。

                            </p>
                            <span class="text-red">
                    ■変更したい場合は、編集するにチェックをしてください。
                    <br />編集することができます。
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

                        <div class="mt20 text-left textareabox">
                            <label for="ID" >3.気づき</label><br />
                            <small>今回のコーチングからの気づきは何ですか？</small><br />
                            <?php 
                            $max = count($data['sub']['question3']);
                            for($i=1;$i<=$max;$i++):?>
                                <b><?=$i?>.</b>
                                <br />
                                <input type="checkbox" id="question-3-<?=$i?>" value="on" class="editCheck" />
                                <label for="question-3-<?=$i?>">編集</label>
                                <br />
                                <textarea name="question[3][<?=$i?>]" id="q3-<?=$i?>" class="form-control" rows=3 readonly ><?=$data['sub']['question3'][$i]['note']?></textarea>
                                
                                <hr />
                            <?php endfor; ?>
                            
                        </div>
                        
                        <div class="mt20 text-left ">
                            <label for="ID" >4.アクション</label><br />

                            <?php 
                            $max = count($data['sub']['question4']);
                            for($i=1;$i<=$max;$i++):?>
                                <b><?=$i?>.</b>
                                <br />
                                <input type="checkbox" id="question-4-<?=$i?>" value="on" class="editCheck" />
                                <label for="question-4-<?=$i?>">編集</label>
                                <br />
                                <textarea name="question[4][<?=$i?>]" id="q4-<?=$i?>" class="form-control" rows=3 readonly ><?=$data['sub']['question4'][$i]['note']?></textarea>
                            <?php endfor; ?>
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
                <div class="mt20 text-left">
                    <div class="row">
                        <div class="col-md-1 text-right">1.</div>
                        <div class="col-md-11">
                            前回のコーチングから今日までの間に行ったことはどんなことですか。<br />
                            また、行った結果気が付いたことについても記入してください。<br />
                            （複数ある場合は追加ボタンで追加してください）
                            <span class="text-red">※</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered crestable">
                                <thead class="thead-lignt">
                                    <tr>
                                        <th>行ったこと</th>
                                        <th>気づき</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $max = 1;
                                        if(count($data['sub']['question7']) > $max) $max = count($data['sub']['question7']);
                                        for($i=1;$i<=$max;$i++):
                                    ?>
                                    <tr class="tr">
                                        <td>
                                            <textarea class="form-control" name="question[7][<?=$i?>]" ><?=$data['sub']['question7'][$i]['note']?></textarea>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="question[8][<?=$i?>]" ><?=$data['sub']['question8'][$i]['note']?></textarea>
                                        </td>
                                    </tr>
                                    <?php
                                        endfor;
                                    ?>
                                </tbody>
                            </table>
                            <div class="text-right mt10">
                                <a class="btn btn-danger w100 del fwhite" >削除</a>
                                <a class="btn btn-warning w100 add fwhite" >追加</a>
                            </div>
                            <p class="text-danger">※削除ボタンを押すと下のボックスから削除されますので、ご注意ください。</p>

                        </div>
                    </div>
                </div>
                <div class="mt20 text-left ">
                    <div class="row">
                        <div class="col-md-1 text-right">2.</div>
                        <div class="col-md-11">
                            次回コーチングで取り上げたいトピックを記載してください。<br />
                            （当日、お話しいただいても構いません）
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <textarea name="question9" rows=6  class="form-control mt10 " placeholder="自由記入欄" ><?=$data['main']['question9']?></textarea>
                        </div>
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
    var _tr = "";
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
    
    $(".add").on("click",function(){
        
        $(".tr").ready(function(){
            _size = $('tr.tr').length+1;
            $("a.del").removeClass("disabled");
            _tr = '<tr class="tr">';
            _tr += '<td>';
            _tr += '<textarea class="form-control" name="question[7]['+_size+']" ></textarea>';
            _tr += '</td>';
            _tr += '<td>';
            _tr += '<textarea class="form-control" name="question[8]['+_size+']" ></textarea>';
            _tr += '</td>';
            _tr += '</tr>';
            $(".crestable").append(_tr);

        });
        
    });

    _size = $('tr.tr').length;
    if(_size <=1){
        $("a.del").addClass("disabled");
    }
    $(".del").on("click",function(){
        _size = $('tr.tr').length;
        if(_size <= 2){
            $("a.del").addClass("disabled");
        }
        $('tr.tr:last').remove();
        
    });


</script>

</html>
