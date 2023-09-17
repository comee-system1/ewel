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
			<li>１つの質問には<span style="background-color:#2595c7;">a:青の選択肢</span>と<span style="background-color:#eea92a;">b:オレンジの選択肢</span>の2つが上下に表示されます。<br><span style="background-color:#2595c7;">a:青の質問</span>と<span style="background-color:#eea92a;">b:オレンジの質問</span>を比較してあなたに当てはまる程度を選択し、1箇所だけチェックをしてください。</li>
			<li>質問は36問あります。受検時間の目安は10分です。</li>
			<li>個人情報は当社のプライバシーポリシーに従って適切に取り扱います。</li>
		</ol>
		<br />
		<ol class="m_ol">
			<li><span style="background-color:#2595c7;">a</span>が<span style="background-color:#eea92a;">b</span>よりとても当てはまる</li>
			<li><span style="background-color:#2595c7;">a</span>が<span style="background-color:#eea92a;">b</span>よりやや当てはまる</li>
			<li>どちらともいえない</li>
			<li><span style="background-color:#eea92a;">b</span>が<span style="background-color:#2595c7;">a</span>よりやや当てはまる</li>
			<li><span style="background-color:#eea92a;">b</span>が<span style="background-color:#2595c7;">a</span>よりとても当てはまる</li>

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
