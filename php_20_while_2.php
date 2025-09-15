<?php 
//iç içe while ile çarpım tablosu
 
$a=1;
$b=1;
while ($a <= 10) {
    echo $a.". ";
    while ($b <= 10) {
        echo "$a x $b = ".$a*$b." || ";
        $b++;
    }
    echo "<br/>";
    $b=1;
    $a++;
}

?>