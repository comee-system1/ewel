<?PHP
$css1 = "guide";
$title = "受検";
include_once("include_header.php");
?>

<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>

<?PHP if(count($err)){ ?>
	<div style="color:red;border:1px solid red;">
<?PHP foreach($err as $key=>$val){ ?>
		<p style="padding:5px;margin:0px;"><?=$val?></p>
<?PHP } ?>
	</div>
<?PHP } ?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>&anq=<?=$_REQUEST[ 'anq' ]?>" method="POST">
	<p class="text-danger">
		※以下の質問では、「チーム」を「あなた、および、その下で働いているメンバー全員」とします。
		<br />
		※【Aさん】とは、あなたが事前アンケートにおいて「メンバーの中であなたが業務上で最も頻繁に接する人」として選んだ方としてお答えください（接触頻度が同じ人が複数いる場合はその中で名字の最初の文字が50音順で最も早い人をお選びいただいています）。
	</p>	

	<dl>
			<dt  style="float:left;width:30px;font-weight:normal;">1.</dt>
			<dd  style="float:left;width:90%">
			<span class="text-danger">【この２週間で】</span>以下のような形で、チームのメンバーと仕事について話すことは月に何回くらいありますか（挨拶、業務連絡などの短時間の話、世間話を除く）。オンラインで話す場合も含めて、半角整数値で入力してください。
			</dd>
	</dl>


			<table class="table table-bordered" style="width:600px;">
					<thead class="text-white">
							<tr class="bg-primary">
							<th scope="col" ></th>
							<th scope="col" style="width:400px;">設問</th>
							<th scope="col">回数</th>
							</tr>
					</thead>
					<tbody>
							<tr>
									<th scope="row">1</th>
									<td>チーム全体のミーティング</td>
									<td><input type="number" name="anq[1]"  value="" class="form-control" min="0"  required /></td>
							</tr>
							<tr>
									<th scope="row">2</th>
									<td>事前に決めて、一部のメンバーで集まって話すこと</td>
									<td><input type="number" name="anq[2]"  value="<?=$result['ans12']?>" class="form-control" min="0"  required /></td>
							</tr>
							<tr>
									<th scope="row">3</th>
									<td>事前に決めずに、一部のメンバーで集まって話すこと</td>
									<td><input type="number" name="anq[3]"  value="<?=$result['ans13']?>" class="form-control" min="0" required /></td>
							</tr>
							<tr>
									<th scope="row">4</th>
									<td><?=$bossname?>さんと1対1で話すこと</td>
									<td><input type="number" name="anq[4]"  value="<?=$result['ans14']?>" class="form-control" min="0" required /></td>
							</tr>
					</tbody>
			</table>


			<dl>
				<dt  style="float:left;width:30px;font-weight:normal;">2.</dt>
				<dd  style="float:left;width:90%">
				あなたが受講した『リーダーのフィードバックがメンバーの主体的行動に与える効果』の研修に関わることを伺います。
				</dd>
			</dl>
			<br clear="both" />
			<p>
			この研修では、「フィードバックの７つのチェックポイント」として下記が示され、①～④はチームの心理的安全性を高め、⑤と⑥は改善的発言を促進し、⑦は協働的工夫を促進することが想定されていました。
			<br />
			そこで、研修後の１か月間に「フィードバックの場面で７つのチェックポイントを意識し、できるかぎり実行してください。」として、職場での実施をお願いしております。
			</p>


			<dl style="border:1px solid blue; padding:10px;height:360px;">
				<dt style="float:left;width:30px;font-weight:normal;">①</dt>
				<dd style="float:left;width:90%">
				見かた：分配的公正性…メンバーの業績や仕事の成果、および、メンバーが仕事に注いだ努力やチームに対する貢献度を反映した公平･公正なもの
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">②</dt>
				<dd style="float:left;width:90%">
				やりかた：手続き的公正…誰に対しても一貫した、倫理的で道徳的な基準にそっていて、メンバー自身の意見や気持ちを伝える機会がある
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">③</dt>
				<dd style="float:left;width:90%">
				言いかた：対人的公正性…メンバーに誠実に接し、メンバーに対して不当な発言や批判をしない
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">④</dt>
				<dd style="float:left;width:90%">
				示しかた：情報的公正性…フィードバックの基準や理由を十分に＆合理的に説明し、率直＆適切なタイミングで詳細な情報を伝達
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">⑤</dt>
				<dd style="float:left;width:90%">
				向けかた：発展性…メンバーが学習し改善するための情報を提供し、メンバーの視点を問題解決志向に向ける
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">⑥</dt>
				<dd style="float:left;width:90%">
				返しかた：反応性…フィードバックする際にリーダー自身の対応を示すという反応的なコミュニケーションで、効力感を感じさせる
				</dd>
				<dt style="float:left;width:30px;font-weight:normal;clear:both;">⑦</dt>
				<dd style="float:left;width:90%">
				まとめかた：チーム性…フィードバックの内容が「目標の共有、役割の割り振り、協力体制と協力関係」の要素とどう関わるのかを整理し伝える
				</dd>
			</dl>

			<br clear="both" />

			<p>この研修について、以下の項目はどのくらいあてはまりますか。</p>
			<table class="table table-bordered">
					<tr class="bg-primary text-center text-white">
							<th rowspan="2"></th>
							<th  rowspan="2" valign="middle">設問</th>
							<?php foreach($array_column as $key=>$val):?>
							<th class="n text-center"><?=$key?></th>
							<?php endforeach;?>
					</tr>
					<tr class="bg-primary text-white">
							<?php foreach($array_column as $key=>$val):?>
							<th ><?=$val?></th>
							<?php endforeach;?>
					</tr>
					<?php
							$num = 5;
							foreach($array_ques as $key => $value ):
					?>
							<tr>
									<td><?=$key?></td>
									<td><?=$value?></td>
									<?php foreach($array_column as $k=>$val): ?>
									<td class="text-center">
										<input type="radio" name="anq[<?=$num?>]" value="<?=$k?>" />
									</td>
									<?php 
											endforeach;
									?>
							</tr>
					<?php 
							$num ++ ;
							endforeach;
							?>
					
			</table>

		<div class="center" style="text-align:center;clear:both;">
			<input type="button" name="page" value="閉じる" class="button" id="close">
			<input type="submit" name="next" value="完了" class="button">
		</div>
		<input type="hidden" name="temp" value="page">
		<input type="hidden" name="jitid" value="<?=$jitid?>">
		<input type="hidden" name="mem" value="<?=$_REQUEST[ 'mem' ]?>">
		<input type="hidden" name="nextPage" value="<?=$pager?>" >
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>
<script type="text/javascript" >

</script>
<style type="text/css">
	input[type=radio] {
    width: 30px;
    height: 30px;
    vertical-align: middle;
	}
</style>

<?PHP
include_once("include_footer.php");
