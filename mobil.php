<?php
/**
 * Program sederhana pendefinisian class dan pemanggilan class.
 */

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna ($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna ()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}

// membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// memanggil objek
echo "<br>Mobil pertama</br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna</br>";
$a->gantiWarna("Merah<br>");
$a->tampilWarna();

// memanggil objek
echo "<br>Mobil kedua</br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();

?>