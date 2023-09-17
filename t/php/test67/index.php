<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
require_once(D_PATH_HOME."t/lib/include_jud2.php");
$jud = new judge2Class();


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
$sub = $jud->getSubordinate2($where);


//本人データ取得
$mem = $jud->getMember($where);

//上司データ取得
$bossdata = $jud->getBoss($mem,$_REQUEST[ 'm' ]);
$bossname = $bossdata[ 'sei' ]." ".$bossdata[ 'mei' ]."さん";


$where[ 'bossid' ] = $_REQUEST[ 'm' ];
//データ取得
$rst = $jud->getDataResult($where,$_REQUEST[ 'type' ],"ans1,ans2");
//1ページ目データ
if($rst){
	$person = $jud->getFirstData($rst);
}


$pager  = sprintf("%d",$_REQUEST[ 'nextPage' ]+1);


//--------------------------------
//回答登録
//--------------------------------
include_once("array3.php");

$marray = array(
    1=>"①",2=>"②",3=>"③",
    4=>"④",5=>"⑤",6=>"⑥",
    7=>"⑦",8=>"⑧",9=>"⑨",
    10=>"⑩",11=>"⑪",12=>"⑫",
    13=>"⑬",14=>"⑭",15=>"⑮",
    16=>"⑯",17=>"⑰",18=>"⑱"
);
if($_REQUEST[ 'next' ]){

    if($_REQUEST[ 'type' ] == "subordinate"){

        if($pager == 3){
            $l = 2;
            $m = 1;
            for($i=0;$i<7;$i++){
                $c1 = 10+$i*$l;
                $c2 = $c1+1;
                $k = 6;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    || !$_REQUEST[ 'ans' ][$c2]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }


            $l = 2;
            $m = 1;
            for($i=0;$i<6;$i++){
                $c1 = 24+$i*$l;
                $c2 = $c1+1;
                $k = 7;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    || !$_REQUEST[ 'ans' ][$c2]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }


            $l = 2;
            $m = 1;
            for($i=0;$i<10;$i++){
                $c1 = 36+$i*$l;
                $c2 = $c1+1;
                $k = 8;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    || !$_REQUEST[ 'ans' ][$c2]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }
        }
        if($pager == 4){
            $k=9;
            $l=1;
            $m=1;
            for($i=0;$i<10;$i++){
                $c1 = 56+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }

            $k=10;
            $l=1;
            $m=1;
            for($i=0;$i<16;$i++){
                $c1 = 66+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }


            $k=11;
            $l=1;
            $m=1;
            for($i=0;$i<12;$i++){
                $c1 = 82+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }
        }

        if($pager == 5){
            $k=12;
            $l=1;
            $m=1;
            for($i=0;$i<16;$i++){
                $c1 = 94+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }

            $k=13;
            $l=1;
            $m=1;
            for($i=0;$i<15;$i++){
                $c1 = 110+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }

        }

        if($pager == 6){
            $k=14;
            $l=1;
            $m=1;
            for($i=0;$i<8;$i++){
                $c1 = 125+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }

        }

        if($pager == 7){
            $k=15;
            $l=1;
            $m=1;
            for($i=0;$i<9;$i++){
                $c1 = 133+$i*$l;
                if(
                    !$_REQUEST[ 'ans' ][$c1]
                    ){
                    $err[] = $k."．".$marray[$m]."が選択されていません。";
                }
                $m++;
            }
            if(
                    !$_REQUEST[ 'ans' ][143]
                    ){
                    $err[] = "16.が選択されていません。";
                }
        }

       //var_dump($_REQUEST,$pager);

    }else{
            //エラーチェック
            if($_REQUEST[ 'type' ] != "subordinate"){
                    if($pager == 3 ){

                            if($_REQUEST[ 'ans' ][4] == $_REQUEST[ 'ans' ][5]){
                                    $err[3] = "最も一緒に仕事をしたいと思う部下と思わない部下が同一人物です。どちらかを変更してください。";
                            }
                    }
            }
            if($pager == 5){
                $l = 3;
                $m = 1;
                for($i=0;$i<13;$i++){
                    $c1 = 10+$i*$l;
                    $c2 = $c1+1;
                    $c3 = $c2+1;
                    $k = 8;

                    if($i >= 7 ){
                        $k = $k+1;
                        if($i == 7) $m = 1;
                    }
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        || !$_REQUEST[ 'ans' ][$c2]
                        || !$_REQUEST[ 'ans' ][$c3]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                    $k=0;
                }
            }

            if($pager == 6){
                $l = 3;
                $m = 1;
                for($i=0;$i<6;$i++){
                    $c1 = 49+$i*$l;
                    $c2 = $c1+1;
                    $c3 = $c2+1;
                    $k = 10;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        || !$_REQUEST[ 'ans' ][$c2]
                        || !$_REQUEST[ 'ans' ][$c3]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }

                $l = 2;
                $m = 1;
                for($i=0;$i<4;$i++){
                    $c1 = 67+$i*$l;
                    $c2 = $c1+1;
                    $c3 = $c2+1;
                    $k = 11;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        || !$_REQUEST[ 'ans' ][$c2]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }

            }


            if($pager == 7){
                $m=1;
                for($i=75;$i<=93;$i++){
                    $c1 = $i;
                    $k = 12;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }

                $m=1;
                for($i=89;$i<=109;$i++){
                    $c1 = $i;
                    $k = 13;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }
            }

            if($pager == 8){
                $m=1;
                for($i=110;$i<=124;$i++){
                    $c1 = $i;
                    $k = 14;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }
                /*
                $m=1;
                for($i=120;$i<=127;$i++){
                    $c1 = $i;
                    $k = 15;
                    if(
                        !$_REQUEST[ 'ans' ][$c1]
                        ){
                        $err[] = $k."．".$marray[$m]."が選択されていません。";
                    }
                    $m++;
                }
                */

            }
    }

	//エラーがあったら戻す
	if($err){
		$pager = $pager-1;
	}

	//エラーがあってもデータは登録を行う
	$table = "jug_boss_text2";
	$edit = array();
	$edit[ 'where' ][ 'jmid' ] = $_REQUEST['mem'];
	if($_REQUEST[ 'type' ] == "subordinate"){
		$edit[ 'where' ][ 'type' ] = 2;
		$edit[ 'where' ][ 'bossid' ] = $_REQUEST[ 'm' ];
	}else{
		$edit[ 'where' ][ 'type' ] = 1;
		$edit[ 'where' ][ 'bossid' ] = 0;
	}
	if($_REQUEST[ 'ans4_1' ]) $edit[ 'edit' ][ 'ans4_1' ] = $_REQUEST[ 'ans4_1' ];
	if($pager == 8) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
	if($pager == 7 && $_REQUEST[ 'type' ] == "subordinate" && !$err) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");
	if($pager == 10 && $_REQUEST[ 'ans' ][2] == 0 ) $edit[ 'edit' ][ 'endtime' ] = date("Y-m-d H:i:s");

	if(count($_REQUEST[ 'ans' ])){
		foreach($_REQUEST[ 'ans' ] as $key=>$val){
			$code = "ans".$key;
			$edit[ 'edit'  ][ $code ] = $val;
		}
		if($_REQUEST[ 'ans3_other' ]) $edit[ 'edit' ][ 'ans3_other' ] = $_REQUEST[ 'ans3_other' ];
                if($_REQUEST[ 'ans' ][1] == "その他") $edit[ 'edit' ][ 'ans1_text' ] = $_REQUEST[ 'ans1_text' ];
	}

	if(count($edit[ 'edit' ])){
		$db->editUserData($table,$edit);
	}
}

