<?PHP
$css1 = "menu";
$js[1] = "menu";
switch($language){
	case "4";
		$title = "Menu chọn lựa kiểm tra";
		$text[1] = "Menu chọn lựa kiểm tra";
		$text[2] = "Toàn bộ quá trình được kiểm tra đã hoàn tất.";
		$text[3] = "Có ".$rest."kiểm tra được nhờ kiểm tra.";
		$text[4] = "Được kiểm tra bởi kiểm tra nào cũng đều được.";
		$text[5] = "Vui lòng  chọn tên kiểm tra sau đây.";

	break;
	case "2":
		$title   = "检查选择菜单";
		$text[1] = "检查选择菜单";
		$text[2] = "所有的检查都结束了。";
		$text[3] = "接受的检查是".$rest."项。";
		$text[4] = "接受哪项检查都可以。";
		$text[5] = "选择下列的检查名。";


                if($rest == 0){
                    $text[1] = "测试选择菜单";
                    $text[2] = "接收到的检查是没有的";
                }

	break;
	default:
		if(
			array_search("77",$testline) || 
			array_search("78",$testline) || 
			array_search("79",$testline) || 
			array_search("80",$testline)  	
			){
			$title = "受験科目選択メニュー";
			$text[1] = "受験科目選択メニュー";
			
		}else
		if(array_search("53",$testline)
                        ||  array_search("58",$testline)
                        ){
			//ELANの時はこちら
			$title = "研修メニュー";
			$text[1] = "研修メニュー";
		}else
		if(array_search("49",$testline)){
			//ELANの時はこちら
			$title = "受講メニュー";
			$text[1] = "受講メニュー";
		}elseif(array_search("88",$testline)){
				//ELANの時はこちら
				$title = "研修メニュー";
				$text[1] = "研修メニュー";
		}else{
			$title = "検査選択メニュー";
			$text[1] = "検査選択メニュー";

		}

		if($firstType == 53
			|| $firstType == 58
		){
			$text[2] = "すべての研修が完了しました<br />おつかれさまでした。";
			$text[3] = "研修して頂く講座は".$rest."つです。";
			$text[5] = "下記の講座名を選択して下さい。";
		}else
		if($firstType == 49){
			$text[2] = "すべての受講が完了しました<br />おつかれさまでした。";
			$text[3] = "受講して頂く講座は".$rest."つです。";
			$text[5] = "下記の講座名を選択して下さい。";
		}else{
			

			if(
				array_search("77",$testline) || 
				array_search("78",$testline) || 
				array_search("79",$testline) || 
				array_search("80",$testline)  	
				){
				$text[2] = "すべての研修が完了しました<br />おつかれさまでした。";
				$text[3] = "受験して頂く科目は".$rest."つです。";
				$text[5] = "下記の受験科目名を選択して下さい。";
			}elseif(array_search("88",$testline)){
				$text[2] = "すべての研修が完了しました<br />おつかれさまでした。";
				$text[3] = "研修して頂く講座は".$rest."つです。";
				$text[5] = "下記の講座名を選択して下さい。";
			}else{
				$text[2] = "すべての検査が完了しました<br />おつかれさまでした。";
				$text[3] = "受検して頂く検査は".$rest."つです。";
				$text[5] = "下記の検査名をクリックして検査をはじめて下さい。";
			}
			
		}
		if(
			array_search("77",$testline) || 
			array_search("78",$testline) || 
			array_search("79",$testline) || 
			array_search("80",$testline)  	
			){
				$text[4] = "どちらの科目から受験して頂いても構いません。";
		}else{
			$text[4] = "どちらの検査から受検して頂いても構いませんが、<br />すべての検査を受検してください。";
		}


	break;
}
include_once("include_header.php");

?>
<div id="main">
	<div id="contents">
<?PHP
	include_once("include_title.php");

?>
		<h3 id="kojinh3"><?=$text[1]?></h3>
		<div id="explain">
<?PHP
			if($rest == 0){
?>
				<p><?=$text[2]?></p>
<?PHP
			}else{
?>
                                <?php if($firstType != 56):?>
				<p><?=$text[3]?>
                                <?php endif; ?>
                                    <br />
<?PHP
				if($rest >=2 ){
?>
					<?=$text[4]?><br />
<?PHP } ?>
                                <?php if($firstType != 56):?>
				<?=$text[5]?></p>
                                <?php endif; ?>
<?PHP
			}
?>
		</div>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >
		<ul id="testMenu">
