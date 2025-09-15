<?php 

//değişkenler

$var = "hakan";//string
$var1 = "merhaba";
$int=44+6;//int
$float=11.5;//float
$bool=true;//boolen
$null=null;//null

echo "merhaba ".$var;
echo "<br/>";
echo $var1 ." ". $var;
echo "<br/>";
echo $int;

//çift dolar değişken

$isim="emre";
$$isim="hakan";// üsttekinden farklı bir değişken oluyor

echo "<br/>";
echo $isim;
echo "<br/>";
echo $$isim;

$a="enes";

$b="a";

echo "<br/>";
echo $$b;//burada $b değişkenb ilk çağırılacak ve a dönücek başında bir adet daha $ olduğu için bir kere daha $a olduğu için tekrar değişkene bakılacak ve $a değişkeni çağırılacak

?>