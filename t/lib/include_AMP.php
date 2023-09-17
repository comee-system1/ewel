<?PHP
class AMPmethod extends method{

	public function setStarttime($where){

		if($_REQUEST[ 'page' ]){
			$sql = " SELECT * FROM amp WHERE testpaper_id = (SELECT id FROM t_testpaper WHERE testgrp_id=:testgrp_id AND exam_id=:exam_id AND type=:type) order by id desc limit 1 ";
			$stmt = $this->db->prepare($sql);
			$stmt->bindValue(':testgrp_id', $where[ 'testgrp_id' ], PDO::PARAM_INT);
			$stmt->bindValue(':exam_id', $where[ 'exam_id' ], PDO::PARAM_STR);
			$stmt->bindValue(':type', $where[ 'type' ], PDO::PARAM_INT);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if($row){
				$sql = "
					UPDATE amp SET starttime = :starttime WHERE testpaper_id = (SELECT id FROM t_testpaper WHERE testgrp_id=:testgrp_id AND exam_id=:exam_id AND type=:type)
				";
				$stmt = $this->db->prepare($sql);

				$date = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
						,date('Y')
						,date('m')
						,date('d')
						,date('H')
						,date('i')
						,date('s')
					);
				$stmt->bindValue(':starttime', $date, PDO::PARAM_STR);
				$stmt->bindValue(':testgrp_id', $where[ 'testgrp_id' ], PDO::PARAM_INT);
				$stmt->bindValue(':exam_id', $where[ 'exam_id' ], PDO::PARAM_STR);
				$stmt->bindValue(':type', $where[ 'type' ], PDO::PARAM_INT);
				$stmt->execute();
			}else{
				$sql = "INSERT INTO amp(
					testpaper_id
					,starttime
					,regist_ts
				) VALUES ( 
					(SELECT id FROM t_testpaper WHERE testgrp_id=:testgrp_id AND exam_id=:exam_id AND type=:type)
					,:starttime
					,:regist_ts
				)";

				$stmt = $this->db->prepare($sql);
				$date = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
						,date('Y')
						,date('m')
						,date('d')
						,date('H')
						,date('i')
						,date('s')
					);
				$stmt->bindValue(':testgrp_id', $where[ 'testgrp_id' ], PDO::PARAM_INT);
				$stmt->bindValue(':exam_id', $where[ 'exam_id' ], PDO::PARAM_STR);
				$stmt->bindValue(':type', $where[ 'type' ], PDO::PARAM_INT);
				$stmt->bindValue(':starttime', $date, PDO::PARAM_STR);
				$stmt->bindValue(':regist_ts', $date, PDO::PARAM_STR);
				$stmt->execute();
			}
		}

		$sql = " SELECT * FROM amp WHERE testpaper_id = (SELECT id FROM t_testpaper WHERE testgrp_id=:testgrp_id AND exam_id=:exam_id AND type=:type) order by id desc limit 1 ";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':testgrp_id', $where[ 'testgrp_id' ], PDO::PARAM_INT);
		$stmt->bindValue(':exam_id', $where[ 'exam_id' ], PDO::PARAM_STR);
		$stmt->bindValue(':type', $where[ 'type' ], PDO::PARAM_INT);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if($row){
			return $row;
		}
	}

	public function setAMP($where){
		$sql = "
			UPDATE amp SET 
		";
		$clum = [];
		if(count($_REQUEST[ 'q' ])){
			foreach($_REQUEST[ 'q' ] as $key=>$value){
				if($key == "q2"){
					$imp = implode(",",$value);
					$clum[] = $key."='".$imp."'";
					
				}else{
					$clum[] = $key."=".$value;
				}
			}
		}
		$imp = implode(",",$clum);
		$sql .= $imp;
		$sql .= " WHERE 
			id=:id
		";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':id', $where[ 'id' ], PDO::PARAM_INT);
		$stmt->execute();
	}

	public function setAMPAns($where,$set){

		$clum = "";
		$v = "";
		foreach($set as $key=>$value){
			foreach($value as $k=>$val){
				$clum .= ",".$key.$k;
				$v .= ",:".$key.$k;
			}
		}
		$clum = preg_replace("/$,/","",$clum);
		$v = preg_replace("/$,/","",$v);
		$sql = "INSERT INTO amp_ans(
			amp_id
			".$clum."
		) VALUES ( 
			:amp_id
			".$v."
		)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':amp_id', $where[ 'id' ], PDO::PARAM_STR);
		foreach($set as $key=>$value){
			foreach($value as $k=>$val){
				$c = ':'.$key.$k;
				$stmt->bindValue($c,$val, PDO::PARAM_STR);
			}
		}
		$stmt->execute();
	}




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

}


?>