<?PHP
if($language == 2){
	//中国語
	$title = "除检查指导";
	$str1 = "回答时要注意";
	$str2 = "针对各项问题，从选项中选择现在自己有可能做出的倾向";
	$str3 = "必须回答所有问题";
	$str4 = "接受检查的要领";
	$str5 = "从选项中选出一个最恰当的选项";
	$str6 = "开端";

}else{
	$title = "受検ガイダンス";
	$str1 = "回答時のご注意";
	$str2 = "各質問に対し、現在のご自身が取るであろう傾向を選択肢の中から選択してください";
	$str3 = "必ず全ての質問に回答してください";
	$str4 = "検査受検の手順";
	$str5 = "設問の中のそれぞれの選択肢について、もっとも適当と思われるものを１つだけ選んでください";
	$str6 = "開始する";
}
$css1 = "guide";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
	<h2 class="title"><?=$str1?></h2>
	<ol>
		<li>◆ <?=$str2?></li>
		<li>◆ <?=$str3?></li>
	</ol>


	<h2 class="title"><?=$str4?></h2>
	<ol>
		<li>◆ <?=$str5?></li>
	</ol>


	<div class="center">
		<input type="submit" name="page" value="<?=$str6?>" class="button">
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
