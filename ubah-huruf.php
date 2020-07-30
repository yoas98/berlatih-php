<?php
function ubah_huruf($string){
//kode di sini
$abjad = 'abcdefghijklmnopqrstuvwxyz';
$output = '';

for( $i=0; $i < strlen($string); $i++ ) {
    $posisi = strpos($abjad, $string[$i], 1);
    $output .= substr($abjad, $posisi+1, 1);
}
$output .= '<br>';
return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>