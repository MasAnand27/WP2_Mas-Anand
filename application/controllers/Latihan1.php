<?php 

class Latihan1 extends CI_Controller
{
	public function index()
	{
		echo "Selamat Datang.. selamat belajar Web Programming";
	}

	public function penjumlahan($n1,$n2)
	{
		$this->load->model('Model_latihan1');
		$this->load->view('view-latihan1', [
			'nilai1' => $n1,
			'nilai2' => $n2,
			'hasil' => $this->Model_latihan1->jumlah($n1,$n2),
		]);
	}
}
