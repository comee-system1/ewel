<?PHP
$css1 = "guide";
$title = "受検ガイダンス";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&type=<?=$_REQUEST[ 'type' ]?>" method="POST">

		<p>
		このたびはお忙しい中、アンケートに協力くださり、誠にありがとうございます。
		</p>
		<p style="margin-top:20px;">
		このアンケートは『上司のフィードバックの仕方が職場の改善的発言及び協働的工夫に与える効果』という研究の一環として、チームで働く職場における上司のフィードバックの仕方が、メンバーである部下の働き方に与える影響を検討することを目的としています。
		</p>
		<p style="margin-top:20px;">
		ご回答は、社外のアンケートシステムに保存され、個人情報を含まないデータとして研究者に提供されます。社内の方がデータにアクセスできません。
		<br />
		この研究への協力をお断りになっても、何ら不利益を受けることはありません。回答中もいつでも中止することができます。
		</p>

		<p style="margin-top:20px;color:red;">
		下記をお読みいただいた上でご協力くださる方は、『検査を開始する』をクリックして回答画面にお進みください。
		</p>
		<ol>
			<li>
			アンケート項目は約100問です（予想所要時間20分程度）。あなたの働き方に関する基本情報、上司のフィードバックの仕方、および、チームにおけるあなたの行動や仕事に対する態度について伺います。

			</li>
			<li>
			アンケートに正答はありません。あなたのお考えをありのままにお答え下さい。
			</li>
			<li>
			回答中に疲れを感じた場合には、適宜、休憩をお取りいただければと存じます。
			</li>
			<li>
			答えたくない質問があった場合などは途中でやめていただいても結構です。
			</li>
			<li>
			ご回答は研究以外の目的では使用しません。ご回答の保管および分析は、研究代表者である繁桝江里、共同研究者である山口裕幸、林直保子のみが行います。
			</li>
			<li>
			ご回答は保管期間終了時（2029年3月31日）まで厳重に保管し、その後は責任を持って廃棄します。
			</li>
			<li>
			本研究の実施について、青山学院大学の研究倫理審査委員会の審査を経た上で学長の承認を得ております。

			</li>
		</ol>
		<div style="text-align:right;">
		研究代表者<br />
		青山学院大学　教授　繁桝江里
		</div>
		<p>
		アンケートへの協力に同意する場合は「検査を開始する」ボタンを押してください。
		</p>
	<div class="center" style="text-align:center;">
		<input type="button" name="page" value="閉じる" class="button" onClick="window.close(); return false;">

		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="flag" value="start">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="m" value="<?=$_REQUEST[ 'm' ]?>">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
