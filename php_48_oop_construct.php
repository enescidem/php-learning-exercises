<?php
//construct kullanımı: 
//çağırılmadan çalışan fonksiyon sınıfı çağırdığımızda otomatik çalışır.

class student{

    public $name;
    public $surname;
    public $age;

    function __construct($name,$surname,$age){
        $this->name= $name;
        $this->surname= $surname;
        $this->age= $age;
        
        echo "isim= ".$this->name."<br/> soyisim= ".$this->surname."<br/> yaş=  ".$this->age;
    }
}

$class = new student("enes ","çidem ",23);

?>