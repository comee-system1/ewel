<?PHP
//ini_set( "display_errors", "Off");
	
	//グラフ画像の登録
	//棒グラフ太さ
	$BW = 4;
	//棒グラフ色
	$BC[0] = 153;
	$BC[1] = 153;
	$BC[2] = 255;
	
	$yomitori = $rs17[0][ "yomitori" ];
	$rikai    = $rs17[0][ "rikai"    ];
	$sentaku  = $rs17[0][ "sentaku"  ];
	$kirikae  = $rs17[0][ "kirikae"  ];
	$jyoho    = $rs17[0][ "jyoho"  ];
	//データ配列の作成
	$darray[ 0 ] = $rs17[0][ "yomitori" ];
	$darray[ 1 ] = $rs17[0][ "rikai"    ];
	$darray[ 2 ] = $rs17[0][ "sentaku"  ];
	$darray[ 3 ] = $rs17[0][ "kirikae"  ];
	


	//45以下の数値の数を取得
	//60以下の数値の数を取得
	$Cnt45 = 0;
	$Cnt60 = 0;
	foreach($darray as $key=>$val){
		if($val <= 45){
			$Cnt45++;
		}
		if($val >= 60){
			$Cnt60++;
		}
	}
	
	//------------------------------------------------------------------
	//4つのブランチのうち、最大値となるブランチの値 x が　x>=55　ならレベル　3
	//------------------------------------------------------------------
	$max = max($darray);
	if($max >= 55){
		$yomitori = $max-$yomitori;
		$rikai    = $max-$rikai;
		$sentaku  = $max-$sentaku;
		$kirikae  = $max-$kirikae;
		//10以上の場合、そのブランチを“L”とする
		//0未満の場合、そのブランチを“H”とする
		if($yomitori >= 10){
			$bltypes[0] = "L";
		}else{
			$bltypes[0] = "H";
		}

		if($rikai >= 10){
			$bltypes[1] = "L";
		}else{
			$bltypes[1] = "H";
		}
		if($sentaku >= 10){
			$bltypes[2] = "L";
		}else{
			$bltypes[2] = "H";
		}
		if($kirikae >= 10){
			$bltypes[3] = "L";
		}else{
			$bltypes[3] = "H";
		}
	}
	
	//------------------------------------------------------------------
	//4つのブランチのうち、最大値となるブランチの値 x が 55>x>=45ならレベル 2
	//------------------------------------------------------------------
	if($max < 55 && $max >=45 ){
		$yomitori = $max-$yomitori;
		$rikai    = $max-$rikai;
		$sentaku  = $max-$sentaku;
		$kirikae  = $max-$kirikae;
		
		//5以上の場合、そのブランチを“L”とする
		//0未満の場合、そのブランチを“H”とする
		if($yomitori >= 5){
			$bltypes[0] = "L";
		}else{
			$bltypes[0] = "H";
		}

		if($rikai >= 5){
			$bltypes[1] = "L";
		}else{
			$bltypes[1] = "H";
		}
		if($sentaku >= 5){
			$bltypes[2] = "L";
		}else{
			$bltypes[2] = "H";
		}
		if($kirikae >= 5){
			$bltypes[3] = "L";
		}else{
			$bltypes[3] = "H";
		}

	}
	

	//4つのブランチの偏差値が45未満（４つのブランチの最大値が45以下）の場合は、⑯LLLLタイプとする
	if($Cnt45 == 4){
		$bltypes[0] = "L";
		$bltypes[1] = "L";
		$bltypes[2] = "L";
		$bltypes[3] = "L";
	}
	
	//４つのブランチの偏差値が60以上の場合は、①HHHHタイプ　とする
	if($Cnt60 == 4){
		$bltypes[0] = "H";
		$bltypes[1] = "H";
		$bltypes[2] = "H";
		$bltypes[3] = "H";
	}

	$blkey = implode("",$bltypes);
	

	//--------------------------------
	//PDF出力
	//--------------------------------
	//PDF個人情報入力
	$make->makePdfKozin($pdf,$testdata,17,$a_gender);

	$pdf->SetXY(20, 45);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[1] 感情能力検査が測定すること', 1, 1, 'L', 1);
	$pdf->SetXY(25, 52);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(163, 4, "感情能力検査は、エモーショナル・インテリジェンス(以下：感情能力) と、感情能力を構成している4つの能力を測定しています。\n4つの能力は、「1.読み取り力」、「2.理解力」、「3.選択力」、「4.切り替え力」を表しています。更に、4つの能力のバランスにより行動に表れる傾向を16のタイプに分けた感情能力タイプとタイプ別一般傾向を示します。", 1);
	
	
	$pdf->SetXY(20, 73);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[2] 感情能力総合', 1, 1, 'L', 1);
	
	$pdf->SetXY(25, 80);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(41, 4, "状況に対して適切に対応\nできない可能性がある", 1,"C",1);
	$pdf->SetXY(66, 80);
	$pdf->MultiCell(41, 4, "状況によって適切な対応が\nできている可能性がある", 1,"C",1);
	$pdf->SetXY(106, 80);
	$pdf->MultiCell(41, 4, "十分に状況対応できている\n可能性が高い", 1,"C",1);
	$pdf->SetXY(146, 80);
	$pdf->MultiCell(41, 4, "常に状況対応ができている\n可能性が高い", 1,"C",1);
	
	$maru1 = "";
	$maru2 = "";
	$maru3 = "";
	$maru4 = "";
	$maruflg = "";

	if($rs17[0][ 'sougo' ] <= 20){
		$maru1 = "◎";
		$maruflg = 1;
	}elseif($rs17[0][ 'sougo' ] <= 40){
		$maru2 = "◎";
		$maruflg = 1;

	}elseif($rs17[0][ 'sougo' ] <= 54){
		$maru3 = "◎";
		$maruflg = 1;

	}elseif($rs17[0][ 'sougo' ] <= 80){
		$maru4 = "◎";
		$maruflg = 1;
	}
	
	$pdf->SetFontSize(12);
	$pdf->SetXY(25, 88);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	if($maruflg) $pdf->SetTextColor(255, 69, 0);
	$pdf->MultiCell(41, 8, $maru1, 1,"C",1);
	$pdf->SetXY(66, 88);
	$pdf->SetTextColor(0, 0, 0);
	if($maruflg) $pdf->SetTextColor(255, 69, 0);
	$pdf->MultiCell(41, 8, $maru2, 1,"C",1);
	$pdf->SetXY(106, 88);
	$pdf->SetTextColor(0, 0, 0);
	if($maruflg) $pdf->SetTextColor(255, 69, 0);
	$pdf->MultiCell(41, 8, $maru3, 1,"C",1);
	$pdf->SetXY(146, 88);
	$pdf->SetTextColor(0, 0, 0);
	if($maruflg) $pdf->SetTextColor(255, 69, 0);
	$pdf->MultiCell(41, 8, $maru4, 1,"C",1);
	$pdf->SetFontSize(8);
	
	
	$pdf->SetXY(20, 100);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[3] 感情能力タイプ', 1, 1, 'L', 1);
	
	$pdf->SetXY(25, 107);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 8, "感情能力タイプ", 1,"C",1);

	$pdf->SetXY(50, 107);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(50, 8, $type17[$blkey][ 'type' ], 1,"C",1);
	
	$pdf->SetXY(25, 115);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(25, 8, "1.読み取り力", "RTL","","L",1);
	$pdf->Cell(50, 8, "", "RT",1,"L");
	//棒グラフの作成
	$pdf->SetLineWidth($BW);
	$pdf->SetDrawColor($BC[0], $BC[1], $BC[2]);
	$pdf->Line(52.2, 119.0, $type17[$blkey][ '0' ], 119.0);
	//線を戻す
	$pdf->SetLineWidth(0.2);
	$pdf->SetDrawColor(0, 0, 0);

	$pdf->SetXY(25, 123);
	$pdf->Cell(25, 8, "2.理解力", "RL","","L",1);
	$pdf->Cell(50, 8, "", "R",1,"L");
	//棒グラフの作成
	$pdf->SetLineWidth($BW);
	$pdf->SetDrawColor($BC[0], $BC[1], $BC[2]);
	$pdf->Line(52.2, 127.0, $type17[$blkey][ '1' ], 127.0);
	//線を戻す
	$pdf->SetLineWidth(0.2);
	$pdf->SetDrawColor(0, 0, 0);

	$pdf->SetXY(25, 131);
	$pdf->Cell(25, 8, "3.選択力", "RL","","L",1);
	$pdf->Cell(50, 8, "", "R",1,"L");
	//棒グラフの作成
	$pdf->SetLineWidth($BW);
	$pdf->SetDrawColor($BC[0], $BC[1], $BC[2]);
	$pdf->Line(52.2, 135.0, $type17[$blkey][ '2' ], 135.0);
	//線を戻す
	$pdf->SetLineWidth(0.2);
	$pdf->SetDrawColor(0, 0, 0);

	$pdf->SetXY(25, 139);
	$pdf->Cell(25, 8, "4.切り替え力", "RLB","","L",1);
	$pdf->Cell(50, 8, "", "BR",1,"L");
	//棒グラフの作成
	$pdf->SetLineWidth($BW);
	$pdf->SetDrawColor($BC[0], $BC[1], $BC[2]);
	$pdf->Line(52.2, 143.0, $type17[$blkey][ '3' ], 143.0);
	//線を戻す
	$pdf->SetLineWidth(0.2);
	$pdf->SetDrawColor(0, 0, 0);


	
	//セルの点線の配置
	dotted(25,123,100,123);
	dotted(25,131,100,131);
	dotted(25,139,100,139);



	$pdf->SetXY(105, 107);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(83, 8, "タイプ別一般傾向", 1,"C",1);

	
	$pdf->SetXY(105, 115);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(5, 4, "プ\nラ\nス\n面", "1");
	$pdf->SetXY(110, 115);
	$pdf->MultiCell(78, 4, $type17[$blkey][ 'plus' ], "1");
	
	$pdf->SetXY(105, 131);
	$pdf->MultiCell(5, 3.2, "マ\nイ\nナ\nス\n面", "1");
	$pdf->SetXY(110, 131);
	$pdf->MultiCell(78, 4, $type17[$blkey][ 'mainasu' ], "1");

	$pdf->SetXY(20, 150);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[4] 4つの能力の特徴', 1, 1, 'L', 1);

	//4つの能力
	$pdf->SetXY(25, 158);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 5, "４つの能力", 1,"C",1);

	$pdf->SetXY(50, 158);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->MultiCell(138.5, 5, "感情能力総合に応じた各能力の特徴", 1,"C",1);
	
	//感情能力総合に応じた各能力の特徴の比較値
	$firsts[1] = 0;
	$firsts[2] = 35.2099999;
	$secs[1] = 35.210;
	$secs[2] = 45.0299999;
	$thirds[1] = 45.030;
	$thirds[2] = 54.9699999;
	$fours[1] = 54.970;
	$fours[2] = 64.7899999;
	$fives[1] = 64.790;
	$fives[2] = 99.99999;
	
	//値の組み直し
	$yomitori = $rs17[0][ "yomitori" ];
	$rikai    = $rs17[0][ "rikai"    ];
	$sentaku  = $rs17[0][ "sentaku"  ];
	$kirikae  = $rs17[0][ "kirikae"  ];
	$jyoho    = $rs17[0][ "jyoho"  ];

	if($yomitori <= $firsts[2] ){
		$yomitoriKey = 0;
	}elseif($yomitori >= $secs[1] && $yomitori <= $secs[2]){
		$yomitoriKey = 1;
	}elseif($yomitori >= $thirds[1] && $yomitori <= $thirds[2]){
		$yomitoriKey = 2;
	}elseif($yomitori >= $fours[1] && $yomitori <= $fours[2]){
		$yomitoriKey = 3;
	}elseif($yomitori >= $fives[1] && $yomitori <= $fives[2]){
		$yomitoriKey = 4;
	}

	if($rikai <= $firsts[2] ){
		$rikaiKey = 0;
	}elseif($rikai >= $secs[1] && $rikai <= $secs[2]){
		$rikaiKey = 1;
	}elseif($rikai >= $thirds[1] && $rikai <= $thirds[2]){
		$rikaiKey = 2;
	}elseif($rikai >= $fours[1] && $rikai <= $fours[2]){
		$rikaiKey = 3;
	}elseif($rikai >= $fives[1] && $rikai <= $fives[2]){
		$rikaiKey = 4;
	}

	if($sentaku <= $firsts[2] ){
		$sentakuKey = 0;
	}elseif($sentaku >= $secs[1] && $sentaku <= $secs[2]){
		$sentakuKey = 1;
	}elseif($sentaku >= $thirds[1] && $sentaku <= $thirds[2]){
		$sentakuKey = 2;
	}elseif($sentaku >= $fours[1] && $sentaku <= $fours[2]){
		$sentakuKey = 3;
	}elseif($sentaku >= $fives[1] && $sentaku <= $fives[2]){
		$sentakuKey = 4;
	}

	if($kirikae <= $firsts[2] ){
		$kirikaeKey = 0;
	}elseif($kirikae >= $secs[1] && $kirikae <= $secs[2]){
		$kirikaeKey = 1;
	}elseif($kirikae >= $thirds[1] && $kirikae <= $thirds[2]){
		$kirikaeKey = 2;
	}elseif($kirikae >= $fours[1] && $kirikae <= $fours[2]){
		$kirikaeKey = 3;
	}elseif($kirikae >= $fives[1] && $kirikae <= $fives[2]){
		$kirikaeKey = 4;
	}


	$pdf->SetXY(25, 163);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 16, "1.読み取り力", 1,"L",1);

	$pdf->SetXY(50, 163);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(138.5, 4, $type17_read[ $yomitoriKey ], 1,"L",1);

	$pdf->SetXY(25, 179);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 16, "2.理解力", 1,"L",1);

	$pdf->SetXY(50, 179);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(138.5, 4, $type17_rikai[ $rikaiKey ], 1,"L",1);

	$pdf->SetXY(25, 195);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 16, "3.選択力", 1,"L",1);

	$pdf->SetXY(50, 195);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(138.5, 4, $type17_select[ $sentakuKey ], 1,"L",1);

	$pdf->SetXY(25, 211);
	$pdf->SetFillColor(234, 234, 234);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(25, 16, "4.切り替え力", 1,"L",1);

	$pdf->SetXY(50, 211);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(138.5, 4, $type17_change[ $kirikaeKey ], 1,"L",1);


	$pdf->SetXY(20, 231);
	$pdf->SetFillColor(51, 51, 204);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(60, 5, '[5] 情報の捉え方', 1, 1, 'L', 1);
	
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetXY(25, 238);
	$pdf->Cell(32.6, 3, 'クリティカル', 0, 0, 'L',0);
	$pdf->Cell(32.6, 3, '', 0, 0, 'L',0);
	$pdf->Cell(32.6, 3, '標準', 0, 0, 'C',0);
	$pdf->Cell(32.6, 3, '', 0, 0, 'L',0);
	$pdf->Cell(32.6, 3, 'ポジティブ', 0, 0, 'R',0);
	
	$hosi = array();
	if($jyoho < 36){
		$hosi[1] = "★";
		$hosiKey = 0;
	}elseif( $jyoho >= 36 && $jyoho < 43){
		$hosi[2] = "★";
		$hosiKey = 1;
	}elseif( $jyoho >= 43 && $jyoho < 57){
		$hosi[3] = "★";
		$hosiKey = 2;
	}elseif( $jyoho >= 57 && $jyoho < 65){
		$hosi[4] = "★";
		$hosiKey = 3;
	}elseif( $jyoho >= 65 ){
		$hosi[5] = "★";
		$hosiKey = 4;
	}
	
	
	$pdf->SetXY(25, 242);
	$pdf->SetTextColor(51, 51, 204);
	$pdf->SetFontSize(11);
	$pdf->Cell(32.6, 6, $hosi[1], 'TBL', 0, 'C',0);
	$pdf->Cell(32.6, 6, $hosi[2], 'TB', 0, 'C',0);
	$pdf->SetFillColor(204, 255, 255);
	$pdf->Cell(32.6, 6, $hosi[3], 'TB', 0, 'C',1);
	$pdf->SetFillColor(0, 0, 0);
	$pdf->Cell(32.6, 6, $hosi[4], 'TB', 0, 'C',0);
	$pdf->Cell(32.6, 6, $hosi[5], 'TRB', 0, 'C',0);
	
	//セルの点線の配置
	dotted(57.5,242,57.5,248);
	dotted(90,242,90,248);
	dotted(123,242,123,248);
	dotted(155.5,242,155.5,248);
	$pdf->SetFontSize(8);
	$pdf->SetXY(25, 250);
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(163, 5, $type17_bias[ $hosiKey ], 1,"L");

	$pdf->SetXY(10, 280);
	$pdf->SetFontSize(7);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');




?>