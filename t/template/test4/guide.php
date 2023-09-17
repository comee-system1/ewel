<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<p class="f18">
			本検査は、貴社の組織に所属する<?=$object?>として、リスクの高い人材を明確にするための検査です。 貴社の<?=$object?>
			として、<span class="red"> AとBの行動のどちらを取って欲しくないですか。取って欲しくない行動を想定し、</span>設問に回答してください。
		</p>
		<ol>
			<li>回答を入力しないと次ページに進めません。</li>
			<li>ブラウザの戻るボタンは使えません。ページ下部の「戻る」で、前のページに戻れます。 </li>
			<li>質問は、全部で66問あります。受検時間の目安は20分です。</li>
			<li>1つの質問には「A」と「B」の２つの文があります。「A」と「B」を比較して、当てはまる程度を選択し、1個所だけチェックをして下さい。</li>
			<li>検査を途中終了した場合は、再度ログインし直してください。検査は最初から表示されますが、前回の回答が記入されておりますので、途中からご受検頂けます。</li>
			<li>検査の途中で何らかの原因によりログアウトされた場合や、検査を中断された場合は、再度ログインし直してください。 </li>
		</ol>
		<hr />
		<p>※例	：「責任逃れをする」社員が、「人の話を聞かない」社員より、リスクと強く感じる場合は「明確にA」にチェックをしてください。</p>
		<table id="table">
			<tr>
				<th class="w300" >Ａ</th>
				<th class="w10">明確にＡ</th>
				<th class="w10">どちらかというとＡ</th>
				<th class="w10">どちらかというとＢ</th>
				<th class="w10">明確にＢ</th>
				<th class="w300" >Ｂ</th>
			</tr>
			<tr>
<?PHP
				$key = 1;
				$img1 = "on";
				$img2 = "off";
				$img3 = "off";
				$img4 = "off";
				$chk1 = "CHECKED";
				$chk2 = "";
				$chk3 = "";
				$chk4 = "";


?>
				<td>責任逃れをする</td>

				<td class="ans" ><div class="indent" ><input type="radio"   id="chk_<?=$key?>_1" <?=$chk1?> class="values<?=$key?>"></div><img src="/image/check_<?=$img1?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_1" /></td>
				<td class="ans" ><div class="indent" ><input type="radio"   id="chk_<?=$key?>_2" <?=$chk2?> class="values<?=$key?>"></div><img src="/image/check_<?=$img2?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_2" /></td>
				<td class="ans" ><div class="indent" ><input type="radio"  id="chk_<?=$key?>_3" <?=$chk3?> class="values<?=$key?>"></div><img src="/image/check_<?=$img3?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_3" /></td>
				<td class="ans" ><div class="indent" ><input type="radio"  id="chk_<?=$key?>_4" <?=$chk4?> class="values<?=$key?>"></div><img src="/image/check_<?=$img4?>.gif" class="radio img<?=$key?>" id="img_<?=$key?>_4" /></td>
				<td >人の話を聞かない</td>
			</tr>
		</table>
		<hr />
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
