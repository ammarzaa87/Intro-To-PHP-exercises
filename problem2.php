<?php
/*script to create the given pattern with *:
*
**
***
****
*****
******
*******
********  */
$num = 8;
//handle number of rows
for ($i = 0; $i < $num; $i++)
    {
		// number of columns
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
?>