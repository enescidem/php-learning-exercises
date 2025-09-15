<?php 

$num=array(55,99,546,7);//sayı dizisi
$names=array("hakan ","enes ","osman ","ali ");//string dizisi

//echo $names;//bu şekilde yazdırdığında hata alırsın :Warning: Array to string conversion

echo $names[0];
echo "<br/>";
echo $names[1];
echo "<br/>";
echo $names[2];
echo "<br/>";
echo $names[3];
//echo $names[4];//çalışmaz çünkü dizide 4. eleman yok : Undefined array key 4
echo "<br/>";
$names[4]="kerim";
echo $names[4];//artik çalışır çünkü 4. elemanı tanımladık kerim diye
echo "<br/>";
$names[0]="mehmet";//artık 0. indexte hakan değil mehmet bulunacak 
echo $names[0];

$names2=["emre","oğuz","mesut","salih"];//farklı  bir array kullanımı örneği köşeli parantez ile
echo "<br/>";
echo $names2[0];
echo "<br/>";
print_r($names);//farlı bir yazdırma metodu
echo "<br/>";
print_r($names2);

?>