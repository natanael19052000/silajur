<?php 
 
class laporan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Laporan');              

		$this->template->display('laporan/daftar',$data); 
	}

	function detail(){
		$data = array( 'title' => 'Detail Laporan');
		
		$this->template->display('laporan/detail',$data);
	}
}