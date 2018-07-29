<?php 	
	class varietas extends CI_Controller
	{
		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
			$this->load->model('m_varietas');
			$this->load->model('M_leaflet');
		}

		public function asalUsul(){
			$dataHeader['judul'] = "Jenis Tembakau";
			$data['kategori'] = "Asal-usul";
			$data['dataJenisTembakau'] = $this->m_varietas->selectVarietasBy("Asal");

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanJenisTembakau', $data);
			$this->load->view('footer');
		}

		public function jenisKegunaan(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisWaktu(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function daerahPengembangan(){
			$dataHeader['judul'] = "Jenis Tembakau";
			$data['kategori'] = "Daerah Pengembangan";
			$data['dataJenisTembakau'] = $this->m_varietas->selectVarietasBy("Daerah pengembangan");
			
			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanJenisTembakau', $data);
			$this->load->view('footer');
		}

		public function jenisProsesing(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function detailVarietas($namaVarietas){
			$dataHeader['judul'] = "Detail Varietas";
			$idVarietas = $this->m_varietas->selectIdByNamaVarietas(urldecode($namaVarietas));
			
			$data['varietas'] = $this->m_varietas->selectVarietasById($idVarietas);
			$data['detailVarietas'] = $this->m_varietas->selectDetailVarietas($idVarietas);
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailVarietas', $data);
			$this->load->view('footer');
		}
	}
 ?>