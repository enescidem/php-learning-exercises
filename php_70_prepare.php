<?php
//prepare kullanımı
include "php_66_connect_mysql.php";//veri tabanına bağlanma

//eklenicek değişkenler
$name_="osman1";
$surname_="tosun1";
$password_=1231;


//eklenecek verileri daha güvenli bir şekilde değişkenler üzerinden eklememize yarıyor
$ready=$con->prepare("INSERT INTO member(`name`,`surname`,`password`) VALUES (?,?,?) ");
$ready->bind_param("ssi",$name_,$surname_,$password_);//değişkenleri parametre olarak algılatıp veri tabanındaki eşleşen değerlerin yerine koyma. ssi dediğimiz ilk kısım s= string i=int değerini belirtir 2 string 1 int değeri gelicek demektir. 


//en son da bu fonksiyonu execute ediyoruz.yani çalıştırıyoru<z VE KONTROL EDİROYUZ
if ($ready->execute()===TRUE) {
    echo"başarili sekilde veriler eklendi";
} else {
    echo"hata veriler eklenemedi".$ready->error;
}


?>