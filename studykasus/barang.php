<?php
 class barang{
    private $barang ="kulkas";
    public function tampilkan_nama(){
        return "nama barang" .$this->barang;
    }
 } 
  $barang = new barang ();
  echo $barang->tampilkan_nama();
  ?>