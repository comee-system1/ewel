<?PHP
class EAB3method extends method{
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
		$sql .= " rs3_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO rs3_member ";
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
			$sql = " INSERT INTO rs3_secA ";
			$sql .= "(";
			$sql .= "rs_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        

		}else{
			$clum = "";
			for($i=1;$i<=143;$i++){
				$clum .= ",ans".$i."=''";
			}
			$clum = preg_replace("/^,/","",$clum);
			//����f�[�^�N���A
			$sql = "";
			$sql = "UPDATE ";
			$sql .= " rs3_secA ";
			$sql .= " SET ";
			$sql .= $clum;

			$sql .= " WHERE ";
			$sql .= " rs_id=".$row[ 'id' ];

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
		$sql .= " rs3_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM rs3_secA ) as sec ON sec.rs_id=dm.id";
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
			$clum .= $key."='".$val."',";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "";
		$sql = "UPDATE rs3_secA SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " rs_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " rs3_member ";
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
		$sql .= " rs3_member as dm LEFT JOIN rs3_secA as ds ON dm.id=ds.rs_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);

		$dp_id = $rst[ 'rs_id' ];

		return array($rst,$dp_id);
		
	}
	
	public function setResult($array,$rs_id){
		$sougo_hen = $array[ 'sougo'    ];
		$read_hen  = $array[ 'yomitori' ];
		$und_hen   = $array[ 'rikai'    ];
		$sel_hen   = $array[ 'sentaku'  ];
		$chg_hen   = $array[ 'kirikae'  ];
		$info_hen  = $array[ 'jyoho'    ];

		
		$sql = "";
		$sql = "SELECT * FROM rs3_score ";
		$sql .= " WHERE ";
		$sql .= " rs_id = ".$rs_id." AND ";
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();
                
		if($row){
			$sql = "";
			$sql = "UPDATE rs3_score SET ";
			$sql .= " sougo=".$sougo_hen.",";
			$sql .= " yomitori=".$read_hen.",";
			$sql .= " rikai=".$und_hen.",";
			$sql .= " sentaku=".$sel_hen.",";
			$sql .= " kirikae=".$chg_hen.",";
			$sql .= " jyoho=".$info_hen."";
			$sql .= " WHERE ";
			$sql .= " rs_id=".$rs_id." AND ";
			$sql .= " 1=1 ";

		}else{
			$sql = "";
			$sql = "INSERT INTO rs3_score (";
			$sql .= "rs_id,sougo,yomitori,rikai,sentaku,kirikae,jyoho";
			$sql .= ")VALUES(";
			$sql .= $rs_id.",";
			$sql .= $sougo_hen.",";
			$sql .= $read_hen.",";
			$sql .= $und_hen.",";
			$sql .= $sel_hen.",";
			$sql .= $chg_hen.",";
			$sql .= $info_hen."";
			
			$sql .= ")";
		}
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
}


?>