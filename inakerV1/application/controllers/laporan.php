<?php class Laporan extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
        $this->load->model('m_laporan');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    
    function peminjaman(){
        $data['title']="Laporan Peminjaman";
        $this->template->display('laporan/peminjaman',$data);
    }
    
    function cari_pinjaman(){
        $data['title']="Detail Peminjaman";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpeminjaman($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cari_pinjaman',$data);
    }
    
    
    function angsuran(){
        $data['title']="Laporan Angsuran";
        $this->template->display('laporan/angsuran',$data);
    }
    
    function cari_angsuran(){
        $data['title']="Detail Angsuran";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpengembalian($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cari_angsuran',$data);
    }
}