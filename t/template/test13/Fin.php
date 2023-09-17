<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");

switch($language){
	case "4";
		$title = "Sự phù hợp trang";
		$text[1] = "Đã kết thúc.";
		$text[2] = "đã được đăng ký với máy chủ ";
		$text[3] = "";
		$text[4] = "";
		$text[5] = "";
		$text[6] = "";
		$text[7] = "";
		$text[8] = "";
		$text[9] = "";
		$text[10] = "";
		$text[11] = "";
		$text[12] = "";
		$text[13] = "";
		$text[14] = "";
		$text[15] = "";
		$text[16] = "";
		$text[17] = "";
		$text[18] = "";
		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];
		
		$btnkey[1] = "Đóng cửa";
		$btnkey[2] = "";
		$btnkey[3] = "";
		$btnkey[4] = "";

	break;
	default:
		$title = "受検ページ";
		$text[1] = "が終了しました";
		$text[2] = "情報はサーバーに登録いたしました";
		$text[3] = "";
		$text[4] = "";
		$text[5] = "";
		$text[6] = "";
		$text[7] = "";
		$text[8] = "";
		$text[9] = "";
		$text[10] = "";
		$text[11] = "";
		$text[12] = "";
		$text[13] = "";
		$text[14] = "";
		$text[15] = "";
		$text[16] = "";
		$text[17] = "";
		$text[18] = "";

		$btnkey[1] = "画面を閉じる";


	break;
}


?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

		<div id="rltBox">
			<p><?=$test[ 'testname' ]?><?=$text[1]?></p>
			<p><?=$test[ 'testname' ]?><?=$text[2]?></p>
<?PHP
	if($fin_disp == 1){
?>
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
<?PHP
	}
?>
			<p class="red">
				<?=$text[2]?>
			</p>


		</div>

		<center><input type="button" id="close" value="<?=$btnkey[1]?>" class="button"></center>
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
