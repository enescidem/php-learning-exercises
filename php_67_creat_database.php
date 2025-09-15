<?php
//veritabanı oluşturma
//$con değişkeni include ettiğimiz php dosyasından geliyor.
include("php_66_connect_mysql.php");////mysqle bağlanma

$con ->set_charset("utf8");
$createDB = "CREATE DATABASE iF NOT EXISTS last_try CHARACTER SET utf8 COLLATE utf8_turkish_ci";//türkçe karaktere uygun bir database oluşturma
//kontrol etme
if ($con->query($createDB)===TRUE) {
    echo"veri tabani oluşturuldu";
}else {
        echo"veri tabani oluşturulamadi".$con->error;
}
//veri tabanı bağlantıyı kesme
$con->close();

?>