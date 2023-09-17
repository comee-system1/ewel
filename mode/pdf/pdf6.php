<?PHP
	//�O�g��9.5�Ƃ���
	for($mvi=1;$mvi<=24;$mvi++){
		$scr = "score".$mvi;
		$mv[$mvi] = ($mvdata[$scr]/10-2);
	}
	$mvimg_main = "./images/pdf/mv_graf_main".$id.".png";


	for($mvi=1;$mvi<=24;$mvi++){
		$scr = "score".$mvi;
		$ave[$mvi] = $mvdata[$scr]/10-2;
		$disp_d[ $mvi ] = $mvdata[$scr];
	}

	for($mvi=1;$mvi<=24;$mvi++){
		$avedata[] = (array_sum($ave)/count($ave));
	}
	
	$disp_ave = round((array_sum($disp_d)/count($disp_d)),1);
	
	$disp_d25 = $mvdata[ 'score25' ];

	$MyData = new pData2();   
	$MyData->addPoints($mv,"ScoreA");
	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>255,"G"=>0,"B"=>0));

	$img = imagecreatetruecolor(500, 425);
	//����̃L�����o�X�̍쐬
	$backgroundColor = imagecolorallocate($img, 255, 255, 255);
	//�w�i�F�Z�b�g
	imagefill($img, 0, 0, $backgroundColor); 
	// �w�i��h��B
	imagecolortransparent($img,$backgroundColor);
	//������ 
	// �ȉ~�̐F��I�����܂�
	$color = imagecolorallocate($img, 204, 102, 51);
	$color2 = imagecolorallocate($img, 255, 255, 255); 
	// �����ȉ~��`�悵�܂�

	//1������6.5
	//0��20�Ƃ���

	//����
	if($disp_ave <=30 ){
		$en_key = 0;
	}else
	if($disp_ave <= 40){
		$en_key = 0.2;
		
	}else
	if($disp_ave <= 50){
		$en_key = 0.3;
		
	}else
	if($disp_ave <= 60){
		$en_key = 0.4;
		
	}else
	if($disp_ave <= 70){
		$en_key = 0.45;
		
	}else
	if($disp_ave <= 80){
		$en_key = 0.5;
		
	}


	$mv_en = ($disp_ave-20)*(6.5-$en_key);
	imagefilledellipse($img, 205, 212.5, $mv_en, $mv_en, $color);
	imagefilledellipse($img, 205, 212.5, $mv_en-3, $mv_en-3, $color2); 
	// �摜���o�͂��܂�
	$circleimg = "./images/pdf/circle".$id.".png";
	imagepng($img,$circleimg);

	$myPicture = new pImage(500,425,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.1,"R"=>255,"G"=>255,"B"=>255));
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(10,25,400,400);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);

	$myPicture->render($mvimg_main);

	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,6);
	$pdf->SetXY(10.0, 45.0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(100, 8, "[1] �s���ӎ����������肷�邱��", 0, 0, 'L', 1);
	$pdf->Ln(10);
	$pdf->SetTextColor(0,0,0);
	$msg = "�s���ӎ������́A�l�̍s���ӎ��̌X���ɂ��āA��ϓI�ɔc�����Ă��镔���𑪂�܂��B\n���̌����́A�S����24��ނ̓����ō\������A����̓������G���[�V���i���E�C���e���W�F���X�i����\�́j�Ƃ�\n�֘A����������Ă��܂��B\n���_�̍�������A�����̔�����ƑS�̓I�ȃo�����X�ɒ��ڂ��āA�����I�Ɍl�̐l�ԑ��𑨂��邱�Ƃ��Ӑ}����\n���܂��B";
	$pdf->MultiCell(190, 5, $msg,1,"L");
	$pdf->Ln(10);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(100, 8, "[2] 24�v�f�̃`���[�g", 0, 0, 'L', 1);
	$pdf->SetTextColor(0,0,0);
	$pdf->Ln(10);
	$pdf->SetFillColor(255, 255, 255);
	//�O�g���쐬
	$pdf->Cell(192, 140, "",    1, 1, 'C', 1);
	$pdf->SetFontSize(9);
	$pdf->Image($mvimg_main, 51,116.5);

	$pdf->Text(96, 117, "1 .���I���ӎ�(".$disp_d[1].")");
	$pdf->Text(118, 121, "2 .�Љ�I���ӎ�(".$disp_d[2].")");
	$pdf->Text(131, 127, "3 .����؂�ӎ�(".$disp_d[3].")");
	$pdf->Text(141.5, 135, "4 .���ݏo���ӎ�(".$disp_d[4].")");
	$pdf->Text(150, 146, "5 .���Ⱥ��۰وӎ�(".$disp_d[5].")");
	$pdf->Text(157, 160, "6 .��ǑΉ��ӎ�(".$disp_d[6].")");
	$pdf->Text(158, 174.5, "7 .���_����ӎ�(".$disp_d[7].")");
	$pdf->Text(157, 189, "8 .���ȍm��ӎ�(".$disp_d[8].")");
	$pdf->Text(151, 201.5, "9 .�B���ӎ�(".$disp_d[9].")");
	$pdf->Text(141.5, 212.5, "1 0 .�[���ӎ�(".$disp_d[10].")");
	$pdf->Text(131, 222, "1 1 .�y�ψӎ�(".$disp_d[11].")");
	$pdf->Text(118, 228, "1 2 .����\�o�ӎ�(".$disp_d[12].")");
	$pdf->Text(96, 232, "1 3 . ���ް��ٕ\���ӎ�(".$disp_d[13].")");
	$pdf->Text(62, 228, "1 4 .����Ɨ��ӎ�(".$disp_d[14].")");
	$pdf->Text(50, 222, "1 5 .�ΐl�����ӎ�(".$disp_d[15].")");
	$pdf->Text(37, 213, "1 6 .���Ȏ咣�ӎ�(".$disp_d[16].")");
	$pdf->Text(22, 201.5, "1 7 .�ΐl�������ӎ�(".$disp_d[17].")");
	$pdf->Text(16.5, 189, "1 8 .�ΐl�֌W�\�z�ӎ�(".$disp_d[18].")");
	$pdf->Text(19.5, 174.5, "1 9 .���ȊJ���ӎ�(".$disp_d[19].")");
	$pdf->Text(21, 160, "2 0 .����@�m�ӎ�(".$disp_d[20].")");
	$pdf->Text(26.5, 146, "2 1 .�󋵎@�m�ӎ�(".$disp_d[21].")");
	$pdf->Text(34, 135, "2 2 .�ΐl��߰Ĉӎ�(".$disp_d[22].")");
	$pdf->Text(46, 127, "2 3 .���Ҋ�����ӎ�(".$disp_d[23].")");
	$pdf->Text(58, 121, "2 4 .�����I�����ӎ�(".$disp_d[24].")");

	$pdf->Image($circleimg, 51,116.5);

	$pdf->Text(99, 124, "80");
	$pdf->Text(99, 132, "70");
	$pdf->Text(99, 141, "60");
	$pdf->Text(99, 149.5, "50");
	$pdf->Text(99, 157, "40");
	$pdf->Text(99, 166, "30");
	$pdf->Text(99, 174, "20");

	$pdf->Rect(158, 220, 42,15, 'D');
	$pdf->Image("./images/pdfline1.jpg", 159, 224, 0, 0);
	$pdf->Image("./images/pdfline2.jpg", 159, 229, 0, 0);
	
	$pdf->SetFontSize(7);
	$pdf->Text(167, 226.5, "���Ȃ��̌���");
	$pdf->Text(167, 230.5, "���Ȃ���24�v�f���ϒl(".$disp_ave.")");
	$pdf->SetFontSize(10);
	$pdf->Ln(10);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(100, 8, "[3] �����ԓx", 0, 0, 'L', 1);
	$pdf->SetTextColor(0, 0, 0);

	$pdf->Ln(10);
	if($disp_d25 <= 35.2 ){
		$msg25 = $array_pdf_answer[1];
	}elseif( $disp_d25 <= 47.48 ){
		$msg25 = $array_pdf_answer[2];
	}elseif( $disp_d25 <= 54.48 ){
		$msg25 = $array_pdf_answer[3];
	}elseif( $disp_d25 <= 64.78 ){
		$msg25 = $array_pdf_answer[4];
	}else{
		$msg25 = $array_pdf_answer[5];
	}

	$pdf->MultiCell(190, 7, $msg25,1,"L");
	
	$pdf->Ln(5);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');

	$pdf->SetTextColor(0, 0, 0);
	
	$pdf->AddPage();

	//�Q�y�[�W
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,6);
	
	
	$pdf->SetXY(10.0, 45.0);

	$pdf->SetFontSize(10);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(100, 8, "[4] 24�v�f�̏ڍ׃R�����g", 0, 0, 'L', 1);
	$pdf->Ln(10);


	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell("50","5","�@�@",1,0,"C",1);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell("20","5","���_",1,0,"C",1);
	$pdf->Cell("122","4.9","�R�����g",'LTR',1,"C",1);
	$pdf->Ln(0);



	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "1.���I���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[1], 'LB', 0, 'C');
	if($disp_d[1] <= 35.2){
		$msg1 = $array_private[1];
	}elseif($disp_d[1] <= 47.48 ){
		$msg1 = $array_private[2];
	}elseif($disp_d[1] <= 54.48){
		$msg1 = $array_private[3];
	}elseif($disp_d[1] <= 64.78 ){
		$msg1 = $array_private[4];
	}else{
		$msg1 = $array_private[5];
	}

	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LTBR',"L");


	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "2.�Љ�I���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[2], 'LB', 0, 'C');

	if($disp_d[2] <= 35.2){
		$msg1 = $array_social[1];
	}elseif($disp_d[2] <= 47.48 ){
		$msg1 = $array_social[2];
	}elseif($disp_d[2] <= 54.48){
		$msg1 = $array_social[3];
	}elseif($disp_d[2] <= 64.78 ){
		$msg1 = $array_social[4];
	}else{
		$msg1 = $array_social[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");

	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "3.����؂�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[3], 'LB', 0, 'C');
	if($disp_d[3] <= 35.2){
		$msg1 = $array_reason[1];
	}elseif($disp_d[3] <= 47.48 ){
		$msg1 = $array_reason[2];
	}elseif($disp_d[3] <= 54.48){
		$msg1 = $array_reason[3];
	}elseif($disp_d[3] <= 64.78 ){
		$msg1 = $array_reason[4];
	}else{
		$msg1 = $array_reason[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");


	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "4.���ݏo���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[4], 'LB', 0, 'C');
	if($disp_d[4] <= 35.2){
		$msg1 = $array_step[1];
	}elseif($disp_d[4] <= 47.48 ){
		$msg1 = $array_step[2];
	}elseif($disp_d[4] <= 54.48){
		$msg1 = $array_step[3];
	}elseif($disp_d[4] <= 64.78 ){
		$msg1 = $array_step[4];
	}else{
		$msg1 = $array_step[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "5.���Ⱥ��۰وӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[5], 'LB', 0, 'C');

	if($disp_d[5] <= 35.2){
		$msg1 = $array_control[1];
	}elseif($disp_d[5] <= 47.48 ){
		$msg1 = $array_control[2];
	}elseif($disp_d[5] <= 54.48){
		$msg1 = $array_control[3];
	}elseif($disp_d[5] <= 64.78 ){
		$msg1 = $array_control[4];
	}else{
		$msg1 = $array_control[5];
	}
	
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "6.��ǑΉ��ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[6], 'LB', 0, 'C');

	if($disp_d[6] <= 35.2){
		$msg1 = $array_difficult[1];
	}elseif($disp_d[6] <= 47.48 ){
		$msg1 = $array_difficult[2];
	}elseif($disp_d[6] <= 54.48){
		$msg1 = $array_difficult[3];
	}elseif($disp_d[6] <= 64.78 ){
		$msg1 = $array_difficult[4];
	}else{
		$msg1 = $array_difficult[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "7.���_����ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[7], 'LB', 0, 'C');

	if($disp_d[7] <= 35.2){
		$msg1 = $array_mental[1];
	}elseif($disp_d[7] <= 47.48 ){
		$msg1 = $array_mental[2];
	}elseif($disp_d[7] <= 54.48){
		$msg1 = $array_mental[3];
	}elseif($disp_d[7] <= 64.78 ){
		$msg1 = $array_mental[4];
	}else{
		$msg1 = $array_mental[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "8.���ȍm��ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[8], 'LB', 0, 'C');

	if($disp_d[8] <= 35.2){
		$msg1 = $array_affrimation[1];
	}elseif($disp_d[8] <= 47.48 ){
		$msg1 = $array_affrimation[2];
	}elseif($disp_d[8] <= 54.48){
		$msg1 = $array_affrimation[3];
	}elseif($disp_d[8] <= 64.78 ){
		$msg1 = $array_affrimation[4];
	}else{
		$msg1 = $array_affrimation[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "9.�B���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[9], 'LB', 0, 'C');

	if($disp_d[9] <= 35.2){
		$msg1 = $array_achieve[1];
	}elseif($disp_d[9] <= 47.48 ){
		$msg1 = $array_achieve[2];
	}elseif($disp_d[9] <= 54.48){
		$msg1 = $array_achieve[3];
	}elseif($disp_d[9] <= 64.78 ){
		$msg1 = $array_achieve[4];
	}else{
		$msg1 = $array_achieve[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "10.�[���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[10], 'LB', 0, 'C');

	if($disp_d[10] <= 35.2){
		$msg1 = $array_full[1];
	}elseif($disp_d[10] <= 47.48 ){
		$msg1 = $array_full[2];
	}elseif($disp_d[10] <= 54.48){
		$msg1 = $array_full[3];
	}elseif($disp_d[10] <= 64.78 ){
		$msg1 = $array_full[4];
	}else{
		$msg1 = $array_full[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "11.�y�ψӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[11], 'LB', 0, 'C');

	if($disp_d[11] <= 35.2){
		$msg1 = $array_enjoy[1];
	}elseif($disp_d[11] <= 47.48 ){
		$msg1 = $array_enjoy[2];
	}elseif($disp_d[11] <= 54.48){
		$msg1 = $array_enjoy[3];
	}elseif($disp_d[11] <= 64.78 ){
		$msg1 = $array_enjoy[4];
	}else{
		$msg1 = $array_enjoy[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(11);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "12.����\�o�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[12], 'LB', 0, 'C');

	if($disp_d[12] <= 35.2){
		$msg1 = $array_image[1];
	}elseif($disp_d[12] <= 47.48 ){
		$msg1 = $array_image[2];
	}elseif($disp_d[12] <= 54.48){
		$msg1 = $array_image[3];
	}elseif($disp_d[12] <= 64.78 ){
		$msg1 = $array_image[4];
	}else{
		$msg1 = $array_image[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "13.���ް��ٕ\���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[13], 'LB', 0, 'C');

	if($disp_d[13] <= 35.2){
		$msg1 = $array_nonverval[1];
	}elseif($disp_d[13] <= 47.48 ){
		$msg1 = $array_nonverval[2];
	}elseif($disp_d[13] <= 54.48){
		$msg1 = $array_nonverval[3];
	}elseif($disp_d[13] <= 64.78 ){
		$msg1 = $array_nonverval[4];
	}else{
		$msg1 = $array_nonverval[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "14.����Ɨ��ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[14], 'LB', 0, 'C');

	if($disp_d[14] <= 35.2){
		$msg1 = $array_myself[1];
	}elseif($disp_d[14] <= 47.48 ){
		$msg1 = $array_myself[2];
	}elseif($disp_d[14] <= 54.48){
		$msg1 = $array_myself[3];
	}elseif($disp_d[14] <= 64.78 ){
		$msg1 = $array_myself[4];
	}else{
		$msg1 = $array_myself[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "15.�ΐl�����ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[15], 'LB', 0, 'C');

	if($disp_d[15] <= 35.2){
		$msg1 = $array_taijin[1];
	}elseif($disp_d[15] <= 47.48 ){
		$msg1 = $array_taijin[2];
	}elseif($disp_d[15] <= 54.48){
		$msg1 = $array_taijin[3];
	}elseif($disp_d[15] <= 64.78 ){
		$msg1 = $array_taijin[4];
	}else{
		$msg1 = $array_taijin[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "16.���Ȏ咣�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[16], 'LB', 0, 'C');

	if($disp_d[16] <= 35.2){
		$msg1 = $array_opinion[1];
	}elseif($disp_d[16] <= 47.48 ){
		$msg1 = $array_opinion[2];
	}elseif($disp_d[16] <= 54.48){
		$msg1 = $array_opinion[3];
	}elseif($disp_d[16] <= 64.78 ){
		$msg1 = $array_opinion[4];
	}else{
		$msg1 = $array_opinion[5];
	}
	

	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "17.�ΐl�������ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[17], 'LB', 0, 'C');

	if($disp_d[17] <= 35.2){
		$msg1 = $array_problem[1];
	}elseif($disp_d[17] <= 47.48 ){
		$msg1 = $array_problem[2];
	}elseif($disp_d[17] <= 54.48){
		$msg1 = $array_problem[3];
	}elseif($disp_d[17] <= 64.78 ){
		$msg1 = $array_problem[4];
	}else{
		$msg1 = $array_problem[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "18.�ΐl�֌W�\�z�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[18], 'LB', 0, 'C');

	if($disp_d[18] <= 35.2){
		$msg1 = $array_relation[1];
	}elseif($disp_d[18] <= 47.48 ){
		$msg1 = $array_relation[2];
	}elseif($disp_d[18] <= 54.48){
		$msg1 = $array_relation[3];
	}elseif($disp_d[18] <= 64.78 ){
		$msg1 = $array_relation[4];
	}else{
		$msg1 = $array_relation[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "19.���ȊJ���ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[19], 'LB', 0, 'C');

	if($disp_d[19] <= 35.2){
		$msg1 = $array_oneself[1];
	}elseif($disp_d[19] <= 47.48 ){
		$msg1 = $array_oneself[2];
	}elseif($disp_d[19] <= 54.48){
		$msg1 = $array_oneself[3];
	}elseif($disp_d[19] <= 64.78 ){
		$msg1 = $array_oneself[4];
	}else{
		$msg1 = $array_oneself[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "20.����@�m�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[20], 'LB', 0, 'C');

	if($disp_d[20] <= 35.2){
		$msg1 = $array_guess[1];
	}elseif($disp_d[20] <= 47.48 ){
		$msg1 = $array_guess[2];
	}elseif($disp_d[20] <= 54.48){
		$msg1 = $array_guess[3];
	}elseif($disp_d[20] <= 64.78 ){
		$msg1 = $array_guess[4];
	}else{
		$msg1 = $array_guess[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "21.�󋵎@�m�ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[21], 'LB', 0, 'C');

	if($disp_d[21] <= 35.2){
		$msg1 = $array_situation[1];
	}elseif($disp_d[21] <= 47.48 ){
		$msg1 = $array_situation[2];
	}elseif($disp_d[21] <= 54.48){
		$msg1 = $array_situation[3];
	}elseif($disp_d[21] <= 64.78 ){
		$msg1 = $array_situation[4];
	}else{
		$msg1 = $array_situation[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "22.�ΐl��߰Ĉӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[22], 'LB', 0, 'C');

	if($disp_d[22] <= 35.2){
		$msg1 = $array_support[1];
	}elseif($disp_d[22] <= 47.48 ){
		$msg1 = $array_support[2];
	}elseif($disp_d[22] <= 54.48){
		$msg1 = $array_support[3];
	}elseif($disp_d[22] <= 64.78 ){
		$msg1 = $array_support[4];
	}else{
		$msg1 = $array_support[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "23.���Ҋ�����ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[23], 'LB', 0, 'C');

	if($disp_d[23] <= 35.2){
		$msg1 = $array_same[1];
	}elseif($disp_d[23] <= 47.48 ){
		$msg1 = $array_same[2];
	}elseif($disp_d[23] <= 54.48){
		$msg1 = $array_same[3];
	}elseif($disp_d[23] <= 64.78 ){
		$msg1 = $array_same[4];
	}else{
		$msg1 = $array_same[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");
	
	
	$pdf->Ln(0);
	$pdf->SetFontSize(10);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(50, 8.5, "24.�����I�����ӎ�", 'LB', 0, 'L');
	$pdf->Cell(20, 8.5, $disp_d[24], 'LB', 0, 'C');

	if($disp_d[24] <= 35.2){
		$msg1 = $array_sympathy[1];
	}elseif($disp_d[24] <= 47.48 ){
		$msg1 = $array_sympathy[2];
	}elseif($disp_d[24] <= 54.48){
		$msg1 = $array_sympathy[3];
	}elseif($disp_d[24] <= 64.78 ){
		$msg1 = $array_sympathy[4];
	}else{
		$msg1 = $array_sympathy[5];
	}
	
	$pdf->SetFontSize(7.5);
	$pdf->MultiCell(122, 4.25, $msg1,'LBR',"L");

	$pdf->Ln(2);

	//�t�b�^�[�o��
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');


	
	
	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($mvimg_main);
	unlink($circleimg);

	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------



?>