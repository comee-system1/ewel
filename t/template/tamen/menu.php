<?PHP
$css1 = "menu";
$title = "検査選択メニュー";
$js[1] = "menu";

include_once("include_header.php");

?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
		<h3 id="kojinh3">検査選択メニュー</h3>
		<div id="explain">
<?PHP
			if($rest == 0){
?>
				<p>すべての検査が完了しました<br />
					おつかれさまでした。
				</p>
<?PHP
			}else{
?>
				<p>受検して頂く検査は<?=$rest?>つです。<br />
				どちらの検査から受検して頂いても構いません。<br />
				下記の検査名をクリックして検査をはじめて下さい。</p>
<?PHP
			}
?>
		</div>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
		<ul id="testMenu">
<?php
			foreach($testlink as $key=>$val){
				$class = "";
				$link = "";
				//行動価値系はblankしない
				if(
					$val[ 'type' ] == 1
					|| $val[ 'type' ] == 2
					|| $val[ 'type' ] == 3
					|| $val[ 'type' ] == 12
					){
					$target = "target=''";
				}else{
					$target = "target='win'";
				}
				
				if($val[ 'exam_state' ] == 2){
					$class="not";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}else{
					$class="";
					$link = "<a href='./test/".$val[ 'type' ]."/?k=".$_REQUEST[ 'k' ]."' ".$target.">".$a_test_type[$val[ 'type' ]]."</a>";
				}
				
				//BMS検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 13
					&& ($val[ 'exam_state' ] == 1 || $val[ 'exam_state' ] == 2) ){
					$class="not";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}
				//BMS2検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 35
					&& ($val[ 'exam_state' ] == 1 || $val[ 'exam_state' ] == 2) ){
					$class="not";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}
				//IQ検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 11
					&& ($val[ 'exam_state' ] == 1 || $val[ 'exam_state' ] == 2) ){
					$class="not";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}
?>
				<li class="<?=$class?>"><?=$link?></li>
<?PHP
			}
?>
		</ul>
		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
