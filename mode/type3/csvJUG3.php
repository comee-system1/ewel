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
	echo ",�t�B�[�h�o�b�N���C�ŕ��������e�𖾊m�Ɋo���Ă���";
	echo ",�t�B�[�h�o�b�N���C�Ō��߂��A�N�V�����v�����𖾊m�Ɋo���Ă���";
	echo ",�t�B�[�h�o�b�N���C�Ō��߂��l�ɑ΂���A�N�V�����v�������\���Ɏ��s���Ă���";
	echo ",�t�B�[�h�o�b�N���C�Ō��߂��`�[���ɑ΂���A�N�V�����v�������\���Ɏ��s���Ă���";
	echo ",�A�N�V�����v�������\���ɂ͎��s�ł��Ă��Ȃ����Ɏf���܂��B���̌����͉����Ǝv���܂����B���s�ł��Ă�����́u���s�ł��Ă���v�Ƃ��������������B";
	echo ",A����΂���l�K�e�B�u�ȃt�B�[�h�o�b�N�i�����Ƃ���̎w�E�F�u�_���o���v�j�̎d���ɂ��āA���Ȃ��̈ӎ���s����ς���";
	echo ",�a���񂳂�ɑ΂���l�K�e�B�u�ȃt�B�[�h�o�b�N�i�����Ƃ���̎w�E�F�u�_���o���v�j�̎d���ɂ��āA���Ȃ��̈ӎ���s����ς���";
	echo ",�`�[���S�̂ɑ΂���l�K�e�B�u�ȃt�B�[�h�o�b�N�i�����Ƃ���̎w�E�F�u�_���o���v�j�̎d���ɂ��āA���Ȃ��̈ӎ���s����ς���";
	echo ",A����̈ӎ���s�����ς����";
	echo ",�a����̈ӎ���s�����ς����";
	echo ",�`�[���S�̂̈ӎ���s�����ς����";
	echo ",���̂Q�T�Ԃ̂��Ȃ��⃁���o�[�A�`�[���S�̂̕ω��ɂ��āA��̓I�ɂ��������������B���ɂȂ��ꍇ�́A�u���ɂȂ��v�Ƃ��������������B";



	echo "\n";
	if(count($tlist[ 'ans' ])){
		foreach($tlist[ 'ans' ] as $key=>$val){
			echo "".mb_convert_encoding($val[ 'start_date' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'empnum' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei' ].$val[ 'mei' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'sei_kana' ].$val[ 'mei_kana' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'mail' ],"SJIS-WIN","UTF-8").",";
			for($i=1;$i<=12;$i++){
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
	
	echo ",���Ȃ��̐E������m�点���������B";
	echo ",���Ȃ��̐E������m�点���������B(���̑��̎�)";

	//��i�p
	echo ",���Ȃ��̃`�[���̃����o�[�i���Ȃ����d���̎w����������A�d���ɑ΂���]���ӔC�����l�j�͉��l���܂����B���Ȃ������������𔼊p�����l�ł��������������B";
	echo ",���Ȃ������̃`�[���̃��[�_�[�ɂȂ��Ă���ǂꂭ�炢�o���܂����B�u�Z�N�Z�����v�Ƃ����`���ŁA���p�����l�ł��������������B";
	echo ",�`�[���̒��ŁA���Ȃ����ł��u�ꏏ�ɓ��������v�Ǝv�������o�[���ЂƂ�I�����Ă��������B";
	echo ",�`�[���̒��ŁA���Ȃ����ł��u�ꏏ�ɓ��������Ȃ��v�Ǝv�������o�[���ЂƂ�I�����Ă��������B";
	echo ",�i����A�j�́A�j���ł����A�����ł����B";
	echo ",�i����A�j�́A���΂ł����B";
	echo ",�i����B�j�́A�j���ł����A�����ł����B";
	echo ",�i����B�j�́A���΂ł����B";
	
	//�����p
	echo ",���Ȃ��̃`�[���̃��[�_�[�i�i��i�E���[�_�[�j�j�ɂ��Ďf���܂��B";
	echo ",�i��i�E���[�_�[�j�́A�j���ł����A�����ł����B";
	echo ",���݂̃`�[���œ����n�߂Ă���ǂꂭ�炢�o���܂����B";
	echo ",���Ȃ��̃`�[���̃����o�[�́A���l���܂����B�i��i�E���[�_�[�j�����������𔼊p�����l�ł��������������B";
	
	for($i=10;$i<=143;$i++){
		echo ",��".$i;
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
			echo mb_convert_encoding($val[ 'ans1' ],"SJIS-WIN","UTF-8").",";
			echo mb_convert_encoding($val[ 'ans1_text' ],"SJIS-WIN","UTF-8").",";
			
			//��i�̎�
			if($val[ 'boss' ] == 1){
				echo mb_convert_encoding($val[ 'ans2' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans3' ],"SJIS-WIN","UTF-8").",";
				echo $obj->emp[$val[ 'ans4' ]].",";
				echo $obj->emp[$val[ 'ans5' ]].",";
				echo mb_convert_encoding($val[ 'ans6' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans7' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans8' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans9' ],"SJIS-WIN","UTF-8").",";
				echo ",";
				echo ",";
				echo ",";
				echo ",";
			}else{
				echo ",";
				echo ",";
				echo ",";
				echo ",";
				echo ",";
				echo ",";
				echo ",";
				echo ",";
				echo mb_convert_encoding($val[ 'ans2' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans3' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans4' ],"SJIS-WIN","UTF-8").",";
				echo mb_convert_encoding($val[ 'ans5' ],"SJIS-WIN","UTF-8").",";
			}
			
			for($i=10;$i<=143;$i++){
				echo mb_convert_encoding($val[ 'ans'.$i ],"SJIS-WIN","UTF-8").",";
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