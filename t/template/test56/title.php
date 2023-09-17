<?PHP

$css1 = "guide";
include_once("include_header.php");
?>
<style>
    
    .titles{
        position:absolute;
        top:50%;
        width:900px;
    }
    .center{
        position:absolute;
        bottom:10%;
        width:900px;
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
