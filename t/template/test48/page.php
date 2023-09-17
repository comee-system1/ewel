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
	<form action="" method="POST" name="form" >
	<div id="notes" >
	<div id="divTab">
		<ul id="tensaku-tab">
<?PHP
	for($i=1;$i<=4;$i++){
		$disable = "DISABLED";
		$class = "disable";
		if($i <= $tensaku_number){
			$disable = "";
			$class = "";
		}
?>
<?PHP
		if($disable){
?>
			<li><a href="javascript:void(0);" class="<?=$class?>"  >添削<?=$i?></a></li>
<?PHP
		}else{
?>
			<li><a href="javascript:void(0);" id="tno-<?=$i?>" class="tno <?=$class?>"  >添削<?=$i?></a></li>
<?PHP
		}
?>
<?PHP
	}
?>
		</ul>
	</div>
	<div id="tensaku-left" class="w260">

	<h5 class="questitles">質問リスト</h5>
	<p class="counter">
		<?=$counter[ 'fin' ]?>/
		<?=$counter[ 'count' ]?>
		<span class="f18">回答済</span>
	</p>
<?PHP
		$no = 1;
		foreach($alist as $key=>$val){
			$sel = "";
			$check = "";
			if($_REQUEST[ 'tensaku_id' ] == $key){
				$sel = "checked";
				$check = "checked";
			}
			if(!$_REQUEST[ 'tensaku_id' ] && $no == 1){
				$sel = "checked";
				$check = "checked";
			}
			$ten = "";
			$style="";
			$fin = "";
			if($chkFin[$key][ 'finFlg' ] == 1){
				$ten = "<font color='red'>[済]</font>";
				$style = "style='color:red;'";
			}
?>
		<p class="ques-menu <?=$check?>"  id="p-<?=$key?>" >
			<label >
				<input type="radio" name="tensaku_id"  value="<?=$key?>" id="tensaku_id-<?=$key?>" <?=$sel?> style="display:none;">
				<?=$ten?><?=$val?>
			</label>
		</p>
<?PHP
			$no++;
		}
?>
	</div>
	<div id="tensaku-right">
	<div id="imgIcon" ><img src="<?=D_URL?>/images/crts/tensakuIcon.gif" ></div>
	<p class="mg" >下記の質問に対しあなたの回答を記入してください。</p>
	<div id="tensaku-title"></div>
<?PHP
	for($i=1;$i<=4;$i++){
?>
	<div id="tensaku_<?=$i?>" class="tensaku">
		<h2><?=$i?>回目</h2>
<?PHP if($tensaku_number > $i){ ?>
		<div class="mg inline in<?=$i?>" id="question_<?=$i?>" > ▼内容</div>
		<div class="mg inline in<?=$i?>" id="worry_<?=$i?>" > ▼記入にあたり悩んだ点</div>
<!--
		<div class="mg inline in<?=$i?>" id="advice_<?=$i?>" > ▼相談事項</div>
-->
		<br clear=all />
		<div class="box ans_txt<?=$i?>" id="question_text_<?=$i?>" ></div>
		<div class="box ans_txt<?=$i?>" id="worry_text_<?=$i?>" ></div>
		<div class="box ans_txt<?=$i?>" id="advice_text_<?=$i?>" ></div>
		<br />
		<h5>添削内容</h5>
		<div id="answer_text_<?=$i?>" class="ansbox"></div>
		<h5>アドバイス</h5>
		<div id="answer_advice_text_<?=$i?>" class="ansbox"></div>
		<dl class="point">
			<dt>内容</dt>
			<dd>：<span id="note_point_<?=$i?>"></span>ポイント</dd>
			<dt>形式</dt>
			<dd>：<span id="logic_point_<?=$i?>"></span>ポイント</dd>
			<dt>熱意</dt>
			<dd>：<span id="heart_point_<?=$i?>"></span>ポイント</dd>
			<dt>アピール</dt>
			<dd>：<span id="apeal_point_<?=$i?>"></span>ポイント</dd>
			<dt>誠実さ</dt>
			<dd>：<span id="selias_point_<?=$i?>"></span>ポイント</dd>

		</dl>
<?PHP }else{ ?>
		<p class="mg" >▼あなたの回答</p>
		<div class="right">文字数：<span id="sentence_<?=$i?>">0</span>文字　<span id="pagers_<?=$i?>">1</span>/<?=$maxAll?> ページ</div>
		<textarea name="question_text[<?=$i?>]" id="question_text_<?=$i?>" class="textarea mainTxt" ></textarea>
		<br clear=all />
		<br clear=all />
		<p class="mg" >▼記入にあたり悩んだ点や困った点がありましたら、下記に記入してください。</p>
		<textarea name="worry_text[<?=$i?>]" id="worry_text_<?=$i?>" class="textarea" ></textarea>
		<br clear=all />
<!--
		<br clear=all />
		<p class="mg" >▼相談事項</p>
		<textarea name="advice_text[<?=$i?>]" id="advice_text_<?=$i?>" class="textarea" ></textarea>
-->

<?PHP } ?>
	</div>
<?PHP
	}
?>
	</div>
	</div><!--#notes-->


	<div class="clearfix buttonArea">
	<div id="printbox">
		<ul>
			<li><a href="javascript:void(0);" class="printpage" id="now">現ページ印刷画面</a></li>
			<li><a href="javascript:void(0);" class="printpage" id="all" >全ページ印刷画面</a></li>
		</ul>
	</div>

		<input type="button" name="input" value="保存" class="button w150" id="save" >
		<input type="hidden" name="inputFlg" value="" id="inputFlg" >
<?PHP
	$dis = "disabled";
	if($finflg == $maxAll){
		$dis = "";
	}
?>
		<input type="submit" name="finish" value="完了" class="button w150 <?=$dis?>" <?=$dis?> id="finishbtn">

		<input type="button"  value="ページ印刷" class="button w150" id="print">
		<input type="hidden" name="finishFlg" value="" id="finishFlg" >
		<input type="hidden" name="tensaku_number" value="<?=$tensaku_number?>"  id="tensaku_number" >
		<input type="hidden"  value="<?=$tensaku_number?>"  id="t-num" >
	</div>

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
