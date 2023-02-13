<?php
class handphone{
    var $jml_pulsa;

    function mengirim_pesan(){
        $this->jml_pulsa -= 150;
        echo "Berhasil Mengirim Pesan !";
        echo "<br>";
    }
}

// inisialisasi object baru
$hp_latif = new handphone();
$hp_daffa = new handphone();

// memberi nilai pada variable yang dimiliki object
$hp_latif->jml_pulsa = 15000;
$hp_daffa->jml_pulsa = 25000;

echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

echo "Latif ";
$hp_latif->mengirim_pesan();

echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

/*

variable $this dalam class merujuk pada object yang menggunakan variable tersebut
bukan pada seluruh object yang ada

*/
?>