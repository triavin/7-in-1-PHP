<?php
class handphone{
    var $jml_pulsa;

    function mengirim_pesan(){
        $this->jml_pulsa -= 150;
        echo "Berhasil Mengirim Pesan !";
        echo "<br>";
    }
}

$hp_latif = new handphone();
$hp_latif->jml_pulsa = 15000;

echo "Jumlah Pulsa Saat Ini : ";
echo $hp_latif->jml_pulsa;
echo "<br>";

$hp_latif->mengirim_pesan();

echo "Jumlah Pulsa Saat Ini : ";
echo $hp_latif->jml_pulsa;
echo "<br>";

/*

cara mengakses objek adalah dengan membuat variable baru dengan memanggil class yang ada
seperti pada variabel $hp_latif yang memanggil class handphone
sehingga variabel $hp_latif dapat mengakses isi dari class yang ada dengan tanda ' -> ' 

*/
?>