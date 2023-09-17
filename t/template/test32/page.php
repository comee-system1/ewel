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
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<div class="f18">
		<div class="ques">
			<p>問1．現在のお勤め先での勤続年数を（）の中に半角数字を記入してください。1年未満の方は、「1」と記入して下さい。 </p>
			(<input type="text" name="sec[1]" value="<?=$tdetail[ 'ans1' ]?>" id="ans1" class="w30" maxlength="2">)年
		</div>
		<div class="ques">
			<p>問2．現在の役職あるいは就業形態について選択してください。1～6の中から1つ選択してください。6を選択した方は、具体的に記入してください。</p>
<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			$chk6 = "";
			$on1  = "off";
			$on2  = "off";
			$on3  = "off";
			$on4  = "off";
			$on5  = "off";
			$on6  = "off";
			switch($tdetail[ 'ans2' ]){
				case "1":
					$chk1 = "CHECKED";
					$on1 = "on";
				break;
				case "2":
					$chk2 = "CHECKED";
					$on2 = "on";
				break;
				case "3":
					$chk3 = "CHECKED";
					$on3 = "on";
				break;
				case "4":
					$chk4 = "CHECKED";
					$on4 = "on";
				break;
				case "5":
					$chk5 = "CHECKED";
					$on5 = "on";
				break;
				case "6":
					$chk6 = "CHECKED";
					$on6 = "on";
				break;
			}
?>
			<ol>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="1" id="chk_2_1" <?=$chk1?> class="chk2" ></div>
					<div class="radio" id="d_2_1" ><img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img2" id="img_2_1" />部長・課長</div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="2" id="chk_2_2" <?=$chk2?> class="chk2"></div>
					<div class="radio" id="d_2_2" ><img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img2" id="img_2_2" />
					係長・主任</div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="3" id="chk_2_3" <?=$chk3?> class="chk2"></div>
					<div class="radio" id="d_2_3" ><img src="<?=D_URL_TEST?>image/check_<?=$on3?>.gif" class="radio img2" id="img_2_3" />
					一般社員 </div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="4" id="chk_2_4" <?=$chk4?> class="chk2"></div>
					<div class="radio" id="d_2_4" ><img src="<?=D_URL_TEST?>image/check_<?=$on4?>.gif" class="radio img2" id="img_2_4" />
					契約・派遣社員</li>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="5" id="chk_2_5" <?=$chk5?> class="chk2"></div>
					<div class="radio" id="d_2_5" ><img src="<?=D_URL_TEST?>image/check_<?=$on5?>.gif" class="radio img2" id="img_2_5" />
					パート・アルバイト</li>
				<li>
					<div class="indent"><input type="radio" name="sec[2]" value="6" id="chk_2_6" <?=$chk6?> class="chk2"></div>
					<div class="radio" id="d_2_6" ><img src="<?=D_URL_TEST?>image/check_<?=$on6?>.gif" class="radio img2" id="img_2_6" />
					その他(<input type="text" name="ans2_other" value="<?=$tdetail[ 'ans2_other' ]?>" class="w600 radio" id="txt_2_6" >)</li>

			</ol>
		</div>

<?PHP
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			$chk6 = "";
			$chk7 = "";
			$chk8 = "";
			$chk9 = "";
			$on1  = "off";
			$on2  = "off";
			$on3  = "off";
			$on4  = "off";
			$on5  = "off";
			$on6  = "off";
			$on7  = "off";
			$on8  = "off";
			$on9  = "off";

			switch($tdetail[ 'ans3' ]){
				case "1":
					$chk1 = "CHECKED";
					$on1 = "on";
				break;
				case "2":
					$chk2 = "CHECKED";
					$on2 = "on";
				break;
				case "3":
					$chk3 = "CHECKED";
					$on3 = "on";
				break;
				case "4":
					$chk4 = "CHECKED";
					$on4 = "on";
				break;
				case "5":
					$chk5 = "CHECKED";
					$on5 = "on";
				break;
				case "6":
					$chk6 = "CHECKED";
					$on6 = "on";
				break;
				case "7":
					$chk7 = "CHECKED";
					$on7 = "on";
				break;
				case "8":
					$chk8 = "CHECKED";
					$on8 = "on";
				break;
				case "9":
					$chk9 = "CHECKED";
					$on9 = "on";
				break;
			}
?>

		<div class="ques">
			<p>問3．あなたの職種について選択してください。1～9の中から1つ選択してください。9を選択した方は、具体的に記入してください。 </p>
			<ol>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="1" id="chk_3_1" <?=$chk1?> class="chk3" ></div>
					<div class="radio" id="d_3_1" ><img src="/image/check_<?=$on1?>.gif" class="radio img3" id="img_3_1" />
					企画・管理</div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="2" id="chk_3_2" <?=$chk2?> class="chk3" ></div>
					<div class="radio" id="d_3_2" ><img src="/image/check_<?=$on2?>.gif" class="radio img3" id="img_3_2" />
					一般事務</div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="3" id="chk_3_3" <?=$chk3?> class="chk3" ></div>
					<div class="radio" id="d_3_3" ><img src="/image/check_<?=$on3?>.gif" class="radio img3" id="img_3_3" />
					営業・販売 </div></li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="4" id="chk_3_4" <?=$chk4?> class="chk3" ></div>
					<div class="radio" id="d_3_4" ><img src="/image/check_<?=$on4?>.gif" class="radio img3" id="img_3_4" />
					企画営業・コンサルティング</li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="5" id="chk_3_5" <?=$chk5?> class="chk3" ></div>
					<div class="radio" id="d_3_5" ><img src="/image/check_<?=$on5?>.gif" class="radio img3" id="img_3_5" />
					ＳＥ・プログラマー</li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="6" id="chk_3_6" <?=$chk6?> class="chk3" ></div>
					<div class="radio" id="d_3_6" ><img src="/image/check_<?=$on6?>.gif" class="radio img3" id="img_3_6" />
					技術開発</li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="7" id="chk_3_7" <?=$chk7?> class="chk3" ></div>
					<div class="radio" id="d_3_7" ><img src="/image/check_<?=$on7?>.gif" class="radio img3" id="img_3_7" />
					研究職</li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="8" id="chk_3_8" <?=$chk8?> class="chk3" ></div>
					<div class="radio" id="d_3_8" ><img src="/image/check_<?=$on8?>.gif" class="radio img3" id="img_3_8" />
					生産・製造</li>
				<li>
					<div class="indent"><input type="radio" name="sec[3]" value="9" id="chk_3_9" <?=$chk9?> class="chk3" ></div>
					<div class="radio" id="d_3_9" ><img src="/image/check_<?=$on9?>.gif" class="radio img3" id="img_3_9" />
					その他(<input type="text" name="ans3_other" value="<?=$tdetail[ 'ans3_other' ]?>" class="w600 radio" id="txt_3_9" >)</li>

			</ol>
		</div>


	</div>
	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" class="button">
<?PHP
	}
?>
<?PHP

	if($pager == $max){
		$btn = "結果表示";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">

	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
		<input type="hidden" name="pageFlg" value="" id="pageFlg" >

	</form>
		<input type="hidden"  value="<?=count($exam)?>" id="count" >

	</div>

<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
