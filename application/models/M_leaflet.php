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
        	$query = $this->db->limit(14);
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
        // function get_foto_user($user){
        //     $query = $this->db->where('foto.member',$user);
        //     $query = $this->db->join('member', 'member.username = foto.member', 'left');
        //     $query = $this->db->order_by("tanggal", "desc");
        //     $query = $this->db->get('foto');
        //     return $query->result();
        // }
        // function simpanData($data){
        //     $this->db->insert('foto', $data); 
        // }
        // function editData($data,$idFoto){
        //     $query = $this->db->where('idFoto',$idFoto);
        //     $query = $this->db->update('foto',$data);
        // }
        // function hapusData($idFoto){
        //     $query = $this->db->where('idFoto', $idFoto);
        //     $query = $this->db->delete('foto'); 
        // }
        // function totalFoto($username){
        //     $query = $this->db->where('member', $username);
        //     $query = $this->db->from('foto');
        //     $query = $this->db->count_all_results();
        //     return $query;
        // }
    }
 ?>