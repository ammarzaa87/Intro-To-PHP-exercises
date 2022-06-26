<?php
//function to reverse elements in an array
function reverse($arr){
	$newarr=[];
	$num = count($arr);
	$j = count($arr);
	for ($i = 0; $i < $num; $i++) {
        $newarr[$i] = $arr[$j-1];
        $j = $j - 1;
    }
	return $newarr;
}	
$arr = [1, 2, 3, 4, 5];
print_r($arr);
print_r(reverse($arr));

?>