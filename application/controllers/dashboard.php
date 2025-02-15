<?php 
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		// Konfirmasi Login 
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}
	// MAnampilkan Dashboard yang Berbeda Antar Akun
	function index(){
		$data = array( 'title' => 'Dashboard');
		// Pembeda tampilan dashboard antar level
		if ($this->session->userdata('jabatan') == "Direksi"){
		// jika jabatan direksi maka akan masuk ke dashboard direksi
			$this->template->display('Dashboard/direksi', $data); 
		}elseif ($this->session->userdata('jabatan') == "Divisi Umum") {
		// jika jabatan divisi umum maka akan masuk ke dashboard divisi umum
			$this->template->display('Dashboard/umum', $data);
		}elseif ($this->session->userdata('jabatan') == "Divisi Keuangan") {
		// jika jabatan divisi keuangan maka akan masuk ke dashboard divisi keuangan
			$this->template->display('Dashboard/keuangan', $data);
		} else {
		// jika jabatan selain ketiga diatas maka akan masuk ke dashboard divisi IT
			$this->template->display('Dashboard/it',$data);
		}
	}
}