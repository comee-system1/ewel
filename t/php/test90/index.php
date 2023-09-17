<?PHP
ini_set('display_errors', "On");
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
require_once(D_PATH_HOME."t/lib/include_jud6.php");
$jud = new judge5Class();


if($_REQUEST[ 'type' ] == 'boss'){
    $max = 5;
}else{
    $max = 7;    
}

//where句の作成
$where = array();
//var_dump($_SESSION[ 'jud' ][ 'login_id' ]);
//読み込むhtmlファイルの指定
//上司用
if($_REQUEST[ 'anq' ]){

}else
if($_REQUEST[ 'mem' ] != $_SESSION[ 'judge' ][ 'login_id' ]){
	echo "検査に不具合が発生しました。再度受検をお願いします。";
	exit();
}


$where[ 'jmid' ] = $_REQUEST[ 'mem' ];
//部下データ取得
$sub = $jud->getSubordinate($where);

//本人データ取得
$mem = $jud->getMember($where);

//上司データ取得
$bossdata = $jud->getBoss($mem,$_REQUEST[ 'm' ]);
$bossname = $bossdata[ 'sei' ]." ".$bossdata[ 'mei' ]."";

$where[ 'bossid' ] = $_REQUEST[ 'm' ];
//データ取得
$rst = $jud->getDataResult($where,$_REQUEST[ 'type' ],"ans1,ans2");


//1ページ目データ
if($rst){
	$person = $jud->getFirstData($rst);
}


$pager  = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);




$marray = array(
    1=>"①",2=>"②",3=>"③",
    4=>"④",5=>"⑤",6=>"⑥",
    7=>"⑦",8=>"⑧",9=>"⑨",
    10=>"⑩",11=>"⑪",12=>"⑫",
    13=>"⑬",14=>"⑭",15=>"⑮",
    16=>"⑯"
);

$err = [];

if ($_REQUEST[ 'next' ]) {

    $table = "jug_boss_text6";
    if ($_REQUEST[ 'ans' ] && count($_REQUEST[ 'ans' ]) > 0) {
        foreach ($_REQUEST[ 'ans' ] as $key => $value) {
            $edit[ 'where' ][ 'jmid' ] = $_REQUEST[ 'mem' ];
            if ($_REQUEST[ 'type' ] == "subordinate") {
                $edit[ 'where' ][ 'type' ] = 2;
                $edit[ 'where' ][ 'bossid' ] = $_REQUEST[ 'm' ];
            } else {
                $edit[ 'where' ][ 'type' ] = 1;
                $edit[ 'where' ][ 'bossid' ] = 0;
            }
            $k = "ans".$key;
            $edit[ 'edit' ][ $k ] = $value;
            $db->editUserData($table, $edit);
        }
    }

}


if($_REQUEST[ 'flag' ] == "start"){
	//初回登録
    $where = [];
	$where[ 'tid' ] = $mem[ 'tid' ];
	$where[ 'id'  ] = $mem[ 'id'  ];
	$where[ 'type' ] = "1";
	if($_REQUEST[ 'type' ] == "subordinate"){
		$where[ 'type' ] = "2";
		$where[ 'bossid' ] = $_REQUEST[ 'm' ];
	}

	$jud->setStartData($where);
}
$where[ 'bossid' ] = $_REQUEST[ 'm' ];
//データ取得
if ($_REQUEST[ 'type' ] == "boss") {
    $where[ 'jmid' ] = $_REQUEST[ 'm' ];
}
if ($_REQUEST[ 'type' ] == "subordinate") {
    $where[ 'jmid' ] = $_REQUEST[ 'mem' ];
}

$result = $jud->getDataResult($where,$_REQUEST[ 'type' ]);
if (!$bossdata && $_REQUEST[ 'type' ] == "boss") {
    $bossname = $result[ 'ans1' ];
}


//--------------------------------
//回答登録
//--------------------------------
if($_REQUEST[ 'type' ] == "boss"){
    include_once("array.php");
}else{
    include_once("array2.php");
}


