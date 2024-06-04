<?php
class Mobil {
    private $warna;
    private $merk;
    private $tahun;

    public function __construct($warna, $merk, $tahun) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    public function infoMobil() {
        return "Mobil ini berwarna " . $this->warna . ", merknya " . $this->merk . ", dan tahun pembuatannya " . $this->tahun . ".";
    }
}

$mobil1 = new Mobil("Merah", "Toyota", 2020);

echo $mobil1->infoMobil();
echo "<br>";
$mobil1->setWarna("Biru");
echo $mobil1->infoMobil(); 
?>
