<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_simpan_pinjam extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_simpan_pinjam','',TRUE);
		$this->load->model('m_login','',TRUE);
	}

	public function index()
	{
		$this->load->view('v_simpan_pinjam_login');
	}

	public function login()
	{
		
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek_login=$this->m_login->validasi($u,$p,2);
		
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
			redirect(base_url().'c_simpan_pinjam/dashboard');
		}else{
			redirect(base_url().'c_simpan_pinjam');
		}
	}
		
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

	public function dashboard()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$this->load->view('admin_peminjaman/index');
		$this->load->view('footer');
	}
}
