<?PHP
class judgeClass extends method{
	public function getAnqData($where,$first = ""){
		$today = date("Y-m-d");
		if($first == 87){
			$tbl = "jug_boss_text6";
		}else
		if($first == 86 || $first == 89){
				$tbl = "jug_boss_text5";
		}else
		if($first == 60){
				$tbl = "jug_boss_text2";
		}else{
				$tbl = "jug_boss_text";
		}
		$sql = "
				SELECT 
					endtime,
					jmid,
					bossid
				FROM
					".$tbl."
				WHERE
					jmid = '".$where[ 'id' ]."' 
					
				";
		
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rlt[ 'endtime' ] == "0000-00-00 00:00:00" || !$rlt[ 'endtime' ]){
			return false;
		}
		$sql = "
				SELECT 
					*
					,jit.id as jitid
					,jit.status as status
				FROM
					jug_inquiry as ji
					INNER JOIN jug_inquiry_text as jit ON jit.inq_id = ji.id
				WHERE
					ji.testgrp_id = '".$where[ 'testgrp_id' ]."'
					AND jit.jmid = '".$where[ 'id' ]."'
					AND jit.start_date <= '".$today."'
					AND jit.end_date >= '".$today."'
				";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$rlt = $stmt->fetch(PDO::FETCH_ASSOC);
                
