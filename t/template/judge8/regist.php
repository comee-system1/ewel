<?PHP
$css1 = "regist";
$js[1] = "regist";


switch($language){
	case "4";
		$title = "Khách hàng đăng ký thông tin";
		$text[1] = "Thuộc tính thông tin cá nhân";
		$text[2] = "Họ tên";
		$text[3] = "Họ";
		$text[4] = "tên";
		$text[5] = "【Yêu cầu】<br />";
		$text[6] = "Ví dụ";
		$text[7] = "Sato Taro";
		$text[8] = "Giới tính";
		$text[9] = "Ngày tháng<br />năm sinh";
		$text[10] = "/";
		$text[11] = "/";
		$text[12] = "/";
		$text[13] = "Trở lại";
		$text[14] = "Kế tiếp";
		$text[15] = "";
		$text[16] = "";
		$text[17] = "";
		$text[18] = "";

		$btn[1] = "back4";
		$btn[2] = "next4";

		$gender[1] = "Nam";
		$gender[2] = "Nữ";

	break;
	default:
		$title = "顧客情報登録";
		$text[1] = "個人情報属性";
		$text[2] = "氏名";
		$text[3] = "姓";
		$text[4] = "名";
		$text[5] = "<img src=\"./image/hissu.gif\" >";
		$text[6] = "例";
		$text[7] = "佐藤　太郎";
		$text[8] = "性別";
		$text[9] = "生年月日";
		$text[10] = "年";
		$text[11] = "月";
		$text[12] = "日";
		$text[13] = "戻る";
		$text[14] = "次へ";
		$text[15] = "";
		$text[16] = "";
		$text[17] = "";
		$text[18] = "";

		$btn[1] = "back";
		$btn[2] = "back";

		$gender[1] = "男性";
		$gender[2] = "女性";
	break;
}

include_once("include_header.php");


?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>		<p class="errmsg"><?=$cookieMsg?></p>

		<h3 id="kojinh3"><?=$text[1]?></h3>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
		<table id="kojinTbl">
			<tr>
				<th><?=$text[2]?></th>
				<td><span class="hissu"><?=$text[5]?></span>
					<?=$text[3]?><input type="text" name="name1" value="<?=$nam[0]?>" id="name1">　
					<?=$text[4]?><input type="text" name="name2" value="<?=$nam[1]?>" id="name2">
					<span class="explain" ><?=$text[6]?>：<?=$text[7]?></span>
				</td>
			<tr>
<?PHP
		if(!$language){
?>
			<tr>
				<th>ふりがな</th>
				<td><span class="hissu"><?=$text[5]?></span>
					姓<input type="text" name="kana1" value="<?=$kan[0]?>" id="kana1">　
					名<input type="text" name="kana2" value="<?=$kan[1]?>" id="kana2">
					<span class="explain" >例：さとう　たろう</span>
				</td>
			<tr>
<?PHP
		}
?>
			<tr>
				<th><?=$text[8]?></th>
				<td>
<?PHP
					$on1  = "on";
					$chk1 = "CHECKED";
					$on2  = "off";
					$chk2 = "";
					if($gend == 2){
						$on1  = "off";
						$chk1 = "";
						$on2  = "on";
						$chk2 = "CHECKED";
						
					}
					
?>
					<div class="gendLeft" >
						<div class="indent">
							<input type="radio" name="gender" value="1" id="check_1" class="radio" <?=$chk1?> >
						</div>
						<div class="gend" id="div_1"><img src="<?=D_URL?>images/radio_<?=$on1?>.jpg" class="rGend" id="img_1"><span class="gendTxt"><?=$gender[1]?></span></div>
					</div>
					<div class="gendLeft" >
						<div class="indent">
							<input type="radio" name="gender" value="2" id="check_2" class="radio" <?=$chk2?> >
						</div>
						<div class="gend" id="div_2" ><img src="<?=D_URL?>images/radio_<?=$on2?>.jpg" class="rGend" id="img_2"><span class="gendTxt"><?=$gender[2]?></span></div>
					</div>
				</td>
			<tr>

			<tr>
				<th><?=$text[9]?></th>
				<td>
<?PHP
				switch($language){
					case "4":
?>
					<?=$_REQUEST[ 'month' ]?><?=$text[11]?>
					<?=$_REQUEST[ 'day' ]?><?=$text[12]?>
					<?=$_REQUEST[ 'year' ]?>

<?PHP
					break;
?>

<?PHP
					default:
?>
					<?=$_REQUEST[ 'year' ]?><?=$text[10]?>
					<?=$_REQUEST[ 'month' ]?><?=$text[11]?>
					<?=$_REQUEST[ 'day' ]?><?=$text[12]?>
<?PHP
					break;
				}
?>
					<input type="hidden" name="year" value="<?=$_REQUEST[ 'year' ]?>">
					<input type="hidden" name="month" value="<?=$_REQUEST[ 'month' ]?>">
					<input type="hidden" name="day" value="<?=$_REQUEST[ 'day' ]?>">

				</td>
			<tr>
<?PHP
			//麻生テストの時のみ
			if(array_search("44",$testline)){
?>
			<tr>
				<th>メールアドレス</th>
				<td>
					<input type="text" name="mail" value="<?=$mail?>" id="tensaku_mail" style="width:200px;">
				</td>
			</tr>
<?PHP
			}
?>
		</table>
		<div id="buttonBox">
			<input type="button" name="back" value="<?=$text[13]?>" class="button" id="<?=$btn[1]?>">
			<input type="submit" name="next" value="<?=$text[14]?>" class="button" id="<?=$btn[2]?>">
		</div>
		<input type="hidden" name="exam_id" value="<?=$_REQUEST[ 'exam_id' ]?>">
		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
