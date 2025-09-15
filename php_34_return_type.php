<?php

//fonksiyonun returnun döndüreceği tipi belirleme
function name($a): ?string {//burada returnün yani fonksiyonun çıktısının string olmasını istediğini söylüyoruz ? koyduğumuzda NULL değerini de döndürmesini sağlıyor

    return "1-".$a."<br/>";
}


echo name(NULL);
echo name("hakan");

function temp() : int {//int bir değüer döndürmesini istiyoruz burda 
    //return "sasa";//böyle yazıldığında hata alırsn verilen hata: Uncaught TypeError: temp(): Return value must be of type int, string returned in 
    return 11;
}

echo temp();


?>