<?php
/**
*@author by Vuong
*@category ZCE70 Increment string
*/


$a = "a9";

$b = "a10";


for ($i = 0; $i < 16; $i++){
    
    $c[] = $a++;
    $d[] = $b++;
}

print_r($c); //Array ( [0] => a9 [1] => b0 [2] => b1 [3] => b2 [4] => b3 [5] => b4 [6] => b5 [7] => b6 [8] => b7 [9] => b8 [10] => b9 [11] => c0 [12] => c1 [13] => c2 [14] => c3 [15] => c4 )

print_r($d); //Array ( [0] => a10 [1] => a11 [2] => a12 [3] => a13 [4] => a14 [5] => a15 [6] => a16 [7] => a17 [8] => a18 [9] => a19 [10] => a20 [11] => a21 [12] => a22 [13] => a23 [14] => a24 [15] => a25 )

//https://3v4l.org/BW8Qh