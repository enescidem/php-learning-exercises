<?php
//tablolara veri ekleme

include "php_66_connect_mysql.php";//veri tabanına bağlanma
//sorgu oluşturma
$sql = "INSERT INTO member
(`name`  , `surname`, `password`)
VALUES('esma', 'halici', 135)";//stringleri '' arasında yazman gerekir. sqlde bulunan değerleri de name surname gibi `` arasında yazman gereekir.

//sorguyu veri tabanında işleme ve kontrol etme
if ($con->query($sql)===TRUE) {
    echo "veri tabloya eklendi";
} else {
    echo "veri tabloya eklenemedi".$con->error; 
    
}

?>