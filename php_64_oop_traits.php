<?php
//trait kullanımı

trait temp3
{
    function hello($name){
        echo "mudur $name geldi <br/>";
        parent::extra(10);
    }
}
trait temp4{
    function hi($name) {
        echo "isci $name geldi <br/>";
        parent::extra(8);
        
    }
}


class temp{
    function extra($hour){
        echo "saat ".$hour. "da ise basladi ";
    }
}

class temp2 extends temp{
    use temp3,temp4;
    
}

$a= new temp2();
$a->hi("mehmet");


?>