<?php

/*
    ###########################
    # membuat class handphone #
    ###########################
*/

class handphone{
    public $merk;
    public $os;

    public function hidupkan(){
        echo "Menghidupkan HP $this->merk";
    }
}

/*
    ############################################################
    # membuat class smartphone sebagai class turunan handphone #
    ############################################################
*/

class smartphone extends handphone {
    public function info_hp(){
        return "Merk: $this->merk, OS: $this->os";
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
$hp_nabil->os = "Android";

/* 
    ##############################################################
    # mamanggil fungsi hidupkan yang berada pada class induk dan #
    # memanggil fungsi info_hp yang berada pada class turunan    #
    ##############################################################
*/

echo $hp_nabil->hidupkan() ."<br>" .$hp_nabil->info_hp();
