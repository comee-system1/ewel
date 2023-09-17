<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_EAB2.php");

$obj = new BAmethod();
$ea2  = new EAB2method();
$array_exam[1] = array(
			"key"=>1
			,"title"=>"セクションＡ"
			,"question"=>"上の写真の表情に下記a～gの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />各感情について、1～5の中で最もあてはまると思う番号を1つ選んで答えてください。
"
			,"ans"=>array(
						1=>"ａ．幸せ",
						2=>"ｂ．悲しみ",
						3=>"ｃ．恐れ",
						4=>"ｄ．怒り",
						5=>"ｅ．嫌悪",
						6=>"ｆ．驚き",
						7=>"ｇ．軽蔑"
				),
			"img"=>D_URL."/images/rs2/1.jpg"
	);
$array_exam[2] = array(
			"key"=>2
			,"title"=>"セクションＡ"
			,"question"=>"上の写真の表情に下記のa～gの感情が、<u>それぞれ</u>どの程度表れていると思いますか 。<br />各感情について、1～5の中で最もあてはまると思う番号を1つ選んで答えてください。
"
			,"ans"=>array(
						8=>"ａ．幸せ",
						9=>"ｂ．悲しみ",
						10=>"ｃ．恐れ",
						11=>"ｄ．怒り",
						12=>"ｅ．嫌悪",
						13=>"ｆ．驚き",
						14=>"ｇ．軽蔑"
				),
			"img"=>D_URL."/images/rs2/2.jpg"
	);

$array_exam[3] = array(
			"key"=>3
			,"title"=>"セクションＡ"
			,"question"=>"
				上の写真の人物が「変化前の表情」から「変化後の表情に変化しました。<br />
				「変化後の表情」に下記のa～gの各感情が、それぞれどの程度表れていると思いますか。<br />
				各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						15=>"ａ．幸せ",
						16=>"ｂ．悲しみ",
						17=>"ｃ．恐れ",
						18=>"ｄ．怒り",
						19=>"ｅ．嫌悪",
						20=>"ｆ．驚き",
						21=>"ｇ．軽蔑"
				),
			"img"=>D_URL."/images/rs2/3.jpg"
			
	);


$array_exam[4][0] = array(
			"key"=>1
			,"title"=>"セクションB"
			,"question"=>"あなたは、友人達と一緒に旅行に行く計画を立てています。しかし、少し治安の悪い地域<br />に行こうという案が出たため、多少の不安を感じています。あなたが、不安であることを友<br />人達に伝えるために、下の3つの気分はどの程度役に立つでしょうか。a～cの気分（感情）<br /><u>それぞれ</u>について答えてください。"
			,"ans"=>array(
						22=>"ａ．興奮",
						23=>"ｂ．驚き",
						24=>"ｃ．怒り",
			),
	);

$array_exam[4][1] = array(
			"key"=>2
			,"title"=>"セクションB"
			,"question"=>"親友の結婚式の2次会を盛り上げるための催しを企画するときに、下の3つの気分はどの<br />程度役に立つでしょうか。a～cの気分（感情）それぞれについて答えてください。
"
			,"ans"=>array(
						25=>"ａ．喜び",
						26=>"ｂ．退屈",
						27=>"ｃ．後悔",
			),
	);

$array_exam[4][2] = array(
			"key"=>3
			,"title"=>"セクションB"
			,"question"=>"高校生であるAさんが、どこに進学しようか考えています。Aさんが、自分の望む進学先<br />を見つけるために、下の3つの気分はどの程度役に立つでしょうか。<br />a～cの気分（感情）それぞれについて答えてください。"
			,"ans"=>array(
						28=>"ａ．悲しみ",
						29=>"ｂ．驚き",
						30=>"ｃ．憎しみ",
			),
	);
$array_exam[4][3] = array(
			"key"=>4
			,"title"=>"セクションB"
			,"question"=>" とても複雑なプラモデルを失敗せずに作るために、下の3つの気分はどの程度役に立つ<br />でしょうか。a～cの気分（感情）それぞれについて答えてください。"
			,"ans"=>array(
						31=>"ａ．不安",
						32=>"ｂ．悲しみ",
						33=>"ｃ．落ち着いた気持ち",
			),
	);


$array_exam[5][0] = array(
			"key"=>5
			,"title"=>"セクションB"
			,"question"=>"Bさんは、アルバイト先で大失敗をしてしまいました。再び失敗を繰り返さないように、なぜ<br />失敗したのかについて考え、改善点を見つけ出すために、下の3つの気分はどの程度役<br />に立つでしょうか。<br />a～cの気分（感情）<u>それぞれ</u>について答えてください。"
			,"ans"=>array(
						34=>"ａ．楽しさ",
						35=>"ｂ．恐れ",
						36=>"ｃ．みじめさ",
			),
	);

$array_exam[5][1] = array(
			"key"=>6
			,"title"=>"セクションB"
			,"question"=>"人を奮い立たせるような絵を上手く描くために、下の3つの気分はどの程度役に立つでしょう<br />か。a～cの気分（感情）<u>それぞれ</u>について答えてください。"
			,"ans"=>array(
						37=>"ａ．感傷",
						38=>"ｂ．いらだち",
						39=>"ｃ．興奮",
			),
	);

$array_exam[5][2] = array(
			"key"=>7
			,"title"=>"セクションB"
			,"question"=>"あなたは熱さを感じています。それはまるで閉めきったコンテナの中で熱さが増しているよ<br />うな感じで、圧迫感さえ感じます。<br />選択肢の中であなたの感情に最も当てはまるものを選んでください。"
			,"flg"=>1
			,"ans"=>array(
						40=>array(
							 1=>"怒り"
							,2=>"嫌悪"
							,3=>"驚き"
							,4=>"恐れ"
							,5=>"悲しみ"
						)
			),
	);
