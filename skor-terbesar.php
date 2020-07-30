<?php
function skor_terbesar($arr){
//kode di sini
/*
1. buat array assosiatif berdasarkan nama kelas peserta
2. bandingkan nilai nilai peserta berdasarkan kelas yang sama
3. cari satu orang peserta dengan nilai tertinggi pada setiap kelas
4. masukkan nilai dalam array penampung 
*/
$arr_output = [];
for( $i=0; $i < count($arr)-1; $i++ ) {
  for( $j=$i+1; $j < count($arr); $j++ ) {
    if( $arr[$i]["kelas"] == $arr[$j]["kelas"] && $arr[$i]["nilai"] > $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$i]["kelas"] => $arr[$i]
        ];
      
    } elseif( $arr[$i]["kelas"] == $arr[$j]["kelas"] && $arr[$i]["nilai"] < $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$j]["kelas"] => $arr[$j]
        ]; 
      
    }
  }
}

return$arr_output;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>