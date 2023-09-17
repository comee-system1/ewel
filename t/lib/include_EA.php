<?PHP
class EAmethod extends method{
	public function getTime($where){
		$test_id = $where[ 'testgrp_id' ];
		$type    = $where[ 'type'       ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " minute_rest,id,test_id ";
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
		$sql .= " dp_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO dp_member ";
			$sql .= "(";
			$sql .= "test_id,testgrp_id,exam_id,start_time";
			$sql .= ")VALUES(";
			$sql .= $test_id.",".$testgrp_id.",'".$exam_id."'";
			$sql .= ",'".$start_time."'";
			$sql .= ")";

			
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $id = $this->db->lastInsertId('id');
			
			$sql = "";
			$sql = " INSERT INTO dp_secA ";
			$sql .= "(";
			$sql .= "dp_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();

		}else{
			$clum = "";
			for($i=1;$i<=6;$i++){
				$clum .= ",sec".$i."='' ";
			}
			for($i=1;$i<=10;$i++){
				$clum .= ",secB".$i."='' ";
			}
			for($i=1;$i<=22;$i++){
				$clum .= ",secC".$i."='' ";
			}
			for($i=1;$i<=8;$i++){
				$clum .= ",secD".$i."='' ";
			}
			for($i=1;$i<=12;$i++){
				$clum .= ",secE".$i."='' ";
			}
			for($i=1;$i<=5;$i++){
				$clum .= ",secF".$i."='' ";
			}
			for($i=1;$i<=19;$i++){
				$clum .= ",secG".$i."='' ";
			}
			for($i=1;$i<=8;$i++){
				$clum .= ",secH".$i."='' ";
			}


			$clum = preg_replace("/^,/","",$clum);
			//����f�[�^�N���A
			$sql = "";
			$sql = "UPDATE ";
			$sql .= " dp_secA ";
			$sql .= " SET ";
			$sql .= $clum;

			$sql .= " WHERE ";
			$sql .= " dp_id=".$row[ 'id' ];
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
		$sql .= " dp_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM dp_secA ) as sec ON sec.dp_id=dm.id";
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
		$sql = "UPDATE dp_secA SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " dp_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " dp_member ";
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
		$sql .= " dp_member as dm LEFT JOIN dp_secA as ds ON dm.id=ds.dp_id";
		$sql .= " WHERE ";
		$sql .= " dm.test_id=".$test_id." AND ";
		$sql .= " dm.exam_id='".$exam_id."' AND ";
		$sql .= " 1=1 ";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);

                
		$dp_id = $rst[ 'dp_id' ];
		$i=1;
		foreach($rst as $k=>$v){
			if(preg_match("/^sec/",$k)){
				if(preg_match("/:/",$v)){
					$ex = explode(":",$v);
					foreach($ex as $key=>$val){
						$score[ $i ] = $val;
						$i++;
					}
				}else{
					$score[ $i ] = $v;
					$i++;
				}
				
			}
		}
		return array($score,$dp_id);
		
	}
	
	public function setResult($array,$dp_id){
		$sougo_hen = $array[ 'sougo'    ];
		$read_hen  = $array[ 'yomitori' ];
		$und_hen   = $array[ 'rikai'    ];
		$sel_hen   = $array[ 'sentaku'  ];
		$chg_hen   = $array[ 'kirikae'  ];
		$info_hen  = $array[ 'jyoho'    ];

		
		$sql = "";
		$sql = "SELECT * FROM dp_score ";
		$sql .= " WHERE ";
		$sql .= " dp_id = ".$dp_id." AND ";
		$sql .= " 1=1 ";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();

		if($row){
			$sql = "";
			$sql = "UPDATE dp_score SET ";
			$sql .= " sougo=".$sougo_hen.",";
			$sql .= " yomitori=".$read_hen.",";
			$sql .= " rikai=".$und_hen.",";
			$sql .= " sentaku=".$sel_hen.",";
			$sql .= " kirikae=".$chg_hen.",";
			$sql .= " jyoho=".$info_hen."";
			$sql .= " WHERE ";
			$sql .= " dp_id=".$dp_id." AND ";
			$sql .= " 1=1 ";

		}else{
			$sql = "";
			$sql = "INSERT INTO dp_score (";
			$sql .= "dp_id,sougo,yomitori,rikai,sentaku,kirikae,jyoho";
			$sql .= ")VALUES(";
			$sql .= $dp_id.",";
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