<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if( strlen($angka) == 1 ) {
    $angka += 1;
  } else {
      while( $angka != strrev($angka) ) {
          $angka += 1;
      }
  }
  echo $angka . '<br>';
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>