<?php

class Tiket {
    protected $ppn;
    private $Silver,
            $Platinum,
            $Premium,
            $VIP;
    public $jumlah;
    public $jenis;
    
    function __construct() {
        $this->ppn = 0.1;
    }
    
    public function setHarga ($tipe1,$tipe2,$tipe3,$tipe4) {
        $this->Silver = $tipe1;
        $this->Platinum = $tipe2;
        $this->Premium = $tipe3;
        $this->VIP = $tipe4;
    }
    
    public function getHarga() {
        $data["Silver"]= $this->Silver;
        $data["Platinum"]= $this->Platinum;
        $data["Premium"]= $this->Premium;
        $data["VIP"]= $this->VIP;
        return $data;
    }
    
}

class Bayar extends Tiket {
    public function hargaTiket() {
        $dataHarga = $this -> getHarga();
        $hargajumlah = $this->jumlah * $dataHarga[$this->jenis];
        $hargappn = $hargajumlah * $this->ppn;
        $hargaBayar = $hargajumlah + $hargappn;
        return $hargaBayar;
    }

    public function cetakBayar() {
        echo "<center>";
        echo "-------------------------<br>";
        echo "Anda membeli tiket dengan Class: " . $this->jenis . "<br>";
        echo "Sebanyak " . $this->jumlah . " Tiket <br>";
        echo "Total yang harus anda bayar adalah: Rp." . number_format($this->hargaTiket(), 0, '', '.') . "<br>"; 
        echo "-------------------------";
        echo "</center>";
    }

}

?>