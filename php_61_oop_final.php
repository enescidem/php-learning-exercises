<?php

final class last{
    public $name= "enes ";
    final public function write(){
        echo "merhaba ".$this->name;
    }
}

//class temp extends last{}//hata verdi çünkü final olduğunda miras alınamaz başka bir sınıf tarafından miras alınamamsını sağlıyor

class temp2 {
    final public function write(){
        echo "merhaba ";
    }
}
class temp3 extends temp2 {
    /*public function write(){//burda da fonksiyon üzerinden örneği final kullanılan bir fonksiyon sadece bir kere kullanılabilir override yapamazsın
        echo "merhaba ";
    }*/
}


$value = new temp2();
$value->write();
?>