<?PHP
$css1 = "guide";

$js[1] = "page";
if($exam_state == 1 || $exam_state == 2){
	$js[2] = "exam";
}


	$title = "受検ガイダンス";
	$text[1] = "問題の順番に特に意味はありませんので、解ける問題から答えてください。";
	$text[2] = "考えて解答した問題のみをマークし、それ以外は空欄にしておいてください。（適当にマークすると、採点されない場合があります。）";
	$text[3] = "設問は30問です。";
	$text[4] = "受検の制限時間は".$times[ 'minute_rest' ]."分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。 改ページの間にもタイマーは動いていますが、次ページが表示されると同時に、改ページ時間分を戻します。従って、改ページに要した時間はカウントされません。";
	$text[5] = "検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、担当者の指示に従ってください。";
	$text[6] = "計算用紙、筆記用具、電卓をご用意ください。";
	$text[7] = "当社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。";
	$text[8] = "検査を開始する";
	$text[9] = "";
	$text[10] = "";
	$text[11] = "";
	$text[12] = "";
	$text[13] = "";
	$text[14] = "";
	$text[15] = "";
	$text[16] = "";
	$text[17] = "";
	$text[18] = "";

$flgs = "guide";

include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
		<ol class="f18">
			<li><?=$text[1]?></li> 
			<li><?=$text[2]?></li>
			<li><?=$text[3]?></li>
			<li><?=$text[4]?></li>
			<li class="b"><?=$text[5]?></li>
			<li><?=$text[6]?></li>
			<li><?=$text[7]?></li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="<?=$text[8]?>" class="button">
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
