<?php 
 
class Proposal extends CI_Controller{
	function __construct(){
		parent::__construct();
		// Memanggil Modal Global
		$this->load->model('M_proposal');
		// Library Upload
		$this->load->library('upload');
		// Verifikasi Login ke semua halaman
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	// Halaman Daftar Proposal
	function index(){
		$data = array( 'title' 		=> 'Proposal',
						'Proposal' 	=> $this->M_proposal->getAll() );              
		$this->template->display('Proposal/Daftar',$data); 
	}

	// Halaman Tambah Proposal
	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('Proposal/Tambah',$data);
	}

	// Mengupload File Proposal
	function do_upload(){
		$nama = $this->input->post('agenda');
		$config['upload_path']          = './assets/uploads/Proposal/';
		$config['allowed_types']        = 'pdf|doc|docx|rar';
		$config['max_size']             = 10000; // 10 MB
		$config['file_name'] = time() . '-' . date("Ymd") . '-' . $nama;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('dok_proposal')) {
			$data = [
				'agenda'		=> $this->input->post('agenda'),
				'tgl_agenda'	=> $this->input->post('tgl_agenda'),
				'berita_acara'	=> $this->input->post('berita_acara'),
				'dok_proposal'	=> $this->upload->data('file_name')
			];
			//kalau form diisi dengan benar maka simpan data ke table user
			$this->M_proposal->create($data);
			redirect('Proposal');
		} else {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
	}

	// Data Detail Proposal
	function detail($id_proposal = null){
		$data = array( 'title'		=> 'Detail Proposal',
						'Proposal'	=> $this->M_proposal->edit($id_proposal));
		
		$this->template->display('Proposal/Detail',$data);
	}

	// Download Proposal
	function download($proposal){
		$this->load->helper('download');
		$name = $proposal;
		$data = file_get_contents('./uploads/proposal/' . $proposal);
		force_download($name, $data);
		redirect('Proposal');
	}

	// Delete Proposal
	public function delete($id_proposal){
		$where = ['id_proposal' => $id_proposal];
		$this->M_proposal->delete($where);
		redirect('Proposal');
	}

	// Halaman Daftar Proposal Direksi
	public function persetujuan(){
		$data = array( 'title'		=> 'Persetujuan Proposal',
						'Proposal' 	=> $this->M_proposal->direksi());
		
		$this->template->display('proposal/Persetujuan',$data);
	}

	// Apabila Proposal Diterima maka akan menyimpan di tabel Jurnal
	public function diterima(){
		$data = ['id_proposal'		=> $this->input->post('id_proposal'),
				'dok_proposal'		=> $this->input->post('dok_proposal')];
		$status = ['status'			=> $this->input->post('status')];
		$where 	= ['id_proposal'	=> $this->input->post('id_proposal')];
		
		$this->M_proposal->catatan($status, $where);
		$this->M_proposal->diterima($data);
		redirect('Proposal/persetujuan');
	}

	// Apabila Proposal Ditolak maka akan menyimpan catatan di tabel proposal
	public function catatan(){
		$data 	= ['catatan' 			=> $this->input->post('catatan'),
					'status' 			=> $this->input->post('status')];
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