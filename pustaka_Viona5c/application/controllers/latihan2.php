<?php
class Latihan2 extends CI_Controller {
    public function index() {        
    echo "Selamat Datang di Web Programming Class";
    }
    public function penjumlahan($n1, $n2) {
    	$this->load->model('model1');

    	$data['nilai1'] = $n1;
    	$data['nilai2'] = $n2;
    	$data['hasil'] = $this->model1->jumlah($n1,$n2);
    	
    	$this->load->view('view-latihan1', $data);

    }

}