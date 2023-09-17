<?PHP

require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_bco.php");
define("COLLECT_NUM",42);
$array_collect[true] = "〇";
$array_collect[false] = "×";
$obj = new BAmethod();
$bco  = new BCOmethod();

//テスト情報取得
$testdata = $bco->getTest();
$array_number[1] = "①";
$array_number[2] = "②";
$array_number[3] = "③";
$array_number[4] = "④";
$array_number[5] = "⑤";
$array_number[6] = "⑥";
$array_number[7] = "⑦";
$array_number[8] = "⑧";
$array_number[9] = "⑨";
$array_number[10] = "⑩";
$array_judge[1] = "正";
$array_judge[2] = "誤";
$array_alpha[1] = "a";
$array_alpha[2] = "b";
$array_alpha[3] = "c";
$array_alpha[4] = "d";
$array_alpha[5] = "e";
$array_alpha[6] = "f";
$array_alpha[7] = "g";
$array_alpha[8] = "h";

$array_roma[1] = "A)";
$array_roma[2] = "B)";
$array_roma[3] = "C)";
$array_roma[4] = "D)";
$array_roma[5] = "E)";
$array_roma[6] = "F)";
$array_roma[7] = "G)";
$array_roma[8] = "H)";

$array_kana[1] = "(ア)";
$array_kana[2] = "(イ)";
$array_kana[3] = "(ウ)";
$array_kana[4] = "(エ)";
$array_kana[5] = "(オ)";
$array_kana[6] = "(カ)";
$array_kana[7] = "(キ)";

if(empty($_REQUEST['temp'])){
	unset($_SESSION[ 'visit' ][ 'fin' ] );
}
$result=[];
//トークンの確認
if(
	//true || 
	($_SESSION[ 'visit' ][ 'fin' ] == 1 ) ||
	(
		$_POST[ 'csrf_token' ] && 
		$_POST[ 'csrf_token' ] === $_SESSION['visit']['csrf_token'] &&
		$_POST[ 'time' ] == $_SESSION['visit']['time'] 
	)
	){
	//ページのキー設定
	$status = 0;
	$key = ($_REQUEST['key'] > 0 )?$_REQUEST[ 'key' ]:1;
	if($_REQUEST[ 'next' ]){$key=$key+1; $status=1;}
	if($_REQUEST[ 'back' ]){$key=$key-1; $status=1;}
	//エラーチェック
	if($_REQUEST[ 'temp' ] == "page" && $_REQUEST[ 'next' ]){
		$key=$bco->errorCheck($key);
	}
	//データ登録
	$set = [];
	$i=0;
	foreach($_REQUEST as $keys=>$values){
		if(preg_match("/^ans/",$keys)){
			$set[$i]["key"] = preg_replace("/^ans/","select",$keys);
			$set[$i]["value"] = $values;
			$i++;
			$status = 1;
		}
	}

	if($_SESSION[ 'visit' ][ 'fin' ] != 1){
		$bco->setBasicOnline($set,$status);
	}
	
	//ページ設定
	$temp = "page".$key;
	if($key >= 25 || $_REQUEST[ 'pdf' ]){
		
		//検査終了
		//合格判定
		$result = $bco->getBasicOnlineFin();
		$pass = $bco->checkPasswd($result);
		$pass = $bco->passed;
		

		$result = [];
		$result = $bco->getBasicOnlineFin();
		$_SESSION[ 'visit' ][ 'collect' ] = $bco->collect;
		$message = $bco->message;
		$errmsg = $bco->errmsg;
		$collect = $_SESSION[ 'visit' ][ 'collect' ];
		//設問毎の正解判定
		$check = $bco->check;
		//PDFの出力
		if($_REQUEST[ 'pdf' ]){
			require_once('../lib/mpdf60/mpdf.php');
			define('FPDF_FONTPATH','../font/');
			require('../mbfpdf.php');
			$exam_date = date('Y年m月d日',strtotime($result[ 'regist_ts' ]));
			$contents = file_get_contents("../t/template/test76/pdftemplate.html");
			$contents = preg_replace("/##COLLECT##/",$collect,$contents);
			$contents = preg_replace("/##MESSAGE##/",$message,$contents);
			$contents = preg_replace("/##ERRMSG##/",$errmsg,$contents);
			$contents = preg_replace("/##EXAM_DATE##/",$exam_date,$contents);
			$contents = preg_replace("/##NAME##/",$bco->namae,$contents);
			for($i=1;$i<=53;$i++){
				$td = $array_collect[$check[$i]];
				$contents = preg_replace("/##TD".$i."##/",$td,$contents);
				$bk = "";
                if($check[$i] == false) $bk = "pink";
				$contents = preg_replace("/##BK".$i."##/",$bk,$contents);
			}

			$mpdf = new mPDF('ja', 'A4', 0, '', 15, 15, 16, 16, 9, 9);
			$mpdf->ignore_invalid_utf8 = true;
			$mpdf->WriteHTML($contents);

			$date = date("Ymdhis");
			$mpdf->Output($date.'.pdf', 'D');
	
			exit();
		}
		$where = [];
		$where['type'] = 76;
		$where['testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id' ];
		$where['exam_id'] = $_SESSION[ 'visit' ][ 'exam_id' ];
		$tdetail = $obj->getTestPaper($where);
		
		//-------------------------------------
		//テスト側データ
		//------------------------------------

		$exam_date = date('Y/m/d',strtotime($result[ 'regist_ts' ]));
		$start_time = date('H:i:s',strtotime($result[ 'regist_ts' ]));
		$s_day  = explode( '/', $exam_date ); 
		$s_time = explode( ':', $start_time ); 
		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();
		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		if($pass == 1){
			$set[ 'exam_state' ] = 2;
		
			$set[ 'level'      ] = $lv;
			$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
			$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
										,date("Y"),date("m"),date("d")
										,date("H"),date("i"),date("s")
										);
			
			$tbl = "t_testpaper";
			
			$obj->editDetail($tbl,$set,$where);

			//complete_flgの設定
			$t->editCompleteFlg($where);
			//メール配信
			$t->sendFinMail($where);
		}
		$_SESSION[ 'visit' ][ 'fin' ] = 1;
		$temp = "pagefin";

	}
	
	//時間の確認
	$time = $bco->timeleft-$bco->nowtime;
	
	
	if($time < 0 && $_SESSION[ 'visit' ][ 'fin' ] != 1){
		unset($_SESSION['visit']);
		header("Location:".D_URL_TEST."test/76/?k=".$_REQUEST[ 'k' ]);
		exit();
	}

}else{
	if($_REQUEST[ 'temp' ] == "page"){
		$_SESSION[ 'error' ] = "不正な操作がありました。最初からやり直してください。";
	}
	unset($_SESSION[ 'visit' ][ 'fin' ]);
	$where = [];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
	$obj->setStartTime($where);
	$temp = "guide";
	$set = [];
	$status = 0;
	$bco->setBasicOnline($set,$status);
}


//テスト結果データ取得
$result = $bco->getBasicOnline();


//最終結果
//合格時も不合格時も両方同じ画面を出す
if($result[ 'status' ] == 2){
//	if($result[ 'passed' ] == 1){
		$temp = "pagefin";
//	}else{
//		unset($_SESSION['visit']);
//		header("Location:".D_URL_TEST."test/76/?k=".$_REQUEST[ 'k' ]);
//		exit();
		
//	}
	
}


$csrf_token = uniqid("token-");

$_SESSION['visit']['csrf_token'] = $csrf_token;
$_SESSION['visit']['time'] = $time;

?>