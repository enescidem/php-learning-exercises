<?php 
//isimiz fonksiyon

$a = function () {
    echo "merhaba dünya";
};//isimiszi fonskiyonlarda sonuna noktalı virgül konur

$a();
echo "<br/>";
$c="esma";
$b = function ($name) use ($c){//parametreli ve global fonksiyonu kullanan isimsiz fonksiyon
    echo "merhaba $name" ." ".$c;
};

$b($c);


?>