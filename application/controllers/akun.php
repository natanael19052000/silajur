<?php 
class Akun extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_akun');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Daftar Akun',
						'akun' => $this->m_akun->getAll() );    
		$this->template->display('akun/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Akun');
		$this->template->display('akun/tambah',$data);
	}

	function add(){
		$data = ['nama'		=> $this->input->post('nama'),
	        	 'nip'		=> $this->input->post('nip'),
	        	 'email'	=> $this->input->post('email'),
	        	 'jabatan'	=> $this->input->post('jabatan'),
				 'password'	=> md5($this->input->post('password'))
				];

	    //kalau form diisi dengan benar maka simpan data ke table user
		$this->m_akun->create($data);
		
		redirect('akun');
	}

	function update(){
		$data = ['nama' => $this->input->post('nama'),
	        	 'email'=> $this->input->post('email'),
	        	 'jabatan' => $this->input->post('jabatan'),
				 'password' => md5($this->input->post('password'))
				];
		$nip = $this->input->post('nip');

	    //kalau form diisi dengan benar maka simpan data ke table user
		$this->m_akun->update($data, $nip);
		
		redirect('akun');
	}

    function edit($nip = 0){
		$data = array( 'title' => 'Edit akun',
						'akun' => $this->m_akun->edit($nip));
		$this->template->display('akun/edit',$data);
	}
	
	public function delete($nip){
        $delete = $this->m_akun->delete($nip);
        redirect('akun');
		}


}