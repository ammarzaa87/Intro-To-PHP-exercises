<?php
//factorial function using for loop
function factorial ($number)  
{
	$factorial = 1;
    if($number <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        for ($x=$number; $x>=1; $x--){  
			$factorial = $factorial * $x;  
		}  
		return $factorial;
    }  
}
print(factorial(3)); 
 
?>