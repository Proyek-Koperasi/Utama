<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_distribusi_barang extends CI_Controller {

	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_distribusi_barang','',TRUE);
		$this->load->model('m_login','',TRUE);
		$getud = $this->session->userdata();
		if($getud['username'] == ""){
			redirect(base_url()."c_login/index/8");
		}else{
			$this->data['var'] = $getud['nama'];
			$this->data['akses'] = $getud['akses'];
		}
	}

	public function index()
	{
		$this->load->view('distribusi_barang/v_distribusi_barang_login');
	}

	public function dashboard()
	{
		$this->load->view('header', $this->data);
		$this->load->view('distribusi_barang/v_distribusi_barang_dashboard');
		$this->load->view('footer');
	}

	public function data_distribusi()
	{
		$this->load->view('header', $this->data);
		$data['row'] = $this->m_distribusi_barang->select();
		$this->load->view('distribusi_barang/v_distribusi_barang_list', $data);
		$this->load->view('footer');
	}

	public function konfirmasi()
	{
		$this->load->view('header', $this->data);
		$data['row'] = $this->m_distribusi_barang->select_belum();
		$this->load->view('distribusi_barang/v_distribusi_barang_konfirmasi', $data);
		$this->load->view('footer');
	}

	public function proses_konfirmasi($id)
	{
		$this->m_distribusi_barang->update($id);
		redirect(base_url().'c_distribusi_barang/konfirmasi');
	}	
}
