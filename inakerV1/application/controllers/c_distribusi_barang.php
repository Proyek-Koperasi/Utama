<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_distribusi_barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_distribusi_barang','',TRUE);
		$this->load->model('m_login','',TRUE);
	}

	public function index()
	{
		$this->load->view('v_distribusi_barang_login');
	}

	public function login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek_login=$this->m_login->validasi($u,$p,8);
		
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
			redirect(base_url().'c_distribusi_barang/dashboard');
		}else{
			redirect(base_url().'c_distribusi_barang');
		}
	}
		
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'c_distribusi_barang');
	}

	public function dashboard()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$this->load->view('v_distribusi_barang_dashboard');
		$this->load->view('footer');
	}

	public function data_distribusi()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$data['row'] = $this->m_distribusi_barang->select();
		$this->load->view('v_distribusi_barang_list', $data);
		$this->load->view('footer');
	}

	public function konfirmasi()
	{
		$getud = $this->session->userdata();
		$data['var'] = $getud['nama'];
		$data['akses'] = $getud['akses'];
		$this->load->view('header', $data);
		$data['row'] = $this->m_distribusi_barang->select_belum();
		$this->load->view('v_distribusi_barang_konfirmasi', $data);
		$this->load->view('footer');
	}

	public function proses_konfirmasi($id)
	{
		$this->m_distribusi_barang->update($id);
		redirect(base_url().'c_distribusi_barang/konfirmasi');
	}	
}
