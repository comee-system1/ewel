<?PHP
class THmethod extends method{
	public function getTime($where){
		$id = $where[ 'id' ];
		$type    = $where[ 'type'       ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " t.minute_rest,t.id,t.test_id ";
		$sql .= " ,t.rsei_type,ta.tp_id ";
		$sql .= " FROM ";
		$sql .= " t_test as t ";
		$sql .= " LEFT JOIN (SELECT tp_id,testgrp_id,id FROM tamen_tbl) as ta ON ta.testgrp_id = t.test_id";
		
		$sql .= " WHERE ";
		$sql .= " ta.id=".$id." AND ";
		$sql .= " t.type=".$type." AND ";
		$sql .= " 1=1 ";
		$r = mysql_query($sql);
		$row = mysql_fetch_assoc($r);
		return $row;
		
	}

	public function getEa($where){
		$id      = $where[ 'id'      ];
		$type    = $where[ 'type'    ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " * ";
		$sql .= " FROM ";
		$sql .= " tamen_result ";
		$sql .= " WHERE ";
		$sql .= " ta_id=".$id." AND ";
		$sql .= " tamen_type=".$type." AND ";
		$sql .= " 1=1 ";

		$r = mysql_query($sql);
		$rlt = mysql_fetch_assoc($r);
		return $rlt;

	}
	public function setEa($where){
		$id        = $where[ 'id'        ];
		$tamentype = $where[ 'tamentype' ];
		$ta_id     = $where[ 'ta_id'     ];
		$sql = "";
		$sql .= " SELECT ";
		$sql .= " tt.id ";
		$sql .= " FROM ";
		$sql .= " tamen_result as tt ";
		$sql .= " WHERE ";
		$sql .= " tt.ta_id=".$ta_id;
		$sql .= " AND tt.tamen_type=".$tamentype;
		$sql .= " ";
		$r = mysql_query($sql);
		$row = mysql_fetch_assoc($r);
		if($row){
			$sql = "";
		}else{
			$sql = "";
			$sql = "INSERT INTO tamen_result ";
			$sql .= " (";
			$sql .= " ta_id,tamen_type,exam_state";
			$sql .= " )VALUES(";
			$sql .= $ta_id.",".$tamentype.",1";
			$sql .= ")";
		}
		mysql_query($sql);
	}
	
	public function setTamenStartTime($where){
		$id = $where[ 'id' ];
		
		$date       = sprintf("%04d/%02d/%02d"
						,date('Y')
						,date('m')
						,date('d')
						);
		$time       = sprintf("%02d:%02d:%02d"
						,date('H')
						,date('i')
						,date('s')
						);

		$sql = "";
		$sql = " UPDATE ";
		$sql .= " t_testpaper ";
		$sql .= " SET ";
		$sql .= " exam_state = 1,";
		$sql .= " exam_date='".$date."',";
		$sql .= " start_time='".$time."'";

		$sql .= " WHERE ";
		$sql .= " id=".$id." AND ";
		$sql .= " exam_state = 0 AND ";
		$sql .= " 1=1 ";
		mysql_query($sql);
		
	}
	
	public function setTh($sec,$where){
		$tamentype = $where[ 'tamentype' ];
		$ta_id     = $where[ 'ta_id'     ];
		$clum = "";
		foreach($sec as $key=>$val){
			$clum .= "ans".$key."=".$val.",";
		}
		$sql = "";
		$sql = "UPDATE tamen_result SET ";
		$sql .= $clum;
		$sql .= "result_time = ".time();
		$sql .= " WHERE ";
		$sql .= " ta_id=".$ta_id." AND ";
		$sql .= " tamen_type=".$tamentype;
		mysql_query($sql);
	}
	
	
	public function editComplete($where){
		$tamen_type = $where[ 'tamentype' ];
		$ta_id      = $where[ 'ta_id'     ];
		//exam_stateを2
		$sql = "";
		$sql = "UPDATE tamen_result SET ";
		$sql .= " exam_state = 2";
		$sql .= " WHERE ";
		$sql .= " ta_id=".$ta_id;
		mysql_query($sql);
		//tamen_tblデータ取得
		$sql = " SELECT ev_id,testgrp_id FROM tamen_tbl";
		$sql .= " WHERE ";
		$sql .= " id=".$ta_id;
		$r = mysql_query($sql);
		$tamen = mysql_fetch_assoc($r);
		$testgrp_id = $tamen[ 'testgrp_id' ];
		
		//メール配信フラグ
		$sql = "";
		$sql = "SELECT ";
		$sql .= " t.send_mail ";
		$sql .= " ,t.rest_mail_count";
		$sql .= " ,u.* ";
		$sql .= " ,p.name as pname";
		$sql .= " ,p.rep_name as prep_name";
		$sql .= " ,p.rep_email as prep_email";
		$sql .= " ,p.rep_name2 as prep_name2";
		$sql .= " ,p.rep_email2 as prep_email2";
		$sql .= " FROM ";
		$sql .= " t_test as t";
		$sql .= " LEFT JOIN (SELECT id,name,rep_name,rep_email,rep_name2,rep_email2 FROM t_user) as u ON t.customer_id = u.id ";
		$sql .= " LEFT JOIN (SELECT id,name,rep_name,rep_email,rep_name2,rep_email2 FROM t_user) as p ON t.partner_id = p.id ";
		$sql .= " WHERE ";
		$sql .= " t.id=(";
		$sql .= " SELECT testgrp_id FROM tamen_tbl";
		$sql .= " WHERE ";
		$sql .= " id=".$ta_id;
		$sql .= ")";
		$r = mysql_query($sql);
		$send = mysql_fetch_assoc($r);
		
		//メール配信残数
		$rest_mail_count = $send[ 'rest_mail_count' ];
		
		$sql = "";
		//テスト数取得
		$sql = "SELECT ";
		$sql .= " tamen_type,name ";
		$sql .= " ,period_from,period_to";
		$sql .= " FROM ";
		$sql .= " t_test ";
		$sql .= " WHERE ";
		$sql .= " type=10 AND ";
		$sql .= " test_id=(";
		$sql .= " SELECT testgrp_id FROM tamen_tbl";
		$sql .= " WHERE ";
		$sql .= " id=".$ta_id;
		$sql .= ")";
		$r = mysql_query($sql);
		$rlt = mysql_fetch_assoc($r);
		$ex = explode(":",$rlt[ 'tamen_type' ]);
		$testCnt = count($ex);

		//受検結果数取得
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " tamen_result ";
		$sql .= " WHERE ";
		$sql .= " ta_id= ".$ta_id." AND ";
		$sql .= " exam_state = 2";
		$r = mysql_query($sql);
		$row = mysql_num_rows($r);
		//complete_flg変更
		if($row >= $testCnt){
			$sql = "";
			$sql = "SELECT ";
			$sql .= " exam_date,start_time ";
			$sql .= " FROM ";
			$sql .= " t_testpaper ";
			$sql .= " WHERE ";
			$sql .= " id=(";
			$sql .= " SELECT tp_id FROM tamen_tbl";
			$sql .= " WHERE ";
			$sql .= " id=".$ta_id;
			$sql .= ")";
			$r = mysql_query($sql);
			$tdetail = mysql_fetch_assoc($r);

			$s_day  = split( '/', $tdetail['exam_date'] ); 
			$s_time = split( ':', $tdetail['start_time'] ); 

			$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
			$end_timestamp   = time();

			$end_timer = $end_timestamp - $start_timestamp;
			$e_time[0] = (int)($end_timer / 60);
			$e_time[1] = $end_timer % 60;
			$sql = "";
			$sql = "UPDATE t_testpaper SET ";
			$sql .= " exam_time='".$e_time[0].":".$e_time[1]."'";
			$sql .= " ,exam_state = 2";
			$sql .= " ,complete_flg = 1";
			$sql .= " WHERE ";
			$sql .= " id=(";
			$sql .= " SELECT tp_id FROM tamen_tbl";
			$sql .= " WHERE ";
			$sql .= " id=".$ta_id;
			$sql .= ")";
			mysql_query($sql);
			
			
			if($send[ 'send_mail' ]){
				//お知らせメール配信
				//----------------------------------------------
				//受検が完了した際に
				//メール配信　担当者１
				//-----------------------------------------------
				$msg = "";
				$msg = $send[ 'pname']." ".$send[ 'rep_name' ]."様";
				$msg .= "\n\n";
				$msg .= "サポートディスクよりお知らせです。\n\n";
				$msg .= "下記の検査において、受検完了いたしました。\n\n";
				$msg .= "検査名： ".$rlt[ 'name' ]."\n";
				$msg .= "受検者ID： ".$tamen[ 'ev_id' ]."\n";
				$msg .= "\n";
				$msg .= "ご確認の程、よろしくお願いいたします。\n\n\n";
				$msg .= "------------------------------------------------\n";
				$msg .= "■ ご登録内容についてのお問い合わせ窓口 ■\n";
				$msg .= $send[ 'pname' ]." 担当".$send[ 'prep_name' ]." ".$send[ 'prep_name2' ]."\n";
				$msg .= "e-mail: ".$send[ 'prep_email' ]." ".$send[ 'prep_email2' ]."\n";
				$msg .= "------------------------------------------------\n";
				
				$mail = array();
				$mail[ 'subject' ] = "【".$rlt[ 'name' ]."】受検完了メール";
				$mail[ 'to'      ] = $send[ 'rep_email'  ];
				$mail[ 'body'    ] = $msg;

				$this->sendMailer($mail);



				if($send[ 'rep_email2'  ]){
					//お知らせメール配信
					//----------------------------------------------
					//受検が完了した際に
					//メール配信　担当者１
					//-----------------------------------------------
					$msg = "";
					$msg = $send[ 'pname']." ".$send[ 'rep_name2' ]."様";
					$msg .= "\n\n";
					$msg .= "サポートディスクよりお知らせです。\n\n";
					$msg .= "下記の検査において、受検完了いたしました。\n\n";
					$msg .= "検査名： ".$rlt[ 'name' ]."\n";
					$msg .= "受検者ID： ".$tamen[ 'ev_id' ]."\n";
					$msg .= "\n";
					$msg .= "ご確認の程、よろしくお願いいたします。\n\n\n";
					$msg .= "------------------------------------------------\n";
					$msg .= "■ ご登録内容についてのお問い合わせ窓口 ■\n";
					$msg .= $send[ 'pname' ]." 担当".$send[ 'prep_name' ]." ".$send[ 'prep_name2' ]."\n";
					$msg .= "e-mail: ".$send[ 'prep_email' ]." ".$send[ 'prep_email2' ]."\n";
					$msg .= "------------------------------------------------\n";
					
					$mail = array();
					$mail[ 'subject' ] = "【".$rlt[ 'name' ]."】受検完了メール";
					$mail[ 'to'      ] = $send[ 'rep_email2'  ];
					$mail[ 'body'    ] = $msg;

					$this->sendMailer($mail);
				}
			}


			//メール残数配信
			if($rest_mail_count > 0){
				//メール残数
				$sql = "SELECT id FROM ";
				$sql .= " t_testpaper ";
				$sql .= " WHERE ";
				$sql .= " testgrp_id=".$testgrp_id;
				$sql .= " AND exam_state IN (0,1)";
				$r = mysql_query($sql);
				$restRow = mysql_num_rows($r);
				if($restRow <= $rest_mail_count ){

					$title = "検査数のお知らせ";
					$msg = $send[ 'pname']." ".$send[ 'rep_name' ]."様";
					$msg .= "\n";
					$msg .= "\n";
					$msg .= "下記、検査において、残数が".$restRow."件になり、\n受検できる件数が少なくなってきておりますので、\nお知らせ致します。\n";
					$msg .= "\n";
					$msg .= "検査名：".$rlt[ 'name' ]."\n";
					$msg .= "期間：".$rlt[period_from]."～".$rlt[period_to]."\n";
					$msg .= "残数：".$restRow."\n";

					$mail = array();
					$mail[ 'subject' ] = $title;
					$mail[ 'to'      ] = $send[ 'rep_email'  ];
					$mail[ 'body'    ] = $msg;
					$this->sendMailer($mail);

					
				}
			}
		}
	}
}


?>