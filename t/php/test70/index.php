<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_BAG.php");

$obj = new BAmethod();
$ea  = new BAGmethod();
$key=1;
for($i=0;$i<10;$i++){
	$array_exam[1][$key][ "k" ] = $key;
	$key++;
}
for($i=11;$i<=20;$i++){
	$array_exam[2][$key][ "k" ] = $key;
	$key++;
}
for($i=21;$i<=30;$i++){
	$array_exam[3][$key][ "k" ] = $key;
	$key++;
}

for($i=31;$i<=40;$i++){
	$array_exam[4][$key][ "k" ] = $key;
	$key++;
}

for($i=41;$i<=50;$i++){
	$array_exam[5][$key][ "k" ] = $key;
	$key++;
}

for($i=51;$i<=60;$i++){
	$array_exam[6][$key][ "k" ] = $key;
	$key++;
}
for($i=61;$i<=70;$i++){
	$array_exam[7][$key][ "k" ] = $key;
	$key++;
}
for($i=71;$i<=80;$i++){
	$array_exam[8][$key][ "k" ] = $key;
	$key++;
}
for($i=81;$i<=90;$i++){
	$array_exam[9][$key][ "k" ] = $key;
	$key++;
}
for($i=91;$i<=100;$i++){
	$array_exam[10][$key][ "k" ] = $key;
	$key++;
}
for($i=101;$i<=106;$i++){
	$array_exam[11][$key][ "k" ] = $key;
	$key++;
}

$q = 1;


$array_exam[1][$q++][ "q" ] = "ブランド活動とは、すべての部署で考え、取り組む活動であると私は考えている";
$array_exam[1][$q++][ "q" ] = "ブランドとは、商品やサービスの名称やロゴをかっこよくしたり、わかりやすくする取り組みであると私は考えている";
$array_exam[1][$q++][ "q" ] = "ブランド活動には、顧客や取引先等向けに行う活動を指し、社内に対して取り組む活動は含まれないと私は考えている";
$array_exam[1][$q++][ "q" ] = "経営層や上司から、現在の会社の状況（売上や競合他社との関係　等）について説明を聞いたことがある";
$array_exam[1][$q++][ "q" ] = "経営層や上司は、現在の組織の状態を「危機的状況」と感じていると思う";
$array_exam[1][$q++][ "q" ] = "当社は、現在「危機的状況」に直面していると感じる";
$array_exam[1][$q++][ "q" ] = "当社のビジネスは今のままでも、将来的に「危機的状況」には陥らないと感じている";
$array_exam[1][$q++][ "q" ] = "当社が現状のままの場合、将来どうなるか想像できる";
$array_exam[1][$q++][ "q" ] = "当社には今、変革が必要だと感じる";
$array_exam[1][$q++][ "q" ] = "当社の将来について心配はしていない";

$array_exam[2][$q++][ "q" ] = "当社や業界を取り巻く外部環境が大きく変化していると感じている";
$array_exam[2][$q++][ "q" ] = "私は、現在　仕事をする上で仕事をしづらいと感じることがある";
$array_exam[2][$q++][ "q" ] = "私は、現在　雇用に対する不安を感じることがある";
$array_exam[2][$q++][ "q" ] = "私は、このまま当社で仕事を続けていれば、将来　雇用に対する不安はないと感じている";
$array_exam[2][$q++][ "q" ] = "上司や会社から、なぜ今　組織変革する必要性があるか説明を聞いたことがある";
$array_exam[2][$q++][ "q" ] = "所属チーム（部署）のメンバーは、当社が現在「危機的状況」に直面していると感じている人が多い";
$array_exam[2][$q++][ "q" ] = "所属チーム（部署）のメンバーは、当社が現状のままのでも、将来的に「危機的状況」には陥らないと感じている人が多い";
$array_exam[2][$q++][ "q" ] = "経営層や上司から、当社の「将来の姿」や「ビジョン（目指す姿）」についての説明を聞いたことがある";
$array_exam[2][$q++][ "q" ] = "経営層や上司から、当社の「将来の姿」や「ビジョン（目指す姿）」の実現に向けた「熱意」を感じることができる";
$array_exam[2][$q++][ "q" ] = "組織変革に取り組んだ場合に、当社がどのようになるかイメージできる";



