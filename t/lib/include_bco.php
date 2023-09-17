<?PHP
class BCOmethod extends method{

	public static $timeleft = 0;
	public static $timeleftminute = 0;
	public static $nowtime = 0;
	public static $collect = 0;
	public static $message = "";
	public static $errmsg  = "";
	public static $check = 0;
	public static $passed = 0;
	public static $namae = "";

	public static $errString=[]; 

	/*********************
	 * エラーメッセージ
	 */
	public function getErrString(){
		$errString[1]['stage'] = "1章";
		$errString[1]['title'] = "ブランド戦略とブランド・マネージャーの役割";
		$errString[1]['text'] = "ブランド戦略の位置づけや、内と外のブランディングを理解できていない恐れがあります。ブランド・マネージャーとして必要な経営者的視点をより意識すると良いでしょう。また、内側と外側に向けたブランディングがあることを意識することも大切です。消費者・顧客へのエクスターナルブランディングだけでなく、一緒にブランドを作り上げる仲間たちへのインターナルブランディングに力を入れる事で、ブランドの浸透が容易になる場合があります。";

		$errString[2]['stage'] = "2章";
		$errString[2]['title'] = "ブランドとは何か？";
		$errString[2]['text'] = "ブランドの定義をしっかりと意識しましょう。またブランドが消費者・顧客の意思決定を大きく左右する事、ブランドプラス・マイナスの状態があることも認識し、プラスの状態を保つ取り組みを続けましょう。ブランドを資産と捉えることも大切な視点です。";

		$errString[3]['stage'] = "3章";
		$errString[3]['title'] = "ブランドの歴史";
		$errString[3]['text'] = "実際の実務において、歴史的背景は直接的に関係はないかもしれませんが、知っておくことで説得力が増すでしょう。また、ブランドは作るだけではなく、守り育てていく必要があります。そのため、専門家任せにするだけでなく、法律的な知識も知っておく方が有利です。";


		$errString[4]['stage'] = "4章";
		$errString[4]['title'] = "ブランドの対象と種類";
		$errString[4]['text'] = "ブランドの階層を意識できていますか？ブランディングに取り組むうえで、ブランド化の対象をしっかりと意識できていないと、途中で矛盾が生じてしまいます。自身が取り組むべきブランドはどの位置にあるのか。常に意識する視点を持ちましょう。";

		$errString[5]['stage'] = "5章";
		$errString[5]['title'] = "ブランドの想起";
		$errString[5]['text'] = "ブランドの想起を2つに分解して考える事は、ブランド戦略を効果的に進めていくうえで欠かせません。ブランド再認とブランド再生の違いと、その関係性について、復習し理解を深めましょう。ただ知られれば良いだけではなく、消費者・顧客のニーズと結びついて想起されなくてはなりません。";

		$errString[6]['stage'] = "6章";
		$errString[6]['title'] = "ブランド構築の概略";
		$errString[6]['text'] = "ブランディングを行う上で重要な体系図は理解できていますか？ブランディングとは、ブランド・アイデンティティとブランド・イメージをイコールにする作業です。消費者・顧客の心の中で起こるブランド・イメージをどのように引き出すかが、ブランディングを行う上でとても重要なポイントです。";

		$errString[7]['stage'] = "7章";
		$errString[7]['title'] = "ブランド要素とブランド体験";
		$errString[7]['text'] = "消費者・顧客のブランド・イメージを形作るものが、ブランド要素とブランド体験です。しっかりと認識できていないと、ブランディングそのものが無駄になってしまいます。自身のブランドにどういったブランド要素とブランド体験が必要なのか。どのように設計していくのかの理解を深めましょう。また、日頃自身が消費者・顧客として触れているブランドを観察することも重要な学びにつながります。";

		$errString[8]['stage'] = "8章";
		$errString[8]['title'] = "ブランドの重要性";
		$errString[8]['text'] = "ブランドがなぜ重要なのか。ただ漠然と思うだけでなく、項目に分けて理解しておきましょう。消費者・顧客にとっての利益と、企業にとっての利益はそれぞれ異なりますが、効果的にブランディングを行う事で、その多くを解決させることができます。";


		$errString[9]['stage'] = "9章";
		$errString[9]['title'] = "ブランド構築におけるマーケティング";
		$errString[9]['text'] = "マーケティング戦略は経営戦略をもとに顧客にフォーカスし、コミュニケーション戦略と一体となる、ブランド戦略の中でも重要なものです。マーケティングの基本概念である「価値交換」をしっかりと意識することで、売込みではなく消費者・顧客に心から喜んでもらえる商品・サービスを作り出すことができるでしょう。そうすることで、商品・サービスはひとりでに売れていく理想的な状態に近づきます。";

		$errString[10]['stage'] = "10章";
		$errString[10]['title'] = "ブランド構築のステップ";
		$errString[10]['text'] = "ブランド構築のステップは、もっとも効果的にブランディングを行うためのフレームワークです。ケースによって、必ずしもこれがベストだというものではありませんが、しっかりと基本を理解しておくことで、守破離が成り立つのです。自己流になってしまわないよう、基本に立ち戻る姿勢も必要です。";
		$this->errString = $errString;
	}
	/********************
	 * テストデータ取得
	 */
	public function getTest(){
		$sql = "
			SELECT 
				minute_rest 
			FROM 
				t_test
			WHERE
				test_id=? AND 
				type=?
		";
		$stmt = $this->db->prepare($sql);
		$param[]=$_SESSION[ 'visit' ][ 'test_id' ];
		$param[]=76;
		$stmt->execute($param);
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$this->timeleftminute = $results[0]['minute_rest'];
		return $results[0];

	}
	/**********************
	 * テストデータ登録
	 */
	public function setBasicOnline($edit = [],$status=0){
		$sql = "
			SELECT 
				MAX(id) as max,
				nowtime,
				timeleft
			FROM
				basiconline
			WHERE
				(testpaper_id = ? AND
				status != 2 AND 
				nowtime < timeleft ) ||
				(testpaper_id = ? AND
				status = 2  AND 
				passed = 1
				) 
				
		";
		$stmt = $this->db->prepare($sql);
		$param=[];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];

