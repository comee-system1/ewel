<?PHP
$cover = "./images/pdf21.jpg";
$pdf->Image($cover, 52, 100);

$pdf->AddPage();

//----------------------------------------------
//�`���[�g�O���t�摜�쐬
//----------------------------------------------
$gimg1 = "./images/pdf/graf".$id.$third.".png";

	//-------------------------------
	//�΍���{�󋵂̌v�Z
	//------------------------------
	$total = $rs21[ 'result1' ]+$rs21[ 'result2' ]+$rs21[ 'result3' ]+$rs21[ 'result4' ]+$rs21[ 'result5' ]+$rs21[ 'result6' ]+$rs21[ 'result7' ]+$rs21[ 'result8' ]+$rs21[ 'result9' ]+$rs21[ 'result10' ];
	$score = round((($total-52.3)/22.28)*10+50,1);
	if($score >= 80){
		$score = 80;
	}
	if($score <= 20 ){
		$score = 20;
	}
	$lv = getLevel($total);
	//�f�_���O���t�o�[�̕\��
	$gimg = "./images/pdf/bar".$id.$third."_2.jpg";
	getBars($score,$gimg,1);

	$kodo_array = array(
					 $rs21[ 'result1'  ]*1.25
					,$rs21[ 'result2'  ]*1.25
					,$rs21[ 'result3'  ]*1.25
					,$rs21[ 'result4'  ]*1.25
					,$rs21[ 'result5'  ]*1.25
					,$rs21[ 'result6'  ]*1.25
					,$rs21[ 'result7'  ]*1.25
					,$rs21[ 'result8'  ]*1.25
					,$rs21[ 'result9'  ]*1.25
					,$rs21[ 'result10' ]*1.25
					);
	$MyData = new pData2();
	$MyData->addPoints($kodo_array,"ScoreA");  
	$MyData->setPalette("ScoreA",array("R"=>0,"G"=>0,"B"=>255));
	
	$myPicture = new pImage(420,420,$MyData);
//	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>20,"R"=>0,"G"=>0,"B"=>255));
	// �w�i�F�Ɣw�i�F�ɓ����ΐ��̐F���w��
	$Settings = array("R"=>170, "G"=>183, "B"=>87, "Dash"=>1, "DashR"=>190, "DashG"=>203, "DashB"=>107);
	// �w�i��`��
