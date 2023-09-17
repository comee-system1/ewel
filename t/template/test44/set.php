<?PHP
$css1 = "page";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="" method="POST" >
		<h3>設問選択画面</h3>
		<p class="mg" >▼設問カテゴリ選択</p>
		<select name="tensaku_title_status" id="tensaku_title_status" > 
<?PHP
		foreach($category as $key=>$val){
?>
			<option value="<?=$val?>"><?=$array_tensaku_title[$val]?></option>
<?PHP
		}
?>
		</select>
		<h3>質問選択</h3>
		<div id="qlist"></div>
		<input type="submit" name="input" value="入力ページ" class="button" id="input" >
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<?PHP
include_once("include_footer.php");
?>
