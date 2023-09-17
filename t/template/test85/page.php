<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<style type="text/css">
	input[type='radio']{
		height:30px;
		width:30px;
	}
	table#table{
		border:1px solid #ccc;
	}

	table#table td,
	table#table th{
		border-right:1px solid #ccc;
		border-bottom:1px solid #ccc;
	}
	table#table td{
		text-align: center;
	}
	table#table td:nth-child(2){
		text-align: left                     ;
	}
</style>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="timer" style="text-align:right;"></div>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
?>

<?PHP
	if($alert){
?>
	<p class="errmsg"><?=$alert?></p>
<?PHP
	}
?>

	<table id="table">
		<tr>
			<th class="w20" nowrap>設問番号</th>
			<th>設問内容</th>
			<th class="w10" nowrap>はい</th>
			<th class="w10" nowrap>どちらでもない</th>
			<th class="w10" nowrap>いいえ</th>
		</tr>
<?PHP foreach($exam as $key=>$val):
		$ans = "ans".$key;
		$chk = $tdetail[ $ans ];
		$checked = [];
		if($chk === "1") $checked[1] = "CHECKED";
		if($chk === "0") $checked[2] = "CHECKED";
		if($chk === "-1") $checked[3] = "CHECKED";
	?>
		<tr>
			<td><?=$key?></td>
			<td><?=$val?></td>
			<td><input type="radio" name="ans[<?=$key?>]" value="1" <?=$checked[1]?> /></td>
			<td><input type="radio" name="ans[<?=$key?>]" value="0" <?=$checked[2]?> /></td>
			<td><input type="radio" name="ans[<?=$key?>]" value="-1" <?=$checked[3]?> /></td>
		</tr>
		<input type="hidden" name="chk_ans[<?=$key?>]" value="on" />
<?PHP endforeach; ?>
	</table>
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
		<input type="submit" name="next" value="<?=$btn?>" class="button" >
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="temp" value="page">

	</form>
	<input type="hidden" id="alerts" value="<?=$alert?>">

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript">
  var timerId;
  // カウントダウンの終了日
  var endDateTime = new Date("<?=$timelimit?>");

  // カウントダウン機能
  function countDownTimer() {
    var startDateTime = new Date();
    var remaining = endDateTime - startDateTime;

    // カウントダウン後、id="contents"の部分の表示を変更 
    if (remaining < 0) {
      $("#contents").html('テストが終了しました。');
      // 繰り返し動作を停止(setIntervalで設定したタイマーをクリア)
      clearInterval(timerId);
      return 
    }

    // 1日の秒数
    var daySeconds = 24 * 60 * 60 * 1000;

    // 残り日数
    var remainingDays = Math.floor(remaining / daySeconds);
    // 残り時間
    var remainingHrs = Math.floor((remaining % daySeconds) / (60 * 60 * 1000));
    // 残り分数
    var remainingMin = Math.floor((remaining % daySeconds) / (60 * 1000)) % 60;
    // 残り秒数
    var remainingSec = Math.floor((remaining % daySeconds) / 1000) % 60 % 60;

    $("#timer").text( remainingHrs + '時間' + remainingMin + '分' + remainingSec + '秒');
  }
	$(function() {
    // 1秒刻みで表示させたいので、1000以下に設定  
  	timerId = setInterval('countDownTimer()',1000);
  });
</script>
<?PHP
include_once("include_footer.php");
?>
