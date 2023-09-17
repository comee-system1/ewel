<?PHP
$css1 = "guide";
$js[1] = "page";



switch($language){
	case "2":
		$title = "除检查页";
		$text[1] = "已经结束";
		$text[2] = "这是干杯的良好的工作。它成为完成了检查。<br />去或不接受检查，没有菜单画面的检查，请证实。";

		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];
		
		$btnkey[1] = "返回菜单";
	break;
	case "4":
		$title = "Sự phù hợp trang";
		$text[1] = "Đã kết thúc.";
		$text[2] = "Cảm ơn sự nỗ lực của quý vị. Toàn bộ kiểm tra đã kết thúc.<br />Vui lòng chuyển qua hình ảnh Menu có kiểm tra chưa thực hiện hay không để xác nhận";

		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];
		
		$btnkey[1] = "Quay trở về Menu.";
		$btnkey[2] = "";
		$btnkey[3] = "";
		$btnkey[4] = "";

	break;
	default:
		$title = "受検ページ";
		$text[1] = "が終了しました";
		$text[2] = "お疲れ様でした。以上で検査終了となります。<br />未受検の検査がないかメニュー画面に移動し、確認してください。";


		$btnkey[1] = "メニューに戻る";


	break;
}


include_once("include_header.php");
include_once(D_PATH_HOME."/init/resultBa1.php");
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
	<form action="<?=D_URL_TEST?>?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">

<?PHP
	if(!$fin_disp){
?>
		<div id="rltBox">
			<p><?=$test[ 'testname' ]?><?=$text[1]?></p>
<?PHP if($language == 4){ ?>
			<p>Thông tin của <?=$test[ 'testname' ]?>đã đăng ký vào máy chủ.</p>
<?PHP }elseif($language == 2) { ?>
			<p><?=$test[ 'testname' ]?>上的信息</p>
<?PHP }else{ ?>
			<p><?=$test[ 'testname' ]?>情報はサーバーに登録いたしました</p>
<?PHP } ?>
			<div class="box2">
				<p>
				注意：通信等の問題でまれに受検終了していないことがあります。
				<br />
				必ずメニュー画面に戻り、未受検検査がないか確認してください。

				</p>
			</div>


		</div>
<?php
	}else{
?>
		<div id="rltBox">
		<p><?=$ans_data[ $soyo ][0]?></p>
		<p class="tle" ><?=$ans_data[ $soyo ][1]?></p>
		<p class="sub" ><?=$ans_data[ $soyo ][2]?></p>
		<p class="center"><img src='<?=D_URL?>images/<?=$imgDir?>/<?=$ans_data[ $soyo ][3]?>' /></p>
		<p><?=$ans_data[ $soyo ][4]?></p>
		
		<div class="box2">
				<p>
				注意：通信等の問題でまれに受検終了していないことがあります。
				<br />
				必ずメニュー画面に戻り、未受検検査がないか確認してください。

				</p>
			</div>
		</div>

		</div>

<?PHP
	}
?>
		<center><input type="button" id="menu" value="<?=$btnkey[1]?>" class="button"></center>
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
