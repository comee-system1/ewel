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

		<div id="rltBox">
			<p><?=$test[ 'testname' ]?>が終了しました</p>
			<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
			
			<div id="box">
				<h3>【把握力】</h3>
				<p><?=mb_convert_encoding($a_math_advice_haku_pdf[$hkey],"UTF-8","SJIS")?></p>
				<h3>【分析力】</h3>
				<p><?=mb_convert_encoding($a_math_advice_bunseki_pdf[$bkey],"UTF-8","SJIS")?></p>
				<h3>【選択力】</h3>
				<p><?=mb_convert_encoding($a_math_advice_sentaku_pdf[$skey],"UTF-8","SJIS")?></p>
				<h3>【予測力】</h3>
				<p><?=mb_convert_encoding($a_math_advice_yosoku_pdf[$ykey],"UTF-8","SJIS")?></p>
				<h3>【表現力】</h3>
				<p><?=mb_convert_encoding($a_math_advice_hyogen_pdf[$hykey],"UTF-8","SJIS")?></p>
			</div>

			<p class="red">
				お疲れ様でした。以上で検査終了となります。<br />
				未受検の検査がないかメニュー画面に移動し、確認してください。
			</p>


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
