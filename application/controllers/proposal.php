<?php 
 
class Proposal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Proposal',
						'isi' => 'Ini isi Contoh penggunaan template pada Codeinginter');              

		$this->template->display('proposal/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('proposal/tambah',$data);
	}
}