<?php
//destruct kullanımı
//kısıtlı ram kullanımı için önemli bir şeydir hafızada yer açmak için kullanılır
class student{

    public $name;
    public $surname;
    public $age;

    function __construct(){
        echo $this ->name="ali <br/>";
        echo "yapici method calisti <br/>";
    }

    function __destruct(){
        echo $this ->name=null;
        echo "yikici method calisti ";
        
    }
    
}

$class = new student("esma ","halici ",19);

?>