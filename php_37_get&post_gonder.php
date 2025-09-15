<?php
//get ve post kullanımı
$mail=$_POST["mail"];//burda post yerine $_GET de kullanılabilir post kullanıldığında domain kısmında email ve şifre yazmaz o kısımda ama get kullanıldığında orada email ve şifre de yazar link kısmında. form sayfasında da action kısımını postsa post getse get olarak değiştirilmelidir get güvenlik açığına sebep olan bir yöntemdir
$sif=$_POST["sifre"];
echo "mail = ".$mail."<br/> sifre = ".$sif;
?>