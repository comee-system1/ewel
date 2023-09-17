<?PHP
	//----------------------------------------------
	//�_�O���t�摜�쐬
	//----------------------------------------------
	$img1 = "./images/pdf/img".$id.".jpg";
	$st_score2 = substr($st_score, 1, 4) * 9.2;
	if($st_score >= 80){
		$wid = 552;
	}elseif($st_score >= 70){
		$wid = $st_score2 + 461.3;
	}elseif($st_score >= 60){
		$wid = $st_score2 + 370.8;
	}elseif($st_score >= 50){
		$wid = $st_score2 + 279.75;
	}elseif($st_score >= 40){
		$wid = $st_score2 + 188.8;
	}elseif($st_score >= 30){
		$wid = $st_score2 + 94.8;
	}elseif($st_score >= 20){
		$wid = $st_score2 + 1;
	}else{
		$wid = 1;
	}
	
	$im        = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 1, 101, 255);
	$gray      = imagecolorallocate($im, 169, 169, 169);

	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img1);
	imagedestroy($im);
	//----------------------------------------------
	//�_�O���t�摜�쐬�I���
	//----------------------------------------------
	//----------------------------------------------
	//�`���[�g�O���t�摜�쐬
	//----------------------------------------------

	$gimg1 = "./images/pdf/graf".$id.".png";
	$gimg2 = "./images/pdf/graf2".$id.".png";
	$dev1scr  = round($testdata['type'][ 'dev1'  ]/10,1)-2;
	$dev2scr  = round($testdata['type'][ 'dev2'  ]/10,1)-2;
	$dev3scr  = round($testdata['type'][ 'dev3'  ]/10,1)-2;
	$dev4scr  = round($testdata['type'][ 'dev4'  ]/10,1)-2;
	$dev5scr  = round($testdata['type'][ 'dev5'  ]/10,1)-2;
	$dev6scr  = round($testdata['type'][ 'dev6'  ]/10,1)-2;
	$dev7scr  = round($testdata['type'][ 'dev7'  ]/10,1)-2;
	$dev8scr  = round($testdata['type'][ 'dev8'  ]/10,1)-2;
	$dev9scr  = round($testdata['type'][ 'dev9'  ]/10,1)-2;
	$dev10scr = round($testdata['type'][ 'dev10' ]/10,1)-2;
	$dev11scr = round($testdata['type'][ 'dev11' ]/10,1)-2;
	$dev12scr = round($testdata['type'][ 'dev12' ]/10,1)-2;
	$kodo_array = array(
				$dev1scr,$dev2scr,$dev3scr
				,$dev4scr,$dev5scr,$dev6scr
				,$dev7scr,$dev8scr,$dev9scr
				,$dev10scr,$dev11scr,$dev12scr
				);

	$MyData = new pData2();
	$MyData->addPoints($kodo_array,"ScoreA");  
	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>0,"G"=>0,"B"=>255));
	$myPicture = new pImage(360,360,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.1,"R"=>255,"G"=>255,"B"=>255));
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(10,25,360,360);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);
	$myPicture->render($gimg1);
	//----------------------------------------------
	//�`���[�g�O���t�摜�쐬�I���
	//----------------------------------------------
	//----------------------------------------------
	//����p�\���ӏ��f�[�^�擾
	//----------------------------------------------

	$devlist = array(
					 "dev1" =>$testdata['type'][ 'dev1' ]
					,"dev2" =>$testdata['type'][ 'dev2' ]
					,"dev3" =>$testdata['type'][ 'dev3' ]
					,"dev4" =>$testdata['type'][ 'dev4' ]
					,"dev5" =>$testdata['type'][ 'dev5' ]
					,"dev6" =>$testdata['type'][ 'dev6' ]
					,"dev7" =>$testdata['type'][ 'dev7' ]
					,"dev8" =>$testdata['type'][ 'dev8' ]
					,"dev9" =>$testdata['type'][ 'dev9' ]
					,"dev10"=>$testdata['type'][ 'dev10' ]
					,"dev11"=>$testdata['type'][ 'dev11' ]
					,"dev12"=>$testdata['type'][ 'dev12' ]

					);

	asort($devlist);
	//�T�O�ȉ��̔z��̒l�̏��2���擾
	$i=0;
	foreach($devlist as $key=>$val){
		$quesans[$key] = $val;
	}
	//���2���擾
	arsort($devlist);
	//�d�݂������鎞��
	//�d�݂��̃f�[�^��D��ɂ���
	$i=0;
	foreach($quesans as $key=>$val){
		$k = preg_replace("/dev/","w",$key);
		if($testweight[0][$k] > 0 ){
			$ary_weight[$key] = 1;
		}else{
			$ary_weight[$key] = 0;
		}
		$i++;
	}
	array_multisort($ary_weight, SORT_DESC,$quesans);
	$i=0;
	foreach($quesans as $k=>$v){
		$quesanslist[$k] = $v;
		if($i == 1){
			break;
		}
		$i++;
	}
	unset($quesans);
	$quesans = $quesanslist;
	

	$i=0;
	foreach($devlist as $key=>$val){
		if($i >= 2){
			break;
		}
		$strongPoint[$key] = $val;
		$i++;
	}
	//----------------------------------------------
	//����p�\���ӏ��f�[�^�擾�I���
	//----------------------------------------------


	$w1  = md5($elem[ 'e_feel' ]);
	$w2  = md5($elem[ 'e_cus'  ]);
	$w3  = md5($elem[ 'e_aff'  ]);
	$w4  = md5($elem[ 'e_cntl' ]);
	$w5  = md5($elem[ 'e_vi'   ]);
	$w6  = md5($elem[ 'e_pos'  ]);
	$w7  = md5($elem[ 'e_symp' ]);
	$w8  = md5($elem[ 'e_situ' ]);
	$w9  = md5($elem[ 'e_hosp' ]);
	$w10 = md5($elem[ 'e_lead' ]);
	$w11 = md5($elem[ 'e_ass'  ]);
	$w12 = md5($elem[ 'e_adap' ]);

	if($elem[ 'e_feel' ]){
		$msg1 = mb_convert_encoding($elem[ 'e_feel' ],"SJIS","UTF-8");
		$gmsg1 = mb_convert_encoding($elem[ 'e_feel' ],"SJIS","UTF-8");
	}else{
		$msg1 = "���Ȋ���j�^�����O��";
		$gmsg1 = "���Ȋ���\n���j�^�����O��";
	}
	if($elem[ 'e_cus' ]){
		$msg2 = mb_convert_encoding($elem[ 'e_cus' ],"SJIS","UTF-8");
		$gmsg2 = mb_convert_encoding($elem[ 'e_cus' ],"SJIS","UTF-8");
	}else{
		$msg2 = "�q�ϓI���ȕ]����";
		$gmsg2 = "�q�ϓI\n���ȕ]����";
	}
	
	if($elem[ 'e_aff' ] ){
		$msg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
		$gmsg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
	}else{
		$msg3 = "���ȍm���";
		$gmsg3 = "���ȍm���";
	}
	if($elem[ 'e_cntl' ] ){
		$msg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
		$gmsg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
	}else{
		$msg4 = "�R���g���[�����A�`�[�u�����g��";
		$gmsg4 = "�R���g���[�����A�`\n�[�u�����g��";
	}
	if($elem[ 'e_vi' ] ){
		$msg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
		$gmsg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
	}else{
		$msg5 = "�r�W�����n�o��";
		$gmsg5 = "�r�W����\n�n�o��";
	}
	if($elem[ 'e_pos' ]){
		$msg6 = mb_convert_encoding($elem[ 'e_pos' ],"SJIS","UTF-8");
		$gmsg6 = mb_convert_encoding($elem[ 'e_pos' ],"SJIS","UTF-8");
	}else{
		$msg6 = "�|�W�e�B�u�v�l��";
		$gmsg6 = "�|�W�e�B�u\n�v�l��";
	}
	
	if($elem[ 'e_symp' ] ){
		$msg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
		$gmsg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
	}else{
		$msg7 = "�ΐl������";
		$gmsg7 = "�ΐl������";
	}
	if($elem[ 'e_situ' ] ){
		$msg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
		$gmsg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
	}else{
		$msg8 = "�󋵎@�m��";
		$gmsg8 = "�󋵎@�m��";
	}
	if($elem[ 'e_hosp' ] ){
		$msg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
		$gmsg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
	}else{
		$msg9 = "�z�X�s�^���e�B������";
		$gmsg9 = "�z�X�s�^���e�B\n������";
	}
	if($elem[ 'e_lead' ] ){
		$msg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
		$gmsg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
	}else{
		$msg10 = "���[�_�[�V�b�v������";
		$gmsg10 = "���[�_�[�V�b�v\n������";
	}
	if($elem[ 'e_ass' ] ){
		$msg11 = mb_convert_encoding($elem[ 'e_ass' ],"SJIS","UTF-8");
		$gmsg11 = mb_convert_encoding($elem[ 'e_ass' ],"SJIS","UTF-8");
	}else{
		$msg11 = "�A�T�[�V����������";
		$gmsg11 = "�A�T�[�V����\n������";
	}
	if($elem[ 'e_adap' ] ){
		$msg12 = mb_convert_encoding($elem[ 'e_adap' ],"SJIS","UTF-8");
		$gmsg12 = mb_convert_encoding($elem[ 'e_adap' ],"SJIS","UTF-8");
	}else{
		$msg12 = "�W�c�K����";
		$gmsg12 = "�W�c�K����";
	}


	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,1);

	
	//��1.�X�g���X�����́�
	$pdf->Write("5","1.�X�g���X������");
	$pdf->Ln(5);

	$pdf->SetFillColor(204,255,204);
	$pdf->Cell(22, 3, "�@", 'LT', 0, 'C', 1);
	$pdf->Cell(10, 6.5, "�X�R�A", 'LT', 0, 'C', 1);
	$pdf->Cell(10, 6.5, "���x��", 'LTR', 0, 'C', 1);
	$pdf->SetFontSize(7);
	$pdf->Cell(38, 3, "1", 'TL', 0, 'C', 1);
	$pdf->Cell(24.5, 3, "2", 'TL', 0, 'C', 1);
	$pdf->Cell(23.5, 3, "3", 'TL', 0, 'C', 1);
	$pdf->Cell(24.5, 3, "4", 'TL', 0, 'C', 1);
	$pdf->Cell(39.5, 3, "5", 'TLR', 1, 'C', 1);

	$pdf->Cell(22, 3, "�@", 'LRB', 0, 'C', 1);
	$pdf->Cell(10, 0, " ",  '',    0, 'C', 1);
	$pdf->Cell(10, 0, " ",  '',    0, 'C', 1);

	$pdf->Cell(24, 3, "20", 'TBL', 0, 'L', 1);
	$pdf->Cell(24, 3, "30", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 3, "40", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 3, "50", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 3, "60", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 3, "70", 'TB', 0, 'L', 1);
	$pdf->Cell(6,  3, "80", 'TRB', 1, 'L', 1);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFontSize(8);
	$pdf->Cell(22, 6, "�X�g���X������", 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6, $st_score." ", 1, 0, 'C', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6, $st_level, 1, 0, 'C', 1);
	$pdf->Cell(26, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);

	//50�̋��E���̐Ԑ�
	$pdf->SetFillColor(255,63,63);
	$pdf->Rect(125.75, 51.15, 1, 5.75, 'F');
	$pdf->SetFillColor(255, 255, 255);

	//������x ��O����y
	//�_�O���t�̕\��
	$pdf->Image($img1, 52, 52.65);
	$pdf->Ln(3);

	//��2.�s�����l�@12�����̃X�R�A�ƃ`���[�g��
	$pdf->Write("0","2.�s�����l�@12�����̃X�R�A�ƃ`���[�g");
	$pdf->Ln(3);
	$pdf->SetFillColor(204, 255, 204);

	$pdf->Cell(38, 5, "���ȔF�m��", 'TL', 0, 'C', 1);
	$pdf->Cell(8.5,5, "�X�R�A"    , 'TL', 0, 'C', 1);

	$pdf->Cell(44, 5, "���Ȉ����", 'TL', 0, 'C', 1);
	$pdf->Cell(8.5,5, "�X�R�A"    , 'TL', 0, 'C', 1);

	$pdf->Cell(38, 5, "�ΐl�F�m��", 'TL', 0, 'C', 1);
	$pdf->Cell(8.5,5, "�X�R�A"    , 'TL', 0, 'C', 1);

	$pdf->Cell(38, 5, "�ΐl�e����", 'TL', 0, 'C', 1);
	$pdf->Cell(8.5,5, "�X�R�A"    , 'TLR', 1, 'C', 1);

	$pdf->SetFillColor(255, 255, 255);
	//���Ȋ���j�^�����O��
	$pt1  = sprintf("%01.1f",round($testdata['type'][ 'dev1' ],1));
	$pdf->Cell(38, 5, $msg1, 'TL', 0, 'L', 1 );
	$pdf->Cell(8.5,5, $pt1,   'TL', 0, 'C', 1);
	//�R���g���[�����A�`�[�u�����g��
	$pt4  = sprintf("%01.1f",round($testdata['type'][ 'dev4' ],1));
	$pdf->Cell(44, 5, $msg4,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt4,       'TL', 0, 'C', 1);
	//�ΐl������
	$pt7  = sprintf("%01.1f",round($testdata['type'][ 'dev7' ],1));
	$pdf->Cell(38, 5, $msg7,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt7,       'TL', 0, 'C', 1);
	//���[�_�[�V�b�v������
	$pt10  = sprintf("%01.1f",round($testdata['type'][ 'dev10' ],1));
	$pdf->Cell(38, 5, $msg10,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt10,       'TLR', 1, 'C', 1);
	

	//�q�ϓI���ȕ]����
	$pt2  = sprintf("%01.1f",round($testdata['type'][ 'dev2' ],1));
	$pdf->Cell(38, 5, $msg2,     'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt2,      'TL', 0, 'C', 1);
	//�r�W�����n�o��
	$pt5  = sprintf("%01.1f",round($testdata['type'][ 'dev5' ],1));
	$pdf->Cell(44, 5, $msg5,        'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt5,         'TL', 0, 'C', 1);
	//�󋵎@�m��
	$pt8  = sprintf("%01.1f",round($testdata['type'][ 'dev8' ],1));
	$pdf->Cell(38, 5, $msg8,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt8,       'TL', 0, 'C', 1);
	//�A�T�[�V����������
	$pt11  = sprintf("%01.1f",round($testdata['type'][ 'dev11' ],1));
	$pdf->Cell(38, 5, $msg11,       'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt11,        'TLR', 1, 'C', 1);
	
	
	//���ȍm���
	$pt3  = sprintf("%01.1f",round($testdata['type'][ 'dev3' ],1));
	$pdf->Cell(38, 5, $msg3,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt3,        'TLB', 0, 'C', 1);
	//�|�W�e�B�u�v�l��
	$pt6  = sprintf("%01.1f",round($testdata['type'][ 'dev6' ],1));
	$pdf->Cell(44, 5, $msg6,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt6,        'TLB', 0, 'C', 1);
	//�z�X�s�^���e�B������
	$pt9  = sprintf("%01.1f",round($testdata['type'][ 'dev9' ],1));
	$pdf->Cell(38, 5, $msg9,      'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $pt9,       'TLB', 0, 'C', 1);
	//�W�c�K����
	$pt12  = sprintf("%01.1f",round($testdata['type'][ 'dev12' ],1));
	$pdf->Cell(38, 5, $msg12,      'TLB', 0, 'L', 1 );
	$pdf->Cell(8.5,5, $pt12,       'TLBR', 1, 'C', 1);
	$pdf->Ln(3);
	//��1.�X�g���X�����͂����܂Ł�
	
	//�O�g���쐬
	$pdf->Cell(192, 110, "",    1, 1, 'C', 1);
	$en1 = "./images/en01.gif";

	$pdf->Image($gimg1, 57, 90.5);

	$pdf->Image($en1, 54.75, 90);

	//				$pdf->Image($gimg2, 12, 90.5);

	//���l���̍��ږ����o�́�
	$pdf->SetDrawColor(204, 204, 204);
	$pdf->SetFontSize(10);

	$pdf->Rect(17, 98, 25, 8, 'D');
	$pdf->Rect(18, 99, 23, 6, 'D');
	$pdf->Text(21, 103.25, "�ΐl�e����");

	$pdf->Rect(167, 98, 25, 8, 'D');
	$pdf->Rect(168, 99, 23, 6, 'D');
	$pdf->Text(171, 103.25, "���ȔF�m��");

	$pdf->Rect(17, 175, 25, 8, 'D');
	$pdf->Rect(18, 176, 23, 6, 'D');
	$pdf->Text(21, 180.25, "�ΐl�F�m��");

	$pdf->Rect(167, 175, 25, 8, 'D');
	$pdf->Rect(168, 176, 23, 6, 'D');
	$pdf->Text(171, 180.25, "���Ȉ����");
	//���l���̍��ږ����o�͂����܂Ł�
	//�����[�_�[�̐��l��
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetFontSize(8);

	$pdf->Text(99, 99, 80);
	$pdf->Text(99, 106.75, 70);
	$pdf->Text(99, 114.25, 60);
	$pdf->Text(99, 121.75, 50);
	$pdf->Text(99, 128, 40);
	$pdf->Text(99, 134.25, 30);
	$pdf->Text(99, 140.25, 20);
	//�����[�_�[�̐��l�����܂Ł�
	//���Ȋ���j�^�����O��
	$pdf->SetXY(94.0, 87.0);
	$pdf->MultiCell(26, 4, $gmsg1,0,"L");

	//�q�ϓI���ȕ]����
	$pdf->SetXY(129.0, 99.0);
	$pdf->MultiCell(26, 4, $gmsg2,0,"L");


	//���ȍm���
	$pdf->SetXY(144.0, 119.0);
	$pdf->MultiCell(26, 4, $gmsg3,0,"L");


	//�R���g���[�����A�`�[�u�����g��
	$pdf->SetXY(151.0, 140.0);
	$pdf->MultiCell(28, 4, $gmsg4,0,"L");

	//�r�W�����n�o��
	$pdf->SetXY(144.0, 166.0);
	$pdf->MultiCell(26, 4, $gmsg5,0,"L");


	//�|�W�e�B�u�v�l��
	$pdf->SetXY(129.0, 181.0);
	$pdf->MultiCell(26, 4, $gmsg6,0,"L");

	//�ΐl������
	$pdf->SetXY(99.0, 189.0);
	$pdf->MultiCell(26, 4, $gmsg7,0,"L");


	//�󋵎@�m��
	$pdf->SetXY(65.0, 181.0);
	$pdf->MultiCell(26, 4, $gmsg8,0,"L");



	//�z�X�s�^���e�B������
	$pdf->SetXY(50.0, 166.0);
	$pdf->MultiCell(26, 4, $gmsg9,0,"L");


	//���[�_�[�V�b�v������
	$pdf->SetXY(38.0, 140.0);
	$pdf->MultiCell(26, 4, $gmsg10,0,"L");


	//�A�T�[�V����������
	$pdf->SetXY(45.0, 118.0);
	$pdf->MultiCell(26, 4, $gmsg11,0,"L");


	//�W�c�K����
	$pdf->SetXY(62.0, 100.0);
	$pdf->MultiCell(26, 4, $gmsg12,0,"L");


	$pdf->SetXY(10.0, 196.0);

	$pdf->Ln(3);
	//�����
	$pdf->SetFontSize(8);
	$pdf->Write("5",$ques);
	$pdf->Ln();
	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell(45, 4, "�X�R�A�̒Ⴂ�s�����l", 1, 0, 'C', 1);
	$pdf->Cell(36, 4, "���X�N�ƂȂ�s��",     1, 0, 'C', 1);
	$pdf->Cell(54, 4, "�ʐڎ��̎����",       1, 0, 'C', 1);
	$pdf->Cell(57, 4, "����̃|�C���g",       1, 1, 'C', 1);
	
	$pdf->SetFillColor(255, 255, 255);

	//pdf�p����^�C�g��
	$a_questions = array(
		"dev1"=>$msg1
		,"dev2"=>$msg2
		,"dev3"=>$msg3
		,"dev4"=>$msg4
		,"dev5"=>$msg5
		,"dev6"=>$msg6
		,"dev7"=>$msg7
		,"dev8"=>$msg8
		,"dev9"=>$msg9
		,"dev10"=>$msg10
		,"dev11"=>$msg11
		,"dev12"=>$msg12
	);
	$i = 0;
	foreach($quesans as $k=>$v){
		//�v�f��
		$title =  $a_questions[$k];

		//���X�N�ƂȂ�s��
		$str   = $array_pdf_question[$k][0];
		//�ʐڎ��̎����
		$str1  = $array_pdf_question[$k][1];
		//����̃|�C���g
		$str2 = $array_pdf_question[$k][2];
		if($i == 0){
			//�v�f��1
			//$title = mb_convert_kana($title,"k",'sjis-win');

			$pdf->MultiCell(45, 32, "", 'LB');
			//���X�N�ƂȂ�s��1
			$pdf->SetXY(55,208);
			$pdf->MultiCell(36, 4, $str, 'LB');
			//�ʐڎ��̎����2
			$pdf->SetXY(91,208);
			$pdf->MultiCell(54, 4, $str1, 'LB');
			//����̃|�C���g3
			$pdf->SetXY(145,208);
			$pdf->MultiCell(57, 4, $str2, 'LBR');
			$spCnt = 30;
			$titleSp = str_split($title, $spCnt);
			$pdf->Text(12,225,$titleSp[0]);
			$pdf->Text(12,228,$titleSp[1]);
		}

		if($i == 1){
			//�v�f��2
			$pdf->MultiCell(45, 32, "", 'LB');
			//���X�N�ƂȂ�s��1
			$pdf->SetXY(55,240);
			$pdf->MultiCell(36, 4, $str, 'LB');
			//�ʐڎ��̎����2
			$pdf->SetXY(91,240);
			$pdf->MultiCell(54, 4, $str1, 'LB');
			//����̃|�C���g3
			$pdf->SetXY(145,240);
			$pdf->MultiCell(57, 4, $str2, 'LBR');
			$spCnt = 30;
			$titleSp = str_split($title, $spCnt);
			$pdf->Text(12,257,$titleSp[0]);
			$pdf->Text(12,260,$titleSp[1]);
		}

		$i++;
	}
	$pdf->Ln(2);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');
	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($img1);
	unlink($gimg1);

	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------

?>