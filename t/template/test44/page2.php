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
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST" name="form">


	<div id="question">
		<h2>■質問</h2>
		<p>下記の質問に回答してください。回答は全部で<?=$total?>問あります</p>
		<p>質問項目右にあるスクロールで質問表示箇所の変更が可能です。</p>
		<p>すべて回答後、「完了」ボタンが表示されます。</p>
	</div>
	<div id="overflow">
		<table>
<?PHP
		foreach($module as $key=>$val){
			$chk = "";
			if($key == $qkey) $chk = "CHECKED";
?>
			<tr>
				<td><input type="radio" name="ques" value="<?=$key?>" <?=$chk?> id="ques_<?=$key?>" class="ques" ></td>
				<td>
					<label for="ques_<?=$key?>" ><?=$val["question"]?></label>
<?PHP
					if($val[ 'finFlg' ] == "on"){
?>
						<span class="ans">回答済み</span>
<?PHP
					}
?>
				</td>
			</tr>
<?PHP
		}
?>
		</table>
	</div>

	<div class="half">
		<div class="lefts"><h2>■回答 </h2></div><br clear=all />
		<div><?=nl2br($question)?></div>
	</div>

	<div class="half">
		<div class="lefts"><h2>■添削 </h2></div><br clear=all />
		<div><?=nl2br($answer)?></div>
	</div>
		<br clear=all />

	<div class="mgtop">
		<div class="lefts"><h2>■アドバイス </h2></div><br clear=all />
		<div><?=nl2br($advice_text)?></div>
		<div><span class="mgr10">内容：<?=$text_point?></span><span>ロジック：<?=$logic_point?></span></div>
	</div>
	<div class="mgtop">
		<div class="lefts"><h2>■完成版 </h2></div><br clear=all />
		<textarea name="comp_question" id="comp_question" class="text"><?=$comp_question?></textarea>
	</div>
	<div class="center">
		<input type="button" value="キャンセル" id="cancel" class="button">
		<input type="button" value="印刷" id="print" class="button">
		<input type="submit" value="保存" id="save" name="save" class="button">
<?PHP
		if(!$nofinFlg){
?>
		<input type="button" value="完了" id="complete" name="complete" class="button">
		<input type="hidden" id="completeFlg" name="completeFlg" value="" >

<?PHP
		}
?>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" id="pdfFlg" name="pdfFlg" value="" >

	</div>
		<input type="hidden" id="scrol" name="scrol" value="<?=$scrol?>" >

	</form>
		<input type="hidden" id="saveFlg" value="" >
		<input type="hidden" id="qkey" value="<?=$qkey?>" >

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript">
<!--
	$(function(){
		//質問項目のスクロール位置指定
		var _sl = $("#scrol").val();
		document.getElementById("overflow").scrollTop =_sl;
	});

//-->
</script>
<?PHP
include_once("include_footer.php");
?>
