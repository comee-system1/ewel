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
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">

	<table id="table">
		<tr>
			<th>A</th>
			<th>B</th>
		</tr>
		<tr>
			<td >
			<p class="exp" ><?=$exam[a]?></p>
			<div class="thumb"><img src="<?=D_URL?>/images/vf2/<?=$exam["img1"]?>.gif"  ></div>
			</td>
			<td>
			<p class="exp" ><?=$exam[b]?></p>
			<div class="thumb"><img src="<?=D_URL?>/images/vf2/<?=$exam[ "img2" ]?>.gif"  ></div>
			</td>
			
		</tr>
	</table>
	<p id="ex">※画像にマウスを乗せると拡大表示されます。</p>
	<p id="explain">貴社の<?=$object?>として、<span class="red">AとBの行動のどちらを取って欲しくないですか。取って欲しくない行動を選択してください。</span>	選択された回答が黄色に変わります。</p>
		
<?PHP
	if($errmsg){
?>
	<p class="errmsg"><?=$errmsg?></p>
<?PHP
	}
	
	$vfKey = "vf".$pager;
	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$imgChk1 = "off";
	$imgChk2 = "off";
	$imgChk3 = "off";
	$imgChk4 = "off";
	if($tdetail[ $vfKey ] ==1 ){
		$chk1 = "CHECKED";
		$imgChk1 = "on";
	}
	if($tdetail[ $vfKey ] ==2 ){
		$chk2 = "CHECKED";
		$imgChk2 = "on";
	}
	if($tdetail[ $vfKey ] ==3 ){
		$chk3 = "CHECKED";
		$imgChk3 = "on";
	}
	if($tdetail[ $vfKey ] ==4 ){
		$chk4 = "CHECKED";
		$imgChk4 = "on";
	}
	
?>
	<ul id="ansLine">
		<li class="radio" id="li_1"><div class="indent" ><input type="radio" name="vf<?=$pager?>" value="1" id="chk_1" <?=$chk1?>   class="vf<?=$pager?>"   ></div>
			<img src="<?=D_URL_TEST?>image/check_<?=$imgChk1?>.gif" class="radio img" id="img_1" />明確にＡ</li>
		<li class="radio" id="li_2"><div class="indent" ><input type="radio" name="vf<?=$pager?>" value="2" id="chk_2" <?=$chk2?>   class="vf<?=$pager?>"   ></div>
			<img src="<?=D_URL_TEST?>image/check_<?=$imgChk2?>.gif" class="radio img" id="img_2" />どちらかというとＡ</li>
		<li class="radio" id="li_3"><div class="indent" ><input type="radio" name="vf<?=$pager?>" value="3" id="chk_3" <?=$chk3?>   class="vf<?=$pager?>"   ></div>
			<img src="<?=D_URL_TEST?>image/check_<?=$imgChk3?>.gif" class="radio img" id="img_3" />どちらかというとＢ</li>
		<li class="radio" id="li_4"><div class="indent" ><input type="radio" name="vf<?=$pager?>" value="4" id="chk_4" <?=$chk4?>   class="vf<?=$pager?>"   ></div>
			<img src="<?=D_URL_TEST?>image/check_<?=$imgChk4?>.gif" class="radio img" id="img_4" />明確にＢ</li>
                                                                                              
	</ul>


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
		$btn = "検査完了";
	}else{
		$btn = "次のページ";
	}
?>
		<input type="submit" name="next" value="<?=$btn?>" class="button" id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
		<input type="hidden" name="pager" value="<?=$pager?>" id="pager">
		<input type="hidden" name="temp" value="page">

	</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
