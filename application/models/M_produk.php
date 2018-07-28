<?php 	
	class M_produk extends CI_Model
	{

		public function selectBenihAll()
		{
	        $query = $this->db->select("v.id_varietas, b.id_benih, v.nama_varietas, b.persediaan_sampai, b.jumlah_gr");
	        $query = $this->db->from("benih_varietas b");
			$query = $this->db->join("varietas v", "v.id_varietas = b.id_varietas");
			// $query = $this->db->where("atr.nama_atribut", $kategori);
	        $query = $this->db->get();
	        return $query->result();
		}
	}
 ?>