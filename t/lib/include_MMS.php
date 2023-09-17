<?PHP
class MMSmethod extends method{
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
		$sql .= " mms_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO mms_member ";
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
			$sql = " INSERT INTO mms_score ";
			$sql .= "(";
			$sql .= "mms_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}
	}
	
	public function setMMSAns($table,$sec,$w){
		
		foreach($sec as $k=>$v){
			$edit .= ",".$k."='".$v."'";
		}
		$edit = preg_replace("/^,/","",$edit);
/*
		foreach($w as $k=>$v){
			$where .= $k."='".$v."' AND ";
		}
*/

		$testgrp_id = $w[ 'testgrp_id' ];
		$test_id    = $w[ 'test_id'    ];
		$exam_id    = $w[ 'exam_id'    ];

		$sql = "";
		$sql = " UPDATE ".$table." SET ";
		$sql .= $edit;
		$sql .= " WHERE ";
		$sql .= " mms_id=";
		$sql .= "(";
		$sql .= "SELECT id FROM mms_member WHERE test_id =".$test_id." 
				AND testgrp_id=".$testgrp_id." 
				AND exam_id ='".$exam_id."'";
		$sql .= ")";
                $stmt = $this->db->prepare($sql);
		$r = $stmt->execute();
		return $r;
		
	}
	public function getmms($where){
		
		
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		$sql = "";
		$sql .= " SELECT * FROM mms_score 
				WHERE ";
		$sql .= " mms_id=";
		$sql .= "(";
		$sql .= "SELECT id FROM mms_member WHERE test_id =".$test_id." 
				AND testgrp_id=".$testgrp_id." 
				AND exam_id ='".$exam_id."'";
		$sql .= ")";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	
	public function setResult($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		//�e�X�g�f�[�^�擾
		$ans = $this->getmms($where);
		$soten[1]  = $ans[ 'ans1'  ]+$ans[ 'ans2'  ]+$ans[ 'ans3'  ]+$ans[ 'ans4'  ]+$ans[ 'ans5'  ];
		$soten[2]  = $ans[ 'ans6'  ]+$ans[ 'ans7'  ]+$ans[ 'ans8'  ]+$ans[ 'ans9'  ]+$ans[ 'ans10' ];
		$soten[3]  = $ans[ 'ans11' ]+$ans[ 'ans12' ]+$ans[ 'ans13' ]+$ans[ 'ans14' ]+$ans[ 'ans15' ];
		$soten[4]  = $ans[ 'ans16' ]+$ans[ 'ans17' ]+$ans[ 'ans18' ]+$ans[ 'ans19' ]+$ans[ 'ans20' ];
		$soten[5]  = $ans[ 'ans21' ]+$ans[ 'ans22' ]+$ans[ 'ans23' ]+$ans[ 'ans24' ]+$ans[ 'ans25' ];
		$soten[6]  = $ans[ 'ans26' ]+$ans[ 'ans27' ]+$ans[ 'ans28' ]+$ans[ 'ans29' ]+$ans[ 'ans30' ];
		$soten[7]  = $ans[ 'ans31' ]+$ans[ 'ans32' ]+$ans[ 'ans33' ]+$ans[ 'ans34' ]+$ans[ 'ans35' ];
		$soten[8]  = $ans[ 'ans36' ]+$ans[ 'ans37' ]+$ans[ 'ans38' ]+$ans[ 'ans39' ]+$ans[ 'ans40' ];
		$soten[9]  = $ans[ 'ans41' ]+$ans[ 'ans42' ]+$ans[ 'ans43' ]+$ans[ 'ans44' ]+$ans[ 'ans45' ];
		$soten[10] = $ans[ 'ans46' ]+$ans[ 'ans47' ]+$ans[ 'ans48' ]+$ans[ 'ans49' ]+$ans[ 'ans50' ];
		
		$sql = "
				INSERT INTO mms_result 
					(
						mms_id
						,result1
						,result2
						,result3
						,result4
						,result5
						,result6
						,result7
						,result8
						,result9
						,result10
					)VALUES(
						(SELECT id FROM mms_member WHERE test_id =".$test_id." 
							AND testgrp_id=".$testgrp_id." 
							AND exam_id ='".$exam_id."')
						,".$soten[1]."
						,".$soten[2]."
						,".$soten[3]."
						,".$soten[4]."
						,".$soten[5]."
						,".$soten[6]."
						,".$soten[7]."
						,".$soten[8]."
						,".$soten[9]."
						,".$soten[10]."
					)
				";
                $stmt = $this->db->prepare($sql);
		$r = $stmt->execute();
		return $r;
		
	}
}


?>