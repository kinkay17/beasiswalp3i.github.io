<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_model extends CI_Model
	{
		
		public function update_sekolah()
		{
			$data =[
				'kategori_sekolah' => $this->input->post('kategori_sekolah'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'blokir' => $this->input->post('is_active')
			];		
			$this->db->where('id_sekolah', $this->input->post('id_sekolah'));
			$this->db->update('master_sekolah',$data);
		}

		public function update_periode()
		{
			$data =[
				'tahun_pmb' => $this->input->post('tahun_pmb'),
				'ket' => $this->input->post('ket'),
				'target' => $this->input->post('target'),
				'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
				'tgl_pengumuman' => $this->input->post('tgl_pengumuman'),
				'status' => $this->input->post('status')
			];		
			$this->db->where('id_periode', $this->input->post('id_periode'));
			$this->db->update('master_periode',$data);
		}

		public function get_periode($id)
		{
			return $this->db->get_where('master_periode', ['id_periode' => $id])->row_array();
		}
		
			public function hapusdatamenu($id)
		{
						
			$this->db->where('id', $id);
			$this->db->delete('user_menu');
		}
		
		public function get_sekolah($id)
		{
			return $this->db->get_where('master_sekolah', ['id_sekolah' => $id])->row_array();
		}

		public function hapusdatasekolah($id)
		{
						
			$this->db->where('id_sekolah', $id);
			$this->db->delete('master_sekolah');
		}

		public function getsekolah()
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.id_sekolah, master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah";
			
			return $this->db->query($query)->result_array();
		}
		
		public function getsekolahom()
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.id_sekolah, master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah where biodata.prodi='Office Management'";
			
			return $this->db->query($query)->result_array();
		}

		public function getsekolahic()
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.id_sekolah, master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah where biodata.prodi='Informatic Computer'";
			
			return $this->db->query($query)->result_array();
		}

		public function getsekolahca()
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.id_sekolah, master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah where biodata.prodi='Computerized Accounting'";
			
			return $this->db->query($query)->result_array();
		}

		public function getsiswasekolah($id)
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.id_sekolah, master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah where biodata.id_sekolah='$id'";
			
			return $this->db->query($query)->result_array();
		}

		public function getsekolahid()
		{
			$query = "select biodata.id,biodata.nisn,biodata.nama,master_sekolah.nama_sekolah from biodata
			         join master_sekolah on biodata.id_sekolah = master_sekolah.id_sekolah";
			
			return $this->db->query($query)->num_rows();
		}

		public function getdetailsiswa($id)
		{
			return $this->db->get_where('biodata', ['id' => $id])->row_array();
		}
		
	}

?>