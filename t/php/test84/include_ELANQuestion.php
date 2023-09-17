<?PHP
$array_answer = array(
					 "ans1"=>1
					,"ans2"=>2
					,"ans3"=>3
					,"ans4"=>2
					,"ans5"=>3
					,"ans6"=>3
					,"ans7"=>4
					,"ans8"=>3
					,"ans9"=>1
					,"ans10"=>4

				);
$array_number = array(
					1=>"①"
					,2=>"②"
					,3=>"③"
					,4=>"④"
					,5=>"⑤"
					,6=>"⑥"
					,7=>"⑦"
					,8=>"⑧"
					,9=>"⑨"
					,10=>"⑩"

				);

//Q1
$question[1][1][0] = "企業が人権に注目する必然性";
$question[1][1][1] = "企業が人権に留意すべきことは言うまでもありませんが、最近は、投資の世界においてもESG投資（環境（E）・社会（S）・ガバナンス（G））のSの一つとして、「人権」はもっとも重要度の高い項目の1つとされています。では、利益が大事なはずの投資の世界において、なぜ人権が重要視されるようになったのでしょうか？下記の選択肢の中から最近の状況について記述したものとして<u>もっともふさわしいもの</u>を選んでください。";

$question[1][3][1] = "人権問題に鈍感な会社は、不買運動・ストライキ・訴訟・評判の低下などによって、中長期的に見ると成長しない会社になると考えられるから。";
$question[1][3][2] = "政治的正しさ（ポリティカル・コレクトネス）が重視されるようになり、これを重視しない会社に投資すると社会から批判を浴びるから。";
$question[1][3][3] = "投資の世界では自社の従業員の尊重がとても重視されているから。従業員のモチベーションがあがらないと利益も下がるので。";

//Q1 解説
$interprete[1][0] = "1";
$interprete[1][1] = "";
$interprete[1][2] = "「人権」に真剣に向き合うべき時代になりました。政治的正しさ（ポリティカル・コレクトネス）の観点から会社の評判を考えたり、自社の従業員の尊重も間違いではなく、重要な要素の一つです。しかし投資においてはそれが一番ではありません。ESG投資では、もっと広く長い視点で投資をとらえます。たとえば、途上国の児童を働かせることで安価なコストという短期的なメリットが得られる可能性はありますが、中長期的には、不買運動、ストライキ、訴訟、サプライチェーンの監督不行き届きによる評判の低下などといった状況になる可能性が高く、中長期的デメリットが短期的メリットを大きく上回ります。すなわち「リスク」が高いと判断されることになります。このようなことを背景に投資家が企業に求める人権尊重のレベルは年々高くなっています。";


//Q2
$question[2][1][0] = "多様性を尊重する";
$question[2][1][1] = "先日、ある会議で有名な経営者が「これからの経営は、ダイバーシティ（多様性）が重要である。さらにはそれを活かすためには、インクルージョンを高めることが不可欠だ」と力説していました。では、「インクルージョン」とは何のことでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";

$question[2][3][1] = "多様な人たちを差別せず、あらゆる面で平等に扱うこと。";
$question[2][3][2] = "あらゆる人材がその能力を最大限発揮でき、やりがいを感じるようにすること。";
$question[2][3][3] = "多様な人たちを多様な視点からグループ分けをし、グループごとに棲み分けをはかること。";

//Q2 解説
$interprete[2][0] = "2";
$interprete[2][1] = "";
$interprete[2][2] = "近年では、LGBTや障がい者、外国人、高齢者など多様性を持つさまざまな人々に活動してもらえる組織が作られつつあります。しかしながら、多様性は、下手をすると対立や衝突、分断の火種となりえます。組織が成果を上げるには、多様性から来る不安定な状態を乗り越えることが必要であり、それらの問題を解決するためのキーワードがインクルージョンです。インクルージョンとは、「あらゆる人材がその能力を最大限発揮でき、やりがいを感じるようにすること」です。日鉄グループにおけるダイバーシティ＆インクルージョンは、単なる社会的潮流への対応としてではなく、社員の皆さんが、生産性高く、持てる力を最大限発揮し、「誇り」と「やりがい」をもって活躍できる企業を実現するための取り組みとして捉えています。";



//Q3

$question[3][1][0] = "ハラスメント防止①";
$question[3][1][1] = "定時で帰る段取りで仕事をしていた日の夕方、上司が「この仕事、明日の午前中までにお願い。」と急な仕事を依頼してきました。明日の午前中は会議があるため、残業しないと終わらない量の仕事です。定時が過ぎてもその仕事をしていると「残業禁止！早く帰れ！」といわれました。「残業しないと終わりません」といっても、上司は「何とかしろ」と取り合ってくれません。そのくせ、翌朝になると「その仕事、まだできてないの？」と問い詰めてきます。これらの言動はパワハラに該当するのでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";


