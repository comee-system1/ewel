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
	echo "�ݖ�1,";
	echo "�x�񂾓���,";
	echo "���R,";
	echo "�ݖ�2,";
	echo "�N,";
	echo "��,";
	echo "�a���E�Ǐ�,";
	echo "�ݖ�3,";
	echo "�N,";
	echo "��,";
	echo "�a���E�Ǐ�,";
	echo "�ݖ�4,";
	echo "��]���e,";
	echo "�ݖ�5,";
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
			
			echo mb_convert_encoding($val[ 'start_time'       ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'exam_time'        ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer1'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer1_holiday'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer1_reason'   ],'sjis','UTF-8')." ,";

			echo mb_convert_encoding($val[ 'answer2'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer2_year'     ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer2_month'    ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer2_disease'  ],'sjis','UTF-8')." ,";

			echo mb_convert_encoding($val[ 'answer3'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer3_year'     ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer3_month'    ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer3_disease'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer4'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer4_disease'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer5'          ],'sjis','UTF-8')." ,";
			
			echo "\n";
		}
	}


?>