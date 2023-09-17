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
		<li>测试分为两个部分。</li>
		<li>测试中途结束，或者中断后，请再次登录。</li>
                <li>您的个人信息会根据本公司的隐私保护方针进行妥善处理。</li>
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
