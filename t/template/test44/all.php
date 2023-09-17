<?PHP
$css1 = "page";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "question";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>

<?PHP
	foreach($allData as $key=>$val){
?>
		<h4><?=$array_tensaku_question[$val[ 'tensaku_main_id' ]][$val[ 'tensaku_id' ]]?></h4>
		<div class="box">
			<p class="umg subject">【内容】</p>
			<p class="umg"><?=$val[ 'question_text' ]?></p><br clear=all />
			<p class="umg subject">【記入にあたり悩んだ点】</p>
			<p class="umg"><?=$val[ 'worry_text' ]?></p><br clear=all />
			<p class="umg subject">【相談事項】</p>
			<p class="umg"><?=$val[ 'advice_text' ]?></p><br clear=all />
		</div>
		<?php if($val[ 'answer_text' ]){ ?>
		<div class="box">
			<p class="umg subject">【添削回答.1回】</p>
			<p class="umg"><?=$val[ 'answer_text' ]?></p><br clear=all />
		<?php if($val[ 'answer_advice_text' ]){ ?>
			<p class="umg subject">【添削アドバイス.1回】</p>
			<p class="umg"><?=$val[ 'answer_advice_text' ]?></p>
			<p class="umg subject">【得点.1回】</p>
			<p class="umg">内容：<?=$val[ 'note_point' ]?>　ロジック：<?=$val[ 'logic_point' ]?></p>
			<br clear=all />
		<?php } ?>
		</div>
		<?php }//answer_textのif ?>


		<?php if($val[ 'question_text2' ]){ ?>
		<div class="box">
			<p class="umg subject">【内容.2回】</p>
			<p class="umg"><?=$val[ 'question_text2' ]?></p><br clear=all />
		<?php if($val[ 'advice_text2' ]){ ?>
			<p class="umg subject">【記入にあたり悩んだ点.2回】</p>
			<p class="umg"><?=$val[ 'advice_text2' ]?></p>
			<br clear=all />
		<?php } ?>
		</div>
		<?php }//answer_textのif ?>



<?PHP
	}
?>
		<div class="center" >
			<input type="button" id="allPrints" value="印刷" class="button">
		</div>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
