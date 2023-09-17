<?PHP
$css1 = "guide";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");
?>
	<div id="page"><?=$pager?>/<?=$max?>ページ</div>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&e=<?=$_REQUEST[ 'e' ]?>&tid=<?=$_REQUEST[ 'tid' ]?>" method="POST">
<?PHP
	if($errmsg){
?>
	<p class="red"><?=$errmsg?></p>
<?PHP
	}
?>


	<div style="padding:2px; background-color:#eeeeee;" align="left">

			1: aがbよりとても当てはまる<br>
			2: aがbよりやや当てはまる<br>
			3: どちらともいえない<br>
			4: bがaよりやや当てはまる<br>
			5: bがaよりとても当てはまる
		
	</div>
	<hr size=1 />
<?PHP
		foreach($exam as $key=>$val){
			$chk1 = "";
			$chk2 = "";
			$chk3 = "";
			$chk4 = "";
			$chk5 = "";
			$q = "q".$key;
			if($tdetail[$q] == 1){
				$chk1 = "CHECKED";
			}
			if($tdetail[$q] == 2){
				$chk2 = "CHECKED";
			}
			if($tdetail[$q] == 3){
				$chk3 = "CHECKED";
			}
			if($tdetail[$q] == 4){
				$chk4 = "CHECKED";
			}
			if($tdetail[$q] == 5){
				$chk5 = "CHECKED";
			}
?>

<div style='background-color:#f0f0f0; color:#543d3d; margin-top:5px; padding:2px;' >■<?=$key?></div>
<div style='background-color:#2595C7; padding:2px;'>a:<?=$val[a]?></div>


<input type="radio" name="q[<?=$key?>]" value="1" id="chk_<?=$key?>_1" <?=$chk1?> class="values<?=$key?>">1：a>>b
<br />
<input type="radio" name="q[<?=$key?>]" value="2" id="chk_<?=$key?>_2" <?=$chk2?> class="values<?=$key?>">2：a > b
<br />
<input type="radio" name="q[<?=$key?>]" value="3" id="chk_<?=$key?>_3" <?=$chk3?> class="values<?=$key?>">3：a = b
<br />
<input type="radio" name="q[<?=$key?>]" value="4" id="chk_<?=$key?>_4" <?=$chk4?> class="values<?=$key?>">4：a < b
<br />
<input type="radio" name="q[<?=$key?>]" value="5" id="chk_<?=$key?>_5" <?=$chk5?> class="values<?=$key?>">5：a << b

<div style='background-color:#EFA92A; padding:2px;'>b:<?=$val[b]?></div>
<?PHP
		}
?>

	<div class="center">
<?PHP
	if($pager > 1){
?>
		<input type="submit" name="back" value="戻る" >
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
		<input type="submit" name="next" value="<?=$btn?>"  id="next">
	</div>
		<input type="hidden" name="nextPage" value="<?=$nextPage?>" id="nextPage">
		<input type="hidden" name="backPage" value="<?=$backPage?>" id="backPage">
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
