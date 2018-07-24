<?php 
class M_leaflet extends CI_Model{
        function selectLeafletAll(){
	        $query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
	        $query = $this->db->from('leaflet');
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->get();
	        return $query->result();
        }
        function selectTop4Leaflet() {
        	$query = $this->db->limit(8);
        	$query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
	        $query = $this->db->from('leaflet');
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->get();
	        return $query->result();
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