$array_exam[5][3] = array(
			"key"=>8
			,"title"=>"セクションB"
			,"question"=>"あなたはあるものに対し、強い不快感を抱いています。自分にとって胸の悪くなるようなもの<br />なので、それを遠ざけたいと思っています。<br />選択肢の中であなたの感情に最も当てはまるものを選んでください。"
			,"flg"=>1
			,"ans"=>array(
						41=>array(
							 1=>"怒り"
							,2=>"嫌悪"
							,3=>"驚き"
							,4=>"恐れ"
							,5=>"悲しみ"
						)
			),
	);


$array_exam[6][1] = array(
			"key"=>1
			,"title"=>"セクションC"
			,"question"=>"他の感情と同じグループに属さない感情を選択してください。 "
			,"ans"=>array(
						42=>array(
							 1=>"①　怒り"
							,2=>"②　不満"
							,3=>"③　激怒"
							,4=>"④　みじめな"
							,5=>"⑤　すべて同じグループに属する"
						)
			),
	);
$array_exam[6][2] = array(
			"key"=>2
			,"title"=>"セクションC"
			,"question"=>"他の感情と同じグループに属さない感情を選択してください。 "
			,"ans"=>array(
						43=>array(
							 1=>"①　嫌悪"
							,2=>"②　拒絶"
							,3=>"③　ねたみ"
							,4=>"④　反感"
							,5=>"⑤　すべて同じグループに属する"
						)
			),
	);
$array_exam[6][3] = array(
			"key"=>3
			,"title"=>"セクションC"
			,"question"=>"他の感情と同じグループに属さない感情を選択してください。 "
			,"ans"=>array(
						44=>array(
							 1=>"①　悲しみ"
							,2=>"②　憂鬱（ゆううつ）"
							,3=>"③　悩み"
							,4=>"④　恐れ"
							,5=>"⑤　すべて同じグループに属する"
						)
			),
	);

$array_exam[6][4] = array(
			"key"=>4
			,"title"=>"セクションC"
			,"question"=>"Aさんは、友人が不正をするのを見て、社会的に許せないことだと感じました。<br />友人に注意すると、「みんなやってるよ」と、当然だという表情で言われました。<br />これら一連の出来事によってAさんは、<span class='bord'>&nbsp;</span>。<br />そこで、友人の不正を止めさせるための方法を考え、実行することにしました。"
			,"ans"=>array(
						45=>array(
							 1=>"①　激怒しました"
							,2=>"②　怒りました"
							,3=>"③　嫌悪感を感じました"
							,4=>"④　憂鬱になりました"
							,5=>"⑤　悲しみを感じました"
						)
			),
	);

	$array_exam[6][5] = array(
		"key"=>5
		,"question"=>"都心で地震が起こり、電車が止まっています。Bさんは、「都心の学校に通っている<br />子どもが、帰宅できなくなるのではないか」、と心配していましたが、電車の運行が<br />再開されたことをニュースで知りました。その時、Bさんは、<span class='bord'>&nbsp;</span>を感じました。"
		,"title"=>"セクションC"
		,"ans"=>array(
					46=>array(
						 1=>"①　喜び"
						,2=>"②　驚き"
						,3=>"③　安堵感"
						,4=>"④　不安"
						,5=>"⑤　イライラ感"
					)
		),
	);

$array_exam[7][1] = array(
			"key"=>6
			,"question"=>"Cさんは、現在、家庭円満で、仕事にも満足しています。自分の給与についても特に不満<br />もなく、同僚と比較しても良い方だと思っています。今日、上司との面談で、「Cさん、昨年の<br />実績と周囲の評価を総合し、来年度から課長に昇格です。」と伝えられました。<br />そのとき、Cさんは、<span class='bord'>&nbsp;</span>を感じました。"
			,"title"=>"セクションC"
			,"ans"=>array(
						47=>array(
							 1=>"①　驚きとショック"
							,2=>"②　平和と和らいだ気持ち"
							,3=>"③　満足感といい気分"
							,4=>"④　謙虚な気持ちと罪の意識"
							,5=>"⑤　誇りと優越感"
						)
			),
	);

$array_exam[7][2] = array(
			"key"=>7
			,"question"=>"学校の掃除の時間にさぼっていた学友が、先生に「自分もみんなと一緒にきちんと掃除<br />しました」と言ったことに、Dさんはいらだちを感じました。学友がもう一度同じことをしたと<br />きに、Dさんは、<span class='bord'>&nbsp;</span>を感じました。"
			,"title"=>"セクションC"
			,"ans"=>array(
						48=>array(
							 1=>"①　怒り"
							,2=>"②　憎しみ"
							,3=>"③　強い憤り"
							,4=>"④　非常に強い驚き"
							,5=>"⑤　憂鬱さ"
						)
			),
	);

$array_exam[7][3] = array(
			"key"=>8
			,"question"=>"Eさんは、人前で大失敗をしてしまいました。そのため、恥ずかしさを感じました。<br />その後、Eさんは、<span class='bord'>&nbsp;</span>。"
			,"title"=>"セクションC"
			,"ans"=>array(
						49=>array(
							 1=>"①　やりきれなくなりました"
							,2=>"②　意気消沈しました"
							,3=>"③　腹が立ってきました"
							,4=>"④　感傷的になりました"
							,5=>"⑤　不安になりました"
						)
			),
	);
$array_exam[7][4] = array(
			"key"=>9
			,"question"=>"Fさんは、自分の恵まれた人生を振り返り、幸せを感じています。さらに、これまで人に<br />喜んでもらったことなどを思い出すと、Fさんは、<span class='bord'>&nbsp;</span>を感じました。"
			,"title"=>"セクションC"
			,"ans"=>array(
						50=>array(
							 1=>"①　驚き"
							,2=>"②　安堵感"
							,3=>"③　ゆううつさ"
							,4=>"④　満足感"
							,5=>"⑤　とても大きな驚き"
						)
			),
	);

