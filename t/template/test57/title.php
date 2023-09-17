<?PHP

$css1 = "guide";
include_once("include_header.php");
?>
<style>
    
    .titles{
       
        margin-top:5%;
        width:900px;
    }
    .center{
        position:absolute;
        bottom:10%;
        width:900px;
    }
    ol{
        list-style-type:decimal;
    }
</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        <div class="titles">
            <h2 class="title"><?=$partname?></h2>
        </div>
<?PHP if($explain == "A"):?>
            <ol >
                <li>请从问题的各个选项中选出一个最恰当的答案。</li>
                <li>如果不输入答案无法进入下一道问题。</li>
                <li>浏览器的{返回}按钮不能使用。使用页面下方的{返回}按钮，可以回到前一个页面。</li>
            </ol>
<?PHP endif; ?>
<?PHP if($explain == "B"):?>
            <ol >
                <li>请从问题的各个选项中选出一个最恰当的答案。</li>
                <li>问题里面有a和b两个句子。请对比一下a和b,选出哪一个符合您。一个问题只能选一个回答。如果两个都不符合您，
                或者两个都一样符合，请选择{没法选择}。
                </li>
                <li>如果不输入答案无法进入下一道问题。</li>
                <li>浏览器的{返回}按钮不能使用。使用页面下方的{返回}按钮，可以回到前一个页面。</li>
                
            </ol>
            
<?PHP endif; ?>
        <div class="center">
		<input type="submit" name="page" value="下一页" class="button">
	</div>
        <input type="hidden" name="nextPage" value="<?=$pager?>" id="nextPage">
	<input type="hidden" name="temp" value="page">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
