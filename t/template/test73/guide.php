<?PHP
$css1 = "guide";
switch($language){
	case "2":
		$title = "行动价值检测受检辅导";
		$text[0] = "本检测是为了更深刻地了解自己的检测。提问的内容是当您处在某种情况下，您是如何思考、如何行动的。";
		$text[1] = "根据目前您自身可能采取的行动倾向，针对每个问题，请在选择答案中进行选择。";
		$text[2] = "如果不填写答案，将无法进入下一页。";
		$text[3] = "无法使用浏览器的【返回】按钮。每页下面的「回到前一页」的标识，只能回到前一页。";
		$text[4] = "问题共有36题。受检时间大约为15分钟。每页的右上角有剩余时间的表示。本检测即使超过15分钟，也不会自动进行评分。请以右上角的时间表示为基准进行利用。";
		$text[5] = "每个问题有a与b两种表示。将a与b进行比较，选择您相符的程度，但是只能在一处打。 当两种表示皆不相符时，或是两种表示的符合程度相当时，请在“两者皆可”一栏打。";
		$text[6] = "请注意，如果长时间（60分钟）置之不理的话，系统将强行自动关闭。在这种情况下，需要再次登录，并从最初开始再次接受检测。";
		$text[7] = "在接受检测时，因为某些原因被迫退出或中断的话，需要重新进行登录，并再次从最初开始接受检测。";
		$text[8] = "除检查启动";
		$text[9] = "本公司对个人信息采取恰当的管理办法。在没有得到客户以及受检者同意的情况下，不会告知第三者。但是，有时可能以开发研究或统计分析为目的，使用包含受检者检测结果的个人信息。在这种情况下，需要对信息进行编辑加工，在无法识别或特定个人的情况下进行利用。";
		$first = $array_flip_test_change[$first];
	break;
	case "4";
		$title = "Hướng dẫn phù hợp";
    $divarea[1] = "Lưu ý khi trả lời";
		$text[1] = "Việc kiểm tra này đó là đặt câu hỏi về việc bạn sẽ suy nghĩ như thế nào, hành động như thế nào trong tình huống nào đó. Khi trả lời, không phải tất cả đều trả lời “Đúng’, “Sai”, hãy trả lời thẳng thắn mà không cần suy nghĩ sâu xa về thân mình.";
		$text[2] = "Xin hãy nhất định trả lời toàn bộ các câu hỏi.";
		$text[3] = "<b><u>Thời gian trả lời thông thường là khoảng 15 phút, tuy nhiên thời gian hạn chế kiểm tra là 30 phút.</u></b>";
    
     $divarea[2] = "Trình tự kiểm tra";
     
		$text[4] = "";
		$text[5] = "";
		$text[6] = "";
		$text[7] = "";
  
    $text2[1] = "Kết quả trả lời cho mỗi câu hỏi, xin vui lòng điền vào trực tiếp trong tập sách này.";
    $text2[2] = "Toàn bộ có 36 câu hỏi. Một câu hỏi có 2 câu a và b.<br />Khi so sánh a với b ,bạn hãy chọn mức độ phù hợp với mình và chỉ đánh dấu khoanh tròn “O” vào một chổ.Trường hợp không biết chọn cái nào là phù hợp ,hoặc toàn bộ đều phù hợp như nhau ,thì hãy đánh dấu vào “ Không thể nói là đàng nào ";
    $text2[3] = "Vui lòng tham khảo ”〇” với câu trả lời được chọn.";
  
    
    $divarea[3] = "Các lưu ý khác";
    
    $text3[1] = "Chúng tôi sẽ thu hồi lại tập câu hỏi này sau khi kết thúc kiểm tra .";
    $text3[2] = "Công ty chúng tôi quản lý thông tin cá nhận bằng phương pháp phù hợp, không tiết lộ cho bên thứ ba biết nếu không có sự đồng ý của khách hàng và người được kiểm tra. Tuy nhiên, có thể có trường hợp biên tập xử lý để không thể nhận biết hoặc không thể chỉ rõ để sử dụng miễn phí thông tin cá nhân bao gồm kết quả kiểm tra liên quan đến người được kiểm tra với mục đích nghiên cứu phát triển hoặc thống kê phân tích.";

    
    
		$text[8] = "Bắt đầu kiểm tra";

		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];
	break;
	default:
		$title = "受検ガイダンス";
		$text[1] = "各設問に対し、現在のご自身が取るであろう傾向を選択肢の中から選択してください。";
		$text[2] = "質問は36問あります。受検時間の目安は１０分です。";
		$text[3] = "回答を入力しないと次に進めません";
		$text[4] = "ブラウザの「戻る」ボタンは使えません。ページ下部の「戻る」ボタンで、前のページまで戻れます。";
		$text[5] = "１つの質問には、AとBの２つの文があります。AとBを比較して、あなたに当てはまる程度を選択し、１つの質問に対し、１箇所のみチェックをしてください。どちらにも当てはまっていない場合、あるいはまったく同じ程度当てはまっている場合には、「どちらともいえない」にチェックしてください。";
		$text[6] = "検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。";
		$text[7] = "個人情報は当社のプライバシーポリシーに従って適切に取り扱います。";
		$text[8] = "検査を開始する";
		$text[9] = "<li>個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>";
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
include_once("include_title.php");


?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        <h1 class="h3 mb-3 font-weight-normal"><?=$test[ 'testname' ]?></h1>
        <div class="row mt20">
            <div class="col-md-12">
				<ol>
					<li>各設問に対し、現在のご自身が取るであろう傾向を選択肢の中から選択してください。</li>
					<li>質問は36問あります。受検時間の目安は１０分です。 </li>
					<li>回答を入力しないと次に進めません </li>
					<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「戻る」ボタンで、前のページまで戻れます。 </li>
					<li>１つの質問には、AとBの２つの文があります。AとBを比較して、あなたに当てはまる程度を選択し、１つの質問に対し、１箇所のみチェックをしてください。<li>どちらにも当てはまっていない場合、あるいはまったく同じ程度当てはまっている場合には、「どちらともいえない」にチェックしてください。 </li>
					<li>検査の途中で何らかの原因によりログアウトした場合や、検査を中断された場合は、再度ログインし直してください。 </li>
					<li>本検査提供会社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。
					</li>
				</ol>
            </div>
		</div>
		<div class="row mt20">
            <div class="col-md-12">
				<input type="submit" name="page" value="検査を開始する" class="btn btn-primary">
				<input type="hidden" name="temp" value="page">
				<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
			</div>
		</div>
    </form>
  </div>
</div>



<?php
include_once("include_footer.php");
?>
