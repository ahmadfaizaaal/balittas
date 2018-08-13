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
			return $query->result();
		}

		public function selectFileByIdTeknologi($idTeknologi) {
			$query = $this->db->select('*');
			$query = $this->db->from('file_teknologi');
			$query = $this->db->where('id_teknologi_budidaya', $idTeknologi);
			return $query->result();
		}

		public function selectIdTeknologiByJenis($jenis) {
			$query = $this->db->select('id_teknologi_budidaya');
			$query = $this->db->from('teknologi_budidaya');
			$query = $this->db->where('jenis_teknologi_budidaya', $jenis);
			$hasil = $query->result();
			return $hasil[0]->id_teknologi_budidaya;
		}

	} 
?>