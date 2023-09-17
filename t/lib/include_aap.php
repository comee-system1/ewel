<?PHP
class aapmethod extends method{

    private $_dev;
    private $_raw;
    
    
    public function __construct($_raw,$_dev) {
        
        $this->_raw = $_raw;
        $this->_dev = $_dev;
        
    }
        public function setAnswerDataCalc($answer,$ave,$hensa){
           
            
            $aac_id = $answer[ 'aap_id' ];
            $rst_id = $answer[ 'id' ];
            $soten1 = $answer[ 'ans77' ]+ $answer[ 'ans79' ]+ $answer[ 'ans83' ]+$answer[ 'ans88' ]+$answer[ 'ans93' ]+$answer[ 'ans103' ];
            $soten2 = $answer[ 'ans84' ]+ $answer[ 'ans89' ]+ $answer[ 'ans94' ]+$answer[ 'ans98' ]+$answer[ 'ans104' ]+$answer[ 'ans109' ];
            $soten3 = $answer[ 'ans80' ]+ $answer[ 'ans90' ]+ $answer[ 'ans95' ]+$answer[ 'ans99' ]+$answer[ 'ans105' ]+$answer[ 'ans110' ];
            $soten4 = $answer[ 'ans81' ]+ $answer[ 'ans85' ]+ $answer[ 'ans91' ]+$answer[ 'ans100' ]+$answer[ 'ans106' ]+$answer[ 'ans111' ];
            $soten5 = $answer[ 'ans78' ]+ $answer[ 'ans86' ]+ $answer[ 'ans92' ]+$answer[ 'ans96' ]+$answer[ 'ans101' ]+$answer[ 'ans107' ];
            $soten6 = $answer[ 'ans82' ]+ $answer[ 'ans87' ]+ $answer[ 'ans97' ]+$answer[ 'ans102' ]+$answer[ 'ans108' ]+$answer[ 'ans112' ];
            $soten7 = 0;
            $soten8 = 0;
            $soten9 = 0;
            $soten10 = 0;
            $soten11 = 0;
            $soten12 = 0;
            
            
            $con1 = $this->getCalc($soten1,$ave[0],$hensa[0]);
            $con2 = $this->getCalc($soten2,$ave[1],$hensa[1]);
            $con3 = $this->getCalc($soten3,$ave[2],$hensa[2]);
            $con4 = $this->getCalc($soten4,$ave[3],$hensa[3]);
            $con5 = $this->getCalc($soten5,$ave[4],$hensa[4]);
            $con6 = $this->getCalc($soten6,$ave[5],$hensa[5]);
            
            
            list($rows,$devs) = $this->partBclac($answer);
            $dev1 = $rows[ 'dev1' ];
            $dev2 = $rows[ 'dev2' ];
            $dev3 = $rows[ 'dev3' ];
            $dev4 = $rows[ 'dev4' ];
            $dev5 = $rows[ 'dev5' ];
            $dev6 = $rows[ 'dev6' ];
            $dev7 = $rows[ 'dev7' ];
            $dev8 = $rows[ 'dev8' ];
            $dev9 = $rows[ 'dev9' ];
            $dev10 = $rows[ 'dev10' ];
            $dev11 = $rows[ 'dev11' ];
            $dev12 = $rows[ 'dev12' ];
            
           
            /*
            $rst_id = $answer[ 'id' ];
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
*/
            /*
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
            */
            $sql = "INSERT INTO aap_result ("
                    . "aap_id"
                    . ",rst_id"
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
                    . ",con1"
                    . ",con2"
                    . ",con3"
                    . ",con4"
                    . ",con5"
                    . ",con6"
                    . ")VALUES("
                    . "'".$aac_id."'"
                    . ",'".$rst_id."'"
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
                    . ",'".$con1."'"
                    . ",'".$con2."'"
                    . ",'".$con3."'"
                    . ",'".$con4."'"
                    . ",'".$con5."'"
                    . ",'".$con6."'"
                    . ")";
            
           
                    $stmt = $this->db->prepare($sql);
                    $stmt->execute();
            
        }
        
