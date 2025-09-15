<?php

//cookie kullanımı
//cookiler kullanıcnını bilgisayarında tutar verileri sessionlar ise tarayıcı belleğinde yani sunucuda tutar verileri beni hatırla komutu için kullanılan değerlerdir bunlar

//tarayıcı sekmesi kapandığı anda sessiondaki biligiler gider cookiler sekmeyi kapatsa bile durmaya devam eder. ikiside teknik olarak tarayıcıda tutuluyor cookiler tarayıcı kapaatılsa bile durmaya devam ediyor session tarayıcı kapatıldığında siliniyor
$color="red";

setcookie("color","red",time()+10);//kullanıcı bilgisayarında 10 saniye boyunca bu değeri tut

setcookie("color2","yellow",time()+10);

//yazdırma işlemleri
echo $_COOKIE["color"];
echo "<br/>";
print_r($_COOKIE);



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo ($_COOKIE['color2']); ?>">
    
</body>
</html>