<?PHP
$array_question[1] = "あなたの性別をお選びください（１つだけ)";
$array_question[2] = "あなたの年齢をお答えください";
$array_question[3] = "あなたの職種について、以下の中から最もあてはまる選択肢をお選びください。";
$array_question[4] = "下記の欄をクリックするとあなたの部下の名前のリストが示されます「メンバーの中であなたが業務上で最も頻繁に接する人」をお選びください。
<br />
<p class='text-danger'>
※接触頻度が同じ人が複数いる場合はその中で名字の最初の文字が50音順で最も早い人をお選びください。
</p>
";
$array_question[5] = "<span class='bossname'>".$bossname."</span>さんは何歳くらいですか以下の選択肢からお答えください。
";
$array_question[6] = "<span class='bossname'>".$bossname."</span>さんの仕事の知識や経験値をチームのメンバーの中で位置づけるとしたら、以下のどれにあてはまりますか。";
$array_question[7] = "あなたが現在のチームでリーダーとして働き始めてからどれくらい経ちますか。「〇年〇か月」という形式で半角整数値で入力してください。";
$array_question[8] = "あなたのチームのメンバーは、何人いますか。あなたを除いた数を半角整数値で入力してください。";
$array_question[9] = "チームのメンバーと以下のような形で話すことは、月に何回くらいありますか。オンラインで話す場合も含めて、半角整数値で入力してください。";

$q = 10;
$array_question[$q] = "あなたのチームでの業務に関するコミュニケーション全般の中で、以下の(1)～(4)が占める割合（％）をそれぞれお答え下さい(1)～(4)の合計値が100％になるように半角整数値をご記入下さい。 ";

$i = 1;
$line[$q][$i][ 'key' ] = "17"; 
$line[$q][$i][ 'q' ] = "対面";
$i++;
$line[$q][$i][ 'key' ] = "18"; 
$line[$q][$i][ 'q' ] = "テキスト（メールやチャットなど）";
$i++;
$line[$q][$i][ 'key' ] = "19"; 
$line[$q][$i][ 'q' ] = "音声通話（電話、音声のみのZoomやTeamsなどでの通話）";
$i++;
$line[$q][$i][ 'key' ] = "20"; 
$line[$q][$i][ 'q' ] = "ビデオ通話（動画ありのZoomやTeamsなどでの通話）";

/*
$q = 11;
$array_question[$q] = "あなたの業務において、テレワーク（在宅勤務など）が占める割合（％）を教えて下さい。";
$line[$q][1][ 'key' ] = "19"; 
*/


$q = 11;
$array_question[$q] = "【".$bossname."さんは】以下の行動をどれくらいの頻度で行っていますか。";
$ans[$q][1] = "まったくしない";
$ans[$q][2] = "ほとんどしない";
$ans[$q][3] = "時々する";
$ans[$q][4] = "しばしばする";
$ans[$q][5] = "よくする";

$i = 1;
$line[$q][$i][ 'key' ] = "21"; 
$line[$q][$i][ 'q' ] = "自分の仕事を改善するために、自分で新しいアプローチを取り入れる";

$i++; 
$line[$q][$i][ 'key' ] = "22"; 
$line[$q][$i][ 'q' ] = "生産的ではないように思える仕事上の細かい手順を、自分自身で変える";

$i++; 
$line[$q][$i][ 'key' ] = "23"; 
$line[$q][$i][ 'q' ] = "自分がやりやすくなるように、自分自身で仕事のやり方を変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "24"; 
$line[$q][$i][ 'q' ] = "自分の仕事に関わる設備や備品の使い方を、自分自身で調整する"; 

$i++; 
$line[$q][$i][ 'key' ] = "25"; 
$line[$q][$i][ 'q' ] = "仕事に関わる企画（勉強会や研修など）を自分で計画する"; 

$i++; 
$line[$q][$i][ 'key' ] = "26"; 
$line[$q][$i][ 'q' ] = "自分が必要と思う仕事を追加したり、そうでないものを省いたりする"; 

