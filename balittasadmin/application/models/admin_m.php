<?php 
class Admin_m extends CI_Model{
	function tampil_data(){
		return $this->db->get('jarak_pagar');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}