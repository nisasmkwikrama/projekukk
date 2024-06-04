<?php 
// sediakaan kotak pembungkus yanng akan digunakan (sesuai dengan fitur)
class DataBahanBakar{
    private $Hargasuper;
    private $HargaVpower;
    private $Hargapowerdiesel;
    private $HargaPowerNitro;
    // atur harga dibuat prvate karena sudah ada getter yang akan menmapilkan datanya
    public $jenisyangDipilih;
    public $totalLiter;
// atur diatas di set public karena nilainya akan diisi dari luar
    protected $totalPembayaran;

    public function setharga($valsuper, $valVpower, $valpowerdiesel, $valPowerNitro)
    {
        $this->Hargasuper = $valsuper;
        $this->HargaVpower = $valVpower;
        $this->Hargapowerdiesel = $valpowerdiesel;
        $this->HargaPowerNitro = $valPowerNitro;
    }

    public function getHarga(){
        // setelah nilai dari atribut disimpan fungsi getter akan mengembalikan
        // karna data yang akan dikirim?dikeluarkan lebih dari satu maka data2 tersebut 
        $semuadatasolar["super"]=$this->Hargasuper;
        $semuadatasolar["Vpower"]=$this->HargaVpower;
        $semuadatasolar["powerdiesel"]=$this->Hargapowerdiesel;
        $semuadatasolar["PowerNitro"]=$this->HargaPowerNitro;
        // tujuan utama dari getter : return 
        return $semuadatasolar;
    }

}

class pembelian extends DataBahanBakar{
    // data sudah disediakan tinggal proses penghitungan jumlah pembelian
    public function totalHarga(){
        $this->totalPembayaran=$this->getHarga()[$this->jenisyangDipilih]* $this->to
}
    public function cetaBukti(){
        echo "--------------------------------";
        echo "Jenis Bahan Bakar : " $this->JenisYangDipilih;
        echo "Total liter : " . $this->totalliter;
        echo "Harga Bayar : " . number_format
    }
}