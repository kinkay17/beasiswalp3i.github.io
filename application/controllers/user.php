<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('siswa_model');			
	}
	
	public function index()
	{
		$data['title'] = 'My Profile';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('user/v_user', $data);
		$this->load->view('template/footer');
	}

	public function hasiltes()
	{
		$data['title'] = 'Hasil Tes';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$id = $this->session->userdata('nisn');
		$data['hasil'] = $this->siswa_model->gethasil($id);	


		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('user/v_hasiltes', $data);
		$this->load->view('template/footer');
	}
	
	public function edit_user()
	{
		$data['title'] = 'Edit Profile';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('nama','Full Name', 'required|trim');
		
		
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('user/v_edituser', $data);
		$this->load->view('template/footer');
		}else{
		$name = $this->input->post('nama');
		$email = $this->input->post('email');
		
		//cek jika ada gambar yang akan diupload
		$upload_image = $_FILES['image']['name'];
		
		if($upload_image){			
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assett/back-end/img/profile/';
			
			$this->load->library('upload', $config);
			
						
			if($this->upload->do_upload('image')){
				
				//cek gambar
				$hapus_gambar = $data['biodata']['image'];
				if($hapus_gambar != 'default.jpg'){					
					unlink(FCPATH.'assett/back-end/img/profile/' . $hapus_gambar);
				}
			
				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			}else{
				echo $this->upload->display_errors();
			}
		}

				
		
		$this->db->set('nama', $name);
		$this->db->where('email', $email);
		$this->db->update('biodata');
		
		$this->session->set_flashdata('message', '<div class="alert alert-success" 
		role="alert">Your profile has been updated!</div>');
		redirect('user');	
	
		}
	
	}
	
	public function changepassword()
	{
		$data['title'] = 'Change Password';
		$data['biodata'] = $this->db->get_where('biodata', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('currentpassword', 'Current Password','required|trim');
		$this->form_validation->set_rules('newpassword1', 'New Password','required|trim|min_length[6]|matches[newpassword2]');
		$this->form_validation->set_rules('newpassword2', 'Confirm New Password','required|trim|min_length[6]|matches[newpassword1]');
		
		if($this->form_validation->run() == false){
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('user/v_changepassword', $data);
		$this->load->view('template/footer');
		}else{
			$currentpassword = $this->input->post('currentpassword');
			$newpassword	= $this->input->post('newpassword1');
			if(!password_verify($currentpassword, $data['biodata']['password']))
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
				role="alert">Wrong current password!</div>');
				redirect('user/changepassword');	
			}else{
				if($currentpassword == $newpassword)
				{
				$this->session->set_flashdata('message', '<div class="alert alert-warning" 
				role="alert">New password cannot be the same as current password!</div>');
				redirect('user/changepassword');	
				}else{
				$password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
				
				$this->db->set('password',$password_hash);
				$this->db->where('email', $this->session->userdata('email'));
				$this->db->update('biodata');
				
				$this->session->set_flashdata('message', '<div class="alert alert-success" 
				role="alert">Password changed!</div>');
				redirect('user/changepassword');


				}
			}
		}
	}
		
	
	
	
}