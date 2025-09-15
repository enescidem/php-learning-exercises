<?php
//parentin amacı oluşturuğumuz sınıfta aynı isimde bir fonskiyon veya değişken varsa ve bunlar static ise parent kullanılır farklı isimdeyse self ile yine kullanılabilir
class student{
    public $name="enes";
    public static $name2="esma";

    public static function first() {
        echo "ogrenci class ".self::$name2;
        
    }
      public static function second() {
        echo "ikinci ogrenci class ".self::$name2;
        
    }
}

class school extends student{

    public static $name2="osman";

    public static function first() {
        echo "okul class ".parent::$name2;//burada parent komutu içinde bulunduğumuz claasın değil miras aldığımız classın değişkenine erişmeyi sağlıyor
        
    }

    public static function show(){
        //parent::first();//burada da ogrenci classındaki fonskiyona erişiyoruz
        self::second();//burada self kullanabilriz çünkü içinde bulunmduğumuz classta second adında bir fonksiyon bulunmadığı için
    }

} 

$a=new student();
echo $a->name;
echo "<br/>";
//echo $a->name2;//hata verir çünkü static bir değişken böyle çağrılmaz
echo student::$name2;
echo "<br/>";
echo $a::$name2;// iki şekilde de çağrılabilir

echo "<br/>";

student::first();
echo "<br/>";

school::first();
echo "<br/>";

school::show();


?>