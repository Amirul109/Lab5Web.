<?php
class Mobil {
    public $merk;
    public $model;
    public $tahun;
    public $warna;

    function __construct($merk, $model, $tahun, $warna) {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    function getInfo() {
        echo "Mobil ".$this->merk." ".$this->model." tahun ".$this->tahun." berwarna ".$this->warna."<br>";
    }

    function jalan() {
        echo "Mobil ".$this->merk." ".$this->model." berjalan<br>";
    }

    function stop() {
        echo "Mobil ".$this->merk." ".$this->model." berhenti<br>";
    }
}

// Membuat objek "mobil1" dan "mobil2" dari class "Mobil"
$mobil1 = new Mobil("Toyota", "Avanza", 2020, "putih");
$mobil2 = new Mobil("Honda", "Jazz", 2019, "hitam");

// Memanggil method "getInfo", "jalan", dan "stop" dari objek "mobil1" dan "mobil2"
$mobil1->getInfo();
$mobil1->jalan();
$mobil1->stop();

$mobil2->getInfo();
$mobil2->jalan();
$mobil2->stop();
?>