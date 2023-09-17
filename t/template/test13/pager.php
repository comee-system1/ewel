<?PHP

?>
<div class="pagesBox">
	<p><?=$text[2]?></p>
	<ul class="pages">
	<?PHP
	$num = 1;
	for($i=1;$i<=14;$i++){
		$c = "";
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
	<br clear=all />
	<ul class="pages">
	<?PHP
	$num = 2;
	for($i=15;$i<=28;$i++){
		$cl = "";
		$k = $num+$i;
		$ans = "ans".$k;
		if($tdetail[ $ans ]){
			$cl = "on";
		}
	?>
		<li class="<?=$cl?>" ><a href="javascript:void(0);" id="p_<?=$i?>_<?=$_REQUEST[ 'k' ]?>"  class="pages"  ><?=$i?></a></li>
	<?php
	}
	?>
	</ul>
</div>
<br clear=all />

