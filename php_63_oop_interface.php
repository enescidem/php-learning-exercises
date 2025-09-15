<?php
//interface kullanımı değişken oluşturulamaz private olamaz
interface money{
    function money($value);
}

interface free extends money{//interfaceler başka bir interface miras oalabilir 
    function day($value);
}
//interfaceler extends edilmez implements edilir ve içindeki fonksiyonları da dahil etmen gerekir.
class temp implements money,free{
    function money($value) {
        echo "mudurun masi = ".$value*5;
    }
    function day($value) {
        echo "<br/>mudurun izin hakkı = ".$value*5;
    }
}
class temp2 implements money,free{
    function money($value) {
        echo "<br/>iscinin masi = ".$value*2;
    }
    function day($value) {
        echo "<br/>iscinin izin hakkı = ".$value*2;
    }
}

$a= new temp();
$a->money(500);
$a->day(20);

$b= new temp2();
$b->money(500);
$b->day(20);
?>