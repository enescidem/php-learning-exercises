<?php
//foreach kullanımı
$name=["esma","enes","osman","ali","semi","kerem","akin"];

$a=0;
while ($a <count($name)) {
    echo "isim = $name[$a] <br/>";
    $a++;
}
echo "<br/>";

//yukarıdaki işlemi daha az bir satırla yapma burada sırayla value değerine dizinin elemanlarını teker teker attırıp yazdırıyoruz.
foreach ($name as $value) {
    echo "isim = $value <br/>";
}

?>