<?php
$kata = "Surabaya";
$cari = "u";
$pengganti = "o";

function ganti_kata($kata,$cari,$pengganti){
    
    $kataku = str_split($kata);
    foreach($kataku as $k){
        if($k==$cari){
            $k=$pengganti;
        }
        echo $k;
    }
}

ganti_kata($kata,$cari,$pengganti);
?>