//	$myPicture->drawFilledRectangle(0,0,600,600,$Settings);
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(0,0,420,420);
	// �O���t�ɉe��t����
	//$myPicture->setShadow(TRUE,array("X"=>5,"Y"=>5,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10)); 
	$Options = array("FixedMax"=>25,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR,
					"WriteValues"=>FALSE, // �f�[�^�Z�b�g�̒l��\�� 
				);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);
	$myPicture->render($gimg1);


	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,21);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Ln(2);
	$pdf->Cell(100, 5, '[1]�����^���w���X�΍���{�󋵐f�f�ő��肵�Ă��邱��', 0, 1, 'L', 1);
	$msg = "�f�f�́A�M�Г��ɂ����郁���^���w���X�΍�̎��{�󋵃��x���𑽕��ʂ����̓I�ɔc�����A����������ĘJ�����X�N�ŏ����̂��߂̎{�����Ă�\n�𗧂Ă邽�߂ɍs�����̂ł��B";
	$pdf->Ln(1);
	$pdf->SetDrawColor(220, 220, 220);
	$pdf->MultiCell(192.5,4, $msg,1,"L");


	$pdf->Ln(2);
	$pdf->Cell(100, 5, '[2]�M�Г��ɂ����郁���^���w���X�΍���{�󋵃��x��', 0, 1, 'L', 1);
	
	//-----------------------------
	//�_�O���t�\���p�g
	//-----------------------------
	$pdf->Ln(2);
	$pdf->SetFillColor(255,255,255);
	$pdf->Cell(22, 4, "�@", 'LT', 0, 'C', 1);
	$pdf->Cell(10, 8, "���x��", 'LTB', 0, 'C', 1);
	$pdf->Cell(10, 8, "�X�R�A", 'LTBR', 0, 'C', 1);
	$pdf->SetFontSize(8);
	$pdf->Cell(38,   4, "1", 'TL', 0, 'C', 1);
	$pdf->Cell(24.5, 4, "2", 'TL', 0, 'C', 1);
	$pdf->Cell(23.5, 4, "3", 'TL', 0, 'C', 1);
	$pdf->Cell(24.5, 4, "4", 'TL', 0, 'C', 1);
	$pdf->Cell(39.5, 4, "5", 'TLR', 1, 'C', 1);
	$pdf->Cell(22, 4, "�@", 'LRB', 0, 'C', 1);
	$pdf->Cell(10, 0, " ",  '',    0, 'C', 1);
	$pdf->Cell(10, 0, " ",  '',    0, 'C', 1);
	$pdf->Cell(24, 4, "20", 'TBL', 0, 'L', 1);
	$pdf->Cell(24, 4, "30", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 4, "40", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 4, "50", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 4, "60", 'TB', 0, 'L', 1);
	$pdf->Cell(24, 4, "70", 'TB', 0, 'L', 1);
	$pdf->Cell(6,  4, "80", 'TRB', 1, 'L', 1);
	$pdf->Cell(22, 6, "�΍���{��", 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6,"�@".$lv, 1, 0, 'L', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6,"�@".$score, 1, 0, 'L', 1);
	$pdf->Cell(2, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);
	$pdf->Image($gimg, 52, 74.5);

	//-----------------------------------------------------
	//�~�O���t�\��
	//-----------------------------------------------------
	$pdf->Ln(2);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Cell(100, 5, '[3]�M�Г��ɂ�����΍���{�󋵏ڍ�', 0, 1, 'L', 1);
	$pdf->Ln(2);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(192, 135, "",    1, 1, 'C', 1);
	$pdf->Image($gimg1, 52, 100);
	//�~�O���t������
	$pdf->Text(105, 157, 0);
	$pdf->Text(105, 147, 4);
	$pdf->Text(105, 137, 8);
	$pdf->Text(105, 127, 12);
	$pdf->Text(105, 117, 16);
	$pdf->Text(105, 107, 20);
	
	$pdf->Text(97, 100,  "1.�o�c��/��Ƃ̎p��");
	$pdf->Text(135, 110,  "2.�l��/�J������̑̐�");
	$pdf->Text(157, 140,  "3.�]�ƈ��ւ̈ӎ��t��");
	$pdf->Text(157, 172,  "4.�Y�ƈ�̓K�؂Ȕz���Ɖ^�p");
	$pdf->Text(135, 203,  "5.����f�f�̎��{");
	$pdf->Text(97, 212,  "6.�ߏd�J���Ή�");
	$pdf->Text(50, 203,  "7.���N/�����^�����k�̐�");
	$pdf->Text(30, 172,  "8.�x�E�ƕ��E�Ɋւ���");
	$pdf->Text(25, 140,  "9.���S�E���S�ȐE��Â���");
	$pdf->Text(50, 110,  "10.�l���̎�舵��");

	$pdf->Ln(2);
	$pdf->SetDrawColor(220, 220, 220);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Ln(2);
	$pdf->Cell(100, 5, '[4]�f�f���ʂɊ�Â������X�N�ƃA�h�o�C�X', 0, 1, 'L', 1);
	$pdf->Ln(2);
	//�\���p�z��̍쐬
	//�\�����W�b�N�́A10�̗v�f������܂����A�ł��f�_���Ⴂ2��\�����Ă��������B
	//�������_���������ꍇ�́A�ԍ����Ⴂ����D�悵�Ă��������B
	$amms = array(
				array(
					"key"=>1
					,"val"=>$rs21[ 'result1'  ]
				),
				array(
					"key"=>2
					,"val"=>$rs21[ 'result2'  ]
				),
				array(
					"key"=>3
					,"val"=>$rs21[ 'result3'  ]
				),
				array(
					"key"=>4
					,"val"=>$rs21[ 'result4'  ]
				),
				array(
					"key"=>5
					,"val"=>$rs21[ 'result5'  ]
				),
				array(
					"key"=>6
					,"val"=>$rs21[ 'result6'  ]
				),
				array(
					"key"=>7
					,"val"=>$rs21[ 'result7'  ]
				),
				array(
					"key"=>8
					,"val"=>$rs21[ 'result8'  ]
				),
				array(
					"key"=>9
					,"val"=>$rs21[ 'result9'  ]
				),
				array(
					"key"=>10
					,"val"=>$rs21[ 'result10'  ]
				),
			);
	foreach ($amms as $v) $amounts[] = $v['val'];
	array_multisort($amounts, SORT_ASC, $amms);

	$one = $amms[0][ 'key' ];
	$two = $amms[1][ 'key' ];
	$pdf->MultiCell(192.5,4,$mms_pdf[$one],1,"L");
	$pdf->MultiCell(192.5,4,$mms_pdf[$two],1,"L");
	$pdf->Ln(2);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');
	
	$pdf->AddPage();
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Ln(2);
	$pdf->Cell(100, 5, '���ʂ̉��', 0, 1, 'L', 1);
	$pdf->Ln(2);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(100, 5, '���M�Г��ɂ����郁���^���w���X�΍���{�󋵃��x���ɂ���', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 25.0);
	$pdf->Cell(100, 5, '���{�󋵃��x����5�i�K�ŕ\������܂��B', 0, 1, 'L', 1);

	$pdf->SetXY(15.0, 35.0);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Cell(22, 10, "���x��", 'LT', 0, 'C', 1);
	$pdf->Cell(165, 10, "�R�����g", 'LTR', 1, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(15.0, 45.0);
	$pdf->Cell(22, 10, "���x��5", 'LT', 0, 'L', 1);
	$pdf->Cell(165, 10, "���݋M�Ђł́A�����^���w���X�΍􂪋@�\���Ă���A�J�ЁA�������X�N�Ȃǂ͌��󂯂��܂���B", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 55.0);
	$pdf->Cell(22, 10, "���x��4", 'LT', 0, 'L', 1);
	$pdf->Cell(165, 10, "���݋M�Ђł́A�����^���w���X�΍􂪋@�\���Ă��܂����A�ꕔ�ɂ��������ȃ��X�N�����󂯂��܂��B", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 65.0);
	$pdf->Cell(22, 10, "���x��3", 'LT', 0, 'L', 1);
	$pdf->Cell(165, 10, "���݋M�Ђł́A�����^���w���X�΍�̍��ڂɂ���Ă΂��������A��⃊�X�N�̍�����Ԃł��B", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 75.0);
	$pdf->Cell(22, 10, "���x��2", 'LT', 0, 'L', 1);
	$pdf->Cell(165, 10, "���݋M�Ђł́A�����^���w���X�΍􂪋@�\���Ă��炸�A���u����΃��X�N�����債�Ă����󋵂ɂ���܂��B", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 85.0);
	$pdf->Cell(22, 10, "���x��1", 'LTB', 0, 'L', 1);
	$pdf->Cell(165, 10, "���݋M�Ђł́A�����^���w���X�΍􂪖����A�������⎖�̂ɂ����Ă����������Ȃ��󋵂ɂ���܂��B", 'LTRB', 1, 'L', 1);

	$pdf->SetXY(10, 100.0);
	$pdf->Cell(100, 5, '��10���ڂɂ���', 0, 1, 'L', 1);
	$pdf->SetXY(12.0, 105.0);
	$pdf->Cell(100, 5, '10���ڂ̃X�R�A�ɂ���', 1, 1, 'L', 1);
	$pdf->SetXY(15.0, 112.0);
	$pdf->Cell(180, 2, '�E10���ڂ̃X�R�A�́A�W�����_�i�΍��l�j�ƌĂ΂�鐔�l�œ��_��\�����Ă��܂��B', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 117.0);
	$pdf->Cell(180, 2, '�E�W�����_�i�΍��l�j�Ƃ́A���_�̊�ƂȂ��W�c�̕��ς��u50�v�Ƃ��āA���ς���ǂꂭ�炢����Ă��邩�𓾓_���������l���Ӗ����Ă��܂��B', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 122.0);
	$pdf->Cell(180, 2, '�@�W�����_��p���邱�Ƃɂ��A��W�c�̂Ȃ��ł̎󌟎҂̑��ΓI�Ȉʒu���q�ϓI�ɔc�����邱�Ƃ��ł��܂��B', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 127.0);
	$pdf->Cell(180, 2, '�@�܂��A�W�����_�ɑ΂���o�������m�F���邱�Ƃ��ł��܂��B', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 132.0);
	$pdf->Cell(180, 2, '�E�o�����Ƃ́A�󌟎҂̓��_����W�c�̒��łǂ̒��x�o������̂���m�邱�Ƃ��ł��܂��B', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 142.0);
	$pdf->Cell(180, 2, '�y�o�����z', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 147.0);
	$pdf->Cell(180, 2, '20�ȏ�-35�����@7%�A35�ȏ�-45�����@24%�A45�ȏ�-55�����@38%�A55�ȏ�-65�����@24%�A65�ȏ�@7%', 0, 1, 'L', 1);
	$pdf->SetXY(15.0, 155.0);
	$pdf->Cell(100, 5, '10���ڂ̑�����e', 1, 1, 'L', 1);
	$pdf->SetXY(15.0, 162.0);

	$pdf->SetFillColor(250, 240, 230);
	$pdf->Cell(37, 10, "���ږ�", 'LT', 0, 'C', 1);
	$pdf->Cell(150, 10, "������e", 'LTR', 1, 'C', 1);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetXY(15.0, 172.0);
	$pdf->Cell(37, 10, "1.�o�c��/��Ƃ̎p��", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "���݋M�Ђł́A�����^���w���X�΍􂪋@�\���Ă���A�J�ЁA�������X�N�Ȃǂ͌��󂯂��܂���", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 182.0);
	$pdf->Cell(37, 10, "2.�l���E�J������̑̐�", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�l�����傪�A�������m���������A�Г��K���̐�����o�c�g�b�v�ւ̕񍐁A�����Ċe�{��̎��{�ƌ��؂ȂǁA�s���Ă��邩�ǂ���", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 192.0);
	$pdf->Cell(37, 10, "3.�]�ƈ��̈ӎ��t��", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�]�ƈ��ɐ������m����^���A���猒�N����낤�Ƃ���ӎ���A���t���Ă��邩�ǂ���", 'LTR', 1, 'L', 1);
	$pdf->SetXY(15.0, 202.0);
	$pdf->Cell(37, 10, "4.�Y�ƈ�̓K�؂Ȕz���Ɖ^�p", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�Y�ƈ�Ƃ̘A�g����邽�߂̋K���A���[�������肵�A�g���₷�����[�ނ����p���Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 212.0);
	$pdf->Cell(37, 10, "5.������N�f�f�̎��{", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�J�����S�q���@�ɑ�����������N�f�f�̎��{�Ǝ���[�u���ł��Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 222.0);
	$pdf->Cell(37, 10, "6.�ߏd�J���ґΉ�", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�J�����S�q���@�ɑ����āA�����ԘJ���҂̈�t�ʐڂ����{���Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 232.0);
	$pdf->Cell(37, 10, "7.���N/�����^�����k����", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�]�ƈ����s�����������Ƃ��A�C�y�ɂ��ł����k�ł��鑋����񋟂��Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 242.0);
	$pdf->Cell(37, 10, "8.�x�E�ƑސE", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�����^���s���ɂ��x�E�╜�E�ȂǁA��A�̗���Ɋւ���Г��K����菇������������Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 252.0);
	$pdf->Cell(37, 10, "9.���S�E���S�ȐE����", 'LT', 0, 'L', 1);
	$pdf->Cell(150, 10, "�n���X�����g�̖h�~�ȂǁA�N���������₷���E�����邽�߂̃��[��������A�܂��A���m�̂��߂̋��炪���{����Ă��邩�ǂ���", 'LTR', 1, 'L', 1);

	$pdf->SetXY(15.0, 262.0);
	$pdf->Cell(37, 10, "10.�l���̎�舵��", 'LTB', 0, 'L', 1);
	$pdf->Cell(150, 10, "�]�ƈ��̌��N���̎�舵���Ɋւ��郋�[������߂��A������Ɖ^�p����Ă��邩�ǂ���", 'LTRB', 1, 'L', 1);

	$pdf->Ln(2);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');

	

	
	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($gimg1);
	
	function getLevel($total){
		if($total >= 65){
			$lv = 5;
		}elseif($total >= 55){
			$lv = 4;
		}elseif($total >= 45){
			$lv = 3;
		}elseif($total >= 35){
			$lv = 2;
		}else{
			$lv = 1;
		}
		return $lv;
	}
	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------
	
	function getBars($sc,$gimg,$flg=""){
		
		$st_score = $sc;
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
			$wid = $st_score2 + 8;
		}else{
			$wid = 1;
		}
		$im        = imagecreatetruecolor($wid, 10);
		if($flg){
			$img_color = imagecolorallocate($im, 255, 255, 0);
			$gray      = imagecolorallocate($im, 255, 255, 0);
		}else{
			$img_color = imagecolorallocate($im, 242, 216, 223);
			$gray      = imagecolorallocate($im, 242, 216, 223);
		}
		imagefill($im , 0 , 0 , $gray);
		imagefilledrectangle($im, 1, 1, $wid, 8, $img_color);

		$text_color = imagecolorallocate($im, 255, 0, 0);
		imagestring($im, 1, 5, 5,  "", $text_color);
		imagejpeg($im, $gimg);
		imagedestroy($im);
	}

?>