		$stmt->execute($param);
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if($results['0'][ 'max' ] > 0){
			$set = "";
			$param = [];
			$now = time();
			foreach($edit as $value){
				$set .= $value['key']."=?,";
				$param[] = $value['value'];
			}
			if($_SESSION[ 'visit' ][ 'fin' ] != 1){
				$set .= "nowtime=".$now.",";
			}
			$set .= "status=?";
			$sql = " UPDATE basiconline SET ".$set."
				WHERE
				id = ? AND 
				status != 2
			";
			$stmt = $this->db->prepare($sql);
			$param[]=$status;
			$param[]=$results[0]['max'];

			$stmt->execute($param);
			
			$this->nowtime = (int)$now;
			$this->timeleft = (int)$results['0']['timeleft'];
			
		}else{
			$now = time();
			$timeleft = $this->timeleftminute*60+$now;
			$sql = "
				INSERT INTO basiconline(
					testpaper_id,
					status,
					nowtime,
					timeleft,
					regist_ts
				)VALUES(
					?,?,?,?,?
				)
			";
			$stmt = $this->db->prepare($sql);
			$param = [];
			$param[]=$_SESSION[ 'visit' ][ 'login_id' ];
			$param[]=$status;
			$param[]=$now;
			$param[]=$timeleft;
			$param[]=date("Y-m-d H:i:s");
			$stmt->execute($param);
			$this->nowtime = (int)$now;
			$this->timeleft = (int)$timeleft;
		}


	}
	/**********************
	 * テスト結果データ取得
	 */
	public function getBasicOnline(){
		$sql = "
			SELECT 
				*
			FROM
				basiconline
			WHERE
				testpaper_id = ? AND
				id = (SELECT MAX(id) FROM basiconline WHERE testpaper_id=?    ) AND 
				nowtime < timeleft
		";

		$stmt = $this->db->prepare($sql);
		$param=[];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];

		$stmt->execute($param);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result[0];
	}
	/**********************
	 * 終了データ
	 */
	public function getBasicOnlineFin(){
		$sql = "
			SELECT name FROM t_testpaper WHERE id=?  
			";
		$stmt = $this->db->prepare($sql);
		$param=[];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];
		$stmt->execute($param);
		$result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$this->namae = $result2[0][ 'name' ];

		$sql = "
			SELECT 
				*
			FROM
				basiconline
			WHERE
				testpaper_id = ? AND
				id = (SELECT MAX(id) FROM basiconline WHERE testpaper_id=? AND status >= 1  ) AND 
				status >= 1 
		";
		$stmt = $this->db->prepare($sql);
		$param=[];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];
		$param[]=$_SESSION[ 'visit' ][ 'login_id' ];

		$stmt->execute($param);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result[0];
	}

	/**********************
	 * 終了データ
	 */
	public function getBasicOnlineAdmin($where){
		

		$sql = "
			SELECT 
				*
			FROM
				basiconline
			WHERE
				testpaper_id = (SELECT id FROM t_testpaper WHERE testgrp_id=? AND exam_id=? AND partner_id=? AND customer_id=?) AND 
				status >= 1 
				ORDER BY id DESC
				LIMIT 1
		";

		$stmt = $this->db->prepare($sql);
		$param=[];
		$param[]=$where[ 'testgrp_id' ];
		$param[]=$where[ 'exam_id' ];
		$param[]=$where[ 'partner_id' ];
		$param[]=$where[ 'customer_id' ];

		$stmt->execute($param);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result[0];
	}

	/*********************
	 * エラーチェック
	 */
	public function errorCheck($key){
		$errormsg = "";
		if($key == 2){
			if(!$_REQUEST[ 'ans1' ]) $errormsg .= "1の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans2' ]) $errormsg .= "1の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans3' ]) $errormsg .= "1の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans4' ]) $errormsg .= "1の空欄(4)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans5' ]) $errormsg .= "2の(ア)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans6' ]) $errormsg .= "2の(イ)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans7' ]) $errormsg .= "2の(ウ)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans8' ]) $errormsg .= "2の(エ)が選択されていません。<br />";
		}
		if($key == 3){
			if(!$_REQUEST[ 'ans9' ]) $errormsg .= "3が選択されていません。<br />";
			if(!$_REQUEST[ 'ans10' ]) $errormsg .= "4が選択されていません。<br />";
		}
		if($key == 4){
			if(!$_REQUEST[ 'ans11' ]) $errormsg .= "5の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans12' ]) $errormsg .= "5の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans13' ]) $errormsg .= "6が選択されていません。<br />";
			if(!$_REQUEST[ 'ans14' ]) $errormsg .= "7が選択されていません。<br />";
			if(!$_REQUEST[ 'ans15' ]) $errormsg .= "8が選択されていません。<br />";
		}
		if($key == 5){
			if(!$_REQUEST[ 'ans16' ]) $errormsg .= "9の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans17' ]) $errormsg .= "10の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans18' ]) $errormsg .= "11の(ア)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans19' ]) $errormsg .= "11の(イ)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans20' ]) $errormsg .= "11の(ウ)が選択されていません。<br />";
		}
		if($key == 6){
			if(!$_REQUEST[ 'ans21' ]) $errormsg .= "12が選択されていません。<br />";
			if(!$_REQUEST[ 'ans22' ]) $errormsg .= "13が選択されていません。<br />";
		}
		if($key == 7){
			if(!$_REQUEST[ 'ans23' ]) $errormsg .= "14が選択されていません。<br />";
			if(!$_REQUEST[ 'ans24' ]) $errormsg .= "15が選択されていません。<br />";
		}
		if($key == 8){
			if(!$_REQUEST[ 'ans25' ]) $errormsg .= "16の1が選択されていません。<br />";
			if(!$_REQUEST[ 'ans26' ]) $errormsg .= "16の2が選択されていません。<br />";
			if(!$_REQUEST[ 'ans27' ]) $errormsg .= "17が選択されていません。<br />";
			if(!$_REQUEST[ 'ans28' ]) $errormsg .= "18が選択されていません。<br />";
		}
		if($key == 9){
			if(!$_REQUEST[ 'ans29' ]) $errormsg .= "19が選択されていません。<br />";
			if(!$_REQUEST[ 'ans30' ]) $errormsg .= "20が選択されていません。<br />";
		}
		if($key == 10){
			if(!$_REQUEST[ 'ans31' ]) $errormsg .= "21が選択されていません。<br />";
			if(!$_REQUEST[ 'ans32' ]) $errormsg .= "22が選択されていません。<br />";
		}
		if($key == 11){
			if(!$_REQUEST[ 'ans33' ]) $errormsg .= "23の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans34' ]) $errormsg .= "23の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans35' ]) $errormsg .= "23の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans36' ]) $errormsg .= "23の空欄(4)が選択されていません。<br />";
		}
		if($key == 12){
			if(!$_REQUEST[ 'ans37' ]) $errormsg .= "24の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans38' ]) $errormsg .= "24の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans39' ]) $errormsg .= "24の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans40' ]) $errormsg .= "25の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans41' ]) $errormsg .= "25の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans42' ]) $errormsg .= "25の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans43' ]) $errormsg .= "25の空欄(4)が選択されていません。<br />";
		}
		if($key == 13){
			if(!$_REQUEST[ 'ans44' ]) $errormsg .= "26が選択されていません。<br />";
			if(!$_REQUEST[ 'ans45' ]) $errormsg .= "27が選択されていません。<br />";
		}
		if($key == 14){
			if(!$_REQUEST[ 'ans46' ]) $errormsg .= "28が選択されていません。<br />";
			if(!$_REQUEST[ 'ans47' ]) $errormsg .= "29が選択されていません。<br />";
			if(!$_REQUEST[ 'ans48' ]) $errormsg .= "30が選択されていません。<br />";
		}
		if($key == 15){
			if(!$_REQUEST[ 'ans49' ]) $errormsg .= "31が選択されていません。<br />";
			if(!$_REQUEST[ 'ans50' ]) $errormsg .= "32が選択されていません。<br />";
		}
		if($key == 16){
			if(!$_REQUEST[ 'ans51' ]) $errormsg .= "33が選択されていません。<br />";
			if(!$_REQUEST[ 'ans52' ]) $errormsg .= "34が選択されていません。<br />";
			if(!$_REQUEST[ 'ans53' ]) $errormsg .= "35が選択されていません。<br />";
		}
		if($key == 17){
			if(!$_REQUEST[ 'ans54' ]) $errormsg .= "36の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans55' ]) $errormsg .= "36の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans56' ]) $errormsg .= "36の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans57' ]) $errormsg .= "37が選択されていません。<br />";
		}
		if($key == 18){
			if(!$_REQUEST[ 'ans58' ]) $errormsg .= "38の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans59' ]) $errormsg .= "38の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans60' ]) $errormsg .= "38の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans61' ]) $errormsg .= "39が選択されていません。<br />";
		}
		if($key == 19){
			if(!$_REQUEST[ 'ans62' ]) $errormsg .= "40の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans63' ]) $errormsg .= "40の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans64' ]) $errormsg .= "40の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans65' ]) $errormsg .= "40の空欄(4)が選択されていません。<br />";
		}
		if($key == 20){
			if(!$_REQUEST[ 'ans66' ]) $errormsg .= "41の空欄(a)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans67' ]) $errormsg .= "41の空欄(b)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans68' ]) $errormsg .= "41の空欄(c)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans69' ]) $errormsg .= "41の空欄(d)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans70' ]) $errormsg .= "41の空欄(e)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans71' ]) $errormsg .= "41の空欄(f)が選択されていません。<br />";
		}
		if($key == 21){
			if(!$_REQUEST[ 'ans72' ]) $errormsg .= "42の空欄(a)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans73' ]) $errormsg .= "42の空欄(b)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans74' ]) $errormsg .= "42の空欄(c)が選択されていません。<br />";
		}
		if($key == 22){
			if(!$_REQUEST[ 'ans75' ]) $errormsg .= "43が選択されていません。<br />";
			if(!$_REQUEST[ 'ans76' ]) $errormsg .= "44が選択されていません。<br />";
		}
		if($key == 23){
			if(!$_REQUEST[ 'ans77' ]) $errormsg .= "45が選択されていません。<br />";
			if(!$_REQUEST[ 'ans78' ]) $errormsg .= "46が選択されていません。<br />";
			if(!$_REQUEST[ 'ans79' ]) $errormsg .= "47が選択されていません。<br />";
			if(!$_REQUEST[ 'ans80' ]) $errormsg .= "48が選択されていません。<br />";
		}
		if($key == 24){
			if(!$_REQUEST[ 'ans81' ]) $errormsg .= "49が選択されていません。<br />";
			if(!$_REQUEST[ 'ans82' ]) $errormsg .= "50の空欄(1)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans83' ]) $errormsg .= "50の空欄(2)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans84' ]) $errormsg .= "50の空欄(3)が選択されていません。<br />";
			if(!$_REQUEST[ 'ans85' ]) $errormsg .= "50の空欄(4)が選択されていません。<br />";
		}
		if($key == 25){
			if(!$_REQUEST[ 'ans86' ]) $errormsg .= "51が選択されていません。<br />";
			if(!$_REQUEST[ 'ans87' ]) $errormsg .= "52が選択されていません。<br />";
			if(!$_REQUEST[ 'ans88' ]) $errormsg .= "53が選択されていません。<br />";
		}


		//エラーがあるときはページを戻す
		if($errormsg){
			$key = $key-1;
			$_SESSION['error'] = "<br />".$errormsg;
		}

		return $key;
	}

	/****************
	 * checkPasswd
	 */
	public function checkPasswd($data,$flg=""){
		//回答
		$answer[1][1]="2";
		$answer[1][2]="3";
		$answer[1][3]="5";
		$answer[1][4]="6";

		$answer[2][5]="2";
		$answer[2][6]="1";
		$answer[2][7]="2";
		$answer[2][8]="1";
		
		$answer[3][9]="2";
		$answer[4][10]="3";

		$answer[5][11]="1";
		$answer[5][12]="3";

		$answer[6][13]="3";
		$answer[7][14]="2";
		$answer[8][15]="1";

		$answer[9][16]="1";
		$answer[10][17]="3";
		$answer[11][18]="2";
		$answer[11][19]="2";
		$answer[11][20]="1";
		
		$answer[12][21]="4";
		$answer[13][22]="5";

		$answer[14][23]="2";
		$answer[15][24]="3";

		$answer[16][25]="1";
		$answer[16][26]="4";
		$answer[17][27]="3";
		$answer[18][28]="2";

		$answer[19][29]="1";
		$answer[20][30]="6";

		$answer[21][31]="2";
		$answer[22][32]="2";

		$answer[23][33]="1";
		$answer[23][34]="7";
		$answer[23][35]="8";
		$answer[23][36]="9";

		$answer[24][37]="1";
		$answer[24][38]="2";
		$answer[24][39]="3";

		$answer[25][40]="1";
		$answer[25][41]="2";
		$answer[25][42]="4";
		$answer[25][43]="5";

		$answer[26][44]="3";
		$answer[27][45]="3";

		$answer[28][46]="3";
		$answer[29][47]="2";
		$answer[30][48]="4";

		$answer[31][49]="1";
		$answer[32][50]="4";

		$answer[33][51]="3";
		$answer[34][52]="2";
		$answer[35][53]="1";

		$answer[36][54]="1";
		$answer[36][55]="2";
		$answer[36][56]="5";
		$answer[37][57]="3";

		$answer[38][58]="4";
		$answer[38][59]="2";
		$answer[38][60]="6";
		$answer[39][61]="5";

		$answer[40][62]="2";
		$answer[40][63]="4";
		$answer[40][64]="3";
		$answer[40][65]="1";
		
		$answer[41][66]="4";
		$answer[41][67]="3";
		$answer[41][68]="6";
		$answer[41][69]="1";
		$answer[41][70]="2";
		$answer[41][71]="5";


		$answer[42][72]="2";
		$answer[42][73]="4";
		$answer[42][74]="3";

		$answer[43][75]="3";
		$answer[44][76]="3";

		$answer[45][77]="3";
		$answer[46][78]="2";
		$answer[47][79]="2";
		$answer[48][80]="1";


		$answer[49][81]="3";
		$answer[50][82]="2";
		$answer[50][83]="1";
		$answer[50][84]="1";
		$answer[50][85]="1";

		$answer[51][86]="1";
		$answer[52][87]="1";
		$answer[53][88]="2";

		$ans = []; //章ごとに成否を取得
		foreach($answer as $keys=>$values){
			foreach($values as $k=>$val){
				$select = "select".$k;
				//no40とno41については別回答を用意
				if($keys == 25 && $data['select40'] == 2 && $data['select41'] == 1){
					$ans[$keys][$k]=true;
				}else
				if($keys == 25 && $data['select40'] ==  $data['select41']){
					$ans[$keys][$k]=false;
				}else
				if($data[$select] == $val){
					$ans[$keys][$k]=true;
				}else{
					$ans[$keys][$k]=false;

				}
			}
		}

		$check = []; //成否数の総数を章ごとに取得
		//1つでもfalseがあれば間違い
		foreach($ans as $key=>$value){
			foreach($value as $k=>$v){
				if($v == false){
					$check[$key] = false;
					break;
				}else{
					$check[$key] = true;
				}
			}
		}
		

		
		$set = [];
		$cnt = 0;
		$k = 0;
		$this->check = $check;
		

		foreach($check as $key=>$val){
			$code = "ans".$key;
			if($val){$flg=1;$cnt++;}
			if(!$val){$flg=0;}
			$set[$k]['value'] = $flg;
			$set[$k]['key'] = $code;
			$k++;
		}

		$this->collect = $cnt;
		//各章ごとの成否の数を取得
		$stage[1] = [1,4];
		$stage[2] = [5,11];
		$stage[3] = [12,15];
		$stage[4] = [16,18];
		$stage[5] = [19,22];
		$stage[6] = [23,25];
		$stage[7] = [26,30];
		$stage[8] = [31,35];
		$stage[9] = [36,40];
		$stage[10] = [41,53];
		//1章
		$counts = [];
		foreach($stage as $key=>$values){
			for($i=$values[0];$i<=$values[1];$i++){
				if($check[$i] == false) $counts[$key]['false'] += 1;
				if($check[$i] == true) $counts[$key]['true'] += 1;
			}
		}

		//優先低い　2問　間違った章を表示 複数ある場合は、より後半の章を優先する 
		//優先高い　3問以上間違えた章を表示 複数ある場合は、より後半の章を優先する
		$errCheck = "";
		foreach($counts as $key=>$value){
			if($value[ 'false' ] >= 2){
				$errCheck = $key;
			}
		}
		//3問以上間違えているものがあれば上書き
		foreach($counts as $key=>$value){
			if($value[ 'false' ] >= 3){
				$errCheck = $key;
			}
		}

		
		$this->getErrString();
		$this->errmsg = "";
		if($cnt < COLLECT_NUM){
			$passed =2;
			$this->message = "
			正答数が42問未満のため、<span class='text-red f22'>再試験</span>が必要です。<br />
			不正解のある章を再度確認し、再試験をおこなってください。
			
			";
			
			if($cnt <= 31){
				$this->errmsg .= "
				全般的に理解が不十分である可能性があります。不正解が多かった章を正誤表で確認し、それらの章を中心に復習することをお奨めします。テキストやeラーニング動画（オンライン講座受講の場合）をご活用ください。<br />
					";
			}else{
				$this->errmsg .= "■テキストにて以下の章を復習してください。<br />";
				//3問以上間違えたものを表示
				$this->errmsg .= $this->errString[$errCheck]['stage'];
				$this->errmsg .= $this->errString[$errCheck]['title']."<br />";
				$this->errmsg .= $this->errString[$errCheck]['text'];
			}
		}else{
			//合格
			$this->message = "ブランドマネージャー2級資格に<span class='text-red f22'>合格</span>です。<br />
			後ほど、登録されているメールアドレスに認定証データをお送りします。
			";
			$passed =1;
		}

		$set[$k]['value'] = $passed;
		$set[$k]['key'] = "passed";
		$status = 2;
		$this->passed = $passed;

		if($flg && $flg == "admin"){ return true; }

		if($_SESSION[ 'visit' ][ 'fin' ] != 1){
			$this->setBasicOnline($set,$status);
		}
		return $passed;

	}

	/***********************
	 * PDF作成
	 */
	public function createBCOPdf(){


		exit();
	}
}


?>