<?php 

/*
 * Basic algorithmic solution to problem
 *
 * @return void  No return, outputs directly 
 */
function basicResearchSquare() {
	$o = "";
	for($i = 1; $i <= 100; $i++) {

		if($i % 3 == 0 || $i % 5 == 0) {

			if($i % 3 == 0) {
				$o .= "Research";
			}

			if($i % 5 == 0) {
				
				if($o) {
					$o .= " ";
				}

				$o .= "Square";
			}
		} else {
			$o .= $i;
		}
		echo $o . "<br />";
		$o = "";
	}
}