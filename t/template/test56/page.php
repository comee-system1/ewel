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
				<div class="right"><?=$pager?>/46</div>
			</div>
			<p class="clearfix mt20 f24" ><?=$title[$pager]?></p>
                        <?php foreach($question[ $pager ] as $key=>$val): ?>
                        <div class="mt20">
                            <?php if(isset($sub[ $pager ][ $key] )):?>
                            <p ><span class="f24"><?=$sub[$pager][$key]?></p>
                            <?PHP endif; ?>
                            <?php //問題番号が102以上の時は102を引く
                                $no = $key;
                                if($key > 102) $no = $key-102;
                            ?>
                            <p class="clearfix" ><span class="f24"><?=$no?>.</span>　<?=$val?></p>
                            <?php if(isset($img[ $pager ])): ?>
                            <!--
                            <center>
                                <img src="../../image/test56/<?=$img[ $pager ]?>" class="img" />
                            </center>
                            -->
                            <?php endif; ?>
                            <?php if($key > 102): ?>
                            <p class="red"><?=$err[ $pager ]?></p>
                            <?php elseif(isset($err[ $key ])): ?>
                            <p class="red"><?=$err[ $key ]?></p>
                            <?php endif; ?>
                            <p class="" >选项</p>
                            <div class="table">
                            <?PHP foreach($selects[ $pager ] as $key2=>$val2) : ?>
                            <?PHP 
                                $check = "";
                                $anskey = "ans".$key;
                                if($answer[ $anskey ] == $key2){
                                    $check = "CHECKED";
                                }
                            ?>
                            <?php //問題番号が102以上の時はtrを入れる
                                if($key > 102):?>
                                <div class="tr">
                                <?php endif;?>
                                <div class="td">
                                    <input type="radio" name="ans[<?=$pager?>][<?=$key?>]" value="<?=$key2?>" id="a_<?=$key?>_<?=$key2?>"  class="radio" <?=$check?> />
                                </div>
                                <div class="td">
                                    <label for="a_<?=$key?>_<?=$key2?>"><?=$val2?></label>
                                </div>
                                <div class="td w20">&nbsp;</div>
                                <?php //問題番号が102以上の時はtrを入れる
                                if($key > 102):?>
                                </div>
                                <?php endif;?>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
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
