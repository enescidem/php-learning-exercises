<?php 
//switch case yapısı

$a=3    ;
switch ($a) {
    case $a==1:
        echo "sayi 1";
        break;
    
    case $a==3:
        echo "sayi 3 <br/>";
        echo "sayiyi doğru bildiniz";

        break;

    case $a==6:
        echo "sayi 6";
        break;
    
    default:
        echo "sayi geçerli değil";
        break;
}

?>