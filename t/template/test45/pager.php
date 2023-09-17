<?PHP

?>
<div class="pagesBox">
	<p><?=$text[2]?></p>
	<ul class="pages">
	<?PHP
	$num = 1;
	for($i=1;$i<=12;$i++){
		$cl = "";
		if($i == 1){
			if(
				$tdetail[ 'ans1' ]
				&& $tdetail[ 'ans2' ]
				&& $tdetail[ 'ans3' ]
				&& $tdetail[ 'ans4' ]
				&& $tdetail[ 'ans5' ]
				&& $tdetail[ 'ans6' ]
			){
				$cl = "on";
			}
		}

		if($i == 2){
			if(
				$tdetail[ 'ans7' ]
				&& $tdetail[ 'ans8' ]
				&& $tdetail[ 'ans9' ]
				&& $tdetail[ 'ans10' ]
				&& $tdetail[ 'ans11' ]
				&& $tdetail[ 'ans12' ]
			){
				$cl = "on";
			}
		}

		if($i == 3){
			if(
				   $tdetail[ 'ans13' ]
				&& $tdetail[ 'ans14' ]
				&& $tdetail[ 'ans15' ]
				&& $tdetail[ 'ans16' ]
				&& $tdetail[ 'ans17' ]
				&& $tdetail[ 'ans18' ]
			){
				$cl = "on";
			}
		}

		if($i == 4){
			if(
				   $tdetail[ 'ans19' ]
				&& $tdetail[ 'ans20' ]
				&& $tdetail[ 'ans21' ]
				&& $tdetail[ 'ans22' ]
				&& $tdetail[ 'ans23' ]
			){
				$cl = "on";
			}
		}
		if($i == 5){
			if(
				   $tdetail[ 'ans24' ]
				&& $tdetail[ 'ans25' ]
				&& $tdetail[ 'ans26' ]
				&& $tdetail[ 'ans27' ]
				&& $tdetail[ 'ans28' ]
				&& $tdetail[ 'ans29' ]
			){
				$cl = "on";
			}
		}
		if($i == 6){
			if(
				   $tdetail[ 'ans30' ]
				&& $tdetail[ 'ans31' ]
				&& $tdetail[ 'ans32' ]
				&& $tdetail[ 'ans33' ]
				&& $tdetail[ 'ans34' ]
				&& $tdetail[ 'ans35' ]
			){
				$cl = "on";
			}
		}
		if($i == 7){
			if(
				   $tdetail[ 'ans36' ]
				&& $tdetail[ 'ans37' ]
				&& $tdetail[ 'ans38' ]
				&& $tdetail[ 'ans39' ]
				&& $tdetail[ 'ans40' ]
				&& $tdetail[ 'ans41' ]
			){
				$cl = "on";
			}
		}
		if($i == 8){
			if(
				   $tdetail[ 'ans42' ]
				&& $tdetail[ 'ans43' ]
				&& $tdetail[ 'ans44' ]
				&& $tdetail[ 'ans45' ]
				&& $tdetail[ 'ans46' ]
			){
				$cl = "on";
			}
		}
		if($i == 9){
			if(
				   $tdetail[ 'ans47' ]
				&& $tdetail[ 'ans48' ]
				&& $tdetail[ 'ans49' ]
				&& $tdetail[ 'ans50' ]
			){
				$cl = "on";
			}
		}

		if($i == 10){
			if(
				   $tdetail[ 'ans51' ]
				&& $tdetail[ 'ans52' ]
				&& $tdetail[ 'ans53' ]
				&& $tdetail[ 'ans54' ]
				&& $tdetail[ 'ans55' ]
			){
				$cl = "on";
			}
		}
		if($i == 11){
			if(
				   $tdetail[ 'ans56' ]
				&& $tdetail[ 'ans57' ]
				&& $tdetail[ 'ans58' ]
				&& $tdetail[ 'ans59' ]
				&& $tdetail[ 'ans60' ]
			){
				$cl = "on";
			}
		}

		if($i == 12){
			if(
				   $tdetail[ 'ans61' ]
				&& $tdetail[ 'ans62' ]
				&& $tdetail[ 'ans63' ]
				&& $tdetail[ 'ans64' ]
				&& $tdetail[ 'ans65' ]
			){
				$cl = "on";
			}
		}


		
		$num++;
	?>
		<li class="<?=$cl?>"><a href="javascript:void(0);" id="p_<?=$i?>_<?=$_REQUEST[ 'k' ]?>" class="pages" ><?=$i?></a></li>
	<?php
	}
	?>
	</ul>
<br clear=all />

</div>
<br clear=all />