$array_exam[8][1] = array(
			"key"=>10
			,"question"=>"Gさんは、経営していた企業が倒産し、これまでの人生で最大の喪失感を感じました。<br />しかし、時間が経過するうちに少し喪失のショックから立ち直り、「この状況から何かし<br />ら得るものがあるはずだ。」と気づき、Gさんは、<span class='bord'>&nbsp;</span>。"
			,"title"=>"セクションC"
			,"ans"=>array(
						51=>array(
							 1=>"①　とても驚きました"
							,2=>"②　混乱しました"
							,3=>"③　不安を感じました"
							,4=>"④　希望をもちました"
							,5=>"⑤　物思いに沈みました"
						)
			),
	);
$array_exam[8][2] = array(
			"key"=>11
			,"question"=>"Hさんは、酔っていた友人に普段なら決して口にしないような言葉でからかわれ、<br />不快に感じました。そこで、次の日に「いくら酔っていても、ひどすぎる」と素直に<br />気持ちを伝えたところ、友人は「申し訳ない」と謝りました。しかし、その夜、また<br />同じことを友人がしたとき、Hさんは、<span class='bord'>&nbsp;</span>。"
			,"title"=>"セクションC"
			,"ans"=>array(
						52=>array(
							 1=>"①　怒りました"
							,2=>"②　心配しました"
							,3=>"③　非常に苛立ちました"
							,4=>"④　恐れました"
							,5=>"⑤　激怒しました"
						)
			),
	);



	$array_exam[8][3] = array(
		"key"=>12
		,"question"=>"Jさんは、高校で同じ部活に所属する同性の先輩のことが誰よりも好きでした。<br />その先輩は、成績優秀なうえ、運動神経も抜群です。さらに、思いやりのある性格<br />なので誰からも好かれており、欠点がまるでないように感じられました。<br />Jさんは、<span class='bord'>&nbsp;</span>。"
		,"title"=>"セクションC"
		,"ans"=>array(
					53=>array(
						 1=>"①　先輩を尊敬していました"
						,2=>"②　先輩をうらやんでいました"
						,3=>"③　先輩に夢中でした"
						,4=>"④　先輩に嫉妬していました"
						,5=>"⑤　先輩に憤りを感じました"
					)
		),
);

$array_exam[9][1] = array(
			"key"=>13
			,"question"=>"Lさんは、「自分は、所属しているテニスサークルの仲間に受け入れられている」と感じて、<br />安心していました。その後、<span class='bord'>&nbsp;</span>ために、Lさんは憂鬱になりました。"
			,"title"=>"セクションC"
			,"ans"=>array(
						54=>array(
							 1=>"①　サークルの友人の1人がけがをした"
							,2=>"②　サークルの人たちが自分の悪口を言っているのを偶然耳にした"
							,3=>"③　テニスの団体戦で試合に負けた"
							,4=>"④　練習場の使用が困難になり、別の場所を探さなければならなくなった"
							,5=>"⑤　サークル内の恋人が、別の異性と仲良くしていた"
						)
			),
	);

$array_exam[9][2] = array(
			"key"=>14
			,"question"=>"Mさんは、親友からのメールを楽しみに待っていました。そして、メールが届きました。<br />しかし、<span class='bord'>&nbsp;</span>ために、Mさんは悲しくなりました。"
			,"title"=>"セクションC"
			,"ans"=>array(
						55=>array(
							 1=>"①　メールに聞きたかったことが書かれていなかった"
							,2=>"②　メールに自分の大好きな友人の悪口が書いてあった"
							,3=>"③　メールの字が小さくて読みにくかった"
							,4=>"④　メールの文末に「お返事下さいね」と書かれていた"
							,5=>"⑤　メールが長文で読むのに時間がかかった"
						)
			),
	);

$array_exam[9][3] = array(
			"key"=>15
			,"title"=>"セクションC"
			,"question"=>"ある男性は、休日、自宅でくつろいでいました。その時、<span class='bord'>&nbsp;</span>ために、<br />男性は感心しました。"
			,"ans"=>array(
						56=>array(
							 1=>"①　応募していた懸賞が当たった"
							,2=>"②　電車のホームから線路に人が落ちて、周囲の人が協力して無事<br />救出したと言う話を聞いた"
							,3=>"③　あるアイデアが浮かび、そのおかげで困っていたことが解決した"
							,4=>"④　以前から欲しかった絵画を落札して手に入れたことがわかった"
							,5=>"⑤　心配していたセキが、かぜのせいだとわかった"
						)
			),
	);


$array_exam[9][4] = array(
			"key"=>16
			,"title"=>"セクションC"
			,"question"=>"ある女性は、これから起こることに期待していました。その後、<span class='bord'>&nbsp;</span>ために、<br />女性は愛を感じました。"
			,"ans"=>array(
						57=>array(
							 1=>"①　文通相手とはじめて会うことになり、どこに出かけようか、と考えた"
							,2=>"②　学校のクラス替えで、仲の良い友達と同じクラスになった"
							,3=>"③　誕生会に友達を招待したら、ほとんど全員が来た"
							,4=>"④　誕生日に、両親からプレゼントをもらった"
							,5=>"⑤　あまり気乗りのしないデートに出掛けたら、相手が理想的な異性<br />であることがわかった"
						)
			),
	);

