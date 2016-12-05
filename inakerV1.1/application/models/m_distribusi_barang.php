<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_distribusi_barang extends CI_Model {

	private $table_name="distribusi_barang";
	private $primary_key="id_distribusi";
	
	function __construct()
	{
		parent::__construct();
	}

	function select()
	{
		$this->db->order_by($this->primary_key, 'DESC');
		return $this->db->get($this->table_name)->result();
	}

	function select_belum()
	{
		$this->db->where('status',0);
		$this->db->order_by('id_distribusi', 'ASC');
		return $this->db->get($this->table_name)->result();
	}
	
	function get_by_id($id)
	{
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
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