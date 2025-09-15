<?php
//iç içe for döngüsü

for ($a=1; $a <= 10 ; $a++) { 
    echo "$a.  ";
    for ($b=1; $b <=10 ; $b++) { 
        echo "$a x $b = ".$a*$b." || ";
    }
    echo "<br/> <br/>";
}


?>