$array_exam[10][1] = array(
			"key"=>17
			,"title"=>"セクションC"
			,"question"=>"気持ちが平常の状態から、恐れへの気持ちの変遷を表しているのは、下記の①～⑤<br />の中でどれでしょうか。"
			,"ans"=>array(
						58=>array(
							 1=>"①　平常→疑い→注意深い→不安→神経質な→恐れ"
							,2=>"②　平常→神経質な→不安→注意深い→疑い→恐れ"
							,3=>"③　平常→不安→疑い→神経質な→注意深い→恐れ"
							,4=>"④　平常→注意深い→神経質な→疑い→不安→恐れ"
							,5=>"⑤　平常→注意深い→疑い→神経質な→不安→恐れ"
						)
			),
	);

$array_exam[10][2] = array(
			"key"=>18
			,"title"=>"セクションC"
			,"question"=>"気持ちが平常の状態から、愛への気持ちの変遷を表しているのは、下記の①～⑤<br />の中でどれでしょうか。"
			,"ans"=>array(
						59=>array(
							 1=>"①　平常→好意→親しみ→受容→信頼→愛"
							,2=>"②　平常→親しみ→好意→信頼→受容→愛"
							,3=>"③　平常→親しみ→信頼→好意→受容→愛"
							,4=>"④　平常→親しみ→受容→好意→信頼→愛"
							,5=>"⑤　平常→好意→信頼→受容→親しみ→愛"
						)
			),
	);

$array_exam[11][1] = array(
			"key"=>1
			,"title"=>"セクションD"
			,"question"=>"Aさんは、近頃、急激に仕事量が増えたため、毎日締め切りに間に合うかどうか不安で<br />心身共に疲れきっています。最近は、夜も眠れなくなり、とても悩んでいます。Aさんが<br />少しでも悩みや不安を軽くするために、次のそれぞれの行動1～2はどのくらい役に立つで<br />しょうか。"
			,"ans"=>array(
						60=>"仕事の内容や量と期日を整理することにした。"
						,61=>"気持ちを落ち着かせるためのさまざまな手法を学んだ。"
			),
	);

$array_exam[11][2] = array(
			"key"=>2
			,"title"=>"セクションD"
			,"question"=>"Bさんは、会議で部長と課長に対して発表をしました。課長には事前に発表内容を報告<br />し、「上手くまとまっているね。問題ないよ」というコメントをもらっていたため、自信を持っ<br />て発表に臨みました。しかし、部長からは、「内容が甘い。もっと考えてこい」と言われま<br />した。さらに、課長も部長と同様な発言をしたため、Bさんは、課長に対して、怒りを感じ<br />ました。Bさんがこの怒りを静めるために、次のそれぞれの行動1～2はどのくらい役に<br />立つでしょうか。"
			,"ans"=>array(
						62=>"どうして、課長がそのような発言したのかを考えることにした。"
						,63=>"どうして、自分はこんなに怒りを感じるのか考えることにした。"
			),
	);

$array_exam[12][1] = array(
			"key"=>3
			,"title"=>"セクションD"
			,"question"=>"Cさんは、営業職です。上司から「営業目標を設定し、年度末に達成状況を報告するよう<br />に」という指示がありました。Cさんは、高い目標を設定しましたが、同僚のDさんは楽をす<br />るために、目標を低く設定しました。結果として、CさんもDさんも目標を達成したのですが、<br />会社では年度末の目標達成率だけで評価を行うため、Cさんの評価はDさんより低くなっ<br />てしまいました。Cさんは、正当に評価されなかったことに対して、非常に強い憤りを感じま<br />した。Cさんがこの怒りを静めるために、次の<u>それぞれ</u>の行動1～2はどのくらい役に立つ<br />でしょうか。"
			,"ans"=>array(
						64=>"自分が今回の業務を通じて、「どれくらい成長ができたのか」、「どのような能力を身に付けたのか」を書き出してみることにした。"
						,65=>"Dさんの仕事ぶりに対する自分の不満を周囲の人に話すことにした。更に、自分と同意見の人を見つけることにした。"
			),
	);

$array_exam[12][2] = array(
			"key"=>4
			,"title"=>"セクションD"
			,"question"=>"Eさんは、学校の試験で大失敗したり、恋人に振られたりで、全てにおいてうまくいかず、<br />気持ちが落ち込む日々が続いています。Eさんが落ち込んだ気分を少しでもよくするた<br />めに、次の<u>それぞれ</u>の行動1～3はどのくらい役に立つでしょうか。 "
			,"ans"=>array(
						66=>"しばらく会っていない友人に連絡をとり、今度会う約束をした "
						,67=>"規則正しい生活を過ごし、健康に気を遣うようにした "
						,68=>"ひとりで過ごす時間を多くとるようにした"
			),
	);

$array_exam[13] = array(
			"key"=>5
			,"title"=>"セクションD"
			,"question"=>"Fさんが不安を取り除くために、次のそれぞれの対応①～④はどのくらい役に立つでしょうか。<br />（対応③、④は次頁）"
			,"mimg"=>D_URL."/images/rs2/13.jpg"
			,"ans"=>array(
						69=>D_URL."/images/rs2/13_1.jpg"
						,70=>D_URL."/images/rs2/13_2.jpg"
			),
	);

$array_exam[14] = array(
			"key"=>5
			,"title"=>"セクションD"
			,"question"=>"Fさんが不安を取り除くために、次のそれぞれの対応③～④はどのくらい役に立つでしょうか。"
			,"mimg"=>D_URL."/images/rs2/13.jpg"
			,"ans"=>array(
						71=>D_URL."/images/rs2/13_3.jpg"
						,72=>D_URL."/images/rs2/13_4.jpg"
			),
	);

$array_exam[15] = array(
			"key"=>1
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。
			"
			,"ans"=>array(
						73=>"A.やすらぎ",
						74=>"B.恐れ",
						75=>"C.生きる不安",
				),
			"img"=>D_URL."/images/rs2/15.jpg"
	);

$array_exam[16] = array(
			"key"=>2
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						76=>"A.寂しさ",
						77=>"B.いらだち",
						78=>"C.孤独感",
				),
			"img"=>D_URL."/images/rs2/16.jpg"
	);
