<?php
//miras alma işlemi
class num{
    public $a;
    public $b;

    public $d="<br/>islemin sonuc =";
}

class result extends num{

    public function cross($num1,$num2) {
        
        $this->a=$num1;
        $this->b=$num2;
        
        echo $this->d. " ".$this->a*$this->b;

    }
    public function sum($num1,$num2) {
        
        $this->a=$num1;
        $this->b=$num2;
        
        echo $this->d. " ".$this->a+$this->b;

    }
    
}

$c=new result();

$c->cross(5,20);
$c->sum(5,20);



?>