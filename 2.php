<?php 
$usernametrue = 'siska';
$passwordtrue = 'codeYourFuture!123';

$hitungusername = strlen($usernametrue);
echo $hitungusername . "<br>";
if($hitungusername >= 5 && $hitungusername <= 9){
    if(preg_match('/[A-Z]/', $usernametrue)) {
        echo 'Pola username tidak sesuai';
      }else{
        echo 'Pola username sesuai';
      }
}else{
    echo "jumlah karakter harus 5-9 karakter";
}

echo "<br><br>";

$hitungpassword = strlen($passwordtrue);
echo $hitungpassword . "<br>";
if($hitungpassword >= 8){
    if(preg_match("/^([a-z]{1,})([A-Z]{1,})([+&@#\/%?=~_|!:,.;]*)([0-9]*)/", $passwordtrue)){
        echo "pola password sesuai";
    }else{
        echo "pola password tidak sesuai";
    }
}else{
    echo "jumlah karakter minimal 8 karakter";
}

?>
