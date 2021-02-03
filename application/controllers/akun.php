<?php 
 
class Akun extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Daftar Akun');              

		$this->template->display('akun/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Akun');
		
		$this->template->display('akun/tambah',$data);
	}

	function detail(){
		$data = array( 'title' => 'Detail akun');
		
		$this->template->display('akun/detail',$data);
    }
    
    function edit(){
		$data = array( 'title' => 'Edit akun');
		
		$this->template->display('akun/edit',$data);
	}
}