//エラーチェック
if (!$_REQUEST[ 'pageBack' ]) {
    if($_REQUEST[ 'type' ] == "subordinate"){

        if ($pager == 8) {

            // if (strlen($result[ 'ans16' ]) == 0) $err[] = "設問16が未回答です。";
            // if (strlen($result[ 'ans17' ]) == 0) $err[] = "設問17が未回答です。";
            // if (strlen($result[ 'ans18' ]) == 0) $err[] = "設問18が未回答です。";

        }else
        if ($pager == 7) {

            $q = 12;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 13;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }

            /*
            $q = 14;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 15;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            */

        }else
        if ($pager == 6) {

            $q = 10;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 11;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }

        }else
        if ($pager == 5) {

            $q = 8;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 9;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }


        }else
        if ($pager == 4) {

            $q = 6;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 7;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }

        }else
        if ($pager == 3) {
            $q = 3;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 4;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 5;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }


        }else
        if ($pager == 2) {
            if (strlen($result[ 'ans1' ]) == 0) $err[] = "設問1(1)が未回答です。";
            if (strlen($result[ 'ans2' ]) == 0) $err[] = "設問1(2)が未回答です。";
            if (strlen($result[ 'ans3' ]) == 0) $err[] = "設問1(3)が未回答です。";
            if (strlen($result[ 'ans4' ]) == 0) $err[] = "設問1(4)が未回答です。";
            if (strlen($result[ 'ans5' ]) == 0) $err[] = "設問1(5)が未回答です。";
            if (strlen($result[ 'ans6' ]) == 0) $err[] = "設問1(6)が未回答です。";
            
            $q = 2;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."が未回答です。";
                }
            }

        }
    }else{

        if ($pager == 6) {
            $q = 10;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 11;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }

        }
        if ($pager == 5) {
            $q = 8;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 9;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
        }
        if ($pager == 4) {
            $q = 6;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
            $q = 7;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }
        }

        if ($pager == 3) {
            
            $q = 3;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }

            $q = 4;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }

            $q = 5;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."(".$key.")が未回答です。";
                }
            }


        }
        if ($pager == 2) {
   
            if (strlen($result[ 'ans1' ]) == 0) {
                $err[] = "設問1が未回答です。";
            }
            if (strlen($result[ 'ans2' ]) == 0) {
                $err[] = "設問2(1)が未回答です。";
            }
            if (strlen($result[ 'ans3' ]) == 0) {
                $err[] = "設問2(2)が未回答です。";
            }
            if (strlen($result[ 'ans4' ]) == 0) {
                $err[] = "設問2(3)が未回答です。";
            }
            if (strlen($result[ 'ans5' ]) == 0) {
                $err[] = "設問2(4)が未回答です。";
            }

            if (strlen($result[ 'ans6' ]) == 0) {
                $err[] = "設問2(5)が未回答です。";
            }
            if (strlen($result[ 'ans7' ]) == 0) {
                $err[] = "設問2(6)が未回答です。";
            }

        }
    }
}

if($err){
    $pager = $pager-1;

}

//最後のページ
if(
        !$err &&
        ($pager == 6 && $_REQUEST[ 'type' ] == "boss" )
       || ($pager == 8 && $_REQUEST[ 'type' ] == "subordinate" )
        ){
        
        $table = "jug_boss_text6";
        $edit = array();
        $edit[ 'where' ][ 'jmid' ] = $_REQUEST['mem'];
        if($_REQUEST[ 'type' ] == "subordinate"){
            $edit[ 'where' ][ 'type' ] = 2;
            $edit[ 'where' ][ 'bossid' ] = $_REQUEST[ 'm' ];
        }else{
            $edit[ 'where' ][ 'type' ] = 1;
            $edit[ 'where' ][ 'bossid' ] = 0;
        }
       // if($_REQUEST[ 'ans4_1' ]) $edit[ 'edit' ][ 'ans4_1' ] = $_REQUEST[ 'ans4_1' ];
       // if($pager == 8) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
        if($pager == 6 && $_REQUEST[ 'type' ] == "boss" && !$err) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
        if($pager == 8 && $_REQUEST[ 'type' ] == "subordinate" && !$err) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
       // if($pager == 10 && $_REQUEST[ 'ans' ][2] == 0 ) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
        $db->editUserData($table,$edit);

		$tdetail = $mem;
		$s_day  = explode( '-', $tdetail['exam_date'] );
		$s_time = explode( ':', $tdetail['start_time'] );

		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();
		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'complete_flg' ] = 1;
		$set[ 'level'      ] = $lv;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);

		$tbl = "t_testpaper";
		$where = array();
		$where[ 'id' ] = $mem[ 'tid' ];
		$obj->editDetail($tbl,$set,$where);
		$where = array();
		$where[ 'testgrp_id' ] = $mem[ 'testgrp_id' ];
		$where[ 'exam_id' ] = $mem[ 'texam_id' ];
		$where[ 'type' ] = 90;
		//メール配信
		$t->sendFinMail($where);
		$fin_disp = $test[ 'fin_disp' ];

		$temp = "Fin";
}

if($_REQUEST[ 'pageBack' ] ){
	$pager = $pager-2;
	//戻るボタンの時はチェックされた項目を編集
    if($pager == 1) $pager = "";
}

if($_REQUEST[ 'temp' ] == "page" && $temp != "Fin" ){
	$temp = "page";
}
if($temp != "Fin" && $temp != "guide" ){
	$temp = "page";
}

if($_REQUEST[ 'flag' ] == "start" || $_REQUEST[ 'pageBack' ]){
	$temp = $_REQUEST[ 'temp' ];
}

// if($pager > 1 && $temp != "Fin"){
// 	//$temp = "page".$pager;
// 	$temp = "page".$pager;
// 	if($_REQUEST[ 'ans' ][1] == 0 && $_REQUEST[ 'pageBack' ] && $_REQUEST[ 'nextPage' ] == 10){
// 		$temp = "page";
// 	}
// }




if($_REQUEST[ 'type' ] == "subordinate" && $temp != 'guide'){
	$temp = "sub".$temp.$pager;
    if($temp == "subpage1"){
        $temp = "subpage";
    }
}

if($pager > 19 && !$_REQUEST[ 'pageBack' ]){
	$temp = "Fin";
}

if($pager > 7 && $_REQUEST[ 'type' ] == "subordinate" && !$_REQUEST[ 'pageBack' ] ){
	$temp = "Fin";
}

if($pager < 6 && $pager > 1 && $_REQUEST[ 'type' ] == 'boss'){
    $temp = "page_".$pager;
}


if($temp == "guide" && $_REQUEST[ 'type' ] == 'subordinate'){
    $temp = "subguide";
}
//var_dump($temp);
?>