<?PHP
$array_answer = array(
					 "ans1"=>3
					,"ans2"=>3
					,"ans3"=>1
					,"ans4"=>1
					,"ans5"=>2
					,"ans6"=>3
					,"ans7"=>3


				);
$array_number = array(
					1=>"a"
					,2=>"b"
					,3=>"c"
					,4=>"d"
					,5=>"e"
					,6=>"f"
					,7=>"g"
					,8=>"h"
					,9=>"i"
					,10=>"j"

				);

$question[1][1][0] = "不適合";
$question[1][1][1] = "不適合の分類、定義等について、<u>正しくないもの</u>を１つ選べ。";

$question[1][2][0] = " ";
$question[1][2][1] = "不適合の是正処置に関する要領は、製品と行為の不適合（※当社で一般に“不適合”と呼ばれている事象）については「不適合・是正処置管理要領書(PA-08)」に、内部監査で検出された不適合については「内部監査要領書(PA-07)に、外部審査で検出された不適合については「品質マニュアル(QM-01)」10.2.1項に、定められている。";

$question[1][2][2] = "(製品と行為の)不適合の定義は以下の通りである。
営業から工事までの全てのプロセス及び引渡し後に苦情から生じたものを含め、発生した次の事項をさす。　a) 顧客からの評価や信頼を損なう製品、行為　　b) 当社に対して損害を与えた製品、行為　　c) 品質マニュアル、要領書の要求事項に反する製品、行為　d) 規定された検査、試験での不合格";

$question[1][2][3] = "溶接の不合格も不適合であるが、「処置の方法が定められている不適合」であるため、同一原因、同一内容の不合格が何回連続しても、「溶接不合格報告書(FC-056)」を提出すれば良く、「不適合発生速報(FA-120)」、「不適合／是正処置報告書(FA-121)」の提出は不要である。";




$interprete[1][0] = "c";
$interprete[1][1] = " c";
$interprete[1][2] = "
溶接不合格は「処置の方法が定められている不適合」であり、発生時は「溶接不合格報告書(FC-056)」を作成することと定められています。しかし、これが連続して発生した場合は、仕事の仕組みの問題、訓練の方法の問題、装置の管理の問題などが背景にある可能性があるため、「不適合発生速報(FA-120)」、「不適合／是正処置報告書(FA-121)」を利用して、根本原因と是正処置を定めることが必要です。このことは「PA-08 不適合・是正処置管理要領書」の2.3.1に規定されています。
";







$question[2][1][0] = "　";
$question[2][1][1] = "
不適合の定義から考えて正しい文章を１つ選べ。
";


$question[2][2][0] = " ";
$question[2][2][1] = "グラインダー作業において怪我をした。原因は安全な作業手順を飛ばした『近道行為』であり、正しい手順はQMSに定められているので、その違反による労災＝不適合として不適合速報を提出しなければならない。";

$question[2][2][2] = "定常的な顧客に関する応札において、遅延損害補償に関する仕様が厳しい物に変更となったにもかかわらず(いつも通りと思い込み)見落とし、応札メンバーに報告せず、リスク登録簿への登録・予備費無しの状態で応札・受注した。実行時に材料入荷が遅れて工期が遅延し、巨額の補償金を支払った。仕様変更読み落としという不具合行為は有ったが、直接の原因は材料入荷遅れであり、応札プロセスには不適合はない。";

$question[2][2][3] = "現場見学中に、仮復旧路面の落ち込みを発見し、当該工事の施工管理者に通報した。施工管理者は現場を確認の上、不適合速報を作成・提出した。";






$interprete[2][0] = "c";
$interprete[2][1] = "";
$interprete[2][2] = "
aは労働災害であり、QMSの不適合では扱いません。またグラインダーの作業標準もQMS文書にはありません。
bは発注者の仕様は明確にすることが求められており、それができておらず、不適合にあたります。また材料入荷遅れの原因によってはそのこと自体も不適合となります。<br />
cは、正しい行為です。以前は発見者が速報を作成することとしていましたが、2020年4月の改定5より、必ずしも発見者が作成する必要はなく、発見者または主管部門の作成となります。主管部門で発見した場合はそのものが作成します。
";








$question[3][1][0] = "不適合の発見、速報、是正処置のフローについて";
$question[3][1][1] = "
次の内、不適合発生時の対応や、是正処置の考え方を説明した文章として、<u>正しくないもの</u>を１つ選べ。
";


$question[3][2][0] = " ";
$question[3][2][1] = "
不適合は、発生後概ね３日以内に不適合速報で速報し、その後主管部門で原因分析、再発防止策を検討し、是正処置報告書を概ね6カ月以内に提出する。
";
$question[3][2][2] = "
不適合の処置（最終）を実施し、発生の原因分析と再発防止策の策定まで完了したので、処置費用（当社負担の直接費など）は未確定であるが、一旦品質保証部に是正処置報告書を提出した。費用確定後、費用区分に応じた最終決済者の決裁を得て全体を完了させた。
";
$question[3][2][3] = "
不適合発生時に、速報や是正処置報告書を提出するのは、原因を特定して再発を防止する、その情報を共有して他部門でも発生しないようにする、プロセスの不備（業務ルールやフローの不備）を見つけて改善する、ことを目的として行っている。また、是正処置は、その有効性の評価も行わなければならない。
";




$interprete[3][0] = "a";
$interprete[3][1] = "";
$interprete[3][2] = "

6カ月が間違いです。正しくは2カ月です。不適合個々に事情があり提出できない場合もあるとは思いますが、速報３日以内、是正処置報告2カ月以内が、目安となっていますのでご留意ください。
<br />
<br />
ｂ、ｃは正しい記述です。

