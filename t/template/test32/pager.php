<?PHP

?>
<div class="pagesBox">
	<p>設問回答状況（未回答の設問があるページは赤で表示されます）</p>
	<ul class="pages">
	<?PHP
	$num = 1;
	for($i=1;$i<=13;$i++){
		$cl = "";
		$ans = "ans".$num;
		if($num == 7){
			if($tdetail[ $ans ]){
				$c += 1;
			}
			$num++;
			$ans = "ans".$num;
			if($tdetail[ $ans ]){
				$c += 1;
			}
			$num++;
			$ans = "ans".$num;
			if($tdetail[ $ans ]){
				$c += 1;
			}
			if($c == 3){
				$cl = "on";
			}
		}else
		if($tdetail[ $ans ]){
			$cl = "on";
		}
		
		$num++;
	?>
		<li class="<?=$cl?>"><a href="javascript:void(0);" id="p_<?=$i?>_<?=$_REQUEST[ 'k' ]?>" class="pages" ><?=$i?></a></li>
	<?php
	}
	?>
	</ul>

</div>
<br clear=all />