$i++; 
$line[$q][$i][ 'key' ] = "27"; 
$line[$q][$i][ 'q' ] = "自分の仕事の範囲をとらえ直す"; 

$i++; 
$line[$q][$i][ 'key' ] = "28"; 
$line[$q][$i][ 'q' ] = "チームのメンバーとの関わりかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "29"; 
$line[$q][$i][ 'q' ] = "他職種・他部署への仕事上の働きかけかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "30"; 
$line[$q][$i][ 'q' ] = "社外の人との仕事上の関わりかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "31"; 
$line[$q][$i][ 'q' ] = "自分が担当する仕事の意味を見直す"; 

$i++; 
$line[$q][$i][ 'key' ] = "32"; 
$line[$q][$i][ 'q' ] = "誰のための仕事かということを考え直す"; 



$q = 12;
$array_question[$q] =  "【".$bossname."さんはチームのメンバー（あなたのもとで働いている人）と】以下の行動をどれくらいの頻度で行っていますか";
$ans[$q][1] = "まったくしない";
$ans[$q][2] = "ほとんどしない";
$ans[$q][3] = "時々する";
$ans[$q][4] = "しばしばする";
$ans[$q][5] = "よくする";

$i = 1;
$line[$q][$i][ 'key' ] = "33";
$line[$q][$i][ 'q' ] = "チームの仕事を改善するために、メンバーと協働して、新しいアプローチを取り入れる";

$i++; 
$line[$q][$i][ 'key' ] = "34"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、生産的ではないように思える仕事上の細かい手順を変える";

$i++; 
$line[$q][$i][ 'key' ] = "35"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、チームがやりやすくなるように仕事のやり方を変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "36"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、チームの仕事に関わる設備や備品の使い方を調整する"; 

$i++; 
$line[$q][$i][ 'key' ] = "37"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、仕事に関わる企画（勉強会や研修など）を計画する"; 

$i++; 
$line[$q][$i][ 'key' ] = "38"; 
$line[$q][$i][ 'q' ] = "メンバーと協働して、必要と思う仕事を追加したり、そうでないものを省いたりする"; 

$i++; 
$line[$q][$i][ 'key' ] = "39"; 
$line[$q][$i][ 'q' ] = "メンバー同士で、お互いの仕事の範囲をとらえ直す"; 

$i++; 
$line[$q][$i][ 'key' ] = "40"; 
$line[$q][$i][ 'q' ] = "メンバー同士で、お互いとの関わりかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "41"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、他職種・他部署への仕事上の働きかけかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "42"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、社外の人との仕事上の関わりかたを変える"; 

$i++; 
$line[$q][$i][ 'key' ] = "43"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、チームが担当する仕事の意味を見直す"; 

$i++; 
$line[$q][$i][ 'key' ] = "44"; 
$line[$q][$i][ 'q' ] = "メンバーと一緒に、誰のための仕事かということを考え直す"; 



$q = 13;
$array_question[$q] = "【".$bossname."さんは】チームのメンバー（あなたのもとで働いている人）に対して、以下の行動をどれくらいの頻度で行っていますか。";

$ans[$q][1] = "まったくしない";
$ans[$q][2] = "ほとんどしない";
$ans[$q][3] = "時々する";
$ans[$q][4] = "しばしばする";
$ans[$q][5] = "よくする";

$i = 1;
$line[$q][$i][ 'key' ] = "45";
$line[$q][$i][ 'q' ] = "チームに影響を与えるような問題に関して、メンバーに何らかの提案をする";

$i++; 
$line[$q][$i][ 'key' ] = "46"; 
$line[$q][$i][ 'q' ] = "チームに影響を与えるような問題に関して、メンバーに率直に意見し、その問題に関わるよう促す";

$i++; 
$line[$q][$i][ 'key' ] = "47"; 
$line[$q][$i][ 'q' ] = "仕事の問題に対する自分の意見がメンバーと違い、メンバーが反対している場合でも、その意見についてメンバーと話す"; 

$i++; 
$line[$q][$i][ 'key' ] = "48"; 
$line[$q][$i][ 'q' ] = "プロジェクトや手順の変更に関する自分の新しいアイディアについて、メンバーに持ちかける"; 

