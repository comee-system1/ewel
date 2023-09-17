<?PHP
class CRTmethod extends method{
	public function getTime($where){
		$test_id = $where[ 'testgrp_id' ];
		$type    = $where[ 'type'       ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " minute_rest,id,test_id ";
		$sql .= " ,rsei_type,array_tensaku_text,array_tensaku_title_status ";
		$sql .= " FROM ";
		$sql .= " t_test ";
		$sql .= " WHERE ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " type=".$type." AND ";
		$sql .= " 1=1 ";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $row;
		
	}
	public function editTestStatus($where){
		$exam_id    = $where[ 'exam_id'    ];
		$testgrp_id = $where[ 'testgrp_id' ];
		$type       = $where[ 'type'       ];

		if($where[ 'status' ]){
			$status = $where[ 'status' ];
		}else{
			$status = 1;
		}
		$sql = "";
		$sql = " UPDATE ";
		$sql .= " t_testpaper ";
		$sql .= " SET ";
		$sql .= " exam_state = 1,";
		$sql .= " tensaku_status = ".$status.",";
		$sql .= " middle_time_status = 0";
		$sql .= " WHERE ";
		$sql .= " type=".$type." AND ";
		$sql .= " exam_id='".$exam_id."' AND ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " exam_state IN(0,1) AND ";
		$sql .= " 1=1 ";
                
                $stmt = $this->db->prepare($sql);
                $r = $stmt->execute();
                
		return $r;
	}
	public function setStartTime($where){
		$id         = $where[ 'id'         ];
		$exam_id    = $where[ 'exam_id'    ];
		$testgrp_id = $where[ 'testgrp_id' ];
		$type       = $where[ 'type'       ];
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
		if($where[ 'status' ]){
			$status = $where[ 'status' ];
		}else{
			$status = 1;
		}
		$sql = "";
		$sql = " UPDATE ";
		$sql .= " t_testpaper ";
		$sql .= " SET ";
		$sql .= " exam_state = 1,";
		$sql .= " exam_date='".$date."',";
		$sql .= " start_time='".$time."',";
		$sql .= " tensaku_status = ".$status.",";
		$sql .= " middle_time_status = 0";
		$sql .= " WHERE ";
//		$sql .= " id=".$id." AND ";
		$sql .= " type=".$type." AND ";
		$sql .= " exam_id='".$exam_id."' AND ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " exam_state IN(0,1) AND ";
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $r = $stmt->execute();
		return $r;
	}


	public function setEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$start_time = date('Y-m-d H:i:s');
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " crt_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO crt_member ";
			$sql .= "(";
			$sql .= "test_id,testgrp_id,exam_id,start_time";
			$sql .= ")VALUES(";
			$sql .= $test_id.",".$testgrp_id.",'".$exam_id."'";
			$sql .= ",'".$start_time."'";
			$sql .= ")";
                        
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();

		}
	}
	
	public function getMemberData($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		
		$sql = "";
		$sql = "
				SELECT * FROM crt_member
					WHERE
				testgrp_id = ".$testgrp_id."
				AND exam_id = '".$exam_id."'
			";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	public function setData($set){
		$crt_id          = $set[ 'crt_id'          ];
		$tensaku_main_id = $set[ 'tensaku_main_id' ];
		$tensaku_id      = $set[ 'tensaku_id'      ];
		$status          = $set[ 'status'          ];
		$count_status    = $set[ 'count_status'    ];
		$question        = $set[ 'question'        ];
		$ask_text        = $set[ 'ask_text'        ];
		$trouble_text    = $set[ 'trouble_text'    ];
		$regist_ts       = date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s');
		$answer          = $set[ 'answer' ];
		$sql = "";
		$sql = "
				SELECT * FROM 
					crt_sec
				WHERE
					crt_id='".$crt_id."' AND
					tensaku_main_id='".$tensaku_main_id."' AND
					tensaku_id='".$tensaku_id."' 
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();
                
		if($row){
			$sql = "";
			$sql = "
				UPDATE crt_sec SET
					status='".$status."',
					count_status='".$count_status."',
					question='".$question."',
					answer='".$answer."',
					ask_text='".$ask_text."',
					trouble_text='".$trouble_text."'
				WHERE
					crt_id='".$crt_id."' AND
					tensaku_main_id='".$tensaku_main_id."' AND
					tensaku_id='".$tensaku_id."' 
				";
			
		}else{
			$sql = "";
			$sql = "
				INSERT INTO crt_sec(
					crt_id,
					tensaku_main_id,
					tensaku_id,
					status,
					count_status,
					question,
					ask_text,
					trouble_text,
					regist_ts
				)VALUES(
					'".$crt_id."',
					'".$tensaku_main_id."',
					'".$tensaku_id."',
					'".$status."',
					'".$count_status."',
					'".$question."',
					'".$ask_text."',
					'".$trouble_text."',
					NOW()
				)
			";
		}
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
	}

	public function setDataCompQues($set){
		$crt_id          = $set[ 'crt_id'          ];
		$tensaku_main_id = $set[ 'tensaku_main_id' ];
		$tensaku_id      = $set[ 'tensaku_id'      ];
		$status          = $set[ 'status'          ];
		$comp_question   = $set[ 'comp_question'    ];

		$sql = "";
		$sql = "
			UPDATE crt_sec SET
				status='".$status."',
				comp_question='".$comp_question."'
			WHERE
				crt_id='".$crt_id."' AND
				tensaku_main_id='".$tensaku_main_id."' AND
				tensaku_id='".$tensaku_id."' 
			";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
	}


	public function getQuestion($where){
		$crt_id          = $where[ 'crt_id'          ];
		$tensaku_main_id = $where[ 'tensaku_main_id' ];
		$tensaku_id      = $where[ 'tensaku_id'      ];
		$sql = "";
		$sql = "
				SELECT * FROM 
					crt_sec
				WHERE
					crt_id='".$crt_id."' AND
					tensaku_main_id='".$tensaku_main_id."' AND
					tensaku_id='".$tensaku_id."' 
				";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();

		return $row;
	}
	public function getQuestionKey($where){
		$crt_id          = $where[ 'crt_id'          ];
		$tensaku_main_id = $where[ 'tensaku_main_id' ];
		$status          = $where[ 'status' ];
		$sql = "
				SELECT tensaku_id  FROM 
					crt_sec
				WHERE
					crt_id='".$crt_id."' AND
					tensaku_main_id='".$tensaku_main_id."' 
				";
		if($status){
			$sql .= " AND status=".$status;
		}
		$sql .= " ORDER BY tensaku_id ";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
		$list = array();
		while($row =  $stmt->fetch(PDO::FETCH_ASSOC) ){
			$list[$row[ 'tensaku_id' ]] = "on";
		}
		return $list;
	}
	public function getQuestionAnsKey($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		$sql = "
			SELECT 
				cs.answer,
				cs.comp_answer,
				cs.status,
				cs.tensaku_id 
			FROM 
				crt_member as cm
				LEFT JOIN (SELECT crt_id,tensaku_id,answer,comp_answer,status FROM crt_sec) as cs ON cm.id=cs.crt_id
			WHERE
				cm.testgrp_id='".$testgrp_id."' AND
				cm.exam_id='".$exam_id."'
		";
		$sql .= " ORDER BY cs.tensaku_id";

		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $list = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			if($row[ 'status' ] == 6 || $row[ 'status' ] == 7){
				if($row[ 'comp_answer' ]){
					$list[$row[ 'tensaku_id' ]] = "on";
				}
			}else{
				if($row[ 'answer' ]){
					$list[$row[ 'tensaku_id' ]] = "on";
				}
			}
		}
		return $list;
	}

	public function checkExamState($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		$type       = $where[ 'type'       ];
		$sql = "
				SELECT 
					tensaku_status 
				FROM 
					t_testpaper
				WHERE
					testgrp_id='".$testgrp_id."' AND
					exam_id='".$exam_id."' AND
					type='".$type."' 
			";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	
	public function getAnswerData($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		$tensaku_id = $where[ 'tensaku_id' ];
		$sql = "
			SELECT 
				cs.*
			FROM 
				crt_member as cm
				LEFT JOIN (SELECT * FROM crt_sec) as cs ON cm.id=cs.crt_id
			WHERE
				cm.testgrp_id='".$testgrp_id."' AND
				cm.exam_id='".$exam_id."' AND
				cs.tensaku_id='".$tensaku_id."'
		";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
		
	}
	
	//添削者にお知らせメール
	public function sendTensaku($where){
		//添削者情報取得
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		$type       = $where[ 'type'       ];
		$sql = "
				SELECT 
					tensaku_name,
					tensaku_mail,
					tensaku_status,
					exam_id,
					testgrp_id,
					test_id,
					t.name,
					t.dir,
					u.name as customer,
					u.rep_name,
					u.rep_email
				FROM 
					t_testpaper as tt
					LEFT JOIN (SELECT id,name,dir FROM t_test) as t ON t.id=tt.test_id
					LEFT JOIN (SELECT id,name,rep_name,rep_email  FROM t_user) as u ON u.id=tt.customer_id

				WHERE
					testgrp_id ='".$testgrp_id."' AND
					exam_id='".$exam_id."' AND
					type='".$type."' 
				";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

		switch($row["tensaku_status"]){
			case "8":
				//初回添削完了
				$code = $row[ 'exam_id' ]."/".$row[ 'testgrp_id' ]."/".$row[ 'test_id' ];
				$msg = $row[ 'customer' ]." ".$row[ 'rep_name' ]."様
お世話になっております。
".$row[ 'tensaku_name' ]."です。

下記ＵＲＬより回答確認お願いします。
".D_URL."tk/".$code."


IDは以前ご利用いただいたものを利用可能です。
よろしくお願いいたします。
";

				$msg .= "------------------------------------------------\n";
				$msg .= "■ お問い合わせ窓口 ■\n";
				$msg .= $row[ 'customer' ]." 担当 ".$row[ 'rep_name' ]."\n";
				$msg .= "e-mail: ".$row[ 'rep_email' ]."\n";
				$msg .= "------------------------------------------------\n";

				$mail = array();
				$mail[ 'subject' ] = "【".$row[ 'name' ]."検査】最終確認回答のお願い";
				$mail[ 'to'      ] = $row[ 'rep_email'  ];
				$mail[ 'body'    ] = $msg;
				$bcc  = $row[ 'tensaku_mail' ];

			break;
			case "6":
				//最終完了
				$code = $row[ 'exam_id' ]."/".$row[ 'testgrp_id' ]."/".$row[ 'test_id' ];
				$msg = $row[ 'tensaku_name' ]."様
お世話になっております。
".$row[ 'customer' ]."の".$row[ 'rep_name' ]."です。

下記ＵＲＬより回答の最終添削をお願いします。
".D_URL."tk/".$code."

よろしくお願いいたします。
";

				$msg .= "------------------------------------------------\n";
				$msg .= "■ お問い合わせ窓口 ■\n";
				$msg .= $row[ 'customer' ]." 担当 ".$row[ 'rep_name' ]."\n";
				$msg .= "e-mail: ".$row[ 'rep_email' ]."\n";
				$msg .= "------------------------------------------------\n";

				$mail = array();
				$mail[ 'subject' ] = "【".$row[ 'name' ]."検査】最終添削のお願い";
				$mail[ 'to'      ] = $row[ 'rep_email'  ];
				$mail[ 'body'    ] = $msg;
				
			break;
			case "4":
				//初回添削完了
				$code = base64_encode($row[ "dir" ]);
				$msg = $row[ 'customer' ]." ".$row[ 'rep_name' ]."様
お世話になっております。
".$row[ 'tensaku_name' ]."です。

下記ＵＲＬよりログインを行い、添削内容の確認・再回答が可能です。
".D_URL_TEST."?k=".$code."


IDは以前ご利用いただいたものを利用可能です。
よろしくお願いいたします。
";

				$msg .= "------------------------------------------------\n";
				$msg .= "■ お問い合わせ窓口 ■\n";
				$msg .= $row[ 'customer' ]." 担当 ".$row[ 'rep_name' ]."\n";
				$msg .= "e-mail: ".$row[ 'rep_email' ]."\n";
				$msg .= "------------------------------------------------\n";

				$mail = array();
				$mail[ 'subject' ] = "【".$row[ 'name' ]."検査】添削結果確認再度回答のお願い";
				$mail[ 'to'      ] = $row[ 'rep_email'  ];
				$mail[ 'body'    ] = $msg;
				$bcc  = $row[ 'tensaku_mail' ];
//				$bcc = "chiba2@innovation-gate.jp";
			break;
			case "2":
				$code = $row[ 'exam_id' ]."/".$row[ 'testgrp_id' ]."/".$row[ 'test_id' ];
				$msg = $row[ 'tensaku_name' ]."様
お世話になっております。
".$row[ 'customer' ]."の".$row[ 'rep_name' ]."です。

下記ＵＲＬより回答の添削をお願いします。
".D_URL."tk/".$code."


よろしくお願いいたします。
";

				$msg .= "------------------------------------------------\n";
				$msg .= "■ お問い合わせ窓口 ■\n";
				$msg .= $row[ 'customer' ]." 担当 ".$row[ 'rep_name' ]."\n";
				$msg .= "e-mail: ".$row[ 'rep_email' ]."\n";
				$msg .= "------------------------------------------------\n";

				$mail = array();
				$mail[ 'subject' ] = "【".$row[ 'name' ]."検査完了】添削のお願い";
				$mail[ 'to'      ] = $row[ 'tensaku_mail'  ];
				$mail[ 'body'    ] = $msg;
			break;
			
		}
		$this->sendMailer($mail,$bcc);
	}

	public function getCrtTestname($where){
		$id = $where[ 'id' ];
		$sql = "
				SELECT 
					name,
					array_tensaku_title_status,
					array_tensaku_text 
				FROM t_test
					WHERE
				id=".$id."
			";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	
	public function editCrtStatus($where,$status){
		$testgrp_id  = $where[ 'testgrp_id'  ];
		$exam_id     = $where[ 'exam_id'     ];
		$wherests    = $where[ 'status'      ];
		$sql = "
				UPDATE crt_sec SET 
					status = ".$status."
				WHERE
					crt_id=
					( 	SELECT 
							id 
						FROM 
							crt_member
						WHERE
							testgrp_id = '".$testgrp_id."' AND
							exam_id = '".$exam_id."' 
					) AND
					status = ".$wherests."
			";

		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                
	}
}


?>