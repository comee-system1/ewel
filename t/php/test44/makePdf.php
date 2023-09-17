<?PHP
	$pdf->AddMBFont(GOTHIC ,'SJIS');
	$pdf->AddPage();
	$pdf->SetFont(GOTHIC,'',20);
	$x = $pdf->getX();
	$y = $pdf->getY();
	//ƒƒS‰æ‘œ•\Ž¦
	if($logourl){
		$pdf->Image($logourl, $x, $y,15,10);
	}
	$pdf->SetXY(10,24);
	$pdf->SetFontSize(11);
	$title = mb_convert_encoding($test[ 'testname' ],'SJIS','UTF-8');
	$pdf->SetFillColor(0, 0, 255);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Cell(0,10,$title , 1,1,'C',1);
	$pdf->SetXY(10,36);
	
	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetDrawColor(0, 0, 0);
	$pdf->SetTextColor(0, 0, 0);
	if($allPdf){
		$max = count($allData);
		$i=1;
		foreach($allData as $keys=>$values){
			$tensaku_value = mb_convert_encoding($array_tensaku_question[$values[ 'tensaku_main_id' ]][$values[ 'tensaku_id' ]],"SJIS","UTF-8");
			$pdf->Cell(0,10,$tensaku_value , 1,1,'C',1);

			$question_text = preg_replace("/\r\n/","",trim($values[ 'question_text' ]));
			$result = array();
			$result = $db->mb_str_split($question_text,46);
			$str = "";
			foreach($result as $key=>$val){
				$str .= $val."\n";
			}
			$question_text = "(‚ ‚È‚½‚Ì‰ñ“š@1‰ñ–Ú)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
			$pdf->MultiCell(0, 5,$question_text,1,"L",0,2);
			$worry_text = preg_replace("/\r\n/","",trim($values[ 'worry_text' ]));
			$result = array();
			$result = $db->mb_str_split($worry_text,46);
			$str = "";
			foreach($result as $key=>$val){
				$str .= $val."\n";
			}
			$worry_text = "(‹L“ü‚É‚ ‚½‚è”Y‚ñ‚¾“_)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
			$pdf->MultiCell(0, 5,$worry_text,1,"L",0,2);
			$advice_text = preg_replace("/\r\n/","",trim($values[ 'advice_text' ]));
			$result = array();
			$result = $db->mb_str_split($advice_text,46);
			$str = "";
			foreach($result as $key=>$val){
				$str .= $val."\n";
			}
			$advice_text = "(‘Š’kŽ–€)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
			$pdf->MultiCell(0, 5,$advice_text,1,"L",0,2);
			

			$answer_text = preg_replace("/\r\n/","",trim($values[ 'answer_text' ]));
			$result = array();
			$result = $db->mb_str_split($answer_text,46);
			$str = "";
			foreach($result as $key=>$val){
				$str .= $val."\n";
			}
			$answer_text = "(“Yí“à—e)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
			$pdf->MultiCell(0, 5,$answer_text,1,"L",0,2);
			
			

			$answer_advice_text = preg_replace("/\r\n/","",trim($values[ 'answer_advice_text' ]));
			$result = array();
			$result = $db->mb_str_split($answer_advice_text,46);
			$str = "";
			foreach($result as $key=>$val){
				$str .= $val."\n";
			}
			$answer_advice_text = "(ƒAƒhƒoƒCƒX)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
			$pdf->MultiCell(0, 5,$answer_advice_text,1,"L",0,2);



			if($i != $max) $pdf->AddPage();
			$i++;
		}
	}else{


		//“Yí‘è–¼•\Ž¦
		$title = "";
		foreach($array_tensaku_question as $key=>$val ){
			foreach($val as $k=>$v){
				$tensaku[ $k ] = $v;
			}
		}
		$tensaku_id  = $_REQUEST[ 'tensaku_id' ];
		$tensaku_value = mb_convert_encoding($tensaku[ $tensaku_id ],"SJIS","UTF-8");
		$pdf->Cell(0,10,$tensaku_value , 1,1,'C',1);
		$pdf->SetXY(10,51);
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->SetTextColor(0, 0, 0);
		
		$question_text = preg_replace("/\r\n/","",trim($_REQUEST[ 'question_text' ]));
		$result = $db->mb_str_split($question_text,46);
		foreach($result as $key=>$val){
			$str .= $val."\n";
		}
		$question_text = "(‚ ‚È‚½‚Ì‰ñ“š@1‰ñ–Ú)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
		$pdf->MultiCell(0, 5,$question_text,1,"L",0,2);


		$worry_text = preg_replace("/\r\n/","",trim($_REQUEST[ 'worry_text' ]));
		$result = array();
		$result = $db->mb_str_split($worry_text,46);
		$str = "";
		foreach($result as $key=>$val){
			$str .= $val."\n";
		}
		$worry_text = "(‹L“ü‚É‚ ‚½‚è”Y‚ñ‚¾“_)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
		$pdf->MultiCell(0, 5,$worry_text,1,"L",0,2);


		$advice_text = preg_replace("/\r\n/","",trim($_REQUEST[ 'advice_text' ]));
		$result = array();
		$result = $db->mb_str_split($advice_text,46);
		$str = "";
		foreach($result as $key=>$val){
			$str .= $val."\n";
		}
		$advice_text = "(‘Š’kŽ–€)\n".mb_convert_encoding($str,"sjis-win","UTF-8");
		$pdf->MultiCell(0, 5,$advice_text,1,"L",0,2);

		$pdf->MultiCell(0, 5,"ƒƒ‚—“\n\n\n\n\n\n\n\n\n\n\n",1,"L",0,2);
	}




?>
