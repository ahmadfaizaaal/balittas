<?php 	
	class varietas extends CI_Controller
	{
		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
			$this->load->model('m_varietas');
		}

		public function asalUsul(){
			$data['kategori'] = "Asal-usul";
			$data['dataJenisTembakau'] = $this->m_varietas->selectVarietasBy("Asal");
			$this->load->view('HalamanJenisTembakau', $data);
		}

		public function jenisKegunaan(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisWaktu(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function daerahPengembangan(){
			$data['kategori'] = "Daerah Pengembangan";
			$data['dataJenisTembakau'] = $this->m_varietas->selectVarietasBy("Daerah pengembangan");
			$this->load->view('HalamanJenisTembakau', $data);
		}

		public function jenisProsesing(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function detailVarietas(){
			$this->load->view('HalamanDetailVarietas');
		}
	}
 ?>