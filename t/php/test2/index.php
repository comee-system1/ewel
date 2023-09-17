<?php
ini_set('display_errors', "On");
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
$array_exam[1] = array(
    1=>array("a"=>'自分には人並み以上の知力がある',"b"=>'仲間とはいっしょに楽しい時間を過ごす'),
    2=>array("a"=>'自分が、なぜ、こんな気持ちになったのかを考えることが多い',"b"=>'やり直しを要求されても、その指摘が正しければ、進んでやり直す'),
    3=>array("a"=>'窮地に立たされても、何とかなると思う',"b"=>'私の意見は仲間に反映されることが多い'),
    4=>array("a"=>'「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている',"b"=>'窮地に立たされても、何とかなると思う'),
    5=>array("a"=>'将来、大きな仕事をしようと心に決めている',"b"=>'人の話をじっくり聞くことが得意である'),
    6=>array("a"=>'やり直しを要求されても、その指摘が正しければ、進んでやり直す',"b"=>'雰囲気を壊さずに自分の意見を明快に主張できる'),
    7=>array("a"=>'怒りや不快を顔にださず速やかに静められる',"b"=>'自分には人並み以上の知力がある'),
    8=>array("a"=>'微妙な表情や会話の間から相手の気持ちの変化を感じる',"b"=>'怒りや不快を顔にださず速やかに静められる'),
    9=>array("a"=>'仲間とはいっしょに楽しい時間を過ごす',"b"=>'微妙な表情や会話の間から相手の気持ちの変化を感じる'),
    10=>array("a"=>'人の話をじっくり聞くことが得意である',"b"=>'「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている'),
);

$array_exam[2] = array(
        11=>array("a"=>'雰囲気を壊さずに自分の意見を明快に主張できる',"b"=>'将来、大きな仕事をしようと心に決めている'),
        12=>array("a"=>'私の意見は仲間に反映されることが多い',"b"=>'自分が、なぜ、こんな気持ちになったのかを考えることが多い'),
        13=>array("a"=>'友人からのアドバイス・指摘は反省の材料として大切にする',"b"=>'友達がたくさんいる。友人関係は良好である'),
        14=>array("a"=>'私は自分の生き方に誇りを持っている',"b"=>'人が喜んでくれるなら苦労も苦にならない'),
        15=>array("a"=>'運は自らの力で切り開けるし、切り開いていく',"b"=>'不当な扱いには笑顔で堂々と反論できる'),
        16=>array("a"=>'自分の気持ちを自問し、自分の感情と実際の行動との関係を解釈している',"b"=>'転勤・転校などの新天地でも上手くやっていける自信がある'),
        17=>array("a"=>'転勤・転校などの新天地でも上手くやっていける自信がある',"b"=>'人間関係の中心にいる重要な人物が誰かに気づいて、その人物に近づける'),
        18=>array("a"=>'人間関係の中心にいる重要な人物が誰かに気づいて、その人物に近づける',"b"=>'仲間に的確なアドバイスを与えることができる'),
        19=>array("a"=>'緊張場面でも冷静さを保ち落ち着いていられる',"b"=>'私は自分の生き方に誇りを持っている'),
        20=>array("a"=>'人が喜んでくれるなら苦労も苦にならない',"b"=>'運は自らの力で切り開けるし、切り開いていく'),
    );
