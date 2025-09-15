<?php
//class kullanımı:
class student{

    public $name="osman";
    public $surname;
    public $age;
}

$a= new student;

$a->surname = "yildiz";
$a->age = 15;

//yazdırma işlemi
echo "isim= ".$a->name."<br/>soyisim= ". $a->surname."<br/>yaş= ".$a->age ;

?>