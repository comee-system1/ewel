<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_MHQ.php");
$obj = new BAmethod();
$mhq = new MHQmethod();
$array_exam[1] = [
	1=>'会話の中で相手が退屈しているときにどのように対処すればいいかわかる',
	2=>'今、時間をかけて取り組んでいる物事は自分に合っている（向いている）と思う',
	3=>'困難な状況では先のことはあまり考えない',
	4=>'問題が発生したら人に助けを求める',
	5=>'注意力（物音や細部の変化などに対する）はほかの人より優れていると思う',
	6=>'やらなければならないことのため、最近、自分の生活を充実させられていない',
	7=>'問題が発生しそうな場所には近づかない',
	8=>'話し出すと、ずっと自分が話してしまい、相手が発言する隙を与えないことがよくある',
	9=>'日課を妨げられると、混乱する',
	10=>'何日も同じことを考えることがある',
	11=>'現在、自分の長所を伸ばす機会がある',
	12=>'最近、落ち込んでいる',
	13=>'負けず嫌いだと思う',
	14=>'解決困難な問題が発生したら周りの責任だと考えるようにする',
	15=>'何事も完璧にやるほうである',
	16=>'誰かに愚痴を聞いてもらい気持ちを落ち着けることがある',
	17=>'目覚しい行いをしなくてはならないと思っている',
	18=>'人と話しているときに、どのように会話を進めていいかわからなくなることがある',
	19=>'何事も徹底的にやる',
	20=>'作り話を聞くとそれが作り話であることにすぐに気づいてしまう'	
];

$array_exam[2] = [
	21=>'現在、やるべきことが何であるか明確に分かっている',
	22=>'パーティーと図書館では図書館に行くほうが好きだ',
	23=>'電話で話しているときに、どのように話せばいいか、どのタイミングで何を伝えればいいかわからなくなることがある',
	24=>'就職活動では希望する会社に入らないと意味がない',
	25=>'専門知識やコミュニケーション能力など一部の能力だけではなく、総合的な能力がなければならない',
	26=>'物事に集中するタイプだ',
	27=>'やるべきことの締め切りが間に合わないことが多い',
	28=>'最近、しなければいけないことが非常に多い',
	29=>'いやなことがあると、好きなこと（旅行、スポーツ、カラオケ等）をしてストレス解消する',
	30=>'最近落ち着かず、そわそわしてしまう',
	31=>'問題が発生したら原因を見つけようと考える',
	32=>'責任感が強いと思う',
	33=>'過去の失敗でまだ克服していないことがある',
	34=>'困難な状況では、こんなこともあると思ってあきらめる',
	35=>'人と接することが得意である',
	36=>'ミーティングやパーティーなどでグループでの会話についていけなくなることがある',
	37=>'日付など数字にこだわっている',
	38=>'最近、生活が充実している感じがしない',
	39=>'世間話や雑談のような会話を楽しむことが好きだ',
	40=>'同じやり方を継続的に行うことが好きである',
];

$array_exam[3] = [
	41=>'他の人と同程度には能力があると思う',
	42=>'小説やドラマで登場人物の発言や行動の意図が分からないことがある',
	43=>'最近、何もやる気が起きず、無力感を感じる',
	44=>'特定の種類のもの（コンピューター、電気製品、生き物等）の情報を集めることが好きである',
	45=>'解決困難な問題が発生したらうまくうそをついて自分の状況を好転させる',
	46=>'スケジュールの管理は苦手だと思う',
	47=>'独力で物事を達成しようとするほうだ',
	48=>'同時に2つ以上のことを進めることができる',
	49=>'現在の生活に満足である',
	50=>'仕事では業績をあげないとならないと思う',
	51=>'問題が発生したら分析のために情報収集をする',
	52=>'自分の将来に希望が持てない',
	53=>'困難な状況ではあまりそのことを考えないようにする',
	54=>'困難なことがあると自分で自分を励ます',
	55=>'いやなことがあったら誰かに話を聞いてもらって気分を落ち着かせる',
	56=>'最近気になっていることを考え続けていると、気分が悪くなってくる',
	57=>'同じことを何度も繰り返し考える傾向がある',
	58=>'問題が発生したら大した問題ではないと考えるようにする',
	59=>'考え事の内容はいやなことが多い',
	60=>'丁寧に話しているつもりなのに、周りから失礼だと思われていることがよくある',
];

