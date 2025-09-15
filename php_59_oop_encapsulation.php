<?php
//kapsülleme işlemi 
class student{
    private $name;
    private $age;

    public function show($a,$b) {

        if($b <20 || $b > 50)
        {
            echo "20 den yuksek bir değer giriniz...";
        }
        elseif ($a == "") 
        {
            echo "isim boş birakilamaaz";
        }
        else
        {
            $this->name=$a;
            $this->age=$b;
            echo "isim = ".$this->name." yaş = ".$this->age;
        }
        
    }
}

$class = new student;
$class->show("",23)



?>