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


		$max = 86;
		for($i=1;$i<=$max;$i++){
			echo "��".$i.",";
		}

		echo "�u�����h�헪�ƃu�����h�E�}�l�[�W���[�̖���,";
		echo "�u�����h�Ƃ͉����H,";
		echo "�u�����h�̗��j,";
		echo "�u�����h�̎��,";
		echo "�u�����h�F�m,";
		echo "�u�����h�\�z�̊T��,";
		echo "�u�����h�v�f�ƃu�����h�̌�,";
		echo "�u�����h�̏d�v��,";
		echo "�u�����h�\�z�ɂ�����}�[�P�e�B���O,";
		echo "�u�����h�\�z�̃X�e�b�v,";

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
				for($i=1;$i<=$max;$i++){
					$ansK = "ans".$i;
					echo mb_convert_encoding($val[ $ansK ],'Shift-JIS','UTF-8')." ,";
				}
				echo $val[ 'score1' ].",";
				echo $val[ 'score2' ].",";
				echo $val[ 'score3' ].",";
				echo $val[ 'score4' ].",";
				echo $val[ 'score5' ].",";
				echo $val[ 'score6' ].",";
				echo $val[ 'score7' ].",";
				echo $val[ 'score8' ].",";
				echo $val[ 'score9' ].",";
				echo $val[ 'score10' ].",";

				echo "\n";
			}
		}

?>