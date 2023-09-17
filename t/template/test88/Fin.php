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
		<p><b>日鉄P＆E人事部　</b></p>
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
			<li>「一体感」が会社を潰す 異質と一流を排除する＜子ども病＞の正体 (PHPビジネス新書2014年)</li>
			<li>「会社の悪口」は８割正しいコンサルタントが教えるダメな会社の困った病 (SB新書2015年)</li>
			<li>職場の「やりづらい人」を動かす技術（KADOKAWA2018）</li>
			<li>これだけは知っておきたいコンプライアンスの基本24のルール（日本能率協会マネジメントセンター2020年）</li>
			<li>転職1年目の教科書（日本能率協会マネジメントセンター2021年）</li>
		</ul>
	</div>


		
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