$array_exam[17] = array(
			"key"=>3
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						79=>"A.あわれみ",
						80=>"B.うろたえ",
						81=>"C.失望",
				),
			"img"=>D_URL."/images/rs2/17.jpg"
	);
$array_exam[18] = array(
			"key"=>4
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						82=>"A.疎外感",
						83=>"B.安堵",
						84=>"C.落ち着きのなさ",
				),
			"img"=>D_URL."/images/rs2/18.jpg"
	);

$array_exam[19] = array(
			"key"=>5
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						85=>"A.苦しみ",
						86=>"B.あわれみ",
						87=>"C.不安",
				),
			"img"=>D_URL."/images/rs2/19.jpg"
	);

$array_exam[20] = array(
			"key"=>6
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						88=>"A.あっ気にとられる",
						89=>"B.みじめさ",
						90=>"C.やすらぎ",
				),
			"img"=>D_URL."/images/rs2/20.jpg"
	);

$array_exam[21] = array(
			"key"=>7
			,"title"=>"セクションE"
			,"question"=>"風景写真に下記のA～Cの各感情が、<u>それぞれ</u>どの程度表れていると思いますか。<br />
			各感情について、１～５の中で最もあてはまると思う番号を１つ選んで答えてください。"
			,"ans"=>array(
						91=>"A.孤独感",
						92=>"B.うろたえ",
						93=>"C.恐れ",
				),
			"img"=>D_URL."/images/rs2/21.jpg"
	);


$array_exam[22][1] = array(
			"key"=>1
			,"title"=>"セクションF"
			,"question"=>"卒業を控えた同性の親しい友人がいます。卒業前に、「一緒に旅行に行こう。」と誘われて<br />いたのですが、忙しくてすっかり忘れていたことに気づき、罪悪感を感じていると想像してく<br />ださい。その感じ（感覚）は、下の3つの感じ（感覚）にどれくらい似ているでしょうか。a～cの<br />感じ（感覚）それぞれについて答えてください。"
			,"ans"=>array(
						94=>"ａ．重い",
						95=>"ｂ．深い",
						96=>"ｃ．甘い",
			),
	);

$array_exam[22][2] = array(
			"key"=>2
			,"title"=>"セクションF"
			,"question"=>"滞っていた仕事がやっと完了して、安心するとともに満足感を感じていると想像してくださ<br />い。その感じ（感覚）は、下の3つの感じ（感覚）にどれくらい似ているでしょうか。a～cの感<br />じ（感覚）<u>それぞれ</u>について答えてください。 "
			,"ans"=>array(
						97=>"ａ．暖かい",
						98=>"ｂ．紫色の",
						99=>"ｃ．塩辛い",
			),
	);
$array_exam[22][3] = array(
			"key"=>3
			,"title"=>"セクションF"
			,"question"=>"暑くて、せかせかして、やる気が起きないと想像してください。その感じは、下の3つの感じ<br />（感覚）にどれくらい似ているでしょうか。a～cの感じ（感覚）<u>それぞれ</u>について答えてくださ<br />い。"
			,"ans"=>array(
						100=>"ａ．挑発されている",
						101=>"ｂ．孤独である",
						102=>"ｃ．驚いている",
			),
	);


$array_exam[23][1] = array(
			"key"=>4
			,"title"=>"セクションF"
			,"question"=>"地味で、小さくて、暗い緑色を感じていると想像してください。その感じは、下の3つの感じ<br />（感覚）にどれくらい似ているでしょうか。a～cの感じ（感覚）<u>それぞれ</u>について答えてくださ<br />い。"
			,"ans"=>array(
						103=>"ａ．興奮している",
						104=>"ｂ．ねたんでいる",
						105=>"ｃ．喜んでいる",
			),
	);
$array_exam[23][2] = array(
			"key"=>5
			,"title"=>"セクションF"
			,"question"=>"明るくて、暑くて、潮風の香りがする感じを想像してください。その感じは、下の3つの感じ<br />（感覚）にどれくらい似ているでしょうか。a～cの感じ（感覚）<u>それぞれ</u>について答えてくださ<br />い。"
			,"ans"=>array(
						106=>"ａ．無力感",
						107=>"ｂ．恐れを感じている",
						108=>"ｃ．期待感",
			),
	);
$array_exam[23][3] = array(
			"key"=>6
			,"flg"=>1
			,"title"=>"セクションF"
			,"question"=>"あなたは何もする気が起きません。いつも以上に疲れを感じ、食欲もありません。<br />選択肢の中であなたの気持ち（感情）に最も当てはまるものを選んでください。 "
			,"ans"=>array(
						109=>array(
							 1=>"怒り"
							,2=>"嫌悪"
							,3=>"驚き"
							,4=>"恐れ"
							,5=>"悲しみ"

							
						)
			),
	);


$array_exam[24][1] = array(
			"key"=>1
			,"title"=>"セクションG"
			,"question"=>"<span class='bord'>&nbsp;</span>が強まると恐怖、弱まると混乱になります。 "
			,"ans"=>array(
						110=>array(
							 1=>"①　喜び"
							,2=>"②　驚き"
							,3=>"③　嫌悪"
							,4=>"④　受容"
							,5=>"⑤　期待"
						)
			),
	);

$array_exam[24][2] = array(
			"key"=>2
			,"title"=>"セクションG"
			,"question"=>"受容と恐れの感情が結びつくと、<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						111=>array(
							 1=>"①　愛"
							,2=>"②　希望"
							,3=>"③　優越"
							,4=>"④　好奇心"
							,5=>"⑤　服従"
						)
			),
	);

