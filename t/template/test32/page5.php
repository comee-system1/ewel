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
			<p>問13．あなたの直属の上司から、仕事に関わるあなたの良いところを指摘されたご経験がありますか。1～2の中から1つ選択してください。</p>
			<table class="table2">
<?PHP
				$on1 = "off";
				$on2 = "off";
				$chk1 = "";
				$chk2 = "";
				if($tdetail[ 'ans47' ] == 1){
					$on1  = "on";
					$chk1 = "checked";
				}
				if($tdetail[ 'ans47' ] == 2){
					$on2  = "on";
					$chk2 = "checked";
				}
				
?>
				<tr>
					<td>
						<div class="indent" ><input type="radio" name="sec[47]" value="1" id="chk_13_1" class="chk13" <?=$chk1?>></div>
						<img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img13" id="img_13_1" />
					</td>
					<td class="radio" id="td_13_1">1.ある</td>
				</tr>
				<tr>
					<td>
						<div class="indent" ><input type="radio" name="sec[47]" value="2" id="chk_13_2" class="chk13" <?=$chk2?>></div>
						<img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img13" id="img_13_2" />
					</td>
					<td class="radio" id="td_13_2">2.ない</td>
				</tr>
			</table>
		</div>
		<div id="disp">
			<div class="ques">
				<p>問14．あると回答した方にお聞きします。あなたの直属の上司から、仕事に関わるあなたの<u>良いところ</u>を指摘されたご経験のなかで、一番最近のものを思い出し、その内容を簡単にお書きください。 </p>
				(<input type="text" name="sec[48]" value="<?=$tdetail[ 'ans48' ]?>" class="w500" id="ans48" >)
				
			</div>

			<div class="ques">
				<p>問15．問14の指摘を受けたことによって、以下のような変化がありましたか。 ＡとＢのどちらに近いかについて、それぞれ1つ選択してください。 </p>
				<table class="table">
					<tr>
						<th>Ａ</th>
						<th>Ａに近い</th>
						<th>どちらかと<br />いえばＡ</th>
						<th>どちらとも<br />いえない</th>
						<th>どちらかと<br />いえばＢ</th>
						<th>Ｂに近い</th>
						<th>Ｂ</th>
					</tr>

<?PHP
				foreach($q15 as $key=>$val){
					$no  = $key-48;
					$ans = "ans".$key;
?>
				<tr>
					<td style="text-align:left;"><?=$val[0]?></td>
<?PHP
					for($i=1;$i<=5;$i++){
						
						$chk = "";
						$on  = "off";
						if($tdetail[ $ans] == $i){
							$chk ="CHECKED";
							$on  = "on";
						}
?>
						<td class="w80">
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_15<?=$key?>_<?=$i?>" class="chk15_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img15<?=$key?>" id="img_15<?=$key?>_<?=$i?>" />
						</td>
<?PHP
					}
?>
					<td style="text-align:left;"><?=$val[1]?></td>
				</tr>
<?PHP
				}
?>
				</table>
			</div>


			<div class="ques">
				<p>問16．引き続き、問14で思い浮かべた、あなたの直属の上司に良いところを指摘されたご経験についてうかがいます。以下のことは、その指摘の内容にあてはまりますか。それぞれ1つ選択してください。 </p>
				<table class="table">
					<tr>
						<th>&nbsp;</th>
						<th>はい</th>
						<th>いいえ</th>
					</tr>

<?PHP
				$no = 1;
				foreach($q16 as $key=>$val){
					
					$ans = "ans".$key;
?>
				<tr>
					<td class="left">(<?=$no?>)<?=$val?></td>
<?PHP
					for($i=1;$i<=2;$i++){
						
						$chk = "";
						$on  = "off";
						if($tdetail[ $ans] == $i){
							$chk ="CHECKED";
							$on  = "on";
						}
?>
						<td class="w80">
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_16<?=$key?>_<?=$i?>" class="chk16_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img16<?=$key?>" id="img_16<?=$key?>_<?=$i?>" />
						</td>
<?PHP
					}
?>
				</tr>
<?PHP
				$no++;
				}
?>
				</table>
			</div>


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
