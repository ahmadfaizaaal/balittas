<?php
Class C_data extends CI_Controller{
	public function index(){
		$this->load->model("m_data");
		$data['jarak_pagar'] = $this->m_data->load_jarakpagar();
		$this->load->view("v_admin",$data);
		
	}
	public function tembakau(){
		$this->load->model("m_data");
		$this->load->model("m_tembakau");
		$data['jarak_pagar'] = $this->m_data->load_jarakpagar();
		$data['varietas_tembakau'] = $this->m_tembakau->get_varietas();
		$data['leaflet'] = $this->m_tembakau->get_leaflet();
		$this->load->view("v_admin_tembakau",$data);
	}
	public function deleteVarietas($id){			
		$this->load->model("m_tembakau");
		$this->m_tembakau->delete_varietas($id);
		redirect(base_url('c_data/tembakau'));
	}
	public function tambahVarietas(){
		$this->load->model("m_tembakau");

		date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d'); 
        $wkt = date('H:i');		

		$namaVarietas = $this->input->post('namaVarietas');
		$gambar = $this->input->post('gambar');
		$sk = $this->input->post('sk');

		$deskripsi = $this->input->post('deskripsi');
					
		$this->m_tembakau->add_varietas($namaVarietas,$tgl,$sk,$gambar);
		$this->m_tembakau->add_deskripsi_varietas($deskripsi);

		for ($i=0; $i <$this->input->post('temp') ; $i++) { 
			$this->m_tembakau->add_detail_deskripsi($this->input->post('atribut'."$i"),$this->input->post('value'."$i"));
		}
		
		redirect(base_url('c_data/tembakau'));	
	}
	public function tambah(){
		$this->load->model("m_data");
		$data['tipe'] = "Tambah";
		if(isset($_POST['tombol_submit'])){
			$this->m_data->simpan($_POST);
			redirect("c_data");
		}
		// $this->load->view("v_admin",$data);
		$this->load->view("form_jarakpagar",$data);
	}
	public function ubah($id){
		$this->load->model("m_data");
		$data['tipe'] = "Ubah";
		$data['default'] = $this->m_data->get_default($id);
		if(isset($_POST['tombol_submit'])){
			$this->m_data->ubah($_POST, $id);
			redirect("c_data");
		}
		$this->load->view("form_jarakpagar",$data);
	}
	public function hapus($id){
		$this->load->model("m_data");
		$this->m_data->hapus($id);
		redirect("c_data");
	}
}