<?php
	function reformat($str){
		$vowels = "aeiou";
		$str = strtolower($str);
		for ($i=0; $i < strlen($vowels); $i++) { 
			for ($x=0; $x < strlen($str); $x++) { 
				if ($str[$x] == $vowels[$i]) {
					$str[$x] = '';
				}
			}
		}
		$str[0] = strtoupper($str[0]);
		echo $str;
	}
?>
