<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_super_user extends CI_Controller {

	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_super_user','',TRUE);
		$this->load->model('m_login','',TRUE);
		$getud = $this->session->userdata();
		if($getud['username'] == ""){
			redirect(base_url()."c_login/index/1");
		}else{
			$this->data['var'] = $getud['nama'];
			$this->data['akses'] = $getud['akses'];
		}
	}

	public function index()
	{
		$this->load->view('super_user/v_super_user_login');
	}

	public function dashboard()
	{
		$this->load->view('header', $this->data);
		$this->load->view('super_user/v_super_user_dashboard');
		$this->load->view('footer');
	}

	public function pengaturanha()
	{
		$this->load->view('header', $this->data); 
		$data['row'] = $this->m_super_user->select();
		$this->load->view('super_user/v_super_user_view_pengaturanha', $data);
		$this->load->view('footer');
	}

	public function profil()
	{
		$this->load->view('header', $this->data);
		$data['row'] = $this->m_super_user->getProfilByID(1);
		$this->load->view('super_user/v_super_user_view_profil', $data);
		$this->load->view('footer');
	}

	public function resetPasswordHA($id)
	{
		$data['row'] = $this->m_super_user->resetPasswordHA($id);
		redirect(base_url()."c_super_user/pengaturanha","refresh");
	}

	public function manageUser($status,$id)
	{
		$this->load->view('header', $this->data);
		$data['aksesall'] = $this->m_super_user->getAksesAll();
		$data['status'] = $status;
		if($status == 'edit'){
			$data['row'] = $this->m_super_user->getUserByID($id);
		}elseif($status == 'hapus'){
			$this->m_super_user->hapusUser($id);
			redirect(base_url()."c_super_user/pengaturanha", "refresh");
		}
		$this->load->view('super_user/v_super_user_manageUser',$data);
		$this->load->view('footer');
	}

	public function manageProfil()
	{
		$this->load->view('header', $this->data);
		$data['row'] = $this->m_super_user->getProfilByID(1);
		$this->load->view('super_user/v_super_user_manageProfil',$data);
		$this->load->view('footer');
	}

	public function addUser()
	{
		$us = $this->input->post('username');
		$na = $this->input->post('nama');
		$akses = $this->input->post('akses');
		$data=array(
				'username'=>$us,
				'password'=>$us,
				'nama'=>$na,
				'id_akses'=>$akses
			);
		$this->m_super_user->addUser($data);
		redirect(base_url()."c_super_user/pengaturanha", "refresh");
	}

	public function editUser($id)
	{
		$na = $this->input->post('nama');
		$data=array(
				'nama'=>$na
			);
		$this->m_super_user->editUser($data,$id);
		redirect(base_url()."c_super_user/pengaturanha", "refresh");
	}

	public function editProfil($id)
	{
		$nk = $this->input->post('nama_koperasi');
		$ak = $this->input->post('alamat_koperasi');
		$data=array(
				'nama_koperasi'=>$nk,
				'alamat_koperasi'=>$ak
			);
		$this->m_super_user->editProfil($data,$id);
		redirect(base_url()."c_super_user/profil", "refresh");
	}
}
