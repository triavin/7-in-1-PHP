<?php

class handphone {
    var $jml_pulsa;

    function __construct($pulsa)
    {
        $this->jml_pulsa = $pulsa;
    }

    function mengirim_pesan($tarif, $jml_pesan){
        $this->jml_pulsa -= $tarif * $jml_pesan;
        echo "Berhasil Mengirim Pesan ! <br>";
        
    }

    function __destruct()
    {
        echo "Jumlah Pulsa Saat ini : " .$this->jml_pulsa;
        
    }
}

/*
    *************** membuat object baru dengan nama hp_nabil ***************
    ########################################################################
    # nilai yang dimasukan pada saat membuat object                        #
    # akan dimasukan kedalam variabel jml_pulsa yang berada didalam object #
    ########################################################################
*/

$hp_nabil = new handphone(20000);

echo "Jumlah Pulsa Saat ini : " .$hp_nabil->jml_pulsa;
echo "<br>";
$hp_nabil->mengirim_pesan(100, 3);
