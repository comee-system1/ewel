<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
$(function(){
  try{

    $("#javascript").html("<span class='red'>〇</span>");
    $("#javascriptText").html("設定されています。");

    var _os = $("#os").html().replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
    var _browser = $("#browser").html().replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
    var _javascript = $("#javascript").html().replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
    if(
      _os == "〇" &&
      _browser == "〇" &&
      _javascript == "〇" 
    ){
      $("#next_hidden").show();
    }

  }catch(e){
    
  }
});
</script>
  </body>
</html>