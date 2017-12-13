<?php
	echo "<center>";
	$max=9;
	for($i=1;$i<$max;$i++){
		if($i!=1){
			$print='';
			for($a=1;$a<$i;$a++){
				$print.=$a." ";
			}
			echo $print.' '.$i.''.strrev($print).'<br>';
		}else{
			echo " ".$i." <br>";
		}
	}
	for($i=$max;$i>0;$i--){
		if($i!=1){
			$print='';
			for($a=1;$a<$i;$a++){
				$print.=$a." ";
			}
			echo $print." ".$i." ".strrev($print).'<br>';
		}else{
			echo ' '.$i.' ';
		}
	}
?>