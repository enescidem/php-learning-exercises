<?php

require_once "php_37_get&post_form.php";
require_once "1php_37_get&post_form.php";//başına 1 yazdık hatalı bir çağırma olduğunda alttaki echo komutu çalışmaz ama üstteki çalışır include da hata olsaydı alttaki echo da çalışırdı sadece 3. satır çalışmazdı
echo "merhaba dünya";//bunlar arasındaki fark da hatalarda ortaya çıkıyor yine require once da hata olursa kendinden sonraki dosyaların çalışmasını engeller ve hatta verir

?>