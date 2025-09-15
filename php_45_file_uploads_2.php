<?php

$mail = $_POST["mail"];
$pas = $_POST["password"];
$file = $_FILES["file"];
$name = $file["name"];
$path = $file["full_path"];
$type = $file["type"];
$tmp_name = $file["tmp_name"];
$size = $file["size"];

//yazdırma işlemleri
echo"mail= ".$mail."<br/>";
echo"sifre= ".$pas."<br/>";

//dosyayı yazdırma şekilleri
echo"<br/>";
echo"dosya adi= ".$name."<br/>";
echo"dosya boyutu= ".$size."<br/>";
echo"dosya tipi= ".$type."<br/>";
echo"<br/>";

print_r($file);
echo"<br/>";
echo"<br/>";

foreach ($file as $value) {
    echo $value."<br/>";
}


?>