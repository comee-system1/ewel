<?PHP
//ini_set( "display_errors", "Off");
	
	//�O���t�摜�̓o�^
	//�_�O���t����
	$BW = 4;
	//�_�O���t�F
	$BC[0] = 153;
	$BC[1] = 153;
	$BC[2] = 255;
	
	//�R�~���j�P�[�V�����ӎ��̃o�����X�O���t�\��
	$jyushin = round(($data18["score12"]+$data18["score16"]+$data18["score13"])/3,1);
	$jyushinbar = ($jyushin-50)*1.9;

	//�R�~���j�P�[�V�����ӎ��̃o�����X�O���t�\��
	$haishin = round(($data18["score20"]+$data18["score21"]+$data18["score24"])/3,1);
	$haishinbar = ($haishin-50)*1.9;	
	
	//�O���t�̐��l����
	$code  = 19.9;
	$code2 = 1.395;
	

	$score12 = sprintf("%0.1f",round($data18["score12"],1));
	$score12bar = ($score12-$code)*$code2;

	$score16 =  sprintf("%0.1f",round($data18["score16"],1));
	$score16bar = ($score16-$code)*$code2;

	$score13 =  sprintf("%0.1f",round($data18["score13"],1));
	$score13bar = ($score13-$code)*$code2;

	$score20 =  sprintf("%0.1f",round($data18["score20"],1));
	$score20bar = ($score20-$code)*$code2;

	$score21 =  sprintf("%0.1f",round($data18["score21"],1));
	$score21bar = ($score21-$code)*$code2;

	$score24 =  sprintf("%0.1f",round($data18["score24"],1));
	$score24bar = ($score24-$code)*$code2;

	$dispave  = sprintf("%0.1f",($score12+$score16+$score13+$score20+$score21+$score24)/6);
	$ave  = ($score12+$score16+$score13+$score20+$score21+$score24)/6;
	$ave  = ($ave-$code)*$code2;
	//$avebar  = ($score12bar+$score16bar+$score13bar+$score20bar+$score21bar+$score24bar)/6;
	
	
	//�e�v�f�̂��Ȃ��̓���
	//����\�o
	if($data18["score12"] <= 35.2){
		$msg12 = $array_image[1];
	}elseif($data18["score12"] <= 47.48 ){
		$msg12 = $array_image[2];
	}elseif($data18["score12"] <= 54.48){
		$msg12 = $array_image[3];
	}elseif($data18["score12"] <= 64.78 ){
		$msg12 = $array_image[4];
	}else{
		$msg12 = $array_image[5];
	}

	if($data18["score16"] <= 35.2){
		$msg16 = $array_opinion[1];
	}elseif($data18["score16"] <= 47.48 ){
		$msg16 = $array_opinion[2];
	}elseif($data18["score16"] <= 54.48){
		$msg16 = $array_opinion[3];
	}elseif($data18["score16"] <= 64.78 ){
		$msg16 = $array_opinion[4];
	}else{
		$msg16 = $array_opinion[5];
	}

	if($data18["score13"] <= 35.2){
		$msg13 = $array_nonverval[1];
	}elseif($data18["score13"] <= 47.48 ){
		$msg13 = $array_nonverval[2];
	}elseif($data18["score13"] <= 54.48){
		$msg13 = $array_nonverval[3];
	}elseif($data18["score13"] <= 64.78 ){
		$msg13 = $array_nonverval[4];
	}else{
		$msg13 = $array_nonverval[5];
	}

	if($data18["score20"] <= 35.2){
		$msg20 = $array_guess[1];
	}elseif($data18["score20"] <= 47.48 ){
		$msg20 = $array_guess[2];
	}elseif($data18["score20"] <= 54.48){
		$msg20 = $array_guess[3];
	}elseif($data18["score20"] <= 64.78 ){
		$msg20 = $array_guess[4];
	}else{
		$msg20 = $array_guess[5];
	}

	if($data18["score21"] <= 35.2){
		$msg21 = $array_situation[1];
	}elseif($data18["score21"] <= 47.48 ){
		$msg21 = $array_situation[2];
	}elseif($data18["score21"] <= 54.48){
		$msg21 = $array_situation[3];
	}elseif($data18["score21"] <= 64.78 ){
		$msg21 = $array_situation[4];
	}else{
		$msg21 = $array_situation[5];
	}

	if($data18["score24"] <= 35.2){
		$msg24 = $array_sympathy[1];
	}elseif($data18["score24"] <= 47.48 ){
		$msg24 = $array_sympathy[2];
	}elseif($data18["score24"] <= 54.48){
		$msg24 = $array_sympathy[3];
	}elseif($data18["score24"] <= 64.78 ){
		$msg24 = $array_sympathy[4];
	}else{
		$msg24 = $array_sympathy[5];
	}


	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,18,$a_gender);

	$pdf->SetXY(20, 45);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[1] �R�~���j�P�[�V�����ӎ��Ƃ�', 1, 1, 'L', 1);
	$pdf->SetXY(25, 52);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(163, 4, "�R�~���j�P�[�V�����ӎ��Ƃ́A���M�i�����̍l����C����������E�񌾌��p���ē`���悤�Ƃ��Ă��邩�j�ƁA��M�i�����\n�`���������Ƃ�I�m�ɋ��ݎ�낤�Ƃ��Ă��邩�j�̂Q�̍\���v�f�ɂ��A�󌟎��̃R�~���j�P�[�V�����ɑ΂���ӎ���\n�肵�Ă��܂��B", 1);
	
	
	$pdf->SetXY(20, 66);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[2] �R�~���j�P�[�V�����ӎ��̃o�����X', 1, 1, 'L', 1);
	$pdf->SetXY(25, 75);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->Cell(20, 10, "", 1,0,"",1);
	$pdf->Cell(13, 10, "�X�R�A", 1,0,"C",1);
	$pdf->Cell(28, 5, "�ӎ����Ă��Ȃ�", 1,0,"C",1);
	$pdf->Cell(31, 5, "���܂�ӎ����Ă��Ȃ�", 1,0,"C",1);
	$pdf->Cell(30, 5, "�ӎ����Ă���", 1,0,"C",1);
	$pdf->Cell(31, 5, "���Ȃ�ӎ����Ă���", 1,0,"C",1);
	$pdf->Cell(10, 30, "", 1,0,"C",1);
	
	$pdf->SetXY(58, 80);
	$pdf->Cell(30, 5, "", "LTB",0,"C",1);
	$pdf->Cell(30, 5, "", "TB",0,"C",1);
	$pdf->Cell(30, 5, "", "TB",0,"C",1);
	$pdf->Cell(30, 5, "", "TBR",0,"C",1);

	$pdf->SetXY(25, 85);
	$pdf->Cell(20, 10, "�@�@���M",1,0,"L",1);
	$pdf->Cell(13, 10, "�@".$jyushin, 1,0,"L",0);
	$pdf->Cell(120, 10, "", 1,0,"",0);

	$pdf->SetXY(25, 95);
	$pdf->Cell(20, 10, "�@�@��M",1,0,"L",1);
	$pdf->Cell(13, 10, "�@".$haishin, 1,0,"L",0);
	$pdf->Cell(120, 10, "", 1,0,"",0);	
	
	//�O���t�̖ڐ�
	$pdf->SetFontSize(6);
	$pdf->SetDrawColor(102, 102, 102);
	$pdf->SetXY(58, 83);
	$pdf->Write(2,"20");
	$pdf->Line(60.0, 85.0, 60.0, 105.0);
	
	$pdf->SetXY(77, 83);
	$pdf->Write(2,"30");
	dotted(79.0, 85.0, 79.0, 105.0);

	$pdf->SetXY(96, 83);
	$pdf->Write(2,"40");
	dotted(98.0, 85.0, 98.0, 105.0);
	
	$pdf->SetXY(115, 83);
	$pdf->Write(2,"50");
	$pdf->Line(117.0, 85.0, 117.0, 105.0);
	
	$pdf->SetXY(134, 83);
	$pdf->Write(2,"60");
	dotted(136.0, 85.0, 136.0, 105.0);

	$pdf->SetXY(153, 83);
	$pdf->Write(2,"70");
	dotted(155.0, 85.0, 155.0, 105.0);

	$pdf->SetXY(172, 83);
	$pdf->Write(2,"80");
	$pdf->Line(174.0, 85.0, 174.0, 105.0);

	//�R�~���j�P�[�V�����ӎ��̃o�����X�O���t�\��
	
	//�_�O���t�̍쐬
	//�}�X������Ĕz�u����
	$pdf->SetDrawColor($BC[0], $BC[1], $BC[2]);
	$pdf->SetFillColor($BC[0], $BC[1], $BC[2]);
	$pdf->SetXY(117, 87);
	$pdf->Cell($jyushinbar, 6, '', 1,1,"",1);
	
	$pdf->SetXY(117, 97);
	$pdf->Cell($haishinbar, 6, '', 1,1,"",1);

	$pdf->SetFontSize(8);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetXY(20, 108);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[3] �R�~���j�P�[�V�����ӎ��̏ڍ�', 1, 1, 'L', 1);

	$pdf->SetXY(25, 115);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->Cell(25, 10, "�v�f", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",1);
	$pdf->Cell(90, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",1);
	
	$pdf->SetXY(25, 125);
	$pdf->Cell(8, 30, "", 1,0,"C",1);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	
	$pdf->SetXY(33, 135);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	
	$pdf->SetXY(33, 145);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	


	$pdf->SetXY(25, 155);
	$pdf->Cell(8, 30, "", 1,0,"C",1);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	
	$pdf->SetXY(33, 165);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	
	$pdf->SetXY(33, 175);
	$pdf->Cell(17, 10, "", 1,0,"C",1);
	$pdf->Cell(24, 10, "", 1,0,"C",0);
	$pdf->Cell(90, 10, "", 1,0,"C",0);
	$pdf->Cell(24, 10, "", 1,0,"C",0);


	
	
	$pdf->SetXY(50, 117);
	$pdf->MultiCell(24, 3, "�ӎ����Ⴂ\n�ꍇ","","C");
	
	$pdf->SetXY(164, 117);
	$pdf->MultiCell(24, 3, "�ӎ�������\n�ꍇ","","C");
	
	//�O���t�̖ڐ�����
	
	$pdf->SetDrawColor(255, 0, 0);
	dotted($ave+76, 125.5, $ave+76, 184.5,1);

	//�O���t�̖ڐ�
	$pdf->SetLineWidth(0.2);
	$pdf->SetFontSize(6);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetXY(74, 122);
	$pdf->Write(2,"20");
	$pdf->Line(76.0, 125.0, 76.0, 185.0);

	$pdf->SetDrawColor(102, 102, 102);
	$pdf->SetXY(88, 122);
	$pdf->Write(2,"30");
	dotted(90.0, 125.0, 90.0, 185.0);


	$pdf->SetXY(102, 122);
	$pdf->Write(2,"40");
	dotted(104.0, 125.0, 104.0, 185.0);
	

	$pdf->SetLineWidth(0.5);
	$pdf->SetDrawColor(255, 0, 0);
	$pdf->SetXY(116, 122);
	$pdf->Write(2,"50");
	$pdf->Line(118.0, 125.5, 118.0, 184.5);


	$pdf->SetLineWidth(0.2);
	$pdf->SetDrawColor(102, 102, 102);
	$pdf->SetXY(130, 122);
	$pdf->Write(2,"60");
	dotted(132.0, 125, 132.0, 185.0);

	$pdf->SetXY(144, 122);
	$pdf->Write(2,"70");
	dotted(146.0, 125, 146.0, 185.0);
	
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetXY(158, 122);
	$pdf->Write(2,"80");
	$pdf->Line(160.0, 125, 160.0, 185.0);

	$pdf->SetFontSize(7);
	$pdf->SetXY(25.5, 128);
	$pdf->MultiCell(8, 3.5, "��\n�M\n��\n�o\n��\n��\n�X","","C");
	
	$pdf->SetXY(29, 127);
	$pdf->MultiCell(24, 3, "����\�o\n�ӎ�","","C");
	$pdf->SetXY(50, 126);
	$pdf->MultiCell(24, 3, "�����̊����\n�\�ɏo�����Ƃ�\n�T���Ă���","","C");

	$pdf->SetXY(164, 126);
	$pdf->MultiCell(24, 3, "�����̊����\n�\�ɏo����\n�Ƃ���","","C");

	$pdf->SetXY(28.5, 137);
	$pdf->MultiCell(24, 3, "���Ȏ咣\n�ӎ�","","C");
	$pdf->SetXY(50, 136);
	$pdf->MultiCell(24, 3, "�����̈ӌ���\n�������邱�Ƃ�\n�T���Ă���","","C");

	$pdf->SetXY(164, 136);
	$pdf->MultiCell(24, 3, "�����Ɏ�����\n�ӌ����咣\n���悤�Ƃ���","","C");

	$pdf->SetXY(29, 147);
	$pdf->MultiCell(24.3, 3, "�m���o�[�o��\n�\���ӎ�","","C");
	$pdf->SetXY(50, 146);
	$pdf->MultiCell(24, 3, "�\���g�U��\n���̃g�[�����g��\n���Ƃ��T���Ă���","","C");

	$pdf->SetXY(164, 146);
	$pdf->MultiCell(24, 3, "�\���g�U��\n���̃g�[����\n�g�����Ƃ���","","C");


	$pdf->SetXY(27, 158);
	$pdf->MultiCell(8, 3.5,"��\n�M\n��\n�o\n��\n��\n�X","","L");


	$pdf->SetXY(29, 157);
	$pdf->MultiCell(24, 3, "����@�m\n�ӎ�","","C");
	$pdf->SetXY(50, 156);
	$pdf->MultiCell(24, 3, "����̋C������\n���t�̐^�ӂɊ֐S\n�������Ă��Ȃ�","","C");
	$pdf->SetXY(164, 156);
	$pdf->MultiCell(24, 3, "����̋C������\n���t�̐^�ӂ�����\n��낤�Ƃ��Ă���","","C");


	$pdf->SetXY(28.5, 167);
	$pdf->MultiCell(24, 3, "�󋵎@�m\n�ӎ�","","C");
	$pdf->SetXY(50, 166);
	$pdf->MultiCell(24, 3, "�󋵂⑊���\n�����Ɋ֐S��\n�����Ă��Ȃ�","","C");
	$pdf->SetXY(164, 166);
	$pdf->MultiCell(24, 3, "�󋵂⑊���\n�������ώ@\n���悤�Ƃ���","","C");


	$pdf->SetXY(29, 177);
	$pdf->MultiCell(24.3, 3, "�����I����\n�ӎ�","","C");
	$pdf->SetXY(50, 176);
	$pdf->MultiCell(24, 3, "�����̎��_��\n�b�𒮂����Ƃ���\n\n","","C");
	$pdf->SetXY(164, 177);
	$pdf->MultiCell(24, 3, "����̎��_��\n�������Ƃ���","","C");

	//�O���t�̐ݒu
	$pdf->SetDrawColor(153, 153, 255);
	$pdf->SetFillColor(153, 153, 255);
	$pdf->SetXY(76, 128);
	$pdf->Cell($score12bar, $BW, "", 1,0,"",1);
	
	//�W�O�̏ꍇ�́A�O���t�̍��[��
	if($score12 >= 80){
		$pdf->SetXY(70+$score12bar, 129);
	}else{
		$pdf->SetXY(76+$score12bar, 129);
	}
	$pdf->Write("2",$score12);

	$pdf->SetXY(76, 138);
	$pdf->Cell($score16bar, $BW, "", 1,0,"",1);
	if($score16 >= 80){
		$pdf->SetXY(70+$score16bar, 139);
	}else{
		$pdf->SetXY(76+$score16bar, 139);
	}
	$pdf->Write("2",$score16);

	$pdf->SetXY(76, 148);
	$pdf->Cell($score13bar, $BW, "", 1,0,"",1);
	if($score13 >= 80){
		$pdf->SetXY(70+$score13bar, 149);
	}else{
		$pdf->SetXY(76+$score13bar, 149);
	}
	$pdf->Write("2",$score13);


	$pdf->SetXY(76, 158);
	$pdf->Cell($score20bar, $BW, "", 1,0,"",1);
	if($score20 >= 80){
		$pdf->SetXY(70+$score20bar, 159);
	}else{
		$pdf->SetXY(76+$score20bar, 159);
	}
	$pdf->Write("2",$score20);


	$pdf->SetXY(76, 168);
	$pdf->Cell($score21bar, $BW, "", 1,0,"",1);
	if($score21 >= 80){
		$pdf->SetXY(78, 169);
	}else{
		$pdf->SetXY(76+$score21bar, 169);
	}
	$pdf->Write("2",$score21);


	$pdf->SetXY(76, 178);
	$pdf->Cell($score24bar, $BW, "", 1,0,"",1);
	if($score24 >= 80){
		$pdf->SetXY(70+$score24bar, 179);
	}else{
		$pdf->SetXY(76+$score24bar, 179);
	}
	$pdf->Write("2",$score24);


	$pdf->SetFontSize(8);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetXY(138, 187);
	//�ԃ��C��
	$pdf->SetDrawColor(255, 0, 0);
	dotted(142,189.5,150,189.5,1);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetLineWidth(0.2);
	$pdf->Cell(50, 5, '�@�@�@�@�@���Ȃ���6�v�f�̕���('.$dispave.')', 1, 1, 'R', 0);

	$pdf->SetXY(20, 190);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[4] �e�v�f�̂��Ȃ��̓���', 1, 1, 'L', 1);



	$pdf->SetXY(25, 198);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->Cell(25, 10, "�v�f", 1,0,"C",1);
	$pdf->Cell(138, 10, "�R�����g", 1,0,"C",1);
	
	$pdf->SetXY(25, 208);
	$pdf->Cell(8, 30, "", 1,0,"C",1);
	$pdf->Cell(17, 10, "", "LTR",0,"C",1);
	$pdf->MultiCell(138, 5, $msg12, "LTR","L");
	
	$pdf->SetXY(33, 218);
	$pdf->Cell(17, 10, "", "LR",0,"C",1);
	$pdf->MultiCell(138, 5, $msg16, "LR","L");
	
	$pdf->SetXY(33, 228);
	$pdf->Cell(17, 10, "", "LRB",0,"C",1);
	$pdf->MultiCell(138, 5, $msg13, "LRB","L");

	$pdf->SetXY(25, 238);
	$pdf->Cell(8, 30, "", 1,0,"C",1);
	$pdf->Cell(17, 10, "", "TLR",0,"C",1);
	$pdf->MultiCell(138, 5, $msg20, "LR","L");

	$pdf->SetXY(33, 248);
	$pdf->Cell(17, 10, "", "LR",0,"C",1);
	$pdf->MultiCell(138, 5, $msg21, "LR","L");

	$pdf->SetXY(33, 258);
	$pdf->Cell(17, 10, "", "LRB",0,"C",1);
	$pdf->MultiCell(138, 5, $msg24, "LRB","L");

	$pdf->SetFontSize(7);
	$pdf->SetXY(25, 212);
	$pdf->MultiCell(8, 3.5, "��\n�M\n��\n�v\n�f","","C");

	$pdf->SetXY(29, 210);
	$pdf->MultiCell(24, 3, "����\�o\n�ӎ�","","C");
	$pdf->SetXY(29, 220);
	$pdf->MultiCell(24, 3, "���Ȏ咣\n�ӎ�","","C");
	$pdf->SetXY(29, 230);
	$pdf->MultiCell(24.3, 3, "�m���o�[�o��\n�\���ӎ�","","C");

	$pdf->SetXY(29, 240);
	$pdf->MultiCell(24, 3, "����@�m\n�ӎ�","","C");
	$pdf->SetXY(29, 250);
	$pdf->MultiCell(24, 3, "�󋵎@�m\n�ӎ�","","C");
	$pdf->SetXY(29, 260);
	$pdf->MultiCell(24.3, 3, "�����I����\n�ӎ�","","C");

	$pdf->SetFontSize(7);
	$pdf->SetXY(26.5, 242);
	$pdf->MultiCell(8, 3.5, "��\n�M\n��\n�v\n�f","","L");

	dotted(33.0, 218.0, 188, 218.0);
	dotted(33.0, 228.0, 188, 228.0);
	dotted(33.0, 248.0, 188, 248.0);
	dotted(33.0, 258.0, 188, 258.0);


	$pdf->SetXY(10, 280);
	$pdf->SetFontSize(7);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');



?>