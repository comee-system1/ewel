<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="f18">
			以下、設問です。<br />
			設問を読み、回答して下さい。
		</p>
		<p class="f18 mt30">
			設問１．<br />
			前職で、病気による連続した欠勤日数は１年間に最大何日程度ありましたか？
		</p>
		<p class="f18 blocks pd0">
			回答
		</p>
<?PHP
		$chk = array();
		if($_REQUEST[ 'answer1' ] == 1){
			$chk[1] = "CHECKED";
		}
		if($_REQUEST[ 'answer1' ] == 2){
			$chk[2] = "CHECKED";
		}
		if($_REQUEST[ 'answer1' ] == 3){
			$chk[3] = "CHECKED";
		}
		if($_REQUEST[ 'answer1' ] == 4){
			$chk[4] = "CHECKED";
		}
?>
<?PHP
		if($err[1]){
?>
			<p class="error"><?=$err[1]?></p>
<?PHP
		}
?>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer1" value="1" class="radio answer1" id="answer1_1" <?=$chk[1]?> ></dt>
			<dd><label for="answer1_1" ><?=$array_exam[1][1]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer1" value="2" class="radio answer1" id="answer1_2"  <?=$chk[2]?> ></dt>
			<dd><label for="answer1_2" ><?=$array_exam[1][2]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer1" value="3" class="radio answer1" id="answer1_3" <?=$chk[3]?> ></dt>
			<dd><label for="answer1_3" ><?=$array_exam[1][3]?></label></dd>
		</dl>
		<ul class="f18  pd0 mgl100 listNon">
			<li>何日日程度ですか。また理由をお答えください。</li>
			<li>休んだ日数：(<input type="text" name="answer1_holiday" id="answer1_holiday" value="<?=$_REQUEST[ 'answer1_holiday' ]?>" class="pd5 f18 w60" maxlength=3 />日)<span style="color:red;font-size:12px;">半角数字のみ</span>
			</li>
			<li class="mt5">理由：(<input type="text" name="answer1_reason" id="answer1_reason" value="<?=$_REQUEST[ 'answer1_reason' ]?>" class="pd5 f18 w80p" />)
			</li>
		</ul>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer1" value="4" class="radio answer1" id="answer1_4" <?=$chk[4]?> ></dt>
			<dd><label for="answer1_4" ><?=$array_exam[1][4]?></label></dd>
		</dl>

<?PHP
		$chk = array();
		if($_REQUEST[ 'answer2' ] == 1){
			$chk[1] = "CHECKED";
		}
		if($_REQUEST[ 'answer2' ] == 2){
			$chk[2] = "CHECKED";
		}
		if($_REQUEST[ 'answer2' ] == 3){
			$chk[3] = "CHECKED";
		}
?>
		<p class="f18 mt30">
			設問２．<br />
			過去５年の間（現在を含む）に、医師から脳や心臓、血圧関連の異常を指摘されたことがありますか。
		</p>
<?PHP
		if($err[2]){
?>
			<p class="error"><?=$err[2]?></p>
<?PHP
		}
?>
		<p class="f18 blocks pd0">
			回答
		</p>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer2" value="1" class="radio answer2" id="answer2_1" <?=$chk[1]?> ></dt>
			<dd><label for="answer2_1" ><?=$array_exam[2][1]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer2" value="2" class="radio answer2" id="answer2_2" <?=$chk[2]?> ></dt>
			<dd><label for="answer2_2" ><?=$array_exam[2][2]?></label></dd>
		</dl>
		<ul class="f18  pd0 mgl100 listNon">
			<li>それはいつ頃ですか？
				(西暦<input type="text" name="answer2_year" id="answer2_year" value="<?=$_REQUEST[ 'answer2_year' ]?>" class="pd5 f18 w60" maxlength=4 />年
				<input type="text" name="answer2_month" id="answer2_month" value="<?=$_REQUEST[ 'answer2_month' ]?>" class="pd5 f18 w60" maxlength=2 />月頃)				<span style="color:red;font-size:12px;">半角数字のみ　例)2005年1月</span>
			
			</li>
			<li class="mt5">病名・症状を記入してください。<br />
			(<input type="text" name="answer2_disease" id="answer2_disease" value="<?=$_REQUEST[ 'answer2_disease' ]?>" class="pd5 f18 w80p" />)</li>
		</ul>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer2" value="3" class="radio answer2" id="answer2_3" <?=$chk[3]?> ></dt>
			<dd><label for="answer2_3" ><?=$array_exam[2][3]?></label></dd>
		</dl>

<?PHP
		$chk = array();
		if($_REQUEST[ 'answer3' ] == 1){
			$chk[1] = "CHECKED";
		}
		if($_REQUEST[ 'answer3' ] == 2){
			$chk[2] = "CHECKED";
		}
		if($_REQUEST[ 'answer3' ] == 3){
			$chk[3] = "CHECKED";
		}
?>
		<p class="f18 mt30">
			設問３．<br />
			過去５年の間（現在を含む）に、設問２以外に身体面、精神面を問わず、医師から病気（疾患）と診断されたことがありますか。
		</p>
		<p class="f18 blocks pd0">
			回答
		</p>
<?PHP
		if($err[3]){
?>
			<p class="error"><?=$err[3]?></p>
<?PHP
		}
