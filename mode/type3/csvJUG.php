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
	echo ",���C�ŕ��������e�𖾊m�Ɋo���Ă���";
	echo ",���C�Ō��߂��ڕW�𖾊m�Ɋo���Ă���";
	echo ",���C�Ō��߂��ڕW���K�؂������Ǝv���Ă���";
	echo ",���C�Ō��߂��ڕW���\���ɒB�����Ă���";
	echo ",���̂P�T�ԁAA����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA�ӎ�������";
	echo ",���̂P�T�ԁAA����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA�s����ς���";
	echo ",(�P�ȊO�̐l�j���̂P�T�ԂŁAA����̈ӎ���s�����ς����";
	echo ",���̂P�T�ԁAB����ɑ΂���t�B�[�h�o�b�N�̎d�����ӎ�����";
	echo ",���̂P�T�ԁAB����ɑ΂���t�B�[�h�o�b�N�̎d�������ۂɕς���";
	echo ",�i�P�ȊO�̐l�j���̂P�T�ԂŁAB����̈ӎ���s�����ς����";
	echo ",A����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA���̂P�T�Ԃňӎ��������Ƃ�ς������Ƃ���̓I�ɂ�������������";
	echo ",A����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA���̂P�T�Ԃŕς������Ƃ���̓I�ɂ�������������";
	echo ",B����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA���̂P�T�Ԃňӎ��������Ƃ���̓I�ɂ�������������";
	echo ",B����ɑ΂���t�B�[�h�o�b�N�̎d���ɂ��āA���̂P�T�Ԃŕς������Ƃ���̓I�ɂ�������������";
	echo ",���̂P�T�ԂŁA�t�B�[�h�o�b�N�̎d����A�����̔����Ɋւ���V���ȋC�Â��͂���܂������B����΋�̓I�ɂ��������������B";
	echo "\n";
	if(count($tlist[ 'ans' ])){
		foreach($tlist[ 'ans' ] as $key=>$val){
			echo "".mb_convert_encoding($val[ 'start_date' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'empnum' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei' ].$val[ 'mei' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei_kana' ].$val[ 'mei_kana' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'mail' ],"SJIS-WIN","UTF-8").",";
			for($i=1;$i<=6;$i++){
				$anq = "anq".$i;
				echo mb_convert_encoding($val[$anq],"SJIS-WIN","UTF-8").",";
			}
			$anq = "anq61";
			echo mb_convert_encoding($val[$anq],"SJIS-WIN","UTF-8").",";
			for($i=7;$i<=8;$i++){
				$anq = "anq".$i;
				echo mb_convert_encoding($val[$anq],"SJIS-WIN","UTF-8").",";
			}
			$anq = "anq81";
			echo mb_convert_encoding($val[$anq],"SJIS-WIN","UTF-8").",";

			for($i=9;$i<=13;$i++){
				$anq = "anq".$i;
				echo mb_convert_encoding(ereg_replace("\,|\r|\n","",commaEscape4csv($val[$anq])),"SJIS-WIN","UTF-8").",";
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
	
	echo ",�����Ƃ��ꏏ�Ɏd�����������Ǝv�����������L����I��ł��������B";
	echo ",�����Ƃ��ꏏ�Ɏd�����������Ȃ����������L����I��ł��������B";
	echo ",���Ȃ��͂ǂ̂悤�ȗ���ł����B";
	echo ",���Ȃ��͂ǂ̂悤�ȗ���ł����B(���̑���I�񂾎��̃e�L�X�g)";
	echo ",�����Ƃ��ꏏ�Ɏd�����������Ǝv�������ƏT�������炢���ډ���Ęb�����܂����B���v���C�x�[�g���d���ォ�͖₢�܂���B";
	echo ",�����Ƃ��ꏏ�Ɏd�����������Ȃ������ƏT�������炢���ډ���Ęb�����܂����B���v���C�x�[�g���d���ォ�͖₢�܂���B";
	echo ",���Ȃ��́A�T�������炢��i�ƒ��ډ���Ęb���܂����B���v���C�x�[�g���d���ォ�͖₢�܂���B";
	$no = 1;
	for($i=5;$i<=313;$i++){
		echo ",��".$no;
		$no++;
	}
	echo "\n";

	if(count($tlist[ 'ans' ])){

		foreach($tlist[ 'ans' ] as $key=>$val){
			echo "=\"".mb_convert_encoding($val[ 'empnum' ],"SJIS-WIN","UTF-8")."\",";
			echo mb_convert_encoding($val[ 'sei' ].$val[ 'mei' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei_kana' ].$val[ 'mei_kana' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'birth' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'age' ],"SJIS-WIN","UTF-8").",";
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
			echo $times.",";
			echo $val[ 'boss' ].",";
			echo $obj->emp[$val[ 'rep'  ]].",";
			echo $obj->emp[$val[ 'ans1' ]].",";
			echo $obj->emp[$val[ 'ans2' ]].",";
			if($val[ 'boss' ] == 1){
				echo $array_pos[$val[ 'ans3' ]].",";
			}else{
				echo ",";
			}
			echo mb_convert_encoding($val[ 'ans3_other' ],"SJIS-WIN","UTF-8").",";
			if($val[ 'boss' ] == 1){
				//��i�̂Ƃ�
				echo $val[ 'ans4' ].",";
				echo $val[ 'ans4_1' ].",";
				echo ",";
			}else{
				//�����̂Ƃ�
				echo ",";
				echo ",";
				echo $val[ 'ans4' ].",";

			}
			for($i=5;$i<=313;$i++){
				$ans = "ans".$i;
				echo $val[$ans].",";
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