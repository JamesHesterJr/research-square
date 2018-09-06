<?php

// Uncomment for basic alogirthm implementation:
// include("basic.php");
// basicResearchSquare();

include("ResearchSquare.php");

$researchSquare = new ResearchSquare([1, 100], [
	3 => "Research",
	5 => "Square"
]);

$researchSquare->run();