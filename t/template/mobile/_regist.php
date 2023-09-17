<?PHP
$css1 = "regist";
$title = "顧客情報登録";
$js[1] = "regist";

include_once("include_header.php");

$gender[1] = "男性";
$gender[2] = "女性";
?>
<div id="m_main">
	<div id="m_contents">	
<?PHP
	include_once("include_title.php");

?>
		<h3 id="kojinh3" style="width:100%;">個人情報属性</h3>
		<form action="./?k=<?=$_REQUEST[ 'k' ]?>"  method="POST" >		
		<table>
			<?php if($test[ 'input_not_name' ] == 1): ?>
				<!-- 20220525 山本対応 ログインIDの表示 -->
				<tr>
					<td>ログインID：
					<?= $test['id'] ?></td>
				</tr>
				<input type="hidden" name="name1" value="設定なし" >
				<input type="hidden" name="name2" value=" " >
				<input type="hidden" name="kana1" value="設定なし" >
				<input type="hidden" name="kana2" value=" " >
			<?php else: ?>
			<!-- 20220524 山本対応 ログインIDの表示 -->
			<tr>
				<td>ログインID: <?=$_REQUEST['exam_id']?></td>
			</tr>
			<tr>
				<td>
					氏名<br />
					姓<input type="text" name="name1" value="<?=$nam[0]?>" id="name1"><br />
					名<input type="text" name="name2" value="<?=$nam[1]?>" id="name2"><br />
					<span class="explain" >例：佐藤　太郎</span>
				</td>
			<tr>
			<tr>
				<td>ふりがな<br />
					姓<input type="text" name="kana1" value="<?=$kan[0]?>" id="kana1"><br />
					名<input type="text" name="kana2" value="<?=$kan[1]?>" id="kana2"><br />
					<span class="explain" >例：さとう　たろう</span>
				</td>
			<tr>
				<?php endif; ?>
				<?php if($test[ 'input_not_gender' ] == 0): ?>
			<tr>
				<td>性別
				<span style="color:red;">※性別は必須項目ではありません</span>	
				<br />
<?PHP
					$on1  = "on";
					$chk1 = "";
					$on2  = "off";
					$chk2 = "";
					if($gend == 2){
						$on1  = "off";
						$chk1 = "";
						$on2  = "on";
						$chk2 = "CHECKED";
						
					}
					
?>
					<input type="radio" name="gender" value="1" id="check_1" class="radio" <?=$chk1?> >
					<span class="gendTxt"><?=$gender[1]?></span>
					<br />
					<input type="radio" name="gender" value="2" id="check_2" class="radio" <?=$chk2?> >
					<span class="gendTxt"><?=$gender[2]?></span>
					
				</td>
			<tr>
			<?php endif; ?>
			<tr>
				<td>
					生年月日<br />
					<?=$_REQUEST[ 'year' ]?>年
					<?=$_REQUEST[ 'month' ]?>月
					<?=$_REQUEST[ 'day' ]?>日
					<input type="hidden" name="year" value="<?=$_REQUEST[ 'year' ]?>">
					<input type="hidden" name="month" value="<?=$_REQUEST[ 'month' ]?>">
					<input type="hidden" name="day" value="<?=$_REQUEST[ 'day' ]?>">

				</td>
			<tr>
		</table>
		<div id="buttonBox">
			<input type="submit" name="next" value="次へ" >
		</div>
		<input type="hidden" name="exam_id" value="<?=$_REQUEST[ 'exam_id' ]?>">
		</form>
		<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>

<div class="privacybox" style="border:none;margin-bottom: 10px;">

		<?php if($test["privacypolicy"] == 2): ?>
			<div class="privacybox">
				<?=nl2br($test[ 'privacypolicy_text' ])?>
			</div>
		<?php else: ?>
    <div class="privacybox">
                    <?php
                        $pv = "本検査提供会社";
                        if($test[ 'privacy_flg' ] == 1):?>
                            <?php $pv = $test[ 'name' ]; ?>
                    <?php endif;?>
                	<?=$pv?>は、個人情報を適切な方法で管理し、下記の利用目的以外で受検者の同意なく、第三者に対し開示することはありません。<br /><br />
                    <p><b>【個人情報の利用目的】</b>
					<br />
					<?php $pv = $test[ 'name' ];  ?>
					本検査提供会社は、<?=$pv?>の担当部署に、採用活動や人材育成等の目的範囲内に限定し、結果を開示します。<br />
					<?=$pv?>は、目的に応じ必要な範囲で、検査提供会社に情報を開示することがあります。<br />
					検査提供会社は、研究開発を目的として、受検者に関する検査結果を個人が識別、または特定できないようにし、利用する場合があります。<br />
					<br />
					<br />
					<b>【検査受検に関する注意事項】</b>
					<br />
					<!-- 20220606 山本対応 文言修正 -->
					本検査受検にて得られる検査結果は、当該受検者の人格の全てを規定したり、保証したりするものではありません。<br />
					検査提供会社は、検査受検の結果によって被る受検者の損害に対して、一切責任を負いません。<br /><br />

					同意して頂ける場合は、次へお進み下さい。
					</p>
    </div>
		<?php endif; ?>

</div>



<br />
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
