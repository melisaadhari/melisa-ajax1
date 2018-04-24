<?php
//array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";

//get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//lookup all hints from array if $q different from " "
if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0 , $len))) {
			if ($hint === "") {
				$hint = $name;	
			}else {
				$hint .= ", $name";
			}
			
		}
		
	}
	
}
echo $hint === "" ? "no suggestion" : $hint;
?>
