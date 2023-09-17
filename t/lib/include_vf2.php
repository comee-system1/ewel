<?PHP
class VF2method extends method{

	public function getTests($where){
		$dir     = $where[ 'dir'     ];
		$type    = $where[ 'type'    ];
		$test_id = $where[ 'test_id' ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " vf4_object,id,test_id ";
		$sql .= " FROM ";
		$sql .= " t_test ";
		$sql .= " WHERE ";
		$sql .= " dir = '".$dir."' AND ";
		$sql .= " type=".$type." AND ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " 1=1 ";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	
	//vf2_member����o�^
	//������Γo�^
	public function setStartVF($where){
		$test_id = $where[ 'test_id' ];
		$exam_id = $where[ 'exam_id' ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " vf2_member ";
		$sql .= " WHERE ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " exam_id='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();
		//�f�[�^���������ɓo�^
		if(!$row){
			$sql = "";
			$sql = "INSERT INTO vf2_member ";
			$sql .= " ( ";
			$sql .= " test_id,exam_id";
			$sql .= ")VALUES(";
			$sql .= "'".$test_id."','".$exam_id."'";
			$sql .= " ) ";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        
			$id = $this->db->lastInsertId('id');
			$sql = " INSERT INTO vf2_result ";
			$sql .= "(";
			$sql .= " mem_id,test_id ";
			$sql .= " )VALUES(";
			$sql .= $id.",".$test_id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
			
		}
	}
	
	public function getVf4Member($where){
		$test_id = $where[ 'test_id' ];
		$exam_id = $where[ 'exam_id' ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " vf2_member ";
		$sql .= " WHERE ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " exam_id='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $row;
		
	}
	
	public function getVfResult($where){
		$mem_id  = $where[ 'mem_id'  ];
		$test_id = $where[ 'test_id' ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " * ";
		$sql .= " FROM ";
		$sql .= " vf2_result ";
		$sql .= " WHERE ";
		$sql .= " mem_id=".$mem_id." AND ";
		$sql .= " test_id='".$test_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $row;
		
	}
	
	
	public function setVfWeight($wt,$set,$avg){
		$r_id    = $set[ 'r_id'    ];
		$test_id = $set[ 'test_id' ];
		$table = "vf2_weight";
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " ".$table." ";
		$sql .= " WHERE ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " r_id='".$r_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount(); 
		if(!$row){
			$sets = array();
			$sets[ 'r_id'    ] = $r_id;
			$sets[ 'test_id' ] = $test_id;
			$sets[ 'avg'     ] = $avg[ 'avg' ];
			$sets[ 'std'     ] = $avg[ 'std' ];
			foreach($wt as $key=>$val){
				$w = "w".$key;
				$sets[$w]=$val;
			}
			foreach($avg[ 'top6' ] as $key=>$val){
				$sets[ "dev".$key ] = $val;
			}

			$this->setUserData($table,$sets);
		}else{
			$data = array();
			$data[ 'where' ][ 'r_id'    ] = $r_id;
			$data[ 'where' ][ 'test_id' ] = $test_id;
			$data[ 'edit' ][ 'avg'     ] = $avg[ 'avg' ];
			$data[ 'edit' ][ 'std'     ] = $avg[ 'std' ];
			foreach($avg[ 'top6' ] as $key=>$val){
				$data[ 'edit' ][ "dev".$key ] = $val;
			}

			foreach($wt as $key=>$val){
				$w = "w".$key;
				$data[ 'edit' ][$w]=$val;
			}
			$this->editUserData($table,$data);
		}
	}


	public function getPublicSetData($weight){
		//�擾����L�[�̍쐬
		foreach($weight as $key=>$val){
			$clum .= ",(dev".$key."*".$val.") as dev".$key;
			$plus .= "+dev".$key;
		}
		$plus = preg_replace("/^\+/","",$plus);

		$clum = preg_replace("/^,/","",$clum);
		$sql = "SELECT
				(".$plus.") as sum
				FROM 
				(SELECT 
					".$clum."
				FROM
				popular ) as a
				";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$i=0;
		while($rst = $stmt->fetch(PDO::FETCH_ASSOC) ){
			$list[$i] = $rst[ 'sum' ];
			$i++;
		}
		
		$avg = round($this->average($list),2);
		$std = round($this->standard_deviation($list),4);
		$return[ 'avg' ] = $avg;
		$return[ 'std' ] = $std;
		return $return;
	}
    /*
     * ���ϒl�����߂�
     */
    public static function average(array $values)
    {
        return (float) (array_sum($values) / count($values));
    }
    /*
     * ���U�����߂�
     * ���U ���i�i�f�[�^�|���ϒl�j�̂Q��j�̑��a �� ��
     */
    public static function variance(array $values)
    {
        // ���ϒl�����߂�
        $ave = self::average($values);

        $variance = 0.0;
        foreach ($values as $val) {
            $variance += pow($val - $ave, 2);
        }
        return (float) ($variance / count($values)-1);
    }

    /*
     * �W���΍������߂�
     */
    public static function standard_deviation(array $values)
    {
        // ���U�����߂�
        $variance = self::variance($values);

        // ���U�̕�����
        return (float) sqrt($variance);
    }

}


?>