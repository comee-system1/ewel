<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

	<h2>最終画面</h2>
	<h3 style="text-align:center;">受講お疲れ様でした。</h3>
	<div class="box f12 w500 auto" >
		<p><b>日鉄住金P＆E人材開発室　</b></p>
		<ul style="list-style-type:none;">
			<li>秋山 進 委託監修</li>
			<li>
				プリンシプル・コンサルティング・グループ株式会社代表取締役<br />
				京都大学経済学部卒業後、株式会社リクルートに入社。<br />
				事業・商品開発、戦略策定などに従事したのち、インディペンデント・コントラクターとして各種トップ事業のＣＥＯ補佐、事業開発を行う。その後、コンプライアンスとリスク管理に重点を移し、産業再生機構下にあった株式会社カネボウ化粧品のチーフ・コンプライアンス・オフィサー代行を務める。2008年より現職。
			</li>
		</ul>
		<ul >
			<li style="list-style-type:none;"><b>書籍</b></li>
			<li>社長！それは法律問題です(共著：日本経済新聞社2002年)</li>
			<li>実践コンプライアンス講座 これって違法ですか？(共著：日本経済新聞社2003年)</li>
			<li>プロマネの野望(共著：翔泳社2004年)</li>
			<li>インディペンデント・コントラクター(共著：日本経済新聞社2004年)</li>
			<li>転職後、最初の1年にやるべきこと（日本能率協会マネジメントセンター2004年）</li>
			<li>「法令遵守」時代のビジネスNG事例集50 (監修 R25新書MOOKシリーズ2007年)</li>
			<li>それでも不祥事は起こる（日本能率協会マネジメントセンター2008年）</li>

		</ul>
	</div>


		<center><input type="button" id="close" value="画面を閉じる" class="button"></center>
	</form>
	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
