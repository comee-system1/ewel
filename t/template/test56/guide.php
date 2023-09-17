<?PHP

$css1 = "guide";
include_once("include_header.php");
?>
<style>
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
	<h2 class="title">测试指南</h2>
	<ol>
		<li>请从问题的各个选项中选出一个最恰当的答案。</li>
		<li>一共有141道问题。测试时间大约30分钟。</li>
                <li>如果不输入答案无法进入下一道问题。</li>
                <li>浏览器的{返回}按钮不能使用。使用页面下方的{返回}按钮，可以回到前一个页面。</li>
                <li>测试中途结束，或者中断后，请再次登录。</li>
                <li>你的个人信息会根据本公司的隐私保护方针进行妥善处理。</li>
	</ol>


	<div class="center">
		<input type="submit" name="page" value="测试开始" class="button">
	</div>
        
	<input type="hidden" name="temp" value="title">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
