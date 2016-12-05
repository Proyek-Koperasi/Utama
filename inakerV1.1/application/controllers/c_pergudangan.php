<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pergudangan extends CI_Controller {

	public function index()
	{
		$this->load->view('v_pergudangan_login');
	}

	public function login()
	{
		
		$this->load->model('m_login','',TRUE);
		$cek_login=$this->m_login->validasi(5);
		
		if($cek_login){
			foreach($cek_login as $data_login){
				$username=$data_login['username'];
				$nama=$data_login['nama'];
			}
		
			$data_login=array(
				'username'=>$username,
				'is_logged_in'=> true,
				'nama'=>$nama
			);
			$this->session->set_userdata($data_login);
			redirect(base_url().'user/dashboard/');
		}else{
			$this->index();
		}
	}
		
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
}
