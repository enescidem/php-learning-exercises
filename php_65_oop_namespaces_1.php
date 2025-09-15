<?php
//namespace kullanımı

require_once "php_65_oop_namespaces_2.php";
require_once "php_65_oop_namespaces_3.php";
/*use temp1\person;//namespacelere erişmek için kullanılan parametre
$a= new person();*/ 
//as kullanarak x yapıyoruz.
use temp1\person as x;
$a= new x();
$a->hello();

$b= new temp2\person();//farklı bir namespace çağırma işlemi
$b->hello();
?>