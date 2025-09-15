<?php 
//karşılaştırma operatörleri
$a =10;
$b =5;
var_dump($a == $b);

echo "<br/>";

$a =5;
$b ="5";
var_dump($a == $b);


echo "<br/>";

$a =5;
$b ="5";
var_dump($a === $b);//3 eşittir kullanıldığında türlerini de kontrol ediyor rakamlar aynı olup türleri de aynıysa true değilse false döndürür


echo "<br/>";

$a =5;
$b =5;
var_dump($a != $b);//eşitse false eşit değilse true döner 


echo "<br/>";

$a =5;
$b =10;
var_dump($a <> $b); //<> ve != aynı işlevi görür

echo "<br/>";

$a =5;
$b =5;
var_dump($a !== $b); //türleri eşit değilse işareri burda türleri eşit olduğu için false dönüyor === bu işaretin zıttıdır.


echo "<br/>";

$a =5;
$b =15;
//klasik büyüktür küçüktür
var_dump($a < $b);
echo "<br/>";
var_dump($a > $b);
echo "<br/>";

$a =5;
$b =5;
//klasik büyük eşit küçük eşit
var_dump($a <= $b);
echo "<br/>";
$a =5;
$b =15;
var_dump($a >= $b);

echo "<br/>";
$a =5;
$b =5;
var_dump($a <=> $b);// -1 0 veya 1 döndüren bir değerdir bu eşit olduğunda 0 a büyük olursa 1 b büyük olursa -1 döndürür
$a =6;
$b =5;
var_dump($a <=> $b);
$a =5;
$b =6;
var_dump($a <=> $b);

?>