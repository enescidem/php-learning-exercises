<?php
//self kullanımı

class student{

    const pi=3.14;
    public static $name="ali";
    public static $surname="bulut";

    public static function show(){ // static metodlarda this kullanılmaz
        echo "isim= ".self::$name."<br/> soyisim= ".self::$surname."<br/>pi sayisi= ".self::pi;
    }
    
}

$a= new student();
echo $a::show();

?>