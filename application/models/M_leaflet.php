<?php 
class M_leaflet extends CI_Model{
        function selectLeafletPerPage($sampai, $dari){
	        $query = $this->db->select('*');
            $query = $this->db->from('leaflet');
            $query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
            $query = $this->db->limit($sampai, $dari);
	        $query = $this->db->get();
	        return $query->result();
        }

        function selectLeafletTerbaru() {
        	$query = $this->db->limit(12);
        	$query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
	        $query = $this->db->from('leaflet');
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->get();
	        return $query->result();
        }

        public function getJumlahLeaflet() {
            $query = $this->db->select('*');
            $query = $this->db->from('leaflet');
            $query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
            $query = $this->db->get();
            return $query->num_rows();
        }       
    }
 ?>