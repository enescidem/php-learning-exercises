<?php
//for döngüsü

for ($a=0; $a <= 10 ; $a++) { 
    echo "sayi = $a <br/>";
}

echo "<br/>";


//for döngüsünün böyle bir kullanımı da vardır ama üstteki daha iyi bir kullanımdır.
$b=1;
for (;;) {
    echo "sayi = $b <br/>";
    if ($b >= 8 ) {
        break;
    }

     $b++;
}
echo "<br/>";

//string için for döngüsü
$name=["esma","enes","osman","ali","semi","kerem"];
for ($i=0; $i <count($name) ; $i++) { 
    echo "isim = $name[$i] <br/>";
}

?>