<?PHP
$css1 = "page";
$title = "受検ページ";
$js[1] = "page";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");
?>
		<form action="" method="POST" >
			<div id="page1" class="w900 displayPage" >
				<h5>初期設定１：メールアドレスの入力</h5>
				<div id="flow">
					<ul>
						<li class="num act" >1</li>
						<li class="arrow" >→</li>
						<li class="num" >2</li>
						<li class="arrow" >→</li>
						<li class="num" >3</li>
						<li class="arrow" >→</li>
						<li class="num" >4</li>
					</ul>
				</div>
				<p class="f18 ct mg10">添削された結果の連絡を受け取るメールアドレスを入力してください。</p>
				<div class="w600">
					<p class="f18 mg0">メールアドレス</p>
					<input type="text" name="mail" value="" id="mail" class="texts w100p" >
					<p class="f18 mg0">確認用メールアドレス</p>
					<input type="text" name="mail2" value="" id="mail2" class="texts w100p" >
				</div>
				<div class="ct" >
					<input type="button" id="button-1" value="次へ" class="button w200 pd10 nextButtons" />
				</div>
			</div>

			<div id="page2" class="w900 displayPage" >
				<h5>初期設定２：質問カテゴリ選択</h5>
				<div id="flow">
					<ul>
						<li class="num" >1</li>
						<li class="arrow" >→</li>
						<li class="num act" >2</li>
						<li class="arrow" >→</li>
						<li class="num" >3</li>
						<li class="arrow" >→</li>
						<li class="num" >4</li>
					</ul>
				</div>
				<p class="f18 ct mg10">あなたが受けようとしている就職先カテゴリを選択してください。</p>
				<div class="w600">
					<p class="f18 mg0">▼就職先カテゴリ選択</p>
						<select name="tensaku_title_status"  id="tensaku_title_status" class="w100p pd10 f18"> 
					<?PHP
						foreach($category as $key=>$val){
					?>
							<option value="<?=$val?>"><?=$array_tensaku_title[$val]?></option>
					<?PHP
						}
					?>
						</select>
					</p>
				</div>
				<div class="ct" >
					<input type="button" id="buttonb-0" value="戻る" class="button w200 pd10 nextButtons" />
					<input type="button" id="button-2" value="次へ" class="button w200 pd10 nextButtons" />
				</div>
			</div>

			<div id="page3" class="w900 displayPage" >
				<h5>初期設定３：質問選択</h5>
				<div id="flow">
					<ul>
						<li class="num" >1</li>
						<li class="arrow" >→</li>
						<li class="num " >2</li>
						<li class="arrow" >→</li>
						<li class="num act" >3</li>
						<li class="arrow" >→</li>
						<li class="num" >4</li>
					</ul>
				</div>
				<p class="f18 mg10 w600">
					質問選択の欄に面接官から質問される頻度が高い質問のリストにしています。<br />
					最も頻度が高い5問については、共通で質問が出てきます。<br />
					残り2問を質問選択の欄から選んでください。
				</p>
				<div class="w500 fleft ">
					<div id="qlist" class="overf"></div>
				</div>
				<div class="w350 fleft ml20 overf">
					<p id="setLists"></p>
				</div>
				<div class="ct" >
					<input type="button" id="buttonb-1" value="戻る" class="button w200 pd10 nextButtons" />
					<input type="button" id="button-3" value="次へ" class="button w200 pd10 nextButtons" />
				</div>
			</div>

			<div id="page4" class="w900 displayPage" >
				<h5>初期設定４：入力内容確認</h5>
				<div id="flow">
					<ul>
						<li class="num" >1</li>
						<li class="arrow" >→</li>
						<li class="num " >2</li>
						<li class="arrow" >→</li>
						<li class="num" >3</li>
						<li class="arrow" >→</li>
						<li class="num act" >4</li>
					</ul>
				</div>
				<p class="f18 mg10 w700">
					以下の内容で登録を行います。<br />
					登録完了後は変更できませんので、良く確認してから登録ボタンを押してください。<br />
					変更したい場合は、修正ボタンを押し、修正してください。
				</p>
				<div class="w700 clearfix bb pd10 mg10">
					<p class="f18 mg0 iblock w200">メールアドレス</p>
					<p class="f18 mg0 iblock ml40" id="inputmail"></p>
				</div>
				<div class="w700 clearfix bb pd10 mg10">
					<p class="f18 mg0 iblock w200">質問カテゴリ</p>
					<p class="f18 mg0 iblock ml40" id="inputctg"></p>
				</div>
				<div class="w700 clearfix bb pd10 mg10">
					<p class="f18 mg0 iblock w200" style="vertical-align:top;">質問</p>
					<p class="f18 mg0 iblock w430" id="setLists2"></p>
				</div>
				<div class="ct" >
					<input type="button" id="buttonb-2" value="戻る" class="button w200 pd10 nextButtons" />
					<input type="submit" name="input" id="inputbtn"  value="入力ページ"  class="button w200 pd10" />
				</div>
			</div>


<!--
		<h3>メールアドレス設定</h3>
		添削内容を受け取るメールアドレスを入力してください。<br />
		<input type="text" name="mail" value="" id="mail" style="width:300px;" >
		<h3>設問選択画面</h3>
		<p class="mg" >▼設問カテゴリ選択</p>
		<select name="tensaku_title_status" id="tensaku_title_status" > 
<?PHP
		foreach($category as $key=>$val){
?>
			<option value="<?=$val?>"><?=$array_tensaku_title[$val]?></option>
<?PHP
		}
?>
		</select>
		<h3>質問選択</h3>
		<div id="qlist"></div>
		<input type="submit" name="input" value="入力ページ" class="button" id="input" >
-->
		</form>
	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<?PHP
include_once("include_footer.php");
?>
