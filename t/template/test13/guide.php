<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
$js[1] = "page";
if($exam_state == 1 || $exam_state == 2){
	$js[2] = "exam";
}
$flgs = "guide";
switch($language){
	case "4";
		$title = "Hướng dẫn phù hợp";
		$text[1] = "Do thứ tự câu hỏi không có ý nghĩa gì đặc biệt, vì thế hãy trả lời từ những câu hỏi có thể giải đáp được.";
		$text[2] = "Chỉ đánh dấu những câu hỏi đã suy nghĩ và giải đáp, các câu khác thì vui lòng để ô trống. (Nếu không đánh dấu đúng thì có thể không tính điểm được)";
		$text[3] = "Có 30 câu hỏi.";
		$text[4] = "Thời gian kiểm tra được hạn chế là ".$times[ 'minute_rest' ]." phút. Phía trên bên phải từng trang có thể hiện thời gian còn lại. Nếu giá trị đó bằng 0 thì tại thời điểm đó sẽ bị bắt buộc đăng xuất. Đồng hồ có hoạt động trong lúc chuyển trang, tuy nhiên, đồng thời với lúc trang kế tiếp hiển thị thì sẽ quay lại khoảng thời gian chuyển trang.Theo đó, thời gian chuyển trang không bị tính vào.";
		$text[5] = "Trong trường hợp đăng xuất do nguyên nhân nào đó trong khi đang kiểm tra giữa chừng cũng như trong trường hợp ngừng việc kiểm tra giữa chừng, vui lòng tuân theo hướng dẫn của người phụ trách.";
		$text[6] = "Vui lòng chuẩn bị giấy dùng cho tính toán, dụng cụ ghi chép, máy tính.";
		$text[7] = "Công ty chúng tôi quản lý thông tin cá nhận bằng phương pháp phù hợp, không tiết lộ cho bên thứ ba biết nếu không có sự đồng ý của khách hàng và người được kiểm tra. Tuy nhiên, có thể có trường hợp biên tập xử lý để không thể nhận biết hoặc không thể chỉ rõ để sử dụng miễn phí thông tin cá nhân bao gồm kết quả kiểm tra liên quan đến người được kiểm tra với mục đích nghiên cứu phát triển hoặc thống kê phân tích.";
		$text[8] = "Bắt đầu kiểm tra";
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
	break;
	default:
		$title = "受検ガイダンス";
		$text[1] = "問題の順番に特に意味はありませんので、解ける問題から答えてください。";
		$text[2] = "考えて解答した問題のみをマークし、それ以外は空欄にしておいてください。（適当にマークすると、採点されない場合があります。）";
		$text[3] = "設問は30問です。";
		$text[4] = "受検の制限時間は".$times[ 'minute_rest' ]."分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。 改ページの間にもタイマーは動いていますが、次ページが表示されると同時に、改ページ時間分を戻します。従って、改ページに要した時間はカウントされません。";
		$text[5] = "検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、担当者の指示に従ってください。";
		$text[6] = "計算用紙、筆記用具、電卓をご用意ください。";
		$text[7] = "当社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。";
		$text[8] = "検査を開始する";
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

	break;
}


include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<ol class="f18">
			<li><?=$text[1]?></li> 
			<li><?=$text[2]?></li>
			<li><?=$text[3]?></li>
			<li><?=$text[4]?></li>
			<li class="b"><?=$text[5]?></li>
			<li><?=$text[6]?></li>
			<li><?=$text[7]?></li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="<?=$text[8]?>" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" id="language" value="<?=$language?>">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
