<?php
/* 
    ##############################################################################
    # properti merpakan sebuah data atau variabel pada sebuah class              #
    # method merupakan tindakan yang dapat dilakukan dalam sebuah class yang ada #
    ##############################################################################
*/
class handphone{
    var $merk;
    var $tipe;
    var $jml_pulsa;

    function mengirim_pesan(){
        $this->jml_pulsa -= 150;
    }
}

$handphone_faqih = new handphone();
$handphone_daffa = new handphone();

/*
    ######################################################
    # variabel merk, tipe, dan jml_pulsa adalah properti #
    # sedangkan mengirim_pesan() merupakan method        #
    ######################################################
*/
