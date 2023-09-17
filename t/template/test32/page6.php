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
			<p>問17．次に、あなたの直属の上司から、仕事に関わるあなたの悪いところを指摘されたご経験がありますか。1～2の中から1つ選択してください。 </p>
			<table class="table2">
<?PHP
				$on1 = "off";
				$on2 = "off";
				$chk1 = "";
				$chk2 = "";
				if($tdetail[ 'ans66' ] == 1){
					$on1  = "on";
					$chk1 = "checked";
				}
				if($tdetail[ 'ans66' ] == 2){
					$on2  = "on";
					$chk2 = "checked";
				}
				
?>
				<tr>
					<td>
						<div class="indent" ><input type="radio" name="sec[66]" value="1" id="chk_17_1" class="chk17" <?=$chk1?>></div>
						<img src="<?=D_URL_TEST?>image/check_<?=$on1?>.gif" class="radio img17" id="img_17_1" />
					</td>
					<td class="radio" id="td_17_1">1.ある</td>
				</tr>
				<tr>
					<td>
						<div class="indent" ><input type="radio" name="sec[66]" value="2" id="chk_17_2" class="chk17" <?=$chk2?>></div>
						<img src="<?=D_URL_TEST?>image/check_<?=$on2?>.gif" class="radio img17" id="img_17_2" />
					</td>
					<td class="radio" id="td_17_2">2.ない</td>
				</tr>
			</table>
		</div>
		<div id="disp2">
			<div class="ques">
				<p>問18．あると回答した方にお聞きします。あなたの直属の上司から、仕事に関わるあなたの<u>悪いところ</u>を指摘されたご経験のなかで、一番最近のものを思い出し、その内容を簡単にお書きください。 </p>
				(<input type="text" name="sec[67]" value="<?=$tdetail[ 'ans67' ]?>" class="w500" id="ans67" >)
				
			</div>

			<div class="ques">
				<p>問19．問18の指摘を受けたことによって、以下のような変化がありましたか。 ＡとＢのどちらに近いかについて、それぞれ1つ選択してください。 </p>
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
				foreach($q19 as $key=>$val){
					$no  = $key-48;
					$ans = "ans".$key;
?>
				<tr>
					<td><?=$val[0]?></td>
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_19<?=$key?>_<?=$i?>" class="chk19_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img19<?=$key?>" id="img_19<?=$key?>_<?=$i?>" />
						</td>
<?PHP
					}
?>
					<td><?=$val[1]?></td>
				</tr>
<?PHP
				}
?>
				</table>
			</div>


			<div class="ques">
				<p>問20．引き続き、問18で思い浮かべた、あなたの直属の上司に<u>悪いところ</u>を指摘されたご経験についてうかがいます。以下のことは、その指摘の内容にあてはまりますか。それぞれ1つ選択してください。 </p>
				<table class="table">
					<tr>
						<th>&nbsp;</th>
						<th>はい</th>
						<th>いいえ</th>
					</tr>

<?PHP
				$no = 1;
				foreach($q20 as $key=>$val){
					
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
							<div class="indent" ><input type="radio" name="sec[<?=$key?>]" value="<?=$i?>" id="chk_20<?=$key?>_<?=$i?>" class="chk20_<?=$key?>" <?=$chk?>></div>
							<img src="<?=D_URL_TEST?>image/check_<?=$on?>.gif" class="radio img20<?=$key?>" id="img_20<?=$key?>_<?=$i?>" />
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
