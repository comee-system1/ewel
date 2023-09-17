<?PHP
//-------------------------------------------
//�������\��
//
//
//
//
//
//-------------------------------------------

include_once("./init/bill.php");
require_once("./lib/include_bill.php");

$obill = new billMethod();



if($_REQUEST[ 'output' ]){
	//PDF�_�E�����[�h
	define('FPDF_FONTPATH','/font/');
	require('./mbfpdf.php');
	
	$pdf = new MBFPDF('P','mm','A4');

	$pdf->AddPage();
	$pdf->AddMBFont(MINCHO ,'SJIS');
	$pdf->SetFont(MINCHO, '', 8);
		//�E�ֈړ�
		$x = $pdf->getX();
		$y = $pdf->getY();

		$pdf->SetXY(90.0, 10.0);
		$pdf->SetFontSize(18);
		$pdf->Write(1,'�䐿����');

		$pdf->SetXY(150,25);
		$pdf->SetFontSize(11);
		$pdf->Write(1,'����No.�@�@�@ �@'.$_REQUEST[ 'billnumber' ]);
		$pdf->Rect(150, 28, 48, 'D');

		$pdf->SetXY(166,30);
		$pdf->SetFontSize(11);
		$pdf->Write(1,'����'.$_REQUEST[ 'year' ]."�N");
		$pdf->Write(1,''.$_REQUEST[ 'month' ]."��");
		$pdf->Write(1,''.$_REQUEST[ 'day' ]."��");
		$pdf->SetXY(135,58);
		if($_REQUEST[ 'syahan' ] == 'on'){
			$pdf->Image('./images/innovation.gif', 175, 50, 25,25);
		}
		$pdf->Write(1,'��'.$_REQUEST[ 'post1' ]."-".$_REQUEST[ 'post2' ]);
		$pdf->SetXY(135,63);
		$address = mb_convert_encoding($_REQUEST[ 'address' ],'SJIS','UTF-8');
		$pdf->Write(1,''.$address);
		$pdf->SetXY(135,68);
		$address2 = mb_convert_encoding($_REQUEST[ 'address2' ],'SJIS','UTF-8');
		$pdf->Write(1,''.$address2);
		$pdf->SetXY(135,72);
		$company = mb_convert_encoding($_REQUEST[ 'company' ],'SJIS','UTF-8');
		$pdf->Write(1,''.$company);

		$pdf->SetXY(135,77);
		$telnumber = mb_convert_encoding($_REQUEST[ 'telnumber' ],'SJIS','UTF-8');
		$pdf->Write(1,''.$telnumber);

		$pdf->SetFontSize(8);
		$pdf->SetXY(179,91);
		$pdf->Cell(20, 6, "�S����", 1, 1, 'C', 0);
		$pdf->SetXY(179,97);
		if($_REQUEST[ 'tantohan' ] == 'on'){
			$pdf->Image('./images/sasaki.gif', 183, 99, 12,12);
		}
		$pdf->Cell(20, 15, "�@", 1, 1, 'C', 0);


		$address2 = mb_convert_encoding($_REQUEST[ 'cus_address2' ],'SJIS','UTF-8');
		if($address2 == "�r����������͂��Ă�������"){
			$address2 = "";
		}

		$pdf->SetXY(170,30);
		$cus_name = mb_convert_encoding($_REQUEST[ 'cus_name' ],'SJIS','UTF-8')." ";

		$pdf->SetXY(10,17);
		$pdf->SetFontSize(11);
		$cus_post = "��".$_REQUEST[ 'cus_post1' ]."-".$_REQUEST[ 'cus_post2' ];
		$pdf->Write(1,$cus_post);
		$pdf->Ln(3);

		$add = explode(" ",$_REQUEST[ 'cus_address' ]);

		foreach($add as $key=>$val){
			if($val){
				$address = mb_convert_encoding($val,'SJIS','UTF-8');
			//	$pdf->Ln(1);
			}
		}
		$pdf->MultiCell(90,5,$address);
		$pdf->Ln(1);
		$pdf->MultiCell(90,5,$address2);


		$pdf->SetXY(10,36);
		//$pdf->SetFontSize(14);
		$pdf->Write(1,$cus_name);

		$pdf->SetXY(10,43);
		$cus_busyo = mb_convert_encoding($_REQUEST[ 'cus_busyo' ],'SJIS','UTF-8');
		if($cus_busyo == "����������͂��Ă�������"){
			$cus_busyo = "";
		}
		if($cus_busyo) $cus_busyo = $cus_busyo."�@";
		$post = trim(mb_convert_encoding($_REQUEST[ 'post' ],'SJIS','UTF-8')."");
		if($post == "��E������͂��Ă�������"){
			$post = "";
		}
		if($post){
			 $post = $post."�@";
		}else{
			$post = "";
		}



		$cus_tanto = mb_convert_encoding($_REQUEST[ 'cus_tanto' ],'SJIS','UTF-8')."�@�l";
		$pdf->SetFontSize(11);
		$pdf->Write(1,$cus_busyo);
		$pdf->Ln(5);

		$pdf->Write(1,$post.$cus_tanto);
		$pdf->Rect(10, 53, 80, 'D');

		$pdf->SetFontSize(10);
		$pdf->SetXY(10,70);
		$pdf->Write(1,"���L�̒ʂ育�����\���グ�܂��B");
		$pdf->SetXY(10,78);
		$pdf->SetFont(MINCHO, 'B', 10);
		$pdf->Write(1,"�������z");
		$pdf->SetFontSize(15);
		$pdf->SetXY(50,78);
		$money = "\\".number_format($_REQUEST[ 'money' ])."-";
		$pdf->Write(1,$money);
		$pdf->SetXY(80,78);
		$pdf->SetFontSize(6);
		$pdf->Write(1,"������ō�");
		$pdf->Rect(10, 81, 70,'D');


		$pdf->SetFont(MINCHO, '', 10);
		$pdf->SetFontSize(10);
		$pdf->SetXY(10,84);
		$billtitle = mb_convert_encoding($_REQUEST[ 'billtitle' ],'SJIS','UTF-8');
		$pdf->Write(1,"���@�@���F".$billtitle);
		$pdf->Rect(10, 87, 100,'D');

		$pdf->SetXY(10,90);
		$pay_date = $_REQUEST[ 'pay_year' ]."�N ".$_REQUEST[ 'pay_month' ]."�� ".$_REQUEST[ 'pay_day' ]."��";
		$pdf->Write(1,"��x�����F".$pay_date);
		$pdf->Rect(10, 93, 100,'D');

		$pdf->SetXY(10,96);
		$bank = mb_convert_encoding($_REQUEST[ 'bank' ],'SJIS','UTF-8');
		$bank_no = mb_convert_encoding($_REQUEST[ 'bank_no' ],'SJIS','UTF-8');
		$pdf->Write(1,"��U����F".$bank." (�����ԍ�)".$bank_no);
		$pdf->Rect(10, 99, 100,'D');


		$pdf->SetXY(10,102);
		$kouza = mb_convert_encoding($_REQUEST[ 'kouza' ],'SJIS','UTF-8');
		$pdf->Write(1,"�������`�F".$kouza);
		$pdf->Rect(10, 105, 100,'D');

		$pdf->SetXY(10,108);
		$pdf->Write(1,"���U���萔���́A�M�Е��S�ɂĂ��肢�\���グ�܂��B");

		$pdf->SetXY(10,120);

		$pdf->SetFontSize(8);
		$pdf->SetFillColor(204, 204, 255);
		$pdf->Cell( 6, 6, "No"  , 1, 0, 'C', 1);
		$pdf->Cell(68, 6, "�i��", 1, 0, 'C', 1);
		$pdf->Cell(25, 6, "����", 1, 0, 'C', 1);
		$pdf->Cell(25, 6, "�K�i", 1, 0, 'C', 1);
		$pdf->Cell(10, 6, "����", 1, 0, 'C', 1);
		$pdf->Cell(10, 6, "�P��", 1, 0, 'C', 1);
		$pdf->Cell(15, 6, "�P��", 1, 0, 'C', 1);
		$pdf->Cell(30, 6, "���z", 1, 1, 'C', 1);

		$i=1;
		if(count($_REQUEST['bill'])){
			foreach($_REQUEST[ 'bill' ] as $key=>$val){
				if($i%2){
					$pdf->SetFillColor(255, 255, 255);
				}else{
					$pdf->SetFillColor(204, 204, 255);
				}

				if($val[ 'price' ]){
					$pdf->Cell( 6, 6, $i, 1, 0, 'L', 1);
				}else{
					$pdf->Cell( 6, 6, '', 1, 0, 'L', 1);
				}

				$leng = mb_strlen($val[ 'article' ]);
				if($leng >= 20){
					$pdf->SetFontSize(6);
				}else{
					$pdf->SetFontSize(8);
				}
				
				$pdf->Cell(68, 6, mb_convert_encoding($val[ 'article'  ],"SJIS","UTF-8"), 1, 0, 'L', 1);
				
				$pdf->SetFontSize(8);
				$pdf->Cell(25, 6, mb_convert_encoding($val[ 'brand'    ],"SJIS","UTF-8"), 1, 0, 'L', 1);
				$pdf->Cell(25, 6, mb_convert_encoding($val[ 'standard' ],"SJIS","UTF-8"), 1, 0, 'L', 1);
				$pdf->Cell(10, 6, mb_convert_encoding($val[ 'number'   ],"SJIS","UTF-8"), 1, 0, 'R', 1);
				$pdf->Cell(10, 6, mb_convert_encoding($val[ 'unit'     ],"SJIS","UTF-8"), 1, 0, 'R', 1);
				if($val[ 'unitprice' ]){
					$pdf->Cell(15, 6, number_format($val[ 'unitprice']), 1, 0, 'R', 1);
				}else{
					$pdf->Cell(15, 6, '', 1, 0, 'R', 1);
				}
				if($val[ 'price' ]){
					$pdf->Cell(30, 6, number_format($val[ 'price'    ]), 1, 1, 'R', 1);
				}else{
					$pdf->Cell(30, 6, '', 1, 1, 'R', 1);
				}
				$total += $val[ 'price' ];
				$i++;
				
			}


			//��s�ǉ�
			if($i <= 18){
				
				do{
					if($i%2){
						$pdf->SetFillColor(255, 255, 255);
					}else{
						$pdf->SetFillColor(204, 204, 255);
					}
					
					$pdf->Cell( 6, 6, ""  , 1, 0, 'C', 1);
					$pdf->Cell(68, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(25, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(25, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(10, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(10, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(15, 6, "", 1, 0, 'C', 1);
					$pdf->Cell(30, 6, "", 1, 1, 'C', 1);
					
					$i++;
					if($i > 18){
						$flg = false;
					}else{
						$flg = true;
					}
				}while($flg);
			}

			if($i%2){
				$pdf->SetFillColor(255, 255, 255);
				$i++;
			}else{
				$pdf->SetFillColor(204, 204, 255);
				$i++;
			}
		}

		$pdf->SetFontSize(9);
		$pdf->Cell( 6, 6, " "  , 1, 0, 'C', 1 );
		$pdf->Cell(68, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(25, 6, "���v", 1, 0, 'C', 1);
		$pdf->Cell(25, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(10, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(10, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(15, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(30, 6, number_format($total), 1, 1, 'R', 1);

		if($i%2){
			$pdf->SetFillColor(255, 255, 255);
			$i++;
		}else{
			$pdf->SetFillColor(204, 204, 255);
			$i++;
		}

		$tax = $_REQUEST[ 'money' ]-$total;
		$pdf->SetFontSize(9);
		$pdf->Cell( 6, 6, " "  , 1, 0, 'C', 1 );
		$pdf->Cell(68, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(25, 6, "�����", 1, 0, 'C', 1);
		$pdf->Cell(25, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(10, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(10, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(15, 6, " ", 1, 0, 'C', 1   );
		$pdf->Cell(30, 6, number_format($tax), 1, 1, 'R', 1);

		if($i%2){
			$pdf->SetFillColor(255, 255, 255);
			$i++;
		}else{
			$pdf->SetFillColor(204, 204, 255);
			$i++;
		}

		$tax = $_REQUEST[ 'money' ]-$total;
		$pdf->SetFontSize(11);
		$pdf->Cell( 159, 7, "���v�i�ō��j"  , 1, 0, 'C', 1 );
		$pdf->Cell( 30, 7,  number_format($_REQUEST[ 'money' ]), 1, 0, 'R', 1 );


		$pdf->SetFontSize(9);
		$pdf->Ln(10);
		$pdf->Write(1,"�����l");
		$pdf->Ln(5);
		$other = mb_convert_encoding($_REQUEST[ 'other' ],'SJIS','UTF-8');
		$pdf->MultiCell(200,5,$other);
		$pdf->SetFont(MINCHO, '', 8);


	

	$edit[ 'bill_num'            ] = $_REQUEST[ 'billnumber'  ];
	$edit[ 'eir_id'              ] = $id;
	$edit[ 'testid'              ] = $_REQUEST[ 'tid'         ];
	$edit[ 'partner_id'          ] = $_REQUEST[ 'pid'         ];
	$edit[ 'customer_id'         ] = $_REQUEST[ 'cid'         ];
	$edit[ 'send_status'         ] = $_REQUEST[ 'send_status' ];
	$edit[ 'money_total'         ] = $_REQUEST[ 'money'       ];
	$edit[ 'name'                ] = $_REQUEST[ 'cus_name'    ];
	$edit[ 'title'               ] = $_REQUEST[ 'billtitle'   ];
	$edit[ 'pay_date'            ] = sprintf("%04d-%02d-%02d"
						  	        ,$_REQUEST[ 'pay_year' ],$_REQUEST[ 'pay_month' ],$_REQUEST[ 'pay_day' ]);
	$edit[ 'pay_bank'            ] = $_REQUEST[ 'bank' ];
	$edit[ 'pay_num'             ] = $_REQUEST[ 'bank_no'  ];
	$edit[ 'pay_name'            ] = $_REQUEST[ 'kouza' ];
	$edit[ 'post1'               ] = $_REQUEST[ 'cus_post1'   ];
	$edit[ 'post2'               ] = $_REQUEST[ 'cus_post2'   ];
	$edit[ 'address'             ] = $_REQUEST[ 'cus_address' ];
	$edit[ 'address2'            ] = $_REQUEST[ 'cus_address2'];

	$edit[ 'busyo'               ] = mb_convert_encoding($cus_busyo,"UTF-8","SJIS");
	$edit[ 'tanto'               ] = $_REQUEST[ 'cus_tanto'   ];
	$edit[ 'registdate'          ] = sprintf("%02d-%02d-%02d",$_REQUEST[ 'year' ],$_REQUEST[ 'month' ],$_REQUEST[ 'day' ]);
	$edit[ 'other'               ] = $_REQUEST[ 'other'    ];
	$edit[ 'company_post1'       ] = $_REQUEST[ 'post1'    ];
	$edit[ 'company_post2'       ] = $_REQUEST[ 'post2'    ];
	$edit[ 'company_address'     ] = $_REQUEST[ 'address'  ];
	$edit[ 'company_address2'     ] = $_REQUEST[ 'address2'  ];
	$edit[ 'company_name'        ] = $_REQUEST[ 'company'  ];
	$edit[ 'download_status'     ] = 0;
	$edit[ 'bill_term_date_from' ] = sprintf("%04d-%02d-%02d",$_REQUEST[ 'year1' ],$_REQUEST[ 'month1' ],$_REQUEST[ 'day1' ]);
	$edit[ 'bill_term_date_to'   ] = sprintf("%04d-%02d-%02d",$_REQUEST[ 'year2' ],$_REQUEST[ 'month2' ],$_REQUEST[ 'day2' ]);
	$edit[ 'syahan_sts'          ] = $_REQUEST[ 'syahan'   ];
	$edit[ 'tantohan_sts'        ] = $_REQUEST[ 'tantohan' ];
	$edit[ 'post'                ] = mb_convert_encoding($post,"UTF-8","SJIS");


	$edit[ 'bill'           ] = $_REQUEST[ 'bill' ];
	$obill->setBillData($edit);

	$filename = $_REQUEST[ 'billnumber' ].".pdf";
	$pdf->Output($filename, 'D');

	exit();
}



//�f�[�^�擾

$where = array();
$where[ 'id' ] = $_REQUEST[ 'uid' ];
$bill          = $obill->getUserData($where);
$post1         = $bill[ 'post1'    ];
$post2         = $bill[ 'post2'    ];
$address1      = $bill[ 'address1' ];
$address2      = $bill[ 'address2' ];
$name          = $bill[ 'name'     ];
$busyo         = $bill[ 'rep_busyo'     ];
//$post        = $bill[ 'name'     ];
$tanto         = $bill[ 'rep_name'     ];
$outputPdf     = $bill[ 'outputPdf' ];
$ex            = explode(":",$outputPdf);
//�������z���v
if($sec == "edits"){

	foreach($_REQUEST[ 'type' ] as $key=>$val){
		if($val){
			$money += $a_test_money[ $key ]*$val*1.08;
			$paylist[ $key ][ 'bill_name'  ] = $a_test_JP[ $key ];
			$paylist[ $key ][ 'bill_count' ] = $val;
			$paylist[ $key ][ 'bill_money' ] = $a_test_money[ $key ];
			$paylist[ $key ][ 'bill_price' ] = $a_test_money[ $key ]*$val;
		}
	}

}else{
	$parts = $bill[ 'license_parts' ];
	$exp = explode(":",$parts);
	$i=1;
	foreach($exp as $key=>$val){
		$li[ $i ] = $val;
		$i++;
	}
	foreach($li as $key=>$val){
		if($val){
			$money += $a_test_money[ $key ]*$val*1.08;
			$paylist[ $key ][ 'bill_name'  ] = $a_test_JP[ $key ];
			$paylist[ $key ][ 'bill_count' ] = $val;
			$paylist[ $key ][ 'bill_money' ] = $a_test_money[ $key ];
			$paylist[ $key ][ 'bill_price' ] = $a_test_money[ $key ]*$val;
		}
	}
}

//���x����
//�����҂�
$next = date("Y-m-t" ,strtotime("+1 month"));
$pay = explode("-",$next);
$pay_year  = sprintf("%d",$pay[0]);
$pay_month = sprintf("%d",$pay[1]);
$pay_day   = sprintf("%d",$pay[2]);
$pay_bank  = $a_company[6];
$pay_num   = $a_company[7];
$pay_name  = $a_company[0];

//�������ԍ�
$billnumber = $obill->getBillMax();
$billnumber = "s".date('ym').$billnumber;

//��������
$y = date('Y', mktime(0, 0, 0, date('m') + 1, 0, date('Y')));
$m = date('m', mktime(0, 0, 0, date('m') + 1, 0, date('Y')));
$d = date('d', mktime(0, 0, 0, date('m') + 1, 0, date('Y')));
list($year,$month,$day) = $obill->to_wareki($y,$m,$d);
$month = sprintf("%d",$month);
$company_post1    = $a_company[1];
$company_post2    = $a_company[2];
$company_address  = $a_company[3];
$company_address2  = $a_company[4];
$company_name     = $a_company[0];
$telnumber        = $a_company[8];
?>