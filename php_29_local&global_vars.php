<?php
//local ve global değişkenler
$a=10;
echo "global sayi = $a <br/>";

temp();

//echo "local sayi = $b ";//bu kullanım yanlıştır çünkü local olan bir değişken global değişken gibi kullanılamaz sadece o fonksiyona aittir hata: Undefined variable $b

function temp(){
    $b=20;

    echo "fun içinde global sayi =" .$GLOBALS["a"]. "<br/>";//bir fonksiyonun içinde global olan değişken kullanımı 
    echo "local sayi = $b <br/>";
}
?>