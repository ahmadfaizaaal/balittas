<?php 
	class m_tembakau extends CI_Model{

		public function get_varietas(){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("SELECT v.id_varietas,v.nama_varietas, dsv.narasi, v.tanggal_diterbitkan,v.file_SK, v.file_gambar
								FROM varietas v
								JOIN deskripsi_varietas dsv ON v.id_varietas = dsv.id_varietas");
			return $sql->result_array();
		}

		public function delete_varietas($id){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("DELETE FROM varietas WHERE id_varietas = $id");
		}

		public function get_leaflet(){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("SELECT l.nama_leaflet, g.file FROM leaflet l join gambar_leaflet g
								on l.id_leaflet = g.id_leaflet");
			return $sql->result_array();
		}

	}
 ?>