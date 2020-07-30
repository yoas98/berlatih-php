<?php
function tukar_besar_kecil($string){
//kode di sini
$output = '';
for( $i = 0; $i < strlen($string); $i++ ) {
    if( substr($string, $i, 1) == strtoupper(substr($string, $i, 1)) ) {
        $output .= strtolower(substr($string, $i, 1));
    } elseif( substr($string, $i, 1) == strtolower(substr($string, $i, 1)) ) {
        $output .= strtoupper(substr($string, $i, 1));
    }
}
$output .= '<br>';
return $output;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>