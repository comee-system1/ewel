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



	$jikoninti   = sprintf("%.1f",($testdata['type'][ 'dev1'  ]+$testdata[ 'type' ][ 'dev2'  ]+$testdata[ 'type'][ 'dev3'  ])/3);
	$jikoantei   = sprintf("%.1f",($testdata['type'][ 'dev4'  ]+$testdata[ 'type' ][ 'dev5'  ]+$testdata[ 'type'][ 'dev6'  ])/3);
	$taijinninti = sprintf("%.1f",($testdata['type'][ 'dev7'  ]+$testdata[ 'type' ][ 'dev8'  ]+$testdata[ 'type'][ 'dev9'  ])/3);
	$taijineikyo = sprintf("%.1f",($testdata['type'][ 'dev10' ]+$testdata[ 'type' ][ 'dev11' ]+$testdata[ 'type'][ 'dev12' ])/3);

	$max_youso = max($jikoninti,$jikoantei,$taijinninti,$taijineikyo);
	
	
	$array_dev = array(
					 "dev1" =>$testdata['type'][ 'dev1'   ]
					,"dev2" =>$testdata['type'][ 'dev2'   ]
					,"dev3" =>$testdata['type'][ 'dev3'   ]
					,"dev4" =>$testdata['type'][ 'dev4'   ]
					,"dev5" =>$testdata['type'][ 'dev5'   ]
					,"dev6" =>$testdata['type'][ 'dev6'   ]
					,"dev7" =>$testdata['type'][ 'dev7'   ]
					,"dev8" =>$testdata['type'][ 'dev8'   ]
					,"dev9" =>$testdata['type'][ 'dev9'   ]
					,"dev10"=>$testdata['type'][ 'dev10'  ]
					,"dev11"=>$testdata['type'][ 'dev11'  ]
					,"dev12"=>$testdata['type'][ 'dev12'  ]
					
				);
	$e_dev1Str  = round($testdata['type'][ 'dev1'    ],1);
	$e_dev2Str  = round($testdata['type'][ 'dev2'    ],1);
	$e_dev3Str  = round($testdata['type'][ 'dev3'    ],1);
	$e_dev4Str  = round($testdata['type'][ 'dev4'    ],1);
	$e_dev5Str  = round($testdata['type'][ 'dev5'    ],1);
	$e_dev6Str  = round($testdata['type'][ 'dev6'    ],1);
	$e_dev7Str  = round($testdata['type'][ 'dev7'    ],1);
	$e_dev8Str  = round($testdata['type'][ 'dev8'    ],1);
	$e_dev9Str  = round($testdata['type'][ 'dev9'    ],1);
	$e_dev10Str = round($testdata['type'][ 'dev10'   ],1);
	$e_dev11Str = round($testdata['type'][ 'dev11'   ],1);
	$e_dev12Str = round($testdata['type'][ 'dev12'   ],1);


	$youso_array = array(
					"jikoninti"=>$jikoninti
					,"jikoantei"=>$jikoantei
					,"taijinninti"=>$taijinninti
					,"taijineikyo"=>$taijineikyo
				);
	$max_key = array_keys($youso_array,$max_youso);
	$jikoninti_lv   = $obj->getLevela3($jikoninti );
	$jikoantei_lv   = $obj->getLevela3($jikoantei );
	$taijinninti_lv = $obj->getLevela3($taijinninti );
	$taijineikyo_lv = $obj->getLevela3($taijineikyo );
	
	//�_�O���t
	$img1_a3 = "./images/pdf/img1_a3".$id.".jpg";
	//1������6.6
	//20�܂ł̒l������(19)
	$wid = 6.6*($jikoninti-20)+19;
	$im = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);

	$gray      = imagecolorallocate($im, 51, 51, 51);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, 0x0066FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img1_a3);
	imagedestroy($im);

	$img2_a3 = "./images/pdf/img2_a3".$id.".jpg";
	//1������6.6
	//20�܂ł̒l������(19)
	$wid = 6.6*($jikoantei-20)+19;
	$im = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);

	$gray      = imagecolorallocate($im, 51, 51, 51);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, 0x0066FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img2_a3);
	imagedestroy($im);

	$img3_a3 = "./images/pdf/img3_a3".$id.".jpg";
	//1������6.6
	//20�܂ł̒l������(19)
	$wid = 6.6*($taijinninti-20)+19;
	$im = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);

	$gray      = imagecolorallocate($im, 51, 51, 51);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, 0x0066FF);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img3_a3);
	imagedestroy($im);

	$img4_a3 = "./images/pdf/img4_a3".$id.".jpg";
	//1������6.6
	//20�܂ł̒l������(19)
	$wid = 6.6*($taijineikyo-20)+19;
	$im = imagecreatetruecolor($wid, 10);
	$img_color = imagecolorallocate($im, 64, 64, 64);

	$gray      = imagecolorallocate($im, 51, 51, 51);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 8, 0x0066FF);
	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $img4_a3);
	imagedestroy($im);
	

	foreach ($array_dev as $key => $row) {
    	$volume[$key]  = $row;

	}
	array_multisort($volume, SORT_DESC,  $array_dev);

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
	
	
	$i=1;
	foreach( $array_dev as $key=>$val){
		$arrayDevs[$i][ 'key'   ] = $key;
		$arrayDevs[$i][ 'val'   ] = $val;
		$arrayDevs[$i][ 'title' ] = $a_questions[ $key ];

		$arrayDevs[$i][ 'message' ] = $aMessage[$key];
		$arrayDevs[$i][ 'work'    ] = $aWork[$key];


		if($i >= 2){
			break;
		}
		$i++;
	}


	$gimg_a3 = "./images/pdf/grafa3".$id.".png";
	
	$dev1_a3  = ($e_dev1Str/10)-2;
	$dev2_a3  = ($e_dev2Str/10)-2;
	$dev3_a3  = ($e_dev3Str/10)-2;
	$dev4_a3  = ($e_dev4Str/10)-2;
	$dev5_a3  = ($e_dev5Str/10)-2;
	$dev6_a3  = ($e_dev6Str/10)-2;
	$dev7_a3  = ($e_dev7Str/10)-2;
	$dev8_a3  = ($e_dev8Str/10)-2;
	$dev9_a3  = ($e_dev9Str/10)-2;
	$dev10_a3 = ($e_dev10Str/10)-2;
	$dev11_a3 = ($e_dev11Str/10)-2;
	$dev12_a3 = ($e_dev12Str/10)-2;
	
	$a3_array = array(
					$dev1_a3,$dev2_a3,$dev3_a3
					,$dev4_a3,$dev5_a3,$dev6_a3
					,$dev7_a3,$dev8_a3,$dev9_a3
					,$dev10_a3,$dev11_a3,$dev12_a3
					);


	$MyData = new pData2();
	$MyData->addPoints($a3_array,"ScoreA");  
	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>0,"G"=>0,"B"=>255));
	$myPicture = new pImage(360,360,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.1,"R"=>255,"G"=>255,"B"=>255));
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(10,25,360,360);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);
	$myPicture->render($gimg_a3);




	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozinA3($pdf,$testdata,9);
	
	$pdf->SetLineWidth(0.5);

	$pdf->SetFontSize(10);
	$pdf->SetXY(10,25);
	$pdf->Write("25",'�P. �s�����l�����ő��肵�Ă��邱��');
	$pdf->SetXY(13,45);
	$msg = "�s�����l�����́A���X�s�����钆�Łu���Ȃ����ǂ̂悤�ȍs�����d�����Ă���̂��v�ɂ��đ��肵�Ă���A�\�͂𑪒肷�錟���ł͂���܂���B�i�Ⴆ�΁A�ΐl�����͂̃X�R�A�����̓����Ɣ�r���ĒႢ�ꍇ�A�u���҂̗���⊴��𗝉����邱�Ɓv���d�����Ă��Ȃ��B�Ƃ������Ƃł���A�u���҂̗���⊴��𗝉�����v�\�͂��Ⴂ�B�Ƃ������Ƃł͂���܂���B�j���̌�����12�̓�������\������Ă���A12�̓����́A�u���ȔF�m�́F���Ȃ�K�؂ɔF������́v�u���Ȉ���́F�������R���g���[������́v�u�ΐl�F�m�́F���҂̗���⊴���K�؂ɔF������́v�u�ΐl�e���́F���҂��������݁A�g�D�ŖڕW��B������́v��4�̗̈�ɕ�����Ă��܂��B12�̓����̓X�R�A�i�΍��l�j�ŕ\�킳��Ă��܂��B�X�R�A�������ꍇ�ɂ́A����̍s���ɂ����āA���̓������d�����čs�����Ă��邱�Ƃ�\���Ă��܂��B�e�����̃X�R�A�͉��L�̌��ʂ��������������B�܂��A�d�����Ă���s�������Ȃ��̋��݂ɂȂ�悤�ȃ��[�N�V�[�g���E���ɗp�ӂ��Ă��܂��B�����p���������B";
	$pdf->MultiCell(181, 4.5, $msg,0,"L");
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->Rect(10, 43, 190, 0, 'DF');
	$pdf->Rect(10, 43, 0, 43, 'DF');
	$pdf->Rect(10, 86, 190, 0, 'DF');
	$pdf->Rect(200, 43, 0, 43, 'DF');

	$pdf->SetLineWidth(0);

	$pdf->SetDrawColor(102, 102, 102);

	$pdf->Text(10,92, "�Q. �s�����l�S�̗̈�̃o�����X");
	$pdf->SetXY(10,95);
	$pdf->Cell(25, 12, "�@", 1, 0, 'L', 1);
	$pdf->Cell(25, 12, "�X�R�A", 1, 0, 'C', 1);
	$pdf->Cell(25, 12, "���x��", 1, 0, 'C', 1);
	$pdf->Cell(32, 5, "1", 1, 0, 'C', 1);
	$pdf->Cell(18, 5, "2", 1, 0, 'C', 1);
	$pdf->Cell(18, 5, "3", 1, 0, 'C', 1);
	$pdf->Cell(18, 5, "4", 1, 0, 'C', 1);
	$pdf->Cell(29, 5, "5", 1, 0, 'C', 1);
	$pdf->SetXY(85,100);
	$pdf->Cell(115, 7, "", 1, 1, 'C', 1);

	$pdf->Cell(25, 8, "���ȔF�m��", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $jikoninti, 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $jikoninti_lv, 1, 0, 'C', 1);

	$pdf->Cell(5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(5, 8, " ", 1, 1, 'C', 1);

	$pdf->Cell(25, 8, "���Ȉ����", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $jikoantei, 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $jikoantei_lv, 1, 0, 'C', 1);

	$pdf->Cell(5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(5, 8, " ", 1, 1, 'C', 1);

	$pdf->Cell(25, 8, " �ΐl�F�m��", 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $taijinninti,1, 0, 'C', 1);
	$pdf->Cell(25, 8, $taijinninti_lv,1, 0, 'C', 1);

	$pdf->Cell(5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(5, 8, " ", 1, 1, 'C', 1);

	$pdf->Cell(25, 8, " �ΐl�e����",1, 0, 'C', 1);
	$pdf->Cell(25, 8, $taijineikyo, 1, 0, 'C', 1);
	$pdf->Cell(25, 8, $taijineikyo_lv,1, 0, 'C', 1);

	$pdf->Cell(5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(17.5, 8, " ", 1, 0, 'C', 1);
	$pdf->Cell(5, 8, " ", 1, 1, 'C', 1);
	
	$pdf->SetFillColor(102, 102, 102);

	$pdf->Rect(10, 95, 190, 0.5, 'F');
	$pdf->Rect(10, 138.5, 190, 0.5, 'F');
	$pdf->Rect(200, 95, 0.5, 44, 'F');
	$pdf->Rect(10, 95, 0.5, 44, 'F');

	$pdf->Text(87.5,105, "20");
	$pdf->Text(104.5,105, "30");
	$pdf->Text(122,105, "40");
	$pdf->Text(140,105, "50");
	$pdf->Text(159,105, "60");
	$pdf->Text(176,105, "70");
	$pdf->Text(194,105, "80");

	$pdf->SetFillColor(255, 0, 0);
	$pdf->Rect(142.2, 107, 0.5, 32, 'F');


	$pdf->Image($img1_a3, 85, 110);
	$pdf->Image($img2_a3, 85, 118);
	$pdf->Image($img3_a3, 85, 126);
	$pdf->Image($img4_a3, 85, 134);	
	
	$pdf->SetFillColor(0, 0, 0);
	$pdf->Rect(10, 140, 190, 0, 'D');
	$pdf->Rect(10, 140, 0, 12, 'D');
	$pdf->Rect(10, 152, 190, 0, 'D');
	$pdf->Rect(200, 140, 0, 12, 'D');
	$pdf->SetXY(10,140.5);
	$pdf->MultiCell(185, 5, $aMessage2[$max_key[0]], 0);
	
	$pdf->Text(10,158, "�R. �s�����l12�����̃X�R�A�ƃ`���[�g");
	$pdf->SetXY(10,162);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell(38, 5, "���ȔF�m��", 1, 0, 'C', 1);
	$pdf->Cell(8.5, 5, "���"    ,1, 0, 'C', 1);

	$pdf->Cell(44, 5, "���Ȉ����", 1, 0, 'C', 1);
	$pdf->Cell(8.5, 5, "���"    ,1, 0, 'C', 1);

	$pdf->Cell(38, 5, "�ΐl�F�m��", 1, 0, 'C', 1);
	$pdf->Cell(8.5, 5, "���"    ,1, 0, 'C', 1);

	$pdf->Cell(38, 5, "�ΐl�e����", 1, 0, 'C', 1);
	$pdf->Cell(8.5, 5, "���"    ,1, 1, 'C', 1);

	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetFontSize(8.0);
	//���Ȋ���j�^�����O��
	$pdf->Cell(38, 5, $msg1, 'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev1Str,   'TL', 0, 'L', 1);

	//�R���g���[�����A�`�[�u�����g��
	$pdf->Cell(44, 5, $msg4,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev4Str,   'TL', 0, 'L', 1);

	//�ΐl������
	$pdf->Cell(38, 5, $msg7,  'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev7Str,   'TL', 0, 'L', 1);

	//���[�_�[�V�b�v������
	$pdf->Cell(38, 5, $msg10,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev10Str,  'TLR', 1, 'L', 1);


	//�q�ϓI���ȕ]����
	$pdf->Cell(38, 5, $msg2,     'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev2Str,   'TL', 0, 'L', 1);

	//�r�W�����n�o��
	$pdf->Cell(44, 5, $msg5,        'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev5Str,   'TL', 0, 'L', 1);

	//�󋵎@�m��
	$pdf->Cell(38, 5, $msg8,      'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev8Str,   'TL', 0, 'L', 1);

	//�A�T�[�V����������
	$pdf->Cell(38, 5, $msg11,       'TL', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev11Str,  'TLR', 1, 'L', 1);


	//���ȍm���
	$pdf->Cell(38, 5, $msg3,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev3Str,   'TLB', 0, 'L', 1);

	//�|�W�e�B�u�v�l��
	$pdf->Cell(44, 5, $msg6,       'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev6Str,   'TLB', 0, 'L', 1);

	//�z�X�s�^���e�B������
	$pdf->Cell(38, 5, $msg9,      'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev9Str,   'TLB', 0, 'L', 1);

	//�W�c�K����
	$pdf->Cell(38, 5, $msg12,      'TLB', 0, 'L', 1);
	$pdf->Cell(8.5,5, $e_dev12Str,  'TLBR', 1, 'L', 1);
	$pdf->SetFontSize(10);
	$pdf->Image($gimg_a3, 60, 185);
	$imga3_waku = "./images/a3waku.gif";
	$pdf->Image($imga3_waku, 58, 185);

	$pdf->Rect(10, 183, 192, 0, 'D');
	$pdf->Rect(10, 183, 0, 109, 'D');
	$pdf->Rect(10, 292, 192, 0, 'D');
	$pdf->Rect(202, 183, 0, 109, 'D');
	
	$pdf->Text(105, 195, "80");
	$pdf->Text(105, 202, "70");
	$pdf->Text(105, 209, "60");
	$pdf->Text(105, 216, "50");
	$pdf->Text(105, 222, "40");
	$pdf->Text(105, 229, "30");
	$pdf->Text(105, 236, "20");
	//���Ȋ���j�^�����O��
	$pdf->SetXY(93,184);
	$pdf->MultiCell(32, 4, $gmsg1,"","C");
	//�q�ϓI���ȕ]����
	$pdf->SetXY(125,192);
	$pdf->MultiCell(32, 4, $gmsg2,"","C");
	//���ȍm���
	$pdf->SetXY(142,210);
	$pdf->MultiCell(32, 3, $gmsg3,"","C");
	//�R���g���[�����A�`�[�u�����g��
	$pdf->SetXY(155,235);
	$pdf->MultiCell(32, 3, $gmsg4,"","C");
	//�r�W�����n�o��
	$pdf->SetXY(140,260);
	$pdf->MultiCell(32, 3, $gmsg5,"","C");
	//�|�W�e�B�u�v�l��
	$pdf->SetXY(126,276);
	$pdf->MultiCell(32, 3, $gmsg6,"","C");
	//�ΐl������
	$pdf->SetXY(95,283);
	$pdf->MultiCell(32, 3, $gmsg7,"","C");
	//�󋵎@�m��
	$pdf->SetXY(65,276);
	$pdf->MultiCell(32, 3, $gmsg8,"","C");
	//�z�X�s�^���e�B������
	$pdf->SetXY(45,260);
	$pdf->MultiCell(30, 3, $gmsg9,"","C");
	//���[�_�[�V�b�v������
	$pdf->SetXY(36,235);
	$pdf->MultiCell(30, 3, $gmsg10,"","C");
	//�A�T�[�V����������
	$pdf->SetXY(45,210);
	$pdf->MultiCell(30, 3, $gmsg11,"","C");
	//�W�c�K����
	$pdf->SetXY(60,195);
	$pdf->MultiCell(30, 3, $gmsg12,"","C");

	$pdf->Rect(20, 190, 28, 10, 'D');
	$pdf->Rect(21, 191, 26, 8, 'D');
	$pdf->Text(25, 196, "�ΐl�e����");

	$pdf->Rect(165, 190, 28, 10, 'D');
	$pdf->Rect(166, 191, 26, 8, 'D');
	$pdf->Text(172, 196, "���ȔF�m��");

	$pdf->Rect(20, 273, 28, 10, 'D');
	$pdf->Rect(21, 274, 26, 8, 'D');
	$pdf->Text(25, 279, "�ΐl�F�m��");

	$pdf->Rect(165, 273, 28, 10, 'D');
	$pdf->Rect(166, 274, 26, 8, 'D');
	$pdf->Text(172, 279, "���Ȉ����");


	$pdf->SetXY(210,25);
	$pdf->SetFontSize(10);
	$pdf->Write("25","�S. �P�Q�̓����Ƒ�����e");
	$pdf->SetXY(210,43);
	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell(40, 5, "����", 0, 0, 'C', 1);
	$pdf->Cell(60, 5, "������e", 0, 0, 'C', 1);
	$pdf->Cell(40, 5, "����", 0, 0, 'C', 1);
	$pdf->Cell(60, 5, "������e", 0, 1, 'C', 1);
	$pdf->SetFontSize(8);

	$pdf->SetFillColor(0, 0, 0);
	$pdf->Rect(209.8, 43, 0.1, 70, 'F');
	$pdf->Rect(250, 43, 0.1, 70, 'F');
	$pdf->Rect(310, 43, 0.1, 70, 'F');
	$pdf->Rect(350, 43, 0.1, 70, 'F');
	$pdf->Rect(410, 43, 0.1, 70, 'F');

	$pdf->Rect(210, 43, 200,  0.1, 'F');
	$pdf->Rect(210, 48, 200,  0.1, 'F');
	$pdf->Rect(210, 78, 200,  0.1, 'F');
	$pdf->Rect(210, 113, 200, 0.1, 'F');
	
	$pdf->Rect(215, 48.2, 0.1, 64.8, 'F');
	$pdf->Rect(315, 48.2, 0.1, 64.8, 'F');

	$pdf->Rect(215, 58, 95, 0.1, 'F');
	$pdf->Rect(215, 68, 95, 0.1, 'F');

	$pdf->Rect(215, 90, 95, 0.1, 'F');
	$pdf->Rect(215, 102, 95, 0.1, 'F');


	$pdf->Rect(315.2, 58,  94.8, 0.1, 'F');
	$pdf->Rect(315.2, 68,  94.8, 0.1, 'F');

	$pdf->Rect(315.2, 90,  94.8, 0.1, 'F');
	$pdf->Rect(315.2, 102, 94.8, 0.1, 'F');
	
	$pdf->Text(211,54, "��");
	$pdf->Text(211,58, "��");
	$pdf->Text(211,62, "�F");
	$pdf->Text(211,66, "�m");
	$pdf->Text(211,70, "��");

	$pdf->Text(211,85, "��");
	$pdf->Text(211,89, "��");
	$pdf->Text(211,93, "��");
	$pdf->Text(211,97, "��");
	$pdf->Text(211,101, "��");

	$pdf->Text(311,54, "��");
	$pdf->Text(311,58, "�l");
	$pdf->Text(311,62, "�F");
	$pdf->Text(311,66, "�m");
	$pdf->Text(311,70, "��");

	$pdf->Text(311,85, "��");
	$pdf->Text(311,89, "�l");
	$pdf->Text(311,93, "�e");
	$pdf->Text(311,97, "��");
	$pdf->Text(311,101, "��");

	$pdf->SetXY(216,49.5);
	$pdf->MultiCell(32, 4, $msg1 ,0,"L");
	$pdf->SetXY(250,49.5);
	$a3_msg = "�������g�̊�����ӎ����A�F�����悤�Ƃ��邱��";
	$pdf->MultiCell(55, 4, $a3_msg ,0,"L");
	
	$pdf->SetXY(316,49.5);
	$pdf->MultiCell(32, 4, $msg7 ,0,"L");
	$pdf->SetXY(350,49.5);
	$a3_msg = "���҂̗����󋵁A������@�m���A�������邱��";
	$pdf->MultiCell(58, 4, $a3_msg ,0,"L");


	$pdf->SetXY(216,59);
	$pdf->MultiCell(32, 4, $msg2 ,0,"L");
	$pdf->SetXY(250,59);
	$a3_msg = "�������g�̓���s������q�ϓI�ɕ]���E�F��\n���邱��";
	$pdf->MultiCell(55, 4, $a3_msg ,0,"L");

	$pdf->SetXY(316,59);
	$pdf->MultiCell(32, 4, $msg8 ,0,"L");
	$pdf->SetXY(350,59);
	$a3_msg = "�d�v�ȎЉ�I�l�b�g���[�N��F�����A�͊֌W\n���@�m���A�������邱��";
	$pdf->MultiCell(58, 4, $a3_msg ,0,"L");


	$pdf->SetXY(216,69);
	$pdf->MultiCell(32, 4, $msg3 ,0,"L");
	$pdf->SetXY(250,69);
	$a3_msg = "�������g�ɉ��l������ƔF�����A���M��������";
	$pdf->MultiCell(52, 4, $a3_msg ,0,"L");
	
	$pdf->SetXY(316,69);
	$pdf->MultiCell(32, 4, $msg9 ,0,"L");
	$pdf->SetXY(350,69);
	$a3_msg = "���҂������Ă��邱�Ƃ��@�m���A���҂̗��v\n�̂��߂Ɏ����I�E�Ӑ}�I�ɃT�|�[�g���邱��";
	$pdf->MultiCell(58, 4, $a3_msg ,0,"L");


	$pdf->SetXY(216,80);
	$pdf->MultiCell(32, 4, $msg4 ,0,"L");
	$pdf->SetXY(250,80);
	$a3_msg = "�s���Ȏ��ԁE�s���ȏ󋵂ɂ����Y�ꂸ�A�S�苭���撣�葱���邱��";
	$pdf->MultiCell(58, 4, $a3_msg ,0,"L");

	$pdf->SetXY(316,80);
	$pdf->MultiCell(32, 4, $msg10 ,0,"L");
	$pdf->SetXY(350,80);
	$a3_msg = "�W�c�̖ڕW�B���A����яW�c�̈ێ��E�����̂��߂Ɍ��ʓI�ȍs�����Ƃ邱��";
	$pdf->MultiCell(55, 4, $a3_msg ,0,"L");

	$pdf->SetXY(216,92);
	$pdf->MultiCell(32, 4, $msg5 ,0,"L");
	$pdf->SetXY(250,92);
	$a3_msg = "�������g�̖ڕW�ɑ΂��āA�������x���Ŋ������錈�ӂ�������";
	$pdf->MultiCell(55, 4, $a3_msg ,0,"L");


	$pdf->SetXY(316,92);
	$pdf->MultiCell(32, 4, $msg11 ,0,"L");
	$pdf->SetXY(350,92);
	$a3_msg = "�����̗v����咣�𑼎҂̗��v�ɂ��z�����A���ʓI�ɑ��҂ɒ񎦂��邱��";
	$pdf->MultiCell(55, 4, $a3_msg ,0,"L");


	$pdf->SetXY(216,103);
	$pdf->MultiCell(32, 4, $msg6 ,0,"L");
	$pdf->SetXY(250,103);
	$a3_msg = "�V��������]�܂����Ȃ��󋵂̕ω��ɑ΂��āA�_��Ŋy�ϓI�ɓK�����邱��";
	$pdf->MultiCell(60, 4, $a3_msg ,0,"L");

	$pdf->SetXY(316,103);
	$pdf->MultiCell(32, 4, $msg12 ,0,"L");
	$pdf->SetXY(350,103);
	$a3_msg = "�g�D�E�`�[���ɂ����āA���ԂƂ̗ǍD�Ȋ֌W��ۂ��߂̍s�����Ƃ邱��";
	$pdf->MultiCell(58, 4, $a3_msg ,0,"L");
	
	$pdf->SetXY(210,119);
	$pdf->SetFontSize(10);
	$pdf->Write("5","�T.".$name." ���񂪏d�����Ă���s�����l�Ƃ��̓���");
	$pdf->SetXY(210,125);
	$pdf->SetFillColor(204, 255, 204);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->Cell(60, 5, "�d�����Ă������", 0, 0, 'C', 1);
	$pdf->Cell(140, 5, "�d�����Ă���������������ꂽ�ꍇ�̓���", 0, 1, 'C', 1);
	
	$pdf->SetFillColor(0, 0, 0);
	$pdf->Rect(210, 124.9, 200,  0.1, 'F');
	$pdf->Rect(210, 130, 200,  0.1, 'F');
	$pdf->Rect(210, 155, 200,  0.1, 'F');
	$pdf->Rect(210, 180, 200,  0.1, 'F');

	$pdf->Rect(209.8, 125, 0.1,  55, 'F');
	$pdf->Rect(270, 125, 0.1,  55, 'F');
	$pdf->Rect(410, 125, 0.1,  55, 'F');


	$pdf->SetXY(211,140);
	$pdf->MultiCell(55, 4, $arrayDevs[1][ 'title' ] ,0,"C");
	$pdf->SetXY(271,131);
	$pdf->SetFontSize(9);
	$pdf->MultiCell(138, 4, $arrayDevs[1][ 'message' ] ,0,"L");
	$pdf->SetFontSize(10);
	$pdf->SetXY(211,165);
	$pdf->MultiCell(55, 4, $arrayDevs[2][ 'title' ] ,0,"C");
	$pdf->SetXY(271,156);
	$pdf->SetFontSize(9);
	$pdf->MultiCell(138, 4, $arrayDevs[2][ 'message' ] ,0,"L");

	$pdf->SetXY(210,185);
	$pdf->SetFontSize(10);
	$pdf->Write("5","�U.".$name." ���񂪏d�����Ă�����������݂ɂ��邽�߂̃��[�N�V�[�g");
	$pdf->SetXY(210,192);
	
	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell(100, 5, "���݂ƂȂ�����@", 0, 0, 'C', 1);
	$pdf->Cell(100, 5, "���݂ƂȂ�����A", 0, 0, 'C', 1);
	$pdf->SetFillColor(0, 0, 0);
	$pdf->Rect(210, 192, 200,  0.1, 'F');
	$pdf->Rect(210, 197, 200,  0.1, 'F');
	$pdf->Rect(210, 202, 200,  0.1, 'F');
	$pdf->Rect(210, 216, 200,  0.1, 'F');
	$pdf->Rect(210, 233, 200,  0.1, 'F');
	$pdf->Rect(209.9, 192, 0.1,  41, 'F');
	$pdf->Rect(310, 192, 0.1,  41, 'F');
	$pdf->Rect(410, 192, 0.1,  41, 'F');

	$pdf->SetXY(210,197.5);
	$pdf->MultiCell(100, 4, $arrayDevs[1][ 'title' ] ,0,"C");
	$pdf->SetXY(310,197.5);
	$pdf->MultiCell(100, 4, $arrayDevs[2][ 'title' ] ,0,"C");
	$pdf->SetFontSize(8);
	$pdf->SetXY(210,203);
	$pdf->MultiCell(100, 4, $arrayDevs[1][ 'work' ] ,0,"L");
	$pdf->SetXY(310,203);
	$pdf->MultiCell(100, 4, $arrayDevs[2][ 'work' ] ,0,"L");

	$pdf->SetFontSize(7);

	$pdf->SetXY(210,217);
	$pdf->MultiCell(100, 4,"�i�L�����j",0,"L");
	$pdf->SetXY(310,217);
	$pdf->MultiCell(100, 4, "�i�L�����j" ,0,"L");

	$ya = "./images/ya.gif";
	$pdf->Image($ya,250,234);
	$pdf->Image($ya,350,234);
	
	$pdf->Rect(210, 238, 200,  0.1, 'F');
	$pdf->Rect(210, 242, 200,  0.1, 'F');
	$pdf->Rect(210, 253, 200,  0.1, 'F');
	$pdf->Rect(209.8, 238, 0.1,  15, 'F');
	$pdf->Rect(310, 238, 0.1,  15, 'F');
	$pdf->Rect(410, 238, 0.1,  15, 'F');
	$pdf->SetFontSize(8);
	$pdf->SetXY(211,238.5);
	$pdf->MultiCell(100, 4,"��L�̏󋵂ŁA�ǂ̂悤�ȍs�������܂������B��̓I�ɏ����Ă�������",0,"L");
	$pdf->SetXY(311,238.5);
	$pdf->MultiCell(100, 4,"��L�̏󋵂ŁA�ǂ̂悤�ȍs�������܂������B��̓I�ɏ����Ă�������",0,"L");
	$pdf->SetFontSize(7);

	$pdf->SetXY(211,242.5);
	$pdf->MultiCell(100, 4,"�i�L�����j",0,"L");
	$pdf->SetXY(311,242.5);
	$pdf->MultiCell(100, 4, "�i�L�����j" ,0,"L");

	$ya = "./images/ya.gif";
	$pdf->Image($ya,250,254);
	$pdf->Image($ya,350,254);

	$pdf->Rect(210, 257.9, 200,  0.1, 'F');
	$pdf->Rect(210, 267, 200,  0.1, 'F');
	$pdf->Rect(210, 277, 200,  0.1, 'F');

	$pdf->Rect(210, 258, 0.1,  19, 'F');
	$pdf->Rect(310, 258, 0.1,  19, 'F');
	$pdf->Rect(410, 258, 0.1,  19, 'F');
	
	$pdf->SetXY(210,267.5);
	$pdf->MultiCell(100, 4,"�i�L�����j",0,"L");
	$pdf->SetXY(310,267.5);
	$pdf->MultiCell(100, 4, "�i�L�����j" ,0,"L");


	$pdf->SetFontSize(8);

	$pdf->SetXY(211,258.5);
	$pdf->MultiCell(100, 4,"�s�����������A���ʂ͂ǂ̂悤�ɂȂ�܂����B\n�܂��A���ʂɑ΂��ǂ̂悤�ɍl���܂������B",0,"L");
	$pdf->SetXY(311,258.5);
	$pdf->MultiCell(100, 4,"�s�����������A���ʂ͂ǂ̂悤�ɂȂ�܂����B\n�܂��A���ʂɑ΂��ǂ̂悤�ɍl���܂������B",0,"L");

	$pdf->SetFontSize(7);
	
	$pdf->Text(211, 280.8, "�܂Ƃ�");
	$pdf->Rect(210, 277.8, 200,  0.1, 'F');
	$pdf->Rect(210, 278, 0.1,  13, 'F');
	$pdf->Rect(410, 278, 0.1,  13, 'F');
	$pdf->Rect(210, 291, 200,  0.1, 'F');

	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($img1_a3);
	unlink($img2_a3);
	unlink($img3_a3);
	unlink($img4_a3);
	unlink($gimg_a3);

	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------



?>