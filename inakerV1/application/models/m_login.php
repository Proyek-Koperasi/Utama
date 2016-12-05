<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	var $tabel_user="user";
	
	
	function __construct()
	{
		parent::__construct();
	}

	function validasi($username, $password, $akses){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('id_akses',$akses);
		$sql_login=$this->db->get($this->tabel_user);
		
		if($sql_login->num_rows() == 1){
			return $sql_login->result();
		}
	}



}
?>