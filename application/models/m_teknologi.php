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
			$sql = $this->db->query("SELECT t.id_teknologi_budidaya,t.jenis_teknologi_budidaya,f.id_file,f.nama_file,f.deskripsi_file,f.file FROM file_teknologi f join teknologi_budidaya t on f.id_teknologi_budidaya = t.id_teknologi_budidaya where jenis_teknologi_budidaya = \"$cari\"");
			return $sql->result_array();
		}

	} 
?>