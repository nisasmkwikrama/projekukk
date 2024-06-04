<?php
class DataBahanBAkar {
    private $HargaSSuper;
    private $HargaSVPower;
    private $HargaSVPowerDiesel;
    private $HargaSVPowerNitro;
    //attr harga2 dibuat private karena sudah ada getter yang akan menampilkan datanya
    public $jenisYangDipilih;
    public $totalLiter;
    //attr diatas diset public karena nilainya akan diisi dari luar
    protected $totalPembayaran;
    //set protec karena hanya digunakan oleh class dia dan turunan 

    public function setHarga($valSSuper, $valSVPower, $valPowrDieses, $valSVPowerNitro)
    //mengisi nilai ke attribute, nilai nantinya diisi dari luar class melalui func
    //nilai dari luar diambil kedalam class melalui parameter
    $this->HargaSSuper = $varSSuper;
    $this->HargaSVPower = $valSVPower;
    $this->HargaSVPowerDiesel = $valSVPowerDiesel;
    $this->HargaSVPowerNitro = $valSVPowerNitro;
}