<?php
class web {
    public static $title = "First Page";
    
    public static function getTitlePage() {
        return "Nama Halaman ini adalah '" . self::$title .
"'";
}
}

echo  Web :: $title;
echo "<br>";
echo Web::getTitlePage();

?>