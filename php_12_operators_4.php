<?php 
//artırma ve eksitlme operatörleri
$num =5;
echo "islem öncesi = ".$num;
echo "<br/>";
$num++;//$num = $num + 1 ile aynı işlevi gören daha kısa hali
echo "islem sonrasi = ".$num;
echo "<br/>";
echo "<br/>";

$num =5;
echo "islem öncesi = ".$num++; // burda num değeri 5 olarak gözükür çünkü soldan sağa doğru gidiliği için önce yazdırma işlemi daha sonra num değerini arttırma işlemi uygulanır önce yazdır sonra arttır. 
echo "<br/>";
echo "islem sonrasi = ".$num;
echo "<br/>";
echo "<br/>";

$num =5;
echo "islem öncesi = ".++$num; // ++ başa yazıldığında ise önce arttırma işlemi yapıldığı için yazdırma sırasında arttırlımış şekilde yazdırılır önce arttır sonra yazdır.
echo "<br/>";
echo "islem sonrasi = ".$num;
echo "<br/>";   
echo "<br/>";

$num =5;
echo "islem öncesi = ".$num;
echo "<br/>";
$num--;//$num = $num - 1 ile aynı işlevi gören daha kısa hali
echo "islem sonrasi = ".$num;
echo "<br/>";


?>