$question[3][3][1] = "褒められる状況ではないが、上司の言動はパワハラではない。ただしマネジメント能力の問題にはなりえる。";
$question[3][3][2] = "上司の言動は、個人の名誉棄損や侮辱にあたり、パワハラになりえる。";
$question[3][3][3] = "上司の言動は、過大な要求（実現不可能な依頼）であり、パワハラになりえる。";

//Q3 解説
$interprete[3][0] = "3";
$interprete[3][1] = "";
$interprete[3][2] = "厚生労働省では、パワハラに該当する行為類型として以下の６つをあげています。① 暴行・傷害（身体的な攻撃）　② 脅迫・名誉棄損、侮辱、ひどい暴言（精神的な攻撃）　③ 隔離、仲間外し、無視（人間関係からの切り離し）　④ 業務上明らかに不要なことや遂行不可能なことの強制（過大な要求）　⑤ 業務上の合理性なく、能力や経験とかけ離れた程度の低い仕事を命じることや、仕事を与えないこと（過小な要求）　⑥ 私的なことに過度に立ち入ること（個の侵害）です。　本件は、このうちの④の過大な要求に該当する可能性があります。上司は、現実的には、夕方には残業時間が気になり、翌朝には仕事の納期が気になっているだけで、無理なことを社員に要求しているつもりはないかもしれません。但し、育成のために現状よりも少し高いレベルの業務を任せることなどは、該当しないとされています。しかしながら、指示を受ける立場にたってみると、明らかに不可能なことを要求しています。このように無理な指示、言動をしないように気を付けましょう。";


//Q4
$question[4][1][0] = "ハラスメント防止②";
$question[4][1][1] = "年末が近づき、例年であれば忘年会が実施される頃になりました。ただし今年はコロナ禍にあり実施は難しいので、各自、自宅からリモートで参加する「リモート忘年会」が実施されることになりました。私はアルコールが飲めないので、お酒のかわりにジュースなどのノンアルコールの飲料を用意して参加しようとしたのですが、上司は「今日は、電車に乗って帰らなくてよいのだから、酔っぱらってもよいだろう。ちゃんとビールを飲め」と言ってビールを飲むことを強要します。これってパワハラではないでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";


$question[4][3][1] = "褒められる状況ではないが、上司の行為はパワハラではない。ただしマネジメント問題になりえる。";
$question[4][3][2] = "上司がアルコールを飲めない人にアルコールを強要することは嫌がらせ行為であり、パワハラになりうる。";
$question[4][3][3] = "アルコールの強要の前に、リモート忘年会を実施することがパワハラである。アルコールの強要はもちろんパワハラである。";

//Q4 解説
$interprete[4][0] = "2";
$interprete[4][1] = "";
$interprete[4][2] = "アルコールに関係するハラスメントの代表的な例は以下のようなものがあります。①飲酒の強要　②イッキ飲ませ　③酔いつぶし　④飲めない人への配慮を欠くこと　⑤酔ったうえでの迷惑行為　などです。本ケースは①や④にあたり、あまりにしつこいようだとハラスメントになりかねません。飲む人は飲まない人や飲めない人への配慮をし、飲まない人は飲む人の飲みたい気持ちにも配慮して、良い職場を作っていきましょう。";



//Q5
$question[5][1][0] = "ハラスメント③";
$question[5][1][1] = "あなたの部下に、もうすぐお子さんが生まれる男性社員がいます。女性だけでなく男性も育児休業を取る制度があることは知っているものの、３日以上も休まれると仕事が回らなくなるので、「お父さんになるんだね。おめでとう。いろいろあるだろうから、しばらくは定時になったらすぐ帰ってよいよ。ただ休むのは勘弁してもらいたいんだけど」と、育児休業の申し出を控えてもらうために上記のような会話をしました。このような言動はコンプライアンス上の問題行為に該当するのでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";


$question[5][3][1] = "該当しない。業務遂行上、休まれると困る状況にあるから、やむをえない。";
$question[5][3][2] = "場合による。部下が育児休業を取りたいと思っていた場合は問題行為になり、考えていなかった場合は問題とならない。";
$question[5][3][3] = "該当する。事業主は、対象となる労働者から育児休業の申し出があったときには、これを拒むことはできない。";

