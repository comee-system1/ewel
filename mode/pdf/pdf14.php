<?PHP

//--------------------------------
//PDF�o��
//--------------------------------
//PDF�l������
$make->makePdfKozin($pdf,$testdata,14);

$pdf->Ln(10);
if($math[0][ 'haku_yoso' ]  >= 15 ){
	$sogo = $a_math_advice_haku_pdf['a'];
	$pdf->Write("5","�y�c����:A�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else
if($math[0][ 'haku_yoso' ]  >= 7 ){
	$sogo = $a_math_advice_haku_pdf['b'];
	$pdf->Write("5","�y�c����:B�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else{
	$sogo = $a_math_advice_haku_pdf['c'];
	$pdf->Write("5","�y�c����:C�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}

$pdf->Ln(10);


if($math[0][ 'bunseki_yoso' ]  >= 15 ){
	$sogo = $a_math_advice_bunseki_pdf['a'];
	$pdf->Write("5","�y���͗�:A�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else
if($math[0][ 'bunseki_yoso' ]  >= 7 ){
	$sogo = $a_math_advice_bunseki_pdf['b'];
	$pdf->Write("5","�y���͗�:B�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else{
	$sogo = $a_math_advice_bunseki_pdf['c'];
	$pdf->Write("5","�y���͗�:C�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}

$pdf->Ln(10);

if($math[0][ 'sentaku_yoso' ]  >= 15 ){
	$sogo = $a_math_advice_sentaku_pdf['a'];
	$pdf->Write("5","�y�I���:A�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else
if($math[0][ 'sentaku_yoso' ]  >= 7 ){
	$sogo = $a_math_advice_sentaku_pdf['b'];
	$pdf->Write("5","�y�I���:B�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else{
	$sogo = $a_math_advice_sentaku_pdf['c'];
	$pdf->Write("5","�y�I���:C�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}

$pdf->Ln(10);


if($math[0][ 'yosoku_yoso' ]  >= 15 ){
	$sogo = $a_math_advice_yosoku_pdf['a'];
	$pdf->Write("5","�y�\����:A�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else
if($math[0][ 'yosoku_yoso' ]  >= 7 ){
	$sogo = $a_math_advice_yosoku_pdf['b'];
	$pdf->Write("5","�y�\����:B�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else{
	$sogo = $a_math_advice_yosoku_pdf['c'];
	$pdf->Write("5","�y�\����:C�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}

$pdf->Ln(10);


if($math[0][ 'hyogen_yoso' ]  >= 15 ){
	$sogo = $a_math_advice_hyogen_pdf['a'];
	$pdf->Write("5","�y�\����:A�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else
if($math[0][ 'hyogen_yoso' ]  >= 7 ){
	$sogo = $a_math_advice_hyogen_pdf['b'];
	$pdf->Write("5","�y�\����:B�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}else{
	$sogo = $a_math_advice_hyogen_pdf['c'];
	$pdf->Write("5","�y�\����:C�z");
	$pdf->Ln(5);
	$pdf->MultiCell(192, 5, $sogo, 1);
}


$pdf->Ln(5);
$pdf->SetFontSize(7);
$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');


?>