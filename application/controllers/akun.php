<?php 
class Akun extends CI_Controller{

	function __construct(){
		parent::__construct();
		// Memamnggil Model
		$this->load->model('M_akun');
		// Cek Status Login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	// Halaman Daftar Akun
	function index(){
		$data = array( 'title' => 'Daftar Akun',
						'akun' => $this->M_akun->getAll() );    
		$this->template->display('akun/daftar',$data); 
	}
	// Halaman Tambah Akun
	function tambah(){
		$data = array( 'title' => 'Tambah Akun');
		$this->template->display('akun/tambah',$data);
	}
	// Fungsi Untuk menambah Akun
	function add(){
		$data = [
			'nama'		=> $this->input->post('nama'),
			'nip'		=> $this->input->post('nip'),
			'email'		=> $this->input->post('email'),
			'jabatan'	=> $this->input->post('jabatan'),
			'password'	=> md5($this->input->post('password'))
			];
	    //kalau form diisi dengan benar maka simpan data ke table user
		$this->M_akun->create($data);
		redirect('akun');
	}
	// Update Akun
	function update(){
		$data = [
			'nama' 		=> $this->input->post('nama'),
			'nip'		=> $this->input->post('nip'),
			'email'		=> $this->input->post('email'),
			'jabatan' 	=> $this->input->post('jabatan'),
			'password'	=> md5($this->input->post('password'))
			];
		$where =['nip'	=> $this->input->post('nip')];
	    //kalau form diisi dengan benar maka simpan data ke table user
		$this->M_akun->update($data, $where);
		redirect('akun');
	}
	// Menampilkan Halaman Detail Akun
    function edit($nip = 0){
		$data = array( 'title' => 'Edit akun',
						'akun' => $this->M_akun->edit($nip));
		$this->template->display('akun/edit',$data);
	}
	// Menghapus Akun
	public function delete($nip){
		$this->M_akun->delete($nip);
        redirect('akun');
		}


}