<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class landing extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		// status user login = BENAR, pindah ke halaman absen
        if ($this->session->userdata('login') == TRUE)
        {
			redirect('menuutama');
		}
		//load model landing
		$this->load->model('landing_model');
		//menampung data pada variabel result dan load function read
		$data['result'] = $this->landing_model->read();
		//menampilkan data
		$this->load->view('landing_view',$data);
	}

	function fullversion()
	{
		$this->load->view('fullversion');
	}
}