<?php
			
			$testsort = [];
			foreach($testlink as $key=>$val){
				$testlink[$key] = $val;
				$testlink[$key][ 'testname' ] = $a_test_type[$val[ 'type' ]];
				$testsort[] = $a_test_type_sort[$val[ 'type' ]];
			}


			array_multisort( $testsort, SORT_ASC,  $testlink);
			
			foreach($testlink as $key=>$val){
				$class = "";
				$link = "";
				//行動価値系はblankしない
				if(
					$val[ 'type' ] == 1
					|| $val[ 'type' ] == 2
					|| $val[ 'type' ] == 3
					|| $val[ 'type' ] == 12
					|| $val[ 'type' ] == 41
					|| $val[ 'type' ] == 54
                    || $val[ 'type' ] == 57
					){
					$target = "target=''";
				}else{
					$target = "target='win'";
				}

				if($val[ 'exam_state' ] == 2){
					$class="not";
					if($val[ 'type' ] == 41 ) $class="not2";
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
				//BMS-v検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 42
					&& ($val[ 'exam_state' ] == 1 || $val[ 'exam_state' ] == 2) ){
					$class="not2";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}
				//IQ検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 11
					&& ($val[ 'exam_state' ] == 1 || $val[ 'exam_state' ] == 2) ){
					$class="not";
					$link = "<span class='op'>".$a_test_type[$val[ 'type' ]]."</span>";
				}

				//crt検査の時は、受検中で再受検不可とする
				if(
					$val[ 'type' ] == 44
					&& ($val[ 'tensaku_status' ] == 2 || $val[ 'tensaku_status' ] == 3
						 || $val[ 'tensaku_status' ] == 6 || $val[ 'tensaku_status' ] == 7 ) ){
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


<?php 
if($test[ 'exam_download' ] == 1 && $testlink[0][ 'complete_flg' ] == 1): ?>
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
		<?php
			$openkey = "openkey1234";
			$query = "pdf/".$test[ 'id' ]."/".$testlink[0]['exam_id']."/a4/";
			$str = openssl_encrypt($query,'aes-256-ecb',$openkey);
		?>
		<a href="<?=D_URL?>index/<?=$str?>?sp=off&code=PDF&resultflag=on" class="button pd10" target=_blank >検査結果ダウンロード</a>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">

		
<?php endif;?>

<style type="text/css">
	.leftArea{
		float:left;
		width:50%;
	}
	.rightArea{
		float:right;
		width:50%;

	}
	.textRight{
		text-align:right;
	}
</style>
<?php 
$leftArea = "";
if($test[ 'youtubeflag' ]): 
	$leftArea = "leftArea";
endif; 
?>

<div class="<?=$leftArea?>">
<?php if($test[ 'licensecard' ] == 1 && $testlink[0][ 'complete_flg' ] == 1): ?>
	<h3>受検証明書のダウンロード</h3>
	<center style="font-size:1.3em;">
	<div style="color:crimson;text-align:left;">下記のボタンを押し、受検証明書をダウンロードしてください。</div>

	<div style="color:crimson;border:3px solid red;padding:5px;text-align:left;">
		■注意<br />
		ダウンロードした証明書は必ずご自身のPCに保存してください。<br />
		ブラウザで確認した場合、表示が乱れる可能性があります。

	</div>

	<?php
			$openkey = "openkey1234";
			$query = "pdf/".$test[ 'id' ]."/".$testlink[0]['exam_id']."/a4/";
			$str = openssl_encrypt($query,'aes-256-ecb',$openkey);
		?>

	<a href="<?=D_URL?>index/<?=$str?>?sp=off&code=PDF" class="button pd10" target=_blank >受検証明書ダウンロード</a>
	<!-- <a href="<?=D_URL?>index/pdf/<?=$test[ 'id' ]?>/<?=$testlink[0]['exam_id']?>/a4/?sp=off&code=PDF" class="button pd10" target=_blank >受検証明書ダウンロード</a> -->
	</center>
<?php endif;?>
</div>

<?php if($test[ 'youtubeflag' ] == 1 || ( $test[ 'youtubeflag' ] == 2 && $testlink[0][ 'complete_flg' ] == 1)): ?>
<div class="rightArea textRight">
	<?php
	preg_match_all("/v=(.*?)(&|$)/",$test[ 'youtube' ],$param);
	$k = $param[1][0];
	?>
	<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?=$k?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<?php endif; ?>
<br clear="all" />
<?PHP
		if($enq_status && $enqRow == 0){
			$anq_array = array(
					1=>"意識していない"
					,2=>"あまり意識していない"
					,3=>"少し意識しているい"
					,4=>"意識している"
					);
			$anq2_array = array(
					 1=>"恵まれていない"
					,2=>"あまり恵まれていない"
					,3=>"少し恵まれている"
					,4=>"恵まれている"
					);
			$anq3_array = array(
					 1=>"認識していない"
					,2=>"あまり認識していない"
					,3=>"少し認識している"
					,4=>"認識している"
					);
			$anq4_array = array(
					 1=>"まったく認識できていない"
					,2=>"あまり認識できていない"
					,3=>"少し認識できている"
					,4=>"認識できている"
					);
			$anq5_array = array(
					 1=>"まったく必要ないと思う"
					,2=>"あまり必要ないと思う"
					,3=>"少し必要だと思う"
					,4=>"必要だと思う"
					);
			$anq6_array = array(
					 1=>"メリットはまったくないと思う"
					,2=>"メリットはあまりないと思う"
					,3=>"メリットは少しあると思う"
					,4=>"メリットはあると思う"
					);
?>
		<div id="enqBox">
			<hr size=1 />
			<h4>強み理解のアンケート</h4>
			<p>以下は任意のアンケートです。ぜひ、ご協力頂けますと幸いです。</p>
			<p>※システム上個人は特定せず収集しております。</p>
			<div class="enq">
				<p>１.　あなたは、日々の業務の中で<span class="red">自分の強み</span>を意識していますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq_array as $key=>$val){
						$class= "disp";
						if($key == 3 || $key == 4){
							$class="disp2";
						}
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans1" id="ans_1_<?=$key?>" class="ans1"></div>
							<div class="anqBtn <?=$class?>" id="d_1_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_1_<?=$key?>" class="i_1">　<?=$key?>．<?=$val?></div>

						</li>
<?PHP
					}
?>
				</ul>
			</div>

			<div class="enq" id="disp2">
				<p class="mg">２.　3,4と回答した方に質問です。</p>
				<p class="mg2">2-1.あなたの強みは、<span class="red">どのような強み</span>ですか。具体的教えてください。</p>
				<p class="mg2">例：細かい書類作りが得意、企画やアイディアを出すことが得意　等</p>
				<p class="mg2"><input type="text" name="ans2" value="" class="w300" id="ans2"></p>
				<br />
				<p class="mg2">2-2.あなたは、日々の業務の中で<span class="red">自分の強みを活かす機会</span>に恵まれていますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq2_array as $key=>$val){
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans3" id="ans_3_<?=$key?>" class="ans3"></div>
							<div class="anqBtn" id="d_3_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_3_<?=$key?>" class="i_3">　<?=$key?>．<?=$val?></div>

						</li>
<?PHP
					}
