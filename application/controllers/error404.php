<?php 
if ( ! defined('BASEPATH'))
	exit('No direct script access allowed');

/*
Extend Class CI_controller 
*/
class Error404 extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Index()
	{
		$this->load->view('error404');
	}
}