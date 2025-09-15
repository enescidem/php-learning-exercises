<?php
class student{

    private $name="emre";//private değer olduğu için class dışından erişilemez
    public $surname;
    public $age;

    protected function change($name){//protected başka bir class tarafından erişime izin verir ama düz çağırdığında hata alırsın
        $this-> name=$name;
        echo $this->name;
    }

}

class school extends student{
    function write(){
        $this-> change("mustafa");
    }
}


//fonksiyonu ve classı çağırma işlemi 
$a = new student();
//$a->change("ali");//protected fonksiyonunu direkt çağırtıımız için haata alırız
//bir başka class tarafından diğer classın değikenini dğeiştirme
$b = new school();
$b->write();//protected fonksiyonu başka bir claas aracılığı ile çağırdığımızda hata almayız

?>