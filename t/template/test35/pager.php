<?PHP

?>
<div class="pagesBox">
	<p><?=$text[2]?></p>
	<ul class="pages">
	<?PHP
	$num = 1;
	for($i=1;$i<=14;$i++){
		$cl = "";
		switch($i){
			case "1":
				if($tdetail['ans1'] && $tdetail['ans2']){
					$cl = "on";
				}
			break;
			case "2":
				if($tdetail['ans3']){
					$cl = "on";
				}
			break;
			case "3":
				if($tdetail['ans4'] && $tdetail['ans5']){
					$cl = "on";
				}
			break;
			case "4":
				if($tdetail['ans6'] && $tdetail['ans7']
					&& $tdetail['ans8'] && $tdetail['ans9']
					){
					$cl = "on";
				}
			break;
			case "5":
				if($tdetail['ans10'] && $tdetail['ans11']){
					$cl = "on";
				}
			break;
			case "6":
				if($tdetail['ans12'] && $tdetail['ans13']){
					$cl = "on";
				}
			break;
			case "7":
				if($tdetail['ans14'] && $tdetail['ans15']){
					$cl = "on";
				}
			break;
			case "8":
				if($tdetail['ans16'] && $tdetail['ans17']){
					$cl = "on";
				}
			break;
			case "9":
				if($tdetail['ans18'] && $tdetail['ans19']){
					$cl = "on";
				}
			break;
			case "10":
				if($tdetail['ans20'] && $tdetail['ans21']){
					$cl = "on";
				}
			break;
			case "11":
				if($tdetail['ans22'] ){
					$cl = "on";
				}
			break;
			case "12":
				if($tdetail['ans23'] && $tdetail['ans24']){
					$cl = "on";
				}
			break;
			case "13":
				if($tdetail['ans25'] ){
					$cl = "on";
				}
			break;
			case "14":
				if($tdetail['ans26'] && $tdetail['ans27']){
					$cl = "on";
				}
			break;

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
	for($i=15;$i<=17;$i++){
		$cl = "";
		switch($i){
			case "15":
				if($tdetail['ans28']){
					$cl = "on";
				}
			break;
			case "16":
				if($tdetail['ans29']){
					$cl = "on";
				}
			break;
			case "17":
				if($tdetail['ans30']){
					$cl = "on";
				}
			break;
			
			
		}
	?>
		<li class="<?=$cl?>" ><a href="javascript:void(0);" id="p_<?=$i?>_<?=$_REQUEST[ 'k' ]?>"  class="pages"  ><?=$i?></a></li>
	<?php
	}
	?>
	</ul>
</div>
<br clear=all />

