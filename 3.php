<?php
$kata = "lima";

function hitung_vocal($kata){
  $arr = str_split($kata);
  $vocal = ['a', 'i', 'u', 'e', 'o'];

  $found = array_intersect($vocal, $arr);
  $count = array_count_values($arr);

  $result = [];

  foreach ($found as $item) {
    $result[$item] = $count[$item];
  }

  $jumlah = array_sum($result);
  return $jumlah;
}

echo hitung_vocal($kata);

?>