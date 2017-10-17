<?php
	function repeat($rep){
		for ($i=0; $i < 3; $i++){ 
			foreach ($rep as $key) {
				echo $key;
			}
		}
	}
	repeat([1,2,3]);
?>
