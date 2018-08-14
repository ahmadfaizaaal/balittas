<?php 
	class m_tembakau extends CI_Model{
// VARIETAS
		public function get_varietas(){			
			$sql = $this->db->query("SELECT *
								FROM varietas v
								JOIN deskripsi_varietas dsv ON v.id_varietas = dsv.id_varietas");
			return $sql->result_array();
		}		
		public function get_all_detail_varietas(){			
			$sql = $this->db->query("SELECT v.id_varietas,v.nama_varietas,a.id_atribut, dd.id_deskripsi_varietas, a.nama_atribut,dd.detail_value
								 FROM varietas v JOIN deskripsi_varietas dsv 
									 ON v.id_varietas = dsv.id_varietas JOIN detail_deskripsi dd
									 ON dsv.id_deskripsi_varietas = dd.id_deskripsi_varietas JOIN atribut a 
									 ON dd.id_atribut = a.id_atribut");
			return $sql->result_array();	
		}
		public function get_imgsk_varietas_byId($id){
			$sql = $this->db->query("SELECT file_SK, file_gambar FROM varietas WHERE id_varietas = \"$id\"");
			return $sql->result();
		}
		public function getAtribut() {			
			$sql = $this->db->query("SELECT nama_atribut FROM atribut order by id_atribut asc");
			return $sql->result();
		}
		public function getIdAtribut($namaAtribut) {			
			$sql = $this->db->query("SELECT id_atribut FROM atribut WHERE nama_atribut = \"$namaAtribut\"");
			$hasil = $sql->result();
			return $hasil[0]->id_atribut;
		}
		public function addAtribut($namaAtribut) {			
			$this->db->query("INSERT INTO atribut (id_atribut, nama_atribut) VALUES (\"\",\"$namaAtribut\")");
		}
		public function add_varietas($namaVarietas,$tglPelepasan, $tglUpload, $wktUpload, $sk,$gmbr){			
			$this->db->query("INSERT INTO varietas (id_varietas, nama_varietas, tanggal_pelepasan, tanggal_upload, waktu_upload, file_SK, file_gambar) VALUES (\"\",\"$namaVarietas\",\"$tglPelepasan\",\"$tglUpload\",\"$wktUpload\",\"$sk\",\"$gmbr\")");
		}
		public function add_deskripsi_varietas($des){			
			$this->db->query("INSERT INTO deskripsi_varietas(id_varietas, id_deskripsi_varietas, narasi) VALUES ((SELECT id_varietas FROM varietas ORDER BY id_varietas DESC LIMIT 1),\"\",\"$des\")");
		}
		public function add_detail_deskripsi($atribut,$value){					
			$this->db->query("INSERT INTO `detail_deskripsi`(`id_deskripsi_varietas`, `id_atribut`, `detail_value`) VALUES ((SELECT id_deskripsi_varietas FROM deskripsi_varietas ORDER BY id_deskripsi_varietas DESC LIMIT 1),\"$atribut\",\"$value\")");		
		}
		public function delete_varietas($id){			
			$sql = $this->db->query("DELETE FROM varietas WHERE id_varietas = "."'".$id."'");
		}

		public function updateVarietas($id,$namaVar,$tgl,$sk,$gmbr){			
			$this->db->query("UPDATE varietas SET `nama_varietas`= \"$namaVar\",`tanggal_pelepasan`= \"$tgl\",`file_SK`=\"$sk\",`file_gambar`= \"$gmbr\" WHERE `id_varietas` = \"$id\"");
		}

		// alternatif
		public function updateVarietasKecGmbr($id,$namaVar,$tgl,$sk){			
			$this->db->query("UPDATE varietas SET `nama_varietas`= \"$namaVar\",`tanggal_pelepasan`= \"$tgl\",`file_SK`=\"$sk\" WHERE `id_varietas` = \"$id\"");
		}
		public function updateVarietasKecSK($id,$namaVar,$tgl,$gmbr){			
			$this->db->query("UPDATE varietas SET `nama_varietas`= \"$namaVar\",`tanggal_pelepasan`= \"$tgl\",`file_gambar`= \"$gmbr\" WHERE `id_varietas` = \"$id\"");
		}
		public function updateVarietasTanpaFile($id,$namaVar,$tgl){			
			$this->db->query("UPDATE varietas SET `nama_varietas`= \"$namaVar\",`tanggal_pelepasan`= \"$tgl\" WHERE `id_varietas` = \"$id\"");
		}
		//
		public function updateDesVarietas($id,$des){			
			$this->db->query("UPDATE `deskripsi_varietas` SET `narasi`= \"$des\" WHERE `id_varietas` = \"$id\"");
		}
		public function updateDetailDeskripsi($idDes, $idAtr, $value) {			
			$this->db->query("UPDATE `detail_deskripsi` SET `detail_value`= \"$value\" WHERE `id_deskripsi_varietas` = \"$idDes\" AND `id_atribut` = \"$idAtr\"");
		}


// LEAFLET
		public function get_leaflet(){					
			$sql = $this->db->query("SELECT * FROM leaflet");
			return $sql->result_array();
		}
		public function get_leaflet_img(){				
			$sql = $this->db->query("SELECT * FROM gambar_leaflet");
			return $sql->result();
		}
		public function get_leaflet_img_byId($id){			
			$sql = $this->db->query("SELECT * FROM gambar_leaflet WHERE id_gambar = \"$id\"");
			return $sql->result();
		}
		public function get_leaflet_byId($id){				
			$sql = $this->db->query("SELECT * FROM gambar_leaflet WHERE id_leaflet = \"$id\"");
			return $sql->result();
		}
		public function add_leaflet_name($nama){					
			$sql = $this->db->query("INSERT INTO leaflet (id_leaflet,nama_leaflet) VALUES (\"\",\"$nama\")");			
		}
		public function add_leaflet_img($img){			
			$this->db->query("INSERT INTO gambar_leaflet(id_leaflet, id_gambar, file) VALUES ((SELECT id_leaflet FROM leaflet ORDER BY id_leaflet DESC LIMIT 1),\"\",\"$img\")");
		}
		public function updateLeafletName($id,$nama){			
			$this->db->query("UPDATE `leaflet` SET `nama_leaflet`= \"$nama\" WHERE `id_leaflet` = \"$id\"");
		}
		public function updateLeafletImg($id,$img){			
			$this->db->query("UPDATE `gambar_leaflet` SET `file`= \"$img\" WHERE `id_gambar` = \"$id\"");
		}
		public function delete_leaflet($id){			
			$sql = $this->db->query("DELETE FROM leaflet WHERE id_leaflet = \"$id\" ");
		}

// TEKNOLOGI BUDIDAYA
		public function get_tekbud(){					
			$sql = $this->db->query("SELECT * FROM teknologi_budidaya");
			return $sql->result_array();
		}
		public function get_tekbud_byId($id){						
			$sql = $this->db->query("SELECT * FROM teknologi_budidaya WHERE id_teknologi_budidaya = \"$id\"");
			return $sql->result();
		}
		public function add_teknologi($jenis,$des,$gambar){						
			$sql = $this->db->query("INSERT INTO teknologi_budidaya (id_teknologi_budidaya,jenis_teknologi_budidaya,deskripsi,gambar_tekno) VALUES (\"\",\"$jenis\",\"$des\",\"$gambar\")");			
		}		
		public function update_tekbud($id,$jenis,$deskripsi,$gambar){					
			$sql = $this->db->query("UPDATE `teknologi_budidaya` SET `jenis_teknologi_budidaya`= \"$jenis\",`deskripsi`= \"$deskripsi\",`gambar_tekno`= \"$gambar\" WHERE `id_teknologi_budidaya` = \"$id\"");		
		}
		public function update_tekbud_noimg($id,$jenis,$deskripsi){						
			$sql = $this->db->query("UPDATE `teknologi_budidaya` SET `jenis_teknologi_budidaya`= \"$jenis\",`deskripsi`= \"$deskripsi\" WHERE `id_teknologi_budidaya` = \"$id\"");			
		}	
		public function delete_tekbud($id){			
			$sql = $this->db->query("DELETE FROM teknologi_budidaya WHERE id_teknologi_budidaya = \"$id\" ");
		}
		
// TEKNOLOGI BUDIDAYA
		public function get_agri(){						
			$sql = $this->db->query("SELECT * FROM agribisnis");
			return $sql->result_array();
		}
		public function get_agri_byId($id){						
			$sql = $this->db->query("SELECT * FROM agribisnis WHERE id_agribisnis = \"$id\"");
			return $sql->result();
		}
		public function add_agribisnis($jenis,$des,$gambar){						
			$sql = $this->db->query("INSERT INTO agribisnis (id_agribisnis,jenis_agribisnis,deskripsi_agribisnis,gambar_agribisnis) VALUES (\"\",\"$jenis\",\"$des\",\"$gambar\")");			
		}
		public function update_agribisnis($id,$jenis,$deskripsi,$gambar){						
			$sql = $this->db->query("UPDATE `agribisnis` SET `jenis_agribisnis`= \"$jenis\",`deskripsi_agribisnis`= \"$deskripsi\",`gambar_agribisnis`= \"$gambar\" WHERE `id_agribisnis` = \"$id\"");		
		}
		public function update_agribisnis_noimg($id,$jenis,$deskripsi){						
			$sql = $this->db->query("UPDATE `agribisnis` SET `jenis_agribisnis`= \"$jenis\",`deskripsi_agribisnis`= \"$deskripsi\" WHERE `id_agribisnis` = \"$id\"");		
		}	
		public function delete_agribisnis($id){			
			$sql = $this->db->query("DELETE FROM agribisnis WHERE id_agribisnis = \"$id\" ");
		}	

// PRODUK BENIH
		public function get_benih(){						
			$sql = $this->db->query("SELECT * FROM benih");
			return $sql->result_array();
		}
		public function add_benih($nama,$stoksampai,$jumstok){			
			$sql = $this->db->query("INSERT INTO benih (id_benih,nama_benih,stok_sampai,jumlah_stok) VALUES (\"\",\"$nama\",\"$stoksampai\",\"$jumstok\")");			
		}
		public function update_benih($id,$namabenih,$stoksampai,$jumlahstok){						
			$sql = $this->db->query("UPDATE `benih` SET `nama_benih`= \"$namabenih\",`stok_sampai`= \"$stoksampai\",`jumlah_stok`= \"$jumlahstok\" WHERE `id_benih` = \"$id\"");		
		}
		public function delete_benih($id){			
			$sql = $this->db->query("DELETE FROM benih WHERE id_benih = \"$id\" ");
		}

		// DISTRIBUSI BENIH
		public function get_distribusi_benih(){				
			$sql = $this->db->query("SELECT db.id_distribusi,db.id_benih,b.nama_benih,db.tanggal,db.tahun_panen,db.kelas_benih,db.jumlah_kg,db.keterangan FROM benih b JOIN distribusi_benih db on b.id_benih = db.id_benih ORDER BY `db`.`id_distribusi` ASC");
			return $sql->result_array();
		}
		public function get_nama_benih() {			
			$sql = $this->db->query("SELECT nama_benih FROM benih ORDER BY id_benih ASC");
			return $sql->result();
		}
		public function get_id_nama_benih($nama) {			
			$sql = $this->db->query("SELECT id_benih FROM benih WHERE nama_benih = \"$nama\"");
			$hasil = $sql->result();
			return $hasil[0]->id_benih;
		}
		public function add_distribusi_benih($idbenih,$tgl,$thnpanen,$kelas,$jumlah,$ket){					
			$sql = $this->db->query("INSERT INTO distribusi_benih (id_distribusi,id_benih,tanggal,tahun_panen,kelas_benih,jumlah_kg,keterangan) VALUES (\"\",\"$idbenih\",\"$tgl\",\"$thnpanen\",\"$kelas\",\"$jumlah\",\"$ket\")");			
		}
		public function update_distribusi_benih($iddistribusi,$tgl,$thn,$kls,$jum,$ket){						
			$sql = $this->db->query("UPDATE `distribusi_benih` SET `tanggal`= \"$tgl\",`tahun_panen`= \"$thn\",`kelas_benih`= \"$kls\",`jumlah_kg`= \"$jum\",`keterangan`= \"$ket\" WHERE `id_distribusi` = \"$iddistribusi\"");		
		}
		public function delete_distribusi_benih($id){			
			$sql = $this->db->query("DELETE FROM distribusi_benih WHERE id_distribusi = \"$id\" ");
		}

	}
 ?>