$i++; 
$line[$q][$i][ 'key' ] = "49"; 
$line[$q][$i][ 'q' ] = "メンバーの仕事を改善できるように、メンバーに建設的な提案をする";

$i++; 
$line[$q][$i][ 'key' ] = "50"; 
$line[$q][$i][ 'q' ] = "メンバーが何か間違ったことをしたら、間違いを指摘し、修正するのを手伝う"; 

$i++; 
$line[$q][$i][ 'key' ] = "51"; 
$line[$q][$i][ 'q' ] = "冗長または不必要な手順をなくすよう、メンバーに指摘する"; 

$i++; 
$line[$q][$i][ 'key' ] = "52"; 
$line[$q][$i][ 'q' ] = "生産的でない、または、生産性を下げると思われるチームのルールや方針を変えるように、メンバーを説得しようとする"; 

$i++; 
$line[$q][$i][ 'key' ] = "53"; 
$line[$q][$i][ 'q' ] = "効率をよくするために、新しい体制、技術、アプローチを取り入れるようメンバーに提案する"; 


$q = 14;
$array_question[$q] = "あなたは、【チームのメンバー】に対して、以下のことをそれぞれどれくらいの頻度でしていますか。
";

$ans[$q][1] = "まったくしない";
$ans[$q][2] = "ほとんどしない";
$ans[$q][3] = "時々する";
$ans[$q][4] = "しばしばする";
$ans[$q][5] = "よくする";

$i = 1;
$line[$q][$i][ 'key' ] = "54";
$line[$q][$i][ 'q' ] = "仕事で必要なスキルについて、良いところを指摘すること";

$i++; 
$line[$q][$i][ 'key' ] = "55"; 
$line[$q][$i][ 'q' ] = "仕事で必要なスキルについて、悪いところを指摘すること";

$i++; 
$line[$q][$i][ 'key' ] = "56"; 
$line[$q][$i][ 'q' ] = "周りの人との協力・協働の仕方について、良いところを指摘すること"; 

$i++; 
$line[$q][$i][ 'key' ] = "57"; 
$line[$q][$i][ 'q' ] = "周りの人との協力・協働の仕方について、悪いところを指摘すること"; 

$i++; 
$line[$q][$i][ 'key' ] = "58"; 
$line[$q][$i][ 'q' ] = "仕事に取り組む態度について、良いところを指摘すること";

$i++; 
$line[$q][$i][ 'key' ] = "59"; 
$line[$q][$i][ 'q' ] = "仕事に取り組む態度について、悪いところを指摘すること"; 

$i++; 
$line[$q][$i][ 'key' ] = "60"; 
$line[$q][$i][ 'q' ] = "仕事の問題や方向性について、話をすること"; 


$q = 15;
$array_question[$q] = "【チームのメンバー】に対するあなたのフィードバック（良いところや悪いところの指摘）の仕方について、以下の項目はどのくらいあてはまりますか。";

$ans[$q][1] = "まったくあてはまらない";
$ans[$q][2] = "あまりあてはまらない";
$ans[$q][3] = "どちらともいえない";
$ans[$q][4] = "ある程度あてはまる";
$ans[$q][5] = "とてもあてはまる";

$i = 1;
$line[$q][$i][ 'key' ] = "61";
$line[$q][$i][ 'q' ] = "メンバーが仕事に注いだ努力を反映している";
$i++; 
$line[$q][$i][ 'key' ] = "62"; 
$line[$q][$i][ 'q' ] = "チームに対する貢献度を反映している";

