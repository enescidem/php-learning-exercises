<?php
//xampp mysql için gerekli bilgiler bunlar
$servername="localhost";
$username="root";
$password="";
$databasename="last_try";

//mysqle connect bağlantı oluşturma
$con= new mysqli($servername,$username,$password,$databasename);

//sql bağlantısında birş sorun olduğunu kontrol etme 
if($con ->connect_error){
    die("baglanti hatasi var bilgileri kontrol ediniz");
}else {
    echo "bağlanti basarili <br/>";
}

//veri tabanı bağlantısı kesme
//$con -> close();
//echo"bağlanti kapatildi";

?>