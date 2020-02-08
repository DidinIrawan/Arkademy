<?php
$panjang = 4;
$lebar = 3;

function fibo($panjang,$lebar){
    
    $num = $panjang * $lebar;  
    echo "<h3>Fibonacci series using recursive function:</h3>";  
    echo "\n";  
    /* Recursive function for fibonacci series. */  
    function series($num){  
        if($num == 0){  
        return 0;  
        }else if( $num == 1){  
    return 1;  
    }  else {  
    return (series($num-1) + series($num-2));  
    }   
    }  
    /* Call Function. */  
    for ($i = 0; $i < $num; $i++){  
        if($i>=$panjang){
            echo "<br>";
            $panjang=$panjang+$panjang;
        }
        echo series($i) . ",";  
        
    }
}

fibo($panjang,$lebar);
?>