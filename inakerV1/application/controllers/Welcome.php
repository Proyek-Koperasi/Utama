<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_distribusi_barang','',TRUE);
	}

	public function index()
	{
		$data['row'] = $this->m_distribusi_barang->select();
		$this->load->view('v_starting_menu', $data);
	}
}
