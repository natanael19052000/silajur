<?php 
 
class Proposal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_proposal');
		$this->load->library('upload');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	// Halaman Daftar Proposal
	function index(){
		$data = array( 'title' => 'Proposal',
						'Proposal' => $this->M_proposal->getAll() );              

		$this->template->display('Proposal/Daftar',$data); 
	}

	// Halaman Tambah Proposal
	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('Proposal/Tambah',$data);
	}

	// Mengupload File Proposal
	function do_upload(){
		$uploaddir = './uploads/proposal/';
		$uploadfile = $uploaddir . basename($_FILES['dok_proposal']['name']);

		if (move_uploaded_file($_FILES['dok_proposal']['tmp_name'], $uploadfile)) {
			$data = [
				'agenda'		=> $this->input->post('agenda'),
				'tgl_agenda'	=> $this->input->post('tgl_agenda'),
				'berita_acara'	=> $this->input->post('berita_acara'),
				'dok_proposal'	=> $_FILES['dok_proposal']['name']
			];

			//kalau form diisi dengan benar maka simpan data ke table user
			$this->M_proposal->create($data);

			redirect('Proposal');
		} else {
			echo "Possible file upload attack!\n";
		}
	}

	// Data Detaal Proposal
	function detail($id_proposal = 0){
		$data = array( 'title' => 'Detail Proposal',
						'Proposal' => $this->M_proposal->edit($id_proposal));
		
		$this->template->display('Proposal/Detail',$data);
	}

	// Download Proposal
	function download($proposal){
		$this->load->helper('download');
		$name = $proposal;
		$data = file_get_contents('./uploads/foldername/' . $proposal);
		force_download($name, $data);
		redirect('Proposal');
	}

	// Delete Proposal
	public function delete($id_proposal){
		$this->M_proposal->delete($id_proposal);
		redirect('Proposal');
	}

	// Halaman Daftar Proposal Direksi
	public function persetujuan(){
		$data = array( 'title' => 'Persetujuan Proposal',
						'Proposal' => $this->M_proposal->direksi());
		
		$this->template->display('proposal/Persetujuan',$data);
	}

	// Apabila Proposal Diterima maka akan menyimpan di tabel Jurnal
	public function diterima(){
		$data = ['id_proposal'		=> $this->input->post('id_proposal'),
				'dok_proposal'		=> $this->input->post('dok_proposal')];
		$status = ['status'			=> $this->input->post('status')];
		$where 	= ['id_proposal'		=> $this->input->post('id_proposal')];
		
		$this->M_proposal->catatan($status, $where);

		$this->M_proposal->diterima($data);

		redirect('Proposal/persetujuan');
	}

	// Apabila Proposal Ditolak maka akan menyimpan catatan di tabel proposal
	public function catatan(){
		$data 	= ['catatan' 			=> $this->input->post('catatan'),
				  'status' 				=> $this->input->post('status')];
		$where 	= ['id_proposal'		=> $this->input->post('id_proposal')];

		//kalau form diisi dengan benar maka simpan data ke table user
		$this->M_proposal->catatan($data, $where);

		redirect('Proposal/persetujuan');
	}

	// Detail Proposal pada Direksi
	public function konfirmasi($id_proposal){
		$data = array(
			'title' => 'Detail Proposal',
			'Proposal' => $this->M_proposal->dir_detail($id_proposal)
		);

		$this->template->display('Proposal/Konfirmasi', $data);
	}
	
}