$array_exam[4] = [
	61=>'行っている作業を中断されても、また戻ってきたときにはすぐに再開できる',
	62=>'最近、生活を楽しんでいない',
	63=>'考え事の内容はよいことが多い',
	64=>'これまでに仕事で人に迷惑をかけたことは一度もない',
	65=>'周囲の親しい人と気軽に話すことが出来る',
	66=>'車のナンバーや電話番号の数字など意味のない一連の情報に注意が行くことがよくある',
	67=>'学業には自信がある',
	68=>'最近気が散りやすく、一つのことに集中できない',
	69=>'解決困難な問題が発生したら自分は悪くないと考えるようにする',
	70=>'人より仕事を早くできる自信がある',
	71=>'困難な状況では状況にまかせる',
	72=>'何事も秩序が取れている状況が好きである',
	73=>'誰かに話を聞いてもらって気分を落ち着けることがある',
	74=>'いやなことがあっても、将来いいこともあるだろうと考える',
	75=>'何かあると、そのことを一日のうちに何度か思い出すことがあるが、考え続けることはない',
	76=>'人と会話をしていて相手の発言になくても、その相手の意図を読み取ることが得意である',
	77=>'最近、心配なことや不安なことが多い',
	78=>'一人でする作業とみんなでする作業では一人でする作業のほうが好きだ',
	79=>'いやなことがあっても、将来への経験になると考えるようにする',
	80=>'何時間も同じことを考えることがよくある',
];

$array_exam[5] = [
	81=>'ある物事にたずさわらないと、いてもたってもいられないような気持ち（混乱したりパニックになるような気分）になることがある',
	82=>'几帳面だと思う',
	83=>'現在、やるべきことは、非常にやりがいがある',
	84=>'新しい友達を作ることに困難を感じる',
	85=>'同じことをずっと考え続けることがある',
	86=>'ほかの人が見逃してしまうような細かいことを察知することができる',
	87=>'現在、取り組んでいる物事をしていると活力がみなぎるように感じる',
	88=>'物事を始めるときには慎重に計画するほうだ',
	89=>'物事の悪い面だけではなくよい面を見ようとしている',
	90=>'最近、整理整頓が出来ず忘れ物をすることが多い',
	91=>'問題が発生したら対策を考える',
	92=>'考え事に集中してしまうと意図的にとめることはできない',
	93=>'いやなことがあると、好きなこと（旅行、スポーツ、カラオケ等）をしてストレス解消する',
	94=>'物事を想像するときにはイメージが浮かぶほうだ',
	95=>'学校の成績はよくないといけないと思う',
	96=>'最近、感情のコントロールが効かないことが多い',
	97=>'周りが理解している冗談がわからないことがある',
	98=>'問題が発生したらどうすることもできないと解決を先延ばしにする',
	99=>'小説のようなフィクションを読むことは好きだ',
	100=>'解決困難な問題が発生したら、なかったことにして忘れるようにする',
];

$array_exam[6] = [
	101=>'考え事に集中していても、止めなければならないときにすぐに止めることができる',
	102=>'劇場と博物館だったら博物館に行くほうが好きだ',
	103=>'問題が発生したら人に話を聞いてもらい問題を整理する',
	104=>'同じことを途切れなく考え続けることがある',
	105=>'何かにのめり込むと、とことん突き詰めると思う',
	106=>'小説などを読んでいるときに、状況や情景がよくイメージできる',
	107=>'子供のころ、ごっこ遊びをして遊ぶのが好きだった',
	108=>'与えられた仕事は常に完璧にこなしてきた',
	109=>'初対面の人と会うことが、どちらかというと好きだ',
	110=>'すべての面で有能でなくてはならないと思う',
	111=>'自分が置かれている集団内での立場をすぐに察知することができる',
	112=>'問題が発生していたら関与しない',
	113=>'最近、感情面で負担になることを多くやらねばならない',
	114=>'物事の中の何らかの法則性（型、パターン、決まりなど）を見出すことができる',
	115=>'問題が発生したら状況を整理して理解しようとする',
	116=>'人の外見（髪型など）が変わっても気づかないことが多い',
	117=>'問題状況が発生したら状況を変えるよう行動を起こす',
	118=>'物と人間であれば物のほうに興味を感じる',
	119=>'問題にならないように自分の態度は表明しない',
	120=>'日記など文章を書いて気分を落ち着ける',
];


//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST[nextPage];
}else{
	$pager = 1;
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
if($ua){
//	$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST[tid];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;
}else{
//	$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}

//--------------------------------
//回答登録
//--------------------------------
if(count($_REQUEST[ 'q' ])){
	foreach($_REQUEST[ 'q' ] as $key=>$val){
		$q = "q".$key;
		$edit[ $q ] = $val;
	}
	$tbl = "t_testpaper";
	$obj->editDetail($tbl,$edit,$where);
	
}

//時間取得
$m = $mhq->getTime($test);
$minute_rest = $m[ 'minute_rest' ];
//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$mhq->setStartTime($where);

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

if($temp == "guide"){
	$mhq->deleteMhq($where);
}


$mhqData = $mhq->getData($where);
$timelimit = preg_replace("/\-/","/",$mhqData[ 'timelimit' ]);


//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = 0;

		foreach($_REQUEST[ 'chk_ans' ] as $key=>$value){
			if(strlen($_REQUEST[ 'ans' ][$key]) < 1 ){
				$err = $key;
				break;
			}
		}
		$mhq->setData($where);
	//}
	

	
	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){

		//テストデータ取得
		$result = $mhq->getResult($where);
		$mhq->setResult($result,$where);

		$set = [];
		$set[ 'exam_state' ] = 2;
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
$tdetail = $mhq->getData($where);


$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

?>