<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model
	{

		public function get_kota($propinsi)
		{
		   $this->db->where('kategori_sekolah', $propinsi);
		   $get = $this->db->get('master_sekolah');
		   return $get;
		}
		
	}

?>