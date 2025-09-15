<?php
//this kullanımı:

class student{

    public $name="enes";
  

    function __construct(){
        //burada kullanılan this işaretleri fonksiyonun dışındaki sınıfın içindeki değişkenleri çağırmaya yarayan bir yapıdır
        $name = "esma";
        echo $name;
        echo "<br/>";
        echo $this->name;
    }
}

$class = new student();


?>