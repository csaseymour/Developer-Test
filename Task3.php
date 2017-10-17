<?php
	function next_binary_number($in){
		$binary = $in;
		for ($i = sizeof($binary) - 1; $i >= 0; $i--) { 
			if ($binary[$i] == 0){
				$binary[$i] = 1;
				break;
			}
			if($binary[$i] == 1){
				$binary[$i] = 0;
			}
		}
		for ($i=0; $i < sizeof($binary); $i++) { 
			echo $binary[$i];
		}
	}
?>
