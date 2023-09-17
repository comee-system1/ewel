<?PHP


	//自己感情モニタリング力
	$e_feel = $devlist['dev1'];

	//客観的自己評価力
	$e_aff = $devlist['dev2'];

	//自己肯定力
	$e_cus = $devlist['dev3'];

	//コントロール＆アチーブメント力
	$e_cntl = $devlist['dev4'];

	//ビジョン創出力
	$e_vi = $devlist['dev5'];

	//ポジティブ思考力
	$e_pos = $devlist['dev6'];

	//対人共感力
	$e_symp = $devlist['dev7'];

	//状況察知力
	$e_situ = $devlist['dev8'];

	//ホスピタリティ発揮力
	$e_hosp = $devlist['dev9'];

	//リーダーシップ発揮力
	$e_lead = $devlist['dev10'];

	//アサーション発揮力
	$e_ass = $devlist['dev11'];

	//集団適応力
	$e_adap = $devlist['dev12'];

	//流れやすさ(no1)
	$no1 = ($e_symp + $e_situ) / 2 - ($e_ass + $e_feel) / 2;

	//リーダーシップの空回り傾向(no2)
	//調整・交渉の空回り傾向(no3)
	//思いやりの空回り傾向(no4)
	if($e_cus < 50){
		$no2 = 0;
		$no3 = 0;
		$no4 = 0;
	}elseif($e_cus >= 50){
		$no2 = $e_lead - $e_aff;
		$no3 = $e_ass - $e_aff;
		$no4 = $e_hosp - $e_aff;
	}

	//行き詰まり感(no5)
	$no5 = $e_cntl - ($e_cus + $e_pos) / 2;

	//受身になりやすさ(no6)
	$no6 = $e_adap - $e_vi;

	//空気のよめなさ(no7)
	$no7 = ($e_adap) - ($e_situ + $e_symp) / 2;

	//朝礼暮改傾向(no8)
	$no8 = ($e_situ + $e_pos) / 2 - $e_symp;

	//無茶振り傾向(no9)
	$no9 = ($e_aff + $e_cus) / 2 - ($e_ass + $e_symp) / 2;

	$no_array = array(
				'1'=>$no1,
				'2'=>$no2,
				'3'=>$no3,
				'4'=>$no4,
				'5'=>$no5,
				'6'=>$no6,
				'7'=>$no7,
				'8'=>$no8,
				'9'=>$no9,
				);


	if($no1 >= 10){
		$lv3['1'] = $no1 - 10;
	}elseif($no1 >= 3){
		$lv2['1'] = $no1 - 3;
	}elseif($no1 < 3){
		$lv1['1'] = 3 - $no1;
	}

	if($no2 >= 5){
		$lv3['2'] = $no2 - 5;
	}elseif($no2 > 0){
		$lv2['2'] = $no2;
	}elseif($no2 <= 0){
		$lv1['2'] = 0 - $no2;
	}

	if($no3 >= 6){
		$lv3['3'] = $no3 - 6;
	}elseif($no3 > 0){
		$lv2['3'] = $no3;
	}elseif($no3 <= 0){
		$lv1['3'] = 0 - $no3;
	}

	if($no4 >= 1){
		$lv3['4'] = $no4 - 1;
	}elseif($no4 > 0){
		$lv2['4'] = $no4;
	}elseif($no4 <= 0){
		$lv1['4'] = 0 - $no4;
	}

	if($no5 >= 15){
		$lv3['5'] = $no5 - 15;
	}elseif($no5 >= 5){
		$lv2['5'] = $no5 - 5;
	}elseif($no5 < 5){
		$lv1['5'] = 5 - $no5;
	}

	if($no6 >= 15){
		$lv3['6'] = $no6 - 15;
	}elseif($no6 >= 7){
		$lv2['6'] = $no6 - 7;
	}elseif($no6 < 7){
		$lv1['6'] = 7 - $no6;
	}

	if($no7 >= 15){
		$lv3['7'] = $no7 - 15;
	}elseif($no7 >= 5){
		$lv2['7'] = $no7 - 5;
	}elseif($no7 < 5){
		$lv1['7'] = 5 - $no7;
	}

	if($no8 >= 15){
		$lv3['8'] = $no8 - 15;
	}elseif($no8 >= 5){
		$lv2['8'] = $no8 - 5;
	}elseif($no8 < 5){
		$lv1['8'] = 5 - $no8;
	}

	if($no9 >= 10){
		$lv3['9'] = $no9 - 10;
	}elseif($no9 >= 4){
		$lv2['9'] = $no9 - 4;
	}elseif($no9 < 4){
		$lv1['9'] = 4 - $no9;
	}

	//lvScrの要素が3つになるまで追加する
	$i = 0;
	if($lv3 != null){
		arsort($lv3);
		foreach($lv3 as $key=>$val){
			$lvScr[$i]['val'] = $val;
			$lvScr[$i]['key'] = $key;
			$lvScr[$i]['lv'] = 3;
			$lvScr[$i]['lvstr'] = "要注意";
			$lvScr[$i]['star'] = $obj->starPlace($key,3,$no_array);
			$lvScr[$i]['starKey'] = array_keys($lvScr[$i]['star']['3']);
			$i++;
			if($i >= 3){
				break;
			}
		}
	}

	if($lv2 != null && $i < 3){
		arsort($lv2);
		foreach($lv2 as $key=>$val){
			if($i >= 3){
				break;
			}else{
				$lvScr[$i]['val'] = $val;
				$lvScr[$i]['key'] = $key;
				$lvScr[$i]['lv'] = 2;
				$lvScr[$i]['lvstr'] = "注意";
				$lvScr[$i]['star'] = $obj->starPlace($key,2,$no_array);
				$lvScr[$i]['starKey'] = array_keys($lvScr[$i]['star']['2']);
				$i++;
			}
		}
	}

	//「レベル」、「星の出力位置」の順でソートする
	if($lvScr != null){

		foreach($lvScr as $key => $val){
			$keys1[$key] = $val['lv'];
			$keys2[$key] = $val['starKey'];
		}

		array_multisort($keys1,SORT_DESC,$keys2,SORT_DESC,$lvScr);

	}

	if($lv1 != null && $i < 3){
		arsort($lv1);
		foreach($lv1 as $key=>$val){
			if($i >= 3){
				break;
			}else{
				$lvScr[$i]['val'] = $val;
				$lvScr[$i]['key'] = $key;
				$lvScr[$i]['lv'] = 1;
				$lvScr[$i]['lvstr'] = "問題なし";
				$i++;
			}
		}
	}


	//--------------------------------
	//PDF出力
	//--------------------------------
	//PDF個人情報入力
	$make->makePdfKozin($pdf,$testdata,13);

	/*****************************
	出力エリア１
	*****************************/
	$pdf->SetDrawColor(19,204,19);
	$pdf->SetFont(GOTHIC, 'B', 10);

	$key1 = $lvScr[0]['key'];
	$lv1  = $lvScr[0]['lv'];
	$pdf->SetXY(10,47);
        $str = mb_convert_encoding("①","SJIS-WIN","UTF-8");
	$pdf->Write("5",$str.$array_comment[$key1][$lv1]['naiyo']);

	if($lvScr[0]['lv'] != 1){
		if($lvScr[0]['key'] == 2){
			$substr1 = "※管理職は要注意";
		}elseif($lvScr[0]['key'] == 7){
			$substr1 = "※新卒・若手社員採用の場合は注意";
		}elseif($lvScr[0]['key'] == 8){
			$substr1 = "※管理職採用の場合は注意";
		}elseif($lvScr[0]['key'] == 9){
			$substr1 = "※管理職採用の場合は注意";
		}else{
			$substr1 = "";
		}
	}else{
		$substr1 = "";
	}
	$pdf->SetXY(10,51);

	$pdf->SetFont(GOTHIC, 'B', 9);
	$pdf->Cell(192,5,mb_convert_encoding($substr1,"SJIS-WIN","UTF-8"),0,"","L");
	$pdf->Ln(5);

	$pdf->Cell(59,5,'',"","L");
	$pdf->Cell(1,5,'',0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding("問題なし","SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding("注意","SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding("要注意","SJIS-WIN","UTF-8"),0,"","C");

	$pdf->Ln(5);

	//グラフエリア
	$pdf->SetFont(GOTHIC, 'B', 10);
	$pdf->Cell(58.5,8,mb_convert_encoding($lvScr[0]['lvstr'],"SJIS-WIN","UTF-8"),1,"","C");
	$pdf->Cell(3,8,'',0,"","C");

	//グラフ出力エリア
	$pdf->SetFont(GOTHIC, 'B', 14);

	//グラフの点線
	$dotY = 61.4;

	$obj->dotted(86,$dotY);
	$obj->dotted(100.5,$dotY);
	$obj->dotted(129.5,$dotY);
	$obj->dotted(144,$dotY);
	$obj->dotted(173,$dotY);
	$obj->dotted(187.5,$dotY);

	//星の出力位置
	$stars = $obj->starPlace($key1,$lv1,$no_array);

	$pdf->Cell(14.5,8,'','LTB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");

        $star21 = "";
        if($stars['2']['1']){$star21 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star22 = "";
        if($stars['2']['2']){$star22 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star23 = "";
        if($stars['2']['3']){$star23 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
	$pdf->Cell(14.5,8,$star21,'LTB',"","C");
	$pdf->Cell(14.5,8,$star22,'TB',"","C");
	$pdf->Cell(14.5,8,$star23,'TB',"","C");
        
        $star31 = "";
        if($stars['3']['1']){$star31 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star32 = "";
        if($stars['3']['2']){$star32 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star33 = "";
        if($stars['3']['3']){$star33 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
	$pdf->Cell(14.5,8,$star31,'LTB',$st,"C");
	$pdf->Cell(14.5,8,$star32,'TB',"","C");
	$pdf->Cell(14.5,8,$star33,'TBR',"","C");

	//説明文エリア
	$pdf->SetFont(GOTHIC, '', 8);

	//セル出力位置
	$x1 = 70;
	$x2 = 88;

	//【説明】出力エリア1
	$pdf->SetXY(10,$x1);
	$pdf->MultiCell(58.5,5.25,$array_comment[$key1][$lv1]['setsumei'],1,"L");

	//【面接の指針】出力エリア1
	$pdf->SetXY(71.5,$x1);
	$pdf->MultiCell(130.5,4,$array_comment[$key1][$lv1]['mensetsu'],1,"L");

	//【質問例】出力エリア1
	$pdf->SetXY(71.5,$x2);
	$pdf->MultiCell(130.5,4,$array_comment[$key1][$lv1]['shitsumon'],1,"L");

	$pdf->Ln(8);

	/*****************************
	出力エリア２
	*****************************/
	$pdf->SetFont(GOTHIC, 'B', 10);

	$key2 = $lvScr[1]['key'];
	$lv2  = $lvScr[1]['lv'];
            
        $str = mb_convert_encoding("②","SJIS-WIN","UTF-8");
	$pdf->Write("5",$str.$array_comment[$key2][$lv2]['naiyo']);

	$pdf->Ln(5);
	if($lvScr[1]['lv'] != 1){
		if($lvScr[1]['key'] == 2){
			$substr2 = "※管理職は要注意";
		}elseif($lvScr[1]['key'] == 7){
			$substr2 = "※新卒・若手社員採用の場合は注意";
		}elseif($lvScr[1]['key'] == 8){
			$substr2 = "※管理職採用の場合は注意";
		}elseif($lvScr[1]['key'] == 9){
			$substr2 = "※管理職採用の場合は注意";
		}else{
			$substr2 = "";
		}
	}else{
		$substr2 = "";
	}

	$pdf->SetFont(GOTHIC, 'B', 9);
	$pdf->Cell(192,5,mb_convert_encoding($substr2,"SJIS-WIN","UTF-8"),0,"","L");
	$pdf->Ln(5);

	$pdf->Cell(59,5,'',0,"","L");
	$pdf->Cell(1,5,'',0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('　問題なし',"SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('注意',"SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('要注意',"SJIS-WIN","UTF-8"),0,"","C");

	$pdf->Ln(5);

	//グラフエリア
	$pdf->SetFont(GOTHIC, 'B', 10);
	$pdf->Cell(58.5,8,mb_convert_encoding($lvScr[1]['lvstr'],"SJIS-WIN","UTF-8"),1,"","C");
	$pdf->Cell(3,8,'',0,"","C");

	//グラフ出力エリア
	$pdf->SetFont(GOTHIC, 'B', 14);

	//グラフの点線
	$dotY = $dotY + 74;

	$obj->dotted(86,$dotY);
	$obj->dotted(100.5,$dotY);
	$obj->dotted(129.5,$dotY);
	$obj->dotted(144,$dotY);
	$obj->dotted(173,$dotY);
	$obj->dotted(187.5,$dotY);

	//星の出力位置
	$stars = $obj->starPlace($key2,$lv2,$no_array);

	$pdf->Cell(14.5,8,'','LTB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");

        $star21 = "";
        if($stars['2']['1']){$star21 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star22 = "";
        if($stars['2']['2']){$star22 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star23 = "";
        if($stars['2']['3']){$star23 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        
	$pdf->Cell(14.5,8,$star21,'LTB',"","C");
	$pdf->Cell(14.5,8,$star22,'TB',"","C");
	$pdf->Cell(14.5,8,$star23,'TB',"","C");

        $star31 = "";
        if($stars['3']['1']){$star31 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star32 = "";
        if($stars['3']['2']){$star32 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star33 = "";
        if($stars['3']['3']){$star33 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
	$pdf->Cell(14.5,8,$star31,'LTB',"","C");
	$pdf->Cell(14.5,8,$star32,'TB',"","C");
	$pdf->Cell(14.5,8,$star33,'TBR',"","C");

	//説明文エリア
	$pdf->SetFont(GOTHIC, '', 8);

	//【説明】出力エリア1
	$pdf->SetXY(10,$x1+75);
	$pdf->MultiCell(58.5,5.25,$array_comment[$key2][$lv2]['setsumei'],1,"L");

	//【面接の指針】出力エリア1
	$pdf->SetXY(71.5,$x1+75);
	$pdf->MultiCell(130.5,4,$array_comment[$key2][$lv2]['mensetsu'],1,"L");

	//【質問例】出力エリア1
	$pdf->SetXY(71.5,$x2+75);
	$pdf->MultiCell(130.5,4,$array_comment[$key2][$lv2]['shitsumon'],1,"L");

	$pdf->Ln(8);

	/*****************************
	出力エリア３
	*****************************/
	$pdf->SetFont(GOTHIC, 'B', 10);

	$key3 = $lvScr[2]['key'];
	$lv3  = $lvScr[2]['lv'];
        $str = mb_convert_encoding("③","SJIS-WIN","UTF-8");
	$pdf->Write("5",$str.$array_comment[$key3][$lv3]['naiyo']);

	$pdf->Ln(5);
	if($lvScr[2]['lv'] != 1){
		if($lvScr[2]['key'] == 2){
			$substr3 = "※管理職は要注意";
		}elseif($lvScr[2]['key'] == 7){
			$substr3 = "※新卒・若手社員採用の場合は注意";
		}elseif($lvScr[2]['key'] == 8){
			$substr3 = "※管理職採用の場合は注意";
		}elseif($lvScr[2]['key'] == 9){
			$substr3 = "※管理職採用の場合は注意";
		}else{
			$substr3 = "";
		}
	}else{
		$substr3 = "";
	}

	$pdf->SetFont(GOTHIC, 'B', 9);
	$pdf->Cell(192,5,mb_convert_encoding($substr3,"SJIS-WIN","UTF-8"),0,"","L");
	$pdf->Ln(5);

	$pdf->Cell(59,5,'',0,"","L");
	$pdf->Cell(1,5,'',0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('　問題なし',"SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('注意',"SJIS-WIN","UTF-8"),0,"","C");
	$pdf->Cell(44,5,mb_convert_encoding('要注意',"SJIS-WIN","UTF-8"),0,"","C");

	$pdf->Ln(5);

	//グラフエリア
	$pdf->SetFont(GOTHIC, 'B', 10);
	$pdf->Cell(58.5,8,mb_convert_encoding($lvScr[2]['lvstr'],"SJIS-WIN","UTF-8"),1,"","C");
	$pdf->Cell(3,8,'',0,"","C");

	//グラフ出力エリア
	$pdf->SetFont(GOTHIC, 'B', 14);

	//グラフの点線
	$dotY = $dotY + 75;

	$obj->dotted(86,$dotY);
	$obj->dotted(100.5,$dotY);
	$obj->dotted(129.5,$dotY);
	$obj->dotted(144,$dotY);
	$obj->dotted(173,$dotY);
	$obj->dotted(187.5,$dotY);

	//星の出力位置
	$stars = $obj->starPlace($key3,$lv3,$no_array);

	$pdf->Cell(14.5,8,'','LTB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");
	$pdf->Cell(14.5,8,'','TB',"","C");

        $star21 = "";
        if($stars['2']['1']){$star21 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star22 = "";
        if($stars['2']['2']){$star22 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star23 = "";
        if($stars['2']['3']){$star23 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
	$pdf->Cell(14.5,8,$star21,'LTB',"","C");
	$pdf->Cell(14.5,8,$star22,'TB',"","C");
	$pdf->Cell(14.5,8,$star23,'TB',"","C");

        
        $star31 = "";
        if($stars['3']['1']){$star31 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star32 = "";
        if($stars['3']['2']){$star32 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
        $star33 = "";
        if($stars['3']['3']){$star33 = mb_convert_encoding("★","SJIS-WIN","UTF-8");}
	$pdf->Cell(14.5,8,$star31,'LTB',"","C");
	$pdf->Cell(14.5,8,$star32,'TB',"","C");
	$pdf->Cell(14.5,8,$star33,'TBR',"","C");

	//説明文エリア
	$pdf->SetFont(GOTHIC, '', 8);

	//【説明】出力エリア1
	$pdf->SetXY(10,$x1+150);
	$pdf->MultiCell(58.5,5.25,$array_comment[$key3][$lv3]['setsumei'],1,"L");

	//【面接の指針】出力エリア1
	$pdf->SetXY(71.5,$x1+150);
	$pdf->MultiCell(130.5,4,$array_comment[$key3][$lv3]['mensetsu'],1,"L");

	//【質問例】出力エリア1
	$pdf->SetXY(71.5,$x2+150);
	$pdf->MultiCell(130.5,4,$array_comment[$key3][$lv3]['shitsumon'],1,"L");

	//フッタエリア
	$pdf->Ln(7);
	$pdf->SetFontSize(7);
	$pdf->Cell(192, 1, 'powered by Innovation Gate ,Inc.', 0,1,'R');


?>