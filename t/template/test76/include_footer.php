<?PHP

?>
<script type="text/javascript">
$(function(){
  $(".btn").click(function(){
    //選択したclassを取得 選択したansを取得
    var _cl = $(this).attr("class").split(" ")[2];
    $("."+_cl).removeClass("active");
    $(this).addClass("active");
    $(this).find("input").prop("checked",true);
  });
});
</script>

<script type="text/javascript">
var _t = 0;
$(function(){
    _t = $("#time").val();
    if(_t > 0 ){
        var _h=0;
        var _m=0;
        var _s=0;
        var _time = 0;
        setInterval("$(this).countdown()", 1000);
    }else{
        $("#timer").hide();
    }

});
$.fn.countdown = function(){
    _h = _t / 3600 | 0;
	_m = _t % 3600 / 60 | 0;
	_s = _t % 60;
    _time = _h+"時間"+$(this).zeroPad(_m)+"分"+$(this).zeroPad(_s)+"秒";
    $("#timer").html(_time);
    _t = _t-1;
    if(_t <= 0){
        _t=0;
        alert("試験時間が終了しました。");
        window.close();
    }

};
$.fn.zeroPad = function(v){
    if (v < 10) {
        return "0" + v;
    } else {
        return v;
    }
};
</script>
</body>
</html>