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
	
	if($elem[ 'e_aff' ]){
		$msg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
		$gmsg3 = mb_convert_encoding($elem[ 'e_aff' ],"SJIS","UTF-8");
	}else{
		$msg3 = "���ȍm���";
		$gmsg3 = "���ȍm���";
	}
	if($elem[ 'e_cntl' ]){
		$msg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
		$gmsg4 = mb_convert_encoding($elem[ 'e_cntl' ],"SJIS","UTF-8");
	}else{
		$msg4 = "�R���g���[�����A�`�[�u�����g��";
		$gmsg4 = "�R���g���[�����A�`\n�[�u�����g��";
	}
	if($elem[ 'e_vi' ]){
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
	
	if($elem[ 'e_symp' ]){
		$msg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
		$gmsg7 = mb_convert_encoding($elem[ 'e_symp' ],"SJIS","UTF-8");
	}else{
		$msg7 = "�ΐl������";
		$gmsg7 = "�ΐl������";
	}
	if($elem[ 'e_situ' ]){
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

	$gimg1 = "./images/pdf/graf".$id.".png";
	$gimg2 = "./images/pdf/graf2".$id.".png";


	$dev1scr  = round($testdata['type'][ 'dev1'  ]/10,1)-2-0.18;
	$dev2scr  = round($testdata['type'][ 'dev2'  ]/10,1)-2-0.18;
	$dev3scr  = round($testdata['type'][ 'dev3'  ]/10,1)-2-0.18;
	$dev4scr  = round($testdata['type'][ 'dev4'  ]/10,1)-2-0.18;
	$dev5scr  = round($testdata['type'][ 'dev5'  ]/10,1)-2-0.18;
	$dev6scr  = round($testdata['type'][ 'dev6'  ]/10,1)-2-0.18;
	$dev7scr  = round($testdata['type'][ 'dev7'  ]/10,1)-2-0.18;
	$dev8scr  = round($testdata['type'][ 'dev8'  ]/10,1)-2-0.18;
	$dev9scr  = round($testdata['type'][ 'dev9'  ]/10,1)-2-0.18;
	$dev10scr = round($testdata['type'][ 'dev10' ]/10,1)-2-0.18;
	$dev11scr = round($testdata['type'][ 'dev11' ]/10,1)-2-0.18;
	$dev12scr = round($testdata['type'][ 'dev12' ]/10,1)-2-0.18;

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





	//����p�\���ӏ��f�[�^�擾
	$devlist = array(
					 "dev1"=> $testdata['type'][ 'dev1'  ]
					,"dev2" =>$testdata['type'][ 'dev2'  ]
					,"dev3" =>$testdata['type'][ 'dev3'  ]
					,"dev4" =>$testdata['type'][ 'dev4'  ]
					,"dev5" =>$testdata['type'][ 'dev5'  ]
					,"dev6" =>$testdata['type'][ 'dev6'  ]
					,"dev7" =>$testdata['type'][ 'dev7'  ]
					,"dev8" =>$testdata['type'][ 'dev8'  ]
					,"dev9" =>$testdata['type'][ 'dev9'  ]
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




	//--------------------------------
	//PDF�o��
	//--------------------------------
	//PDF�l������
	$make->makePdfKozin($pdf,$testdata,$pdftype);

	//��1.�X�g���X�����́�
	$pdf->Write("5","1.�s�����l�����ő��肵�Ă��邱��");
	$pdf->Ln(5);

	$pdf->Cell(192, 4, "�s�����l�����́A���X�s�����钆�Łu���Ȃ����ǂ̂悤�ȍs�����d�����Ă���̂��v�ɂ��đ��肵�Ă���A�\�͂𑪒肷�錟���ł͂���܂���B", 'LTR', 1, 'L', 1);
	$pdf->Cell(192, 4, "���̌�����12�̓�������\������Ă���A12�̓����́A�u���ȔF�m�́F���Ȃ�K�؂ɔF������́v�u���Ȉ���́F�������R���g���[������́v�u�ΐl", 'LR', 1, 'L', 1);
	$pdf->Cell(192, 4, "�F�m�́F���҂̗���⊴���K�؂ɔF������́v�u�ΐl�e���́F���҂��������݁A�g�D�ŖڕW��B������́v��4�̗̈�ɕ�����Ă��܂��B", 'LR', 1, 'L', 1);
	$pdf->Cell(192, 4, "12�̓����̓X�R�A�i�΍��l�j�ŕ\�킳��Ă��܂��B�X�R�A�������ꍇ�ɂ́A����̍s���ɂ����āA���̓������d�����čs�����Ă��邱�Ƃ�\���Ă�", 'LR', 1, 'L', 1);
	$pdf->Cell(192, 4, "�܂��B�e�����̃X�R�A�͉��L�̌��ʂ��������������B", 'LRB', 1, 'L', 1);

	$pdf->Ln(2);
	//��1.�X�g���X�����͂����܂Ł�


	//��2.�s�����l�@12�����̃X�R�A�ƃ`���[�g��
	$pdf->Write("5","2.�s�����l�@12�����̃X�R�A�ƃ`���[�g");

	$pdf->Ln(5);
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
	$pdf->Cell(38, 5, $msg1, 'TL', 0, 'L', 1);
	$dev1 = sprintf("%2.1f",$dev1);
	$pdf->Cell(8.5,5, $dev1,   'TL', 0, 'C', 1);
	//�R���g���[�����A�`�[�u�����g��
	$pdf->Cell(44, 5, $msg4,      'TL', 0, 'L', 1);
	$dev4 = sprintf("%2.1f",$dev4);
	$pdf->Cell(8.5,5, $dev4,   'TL', 0, 'C', 1);
	//�ΐl������
	$pdf->Cell(38, 5, $msg7,      'TL', 0, 'L', 1);
	$dev7 = sprintf("%2.1f",$dev7);
	$pdf->Cell(8.5,5, $dev7,   'TL', 0, 'C', 1);
	//���[�_�[�V�b�v������
	$pdf->Cell(38, 5, $msg10,      'TL', 0, 'L', 1);
	$dev10 = sprintf("%2.1f",$dev10);
	$pdf->Cell(8.5,5, $dev10,  'TLR', 1, 'C', 1);

	//�q�ϓI���ȕ]����
	$pdf->Cell(38, 5, $msg2,     'TL', 0, 'L', 1);
	$dev2 = sprintf("%2.1f",$dev2);
	$pdf->Cell(8.5,5, $dev2,   'TL', 0, 'C', 1);
	//�r�W�����n�o��
	$pdf->Cell(44, 5, $msg5,        'TL', 0, 'L', 1);
	$dev5 = sprintf("%2.1f",$dev5);
	$pdf->Cell(8.5,5, $dev5,   'TL', 0, 'C', 1);
	//�󋵎@�m��
	$pdf->Cell(38, 5, $msg8,      'TL', 0, 'L', 1);
	$dev8 = sprintf("%2.1f",$dev8);
	$pdf->Cell(8.5,5, $dev8,   'TL', 0, 'C', 1);
	//�A�T�[�V����������
	$pdf->Cell(38, 5, $msg11,       'TL', 0, 'L', 1);
	$dev11 = sprintf("%2.1f",$dev11);
	$pdf->Cell(8.5,5, $dev11,  'TLR', 1, 'C', 1);


	//���ȍm���
	$pdf->Cell(38, 5, $msg3,       'TLB', 0, 'L', 1);
	$dev3 = sprintf("%2.1f",$dev3);
	$pdf->Cell(8.5,5, $dev3,   'TLB', 0, 'C', 1);
	//�|�W�e�B�u�v�l��
	$pdf->Cell(44, 5, $msg6,       'TLB', 0, 'L', 1);
	$dev6 = sprintf("%2.1f",$dev6);
	$pdf->Cell(8.5,5, $dev6,   'TLB', 0, 'C', 1);
	//�z�X�s�^���e�B������
	$pdf->Cell(38, 5, $msg9,      'TLB', 0, 'L', 1);
	$dev9 = sprintf("%2.1f",$dev9);
	$pdf->Cell(8.5,5, $dev9,   'TLB', 0, 'C', 1);
	//�W�c�K����
	$pdf->Cell(38, 5, $msg12,      'TLB', 0, 'L', 1);
	$dev12 = sprintf("%2.1f",$dev12);
	$pdf->Cell(8.5,5, $dev12,  'TLBR', 1, 'C', 1);
	$pdf->Ln(3);
	//��2.�s�����l�@12�����̃X�R�A�ƃ`���[�g�����܂Ł�


	//�����[�_�[�`���[�g��

	//�O�g���쐬
	$pdf->Cell(192, 110, "",    1, 1, 'C', 1);

	//���[�_�[�o��
	$pdf->Image($gimg1, 57, 98.5);

	$en1 = "./images/en01.gif";
	$pdf->Image($en1, 54.75, 98);
//			$pdf->Image($gimg2, 12, 98.5);

	//���l���̍��ږ����o�́�
	$pdf->SetDrawColor(204, 204, 204);
	$pdf->SetFontSize(10);

	$pdf->Rect(17, 106, 25, 8, 'D');
	$pdf->Rect(18, 107, 23, 6, 'D');
	$pdf->Text(21, 111.25, "�ΐl�e����");

	$pdf->Rect(167, 106, 25, 8, 'D');
	$pdf->Rect(168, 107, 23, 6, 'D');
	$pdf->Text(171, 111.25, "���ȔF�m��");

	$pdf->Rect(17, 183, 25, 8, 'D');
	$pdf->Rect(18, 184, 23, 6, 'D');
	$pdf->Text(21, 188.25, "�ΐl�F�m��");

	$pdf->Rect(167, 183, 25, 8, 'D');
	$pdf->Rect(168, 184, 23, 6, 'D');
	$pdf->Text(171, 188.25, "���Ȉ����");
	//���l���̍��ږ����o�͂����܂Ł�

	//�����[�_�[�̐��l��
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetFontSize(8);

	$pdf->Text(99, 107, 80);
	$pdf->Text(99, 114.75, 70);
	$pdf->Text(99, 122.25, 60);
	$pdf->Text(99, 129.75, 50);
	$pdf->Text(99, 136, 40);
	$pdf->Text(99, 142.25, 30);
	$pdf->Text(99, 148.25, 20);
	//�����[�_�[�̐��l�����܂Ł�

	$waku_w = "./images/waku_w.gif";

	//���Ȋ���j�^�����O��
	$pdf->SetXY(92.0, 95.0);
	$pdf->MultiCell(30, 4, $gmsg1,0,"C");

	//�q�ϓI���ȕ]����
	$pdf->SetXY(120.0, 104.0);
	$pdf->MultiCell(30, 4, $gmsg2,0,"C");
	//���ȍm���
	$pdf->SetXY(139.0, 126.0);
	$pdf->MultiCell(30, 4, $gmsg3,0,"C");

	//�R���g���[�����A�`�[�u�����g��
	$pdf->SetXY(149.0, 147.4);
	$pdf->MultiCell(30, 4, $gmsg4,0,"C");

	//�r�W�����n�o��
	$pdf->SetXY(135.0, 170.0);
	$pdf->MultiCell(30, 4, $gmsg5,0,"C");

	//�|�W�e�B�u�v�l��
	$pdf->SetXY(124.0, 188.0);
	$pdf->MultiCell(30, 4, $gmsg6,0,"C");

	//�ΐl������
	$pdf->SetXY(93.0, 194.0);
	$pdf->MultiCell(30, 4, $gmsg7,0,"C");

	//�󋵎@�m��
	$pdf->SetXY(65.0, 189.0);
	$pdf->MultiCell(30, 4, $gmsg8,0,"C");

	//�z�X�s�^���e�B������
	$pdf->SetXY(46.0, 171.0);
	$pdf->MultiCell(30, 4, $gmsg9,0,"C");

	//���[�_�[�V�b�v������
	$pdf->SetXY(35.0, 148.0);
	$pdf->MultiCell(30, 4, $gmsg10,0,"C");


	//�A�T�[�V����������
	$pdf->SetXY(42.5, 123.0);
	$pdf->MultiCell(30, 4, $gmsg11,0,"C");

	//�W�c�K����
	$pdf->SetXY(60.0, 107.0);
	$pdf->MultiCell(30, 4, $gmsg12,0,"C");

	//�����[�_�[�`���[�g�����܂Ł�
	
	
	//--------------------------------
	//�쐬�����摜�̍폜
	//--------------------------------
	unlink($gimg1);

	//--------------------------------
	//�쐬�����摜�̍폜�I���
	//--------------------------------

	$pdf->SetXY(10.0, 208.0);
	//�����
	$pdf->SetFontSize(8);
	//$name = mb_convert_encoding($name,"SJIS-WIN","UTF-8");
	$name = mb_convert_encoding($name,"SJIS-WIN","auto");
	$pdf->Write("5", "3.".$name." ����̋���");
	$pdf->Ln();
	$pdf->SetFillColor(204, 255, 204);
	$pdf->Cell(35, 4, "�d�����Ă���v�f", 1, 0, 'C', 1);
	$pdf->Cell(157, 4, "�d�����Ă���v�f���������ꂽ�ꍇ�̓���", 1, 1, 'C', 1);
	
	$pdf->SetFillColor(255, 255, 255);
	
	$i = 0;
	foreach($strongPoint as $k=>$v){

		//�d�����Ă���v�f
		$title =  $a_questions[$k];
		//�d�����Ă���v�f���������ꂽ�ꍇ�̓���
		$str   = $array_pdf_strongPoint[$k];
		if($i == 0){
			//�v�f��1
			
			$pdf->MultiCell(35, 28,"", 'LB');
			//�d�����Ă���v�f���������ꂽ�ꍇ�̓���1
			$pdf->SetXY(45,217);
			$pdf->MultiCell(157, 4, $str, 'LBR');

			$spCnt = 20;
			$titleSp = str_split($title, $spCnt);
			$pdf->Text(15,231,$titleSp[0]);
			$pdf->Text(15,234,$titleSp[1]);
		}

		if($i == 1){
			//�v�f��2
			$pdf->MultiCell(35, 28,"", 'LB');
			//�d�����Ă���v�f���������ꂽ�ꍇ�̓���2
			$pdf->SetXY(45,245);
			$pdf->MultiCell(157, 4, $str, 'LBR');
			
			$spCnt = 20;
			$titleSp = str_split($title, $spCnt);
			$pdf->Text(15,259,$titleSp[0]);
			$pdf->Text(15,262,$titleSp[1]);
		}

		$i++;
	}

$pdf->Ln(2);

//�t�b�^�[�o��
$pdf->SetFontSize(7);
$pdf->Cell(192, 1, $number, 0,1,'R');
$pdf->Ln(1);
$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');


?>