$array_exam[24][3] = array(
			"key"=>3
			,"title"=>"セクションG"
			,"question"=>"悲しみと驚きが結びつくと、<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						112=>array(
							 1=>"①　期待"
							,2=>"②　憎悪"
							,3=>"③　楽観"
							,4=>"④　失望"
							,5=>"⑤　軽蔑"
						)
			),
	);

$array_exam[24][4] = array(
			"key"=>4
			,"title"=>"セクションG"
			,"question"=>"<span class='bord'>&nbsp;</span>が強まると驚愕、弱まると心配になります。"
			,"ans"=>array(
						113=>array(
							 1=>"①　恐れ"
							,2=>"②　怒り"
							,3=>"③　受容"
							,4=>"④　嫌悪"
							,5=>"⑤　憤慨"
						)
			),
	);

$array_exam[24][5] = array(
			"key"=>5
			,"title"=>"セクションG"
			,"question"=>"喜びと受容が結びつくと<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						114=>array(
							 1=>"①　尊重"
							,2=>"②　幸せ"
							,3=>"③　興奮"
							,4=>"④　崇拝"
							,5=>"⑤　愛"
						)
			),
	);

$array_exam[25][1] = array(
			"key"=>6
			,"title"=>"セクションG"
			,"question"=>"<span class='bord'>&nbsp;</span>が強まると憎悪、弱まるとうんざりになります。"
			,"ans"=>array(
						115=>array(
							 1=>"①　怒り"
							,2=>"②　混乱"
							,3=>"③　嫌悪"
							,4=>"④　後悔"
							,5=>"⑤　悲しみ"
						)
			),
	);

$array_exam[25][2] = array(
			"key"=>7
			,"title"=>"セクションG"
			,"question"=>"喜びと期待が結びつくと<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						116=>array(
							 1=>"①　畏敬"
							,2=>"②　楽観"
							,3=>"③　心配"
							,4=>"④　歓喜"
							,5=>"⑤　崇拝"
						)
			),
	);

$array_exam[25][3] = array(
			"key"=>8
			,"title"=>"セクションG"
			,"question"=>"恐れと驚きが結びつくと<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						117=>array(
							 1=>"①　嫌悪"
							,2=>"②　怒り"
							,3=>"③　攻撃"
							,4=>"④　恥辱"
							,5=>"⑤　畏敬"
						)
			),
	);

$array_exam[25][4] = array(
			"key"=>9
			,"title"=>"セクションG"
			,"question"=>"<span class='bord'>&nbsp;</span>が強まると悲嘆、弱まると物思いになります。"
			,"ans"=>array(
						118=>array(
							 1=>"①　期待"
							,2=>"②　驚き"
							,3=>"③　悲しみ"
							,4=>"④　受容"
							,5=>"⑤　警戒"
						)
			),
	);

$array_exam[25][5] = array(
			"key"=>10
			,"title"=>"セクションG"
			,"question"=>"<span class='bord'>&nbsp;</span>が強まると激怒、弱まるといらだちになる。"
			,"ans"=>array(
						119=>array(
							 1=>"①　後悔"
							,2=>"②　警戒"
							,3=>"③　攻撃"
							,4=>"④　怒り"
							,5=>"⑤　畏敬"
						)
			),
	);

$array_exam[26][1] = array(
			"key"=>11
			,"title"=>"セクションG"
			,"question"=>"「意気阻喪（いきそそう）」の意味として最も適切なものはどれかでしょうか。"
			,"ans"=>array(
						120=>array(
							 1=>"①　思いを晴らすことができない"
							,2=>"②　元気をなくし、沈み込む"
							,3=>"③　何をしてもうまくいかず、むなしい"
							,4=>"④　気が晴れない"
							,5=>"⑤　何もやる気が起こらない"
						)
			),
	);
$array_exam[26][2] = array(
			"key"=>12
			,"title"=>"セクションG"
			,"question"=>"「不遜（ふそん）」の意味として最も適切なものはどれでしょうか。"
			,"ans"=>array(
						121=>array(
							 1=>"①　人をねたむ気持ち"
							,2=>"②　びくびくした気持ち"
							,3=>"③　思いあがっている気持ち"
							,4=>"④　人を軽蔑する気持ち"
							,5=>"⑤　人を信じない気持ち"
						)
			),
	);
$array_exam[26][3] = array(
			"key"=>13
			,"title"=>"セクションG"
			,"question"=>"心配と最も密接に結びつく感情は<span class='bord'>&nbsp;</span>です。"
			,"ans"=>array(
						122=>array(
							 1=>"①　愛、不安、驚き"
							,2=>"②　驚き、誇り、怒り"
							,3=>"③　受容、不安、期待"
							,4=>"④　恐れ、喜び、驚き"
							,5=>"⑤　不安、配慮、期待"
						)
			),
	);

$array_exam[26][4] = array(
			"key"=>14
			,"title"=>"セクションG"
			,"question"=>"悲しみ、罪悪感、そして後悔が結びつくと<span class='bord'>&nbsp;</span>になります。"
			,"ans"=>array(
						123=>array(
							 1=>"①　深い悲しみ"
							,2=>"②　いらだたしさ"
							,3=>"③　ゆううつな気分"
							,4=>"④　深い後悔"
							,5=>"⑤　みじめさ"
						)
			),
	);


$array_exam[27][1] = array(
			"key"=>1
			,"question"=>"Aさんは、会社の仲の良い同僚であるBさんから、ある日突然「実は転職するんだ」と伝<br />えられて、とても驚きました。最近、よそよそしさを感じていましたが、転職する予定があ<br />るとは全く知らなかったからです。次のそれぞれの対応1～2は、今後、AさんがBさん<br />との関係を保つのにどのくらい役に立つでしょうか。"
			,"ans"=>array(
						124=>"「Bさん、おめでとう。新しい職場でも頑張れよ」と伝えた。"
						,125=>"今まで内緒にされていたことに腹を立てた。そのため、Bさんを無視することで不満の気持ちを表し、Bさんがどのような対応をするのか様子をみることにした。"
			),
	);

