<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_super_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_super_user','',TRUE);
		$this->load->model('m_login','',TRUE);
	}

	public function index()
	{
		$this->load->view('v_super_user_login');
	}

	public function login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek_login=$this->m_login->validasi($u,$p,1);
		
		if($cek_login){
			foreach($cek_login as $data_login){
				$username=$data_login->username;
				$nama=$data_login->nama;
				$akses=$data_login->id_akses;
			}
		
			$data_login=array(
				'username'=>$username,
				'is_logged_in'=> true,
				'nama'=>$nama,
				'akses'=>$akses
			);
			$this->session->set_userdata($data_login);
			redirect(base_url().'c_super_user/dashboard');
		}else{
			redirect(base_url().'c_super_user');
		}
	}
		
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'c_super_user');
	}

	public function dashboard()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$this->load->view('v_super_user_dashboard');
		$this->load->view('footer');
	}

	public function pengaturanha()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$data['row'] = $this->m_super_user->select();
		$this->load->view('v_super_user_view_pengaturanha', $data);
		$this->load->view('footer');
	}

	public function profil()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$data['row'] = $this->m_super_user->get_profil_by_id(1);
		$this->load->view('v_super_user_view_profil', $data);
		$this->load->view('footer');
	}
}