?>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer3" value="1" class="radio answer3" id="answer3_1" <?=$chk[1]?> ></dt>
			<dd><label for="answer3_1" ><?=$array_exam[3][1]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer3" value="2" class="radio answer3" id="answer3_2" <?=$chk[2]?> ></dt>
			<dd><label for="answer3_2" ><?=$array_exam[3][2]?></label></dd>
		</dl>
		<ul class="f18  pd0 mgl100 listNon">
			<li>それはいつ頃ですか？
				(西暦<input type="text" name="answer3_year" id="answer3_year" value="<?=$_REQUEST[ 'answer3_year' ]?>" class="pd5 f18 w60" maxlength=4 />年
				<input type="text" name="answer3_month" id="answer3_month" value="<?=$_REQUEST[ 'answer3_month' ]?>" class="pd5 f18 w60" maxlength=2 />月頃)				<span style="color:red;font-size:12px;">半角数字のみ　例)2005年1月</span>
			
			</li>
			<li>病名・症状を記入してください。<br />
			(<input type="text" name="answer3_disease" id="answer3_disease" value="<?=$_REQUEST[ 'answer3_disease' ]?>" class="pd5 f18 w80p" />)</li>
		</ul>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer3" value="3" class="radio answer3" id="answer3_3" <?=$chk[3]?> ></dt>
			<dd><label for="answer3_3" ><?=$array_exam[3][3]?></label></dd>
		</dl>
		
<?PHP
		$chk = array();
		if($_REQUEST[ 'answer4' ] == 1){
			$chk[1] = "CHECKED";
		}
		if($_REQUEST[ 'answer4' ] == 2){
			$chk[2] = "CHECKED";
		}
		if($_REQUEST[ 'answer4' ] == 3){
			$chk[3] = "CHECKED";
		}
?>
		<p class="f18 mt30">
			設問４．<br />
			入社された場合、弊社は上記を踏まえたうえで、可能な配慮（勤務における安全配慮）をしたいと思います。就業にあたり、健康面について何か配慮が必要ですか（配慮を希望されますか）。
			<br />
			ご希望があれば、入力してください。<br />
			（例：定期通院のための欠勤を認めてほしい、服薬治療の継続のため休憩を決まった時間にとりたい、1時間以上の残業や休日出勤はできない、、1時間毎に休憩させてほしい、など）
		</p>
		<p class="f18 blocks pd0">
			回答
		</p>
<?PHP
		if($err[4]){
?>
			<p class="error"><?=$err[4]?></p>
<?PHP
		}
?>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer4" value="1" class="radio answer4" id="answer4_1" <?=$chk[1]?> ></dt>
			<dd><label for="answer4_1" ><?=$array_exam[4][1]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer4" value="2" class="radio answer4" id="answer4_2" <?=$chk[2]?> ></dt>
			<dd><label for="answer4_2" ><?=$array_exam[4][2]?></label></dd>
		</dl>
		<ul class="f18  pd0 mgl100 listNon">
			<li>具体的に希望内容をご回答ください。<br />
			(<input type="text" name="answer4_disease" id="answer4_disease" value="<?=$_REQUEST[ 'answer4_disease' ]?>" class="pd5 f18 w80p" />)</li>
		</ul>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer4" value="3" class="radio answer4" id="answer4_3" <?=$chk[3]?> ></dt>
			<dd><label for="answer4_3" ><?=$array_exam[4][3]?></label></dd>
		</dl>



<?PHP
		$chk = array();
		if($_REQUEST[ 'answer5' ] == 1){
			$chk[1] = "CHECKED";
		}
		if($_REQUEST[ 'answer5' ] == 2){
			$chk[2] = "CHECKED";
		}
		if($_REQUEST[ 'answer5' ] == 3){
			$chk[3] = "CHECKED";
		}
		if($_REQUEST[ 'answer5' ] == 4){
			$chk[4] = "CHECKED";
		}
?>
		<p class="f18 mt30">
			設問５．<br />
			パートナーエージェントの会員であった、若しくは会員である。
			
		</p>
		<p class="f18 blocks pd0">
			回答
		</p>
<?PHP
		if($err[5]){
?>
			<p class="error"><?=$err[5]?></p>
<?PHP
		}
?>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer5" value="1" class="radio answer5" id="answer5_1" <?=$chk[1]?> ></dt>
			<dd><label for="answer5_1" ><?=$array_exam[5][1]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer5" value="2" class="radio answer5" id="answer5_2" <?=$chk[2]?> ></dt>
			<dd><label for="answer5_2" ><?=$array_exam[5][2]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer5" value="3" class="radio answer5" id="answer5_3" <?=$chk[3]?> ></dt>
			<dd><label for="answer5_3" ><?=$array_exam[5][3]?></label></dd>
		</dl>
		<dl class="f18  pd0 mgl20">
			<dt><input type="radio" name="answer5" value="4" class="radio answer5" id="answer5_4" <?=$chk[4]?> ></dt>
			<dd><label for="answer5_4" ><?=$array_exam[5][4]?></label></dd>
		</dl>

		<div class="center">
			<input type="submit" name="result" value="終了" class="button" id="result">
		</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">

	</form>
	<input type="hidden" id="alerts" value="<?=$alert?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
