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
		for($i=1;$i<=131;$i++){
			echo "��".$i.",";
		}
		echo "\n";
		
		//�ő�΍��l�̗v�f��
		$i=0;

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
				
				echo mb_convert_encoding($val[ 'exam_time'  ],'sjis','UTF-8').",";
				for($k=1;$k<=131;$k++){
					$q = "ans".$k;
					echo $val[ $q  ].",";
				}

				echo "\n";
			}
		}

?>