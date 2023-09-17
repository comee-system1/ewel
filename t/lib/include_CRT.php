<?PHP
class CRTmethod extends method{
	//添削者にお知らせメール
	public function sendTensaku($data,$flg){
		switch($flg){
			case "4":
			case "3":
			case "2":
			default:
				
				//$code = $data[ 'exam_id' ]."/".$data[ 'testgrp_id' ]."/".$data[ 'test_id' ];
				$code = "/".$data[ 'testgrp_id' ]."/".$data[ 'exam_id' ];
				$msg = $data[ 'tensaku_name' ]."様
お世話になっております。
".$data[ 'customer' ]."の".$data[ 'rep_name' ]."です。

下記ＵＲＬより回答の添削をお願いします。
".D_URL."crt".$code."


よろしくお願いいたします。
";

				$msg .= "------------------------------------------------\n";
				$msg .= "■ お問い合わせ窓口 ■\n";
				$msg .= $data[ 'customer' ]." 担当 ".$data[ 'rep_name' ]."\n";
				$msg .= "e-mail: ".$data[ 'rep_email' ]."\n";
				$msg .= "------------------------------------------------\n";

				$mail = array();
				$mail[ 'subject' ] = "【".$data[ 'name' ]."検査完了】添削のお願い(".$flg."/4回)";
				$mail[ 'to'      ] = $data[ 'tensaku_mail'  ];
				$mail[ 'body'    ] = $msg;
				$bcc = D_FROM_MAIL;
			break;
		}

		$this->sendMailer($mail,$bcc);
	}
	//テスト詳細データ
	public function getTestpaper($where){
		$type         = $where[ 'type'         ];
		$testgrp_id = $where[ 'testgrp_id'   ];
		$exam_id      = $where[ 'exam_id'      ];
		$sql = "
				SELECT 
					 tt.exam_id
					,tt.testgrp_id
					,tt.test_id
					,tt.tensaku_name
					,tt.tensaku_mail
					,tt.mail
					,u.*
				FROM
					t_testpaper as tt
					LEFT JOIN( 
						SELECT 
							id
							,name as customer
							,rep_name
							,rep_email
						 FROM t_user ) as u ON tt.customer_id = u.id
				WHERE
					tt.testgrp_id = '".$testgrp_id."' AND
					tt.type = '".$type."' AND
					tt.exam_id = '".$exam_id."'
				";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
		
	}
	
	
	//テスト情報取得
	public function getBaseData($where){
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
	//------------------------------
	//残りの残数
	//-------------------------------
	public function checkResultData($where,$chkKey){
		$crt_id = $where[ 'crt_id' ];
		$counts = $where[ 'counts' ];
		$sql = "
				SELECT 
					id
				FROM
					crt_result
				WHERE
					crt_id=".$crt_id." AND
					counts =".$counts." AND 
					".$chkKey." = '' 
			";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();
		return $row;
	}
	//------------------------------
	//テスト情報保存ボタン押下
	//-------------------------------
	public function editResultData($table,$data){
		
		foreach($data[ 'edit' ] as $k=>$v){
			$edit .= ",".$k."='".$v."'";
		}
		$edit = preg_replace("/^,/","",$edit);
		foreach($data[ 'where' ] as $k=>$v){
			$where .= $k."='".$v."' AND ";
		}
		$sql = "";
		$sql = " UPDATE ".$table." SET ";
		$sql .= $edit;
		$sql .= " WHERE ";
		$sql .= $where;
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		
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
	//----------------------
	//テストデータ個別取得
	//----------------------
	public function getCrtDataOne($where,$clum){
		$crt_id     = $where[ 'crt_id'           ];
		$tensaku_id = $where[ 'tensaku_id'       ];
		$counts     = $where[ 'counts'           ];
		$sql = "
				SELECT 
					".$clum."
				FROM
					crt_result
				WHERE
					crt_id=".$crt_id." AND
					tensaku_id=".$tensaku_id." 
				";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $rlt;
	}
	//----------------------
	//テストデータ取得
	//----------------------
	public function getCrtData($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$start_time = date('Y-m-d H:i:s');
		$sql = "";
		$sql = "SELECT ";
		$sql .= " cm.id";
		$sql .= ",cm.tensaku_flg";
		$sql .= ",cm.tensaku_number";
		$sql .= ",GROUP_CONCAT(cr.tensaku_title_id SEPARATOR ',') as tline1";
		$sql .= ",GROUP_CONCAT(cr.tensaku_main_id SEPARATOR ',') as tline2";
		$sql .= ",GROUP_CONCAT(cr.tensaku_id SEPARATOR ',') as tline3";
		$sql .= " FROM ";
		$sql .= " crt_member as cm";
		$sql .= " LEFT JOIN (
					SELECT 
						crt_id,tensaku_title_id,tensaku_main_id,tensaku_id ,order_num
					FROM 
						crt_result
					) as cr ON cr.crt_id=cm.id";
		$sql .= " WHERE ";
		$sql .= " cm.testgrp_id=".$testgrp_id." AND ";
		$sql .= " cm.test_id = ".$test_id." AND ";
		$sql .= " cm.exam_id ='".$exam_id."'";
		$sql .= " GROUP BY cm.id";
		$sql .= " ORDER BY cr.order_num";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
                
                
		return $rlt;
	}
	
	public function getCheckFinFlg($id,$clum){
		$crt_id = $id;
		$sql = "
				SELECT 
					".$clum."
					,tensaku_id
				FROM
					crt_result
				WHERE
					crt_id=".$id."
				";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                
		while($rlt = $stmt->fetch(PDO::FETCH_ASSOC) ){
			$data[$rlt[ 'tensaku_id' ]] = $rlt;
		}
		return $data;
		
	}
	//------------------------------------------
	//検査空データの登録
	//-------------------------------------------
	public function setCrtData($set){
		$crt_id           = $set[ 'crt_id'           ];
		$tensaku_title_id = $set[ 'tensaku_title_id' ];
		$tensaku_main_id  = $set[ 'tensaku_main_id'  ];
		$tensaku_id       = $set[ 'tensaku_id'       ];
		$order             = $set[ 'order'           ];
		
		$sql = "
				INSERT INTO
					crt_result
					(
						crt_id
						,tensaku_title_id
						,tensaku_main_id
						,tensaku_id
						,order_num
						,regist_ts
					)
					VALUES
					(
						 '".$crt_id."'
						,'".$tensaku_title_id."'
						,'".$tensaku_main_id."'
						,'".$tensaku_id."'
						,'".$order."'
						,NOW()
					)
				";

		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
	//--------------------------
	//メールアドレスの登録
	//--------------------------
	public function setTestpaperMail($where){
		$id   = $where[ 'id'   ];
		$mail = $where[ 'mail' ];
		//テスト登録データ取得
		$sql = "
				SELECT 
					test_id
					,testgrp_id
					,exam_id 
				FROM 
					crt_member
				WHERE
				id='".$id."'
			";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
                
		$sql = "
				UPDATE t_testpaper SET 
					mail='".$mail."'
				WHERE
					test_id='".$rlt[ 'test_id' ]."'
					AND testgrp_id='".$rlt[ 'testgrp_id' ]."'
					AND exam_id='".$rlt[ 'exam_id' ]."'
					AND type = 48
				";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                
		return true;
	}
	
	//--------------------------
	//全データ取得
	//--------------------------
	public function getAllData($data){
		$crt_id = $data[ 'id' ];
		$sql = "
				SELECT 
					 *
				FROM
					crt_result
				WHERE
					crt_id=".$crt_id."
				ORDER BY tensaku_id
				";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                
		$i=0;
		while($rlt = $stmt->fetch(PDO::FETCH_ASSOC)){
			$list[$i] = $rlt;
			$i++;
		}
		return $list;
	}
	public function getDataOne($where){
		$sql = "
				SELECT 
					*
				FROM
					crt_member as cm
					LEFT JOIN crt_result as cr ON cr.crt_id = cm.id
				WHERE
					exam_id='".$where[ 'exam_id' ]."' 
					AND testgrp_id = ".$where[ 'testgrp_id' ]."
				";
		if($where[ 'tensaku_id' ]){
			$sql .= "
					AND tensaku_id = ".$where[ 'tensaku_id' ]."
				";
		}
		$sql .= " ORDER BY tensaku_id ASC";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$i=0;
		while($rlt = $stmt->fetch(PDO::FETCH_ASSOC)){
			$list[$i] = $rlt;
			$i++;
		}
		return $list;
		
	}
	
	public function getCounterRst($id,$tensaku_number){
		if($tensaku_number == 1){
			$flg = "finFlg";
		}else{
			$flg = "finFlg".$tensaku_number;
		}
		$sql = "
				SELECT 
					COUNT( id ) as count
					,SUM(CASE 
						WHEN ".$flg." = 1 THEN 1 ELSE 0
					END ) as fin
				FROM
					crt_result
				WHERE
					crt_id='".$id."'
			";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $rlt;
	}
}
?>