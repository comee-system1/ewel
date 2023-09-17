<?PHP
class mathmethod extends method{
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
		$sql .= " math2_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
		if(!$row){
			$sql = "";
			$sql = " INSERT INTO math2_member ";
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
			$sql = " INSERT INTO math2_sec ";
			$sql .= "(";
			$sql .= "math_id";
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
		$sql .= " math2_member as m";
		$sql .= " INNER JOIN (SELECT * FROM math2_sec ) as sec ON sec.math_id=m.id";
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
			$clum .= $key."=".$val.",";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "";
		$sql = "UPDATE math2_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " math_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " math2_member ";
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
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);


		return array($rst);
		
	}
	
	public function setResult($list,$mathid){
		
		$sql = "";
		$sql = "SELECT count(id) as cnt FROM math2_score ";
		$sql .= " WHERE ";
		$sql .= " math_id=".$mathid." AND ";
		$sql .= " 1=1 ";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rst = $stmt->fetch(PDO::FETCH_ASSOC);

		$haku_soten    = $list[ 'haku'       ];
		$bunseki_soten = $list[ 'bunseki'    ];
		$sentaku_soten = $list[ 'sentaku'    ];
		$yosoku_soten  = $list[ 'yosoku'     ];
		$hyogen_soten  = $list[ 'hyogen'     ];
		$sogo          = $list[ 'sogo'       ];
		$sogo_score    = $list[ 'sogo_score' ];
		$level         = $list[ 'level'      ];

		
		if(!$rst || $rst[ 'cnt' ] == 0){
			$sql = "";
			$sql = " INSERT INTO math2_score ";
			$sql .= "(";
			$sql .= " math_id,haku_yoso,bunseki_yoso,sentaku_yoso,yosoku_yoso,hyogen_yoso";
			$sql .= ",sogo_yoso,sogo_score,level,regist_ts";
			$sql .= ")VALUES(";
			$sql .= $mathid.",".$haku_soten.",".$bunseki_soten.",".$sentaku_soten.",".$yosoku_soten.",".$hyogen_soten;
			$sql .= ",".$sogo.",".$sogo_score.",".$level;
			$sql .= ",NOW()";
			$sql .= ")";
		}else{
			$sql = "";
			$sql = " UPDATE math2_score SET ";
			$sql .= " haku_yoso=".$haku_soten;
			$sql .= " ,bunseki_yoso=".$bunseki_soten;
			$sql .= " ,sentaku_yoso=".$sentaku_soten;
			$sql .= " ,yosoku_yoso=".$yosoku_soten;
			$sql .= " ,hyogen_yoso=".$hyogen_soten;
			$sql .= " ,sogo_yoso=".$sogo;
			$sql .= " ,sogo_score=".$sogo_score;
			$sql .= " ,level=".$level;

			$sql .= " ,regist_ts = NOW()";
			$sql .= " WHERE ";
			$sql .= " math_id=".$mathid." AND ";
			$sql .= " 1=1 ";
		}
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
	}
	
	public function getTestStatus($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$id         = $where[ 'id'         ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " exam_state ";
		$sql .= " FROM ";
		$sql .= " t_testpaper ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'  ";
	//	$sql .= " id = ".$id;
		
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		return $row;
	}
}


?>