$array_exam[27][2] = array(
			"key"=>2
			,"question"=>"Cさんは、ある会社の課長です。ある日、部長から呼び出されました。そこで、「君の部下<br />のD君は、営業もせずに毎日さぼってぶらぶらしているそうじゃないか。そのような社員が<br />いると、部署全体のやる気が下がって困るよ」と言われました。Cさんが知っているD君は<br />、仕事に対して前向きに取り組んでいたため、あまりにも違っていると感じました。しかし、<br />部長が、「今後、D君の行動に改善が見られなければ、Cさんの降格も考える。」と強い<br />口調で言ったため、怒りを感じました。次のそれぞれの対応1～2は、Cさんが、部長、Cさ<br />ん、D君、3人の関係を改善するために、どのくらい役に立つでしょうか。"
			,"ans"=>array(
						126=>"「D君の行動が、自分の知っている行動とは違うのでショックを受けています。そのような行動を本当にD君が取っているのか調べさせてください。」と部長に伝えた。"
						,127=>"なぜ、このようなうわさが流れているのかをD君に確認した。"
			),
	);


$array_exam[28][1] = array(
			"key"=>3
			,"question"=>"Eさんは、現在の生活すべてに満足しています。やりがいのある職務に就き、職場の<br />人間関係も上手くいっていますし、家庭も円満です。この生活が、いつまでも続けば良<br />いと思っています。最近、友人や同僚、部下に、「自分の幸せな生活について自慢した<br />い」、という気持ちが生じていました。次の<u>それぞれ</u>の対応1～2は、今後、Eさんが現在<br />の良好な人間関係を保つために、どのくらい役に立つでしょうか。"
			,"ans"=>array(
						128=>"友人や同僚、部下の話を積極的に聞くようにした。"
						,129=>"自分の正直な気持ちを家族に伝え、感謝をした。"
			),
	);

$array_exam[28][2] = array(
			"key"=>4
			,"question"=>"Fさんは、最近親がリストラで失業したため、自分で学費を稼ぎながら大学に通ってい<br />ます。仕事と学業の両立は体力的にきつく、ついに体調を崩してしまい、ある教科の<br />課題レポートを期限までに提出できませんでした。すると、その科目の教授から「やる<br />気がない者に単位をやるつもりはない。もう講義にも来ないでくれ。」と冷たく言われ<br />ました。Fさんは、言いようのない怒りを感じました。次のそれぞれの対応1～3は、Fさ<br />んが、今後教授との関係を保つのにどのくらい役に立つでしょうか。"
			,"ans"=>array(
						130=>"教授と別れた後、友達や家族に怒りをぶつけた。"
						,131=>"自分は教授に嫌われていると感じ、履修はあきらめることにした。"
						,132=>"「わかりました。超特急でレポートを仕上げますので、先生見捨てないでくださいね。」と、ユーモアを交えて教授に伝えた。"
			),
	);


$array_exam[29][1] = array(
			"key"=>5
			,"question"=>"
Gさんは、課の会議で新しい企画を提案しました。その内容について、一部の指摘はあっ<br />
たものの、参加者から色々なアイデアが出て、和やかな雰囲気で会議が進んでいました。<br />
ところが、遅れてきた同僚のHさんが、開口一番「ぜんぜん駄目だよ。」と言ってきました。<br />
Hさんは、いつも何かと他人の企画に文句をつけることが多く、Gさんは怒りを感じました。<br />
次の<u>それぞれ</u>の対応1～3は、この後、Gさんが会議を建設的に進めるために、どの<br />くらい役に立つでしょうか。
"
			,"ans"=>array(
						133=>"Hさんの意見は、いつも否定的なものばかりなので、無視することにし、会議を終了することにした。"
						,134=>"「Hさんには、いつも的確な指摘をしてくれるので、助かるよ。どうすれば、君も認めるような企画になるかな。」と、場の空気を和ました上で、Hさんに代替案を求めた。"
						,135=>"「他に意見はないですか。」と周りの人に意見を聞き、議論を進めることにした。"
			),
	);

$array_exam[30][1] = array(
			"key"=>6
			,"question"=>"Kさんは、風邪を引いてしまいました。あまり待たないでいいように、会社の近くの病院を<br />事前に予約してから行きました。予約時間少し前に病院に着き、受付を済ませて待って<br />いると、予約時間を20分程過ぎてもなかなか呼ばれません。<br />この後、別の予定があるため、看護師に確認したところ、予約が重なっていたため、知ら<br />ないうちに診察の順番が遅くなっていたようです。突然の話にKさんは、怒りを感じました。<br />次のそれぞれの対応1～3は、Kさんがなるべく早く診察してもらうのに、どのくらい役に立<br />つでしょうか。"
			,"ans"=>array(
						136=>"「そんなことは、聞いていない。予約していたのだから早く診るべきだ。」と、看護師に怒鳴った。"
						,137=>"自分にはこの後予定があることを伝え、できるだけ早く診てもらうことができないか看護師に相談することにした。"
						,138=>"言ってもしょうがないと割り切って、黙って待つことにした。"
			),
	);

$array_exam[31] = array(
			"key"=>7
			,"question"=>"Lさんが部長との人間関係を維持するために、次のそれぞれの返答①～⑤がどのくらい役に立つでしょうか。<br />（返答④、⑤は次頁）"
			,"mimg"=>D_URL."/images/rs2/33.jpg"
			,"ans"=>array(
						139=>D_URL."/images/rs2/33_1.jpg"
						,140=>D_URL."/images/rs2/33_2.jpg"
						,141=>D_URL."/images/rs2/33_3.jpg"
			),
	);