//Q5 解説
$interprete[5][0] = "3";
$interprete[5][1] = "";
$interprete[5][2] = "事業主は、対象となる労働者から育児休業の申し出があったときには、これを拒むことはできません。（「育児休業、介護休業等育児又は家族介護を行う労働者の福祉に関する法律」第6条）育児休業の申し出を拒むことがあった場合、労働局による指導や勧告の対象になり、最終的には企業名が公表されることもありえます。
2022年4月に育児・介護休業法が改正されます。これは企業に対し、男性、女性にかかわらず自身や配偶者の出産や妊娠を届け出た社員に「育休を取る意思があるかを確認することが義務づけ」られます。育児休業は女性の取得率が80％を超えているのに対し、男性は7％程度にとどまっているので、今回の法改正では、企業の側から男性にも育児休業を取るための働きかけを義務づけ、取得のハードルを下げることを狙っています。よって、これらの対応を行わない場合、労働局による指導や勧告の対象になり、最終的には企業名が公表されることもありえます。男性も女性も育児休業をとれるための体制をしっかりと作っていかなくてはいけません。";



//Q6
$question[6][1][0] = "障がい者ともに仕事をしていく";
$question[6][1][1] = "2021年3月1日から、従業員の中に占める障がい者の占める比率（法定雇用率）が引き上げられました。民間企業ではこれまでの 2.2％ が2.3％ に、国、地方公共団体等 は2.5％ が 2.6％にあがっています。さらに今回の法定雇用率の変更に伴い、障がい者を雇用しなければならない民間企業の事業主の範囲が 従業員45.5人以上から43.5人以上に下がりました。では、このように国が法定雇用率をあげ、障がい者の雇用を増やそうとしている背景にはどのような考え方があるのでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください";

$question[6][3][1] = "国家全体が人手不足の状況に陥りつつあり、より多くの労働力を確保するため、障害者にもっと働いてもらうようにしたいため。";
$question[6][3][2] = "障がい者を優遇することで、福祉国家としてのイメージを作り、世界にアピールするため。";
$question[6][3][3] = "障がい者を含むすべての国民が本人の意思と能力を発揮して働くことができる機会を確保されるようにするため。";


//Q6 解説
$interprete[6][0] = "3";
$interprete[6][1] = "";
$interprete[6][2] = "障がい者の法定雇用率を定める障害者雇用促進法の背景には、全ての国民が、障がいの有無によって分け隔てられることなく、相互に人格と個性を尊重し合いながら共生する社会を実現しようという「ノーマライゼーション（一般化）」の理念があります。その理念のもと、障がい者を特別視せずに労働者の一員として、本人の意思と能力を発揮し働くことができる社会の実現を目指しています。
";



//Q7
$question[7][1][0] = "性的マイノリティ";
$question[7][1][1] = "ＬＧＢＴなど性的マイノリティが、職場や学校、地域で直面するいじめや差別をなくすための法整備が与野党で検討されています。では、LGBTと呼ばれる性的マイノリティの人達は、日々の生活の中でどのようなことに苦しめられているのでしょうか。下記の選択肢の中からもっともふさわしいものを選んでください。";


$question[7][3][1] = "「君はきっとゲイだろ」などとからかわれ、いわれのない差別や迫害を受ける、または受ける可能性を感じる。";
$question[7][3][2] = "女性に惹かれる女性なのに、周囲から「彼氏できた？」としつこく聞かれる。";
$question[7][3][3] = "自分の性的嗜好をうちあけたところ、周囲にあっと言う間に拡散された。";
$question[7][3][4] = "上記①～③のすべて。";



//Q7 解説
$interprete[7][0] = "4";
$interprete[7][1] = "";
$interprete[7][2] = "生まれつき性に関して異なる意識を持つ人を性的マイノリティと呼びますが、その苦労や被差別感は大きいものです。本問における選択肢のすべての言動が性的マイノリティの人にとってはつらい事象となります。性的マイノリティを普通のこととして受け入れ、ともによりよい社会を作っていく意識をもつことが大切です。ちなみにLGBTはそれぞれ、レズビアン（女性に惹かれる女性）、ゲイ（男性に惹かれる男性）、バイ・セクシャル（両性愛者）、トランスジェンダー（性同一性障害）です。トランスジェンダーは、ある人の「割り当てられた性」 (身体的特徴ないし遺伝子上の性に基づく男性か女性かの他人による識別) とは違う「性自認」 (女か男か、あるいはそのどちらでもないか) の状態にある。ということを指します。";


