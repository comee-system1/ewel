<?PHP
$css1 = "page";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "question";
$filePath = D_PATH_HOME."t/template/test44/";
include_once($filePath."include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once($filePath."include_title.php");
?>
	<form action="" method="POST" name="form" >
	<h3>入力画面</h3>
	<p class="mg" >▼質問</p>
	<select name="tensaku_id" id="tensaku_id">
<?PHP
		foreach($alist as $key=>$val){
?>
			<option value="<?=$key?>"><?=$val?></option>
<?PHP
		}
?>
	</select>
	<br />
	<p class="mg" >▼内容</p>
	<div class="right">文字数：<span id="sentence">0</span>文字　<span id="pagers">1</span>/<?=$maxAll?> ページ</div>
	<textarea name="question_text2" id="question_text" class="textarea" ></textarea>
	<br clear=all />
	<p class="mg" >▼相談事項</p>
	<textarea name="advice_text2" id="advice_text" class="textarea" ></textarea>


	<div id="printPattern">
		<input type="button"  value="全体印刷" class="printBtn w150" id="allprint" ><br />
		<input type="button"  value="印刷"     class="printBtn w150" id="oneprint" >
	</div>
<!--
	<input type="submit" name="input" value="戻る" class="button w150" id="back" >
-->
	<input type="button" name="input" value="印刷" class="button w150" id="print" >
	<input type="hidden" name="pdfFlg" value=""  id="pdfFlg" >
	<input type="button" name="input" value="保存" class="button w150" id="save" >
	<input type="button" name="finish" value="完了" class="button w150" id="finish" >
	
	</form>
	</div>
<?PHP
include_once($filePath."include_footer_name.php");
?>
</div>

<?PHP
include_once($filePath."include_footer.php");
?>
