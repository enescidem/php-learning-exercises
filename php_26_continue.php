<?php
//continue kullanımı
$a=0;
while ($a <= 10) {
    if($a == 5) {
        echo"5 rakamini atla <br/>";
        $a++;
        continue;
   
        echo"test";
    }
    echo " sayi = $a <br/>";
    $a++;
}
echo "<br/>";
echo "<br/>";

$a=0;
$name=["esma","enes","osman","ali","bos","semi","kerem","akin"];
while ($a < count($name)) {
    if($name[$a] == "bos") {
        echo"geçersiz isim = '$name[$a]' <br/>";
        $a++;
        continue;
    }
    echo "dizideki " .$b .". isim = $name[$a] <br/>";
    $a++;
}

?>