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
	<div id="page">1/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

	<p id="TimeLeft"></p>
	<div class="question">
	<h3>貴社についてお聞かせください。</h3>
	<dl>
		<dt>社名<span style="color:red;">(必須)</span></dt>
		<dd><input type="text" name="company_name" value="<?=$tdetail[ 'company_name' ]?>" class="text"><?=$err[1]?></dd>
		<dt>業種<span style="color:red;">(必須)</span></dt>
		<dd><input type="text" name="bussiness_category" value="<?=$tdetail[ 'bussiness_category' ]?>"  class="text"><?=$err[2]?></dd>
		<dt>売上(年商)<span style="color:red;">(必須)</span></dt>
		<dd><input type="text" name="sales" value="<?=$tdetail[ 'sales' ]?>"  class="text">
			<span >(半角数字)</span>
			<?=$err[3]?></dd>
		<dt>従業員数<span style="color:red;">(必須)</span></dt>
		<dd><input type="text" name="employee" value="<?=$tdetail[ 'employee' ]?>"  class="text">
			<span >(半角数字)</span><?=$err[4]?></dd>
		
	</dl>
	</div>

	<div class="question mt40">
	<h3>次に、受検者であるあなたについてお聞かせください。</h3>
	<dl>
		<dt>部署名<span style="color:red;">(必須)</span></dt>
		<dd><input type="text" name="busyo" value="<?=$tdetail[ 'busyo' ]?>"  class="text"><?=$err[5]?></dd>
		<dt>職位<span style="color:red;">(必須)</span></dt>
		<dd>
			<!--
			<input type="text" name="position" value="<?=$tdetail[ 'position' ]?>"  class="text">
			-->
<?PHP
			if($tdetail[ 'position' ] == "経営者・役員クラス"){
				$sel1 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "執行役員・事業部長クラス"){
				$sel2 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "部長クラス"){
				$sel3 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "課長クラス"){
				$sel4 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "係長クラス"){
				$sel5 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "主任クラス"){
				$sel6 = "SELECTED";
			}
			if($tdetail[ 'position' ] == "一般クラス"){
				$sel7 = "SELECTED";
			}
?>
			<select name="position" style="width:300px;padding:5px;">
				<option value="経営者・役員クラス" <?=$sel1?> >経営者・役員クラス</option>
				<option value="執行役員・事業部長クラス"<?=$sel2?>>執行役員・事業部長クラス</option>
				<option value="部長クラス" <?=$sel3?>>部長クラス</option>
				<option value="課長クラス" <?=$sel4?>>課長クラス</option>
				<option value="係長クラス" <?=$sel5?>>係長クラス</option>
				<option value="主任クラス" <?=$sel6?>>主任クラス</option>
				<option value="一般クラス" <?=$sel7?> >一般クラス</option>

			</select>
			<?=$err[6]?></dd>
	</dl>
	<p class="pt40">本診断をどこで知りましたか。もっとも最近のものを選んでください。<span style="color:red;">(必須)</span></p>
	<span style="color:red;">(複数選択不可)</span>
<?PHP
	$chk = array();
	$chk[$tdetail[ 'ques1' ]] = "CHECKED";
?>
	<ul>
		<li><input type="checkbox" name="ques1" id="q1" value="1" class="radio rd" <?=$chk[1]?> >
			<label for="q1" >①プラネットのスタッフから聞いて</label></li>
		<li><input type="checkbox" name="ques1" id="q2" value="2" class="radio rd" <?=$chk[2]?> ><label for="q2" >②プラネットセミナーで</label></li>
		<li><input type="checkbox" name="ques1" id="q3" value="3" class="radio rd" <?=$chk[3]?> ><label for="q3" >③知人から勧められて</label></li>
		<li><input type="checkbox" name="ques1" id="q4" value="4" class="radio rd" <?=$chk[4]?> ><label for="q4" >④日本の人事部</label></li>
		<li><input type="checkbox" name="ques1" id="q5" value="5" class="radio rd" <?=$chk[5]?> ><label for="q5" >⑤Google検索</label></li>
		<li><input type="checkbox" name="ques1" id="q6" value="6" class="radio rd" <?=$chk[6]?> ><label for="q6" >⑥Yahoo検索</label></li>
		<li><input type="checkbox" name="ques1" id="q7" value="7" class="radio rd" <?=$chk[7]?> ><label for="q7" >⑦その他(<input type="text" name="q1txt" id="q7txt"  value="<?=$tdetail[ 'q1txt' ]?>" class="text">)</label></li>
	</ul>
	<?=$err[7]?>
<?PHP
	$chk = array();
	$chk[$tdetail[ 'ques2' ]] = "CHECKED";
?>
	<p class="pt40" >あなたが今一番お困りのことはなんですか。<span style="color:red;">(必須)</span></p>
	<span style="color:red;">(複数選択不可)</span>
		<ul>
			<li><input type="checkbox" name="ques2" id="q21" value="1"   class="radio rd2" <?=$chk[1]?> >
				<label for="q21" >①メンタルヘルス対策に関して経営層の理解が得られないこと</label></li>
			<li><input type="checkbox" name="ques2" id="q22" value="2"   class="radio rd2" <?=$chk[2]?> >
				<label for="q22" >②不調者が増加していること</label></li>
			<li><input type="checkbox" name="ques2" id="q23" value="3"   class="radio rd2" <?=$chk[3]?> >
				<label for="q23" >③ハラスメント対策のこと</label></li>
			<li><input type="checkbox" name="ques2" id="q24" value="4"   class="radio rd2" <?=$chk[4]?> >
				<label for="q24" >④新型うつ病のこと</label></li>
			<li><input type="checkbox" name="ques2" id="q25" value="5"   class="radio rd2" <?=$chk[5]?>>
				<label for="q25" >⑤産業医のこと</label></li>
			<li><input type="checkbox" name="ques2" id="q26" value="6"   class="radio rd2" <?=$chk[6]?>><label for="q26" >⑥復職プログラムのこと</label></li>
			<li><input type="checkbox" name="ques2" id="q27" value="7"   class="radio rd2" <?=$chk[7]?>><label for="q27" >⑦メンタルヘルス研修のこと</label></li>
			<li><input type="checkbox" name="ques2" id="q28" value="8"   class="radio rd2" <?=$chk[8]?>><label for="q28" >⑧ストレスチェックテストのこと</label></li>
			<li><input type="checkbox" name="ques2" id="q29" value="9"   class="radio rd2" <?=$chk[9]?>><label for="q29" >⑨メンタル相談窓口のこと</label></li>
			<li><input type="checkbox" name="ques2" id="q210" value="10" class="radio rd2" <?=$chk[10]?>><label for="q210" >⑩その他(<input type="text" name="q2txt" id="q210txt"  value="<?=$tdetail[ 'q2txt' ]?>" class="text">)</label></li>
		</ul>
	<?=$err[8]?>
	</div>



	<div class="center mt40">
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
		<input type="hidden" name="nextPage" value="2" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="time" value="<?=$time?>" id="time" >
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager" >
	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
