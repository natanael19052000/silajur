<?php 
 
class Proposal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_proposal');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data = array( 'title' => 'Proposal',
						'Proposal' => $this->M_proposal->getAll() );              

		$this->template->display('Proposal/daftar',$data); 
	}

	function tambah(){
		$data = array( 'title' => 'Tambah Proposal');
		
		$this->template->display('proposal/tambah',$data);
	}

	function add(){
		$data = ['id_proposal'	=> $this->input->post('id_proposal'),
				 'nip'			=> $this->input->post('nip'),
	        	 'agenda'		=> $this->input->post('agenda'),
	        	 'tgl_agenda'	=> $this->input->post('tgl_agenda'),
	        	 'berita_acara'	=> $this->input->post('berita_acara'),
				];

	    //kalau form diisi dengan benar maka simpan data ke table user
		$this->M_proposal->create($data);
		
		redirect('Proposal');
	}

	function detail(){
		$data = array( 'title' => 'Detail Proposal');
		
		$this->template->display('proposal/detail',$data);
	}

	function persetujuan(){
		$data = array( 'title' => 'Persetujuan Proposal');
		
		$this->template->display('proposal/persetujuan',$data);
	}
}