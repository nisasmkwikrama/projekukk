<?php
abstract class AlatElektronik {
    abstract public function lihat_spec();
    public static function hidupkan_komputer(){
        echo "hidupkan komputer";
    }
}

class Laptop extends AlatElektronik {
    public function lihat_spec(){
        return "lihat spec laptop ...";
    }

    public function beli_laptop(){
        return "Beli Laptop💻 ...";
    }
}


class Handphone extends AlatElektronik {
    public function lihat_spec(){
        return "lihat spec hp...";
    }
}

$laptop_baru = new Laptop();
echo $laptop_baru->lihat_spec();
echo "<br/>";
echo $laptop_baru->beli_laptop();
echo "<br/>";