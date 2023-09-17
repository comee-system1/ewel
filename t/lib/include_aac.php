<?PHP
class aacmethod extends method{
        public function setAnswerDataCalc($answer,$ave,$hensa){
            $aac_id = $answer[ 'aac_id' ];
            $soten1 = $answer[ 'ans103' ]+ $answer[ 'ans116' ]+ $answer[ 'ans129' ];
            $soten2 = $answer[ 'ans104' ]+ $answer[ 'ans117' ]+ $answer[ 'ans130' ];
            $soten3 = $answer[ 'ans105' ]+ $answer[ 'ans118' ]+ $answer[ 'ans131' ];
            $soten4 = $answer[ 'ans106' ]+ $answer[ 'ans119' ]+ $answer[ 'ans132' ];
            $soten5 = $answer[ 'ans107' ]+ $answer[ 'ans120' ]+ $answer[ 'ans133' ];
            $soten6 = $answer[ 'ans108' ]+ $answer[ 'ans121' ]+ $answer[ 'ans134' ];
            $soten7 = $answer[ 'ans109' ]+ $answer[ 'ans122' ]+ $answer[ 'ans135' ];
            $soten8 = $answer[ 'ans110' ]+ $answer[ 'ans123' ]+ $answer[ 'ans136' ];
            $soten9 = $answer[ 'ans111' ]+ $answer[ 'ans124' ]+ $answer[ 'ans137' ];
            $soten10 = $answer[ 'ans112' ]+ $answer[ 'ans125' ]+ $answer[ 'ans138' ];
            $soten11 = $answer[ 'ans113' ]+ $answer[ 'ans126' ]+ $answer[ 'ans139' ];
            $soten12 = $answer[ 'ans114' ]+ $answer[ 'ans127' ]+ $answer[ 'ans140' ];
            $soten13 = $answer[ 'ans115' ]+ $answer[ 'ans128' ]+ $answer[ 'ans141' ];
            
            $dev1 = $this->getCalc($soten1,$ave[0],$hensa[0]);
            $dev2 = $this->getCalc($soten2,$ave[1],$hensa[1]);
            $dev3 = $this->getCalc($soten3,$ave[2],$hensa[2]);
            $dev4 = $this->getCalc($soten4,$ave[3],$hensa[3]);
            $dev5 = $this->getCalc($soten5,$ave[4],$hensa[4]);
            $dev6 = $this->getCalc($soten6,$ave[5],$hensa[5]);
            $dev7 = $this->getCalc($soten7,$ave[6],$hensa[6]);
            $dev8 = $this->getCalc($soten8,$ave[7],$hensa[7]);
            $dev9 = $this->getCalc($soten9,$ave[8],$hensa[8]);
            $dev10 = $this->getCalc($soten10,$ave[9],$hensa[9]);
            $dev11 = $this->getCalc($soten11,$ave[10],$hensa[10]);
            $dev12 = $this->getCalc($soten12,$ave[11],$hensa[11]);
            $dev13 = $this->getCalc($soten13,$ave[12],$hensa[12]);
            
            $sql = "INSERT INTO acc_result ("
                    . "acc_id"
                    . ",soten1"
                    . ",soten2"
                    . ",soten3"
                    . ",soten4"
                    . ",soten5"
                    . ",soten6"
                    . ",soten7"
                    . ",soten8"
                    . ",soten9"
                    . ",soten10"
                    . ",soten11"
                    . ",soten12"
                    . ",soten13"
                    . ",dev1"
                    . ",dev2"
                    . ",dev3"
                    . ",dev4"
                    . ",dev5"
                    . ",dev6"
                    . ",dev7"
                    . ",dev8"
                    . ",dev9"
                    . ",dev10"
                    . ",dev11"
                    . ",dev12"
                    . ",dev13"
                    . ")VALUES("
                    . "'".$aac_id."'"
                    . ",'".$soten1."'"
                    . ",'".$soten2."'"
                    . ",'".$soten3."'"
                    . ",'".$soten4."'"
                    . ",'".$soten5."'"
                    . ",'".$soten6."'"
                    . ",'".$soten7."'"
                    . ",'".$soten8."'"
                    . ",'".$soten9."'"
                    . ",'".$soten10."'"
                    . ",'".$soten11."'"
                    . ",'".$soten12."'"
                    . ",'".$soten13."'"
                    . ",'".$dev1."'"
                    . ",'".$dev2."'"
                    . ",'".$dev3."'"
                    . ",'".$dev4."'"
                    . ",'".$dev5."'"
                    . ",'".$dev6."'"
                    . ",'".$dev7."'"
                    . ",'".$dev8."'"
                    . ",'".$dev9."'"
                    . ",'".$dev10."'"
                    . ",'".$dev11."'"
                    . ",'".$dev12."'"
                    . ",'".$dev13."'"
                    . ")";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        private function getCalc($s,$a,$h){
            $rst = (((($s-$a))/$h)*10)+50;
            return $rst;
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
	public function setEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$start_time = date('Y-m-d H:i:s');
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id,counter ";
		$sql .= " FROM ";
		$sql .= " aac_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $counter = $row[ 'counter' ]+1;
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO aac_member ";
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
			$sql = " INSERT INTO aac_sec ";
			$sql .= "(";
			$sql .= "aac_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        

		}else{
                        $sql = " UPDATE aac_member SET "
                                . " counter = ".$counter.""
                                . " WHERE "
                                . " id=".$row[ 'id' ];
                        
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
			$aclum = array();
			for($i=1;$i<=141;$i++){
				$aclum[] = "ans".$i."=''";
			}
                        $clum = implode(",", $aclum);
			//初回データクリア
			$sql = "UPDATE ";
			$sql .= " aac_sec ";
			$sql .= " SET ";
			$sql .= $clum;
			$sql .= " WHERE ";
			$sql .= " aac_id=".$row[ 'id' ];

			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}
	}
	
	public function getEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		$sql = " SELECT ";
		$sql .= " sec.* ";
		$sql .= " FROM ";
		$sql .= " aac_member as dm";
		$sql .= " INNER JOIN  aac_sec  as sec ON sec.aac_id=dm.id";
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
                if(count($set) == 0 ) return false;
		foreach($set as $key=>$val){
			$clum .= "ans".$key."='".$val."',";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "UPDATE aac_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " aac_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " aac_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$sql .= " )";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
	

	
	public function setResult($array,$rs_id){
		$sougo_hen = $array[ 'sougo'    ];
		$read_hen  = $array[ 'yomitori' ];
		$und_hen   = $array[ 'rikai'    ];
		$sel_hen   = $array[ 'sentaku'  ];
		$chg_hen   = $array[ 'kirikae'  ];
		$info_hen  = $array[ 'jyoho'    ];

		
		$sql = "";
		$sql = "SELECT * FROM rs2_score ";
		$sql .= " WHERE ";
		$sql .= " rs_id = ".$rs_id." AND ";
		$sql .= " 1=1 ";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount();
		if($row){
			$sql = "";
			$sql = "UPDATE rs2_score SET ";
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
			$sql = "INSERT INTO rs2_score (";
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