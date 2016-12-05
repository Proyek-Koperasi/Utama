<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_super_user extends CI_Model {

	private $table_name="user";
	private $table_name2="akses";
	private $table_name3="profil";
	private $primary_key="id";
	private $primary_key2="id_akses";
	private $primary_key3="id_profil";
	
	function __construct()
	{
		parent::__construct();
	}

	function select()
	{
		$this->db->join($this->table_name2,'user.id_akses = akses.id_akses');
		return $this->db->get($this->table_name)->result();
	}
	
	function get_profil_by_id($id)
	{
		$this->db->where($this->primary_key3,$id);
		return $this->db->get($this->table_name3)->result();
	}

	function get_by_id($id)
	{
		$this->db->where($this->primary_key3,$id);
		return $this->db->get($this->table_name3);
	}
	
	function save($barang)
	{
		$this->db->insert($this->table_name,$barang);
		return $this->db->insert_id();
	}
	
	function update($id)
	{
		$this->db->set('tanggal_kirim',date('Y-m-d'));
		$this->db->set('status',1);
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name);
	}

	function delete($id)
	{
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
}
?>