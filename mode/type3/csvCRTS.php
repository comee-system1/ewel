<?PHP
	require_once("./init/tensaku.php");
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
	echo "���[���A�h���X,";
	echo "�Y��Җ�,";
	echo "�Y��҃��[���A�h���X,";
	echo "����,";
	for($i=1;$i<=4;$i++){
		echo "��".$i.",";
		echo "�L���ɂ�����Y�񂾓_".$i.",";
		echo "���k".$i.",";
		echo "�Y��".$i.",";
		echo "�A�h�o�C�X".$i.",";
		echo "���e�|�C���g".$i.",";
		echo "���W�b�N�e�|�C���g".$i.",";
	}
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
			echo mb_convert_encoding($val[ 'start_time'    ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'exam_time'     ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'mail'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'tensaku_name'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'tensaku_mail'  ],'sjis','UTF-8')." ,";
			$str = $array_tensaku_question[$val['tensaku_main_id']][$val['tensaku_id']];
			echo mb_convert_encoding($str,'sjis','UTF-8')." ,";
			//��1-4
			echo mb_convert_encoding("'".$val[ 'question_text'       ]."'",'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'worry_text'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'advice_text'         ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_text'         ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_advice_text'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'note_point'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'logic_point'         ],'sjis','UTF-8')." ,";


			echo mb_convert_encoding($val[ 'question_text2'        ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'worry_text2'           ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'advice_text2'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_text_2'         ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_advice_text_2'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'note_point_2'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'logic_point_2'         ],'sjis','UTF-8')." ,";

			echo mb_convert_encoding($val[ 'question_text3'        ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'worry_text3'           ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'advice_text3'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_text_3'         ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_advice_text_3'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'note_point_3'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'logic_point_3'         ],'sjis','UTF-8')." ,";

			echo mb_convert_encoding($val[ 'question_text4'        ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'worry_text4'           ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'advice_text4'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_text_4'         ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'answer_advice_text_4'  ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'note_point_4'          ],'sjis','UTF-8')." ,";
			echo mb_convert_encoding($val[ 'logic_point_4'         ],'sjis','UTF-8')." ,";

			echo "\n";
		}
	}


?>