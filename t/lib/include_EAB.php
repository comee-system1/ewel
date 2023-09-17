<?PHP
class EABmethod extends method{
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
		$sql .= " rs_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO rs_member ";
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
			$sql = " INSERT INTO rs_secA ";
			$sql .= "(";
			$sql .= "rs_id";
			$sql .= ")VALUES(";
			$sql .= $id;
			$sql .= ")";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();

		}else{
			$clum = "";

			$clum .= "secA1='',";
			$clum .= "secA2a='',";
			$clum .= "secA2b='',";
			$clum .= "secA2c='',";
			$clum .= "secA2d='',";
			$clum .= "secA2e='',";
			$clum .= "secA2f='',";
			$clum .= "secA2g='',";
			$clum .= "secA3a='',";
			$clum .= "secA3b='',";
			$clum .= "secA3c='',";
			$clum .= "secA3d='',";
			$clum .= "secA3e='',";
			$clum .= "secA3f='',";
			$clum .= "secA3g='',";
			$clum .= "secB1a='',";
			$clum .= "secB1b='',";
			$clum .= "secB1c='',";
			$clum .= "secB2a='',";
			$clum .= "secB2b='',";
			$clum .= "secB2c='',";
			$clum .= "secB3a='',";
			$clum .= "secB3b='',";
			$clum .= "secB3c='',";
			$clum .= "secB4a='',";
			$clum .= "secB4b='',";
			$clum .= "secB4c='',";
			$clum .= "secB5a='',";
			$clum .= "secB5b='',";
			$clum .= "secB5c='',";
			$clum .= "secB6a='',";
			$clum .= "secB6b='',";
			$clum .= "secB6c='',";
			$clum .= "secC1='',";
			$clum .= "secC2='',";
			$clum .= "secC3='',";
			$clum .= "secC4='',";
			$clum .= "secC5='',";
			$clum .= "secC6='',";
			$clum .= "secC7='',";
			$clum .= "secC8='',";
			$clum .= "secC9='',";
			$clum .= "secC10='',";
			$clum .= "secC11='',";
			$clum .= "secC12='',";
			$clum .= "secC13='',";
			$clum .= "secC14='',";
			$clum .= "secC15='',";
			$clum .= "secD1_1='',";
			$clum .= "secD1_2='',";
			$clum .= "secD2_1='',";
			$clum .= "secD2_2='',";
			$clum .= "secD3_1='',";
			$clum .= "secD3_2='',";
			$clum .= "secD4_1='',";
			$clum .= "secD4_2='',";
			$clum .= "secD4_3='',";
			$clum .= "secD5_1='',";
			$clum .= "secD5_2='',";
			$clum .= "secD5_3='',";
			$clum .= "secD5_4='',";
			$clum .= "secD6_1='',";
			$clum .= "secD6_2='',";
			$clum .= "secH1A='',";
			$clum .= "secH1B='',";
			$clum .= "secH1C='',";
			$clum .= "secH2A='',";
			$clum .= "secH2B='',";
			$clum .= "secH2C='',";
			$clum .= "secH3A='',";
			$clum .= "secH3B='',";
			$clum .= "secH3C='',";
			$clum .= "secH4A='',";
			$clum .= "secH4B='',";
			$clum .= "secH4C='',";
			$clum .= "secH5A='',";
			$clum .= "secH5B='',";
			$clum .= "secH5C='',";
			$clum .= "secH6A='',";
			$clum .= "secH6B='',";
			$clum .= "secH6C='',";
			$clum .= "secH7A='',";
			$clum .= "secH7B='',";
			$clum .= "secH7C='',";
			$clum .= "secG1a='',";
			$clum .= "secG1b='',";
			$clum .= "secG1c='',";
			$clum .= "secG2a='',";
			$clum .= "secG2b='',";
			$clum .= "secG2c='',";
			$clum .= "secG3a='',";
			$clum .= "secG3b='',";
			$clum .= "secG3c='',";
			$clum .= "secG4a='',";
			$clum .= "secG4b='',";
			$clum .= "secG4c='',";
			$clum .= "secG5a='',";
			$clum .= "secG5b='',";
			$clum .= "secG5c='',";
			$clum .= "secF1='',";
			$clum .= "secF2='',";
			$clum .= "secF3='',";
			$clum .= "secF4='',";
			$clum .= "secF5='',";
			$clum .= "secF6='',";
			$clum .= "secF7='',";
			$clum .= "secF8='',";
			$clum .= "secF9='',";
			$clum .= "secF10='',";
			$clum .= "secF11='',";
			$clum .= "secF12='',";
			$clum .= "secF13='',";
			$clum .= "secF14='',";
			$clum .= "secE1_1='',";
			$clum .= "secE1_2='',";
			$clum .= "secE2_1='',";
			$clum .= "secE2_2='',";
			$clum .= "secE3_1='',";
			$clum .= "secE3_2='',";
			$clum .= "secE4_1='',";
			$clum .= "secE4_2='',";
			$clum .= "secE4_3='',";
			$clum .= "secE5_1='',";
			$clum .= "secE5_2='',";
			$clum .= "secE5_3='',";
			$clum .= "secE6_1='',";
			$clum .= "secE6_2='',";
			$clum .= "secE6_3='',";
			$clum .= "secI1_1='',";
			$clum .= "secI1_2='',";
			$clum .= "secI1_3='',";
			$clum .= "secI1_4='',";
			$clum .= "secI1_5='',";
			$clum .= "secI2_1='',";
			$clum .= "secI2_2='',";
			$clum .= "secI2_3='',";
			$clum .= "secI2_4='',";
			$clum .= "secI2_5='',";
			$clum .= "secI3_1='',";
			$clum .= "secI3_2='',";
			$clum .= "secI3_3='',";
			$clum .= "secI3_4='',";
			$clum .= "secI3_5='',";
			$clum .= "secI4_1='',";
			$clum .= "secI4_2='',";
			$clum .= "secI4_3='',";
			$clum .= "secI4_4='',";
			$clum .= "secI4_5='',";
			$clum .= "secI5_1='',";
			$clum .= "secI5_2='',";
			$clum .= "secI5_3=''";


			$clum = preg_replace("/^,/","",$clum);
			//����f�[�^�N���A
			$sql = "";
			$sql = "UPDATE ";
			$sql .= " rs_secA ";
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
		$sql .= " rs_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM rs_secA ) as sec ON sec.rs_id=dm.id";
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
		$sql = "UPDATE rs_secA SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " rs_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " rs_member ";
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
		$sql .= " rs_member as dm LEFT JOIN rs_secA as ds ON dm.id=ds.rs_id";
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
		$sql = "SELECT * FROM rs_score ";
		$sql .= " WHERE ";
		$sql .= " rs_id = ".$rs_id." AND ";
		$sql .= " 1=1 ";

                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->rowCount(); 

		if($row){
			$sql = "";
			$sql = "UPDATE rs_score SET ";
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
			$sql = "INSERT INTO rs_score (";
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