<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_MATH.php");
$obj = new BAmethod();
$math  = new mathmethod();
switch($language){
case "4":
	$ques = "Câu hỏi ";


	$array_exam[1] = array(
						"no"=>1
						,"question"=>"Biểu đồ dưới đây là biểu đồ hình tròn cho thấy tỷ lệ doanh thu của 5 công ty hàng đầu. Trong số các giải thích liên quan đến biểu đồ này. cái nào là phù hợp nhất?"
						,"img"=>"v_question1.png"
						,"a"=>array(
							 1=>"Công ty A dứng vị trí đầu ngành có thị phần áp đảo, nắm quyền chủ đạo trong ngành."
							,2=>"Công ty A đứng vị trí đầu ngành cạnh tranh với công ty B đứng vị trị trí thứ 2 trong ngành, các công ty khác thì chiến đấu ác liệt trong cuộc cạnh tranh thị phần."
							,3=>"Trong ngành có 3 doanh nghiệp mạnh, cả 3 doanh nghiệp chiếm hơn 90% thị phần, hình thành nên tình trạng độc quyền nhóm."
							,4=>"Trong ngành có 4 doanh nghiệp mạnh, tổng thị phần của 4 công ty khoảng 80%."
							,5=>"Trong ngành này không có doanh nghiệp nổi bật, đa phần các doanh nghiệp đều tiếp cận được và hình thành nên tình trạng các doanh nghiệp nằm rải rác lộn xộn."

						)
					);
	$array_exam[2] = array(
						"no"=>2
						,"question"=>"C là một nhân viên làm việc ngoài giờ. Vào ngày nọ. C đã làm việc từ 10 giờ sáng đến 6 giờ chiều. Tuy nhiên. thời gian nghỉ ngơi là từ sau 12 giờ trưa đến 1 giờ trưa. Nếu lương giờ của C 900 JPY/giờ. vậy lương ngày của ngày hôm đó là bao nhiêu?"
						,"img"=>""
						,"a"=>array(
							 1=>"5.400 JPY"
							,2=>"6.000 JPY"
							,3=>"6.300 JPY"
							,4=>"6.800 JPY"
							,5=>"7.200 JPY"
						)
					);
	$array_exam[3] = array(
						"no"=>3
						,"question"=>"Tổng số hợp đồng điện thoại di động là 114.260.000 hợp đồng, thị phần phân loại theo doanh nghiệp viễn thông của người sử dụng điện thoại di động được thể hiện bằng biểu đồ hình tròn dưới đây. Số hợp đồng điện thoại di động của công ty B là bao nhiêu hợp đồng?"
						,"img"=>"v_question3.png"
						,"a"=>array(
							 1=>"3.430.000 hợp đồng"
							,2=>"22.850.000 hợp đồng"
							,3=>"32.000.000 hợp đồng"
							,4=>"55.990.000 hợp đồng"
							,5=>"114.260.000 hợp đồng"
						)
					);

	$array_exam[4] = array(
						"no"=>4
						,"question"=>"Carbohydrate/chất đạm/chất béo được gọi là ba dưỡng chất chủ chốt, cứ 1 g Carbohydrate có năng lượng tương đương 4kcal, 1g chất đạm tương đương 4kcal, 1g chất béo tương đương 9kcal. Khi phân tich dinh dưỡng của 5 loại sản phẩm mang tính đại diện đang bán tại Công ty A, một công ty thực phẩm, người ta có được kết quả như sau. Sản phẩm nào là sản phẩm có nhiều năng lượng nhất trong số 5 loại sản phẩm."
						,"img"=>"v_question4.png"
						,"a"=>array(
							 1=>"Sản phẩmＡ"
							,2=>"Sản phẩmＢ"
							,3=>"Sản phẩmＣ"
							,4=>"Sản phẩmＤ"
							,5=>"Sản phẩmＥ"
						)
					);

	$array_exam[5] = array(
						"no"=>5
						,"question"=>"Lương bình quân (1 tháng) của công nhân Nam/Nữ và số người lao động năm 2010 tại doanh nghiệp được thể hiện trong bảng dưới đây. Lương bình quân của toàn thể người lao động năm 2010 tại doanh nghiệp A là bao nhiêu?"
						,"img"=>"v_question5.png"
						,"a"=>array(
							 1=>"342  ngàn JPY"
							,2=>"354  ngàn JPY"
							,3=>"378  ngàn JPY"
							,4=>"396  ngàn JPY"
							,5=>"408  ngàn JPY"
						)
					);
	$array_exam[6] = array(
						"no"=>6
						,"question"=>"Sau khi khảo sát số hộ mua báo của 2 tờ báo A và B với đối tượng khảo sát là 1.000  hộ công nhân viên một nhà máy nọ, có kết quả như sau:"
						,'tmp'=>"v_page1"
						,"a"=>array(
							 1=>"190  hộ"
							,2=>"290  hộ"
							,3=>"390  hộ"
							,4=>"610  hộ"
							,5=>"810  hộ"
						)
					);


	$array_exam[7] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>7
								,"question"=>"Cửa hàng bán lẻ K niêm yết giá với kỳ vọng 40% lãi trên sản phẩm A có giá thành 50.000 , tuy nhiên do giá niêm yết này không bán được, vì thế đã bán sản phẩm với giá bán giảm 10% so với giá niêm yết. Như vậy, giá bán sản phẩm A là bao nhiêu?"
								,"a"=>array(
									 1=>"45,000 JPY"
									,2=>"55,000 JPY"
									,3=>"63,000 JPY"
									,4=>"65,000 JPY"
									,5=>"70,000 JPY"
								),
							),
							"2"=>array(
								"no"=>8
								,"question"=>"Lương tháng năm 2011 của P là 250.000 JPY, và tháng 6 P nhận được tiền thường bằng 1,5 tháng lương, vào tháng 12 nhận được tiền thưởng bằng 2 tháng lương. Tổng thu nhập của P trong năm là bao nhiêu?"
								,"a"=>array(
									 1=>"2,875,000 JPY"
									,2=>"3,000,000 JPY"
									,3=>"3,375,000 JPY"
									,4=>"3,500,000 JPY"
									,5=>"3,875,000 JPY"
								),
							),
							"3"=>array(
								"no"=>9
								,"question"=>"Khi gửi tiền tiết kiệm lãi kép 1 triệu JPY, trong 10 năm số tiền tăng thêm là bao nhiêu?"
								,"a"=>array(
									 1=>"394,864 JPY"
									,2=>"451,245 JPY"
									,3=>"500,000 JPY"
									,4=>"563,421 JPY"
									,5=>"628,895 JPY"
								),
							),
						)
					);

	$array_exam[8] = array(
						"no"=>10
						,"question"=>"　　Bảng dưới đây cho thấy những thay đổi của tỷ giá đồng Đô-la Mỹ từ tháng 10 năm 2010 đến tháng 3 năm 2011 được áp dụng tại ngân hàng M. T.T.S. tức là tỷ giá được áp dụng vào lúc mua ngoại tệ tại ngân hàng,, T.T.B. tức là tỷ giá được áp dụng lúc bán ngoại tệ tại ngân hàng.<br /><br />　Ｘ mua 6.000 đô la vào ngày 15 tháng 11 năm 2010 tại ngân hàng M, vào ngày 15 tháng 3 năm 2011 bán hết số ngoại tệ này. Lúc này, lãi (lỗ) do chệnh lệch tỷ giá ngoại tệ là bao nhiêu? Với điều kiện là, trong các chọn lựa, giá trị dương (+) là lãi do chênh lệch tỷ giá, giá trị âm (-) là lỗ do chênh lệch tỷ giá."
						,"img"=>"v_question10.png"
						,"a"=>array(
							 1=>"-15,960 JPY"
							,2=>"-8,040 JPY"
							,3=>"-3,960 JPY"
							,4=>"+8,040 JPY"
							,5=>"+15,960 JPY"
						)
					);

	$array_exam[9] = array(
						"no"=>11
						,"question"=>"Bảng dưới đây cho thấy thứ tự doanh thu thực tế trong kỳ tháng năm 2012 của một ngành nọ. Trong tương lai, 2 công ty D và E sẽ sát nhập với  nhau để thành lập công ty mới là công ty V, 3 công ty G, H và J sẽ sát nhập với nhau để thành lập công ty mới là công ty W, theo thứ tự doanh thu hợp nhất, công ty đứng vị trí thứ 5 là công ty nào?"
						,"img"=>"v_question11.png"
						,"a"=>array(
							 1=>"Công tyＣ"
							,2=>"Công tyＤ"
							,3=>"Công tyＦ"
							,4=>"Công tyＶ"
							,5=>"Công tyＷ"
						)
					);
	$array_exam[10] = array(
						"no"=>12
						,"question"=>"Thông tin cổ phiếu của Chỉ số Nikkei ngày 20 tháng 7 năm 2010 (giá đóng cửa) cho thấy như sau:<br /><br />Chỉ số Nikkei	Đóng cửa	9300 JPY 46 xu	So với ngày trước－107 JPY 90  xu "
						,"code"=>"Tỷ lệ dao động của ngày này là bao nhiêu vậy?"
						,"a"=>array(
							 1=>"-1.160％"
							,2=>"-1.147％"
							,3=>"-1.079％"
							,4=>"+1.147％"
							,5=>"+1.160％"
						)
					);


	$array_exam[11] = array(
						"no"=>13
						,"question"=>"Sau khi khảo sát trên internet về thông tin tuyến di chuyển từ trạm X đến trạm Y, cho thấy có 5 lộ trình sau đây. Với giá cước nằm trong mức 1400 JPY,  lộ trình đến trạm Y trong thời gian ngắn nhất là lộ trình này. Điều kiện là không xét đến thời gian cần thiết cho việc chuyển xe."
						,"img"=>"v_question13.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[12] = array(
						"no"=>14
						,"question"=>"Công ty J quyết định tiến hành khảo sát thị trường để phát triển sản phẩm mới. Có nhiều phương pháp kỹ thuật marketing, tuy nhiên K – người phụ trách công tác marketing đã ước lượng về mối quan hệ giữa phương pháp khảo sát với độ chuẩn xác/chi phí như trong bảng dưới đây. Sử dụng công thức [Đánh giá = 5xđộ chuẩn xác – 3xchi phí] để đánh giá từng phương pháp, sử dụng phương pháp có đánh giá cao nhất để tiến hành khảo sát thị trường. Phương pháp mà công ty J sử dụng để khảo sát thị trường là phương pháp nào?"
						,"img"=>"v_question14.png"
						,"a"=>array(
							 1=>"Phương pháp Ａ"
							,2=>"Phương pháp Ｂ"
							,3=>"Phương pháp Ｃ"
							,4=>"Phương pháp Ｄ"
							,5=>"Phương pháp Ｅ"
						)
					);


	$array_exam[13] = array(
						"no"=>15
						,"question"=>"Phỏng vấn 5 người đến ứng tuyển tuyển dụng nhân viên đã có kinh nghiệm. Đánh giá 5 người qua 3 tiêu chí là bằng cấp, tính cách, năng lực với điểm 10 là thang điểm trọn vẹn,  nhân trọng số  1 vào bằng cấp có được, trọng số 2 vào nhân cách, trọng số 3 vào năng lực, rồi cộng lại, người có điểm cao nhất sẽ được tuyển dụng. Kết quả phỏng vấn 5 người được trình bày như bảng dưới đây. Ai là người được tuyển dụng trong 5 người?"
						,"img"=>"v_question15.png"
						,"a"=>array(
							 1=>"Ａ"
							,2=>"Ｂ"
							,3=>"Ｃ"
							,4=>"Ｄ"
							,5=>"Ｅ"
						)
					);

	$array_exam[14] = array(
						"no"=>16
						,"question"=>"Dữ liệu dưới đây là bảng liệt kê doanh thu, số nhân viên, diện tích mặt bằng của các cửa hàng A, cửa hàng B, cửa hàng C, cửa hàng D, cửa hàng E trong chuỗi cửa hàng của một siêu thị thực phẩm nọ. Siêu thị đã quyết định chọn từ trong các cửa hàng nói trên một cửa hàng sử dụng nhân viên có hiệu quả nhất để tăng doanh thu để làm cửa hàng mẫu. Cửa hàng được chọn làm cửa hàng mẫu là cửa hàng nào?"
						,"img"=>"v_question16.png"
						,"a"=>array(
							 1=>"Cửa hàng Ａ"
							,2=>"Cửa hàng Ｂ"
							,3=>"Cửa hàng Ｃ"
							,4=>"Cửa hàng Ｄ"
							,5=>"Cửa hàng Ｅ"
						)
					);

	$array_exam[15] = array(
						"no"=>17
						,"question"=>"Công ty K định thiết lập giá (đơn giá) của sản phẩm mới do công ty tự phát triển. Bảng dưới đây cho thấy số lượng nhu cầu dự báo so với giá (đơn giá ). Lúc này, nên thiết lập giá (đơn giá) bao nhiêu tiền để tối đa hóa doanh thu?"
						,"img"=>"v_question17.png"
						,"a"=>array(
							 1=>"800 JPY"
							,2=>"1,000 JPY"
							,3=>"1,200 JPY"
							,4=>"1,400 JPY"
							,5=>"1,600 JPY"
						)
					);

	$array_exam[16] = array(
						"no"=>18
						,"question"=>"Viện nghiên cứu cơ sở của một doanh nghiệp tư nhân nọ quyết định chọn 1 đề tài  đầu tư trọng điểm trong số 5 đề tài nghiên cứu A, B, C, D và E. Bảng dưới đây cho thấy tiền lãi khi thành công và lỗ khi thất bại cũng như xác suất thành công của từng đề tài. Giả định rằng đề tài nghiên cứu có tiền lãi kỳ vọng  nhiều nhất được đã chọn lựa,vậy đề tài nghiên cứu  là đối tượng đầu tư trọng điểm là đề tài nào?"
						,"img"=>"v_question18.png"
						,"a"=>array(
							 1=>"Đề tài nghiên cứu Ａ"
							,2=>"Đề tài nghiên cứu Ｂ"
							,3=>"Đề tài nghiên cứu Ｃ"
							,4=>"Đề tài nghiên cứu Ｄ"
							,5=>"Đề tài nghiên cứu Ｅ"
						)
					);

	$array_exam[17] = array(
						"no"=>19
						,"question"=>"Sản phẩmＺ do cửa hàng Ａ đang mua bán  có doanh thu 6 tháng đầu năm như trong bảng dưới đây. Hãy dự báo doanh thu của tháng 7 bằng cách tìm bình quân doanh thu của 4 tháng gần nhất."
						,"img"=>"v_question19.jpg"
						,"a"=>array(
							 1=>"9.90 0.000 JPY"
							,2=>"14.63 0.000 JPY"
							,3=>"14.53 0.000 JPY"
							,4=>"14.85 0.000 JPY"
							,5=>"21.95 0.000 JPY"
						)
					);



	$array_exam[18] = array(
						"no"=>20
						,"question"=>"Bảng dưới đây cho thấy thời gian cần thiết để đi từ trạm E của tuyến đường sắt nọ. Khi lên xe lửa xuất phát lúc 9 giờ 42 phút tại trạm E, lúc đến trạm N là mấy giờ mấy phút?"
						,"img"=>"v_question20.png"
						,"a"=>array(
							 1=>"9 giờ  59  phút "
							,2=>"10 giờ  06  phút "
							,3=>"10 giờ  09  phút "
							,4=>"10 giờ  19  phút "
							,5=>"11 giờ  58  phút "
						)
					);

	$array_exam[19] = array(
						"no"=>21
						,"question"=>"Doanh thu năm 1011 của công ty B - một nhà sản xuất thức uống là 26,2 tỷ JPY.  Do sản phẩm mới được đưa vào thị trường tháng 1 năm 2012 cho thấy doanh thu bán chạy, vì thế doanh thu năm 2012 được dự báo ở mức bằng 105,5% doanh thu năm trước. Vậy doanh thu của công ty B năm 2012 được dự báo là bao nhiêu trăm triệu JPY?"
						,"a"=>array(
							 1=>"14,4 trăm triệu JPY"
							,2=>"276,4 trăm triệu JPY"
							,3=>"427,8 trăm triệu JPY"
							,4=>"538,4 trăm triệu JPY"
							,5=>"27,641 trăm triệu JPY"
						)
					);
	$array_exam[20] = array(
						"no"=>22
						,"question"=>"Công ty F nhận đơn đặt hàng 200 sản phẩm R từ công ty G. Từ ngày 21 tháng 6, các nghệ nhân A~E sản xuất sản phẩm R bằng tay, mỗi người trung bình 1 giờ đồng hồ sản xuất được 4 cái. Bảng dưới đây cho thấy kế hoạch làm việc của các nghệ nhân A～E. Lúc này, ngày hoàn tất việc sản xuất sản phẩm R là ngày nào? Với điều kiện là, thời gian nghỉ ngơi trong khoảng thời gian làm việc là không được xem xét."
						,"img"=>"v_question22.png"
						,"a"=>array(
							 1=>"Ngày 22 tháng 6"
							,2=>"Ngày 23 tháng 6"
							,3=>"Ngày 24 tháng 6"
							,4=>"Ngày 25 tháng 6"
							,5=>"Ngày 26 tháng 6"
						)
					);

	$array_exam[21] = array(
						"no"=>23
						,"question"=>"Công ty G kinh doanh ngành cho thuê DVD khảo sát số thành viên tại ngày 1 tháng 6 năm 2011 và số người gia nhập thành viên mới mỗi tháng của các cửa hàng trong chuỗi cửa hàng. Tại thời điểm ngày 1 tháng 6 năm 2011, cửa hàng có có thành viên được dự báo nhiều nhất là cửa hàng nào?"
						,"img"=>"v_question23.png"
						,"a"=>array(
							 1=>"Cửa hàng Ａ"
							,2=>"Cửa hàng Ｂ"
							,3=>"Cửa hàng Ｃ"
							,4=>"Cửa hàng Ｄ"
							,5=>"Cửa hàng Ｅ"
						)
					);

	$array_exam[22] = array(
						"no"=>24
						,"question"=>"Sau khi dự báo mô phỏng tỷ lệ tăng nhu cầu sản phẩm mới ở một doanh nghiệp nọ,  đã có được kết quả như trong biểu đồ sau đây:"
						,"img"=>"v_question24.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[23] = array(
						"no"=>25
						,"question"=>"Bảng dưới đây cho thấy doanh thu năm của 6 năm vừa qua của công ty D. Biểu đồ thể hiện chính xác doanh thu năm của 6 năm vừa qua của công ty D là biểu đồ nào?"
						,"img"=>"v_question25.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);
	$array_exam[24] = array(
						"no"=>26
						,"question"=>"Bảng dưới đây cho thấy tỷ lệ doanh thu của 5 công ty hàng đầu trong ngành quảng cáo. Biểu đồ hình tròn thể hiện chính xác tỷ lệ doanh thu trong ngành quảng cáo là biểu đồ nào?"
						,"img"=>"v_question26.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);
	$array_exam[25] = array(
						"no"=>27
						,"question"=>"Trong số các tổ hợp giữa hình sử dụng và mục đích trình bày (như sau), tổ hợp nào là phù hợp?"
						,"img"=>"v_question27.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[26] = array(
						"no"=>28
						,"question"=>"Có một báo cáo về việc lượng doanh thu bán món Oden tại một cửa hàng tiện lợi nọ có khuynh hướng giảm khi nhiệt độ tăng cao. Biểu đồ thể hiện khuynh hướng này là biểu đồ nào dưới đây?"
						,"img"=>"v_question28.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[27] = array(
						"no"=>29
						,"question"=>"Công ty U đánh giá các sản phẩm mới A~C của công ty mình theo 5 tiêu chí là tính mới mẻ, thiết kế, tính tiện lợi, tiềm năng tương lai và giá thành và có được kết quả như trong bảng sau đây. Hãy chọn biểu đồ thể hiện chính xác đánh giá này."
						,"img"=>"v_question29.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[28] = array(
						"no"=>30
						,"question"=>"Một nhà sản xuất nước giải khát nọ đang bán năm loại sản phẩm A, B, C, D và E. Doanh thu, thị phần, tỷ lệ tăng trưởng thị trường năm 2011 của những sản phẩm này được thể hiện như trong bảng dưới đây. Biểu đồ hình bọt nào dưới đây thể hiện dữ liệu. Trong đó, doanh thu được thể hiện bằng kích thước (diện tích) hình tròn."
						,"img"=>"v_question30.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);





	//ベトナム語対応
	$first = $array_flip_test_change[$first];

break;
default:
	$ques = "問題";

	$array_exam[1] = array(
						"no"=>1
						,"question"=>"下図はある業界の上位5社の売上シェアを表した円グラフです。このグラフに関する説明のうち、もっとも適切なものはどれでしょうか。"
						,"img"=>"question1.png"
						,"a"=>array(
							1=>"業界1位のＡ社が圧倒的なシェアを持ち、業界の主導権を握っている。"
							,2=>"業界1位のＡ社と業界2位のＢ社が拮抗しており、その他の会社はシェア争いで苦戦をしている。"
							,3=>"業界内には3つの有力な企業があり、3社でシェアの90％以上を占め寡占状態になっている。"
							,4=>" 業界内には4つの有力企業があり、4社合計のシェアは80％程度である。"
							,5=>"この業界には突出した企業はなく多くの企業が参入し乱立状態になっている。"

						)
					);
	$array_exam[2] = array(
						"no"=>2
						,"question"=>"パート勤務のＣさんはある日、午前10時から午後6時まで勤務しました。 ただし、正午から午後1時までは休憩時間とします。Ｃさんの時給を900円とすると、その日の賃金（日給）はいくらになりますか。"
						,"img"=>""
						,"a"=>array(
							1=>"5,400円"
							,2=>"6,000円"
							,3=>"6,300円"
							,4=>"6,800円"
							,5=>"7,200円"
						)
					);
	$array_exam[3] = array(
						"no"=>3
						,"question"=>"携帯電話の総契約数は1億1,426万件で，携帯電話利用者の通信事業者別シェアは下の円グラフで表されます。Ｂ社の携帯電話契約数は何万件ですか。"
						,"img"=>"question3.png"
						,"a"=>array(
							 1=>"343万件"
							,2=>"2,285万件"
							,3=>"3,200万件"
							,4=>"5,599万件"
							,5=>"1億1,426万件"
						)
					);

	$array_exam[4] = array(
						"no"=>4
						,"question"=>"炭水化物・たんぱく質・脂質を三大栄養素といい、炭水化物は1ｇあたり4kcal、たんぱく質は1gあたり4kcal、脂質は1gあたり9kcalのエネルギーを持っています。<br />食品会社であるＡ社で販売している代表的な5つの商品の栄養分析を行ったところ、次のような結果が得られました。5つの商品のうちもっともエネルギー量が多いのはどれですか。"
						,"img"=>"question4.png"
						,"a"=>array(
							 1=>"商品Ａ"
							,2=>"商品Ｂ"
							,3=>"商品Ｃ"
							,4=>"商品Ｄ"
							,5=>"商品Ｅ"
						)
					);

	$array_exam[5] = array(
						"no"=>5
						,"question"=>"企業Ａでの2010年度の男・女勤労者の平均賃金（1か月）と労働者数を下表に示します。企業Ａにおける2010年度の男女労働者全体の平均賃金はいくらでしょうか。"
						,"img"=>"question5.png"
						,"a"=>array(
							 1=>"342千円"
							,2=>"354千円"
							,3=>"378千円"
							,4=>"396千円"
							,5=>"408千円"
						)
					);
	$array_exam[6] = array(
						"no"=>6
						,"question"=>"ある工場の従業員1,000世帯を対象に、Ａ紙、Ｂ紙の2紙の新聞を購読している世帯数を調査したところ、次のような結果がでました。"
						,'tmp'=>"page1"
						,"a"=>array(
							 1=>"190世帯"
							,2=>"290世帯"
							,3=>"390世帯"
							,4=>"610世帯"
							,5=>"810世帯"
						)
					);


	$array_exam[7] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>7
								,"question"=>"小売店Ｋでは、原価50,000円の商品Ａに40％の利益を見込んで定価をつけましたが、この定価では売れなかったため、定価の10％引きの販売価格で売りました。このとき、商品Ａの販売価格はいくらですか。　"
								,"a"=>array(
									 1=>"45,000円"
									,2=>"55,000円"
									,3=>"63,000円"
									,4=>"65,000円"
									,5=>"70,000円"
								),
							),
							"2"=>array(
								"no"=>8
								,"question"=>"Ｐさんの2011年の月給は250,000円で、6月に月給の1.5か月分、12月に月給の2か月分の賞与を受け取りました。Ｐさんの年収の総額はいくらですか。"
								,"a"=>array(
									 1=>"2,875,000円"
									,2=>"3,000,000円"
									,3=>"3,375,000円"
									,4=>"3,500,000円"
									,5=>"3,875,000円"
								),
							),
							"3"=>array(
								"no"=>9
								,"question"=>"100万円を年利率5％の複利で預金したとき、10年間で増加する金額はいくらですか。"
								,"a"=>array(
									 1=>"394,864円"
									,2=>"451,245円"
									,3=>"500,000円"
									,4=>"563,421円"
									,5=>"628,895円"
								),
							),
						)
					);

	$array_exam[8] = array(
						"no"=>10
						,"question"=>"下の表はＭ銀行で適用された2010年10月～2011年3月のUSドル(USD)の為替相場の変化です。
									T.T.S.とは銀行で外貨を購入するときに適用されるレート、T.T.B.とは銀行で外貨を売却するときに適用されるレートです。<br />
									Ｘ氏はＭ銀行で2010年11 月15日に6,000ドルを購入し、2011年3月15日にすべて売却しました。このとき、為替差益(差損)はいくらですか。
									ただし、選択肢の＋の値は為替差益、－の値は為替差損を表しています。"
						,"img"=>"question10.png"
						,"a"=>array(
							 1=>"-15,960円"
							,2=>"-8,040円"
							,3=>"-3,960円"
							,4=>"+8,040円"
							,5=>"+15,960円"
						)
					);

	$array_exam[9] = array(
						"no"=>11
						,"question"=>"下表は、ある業界の2012年3月期における実績売上高の順位を示しています。
									今後、Ｄ社とＥ社の2社が経営統合して新会社Ｖ社が設立され、Ｇ社、Ｈ社、Ｊ社の3社が経営統合して新会社Ｗ社が設立された場合、
									連結売上高の順位で5位になる会社はどれでしょうか。"
						,"img"=>"question11.png"
						,"a"=>array(
							 1=>"Ｃ社"
							,2=>"Ｄ社"
							,3=>"Ｆ社"
							,4=>"Ｖ社"
							,5=>"Ｗ社"
						)
					);
	$array_exam[10] = array(
						"no"=>12
						,"question"=>"010年7月20日の日経平均株価（大引け）の株式情報を下記に示します。<br />日経平均　大引け　9300円46銭　　　前日比　－107円90銭"
						,"code"=>"この日の騰落率はいくらでしょうか。"
						,"a"=>array(
							 1=>"-1.160％"
							,2=>"-1.147％"
							,3=>"-1.079％"
							,4=>"+1.147％"
							,5=>"+1.160％"
						)
					);


	$array_exam[11] = array(
						"no"=>13
						,"question"=>"Ｘ駅からＹ駅に移動する路線情報をインターネットで調べたところ、以下の5つの経路が表示されました。
									運賃が1,400円以内で、もっとも短時間でＹ駅に到着する経路はどれですか。
									ただし、乗り換えに要する時間は考えないものとします。"
						,"img"=>"question13.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[12] = array(
						"no"=>14
						,"question"=>"Ｊ社では新製品を開発するためにマーケティングリサーチを行うことにしました。マーケティングにはさまざまな手法がありますが、
										マーケティング担当のＫ氏は調査手法と精度・費用の関係を下の表のように見積もりました。<br />
										それぞれの手法を「評価＝5×精度－3×費用」という式を用いて評価し、もっとも評価が高かった手法を用いてマーケティングリサーチを行いました。
										Ｊ社がマーケティングリサーチに用いた手法はどれですか。"
						,"img"=>"question14.png"
						,"a"=>array(
							 1=>"手法Ａ"
							,2=>"手法Ｂ"
							,3=>"手法Ｃ"
							,4=>"手法Ｄ"
							,5=>"手法Ｅ"
						)
					);


	$array_exam[13] = array(
						"no"=>15
						,"question"=>"中途採用に応募してきた5人の面接をして、そのうち1人を採用します。5人の取得資格、人柄、能力の3項目を10点満点で評価し、取得資格に1、人柄に2、能力に3の重みをかけて足し、一番高得点になった人を採用します。5人の面接の結果は下表のとおりです。5人のうち採用されたのは誰ですか。"
						,"img"=>"question15.png"
						,"a"=>array(
							 1=>"Ａ氏"
							,2=>"Ｂ氏"
							,3=>"Ｃ氏"
							,4=>"Ｄ氏"
							,5=>"Ｅ氏"
						)
					);

	$array_exam[14] = array(
						"no"=>16
						,"question"=>"以下のデータはある食料品スーパー系列のＡ店、Ｂ店、Ｃ店、Ｄ店、Ｅ店の売上高、従業員数、店舗面積のリストです。この中から、従業員を最も効率的に活用して売上を上げている店舗を、模範店として選ぶことになりました。模範店に選ばれたのはどの店舗ですか。"
						,"img"=>"question16.png"
						,"a"=>array(
							 1=>"Ａ店"
							,2=>"Ｂ店"
							,3=>"Ｃ店"
							,4=>"Ｄ店"
							,5=>"Ｅ店"
						)
					);

	$array_exam[15] = array(
						"no"=>17
						,"question"=>"Ｋ社は自社で開発した新製品の価格（単価）を設定しようとしています。下表は価格（単価）に対する予測需要個数を表しています。このとき、売り上げを最大にするには価格をいくらに設定すれば良いですか。"
						,"img"=>"question17.png"
						,"a"=>array(
							 1=>"800円"
							,2=>"1,000円"
							,3=>"1,200円"
							,4=>"1,400円"
							,5=>"1,600円"
						)
					);

	$array_exam[16] = array(
						"no"=>18
						,"question"=>"ある民間企業の基礎研究所では5つの研究テーマＡ、Ｂ、Ｃ、Ｄ、Ｅの中から、重点的に投資するテーマを1つ選択することになりました。各テーマの成功時の利益と失敗時の損失、および、成功する確率を以下の表に示します。期待利益がもっとも多い研究テーマが選択されたとすると、重点的投資の対象となった研究テーマはどれですか。"
						,"img"=>"question18.png"
						,"a"=>array(
							 1=>"研究テーマＡ"
							,2=>"研究テーマＢ"
							,3=>"研究テーマＣ"
							,4=>"研究テーマＤ"
							,5=>"研究テーマＥ"
						)
					);

	$array_exam[17] = array(
						"no"=>19
						,"question"=>"Ａ商店が取り扱っている商品Ｚの、上半期の売上高は下表のとおりでした。直近の4か月の平均売上高の平均を求めることで、7月の売上高を予測してください。"
						,"img"=>"question19.jpg"
						,"a"=>array(
							 1=>"99.0万円"
							,2=>"146.3万円"
							,3=>"145.3万円"
							,4=>"148.5万円"
							,5=>"219.5万円"
						)
					);



	$array_exam[18] = array(
						"no"=>20
						,"question"=>"下の図はある鉄道路線のＥ駅からの所要時間を示しています。Ｅ駅を9時42分発の電車に乗った時、Ｎ駅の到着時刻は何時何分ですか。"
						,"img"=>"question20.png"
						,"a"=>array(
							 1=>"9時59分"
							,2=>"10時06分"
							,3=>"10時09分"
							,4=>"10時19分"
							,5=>"11時58分"
						)
					);

	$array_exam[19] = array(
						"no"=>21
						,"question"=>"飲料メーカーであるＢ社の2011年の売上高は262億円でした。2012年1月に市場に投入した新商品が好調な売れ行きを示しているため、2012年の売上高は前年比105.5％になると予測されています。Ｂ社の2012年の売上高は何億円と予測されますか。"
						,"a"=>array(
							 1=>"14.4億円"
							,2=>"276.4億円"
							,3=>"427.8億円"
							,4=>"538.4億円"
							,5=>"27,641億円"
						)
					);
	$array_exam[20] = array(
						"no"=>22
						,"question"=>"Ｆ社は6月20日にＧ社から製品Ｒを200個受注しました。製品Ｒは6月21日から職人Ａ～Ｅが手作りで生産し、1人あたり1時間で平均4個生産することができます。下の表は職人Ａ～Ｅの作業予定を示しています。このとき、製品Ｒの生産が完了する日はいつですか。ただし、業務時間帯での休憩時間は、考えないことにします。"
						,"img"=>"question22.png"
						,"a"=>array(
							 1=>"6月22日"
							,2=>"6月23日"
							,3=>"6月24日"
							,4=>"6月25日"
							,5=>"6月26日"
						)
					);

	$array_exam[21] = array(
						"no"=>23
						,"question"=>"レンタルＤＶＤ事業を営むＧ社は、系列の各店舗の2011年6月1日現在の会員数と、1か月あたりの新規入会数を調査し、以下の表にまとめました。2012年6月1日の時点で、最も会員数が多くなると予測される店舗はどこですか。"
						,"img"=>"question23.png"
						,"a"=>array(
							 1=>"Ａ店"
							,2=>"Ｂ店"
							,3=>"Ｃ店"
							,4=>"Ｄ店"
							,5=>"Ｅ店"
						)
					);

	$array_exam[22] = array(
						"no"=>24
						,"question"=>"ある企業で新商品の需要増加率をシミュレーション予測したところ、以下のグラフのような結果が得られました。"
						,"img"=>"question24.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[23] = array(
						"no"=>25
						,"question"=>"下の表は、Ｄ社の過去6年間の年間売上高を表しています。Ｄ社の過去6年間の年間売上高を正しく表しているグラフはどれですか。"
						,"img"=>"question25.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);
	$array_exam[24] = array(
						"no"=>26
						,"question"=>"下の表は、広告業界上位5社の売上高シェアを表しています。広告業界の売上高シェアを正しく表している円グラフはどれですか。"
						,"img"=>"question26.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);
	$array_exam[25] = array(
						"no"=>27
						,"question"=>"使用する図と表現の目的の組合せのうち、適切なものはどれですか。"
						,"img"=>"question27.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[26] = array(
						"no"=>28
						,"question"=>"あるコンビエンスストアのおでんの販売量は、気温が高くなると減少する傾向があるとの報告がありました。この傾向を示すグラフはどれですか。"
						,"img"=>"question28.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[27] = array(
						"no"=>29
						,"question"=>"Ｕ社では自社の新製品Ａ～Ｃについて、新規性、デザイン、利便性、将来性、コストの5項目の評価を行い、下の表の結果が得られました。この評価を正しく表しているグラフを選びなさい。"
						,"img"=>"question29.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[28] = array(
						"no"=>30
						,"question"=>"ある飲料メーカーは5種類の製品Ａ、Ｂ、Ｃ、Ｄ、Ｅを販売しています。これらの製品の2011年度の売上高、市場占有率、市場成長率を調べた結果、下の表のようになりました。このデータをバブルチャートで表したものはどれですか。ここで、円の大きさ（面積）は売上高を表すものとします。"
						,"img"=>"question30.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);
	break;
}

//ページ設定
//pageFlgはページャーを選択した時(BMS)
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}


//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $math->getTime($where);

$time = $times[ 'minute_rest' ];
if($_REQUEST[ 'time' ]){
	$time = $_REQUEST[ 'time' ];
}else{
	$time = $time*60;
}

$where[ 'test_id' ] = $times[ 'id' ];
//--------------------------------
//回答登録
//--------------------------------

if(count($_REQUEST[ 'sec' ])){
	$sec = array();
	if(count($_REQUEST[ 'sec' ])){
		foreach($_REQUEST[ 'sec' ] as $key=>$val){
			$s = "ans".$key;
			$sec[$s] = $val;
		}
	}
	$math->setEaRst($sec,$where);
	
}


//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$math->setEa($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
}



