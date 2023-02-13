<?php
/*
    ###########################
    # membuat class handphone #
    ###########################
*/
class handphone{
    // Properti dari class handphone
    var $jml_pulsa;

    // function untuk mencetak nilai dari properti dengan menerapkan logika aritmatika sederhana
    function mengirim_pesan(){
        $this->jml_pulsa -= 150;
        echo "Berhasil Mengirim Pesan !";
        echo "<br>";
    }
}

/*
    ##########################################################
    # membuat object baru dengan menggunakan class handphone #
    ##########################################################
*/

$hp_latif = new handphone();
// inisialisasi nilai untuk properti yang dimiliki object
$hp_latif->jml_pulsa = 15000;

// Mencetak nilai properti dari object
echo "Jumlah Pulsa Saat Ini : ";
echo $hp_latif->jml_pulsa;
echo "<br>";

// Menjalankan Method
$hp_latif->mengirim_pesan();

/* 
    Mencetak nilai properti dari object
    Setelah Menjalankan Method
*/ 
echo "Jumlah Pulsa Saat Ini : ";
echo $hp_latif->jml_pulsa;
echo "<br>";

/*
    ############################################################################################
    # cara mengakses objek adalah dengan membuat variable baru dengan memanggil class yang ada #
    # seperti pada variabel $hp_latif yang memanggil class handphone                           #
    # sehingga variabel $hp_latif dapat mengakses isi dari class yang ada dengan tanda ' -> '  #
    ############################################################################################
*/
?>