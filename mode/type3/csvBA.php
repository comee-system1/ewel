<?PHP
		echo "������,".mb_convert_encoding($tlist[ 'testname' ],"SJIS","UTF-8")."\n";
		echo "�p�[�g�i�[���,".mb_convert_encoding($tlist[ 'ptname' ],"SJIS","UTF-8")."\n";
		echo "�ڋq���,".mb_convert_encoding($tlist[ 'cname' ],"SJIS","UTF-8")."\n";
		echo "�ԍ�,";
		echo "�󌟎�ID,";
		echo "�󌟎Җ�,";
		echo "�󌟎Җ�����,";
		echo "���N����,";
		echo "�N��,";
		echo "����,";
		echo "����,";
		echo "�����P,";
		echo "�����Q,";
		echo "�󌟓�,";
		echo "�󌟊J�n����,";
		echo "�󌟎���,";
		for($i=1;$i<=36;$i++){
			echo "��".$i.",";
		}
		echo "�X�g���X�������x��,";
		echo "�X�g���X�����X�R�A,";
		echo "�K���x���x��,";
		echo "�K���x�X�R�A,";

		foreach($a_element as $key=>$val){
			echo mb_convert_encoding($val,"SJIS",'UTF-8').",";
		}
		echo "�ő�΍��l�̗v�f��";
		echo "\n";
		
		//�ő�΍��l�̗v�f��
		$i=0;

		foreach($tlist[ 'ans' ] as $key=>$val){
			if(is_numeric($val[ 'number' ])){
				for($j=1;$j<=12;$j++){
					$dev = "dev".$j;
					$amax[$val[ 'number' ]][$j]  = $val[ $dev ];
					$keys[$val[$dev]] = $j;
				}
			$i++;
			}
		}
		
		if(count($amax)){
			foreach($amax as $key=>$val){
				if($val[1]){
					$max = max($val);
					$maxKey[$key] = mb_convert_encoding($a_element["w".$keys[$max]],"SJIS","UTF-8");
				}else{
					$maxKey[$key] = "";
				}
			}
		}

		foreach($tlist[ 'ans' ] as $key=>$val){
			if(is_numeric($val[ 'number' ])){
				echo $val[ 'number' ].",";
				echo $val[ 'exam_id' ].",";
				echo mb_convert_encoding($val[ 'name' ],'sjis-win','UTF-8').",";
				echo mb_convert_encoding($val[ 'kana' ],'sjis-win','UTF-8').",";
				echo mb_convert_encoding($val[ 'birth' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'age' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($a_gender[$val[ 'sex' ]],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'pass' ],'sjis','UTF-8').",";
				$memo1 = preg_replace("/\n|\r/","",$val[ 'memo1' ]);
				echo mb_convert_encoding($memo1,'sjis','UTF-8').",";
				$memo2 = preg_replace("/\n|\r/","",$val[ 'memo2' ]);
				echo mb_convert_encoding($memo2,'sjis','UTF-8').",";
				if($val[ 'exam_state' ] == 2){
					echo mb_convert_encoding($val[ 'exam_date'  ],'sjis','UTF-8').",";
				}elseif($val[ 'exam_state' ] == 1){
					echo "�󌟒�,";
				}else{
					echo "����,";
				}
				
				if($val[ 'exam_date' ] && $val[ 'exam_state' ] == 2){
					echo mb_convert_encoding($val[ 'start_time' ],'sjis','UTF-8').",";
				}else{
					echo " ,";
				}
				if($val[ 'exam_time' ] && $val[ 'exam_state' ] == 2){
					echo mb_convert_encoding($val[ 'exam_time'  ],'sjis','UTF-8').",";
				}else{
					echo " ,";
				}
				for($k=1;$k<=36;$k++){
					$q = "q".$k;
					if($val[$q]){
						echo $val[ $q  ].",";
					}else{
						echo " ,";
					}
				}
				$lv = "";
				$sc = "";
				if($val[ 'dev1' ] && $val[ 'dev2' ] && $val[ 'dev3' ]){
					if($val[ 'stress_flg' ] == 1){
						list($lv,$sc) = $db->getStress2($val[ 'dev1' ],$val[ 'dev2' ],$val[ 'dev3' ]);
					}else{
						list($lv,$sc) = $db->getStress($val[ 'dev1' ],$val[ 'dev2' ]);
					}
				}

				echo $lv.",";
				echo $sc.",";
				if($val[ 'level' ]){
					echo $val[ 'level' ].",";
				}else{
					echo ",";
				}
				if($val[ 'level' ]){
					echo $val[ 'score' ].",";
				}else{
					echo ",";
				}

				for($i=1;$i<=12;$i++){
					$dev = "dev".$i;
					if($val[ $dev ]){
						echo $val[$dev].",";
					}else{
						echo ",";
					}
				}
				echo $maxKey[$val[ 'number' ]].",";
				echo "\n";
			}
		}

?>