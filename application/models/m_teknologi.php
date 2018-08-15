<?php 
	class m_teknologi extends CI_Model
	{

		public function selectTeknologi() {
			$query = $this->db->get('teknologi_budidaya');
   			return $query->result();
		}

		public function selectTeknologiById($idTeknologi) {
			$query = $this->db->select('*');
			$query = $this->db->from('teknologi_budidaya');
			$query = $this->db->where('id_teknologi_budidaya', $idTeknologi);
			$query = $this->db->get();
			return $query->result();
		}

		public function selectFileByIdTeknologi($idTeknologi) {
			$query = $this->db->select('*');
			$query = $this->db->from('file_teknologi');
			$query = $this->db->where('id_teknologi_budidaya', $idTeknologi);
			$query = $this->db->get();
			return $query->result();
		}

		public function selectIdTeknologiByJenis($jenis) {
			$query = $this->db->select('id_teknologi_budidaya');
			$query = $this->db->from('teknologi_budidaya');
			$query = $this->db->where('jenis_teknologi_budidaya', $jenis);
			$query = $this->db->get();
			$hasil = $query->result();
			return $hasil[0]->id_teknologi_budidaya;
		}

		public function pencarianTeknologi($cari){
			$sql = $this->db->query("SELECT DISTINCT t.id_teknologi_budidaya,t.jenis_teknologi_budidaya, t.deskripsi FROM file_teknologi f join teknologi_budidaya t on f.id_teknologi_budidaya = t.id_teknologi_budidaya WHERE t.jenis_teknologi_budidaya LIKE \"%$cari%\" OR t.deskripsi LIKE \"%$cari%\" OR f.nama_file LIKE \"%$cari%\" OR f.deskripsi_file LIKE \"%$cari%\"");
			return $sql->result_array();
		}

	} 
?>