$array_exam[3][$q++]["q"]="組織変革に取り組んだ場合、期待されている効果を実現できると確信している";
$array_exam[3][$q++]["q"]="組織変革に取り組んだ場合、期待されている目的を達成できるか、疑わしいと感じている";
$array_exam[3][$q++]["q"]="組織変革に取り組んだ場合、当社は良い方向に変わっていける";
$array_exam[3][$q++]["q"]="当社の未来は明るいと強く信じている";
$array_exam[3][$q++]["q"]="所属チーム（部署）のメンバーは、組織変革に取り組んだ場合、期待されている効果を実現できると確信している人が多い";
$array_exam[3][$q++]["q"]="所属チーム（部署）のメンバーは、組織変革に取り組んだ場合、期待されている目的を達成できるか、疑わしいと感じている人が多い";
$array_exam[3][$q++]["q"]="所属チーム（部署）のメンバーは、会社の未来は明るいと強く信じている人が多い";
$array_exam[3][$q++]["q"]="当社の社員であることを誇りに感じている";
$array_exam[3][$q++]["q"]="困難な状況であっても、経営層を信頼してついていくつもりだ";
$array_exam[3][$q++]["q"]="組織変革に取り組む必要性を理解している";

$array_exam[4][$q++]["q"]="当社のビジョンや将来の目指す姿と、私の価値観は一致していると感じる";
$array_exam[4][$q++]["q"]="組織を変革するために、すぐに「行動がしたほうがよい」と感じている";
$array_exam[4][$q++]["q"]="組織変革を進めるために求められる努力は、私がそこから得られると思われる利益に比べたら小さいと感じる";
$array_exam[4][$q++]["q"]="組織変革が実行された際、私にとって何か得るものがある";
$array_exam[4][$q++]["q"]="組織変革に関する行動は、自分の将来にとってもメリットになると感じている";
$array_exam[4][$q++]["q"]="組織変革を進める場合、積極的に取り組みたい";
$array_exam[4][$q++]["q"]="組織変革に基づく行動をする場合、その行動を阻害する人やルールがあると感じる";
$array_exam[4][$q++]["q"]="組織変革に基づく行動をした場合、その行動を阻害する人やルールが実際にあった";
$array_exam[4][$q++]["q"]="自社において、私に求められている行動について理解している";
$array_exam[4][$q++]["q"]="自社において、私が取ってはいけない行動について理解している";

$array_exam[5][$q++]["q"]="自社において、今、私が変えるべき行動や仕組みは明らかになっている";
$array_exam[5][$q++]["q"]="私が行動した結果を伝えたり、共有したりする人や状況（会議・ワークショップ）、機会がある";
$array_exam[5][$q++]["q"]="私には、相談したり、サポートしてくれたりする人がいる";
$array_exam[5][$q++]["q"]="所属チーム（部署）のメンバーも積極的に行動している人が多い";
$array_exam[5][$q++]["q"]="どのような状態になれば、今取り組んでいる変革が成功であるか明らかになっている";
$array_exam[5][$q++]["q"]="自分のアイデアや考えを会社の他の人に利用されないように秘密にする必要があると感じる";
$array_exam[5][$q++]["q"]="他の人に私の机等の作業スペースに入って欲しくないと感じる";
$array_exam[5][$q++]["q"]="私は会社に貢献する能力・スキルがあると思う";
$array_exam[5][$q++]["q"]="私は会社に前向きな変化をもたらすことができると思う";
$array_exam[5][$q++]["q"]="私は、「何かが間違っている」または、「問題がある」と感じた場合、改善を促す働きかけができる";


