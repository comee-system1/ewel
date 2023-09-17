<!doctype html>
<html lang="ja" >
  <head>
    <title>感情能力検査</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://igtests.sakura.ne.jp/js/test/type47/page.js" type="text/javascript"></script>
    
</head>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><?=$logoimage?>
    <?=$test[ 'name' ]?>
  </h5>
</div>
<section class="content">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<form action="<?=D_URL_TEST?>judgeloginMenu.php?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
					<p><?=$test[ 'testname' ]?>が終了しました</p>	
					<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
					<p>お疲れ様でした。以上で検査終了となります。未受検の検査がないかメニュー画面に移動し、確認してください。</p>

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
					<div class="alert alert-danger" role="alert">
						注意：通信等の問題でまれに受検終了していないことがあります。
						<br />
						必ずメニュー画面に戻り、未受検検査がないか確認してください。
					</div>
					<div class="row">
						<div class="col-md-12">
						<input type="submit" name="menu" value="メニューに戻る" class="btn btn-success" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include_once("include_footer.php"); ?>

<?PHP /*
$css1 = "guide";
// $title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");
include_once("include_title.php");
include_once("../init/resultBa1.php");
?>

<div id="main">
	<div id="contents">	
		<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
			<div id="rltBox">
				<p><?=$test[ 'testname' ]?>が終了しました</p>
				<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
				<p>お疲れ様でした。以上で検査終了となります。未受検の検査がないかメニュー画面に移動し、確認してください。</p>

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
				<div id="attention" role="alert">
					注意：通信等の問題でまれに受検終了していないことがあります。
					<br />
					必ずメニュー画面に戻り、未受検検査がないか確認してください。
				</div>
				<input type="button" id="close" value="メニューに戻る" class="button btnGreen">
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
*/?>
