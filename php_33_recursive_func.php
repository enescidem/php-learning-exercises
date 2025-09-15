<?php

//kenbdi kendine çağıran fonksiyon
function num($a){
    echo $a."<br/>";
    if ($a<20) {
        return num($a+1);
    }
}

num(1);

?>