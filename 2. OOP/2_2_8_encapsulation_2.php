<?php

/*
    ###############################################
    # membuat class handphone sebagai class induk #
    ###############################################
*/

class handphone{
    public $merk;
    protected $os;
    public $tahun_produksi;
}

/*
    ##################################################
    # membuat class smartphone sebagai class turunan #
    ##################################################
*/

class smartphone extends handphone {
    public function info_hp(){
        $this->os = "Android";
        return "Merk: $this->merk, <br> OS: $this->os <br>";
    }

    public function tahun_produksi(){
        return "Tahun Produksi: $this->tahun_produksi";
    }
}

/* 
    ############################################
    # membuat object baru dengan nama hp_nabil #
    ############################################
*/

$hp_nabil = new smartphone();

/* 
    #################################################################
    # memberi nilai untuk variabel publik yang dimiliki class induk #
    # melalui class turunan yang mewarisi sifat class induk         #
    #################################################################
*/

$hp_nabil->merk = "Samsung";

/* 
    #####################################################################
    # mamanggil fungsi info_hp yang berada pada class turunan dan       #
    # memanggil fungsi tahun_produksi yang berada pada class turunan    #
    #####################################################################
*/

echo $hp_nabil->info_hp() ."<br>";
echo $hp_nabil->tahun_produksi();

/* 
    #############################################################################################
    # pada saat script dijalankan tidak lagi menghasilkan error namun menghasilkan nilai kosong #
    # nilai kosong ini dikarnakan kita tidak memberikan nilai pada variabel tahun_produksi      #
    #############################################################################################
*/

?>