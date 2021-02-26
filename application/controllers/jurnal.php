<?php 
 
class Jurnal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		// Memanggil Model
		$this->load->model('M_jurnal');
		// Memanggil Library
		$this->load->library('upload');
		// MElakukan verifikasi Login ke semua Halaman
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	// Halaman daftar Proposal
	function index(){
		$data = array('title' 		=> 'Jurnal',
						'Proposal' 	=> $this->M_jurnal->getAll());
        
        $this->template->display('jurnal/daftar',$data);
	}

	// Menampilkan detail Proposal dan upload Proposal
	function detail($id_proposal = null){
		$data = array('title' 		=> 'Detail',
						'Proposal' 	=> $this->M_jurnal->proposal($id_proposal),
						'Jurnal' 	=> $this->M_jurnal->jurnal($id_proposal));
		$this->template->display('jurnal/detail', $data);
	}

	// Mengupload File Proposal
	function do_upload(){
		$uploaddir = './uploads/jurnal/';
		$uploadfile = $uploaddir . basename($_FILES['dok_jurnal']['name']);
		if (move_uploaded_file($_FILES['dok_jurnal']['tmp_name'], $uploadfile)) {
			$data = ['dok_jurnal'	=> $_FILES['dok_jurnal']['name']];
			$where = ['id_proposal'	=> $this->input->post('id_proposal')];
			//kalau form diisi dengan benar maka simpan data ke table user
			$this->M_jurnal->upload($where,$data);
			redirect('Jurnal');
		} else {
			echo "Possible file upload attack!\n";
		}
	}

	// Download Jurnal
	function download($jurnal){
		$this->load->helper('download');
		$name = $jurnal;
		$data = file_get_contents('./uploads/jurnal/' . $jurnal);
		force_download($name, $data);
		redirect('Proposal');
	}


	function persetujuan(){
		$data = array( 'title' => 'Persetujuan Jurnal');
		
		$this->template->display('jurnal/persetujuan',$data);
	}
}