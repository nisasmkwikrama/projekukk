<?php
class Web {
    protected static $title = "First Page";

    protected static function getTitlePage() {
        echo "nama Halaman ini adalah '". self::$title .
        "'";
    }
}
 class 0therweb extends web{
    public function __construct() {
        web::getTitlePage();
    }
 }
 new 0ther2web;
 ?>