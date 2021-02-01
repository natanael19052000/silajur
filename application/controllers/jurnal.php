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
        
        $this->template->display('jurnal',$data); 
	}
}