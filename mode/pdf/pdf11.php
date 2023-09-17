<?PHP

	//�f�[�^�̏C��(���{����)
	foreach($testdata['type'] as $key=>$val){
		if($key == "dev5"){
			
			$testdata[ 'type' ][$key] = (string)(100-$val);
		}
		if($key == "dev8"){
			$testdata[ 'type' ][$key] = (string)(100-$val);
		}
		if($key == "dev10"){
			$testdata[ 'type' ][$key] = (string)(100-$val);
		}
	}

	//�X�g���X���x���X�R�A�擾
	if($testdata[ 'stress_flg' ] == 1){
		list($st_level,$st_score) = $obj->getStress2($testdata[ 'type' ][ 'dev1' ],$testdata[ 'type' ][ 'dev2' ],$testdata[ 'type' ][ 'dev6' ]);
	}else{
		list($st_level,$st_score) = $obj->getStress($testdata[ 'type' ][ 'dev1' ],$testdata[ 'type' ][ 'dev2' ]);
	}
	//�ꗗ�\���p
	$e_dev1  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev1'  ],1));
	$e_dev2  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev2'  ],1));
	$e_dev3  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev3'  ],1));
	$e_dev4  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev4'  ],1));
	$e_dev5  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev5'  ],1));
	$e_dev6  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev6'  ],1));
	$e_dev7  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev7'  ],1));
	$e_dev8  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev8'  ],1));
	$e_dev9  = sprintf("%.1f",round($testdata[ 'type' ][ 'dev9'  ],1));
	$e_dev10 = sprintf("%.1f",round($testdata[ 'type' ][ 'dev10' ],1));
	$e_dev11 = sprintf("%.1f",round($testdata[ 'type' ][ 'dev11' ],1));
	$e_dev12 = sprintf("%.1f",round($testdata[ 'type' ][ 'dev12' ],1));


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

	if($elem[ 'e_feel' ] && $w1 != "2a2d448e44531f3b896c4505e93bf458"){
		$msg1 = mb_convert_encoding($elem[ 'e_feel' ],"SJIS","UTF-8");
		$gmsg1 = mb_convert_encoding($elem[ 'e_feel' ],"SJIS","UTF-8");
	}else{
		$msg1 = "���Ȋ���j�^�����O��";
		$gmsg1 = "���Ȋ���\n���j�^�����O��";
	}
	if($elem[ 'e_cus' ] && $w2 != "520daea0c5b2e0e3dc42b31be977865d" ){
		$msg2 = mb_convert_encoding($elem[ 'e_cus' ],"SJIS","UTF-8");
		$gmsg2 = mb_convert_encoding($elem[ 'e_cus' ],"SJIS","UTF-8");
	}else{
		$msg2 = "�q�ϓI���ȕ]����";
		$gmsg2 = "�q�ϓI\n���ȕ]����";
	}
	
	if($elem[ 'e_aff' ] && $w3 != "3921778eb523a55d1eaa5c55f31ea7da"){
		$msg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
		$gmsg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
	}else{
		$msg3 = "���ȍm���";
		$gmsg3 = "���ȍm���";
	}
	if($elem[ 'e_cntl' ] && $w4 != "5a2260d9155c814888a54872c350f5b0"){
		$msg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
		$gmsg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
	}else{
		$msg4 = "�R���g���[�����A�`�[�u�����g��";
		$gmsg4 = "�R���g���[�����A�`\n�[�u�����g��";
	}
/*
	if($elem[ 'e_vi' ] && $w5 != "8c0278e6e57cdcfdd8ba35af97aa646b"){
		$msg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
		$gmsg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
	}else{
*/
		$msg5 = "������e��";
		$gmsg5 = "������e��";
//	}
	if($elem[ 'e_pos' ] && $w6 != "4c787c0414da73909f654d0d50328301"){
		$msg6 = mb_convert_encoding($elem[ 'e_pos' ],"SJIS","UTF-8");
		$gmsg6 = mb_convert_encoding($elem[ 'e_pos' ],"SJIS","UTF-8");
	}else{
		$msg6 = "�|�W�e�B�u�v�l��";
		$gmsg6 = "�|�W�e�B�u\n�v�l��";
	}
	
	if($elem[ 'e_symp' ] && $w7 != "90cacae3ba0939ba3a2e4e7e800843c7"){
		$msg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
		$gmsg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
	}else{
		$msg7 = "�ΐl������";
		$gmsg7 = "�ΐl������";
	}