$i++; 
$line[$q][$i][ 'key' ] = "63"; 
$line[$q][$i][ 'q' ] = "メンバーの業績や仕事の成果に応じた公平・公正なものである";
$i++; 
$line[$q][$i][ 'key' ] = "64"; 
$line[$q][$i][ 'q' ] = "メンバー自身の意見や気持ちを伝える機会がある";
$i++; 
$line[$q][$i][ 'key' ] = "65"; 
$line[$q][$i][ 'q' ] = "誰に対しても一貫性を持って行われている";
$i++; 
$line[$q][$i][ 'key' ] = "66"; 
$line[$q][$i][ 'q' ] = "倫理的で道徳的な基準にそって行われている";
$i++; 
$line[$q][$i][ 'key' ] = "67"; 
$line[$q][$i][ 'q' ] = "メンバーに敬意を払っている";
$i++; 
$line[$q][$i][ 'key' ] = "68"; 
$line[$q][$i][ 'q' ] = "丁寧な態度で接している";
$i++; 
$line[$q][$i][ 'key' ] = "69"; 
$line[$q][$i][ 'q' ] = "メンバーに対して不当な発言や批判をしない";
$i++; 
$line[$q][$i][ 'key' ] = "70"; 
$line[$q][$i][ 'q' ] = "フィードバックの基準や理由を十分に説明している";
$i++; 
$line[$q][$i][ 'key' ] = "71"; 
$line[$q][$i][ 'q' ] = "フィードバックの基準や理由について、合理的な説明をしている";
$i++; 
$line[$q][$i][ 'key' ] = "72"; 
$line[$q][$i][ 'q' ] = "適切なタイミングで詳細な情報を伝えている";
$i++; 
$line[$q][$i][ 'key' ] = "73"; 
$line[$q][$i][ 'q' ] = "メンバーの仕事ぶりを改善するための有益な情報を提供している";
$i++; 
$line[$q][$i][ 'key' ] = "74"; 
$line[$q][$i][ 'q' ] = "メンバーが学び、改善するのを助けることに焦点を当てている";
$i++; 
$line[$q][$i][ 'key' ] = "75"; 
$line[$q][$i][ 'q' ] = "メンバーの能力開発に繋がるフィードバックを与えている";

$q = 16;
$array_question[$q] = "引き続き、あなたが【チームのメンバーに対して】フィードバック（良いところや悪いところの指摘）をするときについて伺います。以下の項目はどのくらいあてはまりますか。
";


$ans[$q][1] = "まったくあてはまらない";
$ans[$q][2] = "あまりあてはまらない";
$ans[$q][3] = "どちらともいえない";
$ans[$q][4] = "ある程度あてはまる";
$ans[$q][5] = "とてもあてはまる";

$i = 1;
$line[$q][$i][ 'key' ] = "76";
$line[$q][$i][ 'q' ] = "フィードバックの際に、チームの目標を明確に伝えている";
$i++; 
$line[$q][$i][ 'key' ] = "77"; 
$line[$q][$i][ 'q' ] = "フィードバックの際に、目標に向けてチームを方向づけている";
$i++; 
$line[$q][$i][ 'key' ] = "78"; 
$line[$q][$i][ 'q' ] = "フィードバックの際に、各メンバーの役割を明確に伝えている";
$i++; 
$line[$q][$i][ 'key' ] = "79"; 
$line[$q][$i][ 'q' ] = "フィードバックの際に、各メンバーが自分の役割を果たすよう促している";
$i++; 
$line[$q][$i][ 'key' ] = "80"; 
$line[$q][$i][ 'q' ] = "フィードバックの際に、メンバー同士の協力体制を明確にしている";
$i++; 
$line[$q][$i][ 'key' ] = "81"; 
$line[$q][$i][ 'q' ] = "フィードバックの際に、メンバーが互いに協力するように促している";
$i++; 
$line[$q][$i][ 'key' ] = "82"; 
$line[$q][$i][ 'q' ] = "フィードバックの内容は、相手がメンバーの中の誰であるかによって変わる";
$i++; 
$line[$q][$i][ 'key' ] = "83"; 
$line[$q][$i][ 'q' ] = "フィードバックの言い方は、相手がメンバーの中の誰であるかによって変わる";


$q = 17;
$array_question[$q] = "チームのメンバーが何らかの提案をした場合のあなたの対応について、以下の項目はどのくらいあてはまりますか。
";


