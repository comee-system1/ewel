<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");
?>

<style type="text/css">
.box2 {
    padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    color: #721c24;/*文字色*/
    background: #f8d7da;
    border: solid 3px #f5c6cb;/*線*/
    border-radius: 10px;/*角の丸み*/
}
.box2 p {
    margin: 0; 
    padding: 0;
	font-weight: normal !important;
}
</style>


<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

		<div id="rltBox">
			<p><?=$test[ 'testname' ]?>が終了しました</p>
			<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>

			<p class="red">
				お疲れ様でした。以上で検査終了となります。
			</p>
			<div class="box2">
				<p>
				注意：通信等の問題でまれに受検終了していないことがあります。
				<br />
				必ずメニュー画面に戻り、未受検検査がないか確認してください。

				</p>
			</div>
			<?php if($test[ 'licensecard' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より受検証明書がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>

			<?php if($test[ 'exam_download' ] == 1): ?>
			<p>
			すべての検査が終了している場合、<br />
			メニュー画面より検査結果がダウンロード可能ですので、ご確認ください。
			</p>
			<?php endif; ?>

			
		</div>

		<center><input type="button" id="close" value="メニューに戻る" class="button"></center>
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
