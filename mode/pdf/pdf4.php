<?PHP


	//総合
	$rssougoimg = "./images/pdf/img".$id."_rssougo.jpg";
	$sougo2 = substr($sougo, 1, 4) * 6;
	if($sougo >= 80){
		$wid = 373.6;
	}elseif($sougo >= 70){
		$wid = $sougo2 + 313.6;
	}elseif($sougo >= 60){
		$wid = $sougo2 + 252;
	}elseif($sougo >= 50){
		$wid = $sougo2 + 192.5;
	}elseif($sougo >= 40){
		$wid = $sougo2 + 132;
	}elseif($sougo >= 30){
		$wid = $sougo2 + 71.1;
	}elseif($sougo > 20){
		$wid = $sougo2 + 14;
	}else{
		$wid = 16;
	}

	$im = imagecreatetruecolor($wid, 12);
	$img_color = imagecolorallocate($im, 255,0,0);
	$gray      = imagecolorallocate($im, 169, 169, 169);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 10, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $rssougoimg);
	imagedestroy($im);
	

	//読み取り
	$rsyomitoriimg = "./images/pdf/img".$id."_rsyomitori.jpg";
	$yomitori2 = substr($yomitori, 1, 4) * 6;
	if($yomitori >= 80){
		$wid = 373.6;
	}elseif($yomitori >= 70){
		$wid = $yomitori2 + 313.6;
	}elseif($yomitori >= 60){
		$wid = $yomitori2 + 252;
	}elseif($yomitori >= 50){
		$wid = $yomitori2 + 192.5;
	}elseif($yomitori >= 40){
		$wid = $yomitori2 + 132;
	}elseif($yomitori >= 30){
		$wid = $yomitori2 + 71.1;
	}elseif($yomitori > 20){
		$wid = $yomitori2 + 14;
	}else{
		$wid = 16;
	}

	$im = imagecreatetruecolor($wid, 12);
	$img_color = imagecolorallocate($im, 255,255,0);
	$gray      = imagecolorallocate($im, 169, 169, 169);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 10, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $rsyomitoriimg);
	imagedestroy($im);

	//理解
	$rsrikaiimg = "./images/pdf/img".$id."_rsrikai.jpg";
	$rikai2 = substr($rikai, 1, 4) * 6;
	if($rikai >= 80){
		$wid = 373.6;
	}elseif($rikai >= 70){
		$wid = $rikai2 + 313.6;
	}elseif($rikai >= 60){
		$wid = $rikai2 + 252;
	}elseif($rikai >= 50){
		$wid = $rikai2 + 192.5;
	}elseif($rikai >= 40){
		$wid = $rikai2 + 132;
	}elseif($rikai >= 30){
		$wid = $rikai2 + 71.1;
	}elseif($rikai > 20){
		$wid = $rikai2 + 14;
	}else{
		$wid = 16;
	}

	$im = imagecreatetruecolor($wid, 12);
	$img_color = imagecolorallocate($im, 255,255,0);
	$gray      = imagecolorallocate($im, 169, 169, 169);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 10, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $rsrikaiimg);
	imagedestroy($im);

	//選択
	$rssentakuimg = "./images/pdf/img".$id."_rssentaku.jpg";
	$sentaku2 = substr($sentaku, 1, 4) * 6;
	if($sentaku >= 80){
		$wid = 373.6;
	}elseif($sentaku >= 70){
		$wid = $sentaku2 + 313.6;
	}elseif($sentaku >= 60){
		$wid = $sentaku2 + 252;
	}elseif($sentaku >= 50){
		$wid = $sentaku2 + 192.5;
	}elseif($sentaku >= 40){
		$wid = $sentaku2 + 132;
	}elseif($sentaku >= 30){
		$wid = $sentaku2 + 71.1;
	}elseif($sentaku > 20){
		$wid = $sentaku2 + 14;
	}else{
		$wid = 16;
	}

	$im = imagecreatetruecolor($wid, 12);
	$img_color = imagecolorallocate($im, 255,255,0);
	$gray      = imagecolorallocate($im, 169, 169, 169);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 10, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $rssentakuimg);
	imagedestroy($im);

	//切り替え
	$rskirikaeimg = "./images/pdf/img".$id."_rskirikae.jpg";
	$kirikae2 = substr($kirikae, 1, 4) * 6;
	if($kirikae >= 80){
		$wid = 373.6;
	}elseif($kirikae >= 70){
		$wid = $kirikae2 + 313.6;
	}elseif($kirikae >= 60){
		$wid = $kirikae2 + 252;
	}elseif($kirikae >= 50){
		$wid = $kirikae2 + 192.5;
	}elseif($kirikae >= 40){
		$wid = $kirikae2 + 132;
	}elseif($kirikae >= 30){
		$wid = $kirikae2 + 71.1;
	}elseif($kirikae > 20){
		$wid = $kirikae2 + 14;
	}else{
		$wid = 16;
	}

	$im = imagecreatetruecolor($wid, 12);
	$img_color = imagecolorallocate($im, 255,255,0);
	$gray      = imagecolorallocate($im, 169, 169, 169);
	imagefill($im , 0 , 0 , $gray);
	imagefilledrectangle($im, 1, 1, $wid-2, 10, $img_color);

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 1, 5, 5,  "", $text_color);
	imagejpeg($im, $rskirikaeimg);
	imagedestroy($im);



	//レベルを算出する(※[4] 4つの能力の特徴のメッセージIDもここで選定する)
	if($rs[0][ 'sougo' ] >= 0 && $rs[0][ 'sougo' ] <= 35.20){
		$sougoLv = 1;
	}elseif($rs[0][ 'sougo' ] >= 35.21 && $rs[0][ 'sougo' ] <= 45.02){
		$sougoLv = 2;
	}elseif($rs[0][ 'sougo' ] >= 45.03 && $rs[0][ 'sougo' ] <= 54.96){
		$sougoLv = 3;
	}elseif($rs[0][ 'sougo' ] >= 54.97 && $rs[0][ 'sougo' ] <= 64.78){
		$sougoLv = 4;
	}else{
		$sougoLv = 5;
	}
	if($rs[0][ 'yomitori' ] >= 0 && $rs[0][ 'yomitori' ] <= 35.20){
		$yomitoriLv = 1;
		$yomitorimsgNo = "1";
	}elseif($rs[0][ 'yomitori' ] >= 35.21 && $rs[0][ 'yomitori' ] <= 45.02){
		$yomitoriLv = 2;
		$yomitorimsgNo = "2";
	}elseif($rs[0][ 'yomitori' ] >= 45.03 && $rs[0][ 'yomitori' ] <= 54.96){
		$yomitoriLv = 3;
		$yomitorimsgNo = "3";
	}elseif($rs[0][ 'yomitori' ] >= 54.97 && $rs[0][ 'yomitori' ] <= 64.78){
		$yomitoriLv = 4;
		$yomitorimsgNo = "4";
	}else{
		$yomitoriLv = 5;
		$yomitorimsgNo = "5";
	}

	if($rs[0][ 'rikai' ] >= 0 && $rs[0][ 'rikai' ] <= 35.20){
		$rikaiLv = 1;
		$rikaimsgNo = "1";
	}elseif($rs[0][ 'rikai' ] >= 35.21 && $rs[0][ 'rikai' ] <= 45.02){
		$rikaiLv = 2;
		$rikaimsgNo = "2";
	}elseif($rs[0][ 'rikai' ] >= 45.03 && $rs[0][ 'rikai' ] <= 54.96){
		$rikaiLv = 3;
		$rikaimsgNo = "3";
	}elseif($rs[0][ 'rikai' ] >= 54.97 && $rs[0][ 'rikai' ] <= 64.78){
		$rikaiLv = 4;
		$rikaimsgNo = "4";
	}else{
		$rikaiLv = 5;
		$rikaimsgNo = "5";
	}

	if($rs[0][ 'sentaku' ] >= 0 && $rs[0][ 'sentaku' ] <= 35.20){
		$sentakuLv = 1;
		$sentakumsgNo = "1";
	}elseif($rs[0][ 'sentaku' ] >= 35.21 && $rs[0][ 'sentaku' ] <= 45.02){
		$sentakuLv = 2;
		$sentakumsgNo = "2";
	}elseif($rs[0][ 'sentaku' ] >= 45.03 && $rs[0][ 'sentaku' ] <= 54.96){
		$sentakuLv = 3;
		$sentakumsgNo = "3";
	}elseif($rs[0][ 'sentaku' ] >= 54.97 && $rs[0][ 'sentaku' ] <= 64.78){
		$sentakuLv = 4;
		$sentakumsgNo = "4";
	}else{
		$sentakuLv = 5;
		$sentakumsgNo = "5";
	}

	if($rs[0][ 'kirikae' ] >= 0 && $rs[0][ 'kirikae' ] <= 35.20){
		$kirikaeLv = 1;
		$kirikaemsgNo = "1";
	}elseif($rs[0][ 'kirikae' ] >= 35.21 && $rs[0][ 'kirikae' ] <= 45.02){
		$kirikaeLv = 2;
		$kirikaemsgNo = "2";
	}elseif($rs[0][ 'kirikae' ] >= 45.03 && $rs[0][ 'kirikae' ] <= 54.96){
		$kirikaeLv = 3;
		$kirikaemsgNo = "3";
	}elseif($rs[0][ 'kirikae' ] >= 54.97 && $rs[0][ 'kirikae' ] <= 64.78){
		$kirikaeLv = 4;
		$kirikaemsgNo = "4";
	}else{
		$kirikaeLv = 5;
		$kirikaemsgNo = "5";
	}


	//スコアからメッセージを選定する
	$rsAll = array(
					"1" => $yomitori,
					"2" => $rikai,
					"3" => $sentaku,
					"4" => $kirikae,
				);

	$rsmax = max($rsAll);

	if($rsmax >= 0 && $rsmax < 45){
		$rsmaxid = "1";
	}elseif($rsmax >= 45 && $rsmax < 56){
		$rsmaxid = "2";
	}else{
		$rsmaxid = "3";
	}

	$rs1 = $rsmax - $rsAll['1'];
	$rs2 = $rsmax - $rsAll['2'];
	$rs3 = $rsmax - $rsAll['3'];
	$rs4 = $rsmax - $rsAll['4'];

	$today = "2015-08-03";
	if($testdata[ 'exam_dates' ] < $today){
		//修正前間違ったデータ
		
		if($rs1 >= 10 && $rs1 < 20){
			$rs1id = "1";
		}elseif($rs1 >= 20){
			$rs1id = "2";
		}else{
			$rs1id = "3";
		}

		if($rs2 >= 10 && $rs2 < 20){
			$rs2id = "1";
		}elseif($rs2 >= 20){
			$rs2id = "2";
		}else{
			$rs2id = "3";
		}

		if($rs3 >= 10 && $rs3 < 20){
			$rs3id = "1";
		}elseif($rs3 >= 20){
			$rs3id = "2";
		}else{
			$rs3id = "3";
		}

		if($rs4 >= 10 && $rs4 < 20){
			$rs4id = "1";
		}elseif($rs4 >= 20){
			$rs4id = "2";
		}else{
			$rs4id = "3";
		}
		
	}else{
		//修正後処理
		if($rs1 >= 10 && $rs1 < 20){
			$rs1id = "2";
		}elseif($rs1 >= 20){
			$rs1id = "1";
		}else{
			$rs1id = "3";
		}

		if($rs2 >= 10 && $rs2 < 20){
			$rs2id = "2";
		}elseif($rs2 >= 20){
			$rs2id = "1";
		}else{
			$rs2id = "3";
		}

		if($rs3 >= 10 && $rs3 < 20){
			$rs3id = "2";
		}elseif($rs3 >= 20){
			$rs3id = "1";
		}else{
			$rs3id = "3";
		}

		if($rs4 >= 10 && $rs4 < 20){
			$rs4id = "2";
		}elseif($rs4 >= 20){
			$rs4id = "1";
		}else{
			$rs4id = "3";
		}
	}
	if($yomitori <= 35 && $rikai <= 35 && $sentaku <= 35 && $kirikae <= 35){
		$rsid = "1111";
	}elseif($yomitori <= 40 && $rikai <= 40 && $sentaku <= 40 && $kirikae <= 40){
		$rsid = "2222";
	}elseif($yomitori >= 65 && $rikai >= 65 && $sentaku >= 65 && $kirikae >= 65){
		$rsid = "4444";
	}else{
		$rsid = $rs1id.$rs2id.$rs3id.$rs4id.$rsmaxid;
	}


	//情報の捉え方のコメントを選定する
	if($rs[0][ 'jyoho' ] < 36){
		$jyohomsgNo = "1";
	}elseif($rs[0][ 'jyoho' ] >= 36 && $rs[0][ 'jyoho' ] < 43){
		$jyohomsgNo = "2";
	}elseif($rs[0][ 'jyoho' ] >= 43 && $rs[0][ 'jyoho' ] < 57){
		$jyohomsgNo = "3";
	}elseif($rs[0][ 'jyoho' ] >= 57 && $rs[0][ 'jyoho' ] < 65){
		$jyohomsgNo = "4";
	}else{
		$jyohomsgNo = "5";
	}

	//★を出力する位置を選定する
	if($rs[0][ 'jyoho' ] == 20){
		$star1 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 20 && $rs[0][ 'jyoho' ] < 31){
		$star1 = mb_convert_encoding("★","SJIS-WIN",auto);
		$star1p = "C";
	}elseif($rs[0][ 'jyoho' ] >= 31 && $rs[0][ 'jyoho' ] < 42){
		$star2 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 42 && $rs[0][ 'jyoho' ] < 43){
		$star3 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 43 && $rs[0][ 'jyoho' ] < 47){
		$star4 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 47 && $rs[0][ 'jyoho' ] < 51){
		$star5 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 51 && $rs[0][ 'jyoho' ] < 57){
		$star6 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 57 && $rs[0][ 'jyoho' ] < 68.5){
		$star7 = mb_convert_encoding("★","SJIS-WIN",auto);
	}elseif($rs[0][ 'jyoho' ] >= 68.5 && $rs[0][ 'jyoho' ] < 74.25){
		$star8 = mb_convert_encoding("★","SJIS-WIN",auto);
	}else{
		$star9 = mb_convert_encoding("★","SJIS-WIN",auto);
	}
	if(!$star1p){
		$star1p = "L";
	}
	//--------------------------------
	//PDF出力
	//--------------------------------
	//PDF個人情報入力
	$make->makePdfKozin($pdf,$testdata,4);
	
	//↓[1] 感情能力検査が測定すること↓
	$pdf->Ln(3);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(51,51,204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(80, 6, mb_convert_encoding("[1] 感情能力検査が測定すること","SJIS-WIN",auto), 0, 1, 'L', 1);
	$pdf->Ln(2);

	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(5, 4.5, "", 0, 0, 'L', 1);
	$pdf->Cell(187, 4.5, mb_convert_encoding("感情能力検査は、エモーショナル・インテリジェンス (感情能力 )を構成している 4つの能力を測定しています。感情能力は、","SJIS-WIN",auto), 'LTR', 1, 'L', 1);
	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(187, 4.5, mb_convert_encoding("①読み取り力：感情を適切に知覚する能力、②理解力：感情や感情に関する知識を理解する能力、③選択力：感情を","SJIS-WIN",auto), 'LR', 1, 'L', 1);
	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(187, 4.5, mb_convert_encoding("調整しうまく取り扱う能力、④切り替え力：感情を利用して思考を促進させる能力、という 4つの能力を表しています。","SJIS-WIN",auto), 'LBR', 1, 'L', 1);
	//↑[1] 感情能力検査が測定することここまで↑

	//↓[2] 感情能力↓
	$pdf->Ln(4);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(51,51,204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(80, 6, mb_convert_encoding("[2] 感情能力","SJIS-WIN",auto), 0, 1, 'L', 1);
	$pdf->Ln(2);

	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(0,0,0);

	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(60, 5.5, "", 'LT', 0, 'L', 1);
	$pdf->Cell(20, 5.5, mb_convert_encoding("レベル","SJIS-WIN",auto), 'LT', 0, 'C', 1);
	$pdf->Cell(27, 5.5, "1", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "2", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "3", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "4", 'LT', 0, 'C', 1);
	$pdf->Cell(32, 5.5, "5", 'LTR',1, 'C', 1);

	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40, 5.5, "", 'LT', 0, 'L', 1);
	$pdf->Cell(20, 5.5, mb_convert_encoding("スコア","SJIS-WIN",auto), 'LT', 0, 'C', 1);
	$pdf->Cell(20, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, " 20", 'LT', 0, 'L', 1);
	$pdf->Cell(16, 5.5, "30", 'T', 0, 'L', 1);
	$pdf->Cell(16, 5.5, "40", 'T', 0, 'L', 1);
	$pdf->Cell(16, 5.5, "50", 'T', 0, 'L', 1);
	$pdf->Cell(16, 5.5, "60", 'T',0, 'L', 1);
	$pdf->Cell(16, 5.5, "70", 'T',0, 'L', 1);
	$pdf->Cell(11, 5.5, "80", 'TR',1, 'L', 1);


	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40, 5.5, mb_convert_encoding("総　　合","SJIS-WIN",auto), 'LT', 0, 'C', 1);
	$pdf->Cell(20, 5.5, $sougo, 'LT', 0, 'C', 1);
	$pdf->Cell(20, 5.5, $sougoLv, 'LT', 0, 'C', 1);
	$pdf->Cell(4.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(14.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(8, 5.5, "", 'LTR', 1, 'C', 1);

	$pdf->Cell(5,    5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40,   5.5, mb_convert_encoding("1.読み取り力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$pdf->Cell(20,   5.5, $yomitori, 'LT', 0, 'C', 1);
	$pdf->Cell(20,   5.5, $yomitoriLv, 'LT', 0, 'C', 1);
	$pdf->Cell(4.5,  5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(14.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16,   5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16,   5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16,   5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16,   5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16,   5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(8,    5.5, "", 'LTR', 1, 'C', 1);

	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40, 5.5, mb_convert_encoding("2.理解力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$pdf->Cell(20, 5.5, $rikai, 'LT', 0, 'C', 1);
	$pdf->Cell(20, 5.5, $rikaiLv, 'LT', 0, 'C', 1);
	$pdf->Cell(4.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(14.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(8, 5.5, "", 'LTR', 1, 'C', 1);

	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40, 5.5, mb_convert_encoding("3.選択力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$pdf->Cell(20, 5.5, $sentaku, 'LT', 0, 'C', 1);
	$pdf->Cell(20, 5.5, $sentakuLv, 'LT', 0, 'C', 1);
	$pdf->Cell(4.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(14.5, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LT', 0, 'C', 1);
	$pdf->Cell(8, 5.5, "", 'LTR', 1, 'C', 1);

	$pdf->Cell(5, 5.5, "", 0, 0, 'L', 1);
	$pdf->Cell(40, 5.5, mb_convert_encoding("4.切り替え力","SJIS-WIN",auto), 'LTB', 0, 'L', 1);
	$pdf->Cell(20, 5.5, $kirikae, 'LTB', 0, 'C', 1);
	$pdf->Cell(20, 5.5, $kirikaeLv, 'LTB', 0, 'C', 1);
	$pdf->Cell(4.5, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(14.5, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(16, 5.5, "", 'LTB', 0, 'C', 1);
	$pdf->Cell(8, 5.5, "", 'LTRB', 1, 'C', 1);

	//グラフ出力
	$pdf->Image($rssougoimg,    95.16, 88.5);
	$pdf->Image($rsyomitoriimg, 95.16, 94.15);
	$pdf->Image($rsrikaiimg,    95.16, 99.55);
	$pdf->Image($rssentakuimg,  95.16, 105.1);
	$pdf->Image($rskirikaeimg,  95.16, 110.65);

	//↑[2] 感情能力ここまで↑

	//↓[3] 感情能力のバランスからみた行動予測↓
	$pdf->Ln(4);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(51,51,204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(80, 6, mb_convert_encoding("[3] 感情能力のバランスからみた行動予測","SJIS-WIN",auto), 0, 1, 'L', 1);
	$pdf->Ln(2);

	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(0,0,0);
	$rsmsg = $array_pdf_rsbalance[$rsid];
	$pdf->MultiCell(5, 4.5, "", '', 1, 'L', 1);
	$pdf->SetXY(15,126);
	$pdf->MultiCell(187, 4.5, $rsmsg, 1, 1, 'L', 1);
	//↑[3] 感情能力のバランスからみた行動予測ここまで↑

	//↓[4] 4つの能力の特徴↓
	$pdf->Ln(4);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(51,51,204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(80, 6, mb_convert_encoding("[4] 4つの能力の特徴","SJIS-WIN",auto), 0, 1, 'L', 1);
	$pdf->Ln(2);

	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(0,0,0);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(35, 5, mb_convert_encoding("4つの能力","SJIS-WIN",auto), 'LT', 0, 'C', 1);
	$pdf->Cell(152, 5, mb_convert_encoding("各感情能力の特徴","SJIS-WIN",auto), 'LTR', 1, 'C', 1);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(35, 20, mb_convert_encoding("1.読み取り力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$yomitorimsg = $array_pdf_yomitori[$yomitorimsgNo];
	$pdf->SetXY(50,161);
	$pdf->MultiCell(152, 4.5, $yomitorimsg, 'LTR', 1, 'L', 1);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(35, 20, mb_convert_encoding("2.理解力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$rikaimsg = $array_pdf_rikai[$rikaimsgNo];
	$pdf->SetXY(50,179);
	$pdf->MultiCell(152, 4.5, $rikaimsg, 'LTR', 1, 'L', 1);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(35, 20, mb_convert_encoding("3.選択力","SJIS-WIN",auto), 'LT', 0, 'L', 1);
	$sentakumsg = $array_pdf_sentaku[$sentakumsgNo];
	$pdf->SetXY(50,197);
	$pdf->MultiCell(152, 4.5, $sentakumsg, 'LTR', 1, 'L', 1);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(35, 18, mb_convert_encoding("4.切り替え力","SJIS-WIN",auto), 'LTB', 0, 'L', 1);
	$kirikaemsg = $array_pdf_kirikae[$kirikaemsgNo];
	$pdf->SetXY(50,215);
	$pdf->MultiCell(152, 4.5, $kirikaemsg, 'LTBR', 1, 'L', 1);
	//↑[4] 4つの能力の特徴ここまで↑

	//↓[5] 情報の捉え方↓
	$pdf->Ln(4);
	$pdf->SetFontSize(9);
	$pdf->SetFillColor(51,51,204);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(80, 6, mb_convert_encoding("[5] 情報の捉え方","SJIS-WIN",auto), 0, 1, 'L', 1);
	$pdf->Ln(2);

	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(0,0,0);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(68, 5, mb_convert_encoding("クリティカル","SJIS-WIN",auto), '', 0, 'L', 1);
	$pdf->Cell(51, 5, mb_convert_encoding("標準","SJIS-WIN",auto), '', 0, 'C', 1);
	$pdf->Cell(68, 5, mb_convert_encoding("ポジティブ","SJIS-WIN",auto), '', 1, 'R', 1);

	$pdf->Cell(5, 5, "", 0, 0, 'L', 1);
	$pdf->Cell(23, 5, $star1, 'LTB', 0, $star1p, 1);
	$pdf->Cell(23, 5, $star2, 'TB', 0, 'C', 1);
	$pdf->Cell(23, 5, $star3, 'TB', 0, 'R', 1);

	$pdf->SetFillColor(255,255,128);
	$pdf->Cell(16, 5, $star4, 'LTB', 0, 'L', 1);
	$pdf->Cell(17, 5, $star5, 'TB', 0, 'C', 1);
	$pdf->Cell(16, 5, $star6, 'TB', 0, 'R', 1);

	$pdf->SetFillColor(255,255,255);
	$pdf->Cell(23, 5, $star7, 'LTB', 0, 'L', 1);
	$pdf->Cell(23, 5, $star8, 'TB', 0, 'C', 1);
	$pdf->Cell(23, 5, $star9, 'TRB', 1, 'R', 1);

	$pdf->Ln(1);

	$pdf->SetTextColor(0,0,0);
	$jyohomsg = $array_pdf_jyoho[$jyohomsgNo];
	$pdf->MultiCell(5, 5, "", '', 1, 'L', 1);
	$pdf->SetXY(15,256.5);
	$pdf->MultiCell(187, 5, $jyohomsg, 1, 1, 'L', 1);
	//↑[5] 情報の捉え方ここまで↑
	$pdf->Ln(8);
	//フッター出力
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');

	//--------------------------------
	//作成した画像の削除
	//--------------------------------
	unlink($rssougoimg);
	unlink($rsyomitoriimg);
	unlink($rsrikaiimg);
	unlink($rssentakuimg);
	unlink($rskirikaeimg);
	//--------------------------------
	//作成した画像の削除終わり
	//--------------------------------



?>