";






$question[4][1][0] = "プロジェクト完了後の不適合費用の処理";
$question[4][1][1] = "引渡し後、又はプロジェクト完了後に発生した不適合の、処理費用の処置として<u>正しいもの</u>を１つ選べ。";

$question[4][2][0] = " ";

$question[4][2][1] = "主管部門が不適合速報を作成し、それに元のプロジェクト番号を記入し、「システム開発・改善依頼」にて、情報システム室へクレーム番号の発番を依頼する。この手続きで発番されたクレーム番号で処理する。";


$question[4][2][2] = "主管部門が自部門の経費予算で処理する。予算が不足する場合は、別途財務室に特別申請を行う。";


$question[4][2][3] = "
主管部門が実行中の他のプロジェクト番号で処理する（予備費などを充てる）。
";


$interprete[4][0] = "a";
$interprete[4][1] = "";
$interprete[4][2] = "
プロジェクト完了後に発見された不適合の処理費用について、時々質問を受けることが有ります。ａに従って、処理してください。
";







$question[5][1][0] = "データベースと活用方法";
$question[5][1][1] = "
不適合は、再発防止の為に、誰でも見ることができるようにしている。これについて記述したものについて、<u>正しいもの</u>を1つ選べ。

";



$question[5][2][0] = " ";
$question[5][2][1] = "
過去の不適合は、添付資料のフォーマットが統一されていないなどの理由により、紙ベースで保管されており、資料を確認するには品質保証部に個別に問い合わせてコピーを入手する必要がある。
";
$question[5][2][2] = "
不適合は、品質保証部の掲示板に掲示されており、類似不適合はキーワードから検索することができるようになっている。

";
$question[5][2][3] = "
不適合の情報は、不適合を発生させた部門で保管している。タイトルリストのみが掲示板から閲覧できる。
";


$interprete[5][0] = "b";
$interprete[5][1] = "";
$interprete[5][2] = "
過去の不適合はデータベース化され、キーワードで検索することができます。「類似の不適合は無いか？」と調べるときは、例えば「顧客名」「開削」「他埋損傷」などのキーワードから検索することができます。特定の顧客で発生させた過去の他埋損傷にどのようなものが有ったのか？プロジェクト方針会議資料作成時などに活用してください。<br />
※検索のやりやすさの改善も実施中です。

";








$question[6][1][0] = "当社不適合の統計データより①";
$question[6][1][1] = "
2013年度～2019年度の７年間の不適合データを集計したものについて、<u>正しくないもの</u>を１つ選べ。

";
$question[6][2][0] = " ";
$question[6][2][1] = "不適合費用は、7 年間で総額561百万円、約80 百万円／年、売上に占める割合は平均0.19％（≒ROSを約0.2％押し下げ）となっている。この数値の目標値は0.10％以下であり、継続的改善努力が必要である。";

$question[6][2][2] = "不適合件数は、７年間で総数160件、約23件／年である。なお、2018FYは38件、2019FYは39件であった。";

$question[6][2][3] = "不適合費用と件数の年平均は、それぞれ約10百万円／年、約10件／年である。";



$interprete[6][0] = "c";
$interprete[6][1] = "";
$interprete[6][2] ="
当社の不適合の概況をお知らせしたく作成した問題です。予備知識無しでも正解は何となくわかったかと思います。不適合費用は平均でROSを約0.2％も押し下げており、大きなものです。不適合撲滅の為、日々業務を管理し、再発防止の為不適合の分析・是正処置を取っていただいていますが、その意義はこのような大きな費用の削減にあります。今後とも損失を少しでも減らせるよう、日々の取組みをよろしくお願いいたします。<br />
※統計ﾃﾞｰﾀの詳細は、2020年6月のﾏﾈｼﾞﾒﾝﾄﾚﾋﾞｭ-資料にあります。
";




$question[7][1][0] = "当社不適合の統計データより②";
$question[7][1][1] = "
2013年度～2019年度の７年間の不適合データを集計したものについて、<u>正しくないもの</u>を１つ選べ。
";


$question[7][2][0] = " ";
$question[7][2][1] = "
業務プロセス別集計では、費用の7年総額は、工事が199百万円、設計が283百万円、調達が78百万円、営業が0百万円である。件数では工事が113件、設計が26件、調達が20件、営業が1件である。即ち特徴として、工事は件数が大、設計は1件当たり費用が大（総額も大）という特徴がある。　　　平均費用　工事：1.8百万円／件　　　設計：10.9百万円／件
";

$question[7][2][2] = "
事業分野別集計では、費用は高圧PLが149百万円、中圧PLが144百万円、プラント（製鉄所含む）が229百万円、水道が38百万円である。
";

$question[7][2][3] = "
度数分布で整理すると、1件当たりの不適合費用は、平均値の3.5百万円付近が最も多い。
";





$interprete[7][0] = "c";
$interprete[7][1] = "";
$interprete[7][2] = "
これも、当社の不適合の概況をお知らせしたく作成した問題で、予備備知識無くとも正解は何となくわかったかと思います。
平均値は3.5百万円ですが、図の通り、実は1件あたり100万円以下のものが最も多く約70%を占めています。なお、1件あたりは数千円～1億円近いものまであり、千差万別です。但し、費用と『ミスの大きさ』は必ずしも一致するわけでは無く、1つ1つの基本を守る、という事が重要となります。<br />
※統計ﾃﾞｰﾀの詳細は、2020年6月のﾏﾈｼﾞﾒﾝﾄﾚﾋﾞｭ-資料にあります。
<br />
<img src='../../image/test78/g.PNG' />
";

?>