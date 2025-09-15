<?php

class mat{

    const pi=3.14;//değeri sabit yapar değiştirilemez

    function write() {
        echo self::pi;//thisli erişilemez const ve static değişkenlere self ile erişilir
        
    }
}

$num = new mat();
//$num::pi=9.2;//bu değer sabit olduğu için hata aliriz
//echo $num::pi;

echo$num->write();

echo mat::pi;//direkt sınıf üzerinden de erişim mümkündür.
?>