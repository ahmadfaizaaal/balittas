<?php 	
	class m_varietas extends CI_Model
	{

		public function selectAllVarietas($sampai, $dari)
		{
	        $query = $this->db->select("*");
	        $query = $this->db->from("varietas v");
			$query = $this->db->join("deskripsi_varietas dsv", "v.id_varietas = dsv.id_varietas", "left");
			$query = $this->db->limit($sampai, $dari);
	        $query = $this->db->get();
	        return $query->result();
		}

		public function getVarietas($sampai, $dari) {
			$query = $this->db->get('varietas',$sampai,$dari);
   			return $query->result();
		}

		public function getJumlahVarietas() {
			$query = $this->db->select("*");
	        $query = $this->db->from("varietas v");
			$query = $this->db->join("deskripsi_varietas dsv", "v.id_varietas = dsv.id_varietas", "left");
	        $query = $this->db->get();
	        return $query->num_rows();
		}

		public function selectVarietasBy($kategori)
		{
	        $query = $this->db->select("v.id_varietas, v.nama_varietas, det.detail_value");
	        $query = $this->db->from("varietas v");
			$query = $this->db->join("deskripsi_varietas dsv", "v.id_varietas = dsv.id_varietas", "left");
			$query = $this->db->join("detail_deskripsi det", "dsv.id_deskripsi_varietas = det.id_deskripsi_varietas", "left");
			$query = $this->db->join("atribut atr", "atr.id_atribut = det.id_atribut", "left");
			$query = $this->db->where("atr.nama_atribut", $kategori);
	        $query = $this->db->get();
	        return $query->result();
		}
	}
 ?>