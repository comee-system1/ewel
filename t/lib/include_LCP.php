<?PHP
class LCPmethod extends method{
	public function getTime($where){
		$test_id = $where[ 'testgrp_id' ];
		$type    = $where[ 'type'       ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " minute_rest,id,test_id ";
		$sql .= " ,rsei_type ";
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
	public function setEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$start_time = date('Y-m-d H:i:s');
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " lcp_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!$row){
			$sql = "";
			$sql = " INSERT INTO lcp_member ";
			$sql .= "(";
			$sql .= "test_id,testgrp_id,exam_id,start_time";
			$sql .= ")VALUES(";
			$sql .= $test_id.",".$testgrp_id.",'".$exam_id."'";
			$sql .= ",'".$start_time."'";
			$sql .= ")";
                        
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        $id = $this->db->lastInsertId('id');
                        
			$sql = "";
			$sql = " INSERT INTO lcp_sec ";
			$sql .= "(";
			$sql .= "lcp_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();

		}
	}
	
	public function getEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		$sql = "";
		$sql = "SELECT ";
		$sql .= " sec.* ";
		$sql .= " FROM ";
		$sql .= " lcp_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM lcp_sec ) as sec ON sec.lcp_id=dm.id";
		$sql .= " WHERE ";
		$sql .= " dm.testgrp_id=".$testgrp_id." AND ";
		$sql .= " dm.test_id = ".$test_id." AND ";
		$sql .= " dm.exam_id ='".$exam_id."'";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);

		return $rlt;
	}
	
	public function setEaRst($set,$where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		foreach($set as $key=>$val){
			$clum .= $key."=".$val.",";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "";
		$sql = "UPDATE lcp_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " lcp_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " lcp_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$sql .= " )";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
	
	public function getScore($where){
		$test_id = $where[ 'where' ][ 'test_id' ];
		$exam_id = $where[ 'where' ][ 'exam_id' ];

		$sql = "";
		$sql = "SELECT ";
		$sql .= " ds.* ";
		$sql .= " FROM ";
		$sql .= " lcp_member as dm LEFT JOIN lcp_sec as ds ON dm.id=ds.lcp_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return array($rst);
		
	}
	
	public function setResult($array,$lcp_id){


		
		$sql = "";
		$sql = "SELECT * FROM lcp_score ";
		$sql .= " WHERE ";
		$sql .= " lcp_id = ".$lcp_id." AND ";
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$row = $stmt->rowCount();
		if($row){
			foreach($array as $key=>$val){
				$calum .= ",score".$key."=".$val;
			}
			$calum = preg_replace("/^,/","",$calum);
			$sql = "";
			$sql = "UPDATE lcp_score SET ";
			$sql .= $calum;
			
			$sql .= " WHERE ";
			$sql .= " lcp_id=".$lcp_id." AND ";
			$sql .= " 1=1 ";

		}else{
			$sql = "";
			$sql = "INSERT INTO lcp_score (";
			$sql .= "lcp_id";
			foreach($array as $key=>$val){
				$sql .= ",score".$key;
			}
			$sql .= ")VALUES(";
			$sql .= $lcp_id."";
			foreach($array as $key=>$val){
				$sql .= ",".$val;
			}
			$sql .= ")";
		}
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
}


?>