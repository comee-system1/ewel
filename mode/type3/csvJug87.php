<?PHP
$array_pos = array(
				1=>"�В��E�����E���ƕ�������"
				,2=>"��������"
				,3=>"�ے�����"
				,4=>"��C�E���[�_�[����"
				,5=>"���̑�"
			);
if($five == "anq"){
	echo "�A���P�[�g��";
	echo ",�󌟎�ID";
	echo ",�󌟎Җ�";
	echo ",�󌟎Җ�����";
	echo ",���[���A�h���X";
	echo ",��1";
	echo ",��2";
	echo ",��3";
	echo ",��4";
	echo ",��5";
	echo ",��6";
	echo ",��7";
	echo ",��8";
	echo ",��9";
	echo ",��10";
	echo ",��11";
	echo ",��12";
	echo ",��13";

	echo "\n";
	if(count($tlist[ 'ans' ])){
		foreach($tlist[ 'ans' ] as $key=>$val){
			echo "".mb_convert_encoding($val[ 'start_date' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'empnum' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei' ].$val[ 'mei' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei_kana' ].$val[ 'mei_kana' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'mail' ],"SJIS-WIN","UTF-8").",";
			for($i=1;$i<=13;$i++){
				$anq = "anq".$i;
				echo mb_convert_encoding($val[$anq],"SJIS-WIN","UTF-8").",";
			}
			

			echo "\n";
		}
	}
}else{
	echo "������,".mb_convert_encoding($tlist[ 'testname' ],"SJIS","UTF-8")."\n";
	echo "�p�[�g�i�[���,".mb_convert_encoding($tlist[ 'ptname' ],"SJIS","UTF-8")."\n";
	echo "�ڋq���,".mb_convert_encoding($tlist[ 'cname' ],"SJIS","UTF-8")."\n";
	echo "�󌟎�ID";
	echo ",�󌟎Җ�";
	echo ",�󌟎Җ�����";
	echo ",���N����";
	echo ",�N��";
	echo ",����";
	echo ",����";
	echo ",�����P";
	echo ",�����Q";
	echo ",�󌟓�";
	echo ",�󌟊J�n����";
	echo ",�󌟎���";
	echo ",�󌟎��";
	echo ",�֌W��ID";
	if($_REQUEST[ 'type' ] == "sub"){
		echo ",��1(1)";
		echo ",��1(2)";
		echo ",��1(3)";
		echo ",��1(4)";
		echo ",��2(1)";
		echo ",��2(2)";
		echo ",��2(3)";
		echo ",��2(4)";
		echo ",��3(1)";
		echo ",��3(2)";
		echo ",��3(3)";
		echo ",��3(4)";
		echo ",��4";
		echo ",��5(1)";
		echo ",��5(2)";
		echo ",��5(3)";
		echo ",��5(4)";
		echo ",��5(5)";
		echo ",��6(1)";
		echo ",��6(2)";
		echo ",��6(3)";
		echo ",��6(4)";
		echo ",��6(5)";
		echo ",��7(1)";
		echo ",��7(2)";
		echo ",��7(3)";
		echo ",��7(4)";
		echo ",��7(5)";
		echo ",��7(6)";
		echo ",��7(7)";
		echo ",��7(8)";
		echo ",��7(9)";
		
		echo ",��8(1)";
		echo ",��8(2)";
		echo ",��8(3)";
		echo ",��8(4)";
		echo ",��8(5)";
		echo ",��8(6)";
		echo ",��8(7)";

		echo ",��9(1)";
		echo ",��9(2)";
		echo ",��9(3)";
		echo ",��9(4)";
		echo ",��9(5)";
		echo ",��9(6)";
		echo ",��9(7)";
		echo ",��9(8)";
		echo ",��9(9)";
		echo ",��9(10)";
		echo ",��9(11)";
		echo ",��9(12)";
		echo ",��9(13)";
		echo ",��9(14)";
		echo ",��9(15)";

		echo ",��10(1)";
		echo ",��10(2)";
		echo ",��10(3)";
		echo ",��10(4)";
		echo ",��10(5)";
		echo ",��10(6)";
		echo ",��10(7)";
		echo ",��10(8)";
	
		echo ",��11(1)";
		echo ",��11(2)";
		echo ",��11(3)";
		echo ",��11(4)";

		echo ",��12(1)";
		echo ",��12(2)";
		echo ",��12(3)";
		echo ",��12(4)";
		echo ",��12(5)";
		echo ",��12(6)";
		echo ",��12(7)";
		echo ",��12(8)";
		echo ",��12(9)";

		echo ",��13(1)";
		echo ",��13(2)";
		echo ",��13(3)";
		echo ",��13(4)";
		echo ",��13(5)";
		echo ",��13(6)";
		echo ",��13(7)";

		echo ",��14(1)";
		echo ",��14(2)";
		echo ",��14(3)";
		echo ",��14(4)";

		echo ",��15(1)";
		echo ",��15(2)";
		echo ",��15(3)";
		echo ",��15(4)";
		echo ",��15(5)";

		echo ",��16(1)";
		echo ",��16(2)";
		echo ",��16(3)";
		echo ",��16(4)";
		echo ",��16(5)";
		echo ",��16(6)";
		echo ",��16(7)";
		echo ",��16(8)";
		echo ",��16(9)";

		echo ",��17(1)";
		echo ",��17(2)";
		echo ",��17(3)";
		echo ",��17(4)";
		echo ",��17(5)";
		echo ",��17(6)";
		echo ",��17(7)";
		echo ",��17(8)";
		echo ",��17(9)";
		echo ",��17(10)";

		echo ",��18";
		echo ",��19";
		echo ",��20";

	}else{
        echo ",��1";
        echo ",��2(1)";
        echo ",��2(2)";
        echo ",��2(3)";
        echo ",��2(4)";
        echo ",��3(1)";
        echo ",��3(2)";
        echo ",��3(3)";
        echo ",��3(4)";
        echo ",��4";
				echo ",��5(1)";
        echo ",��5(2)";
        echo ",��5(3)";
        echo ",��5(4)";
        echo ",��5(5)";
				echo ",��6(1)";
        echo ",��6(2)";
        echo ",��6(3)";
        echo ",��6(4)";
        echo ",��6(5)";
				echo ",��7(1)";
        echo ",��7(2)";
        echo ",��7(3)";
        echo ",��7(4)";
        echo ",��7(5)";
        echo ",��7(6)";
        echo ",��7(7)";
        echo ",��7(8)";
        echo ",��7(9)";
				echo ",��8(1)";
        echo ",��8(2)";
        echo ",��8(3)";
        echo ",��8(4)";
        echo ",��8(5)";
        echo ",��8(6)";
        echo ",��8(7)";
				echo ",��9(1)";
        echo ",��9(2)";
        echo ",��9(3)";
        echo ",��9(4)";
        echo ",��9(5)";
        echo ",��9(6)";
        echo ",��9(7)";
				echo ",��9(8)";
        echo ",��9(9)";
        echo ",��9(10)";
        echo ",��9(11)";
        echo ",��9(12)";
        echo ",��9(13)";
        echo ",��9(14)";
        echo ",��9(15)";
				echo ",��10(1)";
        echo ",��10(2)";
        echo ",��10(3)";
        echo ",��10(4)";
        echo ",��10(5)";
        echo ",��10(6)";
        echo ",��10(7)";
				echo ",��10(8)";
				echo ",��11(1)";
        echo ",��11(2)";
        echo ",��11(3)";
        echo ",��11(4)";

				echo ",��12(1)";
        echo ",��12(2)";
        echo ",��12(3)";
        echo ",��12(4)";
        echo ",��12(5)";
        echo ",��12(6)";
        echo ",��12(7)";
				echo ",��12(8)";
        echo ",��12(9)";
        echo ",��12(10)";

				echo ",��13(1)";
        echo ",��13(2)";
        echo ",��13(3)";
        echo ",��13(4)";
        echo ",��13(5)";
        echo ",��13(6)";
        echo ",��13(7)";
				echo ",��13(8)";
        echo ",��13(9)";
        echo ",��13(10)";
        echo ",��14";
        echo ",��15";
        echo ",��16";
        echo ",��17";

    }
	echo "\n";
	if(count($tlist[ 'ans' ])){

		foreach($tlist[ 'ans' ] as $key=>$val){
			echo "=\"".mb_convert_encoding($val[ 'empnum' ],"SJIS-WIN","UTF-8")."\",";
			echo mb_convert_encoding($val[ 'sei' ].$val[ 'mei' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei_kana' ].$val[ 'mei_kana' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'birth' ],"SJIS-WIN","UTF-8").",";
			if($val[ 'age' ] > 0 ){
				echo mb_convert_encoding($val[ 'age' ],"SJIS-WIN","UTF-8").",";

			}
			echo mb_convert_encoding($val[ 'sex' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'pass' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'memo1' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'memo2' ],"SJIS-WIN","UTF-8").",";
			//�󌱓�
			$examdate = substr($val[ 'starttime' ],0,11);
			$examtime = substr($val[ 'starttime' ],11,8);
			echo $examdate.",";
			echo $examtime.",";
			$starttime = strtotime($val[ 'starttime' ]);
			$endtime  = strtotime($val[ 'endtime' ]);
			$times = s2h($endtime-$starttime);
			if($times < 0){
				$times = "";
			}
			echo $times.",";
			echo $val[ 'boss' ].",";
			echo $obj->emp[$val[ 'rep'  ]].",";
			for($i = 1; $i <= 113; $i ++){
				$ans = "ans".$i;

				echo str_replace(array("\r\n","\r","\n"), "", mb_convert_encoding($val[ $ans ],"SJIS-WIN","UTF-8")).",";
			}
			echo "\n";
		}
	}
}

function s2h($seconds) {
	$hours = floor($seconds / 3600);
	$minutes = floor(($seconds / 60) % 60);
	$seconds = $seconds % 60;
	$hms = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
	return $hms;
}
function commaEscape4csv($str)
{
  if(!(strstr($str, ',') === False)){
    $str = preg_replace('/"/', '""',$str);
    $str = '"' . $str . '"';
  }
  return $str;
}


?>