<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		cek_login();
		$this->load->model('master_model');	
	}
		
	
	public function index()
	{
		$data['title'] = 'Sekolah';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//select table
		$data['sekolah'] = $this->db->get('master_sekolah')->result_array();
		//validasi form		
		$this->form_validation->set_rules('kategori_sekolah','Kategori Sekolah','required');
		$this->form_validation->set_rules('nama_sekolah','Nama Sekolah','required');
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_sekolah', $data);
		$this->load->view('template/footer');
		}else{
		$data =[
			'kategori_sekolah' => $this->input->post('kategori_sekolah'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'blokir' => $this->input->post('is_active')
		   ];
		  $this->db->insert('master_sekolah', $data);
		  $this->session->set_flashdata('message', '<div class="alert alert-success" 
		  role="alert">New School added!</div>');
		  redirect('master/index');
		}	
	}
	
	public function periode()
	{
		$data['title'] = 'Periode';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//select table
		$data['periode'] = $this->db->get('master_periode')->result_array();

		//select periode
			
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_periode', $data);
		$this->load->view('template/footer');
			
		
	}
	
	public function edit_periode()
	{
		$data['title'] = 'Edit Periode';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//select table
		$id = $this->input->get('id');
		$data['editperiode'] = $this->master_model->get_periode($id);

		//select periode
			
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_editperiode', $data);
		$this->load->view('template/footer');

		//proses update
		$this->form_validation->set_rules('target','target','trim|required|numeric',['numeric' => 'This target numerik only!']); 
			//form validasi
		$this->form_validation->set_rules('tahun_pmb','Tahun PMB','required');
		$this->form_validation->set_rules('ket','Keterangan','required');
		$this->form_validation->set_rules('tgl_pelaksanaan','Tanggal Pelaksanaan','required');
		$this->form_validation->set_rules('tgl_pengumuman','Tanggal Pengumuman','required');
		$this->form_validation->set_rules('status','status','required');
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_editperiode', $data);
		$this->load->view('template/footer');
		}else{
			$this->master_model->update_periode();
			$this->session->set_flashdata('message', '<div class="alert alert-warning" 
			role="alert">Periode has edited!</div>');
			redirect('master/periode');
		}
			
		
    }
    
    public function siswa()
	{
		$data['title'] = 'Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//select table
		//$data['siswa'] = $this->db->get('biodata')->result_array();
		$data['siswa'] = $this->master_model->getsekolah();		

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
	}
	
	    
    public function hasil()
	{
		$data['title'] = 'Hasil Tes';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['siswa'] = $this->master_model->getsekolah();		
		$data['hasil'] = $this->db->get('nilai')->result_array();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_hasil', $data);
		$this->load->view('template/footer');
	}

	public function edit_sekolah()
	{
		$data['title'] = 'Sekolah';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//dapat id
		$id = $this->input->get('id');
		$data['editsekolah'] = $this->master_model->get_sekolah($id);

		//proses update
		$this->form_validation->set_rules('kategori_sekolah','Kategori Sekolah','required');
		$this->form_validation->set_rules('nama_sekolah','Nama Sekolah','required');
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_editsekolah', $data);
		$this->load->view('template/footer');
		}else{
			$this->master_model->update_sekolah();
			$this->session->set_flashdata('message', '<div class="alert alert-warning" 
			role="alert">School has been edited!</div>');
			redirect('master/index');
		}
	}

	public function hapus_sekolah()
	{
		$data['title'] = 'Hapus Sekolah';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => $this->session->userdata('email')])->row_array();
		
		//hapus sekolah
		$id = $this->input->get('id');
		$this->master_model->hapusdatasekolah($id);		

		$this->session->set_flashdata('message', '<div class="alert alert-danger" 
		  role="alert">School has been deleted!</div>');
		  redirect('master/index');
				
		
	}

	public function detail_siswa()
	{
		$data['title'] = 'Profil Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//dapat id
		$id = $this->input->get('id');
		$data['detailsiswa'] = $this->master_model->getdetailsiswa($id);
		//select sekolah
		$data['msekolah'] = $this->db->get('master_sekolah')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_detailsiswa', $data);
		$this->load->view('template/footer');
		
	}
	
	
}