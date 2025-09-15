<?php
//abstract kullanımı miras alınan sınıf ve fonksiyonu abstract ise zorunlu olarak altta miras alındığında o miras alan sınıfta o abstract fonksiyon kullanılmak zorunda  
abstract class money{
    abstract function money($value);
}

class temp extends money{
    function money($value) {
        echo "mudurun maasi: ".$value*3;
    }
}
class temp2 extends money{
    function money($value) {
        echo "<br/>isci maasi: ".$value*2;
    }
}

$a = new temp();
$a->money(500);
$b = new temp2();
$b->money(500);



?>