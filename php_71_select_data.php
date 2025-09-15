<?php
//select komutu çalışma mantığı veri tabanından veri çekme
include "php_66_connect_mysql.php";//veri tabanına bağlanma

$sql = "SELECT * FROM member";//sorgumuz * her şeyi getirmemizi sağlıyor
$result = $con->query($sql);//sorguyu çağırıp bir sonuca atıyoruz

echo(mysqli_num_rows($result));//kaç satır olduğunu gösteren bir işlem.
echo"<br/>";
while ($row = $result -> fetch_assoc()) {//fetch assot ile sütunları bölüyoruz
    echo("id= ".$row["id"]." || isim= ".$row["name"]." || soyisim= ".$row["surname"]." || şifre= ".$row["password"]."<br/>");//yazdırma işlemi
}


?>