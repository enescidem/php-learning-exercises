<?php
//class içinde fonksiyon kullanımıj
class student{

    public $name;
    public $surname="bulut<br/>";
    public $age=12;

    function show($country):int{
        echo $this->name="hakan<br/>";
        echo $this->surname;
        echo $this->age;
        echo $country;
        return 10;
    }

    
}

$a = new student();
//burada fonksiyonu terkarrdan çağırmamız gerekiyor cons ve des olmadığı için cağrılması gerekiyor
echo $a->show("bolu");

?>