<?php

$a=15;
$c=34;
function write($b) {
    
    global $c;//global yazıldığında fonsiyon dışındaki değişkenlere ulaşabiliriz
    return $GLOBALS["a"]+$c;//bu da farklı bir kullanımdır

}

echo write(20);

?>