/*
	if($elem[ 'e_situ' ] && $w8 != "43fac73af15ca6db7c86cbba8bcd781e"){
		$msg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
		$gmsg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
	}else{
*/
		$msg8 = "���Ȉ��萫";
		$gmsg8 = "���Ȉ��萫";
//	}
	if($elem[ 'e_hosp' ] && $w9 != "73520a4074fc9f9bee3159511ce349df"){
		$msg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
		$gmsg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
	}else{
		$msg9 = "�z�X�s�^���e�B������";
		$gmsg9 = "�z�X�s�^���e�B\n������";
	}
/*
	if($elem[ 'e_lead' ] && $w10 != "ae9b08fcf03e78f01b08e779b87c508f"){
		$msg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
		$gmsg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
	}else{
*/
		$msg10 = "�t�H���[���[�V�b�v";
		$gmsg10 = "�t�H���[���[�V�b�v";
//	}
	if($elem[ 'e_ass' ] && $w11 != "5c3c5efdf178d3420357607f0115438b"){
		$msg11 = mb_convert_encoding($elem[ 'e_ass' ],"SJIS","UTF-8");
		$gmsg11 = mb_convert_encoding($elem[ 'e_ass' ],"SJIS","UTF-8");
	}else{
		$msg11 = "�A�T�[�V����������";
		$gmsg11 = "�A�T�[�V����\n������";
	}
	if($elem[ 'e_adap' ] && $w12 != "565c11a274c57c3d1d88d208bfd3a14e"){
		$msg12 = mb_convert_encoding($elem[ 'e_adap' ],"SJIS","UTF-8");
		$gmsg12 = mb_convert_encoding($elem[ 'e_adap' ],"SJIS","UTF-8");
	}else{
		$msg12 = "�W�c�K����";
		$gmsg12 = "�W�c�K����";
	}


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
	//�O���t�p
	$dev1  = round($testdata['type'][ 'dev1'  ]/10,1);
	$dev2  = round($testdata['type'][ 'dev2'  ]/10,1);
	$dev3  = round($testdata['type'][ 'dev3'  ]/10,1);
	$dev4  = round($testdata['type'][ 'dev4'  ]/10,1);
	$dev5  = round($testdata['type'][ 'dev5'  ]/10,1);
	$dev6  = round($testdata['type'][ 'dev6'  ]/10,1);
	$dev7  = round($testdata['type'][ 'dev7'  ]/10,1);
	$dev8  = round($testdata['type'][ 'dev8'  ]/10,1);
	$dev9  = round($testdata['type'][ 'dev9'  ]/10,1);
	$dev10 = round($testdata['type'][ 'dev10' ]/10,1);
	$dev11 = round($testdata['type'][ 'dev11' ]/10,1);
	$dev12 = round($testdata['type'][ 'dev12' ]/10,1);
	$dev12 = round($testdata['type'][ 'dev12' ]/10,1);
	$score = sprintf("%.1f",round($testdata['type'][ 'score' ],1));

	//����p�\���ӏ��f�[�^�擾
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
		switch($key ){
			case "dev1":
				$quesans[$key] = $val-55;
			break;
			case "dev2":
				$quesans[$key] = $val-47.5;
			break;
			case "dev5":
				$quesans[$key] = $val-46.7;
			break;
			case "dev8":
				$quesans[$key] = $val-50.2;
			break;
			case "dev10":
				$quesans[$key] = $val-49.3;
			break;

			
		}
		
	}
	
		//���2���擾
	arsort($devlist);
	//�d�݂������鎞��
	//�d�݂��̃f�[�^��D��ɂ���

	$i=0;
	
	foreach($quesans as $key=>$val){
		//$devlist_w[$i][ $key ] = $val;
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
		if($v < 0 ){
			$quesanslist[$k] = $v;
			if($i == 1){
				break;
			}
			$i++;
		}
	}
	unset($quesans);
	$quesans = array();
	$quesans = $quesanslist;

	$i=0;
	foreach($devlist as $key=>$val){
		if($i >= 2){
			break;
		}

		$strongPoint[$key] = $val;

		$i++;
	}



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

	$im = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 0, 0, 255);
	$gray      = imagecolorallocate($im, 102, 102, 102);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, $img_color);


	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img1);
	imagedestroy($im);


	$gimg1 = "./images/pdf/graf".$id.".png";
	$gimg2 = "./images/pdf/graf2".$id.".png";


	$dev1scr  = $dev1-2;
	$dev2scr  = $dev2-2;
	$dev3scr  = $dev3-2;
	$dev4scr  = $dev4-2;
	$dev5scr  = $dev5-2;
	$dev6scr  = $dev6-2;
	$dev7scr  = $dev7-2;
	$dev8scr  = $dev8-2;
	$dev9scr  = $dev9-2;
	$dev10scr = $dev10-2;
	$dev11scr = $dev11-2;
	$dev12scr = $dev12-2;
	
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




	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,11);
	$pdf->SetXY(10,43);
	//��1.�X�g���X�����́�
	$pdf->Write("5","1.�X�g���X������");
	$pdf->Ln(5);
	$pdf->SetFillColor(204,255,204);
	$pdf->Cell(22, 5, "�@", 'LT', 0, 'C', 1);
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
	if($st_level == 1 || $st_level == 2) $st_point = "*";
	$pdf->Cell(10, 6, $st_point.$st_score, 1, 0, 'C', 1);
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
	$pdf->Rect(125.75, 54.15, 1, 5.75, 'F');
	$pdf->SetFillColor(255, 255, 255);

	$pdf->Ln(2);
	//��1.�X�g���X�����͂����܂Ł�
	//��2.�s�����l�@12�����̃X�R�A�ƃ`���[�g��
	$pdf->SetXY(10,66);
	$pdf->Write("5","2.�s�����l�@12�����̃X�R�A�ƃ`���[�g");
	$pdf->Ln(3);
	
	//������x ��O����y
	//�_�O���t�̕\��
	$pdf->Image($img1, 52, 55.65);
	
	//��������
	$pdf->SetLineWidth(0.4);
	$pdf->Line(42.0, 48.0, 52.0, 48.0);
	$pdf->Line(42.0, 48.0, 42.0, 60.0);
	$pdf->Line(42.0, 60.0, 52.0, 60.0);
	$pdf->Line(52.0, 48.0, 52.0, 60.0);

	$pdf->SetLineWidth(0.2);
	$pdf->Ln(1);

	$pdf->Write("5","�s�����l�@12�����̃X�R�A�ƃ`���[�g");
	$pdf->Ln(1);
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

	$pdf->Cell(38, 7, $msg1, 'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev1,   'TL', 0, 'C', 1);
	//�R���g���[�����A�`�[�u�����g��
	$pdf->Cell(44, 7, $msg4,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev4,   'TL', 0, 'C', 1);
	//�ΐl������
	$pdf->Cell(38, 7, $msg7,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev7,   'TL', 0, 'C', 1);
	//���[�_�[�V�b�v������
	$pdf->Cell(38, 7, $msg10,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev10,  'TLR', 1, 'C', 1);

	//�q�ϓI���ȕ]����
	$pdf->Cell(38, 7, $msg2,     'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev2,   'TL', 0, 'C', 1);
	//�r�W�����n�o��
	$pdf->Cell(44, 7, $msg5,        'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev5,   'TL', 0, 'C', 1);
	//�󋵎@�m��
	$pdf->Cell(38, 7, $msg8,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev8,   'TL', 0, 'C', 1);
	//�A�T�[�V����������
	$pdf->Cell(38, 7, $msg11,       'TL', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev11,  'TLR', 1, 'C', 1);


	//���ȍm���
	$pdf->Cell(38, 7, $msg3,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev3,   'TLB', 0, 'C', 1);
	//�|�W�e�B�u�v�l��
	$pdf->Cell(44, 7, $msg6,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev6,   'TLB', 0, 'C', 1);
	//�z�X�s�^���e�B������
	$pdf->Cell(38, 7, $msg9,      'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev9,   'TLB', 0, 'C', 1);
	//�W�c�K����
	$pdf->Cell(38, 7, $msg12,      'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,7, $e_dev12,  'TLBR', 1, 'C', 1);
	$pdf->Ln(3);
	//��2.�s�����l�@12�����̃X�R�A�ƃ`���[�g�����܂Ł�

	//�����[�_�[�`���[�g��
	$pdf->SetXY(10,100);
	//�O�g���쐬
	$pdf->Cell(192, 160, "",    1, 1, 'C', 1);
	$en1 = "./images/en01.gif";

	$pdf->Image($gimg1, 45, 112.5,115,115);

	$pdf->Image($en1, 39.75, 110,130,130);

	//���l���̍��ږ����o�́�
	$pdf->SetDrawColor(204, 204, 204);
	$pdf->SetFontSize(10);

	$pdf->Rect(17, 113, 25, 8, 'D');
	$pdf->Rect(18, 114, 23, 6, 'D');
	$pdf->Text(21, 118.25, "�ΐl�e����");

	$pdf->Rect(167, 113, 25, 8, 'D');
	$pdf->Rect(168, 114, 23, 6, 'D');
	$pdf->Text(171, 118.25, "���ȔF�m��");

	$pdf->Rect(17, 230, 25, 8, 'D');
	$pdf->Rect(18, 231, 23, 6, 'D');
	$pdf->Text(21, 235.25, "�ΐl�F�m��");

	$pdf->Rect(167, 230, 25, 8, 'D');
	$pdf->Rect(168, 231, 23, 6, 'D');
	$pdf->Text(171, 235.25, "���Ȉ����");
	//���l���̍��ږ����o�͂����܂Ł�

	//�����[�_�[�̐��l��
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetFontSize(8);

	$pdf->Text(100, 121, 80);
	$pdf->Text(100, 130.75, 70);
	$pdf->Text(100, 139.25, 60);
	$pdf->Text(100, 148.75, 50);
	$pdf->Text(100, 156, 40);
	$pdf->Text(100, 165.25, 30);
	$pdf->Text(100, 174.25, 20);
	//�����[�_�[�̐��l�����܂Ł�

	//���Ȋ���j�^�����O��

	//$pdf->Text(92, 93, $element_msg);
	$element_msg_g = "���Ȋ���\n���j�^�����O��";
	$pdf->SetFillColor(162, 199, 255);
	$pdf->SetDrawColor(128, 128, 128);
	$pdf->SetXY(92,110);
	$border = 1;
	$bordertype = 1;
	$pdf->MultiCell(28, 4, $element_msg_g,$border,"C",$bordertype);


	//�q�ϓI���ȕ]����

	$str2 = "�q�ϓI\n���ȕ]����";
	$pdf->SetFillColor(162, 199, 255);
	$pdf->SetDrawColor(128, 128, 128);
	$pdf->SetXY(129,120);
	$border = 1;
	$bordertype = 1;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	//���ȍm���

	$str2 = "���ȍm���";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(146,146);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	//�R���g���[�����A�`�[�u�����g��
	$str2 = "�R���g���[����\n�A�`�[�u�����g��";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(157,169);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	

	//������e��
	
	$str3 = "������e��";
	$pdf->SetFillColor(162, 199, 255);
	$pdf->SetDrawColor(128, 128, 128);
	$pdf->SetXY(146,197);
	$border = 1;
	$bordertype = 1;
	$pdf->MultiCell(28, 8, $str3,$border,"C",$bordertype);

	//�|�W�e�B�u�v�l��
	$str2 = "�|�W�e�B�u\n�v�l��";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(125,218);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	//�ΐl������
	$str2 = "�ΐl������";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(94,230);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);


	//���Ȉ��萫
	$str4 = "���Ȉ��萫";
	$pdf->SetFillColor(162, 199, 255);
	$pdf->SetDrawColor(128, 128, 128);
	$pdf->SetXY(60,221);
	$border = 1;
	$bordertype = 1;
	$pdf->MultiCell(28, 8, $str4,$border,"C",$bordertype);

	//�z�X�s�^���e�B������
	$str2 = "�z�X�s�^���e�B\n������";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(42,200);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	$str5 = "�t�H���[���[�V�b�v";
	$pdf->SetFillColor(162, 199, 255);
	$pdf->SetDrawColor(128, 128, 128);
	$pdf->SetXY(29,172);
	$border = 1;
	$bordertype = 1;
	$pdf->MultiCell(28, 8, $str5,$border,"C",$bordertype);


	//�A�T�[�V����������
	$str2 = "�A�T�[�V����������";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(32,142);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	//�W�c�K����

	$str2 = "�W�c�K����";
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(60,121);
	$border = 0;
	$bordertype = 0;
	$pdf->MultiCell(28, 4, $str2,$border,"C",$bordertype);

	//�����[�_�[�`���[�g�����܂Ł�


	$pdf->SetXY(92,270);
	$pdf->Ln(10);

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