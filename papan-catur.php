<?php

function papan_catur($angka) {
// tulis kode di sini
$output = '';
for( $i = 1; $i <= $angka; $i++ ) {
    for( $j = 1; $j <= ($angka * 2) - 1; $j++ ) {
        if( ($i + $j) % 2 == 0 ) {
            $output .= '#';
        } else {
            $output .= '_';
        }
    }
    $output .= '<br>';
}
$output .= '<br>';
return $output;
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/