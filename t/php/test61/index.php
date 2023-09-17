<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_NL3.php");

$obj = new BAmethod();
$nl  = new NL3method();

$array_exam[1] = array(
                        1=>"職場においては、自分のやり方に沿ってやってもらうよう、他のメンバーにも働きかける"
                        ,2=>"仕事で満足感を得られるのは、重要なタスクが片づいたときよりも、関係者と気持ちが分かち合えたときのほうだ"
                        ,3=>"仕事に取り組むときは、みんなで組織のルールを守るより、各人の考えを尊重するほうだ"
                        ,4=>"責任範囲を明確にした上で、かつ他のメンバーと一緒に仕事を進められると、モチベーションが上がる"
                        ,5=>"仕事において、状況が少しずつ又は大きく変化するよりも、変わらず安定した状態が心地よい"
                        ,6=>"チームにおいては、自分のやり方を他のメンバーにも守るように働きかけるほうだ"
                        ,7=>"仕事を進めるとき、これまでとは違ったやり方で、常に新たな可能性を追求するほうだ"
                        ,8=>"職場では、他者の感情に影響を受けることなく、目の前のタスクに意識を集中するほうだ"
                        ,9=>"組織のなかでは、各人のルールを尊重するより、集団のルールをみんなが守るべきだと思う"
                        ,10=>"仕事の責任範囲が明らかで、かつ他の人と一緒に仕事を進めるのが、自分には最適だ"
				);

$array_exam[2] = array(
			11=>"自分が担当する仕事は、変化に富む内容だとモチベーションが上がる"
                        ,12=>"職場においては、各人が異なる考えを持っており、それぞれが自分のやり方に従えばよいと思う"
                        ,13=>"自分に任せられた仕事は、色々な可能性を探るより、確実な手順で進めていきたい"
                        ,14=>"自分が担当する仕事は、変化に富んでいるより、徐々に進展するほうが心地よい"
                        ,15=>"職場においては、いつもと同じ仕事を、決まったパターンで進めていくことを好む"
                        ,16=>"自分に任せられた仕事は、これまでのやり方だけでなく、常に新しい可能性をトライする"
                        ,17=>"新しい仕事を頼まれたとき、「問題点への対応」より、「仕事の目的」を意識するほうだ"
                        ,18=>"方法論が確立している仕事よりも、様々なアイデアを出せる仕事にワクワク興味を覚える。"
                        ,19=>"新しい仕事に取り組むときは、すぐに行動せず、状況分析するほうだ"
                        ,20=>"新しい仕事を頼まれたとき、仕事の目的を意識するより、起こりうる問題点とその対策を意識するほうだ"
				);

$array_exam[3] = array(
                        21=>"仕事の報告を受けるとき、具体的なことよりも、大枠を理解しようとする"
                       ,22=>"新しい仕事に取り組むとき、すぐに取りかかるよりも、まず状況を観察し考えるほうだ"
                       ,23=>"自分の業務は、変わらず安定した状態よりも、新規プロジェクトを担当するなど、変化に富むほうがやる気が出る"
                       ,24=>"仕事に取り組むときは、機が熟すのを待つことなく、とにかく行動するほうだ"
                       ,25=>"自分にとって生産的な環境は、みんなと一緒にいるよりも、自分一人で集中できる場所のほうだ"
                       ,26=>"仕事に取り組むときは、新しい選択肢を考えるより、決まったやり方に沿って進めたい"
                       ,27=>"仕事を進めるとき、一人で集中するより、チーム内で皆と働くほうがモチベーションが上がる"
                       ,28=>"職場においては、他のメンバーと一緒に、共同作業で仕事をするのが心地よい"
                       ,29=>"人の説明を聞くとき、細かい情報よりも、全体像を意識するほうだ"
                       ,30=>"職場においては、組織のルールをみんなが遵守するより、各人のやり方を尊重するほうが良いと思う"
				);

$array_exam[4] = array(
                        31=>"新しい仕事を頼まれたとき、「ゴールの設定」よりも、「リスクへの対応」を意識するほうだ"
                       ,32=>"複数のメンバーと仕事を進めながら、仕事の範囲を明確にすることでモチベーションが上がる"
                       ,33=>"仕事に取り組むとき、誰かと一緒に作業をするよりも、誰にも邪魔されずに一人で進めるほうが生産的だ"
                       ,34=>"仕事を進めるとき、色々な選択肢を意識せず、正しく決められた手順をたどるほうだ"
                       ,35=>"仕事を効果的に進めるには、周りに人がいない環境で、自分の仕事に集中するほうが心地よい"
                       ,36=>"仕事で充実感を覚えるのは、タスクの達成よりも、メンバーと気持ちを分かち合えるときのほうだ"
                       ,37=>"仕事の報告を受け取るとき、概略よりも、正確性や細部を意識するほうだ"
                       ,38=>"自分の担当する仕事は、多少の変化よりも、大きな変化に富むほうが心地よい"
                       ,39=>"職場においては、みんなが集団の決まりやルールをきちんと守るべきだ"
                       ,40=>"仕事においては、大きな変化が頻繁に起こるより、状況が少しずつ改善していくほうが心地よい"
				);
