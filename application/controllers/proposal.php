<?php 
 
class Proposal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Proposal');              

		$this->template->display('proposal/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('proposal/tambah',$data);
	}

	function detail(){
		$data = array( 'title' => 'Detail Proposal');
		
		$this->template->display('proposal/detail',$data);
	}

	function persetujuan(){
		$data = array( 'title' => 'Persetujuan Proposal');
		
		$this->template->display('proposal/persetujuan',$data);
	}
}