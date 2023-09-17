<?PHP
class MEAmethod extends method{

	//-----------------------------------------------
	//情報変更
	//
	//
	//
	//
	//-----------------------------------------------
	public function getTestPaper($where){
		$id         = $where[ 'id'         ];
		$testgrp_id = $where[ 'testgrp_id' ];
		$exam_id    = $where[ 'exam_id'    ];
		$type       = $where[ 'type'       ];
		$sql = "";
		$sql = " SELECT ";
		$sql .= " exam_date,start_time,exam_state";
		$sql .= " FROM ";
		$sql .= " t_testpaper ";
		$sql .= " WHERE ";
//		$sql .= " id=".$id." AND ";
		$sql .= " type = ".$type." AND ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " exam_id='".$exam_id."'";

		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	
	
	//-----------------------------------------------
	//情報変更
	//
	//
	//
	//
	//-----------------------------------------------
	
	public function editDetail($table,$edits,$wheres){
		foreach($edits as $k=>$v){
			$edit .= ",".$k."='".$v."'";
		}
		$edit = preg_replace("/^,/","",$edit);
		foreach($wheres as $k=>$v){
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
	//-----------------------------------------------
	//パートナー情報登録
	//
	//
	//
	//
	//-----------------------------------------------
	public function setDetail($table,$data){
		
		foreach($data as $key=>$val){
			$calum .= ",".$key;
			$value .= ",'".$val."'";
		}
		$calum = preg_replace("/^,/","",$calum);
		$value = preg_replace("/^,/","",$value);
		$sql = "";
		$sql = "INSERT INTO ".$table." (";
		$sql .= $calum;
		$sql .= ") VALUES (";
		$sql .= $value;
		$sql .= ")";
		$stmt = $this->db->prepare($sql);
                $r = $stmt->execute();
		if($r){
			return true;
		}else{
			return false;
		}
	}
	
	public function getTestId($where){
		$sql = "
				SELECT
					id,test_id
				FROM
					t_testpaper
				WHERE
					testgrp_id='".$where[ 'testgrp_id' ]."'
					AND exam_id = '".$where[ 'exam_id' ]."'
					AND type = '".$where[ 'type' ]."'
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
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

		
		$sql = "";
		$sql = " UPDATE ";
		$sql .= " t_testpaper ";
		$sql .= " SET ";
		$sql .= " exam_state = 1,";
		$sql .= " exam_date='".$date."',";
		$sql .= " start_time='".$time."',";
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
	public function setMeaSet($where){
		$sql = "
				SELECT 
					id
				FROM
					mea_member
				WHERE
					test_id = '".$where[ 'test_id' ]."'
					AND testgrp_id = '".$where[ 'testgrp_id' ]."'
					AND exam_id = '".$where[ 'exam_id' ]."'
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rlt){
			$sql = "
					UPDATE mea_member SET
						start_time = '".date('Y-m-d H:i:s')."'
					WHERE
						test_id = '".$where[ 'test_id' ]."'
						AND testgrp_id = '".$where[ 'testgrp_id' ]."'
						AND exam_id = '".$where[ 'exam_id' ]."'
					";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}else{
			$sql = "
					INSERT INTO 
						mea_member
						(
							test_id
							,testgrp_id
							,exam_id
							,start_time
						)VALUES(
							'".$where[ 'test_id' ]."'
							,'".$where[ 'testgrp_id' ]."'
							,'".$where[ 'exam_id' ]."'
							,'".date('Y-m-d H:i:s')."'
						)
				";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}
	}
	public function setTest($where){
		$sql = "
				SELECT 
					id
				FROM
					mea_member
				WHERE
					test_id = '".$where[ 'test_id' ]."'
					AND testgrp_id = '".$where[ 'testgrp_id' ]."'
					AND exam_id = '".$where[ 'exam_id' ]."'
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rlt){
			$sql = "
				INSERT INTO mea_result
					(
						mid
						,answer1
						,answer1_holiday
						,answer1_reason
						,answer2
						,answer2_year
						,answer2_month
						,answer2_disease
						,answer3
						,answer3_year
						,answer3_month
						,answer3_disease
						,answer4
						,answer4_disease
						,answer5
						,regist_ts
					)VALUES(
						'".$rlt[ 'id' ]."'
						,'".$where[ 'answer1' ]."'
						,'".$where[ 'answer1_holiday' ]."'
						,'".$where[ 'answer1_reason' ]."'
						,'".$where[ 'answer2' ]."'
						,'".$where[ 'answer2_year' ]."'
						,'".$where[ 'answer2_month' ]."'
						,'".$where[ 'answer2_disease' ]."'
						,'".$where[ 'answer3' ]."'
						,'".$where[ 'answer3_year' ]."'
						,'".$where[ 'answer3_month' ]."'
						,'".$where[ 'answer3_disease' ]."'
						,'".$where[ 'answer4' ]."'
						,'".$where[ 'answer4_disease' ]."'
						,'".$where[ 'answer5' ]."'
						,NOW()
					)
				";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
                
		}
		
	}
}


?>