$array_exam[3] = array(
            21=>array("a"=>'不当な扱いには笑顔で堂々と反論できる',"b"=>'他人の立場にたって共感することができる'),
            22=>array("a"=>'他人の立場にたって共感することができる',"b"=>'友人からのアドバイス・指摘は反省の材料として大切にする'),
            23=>array("a"=>'友達がたくさんいる。友人関係は良好である',"b"=>'緊張場面でも冷静さを保ち落ち着いていられる'),
            24=>array("a"=>'仲間に的確なアドバイスを与えることができる',"b"=>'自分の気持ちを自問し、自分の感情と実際の行動との関係を解釈している'),
            25=>array("a"=>'自分の才能に自信を持っている',"b"=>'対立している仲間の仲裁が得意である'),
            26=>array("a"=>'心の中の本当の気持ちと言動が食い違っていないか確かめるようにしている',"b"=>'仲間の関心事には積極的に興味を示す'),
            27=>array("a"=>'1つのやり方に固執せずに、常に良いものを求め工夫する',"b"=>'自分に対する失礼な言動にはとっさに効果的な反論ができる'),
            28=>array("a"=>'自分ができることと、できない事を自覚している',"b"=>'失敗しても、あきらめず、やつ当たりしない'),
            29=>array("a"=>'失敗しても、あきらめず、やつ当たりしない',"b"=>'重要な人間関係や友人関係を正確に読み取り、利用できる'),
            30=>array("a"=>'人を喜ばせる事柄・イベント・方法などを考えるのが好き',"b"=>'寂しそうにしている仲間には優しい言葉をかける'),
        );
$array_exam[4] = array(
            31=>array("a"=>'努力すれば能力や技能はどんどん向上させられる',"b"=>'心の中の本当の気持ちと言動が食い違っていないか確かめるようにしている'),
            32=>array("a"=>'仲間の関心事には積極的に興味を示す',"b"=>'努力すれば能力や技能はどんどん向上させられる'),
            33=>array("a"=>'寂しそうにしている仲間には優しい言葉をかける',"b"=>'人を喜ばせる事柄・イベント・方法などを考えるのが好き'),
            34=>array("a"=>'重要な人間関係や友人関係を正確に読み取り、利用できる',"b"=>'自分ができることと、できない事を自覚している'),
            35=>array("a"=>'対立している仲間の仲裁が得意である',"b"=>'1つのやり方に固執せずに、常に良いものを求め工夫する'),
            36=>array("a"=>'自分に対する失礼な言動にはとっさに効果的な反論ができる',"b"=>'自分の才能に自信を持っている'),

        );

