<?php
//function to remove a specified entry from an array
function remove_from_array($arr,  $ind){
	$newarr = $arr;
	//unset($newarr[$ind]);
	array_splice($newarr, $ind,1); 
	return $newarr;
}
$arr = [1,2,3];
print_r(remove_from_array($arr,0));

?>
