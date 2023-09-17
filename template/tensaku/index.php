<?PHP
$title = "AMS:添削画面";
$time = true;

include_once("include_header.php");
?>

<div id="main">

	<div id="contents">
<?PHP
include_once("include_title.php");
?>
	<div id="dataTitle">
		<?=$sitename?>
	</div>
	<form action="" method="POST" name="form">

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
						<span class="ans">添削済み</span>
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
		<h2>■回答</h2>

			<p class="right">指定文字数：<?=$limit?>　文字数：<?=$count?></p>
			<div class="boxes"><?=nl2br($ans[ 'question' ])?></div>
		<h2>■相談したい点</h2>
			<div class="boxes"><?=nl2br($ans[ 'ask_text' ])?></div>
		<h2>■困った点</h2>
			<div class="boxes"><?=nl2br($ans[ 'trouble_text' ])?></div>
		<h2>■添削</h2>
			<textarea id="answer" name="answer" class="text"><?=$ans[ 'answer' ]?></textarea>
		<h2>■アドバイス</h2>
			<textarea id="advice_text" name="advice_text" class="text2"><?=$ans[ 'advice_text' ]?></textarea>
		<h2>■評価</h2>
		<table>
			<tr>
				<td>内容：</td>
				<td>
					<input name="star" type="radio" class="star" value="1"  <?=$star1?> />
					<input name="star" type="radio" class="star" value="2"  <?=$star2?> />
					<input name="star" type="radio" class="star" value="3"  <?=$star3?> />
					<input name="star" type="radio" class="star" value="4"  <?=$star4?> />
					<input name="star" type="radio" class="star" value="5"  <?=$star5?> />
				</td>
			</tr>
			<tr>
				<td>ロジック：</td>
				<td>
					<input name="star2" type="radio" class="star" value="1" <?=$star21?> />
					<input name="star2" type="radio" class="star" value="2" <?=$star22?> />
					<input name="star2" type="radio" class="star" value="3" <?=$star23?> />
					<input name="star2" type="radio" class="star" value="4" <?=$star24?> />
					<input name="star2" type="radio" class="star" value="5" <?=$star25?> />
				</td>
			</tr>
		</table>
		<br clear=all />
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
			<input type="hidden" id="pdfFlg" name="pdfFlg" value="" >
		</div>
		
		<br clear=all />

	</div>
		
		<input type="hidden" id="scrol" name="scrol" value="<?=$scrol?>" >

	</form>
		<input type="hidden" id="saveFlg" value="" >
		<input type="hidden" id="qkey" value="<?=$qkey?>" >
		<input type="hidden" id="first" value="<?=$first?>" >
		<input type="hidden" id="sec"   value="<?=$sec?>"   >
		<input type="hidden" id="third" value="<?=$third?>" >

<?PHP
include_once("include_footer_name.php");
?>
</div>
<?PHP
include_once("include_footer.php");
?>
