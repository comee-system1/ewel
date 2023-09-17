<?PHP

?>
<script type="text/javascript">
<!--
$(function(){
/*
	$("#next").click(function(){
		var _p = $("#pager").val();
		var _c = $("#count").val();
		_st = eval(_c*(_p-1))+1
		_end = _c*_p;

		for(var _i=_st;_i<=_end;_i++){
			var _rd = $(".rd"+_i).is(":checked");
			if( !_rd ){
				jAlert("設問"+_i+"が選択されていません。");
				return false;
			}
		}

		return true;
	});

	$(".radio").click(function(){
		var _id=$(this).attr("id");
		var _sp = _id.split("_");
		var _chk = "chk_"+_sp[1]+"_"+_sp[2];
		var _img = "img_"+_sp[1]+"_"+_sp[2];
		var _imgClass = "img"+_sp[1];

		$("#"+_chk).attr("CHECKED","CHECKED");
		$("."+_imgClass).attr("src","../../image/check_off.gif");
		$("#"+_img).attr("src","../../image/check_on.gif");
	});
*/
	try{
		var _a = $("#alert").val();
		if(_a){
			jAlert(_a,"エラー");
		}
	}catch(e){}

	var _time = $("#time").val();
	countDown(_time);

});
function countDown(t) {
	h=""+(t/36000|0)+(t/3600%10|0);
	m=""+(t%3600/600|0)+(t%3600/60%10|0);
	s=""+(t%60/10|0)+(t%60%10);
	T=h+"時間"+m+"分"+s+"秒";
//		$("#TimeLeft").text(d+'日'+h+'時間'+m+'分'+s+'秒');
	$("#TimeLeft").text(T);
	var hms = h+m+s;
	var _hms = parseInt(hms);
	if(_hms && _hms <= 1 ){
		alert("受検時間が終了致しました。再度ログイン後、初めからの再受検してください。");
		window.open('about:blank', '_self').close(); 
		return false;
	}
	_c = t-1;
	$("#time").val(_c);
	setTimeout( 'countDown(_c)', 1000 );
}

//-->
</script>
</body>
</html>