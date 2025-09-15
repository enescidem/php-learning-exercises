<?php
//overrided kullanımı
//aynı isimli 2 fonskiyon ve farklı sınıflarda olursa overriide olur
class student{
    public $name="hakan";

    public function show(){
        echo "öğrenci sinifi ".$this->name;        
    }
}

class school extends student{
    public function show() {
        echo "okul sinifi ".$this->name;
        
    }
}

$class = new school();
$class -> show();
?>