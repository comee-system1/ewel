<?PHP
class BAmethod extends method{

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
		for($i=1;$i<=36;$i++){
			$c .= "q".$i.",";
		}
		$sql = "";
		$sql = " SELECT ";
		$sql .= $c;
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
                        
		//$r = mysql_query($sql);
		//$rlt = mysql_fetch_assoc($r);
		return $rlt;
	}
	
	public function getWeight($where){
		$test_id = $where[ 'test_id' ];
		$type    = $where[ 'type'    ];
		
		$sql = "";
		$sql = "SELECT ";
		$sql .= " w1,w2,w3,w4,w5,w6,w7,w8,w9,w10 ";
		$sql .= " ,w11,w12,ave,sd ";
		$sql .= " FROM ";
		$sql .= " t_test ";
		$sql .= " WHERE ";
		$sql .= " type = ".$type." AND ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " 1=1 ";
                
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
		//print $sql;
		//print "<br />";
		$stmt = $this->db->prepare($sql);
                $r = $stmt->execute();
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
	


}


?>