<?PHP
$array_question[1] = "１．あなたの職種をお知らせください。";
$array_question[2] = "２．あなたのチームのメンバー（あなたが仕事の指示をしたり、仕事に対する評価責任を持つ人）は何人いますか。あなたを除いた数を半角整数値でお答えください。";
$array_question[3] = "３．あなたが今のチームのリーダーになってからどれくらい経ちますか。「〇年〇か月」という形式で、半角整数値でお答えください。";
$array_question[4] = "４．現在のチームで働き始めてからどれくらい経ちますか。「〇年〇か月」という形式で半角整数値でお答えください。";
$array_question[5] = "５．あなたのチームのメンバーは、何人いますか。（".$bossdata[ 'sei' ]."）を除いた数を半角整数値でお答えください。";
$array_question[10] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんと週何日くらい直接会って話をしますか。※プライベートか仕事上かは問いません。";



if($_REQUEST[ 'type' ] == "subordinate"){
	
	$array_explain[2][0] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんは、以下のことをあなたにそれぞれどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。";
}else{
	$array_explain[2][0] = "あなたは、以下のことを<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにそれぞれどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。";
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[3][0] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんに対して、以下のことをあなたはそれぞれどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。";

}else{
	$array_explain[3][0] = "以下のことは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのパフォーマンスに対するあなたのフィードバックの仕方に、それぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[4][0] = "以下のことは、あなたのパフォーマンスに対する<u><b>".$bossdata[ 'sei' ]."</b></u>さんのフィードバックの仕方に、それぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

}else{
//	$array_explain[4][0] = "以下のことは、あなたにそれぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";
	$array_explain[4][0] = "あなたが、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんに<u><b>悪いところを指摘するとき</b></u>について思い出してください。以下のことはそれぞれどれくらい当てはまりますか。一度も指摘をしたことがない人は、想像してお答えください。※最もよくあてはまるものをひとつずつ選んでください。";
}

if($_REQUEST[ 'type' ] == "subordinate"){

	$array_explain[5][0] = "<u><b>".$bossdata[ 'sei' ]."</b></u>さんが、<u><b>あなたに悪いところを指摘するとき</b></u>について思い出してください。以下のことはそれぞれどれくらい当てはまりますか。一度も指摘を受けたことがない人は、想像してお答えください。";

}else{
	$array_explain[5][0] = "以下のことは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さん、または、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのお考えに、どの程度あてはまると思いますか。最もよくあてはまるものをひとつずつ選んでください。";

}




if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[6][0] = "現在のあなたのお仕事に、以下の項目はどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

	
}else{

	$array_explain[6][0] = "<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんはあなたに対して、以下のことをそれぞれどれくらいの頻度でしていますか。文中の「自分」は<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんを指します。最もよくあてはまるものをひとつずつ選んでください。";
	//$array_explain[6][0] = "どれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。";
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[7][0] = "現在のあなたのお仕事に、以下の項目はどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

}else{
	$array_explain[7][0] = "以下のことは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにそれぞれどの程度あてはまりますか。最もよくあてはまるものをひとつずつ選んでください。※なお、「所属部署」とは、あなたのもとで働いている人全体とします。";

}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[8][0] = "以下のことは、あなたにそれぞれどの程度あてはまりますか。最もよくあてはまるものをひとつずつ選んでください。※なお、「所属部署」とは、<u><b>".$bossdata[ 'sei' ]."</b></u>さんのもとで働いている人全体とします。";

}else{
	$array_explain[8][0] = "現在の<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんのお仕事に、以下の項目はどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。";
}

if($_REQUEST[ 'type' ] == "subordinate"){

	$array_explain[9][0] = "以下のことは、あなたにとってどのくらい価値がありますか。最もよくあてはまるものをひとつずつ選んでください。";

}else{
	$array_explain[9][0] = "以下のことは、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんにとってどのくらい価値があると、<b><u>".$person[ 'ans1' ][ 'sei' ]."</u></b>さんは考えていると思いますか。";
}

if($_REQUEST[ 'type' ] == "subordinate"){
	$array_explain[10][0] = "以下のことは、<u><b>".$bossdata[ 'sei' ]."</b></u>さんにそれぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

}else{
	$array_explain[10][0] = "あなたは、以下のことを<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにそれぞれどれくらいの頻度でしていますか。最もよくあてはまるものをひとつずつ選んでください。";
}


$array_explain[11][0] = "以下のことは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのパフォーマンスに対するあなたのフィードバックの仕方に、それぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";


//$array_explain[12][0] = "以下のことは、あなたにそれぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";
$array_explain[12][0] = "あなたが、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんに<u><b>悪いところを指摘するとき</b></u>について思い出してください。以下のことはそれぞれどれくらい当てはまりますか。一度も指摘をしたことがない人は、想像してお答えください。※最もよくあてはまるものをひとつずつ選んでください。
";


$array_explain[13][0] = "以下のことは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さん、または、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのお考えに、どの程度あてはまると思いますか。最もよくあてはまるものをひとつずつ選んでください。";



$array_explain[14][0] = "<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんはあなたに対して、以下のことをそれぞれどれくらいの頻度でしていますか。文中の「自分」は<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんを指します。最もよくあてはまるものをひとつずつ選んでください。";




$array_explain[15][0] = "以下のことは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにそれぞれどの程度あてはまりますか。最もよくあてはまるものをひとつずつ選んでください。※なお、「所属部署」とは、あなたのもとで働いている人全体とします。";



$array_explain[16][0] = "現在の<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんのお仕事に、以下の項目はどのくらいあてはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

$array_explain[17][0] = "以下のことは、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんにとってどのくらい価値があると、<b><u>".$person[ 'ans2' ][ 'sei' ]."</u></b>さんは考えていると思いますか。";


$array_explain[18][0] = "以下のことは、あなたにそれぞれどのくらい当てはまりますか。最もよくあてはまるものをひとつずつ選んでください。";

$array_explain[19][0] = "以下のことは、あなたにとってどのくらい価値ありますか。";



?>