$array_exam[6][$q++]["q"]="私は、間違ったことを見つけたり、気づいたりした場合は、ためらわず会社に伝えることができる";
$array_exam[6][$q++]["q"]="私は当社の一員であると感じる";
$array_exam[6][$q++]["q"]="私は当社で働くことに満足している";
$array_exam[6][$q++]["q"]="当社の成功は私の成功だと思う";
$array_exam[6][$q++]["q"]="当社のビジョン・目標は、私の目指している目標と同じである";
$array_exam[6][$q++]["q"]="仕事をしやすくするために、必要な作業を追加したり不必要な作業を減らすようにしている";
$array_exam[6][$q++]["q"]="必要と感じた際、新たな作業を自分の仕事に加えるようにしている";
$array_exam[6][$q++]["q"]="仕事の中身や作業手順を自分が望ましいと思うように変更するようにしている";
$array_exam[6][$q++]["q"]="仕事を通じて積極的に人と関わろうとしている";
$array_exam[6][$q++]["q"]="仕事を通じて関わる人の数を増やそうとしている";

$array_exam[7][$q++]["q"]="仕事で関係する人々の状況を把握し、相手の利益になるようにしている";
$array_exam[7][$q++]["q"]="自分の担当する仕事を見つめ直すことによって、やりがいのある仕事にしている";
$array_exam[7][$q++]["q"]="自分の担当する仕事を単なる作業の集まりではなく、全体として意味のあるものだと考えている";
$array_exam[7][$q++]["q"]="自分の担当する仕事の目的がより社会的に意義のあるものであると捉えなおすようにしている";
$array_exam[7][$q++]["q"]="経営層からの情報は信頼できる";
$array_exam[7][$q++]["q"]="職場や仕事で変化が必要なときには、従業員の意見を事前に聞いてくれる機会がある";
$array_exam[7][$q++]["q"]="一人ひとりの価値観を大事にしてくれる職場である";
$array_exam[7][$q++]["q"]="人事評価の結果について十分な説明がなされている";
$array_exam[7][$q++]["q"]="職場では、（正規、非正規、アルバイトなど）いろいろな立場の人が職場の一員として尊重されている";
$array_exam[7][$q++]["q"]="意欲を引き出したり、キャリアに役立つ教育が行われている";

$array_exam[8][$q++]["q"]="上司と気軽に話ができる";
$array_exam[8][$q++]["q"]="私は上司からふさわしい評価を受けている";
$array_exam[8][$q++]["q"]="上司は、部下が能力をのばす機会を持てるように、取り計らってくれる";
$array_exam[8][$q++]["q"]="上司は誠実な態度で対応してくれる";
$array_exam[8][$q++]["q"]="同僚や先輩と気軽に話ができる";
$array_exam[8][$q++]["q"]="現在の所属チーム（部署）の中では、もしあなたが何かミスをしたら、非難されることが多い";
$array_exam[8][$q++]["q"]="現在の所属チーム（部署）のメンバーは、課題や難しい問題を互いに指摘し合うことができる";
$array_exam[8][$q++]["q"]="現在の所属チーム（部署）のメンバーは、自分と異なるということを理由に他者を拒絶・排除するときがある";
$array_exam[8][$q++]["q"]="現在の所属チーム（部署）であれば、安心してリスクをとることができる";
$array_exam[8][$q++]["q"]="現在の所属チーム（部署）の他のメンバーに対して、助けを求めにくい";

$array_exam[9][$q++]["q"]="現在の所属チーム（部署）のメンバーは、あなたの仕事を意図的におとしめるような行動をしない";
$array_exam[9][$q++]["q"]="現在の所属チーム（部署）のメンバーと仕事をするとき、あなた個人のスキルと才能が尊重され、役に立っている";
$array_exam[9][$q++]["q"]="職を失ってしまうのではないかという不安がある";
$array_exam[9][$q++]["q"]="たいていのことは自信を持って取り組んでいる";
$array_exam[9][$q++]["q"]="自分がやってできないことはほとんどないと思う";
$array_exam[9][$q++]["q"]="どんなことでも、うまくやれると思っている";
$array_exam[9][$q++]["q"]="何事もそのうちきっとうまくいくと思っている";
$array_exam[9][$q++]["q"]="多少の失敗があっても、たいていのことは何とかなると思う";
$array_exam[9][$q++]["q"]="何事も、なるようになると思っている";
$array_exam[9][$q++]["q"]="人は、私には安心して話ができると言う";

