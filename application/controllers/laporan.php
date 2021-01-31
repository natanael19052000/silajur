<?php 
 
class Laporan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Laporan',
						'isi' => 'Ini isi Contoh penggunaan template pada Codeinginter');              

$this->template->display('laporan',$data); 
	}
}