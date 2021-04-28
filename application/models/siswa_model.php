<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model
	{
		public function gethasil($id)
		{
			$query = "select biodata.nisn,biodata.nama, biodata.prodi,biodata.tahapan, master_sekolah.nama_sekolah, nilai.keterangan, nilai.hari, nilai.jam from biodata
                     join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah 
                     join nilai on biodata.nisn = nilai.nisn where biodata.nisn='$id'";
			
			return $this->db->query($query)->row_array();
		}
		
	}

?>