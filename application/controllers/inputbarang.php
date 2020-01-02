<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class inputbarang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->library('session');
		$this->load->model('input_barang_model');
	}

	function index()
	{
		$this->load->view('inputbarang_view');
	}

	function tambahbarang()
	{
		$no_computer = $this->input_barang_model->inputbarang();
		$this->input_barang_model->inputhardwaresoftware($no_computer);
		
		redirect('kelola');
	}
}