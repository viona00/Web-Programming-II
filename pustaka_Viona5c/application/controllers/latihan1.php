<?php
class Latihan1 extends CI_Controller{

    public function index() {        
        echo "Selamat Datang di Web Programming Class";
    }
    public function penjumlahan($n1, $n2){
        $this->load->model('model1');
        $hasil = $this->model1->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari ".$n1."+".$n2."=".$hasil;   
    }

}