<?php 
 
class Jurnal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		// Memanggil Model
		$this->load->model('M_jurnal');
		$this->load->model('M_proposal');
		// Memanggil Library
		$this->load->library('upload');
		// MElakukan verifikasi Login ke semua Halaman
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	// Halaman daftar Proposal
	function index(){
		$data = array(
			'title' 		=> 'Jurnal',
			'Proposal' 		=> $this->M_jurnal->getAll());
        
        $this->template->display('jurnal/Daftar',$data);
	}

	// Menampilkan detail Proposal dan upload Proposal
	function detail($id_proposal = null){
		$data = array('title' 		=> 'Detail',
						'Proposal' 	=> $this->M_jurnal->proposal($id_proposal),
						'Jurnal' 	=> $this->M_jurnal->jurnal($id_proposal));
		$this->template->display('jurnal/Detail', $data);
	}

	// Mengupload File Proposal
	function do_upload(){
		$nama = $this->input->post('agenda');
		$config['upload_path']          = './assets/uploads/Jurnal/';
		$config['allowed_types']        = 'pdf|doc|docx|rar';
		$config['max_size']             = 10000; // 10 MB
		$config['file_name'] = time() . '-' . date("Ymd") . '-Jurnal-' . $nama;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('dok_jurnal')) {
			$data = ['dok_jurnal'	=> $this->upload->data('file_name'),
					'nip_jurnal' => $this->session->userdata('nip')];
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
		$data = file_get_contents('./assets/uploads/Jurnal/' . $jurnal);
		force_download($name, $data);
		redirect('Proposal');
	}


	function persetujuan(){
		$data = array( 'title' => 'Persetujuan Jurnal',
			'Jurnal' 	=> $this->M_jurnal->direksi());
		
		$this->template->display('jurnal/Persetujuan',$data);
	}

	// Detail Jurnal pada Direksi
	public function konfirmasi($id_proposal)
	{
		$data = array(
			'title' => 'Detail Jurnal',
			'Proposal' => $this->M_jurnal->dir_detail($id_proposal),
			'Jurnal'	=> $this->M_jurnal->jurnal($id_proposal)
		);
		$this->template->display('Jurnal/Konfirmasi', $data);
	}
}