<?php
//script to merge two commas separated lists with unique value only
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$list1 = explode(",",$list1);
$list2 = explode(",", $list2);
// combine both lists with unique values only
$output = implode("," , array_unique(array_merge($list1,$list2)));
echo $output;
?>