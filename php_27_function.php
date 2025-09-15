<?php
//fonksiyonlar

$a= 10;
if($a==10){
    temp(25, 5);
    temp(10,5);
    temp(10,30);

}
//parametreli ve parametresiz fonksiyonlar oluşturulabilir
function temp($a , $b){
    echo "yeniden merhaba dünya <br/>";
    echo $a*$b . "<br/>";

    echo "--------------------------------- <br/><br/>";


}

?>