<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class kelola_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
	}
	
	public function read()
	{

		$this->db->select('*');
		$this->db->from('computer');
		$this->db->order_by('no_computer', 'asc');
		$query = $this->db->get();
		return $query->result();

		/*$this->db->select('*');
		//'computer.no_computer', 'computer.username_computer','computer.os','computer.keadaan','owner.nama_owner', 'lokasi.ruangan'
		$this->db->from('computer');
		$this->db->join('hardware','hardware.id_computer=computer.id_computer');
		$this->db->join('software','software.id_computer= computer.id_computer');
		$query=$this->db->get();
		return $query->result();*/
	}

		function getall()
	{
		$this->db->select('`no_computer`,`username_computer`,`os`,`keadaan`,`nama_owner`,`lokasi`,`nama_hardware`,`merk`,`tipe`,`no_seri`,`keterangan`,`nama_software`,`installed`,`version`');
		$this->db->from('computer');
		$this->db->join('software','software.id_computer= computer.id_computer');
		$this->db->join('hardware','hardware.id_computer=computer.id_computer');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	

	function getsoft()
	{
		$this->db->select('`no_computer`,`username_computer`,`os`,`keadaan`,`nama_owner`,`lokasi`,`nama_software`,`installed`,`version`');
		$this->db->from('computer');
		$this->db->join('software','software.id_computer= computer.id_computer');
		$this->db->order_by('no_computer','asc');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	function gethard()
	{
		$this->db->select('`no_computer`,`username_computer`,`os`,`keadaan`,`nama_owner`,`lokasi`,`nama_hardware`,`merk`,`tipe`,`no_seri`,`keterangan`,');
		$this->db->from('computer');
		$this->db->join('hardware','hardware.id_computer=computer.id_computer');
		$this->db->order_by('no_computer','asc');
		$query=$this->db->get();
		return $query->result_array();
		
	}

	function edit($id_computer)
	{
		$this->db->select('*');
		$this->db->from('computer');
		$this->db->where('id_computer',$id_computer);
		$this->db->order_by('nama', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function hapus($id_computer)
	{
		$this->db->where('id_computer', $id_computer);
		$this->db->delete('computer');
		$this->db->where('id_computer',$id_computer);
		$this->db->delete('hardware');
		$this->db->where('id_computer', $id_computer);
		$this->db->delete('software');
	}

	
	function getdetail($id_computer)
	{
		$this->db->select('*');
		$this->db->from('computer');
		$this->db->where('id_computer',$id_computer);
		$query = $this->db->get();
		return $query->result();
		/*
		$this->db->select('*');
		//'computer.no_computer', 'computer.username_computer','computer.os','computer.keadaan','owner.nama_owner', 'lokasi.ruangan'
		$this->db->from('computer');
		$this->db->join('owner','owner.id_owner=computer.id_owner');
		$this->db->join('lokasi','lokasi.id_lokasi = computer.id_lokasi');
		$this->db->where('id_computer',$id_computer);
		$query=$this->db->get();
		return $query->result();
		*/
	}

	public function getdetail2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$query= $this->db->get();
		return $query->result();
	}

	public function getdetail3($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$query= $this->db->get();
		return $query->result();
	}

//============================================================================================================================================
	public function getprocessor($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Processor'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	public function getmotherboard($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Motherboard'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	public function getram1($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='RAM1'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getram2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='RAM2'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getvgacard1($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='VGA Card1'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getvgacard2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='VGA Card2'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function gethdd1($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Harddisk Drive1'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}


	public function gethdd2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Harddisk Drive2'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}


	public function getopticaldrive1($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Optical Drive1'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

public function getopticaldrive2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Optical Drive2'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getnetworkcard($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Network Card'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getsoundcard($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Sound Card'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getkeyboard($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Keyboard'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getmouse($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Mouse'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getmonitor($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Monitor'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getprinter1($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Printer1'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}


	public function getprinter2($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Printer2'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getprinter3($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Printer3'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getscanner($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='Scanner'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getipaddress($id_computer)
	{
		$this->db->select('*');
		$this->db->from('hardware');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_hardware ='IP Address'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

public function getoffice($id_computer)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_software ='Microsoft Office'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getsymantec($id_computer)
		{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_software ='Symantec'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getradmin($id_computer)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_software ='Radmin'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getinternetexplorer($id_computer)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_software ='Internet Explorer'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

	public function getmozillafirefox($id_computer)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->where('id_computer',$id_computer);
		$where= "nama_software ='Mozilla Firefox'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}


//============================================================================================================================================
	public function updatedata($id_computer)
	{
		$username = $_POST['username'];
		$no_computer = $_POST['no_computer'];
		$os = $_POST['os'];
		$keadaan = $_POST['keadaan'];
		$owner = $_POST['owner'];
		$lokasi = $_POST['lokasi'];
		$data_input_comp = array(
			'username_computer' => $username,
			'no_computer' => $no_computer,
			'keadaan' => $keadaan,
			'os' => $os,
			'nama_owner' => $owner,
			'lokasi' => $lokasi,
			);
		$this->db->where('id_computer',$id_computer);
		$res = $this->db->update('computer',$data_input_comp);
	}

	public function updatedatahardware($id_computer)
	{
		$data = array(
				'merk' => $this->input->post('merk_processor'),
				'tipe' => $this->input->post('tipe_processor'),
				'no_seri' => $this->input->post('seri_prosesor'),
				'keterangan' => $this->input->post('keterangan_prosesor')
				);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Processor'";
		$this->db->where($where);
		$this->db->update('hardware',$data);

		$data2 = array(
				'merk' => $this->input->post('merk_motherboard'),
				'tipe' => $this->input->post('tipe_motherboard'),
				'no_seri' => $this->input->post('seri_motherboard'),
				'keterangan' => $this->input->post('keterangan_motherboard')
				);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Motherboard'";
		$this->db->where($where);
		$this->db->update('hardware',$data2);
		
		$data3 = array(
				'merk' => $this->input->post('merk_ram1'),
				'tipe' => $this->input->post('tipe_ram1'),
				'no_seri' => $this->input->post('seri_ram1'),
				'keterangan' => $this->input->post('keterangan_ram1')
				);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='RAM1'";
		$this->db->where($where);
		$this->db->update('hardware',$data3);
		
		$data4 = array(
				'merk' => $this->input->post('merk_ram2'),
				'tipe' => $this->input->post('tipe_ram2'),
				'no_seri' => $this->input->post('seri_ram1'),
				'keterangan' => $this->input->post('keterangan_ram2')
				);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='RAM2'";
		$this->db->where($where);
		$this->db->update('hardware',$data4);
	
		$data5 = array(
				'merk' => $this->input->post('merk_vga1'),
				'tipe' => $this->input->post('tipe_vga1'),
				'no_seri' => $this->input->post('seri_vga1'),
				'keterangan' => $this->input->post('keterangan_vga1')
				);
	
		$data6 = array(
		'merk' => $this->input->post('merk_vga2'),
		'tipe' => $this->input->post('tipe_vga2'),
		'no_seri' => $this->input->post('seri_vga2'),
		'keterangan' => $this->input->post('keterangan_vga2')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='VGA Card2'";
		$this->db->where($where);
		$this->db->update('hardware',$data6);

		$data7 = array(
		'merk' => $this->input->post('merk_hdd1'),
		'tipe' => $this->input->post('tipe_hdd1'),
		'no_seri' => $this->input->post('seri_hdd1'),
		'keterangan' => $this->input->post('keterangan_hdd1')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Harddisk Drive1'";
		$this->db->where($where);
		$this->db->update('hardware',$data7);

		$data8 = array(
		'merk' => $this->input->post('merk_hdd2'),
		'tipe' => $this->input->post('tipe_hdd2'),
		'no_seri' => $this->input->post('seri_hdd2'),
		'keterangan' => $this->input->post('keterangan_hdd2')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Harddisk Drive2'";
		$this->db->where($where);
		$this->db->update('hardware',$data8);

		$data9 = array(
		'merk' => $this->input->post('merk_optical1'),
		'tipe' => $this->input->post('tipe_optical1'),
		'no_seri' => $this->input->post('seri_optical1'),
		'keterangan' => $this->input->post('keterangan_optical1')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Optical Drive1'";
		$this->db->where($where);
		$this->db->update('hardware',$data9);

		$data10 = array(
		'merk' => $this->input->post('merk_optical2'),
		'tipe' => $this->input->post('tipe_optical2'),
		'no_seri' => $this->input->post('seri_optical2'),
		'keterangan' => $this->input->post('keterangan_optical2')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Optical Drive2'";
		$this->db->where($where);
		$this->db->update('hardware',$data10);

		$data11 = array(
		'merk' => $this->input->post('merk_network'),
		'tipe' => $this->input->post('tipe_network'),
		'no_seri' => $this->input->post('seri_network'),
		'keterangan' => $this->input->post('keterangan_network')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Network Card'";
		$this->db->where($where);
		$this->db->update('hardware',$data11);

		$data12 = array(
		'merk' => $this->input->post('merk_sound'),
		'tipe' => $this->input->post('tipe_sound'),
		'no_seri' => $this->input->post('seri_sound'),
		'keterangan' => $this->input->post('keterangan_sound')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Sound Card'";
		$this->db->where($where);
		$this->db->update('hardware',$data12);

		$data13 = array(
		'merk' => $this->input->post('merk_keyboard'),
		'tipe' => $this->input->post('tipe_keyboard'),
		'no_seri' => $this->input->post('seri_keyboard'),
		'keterangan' => $this->input->post('keterangan_keyboard')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Keyboard'";
		$this->db->where($where);
		$this->db->update('hardware',$data13);

		$data14 = array(
		'merk' => $this->input->post('merk_mouse'),
		'tipe' => $this->input->post('tipe_mouse'),
		'no_seri' => $this->input->post('seri_mouse'),
		'keterangan' => $this->input->post('keterangan_mouse')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Mouse'";
		$this->db->where($where);
		$this->db->update('hardware',$data14);

		$data15 = array(
		'merk' => $this->input->post('merk_monitor'),
		'tipe' => $this->input->post('tipe_monitor'),
		'no_seri' => $this->input->post('seri_monitor'),
		'keterangan' => $this->input->post('keterangan_monitor')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Monitor'";
		$this->db->where($where);
		$this->db->update('hardware',$data15);

		$data16 = array(
		'merk' => $this->input->post('merk_printer1'),
		'tipe' => $this->input->post('tipe_printer1'),
		'no_seri' => $this->input->post('seri_printer1'),
		'keterangan' => $this->input->post('keterangan_printer1')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Printer1'";
		$this->db->where($where);
		$this->db->update('hardware',$data16);

		$data17 = array(
		'merk' => $this->input->post('merk_printer2'),
		'tipe' => $this->input->post('tipe_printer2'),
		'no_seri' => $this->input->post('seri_printer2'),
		'keterangan' => $this->input->post('keterangan_printer2')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Printer2'";
		$this->db->where($where);
		$this->db->update('hardware',$data17);

		$data18 = array(
		'merk' => $this->input->post('merk_printer3'),
		'tipe' => $this->input->post('tipe_printer3'),
		'no_seri' => $this->input->post('seri_printer3'),
		'keterangan' => $this->input->post('keterangan_printer3')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Printer3'";
		$this->db->where($where);
		$this->db->update('hardware',$data18);

		$data19 = array(
		'merk' => $this->input->post('merk_scanner'),
		'tipe' => $this->input->post('tipe_scanner'),
		'no_seri' => $this->input->post('seri_scanner'),
		'keterangan' => $this->input->post('keterangan_scanner')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='Scanner'";
		$this->db->where($where);
		$this->db->update('hardware',$data19);

		$data20 = array(
		'merk' => $this->input->post('alamat_ip'),
		'tipe' => $this->input->post(' '),
		'no_seri' => $this->input->post(' '),
		'keterangan' => $this->input->post(' ')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_hardware ='IP Address'";
		$this->db->where($where);
		$this->db->update('hardware',$data20);
	}

	public function updatedatasoftware($id_computer)
	{	

		$data21 = array(
		'installed' => $this->input->post('installed_office'),
		'version' => $this->input->post('version_office')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_software ='Microsoft Office'";
		$this->db->where($where);
		$this->db->update('software',$data21);
		
		$data22 = array(
		'installed' => $this->input->post('installed_symantec'),
		'version' => $this->input->post('version_symantec')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_software ='Symantec'";
		$this->db->where($where);
		$this->db->update('software',$data22);

		$data23 = array(
		'installed' => $this->input->post('installed_radmin'),
		'version' => $this->input->post('version_radmin')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_software ='Radmin'";
		$this->db->where($where);
		$this->db->update('software',$data23);

		$data24 = array(
		'installed' => $this->input->post('installed_ie'),
		'version' => $this->input->post('version_ie')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_software ='Internet Explorer'";
		$this->db->where($where);
		$this->db->update('software',$data24);

		$data25 = array(
		'installed' => $this->input->post('installed_firefox'),
		'version' => $this->input->post('version_firefox')
		);
		$this->db->where('id_computer',$id_computer);
		$where = "nama_software ='Mozilla Firefox'";
		$this->db->where($where);
		$this->db->update('software',$data25);
	}
}
	