<?php
//:: kullanımı 
class num {
    public static $a=10;

    function write() {
        echo self::$a;
    }
}


$b=new num();
echo $b->write();

?>