//Q8
$question[8][1][0] = "外国人差別";
$question[8][1][1] = "とある会社が元請として管理する工事現場において、設備を使う業務をしている協力会社の日本人社員が、同僚である外国人の社員に対していつもつらく当たっています。「バカ」、「アホ」、「国へ帰れ」 と言ったり、日本語が通じないから「体で指導する」として日常的に工具でヘルメットを叩いたりしています。このままだと事故が起こりそうです。このような際にはどのように対応すればよいでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";

$question[8][3][1] = "協力会社の日本人社員に対し、「そのような行為はハラスメントだから、やめろ」と指示する。";
$question[8][3][2] = "あくまで協力会社の問題なので、黙って知らないふりをしておく。";
$question[8][3][3] = "協力会社のリーダーに対し、職場の安全上問題が出る可能性があるから、外国人への言動をあらためてもらうように要望する。";

//Q8 解説
$interprete[8][0] = "3";
$interprete[8][1] = "";
$interprete[8][2] = "原則的に、当社のような元請企業は協力会社の従業員に対する安全配慮義務を負います。安全配慮義務とは、「災害を起こす可能性」すなわち「危険及び健康障害」を事前に発見し、その防止対策を講ずることが、元請企業の義務とされています。本ケースは、外国人に対する不当なハラスメント（レイシャル・ハラスメント）であり、職場の安全配慮義務違反につながりうる悪質なケースです。協力会社のリーダーに対して安全配慮義務の観点から状況の改善を要望することが必要です。";


//Q9
$question[9][1][0] = "同和問題の正しい認識を持つ";
$question[9][1][1] = "現在においても、同和地区出身であることを理由に結婚に反対されたり、就職等において不利な取扱いを受ける、あるいは根拠のない嫌がらせを受けるといった、好ましくない事案が多数発生しています。では同和問題の起源とその後の経緯とはいったいどのようなものなのでしょうか。下記の選択肢の中から<u>もっともふさわしいもの</u>を選んでください。";

$question[9][3][1] = "歴史的な過程で形づくられた身分階層構造に基づく差別により，国民の一部の人々が長い間、経済的、社会的、文化的に低位の状態を強いられたことによる。";
$question[9][3][2] = "集団が暴力的に組織化し、その後特定の場所に居住するようになったことから、一般の人たちがその人達との関係を断とうとしたことによる。";
$question[9][3][3] = "昔、外部から流入した人々が社会に同化できず、独自の生活習慣を維持しつづけたことから、もともとの居住民が関係を持とうとしなかったことによる。";

//Q9 解説
$interprete[9][0] = "1";
$interprete[9][1] = "";
$interprete[9][2] = "同和問題とは，日本社会の歴史的発展の過程で形づくられた身分階層構造に基づく差別により，日本国民の一部の人々が長い間、経済的、社会的、文化的に低位の状態を強いられたことに由来します。今なお、結婚を妨げられたり、日常生活の上で様々な差別を受けるなどの問題があり、重大な人権問題です。（法務省ホームページより）。2016年に国はあらためて部落差別解消法を制定し、部落差別は許されないものである、そしてその解消のために国や地方公共団体は「相談体制の充実」や「教育及び啓発」に取り組むことを定めました。";

//Q10
$question[10][1][0] = "アンコンシャス・バイアス";
$question[10][1][1] = "男女の性的役割意識に基づく無意識の発言が、相手に対して嫌な思いをさせてしまうことがあります。これを性差に基づくアンコンシャス・バイアスと言い、このようなバイアスから自由になることが求められます。では、下記の中でこの性差にもとづくアンコンシャス・バイアスに該当しないものはどれでしょうか。";

$question[10][3][1] = "「お母さんだから早く帰らないと」と配慮した。";
$question[10][3][2] = "「男なのに料理がうまいんだね」と褒めた。";
$question[10][3][3] = "「男なんだから、もっと男らしく気合いを入れろ！」と激励した。";
$question[10][3][4] = "適性にもとづいて議長を男性に、副議長を女性に任せた。";
$question[10][3][5] = "「新姓は何に変わるの？」と名前が変わる前提で結婚する女性に尋ねた。";

//Q10 解説
$interprete[10][0] = "4";
$interprete[10][1] = "";
$interprete[10][2] = "「女は家庭、男は仕事」など固定的な役割分担意識にとらわれている可能性があります。現在は、これまで男性が主に活躍してきた分野で活躍する女性も多く、その逆も多くの例があります。性別によって必要以上に区別したり、固定観念や先入観で考えるのではなく、その状況にあわせてしっかりと個人を見て判断したり言動することが大事です。「母親が育児をするもの」「男性は料理が苦手」といった思い込みや、「男だから強くあらねばならぬ」とか、「結婚したら男性側の姓になることが前提」といった旧来の慣習にとらわれないことも重要です。";

?>