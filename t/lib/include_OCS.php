<?PHP
class ocsmethod extends method{

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
		$sql .= " ocs_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO ocs_member ";
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
			$sql = " INSERT INTO ocs_sec ";
			$sql .= "(";
			$sql .= "ocs_id";
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
		$sql .= " ocs_member as m";
		$sql .= " INNER JOIN (SELECT * FROM ocs_sec ) as sec ON sec.ocs_id=m.id";
		$sql .= " WHERE ";
		$sql .= " m.testgrp_id=".$testgrp_id." AND ";
		$sql .= " m.test_id = ".$test_id." AND ";
		$sql .= " m.exam_id ='".$exam_id."'";

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
			$clum .= $key."='".$val."',";
		}
		
		$clum = preg_replace("/,$/","",$clum);
		$sql = "";
		$sql = "UPDATE ocs_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " ocs_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " ocs_member ";
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
		$sql .= " nl2_member as dm LEFT JOIN nl2_sec as ds ON dm.id=ds.mv_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);

		return array($rlt);
		
	}
	
	public function setResult($list,$iqid){
		
		$sql = "";
		$sql = "SELECT count(id) as cnt FROM iq_score ";
		$sql .= " WHERE ";
		$sql .= " iq_id=".$iqid." AND ";
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$lang_hen = $list[ 'lang' ];
		$math_hen = $list[ 'math' ];

		if(!$rst || $rst[ 'cnt' ] == 0){
			$sql = "";
			$sql = " INSERT INTO iq_score ";
			$sql .= "(";
			$sql .= " iq_id,language_score,math_score";
			$sql .= ")VALUES(";
			$sql .= $iqid.",".$lang_hen.",".$math_hen;
			$sql .= ")";
		}else{
			$sql = "";
			$sql = " UPDATE iq_score SET ";
			$sql .= "language_score = ".$lang_hen.",";
			$sql .= "math_score = ".$math_hen."";
			$sql .= " WHERE ";
			$sql .= " iq_id=".$iqid." AND ";
			$sql .= " 1=1 ";
		}
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
	

}


?>