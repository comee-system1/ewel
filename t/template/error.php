<?PHP
$css1 = "login";
$title = "検査ログイン";
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	

	<form action="./?k=<?=$_REQUEST[ 'k' ]?>" method="POST" >
		<div id="width">
			<p>指定されたURLに誤りがあります。</p>
			<p>担当の方にお問い合わせください。</p>
		</div>

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
