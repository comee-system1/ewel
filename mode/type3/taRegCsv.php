<?PHP
//-------------------------------------------
//CSV�쐬
//
//
//
//
//
//-------------------------------------------

require_once("./lib/include_taRegCsv.php");

$obj = new cusCsvMethod();
$fileName = "tamen.csv";

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . $fileName);

$where[ 'partner_id'  ] = $ptid;
$where[ 'customer_id' ] = $id;
$where[ 'testgrp_id'  ] = $sec;


$tlist = $obj->getTestdetail($where);
echo "��]����ID,";
echo "��]���Җ�,";
echo "��]���ҏ�������,";
echo "�]����ID,";
echo "�]���҃p�X���[�h,";
echo "�]���Җ�,";
echo "�]���ҏ���������,";
echo "�֌W��";
echo "\n";
if(count($tlist)){
	foreach($tlist as $key=>$val){
		echo $val[ 'hv_id' ].",";
		echo mb_convert_encoding($val[ 'hv_name'  ],"sjis-win","UTF-8").",";
		echo mb_convert_encoding($val[ 'hv_busyo' ],"sjis-win","UTF-8").",";
		echo $val[ 'ev_id'   ].",";
		echo $val[ 'ev_pwd'  ].",";
		echo mb_convert_encoding($val[ 'ev_name'    ],"sjis-win","UTF-8").",";
		echo mb_convert_encoding($val[ 'ev_busyo'   ],"sjis-win","UTF-8").",";
		echo mb_convert_encoding($val[ 'relation'   ],"sjis-win","UTF-8")."";
		echo "\n";
	}
}

exit();
?>