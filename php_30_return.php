<?php 
//return kullanımı
$a=15;
echo "global sayi= ".$a."<br/>";

echo "2 ve 5 in çarpimi sonucu = ".temp(2,5);

function temp($a,$b) {
    $sum = $a*$b;
    return $sum;
}

?>