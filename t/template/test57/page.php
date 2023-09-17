<?PHP

$css1 = "guide";
include_once("include_header.php");
?>
<style>
    div.table{
        display:table;
    }
    div.table div.tr{
        display:table-row;
        vertical-align: middle;
    }
    div.table div.td{
        display:table-cell;
        vertical-align: middle;
    }
    div.table div.tp{
        vertical-align: top;
        
    }
    div.table div.td.w20{
        width:20px;
    }
    .radio{
        height:30px;
        width:30px;
    }
    .clearfix:after {
        content: "";
        clear: both;
        display: block;
    }
    p{
        margin:0;
        padding:0;
    }
    p.left{
        float:left;
        margin-right:20px;
    }
    .red{
        color:red;
    }
    .img{ width:460px;}
    .sample_01{
        width: 100%;
        border-collapse: collapse;
    }
    .sample_01 th{
        
        padding: 6px;
        text-align: center;
        vertical-align: top;
        color: #333;
        background-color: #eee;
        border: 1px solid #b9b9b9;
    }
    .sample_01 td{
        padding: 6px;
        background-color: #fff;
        border: 1px solid #b9b9b9;
    }
</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<div class="box">
			<div class="f24 bold gray">
				<div class="left"></div>
				<div class="right"><?=$pager?>/13</div>
			</div>
			<p class="clearfix mt20 f24" ><?=$title[$pager]?></p>
                       
                        <?PHP if($pager >= 10): ?>
                        <?PHP
                            if(count($err) > 0){
                            foreach($err as $key=>$val):
                                
                        ?>
                                <p class="red"><?=$val?></p>
                        <?PHP 
                            endforeach;
                            }
                        ?>
                        <table class="sample_01">
                            <tr>
                                <th style="height:80px;">No</th>
                                <th class="str">a</th>
                                <th style="width:40px;">a<br />比<br />b<br />恰<br />当<br />很<br />多</th>
                                <th style="width:40px;">a<br />比<br />b<br />恰<br />当<br />一<br />些</th>
                                <th style="width:40px;">两<br />者<br />皆<br />可</th>
                                <th style="width:40px;">b<br />比<br />a<br />恰<br />当<br />一<br />些</th>
                                <th style="width:40px;">b<br />比<br />a<br />恰<br />当<br />很<br />多</th>
                                <th class="str">b</th>
                            </tr>
                            <?php
                                $no = 1;
                                if($pager == 11) $no = 11;
                                if($pager == 12) $no = 22;
                                if($pager == 13) $no = 33;
                                foreach($question[ $pager ] as $key=>$ques):
                                
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$ques[1]?></td>
                                <?php for($i=1;$i<=5;$i++):?>
                                <?PHP $sel = "";
                                        $code = "ans".$key;
                                    if($answer[ $code ] == $i) $sel = "CHECKED";
                                ?>
                                <td><input type="radio" name="ans[<?=$key?>]" value="<?=$i?>" class="radio" <?=$sel?> /></td>
                                <?php endfor;?>
                                <td><?=$ques[2]?></td>
                            </tr>
                            <?php 
                                $no++;
                                endforeach;
                            ?>
                        </table>
                        <?php else: ?>
                        <?php foreach($question[ $pager ] as $key=>$val): ?>
                        
                        <div class="mt20">
                            <?php if(isset($sub[ $pager ][ $key] )):?>
                            <p ><span class="f24"><?=$sub[$pager][$key]?></p>
                            <?PHP endif; ?>
                            <?php
                                $no = $key;
                                if($key > 3) $no = $key-3;
                                
                            ?>
                            <p class="clearfix" ><span class="f24"><?=$no?>.</span>　<?=$val?></p>

                            <?php if(isset($err[ $key ])): ?>
                            <p class="red"><?=$err[ $key ]?></p>
                            <?php endif; ?>
                            <p class="" >（选项） </p>
                            <div class="table">                                
                            <?PHP if($pager == 6 
                                    || $pager == 7
                                    ) :?>
                                    <?PHP foreach($selects[ $pager ] as $key2=>$val2) : 
                                               $chk = "";
                                                $acode = "ans".$key;
                                               
                                               if($key2 == $answer[$acode]){
                                                   $chk = "CHECKED";
                                               }
                                               ?>
                                                <div class="tr"><div style="height:20px;"></div></div>
                                                <div class="tr" >
                                                    <div class="td tp" ><?=$key2?>.</div>
                                                    <div class="td tp" >
                                                        <input type="radio" name="ans[<?=$pager?>][<?=$key?>]" value="<?=$key2?>"  class="radio"  id="a_<?=$key?>_<?=$key2?>" <?=$chk?> />
                                                    </div> 
                                                    <div class="td" style="padding-right:10px;">
                                                        <label for="a_<?=$key?>_<?=$key2?>"><?=$val2?></label>
                                                    </div>
                                                </div>
                                                
                                    <?php endforeach; ?>
                            <?PHP elseif($pager == 1 ) :?>
                                <div class="tr">
                                    <?PHP if($key == 1 || $key == 2):?>
                                        <?PHP 
                                            $acode = "ans".$key;
                                        ?>
                                       <div class="td"><input type="text" name="ans[<?=$pager?>][<?=$key?>]" value="<?=$answer[$acode]?>" /><?=$selects[ $pager ][ $key ]?></div>
                                    <?PHP else: ?>
                                       
                                           <?PHP foreach($selects[ $pager ][ $key ] as $key2=>$val2) : 
                                               $chk = "";
                                               if($key2 == $answer[ 'ans3' ]){
                                                   $chk = "CHECKED";
                                               }
                                               ?>
                                                <div class="td" >
                                                    <input type="radio" name="ans[<?=$pager?>][<?=$key?>]" value="<?=$key2?>"  class="radio"  id="a_<?=$key?>_<?=$key2?>" <?=$chk?> />
                                                </div> 
                                                <div class="td" style="padding-right:10px;">
                                                    <label for="a_<?=$key?>_<?=$key2?>"><?=$val2?></label>
                                                </div>
                                           <?php endforeach; ?>
                                          
                                    <?PHP endif; ?>
                                </div>
                            <?PHP else:?>
                            <?PHP
                                $num = 1;
                                $max = count($selects[ $pager ]);
                                foreach($selects[ $pager ] as $key2=>$val2) : ?>
                            <?PHP 
                                $check = "";
                                $anskey = "ans".$key;
                                
                                if($answer[ $anskey ] == $key2){
                                    $check = "CHECKED";
                                }
                            ?>
                            <?php 
                                if($num == 4
                                   && $pager != 8 && $pager != 9   
                                        ):?>
                                <div class="tr">
                                <?php endif;?>
                                <div class="td">
                                    <input type="radio" name="ans[<?=$pager?>][<?=$key?>]" value="<?=$key2?>" id="a_<?=$key?>_<?=$key2?>"  class="radio" <?=$check?> />
                                </div>
                                <div class="td">
                                    <label for="a_<?=$key?>_<?=$key2?>"><?=$val2?></label>
                                </div>
                                <div class="td w20">&nbsp;</div>
                                <?php
                                if($num == $max  && $pager != 8 && $pager != 9  ):?>
                                </div>
                                <?php endif;?>
                            <?php 
                                $num++;
                                endforeach; ?>
                            <?PHP endif; ?><!--$pater-->
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?PHP endif;?>
                        <div style="text-align:center;">
<?PHP if($pager != 1){?>
                            <input type="submit" name="back" value="<?=$back?>" class="button"  >
<?PHP } ?>
                            <input type="submit" name="next" value="<?=$next?>" class="button nexts" id="next" >
                        </div>
                        
		</div><!--waku-->
		<input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage">
		<input type="hidden" name="interpretationPage" value=true>
		<input type="hidden" name="temp" value="page">
                
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<script type="text/javascript">
<!--
$(function(){
	$(".nexts").click(function(){
		
	});
});
//-->
</script>

<?PHP
include_once("include_footer.php");
?>
