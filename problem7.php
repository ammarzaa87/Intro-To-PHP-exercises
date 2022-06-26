<?php
//script to get the index of the highest value in an associative array
$arr = array(
    'ammar' => 2000,
    'emad' => 1200,
    'omar' => 3000,
    'khaled' => 4500,
    'omran' => 300);
$highest_index = 0;
$highest_value = 0;
$n = count($arr);
foreach ($arr as $key => $value){
	if($highest_value<$value){
		$highest_value = $value;
		$highest_index = $key;
	}
}
print("The index of the highest value is ".$highest_index);
?>