//ページ設定
if ($_REQUEST[ 'next' ]) {
    $pager = $_REQUEST['nextPage'];
} else {
    $pager = 1;
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
if ($ua) {
    //	$where[ 'id'        ] = $testlink[0][tpid];
    $where[ 'testgrp_id'] = $_REQUEST[tid];
    $where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
    $where[ 'type'      ] = $first;
} else {
    //	$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
    $where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
    $where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
    $where[ 'type'      ] = $first;
}

//--------------------------------
//回答登録
//--------------------------------
if (isset($_REQUEST[ 'q' ]) && count($_REQUEST[ 'q' ])) {
    foreach ($_REQUEST[ 'q' ] as $key=>$val) {
        $q = "q".$key;
        $edit[ $q ] = $val;
    }
    $tbl = "t_testpaper";
    $obj->editDetail($tbl, $edit, $where);
}


//スタート時間の登録
//初回ページ
if ($_REQUEST[ 'page' ]) {
    $flg = $t->checkExamState($where);
    if ($flg[ 'exam_state' ] == 2) {
        header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
        exit();
    }
    $obj->setStartTime($where);
} else {
    //初回以外　テストページの時
    if ($temp == "page") {
        $flg = $t->checkExamState($where);
        if ($flg[ 'exam_state' ] == 2) {
            header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
            exit();
        }
    }
}


//次のページ
if ($_REQUEST[ 'next' ]) {
    //エラーチェック
    $err = 0;
    if ($_REQUEST[ 'nextPage' ] == 2) {
        for ($i=1;$i<=10;$i++) {
            if (!$_REQUEST[ 'q' ][$i]) {
                $err = $i;
                break;
            }
        }
    }
    if ($_REQUEST[ 'nextPage' ] == 3) {
        for ($i=11;$i<=20;$i++) {
            if (!$_REQUEST[ 'q' ][$i]) {
                $err = $i;
                break;
            }
        }
    }
    if ($_REQUEST[ 'nextPage' ] == 4) {
        for ($i=21;$i<=30;$i++) {
            if (!$_REQUEST[ 'q' ][$i]) {
                $err = $i;
                break;
            }
        }
    }
    if ($_REQUEST[ 'nextPage' ] == 5) {
        for ($i=31;$i<=36;$i++) {
            if (!$_REQUEST[ 'q' ][$i]) {
                $err = $i;
                break;
            }
        }
    }


    if ($err) {
        //エラーがあった時はコチラ
        $errmsg = "設問".$err."が選択されていません。";
        $pager  = $_REQUEST[ 'nextPage' ]-1;
    } elseif ($max < $_REQUEST[ 'nextPage' ]) {
        //----------------------------
        //最終ページ
        //----------------------------
        include_once(D_PATH_HOME."/lib/keisan/functionBA2.php");
        include_once(D_PATH_HOME."/init/rowData/raw_data_tb.php");
        include_once(D_PATH_HOME."/init/rowData/dev_data_tb.php");

        //テストデータ取得
        $tdetail = $obj->getTestPaper($where);

        //重みデータ取得
        $wt = array();

        if ($ua) {
            $wt[ 'test_id' ] = $_REQUEST[tid];
            $wt[ 'type'    ] = $first;
        } else {
            $wt[ 'test_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
            $wt[ 'type'    ] = $first;
        }
        $weights = $obj->getWeight($wt);

        //---------------------
        //結果計算
        //---------------------
        list($row, $lv, $standard_score, $dev_number) = BA2($tdetail, $weights, $raw_data, $dev_data, 1);
        $soyo = $dev_number;
        $imgDir = "tb";
        $s_day  = explode('/', $tdetail['exam_date']);
        $s_time = explode(':', $tdetail['start_time']);

        $start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
        $end_timestamp   = time();

        $end_timer = $end_timestamp - $start_timestamp;
        $e_time[0] = (int)($end_timer / 60);
        $e_time[1] = $end_timer % 60;

        $set = array();
        $set[ 'exam_state' ] = 2;
        $set[ 'level'      ] = $lv;
        $set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
        $set[ 'score'      ] = $standard_score;
        for ($i=1;$i<=12;$i++) {
            $dev = "dev".$i;
            $set[$dev] = $row[ $dev ];
        }
        $set[ 'soyo'       ] = $dev_number;
        $set[ 'fin_exam_date' ] = sprintf(
            "%04d-%02d-%02d %02d:%02d:%02d",
            date("Y"),
            date("m"),
            date("d"),
            date("H"),
            date("i"),
            date("s")
        );

        $tbl = "t_testpaper";
        $obj->editDetail($tbl, $set, $where);
        //complete_flgの設定
        $t->editCompleteFlg($where);
        //メール配信
        $t->sendFinMail($where);

        $fin_disp = $test[ 'fin_disp' ];
        $temp = "Fin";
    }
}


if ($_REQUEST[ 'back' ]) {
    $pager = $_REQUEST[ 'backPage' ];
    //戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $obj->getTestPaper($where);
if ($_REQUEST[ 'next' ]) {
    //登録データのチェック
    //不足データがある時は
    //不足データのあるページに移動
    if ($pager >= 5) {
        for ($i=31;$i<=36;$i++) {
            $q = "q".$i;
            if (!$tdetail[ $q ]) {
                $pager = 4;
                $alert = "4ページに誤りがあります。";
                $temp = "page";
            }
        }
    }
    if ($pager >= 4) {
        for ($i=21;$i<=30;$i++) {
            $q = "q".$i;
            if (!$tdetail[ $q ]) {
                $pager = 3;
                $alert = "3ページに誤りがあります。";
                $temp = "page";
            }
        }
    }
    if ($pager >= 3) {
        for ($i=11;$i<=20;$i++) {
            $q = "q".$i;
            if (!$tdetail[ $q ]) {
                $pager = 2;
                $alert = "2ページに誤りがあります。";
                $temp = "page";
            }
        }
    }
    if ($pager >= 2) {
        for ($i=1;$i<=10;$i++) {
            $q = "q".$i;
            if (!$tdetail[ $q ]) {
                $pager = 1;
                $alert = "1ページに誤りがあります。";
                $temp = "page";
            }
        }
    }
}


$nextPage = $pager+1;
$backPage = $pager-1;

$exam = $array_exam[$pager];
