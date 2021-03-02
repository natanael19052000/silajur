<?php 
class laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
		// Konfirmasi Login
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		} else {
			// Memanggil Model
			$this->load->model('M_jurnal');
		}
	}
	// Halaman Daftar Laporan
	function index(){
		$data = array( 
			'title' 	=> 'Laporan',
			'Jurnal' 	=> $this->M_jurnal->laporan()
		);              
		$this->template->display('Laporan/Daftar',$data); 
	}
	// Halaman Detail Laporan
	function detail($id_proposal){
		$data = array(
			'title'		=> 'Detail Laporan',
			'Proposal'	=> $this->M_jurnal->dir_detail($id_proposal),
			'Jurnal'	=> $this->M_jurnal->jurnal($id_proposal)
		);
		$this->template->display('Laporan/Detail',$data);
	}
}