$array_exam[5] = array(
                        41=>"仕事を進めるとき、分析・検討の時間を取るよりも、まずは出来ることから行動するほうがやる気が出る"
                        ,42=>"自分の仕事環境は、劇的に変化するよりも、徐々に変化していくほうが心地よい"
                        ,43=>"新しい仕事を人に頼むとき、大枠の情報よりも、細かく正確な情報を伝えようとする"
                        ,44=>"仕事においては、大きな変化が頻繁に起こるより、変わらず安定している状態が心地よい"
                        ,45=>"チームにおいては、それぞれのやり方を認めるより、自分が得た良いやり方を他の人にも勧めたくなるほうだ"
                        ,46=>"細かく具体的な説明を聞くより、全体的なポイントを聞くほうが分かりやすい"
                        ,47=>"新しい仕事に取り組むときは、とりあえず動く前に、状況を分析するほうだ"
                        ,48=>"仕事を進めるとき、ゴールを意識するより、事前にリスクや問題点を探し出すほうだ"
                        ,49=>"組織のなかでは、各人のルールを尊重するより、集団のルールをみんなが守るべきだ"
                        ,50=>"仕事を進めるとき、人の感情に流されずに、目前のタスクに集中するほうだ"	
				);
$array_exam[6] = array(
                         51=>"仕事を進めるとき、「問題点の発見」よりも、「ゴールの設定」のほうを意識しやすい"
                        ,52=>"自分にとって生産的なのは、一人だけで仕事に集中するより、チーム一丸となって仕事をするほうだ"
                        ,53=>"新しい仕事を頼まれたとき、「リスクへの対応」よりも、「最終的なゴール」を意識するほうだ"
                        ,54=>"職場においては、タスクや成果よりも、関わる人の感情を意識するほうだ"
                        ,55=>"人に仕事の説明をするとき、概略を話すよりも、詳細に話をするほうだ"
                        ,56=>"仕事を進めるとき、他人の感情を意識するより、成果を出すことに集中するほうだ"
                        ,57=>"新しい仕事を進めるとき、立ち止まって考えるよりも、まず先に行動を起こしてみるほうだ"

				);




//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $nl->getTime($where);


$time = $times[ 'minute_rest' ];
if($_REQUEST[ 'time' ]){
	$time = $_REQUEST[ 'time' ];
}else{
	$time = $time*60;
}
$where[ 'test_id' ] = $times[ 'id' ];
//--------------------------------
//回答登録
//--------------------------------

if(count($_REQUEST[ 'sec' ])){
	$sec = array();
	if(count($_REQUEST[ 'sec' ])){
		foreach($_REQUEST[ 'sec' ] as $key=>$val){
			$s = "ans".$key;
			$sec[$s] = $val;
		}
	}
        //var_dump($sec,$where);
	$nl->setEaRst($sec,$where);
	
}


//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$nl->setEa($where);
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



//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = "";
        
	if($pager-1 == 6){
		for($i=51;$i<=57;$i++){
			if(!$_REQUEST[ 'sec' ][ $i ]){
				$err = $i;
				break;
			}
		}
	}else{
		$cnt = count($array_exam[ $pager-1 ]);
		$st = ($pager-2)*$cnt+1;
		for($i=$st;$i<=$cnt*($pager-1);$i++){
			if(!$_REQUEST[ 'sec' ][ $i ]){
				$err = $i;
				break;
			}
		}
	}
	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		$tdetail = $obj->getTestPaper($where);
		include_once(D_PATH_HOME."/lib/keisan/functionNL3.php");


		//----------------------------
		//最終ページ
		//----------------------------
		$update = array();
		$update[ 'where' ][ 'test_id' ] = $where[ 'test_id' ];
		$update[ 'where' ][ 'exam_id' ] = $where[ 'exam_id' ];
		list($rst) = $nl->getScore($update);

		list($soten,$hensa) = getHensa($rst);
		foreach($hensa as $key=>$val){
			if($val <= 20){
				$hensa[$key] = 20;
			}
			if($val >= 80){
				$hensa[$key] = 80;
			}
		}
		$mvid = $rst[ 'mv_id' ];
		$nl->setResult($soten,$hensa,$mvid);

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
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $nl->getEa($where);




if($pager >= 7){
	for($i=51;$i<=57;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 6;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}

if($pager >= 6){
	for($i=41;$i<=50;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 5;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}

if($pager >= 5){
	for($i=31;$i<=40;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 4;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}


if($pager >= 4){
	for($i=21;$i<=30;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 3;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}

if($pager >= 3){
	for($i=11;$i<=20;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 2;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}

if($pager >= 2){
	for($i=1;$i<=10;$i++){
		$ans = "ans".$i;
		if(!$tdetail[ $ans ]){
			$pager = 1;
			$alerts = $pager."ページに誤りがあります。";
		}
	}
}
if($alerts){
	$temp = "page";
}


$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

//var_dump($answer);

?>