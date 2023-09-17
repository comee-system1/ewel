<?PHP
	include_once("./init/metData/metData.php");
	//�΍��l�z��쐬
	foreach($rs19 as $key=>$val){
		if(preg_match("/^std/",$key)){
			$arrayStd[$key]=$val;
		}
	}
	$arrayStd8 = array(
					"std1"=>$arrayStd['std1'],
					"std2"=>$arrayStd['std2'],
					"std3"=>$arrayStd['std3'],
					"std4"=>$arrayStd['std4'],
					"std5"=>$arrayStd['std5'],
					"std6"=>$arrayStd['std6'],
					"std7"=>$arrayStd['std7'],
					"std8"=>$arrayStd['std8'],

				);
	//�L�[���ێ����Ēl�ŋt���\�[�g
	arsort($arrayStd8);

	//�z��̐擪����2�������o��
	$top2 = array_slice($arrayStd8, 0, 2);
	ksort($top2,SORT_NUMERIC);
	$i=1;
	foreach($top2 as $key=>$val){
		$array_top2[$i] = $key;
		$i++;
	}
	//----------------------------------------------
	//�`���[�g�O���t�摜�쐬
	//----------------------------------------------
	$gimg1 = "./images/pdf/graf".$id.$third.".png";
	$i=1;
	foreach($arrayStd as $key=>$val){
		$devMet[$i] = ($val/10)-2;
		$devKey[$i] = $key;
		$devLv[$i] = $obj->getMetLevel($val);
		$i++;
	}
	//�R�J�e�S���̕���

	$ave3 = sprintf("%0.1f",round((($arrayStd['std9']+$arrayStd['std10']+$arrayStd['std11'])/3),1));
	$lv3 = $obj->getMetLevel($ave3);
	
	$kodo_array = array(
				$devMet[1],$devMet[2],$devMet[3],$devMet[4],
				$devMet[5],$devMet[6],$devMet[7],$devMet[8]
				);
	
	$MyData = new pData2();
	$MyData->addPoints($kodo_array,"ScoreA");  
	$MyData->setSerieDescription("ScoreA","Application A");
	$MyData->setPalette("ScoreA",array("R"=>0,"G"=>0,"B"=>255));
	$myPicture = new pImage(360,360,$MyData);
	$myPicture->setFontProperties(array("FontName"=>"./init/Fonts/Forgotte.ttf","FontSize"=>0.1,"R"=>255,"G"=>255,"B"=>255));
	$SplitChart = new pRadar();
	$myPicture->setGraphArea(10,15,360,360);
	$Options = array("FixedMax"=>6,"AxisRotation"=>-90,"Layout"=>RADAR_LAYOUT_STAR);
	$SplitChart->drawRadar($myPicture,$MyData,$Options);
	$myPicture->render($gimg1);
	
	//----------------------------------------------
	//�`���[�g�O���t�摜�쐬�I���
	//----------------------------------------------

	//----------------------------------------------
	//�_�O���t�摜�쐬
	//----------------------------------------------
	$gimg2 = "./images/pdf/bar".$id.$third."_2.jpg";
	getBars($ave3,$gimg2,1);
	$gimg3 = "./images/pdf/bar".$id.$third."_3.jpg";
	getBars($arrayStd[$devKey[9]],$gimg3);
	$gimg4 = "./images/pdf/bar".$id.$third."_4.jpg";
	getBars($arrayStd[$devKey[10]],$gimg4);
	$gimg5 = "./images/pdf/bar".$id.$third."_5.jpg";
	getBars($arrayStd[$devKey[11]],$gimg5);

	//----------------------------------------------
	//�_�O���t�摜�쐬�I���
	//----------------------------------------------



	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,19);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Ln(2);
	$pdf->Cell(100, 5, '[1]�^�C�v�ʐf�f�ő��肵�Ă��邱��', 0, 1, 'L', 1);
	$msg = "�{�A�Z�X�����g�́A���̐l�̐��i�X����A������Z���A�ΐl�֌W�̃N�Z��c�����邽�߂̃c�[���ł��B\n�X�g���X��Ԃɒu���ꂽ�Ƃ��A���̐l�̈����ʂ��ڗ����₷���Ȃ�܂��̂ŁA�l�Ԋ֌W���~���ɂ��邽�߂ɂ��A�����̓�����m��A���ɃR���g���[\n������悤�ɂ��܂��傤�B";
	$pdf->Ln(1);
	$pdf->SetDrawColor(220, 220, 220);
	$pdf->MultiCell(192.5,4, $msg,1,"L");
	$pdf->Ln(2);
	//-----------------------------------------------------
	//�~�O���t�\��
	//-----------------------------------------------------
	$pdf->Cell(100, 5, '[2]���Ȃ��̓���', 0, 1, 'L', 1);
	$pdf->Ln(2);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->Cell(192, 110, "",    1, 1, 'C', 1);
	$pdf->Image($gimg1, 57, 75.5);
	//�~�O���t������
	$pdf->Text(103, 126.25, 20);
	$pdf->Text(103, 119.25, 30);
	$pdf->Text(103, 112.25, 40);
	$pdf->Text(103, 104.25, 50);
	$pdf->Text(103, 97.25,  60);
	$pdf->Text(103, 89.25,  70);
	$pdf->Text(103, 82.25, 80);
	//�~�O���t���ږ�
	$pdf->Text(103, 77,  $met_Title[$devKey[1]]."(".$arrayStd[$devKey[1]].")");
	$pdf->Text(138, 93,  $met_Title[$devKey[2]]."(".$arrayStd[$devKey[2]].")");
	$pdf->Text(152, 126, $met_Title[$devKey[3]]."(".$arrayStd[$devKey[3]].")");
	$pdf->Text(138, 159, $met_Title[$devKey[4]]."(".$arrayStd[$devKey[4]].")");
	$pdf->Text(103, 173, $met_Title[$devKey[5]]."(".$arrayStd[$devKey[5]].")");
	$pdf->Text(55,  160, "(".$arrayStd[$devKey[6]].")".$met_Title[$devKey[6]]);
	$pdf->Text(44,  126, "(".$arrayStd[$devKey[7]].")".$met_Title[$devKey[7]]);
	$pdf->Text(55,  93,  "(".$arrayStd[$devKey[8]].")".$met_Title[$devKey[8]]);

	
	
	//-----------------------------------------------------
	//�~�O���t�\���I���
	//-----------------------------------------------------
	
	
	$pdf->SetXY(10.0, 180.0);
	$pdf->Ln(2);
	$pdf->SetDrawColor(220, 220, 220);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Cell(100, 5, '[3]�G�l���M�[�w���ƃ}�l�[�W�����g��', 0, 1, 'L', 1);

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

	$pdf->Cell(22, 6, "�G�l���M�[�w��", 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6,$lv3, 1, 0, 'C', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6,"  ".$ave3, 1, 0, 'L', 1);
	$pdf->Cell(2, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);
	

	$pdf->Cell(22, 6, $met_Title[ $devKey[9] ], 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6,$devLv[9], 1, 0, 'C', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6,$arrayStd[$devKey[9]], 1, 0, 'C', 1);
	$pdf->Cell(2, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);

	$pdf->Cell(22, 6, $met_Title[ $devKey[10] ], 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6,$devLv[10], 1, 0, 'C', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6,$arrayStd[$devKey[10]], 1, 0, 'C', 1);
	$pdf->Cell(2, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);

	$pdf->Cell(22, 6, $met_Title[ $devKey[11] ], 1, 0, 'L', 1);
	//�X�R�A���o�͂���
	$pdf->Cell(10, 6,$devLv[11], 1, 0, 'C', 1);
	//���x�����o�͂���
	$pdf->Cell(10, 6,$arrayStd[$devKey[11]], 1, 0, 'C', 1);
	$pdf->Cell(2, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(24, 6, "", 1, 0, 'C', 1);
	$pdf->Cell(4,  6, "", 1, 1, 'C', 1);
	//�_�̕\��
	$pdf->Image($gimg2,52,199);
	$pdf->Image($gimg3,52,205);
	$pdf->Image($gimg4,52,211);
	$pdf->Image($gimg5,52,217);
	$pdf->SetDrawColor(204, 0, 0);
	$pdf->Line(126.0, 197.0, 126.0, 221.0);
	
	$pdf->SetDrawColor(220, 220, 220);
	$pdf->Ln(2);
	$pdf->SetFillColor(250, 240, 230);
	$pdf->Cell(100, 5, '[4]���Ȃ��̓����ƃA�h�o�C�X', 0, 1, 'L', 1);
	$pdf->Ln(2);
	$pdf->SetFillColor(250, 240, 230);

	$pdf->MultiCell(192.5,4, $met_message[$array_top2[1]],1,"L");
	$pdf->MultiCell(192.5,4, $met_message[$array_top2[2]],1,"L");





	$pdf->Ln(2);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');
	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($gimg1);
	unlink($gimg2);
	unlink($gimg3);
	unlink($gimg4);
	unlink($gimg5);

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