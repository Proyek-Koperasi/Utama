<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_anggota extends CI_Controller {

	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_keanggotaan','',TRUE);
		$this->load->model('m_login','',TRUE);
		$getud = $this->session->userdata();
		if($getud['username'] == ""){
			redirect(base_url()."c_login/index/10");
		}else{
			$this->data['var'] = $getud['nama'];
			$this->data['akses'] = $getud['akses'];
		}
	}

	public function index()
	{
		$this->load->view('anggota/v_anggota_login');
	}

	public function dashboard()
	{
		$this->load->view('header', $this->data);
		$this->load->view('anggota/v_anggota_dashboard');
		$this->load->view('footer');
	}

	public function hal_dtanggota()
	{
		$data['views'] = $this->m_keanggotaan->TampilAnggota();
		$this->load->view('header',$this->data);
		$this->load->view('anggota/coba',$data);
		$this->load->view('footer');
		
		//$this->load->view('hal_anggota',$data);
	
	}
	public function updatePassword()
	{
		$data['views'] = $this->m_keanggotaan->TampilAnggota();
		$this->load->view('header',$this->data);
		$this->load->view('anggota/gantipassword',$data);
		$this->load->view('footer');
		
	
	}
	
	public function updatePhoto()
	{
		$data['views'] = $this->m_keanggotaan->TampilAnggota();
		$this->load->view('header',$this->data);
		$this->load->view('anggota/gantifoto',$data);
		$this->load->view('footer');
	
	}
	
	public function ProsesupdatePassword($id)
	{
	
		$array = array(
		'noKtp_ang'=>$_POST['NoKTP'],
		'nama_ang'=>$_POST['Nama'],
		'tempat_lahir_ang'=>$_POST['tempat'],
		'tgl_lahir_ang'=>$_POST['tgl'],
		'jk_ang'=>$_POST['jk'],
		'alamat_ang'=>$_POST['alamat'],
		'pekerjaan_ang'=>$_POST['pekerjaan'],
		'alamatkerja_ang'=>$_POST['alamatKerja'],
		'telp_ang'=>$_POST['NoHp'],
		'email_ang'=>$_POST['AlamatEmail'],
		'user_ang'=>$_POST['username'],
		'password_ang'=>$_POST['password'],
		'level'=>'anggota',
		'status_ang'=>'aktif',
		'pas_foto_ang'=>$_POST['foto'],
		'ktp_ang'=>$_POST['ktp'],
		'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->m_keanggotaan->UpdatePassword($array,$id);
	redirect(base_url()."c_anggota/dashboard");
	
	}
	
    public function ProsesupdatePhoto($id)
	{
		$foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
		move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/inakerV1.1/image/foto/".$foto);
			}
		}
	
		$array = array(
		'noKtp_ang'=>$_POST['NoKTP'],
		'nama_ang'=>$_POST['Nama'],
		'tempat_lahir_ang'=>$_POST['tempat'],
		'tgl_lahir_ang'=>$_POST['tgl'],
		'jk_ang'=>$_POST['jk'],
		'alamat_ang'=>$_POST['alamat'],
		'pekerjaan_ang'=>$_POST['pekerjaan'],
		'alamatkerja_ang'=>$_POST['alamatKerja'],
		'telp_ang'=>$_POST['NoHp'],
		'email_ang'=>$_POST['AlamatEmail'],
		'user_ang'=>$_POST['Username'],
		'password_ang'=>$_POST['password'],
		'level'=>'anggota',
		'status_ang'=>'aktif',
		'pas_foto_ang'=>"image/foto/".$foto,
		'ktp_ang'=>$_POST['ktp'],
		'tgl_daftar'=>$_POST['tgldaftar']
		);
		$this->m_keanggotaan->UpdatePassword($array,$id);
	redirect(base_url()."c_anggota/hal_dtanggota");
	
	}

	public function undurdiri()
	{
		$this->load->view('header',$this->data);
		$data['views'] = $this->m_keanggotaan->TampilAnggota();
		$this->load->view('anggota/form_undur_diri',$data);
		$this->load->view('footer');
		
		//$this->load->view('hal_anggota',$data);
	}

	function Pengundurandiri($id){
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
			'Id_anggota'=>$_POST['id_anggota'],
			'noKtp_ang'=>$_POST['NoKTP'],
			'nama_ang'=>$_POST['Nama'],
			'tempat_lahir_ang'=>$_POST['tempat'],
			'tgl_lahir_ang'=>$_POST['tgl'],
			'jk_ang'=>$_POST['jk'],
			'alamat_ang'=>$_POST['alamat'],
			'pekerjaan_ang'=>$_POST['pekerjaan'],
			'alamatkerja_ang'=>$_POST['alamatKerja'],
			'telp_ang'=>$_POST['NoHp'],
			'email_ang'=>$_POST['AlamatEmail'],
			'user_ang'=>$_POST['username'],
			'password_ang'=>$_POST['password'],
			'level'=>'anggota',
			'status_ang'=>'tidak aktif',
			'pas_foto_ang'=>$_POST['foto'],
			'ktp_ang'=>$_POST['ktp'],
			'tgl_daftar'=>$_POST['tgldaftar'],
			'tgl_keluar'=>$_POST['tglPengunduran']
		);
		$this->m_keanggotaan->AddPengunduranDiri($array);
		$this->m_keanggotaan->deleteAnggota($id);
		//mysql_query("DELETE FROM tb_anggota WHERE id_anggota = '".$id."'");
		$this->session->sess_destroy();
		redirect(base_url()."c_anggota");
	}
}