$array_exam[32] = array(
			"key"=>7
			,"question"=>"Lさんが部長との人間関係を維持するために、次のそれぞれの返答④～⑤がどのくらい役に立つでしょうか。"
			,"mimg"=>D_URL."/images/rs2/34.jpg"
			,"ans"=>array(
						142=>D_URL."/images/rs2/34_1.jpg"
						,143=>D_URL."/images/rs2/34_2.jpg"
			),
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
$times = $ea2->getTime($where);


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
	$ea2->setEa($where);
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
	$err = 0;
	$clum = array();
	//エラーチェック
	switch($pager){

		case "33":
			for($i=142;$i<=143;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "32":
			for($i=139;$i<=141;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "31":
			for($i=136;$i<=138;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "30":
			for($i=133;$i<=135;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "29":
			for($i=128;$i<=132;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "28":
			for($i=124;$i<=127;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "27":
			for($i=120;$i<=123;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "26":
			for($i=115;$i<=119;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "25":
			for($i=110;$i<=114;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "24":
			for($i=103;$i<=109;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "23":
			for($i=94;$i<=102;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "22":
			for($i=91;$i<=93;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "21":
			for($i=88;$i<=90;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "20":
			for($i=85;$i<=87;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "19":
			for($i=82;$i<=84;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "18":
			for($i=79;$i<=81;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "17":
			for($i=76;$i<=78;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "16":
			for($i=73;$i<=75;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "15":
			for($i=71;$i<=72;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "14":
			for($i=69;$i<=70;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "13":
			for($i=64;$i<=68;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "12":
			for($i=60;$i<=63;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "11":
			for($i=58;$i<=59;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "10":
			for($i=54;$i<=57;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "9":
			for($i=51;$i<=53;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "8":
			for($i=47;$i<=50;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "7":
			for($i=42;$i<=46;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "6":
			for($i=34;$i<=41;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "5":
			for($i=22;$i<=33;$i++){
				$key = "ans".$i;
				if(!$_REQUEST[ $key ]) $err = $i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "4":
			if(!$_REQUEST[ 'ans15' ]) $err = 15;
			if(!$_REQUEST[ 'ans16' ]) $err = 16;
			if(!$_REQUEST[ 'ans17' ]) $err = 17;
			if(!$_REQUEST[ 'ans18' ]) $err = 18;
			if(!$_REQUEST[ 'ans19' ]) $err = 19;
			if(!$_REQUEST[ 'ans20' ]) $err = 20;
			if(!$_REQUEST[ 'ans21' ]) $err = 21;
			for($i=15;$i<=21;$i++){
				$key = "ans".$i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "3":
			if(!$_REQUEST[ 'ans8'  ]) $err = 8;
			if(!$_REQUEST[ 'ans9'  ]) $err = 9;
			if(!$_REQUEST[ 'ans10' ]) $err = 10;
			if(!$_REQUEST[ 'ans11' ]) $err = 11;
			if(!$_REQUEST[ 'ans12' ]) $err = 12;
			if(!$_REQUEST[ 'ans13' ]) $err = 13;
			if(!$_REQUEST[ 'ans14' ]) $err = 14;
			for($i=8;$i<=14;$i++){
				$key = "ans".$i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
		case "2":
			if(!$_REQUEST[ 'ans1' ]) $err = 1;
			if(!$_REQUEST[ 'ans2' ]) $err = 2;
			if(!$_REQUEST[ 'ans3' ]) $err = 3;
			if(!$_REQUEST[ 'ans4' ]) $err = 4;
			if(!$_REQUEST[ 'ans5' ]) $err = 5;
			if(!$_REQUEST[ 'ans6' ]) $err = 6;
			if(!$_REQUEST[ 'ans7' ]) $err = 7;
			for($i=1;$i<=7;$i++){
				$key = "ans".$i;
				$clum[$key] = $_REQUEST[$key];
			}
		break;
	}
	//---------------------------------------------
	//
	//回答登録
	//
	//---------------------------------------------
	$result = $ea2->setEaRst($clum,$where);
	
	
	if($err){
		//エラーがあった時はコチラ
		$errmsg = "チェックされていない回答があります。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){


		include_once(D_PATH_HOME."init/rsData/rsCalcData2.php");
		include_once(D_PATH_HOME."lib/keisan/functionEAB2.php");

		//----------------------------
		//最終ページ
		//----------------------------
		$tdetail = $obj->getTestPaper($where);

		$update = array();
		$update[ 'where' ][ 'test_id' ] = $where[ 'test_id' ];
		$update[ 'where' ][ 'exam_id' ] = $where[ 'exam_id' ];
		list($rst,$rs_id) = $ea2->getScore($update);
		$array_result = EAB($array_calc,$array_vf,$rst);

		$ea2->setResult($array_result,$rs_id);
		
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
$tdetail = $ea2->getEa($where);
//ページ表示パターン選択
if($temp != "Fin"){
	switch($pager){
		case "32":
		case "31":
			$temp = "page4";
		break;
		case "30":
		case "29":
		case "28":
		case "27":
			$temp = "page3";
		break;
		case "26":
		case "25":
		case "24":
			$temp = "page2";
		break;

		case "23":
		case "22":
			$temp = "page6";
		break;
		case "21":
		case "20":
		case "19":
		case "18":
		case "17":
		case "16":
		case "15":
			$temp = "page5";
		break;
		case "14":
		case "13":
			$temp = "page4";
		break;
		case "12":
		case "11":
			$temp = "page3";
		break;
		case "10":
		case "9":
		case "8":
		case "7":
		case "6":
			$temp = "page2";
		break;
		case "5":
		case "4":
			$temp = "page1";
		break;
		case "3":
		case "2":
		case "1":
			$temp = "page";
		break;
		default:
			$temp = "guide";
		break;
	}
}

$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

//var_dump($answer);

?>