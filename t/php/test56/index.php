<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_aac.php");
require_once("include_ccaQuestion.php");

$obj = new BAmethod();
$aac  = new aacmethod();

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;
//受検時間の取得
$times = $aac->getTime($where);
$where[ 'test_id' ] = $times[ 'id' ];
$answerkey = $aac->getEa($where);
if( filter_input(INPUT_POST,"back")){
    $pager = sprintf("%d",filter_input(INPUT_POST, "nextPage" )-1);
}else{
    $pager = sprintf("%d",filter_input(INPUT_POST, "nextPage" )+1);
}
//スタート時間の登録
//初回ページ
$filter = filter_input(INPUT_POST,"temp");
$page = filter_input(INPUT_POST,"page");
if($filter != "title" && $page && filter_input(INPUT_POST,"nextPage") < 1){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$aac->setEa($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
            $flg = $t->checkExamState($where);
            if($flg[ 'exam_state' ] == 2){
                    header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
                    exit();
            }
	}
}


if($filter == "title"){
    $partname = "A部分";
    $temp = "title";
    $pager = $pager-1;
}

//下一页
if(filter_input(INPUT_POST, "next" )){
	$err = 0;
	$clum = array();
	$nextPage = filter_input(INPUT_POST, "nextPage" );
        $filters = array(
                    "ans"=>array(
                        "filter"=>FILTER_CALLBACK,
                        "flags"=>FILTER_FORCE_ARRAY,
                        "options"=>"ucwords"
                    )
            );
        $key = filter_input_array(INPUT_POST, $filters);
        if($nextPage == 1){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=1;$i<=20;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        if($nextPage == 2){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=21;$i<=29;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        
        if($nextPage == 3){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=30;$i<=49;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        
        if($nextPage == 4){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=50;$i<=58;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        
        if($nextPage == 5){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=59;$i<=68;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        if($nextPage == 6){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=69;$i<=83;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
        }
        if($nextPage == 7){ 
            $answers = $key[ 'ans' ][ $nextPage ];
            //var_dump($answers,$where);
            //エラーチェック
            $err = array();
            for($i=84;$i<=102;$i++){
                $k = "";
                if(!isset($answers[$i])){
                    $err[$i] = "问题".$i."尚未回答。";
                }
            }
            //次へボタンを押したらタイトルページ
            //ページャーもそのまま
            if(count($err) == 0  && filter_input(INPUT_POST, "next")){
                $temp = "title";
                $partname = "B部分";
                $pager = $pager-1;
            }
        }
        for($j=8;$j<=46;$j++){
            if($nextPage == $j){ 
                $answers = $key[ 'ans' ][ $nextPage ];
                //エラーチェック
                $err = array();
                $num = $j+95;
                
                if(!isset($answers[$num])){
                    $no = $num-102;
                    $err[$j] = "问题".$no."尚未回答。";
                }
            }
        }
        
        if(count($err) > 0  ) $pager = $nextPage;
	$result = $aac->setEaRst($answers,$where);
}

//回答データ取得
$answer = $aac->getEa($where);

if($_REQUEST[ 'nextPage' ] >= 46 && !filter_input(INPUT_POST,"back")){
    
    
        //------------------
        //結果計算式
        //-----------------
        $aac->setAnswerDataCalc($answer,$ave,$hensa);
	//----------------------------
	//最終ページ
	//----------------------------
	$tdetail = $obj->getTestPaper($where);

	//-------------------------------------
	//テスト側データ
	//------------------------------------
	$s_day  = split( '/', $tdetail['exam_date'] ); 
	$s_time = split( ':', $tdetail['start_time'] ); 

	$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
	$end_timestamp   = time();

	$end_timer = $end_timestamp - $start_timestamp;
	$e_time[0] = (int)($end_timer / 60);
	$e_time[1] = $end_timer % 60;

	$set = array();
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
	$fin_disp = $test[ 'fin_disp' ];
	
	$temp = "Fin";
}



?>