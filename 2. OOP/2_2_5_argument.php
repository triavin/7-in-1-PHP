<?php
/*
    ###########################
    # membuat class handphone #
    ###########################
*/
class handphone{
    var $jml_pulsa;

    function mengirim_pesan($tarif, $jml_pesan =1){
        $this->jml_pulsa -= $tarif * $jml_pesan;
        echo "Berhasil Mengirim Pesan sebanyak " .$jml_pesan ." dengan tarif sebesar " .$tarif;
        echo "<br>";
    }
}

/*
    ##########################################################
    # membuat object baru dengan menggunakan class handphone #
    ##########################################################
*/

$hp_latif = new handphone();
$hp_daffa = new handphone();

/*
    ####################################################
    # memberi nilai pada variable yang dimiliki object #
    ####################################################
*/

$hp_latif->jml_pulsa = 15000;
$hp_daffa->jml_pulsa = 25000;

echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

/*
    ######################################################################################
    # menjalankan function yang berada didalam class melalui object menggunakan argument #
    ######################################################################################
*/

echo "Latif ";
$hp_latif->mengirim_pesan(5);

echo "Latif ";
$hp_daffa->mengirim_pesan(20, 5);

echo "Jumlah Pulsa Latif Saat Ini : " .$hp_latif->jml_pulsa;
echo "<br>";

echo "Jumlah Pulsa Daffa Saat Ini : " .$hp_daffa->jml_pulsa;
echo "<br>";

/*
    ###################################################################################################
    # argumen yang digunakan pada saat memanggil function bertujuan untuk                             #
    # memberi nilai variabel yang berada pada function dalam kasus kali ini yaitu tarif dan jbl_pesan #
    ###################################################################################################
*/
?>