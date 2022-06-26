<?php
//function that converts binary number to decimal
function binToDec($num)
{
    $decimal = 0;
    // Initializing base value 2^0 = 1
    $base = 1;
	
	$temp = $num;
	$n = strlen($temp);
    for($i=0; $i<$n; $i++){
        $l_digit = $temp % 10;
        $temp = $temp / 10;
        $decimal = $decimal + $l_digit * $base;
        $base = $base*2;
		
    }
    return $decimal;
}
$num = 111100;
print(binToDec($num));
?>