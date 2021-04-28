<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('master_model');			
	}
	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		//select biodata prodi om
		$data['om'] = $this->db->get_where('biodata', ['prodi' => 'Office Management'])->num_rows();
		$data['ca'] = $this->db->get_where('biodata', ['prodi' => 'Computerized Accounting'])->num_rows();
		$data['ic'] = $this->db->get_where('biodata', ['prodi' => 'Informatic Computer'])->num_rows();
		$data['all'] = $this->master_model->getsekolahid();

		//select data grapchik
		//$data['siswa'] = $this->master_model->getsekolah();		
		//$data['msekolah'] = $this->db->get('master_sekolah')->result_array();		
		$data['msekolah'] = $this->db->get('master_sekolah')->result_array();
		$data['tahap'] = $this->db->get('master_periode')->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/v_admin', $data);
		$this->load->view('template/footer');
	}

	public function dataom()
	{
		$data['title'] = 'Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['siswa'] = $this->db->get_where('biodata', ['prodi' => 'Office Management'])->row_array();
		$data['siswa'] = $this->master_model->getsekolahom();	
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
	}
	
	public function dataic()
	{
		$data['title'] = 'Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['siswa'] = $this->db->get_where('biodata', ['prodi' => 'Office Management'])->row_array();
		$data['siswa'] = $this->master_model->getsekolahic();	
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
	}

	public function siswasekolah()
	{
		$data['title'] = 'Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();

		$id = $this->input->get('id');
		$data['siswa'] = $this->master_model->getsiswasekolah($id);	
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
	}
	
	public function dataca()
	{
		$data['title'] = 'Siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['siswa'] = $this->db->get_where('biodata', ['prodi' => 'Office Management'])->row_array();
		$data['siswa'] = $this->master_model->getsekolahca();	
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
    }
	
	public function role()
	{
		$data['title'] = 'Role';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$data['role'] = $this->db->get('user_role')->result_array();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/v_role', $data);
		$this->load->view('template/footer');
	}
	
	public function roleaccess($id)
	{
		$data['title'] = 'Role Access';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$data['role'] = $this->db->get_where('user_role', ['id' => $id] )->row_array();
		
		$this->db->where('id !='. 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/v_roleaccess', $data);
		$this->load->view('template/footer');
	}
	
	public function changeaccess()
	{
		
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');
		
		$data = [
			'role_id'=> $role_id,
			'menu_id'=> $menu_id
		];
		
		$result = $this->db->get_where('user_access_menu', $data);
		
		if($result->num_rows() < 1){
		$this->db->insert('user_access_menu', $data);
		}else{
		$this->db->delete('user_access_menu', $data);	
		}
		
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Access Changed!</div>');
		redirect('admin/roleaccess');	
	
	}
	
	
}