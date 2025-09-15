<?php 
//atama operatörleri
$num = 5;
$num2 = 3;

$num += $num2;

echo "toplama sonucu = ".$num."<br/>";

//her seferinde num değeri değüiştiği için tekrardan değişkenleri yazmak gerekir
$num = 5;
$num2 = 3;

$num -= $num2;

echo "cikarma sonucu = ".$num."<br/>";


$num = 5;
$num2 = 3;

$num *= $num2;

echo "carpma sonuc = ".$num."<br/>";

$num = 5;
$num2 = 3;

$num /= $num2;

echo "bölme sonuc = ".$num."<br/>";

$num = 5;
$num2 = 3;

$num %= $num2;

echo "bölme sonucu kalan = ".$num."<br/>";

$num = 5;
//5 üssü 3 
$num **= 3;//illa değişken yazmak durumu yok sayı yazarak da yapılabilir 

echo "üs alma sonucu = ".$num."<br/>";

?>