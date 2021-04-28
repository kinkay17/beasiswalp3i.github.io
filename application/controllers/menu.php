<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('menu_model');	
		$this->load->library('form_validation');	
	}
		
	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$data['menu'] = $this->db->get('user_menu')->result_array();
		
		$this->form_validation->set_rules('menu','Menu','required');
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('menu/v_menu', $data);
		$this->load->view('template/footer');
		}else{
		$this->db->insert('user_menu',['menu' => $this->input->post('menu')]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" 
		role="alert">New menu added!</div>');
		redirect('menu');	
		}
	}
	
	public function edit_menu()
	{
		$data['title'] = 'Edit Menu Management';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => $this->session->userdata('email')])->row_array();
		
		$id = $this->input->get('id');
		$data['editmenu'] = $this->menu_model->getmenu($id);
		
		$this->form_validation->set_rules('menu','Menu','required');
		
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('menu/v_editmenu', $data);
		$this->load->view('template/footer');
		}else{
		$this->menu_model->update_menu();
		$this->session->set_flashdata('message', '<div class="alert alert-warning" 
		role="alert">Menu has been edited!</div>');
		redirect('menu/index');
		}
	}
	
	
	
	public function delete_menu()
	{
		$data['title'] = 'Edit Menu Management';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => $this->session->userdata('email')])->row_array();
		
		
		$id = $this->input->get('id');
		$this->load->model('menu_model');
		$this->menu_model->hapusdatamenu($id);
		$this->menu_model->update_menu();
		
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has deleted!</div>');
		redirect('menu/index');		
	}
	
	public function submenu(){
		$data['title'] = 'Submenu Management';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();	
		
		//memanggil model
		$data['subMenu'] = $this->menu_model->getSubMenu();		
		$data['menu'] = $this->db->get('user_menu')->result_array();
		
		//validasi form
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('menu_id','Menu_Id','required');
		$this->form_validation->set_rules('icon','Icon','required');
		$this->form_validation->set_rules('url','Url','required');
		
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('menu/v_submenu', $data);
		$this->load->view('template/footer');
		}else{
			$data =[
			 'title' => $this->input->post('title'),
			 'menu_id' => $this->input->post('menu_id'),
			 'icon' => $this->input->post('icon'),
			 'url' => $this->input->post('url'),
			 'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" 
			role="alert">New Submenu added!</div>');
			redirect('menu/submenu');	
		}
	}
	
	public function edit_submenu()
	{
		$data['title'] = 'Edit Menu Management';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => $this->session->userdata('email')])->row_array();
		
		$id = $this->input->get('id');
				
	    //memanggil model		
		$data['editsubmenu'] = $this->menu_model->get_submenu($id);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		
		
			
		//validasi form
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('menu_id','Menu_Id','required');
		$this->form_validation->set_rules('icon','Icon','required');
		$this->form_validation->set_rules('url','Url','required');		
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('menu/v_editsubmenu', $data);
		$this->load->view('template/footer');
		}else{
		$this->menu_model->update_submenu();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SubMenu has edited!</div>');
		redirect('menu/submenu');	
			
		}
	}

	public function siswa()
	{
		$data['title'] = 'siswa';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('sekolah/v_siswa', $data);
		$this->load->view('template/footer');
	}
	
	
}