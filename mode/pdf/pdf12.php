<?PHP

	//--------------------------------
	//PDF出力
	//--------------------------------
	//PDF個人情報入力
	$make->makePdfKozin($pdf,$testdata,12);
	
	if($dlist[1]){
		$pdf->SetXY(10.0, 43.0);
		$pdf->SetDrawColor(19,204,19);
		$pdf->SetFont(GOTHIC, 'B', 8);
		$pdf->Cell(50,5,'スコアの低い行動価値①',1,"","C");
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->Cell(142,5,$array_dev[$dlist[1]['key']][0],1,1);
		$pdf->Ln(1);
		$pdf->SetFont(GOTHIC, 'B', 8);
		$pdf->Cell(50,5,'説明',1,"","C");
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->Cell(142,5,$array_dev[$dlist[1]['key']][1],1);


		$pdf->SetXY(10,55);
		$pdf->SetFont(GOTHIC, 'B', 8);
		$pdf->MultiCell(50,21,'質問の方針',1,"C");
		$pdf->SetXY(60,55);
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->MultiCell(142,3.5,$array_dev[$dlist[1]['key']][2],1);


		$pdf->SetXY(10,77);
		$pdf->SetFont(GOTHIC, 'B', 8);
		$pdf->MultiCell(20,48,'質問例',1,"C");

		$pdf->SetXY(30,77);
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->MultiCell(172,4,$array_dev[$dlist[1]['key']][3],1);

		$pdf->SetXY(30,89);
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->MultiCell(172,4,$array_dev[$dlist[1]['key']][4],1);

		$pdf->SetXY(30,101);
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->MultiCell(172,4,$array_dev[$dlist[1]['key']][5],1);

		$pdf->SetXY(30,113);
		$pdf->SetFont(GOTHIC, '', 8);
		$pdf->MultiCell(172,4,$array_dev[$dlist[1]['key']][6],1);

		$pdf->SetXY(10,126);
		$pdf->SetFont(GOTHIC, 'B', 8);
		$pdf->MultiCell(20,31.5,'判断基準',1,"C");
		$pdf->SetXY(30,126);
		$pdf->SetFont(GOTHIC, '', 8);
		$handan = $array_dev[$dlist[1]['key']][8]."\n".$array_dev[$dlist[1]['key']][9]."\n".$array_dev[$dlist[1]['key']][10];
		$pdf->MultiCell(172,3.5,$handan,1);

	}

if($dlist[2]){
	$pdf->SetXY(10,160);
	$pdf->SetDrawColor(19,204,19);
	$pdf->SetFont(GOTHIC, 'B', 8);
	$pdf->Cell(50,5,'スコアの低い行動価値②',1,"","C");
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->Cell(142,5,$array_dev[$dlist[2]['key']][0],1,1);
	$pdf->Ln(1);


	$pdf->SetFont(GOTHIC, 'B', 8);
	$pdf->Cell(50,5,'説明',1,"","C");
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->Cell(142,5,$array_dev[$dlist[2]['key']][1],1);

	$pdf->SetXY(10,172);
	$pdf->SetFont(GOTHIC, 'B', 8);
	$pdf->MultiCell(50,21,'質問の方針',1,"C");
	$pdf->SetXY(60,172);
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->MultiCell(142,3.5,$array_dev[$dlist[2]['key']][2],1);


	$pdf->SetXY(10,194);
	$pdf->SetFont(GOTHIC, 'B', 8);
	$pdf->MultiCell(20,48,'質問例',1,"C");

	$pdf->SetXY(30,194);
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->MultiCell(172,4,$array_dev[$dlist[2]['key']][3],1);

	$pdf->SetXY(30,206);
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->MultiCell(172,4,$array_dev[$dlist[2]['key']][4],1);


	$pdf->SetXY(30,218);
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->MultiCell(172,4,$array_dev[$dlist[2]['key']][5],1);

	$pdf->SetXY(30,230);
	$pdf->SetFont(GOTHIC, '', 8);
	$pdf->MultiCell(172,4,$array_dev[$dlist[2]['key']][6],1);


	$pdf->SetXY(10,242);
	$pdf->SetFont(GOTHIC, 'B', 8);
	$pdf->MultiCell(20,31.5,'判断基準',1,"C");
	$pdf->SetXY(30,242);
	$pdf->SetFont(GOTHIC, '', 8);
	$handan = $array_dev[$dlist[2]['key']][8]."\n".$array_dev[$dlist[2]['key']][9]."\n".$array_dev[$dlist[2]['key']][10];
	$pdf->MultiCell(172,3.5,$handan,1);



}

$pdf->Ln();
$pdf->SetFontSize(7);
$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');

?>