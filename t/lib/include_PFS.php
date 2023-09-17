<?PHP
class PFSmethod extends method{
	public function setPFS($set,$where){

		$sql = "INSERT INTO t_pfs(
			testpaper_id
			,sougo
			,personal
			,state
			,job
			,image
			,positive
			,self
			,regist_ts
		) VALUES ( 
			(SELECT id FROM t_testpaper WHERE testgrp_id=:testgrp_id AND exam_id=:exam_id AND type=:type)
			,:sougo
			,:personal
			,:state
			,:job
			,:image
			,:positive
			,:self
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
		$stmt->bindValue(':sougo', $set[ 'sougo' ], PDO::PARAM_STR);
		$stmt->bindValue(':personal', $set[ 'personal' ], PDO::PARAM_STR);
		$stmt->bindValue(':state', $set[ 'state' ], PDO::PARAM_STR);
		$stmt->bindValue(':job', $set[ 'job' ], PDO::PARAM_STR);
		$stmt->bindValue(':image', $set[ 'image' ], PDO::PARAM_STR);
		$stmt->bindValue(':positive', $set[ 'positive' ], PDO::PARAM_STR);
		$stmt->bindValue(':self', $set[ 'self' ], PDO::PARAM_STR);
		$stmt->bindValue(':regist_ts', $date, PDO::PARAM_STR);
		$stmt->execute();

	}
	public function calcPFS($set){
		$return = array();
		$return['personal'] = sprintf("%.1f",round(100-$set['dev7'],1));
		$return['state'   ] = sprintf("%.1f",round(100-$set['dev8'],1));
		$return['job'     ] = sprintf("%.1f",round($set['dev2'],1));
		$return['image'   ] = sprintf("%.1f",round(100-$set['dev4'],1));
		$return['positive'] = sprintf("%.1f",round($set['dev6'],1));
		$return['self'    ] = sprintf("%.1f",round($set['dev3'],1));
		$return['sougo'   ] = sprintf("%.1f",self::getSougo($set));

		return $return;
	}
	public function getSougo($set){
		$point = 0.5;
		
		if($set['dev6']-$set[ 'dev7' ] >= 5 
			AND  $set['dev6']-$set[ 'dev7' ] < 10
		){
			$point += 3;
		}elseif( $set['dev6']-$set[ 'dev7' ] >= 10 ){
			$point += 4;
		}

		if($set['dev3']-$set[ 'dev4' ] >= 5 
			AND  $set['dev3']-$set[ 'dev4' ] < 10
		){
			$point += 2;
		}elseif( $set['dev3']-$set[ 'dev4' ] >= 10 ){
			$point += 3;
		}
		
		if($set['dev8'] < 45 ){
			$point += 1;
		}
		
		if($set['dev2'] >= 52 ){
			$point += 0.5;
		}

		if($set[ 'dev11' ]-$set[ 'dev7' ] >= 5 ){
			$point += 1;
		}
		
		return $point;

	}

}


?>