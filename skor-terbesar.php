<?php
function skor_terbesar($arr){
//kode di sini
$arr_output = [];
for( $i=1; $i < count($arr)-1; $i++ ) {
  $j = 0;
    if( $arr[$i]["kelas"] == "Laravel" ) {
      if( $arr[$i]["nilai"] > $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$i]["kelas"] => $arr[$i]
        ];
      } elseif( $arr[$i]["nilai"] < $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$j]["kelas"] => $arr[$j]
        ];
      }     
    } elseif( $arr[$i]["kelas"] == "React JS" ) {
      if( $arr[$i]["nilai"] > $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$i]["kelas"] => $arr[$i]
        ];
      } elseif( $arr[$i]["nilai"] < $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$j]["kelas"] => $arr[$j]
        ];
      }     
    } elseif( $arr[$i]["kelas"] == "React Native" ) {
      if( $arr[$i]["nilai"] > $arr[$j]["nilai"] ) {
        $arr_output[] = [
          $arr[$i]["kelas"] => $arr[$i]
        ];
      } elseif( $arr[$i]["nilai"] < $arr[$j]["nilai"] ) {
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
