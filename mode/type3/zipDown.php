<?PHP
	require_once("./lib/zip_lib.php");

	$zipfile = new zipfile();
	//�f�B���N�g���ȉ��ɂ���t�@�C���擾
	$dirs = D_PATH_HOME."pdfDownload/".$sec."_".$third."/*";
	$glob = glob($dirs);

	//�t�@�C���̃R�s�[
	foreach($glob as $key=>$val){
		$filename = basename($val);
		copy($val,D_PATH_HOME.$filename);
		//���k����t�@�C���̃p�X
		$file1 = $filename;
		//�t�@�C����ǉ�
		$zipfile->addFile(file_get_contents($file1), $file1);
		file_put_contents(D_PATH_HOME.'pdfDownload/'.$sec.'_'.$third.'.zip', $zipfile->file());
		//�t�@�C���̍폜
		unlink($file1);
	}
	
	$down = "./pdfDownload/".$sec."_".$third.".zip";
	$file = basename($down);
	header('Content-Type: application/octet-stream'); 
	header('Content-Disposition: attachment; filename="'.$file.'"'); 
	readfile($down);

exit();
?>
