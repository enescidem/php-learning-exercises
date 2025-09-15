<?php
//break kullanımı
$a=0;

while ($a <= 10) {
    echo "sayi = $a <br/>";
    if($a == 5) {
        echo"döngü durduruldu";
        break;//while döngüsünü bitirir
        echo"test";//burayı yazmaz çünkü break komutundan sonra bir komutu yazdıramaz
    }
    $a++;
}
echo "<br/>";
echo "<br/>";


$a=0;
$name=["esma","enes","osman","ali","bos","semi","kerem","akin"];
while ($a < count($name)) {
    if($name[$a] == "bos") {
        echo"geçersiz isim = '$name[$a]'";
        break;//while döngüsünü bitirir
    }
    echo "isim = $name[$a] <br/>";
    $a++;
}

?>