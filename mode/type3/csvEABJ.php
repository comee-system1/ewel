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
		

		for($i=1;$i<=151;$i++){
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
						echo mb_convert_encoding($val[ 'exam_date'  ],'sjis','UTF-8').",";
					}elseif($val[ 'exam_state' ] == 1){
						echo "�󌟒�,";
					}else{
						echo "����,";
					}
					
				//	if($val[ 'exam_date' ] && $val[ 'exam_state' ] == 2){
						echo mb_convert_encoding($val[ 'start_time' ],'sjis','UTF-8')." ,";
				//	}else{
				//		",";
				//	}
					
					echo mb_convert_encoding($val[ 'exam_time'  ],'sjis','UTF-8')." ,";
					
					echo $val[ 'secA1'  ].",";
					echo $val[ 'secA2a' ].",";
					echo $val[ 'secA2b' ].",";
					echo $val[ 'secA2c' ].",";
					echo $val[ 'secA2d' ].",";
					echo $val[ 'secA2e' ].",";
					echo $val[ 'secA2f' ].",";
					echo $val[ 'secA2g' ].",";
					echo $val[ 'secA3a' ].",";
					echo $val[ 'secA3b' ].",";
					echo $val[ 'secA3c' ].",";
					echo $val[ 'secA3d' ].",";
					echo $val[ 'secA3e' ].",";
					echo $val[ 'secA3f' ].",";
					echo $val[ 'secA3g' ].",";
					
					for($i=1;$i<=6;$i++){
						echo $val[ 'secB'.$i.'a' ].",";
						echo $val[ 'secB'.$i.'b' ].",";
						echo $val[ 'secB'.$i.'c' ].",";
					}
					for($i=1;$i<=15;$i++){
						echo $val[ 'secC'.$i ].",";
					}
					echo $val[ 'secD1_1' ].",";
					echo $val[ 'secD1_2' ].",";
					echo $val[ 'secD2_1' ].",";
					echo $val[ 'secD2_2' ].",";
					echo $val[ 'secD3_1' ].",";
					echo $val[ 'secD3_2' ].",";
					echo $val[ 'secD4_1' ].",";
					echo $val[ 'secD4_2' ].",";
					echo $val[ 'secD4_3' ].",";
					echo $val[ 'secD5_1' ].",";
					echo $val[ 'secD5_2' ].",";
					echo $val[ 'secD5_3' ].",";
					echo $val[ 'secD5_4' ].",";
					echo $val[ 'secD6_1' ].",";
					echo $val[ 'secD6_2' ].",";

					for($i=1;$i<=7;$i++){
						echo $val[ 'secH'.$i.'A'].",";
						echo $val[ 'secH'.$i.'B'].",";
						echo $val[ 'secH'.$i.'C'].",";
						
					}

					for($i=1;$i<=5;$i++){
						echo $val[ 'secG'.$i.'a'].",";
						echo $val[ 'secG'.$i.'b'].",";
						echo $val[ 'secG'.$i.'c'].",";
						
					}
					
					for($i=1;$i<=14;$i++){
						echo $val[ 'secF'.$i ].",";
					}
					
					echo $val[ 'secE1_1' ].",";
					echo $val[ 'secE1_2' ].",";
					echo $val[ 'secE2_1' ].",";
					echo $val[ 'secE2_2' ].",";
					echo $val[ 'secE3_1' ].",";
					echo $val[ 'secE3_2' ].",";
					echo $val[ 'secE4_1' ].",";
					echo $val[ 'secE4_2' ].",";
					echo $val[ 'secE4_3' ].",";
					echo $val[ 'secE5_1' ].",";
					echo $val[ 'secE5_2' ].",";
					echo $val[ 'secE5_3' ].",";
					echo $val[ 'secE6_1' ].",";
					echo $val[ 'secE6_2' ].",";
					echo $val[ 'secE6_3' ].",";
					echo $val[ 'secI1_1' ].",";
					echo $val[ 'secI1_2' ].",";
					echo $val[ 'secI1_3' ].",";
					echo $val[ 'secI1_4' ].",";
					echo $val[ 'secI1_5' ].",";
					echo $val[ 'secI2_1' ].",";
					echo $val[ 'secI2_2' ].",";
					echo $val[ 'secI2_3' ].",";
					echo $val[ 'secI2_4' ].",";
					echo $val[ 'secI2_5' ].",";
					echo $val[ 'secI3_1' ].",";
					echo $val[ 'secI3_2' ].",";
					echo $val[ 'secI3_3' ].",";
					echo $val[ 'secI3_4' ].",";
					echo $val[ 'secI3_5' ].",";
					echo $val[ 'secI4_1' ].",";
					echo $val[ 'secI4_2' ].",";
					echo $val[ 'secI4_3' ].",";
					echo $val[ 'secI4_4' ].",";
					echo $val[ 'secI4_5' ].",";
					echo $val[ 'secI5_1' ].",";
					echo $val[ 'secI5_2' ].",";
					echo $val[ 'secI5_3' ].",";
					echo "\n";
				}
			}
		}
?>