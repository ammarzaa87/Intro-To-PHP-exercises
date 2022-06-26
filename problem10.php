<?php
//function to set union of two arrays (no duplicates)
function Union($arr1, $arr2)
{
	$m = count($arr1);
	$n = count($arr2);
    $i = 0; $j = 0;
	$newarr = [];
    while ($i < $m && $j < $n)
    {
        if ($arr1[$i] < $arr2[$j]){
            $newarr[] = $arr1[$i++];
        }
        else if ($arr2[$j] < $arr1[$i]){
			$newarr[] = $arr2[$j++];
        }  
         
        else
        {
            $newarr[] = $arr2[$j++];
            $i++;
        }
    }
     
    while($i < $m)
		$newarr[] = $arr1[$i++];
	
    while($j < $n)
        $newarr[] = $arr2[$j++];
	
return $newarr;
}
$arr1 = array(1, 2, 4, 5,6,7);
$arr2 = array(2, 3, 5,6, 7);
print_r(Union($arr1, $arr2));
?>