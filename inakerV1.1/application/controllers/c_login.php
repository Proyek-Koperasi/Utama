<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_login','',TRUE);
	}

	public function index($id)
	{
		redirect(base_url()."c_login/loginView/".$id);
	}

	public function loginView($id)
	{
		if($id == 1){
			$this->load->view('super_user/v_super_user_login');
		}elseif($id == 2){
			$this->load->view('simpan_pinjam/v_simpan_pinjam_login');	
		}elseif($id == 3){
			$this->load->view('pembelian_penjualan/v_pembelian_penjualan_login');	
		}elseif($id == 4){
			$this->load->view('keanggotaan/v_keanggotaan_login');	
		}elseif($id == 5){
			$this->load->view('pergudangan/v_pergudangan_login');	
		}elseif($id == 6){
			$this->load->view('pengawasan/v_pengawasan_login');	
		}elseif($id == 7){
			$this->load->view('pelaporan/v_pelaporan_login');	
		}elseif($id == 8){
			$this->load->view('distribusi_barang/v_distribusi_barang_login');	
		}elseif($id == 9){
			$this->load->view('tracking/v_tracking_login');	
		}elseif($id == 10){
			$this->load->view('anggota/v_anggota_login');	
		}
	}	

	public function login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$ak = $this->input->post('akses');

		if($ak == 10){
			$cek_login=$this->m_login->validasiAnggota($u,$p,$ak);	
		}else{
			$cek_login=$this->m_login->validasi($u,$p,$ak);	
		}
		
		if($cek_login){
			if($ak == 10){
				foreach($cek_login as $data_login){
					$username=$data_login->user_ang;
					$nama=$data_login->nama_ang;
					$akses=$data_login->level;
					$id_anggota=$data_login->id_anggota;
				}
			}else{
				foreach($cek_login as $data_login){
					$username=$data_login->username;
					$nama=$data_login->nama;
					$akses=$data_login->id_akses;
				}
			}

			if($ak == 10){
				$data_login=array(
					'username'=>$username,
					'is_logged_in'=> true,
					'nama'=>$nama,
					'akses'=>$akses,
					'id_anggota'=>$id_anggota
				);
			}else{
				$data_login=array(
					'username'=>$username,
					'is_logged_in'=> true,
					'nama'=>$nama,
					'akses'=>$akses
				);	
			}
			$this->session->set_userdata($data_login);
			if($ak == 1){
				redirect(base_url().'c_super_user/dashboard');
			}elseif($ak == 2){
				redirect(base_url().'c_simpan_pinjam/dashboard');	
			}elseif($ak == 3){
				redirect(base_url().'c_pembelian_penjualan/dashboard');	
			}elseif($ak == 4){
				redirect(base_url().'c_keanggotaan/dashboard');	
			}elseif($ak == 5){
				redirect(base_url().'c_pergudangan/dashboard');	
			}elseif($ak == 6){
				redirect(base_url().'c_pengawasan/dashboard');	
			}elseif($ak == 7){
				redirect(base_url().'c_pelaporan/dashboard');	
			}elseif($ak == 8){
				redirect(base_url().'c_distribusi_barang/dashboard');	
			}elseif($ak == 9){
				redirect(base_url().'c_tracking/dashboard');	
			}elseif($ak == 10){
				redirect(base_url().'c_anggota/dashboard');	
			}

		}else{
			redirect(base_url().'c_login/loginView/'.$ak);
		}
	}
		
	public function logout($id){
		$this->session->sess_destroy();
		redirect(base_url().'c_login/loginView/'.$id);
	}
}
