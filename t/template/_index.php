<?PHP

/*
require_once('DB.php');
if($_SERVER["SERVER_NAME"] == "abc.under.jp"){
	require_once('Auth.php');
}else{
	require_once('../install/Auth/Auth.php');
}*/

require_once("../init/init.php");
require_once(D_PATH_HOME."/lib/include_method.php");
require_once(D_PATH_HOME."/lib/include_t.php");
//アナリティクス用
require_once(D_PATH_HOME."/lib/include_server.php");

require_once(D_PATH_HOME."/lib/include_AAP.php");


session_start();
$db = new method();

$t  = new tMethod();
$sv  = new Server();
$aap = new aapClass();

$dir = base64_decode($_REQUEST[ 'k' ]);
$now = sprintf("%04d%02d%02d",date('Y'),date('m'),date('d'));
//ユーザーエージェント判別
$ua = $db->mobile_redirect();



setcookie('DUMMY', '', time()+1800000);
if(!$_COOKIE){
	$cookieMsg = "cookieを有効にしてください。";
}
if($_REQUEST[ 'enq' ]){
	$set = array();
	$set[ 'test_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
	$set[ 'exam_id' ] = $_SESSION[ 'visit' ][ 'exam_id' ];
	$set[ 'ans1'    ] = $_REQUEST[ 'data' ][1];
	$set[ 'ans2'    ] = $_REQUEST[ 'data' ][2];
	$set[ 'ans3'    ] = $_REQUEST[ 'data' ][3];
	$set[ 'ans4'    ] = $_REQUEST[ 'data' ][4];
	$set[ 'ans5'    ] = $_REQUEST[ 'data' ][5];
	$set[ 'ans6'    ] = $_REQUEST[ 'data' ][6];
	$set[ 'ans7'    ] = $_REQUEST[ 'data' ][7];
	$set[ 'ans8'    ] = $_REQUEST[ 'data' ][8];
	$set[ 'ans9'    ] = $_REQUEST[ 'data' ][9];
	$tbl = "t_enq";
	$db->setUserData($tbl,$set);
	exit();
}

//テストデータ取得
$where[ 'dir'  ] = $dir;
$where[ 'type' ] = 0;
$test = $t->getTest($where);
$testid = $test[ 'id' ];

$login_id = $test[ 'login_id' ];
$enq_status = $test[ 'enq_status' ];
$language = $test[ 'language' ];
//テストタイプ全部取得
$alltest = $t->getAllTest($where);
$firstType = $alltest[ 'type' ];
if(!$test){
	$temp = "error";
}


$from = preg_replace("/\//","",$test[ 'period_from' ]);
$to   = preg_replace("/\//","",$test[ 'period_to'   ]);

if($now < $from ){
	switch($language){
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		case "2":
			$errmsg = "报名期间已经结束。";
		break;
		default:
			if($firstType == 49){
				$errmsg = "受講期間が終了しています。";
			}else{
				$errmsg = "受検期間が終了しています。";
			}
		break;
	}
	$disd = "DISABLED";
	$temp = "error";

}

if($now > $to ){
	switch($language){
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		case "2":
			$errmsg = "报名期间已经结束。";
		break;
		default:
			if($firstType == 49){
				$errmsg = "受講期間が終了しています。";
			}else{
				$errmsg = "受検期間が終了しています。";
			}
		break;
	}
	$disd = "DISABLED";
	$temp = "error";
}


if(strlen($test[ 'en' ]) && $test[ 'en' ] == 0){
	switch($language){
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		case "2":
			$errmsg = "报名期间已经结束。";
		break;
		default:
			if($firstType == 49){
				$errmsg = "受講期間が終了しています。";
			}else{
				$errmsg = "受検期間が終了しています。";
			}
		break;
	}
	$disd = "DISABLED";
	$temp = "error";
	
}


if($login_id){
	$glob = glob("../img/".$login_id.".*");

}
if($glob[0]){
	$logoName = basename($glob[0]);
	$logo = "<img src='".D_URL."/img/".$logoName."' >";
}
if($_REQUEST[ 'exam_id']){
	$where = array();
	$where[ 'testgrp_id' ] = $test[ id ];
	$where[ 'exam_id'    ] = $_REQUEST[ 'exam_id' ];
	$testdata = $t->getPaper($where);
}


//----------------------------------
//多面評価テストの確認
//test_idのみでチェック
//----------------------------------

$taFlg = $t->tamenCheck($test);

if($taFlg){
	//多面評価の時はこちらで処理ファイルをinclude
	include_once("taIndex.php");


}elseif($alltest[ 'type' ] == 57 &&  !filter_input(INPUT_POST,"next") && !count($_SESSION[ 'visit' ])){ //AAP検査
    
    if(filter_input(INPUT_POST,"man") 
       || filter_input(INPUT_POST,"woman")   
            ){
        $where = array();
        if(filter_input(INPUT_POST,"man") ){
            $where[ 'gender' ] = 1;
        }else{
            $where[ 'gender' ] = 2;
        }
        
        $where[ 'testgrp_id' ] = $test[ 'id' ];
        if($aap->checklogin($where)){
           
            $temp = "regist57";
        }else{
            $errmsg = "已经正在检验";
            $temp = "login57";
        }
    }else{
        $temp = "login57";
    }
    
   
}else{//多面評価else

	//--------------------------------
	//現在登録されているsessionと引数のｋを比較
	//相違があればsession outを行う
	//--------------------------------
	//前にページが無い時はセッションを消す

	if(!$_SERVER['HTTP_REFERER']){
		$_SESSION[ 'visit' ] = array();
	}
	if(count($_SESSION[ 'visit' ])){
            if($_SESSION[ 'visit' ][ 'k' ] != $_REQUEST[ 'k' ]){
                $_SESSION[ 'visit' ] = array();
                header("Location:/?k=".$_REQUEST[ 'k' ]);
                exit();
            }
	}


	//-----------------------------------
	//携帯用検査完了画面から移動したとき
	//-----------------------------------
	if($ua && $_REQUEST[ 'mobileFin' ]){
		//携帯の場合はセッションが効かないので、
		//リダイレクトさせない

		//テストデータ取得
		$where = array();
		$where[ 'exam_id'    ] = $_REQUEST[ 'exam_id' ];
		$where[ 'testgrp_id' ] = $test[ id ];
		$testlink = $t->getTestLink($where);
		//テスト残り
		$rest = 0;
		foreach($testlink as $key=>$val){
			if($val[ 'exam_state' ] != 2){
				$rest++;
			}
		}
		$temp = "menu";
		
	}else
	//-----------------------------------
	//ログイン完了後はコチラ
	//-----------------------------------
	if(count($_SESSION[ 'visit' ])){
		//テストデータ取得
		$where = array();
		$where[ 'exam_id'    ] = $_SESSION[ 'visit' ][ 'exam_id' ];
		$where[ 'testgrp_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];

		$testlink = $t->getTestLink($where);


		//app検査のとき
		if($testlink[0][ 'type' ] == 57){
			//テスト完了画面から来たときはcodeがget値にある
			//sessionのvisitを消す
			if(filter_input(INPUT_GET,"code") == "fin"){
				$_SESSION[ 'visit' ] = array();
				header("Location:/?k=".filter_input(INPUT_GET,"k"));
				exit();
			}
		}
		//テスト残り
		$rest = 0;
		foreach($testlink as $key=>$val){
			if($val[ 'exam_state' ] != 2){
				$rest++;
			}
			//数学検定orIQの時
			//受検中でも残数から減らす
			if(
				$val[ 'type' ] == 13 ||
				$val[ 'type' ] == 35 || 
				$val[ 'type' ] == 9
				){
				if($val[ 'exam_state' ] == 1){
					$rest = $rest-1;
				}
			}
		}
		//テストの残りが無い時セッションを切る
		if($rest == 0){
			//$_SESSION[ 'visit' ] = array();
		}
		$temp = "menu";
	}else{
	//-----------------------------------
	//ログイン完了前はコチラ
	//-----------------------------------
        //-----------------------------
        //次へボタン
        //会員登録
        //登録完了後、再読み込み
        //----------------------------

        if($_REQUEST[ 'next' ]){
                $err = false;
                if(!$_REQUEST[ 'name1' ] || !$_REQUEST[ 'name2' ]){
                        $err = 1;
                }
                if(!$language){
                        if(!$_REQUEST[ 'kana1' ] || !$_REQUEST[ 'kana2' ]){
                                $err = 1;
                        }
                }

                if($err){
                        $temp = "regist";
                }else{
                        $tbl = "t_testpaper";
                        $edit = array();
                        $edit['where'][ 'exam_id'    ] = $_REQUEST[ 'exam_id' ];
                        $edit['where'][ 'testgrp_id' ] = $test[ 'id'      ];

                        if($ua){
                                //携帯電話の時
                                $name1 = $_REQUEST[ 'name1' ];
                                $name2 = $_REQUEST[ 'name2' ];
                                $kana1 = $_REQUEST[ 'kana1' ];
                                $kana2 = $_REQUEST[ 'kana2' ];

                                $edit['edit' ][ 'name'  ] = sprintf("%s　%s",$name1,$name2);
                                $edit['edit' ][ 'kana'  ] = sprintf("%s　%s",$kana1,$kana2);
                        }else{
                            if($firstType == 57){
                                if(filter_input(INPUT_POST,"woman") ){
                                    //女性を選んだときはかなに名前
                                    $edit[ 'edit' ][ 'kana' ] = sprintf("%s　%s",$_REQUEST[ 'name1' ],$_REQUEST[ 'name2' ]);
                                }else{
                                    $edit['edit' ][ 'name'  ] = sprintf("%s　%s",$_REQUEST[ 'name1' ],$_REQUEST[ 'name2' ]);
                                }
                            }else{
                                $edit['edit' ][ 'name'  ] = sprintf("%s　%s",$_REQUEST[ 'name1' ],$_REQUEST[ 'name2' ]);
                                $edit['edit' ][ 'kana'  ] = sprintf("%s　%s",$_REQUEST[ 'kana1' ],$_REQUEST[ 'kana2' ]);
                            }   
                        }
                        $edit['edit' ][ 'sex'   ] = sprintf("%d",$_REQUEST[ 'gender' ]);
                        if($firstType == 57){
                            //aap-tの場合パスワードを指定
                            if(filter_input(INPUT_POST,"woman") ){
                                $edit[ 'edit' ][ 'birth2' ] = sprintf("%04d-%02d-%02d"
                                                            ,filter_input(INPUT_POST,"year")
                                                            ,filter_input(INPUT_POST,"month")
                                                            ,filter_input(INPUT_POST,"day")
                                                            );
                            }else{
                                $edit[ 'edit' ][ 'birth' ] = sprintf("%04d-%02d-%02d"
                                                            ,filter_input(INPUT_POST,"year")
                                                            ,filter_input(INPUT_POST,"month")
                                                            ,filter_input(INPUT_POST,"day")
                                                            );
                            }

                            $apptbl = "aap_member";
                            $appedit = array();
                            $appedit[ 'edit'  ][ 'birthday' ] = sprintf("%04d/%02d/%02d",$_REQUEST[ 'year' ],$_REQUEST[ 'month' ],$_REQUEST[ 'day' ]);

                            $appedit['where'][ 'exam_id'    ] = $_REQUEST[ 'exam_id' ];
                            $appedit['where'][ 'testgrp_id' ] = $test[ 'id'      ];

                            if(filter_input(INPUT_POST,"woman")){
                                $appedit['where'][ 'gender' ] = 2;
                            }else{
                                $appedit['where'][ 'gender' ] = 1;
                            }
                            $db->editUserData($apptbl,$appedit);

                        }else{
                            $edit['edit' ][ 'birth' ] = sprintf("%04d/%02d/%02d"
                                                        ,$_REQUEST[ 'year' ],$_REQUEST[ 'month' ],$_REQUEST[ 'day' ]);
                        }
                        if($_REQUEST[ 'mail' ]){
                                $edit['edit' ][ 'mail'   ] = $_REQUEST[ 'mail' ];
                        }

                        $db->editUserData($tbl,$edit);


                        //ログイン後メニュー画面のときにアクセス情報を登録する
                        $user_agent = $sv->agent();
                        $set = array();
                        $set[ 'testgrp_id'     ] = $test[ 'id' ];
                        if($_REQUEST[ 'exam_id']){
                                $set[ 'exam_id'        ] = $_REQUEST[ 'exam_id' ];
                        }else{
                                $set[ 'exam_id'        ] = $_SESSION[ 'visit' ][ 'exam_id' ];
                        }

                        if($ua){
                                $set[ 'examinee'        ] = $name1." ".$name2;
                        }else{
                                $set[ 'examinee'        ] = $_REQUEST[ 'name1' ]." ".$_REQUEST[ 'name2' ];
                        }
                        $set[ 'login_ts'       ] = date("Y-m-d H:i:s");
                        $set[ 'login_ua'       ] = $user_agent[ 'user_agent' ];
                        if($db->ag){
                                $set[ 'login_brauza'   ] = $db->ag;
                        }else{
                                $set[ 'login_brauza'   ] = $user_agent[ 'name' ];
                        }
                        $set[ 'login_version'  ] = $user_agent[ 'version' ];
                        $set[ 'login_platform' ] = $user_agent[ 'platform' ];
                        $table = "analytics";

                        $db->setUserData($table,$set);
                        //ログイン後メニュー画面のときにアクセス情報を登録する----------------------


                        if($ua){
                                //携帯の場合はセッションが効かないので、
                                //リダイレクトさせない

                                //テストデータ取得
                                $where = array();
                                $where[ 'exam_id'    ] = $_REQUEST[ 'exam_id' ];
                                $where[ 'testgrp_id' ] = $test[ id ];
                                $testlink = $t->getTestLink($where);

                                //テスト残り
                                $rest = 0;
                                foreach($testlink as $key=>$val){
                                        if($val[ 'exam_state' ] != 2){
                                                $rest++;
                                        }
                                }
                                $temp = "menu";
                        }else{

                                //セッションにログイン情報登録
                                $_SESSION[ 'visit' ][ 'login_id' ] = $testdata[ 'id' ];
                                $_SESSION[ 'visit' ][ 'test_id'  ] = $test[ id ];
                                $_SESSION[ 'visit' ][ 'exam_id'  ] = $_REQUEST[ 'exam_id' ];
                                $_SESSION[ 'visit' ][ 'examinee'  ] = $_REQUEST[ 'name1' ]." ".$_REQUEST[ 'name2' ];
                                $_SESSION[ 'visit' ][ 'k'        ] = $_REQUEST[ 'k'       ];
                                $_SESSION[ 'visit' ][ 'woman'    ] = filter_input(INPUT_POST, "woman");

                                if(D_URL == "http://abc.under.jp/" ){

                                     header("Location:/t/?k=".$_REQUEST[ 'k' ]);
                                }else{
                                    header("Location:./?k=".$_REQUEST[ 'k' ]);
                                }
                                exit();
                        }
                }
        }
        
        
                //aap-tの時 manかwomanが入ってくる
                if($firstType == 57){
                    /*
                    if(
                            filter_input(INPUT_POST,"man") ||
                            filter_input(INPUT_POST,"woman")
                            ){
                                     $temp = "regist";
                                    $year  = sprintf("%d",$_REQUEST[ 'year'  ]);
                                    $month = sprintf("%d",$_REQUEST[ 'month' ]);
                                    $day   = sprintf("%d",$_REQUEST[ 'day'   ]);
                                    $date = sprintf("%04d%02d%02d",$year,$month,$day);
                                    $age = (int) ((date('Ymd')-$date)/10000);

                                    if($age < 20){
                                        $errmsg = "20岁以下不能测试";
                                    }
                                    if(!checkdate($month,$day,$year)){
                                        $errmsg = "错误出生日期";
                                    }
                                    
                                    if(filter_input(INPUT_POST,"man") && $testdata[ 'sex' ] == 1){
                                        $errmsg = "它是预先考";
                                    }
                                    
                                    if(filter_input(INPUT_POST,"woman") && $testdata[ 'sex' ] == 2){
                                        $errmsg = "它是预先考";
                                    }
                                    $birth = sprintf("%04d/%02d/%02d",$year,$month,$day);
                                    //コチラではbirthをパスワードとして扱う
                                    if($testdata[ 'birth' ]){
                                          if($testdata[ 'birth' ] != $birth){
                                                $errmsg = "错误出生日期";
                                          }
                                    }
                                    if($errmsg){
                                        $temp = "";
                                    }
                            }
                            */
                }else
		//ログインデータチェック
		if($_REQUEST[ 'login' ]){
                    

			//評価検査のとき
			//他のテストは受けない
			if($firstType == 52 || $firstType == 60){
				$year  = sprintf("%d",$_REQUEST[ 'year'  ]);
				$month = sprintf("%d",$_REQUEST[ 'month' ]);
				$day   = sprintf("%d",$_REQUEST[ 'day'   ]);
				
				$checkdate = checkdate($month,$day,$year);
				if(!$checkdate) $errmsg = "生年月日に誤りがあります。";

				if(!$_REQUEST[ 'empnum' ]) $errmsg = "社員番号が入力されていません。";
                                                   
				if(!$errmsg){
					//ログインチェック
					$where = array();
					//$where[ 'testgrp_id' ] = $test[ 'id' ];
                                        $where[ 'testgrp_id' ] = $testid;
					$where[ 'birth' ] = sprintf("%04d/%02d/%02d",$_REQUEST[ 'year' ],$_REQUEST[ 'month' ],$_REQUEST[ 'day' ]);
					$where[ 'empnum' ] = $_REQUEST[ 'empnum' ];
					$member = $t->checkJudCheck($where);
                                        
					if($member){

						//ログイン後メニュー画面のときにアクセス情報を登録する
						$user_agent = $sv->agent();
						$set = array();
						$set[ 'testgrp_id'     ] = $test[ 'id' ];
						$set[ 'exam_id'        ] = $_REQUEST[ 'empnum' ];
						$set[ 'examinee'       ] = $member[ 'sei' ]." ".$member[ 'mei' ];
						$set[ 'login_ts'       ] = date("Y-m-d H:i:s");
						$set[ 'login_ua'       ] = $user_agent[ 'user_agent' ];
						$set[ 'login_brauza'   ] = $user_agent[ 'name' ];
						
						$set[ 'login_version'  ] = $user_agent[ 'version' ];
						$set[ 'login_platform' ] = $user_agent[ 'platform' ];
						$table = "analytics";
						if(!$_SESSION[ 'judge' ][ 'login_id' ]){
							$db->setUserData($table,$set);
						}
						$_SESSION[ 'judge' ][ 'login_id' ] = $member[ 'id'      ];
						$_SESSION[ 'judge' ][ 'tid'      ] = $member[ 'tid'     ];
						$_SESSION[ 'judge' ][ 'exam_id'  ] = $member[ 'exam_id' ];
						
						//テストを受け終わったかの確認 上司を評価
						$subFin = $t->checkJudgeFin($member);
						$temp = "menu";
						
						//テスト情報の取得
						$tlist = $t->getJugData($member,$firstType);
					}else{
						$errmsg = "社員番号か生年月日に誤りがあります。";
					}

				}
				//アンケートのときURLチェック
				if($_REQUEST[ 'anq' ] && !$errmsg){
					$acheck = array();
					$acheck[ 'testgrp_id' ] = $member[ 'testgrp_id' ];
					$acheck[ 'codes'      ] = $_REQUEST[ 'anq' ];
					$acheck[ 'status'     ] = 1;
					$inquiry = $t->checkInquiry($acheck);
					$today = date("Y-m-d");
					//データがないとき
					//期間外のとき
					if(count($inquiry) == 0 || ($inquiry[ 'start_date' ] > $today && $today > $inquiry[ 'end_date' ] )){
						$temp = "error";
					}else{
						//アンケート用メニュー
						//ログインを行った人に対しての部下のデータ
						$where = array();
						$where[ 'testgrp_id' ] = $member[ 'testgrp_id' ];
						$where[ 'bossid'     ] = $member[ 'id' ];
						$anqmenu = $t->getAnqMenu($where);
						//アンケートが有効か否かの確認
						$anqchk = $t->getAnqData($where);
                                                //var_dump($anqmenu,$anqchk);
						if(count($anqmenu) == 0){
						//	header("Location:/?k=".$_REQUEST[ 'k' ]."&anq=".$_REQUEST[ 'anq' ]);
							//exit();
						}
						$temp = "inquiry";
					}
				}
			}else
			if($testdata){
                                
				//生年月日が登録されていない時はそのまま次の画面
				//登録されている場合は入力値と確認
				if(!$testdata[ 'birth' ]){
					//chiba修正
					$nam = explode("　",$testdata[ 'name' ]);
					$kan = explode("　",$testdata[ 'kana' ]);
					$temp = "regist";
				}else{
					$birth = preg_replace("/\//","",$testdata[ 'birth' ]);
					$birthInput = sprintf("%04d%02d%02d"
										,$_REQUEST[ 'year' ]
										,$_REQUEST[ 'month' ]
										,$_REQUEST[ 'day' ]

										);
					$nam = explode("　",$testdata[ 'name' ]);
					$kan = explode("　",$testdata[ 'kana' ]);
					$gend = $testdata[ 'sex' ];
					$mail  = $testdata[ 'mail' ];

					if($birth == $birthInput){
						$temp = "regist";
					}else{
						switch($language){
							case "4":
								$errmsg = "Không thể đăng nhập";
							break;
							case "2":
								$errmsg = "生日的指定有错误";
							break;
							default:
								$errmsg = "登録されている生年月日を入力してください。";
							break;
						}
						$temp = "";
					}
				}
                                
                                if($firstType == 56){
                                    $temp = "regist";
                                    $year  = sprintf("%d",$_REQUEST[ 'year'  ]);
                                    $month = sprintf("%d",$_REQUEST[ 'month' ]);
                                    $day   = sprintf("%d",$_REQUEST[ 'day'   ]);
                                    $date = sprintf("%04d%02d%02d",$year,$month,$day);
                                    $age = (int) ((date('Ymd')-$date)/10000);

                                    if($age >= 20){
                                        $errmsg = "你不能把入口考试是 20 岁以上";
                                    }
                                    if(!$_REQUEST[ 'year' ]){
                                        $errmsg = "输入您的出生日期";
                                    }
                                    if($errmsg){
                                        $temp = "";
                                    }
                                }
                                
                                
                                 
			}else{
                            
				//検査内容が無い時はエラー
				switch($language){
					case "4":
						$errmsg = "Không thể đăng nhập";
					break;
					case "2":
						$errmsg = "帐号未输入";
					break;
					default:
						$errmsg = "IDに誤りがあります。";
					break;
				}
				$temp = "";
				
			}
		}
	}//session[visit]の終わり
}//多面評価終わり

if(strlen($test[ 'en' ]) && $test[ 'en' ] == 0){
	switch($language){
		case "4":
			$errmsg = "Đang được kiểm tra thời gian hết hạn.";
		break;
		case "2":
			$errmsg = "报名期间已经结束。";
		break;
		default:
			if($firstType == 49){
				$errmsg = "受講期間が終了しています。";
			}else{
				$errmsg = "受検期間が終了しています。";
			}
		break;
	}
	$disd = "DISABLED";
	$temp = "error";
	
}

if($temp){
	$temp = $temp;
}else{
	$temp = "login";
}
//アンケートデータ取得
$where = array();
if($_SESSION[ 'visit' ]){
	$where[ 'test_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
	$where[ 'exam_id' ] = $_SESSION[ 'visit' ][ 'exam_id' ];
	$enqRow = $t->getEnqRow($where);
}
$where = array();
$where[ 'dir' ] = $dir;
$testline = $t->checkExamPart($where);

if($ua && $firstType != 52 && $firstType != 60 ){
	include_once("./template/mobile/".$temp.".php");
}elseif($taFlg){
	include_once("./template/tamen/".$temp.".php");
}elseif($firstType == 52 || $firstType == 60){
	//評価検査
	include_once("./template/judge/".$temp.".php");
}else{
	$language = $test[ 'language' ];
	include_once("./template/".$temp.".php");
}

//session_out;


?>