<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class input_barang_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function inputbarang( )
	{
		$username = $_POST['username'];
		$no_computer = $_POST['no_computer'];
		$os = $_POST['os'];
		$keadaan = $_POST['keadaan'];
		$nama_gambar = $this->session->flashdata('data_gambar');
		$gambar = $nama_gambar;
		$owner = $_POST['owner'];
		$lokasi = $_POST['lokasi'];
		$data_input_comp = array(
			'username_computer' => $username,
			'no_computer' => $no_computer,
			'keadaan' => $keadaan,
			'gambar' => $gambar,
			'os' => $os,
			'nama_owner' => $owner,
			'lokasi' => $lokasi,
			);
		$res = $this->db->insert('computer',$data_input_comp);

		return $no_computer;

	}


	public function inputhardwaresoftware($no_computer)
	{

		//ngambil id komputer buat di hardware sama di software

		/*$this->db->select('id_computer');
		$this->db->from('computer');
		$this->db->where('no_computer',$no_computer);
		$query = $this->db->get();
		$id_computer = $query->result(); */

		session_start();
		$sql = "SELECT id_computer FROM computer WHERE no_computer= $no_computer";
		$result = mysql_query($sql);
		$value = mysql_fetch_object($result);
		$_SESSION['id_computer'] = $value->id_computer;
		$id_computer = $_SESSION['id_computer'];
		


//============================================================================================================================================		

		$v_merk_processor	= $_POST['merk_processor'];
		$v_tipe_processor	= $_POST['tipe_processor'];
		$v_seri_processor	= $_POST['seri_prosesor'];
		$v_keterangan_processor	= $_POST['keterangan_prosesor'];


		$data_processor = array(
			'nama_hardware' => 'Processor',
			'merk' => $v_merk_processor,
			'tipe' => $v_tipe_processor,
			'no_seri' => $v_seri_processor,
			'keterangan' => $v_keterangan_processor,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_processor != NULL)
		{
			$res = $this->db->insert('hardware',$data_processor);
		}


//============================================================================================================================================		

		$v_merk_motherboard	= $_POST['merk_motherboard'];
		$v_tipe_motherboard	= $_POST['tipe_motherboard'];
		$v_seri_motherboard	= $_POST['seri_motherboard'];
		$v_keterangan_motherboard	= $_POST['keterangan_motherboard'];


		$data_motherboard = array(
			'nama_hardware' => 'Motherboard',
			'merk' => $v_merk_motherboard,
			'tipe' => $v_tipe_motherboard,
			'no_seri' => $v_seri_motherboard,
			'keterangan' => $v_keterangan_motherboard,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_motherboard != NULL)
		{
			$res = $this->db->insert('hardware',$data_motherboard);
		}


//============================================================================================================================================		

		$v_merk_ram1	= $_POST['merk_ram1'];
		$v_tipe_ram1	= $_POST['tipe_ram1'];
		$v_seri_ram1	= $_POST['seri_ram1'];
		$v_keterangan_ram1	= $_POST['keterangan_ram1'];


		$data_ram1 = array(
			'nama_hardware' => 'RAM1',
			'merk' => $v_merk_ram1,
			'tipe' => $v_tipe_ram1,
			'no_seri' => $v_seri_ram1,
			'keterangan' => $v_keterangan_ram1,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_ram1 != NULL)
		{
			$res = $this->db->insert('hardware',$data_ram1);
		}


//============================================================================================================================================		

		$v_merk_ram2	= $_POST['merk_ram2'];
		$v_tipe_ram2	= $_POST['tipe_ram2'];
		$v_seri_ram2	= $_POST['seri_ram2'];
		$v_keterangan_ram2	= $_POST['keterangan_ram2'];


		$data_ram2 = array(
			'nama_hardware' => 'RAM2',
			'merk' => $v_merk_ram2,
			'tipe' => $v_tipe_ram2,
			'no_seri' => $v_seri_ram2,
			'keterangan' => $v_keterangan_ram2,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_ram2 != NULL)
		{
			$res = $this->db->insert('hardware',$data_ram2);
		}


//============================================================================================================================================		

		$v_merk_vga1	= $_POST['merk_vga1'];
		$v_tipe_vga1	= $_POST['tipe_vga1'];
		$v_seri_vga1	= $_POST['seri_vga1'];
		$v_keterangan_vga1	= $_POST['keterangan_vga1'];


		$data_vga1 = array(
			'nama_hardware' => 'VGA Card1',
			'merk' => $v_merk_vga1,
			'tipe' => $v_tipe_vga1,
			'no_seri' => $v_seri_vga1,
			'keterangan' => $v_keterangan_vga1,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_vga1 != NULL)
		{
			$res = $this->db->insert('hardware',$data_vga1);
		}
	


//============================================================================================================================================		

		$v_merk_vga2	= $_POST['merk_vga2'];
		$v_tipe_vga2	= $_POST['tipe_vga2'];
		$v_seri_vga2	= $_POST['seri_vga2'];
		$v_keterangan_vga2	= $_POST['keterangan_vga2'];


		$data_vga2 = array(
			'nama_hardware' => 'VGA Card2',
			'merk' => $v_merk_vga2,
			'tipe' => $v_tipe_vga2,
			'no_seri' => $v_seri_vga2,
			'keterangan' => $v_keterangan_vga2,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_vga2 != NULL)
		{
			$res = $this->db->insert('hardware',$data_vga2);
		}


//============================================================================================================================================		

		$v_merk_hdd1	= $_POST['merk_hdd1'];
		$v_tipe_hdd1	= $_POST['tipe_hdd1'];
		$v_seri_hdd1	= $_POST['seri_hdd1'];
		$v_keterangan_hdd1	= $_POST['keterangan_hdd1'];


		$data_hdd1 = array(
			'nama_hardware' => 'Harddisk Drive1',
			'merk' => $v_merk_hdd1,
			'tipe' => $v_tipe_hdd1,
			'no_seri' => $v_seri_hdd1,
			'keterangan' => $v_keterangan_hdd1,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_hdd1 != NULL)
		{
			$res = $this->db->insert('hardware',$data_hdd1);
		}



//============================================================================================================================================		

		$v_merk_hdd2	= $_POST['merk_hdd2'];
		$v_tipe_hdd2	= $_POST['tipe_hdd2'];
		$v_seri_hdd2	= $_POST['seri_hdd2'];
		$v_keterangan_hdd2	= $_POST['keterangan_hdd2'];


		$data_hdd2 = array(
			'nama_hardware' => 'Harddisk Drive2',
			'merk' => $v_merk_hdd2,
			'tipe' => $v_tipe_hdd2,
			'no_seri' => $v_seri_hdd2,
			'keterangan' => $v_keterangan_hdd2,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_hdd2 != NULL)
		{
			$res = $this->db->insert('hardware',$data_hdd2);
		}


//============================================================================================================================================		

		$v_merk_optical1	= $_POST['merk_optical1'];
		$v_tipe_optical1	= $_POST['tipe_optical1'];
		$v_seri_optical1	= $_POST['seri_optical1'];
		$v_keterangan_optical1	= $_POST['keterangan_optical1'];


		$data_optical1 = array(
			'nama_hardware' => 'Optical Drive1',
			'merk' => $v_merk_optical1,
			'tipe' => $v_tipe_optical1,
			'no_seri' => $v_seri_optical1,
			'keterangan' => $v_keterangan_optical1,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_optical1 != NULL)
		{
			$res = $this->db->insert('hardware',$data_optical1);
		}


//============================================================================================================================================		

		$v_merk_optical2	= $_POST['merk_optical2'];
		$v_tipe_optical2	= $_POST['tipe_optical2'];
		$v_seri_optical2	= $_POST['seri_optical2'];
		$v_keterangan_optical2	= $_POST['keterangan_optical2'];


		$data_optical2 = array(
			'nama_hardware' => 'Optical Drive2',
			'merk' => $v_merk_optical2,
			'tipe' => $v_tipe_optical2,
			'no_seri' => $v_seri_optical2,
			'keterangan' => $v_keterangan_optical2,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_optical2 != NULL)
		{
			$res = $this->db->insert('hardware',$data_optical2);
		}


//============================================================================================================================================		

		$v_merk_network	= $_POST['merk_network'];
		$v_tipe_network	= $_POST['tipe_network'];
		$v_seri_network	= $_POST['seri_network'];
		$v_keterangan_network	= $_POST['keterangan_network'];


		$data_network = array(
			'nama_hardware' => 'Network Card',
			'merk' => $v_merk_network,
			'tipe' => $v_tipe_network,
			'no_seri' => $v_seri_network,
			'keterangan' => $v_keterangan_network,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_network != NULL)
		{
			$res = $this->db->insert('hardware',$data_network);
		}


//============================================================================================================================================		

		$v_merk_sound	= $_POST['merk_sound'];
		$v_tipe_sound	= $_POST['tipe_sound'];
		$v_seri_sound	= $_POST['seri_sound'];
		$v_keterangan_sound	= $_POST['keterangan_sound'];


		$data_sound = array(
			'nama_hardware' => 'Sound Card',
			'merk' => $v_merk_sound,
			'tipe' => $v_tipe_sound,
			'no_seri' => $v_seri_sound,
			'keterangan' => $v_keterangan_sound,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_sound != NULL)
		{
			$res = $this->db->insert('hardware',$data_sound);
		}



//============================================================================================================================================		

		$v_merk_keyboard	= $_POST['merk_keyboard'];
		$v_tipe_keyboard	= $_POST['tipe_keyboard'];
		$v_seri_keyboard	= $_POST['seri_keyboard'];
		$v_keterangan_keyboard	= $_POST['keterangan_keyboard'];


		$data_keyboard = array(
			'nama_hardware' => 'Keyboard',
			'merk' => $v_merk_keyboard,
			'tipe' => $v_tipe_keyboard,
			'no_seri' => $v_seri_keyboard,
			'keterangan' => $v_keterangan_keyboard,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_keyboard != NULL)
		{
			$res = $this->db->insert('hardware',$data_keyboard);
		}


//============================================================================================================================================		

		$v_merk_mouse	= $_POST['merk_mouse'];
		$v_tipe_mouse	= $_POST['tipe_mouse'];
		$v_seri_mouse	= $_POST['seri_mouse'];
		$v_keterangan_mouse	= $_POST['keterangan_mouse'];


		$data_mouse = array(
			'nama_hardware' => 'Mouse',
			'merk' => $v_merk_mouse,
			'tipe' => $v_tipe_mouse,
			'no_seri' => $v_seri_mouse,
			'keterangan' => $v_keterangan_mouse,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_mouse != NULL)
		{
			$res = $this->db->insert('hardware',$data_mouse);
		}


//============================================================================================================================================		

		$v_merk_monitor	= $_POST['merk_monitor'];
		$v_tipe_monitor	= $_POST['tipe_monitor'];
		$v_seri_monitor	= $_POST['seri_monitor'];
		$v_keterangan_monitor	= $_POST['keterangan_monitor'];


		$data_monitor = array(
			'nama_hardware' => 'Monitor',
			'merk' => $v_merk_monitor,
			'tipe' => $v_tipe_monitor,
			'no_seri' => $v_seri_monitor,
			'keterangan' => $v_keterangan_monitor,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_monitor != NULL)
		{
			$res = $this->db->insert('hardware',$data_monitor);
		}



//============================================================================================================================================		

		$v_merk_printer1	= $_POST['merk_printer1'];
		$v_tipe_printer1	= $_POST['tipe_printer1'];
		$v_seri_printer1	= $_POST['seri_printer1'];
		$v_keterangan_printer1	= $_POST['keterangan_printer1'];


		$data_printer1 = array(
			'nama_hardware' => 'Printer1',
			'merk' => $v_merk_printer1,
			'tipe' => $v_tipe_printer1,
			'no_seri' => $v_seri_printer1,
			'keterangan' => $v_keterangan_printer1,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_printer1 != NULL)
		{
			$res = $this->db->insert('hardware',$data_printer1);
		}




//============================================================================================================================================		

		$v_merk_printer2	= $_POST['merk_printer2'];
		$v_tipe_printer2	= $_POST['tipe_printer2'];
		$v_seri_printer2	= $_POST['seri_printer2'];
		$v_keterangan_printer2	= $_POST['keterangan_printer2'];


		$data_printer2 = array(
			'nama_hardware' => 'Printer2',
			'merk' => $v_merk_printer2,
			'tipe' => $v_tipe_printer2,
			'no_seri' => $v_seri_printer2,
			'keterangan' => $v_keterangan_printer2,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_printer2 != NULL)
		{
			$res = $this->db->insert('hardware',$data_printer2);
		}



//============================================================================================================================================		

		$v_merk_printer3	= $_POST['merk_printer3'];
		$v_tipe_printer3	= $_POST['tipe_printer3'];
		$v_seri_printer3	= $_POST['seri_printer3'];
		$v_keterangan_printer3	= $_POST['keterangan_printer3'];


		$data_printer3 = array(
			'nama_hardware' => 'Printer3',
			'merk' => $v_merk_printer3,
			'tipe' => $v_tipe_printer3,
			'no_seri' => $v_seri_printer3,
			'keterangan' => $v_keterangan_printer3,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_printer3 != NULL)
		{
			$res = $this->db->insert('hardware',$data_printer3);
		}



//============================================================================================================================================		

		$v_merk_scanner	= $_POST['merk_scanner'];
		$v_tipe_scanner	= $_POST['tipe_scanner'];
		$v_seri_scanner	= $_POST['seri_scanner'];
		$v_keterangan_scanner	= $_POST['keterangan_scanner'];


		$data_scanner = array(
			'nama_hardware' => 'Scanner',
			'merk' => $v_merk_scanner,
			'tipe' => $v_tipe_scanner,
			'no_seri' => $v_seri_scanner,
			'keterangan' => $v_keterangan_scanner,
			'id_computer' => $id_computer,
			);

		
		if($v_merk_scanner != NULL)
		{
			$res = $this->db->insert('hardware',$data_scanner);
		}


//============================================================================================================================================		

		$v_ip_address = $_POST['alamat_ip'];


		$data_ip = array(
			'nama_hardware' => 'IP Address',
			'merk' => $v_ip_address,
			'tipe' => '',
			'no_seri' => '',
			'keterangan' => '',
			'id_computer' => $id_computer,
			);

		
		if($v_ip_address != NULL)
		{
			$res = $this->db->insert('hardware',$data_ip);
		}






//SOFTWARE

//============================================================================================================================================		

		$v_installed_office	= $_POST['installed_office'];
		$v_version_office	= $_POST['version_office'];
		


		$data_office = array(
			'nama_software' => 'Microsoft Office',
			'installed' => $v_installed_office,
			'version' => $v_version_office,
			'id_computer' => $id_computer,
			);

		
		if($v_installed_office != NULL)
		{
			$res = $this->db->insert('software',$data_office);
		}



//============================================================================================================================================		

		$v_installed_symantec	= $_POST['installed_symantec'];
		$v_version_symantec	= $_POST['version_symantec'];
		


		$data_symantec = array(
			'nama_software' => 'Symantec',
			'installed' => $v_installed_symantec,
			'version' => $v_version_symantec,
			'id_computer' => $id_computer,
			);

		
		if($v_version_symantec != NULL)
		{
			$res = $this->db->insert('software',$data_symantec);
		}



//============================================================================================================================================		

		$v_installed_radmin	= $_POST['installed_radmin'];
		$v_version_radmin	= $_POST['version_radmin'];
		


		$data_radmin = array(
			'nama_software' => 'Radmin',
			'installed' => $v_installed_radmin,
			'version' => $v_version_radmin,
			'id_computer' => $id_computer,
			);

		
		if($v_installed_radmin != NULL)
		{
			$res = $this->db->insert('software',$data_radmin);
		}



//============================================================================================================================================		

		$v_installed_ie	= $_POST['installed_ie'];
		$v_version_ie	= $_POST['version_ie'];
		


		$data_ie = array(
			'nama_software' => 'Internet Explorer',
			'installed' => $v_installed_ie,
			'version' => $v_version_ie,
			'id_computer' => $id_computer,
			);

		
		if($v_installed_ie != NULL)
		{
			$res = $this->db->insert('software',$data_ie);
		}



//============================================================================================================================================		

		$v_installed_firefox	= $_POST['installed_firefox'];
		$v_version_firefox	= $_POST['version_firefox'];
		


		$data_firefox = array(
			'nama_software' => 'Mozilla Firefox',
			'installed' => $v_installed_firefox,
			'version' => $v_version_firefox,
			'id_computer' => $id_computer,
			);

		
		if($v_installed_firefox != NULL)
		{
			$res = $this->db->insert('software',$data_firefox);
		}


	}
}