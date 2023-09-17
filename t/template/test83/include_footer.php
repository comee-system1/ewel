
<input type="hidden" id="endtime" value="<?=$endtime?>" />
<?PHP if($temp != "guide"): ?>
<script type="text/javascript">
  $(function() {
    countDown();
  });
  function countDown() {
			var _endtime = $("#endtime").val();
			var startDateTime = new Date();
			var endDateTime = new Date(_endtime);
			var left = endDateTime - startDateTime;
			var a_day = 24 * 60 * 60 * 1000;

		// 期限から現在までの『残時間の日の部分』
			var d = Math.floor(left / a_day) 

		// 期限から現在までの『残時間の時間の部分』
			var h = Math.floor((left % a_day) / (60 * 60 * 1000)) 

		// 残時間を秒で割って残分数を出す。
		// 残分数を60で割ることで、残時間の「時」の余りとして、『残時間の分の部分』を出す
			var m = Math.floor((left % a_day) / (60 * 1000)) % 60 

		// 残時間をミリ秒で割って、残秒数を出す。
		// 残秒数を60で割った余りとして、「秒」の余りとしての残「ミリ秒」を出す。
		// 更にそれを60で割った余りとして、「分」で割った余りとしての『残時間の秒の部分』を出す
			var s = Math.floor((left % a_day) / 1000) % 60 % 60 

  		$("#TimeLeft").text(h + '時間' + m + '分' + s + '秒');
      if(h <= 0 && m <= 0 && s <= 0){
        alert("受検時間が経過しました。");
        window.close();
        return false;
      }
    	setTimeout('countDown()', 1000);
  }
</script>
<?php endif; ?>
</body>
</html>