    //private function partBclac($line,$row2,$raw_data,$dev_data,$flg=""){
    private function partBclac($line){
        $raw_data = $this->_raw;
        $dev_data = $this->_dev;
         
	// 素点算出
	// 準備 [q1～q36の値を-3する]
	$q = "";
	for ( $num = 113; $num <= 148; $num++ ) {
		$q = "ans".$num;
                $n = $num-112;
		$row["q$n"] = $line[$q] - 3;
	}
	// 素点計算
	$dev = array();
	$dev_count = 1;
	// 素点データ読み込み
	foreach ($raw_data as $rawkey => $rawval) {
		$pm_data = array();
		// キーNoの比較
		if ( $rawkey == $dev_count ) {
			$dev[$rawkey] = 0;
			for ( $num = 0; $num <= 5; $num++ ) {
				// 各要素の値を分解（+,-と比較問題に分ける）
				$pm_data = split( ':',$raw_data[$rawkey][$num] );
                                
				if( $pm_data[0] == '+' ) {
					$dev[$rawkey] = $dev[$rawkey] + $row["$pm_data[1]"];
				}elseif ( $pm_data[0] == '-' ) {
					$dev[$rawkey] = $dev[$rawkey] - $row["$pm_data[1]"];
				}
                                
			}
		}	
		$dev_count++;
	}
        
    //読み込み
	// ステップ②
	// 偏差値算出
	$dev_count = 1;

	// 比較用dev
	$result_dev = array();
	// 偏差値データの読み込み
	foreach ($dev_data as $dkey => $dval) {
		// キーNoの比較
		if ( $dkey == $dev_count ) {
			$row["dev$dkey"] = 0;
			for ( $num = 0; $num <= 1; $num++ ) {
				// それぞれの値を計算
				//自己感情モニタリング力
				$devskey = "dev".$dkey;
				if($devskey == 'dev1' ){
					$row["dev$dkey"] = 100- ( ( ( $dev[$dkey] - $dev_data[$dkey][0] ) / $dev_data[$dkey][1] ) * 10 + 50  )+3.5;
				}elseif($devskey == 'dev2' ){
					$row["dev$dkey"] = 100- ( ( ( $dev[$dkey] - $dev_data[$dkey][0] ) / $dev_data[$dkey][1] ) * 10 + 50  )+0.7;
				}else{
					$row["dev$dkey"] = ( ( $dev[$dkey] - $dev_data[$dkey][0] ) / $dev_data[$dkey][1] ) * 10 + 50;
				}

				if ( $row["dev$dkey"] >= 80 ) { $row["dev$dkey"] = 80; }
				if ( $row["dev$dkey"] <= 20 ) { $row["dev$dkey"] = 20; }

				// 比較用データを作成
				$result_dev[$dkey] = $row["dev$dkey"];

			}
		}	
		$dev_count++;
	}


/*        
	// 総合得点素点算出(おもみ付け)
	$all_score = ($row['dev1'] * $row2['w1']) + ($row['dev2'] * $row2['w2']) + ($row['dev3'] * $row2['w3']) + ($row['dev4'] * $row2['w4']) + ($row['dev5'] * $row2['w5']) + ($row['dev6'] * $row2['w6']) + ($row['dev7'] * $row2['w7']) + ($row['dev8'] * $row2['w8']) + ($row['dev9'] * $row2['w9']) + ($row['dev10'] * $row2['w10']) + ($row['dev11'] * $row2['w11']) + ($row['dev12'] * $row2['w12']);


	// 総合得点の偏差値算出
	if ($row2['sd'] > 0 ) {
		$standard_score = (( $all_score - $row2['ave'] ) / $row2['sd']) * 10 + 50;
	} else {
		$standard_score = 0;
	}
*/
        $standard_score = 0;
  	if ( $standard_score >= 80 ) { $standard_score = 80; }
	if ( $standard_score <= 20 ) { $standard_score = 20; }

        
	$lv = '';

	if ( $standard_score <= 80 && $standard_score >= 65 ) { $lv = 5; }
	elseif ( $standard_score < 65 && $standard_score >= 55 ) { $lv = 4; }
	elseif ( $standard_score < 55 && $standard_score >= 45 ) { $lv = 3; }
	elseif ( $standard_score < 45 && $standard_score >= 35 ) { $lv = 2; }
	elseif ( $standard_score < 35 && $standard_score >= 20 ) { $lv = 1; }
	else { ; }
	
	$max_dev = max($result_dev);
	
	$dev_number = 0;
	for( $dcount = 1; $dcount <= 12; $dcount++ ) {
		if ( $row["dev$dcount"] == $max_dev && $dev_number == '' ) {
			$dev_number = $dcount;
		}
	}


	//return array($row,$lv,$standard_score,$dev_number);
	return array($row,$dev);
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
                $gender = $where[ 'gender' ];
		$start_time = date('Y-m-d H:i:s');
		$sql = "";
		$sql = "SELECT ";
		$sql .= " id,counter ";
		$sql .= " FROM ";
		$sql .= " aap_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."' AND ";
                $sql .= " gender = '".$gender."'";
                
		$stmt = $this->db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $counter = $row[ 'counter' ]+1;
                
		if(!$row){
                    
		}else{
                        $sql = " UPDATE aap_member SET "
                                . " counter = ".$counter.""
                                . " WHERE "
                                . " id=".$row[ 'id' ].""
                                . " AND gender='".$gender."'";
                        
                        $stmt = $this->db->prepare($sql);
                        $stmt->execute();
                        
			$aclum = array();
			for($i=1;$i<=141;$i++){
				$aclum[] = "ans".$i."=''";
			}
                        $clum = implode(",", $aclum);
                        /*
			//初回データクリア
			$sql = "UPDATE ";
			$sql .= " aap_sec ";
			$sql .= " SET ";
			$sql .= $clum;
			$sql .= " WHERE ";
			$sql .= " aap_id=".$row[ 'id' ];
			mysql_query($sql);
                         * 
                         */
		}
                
                $sql = ""
                        . "SELECT "
                        . " * "
                        . "FROM aap_sec"
                        . " WHERE "
                        . " aap_id=".$row[ 'id' ]."";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if(!$rows){
                        $sql = "";
			$sql = " INSERT INTO aap_sec ";
			$sql .= "(";
			$sql .= "aap_id";
			$sql .= ")VALUES(";
			$sql .= $row[ 'id' ];
			$sql .= ")";
                        
			$stmt = $this->db->prepare($sql);
                        $stmt->execute();
                }
	}
	
