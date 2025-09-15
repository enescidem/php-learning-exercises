<?php

//session kullanımı/ oturum işlemleri

session_start();//bu olmazsa olmaz başlatmak gerekiyor session bailadığında alttaki değişkenleri silsek bile tarayıcının belleğinde tutulur yani sunucuda. diğer değişkenler gibi değildir

/*
$_SESSION["name"]="enes";
$_SESSION["mail"]="deneme@gmail.com";
$_SESSION["sifre"]="123";
//yorum satırına aldık değişkenleri tekraradan print ettiğimizde yazdırıcak bir hatayla karşılaşmicaz çünkü bir kere çağırdığımız için belleğe kaydedildi.
*/

//eğer bellektende silmek istersek alttaki komutu kullanmamız gerekiyor 
//session_destroy();//kullanıldıktan sonra yazdırmaya çalışıldığında hata ile karşılaşılır

//yazdırma çeşitleri
print_r($_SESSION);

echo("<br/>");
echo $_SESSION["name"];

echo("<br/>");
echo $_SESSION["mail"];


echo("<br/>");
echo $_SESSION["sifre"];



?>