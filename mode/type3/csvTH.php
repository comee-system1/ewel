<?PHP
		echo "������,";
		echo "�p�[�g�i�[���,";
		echo "���N����,";
		echo "�N��,";
		echo "�󌟓�,";
		echo "�󌟊J�n����,";
		echo "�����^,";
		echo "��]���Җ�,";
		echo "��]���ҕ���,";
		echo "�]���Җ�,";
		echo "�]���ҕ���,";
		echo "�֌W��,";
		for($i=1;$i<=78;$i++){
			echo "��".$i.",";
		}
		echo "\n";
		foreach($tlist[ 'ans' ] as $key=>$val){

			echo mb_convert_encoding($tlist[ 'testname' ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($tlist[ 'ptname'   ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'birth'      ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'age'        ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'time'       ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'second'     ],"SJIS","UTF-8").",";
			echo mb_convert_encoding($array_tamen_type[$val[ 'tamen_type' ]],"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'ev_name'    ],"sjis-win","UTF-8").",";
			$str = preg_replace("/\n|\r/","",$val[ 'ev_busyo' ]);
			echo mb_convert_encoding($str,"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'hv_name'    ],"sjis-win","UTF-8").",";
			$str = preg_replace("/\n|\r/","",$val[ 'hv_busyo' ]);
			echo mb_convert_encoding($str,"SJIS","UTF-8").",";
			echo mb_convert_encoding($val[ 'relation'     ],"SJIS","UTF-8").",";
			for($i=1;$i<=78;$i++){
				if(is_numeric($val[ 'ans'.$i ])){
					echo "".$val['ans'.$i].",";
				}
			}
			
			
			echo "\n";
		}


?>