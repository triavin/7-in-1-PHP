<?php
class handphone{
    var $jml_pulsa;

    function mengirim_pesan($tarif, $jml_pesan =1){
        $this->jml_pulsa -= $tarif * $jml_pesan;
        echo "Berhasil Mengirim Pesan sebanyak " .$jml_pesan ." dengan tarif sebesar " .$tarif;
        echo "<br>";
    }
}

// inisialisasi object baru
$hp_latif = new handphone();
$hp_daffa = new handphone();

// memberi nilai pada variable yang dimiliki object
$hp_latif->jml_pulsa = 15000;
$hp_daffa->jml_pulsa = 25000;

// mencetak jml_pulsa dari masing-masing object sebelum menjalankan method
echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

// menjalankan method mengirim_pesan dengan argumen berbeda pada setiap object
echo "Latif ";
$hp_latif->mengirim_pesan(5);

echo "Latif ";
$hp_daffa->mengirim_pesan(20, 5);

// mencetak jml_pulsa dari masing-masing object sesudah menjalankan method
echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

/*

variable $this dalam class merujuk pada object yang menggunakan variable tersebut
bukan pada seluruh object yang ada

*/
?>