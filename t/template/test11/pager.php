<?PHP

?>
<div class="pagesBox">
	<p>設問回答状況（未回答の設問があるページは赤で表示されます）</p>
	<ul class="pages">
	<?PHP
	$num = 1;
	for($i=1;$i<=13;$i++){
		$cl = "on";
		$ans = "ans".$num;

/*
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
*/
		switch($i){
			case "1":
				if(
					$tdetail[ 'ans1' ] 	&& 	$tdetail[ 'ans2' ] 	&& 	$tdetail[ 'ans3' ]	&& 	$tdetail[ 'ans4' ]
					){
					$cl = "";
				}
			break;
			case "2":
				if(
					$tdetail[ 'ans5' ] 	&& 	$tdetail[ 'ans6' ] 	&& 	$tdetail[ 'ans7' ] 	&& 	$tdetail[ 'ans8' ]
					){
					$cl = "";
				}
			break;
			case "3":
				if(
					$tdetail[ 'ans9' ] && $tdetail[ 'ans10' ] && $tdetail[ 'ans11' ] && $tdetail[ 'ans12' ]
					){
					$cl = "";
				}
			break;
			case "4":
				if(
					$tdetail[ 'ans13' ] && $tdetail[ 'ans14' ] && $tdetail[ 'ans15' ] && $tdetail[ 'ans16' ]
					){
					$cl = "";
				}
			break;
			case "5":
				if(
					$tdetail[ 'ans17' ] && $tdetail[ 'ans18' ] && $tdetail[ 'ans19' ] && $tdetail[ 'ans20' ]
					){
					$cl = "";
				}
			break;
			case "6":
				if(
					$tdetail[ 'ans21' ] && $tdetail[ 'ans22' ] && $tdetail[ 'ans23' ] && $tdetail[ 'ans24' ]
					){
					$cl = "";
				}
			break;
			case "7":
				if(
					$tdetail[ 'ans25' ] && $tdetail[ 'ans26' ] && $tdetail[ 'ans27' ] && $tdetail[ 'ans28' ]
					){
					$cl = "";
				}
			break;
			case "8":
				if(
					$tdetail[ 'ans29' ] && $tdetail[ 'ans30' ] && $tdetail[ 'ans31' ] && $tdetail[ 'ans32' ]
					){
					$cl = "";
				}
			break;
			case "9":
				if(
					$tdetail[ 'ans33' ] && $tdetail[ 'ans34' ] 
					){
					$cl = "";
				}
			break;
			case "10":
				if(
					$tdetail[ 'ans35' ] && $tdetail[ 'ans36' ] && $tdetail[ 'ans37' ] && $tdetail[ 'ans38' ] 
					&& $tdetail[ 'ans39' ] && $tdetail[ 'ans40' ] && $tdetail[ 'ans41' ]
					){
					$cl = "";
				}
			break;
			case "11":
				if(
					$tdetail[ 'ans42' ] && $tdetail[ 'ans43' ] && $tdetail[ 'ans44' ] && $tdetail[ 'ans45' ] 
					&& $tdetail[ 'ans46' ] && $tdetail[ 'ans47' ] 
					){
					$cl = "";
				}
			break;
			case "12":
				if(
					$tdetail[ 'ans48' ] && $tdetail[ 'ans49' ] && $tdetail[ 'ans50' ] && $tdetail[ 'ans51' ] 
					&& $tdetail[ 'ans52' ] && $tdetail[ 'ans53' ] 
					){
					$cl = "";
				}
			break;
			case "13":
				if(
					$tdetail[ 'ans54' ] && $tdetail[ 'ans55' ] && $tdetail[ 'ans56' ] 
					){
					$cl = "";
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

</div>
<br clear=all />

