<?php

for ($i=1; $i <= 20 ; $i++) { 
	if ($i % 3 == 0) {
		echo $i;
		echo " Boot"."<br>";
	} elseif($i % 3 == 1) {
		echo $i;
		echo " Camp"."<br>";
	}
}

?>