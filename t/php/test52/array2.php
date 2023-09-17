<?PHP
$array_pos = array(
				1=>"社長・役員・事業部長相当"
				,2=>"部長相当"
				,3=>"課長相当"
				,4=>"主任・リーダー相当"
				,5=>"その他"
			);


$ansk = 5;
if($_REQUEST[ 'type' ] == "subordinate"){
	
	$array_ans1[2][1] = "まったくしない";
	$array_ans1[2][2] = "ほとんどしない";
	$array_ans1[2][3] = "ときどきする";
	$array_ans1[2][4] = "よくする";
	$array_ans1[2][5] = "いつもする";

	$array_question1[2][$ansk++]  = "仕事で必要なスキルについて、あなたの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++]  = "仕事で必要なスキルについて、あなたの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++]  = "周りの人と協力・協働するスキルについて、あなたの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++]  = "周りの人と協力・協働するスキルについて、あなたの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++]  = "仕事に対する態度について、あなたの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "仕事に対する態度について、あなたの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "あなたが割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックをすること";
	$array_question1[2][$ansk++] = "あなたが割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックをすること";
	$array_question1[2][$ansk++] = "あなたの仕事に対する意見を言うこと";
	$array_question1[2][$ansk++] = "あなたの仕事ぶりを批評すること";
	$array_question1[2][$ansk++] = "仕事の問題や課題について話をすること";
	$array_question1[2][$ansk++] = "仕事の方針や方向性について話をすること";
	$array_question1[2][$ansk++] = "世間話をすること";
	$array_question1[2][$ansk++] = "仕事以外の個人的な話をすること";
}else{

	$array_ans1[2][1] = "まったくしない";
	$array_ans1[2][2] = "ほとんどしない";
	$array_ans1[2][3] = "ときどきする";
	$array_ans1[2][4] = "よくする";
	$array_ans1[2][5] = "いつもする";

	$array_question1[2][$ansk++] = "仕事で必要なスキルについて、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "仕事で必要なスキルについて、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "周りの人と協力・協働するスキルについて、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "周りの人と協力・協働するスキルについて、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "仕事に対する態度について、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "仕事に対する態度について、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[2][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんが割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックをすること";
	$array_question1[2][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんが割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックをすること";
	$array_question1[2][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事に対する意見を言うこと";
	$array_question1[2][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事ぶりを批評すること";
	$array_question1[2][$ansk++] = "仕事の問題や課題について話をすること";
	$array_question1[2][$ansk++] = "仕事の方針や方向性について話をすること";
	$array_question1[2][$ansk++] = "世間話をすること";
	$array_question1[2][$ansk++] = "仕事以外の個人的な話をすること";
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_ans1[3][1] = "まったくしない";
	$array_ans1[3][2] = "ほとんどしない";
	$array_ans1[3][3] = "ときどきする";
	$array_ans1[3][4] = "よくする";
	$array_ans1[3][5] = "いつもする";

	$array_question1[3][$ansk++] = "仕事で必要なスキルについて、あなたの<b>良いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "仕事で必要なスキルについて、あなたの<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "周りの人と協力・協働するスキルについて、あなたの<b>良いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "周りの人と協力・協働するスキルについて、あなたの<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "仕事に対する態度について、あなたの<b>良いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "仕事に対する態度について、あなたの<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[3][$ansk++] = "あなたに割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックを求めること";
	$array_question1[3][$ansk++] = "あなたに割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックを求めること";
	$array_question1[3][$ansk++] = "あなたの仕事に対する意見を求めること";
	$array_question1[3][$ansk++] = "あなたの仕事ぶりに対する批評を求めること";
	$array_question1[3][$ansk++] = "自分に課せられている要求事項について、話し合うこと";
	$array_question1[3][$ansk++] = "割り当てられた職務について話し合うこと";
	$array_question1[3][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんとの時間や接点を、多く持とうとすること";
	$array_question1[3][$ansk++] = "自分の仕事で変更したい点について、話し合うこと";
	$array_question1[3][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんがあなたに期待していることについて、話し合うこと";

}else{

	$array_ans1[3][1] = "まったくあてはまらない";
	$array_ans1[3][2] = "あまりあてはまらない";
	$array_ans1[3][3] = "どちらともいえない";
	$array_ans1[3][4] = "ある程度あてはまる";
	$array_ans1[3][5] = "とてもあてはまる";

	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんがパフォーマンスに関わる情報がほしいときは、たいてい対応する";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、ほとんどの場合、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスに対するあなたの意見を尊重する";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを褒めることはめったにない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事についてフィードバックをするときは、サポーティブだ";
	$array_question1[3][$ansk++] = "忙しすぎて、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにフィードバックをできない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにあなたが与えるパフォーマンスに関わる情報は、たいていあまり意味がない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんが仕事で間違いを犯した場合、あなたはそれを<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに伝える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにあなたが与えるフィードバックは役に立つ";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは気兼ねなく、パフォーマンスに関するフィードバックをあなたに求める";
	$array_question1[3][$ansk++] = "フィードバックをする際に相手にあまりを気を使わない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんがパフォーマンスに確信がないときはフィードバックを求めるように促す";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんがいい仕事をしたら、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのパフォーマンスを褒める";
	$array_question1[3][$ansk++] = "たいてい、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに対するフィードバックの仕方には配慮しない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんがいい仕事をしたら、たいていそれを<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに伝える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、あなたから受けるフィードバックに価値を置いている";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスに対して、有益なフィードバックをしている";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスを評価するとき、あなたは公平だ";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんが締切を守らない場合は、それを指摘する";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんと毎日のようにやり取りしている";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのパフォーマンスが組織の基準に達していないときには、それを<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに伝える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんがフィードバックを求めても、すぐには情報を与えないことが多い";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんとほとんど接触がない";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにフィードバックをするときは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの感情に配慮している";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、あなたが<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに与えるフィードバックを信頼している";
	$array_question1[3][$ansk++] = "ほとんどの場合、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスをあなたはよく把握している";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに直接フィードバックを求められると、あなたはいらだつことが多い";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにしばしば、ポジティブなフィードバックを与える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのパフォーマンスが期待しているよりも低い場合、それを<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに教える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの悪いところについてフィードバックをするときは、ユーモアを交えて伝える";
	$array_question1[3][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの悪いところについてフィードバックをするときは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに、意見を言う機会を与える";
	$array_question1[3][$ansk++] = "あなたは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが得意なこと・苦手なことをわかっている。";

}

if($_REQUEST[ 'type' ] == "subordinate"){

	$array_ans1[4][1] = "まったくあてはまらない";
	$array_ans1[4][2] = "あまりあてはまらない";
	$array_ans1[4][3] = "どちらともいえない";
	$array_ans1[4][4] = "ある程度あてはまる";
	$array_ans1[4][5] = "とてもあてはまる";
	$array_question1[4][$ansk++] = "私がパフォーマンスに関わる情報がほしいときは、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはたいてい対応してくれる";
	$array_question1[4][$ansk++] = "私は、ほとんどの場合、私の仕事のパフォーマンスに対する<u><b>".$bossdata[ 'sei' ]."</b></u>さんの意見を尊重する";
	$array_question1[4][$ansk++] = "私は<u><b>".$bossdata[ 'sei' ]."</b></u>さんから褒められることはめったにない";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんが私の仕事についてフィードバックをするときは、サポーティブだ";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは忙しすぎて、私にフィードバックをできない";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんからもらうパフォーマンスに関わる情報は、たいていあまり意味がない";
	$array_question1[4][$ansk++] = "私が仕事で間違いを犯した場合、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはそれを私に伝える";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんから受けるフィードバックは役に立つ";
	$array_question1[4][$ansk++] = "私は気兼ねなく、パフォーマンスに関するフィードバックを<u><b>".$bossdata[ 'sei' ]."</b></u>さんに求める";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、フィードバックをする際に相手にあまりを気を使わない";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、私がパフォーマンスに確信がないときはフィードバックを求めるように促す";
	$array_question1[4][$ansk++] = "私がいい仕事をしたら、<u><b>".$bossdata[ 'sei' ]."</b></u>さんは私のパフォーマンスを褒める";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、たいてい、私に対するフィードバックの仕方には配慮しない";
	$array_question1[4][$ansk++] = "私がいい仕事をしたら、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはたいていそれを私に伝える";
	$array_question1[4][$ansk++] = "私は、<u><b>".$bossdata[ 'sei' ]."</b></u>さんから受けるフィードバックに価値を置いている";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは私の仕事のパフォーマンスに対して、有益なフィードバックをする";
	$array_question1[4][$ansk++] = "私の仕事のパフォーマンスを評価するとき、<u><b>".$bossdata[ 'sei' ]."</b></u>さんは公平だ";
	$array_question1[4][$ansk++] = "私が締切を守らない場合は、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはそれを指摘する";
	$array_question1[4][$ansk++] = "私は<u><b>".$bossdata[ 'sei' ]."</b></u>さんと毎日のようにやり取りしている";
	$array_question1[4][$ansk++] = "私のパフォーマンスが組織の基準に達していないときには、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはそれを私に伝える";
	$array_question1[4][$ansk++] = "私がフィードバックを求めても、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはすぐには情報をくれないことが多い";
	$array_question1[4][$ansk++] = "私は<u><b>".$bossdata[ 'sei' ]."</b></u>さんとほとんど接触がない";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんが私にフィードバックをするときは、私の感情に配慮している";
	$array_question1[4][$ansk++] = "私は、<u><b>".$bossdata[ 'sei' ]."</b></u>さんが私にくれるフィードバックを信頼している";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、ほとんどの場合、私の仕事のパフォーマンスをよく把握している";
	$array_question1[4][$ansk++] = "私が直接フィードバックを求めると、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはいらだつことが多い";
	$array_question1[4][$ansk++] = "私はしばしば、<u><b>".$bossdata[ 'sei' ]."</b></u>さんからポジティブなフィードバックを受ける";
	$array_question1[4][$ansk++] = "私のパフォーマンスが期待されているよりも低い場合、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはそれを私に教える";
	$array_question1[4][$ansk++] = "私の悪いところについてフィードバックをするときは、<u><b>".$bossdata[ 'sei' ]."</b></u>さんはユーモアを交えて伝える";
	$array_question1[4][$ansk++] = "私の悪いところについてフィードバックをするときは、<u><b>".$bossdata[ 'sei' ]."</b></u>さんは私に、意見を言う機会を与える";
	$array_question1[4][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんはあなたが得意なこと・苦手なことをわかってくれている。";
	
}else{

	$array_ans1[4][1] = "まったくあてはまらない";
	$array_ans1[4][2] = "あまりあてはまらない";
	$array_ans1[4][3] = "どちらともいえない";
	$array_ans1[4][4] = "ある程度あてはまる";
	$array_ans1[4][5] = "とてもあてはまる";

/*
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの幸福を気にかけている";
	$array_question1[4][$ansk++] = "仕事についての知識が豊富である";
	$array_question1[4][$ansk++] = "行動や行為は一貫しているとはいえない";
	$array_question1[4][$ansk++] = "そうとわかって<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを傷つけることはしない";
	$array_question1[4][$ansk++] = "強い正義感を持っている";
	$array_question1[4][$ansk++] = "仕事上のスキルには自信が持てる";
	$array_question1[4][$ansk++] = "約束を守るかを疑われる必要はない";
	$array_question1[4][$ansk++] = "仕事をする能力に優れている";
	$array_question1[4][$ansk++] = "人に対応する際に公正であろうとしている";
	$array_question1[4][$ansk++] = "成果を上げるために必要な能力を持っている";
	$array_question1[4][$ansk++] = "無理をしても<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを助ける";
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって重要なことを気にかけている";
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに信頼されている";
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんとの関係に満足している";
	$array_question1[4][$ansk++] = "自分のマネジメントスタイル（現場型、従業員参加型など）に満足している";
	$array_question1[4][$ansk++] = "自分には<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成する責任があると思っている";
	$array_question1[4][$ansk++] = "自分は義務感によって<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成している";
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成することが個人的に楽しい";
*/
	$array_question1[4][$ansk++] = "「<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事ぶりを日頃観察していないと分からないこと」について指摘する";
	$array_question1[4][$ansk++] = "「<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さん自身も悪いところだと思うこと」について指摘する";
	$array_question1[4][$ansk++] = "「<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの人格に関わること」について指摘する";
	$array_question1[4][$ansk++] = "ネガティブな感情をともなった言い方をする";
	$array_question1[4][$ansk++] = "良いところも同時に指摘する";
	$array_question1[4][$ansk++] = "悪いところの解決法もアドバイスする";
	$array_question1[4][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの立場に立って考える";
	$array_question1[4][$ansk++] = "「あなた自身にも、何か悪いところがあるかもしれない」と考える";
	$array_question1[4][$ansk++] = "個々の問題を責めるのではなく、問題を解決し今後に活かすように考える";
	$array_question1[4][$ansk++] = "あなたの指摘によって、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは自分の行動を変えようと思ってくれる";
}





if($_REQUEST[ 'type' ] == "subordinate"){

	$array_ans1[5][1] = "まったくあてはまらない";
	$array_ans1[5][2] = "あまりあてはまらない";
	$array_ans1[5][3] = "どちらともいえない";
	$array_ans1[5][4] = "ある程度あてはまる";
	$array_ans1[5][5] = "とてもあてはまる";

	$array_question1[5][$ansk++] = "「あなたの仕事ぶりを日頃観察していないと分からないこと」について指摘する";
	$array_question1[5][$ansk++] = "「あなた自身も悪いところだと思うこと」について指摘する";
	$array_question1[5][$ansk++] = "「あなたの人格に関わること」について指摘する";
	$array_question1[5][$ansk++] = "ネガティブな感情をともなった言い方をする";
	$array_question1[5][$ansk++] = "良いところも同時に指摘する";
	$array_question1[5][$ansk++] = "悪いところの解決法もアドバイスする";
	$array_question1[5][$ansk++] = "あなたの立場に立って考えてくれる";
	$array_question1[5][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは「自分自身にも、何か悪いところがあるかもしれない」と考えてくれる";
	$array_question1[5][$ansk++] = "個々の問題を責めるのではなく、問題を解決し今後に活かすように考えてくれる";
	$array_question1[5][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんの指摘によって、あなたは自分の行動を変えようと思う";

}else{

	$array_ans1[5][1] = "まったくあてはまらない";
	$array_ans1[5][2] = "あまりあてはまらない";
	$array_ans1[5][3] = "どちらともいえない";
	$array_ans1[5][4] = "ある程度あてはまる";
	$array_ans1[5][5] = "とてもあてはまる";

	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、今の仕事はやりがいのある仕事であると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事で<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの能力や可能性を伸ばすことができると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、今の仕事は<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに向いていると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事の経験を通じて、より高度な仕事ができるようになると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事において<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さん自身が「我ながらよくやったなあ」と思う事がある";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事において、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さん自身がさらに高いレベルに達したと感じることができている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの今の仕事は達成感を感じることができると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事を通じて<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さん自身が成長したという感じを持てている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事に誇りを持っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、あなたが<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事ぶりに満足していると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事に自信を持てている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、何ごとにつけ、自分はちゃんとできているか気にしている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、批判された方が、褒められるよりも、自分のなおすところを知ることができるので望ましいと思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分は周りの人と同じくらい有能であると、いつも証明しようとしている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、人生で失望することがあっても、それは人として成長するための機会だと思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、失敗は自分の弱点を知る機会としてとらえている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、挫折をしても、いずれはそこから学び、いい経験になると思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分に対する批判は、自分の役に立つことがあるので、価値のあることだと思っている";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、困難な状況では、その経験から学び、成長することが大事だという心構えでいる";
	$array_question1[5][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分のよさを自ら確認し、他者に認めてもらおうとしている";
}




if($_REQUEST[ 'type' ] == "subordinate"){


	$array_ans1[6][1] = "まったくあてはまらない";
	$array_ans1[6][2] = "あまりあてはまらない";
	$array_ans1[6][3] = "どちらともいえない";
	$array_ans1[6][4] = "ある程度あてはまる";
	$array_ans1[6][5] = "とてもあてはまる";
	
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、私の幸福を気にかけてくれる";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、仕事についての知識が豊富である";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんの行動や行為は一貫しているとはいえない";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、そうとわかって私を傷つけることはしないだろう";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、強い正義感を持っている";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんの仕事上のスキルの高さには確信が持てる";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんが約束を守るかを疑う必要はない";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、仕事をする能力に優れている";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、人に対応する際に公正であろうとしている";
	$array_question1[6][$ansk++] = "成果を上げるために必要な能力を<u><b>".$bossdata[ 'sei' ]."</b></u>さんは持っている";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、無理をしても私を助けてくれる";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、私にとって重要なことを気にかけてくれる";
	$array_question1[6][$ansk++] = "私は<u><b>".$bossdata[ 'sei' ]."</b></u>さんを信頼している";
	$array_question1[6][$ansk++] = "私にとって重要な問題に対しては、できることなら、<u><b>".$bossdata[ 'sei' ]."</b></u>さんに影響力を持ってほしくない";
	$array_question1[6][$ansk++] = "この会社での私の将来を<u><b>".$bossdata[ 'sei' ]."</b></u>さんに完全に委ねてもいい";
	$array_question1[6][$ansk++] = "たとえ<u><b>".$bossdata[ 'sei' ]."</b></u>さんの行動を見張ることができなくても、自分にとって重要な仕事や問題を<u><b>".$bossdata[ 'sei' ]."</b></u>さんに安心して託すことができる";
	$array_question1[6][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんを見張っておくための良い方法があればいいのにと思う";
	$array_question1[6][$ansk++] = "もし誰かが<u><b>".$bossdata[ 'sei' ]."</b></u>さんの真意を疑っても、私はとりあえず疑わないことを選ぶ";


	
}else{

	$array_ans1[6][1] = "まったくしない";
	$array_ans1[6][2] = "ほとんどしない";
	$array_ans1[6][3] = "ときどきする";
	$array_ans1[6][4] = "よくする";
	$array_ans1[6][5] = "いつもする";

	$array_question1[6][$ansk++] = "仕事で必要なスキルについて、自分の<b>良いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "仕事で必要なスキルについて、自分の<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "周りの人と協力・協働するスキルについて、自分の<b>良いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "周りの人と協力・協働するスキルについて、自分の<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "仕事に対する態度について、自分の<b>良いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "仕事に対する態度について、自分の<b>悪いところ</b>を指摘するよう求めること";
	$array_question1[6][$ansk++] = "自分に割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックを求めること";
	$array_question1[6][$ansk++] = "自分に割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックを求めること";
	$array_question1[6][$ansk++] = "自分の仕事に対する意見を求めること";
	$array_question1[6][$ansk++] = "自分の仕事ぶりに対する批評を求めること";
	$array_question1[6][$ansk++] = "自分に課せられている要求事項について、あなたと話し合うこと";
	$array_question1[6][$ansk++] = "割り当てられた職務についてあなたと話し合うこと";
	$array_question1[6][$ansk++] = "あなたとの時間や接点を、多く持とうとすること";
	$array_question1[6][$ansk++] = "自分の仕事で変更したい点について、あなたと話し合うこと";
	$array_question1[6][$ansk++] = "あなたが自分に期待していることについて、あなたと話し合うこと";
}

if($_REQUEST[ 'type' ] == "subordinate"){



	$array_ans1[7][1] = "まったくあてはまらない";
	$array_ans1[7][2] = "あまりあてはまらない";
	$array_ans1[7][3] = "どちらともいえない";
	$array_ans1[7][4] = "ある程度あてはまる";
	$array_ans1[7][5] = "とてもあてはまる";
	
	$array_question1[7][$ansk++] = "仕事の結果に対する個人的な責任を問われる";
	$array_question1[7][$ansk++] = "仕事上の失敗やミスが重大な結果をもたらすことが多い";
	$array_question1[7][$ansk++] = "主たる職務が自動化・手順化されている";
	$array_question1[7][$ansk++] = "高いレベルの正確さが求められる";
	$array_question1[7][$ansk++] = "自律的に決定を行って仕事を進める";
	$array_question1[7][$ansk++] = "社内で競争することが求められる";
	$array_question1[7][$ansk++] = "非常にたくさんの仕事をしなければならない";
	$array_question1[7][$ansk++] = "時間内に仕事が処理しきれない";
	$array_question1[7][$ansk++] = "一生懸命働かなければならない";
	$array_question1[7][$ansk++] = "かなり注意をし、集中する必要がある";
	$array_question1[7][$ansk++] = "高度の知識や技術が必要なむずかしい仕事だ";
	$array_question1[7][$ansk++] = "勤務時間中はいつも仕事のことを考えていなければならない";
	$array_question1[7][$ansk++] = "仕事の進め方が決まっておらず、人によってまちまちである";


}else{

	$array_ans1[7][1] = "まったくあてはまらない";
	$array_ans1[7][2] = "あまりあてはまらない";
	$array_ans1[7][3] = "どちらともいえない";
	$array_ans1[7][4] = "ある程度あてはまる";
	$array_ans1[7][5] = "とてもあてはまる";

	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの職務の目標を達成している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、求められているパフォーマンスの基準を満たしている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、すべての業務で、専門知識・技術を発揮している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの職務として要求されていることをすべて達成している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、通常割り当てられる以上の責任を果たせている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんはより高いレベルの役割にふさわしいだろう";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、職務のすべての領域で仕事ができる人間であり、課題をたくみにこなしている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分の所属部署が会社の目標にどのように貢献しているかを理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、所属部署の目標を理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、所属部署と他の部署との関係を理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、各メンバーの成果が、所属部署としての成果にどう貢献しているかを理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、所属部署にあなたが何を期待しているかを理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、所属部署のあなたのマネジメントスタイル（現場型、従業員参加型など）を理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分の仕事の責任や課題はよくわかっている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分の職務を果たすためにどう課題に取り組めばいいかを理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分の課題や責任の優先順位を理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、仕事の道具（ソフトウェアやプログラム、機械など）の使い方を理解している";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、職務を行うために必要なリソース（備品、消耗品、設備など）の利用方法をよくわかっている";
	$array_question1[7][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは、自分の顧客（社内社外を問わず職務を提供する人や組織）の要求に応えるためには、どうすればいいかをよくわかっている";
}

if($_REQUEST[ 'type' ] == "subordinate"){


	$array_ans1[8][1] = "まったくあてはまらない";
	$array_ans1[8][2] = "あまりあてはまらない";
	$array_ans1[8][3] = "どちらともいえない";
	$array_ans1[8][4] = "ある程度あてはまる";
	$array_ans1[8][5] = "とてもあてはまる";
	
	$array_question1[8][$ansk++] = "今の仕事はやりがいのある仕事である";
	$array_question1[8][$ansk++] = "仕事で自分の能力や可能性を伸ばすことができる";
	$array_question1[8][$ansk++] = "今の仕事は自分に向いている";
	$array_question1[8][$ansk++] = "仕事の経験を通じて、より高度な仕事ができるようになる";
	$array_question1[8][$ansk++] = "仕事において我ながらよくやったなあと思う事がある";
	$array_question1[8][$ansk++] = "仕事において、自分がさらに高いレベルに達したと感じることができる";
	$array_question1[8][$ansk++] = "今の仕事は達成感を感じることができる";
	$array_question1[8][$ansk++] = "仕事を通じて自分自身が成長したという感じを持てる";
	$array_question1[8][$ansk++] = "仕事に誇りを持っている";
	$array_question1[8][$ansk++] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんはあなたの仕事ぶりに満足している";
	$array_question1[8][$ansk++] = "仕事に自信を持てている";
	$array_question1[8][$ansk++] = "自分の職務の目標を達成している";
	$array_question1[8][$ansk++] = "求められているパフォーマンスの基準を満たしている";
	$array_question1[8][$ansk++] = "すべての業務で、専門知識・技術を発揮している";
	$array_question1[8][$ansk++] = "自分の職務として要求されていることをすべて達成している";
	$array_question1[8][$ansk++] = "通常割り当てられる以上の責任を果たせている";
	$array_question1[8][$ansk++] = "自分はより高いレベルの役割にふさわしいだろう";
	$array_question1[8][$ansk++] = "職務のすべての領域で仕事ができる人間であり、課題をたくみにこなしている";
	$array_question1[8][$ansk++] = "期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
	$array_question1[8][$ansk++] = "自分の職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";





}else{

	$array_ans1[8][1] = "まったくあてはまらない";
	$array_ans1[8][2] = "あまりあてはまらない";
	$array_ans1[8][3] = "どちらともいえない";
	$array_ans1[8][4] = "ある程度あてはまる";
	$array_ans1[8][5] = "とてもあてはまる";

	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】仕事の結果に対する個人的な責任を問われる";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】仕事上の失敗やミスが重大な結果をもたらすことが多い";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】主たる職務が自動化・手順化されている";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】高いレベルの正確さが求められる";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】自律的に決定を行って仕事を進める";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】社内で競争することが求められる";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】非常にたくさんの仕事をしなければならない";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】時間内に仕事が処理しきれない";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】一生懸命働かなければならない";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】かなり注意をし、集中する必要がある";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】高度の知識や技術が必要なむずかしい仕事だ";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】勤務時間中はいつも仕事のことを考えていなければならない";
	$array_question1[8][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの仕事は】仕事の進め方が決まっておらず、人によってまちまちである";
}

if($_REQUEST[ 'type' ] == "subordinate"){


	$array_ans1[9][1] = "まったくあてはまらない";
	$array_ans1[9][2] = "あまりあてはまらない";
	$array_ans1[9][3] = "どちらともいえない";
	$array_ans1[9][4] = "ある程度あてはまる";
	$array_ans1[9][5] = "とてもあてはまる";
	
	$array_question1[9][$ansk++] = "会社の歴史（いつだれが創業したのか、当初の商品やサービスはなにか、厳しい時代をどのように切り抜けたのかなど）をよくわかっている";
	$array_question1[9][$ansk++] = "会社の組織構造（部署同士がどのように連携しているかなど）をよくわかっている";
	$array_question1[9][$ansk++] = "会社がどのように動いているか（誰が何をし、現場や子会社、支店などがどのように貢献しているかなど）を理解している";
	$array_question1[9][$ansk++] = "各部署や子会社、現場などがどのように会社の目標に貢献しているかを理解している";
	$array_question1[9][$ansk++] = "会社のマネジメントスタイル（トップダウン、従業員参加型など）を理解している";
	$array_question1[9][$ansk++] = "メンバーが使う会社独特の言葉（略語、略称など）を理解している";
	$array_question1[9][$ansk++] = "自分の所属部署が会社の目標にどのように貢献しているかを理解している";
	$array_question1[9][$ansk++] = "所属部署の目標を理解している";
	$array_question1[9][$ansk++] = "所属部署と他の部署との関係を理解している";
	$array_question1[9][$ansk++] = "各メンバーの成果が、所属部署としての成果にどう貢献しているかを理解している";
	$array_question1[9][$ansk++] = "所属部署に<u><b>".$bossdata[ 'sei' ]."</b></u>さんが何を期待しているかを理解している";
	$array_question1[9][$ansk++] = "所属部署の<u><b>".$bossdata[ 'sei' ]."</b></u>さんのマネジメントスタイル（現場型、従業員参加型など）を理解している";
	$array_question1[9][$ansk++] = "自分の仕事の責任や課題はよくわかっている";
	$array_question1[9][$ansk++] = "自分の職務を果たすためにどう課題に取り組めばいいかを理解している";
	$array_question1[9][$ansk++] = "自分の課題や責任の優先順位を理解している";
	$array_question1[9][$ansk++] = "仕事の道具（ソフトウェアやプログラム、機械など）の使い方を理解している";
	$array_question1[9][$ansk++] = "職務を行うために必要なリソース（備品、消耗品、設備など）の利用方法をよくわかっている";
	$array_question1[9][$ansk++] = "自分の顧客（社内社外を問わず職務を提供する人や組織）の要求に応えるためには、どうすればいいかをよくわかっている";
	$array_question1[9][$ansk++] = "仕事のスキルについての全体的な知識を提供するために計画された、一連の研修を受けている";
	$array_question1[9][$ansk++] = "所属部署のやり方や、仕事の仕方が完全にわかるまでは、責任を負うような通常業務をしなかった";
	$array_question1[9][$ansk++] = "私の仕事の知識の多くは、試行錯誤によってインフォーマルに得られたものである";
	$array_question1[9][$ansk++] = "この組織における研修は、おもに実際に仕事をしながら習得するというやり方だ";


}else{

	$array_ans1[9][1] = "まったく価値がない";
	$array_ans1[9][2] = "あまり価値がない";
	$array_ans1[9][3] = "どちらともいえない";
	$array_ans1[9][4] = "ある程度価値がある";
	$array_ans1[9][5] = "とても価値がある";

	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】同僚達といい人間関係を保つこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】より高いレベルの職に進むための機会を得ること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】雇用保障があること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんと<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの家族にとって望ましい地域に住むこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】日常的に、新しくて馴染みの薄い業務に取り組むような、変化のある仕事の仕方をすること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】直属の上司と友好的な関係を持つこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】高額を稼ぐ機会があること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】個人的な達成感を得られるような、困難だがやりがいのある仕事に取り組むこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】仕事の内容をすべて把握し、意外性を感じないこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】自分の、もしくは家族と過ごすための十分な時間があること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】互いにうまく協力できる人と一緒に働くこと";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】真実、正しい答え、そして唯一の回答を見つけること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】業務の厳密な時間制限を守ること";
	$array_question1[9][$ansk++] = "【<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって】仕事を通じて社会貢献をすること";
}

if($_REQUEST[ 'type' ] == "subordinate"){

	$array_ans1[10][1] = "まったく価値がない";
	$array_ans1[10][2] = "あまり価値がない";
	$array_ans1[10][3] = "どちらともいえない";
	$array_ans1[10][4] = "ある程度価値がある";
	$array_ans1[10][5] = "とても価値がある";

	$array_question1[10][$ansk++] = "同僚達といい人間関係を保つこと";
	$array_question1[10][$ansk++] = "より高いレベルの職に進むための機会を得ること";
	$array_question1[10][$ansk++] = "雇用保障があること";
	$array_question1[10][$ansk++] = "あなたとあなたの家族にとって望ましい地域に住むこと";
	$array_question1[10][$ansk++] = "日常的に、新しくて馴染みの薄い業務に取り組むような、変化のある仕事の仕方をすること";
	$array_question1[10][$ansk++] = "直属の上司と友好的な関係を持つこと";
	$array_question1[10][$ansk++] = "高額を稼ぐ機会があること";
	$array_question1[10][$ansk++] = "個人的な達成感を得られるような、困難だがやりがいのある仕事に取り組むこと";
	$array_question1[10][$ansk++] = "仕事の内容をすべて把握し、意外性を感じないこと";
	$array_question1[10][$ansk++] = "自分の、もしくは家族と過ごすための十分な時間があること";
	$array_question1[10][$ansk++] = "互いにうまく協力できる人と一緒に働くこと";
	$array_question1[10][$ansk++] = "真実、正しい答え、そして唯一の回答を見つけること";
	$array_question1[10][$ansk++] = "業務の厳密な時間制限を守ること";
	$array_question1[10][$ansk++] = "仕事を通じて社会貢献をすること";


}else{

	$array_ans1[10][1] = "まったくしない";
	$array_ans1[10][2] = "ほとんどしない";
	$array_ans1[10][3] = "ときどきする";
	$array_ans1[10][4] = "よくする";
	$array_ans1[10][5] = "いつもする";

	$array_question1[10][$ansk++] = "仕事で必要なスキルについて、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "仕事で必要なスキルについて、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "周りの人と協力・協働するスキルについて、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "周りの人と協力・協働するスキルについて、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "仕事に対する態度について、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>良いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "仕事に対する態度について、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの<b>悪いところ</b>を指摘すること";
	$array_question1[10][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックをすること";
	$array_question1[10][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックをすること";
	$array_question1[10][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事に対する意見を言うこと";
	$array_question1[10][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事ぶりを批評すること";
	$array_question1[10][$ansk++] = "仕事の問題や課題について話をすること";
	$array_question1[10][$ansk++] = "仕事の方針や方向性について話をすること";
	$array_question1[10][$ansk++] = "世間話をすること";
	$array_question1[10][$ansk++] = "仕事以外の個人的な話をすること";
}


$array_ans1[11][1] = "まったくあてはまらない";
$array_ans1[11][2] = "あまりあてはまらない";
$array_ans1[11][3] = "どちらともいえない";
$array_ans1[11][4] = "ある程度あてはまる";
$array_ans1[11][5] = "とてもあてはまる";
                     
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんがパフォーマンスに関わる情報がほしいときは、たいてい対応する";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、ほとんどの場合、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスに対するあなたの意見を尊重する";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを褒めることはめったにない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事についてフィードバックをするときは、サポーティブだ";
$array_question1[11][$ansk++] = "忙しすぎて、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにフィードバックをできない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにあなたが与えるパフォーマンスに関わる情報は、たいていあまり意味がない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが仕事で間違いを犯した場合、あなたはそれを<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに伝える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにあなたが与えるフィードバックは役に立つ";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは気兼ねなく、パフォーマンスに関するフィードバックをあなたに求める";
$array_question1[11][$ansk++] = "フィードバックをする際に相手にあまりを気を使わない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんがパフォーマンスに確信がないときはフィードバックを求めるように促す";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんがいい仕事をしたら、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのパフォーマンスを褒める";
$array_question1[11][$ansk++] = "たいてい、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに対するフィードバックの仕方には配慮しない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんがいい仕事をしたら、たいていそれを<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに伝える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、あなたから受けるフィードバックに価値を置いている";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスに対して、有益なフィードバックをしている";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスを評価するとき、あなたは公平だ";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが締切を守らない場合は、それを指摘する";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんと毎日のようにやり取りしている";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのパフォーマンスが組織の基準に達していないときには、それを<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに伝える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんがフィードバックを求めても、すぐには情報を与えないことが多い";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんとほとんど接触がない";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにフィードバックをするときは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの感情に配慮している";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、あなたが<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに与えるフィードバックを信頼している";
$array_question1[11][$ansk++] = "ほとんどの場合、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事のパフォーマンスをあなたはよく把握している";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに直接フィードバックを求められると、あなたはいらだつことが多い";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにしばしば、ポジティブなフィードバックを与える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのパフォーマンスが期待しているよりも低い場合、それを<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに教える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの悪いところについてフィードバックをするときは、ユーモアを交えて伝える";
$array_question1[11][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの悪いところについてフィードバックをするときは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに、意見を言う機会を与える";
$array_question1[11][$ansk++] = "あなたは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんが得意なこと・苦手なことをわかっている。";



$array_ans1[12][1] = "まったくあてはまらない";
$array_ans1[12][2] = "あまりあてはまらない";
$array_ans1[12][3] = "どちらともいえない";
$array_ans1[12][4] = "ある程度あてはまる";
$array_ans1[12][5] = "とてもあてはまる";
/*
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの幸福を気にかけている";
$array_question1[12][$ansk++] = "仕事についての知識が豊富である";
$array_question1[12][$ansk++] = "行動や行為は一貫しているとはいえない";
$array_question1[12][$ansk++] = "そうとわかって<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを傷つけることはしない";
$array_question1[12][$ansk++] = "強い正義感を持っている";
$array_question1[12][$ansk++] = "仕事上のスキルには自信が持てる";
$array_question1[12][$ansk++] = "約束を守るかを疑われる必要はない";
$array_question1[12][$ansk++] = "仕事をする能力に優れている";
$array_question1[12][$ansk++] = "人に対応する際に公正であろうとしている";
$array_question1[12][$ansk++] = "成果を上げるために必要な能力を持っている";
$array_question1[12][$ansk++] = "無理をしても<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを助ける";
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって重要なことを気にかけている";
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに信頼されている";
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんとの関係に満足している";
$array_question1[12][$ansk++] = "自分のマネジメントスタイル（現場型、従業員参加型など）に満足している";
$array_question1[12][$ansk++] = "自分には<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成する責任があると思っている";
$array_question1[12][$ansk++] = "自分は義務感によって<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成している";
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成することが個人的に楽しい";
*/
$array_question1[12][$ansk++] = "「<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事ぶりを日頃観察していないと分からないこと」について指摘する";
$array_question1[12][$ansk++] = "「<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さん自身も悪いところだと思うこと」について指摘する";
$array_question1[12][$ansk++] = "「<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの人格に関わること」について指摘する";
$array_question1[12][$ansk++] = "ネガティブな感情をともなった言い方をする";
$array_question1[12][$ansk++] = "良いところも同時に指摘する";
$array_question1[12][$ansk++] = "悪いところの解決法もアドバイスする";
$array_question1[12][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの立場に立って考える";
$array_question1[12][$ansk++] = "「あなた自身にも、何か悪いところがあるかもしれない」と考える";
$array_question1[12][$ansk++] = "個々の問題を責めるのではなく、問題を解決し今後に活かすように考える";
$array_question1[12][$ansk++] = "あなたの指摘によって、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは自分の行動を変えようと思ってくれる";



$array_ans1[13][1] = "まったくあてはまらない";
$array_ans1[13][2] = "あまりあてはまらない";
$array_ans1[13][3] = "どちらともいえない";
$array_ans1[13][4] = "ある程度あてはまる";
$array_ans1[13][5] = "とてもあてはまる";

$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、今の仕事はやりがいのある仕事であると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事で<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの能力や可能性を伸ばすことができると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、今の仕事は<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに向いていると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事の経験を通じて、より高度な仕事ができるようになると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事において<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さん自身が「我ながらよくやったなあ」と思う事がある";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事において、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さん自身がさらに高いレベルに達したと感じることができている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの今の仕事は達成感を感じることができると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事を通じて<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さん自身が成長したという感じを持てている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事に誇りを持っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、あなたが<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事ぶりに満足していると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事に自信を持てている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、何ごとにつけ、自分はちゃんとできているか気にしている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、批判された方が、褒められるよりも、自分のなおすところを知ることができるので望ましいと思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分は周りの人と同じくらい有能であると、いつも証明しようとしている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、人生で失望することがあっても、それは人として成長するための機会だと思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、失敗は自分の弱点を知る機会としてとらえている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、挫折をしても、いずれはそこから学び、いい経験になると思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分に対する批判は、自分の役に立つことがあるので、価値のあることだと思っている";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、困難な状況では、その経験から学び、成長することが大事だという心構えでいる";
$array_question1[13][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分のよさを自ら確認し、他者に認めてもらおうとしている";



$array_ans1[14][1] = "まったくしない";
$array_ans1[14][2] = "ほとんどしない";
$array_ans1[14][3] = "ときどきする";
$array_ans1[14][4] = "よくする";
$array_ans1[14][5] = "いつもする";

$array_question1[14][$ansk++] = "仕事で必要なスキルについて、自分の<b>良いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "仕事で必要なスキルについて、自分の<b>悪いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "周りの人と協力・協働するスキルについて、自分の<b>良いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "周りの人と協力・協働するスキルについて、自分の<b>悪いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "仕事に対する態度について、自分の<b>良いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "仕事に対する態度について、自分の<b>悪いところ</b>を指摘するよう求めること";
$array_question1[14][$ansk++] = "自分に割り当てられた仕事をしている最中、その仕事ぶりに対するフィードバックを求めること";
$array_question1[14][$ansk++] = "自分に割り当てられた仕事を終えた後に、その仕事ぶりに対するフィードバックを求めること";
$array_question1[14][$ansk++] = "自分の仕事に対する意見を求めること";
$array_question1[14][$ansk++] = "自分の仕事ぶりに対する批評を求めること";
$array_question1[14][$ansk++] = "自分に課せられている要求事項について、あなたと話し合うこと";
$array_question1[14][$ansk++] = "割り当てられた職務についてあなたと話し合うこと";
$array_question1[14][$ansk++] = "あなたとの時間や接点を、多く持とうとすること";
$array_question1[14][$ansk++] = "自分の仕事で変更したい点について、あなたと話し合うこと";
$array_question1[14][$ansk++] = "あなたが自分に期待していることについて、あなたと話し合うこと";



$array_ans1[15][1] = "まったくあてはまらない";
$array_ans1[15][2] = "あまりあてはまらない";
$array_ans1[15][3] = "どちらともいえない";
$array_ans1[15][4] = "ある程度あてはまる";
$array_ans1[15][5] = "とてもあてはまる";

$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの職務の目標を達成している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、求められているパフォーマンスの基準を満たしている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、すべての業務で、専門知識・技術を発揮している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの職務として要求されていることをすべて達成している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、通常割り当てられる以上の責任を果たせている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんはより高いレベルの役割にふさわしいだろう";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、職務のすべての領域で仕事ができる人間であり、課題をたくみにこなしている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、期待されたとおりに課題を実行し、全般的に仕事をうまくやっている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの職務の目標を達成し、かつ、締め切りに間に合わせるために、計画・調整している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分の所属部署が会社の目標にどのように貢献しているかを理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、所属部署の目標を理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、所属部署と他の部署との関係を理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、各メンバーの成果が、所属部署としての成果にどう貢献しているかを理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、所属部署にあなたが何を期待しているかを理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、所属部署のあなたのマネジメントスタイル（現場型、従業員参加型など）を理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分の仕事の責任や課題はよくわかっている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分の職務を果たすためにどう課題に取り組めばいいかを理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分の課題や責任の優先順位を理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、仕事の道具（ソフトウェアやプログラム、機械など）の使い方を理解している";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、職務を行うために必要なリソース（備品、消耗品、設備など）の利用方法をよくわかっている";
$array_question1[15][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは、自分の顧客（社内社外を問わず職務を提供する人や組織）の要求に応えるためには、どうすればいいかをよくわかっている";



$array_ans1[16][1] = "まったくあてはまらない";
$array_ans1[16][2] = "あまりあてはまらない";
$array_ans1[16][3] = "どちらともいえない";
$array_ans1[16][4] = "ある程度あてはまる";
$array_ans1[16][5] = "とてもあてはまる";

$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】仕事の結果に対する個人的な責任を問われる";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】仕事上の失敗やミスが重大な結果をもたらすことが多い";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】主たる職務が自動化・手順化されている";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】高いレベルの正確さが求められる";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】自律的に決定を行って仕事を進める";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】社内で競争することが求められる";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】非常にたくさんの仕事をしなければならない";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】時間内に仕事が処理しきれない";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】一生懸命働かなければならない";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】かなり注意をし、集中する必要がある";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】高度の知識や技術が必要なむずかしい仕事だ";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】勤務時間中はいつも仕事のことを考えていなければならない";
$array_question1[16][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの仕事は】仕事の進め方が決まっておらず、人によってまちまちである";



$array_ans1[17][1] = "まったく価値がない";
$array_ans1[17][2] = "あまり価値がない";
$array_ans1[17][3] = "どちらともいえない";
$array_ans1[17][4] = "ある程度価値がある";
$array_ans1[17][5] = "とても価値がある";

$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】同僚達といい人間関係を保つこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】より高いレベルの職に進むための機会を得ること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】雇用保障があること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんと<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの家族にとって望ましい地域に住むこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】日常的に、新しくて馴染みの薄い業務に取り組むような、変化のある仕事の仕方をすること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】直属の上司と友好的な関係を持つこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】高額を稼ぐ機会があること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】個人的な達成感を得られるような、困難だがやりがいのある仕事に取り組むこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】仕事の内容をすべて把握し、意外性を感じないこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】自分の、もしくは家族と過ごすための十分な時間があること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】互いにうまく協力できる人と一緒に働くこと";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】真実、正しい答え、そして唯一の回答を見つけること";
$array_question1[17][$ansk++] = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】業務の厳密な時間制限を守ること";
$array_question1[17][$ansk++]  = "【<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって】仕事を通じて社会貢献をすること";



$array_ans1[18][1] = "まったくあてはまらない";
$array_ans1[18][2] = "あまりあてはまらない";
$array_ans1[18][3] = "どちらともいえない";
$array_ans1[18][4] = "ある程度あてはまる";
$array_ans1[18][5] = "とてもあてはまる";

$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんの幸福を気にかけている";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんの幸福を気にかけている";
$array_question1[18][$ansk++] = "仕事についての知識が豊富である";
$array_question1[18][$ansk++] = "行動や行為は一貫しているとはいえない";
$array_question1[18][$ansk++] = "そうとわかって<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを傷つけることはしない";
$array_question1[18][$ansk++] = "そうとわかって<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを傷つけることはしない";
$array_question1[18][$ansk++] = "強い正義感を持っている";
$array_question1[18][$ansk++] = "仕事上のスキルの高さには確信が持てる";
$array_question1[18][$ansk++] = "約束を守るかを疑われる必要はない";
$array_question1[18][$ansk++] = "仕事をする能力に優れている";
$array_question1[18][$ansk++] = "人に対応する際に公正であろうとしている";
$array_question1[18][$ansk++] = "成果を上げるために必要な能力を持っている";
$array_question1[18][$ansk++] = "無理をしても<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを助ける";
$array_question1[18][$ansk++] = "無理をしても<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを助ける";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとって重要なことを気にかけている";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとって重要なことを気にかけている";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに信頼されている";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに信頼されている";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんとの関係に満足している";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんとの関係に満足している";
$array_question1[18][$ansk++] = "自分のマネジメントスタイル（現場型、従業員参加型など）に満足している";
$array_question1[18][$ansk++] = "自分には<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成する責任があると思っている";
$array_question1[18][$ansk++] = "自分には<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成する責任があると思っている";
$array_question1[18][$ansk++] = "自分は義務感によって<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成している";
$array_question1[18][$ansk++] = "自分は義務感によって<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成している";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを育成することが個人的に楽しい";
$array_question1[18][$ansk++] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを育成することが個人的に楽しい";

$array_ans1[19][1] = "まったく価値がない";
$array_ans1[19][2] = "あまり価値がない";
$array_ans1[19][3] = "どちらともいえない";
$array_ans1[19][4] = "ある程度価値がある";
$array_ans1[19][5] = "とても価値がある";

$array_question1[19][$ansk++] = "【あなたにとって】同僚達といい人間関係を保つこと";
$array_question1[19][$ansk++] = "【あなたにとって】より高いレベルの職に進むための機会を得ること";
$array_question1[19][$ansk++] = "【あなたにとって】雇用保障があること";
$array_question1[19][$ansk++] = "【あなたにとって】あなたとあなたの家族にとって望ましい地域に住むこと";
$array_question1[19][$ansk++] = "【あなたにとって】日常的に、新しくて馴染みの薄い業務に取り組むような、変化のある仕事の仕方をすること";
$array_question1[19][$ansk++] = "【あなたにとって】直属の上司と友好的な関係を持つこと";
$array_question1[19][$ansk++] = "【あなたにとって】高額を稼ぐ機会があること";
$array_question1[19][$ansk++] = "【あなたにとって】個人的な達成感を得られるような、困難だがやりがいのある仕事に取り組むこと";
$array_question1[19][$ansk++] = "【あなたにとって】仕事の内容をすべて把握し、意外性を感じないこと";
$array_question1[19][$ansk++] = "【あなたにとって】自分の、もしくは家族と過ごすための十分な時間があること";
$array_question1[19][$ansk++] = "【あなたにとって】互いにうまく協力できる人と一緒に働くこと";
$array_question1[19][$ansk++] = "【あなたにとって】真実、正しい答え、そして唯一の回答を見つけること";
$array_question1[19][$ansk++] = "【あなたにとって】業務の厳密な時間制限を守ること";
$array_question1[19][$ansk++] = "【あなたにとって】仕事を通じて社会貢献をすること";

?>