		return $rlt;
	}
	public function getAnqSubordinate($where,$first = ""){
													if ($first == 87) {
														$tbl = "jug_boss_text6";
														$sql = "
																	SELECT 
																					a.*
																					,jm.sei 
																					,jm.mei
																					,jm2.sei as sei2
																					,jm2.mei as mei2
																	FROM(
																					SELECT
																									ans4
																									,ans5
																					FROM
																									".$tbl."
																					WHERE
																									jmid='".$where[ 'id' ]."'
																									AND type=1 
																									AND bossid = 0
																	) as a
																	LEFT JOIN jug_member as jm ON jm.id=a.ans4
																	LEFT JOIN jug_member as jm2 ON jm2.id=a.ans5
																	";
												}else 
												if ($first == 86 || $first == 89) {
														$tbl = "jug_boss_text5";
														$sql = "
																	SELECT 
																					a.*
																					,jm.sei 
																					,jm.mei
																					,jm2.sei as sei2
																					,jm2.mei as mei2
																	FROM(
																					SELECT
																									ans4
																									,ans5
																					FROM
																									".$tbl."
																					WHERE
																									jmid='".$where[ 'id' ]."'
																									AND type=1 
																									AND bossid = 0
																	) as a
																	LEFT JOIN jug_member as jm ON jm.id=a.ans4
																	LEFT JOIN jug_member as jm2 ON jm2.id=a.ans5
																	";
												}else         
                        if($first == 60){
                            $tbl = "jug_boss_text2";
                            $sql = "
                                SELECT 
                                        a.*
                                        ,jm.sei 
                                        ,jm.mei
                                        ,jm2.sei as sei2
                                        ,jm2.mei as mei2
                                FROM(
                                        SELECT
                                                ans4
                                                ,ans5
                                        FROM
                                                ".$tbl."
                                        WHERE
                                                jmid='".$where[ 'id' ]."'
                                                AND type=1 
                                                AND bossid = 0
                                ) as a
                                LEFT JOIN jug_member as jm ON jm.id=a.ans4
                                LEFT JOIN jug_member as jm2 ON jm2.id=a.ans5
                                ";
                        }else{
                            $tbl = "jug_boss_text";
                            $sql = "
                                SELECT 
                                        a.*
                                        ,jm.sei 
                                        ,jm.mei
                                        ,jm2.sei as sei2
                                        ,jm2.mei as mei2
                                FROM(
                                        SELECT
                                                ans1
                                                ,ans2
                                        FROM
                                                ".$tbl."
                                        WHERE
                                                jmid='".$where[ 'id' ]."'
                                                AND type=1 
                                                AND bossid = 0
                                ) as a
                                LEFT JOIN jug_member as jm ON jm.id=a.ans1
                                LEFT JOIN jug_member as jm2 ON jm2.id=a.ans2
                                ";
                        }
		
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	public function getSubordinate($where){
		$sql = "
				SELECT 
					*
				FROM
					jug_boss as j
					LEFT JOIN jug_member as jm ON j.jmid = jm.id
				WHERE
					j.bossid = '".$where[ 'jmid' ]."'
				";

		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$i=0;
		while($rlt = $stmt->fetch(PDO::FETCH_ASSOC) ){
			$list[$i] = $rlt;
			$i++;
		}
		return $list;
	}

	public function getBoss($where,$key){
		$sql = "
				SELECT 
					*
				FROM
					jug_boss as j
					LEFT JOIN jug_member as jm ON j.bossid = jm.id
				WHERE
					j.jmid = '".$where[ 'id' ]."'
					AND j.testgrp_id = '".$where[ 'testgrp_id' ]."'
					AND j.bossid = '".$key."'
				";

		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}


	public function getMember($where){
		$sql = "
				SELECT 
					j.*
					,t.id as tid
					,t.exam_id as texam_id
					,t.exam_date as exam_date
					,t.start_time as start_time
				FROM
					jug_member as j
					LEFT JOIN t_testpaper as t ON t.number = j.num AND j.testgrp_id=t.testgrp_id
				WHERE
					j.id='".$where[ 'jmid' ]."'
			";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	public function setStartData($where){
		$sql = "BEGIN";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		try{
			$date = date("Y-m-d");
			$start = date("H:i:s");
			$sql = "
					SELECT 
						id
					FROM
						jug_boss_text
					WHERE
						jmid='".$where[ 'id' ]."'
					";
			if($where[ 'type' ] == 2){
				//��������
				$sql .= " AND type = 2 ";
				$sql .= " AND bossid = '".$where[ 'bossid' ]."'";
			}else{
				$sql .= " AND type = 1 ";
				$sql .= " AND bossid = '0'";
			}
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->rowCount(); 
			if($row == 0){
				$sql = "
						UPDATE t_testpaper SET
							exam_state = 1
							,exam_date = '".$date."'
							,start_time = '".$start."'
						WHERE
							id='".$where[ 'tid' ]."'
						";
				$stmt = $this->db->prepare($sql);
                                $stmt->execute();
				$sql = "
						INSERT INTO jug_boss_text(
							jmid
							,type
							,bossid
							,starttime
						)VALUES(
							'".$where[ 'id' ]."'
							,'".$where[ 'type' ]."'
							,'".$where[ 'bossid' ]."'
							,NOW()
						)
						";
				$stmt = $this->db->prepare($sql);
                                $stmt->execute();
			}
			$sql = "commit";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}catch(Exception $e){
			$sql = "rollback";
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
		}
	}
	public function getDataResult($where,$type="",$clum="*"){
		$sql = "
				SELECT 
					".$clum."
				FROM
					jug_boss_text
				WHERE
					jmid = ".$where[ 'jmid' ]."
				";
		if($type == "subordinate"){
			$sql .= "
						AND type=2
						AND bossid = '".$where[ 'bossid' ]."'
					";
		}else{
			$sql .= "
						AND type=1
						AND bossid = '0'
					";
		}
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	
	public function getFirstData($rlt){
		//�����Ƃ��ꏏ�Ɏd����������
		$sql = "SELECT sei,mei,empnum FROM jug_member WHERE id='".$rlt[ 'ans1' ]."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$result[ 'ans1' ] = $stmt->fetch(PDO::FETCH_ASSOC);
		//�����Ƃ��ꏏ�Ɏd�����������Ȃ�
		$sql = "SELECT sei,mei,empnum FROM jug_member WHERE id='".$rlt[ 'ans2' ]."'";
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
		$result[ 'ans2' ] = $stmt->fetch(PDO::FETCH_ASSOC);
		
		return $result;
		
	}
}
?>