if($_REQUEST[ 'flag' ] == "start"){
	//初回登録
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

$subA = "";
$subB = "";
if(count($sub)){
foreach($sub as $key=>$val){
    //あなたが最も「一緒に働きたい」と思うメンバー
    if($val[ 'id' ] == $result[ 'ans4' ]) $subA = $val[ 'sei' ]." ".$val[ 'mei' ]."さん";
    if($val[ 'id' ] == $result[ 'ans5' ]) $subB = $val[ 'sei' ]." ".$val[ 'mei' ]."さん";
}
}



//1ページ目データ
$person = array();
$person = $jud->getFirstData($result);
include_once("array2.php");
include_once("array.php");


//最後のページ
if(
        !$err &&
        ($pager == 8 && $_REQUEST[ 'type' ] == "boss" )
       || ($pager == 7 && $_REQUEST[ 'type' ] == "subordinate" )
        ){
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
		$where[ 'type' ] = 60;
		//メール配信
		$t->sendFinMail($where);
		$fin_disp = $test[ 'fin_disp' ];

		$temp = "Fin";
}

if($_REQUEST[ 'pageBack' ] ){
	$pager = $pager-2;
	//戻るボタンの時はチェックされた項目を編集
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

if($pager > 1 && $temp != "Fin"){
	//$temp = "page".$pager;
	$temp = "page".$pager;
	if($_REQUEST[ 'ans' ][1] == 0 && $_REQUEST[ 'pageBack' ] && $_REQUEST[ 'nextPage' ] == 10){
		$temp = "page";
	}
}


if($_REQUEST[ 'type' ] == "subordinate"){
	$temp = "sub".$temp;
}
if($pager > 19 && !$_REQUEST[ 'pageBack' ]){
	$temp = "Fin";
}

if($pager > 10 && $_REQUEST[ 'type' ] == "subordinate" && !$_REQUEST[ 'pageBack' ] ){
	$temp = "Fin";
}


?>