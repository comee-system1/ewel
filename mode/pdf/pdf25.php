<?PHP

	//�f�[�^�̎擾
	$bsa = $obj->getBsa($where);
	$scores = array(
					array(
						"id"=>1
						,"values"=>$bsa[ 'score1'  ]
						,"text"=>"�y�u�����h�헪�ƃu�����h�E�}�l�[�W���[�̖����z
�u�����h�헪�̈ʒu�Â���A���ƊO�̃u�����f�B���O�𗝉��ł��Ă��Ȃ����ꂪ����܂��B�u�����h�E�}�l�[�W���[��\n���ĕK�v�Ȍo�c�ғI���_�����ӎ�����Ɨǂ��ł��傤�B�܂��A�����ƊO���Ɍ������u�����f�B���O�����邱�Ƃ��ӎ�\n���邱�Ƃ���؂ł��B����ҁE�ڋq�ւ̃G�N�X�^�[�i���u�����f�B���O�����łȂ��A�ꏏ�Ƀu�����h�����グ�钇��\n�����ւ̃C���^�[�i���u�����f�B���O�ɗ͂����鎖�ŁA�u�����h�̐Z�����e�ՂɂȂ�ꍇ������܂��B"
					),
					array(
						"id"=>2
						,"values"=>$bsa[ 'score2'  ]
						,"text"=>"�y�u�����h�Ƃ͉����H�z
�u�����h�̒�`����������ƈӎ����܂��傤�B�܂��u�����h������ҁE�ڋq�̈ӎv�����傫�����E���鎖�A�u�����h\n�v���X�E�}�C�i�X�̏�Ԃ����邱�Ƃ��F�����A�v���X�̏�Ԃ�ۂ��g�݂𑱂��܂��傤�B�u�����h�����Y�Ƒ�����\n���Ƃ���؂Ȏ��_�ł��B"
					),
					array(
						"id"=>3
						,"values"=>$bsa[ 'score3'  ]
						,"text"=>"�y�u�����h�̗��j�z
���ۂ̎����ɂ����āA���j�I�w�i�͒��ړI�Ɋ֌W�͂Ȃ���������܂��񂪁A�m���Ă������ƂŐ����͂������ł��傤�B\n�܂��A�u�����h�͍�邾���ł͂Ȃ��A����ĂĂ����K�v������܂��B���̂��߁A���ƔC���ɂ��邾���łȂ��A�@��\n�I�Ȓm�����m���Ă��������L���ł��B"
					),
					array(
						"id"=>4
						,"values"=>$bsa[ 'score4'  ]
						,"text"=>"�y�u�����h�̎�ށz
�u�����h�E�A���u�������ӎ��ł��Ă��܂����H�u�����f�B���O�Ɏ��g�ނ����ŁA�u�����h�E�A���u���������������\n�ӎ��ł��Ă��Ȃ��ƁA�r���Ŗ����������Ă��܂��܂��B���g�����g�ނׂ��u�����h�͂ǂ̈ʒu�ɂ���̂��B��Ɉӎ�\n���鎋�_�������܂��傤�B"
					),
					array(
						"id"=>5
						,"values"=>$bsa[ 'score5'  ]
						,"text"=>"�y�u�����h�F�m�z
�u�����h�F�m���Q�ɕ������čl���鎖�́A�u�����h�헪�����ʓI�ɐi�߂Ă��������Ō������܂���B�u�����h�ĔF��\n�u�����h�Đ��̈Ⴂ�ƁA���̊֌W���ɂ��āA���K��������[�߂܂��傤�B�����m����Ηǂ������ł͂Ȃ��A�����\n�E�ڋq�̃j�[�Y�ƌ��т��ĔF�m����Ȃ��Ă͂Ȃ�܂���B"
					),
					array(
						"id"=>6
						,"values"=>$bsa[ 'score6'  ]
						,"text"=>"�y�u�����h�\�z�̊T���z
�u�����f�B���O���s����ŏd�v�ȑ̌n�}�͗����ł��Ă��܂����H�u�����f�B���O�Ƃ́A�u�����h�E�A�C�f���e�B�e�B��\n�u�����h�E�C���[�W���C�R�[���ɂ����Ƃł��B����ҁE�ڋq�̐S�̒��ŋN����u�����h�E�C���[�W���ǂ̂悤�Ɉ���\n�o�������A�u�����f�B���O���s����łƂĂ��d�v�ȃ|�C���g�ł��B"
					),
					array(
						"id"=>7
						,"values"=>$bsa[ 'score7'  ]
						,"text"=>"�y�u�����h�v�f�ƃu�����h�̌��z
����ҁE�ڋq�̃u�����h�E�C���[�W���`�����̂��A�u�����h�v�f�ƃu�����h�̌��ł��B��������ƔF���ł��Ă��Ȃ�\n�ƁA�u�����f�B���O���̂��̂����ʂɂȂ��Ă��܂��܂��B���g�̃u�����h�ɂǂ��������u�����h�v�f�ƃu�����h�̌���\n�K�v�Ȃ̂��B�ǂ̂悤�ɐ݌v���Ă����̂��̗�����[�߂܂��傤�B�܂��A�������g������ҁE�ڋq�Ƃ��ĐG��Ă���u\n�����h���ώ@���邱�Ƃ��d�v�Ȋw�тɂȂ���܂��B"
					),
					array(
						"id"=>8
						,"values"=>$bsa[ 'score8'  ]
						,"text"=>"�y�u�����h�̏d�v���z
�u�����h���Ȃ��d�v�Ȃ̂��B�������R�Ǝv�������łȂ��A���ڂɕ����ė������Ă����܂��傤�B����ҁE�ڋq�ɂƂ���\n�̗��v�ƁA��ƂɂƂ��Ă̗��v�͂��ꂼ��قȂ�܂����A���ʓI�Ƀu�����f�B���O���s�����ŁA���̑���������������\n���Ƃ��ł��܂��B"
					),
					array(
						"id"=>9
						,"values"=>$bsa[ 'score9'  ]
						,"text"=>"�y�u�����h�\�z�ɂ�����}�[�P�e�B���O�z
�}�[�P�e�B���O�ƃu�����f�B���O�͈�̂ōs�������ł��B�}�[�P�e�B���O�̊�{�T�O�ł���u���l�����v�����������\n�ӎ����邱�ƂŁA�����݂ł͂Ȃ�����ҁE�ڋq�ɐS������ł��炦�鏤�i�E�T�[�r�X�����o�����Ƃ��ł���ł���\n���B�������邱�ƂŁA���i�E�T�[�r�X�͂ЂƂ�łɔ���Ă������z�I�ȏ�Ԃɋ߂Â��܂��B"
					),
					array(
						"id"=>10
						,"values"=>$bsa[ 'score10'  ]
						,"text"=>"�y�u�����h�\�z�̃X�e�b�v�z
�u�����h�\�z�̃X�e�b�v�́A�����Ƃ����ʓI�Ƀu�����f�B���O���s�����߂̃t���[�����[�N�ł��B�P�[�X�ɂ���āA�K\n���������ꂪ�x�X�g���Ƃ������̂ł͂���܂��񂪁A��������Ɗ�{�𗝉����Ă������ƂŁA��j�������藧�̂ł�\n�B���ȗ��ɂȂ��Ă��܂�Ȃ��悤�A��{�ɗ����߂�p�����K�v�ł��B"
					)

				);

	foreach($scores as $key=>$value){
		$ids[$key]=$value["id"];
		$vals[$key]=$value["values"];
	}
	array_multisort($vals,SORT_ASC,$ids,SORT_ASC,$scores);
//var_dump($scores);
	//45�����̂��̂������ꍇ�́A�ł��Ⴂ���̂�����1�����A2�ڂ͏o���Ȃ��悤�ɂ��Ă��������B
	$min = min($vals);
	$advice[1] = $scores[0];
	$advice[2] = $scores[1];
	if($min > 45 ){
		//45�����̂��̂������ꍇ
		$advice[1] = $scores[0];
		$advice[2] = "";
	}elseif($vals[0] < 45 && $vals[1] >= 45){

		//�P��45���������A����ȊO��45�ȏ�̏ꍇ
		$advice[1] = $scores[0];
		$advice[2] = "";
	}

	//�`���[�g�O���t�̍쐬
	$gimg1 = "./images/pdf/graf25-".$id.".png";
	$dev1scr  = round($bsa[ 'score1'  ]/10,1)-2;
	$dev2scr  = round($bsa[ 'score2'  ]/10,1)-2;
	$dev3scr  = round($bsa[ 'score3'  ]/10,1)-2;
	$dev4scr  = round($bsa[ 'score4'  ]/10,1)-2;
	$dev5scr  = round($bsa[ 'score5'  ]/10,1)-2;
	$dev6scr  = round($bsa[ 'score6'  ]/10,1)-2;
	$dev7scr  = round($bsa[ 'score7'  ]/10,1)-2;
	$dev8scr  = round($bsa[ 'score8'  ]/10,1)-2;
	$dev9scr  = round($bsa[ 'score9'  ]/10,1)-2;
	$dev10scr = round($bsa[ 'score10' ]/10,1)-2;
	$kodo_array = array(
				$dev1scr,$dev2scr,$dev3scr
				,$dev4scr,$dev5scr,$dev6scr
				,$dev7scr,$dev8scr,$dev9scr
				,$dev10scr
				);

	$MyData = new pData2();
	$MyData->addPoints($kodo_array,"ScoreA");  
	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>0,"G"=>0,"B"=>255));
	$myPicture = new pImage(400,400,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.01,"R"=>255,"G"=>255,"B"=>255));
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(10,25,400,400);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);
	$myPicture->render($gimg1);
	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,25);
	//��1.�X�g���X�����́�
	$pdf->SetFontSize(10);
	$pdf->SetXY(10, 41);
	$pdf->Write("5","1.�u�����h���x�͂Ƃ�");
	$pdf->SetXY(10, 46);
	$pdf->MultiCell(192,18, "", 1,"L");
	$str = "�u�����h���x�͂Ƃ́A�u�����h�Ɋւ���m����10�̗̈�ɂ����đ��肵�Ă��܂��B�m���������Ă��邱�ƂŁA�u�����h\n�Ɋւ��銴�x�i�A���e�i�j���q���ɂȂ�A�������Ă�����̎�̑I�����ł��܂��B�ǂ������ӂłǂ������ł���\n����c�����A����̒m���K���Ɋ������܂��傤�B";
	$pdf->SetXY(11, 48.5);
	$pdf->MultiCell(190,4,$str, 0,"L");

	$pdf->SetXY(10, 67);
	$pdf->Write("5","2.���ʃO���t");
	$pdf->SetXY(10, 73);
	$pdf->MultiCell(192,130, "", 1,"L");
	$pdf->Image($gimg1, 50, 79);
	$pdf->SetFontSize(12);
	$pdf->Text(98, 86, "80");
	$pdf->Text(98, 96, "70");
	$pdf->Text(98, 103, "60");
	$pdf->Text(98, 111, "50");
	$pdf->Text(98, 120, "40");
	$pdf->Text(98, 128, "30");
	$pdf->Text(98, 135, "20");
	$pdf->SetFontSize(9);
	$pdf->Text(75, 81, "�u�����h�헪�ƃu�����h�E�}�l�[�W���[�̖���");
	$pdf->Text(135, 94, "�u�����h�Ƃ͉����H");
	$pdf->Text(151, 120, "�u�����h�̗��j");
	$pdf->Text(151, 153, "�u�����h�̎��");
	$pdf->Text(135, 177, "�u�����h�F�m");
	$pdf->Text(90, 189, "�u�����h�\�z�̊T��");
	$pdf->Text(35, 177, "�u�����h�v�f�ƃu�����h�̌�");
	$pdf->Text(32, 153, "�u�����h�̏d�v��");
	$pdf->Text(25, 120, "�u�����h�\�z�ɂ�����");
	$pdf->Text(25, 124, "�}�[�P�e�B���O");
	$pdf->Text(41, 94, "�u�����h�\�z�̃X�e�b�v");

	$pdf->SetFontSize(10);
	$pdf->Text(10, 208, "3.".$name."����ւ̃A�h�o�C�X");
	$pdf->SetXY(10, 210);
	$pdf->MultiCell(192,30, "", 1,"L");
	$pdf->SetXY(11, 212);
	$pdf->MultiCell(192,4, $advice[1][ 'text' ], 0,"L");
	$pdf->SetXY(10, 245);
	$pdf->MultiCell(192,30, "", 1,"L");
	$pdf->SetXY(11, 247);
	$pdf->MultiCell(192,4, $advice[2][ 'text' ], 0,"L");

	$pdf->Ln(2);
	$pdf->SetXY(11, 280);
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