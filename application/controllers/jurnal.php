<?php 
class Jurnal extends CI_Controller{
	function __construct(){
		parent::__construct();
		// Melakukan verifikasi Login ke semua Halaman
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Login"));
		}else{
		// Memanggil Model
		$this->load->model('M_jurnal');
		$this->load->model('M_proposal');
		// Memanggil Library
		$this->load->library('upload');
		}
	}
	// Halaman daftar Proposal
	function index(){
		$data = array(
			'title' 		=> 'Jurnal',
			'Proposal' 		=> $this->M_jurnal->getAll());
        
        $this->template->display('Jurnal/Daftar',$data);
	}
	// Menampilkan detail Proposal dan upload Proposal
	function detail($id_proposal = null){
		$data = array('title' 		=> 'Detail',
						'Proposal' 	=> $this->M_jurnal->proposal($id_proposal),
						'Jurnal' 	=> $this->M_jurnal->datajurnal($id_proposal));
		$this->template->display('Jurnal/Detail', $data);
	}
	// Mengupload File Jurnal
	function do_upload(){
		$nama = $this->input->post('agenda');
		$config['upload_path']          = './assets/uploads/Jurnal/';
		$config['allowed_types']        = 'pdf|doc|docx|rar';
		$config['max_size']             = 10000; // 10 MB
		$config['file_name'] = time() . '-' . date("Ymd") . '-Jurnal-' . $nama;
		// memakai LIBRARY UPLOAD
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		// Jika File Sudah terupload
		if ($this->upload->do_upload('dok_jurnal')) {
			$data = [
				'dok_jurnal'	=> $this->upload->data('file_name'),
				'nip_jurnal' 	=> $this->session->userdata('nip')
			];
			$tanggungan = ['tanggungan' => "Done"];
			$where = ['id_proposal'	=> $this->input->post('id_proposal')];
			//kalau form diisi dengan benar maka simpan data ke table user
			$this->M_jurnal->upload($where,$data);
			$this->M_proposal->catatan($tanggungan, $where);
			redirect('Jurnal');
		} else {
			echo "Possible file upload attack!\n";
		}
	}
	// Tanggungan
	function tanggungan(){
		$tanggungan = ['tanggungan' => $this->input->post('tanggungan')];
		$where = ['id_proposal'	=> $this->input->post('id_proposal')];
		$this->M_proposal->catatan($tanggungan, $where);
		redirect('Jurnal');
	}
	// Tanggungan Upload
	function tanggungan_up(){
		$nama = $this->input->post('id_proposal');
		$config['upload_path']          = './assets/uploads/Tanggungan/';
		$config['allowed_types']        = 'pdf|doc|docx|rar';
		$config['max_size']             = 10000; // 10 MB
		$config['file_name'] = time() . '-' . date("Ymd") . '-Tanggungan-' . $nama;
		// memakai LIBRARY UPLOAD
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		// Jika File Sudah terupload
		if ($this->upload->do_upload('tanggungan')) {
			$tanggungan = ['tanggungan' => $this->upload->data('file_name')];
			$where = ['id_proposal'	=> $this->input->post('id_proposal')];
			//kalau form diisi dengan benar maka simpan data 
			$this->M_proposal->catatan($tanggungan, $where);
			redirect('Proposal');
		} else {
			echo "Possible file upload attack!\n";
		}
	}
	// Download Jurnal
	function download($jurnal){
		$this->load->helper('download');
		$name = $jurnal;
		$data = file_get_contents('./assets/uploads/Jurnal/' . $jurnal);
		force_download($name, $data);
		redirect('Proposal');
	}
	// Halaman Daftar Jurnal Direksi
	function persetujuan(){
		$data = array( 
			'title'		=> 'Persetujuan Jurnal',
			'Jurnal' 	=> $this->M_jurnal->direksi()
		);
		$this->template->display('Jurnal/Persetujuan',$data);
	}
	// Apabila Proposal Diterima maka akan menyimpan di tabel Jurnal
	public function diterima(){
		$status = ['status_jurnal'	=> $this->input->post('status')];
		$where 	= ['id_proposal'	=> $this->input->post('id_proposal')];
		$this->M_jurnal->catatan($status, $where);
		redirect('Jurnal/Persetujuan');
	}
	// Apabila Proposal Ditolak maka akan menyimpan catatan di tabel proposal
	public function catatan(){
		$data 	= [
			'catatan_jurnal' 			=> $this->input->post('catatan'),
			'status_jurnal' 			=> $this->input->post('status')
		];
		$where 	= ['id_proposal'		=> $this->input->post('id_proposal')];
		//kalau form diisi dengan benar maka simpan data ke table user
		$this->M_jurnal->catatan($data, $where);
		redirect('Jurnal/Persetujuan');
	}
	// Detail Jurnal pada Direksi
	public function konfirmasi($id_proposal){
		$data = array(
			'title' 	=> 'Detail Jurnal',
			'Proposal' 	=> $this->M_jurnal->dir_detail($id_proposal),
			'Jurnal'	=> $this->M_jurnal->jurnal($id_proposal)
		);
		$this->template->display('Jurnal/Konfirmasi', $data);
	}
}