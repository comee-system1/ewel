<?PHP
	echo "������,".mb_convert_encoding($tlist[ 'testname' ],"SJIS","UTF-8")."\n";
	echo "�p�[�g�i�[���,".mb_convert_encoding($tlist[ 'ptname' ],"SJIS","UTF-8")."\n";
	echo "�ڋq���,".mb_convert_encoding($tlist[ 'cname' ],"SJIS","UTF-8")."\n";
	echo "�ԍ�,";
	echo "�󌟎�ID,";
	echo "�󌟎Җ�(�j��),";
	echo "�󌟎Җ�(����),";
	echo "���N����,";
	echo "�N��,";
	echo "����,";
	echo "����,";
	echo "�����P,";
	echo "�����Q,";
	echo "���O�C����,";
	echo "�󌟓�,";
	echo "�󌟊J�n����,";
	echo "�󌟏I������,";
	echo "�󌟎���,";
	for($i=1;$i<=149;$i++){
		echo "�ݖ�".$i.",";
	}
	echo "\n";

		foreach($tlist['ans'] as $key=>$val){
			if(is_numeric($val[ 'number' ])){
				echo $val[ 'number' ].",";
				echo $val[ 'exam_id' ].",";
				if($val[ 'gender' ] == 1){
					echo mb_convert_encoding($val[ 'name' ],'sjis-win','UTF-8').",";
				}else{
					echo "-,";
				}
				if($val[ 'gender' ] == 2){
					echo mb_convert_encoding($val[ 'kana' ],'sjis-win','UTF-8').",";
				}else{
					echo "-,";
				}
				echo mb_convert_encoding($val[ 'birthday' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'age' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($a_gender[$val[ 'gender' ]],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'pass' ],'sjis','UTF-8').",";
				$memo1 = preg_replace("/\n|\r/","",$val[ 'memo1' ]);
				echo mb_convert_encoding($memo1,'sjis','UTF-8').",";
				$memo2 = preg_replace("/\n|\r/","",$val[ 'memo2' ]);
				echo mb_convert_encoding($memo2,'sjis','UTF-8').",";
				echo $val[ 'counter' ].",";
				if($val[ 'exam_state' ] == 2){
					echo mb_convert_encoding($val[ 'exam_date'  ],'sjis','UTF-8')." ,";
				}elseif($val[ 'exam_state' ] == 1){
					echo "�󌟒�,";
				}else{
					echo "����,";
				}
				if($val[ 'times' ] > 0){
					$times = "'".ceil($val[ 'times'  ]/60).":".($val[ 'times' ]%60);
				}else{
					$times = "-";
				}
				echo mb_convert_encoding($val[ 'start_time' ],'sjis','UTF-8')." ,";
				echo mb_convert_encoding($val[ 'quesfin_time' ],'sjis','UTF-8')." ,";
				echo $times." ,";
				
				for($i=1;$i<=148;$i++){
					$ans = "ans".$i;
					echo mb_convert_encoding($val[$ans],'Shift-JIS','UTF-8').",";
				}

				echo "\n";
			}
		}


?>