$array_exam[10][$q++]["q"]="個人的な相談を持ちかけられることが多い";
$array_exam[10][$q++]["q"]="私は人から、その人のプライベートな話を聞かされることが多い";
$array_exam[10][$q++]["q"]="生活の中で達成感を感じる";
$array_exam[10][$q++]["q"]="生活の中で喜びを感じる";
$array_exam[10][$q++]["q"]="毎日の生活の中で、充実していると感じる";
$array_exam[10][$q++]["q"]="私は、会社が掲げるミッションや理念、ビジョンに対して心から貢献したいと考えている";
$array_exam[10][$q++]["q"]="仕事上で、自分に期待されていることを明確に理解している";
$array_exam[10][$q++]["q"]="所属チーム（部署）のメンバーと価値観が共通している";
$array_exam[10][$q++]["q"]="仕事で毎日、自分の強みを発揮するチャンスがある";
$array_exam[10][$q++]["q"]="チームメンバーが私をサポートしてくれる";

$array_exam[11][$q++]["q"]="優れた仕事をすれば、認められることがわかっている";
$array_exam[11][$q++]["q"]="会社の未来は明るいと強く信じている";
$array_exam[11][$q++]["q"]="仕事では常に成長が求められている";
$array_exam[11][$q++]["q"]="私は仕事をしていると，活力がみなぎるように感じる";
$array_exam[11][$q++]["q"]="私は仕事に対して熱心に取り組めている";
$array_exam[11][$q++]["q"]="私は仕事にのめり込んでいる";



//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST['nextPage'];
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
if($_SESSION[ 'visit' ][ 'test_id'  ]){
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
}else{
	$where[ 'testgrp_id'] = $_REQUEST[ 'tid' ];
}
if($_SESSION[ 'visit' ][ 'test_id'  ]){
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
}else{
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
}
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $ea->getTime($where);
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
//var_dump($_REQUEST);
	$sec = array();
	foreach($_REQUEST as $key=>$val){
		if(preg_match("/^sec[0-9]/",$key)){
			$sec[ $key ] = $val;
		}
		$ea->setEaRst($sec,$where);
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
	$ea->setEa($where);
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
$err = 0;
if($_REQUEST[ 'next' ]){

	//エラーチェック
	if($pager == 2){
		for($i=1;$i<=10;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	//エラーチェック
	if($pager == 3){
		for($i=11;$i<=20;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}

	if($pager == 4){
		for($i=21;$i<=30;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}

	if($pager == 5){
		for($i=31;$i<=40;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}

	if($pager == 6){
		for($i=41;$i<=50;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 7){
		for($i=51;$i<=60;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 8){
		for($i=61;$i<=70;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 9){
		for($i=71;$i<=80;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 10){
		for($i=81;$i<=90;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 11){
		for($i=91;$i<=100;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}
	if($pager == 12){
		for($i=101;$i<=106;$i++){
			$sec = "sec".$i;
			if(!$_REQUEST[$sec]){
				$err=1;
			}
		}
	}



	

	if($err){
		//エラーがあった時はコチラ
		$errmsg = "チェックされていない回答があります。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		
		include_once(D_PATH_HOME."/init/dpData/dpCalcData.php");
		include_once(D_PATH_HOME."/lib/keisan/functionEAS.php");
		//----------------------------
		//最終ページ
		//----------------------------
		$tdetail = $obj->getTestPaper($where);
		$update = array();
		$update[ 'where' ][ 'test_id' ] = $where[ 'test_id' ];
		$update[ 'where' ][ 'exam_id' ] = $where[ 'exam_id' ];
		list($score,$dp_id) = $ea->getScore($update);

		
		$array_result = EAS($array_dp,$array_dp_lv,$score);

		$ea->setResult($array_result,$dp_id);
		
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
$tdetail = $ea->getEa($where);

//var_dump($tdetail);

//ページ表示パターン選択
if($temp != "Fin"){
	if($pager){
		$temp = "page";
	}else{
		$temp = "guide";
	}
}

$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

?>