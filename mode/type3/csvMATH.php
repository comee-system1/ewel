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


		for($i=1;$i<=30;$i++){
			$kaito = "��".$i;
			echo $kaito.",";
		}
		echo '�c����'.",";
		echo '���͗�'.",";
		echo '�I���'.",";
		echo '�\����'.",";
		echo '�\����'.",";
		echo '���v�f�_'.",";
		echo '���v�X�R�A'.",";
		echo '���v���x��'."";

		echo "\n";
		foreach($tlist['ans'] as $key=>$val){
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
					echo mb_convert_encoding($val[ 'exam_date'  ],'sjis','UTF-8')." ,";
				}elseif($val[ 'exam_state' ] == 1){
					echo "�󌟒�,";
				}else{
					echo "����,";
				}
				
				echo mb_convert_encoding($val[ 'start_time' ],'sjis','UTF-8')." ,";
				
				echo mb_convert_encoding($val[ 'exam_time'  ],'sjis','UTF-8')." ,";
				
				for($i=1;$i<=30;$i++){
					$ans = "ans".$i;
					echo mb_convert_encoding($val[$ans],'Shift-JIS','UTF-8').",";
				}
				echo mb_convert_encoding($val[ 'haku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'bunseki_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sentaku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'yosoku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'hyogen_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sogo_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sogo_score' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'level' ],"Shift-JIS","UTF-8").",";

				echo "\n";
			}
		}

?>