<?php
//script to put even and odd elements of array in two separate arrays
$arr = [1,2,3,4,5,6,7,8,9,10];
$evenarr = [];
$oddarr = [];
$num = count($arr);
for($i = 0; $i<$num ; $i++){
	if($arr[$i]%2 == 0 ){
		$evenarr[] = $arr[$i];
	}else{
		$oddarr[] = $arr[$i];
	}
}
print("The even array is ");
print_r($evenarr);
print("The odd array is ");
print_r($oddarr);
?>