//次のページ
//pageFlgはページャーを選択した時(BMS)
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	//エラーチェック
	$err = "";

	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		$tdetail = $obj->getTestPaper($where);
		include_once(D_PATH_HOME."/mode/pdf/pdf14_comment.php");
		include_once(D_PATH_HOME."/init/mathData/mathData.php");
		
		//----------------------------------
		//数学計算処理
		//-----------------------------------
		$ans = $math->getEa($where);
		include_once("../lib/keisan/functionMATH.php");
		$list = setMathScore($ans,$a_math_point,$a_math_answer,$a_math_pointdata);

		$haku    = $list[ 'haku'    ];
		$bunseki = $list[ 'bunseki' ];
		$sentaku = $list[ 'sentaku' ];
		$yosoku  = $list[ 'yosoku' ];
		$hyogen  = $list[ 'hyogen' ];

		//html側に渡すキー
		if($haku >= 15){
			$hkey = "a";
		}elseif($haku >= 7){
			$hkey = "b";
		}else{
			$hkey = "c";
		}

		if($bunseki >= 15){
			$bkey = "a";
		}elseif($bunseki >= 7){
			$bkey = "b";
		}else{
			$bkey = "c";
		}

		if($sentaku >= 15){
			$skey = "a";
		}elseif($sentaku >= 7){
			$skey = "b";
		}else{
			$skey = "c";
		}

		if($yosoku >= 15){
			$ykey = "a";
		}elseif($yosoku >= 7){
			$ykey = "b";
		}else{
			$ykey = "c";
		}

		if($hyogen >= 15){
			$hykey = "a";
		}elseif($hyogen >= 7){
			$hykey = "b";
		}else{
			$hykey = "c";
		}

		$mathid = $ans[ 'math_id' ];
		$math->setResult($list,$mathid);
		//----------------------------------
		//数学計算処理終わり
		//-----------------------------------
		
		//-------------------------------------
		//テスト側データ
		//------------------------------------
		$s_day  = split( '/', $tdetail['exam_date'] ); 
		$s_time = split( ':', $tdetail['start_time'] ); 

		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();

		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'level'      ] = $lv;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);
		
		$tbl = "t_testpaper";
		$obj->editDetail($tbl,$set,$where);

		//complete_flgの設定
		$t->editCompleteFlg($where);
		//メール配信
		$t->sendFinMail($where);
		$fin_disp = $test[ 'fin_disp' ];
		$temp = "Fin";

		
	}
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $math->getEa($where);
//ガイドページの時
//受検状態の確認
if($temp == "guide"){
	$status = $math->getTestStatus($where);
	$exam_state = $status[ 'exam_state' ];
}



$nextPage = $pager+1;
$backPage = $pager-1;
$exam = $array_exam[$pager];

if($exam[ 'tmp' ]){
	$temp = $exam[ 'tmp' ];
}
//var_dump($answer);
if($array_test_change[$first]){
	$first = $array_test_change[$first];
}
?>