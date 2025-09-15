<?php

class student{

    public static $name = "enes ";//static değişken
    public $surname = "çidem ";
    public $age = 23;

    static function show($a){//parametrede alabilir
        echo "merhaba ben static fonskiyon <br/>";
        //$this->name="osman";//hata verir çünkü static fonskiyonlarda this kullanılamaz
        echo "isim= ".self::$name;//this yerine kullanılabilecek self:: vardır
        echo "<br/>isim2 = ".$a;//parametre yazdırma    
    }

}

//burada çağırma işlemi yapmadan static fonskiyon ve dğeişkenleri direkt class üzerinden kullanmak mümkündür
echo student::$name;//static değişkene erişim
echo "<br/>";
echo student::show("esma");//static değişkene erişim
echo "<br/>";


//yazdırma ve çağırma işlemleri

$value = new student();
$value->show("esma");//çağırrak da kullnaım mümkündür.
//echo $value->name;//böyle erişilemez static değişkene


?>