$ans[$q][1] = "まったくあてはまらない";
$ans[$q][2] = "あまりあてはまらない";
$ans[$q][3] = "どちらともいえない";
$ans[$q][4] = "ある程度あてはまる";
$ans[$q][5] = "とてもあてはまる";

$i = 1;
$line[$q][$i][ 'key' ] = "84";
$line[$q][$i][ 'q' ] = "メンバーが何か提案をしたら、必ずそれに対するフィードバックをする";
$i++;
$line[$q][$i][ 'key' ] = "85";
$line[$q][$i][ 'q' ] = "メンバーの提案を積極的に取り入れる";
$i++;
$line[$q][$i][ 'key' ] = "86";
$line[$q][$i][ 'q' ] = "メンバーの提案について、積極的に上位者や他部署に話を通す";
$i++;
$line[$q][$i][ 'key' ] = "87";
$line[$q][$i][ 'q' ] = "メンバーの提案を取り入れない場合は、その理由を十分に説明する";


$q = 18;
$array_question[$q] = "ここからは、あなたがこれから受講する予定の『メンバーの主体的行動を引き出すフィードバックとは』という研修に関わることを伺います。以下の項目はどのくらいあてはまりますか。
";

$ans[$q][1] = "まったくあてはまらない";
$ans[$q][2] = "あまりあてはまらない";
$ans[$q][3] = "どちらともいえない";
$ans[$q][4] = "ある程度あてはまる";
$ans[$q][5] = "とてもあてはまる";

$i = 1;
$line[$q][$i][ 'key' ] = "88";
$line[$q][$i][ 'q' ] = "この研修のタイトルを見て、その必要性を感じる";

$i++;
$line[$q][$i][ 'key' ] = "89";
$line[$q][$i][ 'q' ] = "この研修が、どのような目的で実施されるのか想像できる";
$i++;
$line[$q][$i][ 'key' ] = "90";
$line[$q][$i][ 'q' ] = "この研修を受講すれば得られるメリットを想像できる";
$i++;
$line[$q][$i][ 'key' ] = "91";
$line[$q][$i][ 'q' ] = "この研修がその後の仕事に役立つだろうと感じる";
$i++;
$line[$q][$i][ 'key' ] = "92";
$line[$q][$i][ 'q' ] = "会社または上司から、このアンケートや研修の詳しい案内・説明があった";
$i++;
$line[$q][$i][ 'key' ] = "93";
$line[$q][$i][ 'q' ] = "私は、コミュニケーションに関わる知識やスキルを習得したり，能力を高めて，成長したいと思っている";
$i++;
$line[$q][$i][ 'key' ] = "94";
$line[$q][$i][ 'q' ] = "私は、コミュニケーション力を高めて職場での評価を高めたいと思っている";
$i++;
$line[$q][$i][ 'key' ] = "95";
$line[$q][$i][ 'q' ] = "私は、チームのメンバーの役に立ちたいと思っている";


$q = 19;
$i = 1;
$line[$q][$i][ 'key' ] = "96";
$array_question[$q] = "あなたが思う「チームのメンバーに対する理想的なフィードバックの仕方」とはどのようなものですか。また、それを促す要因や妨げる要因は何だと思いますか。【以後も含め、記述欄には500字以内で書いてください。】
";


$q = 20;
$i = 1;
$line[$q][$i][ 'key' ] = "97";
$array_question[$q] = "あなたが思う「チームのメンバーの主体的な行動」とはどのようなものですか。これまで伺った質問内容とは関係なく、あなたご自身のお考えをお聞かせください。また、メンバーの主体的行動を促す要因や妨げる要因は何だと思いますか。
";

$q = 21;
$i = 1;
$line[$q][$i][ 'key' ] = "98";
$array_question[$q] = "
このアンケートに対するご質問などがありましたらご記入ください。ご質問への回答はメールにて返信させていただきますので、【回答が必要な方のみ】アドレスを合わせてお知らせください。<br />
回答は研究責任者である繁桝よりお送りいたします。（お時間をいただく可能性がありますことをご了承ください）<br />
なお、お急ぎの場合には、御社のご担当者にお伝えいただきますようお願い致します。
";

?>