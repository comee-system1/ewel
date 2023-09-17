<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
require_once(D_PATH_HOME."t/lib/include_jud5.php");
$jud = new judge5Class();

if($_REQUEST[ 'type' ] == 'boss'){
    $max = 6;
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

    $table = "jug_boss_text5";
    if (count($_REQUEST[ 'ans' ]) > 0) {
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
$result = $jud->getDataResult($where,$_REQUEST[ 'type' ]);
if (!$bossdata && $_REQUEST[ 'type' ] == "boss") {
    $bossname = $result[ 'ans5' ];
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

            $q = 22;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 23;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 24;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            // 文字数チェック　山本対応
            // 部下版
            $q = 20;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }
            $q = 21;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }
            $q = 22;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }
            // 上司版
            $q = 25;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }
            $q = 26;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }
            $q = 27;
            foreach($line[$q] as $key=>$value)
            $a = "ans".$value['key'];
            if(mb_strlen($result[ $a ]) >= 500){
                $err[] = "設問".$q."は500文字以内で入力してください。";
            }

        }else
        if ($pager == 7) {

            $q = 20;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 21;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }

        }else
        if ($pager == 6) {

            $q = 18;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 19;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }

        }else
        if ($pager == 5) {

            $q = 16;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 17;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }


        }else
        if ($pager == 4) {

            $q = 13;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
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


        }else
        if ($pager == 3) {
            $q = 10;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }

            $total = $result[ 'ans19' ]+$result[ 'ans20' ]+$result[ 'ans21' ]+$result[ 'ans22' ];
            if ($total != 100) {
                $err[] = "設問11に不備があります。";
            }
            if (strlen($result[ 'ans23' ]) == 0) {
                $err[] = "設問12が未回答です。";
            }


        }else
        if ($pager == 2) {

            if (strlen($result[ 'ans1' ]) == 0) {
                $err[] = "設問1が未回答です。";
            }
            if (strlen($result[ 'ans2' ]) == 0) {
                $err[] = "設問2が未回答です。";
            }
            if ($result[ 'ans3' ] == "-") {
                $err[] = "設問3が未回答です。";
            }

            if (strlen($result[ 'ans5' ]) == 0) {
                $err[] = "設問4が未回答です。";
            }
            if (strlen($result[ 'ans6' ]) == 0) {
                $err[] = "設問5が未回答です。";
            }
            if (strlen($result[ 'ans7' ]) == 0) {
                $err[] = "設問6が未回答です。";
            }
            if (
                strlen($result[ 'ans8' ]) == 0  ||
                strlen($result[ 'ans9' ]) == 0
            ) {
                    $err[] = "設問7が未回答です。";
                }
            if (strlen($result[ 'ans10' ]) == 0) {
                $err[] = "設問8が未回答です。";
            }
            if (
                strlen($result[ 'ans11' ]) == 0 ||
                strlen($result[ 'ans12' ]) == 0 ||
                strlen($result[ 'ans13' ]) == 0 ||
                strlen($result[ 'ans14' ]) == 0
            ) {
                    $err[] = "設問9が未回答です。";
                }

        }
    }else{
        if ($pager == 7) {
            $q = 19;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            // $q = 20;
            // $a = "ans".$line[$q][1][ 'key' ];
            // if (strlen($result[ $a ]) == 0) {
            //     $err[] = "設問".$q."が未回答です。";
            // }
            // $q = 21;
            // $a = "ans".$line[$q][1][ 'key' ];
            // if (strlen($result[ $a ]) == 0) {
            //     $err[] = "設問".$q."が未回答です。";
            // }
            // $q = 22;
            // $a = "ans".$line[$q][1][ 'key' ];
            // if (strlen($result[ $a ]) == 0) {
            //     $err[] = "設問".$q."が未回答です。";
            // }
        }
        if ($pager == 6) {
            $q = 17;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 18;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
        }
        if ($pager == 5) {
            $q = 15;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
            $q = 16;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
        }
        if ($pager == 4) {
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
            $q = 14;
            foreach ($line[$q] as $key=>$value) {
                $a = "ans".$value[ 'key' ];
                if (strlen($result[ $a ]) == 0) {
                    $err[] = "設問".$q."-".$key."が未回答です。";
                }
            }
        }

        if ($pager == 3) {
            if (
            strlen($result[ 'ans11' ]) == 0 ||
            strlen($result[ 'ans12' ]) == 0 ||
            strlen($result[ 'ans13' ]) == 0 ||
            strlen($result[ 'ans14' ]) == 0
        ) {
                $err[] = "設問9が未回答です。";
            }

            $total = $result[ 'ans15' ]+$result[ 'ans16' ]+$result[ 'ans17' ]+$result[ 'ans18' ];
            if ($total != 100) {
                $err[] = "設問10に不備があります。";
            }
            if (strlen($result[ 'ans19' ]) == 0) {
                $err[] = "設問11が未回答です。";
            }
        }
        if ($pager == 2) {
            if (strlen($result[ 'ans1' ]) == 0) {
                $err[] = "設問1が未回答です。";
            }
            if (strlen($result[ 'ans2' ]) == 0) {
                $err[] = "設問2が未回答です。";
            }
            if (strlen($result[ 'ans3' ]) == 0) {
                $err[] = "設問3が未回答です。";
            }

            if (strlen($result[ 'ans5' ]) == 0) {
                $err[] = "設問4が未回答です。";
            }
            if (strlen($result[ 'ans6' ]) == 0) {
                $err[] = "設問5が未回答です。";
            }
            if (strlen($result[ 'ans7' ]) == 0) {
                $err[] = "設問6が未回答です。";
            }
            if (
            strlen($result[ 'ans8' ]) == 0  ||
            strlen($result[ 'ans9' ]) == 0
        ) {
                $err[] = "設問7が未回答です。";
            }
            if (strlen($result[ 'ans10' ]) == 0) {
                $err[] = "設問8が未回答です。";
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
        ($pager == 7 && $_REQUEST[ 'type' ] == "boss" )
       || ($pager == 8 && $_REQUEST[ 'type' ] == "subordinate" )
        ){
        
        $table = "jug_boss_text5";
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
        if($pager == 7 && $_REQUEST[ 'type' ] == "boss" && !$err) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
        if($pager == 8 && $_REQUEST[ 'type' ] == "subordinate" && !$err) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
       // if($pager == 10 && $_REQUEST[ 'ans' ][2] == 0 ) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
        $db->editUserData($table,$edit);

        


		$tdetail = $mem;
		$s_day  = split( '-', $tdetail['exam_date'] );
		$s_time = split( ':', $tdetail['start_time'] );

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
		$where[ 'type' ] = 86;
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

if($pager < 7 && $pager > 1 && $_REQUEST[ 'type' ] == 'boss'){
    $temp = "page_".$pager;
}


if($temp == "guide" && $_REQUEST[ 'type' ] == 'subordinate'){
    $temp = "subguide";
}

?>