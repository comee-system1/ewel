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
				あなたが受講した『リーダーのフィードバックがメンバーの主体的行動に与える効果』の研修に関わることを伺います。以下の項目はどのくらいあてはまりますか。
				</dd>
			</dl>

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
