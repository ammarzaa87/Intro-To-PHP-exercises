<?php
//script to find maximum and minimum elements in an array
$arr = [4, 2, 13, 6, 5];
$num = count($arr);
$max = $arr[0];
$min = $arr[0];
for ($i = 1; $i < $num; $i++){
    if ($max < $arr[$i]){
        $max = $arr[$i];
	}
	if ($min > $arr[$i]){
        $min = $arr[$i];
	}
}
echo "The maximum and the minimum of the array are reapectively ".$max.", ".$min;
?>