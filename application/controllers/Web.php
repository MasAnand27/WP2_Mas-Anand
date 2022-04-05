<?php 

class Web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Halaman Depan";
		$data['content'] = "v_index";
		$this->load->view('layouts/app',$data);
	}

	public function about()
	{
		$data['judul'] = "Halaman About";
		$data['content'] = "v_about";
		$this->load->view('layouts/app',$data);
	}
}
