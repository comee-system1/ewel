<?PHP
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
	if($elem[ 'e_vi' ] && $w5 != "8c0278e6e57cdcfdd8ba35af97aa646b"){
		$msg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
		$gmsg5 = mb_convert_encoding($elem[ 'e_vi' ],"SJIS","UTF-8");
	}else{
		$msg5 = "�r�W�����n�o��";
		$gmsg5 = "�r�W����\n�n�o��";
	}
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
	if($elem[ 'e_situ' ] && $w8 != "43fac73af15ca6db7c86cbba8bcd781e"){
		$msg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
		$gmsg8 = mb_convert_encoding($elem[ 'e_situ' ],"SJIS","UTF-8");
	}else{
		$msg8 = "�󋵎@�m��";
		$gmsg8 = "�󋵎@�m��";
	}
	if($elem[ 'e_hosp' ] && $w9 != "73520a4074fc9f9bee3159511ce349df"){
		$msg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
		$gmsg9 = mb_convert_encoding($elem[ 'e_hosp' ],"SJIS","UTF-8");
	}else{
		$msg9 = "�z�X�s�^���e�B������";
		$gmsg9 = "�z�X�s�^���e�B\n������";
	}
	if($elem[ 'e_lead' ] && $w10 != "ae9b08fcf03e78f01b08e779b87c508f"){
		$msg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
		$gmsg10 = mb_convert_encoding($elem[ 'e_lead' ],"SJIS","UTF-8");
	}else{
		$msg10 = "���[�_�[�V�b�v������";
		$gmsg10 = "���[�_�[�V�b�v\n������";
	}
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



	//���ȔF�m�͂̌v�Z
	$jiko = round(($vfdata[ 'w1' ]+$vfdata[ 'w2' ]+$vfdata[ 'w3' ])*100,1);
	//���Ȉ����
	$antei = round(($vfdata[ 'w4' ]+$vfdata[ 'w5' ]+$vfdata[ 'w6' ])*100,1);
	//�ΐl�F�m��
	$ninti = round(($vfdata[ 'w7' ]+$vfdata[ 'w8' ]+$vfdata[ 'w9' ])*100,1);

	//�ΐl�e����
	$eikyo = round(($vfdata[ 'w10' ]+$vfdata[ 'w11' ]+$vfdata[ 'w12' ])*100,1);
	
	$vf_img_bar = "./images/pdf/vfbar_img".$id.".jpg";
	
	if( $jiko < 20 ){
		$jiko_su = $jiko;
	}else
	if( $jiko < 30 ){
		$jiko_su = $jiko+0.2;
	}else
	if( $jiko < 40 ){
		$jiko_su = $jiko+0.4;
	}else
	if( $jiko < 50 ){
		$jiko_su = $jiko+0.45;
	}else
	if( $jiko < 60 ){
		$jiko_su = $jiko+0.5;
	}else
	{
		$jiko_su = $jiko+0.6;
	}
	//10�܂�86

	$vf_w = ( 86*$jiko_su )/10;
	$im = imagecreatetruecolor($vf_w, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);
	$gray      = imagecolorallocate($im, 102, 102, 102);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $vf_w-2, 8, 0x9999FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);

	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $vf_img_bar);
	imagedestroy($im);
	


	if( $antei < 20 ){
		$antei_su = $antei;
	}else
	if( $antei < 30 ){
		$antei_su = $antei+0.2;
	}else
	if( $antei < 40 ){
		$antei_su = $antei+0.4;
	}else
	if( $antei < 50 ){
		$antei_su = $antei+0.45;
	}else
	if( $antei < 60 ){
		$antei_su = $antei+0.5;
	}else
	{
		$antei_su = $antei+0.6;
	}
	$vf_img_bar2 = "./images/pdf/vfbar2_img".$id.".jpg";
	//10�܂�86
	$vf_w = ( 86*$antei_su )/10;
	$im = imagecreatetruecolor($vf_w, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);
	$gray      = imagecolorallocate($im, 102, 102, 102);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $vf_w-2, 8, 0x9999FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $vf_img_bar2);
	imagedestroy($im);



	if( $ninti < 20 ){
		$ninti_su = $ninti;
	}else
	if( $ninti < 30 ){
		$ninti_su = $ninti+0.2;
	}else
	if( $ninti < 40 ){
		$ninti_su = $ninti+0.4;
	}else
	if( $ninti < 50 ){
		$ninti_su = $ninti+0.45;
	}else
	if( $ninti < 60 ){
		$ninti_su = $ninti+0.5;
	}else
	{
		$ninti_su = $ninti+0.6;
	}
	$vf_img_bar3 = "./images/pdf/vfbar3_img".$id.".jpg";
	//10�܂�86
	$vf_w = ( 86*$ninti_su )/10;
	$im = imagecreatetruecolor($vf_w, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);
	$gray      = imagecolorallocate($im, 102, 102, 102);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $vf_w-2, 8, 0x9999FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $vf_img_bar3);
	imagedestroy($im);


	if( $eikyo < 20 ){
		$eikyo_su = $eikyo;
	}else
	if( $eikyo < 30 ){
		$eikyo_su = $eikyo+0.2;
	}else
	if( $eikyo < 40 ){
		$eikyo_su = $eikyo+0.4;
	}else
	if( $eikyo < 50 ){
		$eikyo_su = $eikyo+0.45;
	}else
	if( $eikyo < 60 ){
		$eikyo_su = $eikyo+0.5;
	}else
	{
		$eikyo_su = $eikyo+0.6;
	}
	$vf_img_bar4 = "./images/pdf/vfbar4_img".$id.".jpg";
	//10�܂�86
	$vf_w = ( 86*$eikyo_su )/10;
	$im = imagecreatetruecolor($vf_w, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);
	$gray      = imagecolorallocate($im, 102, 102, 102);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $vf_w-2, 8, 0x9999FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $vf_img_bar4);
	imagedestroy($im);
	$DataSet2 = new pData;
	
	
	$vfimg_main = "./images/pdf/vf_graf_main".$id.".png";
	$vfw1  = $vfdata[ 'w1'  ]*10*2;
	$vfw2  = $vfdata[ 'w2'  ]*10*2;
	$vfw3  = $vfdata[ 'w3'  ]*10*2;
	$vfw4  = $vfdata[ 'w4'  ]*10*2;
	$vfw5  = $vfdata[ 'w5'  ]*10*2;
	$vfw6  = $vfdata[ 'w6'  ]*10*2;
	$vfw7  = $vfdata[ 'w7'  ]*10*2;
	$vfw8  = $vfdata[ 'w8'  ]*10*2;
	$vfw9  = $vfdata[ 'w9'  ]*10*2;
	$vfw10 = $vfdata[ 'w10' ]*10*2;
	$vfw11 = $vfdata[ 'w11' ]*10*2;
	$vfw12 = $vfdata[ 'w12' ]*10*2;
	
	$vfarray = array(
					$vfw1,$vfw2,$vfw3
					,$vfw4,$vfw5,$vfw6
					,$vfw7,$vfw8,$vfw9
					,$vfw10,$vfw11,$vfw12
					);
	$vfsort = array(
					 'w1' => $vfdata[ 'w1'  ]
					,'w2' => $vfdata[ 'w2'  ]
					,'w3' => $vfdata[ 'w3'  ]
					,'w4' => $vfdata[ 'w4'  ]
					,'w5' => $vfdata[ 'w5'  ]
					,'w6' => $vfdata[ 'w6'  ]
					,'w7' => $vfdata[ 'w7'  ]
					,'w8' => $vfdata[ 'w8'  ]
					,'w9' => $vfdata[ 'w9'  ]
					,'w10'=>$vfdata[ 'w10'  ]
					,'w11'=>$vfdata[ 'w11'  ]
					,'w12'=>$vfdata[ 'w12'  ]
				);
	foreach($vfsort as $key=>$val){
		$values[$key] = $val;
		
	}
	//���6���擾
	$c = 0;
	array_multisort($values, SORT_DESC,  $vfsort);

	foreach($vfsort as $key=>$val){
		
		$vfsix[$key] = $val;
		$vfsixdisp[$c] = ceil($val*100);
		

		if($c == 5){
			break;
		}
		$c++;
	}

	$MyData = new pData2();

	$MyData->addPoints($vfarray,"ScoreA");  


	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>255,"G"=>0,"B"=>0));


	$myPicture = new pImage(400,400,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.1,"R"=>255,"G"=>255,"B"=>255));

	$SplitChart = new pRadar();

	$myPicture->setGraphArea(10,25,400,400);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);

	$myPicture->render($vfimg_main);

	if(in_array("8",$pdfline)){
		//VF�����\������̎�
		
		$pdf->Image("./images/vfTitle.jpg", 10, 100, 160, 40);
		$pdf->AddPage();
		$vf8 = true;
	}



	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,7);
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFontSize(10);
	$pdf->Ln(5);

	$pdf->Cell(60, 6, "[1] �̗p�E��", 1, 0, 'TBLR', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0,0,0);

	if($vfdata[ 'vf4_object' ] && $vfdata[ 'vf4_object' ] != "Array"){
		$vf4_obj = mb_convert_encoding($vfdata[ 'vf4_object' ],"Shift-JIS","UTF-8");
	}else{
		$vf4_obj = "�Ј�";
	}
	$pdf->Cell(132, 6, "�M�Ђ�".$vf4_obj."�Ƃ��ĕK�v�ȍs�����l�͉��L�ƂȂ�܂��B", 1, 1, 'TBLR', 1);
	$pdf->Ln(2);
	
	
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(60, 6, "[2] 4�̈�̏d�v�x", 1, 1, 'TBLR', 1);
	$pdf->Ln(2);
	
	$pdf->SetFillColor(191, 191, 191);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetDrawColor(102,102,102);
	$pdf->Cell(25, 6, "�@", 1, 0, 'TBLR', 1);
	$pdf->Cell(25, 6, "�X�R�A", 1, 0, 'C', 1);
	$pdf->Cell(142, 6, " ", 1, 1, 'C', 1);


	$pdf->SetFontSize(8);
	$pdf->Cell(25, 6, "���ȔF�m��", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 6, $jiko."��", 1, 1, 'C', 1);

	$pdf->SetFillColor(191, 191, 191);
	$pdf->Cell(25, 6, "���Ȉ����", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 6, $antei."��", 1, 1, 'C', 1);

	$pdf->SetFillColor(191, 191, 191);
	$pdf->Cell(25, 6, "�ΐl�F�m��", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 6, $ninti."��", 1, 1, 'C', 1);

	$pdf->SetFillColor(191, 191, 191);
	$pdf->Cell(25, 6, "�ΐl�e����", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 6, $eikyo."��", 1, 1, 'C', 1);


	//����
	$pdf->Rect(60, 73, 142,0, 'D');
	$pdf->Rect(60, 79, 142,0, 'D');
	$pdf->Rect(60, 85, 142,0, 'D');
	$pdf->Rect(60, 91, 142,0, 'D');


	//�c��
	$pdf->SetDrawColor(204,204,204);
	$pdf->Rect(62,  67, 0,24, 'D');
	$pdf->Rect(85,  67, 0,24, 'D');
	$pdf->Rect(108, 67, 0,24, 'D');
	$pdf->Rect(131, 67, 0,24, 'D');
	$pdf->Rect(154, 67, 0,24, 'D');
	$pdf->Rect(177, 67, 0,24, 'D');
	$pdf->Rect(200, 67, 0,24, 'D');
	$pdf->SetDrawColor(102,102,102);
	$pdf->Rect(202, 67, 0,24, 'D');
	
	
	
	$pdf->SetFontSize(7);
	$pdf->Text(61,  65, "0%");
	$pdf->Text(84,  65, "10%");
	$pdf->Text(107, 65, "20%");
	$pdf->Text(130, 65, "30%");
	$pdf->Text(153, 65, "40%");
	$pdf->Text(176, 65, "50%");
	$pdf->Text(198, 65, "60%");
	
	$pdf->Image($vf_img_bar,  62, 68.5);
	$pdf->Image($vf_img_bar2, 62, 74.5);
	$pdf->Image($vf_img_bar3, 62, 80.5);
	$pdf->Image($vf_img_bar4, 62, 86.5);


	$pdf->SetFontSize(10);
	$pdf->Ln(2);
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(60, 6, "[3] 12�v�f�̏d�v�x", 1, 1, 'TBLR', 1);
	$pdf->Ln(1);
	
	$pdf->Image($vfimg_main,50,112);
	$pdf->Rect(10, 100, 192, 130, 'D');
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFontSize(8);
	$vfimg_waku = "./images/vf_waku.gif";
	$pdf->Image($vfimg_waku,42.5,109.5);

	$pdf->Text(100, 121, "30%");
	$pdf->Text(100, 129, "25%");
	$pdf->Text(100, 137, "20%");
	$pdf->Text(100, 145, "15%");
	$pdf->Text(100, 153, "10%");
	$pdf->Text(100, 161, "5%");
	$pdf->Text(100, 169, "0%");


	$pdf->SetLineWidth(0.5);
	//�g�͒l�̏�ʂU���ɂ���
	
	//���Ȋ���j�^�����O��
	if(array_key_exists("w1",$vfsix)){
		$pdf->SetXY(90.0, 109.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(90.0, 107.0, 35.0, 8.0, 'DF');
	}
	$pdf->SetXY(90,107);
	$pdf->MultiCell(35, 4, $gmsg1,0,"C");

	//�q�ϓI���ȕ]����
	if(array_key_exists("w2",$vfsix)){
		$pdf->SetXY(129.0, 120.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(127.0, 120.0, 30.0, 9.0, 'DF');
	}
	$pdf->SetXY(127.0, 121.0);
	$pdf->MultiCell(30, 4, $gmsg2,0,"C");

	//���ȍm���
	if(array_key_exists("w3",$vfsix)){
		$pdf->SetXY(144.0, 137.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(142.0, 135.0, 30.0, 8.0, 'DF');
	}
	$pdf->SetXY(142.0, 137.0);
	$pdf->MultiCell(30, 4, $gmsg3,0,"C");

	//�R���g���[�����A�`�[�u�����g��
	if(array_key_exists("w4",$vfsix)){
		$pdf->SetXY(156.0, 166.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(156.0, 164.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(156.0, 166.0);
	$pdf->MultiCell(30, 4, $gmsg4,0,"C");

	//�r�W�����n�o��
	if(array_key_exists("w5",$vfsix)){
		$pdf->SetXY(143.0, 194.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(143.0, 192.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(143.0, 193.0);
	$pdf->MultiCell(30, 4, $gmsg5,0,"C");

	//�|�W�e�B�u�v�l��
	if(array_key_exists("w6",$vfsix)){
		$pdf->SetXY(129.0, 210.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(127.0, 208.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(127.0, 209.0);
	$pdf->MultiCell(30, 4, $gmsg6,0,"C");


	//�ΐl������
	if(array_key_exists("w7",$vfsix)){
		$pdf->SetXY(91.0, 220.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(91.0, 218.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(91.0, 220.0);
	$pdf->MultiCell(30, 4, $gmsg7,0,"C");

	//�󋵎@�m��
	if(array_key_exists("w8",$vfsix)){
		$pdf->SetXY(55.0, 210.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(55.0, 208.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(55.0, 210.0);
	$pdf->MultiCell(30, 4, $gmsg8,0,"C");


	//�z�X�s�^���e�B������
	if(array_key_exists("w9",$vfsix)){
		$pdf->SetXY(36.0, 194.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(36.0, 192.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(36.0, 194.0);
	$pdf->MultiCell(30, 4, $gmsg9,0,"C");


	//���[�_�[�V�b�v������
	if(array_key_exists("w10",$vfsix)){
		$pdf->SetXY(26.0, 166.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(26.0, 164.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(26.0, 166.0);
	$pdf->MultiCell(30, 4, $gmsg10,0,"C");

	//�A�T�[�V����������
	if(array_key_exists("w11",$vfsix)){
		$pdf->SetXY(38.0, 137.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(38.0, 135.0, 30.0, 10.0, 'DF');
	}
	$pdf->SetXY(38.0, 137.0);
	$pdf->MultiCell(30, 4, $gmsg11,0,"C");

	//�W�c�K����
	if(array_key_exists("w12",$vfsix)){
		$pdf->SetXY(55.0, 120.0);
		$pdf->SetFillColor(162, 199, 255);
		$pdf->SetDrawColor(128, 128, 128);
		$pdf->Rect(55.0, 118.0, 30.0, 8.0, 'DF');
	}
	$pdf->SetXY(55.0, 120.0);
	$pdf->MultiCell(30, 4, $gmsg12,0,"C");

	$pdf->SetLineWidth(0.1);
	$pdf->SetFontSize(10);
	$pdf->Rect(20, 107, 28, 10, 'D');
	$pdf->Rect(21, 108, 26, 8, 'D');
	$pdf->Text(25, 113, "�ΐl�e����");

	$pdf->Rect(165, 107, 28, 10, 'D');
	$pdf->Rect(166, 108, 26, 8, 'D');
	$pdf->Text(170, 113, "���ȔF�m��");

	$pdf->Rect(20, 217, 28, 10, 'D');
	$pdf->Rect(21, 218, 26, 8, 'D');
	$pdf->Text(25, 223, "�ΐl�F�m��");

	$pdf->Rect(165, 217, 28, 10, 'D');
	$pdf->Rect(166, 218, 26, 8, 'D');
	$pdf->Text(170, 223, "���Ȉ����");

	$pdf->SetXY(10,232);
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(60, 6, "[4] �d�v�x�̍������6�v�f", 1, 1, 'TBLR', 1);
	$pdf->Ln(2);
	
	$c=0;
	foreach($vfsort as $key=>$val){
				//�\���v�f��
		switch($key){
			case "w1":
				$vfsix_y[$c] = $gmsg1;
			break;
			case "w2":
				$vfsix_y[$c] = $gmsg2;
			break;
			case "w3":
				$vfsix_y[$c] = $gmsg3;
			break;
			case "w4":
				$vfsix_y[$c] = $gmsg4;
			break;
			case "w5":
				$vfsix_y[$c] = $gmsg5;
			break;
			case "w6":
				$vfsix_y[$c] = $gmsg6;
			break;
			case "w7":
				$vfsix_y[$c] = $gmsg7;
			break;
			case "w8":
				$vfsix_y[$c] = $gmsg8;
			break;
			case "w9":
				$vfsix_y[$c] = $gmsg9;
			break;
			case "w10":
				$vfsix_y[$c] = $gmsg10;
			break;
			case "w11":
				$vfsix_y[$c] = $gmsg11;
			break;
			case "w12":
				$vfsix_y[$c] = $gmsg12;
			break;
		}
		$c++;
	}
	$pdf->SetFontSize(8);
	$pdf->SetFillColor(191, 191, 191);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetDrawColor(102,102,102);
	$pdf->Cell(40, 3.5, "�@", 1, 0, 'TBLR', 1);
	$pdf->Cell(25, 3.5, "1", 1, 0, 'C', 1);
	$pdf->Cell(25, 3.5, "2", 1, 0, 'C', 1);
	$pdf->Cell(25, 3.5, "3", 1, 0, 'C', 1);
	$pdf->Cell(25, 3.5, "4", 1, 0, 'C', 1);
	$pdf->Cell(25, 3.5, "5", 1, 0, 'C', 1);
	$pdf->Cell(25, 3.5, "6", 1, 1, 'C', 1);
	$pdf->Cell(40, 8, "�v�f��", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 8, '', 1, 0, 'C', 1);
	$pdf->Cell(25, 8, '', 1, 0, 'C', 1);
	$pdf->Cell(25, 8, '', 1, 0, 'C', 1);
	$pdf->Cell(25, 8, '', 1, 0, 'C', 1);
	$pdf->Cell(25, 8, '', 1, 0, 'C', 1);
	$pdf->Cell(25, 8, '', 1, 1, 'C', 1);
	$pdf->SetFillColor(191, 191, 191);
	$pdf->Cell(40, 8, "�d�v�x", 1, 0, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(25, 8, $vfsixdisp[0]."%", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $vfsixdisp[1]."%", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $vfsixdisp[2]."%", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $vfsixdisp[3]."%", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $vfsixdisp[4]."%", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $vfsixdisp[5]."%", 1, 1, 'C', 1);
	$pdf->SetFontSize(7);
	//�Z��������
	if(!preg_match("/\\n/",$vfsix_y[0])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(50,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[0], 1,"C");

	if(!preg_match("/\\n/",$vfsix_y[1])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(75,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[1], 0,"C");


	if(!preg_match("/\\n/",$vfsix_y[2])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(100,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[2], 0,"C");


	if(!preg_match("/\\n/",$vfsix_y[3])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(125,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[3], 0,"C");

	if(!preg_match("/\\n/",$vfsix_y[4])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(150,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[4], 0,"C");

	if(!preg_match("/\\n/",$vfsix_y[5])){
		$h = 8;
	}else{
		$h = 4;
	}
	$pdf->SetXY(175,243.5);
	$pdf->MultiCell(25, $h, $vfsix_y[5], 0,"C");
	
	

	$pdf->SetXY(50,261);
	$base = 8.5;
	$w = $base+$vfsixdisp[0];
	$per = $w-$base;
	$point = 95+$w;
	
	$pdf->SetFillColor(0, 153, 0);
	$pdf->Cell($w, 6, "�@", 1, 0, 'C', 1);
	$pdf->Text($point-50, 270, $per."%");


	$w1 = $base+$vfsixdisp[1];
	$point = $point+$w1;
	$per = $per+$vfsixdisp[1];
	
	$pdf->SetFillColor(128, 128, 0);
	$pdf->Cell($w1, 6, "�@", 1, 0, 'C', 1);
	$pdf->Text($point-50, 270, $per."%");


	$w2 = $base+$vfsixdisp[2];
	$point = $point+$w2;
	$per = $per+$vfsixdisp[2];

	$pdf->SetFillColor(0, 255, 0);
	$pdf->Cell($w2, 6, "�@", 1, 0, 'C', 1);
	$pdf->Text($point-50, 270, $per."%");

	$w3 = $base+$vfsixdisp[3];
	$point = $point+$w3;
	$per = $per+$vfsixdisp[3];

	$pdf->SetFillColor(0, 255, 255);
	$pdf->Cell($w3, 6, "�@", 1, 0, 'C', 1);
	$pdf->Text($point-50, 270, $per."%");

	
	$w4 = $base+$vfsixdisp[4];
	$point = $point+$w4;
	$pdf->SetFillColor(255, 204, 153);
	$pdf->Cell($w4, 6, "�@", 1, 0, 'C', 1);
	$per = $per+$vfsixdisp[4];

	$pdf->Text($point-50, 270, $per."%");

	$w5 = $base+$vfsixdisp[5];
	$point = $point+$w5;
	$pdf->SetFillColor(255, 0, 255);
	$pdf->Cell($w5, 6, "�@", 1, 0, 'C', 1);
	$per = $per+$vfsixdisp[5];

	$pdf->Text($point-50, 270, $per."%");

	$w6 = 151-($w+$w1+$w2+$w3+$w4+$w5);
	$point = $point+$w6;
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell($w6, 6, "�@", 1, 0, 'C', 1);
	$pdf->Text($point-50, 270, "100%");

	
	
	$pdf->Ln(1);
	$pdf->SetXY(50,273);
	$pdf->SetFontSize(7);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(150, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');
	
	$pdf->AddPage();
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,7);

	$pdf->Ln(2);
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFontSize(10);
	$pdf->Cell(60, 6, "�o�����|�t�@�C���_�[�ɂ���", 1, 0, 'TBLR', 1);
	$pdf->Ln(8);
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFontSize(9);
	$msg = "���̌����͑g�D�Ŏd�������Ă�����ŁA�K�v���ƍl������12�̗v�f���A�����I��@�Ƃ�����@��p���ď��ʕt���A�u�̗p�E��ɕK�v�ȗ̈�E�v�f�̏��ʁv���������Ă��܂��B";
	$pdf->MultiCell(190, 4, $msg, 0,"L");
	$pdf->Ln(2);
	$pdf->SetFontSize(10);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(60, 6, "���ʂ̉��", 1, 0, 'TBLR', 1);
	$pdf->Ln(8);
	
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFontSize(8);

	$msg = "���̗p�E��ɂ���\n";
	$msg .= "�@�̗p�E��ɂ��A�d�v�ȗ̈�E�v�f�̏��ʂ��ω�����\�������邽�߁A�E����L�ڂ��Ă��܂��B";
	$msg .= "\n\n";
	$msg .= "��4�̈��12�v�f�ɂ���\n";
	$msg .= "�@12�̗v�f��4�̈�ɕ�����A�����͑傫���u�Ύ����v�Ɓu�Α��ҁv��2�ɕ������܂��B�e�̈�E�v�f�̏d�v�x���p�[�Z���g�ŕ\���Ă���A�d�v�ȗ̈�E�v�f�قǁA�p�[�Z���g�̐��l�������Ȃ�܂��B";

	$pdf->MultiCell(190, 4, $msg, 0,"L");
	$pdf->Ln(2);
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetFontSize(8);
	$pdf->MultiCell(45, 6, "4�̈�̑�����e",1,"C");
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Write(6,"�e�̈�̑�����e�͉��L�ƂȂ�܂��B");
	$pdf->Ln(8);
	$pdf->SetFillColor(255, 255, 0);
	
	$pdf->Cell(10, 16.5, " ", 1, 0, 'L', 1);
	$pdf->Cell(50, 8, "�P�D���ȔF�m��", 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "������K�؂ɔF�������", 1, 1, 'L', 1);
	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,116);
	$pdf->Cell(50, 8, "�Q�D���Ȉ����", 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�������R���g���[�������", 1, 1, 'L', 1);
	$pdf->Text(13,114, "��");
	$pdf->Text(13,117, "��");
	$pdf->Text(13,120, "��");

	$pdf->SetFillColor(255, 255, 0);
	$pdf->Cell(10, 16, " ", 1, 0, 'L', 1);
	$pdf->Cell(50, 8, "�R�D�ΐl�F�m��", 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "���҂̗���⊴���K�؂ɔF�������", 1, 1, 'L', 1);
	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,132);
	$pdf->Cell(50, 8, "�S�D�ΐl�e����", 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "���҂��������݁A�g�D�ŖڕW��B�������", 1, 1, 'L', 1);
	$pdf->Text(13,130, "��");
	$pdf->Text(13,133, "��");
	$pdf->Text(13,136, "��");

	$pdf->Ln(2);
	$pdf->SetFontSize(8);
	$pdf->MultiCell(45, 6, "12�v�f�̑�����e",1,"C");
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Write(6,"�e�̈�̍\���v�f�ƁA�e�v�f�̑�����e�͉��L�ƂȂ�܂��B");
	$pdf->Ln(8);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->Cell(10, 24, " ", 1, 0, 'L', 1);
	$msg1 = preg_replace("/\\n/","",$msg1);
	$pdf->Cell(50, 8,"�@".$msg1, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "�������g�̊����F�����邱��", 1, 1, 'L', 1);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,164);
	$msg2 = preg_replace("/\\n/","",$msg2);
	$pdf->Cell(50, 8, "�@".$msg2, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�������g�̓���s������q�ϓI�ɕ]�����邱��", 1, 1, 'L', 1);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,172);
	
	$msg3 = preg_replace("/\\n/","",$msg3);
	$pdf->Cell(50, 8, "�@".$msg3, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�������g�ɉ��l������Ǝ��M�����Ƃ��Ƃ��邱��", 1, 1, 'L', 1);
	$pdf->Text(13.5,162, "�P");
	$pdf->Text(13,165, "��");
	$pdf->Text(13,168, "��");
	$pdf->Text(13,171, "�F");
	$pdf->Text(13,174, "�m");
	$pdf->Text(13,177, "��");
	$pdf->Ln(2);
			
	$pdf->SetFillColor(255, 255, 0);
	$pdf->Cell(10, 24, " ", 1, 0, 'L', 1);
	$msg4 = preg_replace("/\\n/","",$msg4);
	$pdf->Cell(50, 8,"�@".$msg4, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "�s���Ȏ��ԁE�s���ȏ󋵂ɂ����Y�ꂸ�A�S�苭���撣�葱���邱��", 1, 1, 'L', 1);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,190);
	$msg5 = preg_replace("/\\n/","",$msg5);
	$pdf->Cell(50, 8, "�@".$msg5, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�ڕW�ɑ΂��āA�������x���Ŋ������錈�ӂ�������", 1, 1, 'L', 1);
	
	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,198);
	$msg6 = preg_replace("/\\n/","",$msg6);
	$pdf->Cell(50, 8, "�@".$msg6, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�V��������A�]�܂����Ȃ��󋵂̕ω��ɑ΂��āA�_��Ŋy�ϓI�ɓK�����邱��", 1, 1, 'L', 1);
	$pdf->Text(13.5,187, "�Q");
	$pdf->Text(13,190, "��");
	$pdf->Text(13,193, "��");
	$pdf->Text(13,196, "��");
	$pdf->Text(13,199, "��");
	$pdf->Text(13,202, "��");


	$pdf->Ln(2);
	
	$pdf->SetFillColor(255, 255, 0);
	$pdf->Cell(10, 24, " ", 1, 0, 'L', 1);
	$msg7 = preg_replace("/\\n/","",$msg7);
	$pdf->Cell(50, 8,"�@".$msg7, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "���҂̗���⊴����@���邱��", 1, 1, 'L', 1);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,216);
	$msg8 = preg_replace("/\\n/","",$msg8);
	$pdf->Cell(50, 8, "�@".$msg8, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�d�v�ȎЉ�I�l�b�g���[�N��F�����A�͊֌W������������", 1, 1, 'L', 1);
	
	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,224);
	$msg9 = preg_replace("/\\n/","",$msg9);
	$pdf->Cell(50, 8, "�@".$msg9, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "���҂̗��v�̂��߂Ɏ����I�E�Ӑ}�I�ɍs�����邱��", 1, 1, 'L', 1);
	$pdf->Text(13.5,212, "�R");
	$pdf->Text(13,215, "��");
	$pdf->Text(13,218, "�l");
	$pdf->Text(13,221, "�F");
	$pdf->Text(13,224, "�m");
	$pdf->Text(13,227, "��");


	$pdf->Ln(2);
	
	$pdf->SetFillColor(255, 255, 0);
	$pdf->Cell(10, 24, " ", 1, 0, 'L', 1);
	$msg10 = preg_replace("/\\n/","",$msg10);
	$pdf->Cell(50, 8,"�@".$msg10, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130.1, 8, "�W�c�̖ڕW�B���A����яW�c�̈ێ��E�����̂��߂Ɍ��ʓI�ȍs�����Ƃ邱��", 1, 1, 'L', 1);

	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,242);
	$msg11 = preg_replace("/\\n/","",$msg11);
	$pdf->Cell(50, 8, "�@".$msg11, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "�����̗v����咣�𑼎҂̗��v�ɂ��z�����A���ʓI���_���I�ɑ��҂ɒ񎦂��邱��", 1, 1, 'L', 1);
	
	$pdf->SetFillColor(255, 255, 0);
	$pdf->SetXY(20.05,250);
	$msg12 = preg_replace("/\\n/","",$msg12);
	$pdf->Cell(50, 8, "�@".$msg12, 1, 0, 'L', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(130, 8, "���ԂƂ̗ǍD�Ȋ֌W��ۂ���", 1, 1, 'L', 1);
	$pdf->Text(13,239, " �S");
	$pdf->Text(13,242, "��");
	$pdf->Text(13,245, "�l");
	$pdf->Text(13,248, "�e");
	$pdf->Text(13,251, "��");
	$pdf->Text(13,254, "��");
	$pdf->Ln();
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');

	if(in_array("8",$pdfline) && $vf8){
		//���\��
		$pdf->AddPage();
/*
		//PDF���S�摜���o�^����Ă���Ώo�͂���
		$pdf->Image("./images/welcome.jpg", 5,5);
		$pdf->SetDrawColor(255, 255, 255);
*/
	}


	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($vf_img_bar);
	unlink($vf_img_bar2);
	unlink($vf_img_bar3);
	unlink($vf_img_bar4);
	unlink($vfimg_main);
	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------




?>