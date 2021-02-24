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
 
	function index(){
		$data = array( 'title' => 'Proposal',
						'Proposal' => $this->M_proposal->getAll() );              

		$this->template->display('Proposal/Daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('Proposal/Tambah',$data);
	}

	function do_upload()
	{
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

	function detail($id_proposal = 0){
		$data = array( 'title' => 'Detail Proposal',
						'Proposal' => $this->M_proposal->edit($id_proposal));
		
		$this->template->display('Proposal/Detail',$data);
	}

	function download($proposal){

		$this->load->helper('download');
		$name = $proposal;
		$data = file_get_contents('./uploads/foldername/' . $proposal);
		force_download($name, $data);
		redirect('Proposal');
	}

	public function delete($id_proposal)
	{
		$this->M_proposal->delete($id_proposal);
		redirect('Proposal');
	}


	public function persetujuan(){
		$data = array( 'title' => 'Persetujuan Proposal',
						'Proposal' => $this->M_proposal->direksi());
		
		$this->template->display('proposal/Persetujuan',$data);
	}

	public function konfirmasi($id_proposal){
		$data = array(
			'title' => 'Detail Proposal',
			'Proposal' => $this->M_proposal->dir_detail($id_proposal)
		);

		$this->template->display('Proposal/Konfirmasi', $data);
	}
	
}