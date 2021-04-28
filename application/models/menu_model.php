<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model
	{
		public function getSubMenu()
		{
			$query = "select user_sub_menu.id,user_sub_menu.menu_id,user_sub_menu.title,user_sub_menu.url,user_sub_menu.icon,user_sub_menu.is_active, user_menu.menu from user_sub_menu
			         join user_menu on user_sub_menu.menu_id =user_menu.id";
			
			return $this->db->query($query)->result_array();
		}
				
		public function update_menu()
		{
			$data = [
			"menu" => $this->input->post('menu')
			];
			
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('user_menu',$data);
		}
		
		public function update_submenu()
		{
			$data = [
			'title' => $this->input->post('title'),
			'menu_id' => $this->input->post('menu_id'),
			'icon' => $this->input->post('icon'),
			'url' => $this->input->post('url'),
			'is_active' => $this->input->post('is_active')
			];			
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('user_sub_menu',$data);
		}
		
			public function hapusdatamenu($id)
		{
						
			$this->db->where('id', $id);
			$this->db->delete('user_menu');
		}
		
		public function getmenu($id)
		{
			return $this->db->get_where('user_menu', ['id' => $id])->row_array();
		}
		
		public function get_submenu($id)
		{
			return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
		}
		
	}

?>