	public function getEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
                $gender    = $where[ 'gender'    ];
                
		$sql = " SELECT ";
		$sql .= " sec.* ";
		$sql .= " FROM ";
		$sql .= " aap_member as dm";
		$sql .= " INNER JOIN  aap_sec  as sec ON sec.aap_id=dm.id";
		$sql .= " WHERE ";
		$sql .= " dm.testgrp_id=".$testgrp_id." AND ";
		$sql .= " dm.test_id = ".$test_id." AND ";
                $sql .= " dm.gender = ".$gender." AND ";
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
                $gender     = $where[ 'gender' ];
                if(count($set) == 0 ) return false;
		foreach($set as $key=>$val){
			$clum .= "ans".$key."='".$val."',";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "UPDATE aap_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " aap_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " aap_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."' AND ";
                $sql .= " gender = '".$gender."' ";
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
        public function getmem($where){
           //finflgに1を立てる
           $quesfin = date("Y-m-d H:i:s");
           $sql = "UPDATE aap_member SET "
                   . " finflg=1 "
                   . ",quesfin_time='".$quesfin."'"
                   . " WHERE "
                   . " gender=".$where[ 'gender' ].""
                   . " AND test_id=".$where[ 'test_id' ]
                   ." AND testgrp_id=".$where[ 'testgrp_id' ]
                   . " AND exam_id='".$where[ 'exam_id' ]."'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
           
            
            $testgrp_id = $where[ 'testgrp_id' ];
            $test_id    = $where[ 'test_id'    ];
            $exam_id    = $where[ 'exam_id'    ];
                
            $sql = " SELECT ";
            $sql .= " dm.* ";
            $sql .= " FROM ";
            $sql .= " aap_member as dm";
            $sql .= " WHERE ";
            $sql .= " dm.testgrp_id=".$testgrp_id." AND ";
            $sql .= " dm.test_id = ".$test_id." AND ";
            $sql .= " dm.exam_id ='".$exam_id."'"
                    . " GROUP BY dm.gender";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $list = array();
            $i=0;
            while($rlt = $stmt->fetch(PDO::FETCH_ASSOC) ){
                $list[$i] = $rlt;
                $i++;
            }
            return $list;
        }
}
?>