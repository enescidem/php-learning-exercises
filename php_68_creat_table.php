<?php

include("php_66_connect_mysql.php");//mysqle bağlanma

//tablo oluşturma
$sql="CREATE TABLE `member` (
`id` INT(20) NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(50) NOT NULL , 
`surname` VARCHAR(50) NOT NULL , 
`password` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`id`))";

//hata kontrolü
if($con -> query($sql)===TRUE){
    echo"tablo basarili bir sekilde olusturuldu";
}else {
        echo"tablo olusturulamadi ".$con->eroor;

}

?>