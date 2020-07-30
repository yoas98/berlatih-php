<?php
function pasangan_terbesar($angka){
// kode di sini
$output = 0;
for( $i = 0; $i < strlen($angka)-1; $i++ ) {
    for( $j = strlen($angka)-2; $j >= 0; $j-- ) {
        if( substr($angka, $i, 2) > substr($angka, $j, 2) ) {
            if( $output < substr($angka, $i, 2) ) {
                $output = substr($angka, $i, 2);
            }  
        } else {
            if( $output < substr($angka, $j, 2) ) {
                $output = substr($angka, $j, 2);
            }
        }
    }
}

$output .= '<br>';
return $output;
}


// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>