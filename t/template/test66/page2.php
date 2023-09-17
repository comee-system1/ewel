<?PHP
$css1 = "guide";
$css2 = "page";

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
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>
	<p id="TimeLeft"></p>
<?PHP
	$questions = "次のそれぞれの質問について、最も適切な答えを1つ選んで答えてください。";
	$section = "セクションC";
	if($pager >= 23){
		$questions = "次のそれぞれの質問に対して、最もあてはまるものを①～⑤までの選択肢の中から1つ選んでください。";
		$section = "セクションG";
	}
?>

	<h3><?=$section?></h3>
	<div id="waku">
<?PHP
	if($pager == 9){
?>
	<h3>次のそれぞれの質問について、□に最も当てはまる出来事を1つ選んで答えてください。</h3>
<?PHP
	}else{
?>
	<h3><?=$questions?></h3>
<?PHP
	}
?>
<?PHP
	foreach($exam as $eKye => $eVal){
?>
		<div class="clearfix">
			<ul class="question f16 pt20">
				<li style="width:7%;text-align:right;"><?=$eVal[ 'key' ]?>.</li>
				<li style="width:88%;"><?=$eVal[ 'question' ]?></li>
			</ul>
		</div>

		<table class="qtable f16 pl40 pt20" >
<?PHP
			foreach($eVal[ 'ans' ] as $key=>$val){
				$code = "ans".$key;
				foreach($val as $i=>$v){
					$sel = "";
					if($tdetail[ $code ] == $i ){
						$sel = "CHECKED";
					}
				//No56設問が長いのでheightの指定
				$ht = "";
/*
				if(
					($key == 56 && $i ==2)
					|| ($key == 57 && $i ==5)
					){
					$ht = "ht";
				}
*/
?>
			<tr>
				<td class="tleft <?=$ht?>" >
					<div class="bg_<?=$key?>" id="a_<?=$key?>_<?=$i?>" >
						<div class="left"  ><input type="radio" name="ans<?=$key?>" value="<?=$i?>" id="r_<?=$key?>_<?=$i?>" class="radio w30" <?=$sel?> ></div>
						<div class="left txt"  ><?=$v?></div>
					</div>
				</td>
			</tr>
<?PHP
				}
			}
?>
		</table>
<?PHP
	}//foreach終わり
?>
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
		$btn = "完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
		</div><!--button-->
	</div><!--waku-->
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
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
