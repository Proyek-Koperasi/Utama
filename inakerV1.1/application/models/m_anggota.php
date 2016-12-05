<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_anggota extends CI_Model {
	
	function provinsi(){
		$query = $this->db->query("SELECT * FROM provinsi order by IdProvinsi ASC ");
		 return $query->result_array();
		}

	function IdProvinsi($IdProvinsi){
		$query = $this->db->query("SELECT * FROM provinsi where IdProvinsi = '$IdProvinsi' order by IdProvinsi ASC ");
	    return $query->first_row('array');
		}
		
	function AddAnggota($data){
		$query=$this->db->insert('tb_anggota',$data);
		return $query;
	}

	function AddPengunduranDiri($data){
		$query=$this->db->insert('tb_pengundurandiri',$data);
		return $query;
	}
	
	function deleteAnggota($id){
		$this->db->where('id_anggota',$id);
		$this->db->delete('tb_anggota');
	}

	public function GetUser($username,$password){
        
    $query = $this->db->query("select * FROM tb_anggota WHERE user_ang = '".$username."' AND password_ang = '".$password."'"				);
	return $query->first_row('array');
    }

    function view_anggota_nonAktif(){
		$query=$this->db->get('tb_pengundurandiri');
			return $query;
	}

	function TampilAnggotaBaru(){
		$query = $this->db->query("SELECT * FROM tb_anggota order by id_anggota DESC limit 1");
		 return $query->result_array();
	}

	function TampilPengunduranDiri($id){		
		$query = $this->db->query("SELECT * FROM tb_pengundurandiri where id_anggota= '".$id."' ");
		 return $query->result_array();
	}
	
	function ad_TampilAnggota($id){		
		$query = $this->db->query("SELECT * FROM tb_anggota where id_anggota= '".$id."' ");
		 return $query->result_array();
	}

	function Anggota($id){
		$IdAnggota = $this->session->userdata('id_anggota');
		$this->db->select('*');
		$this->db->from('tb_anggota');
		$this->db->where('id_anggota',$IdAnggota);
		$query = $this->db->get();
		return $query->result_array();
	}
	function TampilAnggota(){
		$IdAnggota = $this->session->userdata('id_anggota');
		$query = $this->db->query("SELECT * FROM tb_anggota where id_anggota= '".$IdAnggota."' ");
		 return $query->result_array();
	}
	function TampilAdmin(){
		$IdAdmin = $this->session->userdata('id_admin');
		$query = $this->db->query("SELECT * FROM tb_admin where id_admin= '".$IdAdmin."' ");
		 return $query->result_array();
	}	

	public function login_admin(){
			$username	=$this->input->post('username');
			$password 	=$this->input->post('password');

			$sql=$this->db->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password' ");

			if ($sql) {
				return $sql->first_row();
			}
	}
	
	public function login_user(){
			$user_ang	=$this->input->post('username');
			$password_ang 	=$this->input->post('password');

			$sql=$this->db->query("SELECT * FROM tb_anggota WHERE user_ang='$user_ang' AND password_ang='$password_ang' ");

			if ($sql) {
				return $sql->first_row();
			}
	}
	function UpdatePassword($data,$id){
		$this->db->where('id_anggota',$id);
		$Mysql=$this->db->update('tb_anggota',$data);
		return $Mysql;
	}

	public function view_dtanggota()
		{
			$userid=$this->session->userdata('id_anggota');
			$id=$this->db->where('id_anggota', $userid);
			$this->db->select('*');
			$this->db->from('tb_anggota');
			$query = $this->db->get();
			return $query;
		}

	public function view_anggota()
	{
		$query=$this->db->get('tb_anggota');
		return $query;
	}

	public function get_detail_anggota($id_anggota){
		return $this->db->get_where('tb_anggota', array('id_anggota' => $id_anggota));
	}

	public function update_ang($data,$id_anggota){
		$this->db->update("tb_anggota",$data,$id_anggota);
	}
}
?>