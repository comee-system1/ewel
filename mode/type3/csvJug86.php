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
		echo ",��1";
		echo ",��2";
		echo ",��3";
		echo ",��4";
		echo ",��4(���̑�)";
		echo ",��5";
		echo ",��6";
		echo ",��7-1";
		echo ",��7-2";
		echo ",��8";
		echo ",��9-1";
		echo ",��9-2";
		echo ",��9-3";
		echo ",��9-4";
		echo ",��10-1";
		echo ",��10-2";
		echo ",��10-3";
		echo ",��10-4";
		echo ",��11-1";
		echo ",��11-2";
		echo ",��11-3";
		echo ",��11-4";
		echo ",��12-1";
		echo ",��13-1";
		echo ",��13-2";
		echo ",��13-3";
		echo ",��13-4";
		echo ",��13-5";
		echo ",��14-1";
		echo ",��14-2";
		echo ",��14-3";
		echo ",��14-4";
		echo ",��14-5";
		echo ",��15-1";
		echo ",��15-2";
		echo ",��15-3";
		echo ",��15-4";
		echo ",��15-5";
		echo ",��15-6";
		echo ",��15-7";
		echo ",��15-8";
		echo ",��15-9";
		echo ",��16-1";
		echo ",��16-2";
		echo ",��16-3";
		echo ",��16-4";
		echo ",��16-5";
		echo ",��16-6";
		echo ",��16-7";
		echo ",��17-1";
		echo ",��17-2";
		echo ",��17-3";
		echo ",��17-4";
		echo ",��17-5";
		echo ",��17-6";
		echo ",��17-7";
		echo ",��17-8";
		echo ",��17-9";
		echo ",��17-10";
		echo ",��17-11";
		echo ",��17-12";
		echo ",��17-13";
		echo ",��17-14";
		echo ",��17-15";
		echo ",��18-1";
		echo ",��18-2";
		echo ",��18-3";
		echo ",��18-4";
		echo ",��18-5";
		echo ",��18-6";
		echo ",��18-7";
		echo ",��18-8";
		echo ",��19-1";
		echo ",��19-2";
		echo ",��19-3";
		echo ",��19-4";
		echo ",��20-1";
		echo ",��20-2";
		echo ",��20-3";
		echo ",��20-4";
		echo ",��20-5";
		echo ",��20-6";
		echo ",��20-7";
		echo ",��20-8";
		echo ",��20-9";
		echo ",��21-1";
		echo ",��21-2";
		echo ",��21-3";
		echo ",��21-4";
		echo ",��21-5";
		echo ",��21-6";
		echo ",��21-7";
		echo ",��22-1";
		echo ",��22-2";
		echo ",��22-3";
		echo ",��22-4";
		echo ",��23-1";
		echo ",��23-2";
		echo ",��23-3";
		echo ",��23-4";
		echo ",��23-5";
		echo ",��24-1";
		echo ",��24-2";
		echo ",��24-3";
		echo ",��24-4";
		echo ",��24-5";
		echo ",��24-6";
		echo ",��24-7";
		echo ",��24-8";
		echo ",��24-9";
		echo ",��25";
		echo ",��26";
		echo ",��27";
	}else{
        echo ",��1";
        echo ",��2";
        echo ",��3";
        echo ",��4";
        echo ",��4(���̑�)";
        echo ",��5";
        echo ",��6";
        echo ",��7-1";
        echo ",��7-2";
        echo ",��8";
        echo ",��9-1";
        echo ",��9-2";
        echo ",��9-3";
        echo ",��9-4";
        echo ",��10-1";
        echo ",��10-2";
        echo ",��10-3";
        echo ",��10-4";
        echo ",��11";
        echo ",��12-1";
        echo ",��12-2";
        echo ",��12-3";
        echo ",��12-4";
        echo ",��12-5";
        echo ",��13-1";
        echo ",��13-2";
        echo ",��13-3";
        echo ",��13-4";
        echo ",��13-5";
        echo ",��14-1";
        echo ",��14-2";
        echo ",��14-3";
        echo ",��14-4";
        echo ",��14-5";
        echo ",��14-6";
        echo ",��14-7";
        echo ",��14-8";
        echo ",��14-9";
        echo ",��15-1";
        echo ",��15-2";
        echo ",��15-3";
        echo ",��15-4";
        echo ",��15-5";
        echo ",��15-6";
        echo ",��15-7";
        echo ",��16-1";
        echo ",��16-2";
        echo ",��16-3";
        echo ",��16-4";
        echo ",��16-5";
        echo ",��16-6";
        echo ",��16-7";
        echo ",��16-8";
        echo ",��16-9";
        echo ",��16-10";
        echo ",��16-11";
        echo ",��16-12";
        echo ",��16-13";
        echo ",��16-14";
        echo ",��16-15";
        echo ",��17-1";
        echo ",��17-2";
        echo ",��17-3";
        echo ",��17-4";
        echo ",��17-5";
        echo ",��17-6";
        echo ",��17-7";
        echo ",��17-8";
        echo ",��18-1";
        echo ",��18-2";
        echo ",��18-3";
        echo ",��18-4";
        echo ",��19-1";
        echo ",��19-2";
        echo ",��19-3";
        echo ",��19-4";
        echo ",��19-5";
        echo ",��19-6";
        echo ",��19-7";
        echo ",��19-8";
        echo ",��20";
        echo ",��21";
        echo ",��22";
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