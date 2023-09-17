<?PHP
class BSAmethod extends method{
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
		$sql .= " bsa_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO bsa_member ";
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
			$sql = " INSERT INTO bsa_sec ";
			$sql .= "(";
			$sql .= "mv_id";
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
		$sql .= " bsa_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM bsa_sec ) as sec ON sec.mv_id=dm.id";
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
		$sql = "UPDATE bsa_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " mv_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " bsa_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$sql .= " )";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();

	}
	public function sethensa($data,$where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$sql = "SELECT id FROM bsa_member 
				WHERE
					test_id = '".$test_id."'
					AND testgrp_id = '".$testgrp_id."'
					AND exam_id = '".$exam_id."'
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		$id = $rlt[ 'id' ];
		$sql = "SELECT COUNT(id) as cnt FROM bsa_score 
				WHERE
				mv_id = '".$id."'
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt2 = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rlt2[ 'cnt' ] == 0){
			$sql = "
					INSERT INTO bsa_score (
						mv_id
						,score1
						,score2
						,score3
						,score4
						,score5
						,score6
						,score7
						,score8
						,score9
						,score10
						,regist_ts
					)VALUES(
						".$id."
						,".$data[1]."
						,".$data[2]."
						,".$data[3]."
						,".$data[4]."
						,".$data[5]."
						,".$data[6]."
						,".$data[7]."
						,".$data[8]."
						,".$data[9]."
						,".$data[10]."
						,NOW()
					)
				";
		}else{
			$sql = "UPDATE bsa_score SET 
					score1 = ".$data[1]."
					,score2 = ".$data[2]."
					,score3 = ".$data[3]."
					,score4 = ".$data[4]."
					,score5 = ".$data[5]."
					,score6 = ".$data[6]."
					,score7 = ".$data[7]."
					,score8 = ".$data[8]."
					,score9 = ".$data[9]."
					,score10 = ".$data[10]."
					WHERE
						mv_id = '".$id."'
					";
		}
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
		$sql .= " mv_member as dm LEFT JOIN mv_sec as ds ON dm.id=ds.mv_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
		$r = mysql_query($sql);
		$rst = mysql_fetch_assoc($r);

		return array($rst);
		
	}
	
	public function setResult($array,$mv_id){


		
		$sql = "";
		$sql = "SELECT * FROM mv_score ";
		$sql .= " WHERE ";
		$sql .= " mv_id = ".$mv_id." AND ";
		$sql .= " 1=1 ";
		$r = mysql_query($sql);
		$row = mysql_num_rows($r);

		if($row){
			foreach($array as $key=>$val){
				$calum .= ",score".$key."=".$val;
			}
			$calum = preg_replace("/^,/","",$calum);
			$sql = "";
			$sql = "UPDATE mv_score SET ";
			$sql .= $calum;
			
			$sql .= " WHERE ";
			$sql .= " mv_id=".$mv_id." AND ";
			$sql .= " 1=1 ";

		}else{
			$sql = "";
			$sql = "INSERT INTO mv_score (";
			$sql .= "mv_id";
			foreach($array as $key=>$val){
				$sql .= ",score".$key;
			}
			$sql .= ")VALUES(";
			$sql .= $mv_id."";
			foreach($array as $key=>$val){
				$sql .= ",".$val;
			}
			$sql .= ")";
		}
		mysql_query($sql);
		
	}
*/
}


?>