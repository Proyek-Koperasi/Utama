<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_keanggotaan extends CI_Controller {

	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_keanggotaan','',TRUE);
		$this->load->model('m_login','',TRUE);
		$getud = $this->session->userdata();
		if($getud['username'] == ""){
			redirect(base_url()."c_login/index/4");
		}else{
			$this->data['var'] = $getud['nama'];
			$this->data['akses'] = $getud['akses'];
		}
	}

	public function index()
	{
		$this->load->view('keanggotaan/v_keanggotaan_login');
	}

	public function dashboard()
	{
		$this->load->view('header', $this->data);
		$this->load->view('keanggotaan/v_keanggotaan_dashboard');
		$this->load->view('footer');
	}

	public function a_view_anggota()
	{
		$this->load->view('header',$this->data);
		$query['dataanggota'] = $this->m_keanggotaan->view_anggota()->result();
		$this->load->view('keanggotaan/lihat_data_anggota',$query);
		$this->load->view('footer');
	}
	public function daftar_anggota()
	{
		$this->load->view('header', $this->data);
		$data['isi'] = $this->m_keanggotaan->provinsi();
		$this->load->view('keanggotaan/daftar_anggota_baru', $data);
		$this->load->view('footer');
	}
	function ProsesRegister(){
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/inakerV1.1/image/foto/".$foto);
			}
		}
		$ktp 	= (!empty($_FILES['ktp']['name'])) ? $_FILES['ktp']['name'] : "" ;
		if (strlen($ktp)>0) {
			if (is_uploaded_file($_FILES['ktp']['tmp_name'])) {
			move_uploaded_file($_FILES['ktp']['tmp_name'], "C:/xampp/htdocs/inakerV1.1/image/ktp/".$ktp);
			}
		}
		
		$array = array(
			'noKtp_ang'=>$_POST['NoKTP'],
			'nama_ang'=>$_POST['Nama'],
			'tempat_lahir_ang'=>$_POST['tempat'],
			'tgl_lahir_ang'=>$_POST['tgl'],
			'jk_ang'=>$_POST['JenisKelamin'],
			'alamat_ang'=>$_POST['alamat'],
			'IdProvinsi'=>$_POST['IdProvinsi'],
			'IdKota'=>$_POST['IdKota'],
			'pekerjaan_ang'=>$_POST['pekerjaan'],
			'alamatkerja_ang'=>$_POST['alamatKerja'],
			'telp_ang'=>$_POST['NoHp'],
			'email_ang'=>$_POST['AlamatEmail'],
			'user_ang'=>$_POST['username'],
			'password_ang'=>$_POST['password'],
			'level'=>'anggota',
			'status_ang'=>'aktif',
			'pas_foto_ang'=>"image/foto/".$foto,
			'ktp_ang'=>"image/ktp/".$ktp,
			'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->m_keanggotaan->AddAnggota($array);
		redirect(site_url('c_keanggotaan/a_view_anggota'));	
	}

	// public function edit_level()
	// {
	// 	$data['view_admin'] = $this->m_keanggotaan->TampilAdmin();
	// 	$this->load->view('header',$data);
	// 	$this->load->view('edit_level');
	// 	$this->load->view('footer');
	// }

	public function a_view_anggota_nonAktif()
	{
		$this->load->view('header', $this->data);
		$query['dataanggota'] = $this->m_keanggotaan->view_anggota_nonAktif()->result();
		$this->load->view('keanggotaan/list_anggota_nonAktif',$query);
		$this->load->view('footer');
	}

	public function detail_anggota_nonAktif($id)
	{
		$data['views'] = $this->m_keanggotaan->TampilPengunduranDiri($id);
		$this->load->view('header', $this->data);
		$this->load->view('keanggotaan/anggota_nonAktif',$data);
		$this->load->view('footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
	public function detail_anggota($id)
	{
		$data['views'] = $this->m_keanggotaan->ad_TampilAnggota($id);
		$this->load->view('header', $this->data);
		$this->load->view('keanggotaan/anggota_Aktif',$data);
		$this->load->view('footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
}
