<?php 
 
class Jurnal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Jurnal',
                        'isi' => 'Ini isi Contoh penggunaan template pada Codeinginter');
        
        $this->template->display('jurnal/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Jurnal');

		$this->template->display('jurnal/tambah',$data);
	}

	function detail(){
		$data = array( 'title' => 'Detail Jurnal');

		$this->template->display('jurnal/detail',$data);
	}

	function persetujuan(){
		$data = array( 'title' => 'Persetujuan Jurnal');
		
		$this->template->display('jurnal/persetujuan',$data);
	}
}