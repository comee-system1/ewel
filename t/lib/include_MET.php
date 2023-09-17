<?PHP
class METmethod extends method{
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
		$sql .= " met_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO met_member ";
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
			$sql = " INSERT INTO met_sec ";
			$sql .= "(";
			$sql .= "met_id";
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
		$sql .= " met_member as mm";
		$sql .= " INNER JOIN (SELECT * FROM met_sec ) as sec ON sec.met_id=mm.id";
		$sql .= " WHERE ";
		$sql .= " mm.testgrp_id=".$testgrp_id." AND ";
		$sql .= " mm.test_id = ".$test_id." AND ";
		$sql .= " mm.exam_id ='".$exam_id."'";
		
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
		$sql = "UPDATE met_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " met_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " met_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$sql .= " )";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();

	}
	
/*
	public function getScore($where){
		$test_id = $where[ 'where' ][ 'test_id' ];
		$exam_id = $where[ 'where' ][ 'exam_id' ];

		$sql = "";
		$sql = "SELECT ";
		$sql .= " ds.* ";
		$sql .= " FROM ";
		$sql .= " nl_member as dm LEFT JOIN nl_sec as ds ON dm.id=ds.mv_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
		$r = mysql_query($sql);
		$rst = mysql_fetch_assoc($r);

		return array($rst);
		
	}
*/
	public function setResult($where,$hensa){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$std1       = $hensa[ '1' ];
		$std2       = $hensa[ '2' ];
		$std3       = $hensa[ '3' ];
		$std4       = $hensa[ '4' ];
		$std5       = $hensa[ '5' ];
		$std6       = $hensa[ '6' ];
		$std7       = $hensa[ '7' ];
		$std8       = $hensa[ '8' ];
		$std9       = $hensa[ '9' ];
		$std10      = $hensa[ '10' ];
		$std11      = $hensa[ '11' ];
		$std12      = $hensa[ '12' ];

		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " met_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";

                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

		if($row){
			$sql = "";
			$sql = "SELECT 
						id 
					FROM 
						met_score
					WHERE
						met_id=".$row['id']."
					";
                        
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        $row2 = $stmt->fetch(PDO::FETCH_ASSOC);

			if(!$row2){
				$sql = "";
				$sql = " INSERT INTO met_score ";
				$sql .= "(";
				$sql .= "met_id";
				$sql .= ",std1";
				$sql .= ",std2";
				$sql .= ",std3";
				$sql .= ",std4";
				$sql .= ",std5";
				$sql .= ",std6";
				$sql .= ",std7";
				$sql .= ",std8";
				$sql .= ",std9";
				$sql .= ",std10";
				$sql .= ",std11";
				$sql .= ",std12";
				$sql .= ")VALUES(";
				$sql .= $row[ 'id' ];
				$sql .= ",".$std1;
				$sql .= ",".$std2;
				$sql .= ",".$std3;
				$sql .= ",".$std4;
				$sql .= ",".$std5;
				$sql .= ",".$std6;
				$sql .= ",".$std7;
				$sql .= ",".$std8;
				$sql .= ",".$std9;
				$sql .= ",".$std10;
				$sql .= ",".$std11;
				$sql .= ",".$std12;
				$sql .= ")";
				$stmt = $this->db->prepare($sql);
                                $stmt->execute();
			}

		}

	}
}


?>