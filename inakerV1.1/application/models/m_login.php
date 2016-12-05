<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	var $tabel_user="user";
	var $tabel_user2="tb_anggota";
	
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

	function validasiAnggota($username, $password, $akses){
		$this->db->where('user_ang',$username);
		$this->db->where('password_ang',$password);
		$this->db->where('level',$akses);
		$sql_login=$this->db->get($this->tabel_user2);
		
		if($sql_login->num_rows() == 1){
			return $sql_login->result();
		}
	}

}
?>