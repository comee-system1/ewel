<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="f18">
			本検査は、貴社の組織に所属する<?=$object?>として、リスクの高い人材を明確にするための検査です。 貴社の<?=$object?>
			として、<span class="red">AとBの行動のどちらを取って欲しくないですか。取って欲しくない行動を選択してください。</span>
		</p>
		<ol>
			<li>回答を入力しないと次ページに進めません。</li>
			<li>ブラウザの戻るボタンは使えません。ページ下部の「戻る」で、前のページに戻れます。 </li>
			<li>質問は、全部で66問あります。受検時間の目安は20分です。</li>
			<li>1つの質問には「A」と「B」の２つの文があります。「A」と「B」を比較して、当てはまる程度を選択し、1個所だけチェックをして下さい。</li>
			<li>検査を途中終了した場合は、再度ログインし直してください。検査は最初から表示されますが、前回の回答が記入されておりますので、途中からご受検頂けます。</li>
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を中断された場合は、再度ログインし直してください。 </li>
		</ol>
		<hr />
		<h3 id="exTitle">設問回答方法</h3>
		<p class="mg0">※例：下記の設問で、貴社の社員としてAとBを行動のうち、Aの行動をとって欲しくないと感じる場合は、「明確にA」を選択してください。</p>
		<table id="table">
			<tr>
				<th>A</th>
				<th>B</th>
			</tr>
			<tr>

				<td >
				<p>不快な事態や不利な状況において、冷静さを欠いた行動を取る。もしくは、粘り強く対応できず、あきらめてしまう。</p>
				<div class="thumb"><img src="/images/vf2/No4.gif"  ></div>
				</td>

				<td>
				<p>自分の考えをきちんと相手に伝えることができず、不適切な意見でも同調しやすく、反論できない。</p>
				<div class="thumb"><img src="/images/vf2/No5.gif"  ></div>
				</td>
				
			</tr>
		</table>
		<p id="ex">※画像にマウスを乗せると拡大表示されます。</p>
		<p id="explain">貴社の<?=$object?>として、<span class="red">AとBの行動のどちらを取って欲しくないですか。取って欲しくない行動を選択してください。</span>	選択された回答が黄色に変わります。</p>
		
		<ul id="ansLine">
			<li class="radio" id="li_1"><div class="indent" ><input type="radio" name="sample" value="1" id="chk_1"></div><img src="../../image/check_off.gif" class="radio img1" id="img_1" />明確にＡ</li>
			<li class="radio" id="li_2"><div class="indent" ><input type="radio" name="sample" value="2" id="chk_2"></div><img src="../../image/check_off.gif" class="radio img2" id="img_2" />どちらかというとＡ</li>
			<li class="radio" id="li_3"><div class="indent" ><input type="radio" name="sample" value="3" id="chk_3"></div><img src="../../image/check_off.gif" class="radio img3" id="img_3" />どちらかというとＢ</li>
			<li class="radio" id="li_4"><div class="indent" ><input type="radio" name="sample" value="4" id="chk_4"></div><img src="../../image/check_off.gif" class="radio img4" id="img_4" />明確にＢ</li>
                                                                                                  
		</ul>
		<hr />
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
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
