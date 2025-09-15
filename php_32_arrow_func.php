<?php
//3 farklı fonksiyon çeşidi
function name(){
    return "normal merhaba enes <br/>";
}
echo name();
$c=10;
$a = function() use($c){//burada use kullanmak zorundayız
    return "isimsiz merhaba esma <br/>";
};
echo $a();


$b= fn($a)=>"kisa ".$a+$c;//parametreli de yapılabilir. bu fonnksiyonda use kullanmamıza gerek kalmıyor

echo $b(5);
?>