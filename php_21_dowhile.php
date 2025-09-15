<?php 
//do while kullanımı
$a=7;
//do whileda önce işlemi yapıp sonra koşula bakar. koşula sonra baktığı için do içinde yanlış doğru farketmez o işlemi yapar
do {
    echo "sayi 6 dan kucuk sayi = $a <br/>" ;
    $a++;
} while ($a <6);
echo "sayi 6dan buyuk sayi = $a";
?>