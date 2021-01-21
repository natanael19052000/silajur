<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
 
	}
 
	function index(){
		$this->load->view('login_view');
	}
 
	function aksi_login(){
		$NIP = $this->input->post('nip');
		$password = $this->input->post('password');
		$where = array(
			'nip' => $NIP,
			'password' => md5($password)
			);
		$cek = $this->login_model->cek_login("akun",$where);
		if($cek->num_rows() > 0){
			
			$row= $cek->row();
			$data_session = array(
				'nip' => $NIP,
				'nama' => $row->nama,
				
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "NIP dan Password SALAH !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}