<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<div id="guidbox" >
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
			<p class="f18">
				添削ガイダンスページ 
			</p>
			<ol>
				<li>最初に自己理解ノート作成に必要な登録をして頂きます。<br />初期設定は4つのステップで終了します。</li>
				<li >ブラウザの「戻る」ボタンは使えません。ページ下部の「戻る」ボタンで、　前のページまで戻れます。</li>
				<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。</li>
				<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
				<li>当社は、個人情報を適切な方法で管理し、受検者の同意なく、当社の役職員を除く第三者に対し開示することはありません。</li>
			</ol>
			<div class="center">
				<input type="submit" name="page" value="検査を開始する" class="button">
			</div>
				<input type="hidden" name="temp" value="page">
			</form>
		</div>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
