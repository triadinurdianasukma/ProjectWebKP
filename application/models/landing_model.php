<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class landing_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	public function read()
	{
		$this->db->select('*');
		$this->db->from('computer');
		$query = $this->db->get();
		return $query->result();
		//harus pake select
		/*$this->db->select('*');
		//'computer.no_computer', 'computer.username_computer','computer.os','computer.keadaan','owner.nama_owner', 'lokasi.ruangan'
		$this->db->from('computer');
		$this->db->join('owner','owner.id_owner=computer.id_owner');
		$this->db->join('lokasi','lokasi.id_lokasi = computer.id_lokasi');
		$query=$this->db->get();
		return $query->result();
		*/
		/*$this->db->select(`no_computer`, `username_computer`,  `os`, `keadaan`, `owner`.`nama_owner`,`lokasi`.`ruangan`);
		$this->db->from('computer','lokasi','owner');
		$this->db->where('`computer`.`id_lokasi`=`lokasi`.`id_lokasi` and `computer`.`id_owner`=`owner`.`id_owner`');
		$query = $this->db->get();
		return $query->result();
		*/
	}
}