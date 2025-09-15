<?php 
//arraylerde => kullanımı
$name=["ali ","osman ","mehmet ","a"=>"semih ","ahmet "];

//=> index numarası dışında başka bir şeyle çağırmaya yarıyor buradaki örnekte a özel karakteri ile çağırdık 3. indexteki veriyi bunu yaptıktan sonra index numarası kayıyor 4. index olmuyor artık en sondaki veri 3. indexe yerleşiyor

echo $name[0]."<br/>";
echo $name[1]."<br/>";
echo $name[2]."<br/>";
echo $name["a"]."<br/>";
echo $name[3]."<br/>";

print_r($name);

$name2=["ali ","osman ","mehmet ",15=>"semih ","ahmet "];

//burada 3. indexe 15 dediğimiz için int bir değer verdiğimizde ondan sonraki ilk eleman 16 oluyor bir sonraki tam sayı
echo "<br/>";
echo "<br/>";

echo $name2[0]."<br/>";
echo $name2[1]."<br/>";
echo $name2[2]."<br/>";
echo $name2[15]."<br/>";
echo $name2[16]."<br/>";

print_r($name2);

$country=["a"=>"bolu","b"=>"ankara","c"=>"düzce","d"=>"erzurum","f"=>"antalya","hatay"];

echo "<br/>";
echo "<br/>";
//hatay şehrini sonradan ekledik en sona ekledik ama bunu sona eklememize rağmen bu hatayın indexi 0dır
echo $country["a"]."<br/>";
echo $country["b"]."<br/>";
echo $country["c"]."<br/>";
echo $country["d"]."<br/>";
echo $country["f"]."<br/>";
echo $country[0]."<br/>";

print_r($country);

$array = [1=>"a","1"=>"b",1.5=>"c",true=>"d" ];
//burda tüm verilen anahtarlar 1e denktir hepsi birinci indexi tutar bu yüzden en son yazılan d harfi 1. anahtara sahip tek 
echo "<br/>";
print_r($array);


?>