?>
				</ul>

			</div>


			<div class="enq">
				<p>３.　あなたは、周囲の人が<span class="red">あなたの強みを認識している</span>と思いますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq3_array as $key=>$val){
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans4" id="ans_4_<?=$key?>" class="ans4"></div>
							<div class="anqBtn" id="d_4_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_4_<?=$key?>" class="i_4">　<?=$key?>．<?=$val?></div>

						</li>
<?PHP
					}
?>
				</ul>
			</div>


			<div class="enq">
				<p>４.　あなたは、周囲の人たちが<span class="red">どのような強みを持っているか</span>認識できていますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq4_array as $key=>$val){
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans5" id="ans_5_<?=$key?>" class="ans5" ></div>
							<div class="anqBtn" id="d_5_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_5_<?=$key?>" class="i_5">　<?=$key?>．<?=$val?></div>

						</li>
<?PHP
					}
?>
				</ul>
			</div>


			<div class="enq">
				<p>５－１.　周囲の人たちが<span class="red">どのような強みを持っているか</span>認識する必要があると思いますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq5_array as $key=>$val){
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans6" id="ans_6_<?=$key?>" class="ans6"></div>
							<div class="anqBtn" id="d_6_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_6_<?=$key?>" class="i_6">　<?=$key?>．<?=$val?></div>
						</li>
<?PHP
					}
?>
				</ul>
				<p class="mg2">5-2.上記と答えた理由を教えてください。</p>
				<p class="mg2"><input type="text" name="ans7" value="" class="w300" id="ans7"></p>
			</div>


			<div class="enq">
				<p>６－１.　周囲の人たちがどのような強みを持っているか認識することは、<span class="red">あなたの業務上メリット</span>があると思いますか。</p>
				<ul class="ulanq">
<?PHP
					foreach($anq6_array as $key=>$val){
?>
						<li>
							<div class="indent"><input type="radio" value="<?=$key?>" name="ans8" id="ans_8_<?=$key?>" class="ans8"></div>
							<div class="anqBtn" id="d_8_<?=$key?>" ><img src="<?=D_URL?>images/radio_off.jpg" id="i_8_<?=$key?>" class="i_8">　<?=$key?>．<?=$val?></div>
						</li>
<?PHP
					}
?>
				</ul>
				<p class="mg2">6-2.上記と答えた理由を教えてください。</p>
				<p class="mg2"><input type="text" name="ans9" value="" class="w300" id="ans9"></p>
			</div>
			<p >アンケートは以上です。<br />ご協力ありがとうございました。</p>
			<center><input type="button" name="anqButton" value="アンケート登録" id="anqButton" class="button"></center>

		</div>
<?PHP
		}elseif($enq_status && $enqRow == 1){
?>
		<div id="enqBox">
		<p ><center>アンケートご協力ありがとうございました。</center></p>
		</div>
<?PHP
		}
?>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
