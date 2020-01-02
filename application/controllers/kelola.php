<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
		
/*cek output
echo "<prev>";
print_r($data2);
echo "</prev()>";
*/

class kelola extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('kelola_model');
		$this->load->model('input_barang_model');
		$this->load->library('session');
	}

	function index()
	{
		$this->load->model('kelola_model');
		$data['result'] = $this->kelola_model->read();
		$this->load->view('kelola_view',$data);
	}

	function hapus($id_computer)
	{
		$this->kelola_model->hapus($id_computer);
		redirect('kelola');
	}

	
	function getdetail($id_computer)
	{
		//getdetail2 (software)
		//getdetail3 (hardware)
		$data = array('hasil' => $this->kelola_model->getdetail($id_computer),
						'hasil2' => $this->kelola_model->getdetail2($id_computer),
							'hasil3'=>$this->kelola_model->getdetail3($id_computer));
		$this->load->view('detail_barang',$data);
	}
	
	function edit($id_computer)
	{
		//getdetail2 (software)
		//getdetail3 (hardware)
		$data = array(
						'hasil' => $this->kelola_model->getdetail($id_computer),
						'hasil2' => $this->kelola_model->getprocessor($id_computer),
						'hasil3' => $this->kelola_model->getmotherboard($id_computer),
						'hasil4' => $this->kelola_model->getram1($id_computer),
						'hasil5' => $this->kelola_model->getram2($id_computer),
						'hasil6' => $this->kelola_model->getvgacard1($id_computer),
						'hasil7' => $this->kelola_model->getvgacard2($id_computer),
						'hasil8' => $this->kelola_model->gethdd1($id_computer),
						'hasil9' => $this->kelola_model->gethdd2($id_computer),
						'hasil10' => $this->kelola_model->getopticaldrive1($id_computer),
						'hasil11' => $this->kelola_model->getopticaldrive2($id_computer),
						'hasil12' => $this->kelola_model->getnetworkcard($id_computer),
						'hasil13' => $this->kelola_model->getsoundcard($id_computer),
						'hasil14' => $this->kelola_model->getkeyboard($id_computer),
						'hasil15' => $this->kelola_model->getmouse($id_computer),
						'hasil16' => $this->kelola_model->getmonitor($id_computer),
						'hasil17' => $this->kelola_model->getprinter1($id_computer),
						'hasil18' => $this->kelola_model->getprinter2($id_computer),
						'hasil19' => $this->kelola_model->getprinter3($id_computer),
						'hasil20' => $this->kelola_model->getscanner($id_computer),
						'hasil21' => $this->kelola_model->getipaddress($id_computer),
						'hasil22' => $this->kelola_model->getoffice($id_computer),
						'hasil23' => $this->kelola_model->getsymantec($id_computer),
						'hasil24' => $this->kelola_model->getradmin($id_computer),
						'hasil25' => $this->kelola_model->getinternetexplorer($id_computer),
						'hasil26' => $this->kelola_model->getmozillafirefox($id_computer)
						);
		$this->load->view('edit_barang_view',$data);
	}

	function updatedata($id_computer)
	{
		$this->kelola_model->updatedata($id_computer);
		$this->kelola_model->updatedatahardware($id_computer);
		$this->kelola_model->updatedatasoftware($id_computer);

		redirect('kelola');
	}

}