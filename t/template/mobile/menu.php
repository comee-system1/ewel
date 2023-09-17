<?PHP
$css1 = "menu";
$title = "検査選択メニュー";
$js[1] = "menu";

include_once("include_header.php");

?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");

?>
		<h3 >検査選択メニュー</h3>
		<div >
<?PHP
			if($rest == 0){
?>
				すべての検査が完了しました<br />
					おつかれさまでした。
				
<?PHP
			}else{
?>
				受検して頂く検査は<?=$rest?>つです。<br />
<?php if($rest > 1 ): ?>
				どちらの検査から受検して頂いても構いません。<br />
<?php endif; ?>
				下記の検査名をクリックして検査をはじめて下さい。<br />
<?PHP
			}
?>
		</div>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
		<ul id="mtestMenu">
<?php
			foreach($testlink as $key=>$val){
				$class = "";
				$link = "";
				//行動価値系はblankしない
				//$tname = mb_convert_encoding($a_test_type[$val[ 'type' ]],'SJIS','UTF-8');
				$tname = $a_test_type[$val[ 'type' ]];
				if(
					$val[ 'type' ] == 1
					|| $val[ 'type' ] == 2
					|| $val[ 'type' ] == 3
					|| $val[ 'type' ] == 12
					|| $val[ 'type' ] == 72
					|| $val[ 'type' ] == 70
					|| $val[ 'type' ] == 73
					|| $val[ 'type' ] == 83
					){
					
					if($val[ 'exam_state' ] == 2){
						$class="not";
						$link = "<span class='op'>".$tname."</span>";
					}else{
						$class="";
						$link = "<a href='./test/".$val[ 'type' ]."/?k=".$_REQUEST[ 'k' ]."&e=".$_REQUEST[ 'exam_id' ]."&tid=".$test[ id ]."' >".$tname."</a>";
					}
				}else{
					if($val[ 'exam_state' ] == 2){
						$class="not";
						$link = "<span class='op'>".$tname."</span>";
					}else{
						$class="";
						$link = "".$tname."";
					}
					$link .= "　<span class='red'>PC専用</span>";
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

		<?php if($test[ 'exam_download' ] == 1 && $testlink[0][ 'complete_flg' ] == 1): ?>
		<h2>検査結果ダウンロード</h2>
		<p class="text-red">
			下記のボタンを押し、検査結果をダウンロードしてください。<br />
			※ダウンロードができない場合は主管部門にお問い合わせてください。
		</p>
		
		<p class="text-red">
			■注意<br />
			ダウンロードしたファイルをご自身のPCに保存し、結果を確認してください。<br />
			ブラウザで確認した場合、表示が乱れる可能性があります。
		</p>

		<a href="<?=D_URL?>index/pdf/<?=$test[ 'id' ]?>/<?=$testlink[0]['exam_id']?>/a4/?sp=on&code=PDF&resultflag=on" class="button pd10" target=_blank >検査結果ダウンロード</a>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
<?php endif;?>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>


	<?php 
	if(
		($test[ 'licensecard' ] == 1 && $rest == 0 && $val[ 'type' ] == 12) || 
		($test[ 'licensecard' ] == 1 && $rest == 0 && $val[ 'type' ] == 73 )
	
	): ?>
	<h3>受検証明書のダウンロード</h3>
	<center style="font-size:1.3em;">
	<div style="color:crimson;text-align:left;">下記のボタンを押し、受検証明書をダウンロードしてください。</div>

	<div style="color:crimson;border:3px solid red;padding:5px;text-align:left;">
		■注意<br />
		ダウンロードした証明書は必ずご自身のPCに保存してください。<br />
		ブラウザで確認した場合、表示が乱れる可能性があります。

	</div>
	<?php
		$exam_id = ($_SESSION[ 'visit' ]['exam_id'])?$_SESSION[ 'visit' ]['exam_id']:$_REQUEST['exam_id'];
	?>
	<a href="<?=D_URL?>index/pdf/<?=$test[ 'id' ]?>/<?=$exam_id?>/a4/?sp=on&code=PDF&resultflag=off" class="button pd10" target=_blank >受検証明書ダウンロード</a>
	</center>
	<?php endif;?>

<?php if($test[ 'youtubeflag' ]): ?>
<div class="rightArea textRight">
	<?php
	preg_match_all("/v=(.*?)(&|$)/",$test[ 'youtube' ],$param);
	$k = $param[1][0];
	?>
	<iframe width="100%" height="240" src="https://www.youtube.com/embed/<?=$k?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<?php endif; ?>


<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
