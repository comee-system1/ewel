<?PHP
$css1 = "guide";
$css2 = "page";
$title = "受検ページ";
$js[1] = "page";
$js[2] = "fin";
include_once("include_header.php");

include_once("../init/resultBa1.php");

switch($language){

	default:
		$title = "受検ページ";
		$text[1] = "が終了しました";
		$text[2] = "情報はサーバーに登録いたしました";
		$text[3] = "";
		$text[4] = "";
		$text[5] = "";
		$text[6] = "";
		$text[7] = "";
		$text[8] = "";
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

		$btnkey[1] = "画面を閉じる";


	break;
}


?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
		if($fin_disp == 1){
			
?>
		<div id="ansBox">
			<table class="answerList">
				<tr>
					<th>No</th>
					<th>回答</th>
					<th>正解</th>
				</tr>
<?PHP
				for($i=1;$i<=20;$i++){
					$bg="";
					if($i%2 == '0'){
						$bg = "bg";
					}
					$keys = "ans".$i;
?>
				<tr>
					<td class="<?=$bg?>" ><?=$i?></td>
					<td class="<?=$bg?>" ><?=$tdetail[$keys]?></td>
					<td class="<?=$bg?>" ><?=$array_answer[$i]?></td>
				</tr>
<?PHP
				}
?>
			</table>

			<table class="answerList">
				<tr>
					<th>No</th>
					<th>回答</th>
					<th>正解</th>
				</tr>
<?PHP
				for($i=21;$i<=40;$i++){
					$bg="";
					if($i%2 == '0'){
						$bg = "bg";
					}
					$keys = "ans".$i;
?>
				<tr>
					<td class="<?=$bg?>" ><?=$i?></td>
					<td class="<?=$bg?>" ><?=$tdetail[$keys]?></td>
					<td class="<?=$bg?>" ><?=$array_answer[$i]?></td>
				</tr>
<?PHP
				}
?>
			</table>

			<table class="answerList">
				<tr>
					<th>No</th>
					<th>回答</th>
					<th>正解</th>
				</tr>
<?PHP
				for($i=41;$i<=60;$i++){
					$bg="";
					if($i%2 == '0'){
						$bg = "bg";
					}
					$keys = "ans".$i;
?>
				<tr>
					<td class="<?=$bg?>" ><?=$i?></td>
					<td class="<?=$bg?>" ><?=$tdetail[$keys]?></td>
					<td class="<?=$bg?>" ><?=$array_answer[$i]?></td>
				</tr>
<?PHP
				}
?>
			</table>

			<table class="answerList">
				<tr>
					<th>No</th>
					<th>回答</th>
					<th>正解</th>
				</tr>
<?PHP
				for($i=61;$i<=65;$i++){
					$bg="";
					if($i%2 == '0'){
						$bg = "bg";
					}
					$keys = "ans".$i;
?>
				<tr>
					<td class="<?=$bg?>" ><?=$i?></td>
					<td class="<?=$bg?>" ><?=$tdetail[$keys]?></td>
					<td class="<?=$bg?>" ><?=$array_answer[$i]?></td>
				</tr>
<?PHP
				}
?>

				<tr>
					<td class="bg" >得点</td>
					<td class="bg" colspan=2 align=right><?=$total?>/65</td>
				</tr>

			</table>
		</div>
<?PHP
		}else{
?>
			<div id="rltBox">
				<p><?=$test[ 'testname' ]?><?=$text[1]?></p>
				<p><?=$test[ 'testname' ]?><?=$text[2]?></p>
			</div>
<?PHP
		}
?>
		<br clear=all />
		<center><input type="button" id="close" value="<?=$btnkey[1]?>" class="button"></center>
	</form>
	<input type="hidden" id="k" value="<?=$_REQUEST[ 'k' ]?>">
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
?>
