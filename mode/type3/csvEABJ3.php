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
		

		for($i=1;$i<=143;$i++){
			$keys = "�ݖ�".$i;
			echo $keys.",";
		}

		echo "\n";
		if(count($tlist[ 'ans' ])){
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
						$exam_date = preg_replace("/\n|\r/","",$val[ 'exam_date' ]);
						echo $exam_date.",";
					}elseif($val[ 'exam_state' ] == 1){
						echo "�󌟒�,";
					}else{
						echo "����,";
					}
					$start_time = preg_replace("/\n|\r/","",$val[ 'start_time' ]);
					echo $start_time.",";
					$exam_time = preg_replace("/\n|\r/","",$val[ 'exam_time' ]);
					echo $exam_time." ,";
					
					for($i=1;$i<=143;$i++){
						$ans = "ans".$i;
						echo mb_convert_encoding($val[$ans],'Shift-JIS','UTF-8').",";
					}
					echo "\n";
				}
			}
		}
?>