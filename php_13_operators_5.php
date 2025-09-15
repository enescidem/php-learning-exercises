<?php 
//mantıksal operatörler

$a=5;
$b=10;
//and operatörü 2 side doğruysa true döner herhangi biri yada ikiside yanlışşsa false döner. 2den fazlada yapılablir.
var_dump($a == 15 and $b < 90);
var_dump($a == 5 && $b == 10);// && ve and aynı işlemi görür

echo"<br/>";
//or operatörü 2 sinden biri ya da ikisi de doğruysa true döner ikiside yanlışsa false döner. 2den fazlada yapılablir.
var_dump($a == 15 or $b < 90);
var_dump($a == 15 || $b == 90);
echo"<br/>";

//iki şartta doğruya ya da iki şartta yanlışşa false şartlardan biri doğru biri yanlışssa true
var_dump($a == 5 xor $b < 90);  
var_dump($a == 2 xor $b < 90);  
echo"<br/>";


//! de bir mantıksal operatördür verilen içerik burada a 2ye eşit mi normlade false burası ! olduğunda false tersine çeviriyor true yapıyor sart doğru oluyoor
if(!($a==2)){
    echo "sart dogru ";
}else{
    echo "sart dogru değil ";
}
echo "<br/>";
// burada ise a zaten 5 true yani normal şartta sart doğru olması gerekir ama ! koyunca true tersine çeviriyor false oluyor else kısmına gidiyor. 
if(!($a==5)){//!$x bir diğer ! kullanım şeklidir.
    echo "sart dogru ";
}else{
    echo "sart dogru değil ";
}

?>