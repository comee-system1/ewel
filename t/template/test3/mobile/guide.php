<?PHP
$css1 = "guide";
$title = "受検ガイダンス";

include_once("include_header.php");
?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&e=<?=$_REQUEST[ 'e' ]?>&tid=<?=$_REQUEST[ 'tid' ]?>" method="POST">
		<ol class="m_ol">
			<li>各設問の文書を読んで、最もふさわしい回答を１つ選んで答えてください。</li>
			<li>質問は12問あります。受検時間の目安は10分です。</li>
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を中断された場合は、再度ログインし直してください。</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" >
	</div>
		<input type="hidden" name="temp" value="page">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
