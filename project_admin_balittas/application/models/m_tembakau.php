<?php 
	class m_tembakau extends CI_Model{

		public function get_varietas(){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("SELECT v.id_varietas,v.nama_varietas, dsv.narasi, v.tanggal_diterbitkan,v.file_SK, v.file_gambar
								FROM varietas v
								JOIN deskripsi_varietas dsv ON v.id_varietas = dsv.id_varietas");
			return $sql->result_array();
		}
		// public function get_one_varietas($id){
		// 	$db2 = $this->load->database('dB2',TRUE);
		// 	$sql = $db2->query("SELECT v.id_varietas,v.nama_varietas, dsv.narasi, v.tanggal_diterbitkan,v.file_SK, v.file_gambar
		// 						FROM varietas v
		// 						JOIN deskripsi_varietas dsv ON v.id_varietas = dsv.id_varietas 
		// 						WHERE v.id_varietas = \"$id\"");
		// 	return $sql->result_array();
		// }
		public function add_varietas($namaVarietas,$tgl,$sk,$gmbr){
			$db2 = $this->load->database('dB2',TRUE);
			$db2->query("INSERT INTO varietas (id_varietas, nama_varietas, tanggal_diterbitkan, file_SK, file_gambar) VALUES (\"\",\"$namaVarietas\",\"$tgl\",\"$sk\",\"$gmbr\")");
		}
		public function add_deskripsi_varietas($des){
			$db2 = $this->load->database('dB2',TRUE);
			$db2->query("INSERT INTO deskripsi_varietas(id_varietas, id_deskripsi_varietas, narasi) VALUES ((SELECT id_varietas FROM varietas ORDER BY id_varietas DESC LIMIT 1),\"\",\"$des\")");
		}
		public function add_detail_deskripsi($atribut,$value){
			$db2 = $this->load->database('dB2',TRUE);			
			$db2->query("INSERT INTO `detail_deskripsi`(`id_deskripsi_varietas`, `id_atribut`, `detail_value`) VALUES ((SELECT id_deskripsi_varietas FROM deskripsi_varietas ORDER BY id_deskripsi_varietas DESC LIMIT 1),\"$atribut\",\"$value\")");		
		}

		public function delete_varietas($id){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("DELETE FROM varietas WHERE id_varietas = "."'".$id."'");
		}

		public function get_leaflet(){
			$db2 = $this->load->database('dB2',TRUE);
			$sql = $db2->query("SELECT l.nama_leaflet, g.file FROM leaflet l join gambar_leaflet g
								on l.id_leaflet = g.id_leaflet");
			return $sql->result_array();
		}

	}
 ?>